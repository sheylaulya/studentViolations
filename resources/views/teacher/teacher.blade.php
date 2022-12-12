@extends('layout/main')

@section('title','| Teachers')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row-table">
            <h4 class="card-title">Teachers Table</h4>
       
            <a href="/teacher/add_data" class="btn btn-success btn-fw" style="margin: 10px; " >Add Teacher [+]</a>
        </div>
        <p class="card-description"> here's all the teachers data</p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>NIPD</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Classes</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($teacher as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nipd}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->lesson}}</td>
                <td>{{$item->homeroomTeacher->name ?? 'no data'}}</td>
                <td>
                  <a href="/teacher/detail/{{$item->id}}"  id="btn-details"class="btn btn-info">Detail</a>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection