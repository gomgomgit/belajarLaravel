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
	public function edit($id) {
		$menu = Menu::find($id);
		return view('menu.edit', compact('menu'));
	}
	public function update(Request $request, $id) {
		Menu::find($id)->update($request->all());
		return redirect('/menu');
	}
	public function delete($id) {
		Menu::find($id)->delete();
		return redirect('/menu');
	}
}
