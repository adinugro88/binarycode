<div>
   
    <div class="row">
        @include('livewire.student.tambah')
        @include('livewire.student.edit')
        @include('livewire.student.delete')
        <div class="row">
            <div class="col">
                <div class="card">

                    <div class="card-body">

                     @if (session()->has('message'))
                        @if ($notif)
                            <h5 class="alert alert-info">{{ session('message') }} <a href="#" class="text-danger mr-5" wire:click="closenotif()">X</a></h5>
                        @endif
                       
                    @endif
                        <h5 class="card-title">Student</h5>
                        <button type="button" class="btn btn-success m-b-xs" data-bs-toggle="modal"
                            data-bs-target="#studentModal">
                            tambah murid
                        </button>
                        <div class="table-responsive" style="min-height: 400px;">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nonik</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Sekolah</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $key => $data)
                                    <tr>
                                        <td> {{$student->firstItem() + $key}}</td>
                                        <td>{{ $data->nonik }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->sekolah }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu py-3" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item p-0 text-center" href="#"><button wire:click="edit({{$data->id}})"
                                                                type="button" class="btn btn-info mb-2" data-bs-target="#updateStudentModal" data-bs-toggle="modal">Edit</button></a>
                                                    </li>
                                                    <li><a class="dropdown-item p-0 text-center" href="#"><button wire:click="edit({{$data->id}})"
                                                                type="button" class="btn btn-danger "  data-bs-target="#deleteStudentModal" data-bs-toggle="modal">Delete</button></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                 
                   
                            {{ $student->links() }}
                        </div>
                    </div>

                    <div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
