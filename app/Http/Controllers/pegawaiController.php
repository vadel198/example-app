<?php

namespace App\Http\Controllers;
use App\Models\pegawaiModel;

use Illuminate\Http\Request;

class pegawaiController extends Controller
{
 
    public function edit()
    {
        return view('pegawai.edit');
    }

    public function tambah()
    {
        return view('pegawai.tambah');
    }

    public function index()
    {
        // Mengambil semua data dari model pegawai_model
        $data = pegawaiModel::all();
        // Mengirimkan data ke view 'Pegawai.Index' dengan variabel 'data'
        return view('pegawai.index')->with('data', $data);
    }



    // Fungsi untuk membuat atau menyimpan data pegawai baru
    public function createData(Request $request)
    {
        // Membuat instance baru dari model pegawai_model
        $data = new pegawaiModel();
        // Mengambil nilai dari input form dan mengisi kolom pada model
        $data->nama = $request->input('nama');
        $data->nip = $request->input('nip');
        $data->alamat = $request->input('alamat');
        $data->no_hp = $request->input('no_hp');
        // Menyimpan data ke dalam database
        $data->save();
        // Setelah menyimpan, redirect ke route yang menampilkan semua data pegawai
        return redirect()->route('getalldataPegawai');
    }

    // Fungsi untuk mendapatkan data pegawai berdasarkan ID untuk keperluan edit
    public function getDataById($id)
    {
        // Mengambil satu data pegawai berdasarkan ID
        $data = pegawaiModel::where('id', $id)->first();
        // Mengirimkan data ke view 'Pegawai.edit' untuk ditampilkan di form edit
        return view('pegawai.edit')->with('data', $data);
    }

    // Fungsi untuk mengupdate data pegawai berdasarkan ID
    public function updateData(Request $request, $id)
    {
        // Mengambil data pegawai berdasarkan ID
        $data = pegawaiModel::where('id', $id)->first();
        // Mengambil inputan baru dari form dan mengupdate data pada model
        $data->nama = $request->input('nama');
        $data->nip = $request->input('nip');        
        $data->alamat = $request->input('alamat');
        $data->no_hp = $request->input('no_hp');
        // Menyimpan perubahan data ke dalam database
        $data->save();
        // Setelah data berhasil diupdate, redirect ke halaman yang menampilkan semua data pegawai
        return redirect()->route('getalldataPegawai');
    }

    // Fungsi untuk menghapus data pegawai berdasarkan ID
    public function deleteData($id)
    {
        // Mengambil data pegawai berdasarkan ID
        $data = pegawaiModel::where('id', $id)->first();
        // Menghapus data pegawai dari database
        $data->delete();
        // Setelah penghapusan, redirect ke halaman yang menampilkan semua data pegawai
        return redirect()->route('getalldataPegawai');
    }

}
