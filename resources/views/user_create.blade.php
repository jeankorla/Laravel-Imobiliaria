@extends ('master')

@section ('content')

<h2>Create</h2>

<?php
if(session()->has('message')){
    echo session()->get('message');
}
?>

<form action="<?php echo route('users.store')?>" method="post">

    @csrf
    
    <label for="name">Nome:</label>
    <input type="text" name="name">

    <label for="email">E-mail:</label>
    <input type="email" name="email">

    <label for="password">Senha:</label>
    <input type="password" name="password">

    <button type="submit">Create</button>
</form>



@endsection