# Api para consulta e cadastro de clientes com placas de veículos
Para facilitar a configuração desse projeto, você precisa ter o Docker instalado.

Esse é um ambiente desenvolvido em `PHP 7.4` com o framework `Laravel 8`.

## Portas utilizadas

```bash
nginx 80
mysql 3306
php 9000
```

## Configurando o docker

- Indique as variáveis de ambiente no arquivo `.env`. Veja na seção de MYSQL a baixo para mais informações.

- Compile a imagem com o seguinte comando:

```bash
docker-compose build app
```

- Quando a compilação estiver concluída, voce pode iniciar o ambiente com o comando:

```bash
docker-compose up -d
```

- Para consultar o status dos serviços use o comando:

```bash
docker-compose ps
```

- O ambiente está agora rodando, mas ainda precisamos de mais alguns comandos para concluir a funcionalidade da aplicação Laravel.
Você pode usar o comando `docker-compose exec` para executar comandos nos conteiners do docker, tal como `ls -l` para listar os arquivos da aplicação.
```bash
docker-compose exec app ls -l
```

- Execute o comando `composer install` para instalar as dependências da aplicação:

```bash
docker-compose exec app composer install
```

- Gere a chave unica da aplicação com o comando artisan do laravel.
```bash
docker-compose exec app php artisan key:generate
```

- Rode o comando `migrate` para criar toda a estrutura do banco de dados:
```sh
docker-compose exec app php artisan migrate
```


- Caso queira popular o banco com alguns dados predefinidos use o comando:
```sh
docker-compose exec app php artisan db:seed
```

- A api agora deve estar disponível através da url  `http://localhost`
  
- Caso queira pausar o ambiente Docker, rode:

```bash
docker-compose pause
```

- Você pode retomar o serviço com:

```bash
docker-compose unpause
```

- Para parar o ambiente criado no Docker e remover todos os  containers, networks e volumes, rode:

```bash
docker-compose down
```

##Documentação
- Esse projeto conta com uma documentação para a API gerada de forma automática.
- Ela pode ser acessada através do link  `http://localhost/docs`. 
- A documentação foi gerada a partir do pacote `knuckleswtf/scribe`, sua documentação pode ser vista no link `https://scribe.knuckles.wtf/laravel/`;
  

- Para gerar novamente a documentação use o comando: 
```bash
docker-compose exec app php artisan docs
```

### MYSQL

Configure o arquivo `.env` para receber os seguintes valores:

```bash
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
