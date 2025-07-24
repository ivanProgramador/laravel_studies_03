@extends('layouts.main_layout')
@section('content')
    <h3>Conteudo da view</h3>

    {{-- Renderizando um component
         o componet parecer uma tag html 
         a letra x é obrigatória para o laravel 
         saber que se trata de um component 
    --}}


    <x-my-component message="mensagem passada para o componente" />

    {{-- rederizando componente em uma subpasta --}}
    <x-admin.admin-card :name="$name" teste="Olá mundo" />
@endsection
