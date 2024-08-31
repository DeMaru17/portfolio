<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::orderBy('id', 'desc')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('profil.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'nama_lengkap' => 'required|string|max:55',
        //     'email' => 'required|string|email|max:55',
        //     'no_tel' => 'required|string|max:15',
        //     'alamat' => 'required|string|max:250',
        //     'tentang_saya' => 'nullable|string',
        //     'facebook' => 'nullable|url',
        //     'x' => 'nullable|url',
        //     'linkedin' => 'nullable|url',
        //     'instagram' => 'nullable|url',

        // ]);

        //Menghanddle file upload-an:
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path); //menyimpan nama filenya saja

        }
        // Insert into profiles () values():
        Profile::create([
            'gambar' => $name,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_tel' => $request->no_tel,
            'alamat' => $request->alamat,
            'tentang_saya' => $request->tentang_saya,
            'facebook' => $request->facebook,
            'x' => $request->x,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,

        ]);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('profil.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Profile::findOrFail($id);
        return view('profil.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::findOrFail($id);
        // $request->validate([
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'nama_lengkap' => 'required|string|max:55',
        //     'email' => 'required|string|email|max:55',
        //     'no_tel' => 'required|string|max:15',
        //     'alamat' => 'required|string|max:250',
        //     'tentang_saya' => 'nullable|string',
        //     'facebook' => 'nullable|url',
        //     'x' => 'nullable|url',
        //     'linkedin' => 'nullable|url',
        //     'instagram' => 'nullable|url',

        // ]);
        // Simpan gambar jika ada di upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada:
            if ($profile->gambar) {
                Storage::delete('public/image/' . $profile->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
            $profile->gambar = $name;
        }
        $profile->nama_lengkap = $request->nama_lengkap;
        $profile->no_tel = $request->no_tel;
        $profile->email = $request->email;
        $profile->alamat = $request->alamat;
        $profile->tentang_saya = $request->tentang_saya;
        $profile->facebook = $request->facebook;
        $profile->x = $request->x;
        $profile->linkedin = $request->linkedin;
        $profile->instagram = $request->instagram;
        $profile->save();

        Alert::success('Success', 'Data Berhasil Diedit');

        return redirect()->route('profil.index')->with('success', 'Update Profile Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profile::where('id', $id)->delete();
        Alert::toast('Data telah dihapus', 'Toast Type');
        return redirect()->to('profil')->with('message', 'Data berhasil dihapus');
    }
}
