<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRolesEnum;
use App\Jobs\AnalyticsJob;
use App\Models\Appointment;
use App\Models\TimeSlot;
use App\Models\Service;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
            'staff'], ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $services = Service::orderByPrice('PriceLowToHigh')->where('is_hidden', false)->paginate(10);
        return view('services.overviews', compact('services'));
    }

    public function show()
    {
        return view('web.view-service');
    }   
}
