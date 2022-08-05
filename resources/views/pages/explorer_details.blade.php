<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
<link
    href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i"
    rel="stylesheet">
<title>Orio</title>
<style>
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
        font-size: 13px;
        color: #ff1919;
    }

    #horn {
        -ms-transform: rotate(20deg); /* IE 9 */
        transform: rotate(-20deg);
    }

    .c-p {
        cursor: pointer;
    }

    #img1:hover {
        border-bottom: none;
    }
</style>
<body style="font-family:'Montserrat';">
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-6 col-md-12 col-sm-12 mt-5 p-0" style="display: flex;">
            <span class="mt-1"> <img id="img1" onclick="goBack()" class="img-fluid c-p" src="assets/img/backnew1.png"
                                     alt=""> </span>
            <span class="ml-2"> <a href="index.php"><img src="assets/img/Orio Logo Trace-02.png" alt=""></a></span>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 px-1 mt-5">
            <form action="#" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle" style="font-size: 13px;" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Filters
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </div>

                    <input type="text" name="orioTxId" id="orioTxId" class="form-control"
                           placeholder="Search by address/Txn Hash/Block/Token/Ens"
                           aria-label="Text input with dropdown button">
                    <button type="submit" style="background: #6d1ed4;" class="btn">
                        <span class="input-group-text" style="background: #6d1ed4; border:none;"><img
                                src="assets/img/search-13-16.png" alt=""></span>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row p-1">
        <div class="col-lg-3 col-md-6 col-sm-12 px-0">
            <p class="py-1 px-2"
               style="background: #6d1ed4; color: white; border-radius: 5px; font-size: 15px; margin-left: -13px;"><b>TOTAL
                    ORIO : </b>
                {{$totalBalance}}
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-2">
        <div class="col-lg-7 col-md-12 col-sm-12 px-1">
            <span style="font-size: 15px; font-weight: 600;"> Transaction Details</span>

            <?php
            //    if(isset($_POST['orio']) )
            //        {
            //        $orio_val = $_POST['orio'];
            //        $action_val = $_POST['action'];
            //        $time_val = $_POST['time'];
            //        $status_val = $_POST['status'];
            //        $orioNetworkFee_val = $_POST['orioNetworkFee'];
            //        $txFee_val = $_POST['txFee'];
            //        $txId_val = $_POST['txId'];
            //        }
            ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col px-1">
            <span style="font-size: 13px; font-weight: 700;"> Sponsored: <b>StormGain</b> - Enjoy The best AIRDROP - GET 25 USDT For FREE! <span
                    style="color: #6d1ed4;">Just Take A Look</span> </span>

        </div>
    </div>
