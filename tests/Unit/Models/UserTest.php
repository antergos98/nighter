<?php

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;

use function Pest\Laravel\travelTo;

it('returns user age based on birthdate', function () {
    travelTo(Carbon::parse('april 1st 2024'));

    $user = User::factory()
        ->has(Profile::factory()->state(['birthdate' => Carbon::parse('march 7th 1998')]))
        ->create();

    expect($user->profile->age)->toBe(26);
});
