
# SIMPLE_PHP_API_REST_WITH_JWT

API REST em PHP com autenticacao utilizado JWT


## Instalacao

### 1 - Crie uma base de Dados no MySQL chamada phpapidb.

    CREATE DATABASE phpapidb;

  

### 2 - Crie a tabela 'Employee'. 

    CREATE TABLE IF NOT EXISTS `Employee` (
    
    `id` int(11) NOT NULL AUTO_INCREMENT,
    
    `name` varchar(256) NOT NULL,
    
    `email` varchar(50),
    
    `age` int(11) NOT NULL,
    
    `designation` varchar(255) NOT NULL,
    
    `created` datetime NOT NULL,
    
    PRIMARY KEY (`id`)
    
    )ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=19;

 ### 3 - Crie a tabela 'Users'. 

    CREATE TABLE IF NOT EXISTS `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `first_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
      `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
      `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
      `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

 ### 4 - Popule a tabela. Exemplo de insert: 

    INSERT INTO `Employee` (`id`, `name`, `email`, `age`, `designation`, `created`) VALUES 
    (1, 'John Doe', 'johndoe@gmail.com', 32, 'Data Scientist', '2012-06-01 02:12:30'),
    (2, 'David Costa', 'sam.mraz1996@yahoo.com', 29, 'Apparel Patternmaker', '2013-03-03 01:20:10'),
    (3, 'Todd Martell', 'liliane_hirt@gmail.com', 36, 'Accountant', '2014-09-20 03:10:25'),
    (4, 'Adela Marion', 'michael2004@yahoo.com', 42, 'Shipping Manager', '2015-04-11 04:11:12'),
    (5, 'Matthew Popp', 'krystel_wol7@gmail.com', 48, 'Chief Sustainability Officer', '2016-01-04 05:20:30'),
    (6, 'Alan Wallin', 'neva_gutman10@hotmail.com', 37, 'Chemical Technician', '2017-01-10 06:40:10'),
    (7, 'Joyce Hinze', 'davonte.maye@yahoo.com', 44, 'Transportation Planner', '2017-05-02 02:20:30'),
    (8, 'Donna Andrews', 'joesph.quitz@yahoo.com', 49, 'Wind Energy Engineer', '2018-01-04 05:15:35'),
    (9, 'Andrew Best', 'jeramie_roh@hotmail.com', 51, 'Geneticist', '2019-01-02 02:20:30'),
    (10, 'Joel Ogle', 'summer_shanah@hotmail.com', 45, 'Space Sciences Teacher', '2020-02-01 06:22:50');

### 5 - Crie uma senha para o MySql (Caso ainda nao tenha senha)

    ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';

Obs: Substitua 'password' pela senha que quer. Utilize aspas simple ao redor da senha;

### 6 - Instalacao do php-jwt

#### No termina, dentro da pasta do projeto digite o comando:

    composer require firebase/php-jwt


### 7 - Configurando a conexao com o Banco

#### Em config/database.php modifique as credenciais de acordo com a configuracao do seu banco de dados.


## Uso

### Utilize o postman ou o Insomnia para fazer as requests

*  `POST - http://localhost/login/register.php` Registra um novo usuario com o JSON:

>     {
>     	"first_name": "nome",
>     	"last_name": "sobrenome",
>     	"email": "exemplo@email.com"",
>     	"password": "senha"
>     }

*  `POST - http://localhost/login/login.php` Faca o login para obter o jwt. JSON:

>     {
>     	"email": "exemplo@email.com"",
>     	"password": "senha"
>     }

#### Os exemplos abaixo devem sempre passar o JSON:

> `{ 	"jwt": "Bearer CHAVE_JWT"	 }`

*  `POST - http://localhost/api/read.php` Resgatar todos Registros

*  `POST - http://localhost/api/single_read.php/?id=2` Resgatar registro unico

*  `POST - http://localhost/api/create.php` Criar registro

*  `POST - http://localhost/api/update.php` Atualizar Registro

*  `DELETE - localhost/api/delete.php` Apagar Registro