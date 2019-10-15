@extends('base')

@section('body')
<form action="/uts" method="POST">
@csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama">
    </div>
    <div>
        <label >Telepon:</label>
        <input type="text" name="telepon">
    </div>
    <div>
        <label>Email:</label>
        <input type="text" name="email">
    </div>
    <div>
        <label >Alamat:</label>
        <input type="text" name="alamat">
    </div>
    <div>
        <input type="submit" >
    </div>
</form>