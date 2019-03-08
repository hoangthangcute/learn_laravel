@extends('layouts.admin')

@section('title', 'Add User')

@section('content')
    <h1 class="user-title">Add user</h1>
    <form class="form-group form-info"  method="POST" action="{{ Route('add_user') }}">
        @csrf
        <label for="fname">Name: </label><input class="form-control input-info" type="text" name="name" id="fname">
        <label for="femail">Email: </label><input class="form-control input-info" type="text" name="email" id="femail">
        <label for="fpass">Password: </label><input class="form-control input-info" type="password" name="password" id="fpass">
        <input class="form-control input-submit-button" type="submit" name="add" value="Add user">
    </form>
@endsection