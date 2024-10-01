<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .logo {
            margin-bottom: 20px;
        }

        .welcome-text {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
        }
    </style>
    @extends('layout')
    @section('content')

    <div class="container text-center">
        <div class="logo">
            <img src="/assests/personagens.png" width="400" height="300">
        </div>

        <h1 class="welcome-text">Bem-vindo ao Sistema de Cadastro de Jogos!</h1>

        <div class="list-group">
            <a href="{{route('show-cadastro-jogos')}}" class="list-group-item list-group-item-action">Cadastrar Novo Jogo</a>
        </div>
        <div class="footer">
            <p>Criado por Jorge Alerto</p>
        </div>
    </div>

    @endsection