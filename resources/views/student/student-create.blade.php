@extends('layout/main')

@section('title','| Teachers')

@section('content')
<h1>Add New Student Data [+]</h1>
@endsection
@section('another-content')

<form style="margin: 20px 40px" action="/student/add_data" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nisn" class="form-label">NISN</label>
        <input required name="nisn" type="number" class="form-control" style="width: 70%" id="nisn">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input required name="name" type="text" class="form-control" style="width: 70%"  id="name">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label> <br>
        <select name="gender" id="">
            <option selected value="">Select Gender</option>
            <option value="female">female</option>
            <option value="male">male</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label> <br>
       <textarea name="address" id="" cols="85" rows="3"></textarea>
    </div>
{{-- <label for="class" class="form-label">Class</label>
<select name="classes_id" class="form-select mb-3"style="width: 70%"  id="">
    <option selected>Select Class</option>
    @foreach ($dataclass as $item)
    <option  value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
</select> --}}
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input required name="email" type="email" class="form-control"style="width: 70%"  id="email">
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input required name="pass" type="password" class="form-control"style="width: 70%"  id="pass">
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>
@endsection
