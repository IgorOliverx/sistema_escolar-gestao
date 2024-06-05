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
        .table-responsive {
            overflow-y: auto;
            max-height: calc(100vh - 140px);
        }
    </style>

    <div class="main-content">
        <div class="sidebar">
            <h3>Ativos - Bloco D</h3>
            <a href="#" class="room-link active" data-room="14D"><i class="fa-solid fa-users"></i> Sala 14-D</a>
            <a href="#" class="room-link" data-room="6D"><i class="fa-solid fa-users"></i> Sala 6-D</a>
        </div>
        <div class="content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Sala<h2 id="room-title"></h2></h2>
                <div>
                    <button class="btn btn-primary">Novo Ativo</button>
                    <button class="btn btn-secondary">Alguma Opção</button>
                    <button class="btn btn-secondary">Alguma Opção</button>
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
