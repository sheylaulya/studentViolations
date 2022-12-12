@extends('layout/main')

@section('title','| Teachers')

@section('content')
<div class="contents" style="padding:10px;">
    <h2>{{ $violations->name}}</h2>
    
    <div class="btn-act">

            <a href="/violations/update_data/{{$violations->id}}" id="btn-edit"> 
                <iconify-icon icon="mdi:edit-circle" style="color: #ffe15d; font-size:38px;"></iconify-icon>
            </a>
        <form action="/violations/destroy/{{$violations->id}}" method="POST" 
            onclick='return confirm("mau ngapus kah?")'>
                @csrf
                @method('DELETE')
                <button  id="btn-delete" type="submit">
                    <iconify-icon icon="mdi:trash-can-circle" style="color: #cf0a0a; font-size:38px;"></iconify-icon>
                </button>
            </form>
    </div>
</div>
@endsection

@section('another-content')
<div class="datas">
    <div class="point">
        <p>Point</p>
        <p>{{ $violations->point}}</p>
    </div>
    <div class="penalty">
        <p>Penalty</p>
        <p>{{ $violations->penalty}}</p>
    </div>
</div>

@endsection
