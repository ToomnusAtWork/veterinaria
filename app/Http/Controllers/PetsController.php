<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PetsResource;
use App\models\Pet;
use App\Jobs\CreatePet;


class PetsController extends Controller
{

    public function __construct()
    {
        $this->middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            ], );
    }

    public function index()
    {
        $pets = Pet::where('user_id', Auth::user()->id)->get();
    
        return view('pets.index', [
            'pets' => $pets ]);
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(PetRequest $request)
    {
        $this->dispatchSync(CreatePet::fromRequest($request));

        $pet = Pet::where('name', $request->name())->first();

        return redirect()->route('customer-pet')->with('success','Pet Created');

        // return $request->wantsJson()
        //     ? PetsResource::make($pet)
        //     : redirect()->route('customer-pet')->with('success','Pet Created');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
