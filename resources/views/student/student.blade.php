@extends('layout/main')

@section('title','| students')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="row-table">
            <h4 class="card-title">Student Table</h4>
            <a href="/student/add_data" class="btn btn-success btn-fw" style="margin: 10px; " >Add Student [+]</a>
        </div>
        <p class="card-description"> here's all the students data</p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>kelas</th>
                <th>Wali Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($student as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nisn}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->kelas ?? 'no data'}}</td>
                <td></td>
                <td>
                  <a href="/student/detail/{{$item->id}}"id="btn-details"class="btn btn-info">Detail</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection