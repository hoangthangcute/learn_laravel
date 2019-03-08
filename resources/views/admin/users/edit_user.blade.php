@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
    <h1 class="user-title">Edit user</h1>
    <form class="form-group form-info"  method="POST" action="{{ route('edit') }}">
        @csrf
        <label for="fname">Name: </label>
        <input class="form-control input-info" type="text" name="name" id="fname"
            value="{{ $user->name }}"
        >
        <label for="femail">Email: </label>
        <input class="form-control input-info" type="text" name="email" id="femail"
        value="{{ $user->email }}"
        >
        <label for="fpass">Password: </label>
        <input class="form-control input-info" type="password" name="password" id="fpass">
        <input class="form-control input-submit-button" type="submit" name="add" value="Edit user">
    </form>
@endsection