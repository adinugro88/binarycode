<div class="modal fade" id="kategoriModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true"  data-bs-keyboard="false" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Form Murid</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <div class="col-md-12 mt-2">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model.defer='kelas' class="form-control @error('kelas') is-invalid @enderror">
                                @error('kelas')
                                <span class="invalid-feedback">
                                        {{ $message }}
                                </span>
                                  @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="resettext" class="btn btn-info">reset</button>
            <button type="button" wire:click="tambah" class="btn btn-primary">Save changes</button>
           
        </div>
    </div>
</div>
</div>

