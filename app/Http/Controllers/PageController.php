<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\royalebread_584;
use App\Movies;

class PageController extends Controller
{
// Main Roti Project
    public function dashboard(){
        return view("dashboard", ["key" => "Dashboard"]);
    }

    public function produk(){
        return view("produk", ["key" => "Produk"]);
    }

    public function keranjang(){
        return view("keranjang", ["key" => "Keranjang"]);
    }

    public function delivery(){
        return view("delivery", ["key" => "Delivery"]);
    }

    public function profile(){
        return view("profile", ["key" => "Profile"]);
    }

    public function rotiroyale(){
        $rotiroyale=royalebread_584::orderBy('id', 'desc')->get();
        return view("RotiRoyale", ["key" => "Roti_Royale", "rr" => $rotiroyale]);
    }

    public function saverotiroyale(Request $request)
    {
        $file_name = time()."-".$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
        royalebread_584::create([
            'nama' => $request->nama,
            'rasa' => $request->rasa,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' =>$path
        ]);

        return redirect('/Roti_Royale')->with('alert', 'Data berhasil disimpan!!!');
    }

    public function formaddrotiroyale()
    {
        return view("form-add", ["key" => "Roti_Royale"]);
    }

//Movies & Roti Uji
    public function home(){
        return view("home", ["key" => "Home"]);
    }

    public function messages(){
        return view("messages", ["key" => "Messages"]);
    }

    public function settings(){
        return view("settings", ["key" => "Settings"]);
    }

    public function roti(){
        return view("roti", ["key" => "Roti"]);
    }

    public function movies(){
        $movies=Movies::orderBy('id', 'desc')->get();
        return view("Movies", ["key" => "Movies", "mv" => $movies]);
    }

    public function formaddmovies()
    {
        return view("form-add", ["key" => "Movies"]);
    }

    public function savemovies(Request $request)
    {
        $file_name = time()."-".$request->file('poster')->getClientOriginalName();
        $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
        Movies::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
            'poster' =>$path
        ]);

        return redirect('/Movies')->with('alert', 'Data berhasil disimpan!!!');
    }
}
