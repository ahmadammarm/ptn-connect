<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data_pengguna = Data::all();
        return view('hasil', ['data_pengguna' => $data_pengguna]);
    }

    public function create()
    {
        return view('data_pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'asal' => 'required',
            'jurusan' => 'required',
            'nilai1' => 'required||min:0|max:100',
            'nilai2' => 'required|string|min:0|max:100',
            'nilai3' => 'required|string|min:0|max:100',
            'nilai4' => 'required|string|min:0|max:100',
            'nilai5' => 'required|string|min:0|max:100',
            'nilai6' => 'required|string|min:0|max:100',
            'nilai7' => 'required|string|min:0|max:100',
            'nilai8' => 'required|string|min:0|max:100',
            'nilai9' => 'required|string|min:0|max:100',
            'nilai10' => 'required|string|min:0|max:100',
            'bidang' => 'required|min:1',
            'cita' => 'required',
            'univ' => 'required',
            'prodi1' => 'required',
            'prodi2' => 'required',
        ]);

        Data::create([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
            'nilai1' => $request->nilai1,
            'nilai2' => $request->nilai2,
            'nilai3' => $request->nilai3,
            'nilai4' => $request->nilai4,
            'nilai5' => $request->nilai5,
            'nilai6' => $request->nilai6,
            'nilai7' => $request->nilai7,
            'nilai8' => $request->nilai8,
            'nilai9' => $request->nilai9,
            'nilai10' => $request->nilai10,
            'bidang' => implode(',', $request->bidang),
            'cita' => $request->cita,
            'univ' => $request->univ,
            'prodi1' => $request->prodi1,
            'prodi2' => $request->prodi2,
        ]);

        return redirect('/hasil')->with('success', 'Data berhasil disimpan!');
    }

    public function show($data_pengguna)
    {
        $result = Data::find($data_pengguna);

        $hasil = $result->Class;

        if ($hasil == 2) {
            $status = 'Lulus';
            $color = 'green';
        } else {
            $status = 'Belum Lulus';
            $color = 'red';
        }

        return view('show', ['data_pengguna' => $result, 'status' => $status, 'color' => $color]);

    }

    public function edit($id)
    {
        $data_pengguna = Data::find($id);

        return view('edit_data_pengguna', compact('data_pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = Data::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'asal' => 'required',
            'jurusan' => 'required',
            'nilai1' => 'required|text|min:0|max:100',
            'nilai2' => 'required|text|min:0|max:100',
            'nilai3' => 'required|text|min:0|max:100',
            'nilai4' => 'required|text|min:0|max:100',
            'nilai5' => 'required|text|min:0|max:100',
            'nilai6' => 'required|text|min:0|max:100',
            'nilai7' => 'required|text|min:0|max:100',
            'nilai8' => 'required|text|min:0|max:100',
            'nilai9' => 'required|text|min:0|max:100',
            'nilai10' => 'required|text|min:0|max:100',
            'bidang' => 'required|string|min:1',
            'cita' => 'required',
            'univ' => 'required',
            'prodi1' => 'required',
            'prodi2' => 'required',
        ]);
        $data_pengguna = Data::find($id);
        $data_pengguna->nama = $request->nama;
        $data_pengguna->asal = $request->asal;
        $data_pengguna->jurusan = $request->jurusan;
        $data_pengguna->nilai1 = $request->nilai1;
        $data_pengguna->nilai2 = $request->nilai2;
        $data_pengguna->nilai3 = $request->nilai3;
        $data_pengguna->nilai4 = $request->nilai4;
        $data_pengguna->nilai5 = $request->nilai5;
        $data_pengguna->nilai6 = $request->nilai6;
        $data_pengguna->nilai7 = $request->nilai7;
        $data_pengguna->nilai8 = $request->nilai8;
        $data_pengguna->nilai9 = $request->nilai9;
        $data_pengguna->nilai10 = $request->nilai10;
        $data_pengguna->bidang = implode(',', $request->bidang);
        $data_pengguna->cita = $request->cita;
        $data_pengguna->univ = $request->univ;
        $data_pengguna->prodi1 = $request->prodi1;
        $data_pengguna->prodi2 = $request->prodi2;
        $data_pengguna->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data_pengguna = Data::find($id);
        $data_pengguna->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
