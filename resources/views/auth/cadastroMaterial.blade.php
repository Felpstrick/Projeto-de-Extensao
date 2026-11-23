
@extends('layouts.app')

@section('titulo', 'Cadastrar Material')

@section('content')

<section class="cadastro-material">

    <div class="row g-4 justify-content-center">
        <div class="col-md-9 col-lg-10">

            <div class="cabecalho-cadastro">
                <span class="subtitulo-cadastro">GERENCIAMENTO DE CONTEÚDO</span>
                <h2>Cadastrar novo material</h2>
                <p>
                    Organize e disponibilize seus materiais educacionais
                    em nossa plataforma.
                </p>
            </div>

            
            <div class="conteudo-formulario">

                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- INFORMAÇÕES GERAIS --}}
                    <div class="formulario-secao">

                        <div class="secao-titulo">
                            <i class="bi bi-card-text"></i>
                            <div>
                                <h5>Informações gerais</h5>
                                <p>Apresente seu material educacional.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título do material *</label>
                            <input type="text" class="form-control" id="titulo"
                                name="titulo" maxlength="150"
                                placeholder="Ex: Atividades de Matemática - Frações"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao"
                                    name="descricao" rows="4"
                                    placeholder="Descreva o conteúdo e os objetivos do material..."></textarea>
                        </div>

                    </div>

                    <hr>

                    {{-- CLASSIFICAÇÃO PEDAGÓGICA --}}
                    <div class="formulario-secao">

                        <div class="secao-titulo">
                            <i class="bi bi-journal-bookmark"></i>
                            <div>
                                <h5>Classificação pedagógica</h5>
                                <p>Identifique o público e o conteúdo do material.</p>
                            </div>
                        </div>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="serie" class="form-label">Série *</label>
                                <input type="text" class="form-control" id="serie"
                                    name="serie" maxlength="30"
                                    placeholder="Ex: 6º ano" required>
                            </div>

                            <div class="col-md-6">
                                <label for="disciplina" class="form-label">Disciplina *</label>
                                <input type="text" class="form-control" id="disciplina"
                                    name="disciplina" maxlength="50"
                                    placeholder="Ex: Matemática" required>
                            </div>

                            <div class="col-md-6">
                                <label for="assunto" class="form-label">Assunto</label>
                                <input type="text" class="form-control" id="assunto"
                                    name="assunto" maxlength="100"
                                    placeholder="Ex: Frações e números decimais">
                            </div>

                            <div class="col-md-6">
                                <label for="tipo" class="form-label">Tipo de material *</label>
                                <input type="text" class="form-control" id="tipo"
                                    name="tipo" maxlength="30"
                                    placeholder="Ex: Lista de exercícios" required>
                            </div>

                        </div>

                    </div>

                    <hr>

                    {{-- VALORES E PUBLICAÇÃO --}}
                    <div class="formulario-secao">

                        <div class="secao-titulo">
                            <i class="bi bi-currency-dollar"></i>
                            <div>
                                <h5>Valores e publicação</h5>
                                <p>Defina o valor e a disponibilidade do material.</p>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">

                            <div class="col-md-6">
                                <label for="preco" class="form-label">Preço (R$) *</label>
                                <input type="number" class="form-control" id="preco"
                                    name="preco" min="0" step="0.01"
                                    placeholder="0,00" required>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-switch mt-4">
                                    <input class="form-check-input" type="checkbox"
                                        id="ativo" name="ativo" value="1" checked>
                                    <label class="form-check-label" for="ativo">
                                        Material ativo
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <hr>

                    {{-- ARQUIVOS --}}
                    <div class="formulario-secao">

                        <div class="secao-titulo">
                            <i class="bi bi-cloud-arrow-up"></i>
                            <div>
                                <h5>Arquivos e prévias</h5>
                                <p>Adicione o arquivo que será disponibilizado e sua imagem de apresentação.</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="arquivo" class="form-label">Arquivo principal *</label>
                            <input type="file" class="form-control" id="arquivo"
                                name="arquivo" required>
                            <small class="text-muted">Envie o material educacional.</small>
                        </div>

                        <div class="mb-3">
                            <label for="arquivo_previa" class="form-label">Imagem de prévia</label>
                            <input type="file" class="form-control" id="arquivo_previa"
                                name="arquivo_previa" accept="image/*">
                            <small class="text-muted">Imagem opcional para apresentar o material no catálogo.</small>
                        </div>

                    </div>

                    <hr>

                    {{-- BOTÕES --}}
                    <div class="d-flex justify-content-end gap-2 mt-4">

                        <a href="{{ url('materiais') }}" class="btn btn-light">
                            Cancelar
                        </a>

                        <button type="button" class="btn btn-salvar-material">
                            <i class="bi bi-check-lg"></i>
                            Salvar material
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection
