# Plataforma web para venda de atividades educacionais

Sistema web para a venda de atividades (listas de exercícios, revisões e outros materiais) para alunos do 6º ano do Ensino Fundamental ao pré-vestibular, com pagamento por Pix e liberação automática do material após a confirmação do pagamento.

Projeto desenvolvido na disciplina **Atividades Curriculares de Extensão I**, do curso de **Tecnologia em Análise e Desenvolvimento de Sistemas** do **IFPR – Campus Telêmaco Borba**.

> 🚧 **Status:** em desenvolvimento (fase de levantamento de requisitos e definição do ambiente).

---

## Sobre o projeto

### Problema

Hoje, a professora parceira do projeto realiza as vendas de forma totalmente manual: divulga as atividades no Instagram, o aluno interessado entra em contato, faz o pagamento por Pix, a professora confere se o valor foi recebido corretamente e, só então, envia o material ao aluno. Esse processo se repete a cada venda e consome o tempo que ela precisa para outras atividades.

### Solução

Uma plataforma web em que o aluno escolhe o material em um catálogo, paga por Pix e recebe o download liberado automaticamente, sem que a professora precise conferir pagamentos ou enviar arquivos manualmente. Ela passa a dedicar o tempo apenas a criar e cadastrar novas atividades.

### Usuários

- **Professora (administradora):** cadastra materiais, define preços e acompanha as vendas.
- **Alunos (e responsáveis, no caso de menores de idade):** consultam o catálogo, compram e baixam os materiais.

---

## Funcionalidades

### Primeira versão (vendas avulsas)

- [ ] Cadastro, login e recuperação de senha
- [ ] Catálogo de materiais com prévia do conteúdo
- [ ] Busca e filtros por série, disciplina, assunto e tipo
- [ ] Compra de material avulso
- [ ] Pagamento via Pix
- [ ] Confirmação automática do pagamento (integração com gateway)
- [ ] Liberação e download do material após o pagamento
- [ ] Área "Meus materiais" com histórico de compras
- [ ] Painel da professora para cadastrar e editar materiais
- [ ] Acompanhamento de vendas e status de pagamento

### Próximas etapas

- [ ] Assinatura com acesso aos conteúdos publicados
- [ ] Cupons, pacotes de materiais e métricas de vendas
- [ ] Marca d'água nos PDFs com os dados do comprador

---

## Tecnologias

| Camada | Tecnologia |
|---|---|
| Back-end | PHP 8.2+ com [Laravel](https://laravel.com) |
| Front-end | HTML, CSS, JavaScript, Blade e [Bootstrap 5](https://getbootstrap.com) |
| Banco de dados | MySQL |
| Pagamentos | Gateway com Pix (Mercado Pago ou Asaas, a definir) |
| Ambiente local | XAMPP, Composer, Git |
| Organização | Trello (tarefas) e Canva (protótipos) |

---

## Como executar localmente

### Pré-requisitos

- [XAMPP](https://www.apachefriends.org) (Apache, MySQL e phpMyAdmin) com PHP 8.2 ou superior
- [Composer](https://getcomposer.org)
- [Git](https://git-scm.com)

### Passo a passo

```bash
# 1. Clone o repositório
git clone <url-do-repositorio>
cd <nome-da-pasta>

# 2. Instale as dependências
composer install

# 3. Crie o arquivo de ambiente
cp .env.example .env

# 4. Gere a chave da aplicação
php artisan key:generate
```

5. Crie um banco de dados no phpMyAdmin e configure no arquivo `.env` a conexão com o MySQL e as chaves do gateway de pagamento (use o **ambiente de testes**).

```bash
# 6. Execute as migrações
php artisan migrate

# 7. Inicie o servidor
php artisan serve
```

Acesse `http://localhost:8000` no navegador.

> **Atenção:** o arquivo `.env` contém senhas e chaves e **não deve ser enviado ao GitHub**.

### Testando a confirmação de pagamento

A confirmação automática depende de o gateway acessar o sistema. Em ambiente local, use uma ferramenta de túnel, como [ngrok](https://ngrok.com) ou Cloudflare Tunnel, para expor o servidor temporariamente.

---

## Estrutura do repositório

```
├── app/            # Código da aplicação (Laravel)
├── database/       # Migrações e seeders
├── resources/      # Views (Blade) e assets
├── routes/         # Rotas da aplicação
├── docs/           # Documentação: requisitos, protótipos e diagramas
└── README.md
```

---

## Documentação

Os documentos do projeto ficam na pasta [`docs/`](docs/):

- Documento de levantamento e especificação de requisitos
- Definição do ambiente de desenvolvimento
- Protótipos das telas
- Diagrama de casos de uso e diagrama de classes

---

## Equipe

- Felipe Moreira
- Kauane Estampreski

---

## Licença

A definir.
