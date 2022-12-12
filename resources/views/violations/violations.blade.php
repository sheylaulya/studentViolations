@extends('layout/main')

@section('title','| Teachers')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row-table">
            <h4 class="card-title">Violations Table</h4>
            <a href="/violations/add_data" class="btn btn-success btn-fw" style="margin: 10px; " >Add Violations [+]</a>
        </div>
        <p class="card-description"> here's all the violations data</p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Point</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($violations as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->point}}</td>
                <td>
                  <a href="/violations/detail/{{$item->id}}"  id="btn-details"class="btn btn-info">Detail</a>
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