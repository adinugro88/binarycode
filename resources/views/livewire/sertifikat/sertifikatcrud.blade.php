<div>
   
    <div class="row">
     
        @include('livewire.sertifikat.delete')
  
       
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
                            Buat Sertifikat
                    </a>
                        <div class="table-responsive" style="min-height: 400px;">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Student</th>
                                        <th scope="col text-center">Download</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($card as $key => $data)
                                    <tr>
                                        <td> {{$card->firstItem() + $key}}</td>
                                        <td>{{ Carbon\Carbon::parse($data->tanggal)->format('F Y')  }}</td>
                                        <td>{{ $data->Kategori->nama }}</td>
                                        <td>{{ $data->Student->name }}</td>
                                        @if ($data->Kategori->id == 3)
                                            <td> <a class="btn btn-warning" href="/admin/viewtrialcard/{{ $data->id }}">prev and download</a> </td>
                                        @else
                                        <td> <a class="btn btn-warning" href="/admin/viewsertifikat/{{ $data->id }}">prev and download</a> </td>
                                        @endif
                                        
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu py-3" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item p-0 text-center" href="/admin/editsertifikat/{{$data->id}}"><button 
                                                                type="button" class="btn btn-info mb-2" >Edit</button></a>
                                                    </li>
                                                    <li><a class="dropdown-item p-0 text-center" href="#"><button wire:click="select({{$data->id}})"
                                                                type="button" class="btn btn-danger "  data-bs-target="#deletesertifikatModal" data-bs-toggle="modal">Delete</button></a>
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
