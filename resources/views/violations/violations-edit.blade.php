@extends('layout/main')

@section('title','| Teachers')

@section('content')
<h1>Update violations Data</h1>
@endsection
@section('another-content')

<form style="margin: 20px 40px" action="/violations/update_data/{{$violations->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input required name="name" type="text" class="form-control" style="width: 70%"  id="name" value="{{$violations->name}}">
    </div>
    <div class="mb-3">
        <label for="point" class="form-label">Point</label>
        <input required name="point" type="number" class="form-control"style="width: 70%"  id="point" value="{{$violations->point}}">
    </div>
    <div class="mb-3">
        <label for="penalty" class="form-label">Penalty</label> <br>
       <textarea name="penalty" id="" cols="85" rows="3">{{$violations->penalty}}</textarea>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>
@endsection
