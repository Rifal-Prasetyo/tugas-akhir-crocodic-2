<template>
    <div class="w-full">
        <h1 class="font-bold text-lg md:text-2xl uppercase">PRODUK</h1>
        <h2 class="font-thin text-sm md:text-lg mb-2">
            Semua Informasi produk muncul disini
        </h2>
        <hr class="w-full text-slate-200 mb-4" />
        <div class="w-full">
            <div class="w-full flex justify-end mb-4">
                <router-link
                    to="/home/produk/create"
                    type="button"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                >
                    Tambah Produk
                </router-link>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div
                    class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-end pb-4"
                >
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none"
                        >
                            <svg
                                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="table-search"
                            class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items"
                        />
                    </div>
                </div>
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Produk</th>
                            <th scope="col" class="px-6 py-3">kategori</th>
                            <th scope="col" class="px-6 py-3">Kode Produk</th>
                            <th scope="col" class="px-6 py-3">Merk</th>
                            <th scope="col" class="px-6 py-3">Harga Beli</th>
                            <th scope="col" class="px-6 py-3">Diskon</th>
                            <th scope="col" class="px-6 py-3">Harga Jual</th>
                            <th scope="col" class="px-6 py-3">Stok</th>
                            <th scope="col" class="px-6 py-3">
                                Ditambahkan pada
                            </th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody v-for="produk in dataProductAll" :key="produk.id">
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                        >
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                                {{ produk.nama_produk }}
                            </th>
                            <td class="px-6 py-4">
                                {{ produk.kategori.name_kategori }}
                            </td>
                            <td class="px-6 py-4">{{ produk.kode_produk }}</td>
                            <td class="px-6 py-4">{{ produk.merk }}</td>
                            <td class="px-6 py-4">{{ produk.harga_beli }}</td>
                            <td class="px-6 py-4">{{ produk.diskon }}</td>
                            <td class="px-6 py-4">{{ produk.harga_jual }}</td>
                            <td class="px-6 py-4">{{ produk.stok }}</td>
                            <td class="px-6 py-4">{{ produk.created_at }}</td>
                            <td class="px-6 py-4">
                                <router-link
                                    to="/home/produk/edit/{{ produk.id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    >Edit</router-link
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import { data } from "autoprefixer";

export default {
    data() {
        return {
            dataProductAll: {},
        };
    },
    methods: {
        getAllProductData() {
            axios
                .get("/api/home/allProduct")
                .then(({ data }) => (this.dataProductAll = data));
        },
    },
    created() {
        this.getAllProductData();
    },
};
</script>
