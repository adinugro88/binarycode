@extends('layouts.pdflay')

@section('stylemaster')
<style>
    body {
        /* A5 dimensions */
        height: 170mm;
        width: 210mm;
        border: 5px solid #003100;
        margin: 0;
    }


</style>
@endsection

@section('content')

<div class="container mx-auto">
    <div class="row">
        <div class="row birumuda">
            <div class="col-md-6">
                <h3 style="font-size: 40px;vertical-align:baseline"><b> TRIAL CARD</b></h3>
            </div>
            <div class="col-md-6 text-right" style="text-align:right;">
                <b style="font-size: 20px;">{{ Carbon\Carbon::parse($card->tanggal)->format('d F Y')  }}</b>
            </div>
        </div>
        <hr style=" border: 8px solid rgb(0, 49, 0);opacity:1">
        {{-- <div class="col-12 mb-2 text-end" style="font-size: 25px"> --}}
            
        <div class="row">
            <div class="col-4">
                <b style="font-size: 20px">STUDENT NAME</b>
            </div>
            <div class="col-8">
                <span style="font-size: 20px" class="text-uppercase">: {{$card->Student->name}}</span>
            </div>
            <div class="col-4">
                <b style="font-size: 20px">CLASS</b>
            </div>
            <div class="col-8">
                <span style="font-size: 20px" class="text-uppercase">: {{$card->Kategori->nama}}</span>
            </div>
            <div class="col-4">
                <b style="font-size: 20px">CONTACT</b>
            </div>
            <div class="col-8">
                <span style="font-size: 20px"
                    class="text-uppercase">: {{$card->Student->phone}}</span>

            </div>
        </div>

        <table class="table table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th style="text-align:center!important;font-size: 20px;background-color: rgb(0, 49, 0);color:white">
                        SUBJECT</th>
                    <th style="text-align:center;font-size: 20px;background-color: rgb(0, 49, 0);color:white">
                        SCORE</th>
                    <th style="text-align:center;font-size: 20px;background-color: rgb(0, 49, 0);color:white">
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
        <table class="table table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th
                        style="text-align:center!important;font-size: 20px;background-color: #003100;color:white">
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
</div>


@endsection
