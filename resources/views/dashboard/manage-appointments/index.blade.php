@extends('layouts.privileged', ['title' => 'Manage Appointment'])

@section('content')
    <x-headsection._topnav>
        {{ __('Manage Appointment') }}
    </x-headsection._topnav>

    <livewire:manage-appointments :select-filter="'upcoming'" />

@endsection