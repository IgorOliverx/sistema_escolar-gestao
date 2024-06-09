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
     h2 {
        font-family: "Archivo Black", sans-serif;
        font-size: 25px;
        font-weight: 400;
     }

     th {
        font-family: "Archivo Black", sans-serif;
        font-size: 15px;
        font-weight: 200;
     }

     button {
        border: none;
     }

     .btn {
        font-family: "Archivo Black", sans-serif;
        font-size: 13px;
        font-weight: 200;
     }

     .main-content {
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
     <div class="d-flex justify-content-between align-items-center mb-4">
         <h2>Estoque</h2>
         <div>
             <button class="btn btn-success">Novo Item</button>
             <button class="btn btn-danger">Realizar Baixa</button>
             <button class="btn btn-warning">Manutenção...</button>
         </div>
     </div>
     <div class="table-responsive">
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>Nome do Item</th>
                     <th>Quantidade</th>
                     <th>Localização</th>
                     <th>Data de Adição</th>
                     <th>Estado</th>
                     <th>Ação</th>
                 </tr>
             </thead>
             <tbody id="stock-content">
                 <!-- Conteúdo inicial do estoque -->
                 <tr>
                     <td>Item Exemplo 1</td>
                     <td>50</td>
                     <td>Armazém A</td>
                     <td>2023-06-01</td>
                     <td><span class="badge bg-success">Disponível</span></td>
                     <td><button><i class="fa-solid fa-pen"></i></button> <button><i class="fa-solid fa-trash"></i></button></td>
                 </tr>
             </tbody>
         </table>
     </div>
 </div>

 @endsection