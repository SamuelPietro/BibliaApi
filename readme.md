# Bíblia API
![](https://img.shields.io/github/stars/SamuelPietro/BibliaApi) ![](https://img.shields.io/github/forks/SamuelPietro/BibliaApi) ![](https://img.shields.io/github/languages/top/SamuelPietro/BibliaApi) ![](https://img.shields.io/github/release/SamuelPietro/BibliaApi) ![](https://img.shields.io/github/issues/SamuelPietro/BibliaApi) ![](https://img.shields.io/github/repo-size/SamuelPietro/BibliaApi) 


Uma API para inserir diversas versões da bíblia em seu site.

## Como usar
### Obter versões disponíveis
`POST https://sshost.com.br/apis/BibliaApi/`

*Corpo:*
```json
{
    "action": "bwVesoes"
}```

### Obter lista de todos os livros/Abreviações
`POST https://sshost.com.br/apis/BibliaApi/`

*Corpo:*
```json
{
    "action": "bwLivros"
}```

### Obter todos versículos de um capitulo
`POST https://sshost.com.br/apis/BibliaApi/`

*Corpo:*
```json
{
        "action": "bwCapitulo",
        "version": "ACF",
        "abrev": "Sl",
        "chapters": 117
    }```

***Termos ***
- "action" = Ação desejada
- "version" = versão escolhida
- "abrev" = abreviação do livro
- "chapters" = Número do capitulo


#### A saida para o exemplo acima é
```json
{
    "status": {
        "type": "message",
        "value": "Valid JSON value found"
    },
    "input": {
        "action": "bwCapitulo",
        "version": "ACF",
        "abrev": "Sl",
        "chapters": 117
    },
    "output": [
        "LOUVAI ao SENHOR todas as nações, louvai-o todos os povos.",
        "Porque a sua benignidade é grande para conosco, e a verdade do SENHOR dura para sempre. Louvai ao SENHOR."
    ]
}
```

## Contribuir
Contribuições são sempre bem-vindas! 