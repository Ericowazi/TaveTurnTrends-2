<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>TaveTurnTrends Fashion World</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  	<!-- Custom CSS -->
    <style type="text/css">
    /* temporary till no mpesa checkout here */
    /* lipa na mpesa img specification */
      #paypal-button img{
        width: 300px;
      }
      #paypal-button p{
        font-size: 1.5em;
      }
      /* emphasize span text */
      #paypal-button span{
        color: #09ab08;
        font-weight: 900;
      }
      /* till no given padding top and color to emphasize */
      #paypal-button .tillno{
        color: #da0707;
        padding-top: 1em;
      }
      #paypal-button .pcontent ol{
        margin-left: -1.6em;
      }
      /* confirmation btn where the code is whatsapped to a specific number */
      #paypal-button .pcontent a{
        text-decoration: none;
        color: #fff;
        background: #333;
        padding: .2em;
        border-radius: .3em;
        box-shadow: 4px 3px 0 #67ea16;
      }
      /* send code button */
      #paypal-button .pcontent .tillnoo{
        margin-top: 1em;
      }
      /* label for checkout from here */
      #paypal-button .disclaimer{
      margin-bottom: 1em;
      }
      #paypal-button .disclaimer label{
        font-size: 1.4em;
        padding: .2em .3em;
        display: inline-block;
        cursor: pointer;
        text-align: left;
        background-color: #fff;
        color: #000;
      }
      input#menu{
        display: none;
      }
      #paypal-button .pcontent{
        max-height: 0;
        overflow: hidden;
      }
      #paypal-button .disclaimer input:checked ~ .pcontent{
        max-height: 100%;
        padding: .5em;
        margin-bottom: 1em;
        background: #fff;
        /* border: 1px dashed #343a40; */
      }

      .navbar-header .navbar-brand{
        color: #f98c00;

      }
    .skin-blue .main-header .navbar{
      background-color: #000;
    }

    /* about us and contact us css here */
    .about-about {
      padding-bottom: 30px;
    }
    .space{
      padding: 20px 0;
    }
    .about-about img{
      display: block;
      max-width: 100%;
      height: auto;
    }
    .about-about h1{
      font-size: 38px;
      font-weight: 700;
      margin-top: 40px;
      color: #000;
    }
    .about-about .h11{
      text-align: center;
      color: #333;
      font-size: 25px;
    }
    .about-about h1 span{
      color: #f98c00
    }
    .about-about .list-unstyled .pr-10{
      padding-right: 10px;
      color: #f98c00;
    }
    .about-about .panel-heading{
      font-weight: 400;
      padding: 12px 35px 12px 15px;
      display: inline-block;
      width: 100%;
      background-color: #f98c00;
      color: #000;
      position: relative;
      text-decoration: none;
    }
    .about-about .panel-title a{
      color: #fff;
    }
    .about-about h2{
      display: block;
      color: #333333;
      margin-top: 20px;
      font-size: 28px;
      margin-bottom: 15px;
      margin-block-start: 0.83em;
      margin-block-end: 0.83em;
      margin-inline-start: 0px;
      margin-inline-end: 0px;

    }
    .about-about .large{
      font-size: 18px;
      padding: 0;
    }
    .about-about .excesss{
      color: #f98c00;
      font-size: 2em;
    }

    .about-about .panell-body {
      display: grid;
      grid-gap: .5em;
      grid-template-columns: repeat(auto-fit, minmax(50px, 100px ));
    }
    .about-about .panell-body img{
      margin: .5em .25em .5em .5em;
      widows: 100%;
      box-shadow: 0 1px 5px;
      width: 100px;
      height: 150px;
    }
    /* contact us from here */
    .about-about .list-icons li{
      padding: 0 0 15px 0;
    }
    .about-about .list-icons {
      text-align: left;
      list-style: none;
      font-size: 18px;
      margin: 20px 0 20px -40px;
    }

    /* small devices (768px and below) */
    @media (max-width: 767px){
      .navbar-header .navbar-brand{
        font-size: 1.1em;
      }
      /* cart view table, we reduce the width */
      .content #tablle{
        font-size: .6em;
      }
    }
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){
      #navbar-search-input{
        width: 60px;
      }
      #navbar-search-input:focus{
        width: 100px;
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){
      #navbar-search-input{
        width: 150px;
      }
      #navbar-search-input:focus{
        width: 250px;
      }
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em;
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }

    </style>

</head>
