<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//Marcel Prastiko Arthana
//1915051013
//PTI 5A
//Owner 
class MahasiswaController extends Controller
{
    // menampilkan view home
    public function home() {
        $mahasiswa = DB::table('mahasiswa')->get();         // mengambil data dari table mahasiswa
        return view('home', ['mahasiswa' => $mahasiswa]);  // mengirim data mahasiswa ke view home
    }

    //menampilkan view form tambah mahasiswa
    public function tambah() {
        return view('tambah');
    }

    //insert data ke table mahasiswa
    public function insert(Request $request) {
        DB::table('mahasiswa')->insert([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'kelas_mahasiswa' => $request->kelas_mahasiswa,
            'prodi_mahasiswa' => $request->prodi_mahasiswa,
            'fakultas_mahasiswa' => $request->fakultas_mahasiswa

        ]);
        return redirect('/');
    }

    //edit data mahasiswa
    public function edit($id) {
        
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    //update data mahasiswa
    public function update(Request $request) {
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'kelas_mahasiswa' => $request->kelas_mahasiswa,
            'prodi_mahasiswa' => $request->prodi_mahasiswa,
            'fakultas_mahasiswa' => $request->fakultas_mahasiswa
        ]);
        return redirect('/');
    }

    //delete data mahasiswa
    public function hapus($id) {
        
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/');

    }

}
