@extends('layouts.privileged', ['title' => 'Manage Service'])

@section('content')

   <x-headsection._topnav>
      {{ __('Manage Service') }}
   </x-headsection._topnav>

   
  


   <livewire:manage-services />


@endsection