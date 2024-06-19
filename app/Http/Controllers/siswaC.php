<?php

namespace App\Http\Controllers;

use App\Models\siswabaruM;
use App\Models\pengaturansiswabaruM;
use Illuminate\Http\Request;
use App\Imports\SiswaImport;
use App\Models\siswaM;
use Maatwebsite\Excel\Facades\Excel;

class siswaC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function root(Request $request)
    {
        $keyword = empty($request->keyword)?"":$request->keyword;
        $jurusan = empty($request->jurusan)?"":$request->jurusan;
        $jalur = empty($request->jalur)?"":$request->jalur;

        $siswa = siswabaruM::where('nama', 'like', "%$keyword%")
        ->where('jurusan', 'like', "%$jurusan%")
        ->where('jalur', 'like', "%$jalur%")
        ->orderBy('idsiswabaru', 'asc')
        ->paginate(20);
        $siswa->appends($request->all());

        $jurusan_d = siswabaruM::select('jurusan')->groupBy('jurusan')->get();
        $jalur_d = siswabaruM::select('jalur')->groupBy('jalur')->get();


        $pengaturan = pengaturansiswabaruM::first();

        // dd($siswa->toArray());
        return view('layout.tampil', [
            'siswa' => $siswa,
            'jurusan_d' => $jurusan_d,
            'jalur_d' => $jalur_d,

            'keyword' => $keyword,
            'jurusan' => $jurusan,
            'jalur' => $jalur,
            'pengaturan' => $pengaturan,
        ]);
    }
    // public function index(Request $request)
    // {

    //     $keyword = empty($request->keyword)?"":$request->keyword;
    //     $siswa = siswabaruM::where('nama', 'like', "%$keyword%")->paginate(20);
    //     $siswa->appends($request->all());

    //     // dd($siswa->toArray());
    //     return view('siswa', [
    //         'siswa' => $siswa,
    //     ]);
    // }

    // public function import(Request $request)
    // {
    //     // try{


    //         Excel::import(new SiswaImport, $request->file);

    //         return redirect()->back()->with('success', 'All good!');


    //     // }catch(\Throwable $th){
    //     //     return redirect()->back()->with('toast_error', 'Terjadi kesalahan');
    //     // }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswaM  $siswaM
     * @return \Illuminate\Http\Response
     */
    public function show(siswaM $siswaM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswaM  $siswaM
     * @return \Illuminate\Http\Response
     */
    public function edit(siswaM $siswaM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswaM  $siswaM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswaM $siswaM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswaM  $siswaM
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswaM $siswaM)
    {
        //
    }
}
