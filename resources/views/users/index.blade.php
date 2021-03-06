@extends('layouts.master')

@section('title', 'Users')

@section('content')

<div class="row"><!-- align-items-center"> -->
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>@lang('users.index.h2')</h2>
        </div>
        <div class="pull-right align-self-center">
            <a class="btn btn-success" href="{{ route('users.create') }}"> @lang('users.index.btn.create')</a>
        </div>
    </div>
</div>

@component('components.show-messages')
@endcomponent

<table class="table">
    <thead>
        <tr>
            <th>@lang('users.index.table.name')</th>
            <th>@lang('users.index.table.email')</th>
            <th>@lang('users.index.table.created')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @if($user->created_at)
                <td>{{$user->created_at}}</td>
            @else
                <td> - </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links('pagination::bootstrap-4') }}

@endsection
