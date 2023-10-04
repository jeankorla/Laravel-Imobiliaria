@extends('master')
@section('content')

<h2>User - <?php echo ($user->name) ?> </h2>

<form action="<?php echo route('users.destroy', ['user' => $user->id]) ?>" method="post">

    @csrf
    <input type="hidden" name="_method" value="DELETE" >

    <button type="submit">Delete</button>


</form>

@endsection