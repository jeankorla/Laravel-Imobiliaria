@extends('master')
@section('content')

<a href="<?php echo route('users.create') ?>">Criar Usuario</a>

|

<a href="<?php echo route('users.index') ?>">Ver Usuarios</a>

<hr>

<h2>Home</h2>

@endsection