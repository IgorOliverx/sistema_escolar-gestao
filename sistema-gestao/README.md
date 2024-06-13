<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instrução para clonar o repositório

1. Confira se php e composer estão devidamente configurado em suas máquinas;
2. Clone o repositório;
3. Abra a raiz do repositório e rode o comando
    `composer install`;
4. Depois de concluído, renomeie o arquivo ``.env.example`` para `.env`;
5. Rode o comando ``php artisan key:generate``;
6. Configure as credenciais do seu banco de dados no arquivo ``.env``;
7. Rode o comando ``php artisan migrate``
8. Rode o comando ``php artisan db:seed UserSeeder``
9. Rode o comando ``php artisan db:seed SalaSeeder``
10. Rode o comando ``php artisan db:seed AtivoSeeder``
11. Rode o comando ``php artisan serve``




# Sistema de Gestão API

Este documento descreve a API do Sistema de Gestão.

## Endpoints

### Ativos

- `GET /api/ativos`: Retorna todos os ativos.
- `POST /api/ativos`: Cadastra um novo ativo.
- `PUT /api/ativos/{id}`: Atualiza o ativo com o ID especificado.
- `DELETE /api/ativos/{id}`: Apaga o ativo com o ID especificado.
- `GET /api/ativos/{id}`: Retorna o ativo com o ID especificado.
- `GET /api/ativos/manutencao/sala/{sala}`: Retorna os ativos em manutenção na sala especificada.

### Estoque

- `GET /api/estoque`: Retorna todos os itens do estoque.
- `POST /api/estoque`: Cadastra um novo item no estoque.

## Exemplos de Requisições

### GET /api/ativos

Resposta:

```json
{
  "ativo": [
    {
      "id": 41,
      "nome": "Patrimonio",
      "categoria_patrimonio": "INFORMÁTICA",
      "data_compra": "2024-06-12",
      "status": "Ativo",
      "manutencao": 1,
      "patrimonio": 1741080,
      "id_sala": 4,
      "sala": {
        "id": 4,
        "numero_sala": "10A",
        "bloco_sala": "A",
        "user_id": 2
      }
    },
    ...
  ]
}
```

### POST/api/ativos
```{
"nome": "Novo Ativo",
"patrimonio": 123456,
"categoria_patrimonio": "INFORMÁTICA",
"status": "Ativo",
"manutencao": 0,
"id_sala": 1
}

{
  "id": 42,
  "nome": "Novo Ativo",
  "patrimonio": 123456,
  "categoria_patrimonio": "INFORMÁTICA",
  "status": "Ativo",
  "manutencao": 0,
  "id_sala": 1
}```


