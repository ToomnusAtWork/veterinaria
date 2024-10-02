<?php

namespace App\Http\Controllers\Settings;

use App\Jobs\UpdateProfile;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\Controller;
use App\Http\Request\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;


class ProfileController extends Controller
{

    public function index()
    {
        return view('profile.show');
    }

    public function show(Request $request, ?User $user = null)
    {
        if ($user) {
            return view('users.profile', compact('user'));
        }

        if ($request->user()) {
            return redirect()->route('profile', $request->user()->name());
        }

        abort(404);
    }

    public function edit(User $user): View
    {
        return view('users.profile');
    }

}
