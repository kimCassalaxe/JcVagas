@extends('layouts.main')
@section('title', 'Jc_Vagas Listar vagas')
@section('content')
    <div class="mainBox">
        <div class="listBox">
         <article class="filtro">
            <h4 class="filtro">filtro</h4>
            <ul>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
                <li class="itemFiltro">Tecnologia</li>
            </ul>
        </article>
        <section class="section sectionVagasList sectionVagas">
            <h3 class="titleSection">Encontre a sua oportunidade</h3>
            <lu class="vagasList">
                @foreach ($vagas as $vaga)
                <li class="itemList">
                    <a href="/exibirVaga/{{ $vaga->id }}">
                        <div class="box">
                            <h5 class="vagaTitle">{{ $vaga->nomeVaga }}</h5>
                            <p class="vagaDate">Plublicado em:{{ $vaga->created_at }}</p>
                        </div>
                        <p class="vagaEmpresa">Empresa: <span>
                                {{ $vaga->empresa }}</span></p>
                        <p class="vagaLocal">Local: {{ $vaga->local }}</p>
                    </a>
                </li>
            @endforeach
            </lu>
            <a class="btn btnS btnVerMais">Ver mais Vagas</a>
        </section>   
        </div>
        
    </div>
@endsection
