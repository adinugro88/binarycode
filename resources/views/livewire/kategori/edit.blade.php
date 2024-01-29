<div class="modal fade" id="updatekategoriModal" wire:ignore.self tabkey="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Form Murid</h5>
                <button type="button" wire:click="resettext" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" wire:model.defer='nama'
                                        class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                    <span class="invalid-feedback">
                                        Kategori Wajib Diiisi
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea type="text" cols="10" rows="5" wire:model.defer='keterangan'
                                        class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                                    @error('keterangan')
                                    <span class="invalid-feedback">
                                        Keterangan Wajib DIisi
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <fieldset class="border rounded-3 p-3">
                            <legend class="float-none w-auto px-3"><b>Subject And Score </b></legend>
                            <div class="row">
                                {{-- <h4>{{$nilai}}</h4> --}}
                                <div class="col-md-12 mt-2">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-6 col-form-label ">Point
                                            Kategori</label>
                                        <label for="inputEmail3" class="col-sm-6 col-form-label text-center"> Hapus
                                        </label>
                                    </div>
                                </div>
                                
                                @foreach ($scoreloop as $key => $item)
                                <div class="col-md-12 mt-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('scoreloop.'.$key.'.point') is-invalid @enderror"
                                                wire:model.defer="scoreloop.{{ $key }}.point">
                                            @error('scoreloop.'.$key.'.point')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                        @if ($nilai!=0)
                                        <div class="btn btn-danger col-sm-2" style="height:40px" wire:click='minpoint({{$key}})'>delete
                                        </div>
                                        @else
                                        <div class="btn btn-secondary col-sm-2" style="height:40px">Delete</div>
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
                <button type="button" wire:click="resettext" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click="resettext" class="btn btn-info">reset</button>
                <button type="button" wire:click="updatekategori" class="btn btn-primary">Save changes</button>

            </div>
        </div>
    </div>
</div>
