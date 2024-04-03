@extends('layouts.main')
@section('title', '{{ $vaga->nomeVaga }}')
@section('content')
    <section class="section vaga">
        <h2>{{ $vaga->nomeVaga }}</h2>
        <p>Empresa: {{ $vaga->empresa }}</p>
        <p>Email da empresa: {{ $vaga->email}}</p>
        <p>Data Da Publicação: {{ $vaga->dataDaCriacao }}</p>
        <p>Data limite: {{ $vaga->dataDalimite }}</p>
        <p>Local {{ $vaga->local }}</p>
        <p>Competencias exigida:</p>
        <ul>
            @foreach ($vaga->competencias as $item)
            <li><p>{{$item}}</p></li>
            @endforeach
        </ul>
        <p>Descrição da vaga {{ $vaga->descricao }}</p>
        <br>
        <a href="" class="btn">Candidatar-se</a>
    </section>

@endsection
