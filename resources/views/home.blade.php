@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-md-6 col-xl-3">
      <div class="card stat-widget">
          <div class="card-body">
              <h5 class="card-title">Students</h5>
                <h2>{{$student}}</h2>
              
                <div class="progress">
                  <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="card stat-widget">
          <div class="card-body">
              <h5 class="card-title">Sertifikat</h5>
                <h2>{{$sertifikat}}</h2>
               
                <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="card stat-widget">
          <div class="card-body">
              <h5 class="card-title">Kelas</h5>
                <h2>{{$kategori}}</h2>
                
                <div class="progress">
                  <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
          </div>
      </div>
    </div>
  </div>
@endsection
