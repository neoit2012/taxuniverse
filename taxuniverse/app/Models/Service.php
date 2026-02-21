<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'icon_url',
        'category',
        'features',
        'cms_content',
        'required_documents',
    ];

    protected $casts = [
        'features' => 'array',
        'cms_content' => 'array',
        'required_documents' => 'array',
    ];

    // Helper to get hero section
    public function getHeroAttribute()
    {
        return $this->cms_content['hero'] ?? [];
    }

    // Helper to get benefits
    public function getBenefitsAttribute()
    {
        return $this->cms_content['benefits'] ?? [];
    }

    // Helper to get process
    public function getProcessAttribute()
    {
        return $this->cms_content['process'] ?? [];
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
