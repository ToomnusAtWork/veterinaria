@extends('layouts.privileged', ['title' => 'Manage Categories'])
@section('content')
    <x-headsection._topnav>
        {{ __('Manage Categories') }}
    </x-headsection._topnav>
    <livewire:manage-categories />

@endsection