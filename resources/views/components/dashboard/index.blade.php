@extends('layouts.privileged', ['title' => 'Admin Dashboard'])
@section('content')
@include('layouts._sidenav')


    <div class="w-full">
        {{ $slot }}
    </div>

@endsection
