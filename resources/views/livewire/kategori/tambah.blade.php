<div class="modal fade" id="kategoriModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true"  data-bs-keyboard="false" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Form Murid</h5>
            <button type="button"  wire:click="resettext" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model.defer='kategori' class="form-control @error('kategori') is-invalid @enderror">
                                @error('nonik')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea type="text" cols="10" rows="5" wire:model.defer='name' class="form-control @error('name') is-invalid @enderror"></textarea>
                                @error('name')
                                <span class="invalid-feedback">
                                        {{ $message }}
                                </span>
                                  @enderror
                            </div>
                        </div>
                    </div>
                    <fieldset class="border rounded-3 p-3">
                        <legend class="float-none w-auto px-3"><b>Point Kategori</b></legend>
                        <div class="row">
                            <h4>{{$nilai}}</h4>
                            <div class="col-md-12 mt-2">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label text-center">Point Kategori</label>
                                    <label for="inputEmail3" class="col-sm-5 col-form-label text-center">keterangan </label>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label text-center"> Hapus </label>
                                </div>
                            </div>
                            @foreach ($scoreloop as $index => $scoreloops)
                          
                             
                                <div class="col-md-12 mt-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-5">
                                            <input type="text" name="scoreloops[{{$index}}]['point']" wire:model.defer='kelas' class="form-control @error('kelas') is-invalid @enderror" wire:model='scoreloop.{{$index}}.point'>
                                            @error('kelas')
                                            <span class="invalid-feedback">
                                                    {{ $message }}
                                            </span>
                                              @enderror
                                        </div>
                                       
                                        <div class="col-sm-5">
                                            <input type="text" name="scoreloops[{{$index}}]['keterangan']" wire:model.defer='kelas' wire:model='scoreloop.{{$index}}.kelas' class="form-control @error('kelas') is-invalid @enderror">
                                            @error('kelas')
                                            <span class="invalid-feedback">
                                                    {{ $message }}
                                            </span>
                                              @enderror
                                        </div>
                                        @if ($nilai!=0)
                                        <div class="btn btn-danger col-sm-2" wire:click='minpoint({{$index}})'>delete</div>
                                        @else
                                        <div class="btn btn-secondary col-sm-2" >Delete</div>
                                        @endif
                                       
                                     
                                    </div>
                                </div>
                          
                            @endforeach
                       
                            <div class="col-4">
                                <div class="btn btn-primary" wire:click='addpoint'>Add Point</div>
                            </div>
                        </div>
                     
                    </fieldset>
                  
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click="resettext" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="resettext" class="btn btn-info">reset</button>
            <button type="button" wire:click="tambah" class="btn btn-primary">Save changes</button>
           
        </div>
    </div>
</div>
</div>

