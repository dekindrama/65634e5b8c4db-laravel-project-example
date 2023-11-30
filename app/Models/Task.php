<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
        'user_id',
    ];

    protected $table = 'tasks';
    protected $primaryKey = 'id';

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
