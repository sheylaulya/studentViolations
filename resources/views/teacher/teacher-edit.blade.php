@extends('layout/main')

@section('title','| Teachers')

@section('content')
<h1>Edit Teacher </h1>
@endsection
@section('another-content')

<form style="margin: 20px 40px" action="/teacher/update_data/{{$teacher->id}}" method="POST" enctype="multipart/form-">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nipd" class="form-label">NIPD</label>
        <input required name="nipd" type="number" class="form-control" style="width: 70%" id="nipd" value="{{$teacher->nipd}}">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input required name="name" type="text" class="form-control" style="width: 70%"  id="name" value="{{$teacher->name}}">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label> <br>
        <select name="gender" id="">
            <option selected value="{{$teacher->gender}}">{{$teacher->gender}}</option>
            <option value="female">female</option>
            <option value="male">male</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label> <br>
       <textarea name="address" id="" cols="85" rows="3" >{{$teacher->address}}</textarea>
    </div>
    <div class="mb-3">
        <label for="lesson" class="form-label">Lesson</label>
        <select name="lesson" id="">
            <option selected value="{{$teacher->lesson}}">{{$teacher->lesson}}</option>
            <option value="PPLG">PPLG</option>
            <option value="ANIMASI">ANIMASI</option>
            <option value="BRF">BRF</option>
            <option value="TJKT">TJKT</option>
            <option value="TE">TE</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="telp" class="form-label">Phone Number</label>
        <input required name="telp" type="number" class="form-control"style="width: 70%"  id="telp" value="{{$teacher->telp}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input required name="email" type="email" class="form-control"style="width: 70%"  id="email" value="{{$teacher->email}}">
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input required name="pass" type="password" class="form-control"style="width: 70%"  id="pass" value="{{$teacher->pass}}">
    </div>
    <label for="class" class="form-label">Class</label>
    <select name="classes_id" class="form-select mb-3"style="width: 70%"  id="">
        {{-- <option selected value="{{$teacher->classes_id}}">{{$teacher->classes->name}}</option>
        @foreach ($class as $item)
        <option  value="{{$item->id}}">{{$item->name}}</option>
        @endforeach --}}
    </select>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>
@endsection
