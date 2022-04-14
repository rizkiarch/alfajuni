<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Barang::orderBy('name', 'ASC')->latest()->paginate(5);
        return view('dashboard.barang.index', compact('produk'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nomor' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'discount' => 'required',
            'potongan_harga' => 'required',
            'merk' => 'required',
            'kategori' => 'required',
            'kelompok' => 'required',
            'tbl_transaksi_id' => 'required',
        ]);
        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Tambah Barang Berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('dashboard.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'id' => 'required',
            'nomor' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'discount' => 'required',
            'potongan_harga' => 'required',
            'merk' => 'required',
            'kategori' => 'required',
            'kelompok' => 'required',
            'tbl_transaksi_id' => 'required',
        ]);
        barang::update($request->all());
        return redirect()->route('barang.index')->with('success', 'Tambah Barang Berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Delete Barang Berhasil');
    }
}
