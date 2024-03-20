<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData() {
        $dataBarang =  [
            ['id' => 1, 'produk' => 'Beras Pandan Wangi'],
            ['id' => 2, 'produk' => 'Tepung Terigu'],
            ['id' => 3, 'produk' => 'Baygon Cair'],
            ['id' => 4, 'produk' => 'Penyedap Royco'],
            ['id' => 5, 'produk' => 'Minyak Goreng'],
        ];

        return $dataBarang;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}

