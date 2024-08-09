<?php

namespace App\Http\Controllers\Biodiv\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Biodiv\orangutan\Orangutan;
use App\Models\Biodiv\antropogenik\Antropogenik;
use App\Models\Biodiv\Survei\Survei; // Tambahkan import model Survey
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua data Antropogenik dan mengelompokkan data
        $list_antropogenik = Antropogenik::all();
        $groupedData = $list_antropogenik->groupBy(function ($item) {
            return explode('-', $item->bulan)[0]; // Mengambil tahun dari bulan
        })->map(function ($group) {
            return $group->groupBy('observasi')->map->sum('kuantitas');
        });

        // Menghitung total kuantitas per tahun
        $totalQuantity = $groupedData->map->sum()->toArray();

        // Mengambil data Orangutan
        $list_orangutan = Orangutan::all();

        // Mengambil data Survei
        $list_survei = survei::all()->map(function ($survei) {
            $survei->formatted_bulan = Carbon::parse($survei->bulan)->Format('F Y');
            return $survei;
        }); // Atau query yang sesuai dengan kebutuhan Anda

        // Mengubah data ke format yang sesuai untuk JSON
        $formattedListAntropogenik = $list_antropogenik->map(function ($item) {
            return [
                'bulan' => $item->bulan,
                'metode' => $item->metode,
                'observasi' => $item->observasi,
                'pengamatan' => $item->pengamatan,
                'kuantitas' => $item->kuantitas,
            ];
        });

        $formattedListOrangutan = $list_orangutan->map(function ($item) {
            return [
                'tanggal' => $item->tanggal,
                'jumlah_sarang' => $item->jumlah_sarang,
                'total_panjang' => $item->total_panjang,
                'jumlah_transek' => $item->jumlah_transek,
                'lokasi' => $item->lokasi,
                'tipe_habitat' => $item->tipe_habitat,
                'kepadatan' => $item->kepadatan,
            ];
        });

        // Mengubah data survei ke format yang sesuai untuk JSON
        $formattedListSurvei = $list_survei->map(function ($item) {
            return [
                'tanggal' => $item->tanggal,
                'kategori' => $item->kategori,
                'jumlah' => $item->jumlah,
            ];
        });

        return view('biodiv.dashboard.index', [
            'list_antropogenik' => $formattedListAntropogenik,
            'totalQuantity' => $totalQuantity,
            'list_orangutan' => $formattedListOrangutan,
            'list_survei' => $list_survei, // Menambahkan data survei
        ]);
    }
}
