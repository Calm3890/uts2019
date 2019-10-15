@extends('base')

@section('body')
<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <td><button onclick="location.href='/uts/create'">Create</button></td>
     <form action="/uts/search" method = "get">
     <td><input type="text" name="nama"></td>
     <td><input type="submit" value="search"></td>
     
    </form>
 
</tr>
@foreach ($utss as $uts)
<tr>
    <td>{{$uts->id}}</td>
    <td>{{$uts->Nama}}</td>
    <td>{{$uts->Telepon}}</td>
    <td>{{$uts->email}}</td>
    <td>{{$uts->alamat}}</td>
    <td><button onclick="location.href='/uts/{{$uts->id}}/edit'">edit</button></td>
    <td><button onclick="if(confirm('are you sure?'))location.href='/uts/{{$uts->id}}/delete';">delete</button></td>
    </tr>

@endforeach
</table>


