@extends('layouts.main')
@section('title', 'Jc_Vagas_Criar_vaga')
@section('content')

    <main class="containerMain">
        <div class="mainBox">
          <form class="formVaga" action="/vagas" method="post">
            @csrf
          <div class="inputText">
            <label for="txtVaga">Titulo de vaga</label>
            <input type="text" id="txtVaga" name="txtVaga" placeholder="tecnico de TI">
          </div>
          <div class="inputText">
            <label for="txtEmpresa">Nome da empresa</label>
            <input type="text" id="txtEmpresa" name="txtEmpresa" placeholder="tecnico de TI">
          </div>
          <div class="inputText">
            <label for="txtEmail">contacto de recrutamento</label>
            <input type="email" id="txtEmail" name="txtEmail" placeholder="exemplo@gmail.com">
          </div>
          <div class="inputText">
            <label for="txtlocal">Local da vaga</label>
            <input type="text" id="txtlocal" name="txtLocal" placeholder="Luanda">
          </div>
          <div id="competenciaBox" class="inputText">
            <label id="txtCompetencia" for="txtlocal">Competencias exigida <span id="btnMais">mais</span></label>
            <input type="text" id="competencia" name="competencia[]">
          </div>
          <div class="inputText">
            <label for="txtDataLimite">Data Da Publicação</label>
            <input type="date" id="txtDataDaCriacao" name="txtDataDaCriacao" placeholder="02/43/2024">
          </div>
          <div class="inputText">
            <label for="txtDataLimite">Data limite para candidaturas</label>
            <input type="date" id="txtDataLimite" name="txtDataLimite" placeholder="02/43/2024">
          </div>
          <div class="inputText">
            <label for="txtDescricao">Descrição</label>
            <textarea id="txtDescricao" name="txtDescricao"  placeholder="Descreva a vaga com mais detalhes"></textarea>
          </div>
          <button type="submit" id="btnCriar" class="btn btnCriar">Criar</button>
          </form>
        </div>
    </main>
@endsection