<div class="modal fade" id="deleteStudentModal" wire:ignore.self tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Anda Yakin ingin Menghapus {{$name}}</h5>
                <button wire:click="resettext" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>data siswa bernama <b>{{$name}}</b> dan id <b>{{$nonik}}</b> </p>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="resettext" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click="delete" class="btn btn-danger">Delete Permanent</button>
            </div>
        </div>
    </div>
</div>
