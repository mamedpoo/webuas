<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
class RentalController extends Controller
{
	public function index(){
		return view('index');
	}

    public function show(){
		$rentals = Rental::all();
		return view('data.show', ['rental' => $rentals]);
	}

	public function create(){
		return view('data.create');
	}

	public function insert(Request $request){
		$rentals = new Rental;
		$rentals->nama = $request->nama;
		$rentals->alamat = $request->alamat;
		$rentals->save();

		return redirect(Route('show'))->with('alert-success','Berhasil Menambahkan Data!');
		// return redirect()->route('index');
		// return redirect()->action('BarangController@index');
		// return Redirect::action('BarangController@index');
	}

	public function delete($id){
		$rentals = Rental::findOrFail($id);
		// dd($rentals);
		$rentals->delete();
		return redirect(Route('show'))->with('success','Data berhasil dihapus');
	}

	public function edit($id){
		$rentals = Rental::findOrFail($id);
		return view('data.edit', ['rental' => $rentals]);
	}

	public function submitedit(Request $request, $id){
		$rentals = Rental::findOrFail($id);
		
		$rentals->nama = $request->nama;
		$rentals->alamat = $request->alamat;
		$rentals->save();

		return redirect(Route('show'))->with('alert-success','Berhasil Merubah Data!');
	}
}
