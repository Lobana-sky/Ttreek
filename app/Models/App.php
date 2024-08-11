<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class App extends Model
{
    use HasFactory, Notifiable;
    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'player_number',
        'price',
        'image',
    ];
}