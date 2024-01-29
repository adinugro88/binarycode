<div>
   
    <div class="row">
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
                        <a  class="btn btn-success m-b-xs" href="/admin/createsertifikat"
                            data-bs-target="">
                            tambah murid
                    </a>
                        <div class="table-responsive" style="min-height: 400px;">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Student</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($card as $key => $data)
                                    <tr>
                                        <td> {{$card->firstItem() + $key}}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->class }}</td>
                                        <td>{{ $data->Student->name }}</td>
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
                 
                   
                            {{ $card->links() }}
                        </div>
                    </div>

                    <div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
