<div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Sertifikat</h5>
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-md-2">STUDENT NAME</label>
                            <input disabled class="form-control col-10" type="text" value="{{$card->Student->name}}">
                        </div>
                    </div>
                    @if ($kategorid!=3)
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-md-2">STUDENT ID</label>
                            <input wire:model='kategoriup' disabled class="form-control col-10" type="text"
                                value="{{$card->Student->nonik}}">
                        </div>
                    </div>
                    @else
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-md-2">To Class {{$card->toclass}}</label>
                            <select wire:model='toclass' name="" id="" class="form-control">
                                @foreach ($kategorilist as $item)
                                    <option value="{{$item->id}}" @if($item->id == $card->toclass) {{'selected'}} @endif  >{{$item->nama}}</option>
                                @endforeach
                            </select>
                            @error('toclass')
                            <span class="invalid-feedback">
                                score diatas wajib diisi
                            </span>
                            @enderror
                        </div>
                    </div>
                    @endif


                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-2">CLASS</label>
                            <input  disabled class="form-control col-md-10" type="text"
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
                                    @if ($kategorid==3)
                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">Point Kategori</label>
                                        <label for="inputEmail3" class="col-sm-4 col-form-label text-center"> Score</label>
                                        <label for="inputEmail3" class="col-sm-4 col-form-label text-center"> Detail</label>
                                        @else
                                        <label for="inputEmail3" class="col-sm-6 col-form-label ">Point Kategori</label>
                                        <label for="inputEmail3" class="col-sm-6 col-form-label text-center"> Score</label>
                                        @endif
                                </div>
                            </div>
                            <hr>


                            @if ($kategorid==3)
                            @foreach ($cardpoint as $key => $item)
                            <div class="col-md-12 mt-2">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <input disabled type="text" class="form-control"
                                            wire:model.defer="cardpoint.{{ $key }}.point">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text"
                                            class="form-control @error('cardpoint.'.$key.'.score') is-invalid @enderror"
                                            wire:model.defer="cardpoint.{{ $key }}.score">
                                        @error('cardpoint.'.$key.'.score')
                                        <span class="invalid-feedback">
                                            score diatas wajib diisi
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text"
                                            class="form-control @error('cardpoint.'.$key.'.detail') is-invalid @enderror"
                                            wire:model.defer="cardpoint.{{ $key }}.detail">
                                        @error('cardpoint.'.$key.'.detail')
                                        <span class="invalid-feedback">
                                            detail diatas wajib diisi
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        @else
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
                        @endif
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label col-2">NOTES</label>
                            <textarea wire:model='note' class="form-control col-12 @error('note') is-invalid @enderror" name="" id="" cols="15"
                                rows="5"></textarea>

                                @error('note')
                                <span class="invalid-feedback">
                                    Note diatas wajib diisi
                                </span>
                                @enderror
                        </div>

                    </div>
                    <input type="hidden" name="" wire:model='id'>
                    <a href="/admin/sertifikat"  class="btn btn-secondary" > back </a>
                    <button wire:click="updateshow" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>

        </div>

    </div>
