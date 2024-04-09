@extends('layouts.main')
@section('title', 'Jc_Vagas home')
@section('content')
    <section class="headerBanner">
        <h1 class="headerTitle">Encontre sua próxima grande oportunidade</h1>
        <p class="paragrafo">
            Nossa plataforma de anúncios de vagas de trabalho conecta os melhores talentos com as melhores empresas. Explore
            nossas ofertas e encontre a sua próxima grande carreira.
        </p>
        <div class="buttonBox">
            <a href="/listarvagas" class="btn btnP">Procurar Vaga</a>
            <a href="/login" class="btn btnS">Postar uma Vaga</a>
        </div>

    </section>
    <main class="containerMain">
        <div class="mainBox">
            <section id="sectionVagas" class="section sectionVagas">
                <h2 class="titleSection">Vagas Mais Recentes</h2>
                <lu class="vagasList">
                    @if (count($vagas) == 0)
                        <p>Nao ha vagas disponiveis</p>
                    @endif
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
                <a href="/listarvagas" class="btn btnS btnVerMais">Ver mais Vagas</a>
            </section>
            <section class="section sectionAbout" id="sectionAbout">
                <h2 class="titleSection">Sobre Nós</h2>
                <div class="box boxCards">
                    <div class="card">
                        <h4 class="cardTitle">Nossa misão</h4>
                        <p class="cardText">
                            Conectar os melhores talentos com as melhores oportunidades, impulsionando o crescimento
                            profissional e o sucesso das empresas.
                        </p>
                    </div>
                    <div class="card">
                        <h4 class="cardTitle">Nossa História</h4>
                        <p class="cardText">
                            Fundada em 2015, nossa plataforma de anúncios de emprego se tornou referência no mercado,
                            ajudando milhares de profissionais a encontrarem suas próximas grandes carreiras.
                        </p>
                    </div>
                    <div class="card">
                        <h4 class="cardTitle">Nossos Valores</h4>
                        <p class="cardText">
                            Excelência, Integridade, Inovação e Colaboração são os pilares que norteiam nossa atuação e nos
                            ajudam a construir relações duradouras com clientes e candidatos.
                        </p>
                    </div>
                    <div class="card">
                        <h4 class="cardTitle">Nossa Equipe</h4>
                        <p class="cardText">
                            Nosso time é composto por profissionais apaixonados por conectar talentos e oportunidades, com
                            vasta experiência no mercado de trabalho
                        </p>
                    </div>
                </div>
            </section>
            <section class="section sectionService">
                <h2 class="titleSection">Serviços</h2>
                <p class="subTitle">
                    Oferecemos diversos serviços, com soluções inteligentes.
                </p>
                <div class="box">
                    <div class="ServiceCard">
                        <h4 class="cardTitle">Dicas</h4>
                        <p class="cardText">
                            Encontre dicas útes de como ter uma boa entrevista.
                        </p>
                    </div>
                    <div class="ServiceCard">
                        <h4 class="cardTitle">Encontre Empregos</h4>
                        <p class="cardText">
                            Aqui você encontra diversas oportunidades de emprego nas mais diversas categorias.
                        </p>
                    </div>
                    <div class="ServiceCard">
                        <h4 class="cardTitle">Faça Publicidade</h4>
                        <p class="cardText">
                            Este serviço é mais voltado para aqueles que desejam fazer marketing dos seus negócios, e outros
                            no nosso site, temos planos bem baratos para qualquer um aderir.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
