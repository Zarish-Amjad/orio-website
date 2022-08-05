<link rel="stylesheet" href="assets/orio/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
<link
    href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i"
    rel="stylesheet">
<title>Orio</title>
<meta name="token" content="{{csrf_token()}}" id="token">
<style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 8px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 90px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

    body {
        top: 0px !important;
    }

    .table td, .table th {
        border-top: none;
    }

    .table thead th {
        border-bottom: none;
    }

    ::-webkit-scrollbar {
        width: 10px;
        border-radius: 15px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 15px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgb(197, 197, 197);
        border-radius: 15px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: rgb(155, 155, 155);
        border-radius: 15px;
    }

    .card1 {
        border-radius: 0;
    }

    ::placeholder {
        font-size: 14px;
    }

    #horn {
        -ms-transform: rotate(20deg); /* IE 9 */
        transform: rotate(-20deg);
    }

    #tab:hover {
        box-shadow: 0 0 9px #6d1ed4;
        transform: scale(1, 1.000111);
    }

    .input-group > .custom-file, .input-group > .custom-select, .input-group > .form-control {
        width: min-content;
    }
</style>
<body style="font-family:'Montserrat'; background: #f8fcff">
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
            <a href="index.php"><img src="assets/img/Orio Logo Trace-02.png" alt="Orio logo" width="auto" height="auto"></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-1 mt-5">
            <form id="filter_form" action="explore3.php" method="POST">
                <div class="input-group mb-3">
                    <select class="custom-select height-0" id="search_main" style="width: 10px;">
                        <option value="1" selected>Orio Tx Id</option>
                        <option value="2">Orio Address</option>
                    </select>

                    <input type="text" name="orioTxId" id="orioTxId" class="form-control"
                           placeholder="Search by Orio Address / Orio Tx Id"
                           aria-label="Text input with dropdown button" style="height: fit-content;">
                    <button type="submit" style="background: #6d1ed4; padding: revert;" class="btn">
                        <span class="input-group-text" style="background: #6d1ed4; border:none;"><img
                                src="assets/img/search-13-16.png" alt="" width="auto" height="auto"></span>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>

