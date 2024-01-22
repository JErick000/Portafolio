<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--estilos-->
    <style>
        .centrar{
            margin: auto;
            display: block;

        }
        nav a:hover{
            background: #E0A92E;
            transition: 0.5s;
        }
/*carrusel*/

            .slide {
                position: relative;
                box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
                margin-top: 26px;
            }
            .slide-inner {
                position: relative;
                overflow: hidden;
                width: 100%;
                height: calc( 300px + 3em);
            }
            .slide-open:checked + .slide-item {
                position: static;
                opacity: 100;
            }
            .slide-item {
                position: absolute;
                opacity: 0;
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }
            .slide-item img {
                display: block;
                height: auto;
                max-width: 100%;
            }
            .slide-control {
                background: rgba(0, 0, 0, 0.28);
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                display: none;
                font-size: 40px;
                height: 40px;
                line-height: 35px;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(0, -50%);
                cursor: pointer;
                -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
                text-align: center;
                width: 40px;
                z-index: 10;
            }
            .slide-control.prev {
                left: 2%;
            }
            .slide-control.next {
                right: 2%;
            }
            .slide-control:hover {
                background: rgba(0, 0, 0, 0.8);
                color: #aaaaaa;
            }
            #slide-1:checked ~ .control-1,
            #slide-2:checked ~ .control-2,
            #slide-3:checked ~ .control-3 {
                display: block;
            }
            .slide-indicador {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }
            .slide-indicador li {
                display: inline-block;
                margin: 0 5px;
            }
            .slide-circulo {
                color: #828282;
                cursor: pointer;
                display: block;
                font-size: 35px;
            }
            .slide-circulo:hover {
                color: #aaaaaa;
            }
            #slide-1:checked ~ .control-1 ~ .slide-indicador 
                 li:nth-child(1) .slide-circulo,
            #slide-2:checked ~ .control-2 ~ .slide-indicador 
                  li:nth-child(2) .slide-circulo,
            #slide-3:checked ~ .control-3 ~ .slide-indicador 
                  li:nth-child(3) .slide-circulo {
                color: #428bca;
            }
            #titulo {
                width: 100%;
                position: absolute;
                padding: 0px;
                margin: 0px auto;
                text-align: center;
                font-size: 27px;
                color: rgba(255, 255, 255, 1);
                font-family: 'Open Sans', sans-serif;
                z-index: 9999;
                text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
                     -1px 0px 2px rgba(255, 255, 255, 0);
            }
        /*cartas = new cards*/

        .new-cards{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 25px;
        }
        .new-cards img{
            width: 80%;
            height: 180px;

        }
        .new-cards h3{
            font-size: 20px;
            margin: 10px;
        }
        .new-cards a{
            padding: 10px 0;
            color: #E0A92E;
            text-transform: uppercase;
            display: inline-block;
            font-weight: bold;
            text-decoration: none;
        }

       .new-cards a:hover{
        text-decoration: underline;
       }

    </style>
    <div class="container border" style="background-color:white;" >
    <header>
        <div style="background-color:#25BAE2; color:white">
        <div align="right">
            <img class="centrar" src="img/logo.png" width="35%">
        </div>
    </div>
    </header>