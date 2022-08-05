<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
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
<head>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <title>Orio</title>


</head>
<body>

<div class="container">
    <div class="mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4">
                <a href="index.php"> <img class="img-fluid" src="{{asset('assets/img/Orio Logo Trace-02.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<h4 style="font-size: 30px; color: #6d1ed4; margin-top: 150px" class="text-center" data-aos="zoom-in"
    data-aos-duration="950" data-aos-delay="500">
    @if(isset($message))
        {{$message}}
    @else
        Coming Soon
    @endif

</h4>
<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
<script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="languageScript.js" type="text/javascript"></script>
