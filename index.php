<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>




    <title>Happiness Kingdom</title>
</head>
<style>
    html,
    body {
        height: 100%;
        width: 100%;
        font-family: 'Varela Round', sans-serif;
        color: #310b0b;
    }
    
    #miniHeader {
        background-color: #333a3c;
        color: #eeebdd;
        font-size: small;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 40px;
    }
    
    .space {
        margin-left: 10px;
        margin-right: 20%;
    }
    
    #cover {
        background: url(background.jpg) no-repeat center fixed;
        display: table;
        height: 430px;
        width: 100%;
        position: relative;
        background-size: cover;
    }
    
    .landing-text {
        display: table-cell;
        text-align: center;
    }
    
    .landing-text h1 {
        font-size: 45px;
        letter-spacing: 4px;
        line-height: 300%;
        color: #ffffff;
        font-family: 'Pacifico', cursive;
    }
    
    .smIcon {
        color: #e97878;
    }
    
    #parentBox {
        position: relative;
    }
    
    #floatingNav {
        position: absolute;
        top: 160px;
        transform: translateY(-50%);
    }
    
    nav {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    
    .menu {
        display: flex;
        justify-content: center;
    }
    
    .dropdown {
        padding: 20px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        background: #e97878;
        position: relative;
        font-size: 18px;
        perspective: 1000px;
        z-index: 100;
    }
    
    .dropdown:hover {
        background: #333a3c;
        cursor: pointer;
    }
    
    .dropdown:hover .dropdown_menu li {
        display: block;
    }
    
    .dropdown_menu {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        perspective: 1000px;
        z-index: -1;
    }
    
    .dropdown_menu li {
        display: none;
        color: #fff;
        background-color: #333a3c;
        padding: 10px 20px;
        font-size: 16px;
        opacity: 0;
    }
    
    .dropdown_menu li:hover {
        background-color: #e97878;
    }
    
    .dropdown:hover .dropdown_menu--animated {
        display: block;
    }
    
    .dropdown_menu--animated {
        display: none;
    }
    
    .dropdown_menu--animated li {
        display: block;
        opacity: 1;
    }
    
    .dropdown_menu-5 .dropdown_item-1 {
        transform-origin: top center;
        animation: translateX 300ms 60ms ease-in-out forwards;
    }
    
    .dropdown_menu-5 .dropdown_item-2 {
        transform-origin: top center;
        animation: translateX 300ms 120ms ease-in-out forwards;
    }
    
    .dropdown_menu-5 .dropdown_item-3 {
        transform-origin: top center;
        animation: translateX 300ms 180ms ease-in-out forwards;
    }
    
    .dropdown_menu-5 .dropdown_item-4 {
        transform-origin: top center;
        animation: translateX 300ms 240ms ease-in-out forwards;
    }
    
    .dropdown_menu-5 .dropdown_item-5 {
        transform-origin: top center;
        animation: translateX 300ms 300ms ease-in-out forwards;
    }
    
    @-moz-keyframes translateX {
        0% {
            opacity: 0;
            transform: translateX(60px);
        }
        80% {
            transform: translateX(-5px);
        }
        100% {
            opacity: 1;
            transform: translateX(0px);
        }
    }
    
    @-webkit-keyframes translateX {
        0% {
            opacity: 0;
            transform: translateX(60px);
        }
        80% {
            transform: translateX(-5px);
        }
        100% {
            opacity: 1;
            transform: translateX(0px);
        }
    }
    
    @-o-keyframes translateX {
        0% {
            opacity: 0;
            transform: translateX(60px);
        }
        80% {
            transform: translateX(-5px);
        }
        100% {
            opacity: 1;
            transform: translateX(0px);
        }
    }
    
    @keyframes translateX {
        0% {
            opacity: 0;
            transform: translateX(60px);
        }
        80% {
            transform: translateX(-5px);
        }
        100% {
            opacity: 1;
            transform: translateX(0px);
        }
    }
    
    .card {
        margin-top: 15%;
    }
    
    .container {
        background-color: #f3f4ed;
        width: 80%
    }
    
    .carousel-control-prev-icon {
        border-radius: 2px;
        background-color: #dc3545;
        width: 60px;
        height: 50px;
        position: absolute;
        right: 20%;
    }
    
    .carousel-control-next-icon {
        border-radius: 2px;
        background-color: #dc3545;
        width: 60px;
        height: 50px;
        position: absolute;
        left: 20%;
    }
    
    #footer {
        background-color: #424242;
        height: 200px;
    }
    
    a:link {
        color: green;
        background-color: transparent;
        text-decoration: none;
    }
    
    a:visited {
        color: rgb(255, 255, 255);
        background-color: transparent;
        text-decoration: none;
    }
    
    a:hover {
        color: rgb(182, 175, 175);
        background-color: transparent;
        text-decoration: underline;
    }
    
    a:active {
        color: rgb(102, 102, 101);
        background-color: transparent;
        text-decoration: underline;
    }
