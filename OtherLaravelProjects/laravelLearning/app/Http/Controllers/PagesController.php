<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index() {
		//return 'Welcome to the Homepage';
		//return view( 'pages.index', compact( 'title' ) );
		$title = 'Welcome to Laravel';

		return view( 'pages.index' )->with( 'title', $title );

	}

	public function about() {
		$title = 'About';

		return view( 'pages.about' )->with( 'title', $title );
	}

	public function services() {
		$data = [
			'title'    => 'Services',
			'services' => [ 'Web Design', 'Coding', 'UX', 'SEO' ],
		];

		return view( 'pages.services' )->with( $data );
	}
}
