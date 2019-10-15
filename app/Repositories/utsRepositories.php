<?php

namespace App\Repositories;

use App\Http\Controllers\komentarController;
use App\UTS;
class utsRepositories implements utsInterface {
    public function create( $nama, $telepon ,  $email,  $alamat){
       $var = new UTS;
       $var->Nama = $nama;
       $var->Telepon =  $telepon;
       $var->email =  $email;
       $var->alamat =  $alamat;
       $var->save();
    }
    
    public function all(){
        return UTS::all();
    }

    public function get(int $id){
        return UTS::find($id);
    }

    public function update(int $id, string $nama,string $telepon ,string $email,string $alamat){
        UTS::find($id)->update(['Nama'=>$nama,'Telepon'=>$telepon,'email'=>$email,'alamat'=>$alamat]);
    }
    public function search($nama){
        UTS::find($nama);
    }
    public function delete(int $id){
        UTS::destroy($id);
    }

}