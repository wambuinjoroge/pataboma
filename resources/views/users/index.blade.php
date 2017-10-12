@extends('layouts.app')

@section('title', ' New User')

@section('content')

    {{--table--}}
    <div class="container">
        <table class="table ">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)

                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>

                    @endforeach
            </tbody>
        </table>
    </div>

    @stop