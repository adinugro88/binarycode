<html>
<head>
   <style>
    @page {
        size: 21cm 14cm landscape;
        /* margin:0em 0em 0em 0em; */
        padding: 0em;
    }
    body{
        padding: 0px;
        margin: 0px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }

    td{
        color: #1d6962;
    }

    .one{
        float: left;
        width: 25%;
    }

    .two{
        float: right;
        width: 75%;
    }

   .stripe tr:nth-child(odd) {background-color: #f2f2f2;}
   </style>
</head>

<body>
    <div class="nama"></div>
    <div style="page-break-before: always;"></div>

        <table  style="width: 100%; border-bottom:5px solid #97C3d9">
            <tr>
                <td  style="height: 15px;text-align:left;vertical-align: middle;">
                    <b style="font-size: 35px;"> STUDENT REPORT</b>
                </td>
                <td style="height:15px; vertical-align: middle;text-align:right">

                    <img src="logo.png" width="100" alt="">
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr >
                <td style="height:20px;width: 8%;"> <b class="tulisan" >STUDENT NAME</b></td>
                <td style="height:20px;width: 30%;text-transform:uppercase;">: <b>{{$card->Student->name}} </b></td>
            </tr>
            <tr >
                <td style="height:20px;width: 8%;"> <b class="tulisan" >STUDENT NAME</b></td>
                <td style="height:20px;width: 30%;text-transform:uppercase;">: <b>{{$card->Student->nonik}} </b></td>
            </tr>
            <tr >
                <td style="height:20px;"> <b class="tulisan" >CLASS</b></td>
                <td style="height:20px;text-transform:uppercase;">: <b>{{$card->Kategori->nama}}</b></td>
            </tr>
            <tr style="height: 15px;vertical-align: middle;">
                <td style="height:20px;"><b class="tulisan" >TERM</b></td>
                <td style="height:20px;text-transform:uppercase"><b class="tulisan"
                   >:  {{ Carbon\Carbon::parse($card->tanggal)->format(' F Y')  }}</b></td>
            </tr>
        </table>

    <table class="stripe" style="width: 100%;">
        <thead >
            <tr>
                <th style="height: 25px;text-align:left;font-size: 15px;background-color: #1d6962 ;color:white">
                    SUBJECT</th>
                <th style="height: 25px;text-align:center;font-size: 15px;background-color: #1d6962 ;color:white">
                    SCORE</th>
            </tr>
        </thead>
        @foreach ($cardpoint as $key => $item)
        <tr>
            <td style="height: 25px;font-size: 12px">{{$item['point']}}</td>
            <td style="height: 25px;text-align:center;font-size: 12px">{{$item['score']}}</td>
        </tr>
        @endforeach
    </table>
    <table class="stripe one">
        <thead class="thead-dark">
            <tr>
                <th  style="height: 25px;text-align:center!important;font-size: 15px;background-color: #1d6962 ;color:white">SCORE SCALE</th>

            </tr>
            </thead>
            <tr>
                <td style="font-size: 12px">>80 = Achieving</td>
            </tr>
            <tr>
                <td style="font-size: 12px">60-80 = Developing</td>
            </tr>
            <tr>
                <td style="font-size: 12px"><60 = Need Improvement</td>
            </tr>
    </table>
    <table class="stripe two" >
        <thead >
            <tr>
                <th
                    style="height: 25px;text-align:center!important;font-size: 15px;background-color: #1d6962 ;color:white">
                    NOTES</th>
            </tr>
        </thead>
        <tr>
            <td rowspan="3" style="font-size: 12px;height: 35px;line-height:2;vertical-align:top;padding-top:0;">{{$card->Note}}</td>
        </tr>
    </table>

    {{-- <div class="row">
        <div class="col-md-12 mt-4 text-right" style="text-align: right">
            <p class="" style="font-size: 20px">www.binarykiddo.id</p>
        </div>
    </div> --}}


</body>

</html>
