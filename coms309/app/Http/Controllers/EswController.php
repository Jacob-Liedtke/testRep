<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller {
	/*review is at laravel 5 fundamentals */
	
	public function index() { 
		return "hello world";//view ( 'eswpages.index');
	}
	public function welcome() { 
		return "hello world";
	}

	
	
	public function welcome() { 
		return "hello world";
	}
	/* //post method 
	public function tray() { 
		
		$mov = Request::get ( 'mov' );
		$vfr = Request::get ( 'vfr' );
		$mol = Request::get ( 'mol' );
		$lfr = Request::get ( 'lfr' );
		$p = Request::get ( 'p' );
		$r = Request::get ( 'r' );
		$sigma = Request::get ( 'sigma' );
		$f = Request::get ( 'f' );
		$rou = Request::get ( 'rou' );
		$t = Request::get ( 't' );
		
		// return Request::all();
		return view ( 'pages.tray', compact ( 'mov', 'vfr', 'mol', 'lfr', 'p', 'r', 'f', 'rou','t' ) );
	}
	*/
	
	public function Distillation() {
		
		return view('pages.Distillation');
	}
	public function solubility() {		return view('pages.solubility');	}
}
