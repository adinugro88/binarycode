@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Student</h5>
              <button type="button" class="btn btn-success m-b-xs">Add Student</button>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nonik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Sekolah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu py-3" aria-labelledby="btnGroupDrop1">
                              <li><a class="dropdown-item p-0 text-center" href="#"><button type="button" class="btn btn-info mb-2">Edit</button></a></li>
                              <li><a class="dropdown-item p-0 text-center" href="#"><button type="button" class="btn btn-danger ">Delete</button></a></li>
                            </ul>
                          </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu py-3" aria-labelledby="btnGroupDrop1">
                              <li><a class="dropdown-item p-0 text-center" href="#"><button type="button" class="btn btn-info mb-2">Edit</button></a></li>
                              <li><a class="dropdown-item p-0 text-center" href="#"><button type="button" class="btn btn-danger ">Delete</button></a></li>
                            </ul>
                          </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>    
</div>
@endsection
