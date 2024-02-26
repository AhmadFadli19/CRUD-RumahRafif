@if ($errors->any)
    <div class="alert alert-denger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('sukses'))
    <div class="aler alert-success">{{ Session::get('sukses') }}</div>
@endif