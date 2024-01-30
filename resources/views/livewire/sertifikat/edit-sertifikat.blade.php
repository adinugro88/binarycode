<div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Sertifikat</h5>
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-md-2">STUDENT NAME</label>
                            <input disabled class="form-control col-10" type="text" value="{{$card->Student->name}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-md-2">STUDENT ID</label>
                            <input wire:model='kategoriup' disabled class="form-control col-10" type="text"
                                value="{{$card->Student->nonik}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-2">CLASS</label>
                            <input wire:model='studentup' disabled class="form-control col-md-10" type="text"
                                value="{{$card->Kategori->nama}}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-2">TERM</label>
                            <input wire:model='tanggal' type="date" class="form-control" />
                        </div>
                    </div>

                    <div class="mb-3">

                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-6 col-form-label ">Point
                                        Kategori</label>
                                    <label for="inputEmail3" class="col-sm-6 col-form-label text-center"> Score
                                    </label>
                                </div>
                            </div>
                            <hr>
                            @foreach ($cardpoint as $key => $item)
                            <div class="col-md-12 mt-2">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <input disabled type="text" class="form-control"
                                            wire:model.defer="cardpoint.{{ $key }}.point">

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="form-control @error('cardpoint.'.$key.'.score') is-invalid @enderror"
                                            wire:model.defer="cardpoint.{{ $key }}.score">
                                        @error('cardpoint.'.$key.'.score')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-2">NOTES</label>
                            <textarea wire:model='note' class="form-control col-12" name="" id="" cols="15"
                                rows="5"></textarea>
                        </div>
                        <a href="/admin/sertifikat" > <button class="btn btn-info">Back</button> </a>
                        <button wire:click='update' type="submit" class="btn btn-primary mt-4">Simpan Data</button>
                    </div>
                </div>
            </div>
          
        </div>

    </div>
