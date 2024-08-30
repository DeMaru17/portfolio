<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cert = Certification::orderBy('id', 'desc')->get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('certification.index', compact('cert'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('certification.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Certification::create([
            'nama_sertifikat' => $request->nama_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'tanggal_sertifikat' => $request->tanggal_sertifikat,
        ]);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('certification.index')->with('success', 'Data Berhasil Ditambah');
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
        $cert = Certification::findOrFail($id);
        return view('certification.edit', compact('cert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Certification::where('id', $id)->update([
            'nama_sertifikat' => $request->nama_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'tanggal_sertifikat' => $request->tanggal_sertifikat,
        ]);
        return redirect()->route('certification.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Certification::findOrfail($id)->delete();
        return redirect()->route('certification.index')->with('success', 'Data Berhasil Dihapus');
    }
}
