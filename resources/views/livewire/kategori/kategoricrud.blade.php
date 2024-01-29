<div>
   
    <div class="row">
        @include('livewire.kategori.view')
        @include('livewire.kategori.tambah')
       
        @include('livewire.kategori.edit')

        @include('livewire.kategori.delete')
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                     @if (session()->has('message'))
                        @if ($notif)
                            <h5 class="alert alert-info">{{ session('message') }} <a href="#" class="text-danger mr-5" wire:click="closenotif()">X</a></h5>
                        @endif
                       
                    @endif
                        <h5 class="card-title">Kategori</h5>
                        <button type="button" class="btn btn-success m-b-xs" data-bs-toggle="modal"
                            data-bs-target="#kategoriModal">
                            tambah Kategori
                        </button>
                        <div class="table-responsive" style="min-height: 400px;">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $key => $data)
                                    <tr>
                                        <td> {{$kategori->firstItem() + $key}}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu py-3" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item p-0 text-center" href="#"><button wire:click="select({{$data->id}})"
                                                        type="button" class="btn btn-primary mb-2" data-bs-target="#kategoriviewModal" data-bs-toggle="modal">View</button></a>
                                                    </li>
                                                    <li><a class="dropdown-item p-0 text-center" href="#"><button wire:click="select({{$data->id}})"
                                                                type="button" class="btn btn-info mb-2" data-bs-target="#updatekategoriModal" data-bs-toggle="modal">Edit</button></a>
                                                    </li>
                                                    <li><a class="dropdown-item p-0 text-center" href="#"><button wire:click="select({{$data->id}})"
                                                                type="button" class="btn btn-danger "  data-bs-target="#deletekategoriModal" data-bs-toggle="modal">Delete</button></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $kategori->links() }}
                        </div>
                    </div>

                    <div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
