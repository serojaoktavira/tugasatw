<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showAbout(){
		return view('about2');
	}

	function showProduk(){
		return view('produk');
	}

	function showKategori(){
		return view('kategori');
	}


}
