<?php

namespace App\Http\Controllers;
use App\Models\perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = perpustakaan::orderBy('id','desc')->paginate();
        return view ('perpustakaan.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('perpustakaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'id'=>$request->id,
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        perpustakaan::create($data);
        return redirect()->to('perpustakaan')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = perpustakaan::where('id',$id)->first();
        return view('perpustakaan.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        perpustakaan::where('id',$id)->update($data);
        return redirect()->to('perpustakaan')->with('success','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        perpustakaan::where('id',$id)->delete();
        return redirect()->to('perpustakaan')->with('success','Data Berhasil Di Hapus');
    }
}
