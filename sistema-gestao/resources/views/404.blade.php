@extends('layouts.master')

@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            text-decoration: none;
            list-style: none;
        }
        body{
            background: #FF303A;
            overflow: hidden;
        }
        .header{
            position: fixed;
            width: 100%;
            padding: 40px 60px;
            overflow: hidden;
        }
        .navigation{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo{
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
        }
        .navigation ul{
            display: flex;
            align-items: center;
            gap: 60px;
        }
        .navigation ul li a{
            color: #fff;
            font-size: 1.2rem;
            transition: all .1s ease;
        }
        .navigation ul li a:hover{
            border-bottom: 3px solid #fff;
        }
        .main{
            overflow: hidden;
        }
        .section{
            padding: 8rem;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .left{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .left p{
            font-size: 2.2rem;
            color: #fff;
            margin-bottom: 10px;
        }
        .left h4{
            font-size: 3.5rem;
            color: darkred;
            margin-bottom: 3rem;
        }
        .btn{
            padding: 1.5rem 5rem;
            background: darkred;
            border-radius: 15px;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        .btn:hover{
            box-shadow: 0 1px 4px darkred;
        }
        .right img{
            width: 500px;
            margin-bottom: 1rem;
            animation: float 1.8s infinite alternate;
        }
        .shadow{
            width: 450px;
            height: 45px;
            background: hsla(38, 21%, 19%, .16);
            border-radius: 50%;
            margin: 0 auto;
            filter: blur(5px);
            animation: shadow 1.8s infinite alternate;
        }
        @keyframes float{
            0%{
                transform: translateY(0);
            }
            100%{
                transform: translateY(15px);
            }
        }
        @keyframes shadow{
            0%{
                transform: scale(1.1);
            }
            100%{
                transform: scale(.85,.85);
            }
        }
    </style>
    <body>

    <nav class="navbar navbar-expand-lg pl-5 pr-5" style="background-color:darkred; overflow:hidden;">
        <div class="container-fluid" style="overflow:hidden;">
            <a class="navbar-brand" href="#">
                <img src="/images/logo_senai_branco.png" alt="Logo-Senai preto e branco" width="150px" height="40px">
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

            <div class="icons-container" style="overflow: hidden">
                <ul class="navbar-nav" style="overflow:hidden;">

                    @if(!\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item" style="overflow:hidden;">
                            <a style="cursor: pointer" class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-user fa-2x" style="color: #ffffff;"></i></a>
                        </li>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item" style="overflow:hidden;">
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
    </nav>
    <main class="main" style="position: relative; top: -80px; overflow:hidden;">
        <section class="section" style="overflow:hidden;">
            <div class="left" style="overflow:hidden;">
                <img src="/images/eror.gif" alt="404 animado" width="200px" height="200px" style="position: relative; left: 5px; overflow:hidden;">
                <p>Página não encontrada</p>
                <h4>Não conseguimos encontrar <br> a página que você está procurando.</h4>
                <a href="/dashboard" class="btn">Home</a>
            </div>
            <div class="right" style="overflow:hidden;">
                <img src="/images/Erro.png" alt="imagem de erro 404" style="overflow:hidden;">
                <div class="shadow"></div>
            </div>
        </section>
    </main>
    </body>
@endsection
