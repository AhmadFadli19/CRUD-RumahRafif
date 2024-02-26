@extends('Layout/aplikasi')

@section('Konten')
    <a href="/siswa/create" class="btn btn-secondary">++ tam bah data siswa</a>
    <table class="table">
        <thead>
            <tr>
                <th>foto</th>
                <th>nomer induk</th>
                <th>nama</th>
                <th>alamat</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto)
                            <img style="max-width:50px; max-height:50px "src="{{ url('foto'). '/' . $item->foto }}">
                            
                        @endif
                    </td>
                    <td>{{ $item->nomor_induk }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td><a class="btn btn-secondary btn-sm" 
                        href="{{ url('/siswa/'.$item->nomor_induk) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" 
                        href="{{ url('/siswa/'.$item->nomor_induk.'/edit') }}">Edit</a>
                        <form action="{{ '/siswa/'. $item->nomor_induk }}" method="post" class="d-inline" onsubmit="return confirm('apa kah anda yakin untuk mengapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">hapus</button>
                    </form>
                    </td>
                        
                </tr>
            @endforeach            
        </tbody>
    </table>
    {{ $data->links()}}
@endsection