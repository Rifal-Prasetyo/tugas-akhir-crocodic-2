<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Penjualan;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboardDataAll()
    {
        $produks = Produk::count();
        $members = Member::count();
        $trx = Penjualan::count();

        // total transaksi today
        $trxx = Penjualan::where('waktu_transaksi', Carbon::today());
        $totalTrxToday = $trxx->count();
        // total transaksi this month
        $trxMonth = Penjualan::whereMonth('created_at', Carbon::today()->month());
        $totalTrxMonth = $trxMonth->count();

        // total pendapatan hari ini
        $totalVenueToday = $trxx->get()->sum('total_harga');

        //total pendapatan bulan ini
        $totalVenueMonth = $trxMonth->get()->sum('total_harga');

        return collect([
            'allProduct' => $produks,
            'allMembers' => $members,
            'allTrx' => $trx,
            'info' => [
                'trx_today_count' => $totalTrxToday,
                'trx_month_count' => $totalTrxMonth,
                'trx_today_venue' => $totalVenueToday,
                'trx_month_venue' => $totalVenueMonth,
            ]
        ])->toJson();
    }
}
