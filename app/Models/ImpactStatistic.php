<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpactStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value',
        'numeric_value',
        'suffix',
        'icon',
        'order_column',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'numeric_value' => 'decimal:2',
            'order_column' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Scope: active only.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: ordered by order_column.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order_column');
    }
}
