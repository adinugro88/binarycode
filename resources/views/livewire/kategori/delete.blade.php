<div class="modal fade" id="deletekategoriModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Anda Yakin ingin Menghapus {{$nama}}</h5>
                <button wire:click="resettext" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>data Kategori <b>{{$nama}}</b> akan dihapus permanen??</p>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="resettext" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click="hapus" class="btn btn-danger">Delete Permanent</button>
            </div>
        </div>
    </div>
</div>