<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property bool|null $status
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 */
class Task extends Model
{
    protected $fillable = ['title', 'description', 'status'];
}
