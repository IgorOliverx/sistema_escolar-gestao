@extends('layouts.master')

<nav class="navbar navbar-expand-lg overflow-hidden" style="background-color: #e30707">
    <div class="container-fluid overflow-hidden">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">
            <img src="/images/logo_senai_branco.png" alt="Logo-Senai" width="180px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <h2 style="margin-left: 30px; color: white; font-size: 25px">{{ explode(' ', \Illuminate\Support\Facades\Auth::user()->nome)[0] }}
        </h2>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="">Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('estoque') }}">Estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Gráficos</a>
                </li>
            </ul>



            <div class="icons-container">
                <ul class="navbar-nav">
                    @if(!\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user fa-2x" style="color: #ffffff;"></i></a>
                    </li>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit()">
                                <i class="bi bi-box-arrow-left fa-2x" style="color: #ffffff"></i>
                            </a>
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>