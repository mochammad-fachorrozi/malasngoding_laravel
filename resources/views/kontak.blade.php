{{-- menghubungkan dengan template master --}}
@extends('main')


{{-- isi bagian judul halaman --}}
@section('judul_halaman', 'Halaman Kontak')
    

{{-- isi bagian konten --}}
@section('konten')

<p>ini adalah halaman kontak</p>
<table border="1">
    <tr>
        <td>Email : </td>
        <td>Malasngoding@gmail.com</td>
    </tr>
    <tr>
        <td>Hp :</td>
        <td>0811111111</td>
    </tr>
</table>
    
@endsection