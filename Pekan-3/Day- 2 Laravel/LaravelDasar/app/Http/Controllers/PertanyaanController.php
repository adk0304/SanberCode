<?php

namespace App\Http\Controllers;

use DB;
use App\Pertanyaan;
use Illuminate\Http\Request;
class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // mengambil data QB 
        //$pertanyaan = DB::table('pertanyaan')->get();
        //dd($request);
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.listpertanyaan', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pertanyaan.tambahpertanyaan');
       // $query=DB::tabel('pertanyaan')->insert('')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        //Query Building
        /*$tambah = DB::table('pertanyaan')->insert([
            "judul"=>$request["judul"],
            "isi"=>$request["isi"]
        ]);*/
        //Eluquent 
        /*$pertanyaan = new Pertanyaan;
        $pertanyaan->judul=$request['judul'];
        $pertanyaan->isi=$request['isi'];
        $pertanyaan->save();*/
        //Mass Assigment
        $pertanyaan = Pertanyaan::create([
            "judul"=> $request["judul"],
            "isi"=>$request["isi"]
        ]);

        return redirect('pertanyaan')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$detail = DB::table('pertanyaan')->where('id',$id)->first(); //pake QB
        //dd($detail);
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.detail', compact('pertanyaan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$edit = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($detail);
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));

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
        //
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        /*$edit = DB::table('pertanyaan')
                ->where('id',$id)
                ->update([
                    'judul'=>$request['judul'],
                    'isi'=>$request['isi']
                ]);  // QB */
            $update = Pertanyaan::where('id',$id)->update([
                "judul"=>$request['judul'],
                "isi"=>$request['isi']
            ]);

        return redirect('pertanyaan')->with('success','Update Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //$delete = DB::table('pertanyaan')->where('id', $id)->delete();
        Pertanyaan::destroy($id);
        return redirect('pertanyaan')->with('success','data berhasil dihapus');
    }
}
