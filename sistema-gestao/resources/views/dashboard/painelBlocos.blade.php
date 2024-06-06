@extends('layouts.master')

@section('content')
<x-navbar></x-navbar>

<style>
    body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        overflow: hidden;
    }

    .main-content {
        display: flex;
        flex: 1;
        overflow: hidden;
    }

    .sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #e82e2e;
        color: white;
        padding: 20px;
        box-sizing: border-box;
        height: 100vh;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px 0;
        cursor: pointer;
    }

    .sidebar a:hover {
        background: #cd1b1b;
    }

    .content {
        flex: 1;
        padding: 20px;
        box-sizing: border-box;
        overflow-y: auto;
    }

    .content .card-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: flex-end;
    }

    .table-responsive {
        overflow-y: auto;
        max-height: calc(100vh - 140px);
    }

    .card {
        height: 8em;
        width: 15em;
        background-color: white;
        margin: auto;
        border-radius: 1em;
        overflow: hidden;
        position: relative;
        padding: 2em;
        z-index: 0;
        transition: transform 0.5s;
        /* Adicionado para manter a transição suave */
        display: flex;
        /* Adicionado para usar flexbox */
        justify-content: center;
        /* Adicionado para centralizar horizontalmente */
        align-items: center;
        /* Adicionado para centralizar verticalmente */
    }

    .card:hover {
        transform: scale(1);
        /* Adicionado para manter o tamanho constante */
    }

    .circle {
        position: absolute;
        height: 5em;
        width: 5em;
        top: -2.5em;
        right: -2.5em;
        border-radius: 50%;
        background-color: #e30707;
        transition: transform 0.5s;
        z-index: -1;
    }

    .card:hover .circle {
        transform: scale(7);
    }

    .more-info {
        font-size: 0.8em;
        position: absolute;
        bottom: 1em;
        left: 1em;
        color: #000;
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.5s;
        text-decoration: none;
    }

    .more-info span {
        position: relative;
    }

    .more-info span::before {
        height: 0.16em;
        position: fixed;
        width: 100%;
        background-color: #6C3082;
        bottom: 0;
        left: 0;
        transition: background-color 0.3s;
    }

    .card:hover .more-info {
        color: white;
    }

    .card:hover .more-info span::before {
        background-color: white;
    }

    .heading {
        z-index: 20;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
        transition: color 0.5s;
        font-size: 1.4em;
    }

    .card:hover .heading {
        color: white;
    }
</style>

<div class="main-content">
    <div class="sidebar">
        <h3>Ativos - Bloco A</h3>
        <a href="#" class="room-link" data-room="05A"><i class="fa-solid fa-users"></i> Sala 05-A</a>
        <a href="#" class="room-link" data-room="07A"><i class="fa-solid fa-users"></i> Sala 07-A</a>
        <a href="#" class="room-link" data-room="08A"><i class="fa-solid fa-users"></i> Sala 08-A</a>
        <a href="#" class="room-link" data-room="10A"><i class="fa-solid fa-users"></i> Sala 10-A</a>
        <a href="#" class="room-link" data-room="15A"><i class="fa-solid fa-users"></i> Sala 15-A</a>
    </div>
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Sala<h2 id="room-title"></h2>
            </h2>
            <div>
                @Auth()

                @endAuth<button class="btn btn-success">Solicitar Novo Ativo</button>
                <button class="btn btn-danger">Solicitar Remoção de Ativo</button>
                <button class="btn btn-warning">Manutenção...</button>
            </div>
        </div>
        <div class="table-responsive">

            <table class="table table-striped" id="room-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Número Patrimonial</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Operações</th>
                    </tr>
                </thead>

                <tbody id="room-content">

                </tbody>


            </table>


        </div>
        <div class="card-container">
            <div class="card">
                <div class="circle"></div>
                <button class="more-info">
                    <span>Solicitar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <h1 class="heading">Solicitar Novo Ativo</h1>
            </div>
            <div class="card">
                <div class="circle"></div>
                <button class="more-info">
                    <span>Solicitar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <h1 class="heading">Solicitar Remoção Ativo</h1>
            </div>
            <div class="card">
                <div class="circle"></div>
                <button class="more-info">
                    <span>Solicitar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
                <h1 class="heading">Solicitar Manutenção</h1>
            </div>
        </div>
    </div>


</div>

<script>
    const linksSala = document.querySelectorAll('.room-link');
    const conteudoSala = document.getElementById('room-content');
    const tituloSala = document.getElementById('room-title');

    linksSala.forEach(link => {
        link.addEventListener('click', async (event) => {
            event.preventDefault();

            const selectedRoom = link.dataset.room;
            tituloSala.textContent = ` ${selectedRoom}`;
            link.classList.add('active');

            try {
                const request = await fetch(`http://localhost:8000/api/ativos/blocos/${selectedRoom}`);
                const response = await request.json();
                conteudoSala.innerHTML = JSON.stringify(response); //A resposta é devolvida corretamente.
                // conteudoSala.innerHTML = '';

                // response.forEach(ativo => {
                //     const linha = document.createElement('tr');

                //     linha.innerHTML = `
                //     <td>${ativo.nome}</td>
                //     <td>${ativo.patrimonio}</td>
                //     <td>${ativo.categoria_patrimonio}</td>
                //     <td><span class="badge bg-success">Ativo</span></td>
                //     <td><button class="btn btn-danger">Excluir</button></td>
                //     `;
                //     conteudoSala.appendChild(linha);

                // })
            } catch (error) {
                console.error('Erro:', error);
                conteudoSala.innerHTML = `<tr><td colspan="5">Houve um erro ao realizar a consulta. Entre em contato com os administradores para obter mais respostas</td></tr>`;
            } finally {
                linksSala.forEach(prevLink => prevLink.classList.remove('active'));
            }
        });
    });
</script>

@endsection