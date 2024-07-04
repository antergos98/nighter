<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Carbon $birthdate
 * @property int $age
 */
class Profile extends Model
{
    use HasFactory;

    protected $casts = [
        'birthdate' => 'date',
    ];

    /**
     * @return BelongsTo<User, Profile>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function age(): Attribute
    {
        return new Attribute(
            get: fn (): int => (int) floor($this->birthdate->diffInYears(now())),
        );
    }
}
