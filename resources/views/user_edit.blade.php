@extends('master')

@section('content')

<h2>Edit</h2>

<?php
if(session()->has('message')){
    echo session()->get('message');
}
?>

<form action="<?php echo route('users.update', ['user' => $user->id]) ?>" method="post">

    @csrf

    <input type="hidden" name="_method" value="PUT" >

    <input type="text" name="name" value="<?php echo ($user->name) ?>">
    <input type="email" name="email" value="<?php echo ($user->email) ?>">

    <button type="submit">Update</button>
</form>

@endsection