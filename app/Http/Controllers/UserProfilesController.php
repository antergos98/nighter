<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserProfilesController
{
    public function show(User $user): View
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user): View
    {
        return view('profiles.edit', compact('user'));
    }
}
