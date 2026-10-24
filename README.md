# Relatório de Aula Prática - Programação Web

Aplicação web em PHP que identifica o signo zodiacal do usuário a partir da data de nascimento. Os dados dos signos ficam em um arquivo XML e as páginas são estilizadas com Bootstrap.

Projeto desenvolvido na aula prática da disciplina **Programação Web** (Unidade 4, Seção 4.3).

## Funcionalidades

- Formulário com campo de data de nascimento (validação HTML5)
- Leitura dos 12 signos a partir do arquivo `signos.xml`
- Identificação do signo pelo intervalo de datas, incluindo Capricórnio, cujo intervalo atravessa a virada do ano (22/12 a 19/01)
- Exibição do nome, período e descrição do signo
- Botão para voltar à página inicial

## Tecnologias

- PHP (SimpleXML e DateTime)
- XML
- HTML5
- Bootstrap 5.2
- CSS

## Estrutura

```
Project/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── imgs/
│   └── js/
├── layouts/
│   └── header.php
├── index.php
├── show_zodiac_sign.php
└── signos.xml
```

## Como executar

1. Instale o [XAMPP](https://www.apachefriends.org/download.html).
2. Copie a pasta do projeto para `C:\xampp\htdocs\Project`.
3. Inicie o Apache pelo XAMPP Control Panel.
4. Acesse `http://localhost/Project/` no navegador.

## Como funciona

A página `show_zodiac_sign.php` recebe a data enviada pelo formulário, no formato `AAAA-MM-DD`, e carrega o XML com `simplexml_load_file`. As datas `dataInicio` e `dataFim` de cada signo (formato DD/MM) recebem o mesmo ano da data de nascimento, o que permite comparar as datas diretamente. Quando a data de início é maior que a de fim, como em Capricórnio, a data de nascimento pertence ao signo se for maior ou igual ao início **ou** menor ou igual ao fim.