<div class="container" id="topdiv" style="background: #ffffff; box-shadow: 0 0 9px #bdbdbd; border-radius: 5px;">
    <div class="row px-4">
        <div class="col mt-3">
            <h6 style="font-size: 24px;"><span style="color: #6d1ed4;"> <b> ORIO </b> Explorer</span></h6>
        </div>
    </div>
    <div class="row py-2 px-4">
        <div class="col-lg-4 col-md-6 col-sm-12 px-3 mt-2 mb-3">
            <div class="card p-3 card1"
                 style="border: none; background: url(assets/img/imgpsh3.jpg) no-repeat center; background-size: cover; height: 100%;">
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 18px;"><span style="color: white;"> <b> LATEST </b>PRICE</span></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <h6 style="font-size: 24px; font-weight: 500;"><span
                                style="color: white;"> {{$latest_price}}</span></h6>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 px-3 mt-2 mb-3">
            <div class="card p-3 card1"
                 style="border: none; background: url(assets/img/imgpsh4.jpg) no-repeat center; background-size: cover; height: 100%;">
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 18px;"><span style="color: white;"> <b> TRANSACTIONS </b></span></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 24px; font-weight: 500;"><span
                                style="color: white;">{{$transactions}}</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 px-3 mt-2 mb-3">
            <div class="card p-3 card1"
                 style="border: none; background: url(assets/img/imgpsh2.jpg) no-repeat center; background-size: cover; height: 100%;">
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 18px;"><span style="color: white;"> <b> ALL ORIO USERS </b></span></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <h6 style="font-size: 24px; font-weight: 500;"><span
                                style="color: white;">{{$all_obyte_users}}</span>
                        </h6>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span style="font-size: 18px; font-weight: 500; color: white;">&nbsp; </span> <span
                            style="font-size: 14px; font-weight: 400; color: white;">   </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2 px-4">
        <div class="col-lg-4 col-md-6 col-sm-12 px-3 mt-2 mb-3">
            <div class="card p-3 card1"
                 style="border: none; background: url(assets/img/imgpsh3.jpg) no-repeat center; background-size: cover; height: 100%;">
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 18px;"><span style="color: white;"> TOTAL <b> SUPPLY</b></span></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 24px; font-weight: 500;"><span
                                style="color: white;"> {{$totalBalances}}</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 px-3 mt-2 mb-3">
            <div class="card p-3 card1"
                 style="border: none; background: url(assets/img/imgpsh3.jpg) no-repeat center; background-size: cover; height: 100%;">
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 18px;"><span style="color: white;"> DAILY <b> VOLUME</b></span></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 24px; font-weight: 500;"><span
                                style="color: white;">{{$responseDay}}</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 px-3 mt-2 mb-3">
            <div class="card p-3 card1"
                 style="border: none; background: url(assets/img/imgpsh3.jpg) no-repeat center; background-size: cover; height: 100%;">
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 18px;"><span style="color: white;">  <b>7 DAYS VOLUME</b></span></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 style="font-size: 24px; font-weight: 500;"><span
                                style="color: white;">{{$responseWeek}}</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2 condiv" style="background: #ffffff; box-shadow: 0 0 9px #bdbdbd; border-radius: 5px;">
    <div class="row">
        <div class="col mt-5 mb-5">
            <p class="px-3"><b>ORIO</b> TRANSECTION HISTORY IN 20 DAYS</p>
            <canvas id="myChart" style="width: 100%; height: 150px; padding-left: 20px; padding-right: 20px;"></canvas>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row mb-4">
        <div id="col1" class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-3 p-0">
            <div class="card px-0 card1"
                 style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; height: 100%; box-shadow: 0 0 9px #bdbdbd;">
                <div class="row" style="background: #6d1ed4; margin-right: 0%; margin-left: 0%;">
                    <h6 class="px-4 py-1 mt-2" style="font-size: 18px;"><span style="color: white;">  Latest Transactions </span>
                    </h6>
                </div>
                <div style="height: 400px; overflow-y: auto;">
                    <table class="table text-center">
                        <tbody>
                        <?php
                        foreach ($data as $value)
                        {
                        $stringorioTxId = strip_tags($value->orioTxId);
                        if (strlen($stringorioTxId) > 13) {
                            $stringCut = substr($stringorioTxId, 0, 13);
                            $endPoint = strrpos($stringCut, ' ');
                            $stringorioTxId = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $stringorioTxId .= '.....';
                        }
                        $udpated_at = $value->updatedAt;
                        date_default_timezone_set("Asia/Karachi");
                        $date1 = new DateTime(date("h:i:sa"));
                        $date2 = new DateTime((date("h:i:sa", strtotime($udpated_at))));
                        $interval = $date1->diff($date2);

                        $orio = $value->orio;
                        $action = $value->action;
                        $time = $interval->h;
                        $status = $value->status;
                        $orioNetworkFee = $value->orioNetworkFee;
                        $txFee = $value->txFee;
                        $txId = $value->orioTxId;

                        ?>


                        <form action="explore3.php" method="post">
                            <input type="hidden" name="orio" value=<?= $orio ?> />
                            <input type="hidden" name="action" value=<?= $action ?> />
                            <input type="hidden" name="time" value=<?= $time ?> />
                            <input type="hidden" name="status" value=<?= $status ?> />
                            <input type="hidden" name="orioNetworkFee" value=<?= $orioNetworkFee ?> />
                            <input type="hidden" name="txFee" value=<?= $txFee ?> />
                            <input type="hidden" name="txId" value=<?= $txId ?> />
                            <input type="submit" hidden value="Log me into this website"/>
                        </form>

                        <?php

                        echo '<tr onclick="postLogin(' . $orio . ',' . "'" . $action . "'" . ',' . $time . ',' . "'" . $status . "'" . ',' . $orioNetworkFee . ',' . $txFee . ',' . "'" . $txId . "'" . ')" id="tab" style="cursor: pointer;">';
                        echo '<td  class="px-4" style="display: flex;">';
                        echo '<span id="idd" style="border-radius: 3px; background: #6d1ed4; padding: 9px; color: white; font-size: small;">Tx</span>';
                        echo '<span style="position: relative; background: none; font-weight: 400; color: #6d1ed4;" class="badge badge-secondary p-1"> <b class="ml-2" style="font-size: medium;"> ' . $stringorioTxId . '</b> <br> ' . $interval->h . ' Hours   <span> ago</span> </span>';
                        echo '</td>';
                        echo '<td>';
                        echo '<span style="position: relative; background: none; font-weight: 400; color: #6d1ed4;" class="badge badge-secondary p-1"> <b style="font-size: medium;">' . $value->orioAddress . '</b> </span>';
                        echo '</td>';
                        echo '<td>';
                        echo "<span style='position: relative; background: #6d1ed4; font-weight: 400'; class='badge badge-secondary p-2'><b>" . $value->orio . "</b> ORIO </span>";
                        echo '</td>';
                        echo '<td>';
                        echo "<span style='position: relative; font-weight: 400'; class='p-2 badge badge-" . ($value->action == 'SELL' ? 'danger' : 'success') . "'>" . $value->action . "</span>";
                        echo '</td>';
                        echo '</tr>';
                        }

                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col p-0">
            <a href="explore1.php"><span style="float: right; font-size: 20px; font-weight: 500; color: #6d1ed4;"> Show More</span></a>
        </div>
    </div>
