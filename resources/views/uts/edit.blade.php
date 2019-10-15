@extends('base')

@section('body')
<form action="/uts/edit" method="POST">
@csrf
<input type="hidden" name='id'value = '{{$utss->id}}'>
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" value='{{$utss->Nama}}'>
    </div>
    <div>
        <label >Telepon:</label>
        <input type="text" name="telepon" value='{{$utss->Telepon}}'>
    </div>
    <div>
        <label >Email:</label>
        <input type="text" name="email" value='{{$utss->email}}'>
    </div>
    <div>
        <label >Alamat:</label>
        <input type="text" name="alamat" value='{{$utss->alamat}}'>
    </div>
        
    <div>
        <input type="submit" >
    </div>
</form>