<?php

namespace App\Enums;

use Illuminate\Support\Str;

trait EnumHelpers
{
    public static function keyOf(string $value)
    {
        return array_flip(self::keysAndValues())[$value] ?? null;
    }

    public static function getNames(): array
    {
        return array_column(self::cases(), "name");
    }

    public static function getValues(): array
    {
        return array_column(self::cases(), "value");
    }

    public static function keysAndValues(): array
    {
        return array_combine(self::getValues(), self::getNames());
    }

    public static function selectKeysAndValues(): array
    {
        return collect(self::keysAndValues())->map(function ($key, $value) {
            return str_replace('_', ' ', Str::ucfirst(Str::lower($key)));
        })->toArray();
    }

    public static function selectIdAndName(): array
    {
        $values = [];
        foreach (self::keysAndValues() as $key => $value) {
            $name = str_replace('_', ' ', Str::ucfirst(Str::lower($value)));
            $values[] = ['id' => $key, 'name' => $name];
        }
        return $values;
    }
}
