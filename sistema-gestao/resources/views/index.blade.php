@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>

    @if(session()->has('mensagem'))
        <div class="alert alert-danger" >
            <p>{{$msg}}</p>
        </div>
    @endif



@auth
    <p>deu certo</p>
@endauth

@endsection
