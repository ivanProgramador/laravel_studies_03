@extends('layouts.main_layout')
@section('content')
 



<x-multi-slot>
      <x-slot:title> Esse éo titulo do slot </x-slot:title>
      <x-slot:content> Esse éo conteudo </x-slot:content>
      <x-slot:footer> Esse éo footer </x-slot:footer>
</x-multi-slot>
 



@endsection
