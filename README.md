Esse projeto foi desenvolvido para a vaga de back-end do processo seletivo da DOTUM

O objetivo é desenvolver uma aplicação que permita aos usuários lançar contas e listar informações sobre contas a pagar e contas a receber. A aplicação deve ter recursos para visualizar o total de contas a pagar, contas a receber e o total geral de contas.

## Pré requisitos para execução do projeto
    1.PHP: Instale o PHP.
    2.Composer: Instale o Composer.
    3.Servidor de banco de dados: Instale e configure um servidor MySQL ou outro suportado por Laravel.

## Configuração Inicial
    1. Clone este repositório.
        git clone https://github.com/MatheusMonthay/seletivo-backend.git
        
    2. Acesse o diretório do projeto.
        cd local-onde-foi-clonado-o-projeto
        
    3.Instale as dependências do Composer.
        composer install
    
    4. Configure as informações do banco de dados no arquivo .env

    5.Gere a chave de aplicativo.
        php artisan key:generate

    6.Execute as migrações do banco de dados.
        php artisan migrate

    7. Inicie o servidor local
        php artisan serve

