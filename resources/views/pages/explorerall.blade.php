<?php //include ('api.php'); ?>
@include('.includes.exploreall_header')

<body style="font-family:'Montserrat';">
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-6 col-md-12 col-sm-12 mt-5" style="display: flex;">
            <span class="mt-1"> <img id="img1" onclick="goBack()" class="img-fluid c-p" src="assets/img/backnew1.png"
                                     alt=""> </span>
            <span class="ml-2"><a href="index.php"><img src="assets/img/Orio Logo Trace-02.png" alt=""></a></span>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 px-1 mt-5">
            <form action="explore3.php" method="POST">
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
<div class="container condiv2">
    <div class="row p-1 ml-1">
        <div class="col-lg-3 col-md-6 col-sm-12 px-0">
            <p class="py-1 px-2"
               style="background: #6d1ed4; color: white; border-radius: 5px; font-size: 15px; margin-left: -13px;"><b>TOTAL
                    ORIO :
                    {{$totalBalance}}
                </b>
            </p>
        </div>
    </div>
</div>
<div class="container condiv">
    <div class="row py-2">
        <div class="col px-1">
            <h5 style="font-weight: 700;">Transactions</h5>
        </div>
    </div>
</div>
<div class="container mb-4 condiv1" style="box-shadow: 0 0 9px #bdbdbd; border-radius: 5px;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12"
             style="background: #6d1ed4; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-left-radius: none; border-bottom-right-radius: none;">
            <h6 class="py-2 mt-1" style="color: white;"> More than >
                {{$totalTransactions}}
                transactions found <span
                    style="font-size: small; font-weight: 400;"> (Showing the last 500k records)</span></h6>
        </div>
    </div>
    <div class="row">
        <div class="col p-2">
            <div style="overflow-x: auto;">
                <table class="table">
                    <thead class="thead text-center" style="background: #e2d2f6; color: #6d1ed4;">
                    <tr>
                        <th scope="col">Txn Id</th>
                        <th scope="col">Age</th>
                        <th scope="col">Value</th>
                        <th scope="col">Txn Fee</th>
                        <th scope="col">Method</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody class="text-center" id="transTable" style="color: #6d1ed4;">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{--<div class="container">--}}
{{--    <div class="row py-1">--}}
{{--        <div class="col-lg-12 col-md-12 col-sm-12 py-3">--}}
{{--            <nav aria-label="Page navigation" style="float: right;">--}}
{{--                <ul class="pagination">--}}
{{--                <?php if($currentPage != $firstPage) { ?>--}}
{{--                <!--<li class="page-item">-->--}}
{{--                <!--  <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">-->--}}
{{--                    <!--	<span aria-hidden="true">&lt;&lt;</span>			-->--}}
{{--                    <!--  </a>-->--}}
{{--                    <!--</li>-->--}}

{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="?page=<?php echo $firstPage ?>" aria-label="Previous">--}}
{{--                            <span aria-hidden="true">&laquo;</span>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <?php } ?>--}}
{{--                    <?php if($currentPage >= 2) { ?>--}}
{{--                    <li class="page-item"><a class="page-link"--}}
{{--                                             href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a>--}}
{{--                    </li>--}}
{{--                    <?php } ?>--}}
{{--                    <li class="page-item active"><a class="page-link"--}}
{{--                                                    href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a>--}}
{{--                    </li>--}}
{{--                    <?php if($currentPage != $lastPage) { ?>--}}
{{--                    <li class="page-item"><a class="page-link"--}}
{{--                                             href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>--}}
{{--                    <!--<li class="page-item">-->--}}
{{--                <!--  <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">-->--}}
{{--                    <!--	<span aria-hidden="true">&gt;&gt;</span>-->--}}
{{--                    <!--  </a>-->--}}
{{--                    <!--</li>-->--}}

{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">--}}
{{--                            <span aria-hidden="true">&raquo;</span>--}}
{{--                            <span class="sr-only">Next</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <?php } ?>--}}
{{--                </ul>--}}
{{--            </nav>--}}

<!--<nav aria-label="Page navigation example">-->
<!--<ul class="pagination">-->
<!--<li class="page-item">-->
<!--<a class="page-link" href="#" aria-label="Previous">-->
<!--<span aria-hidden="true">&laquo;</span>-->
<!--<span class="sr-only">Previous</span>-->
<!--</a>-->
<!--</li>-->
<!--<li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--<li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--<li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--<li class="page-item">-->
<!--<a class="page-link" href="#" aria-label="Next">-->
<!--<span aria-hidden="true">&raquo;</span>-->
<!--<span class="sr-only">Next</span>-->
<!--</a>-->
<!--</li>-->
<!--</ul>-->
<!--</nav>-->
</div>
</div>
</div>
@include('.includes.footer_new')
<script src="{{asset('assets/js/tablesdata/paginate_transactions.js')}}"></script>
</body>
<script src="languageScript.js" type="text/javascript"></script>
<script type="text/javascript">
    function postLogin(orio_orio, action_orio, time_orio, status_orio, orioNetworkFee_orio, txFee_orio, txId_orio) {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "explore3.php");

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
