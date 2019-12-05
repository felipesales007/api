# API

![version](https://img.shields.io/badge/version-1.0.0-blue.svg)

API desenvolvida no **framework Laravel** por Felipe Sales.

Conheça o framework [Laravel](https://laravel.com) e o desenvolvedor [Felipe Sales](http://www.felipesales.com.br).

## Versão disponível

![](public/images/readme/version/laravel.png)

## Start project

Recomendações para execução do projeto:

- Na pasta desejada execute no terminal de comando `git clone git@github.com:felipesales007/api.git`.
- Dentro do projeto copie `.env.exemple` e cole na mesma pasta renomeando para `.env` e configure adequadamente.
- Dentro da pasta api execute no terminal de comando `composer update`.
- E em seguida execute o comando `php artisan key:generate` para gerar uma key (chave) do projeto.
- E em seguida o comando `php artisan migrate:refresh --seed` para migração dos dados no banco MySQL.
- E em seguida o comando `php artisan serve` para inicializar o servidor.
- E por final acesse no navegador desejado ou no Postman o endereço local `http://127.0.0.1:8000/api/funcionarios/brasil` para acesso aos dados dos funcionários que trabalham no Brasil da api.
- E acesse no navegador desejado ou no Postman o endereço local `http://127.0.0.1:8000/api/funcionarios` para acesso a todos os funcionários cadastrados na api.

Requisitos para execução do projeto:

- PHP
- MySQL
- Composer

Em caso de problemas para a execução do projeto execute dentro da pasta api no terminal de comando os seguintes comandos abaixo:

- `php artisan cache:clear`
- `php artisan view:clear`
- `php artisan route:clear`
- `php artisan clear-compiled`
- `composer dump-autoload`

## Documentação
A documentação do Laravel está disponível no [website](https://laravel.com/docs/).

## Suporte nos navegadores

![](public/images/readme/browsers/chrome.png)
![](public/images/readme/browsers/firefox.png)
![](public/images/readme/browsers/edge.png)
![](public/images/readme/browsers/safari.png)
![](public/images/readme/browsers/opera.png)