</style>

<body>
    <!-- miniHeader -->
    <div class="container-fluid smallText" id="miniHeader">
        Welcome to Happiness Kingdom
        <i class="fa fa-sun-o space" aria-hidden="true" style="color: #bdbdbd;"></i> </a>


    </div>

    <div id="parentBox">
        <div class="row container-md m-auto no-gutters " id="header">
            <div class=" col-3 d-flex justify-content-start">
                <img src="logo.png" alt="" class="img-fluid" style="height: 150px;">
            </div>

            <div class=" col-4 d-flex">
                <div class="col-5 d-flex justify-content-end m-auto px-4">
                    <i class="fa fa-phone fa-4x smIcon" aria-hidden="true"></i>
                </div>

                <div class="col-5 d-flex m-auto ">
                    <b> +97517574386 <br> +97567463874</b>
                </div>
            </div>
            <div class=" col-4 d-flex m-auto">
                <div class="col-5 d-flex justify-content-end m-auto px-4">
                    <i class="fa fa-clock-o fa-4x smIcon" aria-hidden="true">
                        </i>
                </div>

                <div class="col-8 d-flex m-auto ">
                    <b>Fri: 9:00-19:00 <br> <small>Sunday Closed</small></b>

                </div>
            </div>
        </div>
        <div>
            <div id="cover">
                <div class="landing-text">
                    <br><br><br>
                    <h1>A Soujourn in Paradise </h1>
                </div>
                <br>


            </div>

            <nav id="floatingNav">
                <ul class="menu">
                    <li class="dropdown dropdown-5" style="border-right: #e2dada solid thin; width: 250px; border-top-left-radius: 10px; border-bottom-left-radius: 10px">
                        Home
                        <ul class="dropdown_menu dropdown_menu-5">
                            <li class="dropdown_item-1">Item 1</li>
                            <li class="dropdown_item-2">Item 2</li>
                            <li class="dropdown_item-3">Item 3</li>
                            <li class="dropdown_item-4">Item 4</li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-5" style="border-right: #e2dada solid thin; width:250px">
                        About Us
                        <ul class="dropdown_menu dropdown_menu-5">
                            <li class="dropdown_item-1">Item 1</li>
                            <li class="dropdown_item-2">Item 2</li>
                            <li class="dropdown_item-3">Item 3</li>
                            <li class="dropdown_item-4">Item 4</li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-5" style=" width: 250px; border-top-right-radius: 10px; border-bottom-right-radius: 10px">
                        Contact Us
                        <ul class="dropdown_menu dropdown_menu-5">
                            <li class="dropdown_item-1">Item 1</li>
                            <li class="dropdown_item-2">Item 2</li>
                            <li class="dropdown_item-3">Item 3</li>
                            <li class="dropdown_item-4">Item 4</li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- parentBox closing -->

        <div class="content ">
            <!-- style="background-color: #e0e0e0; -->

            <div class="container-fluid ">
                <br><br>
                <center>
                    <h1>Popular Trips</h1><br></center>


                <div class="row ">
                    <div class="col-sm-12 ">
                        <div id="inam " class="carousel slide " data-ride="carousel ">
                            <div class="carousel-inner ">
                                <div class="carousel-item active ">
                                    <div class="container ">
                                        <div class="row ">
                                            <div class="col-sm-12 col-lg-4 ">
                                                <div class="card " style="width: 300px; ">
                                                    <img src="4.jpg " class="card-img-top ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Why you should use skin masks ?</h4>
                                                        <p class="card-text ">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                        <button type="button " class="btn btn-danger ">Read More</button>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-lg-4 ">
                                                <div class="card " style="width: 300px; ">
                                                    <img src="6.jpg " class="card-img-top ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Why you should use skin masks ?</h4>
                                                        <p class="card-text ">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                        <button type="button " class="btn btn-danger ">Read More</button>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-lg-4 ">
                                                <div class="card " style="width: 300px; ">
                                                    <img src="3.jpg " class="card-img-top ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Why you should use skin masks ?</h4>
                                                        <p class="card-text ">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                        <button type="button " class="btn btn-danger ">Read More</button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <div class="carousel-item ">
                                    <div class="container ">
                                        <div class="row ">
                                            <div class="col-sm-12 col-lg-4 ">
                                                <div class="card " style="width: 300px; ">
                                                    <img src="1.jpg " class="card-img-top ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Why you should use skin masks ?</h4>
                                                        <p class="card-text ">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                        <button type="button " class="btn btn-danger ">Read More</button>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-lg-4 ">
                                                <div class="card " style="width: 300px; ">
                                                    <img src="5.jpg " class="card-img-top ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Why you should use skin masks ?</h4>
                                                        <p class="card-text ">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                        <button type="button " class="btn btn-danger ">Read More</button>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-lg-4 ">
                                                <div class="card " style="width: 300px; ">
                                                    <img src="6.jpg " class="card-img-top ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Why you should use skin masks ?</h4>
                                                        <p class="card-text ">Skin masks help us to make are skin fresh and also they protect our skin from the harm rays of sun</p>
                                                        <button type="button " class="btn btn-danger ">Read More</button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                </div>

                            </div>
                            <a href="#inam " class="carousel-control-prev " data-slide="prev ">
                                <span class="carousel-control-prev-icon "></span>
                            </a>
                            <a href="#inam " class="carousel-control-next " data-slide="next ">
                                <span class="carousel-control-next-icon "></span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <br><br>
        </div>


        <div id="footer " class="container-fluid" style="background-color:#424242;">
            <div class="container row m-auto justify-content-center" style="height: 100%; color: white; background-color:#424242; ">
                <div class="col-4 px-5"><br>
                    <b> About Happiness Kingdom</b> <br>
                    <small>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.is dummy text used in laying out print, graphic or web designs </small>
                </div>

                <div class="col-4 px-3"><br>
                    <b> Quick Links</b> <br>
                    <small><a href=" # ">Home</a> </small><br>
                    <small><a href="# ">About Us</a> </small><br>
                    <small><a href="# ">Contact Us</a> </small>

                </div>
                <div class="col-4 px-3 ">
                    <br>
                    <b> Our Location</b><br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.353477652431!2d89.63885011437863!3d27.45825274300279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e195cdd3fb432f%3A0xb0556e70e79c1a52!2sHappiness%20Kingdom%20Travels!5e0!3m2!1sen!2sbt!4v1618395958103!5m2!1sen!2sbt "
                        width="400px " style="border:1; " allowfullscreen=" " loading="lazy "></iframe>

                </div>





            </div>
            <center style="font-size: 10px; color: rgb(196, 189, 189);">Copyright © 2020 | All rights reserved|Happiness Kingdom Travels
            </center>
            <br>



        </div>


        <br>

        <script src="bootstrap/js/bootstrap.min.js "></script>
</body>

</html>

</html>