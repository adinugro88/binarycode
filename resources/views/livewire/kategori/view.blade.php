<div class="modal fade" id="kategoriviewModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Kategori Detail {{$nama}}</h5>
                <button wire:click="resettext" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table" width="30%">
                    <tr>
                        <th>Kategori</th>
                        <td><b>{{$nama}}</b></td>
                    </tr>
                    <tr>
                        <th>Keterangan Detail</th>
                        <td><b>{{$keterangan}}</b></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>Point</th>
                    </tr>
                    @if (!empty($kategoripoint))
                        @foreach ($arraypoint as $data)
                            <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data['judul']}}</td>
                            </tr>
                        @endforeach 
                  
                    @endif
                    @empty($arraypoint)

                       <tr>
                        <td colspan="3"><b> Data Point Belum ada </b></td>
                     </tr> 

                    @endempty
                
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="resettext" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>