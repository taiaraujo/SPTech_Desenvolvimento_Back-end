# AULA 01
 > Overview sobre o ecossistema como um todo

 1. Composer para manutenção de dependêcias

 > Gerenciador de dependências

 > vendor : quem mantém o pacote

 > Package Type:
    
    - Library: consumida por outros projetos ou bibliotecas

    - Project: framework

    - Metapackage: não tem código fonte, lista de denpências.

    - Composer-puglin: 

> Composer config .json
```
{
    "name": "natal/consulta-cep",
    "description": "Busca de CEP online",
    "type": "e.g. library",
    "license": "MIT",
    "authors": [
        {
            "name": "Natália Freitas Araújo",
            "email": "taiaraujo20@gmail.com"
        }
    ],
    "require": {}
}
```

 2. PHPUnit para manutenção de testes unitários

 3. PSRs para padronização de código

 4. Frameworks e microframeworks