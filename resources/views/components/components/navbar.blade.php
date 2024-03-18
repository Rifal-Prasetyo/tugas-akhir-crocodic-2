<nav class="w-full bg-primary text-teks-primary shadow shadow-black absolute z-40">
    <div class="container mx-auto">
        <div class="w-full flex justify-between py-2">
            <div class="flex items-center gap-4">
                <img src="/assets/img/image.jpg" alt="" srcset=""
                    class="rounded-full object-cover shadow-md w-8">
                <span class=" text-lg md:text-2xl font-bold">
                    {{ session('settings')[0][0]['name_POS'] }}
                </span>
            </div>
            <div class=" flex items-center">
                <a href="/logout"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Keluar</a>

            </div>
        </div>
    </div>
</nav>
