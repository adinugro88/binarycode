<div>
    @include('livewire.student.tambah')
    <div class="row">
        <div class="row">
            <div class="col">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Student</h5>
                        <button type="button" class="btn btn-success m-b-xs" data-bs-toggle="modal"
                            data-bs-target="#modalshow">
                            tambah murid
                        </button>

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
                                @foreach ($student as $index => $data)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $data->nonik }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->kelas }}</td>
                                    <td>{{ $data->sekolah }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->phone }}</td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu py-3" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item p-0 text-center" href="#"><button
                                                            type="button" class="btn btn-info mb-2">Edit</button></a>
                                                </li>
                                                <li><a class="dropdown-item p-0 text-center" href="#"><button
                                                            type="button" class="btn btn-danger ">Delete</button></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <div >
                          {{ $student->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                    <div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
