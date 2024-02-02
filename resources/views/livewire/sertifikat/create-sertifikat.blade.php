<div>
    <div class="row">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilih Data</h5>
                        <div class="mb-3">
                            <label class="form-label">pilih Student</label>
                            <select class="form-select" wire:model.defer='studentid'>
                                @foreach ($student as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">pilih Kategori</label>
                            <select class="form-select" wire:model.defer='kategorid'>
                                @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button wire:click='resetall' type="submit" class="btn btn-danger">reset</button>
                        <button wire:click='setting' type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        @if($formsetup)
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Input Sertifikat <span class="alert alert-info"> {{$kategorifix->nama}}</span></h5>
                        <div class="mb-3">
                            <div class="row">
                                <label class="form-label col-md-2">STUDENT NAME</label>
                                <input disabled class="form-control col-10" type="text" value="{{$studentfix->name}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <label class="form-label col-md-2">STUDENT ID</label>
                                <input wire:model='kategoriup' disabled class="form-control col-10" type="text"
                                    value="{{$studentfix->nonik}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <label class="form-label col-2">CLASS</label>
                                <input wire:model='studentup' disabled class="form-control col-md-10" type="text"
                                    value="{{$kategorifix->nama}}">
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
                                        @if ($kategorifix->id==3)
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

                                @if ($kategorifix->id==3)
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
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                    class="form-control @error('cardpoint.'.$key.'.detail') is-invalid @enderror"
                                                    wire:model.defer="cardpoint.{{ $key }}.detail">
                                                @error('cardpoint.'.$key.'.detail')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
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
                                <textarea wire:model='note' class="form-control col-12" name="" id="" cols="15"
                                    rows="5"></textarea>
                            </div>
                            <button wire:click='simpan' type="submit" class="btn btn-primary mt-4">Simpan Data</button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
