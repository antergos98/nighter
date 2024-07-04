<?php

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;

use function Pest\Laravel\travelTo;

it('returns user age based on birthdate', function () {
    travelTo(Carbon::parse('april 1st 2024'));

    $user = User::factory()
        ->make();

    $user->setRelation('profile', Profile::factory()->make(['birthdate' => Carbon::parse('march 7th 1998')]));

    expect($user->profile->age)->toBe(26);
});
