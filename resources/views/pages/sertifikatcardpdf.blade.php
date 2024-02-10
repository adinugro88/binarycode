<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>



        @page {
            size: 29cm 21cm landscape;
            margin: 0em 0em 0em 0em;
            padding: 0em;
        }

        body {
            padding: 0px;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        td {
            color: #1d6962;
        }

        .one {
            float: left;
            width: 25%;
        }

        .two {
            float: right;
            width: 75%;
        }

        .stripe tr:nth-child(odd) {
            background-color: #ededed;
        }

        .pl-3 td,
        th {
            padding-left: 5px
        }

        .tmsrw {
            font-family: 'Times New Roman', Times, serif;
        }

        .page_atas {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: url('backfinal.jpg');
            background-repeat: no-repeat;
            background-position: top center;
            z-index: -1;
            background-size: cover;
            margin: 0em 0em 0em 0em;
            padding: 0em;
        }

        .absolute {
            margin-top: -25px;
        }

        .padbody {
            padding: 1em 2em 1em 2em;
        }

        @font-face {
            font-family: 'mono';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url({{ storage_path("fonts/monotype-corsiva.ttf") }}) format("truetype");
        }

        .nama {
            position: absolute;
            top: 40%;
            left: 28.7%;
            font-family: 'mono';
            font-size: 75px;
            font-style: normal;
            color: #a09d0e;
        }

        .kelasdpn {
            position: absolute;
            top: 62%;
            left: 29.5%;
            font-family:Arial, Helvetica, sans-serif;
            font-size: 25px;
        }

        .tanggal{
            position: absolute;
            bottom: 5.1%;
            right: 20%;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            font-weight: 400;
        }

    </style>
</head>

<body>
    <div class="page_atas">
        <p class="nama">{{$card->Student->name}}</p>
        <p class="kelasdpn">HAS COMPLETED THE <b>{{$card->Kategori->nama}}</b>  </p>
        <p class="tanggal"> {{ Carbon\Carbon::parse($card->tanggal)->format(' F Y')  }}</p>
    </div>
    <div style="page-break-before: always;"></div>
    <div class="padbody">
        <table style="width: 100%; border-bottom:5px solid #97C3d9;margin-bottom:0;">
            <tr>
                <td style="height: 16px;text-align:left;vertical-align: middle;font-weight:700;" class="tmsrw">
                    <b style="font-size: 55px;"> STUDENT REPORT</b>
                    <img class="absolute" src="lulus.png" width="50" alt="">
                </td>
                <td style="height:16px; vertical-align: middle;text-align:right">
                    <img src="logo.png" width="130" alt="">
                </td>
            </tr>
        </table>

        <table style="width: 100%;margin-top:0;">
            <tr>
                <td><b style="font-size: 35px;font-weight:700">BINARY KIDDO</b> </td>
            </tr>
        </table>


        <table style="width: 100%;margin-top:0;border-bottom:5px solid #97C3d9;padding-bottom:16px;">
            <tr>
                <td style="height:30px;width: 8%;"> <b class="tulisan">STUDENT NAME</b></td>
                <td style="height:30px;width: 30%;text-transform:uppercase; border-bottom: 2px solid #1d6962">:
                    <b>{{$card->Student->name}} </b></td>
            </tr>
            <tr>
                <td style="height:30px;width: 8%;"> <b class="tulisan">STUDENT NAME</b></td>
                <td style="height:30px;width: 30%;text-transform:uppercase;border-bottom: 2px solid #1d6962">:
                    <b>{{$card->Student->nonik}} </b></td>
            </tr>
            <tr>
                <td style="height:30px;"> <b class="tulisan">CLASS</b></td>
                <td style="height:30px;text-transform:uppercase;border-bottom: 2px solid #1d6962">:
                    <b>{{$card->Kategori->nama}}</b></td>
            </tr>
            <tr style="height: 16px;vertical-align: middle;">
                <td style="height:30px;"><b class="tulisan">TERM</b></td>
                <td style="height:30px;text-transform:uppercase;border-bottom: 2px solid #1d6962">
                    <b class="tulisan">: {{ Carbon\Carbon::parse($card->tanggal)->format(' F Y')  }}</b></td>
            </tr>
        </table>

        <table class="stripe pl-3" style="width: 100%;margin-top:16px">
            <thead>
                <tr>
                    <th style="height: 25px;text-align:left;font-size: 16px;background-color: #1d6962 ;color:white">
                        SUBJECT</th>
                    <th style="height: 25px;text-align:center;font-size: 16px;background-color: #1d6962 ;color:white">
                        SCORE</th>
                </tr>
            </thead>
            <?php $number = 1; ?>
            @foreach ($cardpoint as $key => $item)
            <tr>
                <td style="height: 25px;font-size: 14px"> {{ $number }}. &nbsp; {{$item['point']}} <?php $number++; ?>
                </td>
                <td style="height: 25px;text-align:center;font-size: 14px">{{$item['score']}}</td>
            </tr>
            @endforeach
        </table>
        <table class="stripe one pl-3" style="margin-top:16px">
            <thead class="thead-dark">
                <tr>
                    <th
                        style="height: 25px;text-align:left!important;font-size: 16px;background-color: #1d6962 ;color:white">
                        SCORE SCALE</th>

                </tr>
            </thead>
            <tr>
                <td style="height: 25px;font-size: 14px">>80 = Achieving</td>
            </tr>
            <tr>
                <td style="height: 25px;font-size: 14px">60-80 = Developing</td>
            </tr>
            <tr>
                <td style="height: 25px;font-size: 14px">
                    <60=Need Improvement</td> </tr> </table> <table class="stripe two" style="margin-top:16px">
                        <thead>
                            <tr>
                                <th
                                    style="height: 25px;text-align:center!important;font-size: 16px;background-color: #1d6962 ;color:white">
                                    NOTES</th>
                            </tr>
                        </thead>
            <tr>
                <td rowspan="3"
                    style="padding-left:10px;text-align:left; font-size: 15px;height: 79px;line-height:2;vertical-align:top;padding-top:0;">
                    {{$card->Note}}</td>
            </tr>
        </table>

        <div class="row " style="padding-top:150px;">
            <div class="col-md-12 mt-4 text-right pr-3" style="text-align: right;padding-right:5px;">
                <p class="" style="font-size: 14px;color:#1d6962">www.binarykiddo.id</p>
            </div>
        </div>
    </div>



</body>

</html>
