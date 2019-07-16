<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Produk::all();
        return view('produk',['produk'=>$result]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->save();

        return view('produk.create');
        return "Data berhasil dibuat";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->save();

        return view('create',['produk' => $produk]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
	// mengambil data produk berdasarkan id yang dipilih
	$produk = DB::table('produks')->where('id',$id)->get();
	// passing data produk yang didapat ke view edit.blade.php
	return view('edit',['produk' => $produk]);
 
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
{
	// update data produk
	DB::table('produks')->where('id',$request->id)->update([
		'nama_produk' => $request->nama_produk,
		'harga_produk' => $request->harga_produk,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/produk');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       // menghapus data produk berdasarkan id yang dipilih
	DB::table('produks')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman produk
	return redirect('/produk');
    }

    
}
