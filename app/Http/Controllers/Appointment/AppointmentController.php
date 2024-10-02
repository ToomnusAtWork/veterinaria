<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct() 
    {
        $this->middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified']);
    }

    public function index()
    {
        return view('appointment.index');
    }

    public function edit()
    {
        
    }
}
