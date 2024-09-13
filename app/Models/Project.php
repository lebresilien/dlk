<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'img',
        'service_id',
        'description',
        'attachments'
    ];

    protected $casts = [
        'attachments' => 'array',
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
