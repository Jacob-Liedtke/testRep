<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller {
	/*review is at laravel 5 fundamentals */
	function menuPages(){
		/* This is the information for the nav bar * 
		 * Name is the display name on the nav bar *
		 * page is the reletive link with nav bar  *
		 *
		 *										   */
		return $data = [ 
				['page'	=>	'home', 'name' => 'Home'],
				['page'	=>	'Calendar', 'name' => 'Calendar'],
				['page'	=>	'sponcers', 'name' => 'Settings'],
				['page'	=>	'contacts', 'name' => 'Contacts Us'],
				['page'	=>	'ESW-National', 'name' => 'blank template'],
				];
		
	}
	
	/* warning 'name' may be unused' (no issues caused if unused)*/
	public function goHome() {
		return redirect('/');//redirect to '/' or home page (clean effect/look)
	}
	public function welcome() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.home',compact('data','name'));
	}
	/* A Jsp test page*/
	public function jsp() { 
		return view('eswpages.jsp');
	}
	public function International_projects() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.International-projects',compact('data','name'));
	}
	public function Local_Projects() {
		$data = PagesController::menuPages();//grabs the $data array
		return view('eswpages.Local-Projects',compact('data'));
	}
	public function Past_Projects() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.Past-Projects',compact('data','name'));
	}
	public function Calendar() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.Calendar',compact('data','name'));
	}
	public function Sustainability_Courses() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.Sustainability-Courses',compact('data','name'));
	}
	public function sponcers() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.Sponcers',compact('data','name'));
	}
	public function contacts() {
		$data = PagesController::menuPages();//grabs the $data array
		return view('eswpages.contacts',compact('data','name'));
	}
	public function ESW_National() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.ESW-National',compact('data','name'));
	}
	public function Minute_Report() {
		$data = PagesController::menuPages();//grabs the $data array
		return view( 'eswpages.Minute-Report',compact('data','name'));
	}
	
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
	public function Distillation() {
		
		return view('pages.Distillation');
	}
	public function solubility() {		return view('pages.solubility');	}
}
