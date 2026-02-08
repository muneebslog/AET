<?php

if (! function_exists('setting')) {
    /**
     * Get a setting value by key.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function setting(string $key, mixed $default = null): mixed
    {
        return \App\Models\Setting::where('key', $key)->value('value') ?? $default;
    }
}
