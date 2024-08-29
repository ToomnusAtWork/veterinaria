@extends('layouts.privileged', ['title' => 'Manage Location'])
@section('content')

    <x-headsection._topnav>
        {{ __('Dashboard') }}
    </x-headsection._topnav>

    <livewire:manage-locations />

@endsection