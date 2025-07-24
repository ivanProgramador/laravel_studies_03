@extends('layouts.main_layout')
@section('content')
    <h3>Conteudo da view</h3>

    {{-- Renderizando um component
         o componet parecer uma tag html 
         a letra x é obrigatória para o laravel 
         saber que se trata de um component 
    --}}


    <x-my-component />

    {{-- rederizando componente em uma subpasta --}}
    <x-admin.admin-card />
@endsection
