<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{


      public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas= Item::orderBy('id','DESC')->paginate(5);
       return view('show')->with('datas',$datas); //
    }


    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
      'judul' => 'required'
      ]);

      $tambah= new Item();
     $tambah->judul = $request['judul'];
     $tambah->kategori = $request['kategori'];
     $tambah->umur = $request['umur'];
     $tambah->tujuan = $request['tujuan'];
     $tambah->kepribadian = $request['kepribadian'];
     $tambah->deskripsi = $request['deskripsi'];
         $file       = $request->file('gambar');
     $fileName   = $file->getClientOriginalName();
     $request->file('gambar')->move("image/", $fileName);
     $tambah->gambar =  $fileName;
    
     $tambah->save();
       return redirect()->to('/');  
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
        $readedit = Item::where('id', $id)->first();
        return view('read')->with('data',$readedit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $readedit = Item::where('id', $id)->first();
return view('edit')->with('readedit', $readedit); //
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
        $update= Item::where('id', $id)->first();
     $update->judul = $request['judul'];
     $update->kategori = $request['kategori'];
     $update->umur = $request['umur'];
     $update->tujuan = $request['tujuan'];
     $update->kepribadian = $request['kepribadian'];
     $update->deskripsi = $request['deskripsi'];
     $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);
        $update->gambar = $fileName;
     $update->update();
       return redirect()->to('/');   //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Item::find($id);
        $del->delete();
        return redirect()->to('/');
        //
    }
}
