@extends('layouts.master')

@section('content')
<style>
    body{
        overflow-y: hidden;
    }
    .text {
        margin-top: 0;
        font-size: 1.1em;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal .content {
        background-color: #ffffff;
        margin: 15% auto;
        padding: 20px;
        border-radius: 5px;
        width: 50%;
        height: 500px;
        overflow: scroll;

        display: flex;
        flex-direction: column;
        align-items: center;

        color: black;
    }

    h2,
    h3 {
        font-family: "Archivo Black", sans-serif;
        font-size: 25px;
        font-weight: 400;
    }

    th {
        font-family: "Archivo Black", sans-serif;
        font-size: 15px;
        font-weight: 200;
    }

    .btn {
        font-family: "Archivo Black", sans-serif;
        font-size: 13px;
        font-weight: 200;
    }

    .sidebar h3 {
        font-family: "Archivo Black", sans-serif;
        font-size: 20px;
        font-weight: 200;
    }

    .content h2 {
        font-family: "Archivo Black", sans-serif;
        font-size: 30px;
        font-weight: 200;
    }

    .content .btn {
        font-family: "Archivo Black", sans-serif;
        font-size: 13px;
        font-weight: 200;
    }

</style>
<x-navbar></x-navbar>

<div class="main-content" id="main-content">

   <div class="menu-lateral">
    <article class="article">
        <svg style="width: 120px; height: 60px" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#242938" rx="60"/><path fill="#ff2d20" fill-rule="evenodd" d="M215.846 78.314c.064.243.098.494.098.747v39.199c0 .503-.131.997-.379 1.432a2.838 2.838 0 0 1-1.037 1.047l-32.446 18.942v37.545a2.873 2.873 0 0 1-1.409 2.48l-67.728 39.535c-.155.089-.324.146-.493.207c-.064.022-.123.061-.19.079a2.81 2.81 0 0 1-1.445 0c-.077-.022-.148-.065-.222-.093c-.155-.057-.317-.107-.465-.193l-67.714-39.535a2.848 2.848 0 0 1-1.036-1.047a2.893 2.893 0 0 1-.38-1.433V59.629c0-.258.035-.508.099-.75c.02-.083.07-.158.098-.24c.053-.15.102-.303.18-.443c.053-.093.13-.168.194-.253c.08-.115.155-.233.25-.333c.08-.082.187-.143.278-.214c.102-.086.194-.179.31-.247h.004L76.27 37.382a2.796 2.796 0 0 1 2.819 0l33.859 19.767h.007c.112.072.208.161.31.243c.091.072.193.136.274.215c.099.103.17.221.254.336c.06.085.141.16.19.253c.081.143.127.293.184.443c.028.082.077.157.098.243c.065.244.098.495.099.747v73.45l28.214-16.473v-37.55c0-.25.035-.503.099-.742c.025-.086.07-.161.099-.243c.056-.15.105-.304.183-.443c.053-.093.13-.168.19-.254c.085-.114.155-.232.254-.332c.081-.082.183-.143.275-.215c.105-.085.197-.178.31-.246h.004l33.862-19.768a2.789 2.789 0 0 1 2.818 0l33.859 19.768c.12.072.211.16.317.243c.088.071.19.136.271.214c.099.104.169.222.254.336c.063.086.141.16.19.254c.081.14.127.293.183.443c.032.082.078.157.099.243m-5.546 38.292V84.009l-11.849 6.916l-16.369 9.557v32.597l28.221-16.473zm-33.859 58.966v-32.618l-16.101 9.325l-45.979 26.609v32.925zM46.644 64.577v110.995l62.073 36.238v-32.919l-32.428-18.61l-.01-.007l-.015-.007c-.109-.064-.2-.157-.303-.236c-.088-.071-.19-.128-.267-.207l-.007-.01c-.092-.09-.156-.2-.233-.301c-.07-.096-.155-.178-.211-.278l-.004-.011c-.064-.107-.103-.236-.148-.357c-.046-.107-.106-.207-.134-.322v-.004c-.035-.135-.042-.278-.057-.418c-.014-.107-.042-.214-.042-.321V81.051L58.493 71.49l-11.849-6.91zm31.04-21.415L49.474 59.63l28.203 16.466l28.207-16.47l-28.207-16.463zm14.671 102.764l16.366-9.553V64.577l-11.85 6.917l-16.368 9.556v71.797zm86.909-83.332l-28.208 16.467l28.208 16.466l28.203-16.47zm-2.823 37.888l-16.369-9.557l-11.848-6.916v32.597l16.365 9.553l11.852 6.92zm-64.905 73.458l41.373-23.952l20.682-11.968l-28.186-16.456l-32.453 18.946l-29.578 17.267z" clip-rule="evenodd"/></g></svg>       <h4 class="nome-fessor">{{$nomeProfessor}}</h4>
        <h6 style="color: lightgray">Instrutor</h6>
    </article>
    <div class="lateral">
        <div class="opcao cursor">
            <i class="bi bi-gear" style="color: #eaeaea"></i>
            <span class="modalBtn">Manutenções </span>
        </div>
        <div class="opcao cursor">
            <i class="bi bi-plus-circle" style="color: #eaeaea"></i>
            <span >Solicitar Ativo</span>
        </div>
        <div class="opcao cursor">
            <i class="bi bi-trash3-fill" style="color: #eaeaea"></i>
            <span >Remover Ativo</span>
        </div>
    </div>

       <div class="ux-ui">
           <svg class="log-ux" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#fff" d="M10.5 3h3v3h-3zm0 7.5h3v3h-3zm0 7.5h3v3h-3z"/></svg>
           <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 100 100"><path fill="#fff" d="M49.947 0C22.354.03 0 22.406 0 50a50 50 0 0 0 20.404 40.21c-.265-2.031-.213-4.128.117-6.202a45.22 45.22 0 0 1-8.511-9.877h12.445c1.182-1.845 2.4-3.67 4.525-5c-1.245-5.1-2.006-10.716-2.146-16.631h1.346a18.653 18.653 0 0 1 1.93-5h-3.243c.212-5.935 1.043-11.554 2.363-16.63H47.5v8.888a13.75 13.75 0 0 1 5 1.804V30.87h19.195c.26.997.495 2.02.715 3.057a19.769 19.769 0 0 1 5.084-.117a76.416 76.416 0 0 0-.639-2.94h13.89a44.747 44.747 0 0 1 3.965 14.028c.58 5.049.591 10.975-1.246 16.771a45.007 45.007 0 0 1-2.286 6.478c1.128 1.187 2.494 2.309 3.867 3.454A50 50 0 0 0 100 50c0-27.614-22.386-50-50-50ZM52.5 5.682c5.268.896 10.302 5.236 14.268 12.437c1.278 2.321 2.42 4.927 3.408 7.75H52.5Zm-5 .197v19.99H30.75c.988-2.823 2.13-5.429 3.408-7.75C37.89 11.341 42.571 7.102 47.5 5.88M35.98 7.232c-2.324 2.352-4.41 5.22-6.203 8.475c-1.68 3.05-3.125 6.467-4.312 10.162H12.01c5.535-8.706 13.975-15.37 23.97-18.637m29.41.463c9.398 3.413 17.32 9.868 22.6 18.174H75.455c-1.184-3.695-2.627-7.112-4.307-10.162c-1.676-3.045-3.613-5.749-5.757-8.012M9.257 30.87h14.808c-1.245 5.162-2.008 10.76-2.203 16.631H5.072a44.79 44.79 0 0 1 4.184-16.63M5.072 52.5h16.762c.129 5.856.82 11.454 1.994 16.63H9.256A44.79 44.79 0 0 1 5.072 52.5" color="#fff"/><path fill="#fff" d="M76 37.769c-8.285 0-15 6.716-15 15c0 8.284 6.715 15 15 15c8.283 0 15-6.716 15-15c0-8.284-6.717-15-15-15m0 32.223c-16.57 0-24 7.431-24 24v2c.075 3.94 1.817 4.056 5.5 4h37c4.695-.004 5.532.005 5.5-4v-2c0-16.569-7.432-24-24-24M44 43.39c-6.787 0-12.291 5.504-12.291 12.292c0 6.787 5.504 12.289 12.291 12.289c6.787 0 12.29-5.502 12.29-12.29c0-6.787-5.503-12.29-12.29-12.29m0 26.401c-13.575 0-19.664 6.09-19.664 19.664v1.639c.062 3.228 1.489 3.323 4.506 3.277h19.123c-.488-8.088 1.901-16.678 7.851-22.139c-3.012-1.646-6.925-2.441-11.816-2.441"/></svg>
           <h5>Reunião com o time</h5>
           <p>Faça uma reunião com seu time de departamento para alinhar estratégias eficientes</p>
       </div>
   </div>

    <div class="content" id="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="overflow-hidden">Sala {{\Illuminate\Support\Facades\Request::segment(3)}}</h2>
            </h2>
            <div>
                <button class="btn btn-success">Solicitar Novo Ativo</button>
                <button class="btn btn-danger">Solicitar Remoção de Ativo</button>
                <button class="btn btn-warning">Manutenção...</button>
            </div>
        </div>
        <div class="ta  ble-responsive" id="table-responsive">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Número Patrimonial</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    @forelse($ativos as $ativo)
                    <tbody id="room-content">
                        <tr>
                            <td>{{ $ativo->nome }}</td>
                            <td>{{ $ativo->patrimonio }}</td>
                            <td>{{ $ativo->categoria_patrimonio }}</td>
                            <td><span class="badge bg-success">Ativo</span></td>
                        </tr>
                    </tbody>
                    @empty
                    <h3 class="text">Nenhum patrimônio encontrado</h2>
                        @endforelse
                </table>


            </div>
        </div>



        <div class="modal" style="overflow: hidden">
            <div class="content" style="overflow: hidden">
                <input type="text" class="form-control mb-3" placeholder="Digite o número do patrimonio" id="search-ativo">
                <div class="table-responsive"
                     style="
                     scrollbar-width: none;
                     overflow: auto;
                     ::-webkit-scrollbar{
                     display: none;
                     }
                     "
                >
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Número Patrimonial</th>
                                <th>Categoria</th>
                                <th>Estado</th>
                                <th>Operações</th>
                            </tr>
                        </thead>
                        <tbody id="room-contents">
                            @forelse($ativos as $ativo)
                            <tr class="class-ativo">
                                <td>{{ $ativo->nome }}</td>
                                <td>{{ $ativo->patrimonio }}</td>
                                <td>{{ $ativo->categoria_patrimonio }}</td>
                                <td><span class="badge bg-success">Ativo</span></td>
                                <td>
                                    <a class="btn btn-warning text-blue-500" href="{{route('manutencao', ['ativo' => $ativo->id])}}">Manutenção</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">Nenhum patrimônio encontrado</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="/js/modal.js"></script>
        @endsection
