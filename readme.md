# Bíblia API

***Essa aplicação não esta pronta para produção!***
Uma API para inserir versões da bíblia em seu site.

## Como usar
Obter versões disponíveis
`GET https://sshost.com.br/apis/BibliaApi/?data=bwVesoes`

Obter lista de todos os livros/Abreviações
`GET https://sshost.com.br/apis/BibliaApi/?data=bwLivros`

Obter todos versículos de um capitulo
`GET https://sshost.com.br/apis/BibliaApi/`

**Termos **
- "v" = versão escolhida
- "a" = abreviação do livro
- "c" = Número do capitulo

`EXEMPLO https://sshost.com.br/apis/BibliaApi/?v=acf&a=Sl&c=117`

A saida para exemplo é
```json
[
    "LOUVAI ao SENHOR todas as nações, louvai-o todos os povos.",
    "Porque a sua benignidade é grande para conosco, e a verdade do SENHOR dura para sempre. Louvai ao SENHOR."
]
```
