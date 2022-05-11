<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMate extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'main_user',
        'bandmate_user'
    ];

    public function rel_main_user() {
        return $this->belongsTo(User::class, 'main_user');
    }

    public function rel_bandmate_user() {
        return $this->belongsTo(User::class, 'bandmate_user');
    }
}
