<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::OrderBy('id', 'desc')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([[
            'nama_sekolah' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_lulus' => 'required|string',
        ]]);
        Education::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('education.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Education::findOrFail($id);
        return view('education.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Education::where('id', $id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
        ]);
        Alert::success('Success', 'Data Berhasil Diedit');
        return redirect()->route('education.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id', $id)->delete();
        Alert::toast('Data telah dihapus', 'Toast Type');
        return redirect()->to('education')->with('message', 'Data berhasil dihapus');
    }
}
