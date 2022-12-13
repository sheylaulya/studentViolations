@extends('layout/main')

@section('title','| Teachers')

@section('content')
<div class="contents">
    <h1>{{ $teacher->name}}</h1>
    
    <div class="btn-act">

            <a href="/teacher/update_data/{{$teacher->id}}" id="btn-edit"> 
                <iconify-icon icon="mdi:edit-circle" style="color: #ffe15d; font-size:38px;"></iconify-icon>
            </a>
        <form action="/teacher/destroy/{{$teacher->id}}" method="POST" 
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
        <p>NIPD</p>
        <p>{{ $teacher->nipd}}</p>
    </div>
    <div class="gender">
        <p>gender</p>
        <p>{{ $teacher->gender}}</p>
    </div>
    <div class="address">
        <p>address</p>
        <p>{{ $teacher->address}}</p>
    </div>
    <div class="lesson">
        <p>lesson</p>
        <p>{{ $teacher->lesson}}</p>
    </div>
    <div class="telp">
        <p>Phone Number</p>
        <p>{{ $teacher->telp}}</p>
    </div>
    <div class="class">
        <p>Class</p>
        <p>{{ $teacher->homeroomTeacher->name ?? 'no data'}}</p>
    </div>
    <div class="email">
        <p>email</p>
        <p>{{ $teacher->email}}</p>
    </div>
    <div class="pass">
        <p>pass</p>
        <p>{{ $teacher->pass}}</p>
    </div>
</div>

@endsection
