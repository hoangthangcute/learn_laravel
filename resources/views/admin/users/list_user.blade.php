@extends('layouts.admin')

@section('title', 'User Layout')

@section('content')
    <h1 class="user-title">List Users</h1>
    
    <div class="table-list-user">
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>
        @foreach($data as $user)   
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="action-btn">
                <a href="/edit/{{ $user->id }}"><button class="btn"><i class="fa fa-edit"></i></button></a>
                <a href="/delete/{{ $user->id }}"><button class="btn"><i class="fa fa-close"></i></button></a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    

@endsection