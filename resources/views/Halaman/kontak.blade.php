@extends('Layout/Aplikasi')

@section('Layout')
    <h1>{{ $judul }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsum eum praesentium, mollitia maiores expedita debitis natus quae rerum modi 
    unde nam eius consequuntur aperiam vitae quia laborum, provident ullam.</p>

    <p>
        <ul>
            <li>Email : {{ $kontak['email'] }}</li>
            <li>Youtuube : {{ $kontak['Youtube'] }}</li>
        </ul>
    </p>
@endsection
