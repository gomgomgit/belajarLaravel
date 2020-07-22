<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Model\Guardian;

class GuardianController extends Controller {
	public function index() {
		$guardians = Guardian::all();

		return view('guardian.index', compact('guardians'));
	}
}
