<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use App\Models\ProdiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::all();
        return view('mahasiswa.mahasiswa')
            ->with('mhs', $mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = ProdiModel::all();
        return view('mahasiswa.create_mahasiswa', ['prodi' => $prodi])
            ->with('url_form', url('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'           => 'required|string|max:10|unique:mahasiswa,nim',
            'nama'          => 'required|string|max:50',
            'prodi_id'      => 'required',
            'jk'            => 'required|in:l,p',
            'tempat_lahir'  => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'hp'            => 'required|digits_between:6,15',
            'alamat'        => 'required|string|max:255'
        ]);

        // $mahasiswa                  = new MahasiswaModel;
        // $mahasiswa->nim             = $request->get('nim');
        // $mahasiswa->nama            = $request->get('nama');
        // $mahasiswa->jk              = $request->get('jk');
        // $mahasiswa->tempat_lahir    = $request->get('tempat_lahir');
        // $mahasiswa->tanggal_lahir   = $request->get('tanggal_lahir');
        // $mahasiswa->hp              = $request->get('hp');
        // $mahasiswa->alamat          = $request->get('alamat');
        // $mahasiswa->save();

        // $prodi                      = new ProdiModel;
        // $prodi->prodi_id            = $request->get('prodi');

        // //fungsi element untuk menambah data dengan relasi belongsTo
        // $mahasiswa->prodi()->associate($prodi);
        // $mahasiswa->save();

        $mahasiswa = MahasiswaModel::create($request->except(['_token']));

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::with('prodi')->where('id', $id)->first();
        $prodi = ProdiModel::all();
        return view('mahasiswa.create_mahasiswa', compact('mahasiswa', 'prodi'))
            ->with('mhs', $mahasiswa)
            ->with('p', $prodi)
            ->with('url_form', url('/mahasiswa/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim'           => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama'          => 'required|string|max:50',
            'prodi_id'      => 'required',
            'jk'            => 'required|in:l,p',
            'tempat_lahir'  => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'hp'            => 'required|digits_between:6,15',
            'alamat'        => 'required|string|max:255'
        ]);

        // $mahasiswa                  = MahasiswaModel::with('prodi')->where('id', $id)->first();
        // $mahasiswa->nim             = $request->get('nim');
        // $mahasiswa->nama            = $request->get('nama');
        // $mahasiswa->jk              = $request->get('jk');
        // $mahasiswa->tempat_lahir    = $request->get('tempat_lahir');
        // $mahasiswa->tanggal_lahir   = $request->get('tanggal_lahir');
        // $mahasiswa->hp              = $request->get('hp');
        // $mahasiswa->alamat          = $request->get('alamat');
        // $mahasiswa->save();

        // $prodi                      = new ProdiModel;
        // $prodi->prodi_id            = $request->get('prodi');

        // //fungsi element untuk menambah data dengan relasi belongsTo
        // $mahasiswa->prodi()->associate($prodi);
        // $mahasiswa->save();

        MahasiswaModel::where('id','=', $id)->update($request->except(['_token', '_method']));

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
