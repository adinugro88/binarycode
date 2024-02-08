<html>
<head>
   <style>
    @page { size: 21cm 14cm landscape; }
   </style>
</head>

<body>
        <table  style="margin-left:-10px; background-color: beige;width: 100%;border:8px solid #278fcd;">
            <tr>
                <td>
                    <img src=" {{ public_path('logo.png') }}/" width="75" alt="">
                </td>
                <td  style="height: 15px;text-align:center;vertical-align: middle;">
                    <b style="font-size: 35px;"> TRIAL CARD</b>
                </td>
                <td style="height:15px; vertical-align: middle;">
                    <span style="font-size: 18px;font-weight: 600;" > {{ Carbon\Carbon::parse($card->tanggal)->format('d F Y')  }}</span>
                </td>
            </tr>
        </table>
        <table style="margin-left:-10px; background-color: beige;width: 100%;border:8px solid #278fcd;">
            <tr >
                <td style="height:20px;width: 8%;"> <b class="tulisan" >STUDENT NAME</b></td>
                <td style="height:20px;width: 30%;">: {{$card->Student->name}}</td>
            </tr>
            <tr >
                <td style="height:20px;"> <b class="tulisan" >CLASS</b></td>
                <td style="height:20px;">: {{$toclass->nama}}</td>
            </tr>
            <tr style="height: 15px;vertical-align: middle;">
                <td style="height:20px;"><b class="tulisan" >CONTACT</b></td>
                <td style="height:20px;"><b class="tulisan"
                    class="text-uppercase">: {{$card->Student->phone}}</b></td>
            </tr>
        </table>

    <table style="margin-left:-10px; width: 100%;border:8px solid #278fcd;">
        <thead >
            <tr>
                <th style="height: 25px;font-size: 15px;background-color: #278fcd ;color:white">
                    SUBJECT</th>
                <th style="height: 25px;text-align:center;font-size: 15px;background-color: #278fcd ;color:white">
                    SCORE</th>
                <th style="height: 25px;text-align:center;font-size: 15px;background-color: #278fcd ;color:white">
                    DETAIL</th>
            </tr>
        </thead>
        @foreach ($cardpoint as $key => $item)
        <tr>
            <td style="height: 25px;font-size: 12px">{{$item['point']}}</td>
            <td style="height: 25px;text-align:center;font-size: 12px">{{$item['score']}}</td>
            <td style="height: 25px;text-align:center;font-size: 12px">{{$item['detail']}}</td>
        </tr>
        @endforeach
    </table>
    <table style="margin-left:-10px; width: 100%;border:8px solid #278fcd;">
        <thead >
            <tr>
                <th
                    style="height: 25px;text-align:center!important;font-size: 15px;background-color: #278fcd ;color:white">
                    NOTES</th>
            </tr>
        </thead>
        <tr>
            <td rowspan="3" style="font-size: 12px;">{{$card->Note}}</td>
        </tr>
    </table>

    {{-- <div class="row">
        <div class="col-md-12 mt-4 text-right" style="text-align: right">
            <p class="" style="font-size: 20px">www.binarykiddo.id</p>
        </div>
    </div> --}}


</body>

</html>
