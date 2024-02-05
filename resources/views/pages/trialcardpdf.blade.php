@extends('layouts.pdflay')

@section('stylemaster')
<style>
    body {
        /* A5 dimensions */
        height: 155mm;
        width: 210mm;
        border: 10px solid #278fcd ;
        margin: 0;
    }

    .tulisan{
        color: #89894c;
    }
</style>
@endsection

@section('content')

<div class="container mx-auto p-0">
        <div class="row birumuda" style="padding:0 12px">
            <div class="col-md-4  py-1" style="background-color: beige">
               
                <img src="{{asset('logo.png')}}" width="95" alt="">
            </div>
            <div class="col-md-4 text-center" style="background-color: beige">
                <h3 style="font-size: 40px;vertical-align:baseline"><b class="tulisan"> TRIAL CARD</b></h3>
            </div>
            <div class="col-md-4 text-right" style="text-align:right;background-color: beige">
                <p class="tulisan" style="font-size: 20px;margin:10px 0;font-weight: 700"> {{ Carbon\Carbon::parse($card->tanggal)->format('d F Y')  }}</p>
            </div>
        </div>
        <hr style=" border: 8px solid #278fcd ;opacity:1;margin:0">
        {{-- <div class="col-12 mb-2 text-end" style="font-size: 25px"> --}}
        <div class="row" style="padding:0 12px;">
            <div class="col-4" style="background-color: beige;">
                <b class="tulisan" style="font-size: 20px">STUDENT NAME</b>
            </div>
            <div class="col-8" style="background-color: beige;">
                <b class="tulisan"  style="font-size: 20px" class="text-uppercase">: {{$card->Student->name}}</b>
            </div>
            <div class="col-4" style="background-color: beige;">
                <b class="tulisan" style="font-size: 20px">CLASS</b>
            </div>
            <div class="col-8" style="background-color: beige;">
                <b class="tulisan" style="font-size: 20px" class="text-uppercase">: {{$toclass}}</b>
            </div>
            <div class="col-4" style="background-color: beige;">
                <b class="tulisan" style="font-size: 20px">CONTACT</b>
            </div>
            <div class="col-8" style="background-color: beige;">
                <b class="tulisan" style="font-size: 20px"
                    class="text-uppercase">: {{$card->Student->phone}}</b>
            </div>
        </div>

        <table class="table table-striped mt-0">
            <thead class="thead-dark">
                <tr>
                    <th style="font-size: 20px;background-color: #278fcd ;color:white">
                        SUBJECT</th>
                    <th style="text-align:center;font-size: 20px;background-color: #278fcd ;color:white">
                        SCORE</th>
                    <th style="text-align:center;font-size: 20px;background-color: #278fcd ;color:white">
                        DETAIL</th>
                </tr>
            </thead>
            @foreach ($cardpoint as $key => $item)
            <tr>
                <td style="font-size: 17px">{{$item['point']}}</td>
                <td style="text-align:center;font-size: 17px">{{$item['score']}}</td>
                <td style="text-align:center;font-size: 17px">{{$item['detail']}}</td>
            </tr>
            @endforeach

        </table>
        <table class="table table-striped mt-0">
            <thead class="thead-dark">
                <tr>
                    <th
                        style="text-align:center!important;font-size: 20px;background-color: #278fcd ;color:white">
                        NOTES</th>
                </tr>
            </thead>
            <tr>
                <td rowspan="3" style="font-size: 18px;padding:25px;">{{$card->Note}}</td>
            </tr>
        </table>

        {{-- <div class="row">
            <div class="col-md-12 mt-4 text-right" style="text-align: right">
                <p class="" style="font-size: 20px">www.binarykiddo.id</p>
            </div>
        </div> --}}
</div>


@endsection
