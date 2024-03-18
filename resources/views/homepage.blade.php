<x-layout.header :site="$site" />
<div class="w-full h-screen">
    {{-- Navbar  --}}
    <x-components.navbar />
    {{-- Sidebar  --}}
    <div class="w-full h-screen flex" id="app">
        <div class=" bg-primary h-screen w-[300px]">
            <div class=" flex flex-col px-4 h-screen ">
                <div class="w-full  rounded text-teks-primary flex gap-4 items-center px-4 mb-8 mt-24">
                    <img src="{{ auth()->user()->picture_url }}" alt="profile Picture" srcset=""
                        class="w-14 h-14 rounded-full object-cover">
                    <div class="">
                        <span class=" text-sm md:text-lg font-semibold">
                            {{ auth()->user()->name }}
                        </span>
                        <span class="text-sm md:text-lg font-thin block ">
                            {{ auth()->user()->role }}
                        </span>
                    </div>
                </div>
                <hr class="w-full text-slate-200">
                <div class=" text-teks-primary mt-4 ">
                    <span class=" text-sm md:text-lg font-thin">
                        Navigasi
                    </span>
                    <ul>
                        <li>
                            <router-link to="/home"
                                class="px-4 py-2 rounded hover:bg-accent mb-2 flex items-center justify-start gap-4">
                                <i class="fa-solid fa-house text-lg"></i>
                                <span class="text-sm md:text-lg font-medium block ">
                                    Beranda
                                </span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/home/produk"
                                class="px-4 py-2 rounded hover:bg-accent mb-2 flex items-center justify-start gap-4">
                                <i class="fa-solid fa-book text-lg"></i>
                                <span class="text-sm md:text-lg font-medium block ">
                                    Produk
                                </span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/home/kategori"
                                class="px-4 py-2 rounded hover:bg-accent mb-2 flex items-center justify-start gap-4">
                                <i class="fa-solid fa-list text-lg"></i>
                                <span class="text-sm md:text-lg font-medium block ">
                                    Kategori
                                </span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/home/member"
                                class="px-4 py-2 rounded hover:bg-accent mb-2 flex items-center justify-start gap-4">
                                <i class="fa-solid fa-user-group text-lg"></i>
                                <span class="text-sm md:text-lg font-medium block ">
                                    Member
                                </span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/home/trx"
                                class="px-4 py-2 rounded hover:bg-accent mb-2 flex items-center justify-start gap-4">
                                <i class="fa-solid fa-cart-shopping text-lg"></i>
                                <span class="text-sm md:text-lg font-medium block ">
                                    Transaksi
                                </span>
                            </router-link>
                        </li>
                    </ul>
                </div>
                <hr class="w-full text-slate-200">
                <div class=" text-teks-primary mt-4 ">
                    <span class=" text-sm md:text-lg font-thin">
                        Laporan
                    </span>
                    <ul>
                        <li>
                            <div class="px-4 py-2 rounded hover:bg-accent mb-2 flex items-center justify-start gap-4">
                                <i class="fa-solid fa-book-open text-lg"></i>
                                <span class="text-sm md:text-lg font-medium block ">
                                    Laporan Trx
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-2 mt-auto w-full cursor-pointer">
                    <div class="flex gap-4 text-teks-primary items-center">
                        <i class="fa-solid fa-circle-info text-lg"></i>
                        <span class="text-sm md:text-lg font-thin block ">
                            Informasi
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-full mt-24 px-8 text-teks-secondary overflow-y-scroll">
            <div class="w-full ">
                @if (Session::get('message'))
                    <x-components.alert :type="Session::get('message')['type']" :msg="Session::get('message')['msg']" />
                @endif
            </div>
            <router-view></router-view>
        </div>

    </div>

</div>
<x-layout.footer />
