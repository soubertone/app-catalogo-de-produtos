# APP Catálogo de produtos

## Instalação

### Pré-requisitos

- [Node.js](https://nodejs.org/en/)
- [Composer](https://getcomposer.org)

### 🎲 Rodando o Back End (API)

```bash
# Clone este repositório
$ git clone <https://github.com/soubertone/app-catalogo-de-produtos>

# Acesse a pasta do projeto
$ cd api

# Instale as dependências
$ composer install

# Execute a aplicação com Sail
$ ./vendor/bin/sail up -d

# O servidor inciará na porta:80 - acesse <http://localhost>
```

### 🎲 Rodando o Front End

```bash
# Acesse a pasta do projeto
$ cd front-vue

# Instale as dependências
$ npm install

# Execute a aplicação com Sail
$ npm run serve

# Será inciado na porta:8080 - acesse <http://localhost:8080>
```
## Pacotes
- [Sail](https://laravel.com/docs/8.x/sail)
- [Vuex](https://vuex.vuejs.org/ptbr/)
- [Axios](https://br.vuejs.org/v2/cookbook/using-axios-to-consume-apis.html)
- [Router](https://router.vuejs.org) 
