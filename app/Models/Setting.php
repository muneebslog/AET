<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('settings'));
        static::deleted(fn () => Cache::forget('settings'));
    }

    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    /**
     * Get a setting value by key.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        $setting = static::getAll()->firstWhere('key', $key);

        return $setting ? $setting->value : $default;
    }

    /**
     * Set a setting value by key (creates or updates).
     */
    public static function set(string $key, mixed $value, ?string $group = null): self
    {
        $setting = static::firstOrNew(['key' => $key]);
        $setting->value = is_string($value) ? $value : json_encode($value);
        $setting->group = $group ?? $setting->group;
        $setting->save();

        return $setting;
    }

    /**
     * Get all settings (cached).
     */
    public static function getAll(): \Illuminate\Support\Collection
    {
        return Cache::remember('settings', 3600, fn () => static::all());
    }

    /**
     * Get settings by group.
     */
    public static function getByGroup(string $group): \Illuminate\Support\Collection
    {
        return static::getAll()->where('group', $group)->values();
    }

    protected static function parseValue(?string $value): mixed
    {
        if ($value === null || $value === '') {
            return null;
        }

        $decoded = json_decode($value, true);

        return json_last_error() === JSON_ERROR_NONE ? $decoded : $value;
    }

    /**
     * Accessor for decoded value.
     */
    public function getValueAttribute(?string $value): mixed
    {
        return static::parseValue($value ?? $this->getRawOriginal('value'));
    }

    public function setValueAttribute(mixed $value): void
    {
        $this->attributes['value'] = is_string($value) ? $value : json_encode($value);
    }
}
