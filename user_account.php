<?php
  session_start();

  if (!isset($_SESSION['u_id'])) {

      header("Location: login.php");
  }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Programming,learn code online">
        <meta name="author" content="Manoranjan Dash">

        <title>Welcome | Ed2pro.com</title>
        <!-- Preload CSS  -->
        <link rel="stylesheet" href="./css/preload.min.css" />

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MDB CSS -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Montserrat|Muli|Open+Sans|Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">


        <!-- Font Awesome CDN -->
        <script src="js/fontawesome-all.min.js" charset="utf-8"></script>
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script> -->

        <!-- Custom Style  -->

        <link href="css/style.css" rel="stylesheet">

        <link href="css/userstyle.css" rel="stylesheet">

        <script>
            // new WOW().init();

        </script>

        <!-- Smooth Scrolling -->
        <script src="./js/scrollreveal.js"></script>



        <style>
            /*primary_color: #007bff  */

        </style>

        <script>
            window.addEventListener('load', function() {
                var mspreload = document.getElementById("mspreload");
                // document.body.removeChild("mspreloader");
                mspreload.style.display = 'none';
                // setTimeout(mspreload, 4000);
            })

        </script>

    </head>


    <body>
        <!-- PreLoader -->
        <div class="container">
            <div id="mspreload" class="ms-preload">
                <div id="status">
                    <div class="spinner">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.PreLoader -->




        <!-- Bootstrap JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- <script src="./js/manualscroll.js"></script> -->
    </body>


    <!-- Smooth Scrooling  -->
    <script>
        $(function() {
            // Smooth Scrolling
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

    </script>

    <!-- /.Smooth Scrolling -->

    <!-- Animation -->

    <!-- <link href="css/animate.css" rel="stylesheet"> -->

    <!-- <script src="js/wow.min.js"></script> -->

    </html>
