<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = skill::orderBy('id', 'desc')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        skill::create([
            'nama_skill' => $request->nama_skill,
            'persentase' => $request->persentase,
        ]);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('skill.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $skill =  skill::findOrFail($id);
        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        skill::where('id', $id)->update([
            'nama_skill' => $request->nama_skill,
            'persentase' => $request->persentase,
        ]);
        Alert::success('Success', 'Data Berhasil Diedit');
        return redirect()->route('skill.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        skill::where('id', $id)->delete();
        Alert::toast('Data telah dihapus', 'Toast Type');
        return redirect()->route('skill.index')->with('success', 'Data Berhasil Dihapus');
    }
}
