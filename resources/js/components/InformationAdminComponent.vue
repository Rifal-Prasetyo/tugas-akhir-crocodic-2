<template>
    <div class="w-full ">
                <h1 class="font-bold text-lg md:text-2xl uppercase ">Selamat Datang</h1>
                <h2 class="font-thin text-sm md:text-lg mb-2 ">Informasi Ringkas dari Penjualan</h2>
                <hr class="w-full text-slate-200 mb-4">
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-teks-primary mb-4">
                <a href="/home/books"
                    class=" bg-primary px-4 py-2 rounded shadow-md shadow-black flex flex-col justify-between hover:opacity-75 ">
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">{{ products }}</span>
                    <span class="font-light text-sm md:text-lg">Produk</span>
                </a>
                <div
                    class=" bg-secondary px-4 py-2 rounded shadow-md shadow-black flex flex-col justify-between hover:opacity-75 ">
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">{{ members }}</span>
                    <span class="font-light text-sm md:text-lg">Member</span>
                </div>
                <div
                    class=" bg-accent  px-4 py-2 rounded shadow-md shadow-black flex flex-col justify-between hover:opacity-75 ">
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">{{ trxs }}</span>
                    <span class="font-light text-sm md:text-lg">Transaksi</span>
                </div>
            </div>
            <hr class="w-full text-slate-200 mb-4">
            <h2 class="font-thin text-sm md:text-lg mb-2 ">Informasi</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-teks-primary w-full">
                <a href="/home/books"
                    class=" bg-primary px-4 rounded shadow-md shadow-black flex items-center gap-3 justify-between hover:opacity-75 ">
                    <span class="font-light text-sm md:text-lg">Total Transaksi Hari Ini</span>
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">{{ trxs_today  }}</span>
                </a>
                <a href="/home/books"
                    class=" bg-secondary px-4 rounded shadow-md shadow-black flex items-center gap-3 justify-between hover:opacity-75 ">
                    <span class="font-light text-sm md:text-lg">Total Transaksi Bulan ini</span>
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">{{ trxs_month }}</span>
                </a>
                <a href="/home/books"
                    class=" bg-secondary px-4 rounded shadow-md shadow-black flex items-center gap-3 justify-between hover:opacity-75 ">
                    <span class="font-light text-sm md:text-lg">Total Pendapatan Hari ini</span>
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">Rp. {{ trxs_venue_today  }},00</span>
                </a>
                <a href="/home/books"
                    class=" bg-secondary px-4 rounded shadow-md shadow-black flex items-center gap-3 justify-between hover:opacity-75 ">
                    <span class="font-light text-sm md:text-lg">Total Pendapatan Bulan ini</span>
                    <span class="font-bold font-mono text-lg md:text-2xl lg:text-3xl ">Rp. {{ trxs_venue_month }},00</span>
                </a>
            </div>
</template>
<script>
    export default {
    data() {
        return {
            products: 0,
            members: 0,
            trxs:0,
            trxs_today: 0,
            trxs_month: 0,
            trxs_venue_today: 0,
            trxs_venue_month: 0,
        }
    },
    methods: {
        getAllData() {
            axios.get('/api/home').then(({data}) => {
                this.products = data.allProduct;
                this.members = data.allMembers;
                this.trxs = data.allTrx;
                this.trxs_today = data.info.trx_today_count;
                this.trxs_month = data.info.trx_month_count;
                this.trxs_venue_today = data.info.trx_today_venue;
                this.trxs_venue_month = data.info.trx_month_venue;

            })
        },
    },
    created() {
        this.getAllData();
    }
}
</script>