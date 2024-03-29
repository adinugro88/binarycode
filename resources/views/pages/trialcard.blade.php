@extends('layouts.admin')

@section('content')

<div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="font-size: 40px;vertical-align:baseline"><b> TRIAL CARD</b></h3>
                    </div>
                    <div class="col-md-6 text-right" style="text-align:right">
                      <img width="105" src="/logo.png" class=" pull-right" alt="">
                    </div>
                </div>
                <hr style=" border: 8px solid rgb(0, 49, 0);opacity:1">
                <div class="col-12 mb-2 text-end" style="font-size: 25px" ><b>{{ Carbon\Carbon::parse($card->tanggal)->format('d F Y')  }}</b> </div>
                <div class="row">
                    <div class="col-2">
                       <b style="font-size: 20px">STUDENT NAME :</b>
                    </div>
                    <div class="col-10">
                        <span style="font-size: 20px" class="text-uppercase">{{$card->Student->name}}</span>
                    </div>
                    <div class="col-2">
                        <b style="font-size: 20px">CLASS :</b>
                    </div>
                    @if (!empty($toclass->nama))

                    @else
                    <div class="col-10">
                        <span style="font-size: 20px" class="text-uppercase">{{$toclass->nama}}</span>
                    </div>
                    @endif



                    @notempty


                    <div class="col-2">
                        <b style="font-size: 20px">TERM :</b>
                    </div>
                    <div class="col-10">
                        <span style="font-size: 20px" class="text-uppercase">{{ Carbon\Carbon::parse($card->tanggal)->format('d F Y')  }}</span>

                    </div>
                </div>

                <table class="table table-striped mt-3">
                    <thead class="thead-dark">
                    <tr>
                        <th  style="text-align:center!important;font-size: 20px;background-color: rgb(0, 49, 0);color:white">SUBJECT</th>
                        <th style="text-align:center;font-size: 20px;background-color: rgb(0, 49, 0);color:white">SCORE</th>
                        <th style="text-align:center;font-size: 20px;background-color: rgb(0, 49, 0);color:white">DETAIL</th>
                    </tr>
                    </thead>
                    @foreach ($cardpoint as $key => $item)
                    <tr>
                        <td style="font-size: 20px">{{$item['point']}}</td>
                        <td style="text-align:center;font-size: 20px">{{$item['score']}}</td>
                        <td style="text-align:center;font-size: 20px">{{$item['detail']}}</td>
                    </tr>
                    @endforeach

                </table>

                <div class="row">
                    {{-- <div class="col-6">
                        <table class="table table-striped mt-3">
                            <thead class="thead-dark">
                            <tr>
                                <th  style="text-align:center!important;font-size: 20px;background-color: rgb(0, 49, 0);color:white">SCORE SCALE</th>

                            </tr>
                            </thead>
                            <tr>
                                <td style="font-size: 20px">>80 = Achieving</td>
                            </tr>
                            <tr>
                                <td style="font-size: 20px">60-80 = Developing</td>
                            </tr>
                            <tr>
                                <td style="font-size: 20px"><60 = Need Improvement</td>
                            </tr>
                        </table>
                    </div> --}}
                    <div class="col-12">
                        <table class="table table-striped mt-3">
                            <thead class="thead-dark">
                            <tr>
                                <th  style="text-align:center!important;font-size: 20px;background-color: rgb(0, 49, 0);color:white">NOTES</th>

                            </tr>
                            </thead>
                            <tr>
                                <td rowspan="3" style="font-size: 20px">{{$card->Note}}</td>
                            </tr>

                        </table>

                    </div>

                   <div class="col-md-12 mt-4 text-right" style="text-align: right">
                     <p class="" style="font-size: 20px">www.binarykiddo.id</p>
                   </div>
                </div>
                <a href="/admin/sertifikat"  type="submit" class="btn btn-secondary">Back</a>
                <a  target="_blank" href="/admin/trialcard/download/{{$card->id}}" class="btn btn-primary text-right">Download File PDF</a>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>


@endsection


