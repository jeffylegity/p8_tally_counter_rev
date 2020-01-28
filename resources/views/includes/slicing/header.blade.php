<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Plant8 Tally Counter</title>

  <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/icons.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

  <style>
      #plan {  
      display: block;
      position: relative;
      height:100%;
      width:100%;
      }

      #plan::after {
      content: "";
      background:url("{{asset('assets/images/watermark/plan.png')}}");
      background-repeat: no-repeat;
      background-position: center center;
      opacity: 0.2;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: 1;  
      height:100%;
      width:100%;
      }

      #actual {  
      display: block;
      position: relative;
      height:100%;
      width:100%;
      }

      #actual::after {
      content: "";
      background:url("{{asset('assets/images/watermark/actual.png')}}");
      background-repeat: no-repeat;
      background-position: center center;
      opacity: 0.2;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: 1;  
      height:100%;
      width:100%;
      }
 
      #testblock {  
      display: block;
      position: relative;
      height:100%;
      width:100%;
      }

      #testblock::after {
      content: "";
      background:url("{{asset('assets/images/watermark/testblock.png')}}");
      background-repeat: no-repeat;
      background-position: center center;
      opacity: 0.2;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: 1;  
      height:100%;
      width:100%;
      }
  </style>
  
</head>
<body style="background-color:#ebeff2;">