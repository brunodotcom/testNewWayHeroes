# Desafio New Way Heroes

Desenvolvimento do Desafio New Way Heroes, utilizando Vagrant como ambiente de desenvolvimento.

Para utilizar o projeto, siga os passos abaixo:

- Baixe ou Clone o projeto do Github
- Utilize o comando	composer install
- Configure o .env para seu banco de dados ( De preferência em mysql - uft8_unicode_ci)
- Utilize o comando composer dump-autoload
- Utilize o comando php artisan migrate
- Utilize o comando php artisan db:seed
- Utilize o comando php artisan storage:link
- Utilize o comando php artisan key:generate

Pronto! 

Cadastre-se no programa e comece a gerenciar o Clã New Way Heroes!

# API

Uma lista com os heróis estara disponível através da rota "/api/heroes", caso desejar algum herói em específico, basta adicionar o ID precedido de /.

Ex: URL/api/heroes/1