## API Pizzaria

Para rodar a API, é preciso:

* Ter Laravel e Composer pré-instalados
* Clonar o projeto
* Ir até a raíz do projeto via CMD/Terminal, e executar o comando:
> composer install

para que as dependências do projeto sejam instaladas.

* Verificar credenciais da base de dados no arquivo .env, e criar o banco.

* Executar o comando:
> php artisan migrate  

para que as tabelas do projeto sejam criadas no seu BD.

* Executar o comando:
> php artisan serve  

para rodar a api.
