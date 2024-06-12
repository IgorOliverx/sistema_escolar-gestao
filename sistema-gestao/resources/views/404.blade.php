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
    <main class="main" style="position: relative; margin: center;">
        <section class="section">
            <div class="left">
                <img src="/images/eror.gif" alt="404 animado" width="200px" height="200px" style="position: relative; left: 5px">
                <p>Página não encontrada</p>
                <h4>Não conseguimos encontrar <br> a página que você está procurando.</h4>
                <a href="/dashboard" class="btn">Home</a>
            </div>
            <div class="right">
                <img src="/images/Erro.png" alt="imagem de erro 404">
                <div class="shadow"></div>
            </div>
        </section>
    </main>
    </body>
@endsection
