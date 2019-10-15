<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UTS as utsModel;
use App\Repositories\utsInterface;
use App\Repositories\utsRepositories;

class uts extends Controller
{
    private $utsrepo;

    public function __construct()
    {
       $this->utsrepo = new utsRepositories; 
    }
    public function index()
    {
        $utss = $this->utsrepo->all();
        return view('uts.index',['utss'=>$utss]);
    }
    public function new_form(){
        return view('uts.new');
    }
    public function save(Request $request){
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $this->utsrepo->create($nama,$telepon,$email,$alamat);
        return redirect('/uts');
    }
    public function edit_form($id){
        $utss = utsModel::find($id);
        return view('uts.edit',['utss'=>$utss]);
    }
    public function search(Request $request)
{
    $utss = utsModel::when($request->nama, function ($query) use ($request) {
        $query->where('Nama', 'like', "%{$request->nama}%");
    })->get();
    return view('uts.index', ['utss'=>$utss]);
}
    public function edit(Request $request){
        $id = $request->id;
        $nama = $request->nama;
        $telepon = $request->telepon;
        $email = $request->email;
        $alamat = $request->alamat;
        $this->utsrepo->update($id,$nama,$telepon,$email,$alamat);
        return redirect('/uts');
    }
    public function delete($id){
        $this->utsrepo->delete($id);
        return redirect('/uts');
    }
}
