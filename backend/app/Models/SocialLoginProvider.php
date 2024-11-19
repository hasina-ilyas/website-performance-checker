<?php

namespace App\Models;

use Database\Factories\SocialLoginProviderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SocialLoginProvider extends Model
{
    /** @use HasFactory<SocialLoginProviderFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider_id',
        'provider_name',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
