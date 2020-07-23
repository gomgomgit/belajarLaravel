<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller {
	public function index() {
		$menus = Menu::all();

		return view('menu.index', compact('menus'));
	}
	public function create() {
		return view('menu.create');
	}
	public function store(Request $request) {
		Menu::create($request->all());
		return redirect('/menu');
	}
}
