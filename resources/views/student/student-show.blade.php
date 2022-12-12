@extends('layout/main')

@section('title','| Teachers')

@section('content')
<div class="contents">
    <h1>{{ $student->name}}</h1>
    
    <div class="btn-act">
            <a href="/student/update_data/{{$student->id}}" id="btn-edit"> 
                <iconify-icon icon="mdi:edit-circle" style="color: #ffe15d; font-size:38px;"></iconify-icon>
            </a>
        <form action="/student/destroy/{{$student->id}}" method="POST" 
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
    <div class="nipd">
        <p>NISN</p>
        <p>{{ $student->nisn}}</p>
    </div>
    <div class="gender">
        <p>gender</p>
        <p>{{ $student->gender}}</p>
    </div>
    <div class="address">
        <p>address</p>
        <p>{{ $student->address}}</p>
    </div>
    <div class="class">
        <p>Class</p>
        <p>{{ $student->classes->name ?? 'no data'}}</p>
    </div>
    <div class="email">
        <p>email</p>
        <p>{{ $student->email}}</p>
    </div>
    <div class="pass">
        <p>pass</p>
        <p>{{ $student->pass}}</p>
    </div>
</div>

@endsection
