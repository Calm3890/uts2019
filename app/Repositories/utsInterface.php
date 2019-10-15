<?php
namespace App\Repositories;

use Illuminate\Support\Collection;
use App\UTS;

interface utsInterface{
    public function create( $nama, $telepon ,  $email, $alamat);
    public function all();
    public function get(int $id);
    public function update(int $id, string $nama,string  $telepon ,string  $email,string  $alamat);
    public function search($nama);
    public function delete(int $id);
}
