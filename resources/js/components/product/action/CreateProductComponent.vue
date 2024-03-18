<template>
    <div class="w-full">
        <h1 class="font-bold text-lg md:text-2xl uppercase">Buat Produk</h1>
        <h2 class="font-thin text-sm md:text-lg mb-2">
            Tambahkan Produk ke Sistem
        </h2>
        <hr class="w-full text-slate-200 mb-4" />
        <div class="w-full">
            <form class="mx-auto">
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="text"
                        name="name_produk"
                        id="name_produk"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="name_produk"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Nama Produk</label
                    >
                </div>
                <label
                    for="category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Select an option</label
                >
                <select
                    id="category"
                    name="kategori_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                    <option selected disabled>-- PILIH KATEGORI --</option>

                    <option
                        v-for="item in categoryAll"
                        :key="item.id"
                        value="US"
                    >
                        {{ item.name_kategori }}
                    </option>
                </select>
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="text"
                        name="kode_produk"
                        id="kode_produk"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="kode_produk"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Kode Produk</label
                    >
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="text"
                        name="merk"
                        id="merk"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="merk"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Merk</label
                    >
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="number"
                        name="harga_beli"
                        id="harga_beli"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="harga_beli"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Harga beli</label
                    >
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="number"
                        name="diskon"
                        id="diskon"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="diskon"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Diskon</label
                    >
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="number"
                        name="harga_jual"
                        id="harga_jual"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="harga_jual"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Harga Jual</label
                    >
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="number"
                        name="stok"
                        id="srtok"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=""
                        required
                    />
                    <label
                        for="srtok"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Stok</label
                    >
                </div>
                <button
                    type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                >
                    Tambahkan
                </button>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            categoryAll: {},
        };
    },
    methods: {
        getCategory() {
            axios
                .get("/api/home/category/get")
                .then(({ data }) => (this.categoryAll = data));
        },
    },
    created() {
        this.getCategory();
    },
};
</script>
