@extends('master')

@section('content')


<h2>Users</h2>

<?php

if(session()->has('message'))
{
    echo session()->get('message');
}


?>

    @foreach ($users as $user)
    <table>
        <tr>
            <th>Nome:</th>
            <th>Email:</th>
            <th>Ações:</th>
        </tr>
        <tr>
            <td><?php echo $user -> name ?></td>
            <td><?php echo $user -> email ?></td>
            <td><a href=" <?php echo route('users.edit', ['user' => $user->id] ) ?> ">Editar</a>
                |
                <a href="<?php echo route('users.show', ['user' => $user->id])?>">Visualizar</a></td>
        </tr>
     
    </table>
   @endforeach




@endsection