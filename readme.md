## Como executar

Após clonar o repositório:

- Crie uma cópia do arquivo .env.example, renomeie-o para .env e altere os seguintes campos:
	- DB_DATABASE=nome_do_banco (crie um banco novo e coloque o mesmo nome que colocar aqui)
	- DB_USERNAME=usuario (comumente utilizado: root)
	- DB_PASSWORD=senha
- Entre no diretório onde foi realizada a clonagem do repositório e execute os seguintes comandos:
	- composer install
	- php artisan key:generate
	- php artisan config:clear
	- php artisan migrate

- Após isso é só ligar o servidor ´*php artisan serve*´ que estará funcionando.
