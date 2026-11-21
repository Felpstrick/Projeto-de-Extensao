<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        $agora = now();

        DB::table('materiais')->insert([

            [
                'titulo' => 'Matemática Básica',
                'descricao' => 'Material com exercícios de operações fundamentais e expressões numéricas.',
                'preco' => 19.90,
                'arquivo' => 'materiais/matematica_basica.pdf',
                'arquivo_previa' => 'previas/matematica_basica.png',
                'serie' => '6º ano',
                'disciplina' => 'Matemática',
                'assunto' => 'Operações fundamentais',
                'tipo' => 'lista_exercicios',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Interpretação de Texto',
                'descricao' => 'Atividades para desenvolver leitura e interpretação textual.',
                'preco' => 15.90,
                'arquivo' => 'materiais/interpretacao_texto.pdf',
                'arquivo_previa' => 'previas/interpretacao_texto.png',
                'serie' => '7º ano',
                'disciplina' => 'Português',
                'assunto' => 'Interpretação textual',
                'tipo' => 'lista_exercicios',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Revisão de Ciências',
                'descricao' => 'Resumo dos principais conteúdos sobre o corpo humano.',
                'preco' => 22.90,
                'arquivo' => 'materiais/revisao_ciencias.pdf',
                'arquivo_previa' => 'previas/revisao_ciencias.png',
                'serie' => '8º ano',
                'disciplina' => 'Ciências',
                'assunto' => 'Corpo humano',
                'tipo' => 'revisao',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'História do Brasil',
                'descricao' => 'Material de estudo sobre o período colonial brasileiro.',
                'preco' => 18.50,
                'arquivo' => 'materiais/historia_brasil.pdf',
                'arquivo_previa' => 'previas/historia_brasil.png',
                'serie' => '9º ano',
                'disciplina' => 'História',
                'assunto' => 'Brasil Colônia',
                'tipo' => 'revisao',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Geografia e Meio Ambiente',
                'descricao' => 'Atividades sobre sustentabilidade e preservação ambiental.',
                'preco' => 17.90,
                'arquivo' => 'materiais/geografia_ambiente.pdf',
                'arquivo_previa' => 'previas/geografia_ambiente.png',
                'serie' => '6º ano',
                'disciplina' => 'Geografia',
                'assunto' => 'Meio ambiente',
                'tipo' => 'lista_exercicios',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Simulado de Matemática',
                'descricao' => 'Simulado com questões de matemática para preparação escolar.',
                'preco' => 29.90,
                'arquivo' => 'materiais/simulado_matematica.pdf',
                'arquivo_previa' => 'previas/simulado_matematica.png',
                'serie' => '1º ano EM',
                'disciplina' => 'Matemática',
                'assunto' => 'Álgebra e geometria',
                'tipo' => 'simulado',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Literatura Brasileira',
                'descricao' => 'Revisão dos principais movimentos literários brasileiros.',
                'preco' => 24.90,
                'arquivo' => 'materiais/literatura_brasileira.pdf',
                'arquivo_previa' => 'previas/literatura_brasileira.png',
                'serie' => '2º ano EM',
                'disciplina' => 'Português',
                'assunto' => 'Escolas literárias',
                'tipo' => 'revisao',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Física: Movimento',
                'descricao' => 'Exercícios sobre velocidade média e movimento uniforme.',
                'preco' => 21.90,
                'arquivo' => 'materiais/fisica_movimento.pdf',
                'arquivo_previa' => 'previas/fisica_movimento.png',
                'serie' => '2º ano EM',
                'disciplina' => 'Física',
                'assunto' => 'Cinemática',
                'tipo' => 'lista_exercicios',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Química para Vestibular',
                'descricao' => 'Revisão dos conceitos fundamentais de química.',
                'preco' => 32.90,
                'arquivo' => 'materiais/quimica_vestibular.pdf',
                'arquivo_previa' => 'previas/quimica_vestibular.png',
                'serie' => 'Pré-vestibular',
                'disciplina' => 'Química',
                'assunto' => 'Ligações químicas',
                'tipo' => 'revisao',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

            [
                'titulo' => 'Simulado Preparatório ENEM',
                'descricao' => 'Simulado interdisciplinar para preparação para o ENEM.',
                'preco' => 39.90,
                'arquivo' => 'materiais/simulado_enem.pdf',
                'arquivo_previa' => 'previas/simulado_enem.png',
                'serie' => 'Pré-vestibular',
                'disciplina' => 'Interdisciplinar',
                'assunto' => 'Preparação para o ENEM',
                'tipo' => 'simulado',
                'ativo' => true,
                'created_at' => $agora,
                'updated_at' => $agora,
            ],

        ]);
    }
}