</div>

@include('.includes.footer_new')
</body>

<script src="assets/orio/js/Chart.bundle.min.js"></script>

<script src="{{asset('assets/js/chartsdata/transaction-history-chart.js')}}"></script>
<script src="{{asset('assets/orio/js/languageScript.js')}}" type="text/javascript"></script>


{{--<script>--}}

{{--    var latestData = <?php echo json_encode($latest_orio_last_record_result); ?>;--}}

{{--    var dates = new Array();--}}
{{--    var prices = new Array();--}}

{{--    for (let i = 0; i < latestData.length; i++) {--}}
{{--        dates [i] = toTimestamp(latestData[i].createdAt);--}}
{{--        prices [i] = parseFloat(latestData[i].orioCalculatedPrice).toFixed(4);--}}
{{--    }--}}
{{--    new Chart(document.getElementById('myChart'), {--}}
{{--        type: 'line',--}}
{{--        data: {--}}
{{--            labels: dates,--}}
{{--            datasets: [{--}}
{{--                label: 'Orio Price',--}}
{{--                data: prices,--}}
{{--                fill: false,--}}
{{--                borderColor: 'rgb(75, 192, 192)',--}}
{{--                tension: 0.1--}}

{{--            }]--}}
{{--        },--}}
{{--        options: {--}}
{{--            responsive: true,--}}
{{--            title: {--}}
{{--                display: false--}}
{{--            },--}}
{{--            legend: {--}}
{{--                display: false--}}
{{--            },--}}
{{--            scales: {--}}
{{--                xAxes: [{--}}
{{--                    type: 'time',--}}
{{--                    time: {--}}
{{--                        unit: 'day',--}}
{{--                        tooltipFormat: 'MMM DD'--}}
{{--                    }--}}
{{--                }],--}}
{{--            }--}}
{{--        }--}}
{{--    })--}}

{{--    function toTimestamp(strDate) {--}}
{{--        var datum = Date.parse(strDate);--}}
{{--        var date = new Date(datum);--}}
{{--        return date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate()--}}
{{--    }--}}

{{--</script>--}}


<script type="text/javascript">

    $('#inputGroupSelect01').on('change', function () {
        var filter_value = $(this).val();
        if (filter_value == '1') {
            $('#filter_form').attr('action', 'explore3.php');
            $('#orioTxId').attr('name', 'orioTxId');
        }

        if (filter_value == '2') {
            $('#filter_form').attr('action', '#');
            $('#orioTxId').attr('name', 'orioAddress');
        }
        console.log(filter_value);
    });

    function postLogin(orio_orio, action_orio, time_orio, status_orio, orioNetworkFee_orio, txFee_orio, txId_orio) {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "{{route('explorerDetails')}}");

        var params = {
            orio: orio_orio,
            action: action_orio,
            time: time_orio,
            status: status_orio,
            orioNetworkFee: orioNetworkFee_orio,
            txFee: txFee_orio,
            txId: txId_orio
        };
        for (var key in params) {
            if (params.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
</script>
