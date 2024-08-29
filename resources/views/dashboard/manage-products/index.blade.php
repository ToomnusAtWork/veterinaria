
@extends('layouts.privileged', ['title' => 'Admin Dashboard'])

@section('content')
   <x-headsection._topnav>
      {{ __('Product') }}
  </x-headsection._topnav>

   <livewire:manage-products />

@endsection
