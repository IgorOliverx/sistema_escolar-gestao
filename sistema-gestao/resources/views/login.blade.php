@extends('layouts.master')

@section('content')
    <div id="vanta-canvas" style="
    width: 100vw;
    height: 100vh;
    overflow: hidden;

    ">
        <x-portalheader></x-portalheader>

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
        VANTA.NET({
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
        })
    </script>


    <script>

        const btnRotate = document.getElementById('btn-handler');


    </script>
@endsection
