<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;

class ProdukController extends Controller{
	function index(){
		$id_user = request()->user(); 
		$data['list_produk'] = $user->produk;
		return view('produk.index' , $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->user = request()->user(); 
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->save();

		return redirect('produk')->with('succes' , 'Data Berhasil Ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view ('produk.show' , $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view ('produk.edit' , $data);
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->save();

		return redirect('produk')->with('succes' , 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('succes' , 'Data Berhasil Dihapus');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama','like',"%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereIn('stok', '<>', $stok)->get();
		//$data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNull('stok')->get();
		//$data['list_produk'] = Produk::whereNotNull('stok')->get();
		//$data['list_produk'] = Produk::whereDate('created_at', '2020-01-17')->get();
		//$data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		//$data['list_produk'] = Produk::whereMonth('created_at', '01')->get();
		//$data['list_produk'] = Produk::whereTime('created_at', '15:24:50')->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('produk.index' , $data);
	}
}