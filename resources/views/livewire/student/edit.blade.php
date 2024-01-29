
<div class="modal fade" id="updateStudentModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Form Update Murid</h5>
            <button wire:click="resettext" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">NoId</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model.defer='nonik' class="form-control @error('nonik') is-invalid @enderror">
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model.defer='name' class="form-control @error('name') is-invalid @enderror">
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
                    <div class="col-md-12 mt-2">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model.defer='sekolah' class="form-control @error('sekolah') is-invalid @enderror">
                                @error('sekolah')
                                <span class="invalid-feedback">
                                        {{ $message }}
                                </span>
                                  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model.defer='phone' class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                <span class="invalid-feedback">
                                        {{ $message }}
                                </span>
                                  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" wire:model.defer='alamat' name="" id="" cols="10"
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click="resettext" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="update" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>

