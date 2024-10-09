<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use App\Http\Requests\ServiceRequest;
use App\Jobs\CreateService;
use App\Jobs\UpdateService;

class ServiceController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        
        return view('dashboard.manage-services.index', [
                'services' => $services,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Service $service)
    {
        $category = Category::all();
        return view('dashboard.manage-services.create',[
            'service' => $service,
            'categories'=> $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $this->dispatchSync(CreateService::fromRequest($request));
        return redirect()->route('manage-service')->with('success','Service Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Service $service)
    {
        return view('dashboard.manage-services.show', compact('service'))
            ->with('title', $service->name);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Service $service)
    {
        $service = $request->service;
        $category = Category::all();
        // ->pluck('name','id')
        return view('dashboard.manage-services.edit', [
            'service' => $service,
            'categories' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $this->dispatchSync(UpdateService::fromRequest($request, $service));

        return redirect()->route('manage-service')->with('success','Service Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
