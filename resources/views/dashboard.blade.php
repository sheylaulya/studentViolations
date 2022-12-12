@extends('layout/main')

@section('title','dashboard')

@section('content')
<div class="row">
    <div class="col-xl-6 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">50</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium">Student</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success" >
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Student Violations </h6>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">35</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium">Report</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Violations Report</h6>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Highest Violations</h4>
                <canvas id="transaction-history" class="transaction-chart"></canvas>
                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Terlambat Masuk</h6>
                        <p class="text-muted mb-0">Total : 53 Students</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">/ weeks</h6>
                    </div>
                </div>
                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Berprilaku buruk</h6>
                        <p class="text-muted mb-0">Total : 6 Students</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">/weeks</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title mb-1">Recent Activity</h4>
                    <p class="text-muted mb-1">Your data status</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="preview-list">
                            <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-clock"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">Kiagus Ahmad Farhan Aziz</h6>
                                        <p class="text-muted mb-0">Terlambat datang ke sekolah</p>
                                    </div>
                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-muted">+ 5 Points</p>
                                        <p class="text-muted mb-0">Reported by Syamsul Ma'Arif</p>
                                    </div>
                                </div>
                            </div>

                            <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-clock"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">Divadan Arya</h6>
                                        <p class="text-muted mb-0">Terlambat datang ke sekolah</p>
                                    </div>
                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-muted">+ 5 Points</p>
                                        <p class="text-muted mb-0">Reported by Paskah Sitohang</p>
                                    </div>
                                </div>
                            </div>

                            <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-clock"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">Siti Nurul Homisah</h6>
                                        <p class="text-muted mb-0">Terlambat datang ke sekolah</p>
                                    </div>
                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-muted">+ 5 Points</p>
                                        <p class="text-muted mb-0">Reported by Syamsul Ma'Arif</p>
                                    </div>
                                </div>
                            </div>
                            
                        
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
