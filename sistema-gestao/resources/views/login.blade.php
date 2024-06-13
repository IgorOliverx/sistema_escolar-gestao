@extends('layouts.master')

@section('content')
    <style>
        *{
            overflow: hidden;
        }
    </style>
    <div id="vanta-canvas" style="
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    ">
        <nav class="navbar navbar-expand-lg pl-5 pr-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="images/Logo-senai-bw.png" alt="Logo-Senai preto e branco" width="150px" height="40px" id="img-logo">
                    <a href="" class="navbar-brand ml-0" style="position: relative; bottom: -8px" >
                        <p class="text-primary text-light">
                            EDUCAÇÃO <br> ONLINE
                        </p>
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                    </ul>
                </div>
                <div class="icons-container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; border-radius: 20px; background-color: white"> <i class="fa-solid fa-question" style="color: #000000;"></i></div>
                        </li>
                        <li class="nav-item" >
                            <div class="toggle">
                                <input type="checkbox" id="foo">
                                <label for="foo" id="checkbox"></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <x-formLogin></x-formLogin>

        <button class="btn btn-primary" id="btn-handler" style="position: relative; left: 96%; top: -50%"><i class="fa-sharp fa-regular fa-hand" style="color: #ffffff;"></i></button>

        <p style="
        width: 100%;
        display: flex;
        justify-content: center;
        text-transform: uppercase;
        color: white;
        font-family:'Abel', sans-serif;
        font-weight: 500;
        position: absolute;
        bottom: 0;
                ">© SENAI-SP - 2024</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.164.1/three.module.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.net.min.js"></script>
    <script>
      let background =  VANTA.NET({
            el: "#vanta-canvas",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xfc0056,
            backgroundColor: 0x7d2a2a
        });

      const buttonBackground = document.getElementById('foo');
      const logoImage = document.getElementById('img-logo');

      buttonBackground.addEventListener('change', function (){
          if(this.checked){
              background.setOptions({
                  color: 0xff0000,
                  backgroundColor: 0x0
              });
              logoImage.src = '/images/LogoSenai.png';
          }else {
              background.setOptions({
                  color: 0xfc0056,
                  backgroundColor: 0x7d2a2a
              });
              logoImage.src =  'images/Logo-senai-bw.png'
          }
      });
    </script>

    <style>
        #img-logo {
            transition: opacity 0.5s ease-in-out;
        }
    </style>
@endsection
