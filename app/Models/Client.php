<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, Authenticatable, Notifiable;

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'active_package');
    }
}