</div>
<div class="container mb-4" style="box-shadow: 0 0 9px #bdbdbd; border-radius: 5px;">
    <nav class="nav">
        <a class="nav-link" style="color: #6d1ed4;" href="#"><b>Overview</b></a>
        <a class="nav-link disabled" href="#">Access List</a>
        <a class="nav-link disabled" href="#">State</a>
        <a class="nav-link disabled" href="#">Comments</a>
    </nav>
    <div class="row mb-2 px-3 py-2">
        <div class="col-4 mt-3">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span
                style="font-size: 15px; font-weight: 500;"> Transaction ID:</span>
        </div>
        <div class="col-8 mt-3">
            <?php
            if (!isset($res_data)) {
//            echo '<span style="font-size: 14px; font-weight: 600;">'.$txId_val.'</span>';
            } else {
//            echo '<span style="font-size: 14px; font-weight: 600;">'.$res_data->response->orioTxId.'</span>';
            }

            ?>
        </div>
    </div>
    <div class="row mb-0 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span style="font-size: 15px; font-weight: 500;"> Status:</span>
        </div>
        <div class="col-8">
            <?php
            //          if($status_val != NULL)
            //          {
            //          echo '<p><b class="py-2" style="background: #6d1ed4; color: white; border-radius: 3px; font-size: 12px; padding: 2px; font-weight: 400;"> &nbsp; <span style="font-size: small;">'.$status_val.'</span> &nbsp;</b></p>';
            //          }
            //          else if($res_data != NULL)
            //          {
            //           echo '<p><b class="py-2" style="background: #6d1ed4; color: white; border-radius: 3px; font-size: 12px; padding: 2px; font-weight: 400;"> &nbsp; <span style="font-size: small;">'.$res_data->response->status.'</span> &nbsp;</b></p>';
            //          }
            ?>
        </div>
    </div>
    <div class="row mb-0 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span style="font-size: 15px; font-weight: 500;"> Action:</span>
        </div>
        <div class="col-8">
            <?php
            if (!isset($res_data)) {
//         echo "<span style='position: relative; font-weight: 400'; class='p-2 badge badge-".($action_val == 'SELL' ? 'danger' : 'success')."'>".$action_val."</span>";
            } else {
//         echo "<span style='position: relative; font-weight: 400'; class='p-2 badge badge-".($res_data->response->action == 'SELL' ? 'danger' : 'success')."'>".$res_data->response->action."</span>";
            }

            ?>
        </div>
    </div>
    <div class="row mb-2 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span
                style="font-size: 15px; font-weight: 500;"> Timestamp:</span>
        </div>
        <div class="col-8">
            <?php
            date_default_timezone_set("Asia/Karachi");
            //      $date1 = new DateTime(date("h:i:sa"));
            //      $date2 = new DateTime((date("h:i:sa",$Updated_At)));
            //      $interval = $date1->diff($date2);
            //      if($time_val != NULL)
            //         {
            //            echo '<span style="position: relative; background: none; font-weight: 400;  font-size: 17px; color: #6d1ed4;" class="badge badge-secondary p-1">'.$time_val.' Hours   <span> ago</span> </span>';
            //         }
            //         else if($res_data != NULL)
            //         {
            //            echo '<span style="position: relative; background: none; font-weight: 400;  font-size: 17px; color: #6d1ed4;" class="badge badge-secondary p-1">'.$interval->h.' Hours   <span> ago</span> </span>';
            //         }
            ?>
        </div>
    </div>
    <div class="row mb-0 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span style="font-size: 15px; font-weight: 500;">  ORIO:</span>
        </div>
        <div class="col-8">
            <?php
            //  if($orio_val != NULL)
            //        {
            //            echo '<p><b class="py-2" style="background: #6d1ed4; color: white; border-radius: 3px; font-size: 12px; padding: 2px; font-weight: 400;"> &nbsp; <span style="font-size: small;">'.$orio_val.'</span> &nbsp;</b></p>';
            //        }
            //        else if($res_data != NULL)
            //        {
            //            echo '<p><b class="py-2" style="background: #6d1ed4; color: white; border-radius: 3px; font-size: 12px; padding: 2px; font-weight: 400;"> &nbsp; <span style="font-size: small;">'.$res_data->response->action.'</span> &nbsp;</b></p>';
            //        }
            ?>
        </div>
    </div>
    <div class="row mb-2 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span style="font-size: 15px; font-weight: 500;">  Transaction fee:</span>
        </div>
        <div class="col-8">
            <?php
            //   if(!isset($res_data))
            //        {
            //            echo '<span style="font-size: 15px; font-weight: 600; color: rgb(121, 116, 116);">'.$orioNetworkFee_val.'</span>';
            //        }
            //        else
            //        {
            //            echo '<span style="font-size: 15px; font-weight: 600; color: rgb(121, 116, 116);">'.$res_data->response->orioNetworkFee.'</span>';
            //        }
            ?>
        </div>
    </div>
    <div class="row mb-2 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span
                style="font-size: 15px; font-weight: 500;">  Gas Price:</span>
        </div>
        <div class="col-8">
            <?php
            //        if(!isset($res_data))
            //        {
            //            echo '<span style="font-size: 15px; font-weight: 600; color: rgb(121, 116, 116);">'.$txFee_val.'</span>';
            //        }
            //        else
            //        {
            //            echo '<span style="font-size: 15px; font-weight: 600; color: rgb(121, 116, 116);">'.$res_data->response->txFee.'</span>';
            //        }
            ?>
        </div>
    </div>
    <div class="row mb-2 px-3 py-2">
        <div class="col-4">
            <span
                style="border-radius: 2px;background: #6d1ed4;padding-right: 4px;padding-left: 4px;color: #ffffff;font-size: 10px; vertical-align:middle;"><i
                    class="fa fa-question"></i></span> <span
                style="font-size: 15px; font-weight: 500;">  Txn Type:</span>
        </div>
        <div class="col-8">
            <span style="font-size: 15px; font-weight: 600; color: rgb(121, 116, 116);">Null</span>
        </div>
    </div>
</div>
@include('.includes.footer_new')
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
