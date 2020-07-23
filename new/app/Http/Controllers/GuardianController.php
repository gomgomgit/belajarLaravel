<?php

namespace App\Http\Controllers;

use App\Model\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller {
	public function index() {
		$guardians = Guardian::all();

		return view('guardian.index', compact('guardians'));
	}
	public function create() {
		return view('guardian.create');
	}
	public function store(Request $request) {
		// $guard = new Guardian;
		// $guard->name = $request->name;
		// $guard->nik = $request->nik;
		// $guard->phone = $request->phone;
		// $guard->gender = $request->gender;
		// $guard->birth_date = $request->birth_date;
		// $guard->address = $request->address;
		// $guard->is_parent = $request->is_parent;

		// $guard->save();

		Guardian::create($request->all());

		return redirect('/guardians');
	}
	public function destroy(Guardian $guardian, $id) {
		$guardian::find($id)->delete();
		return redirect('/guardians');
	}
}
