<?php

namespace App\Helpers;

class ThemeHelper
{
    public static function getPrimaryColor(): string
    {
        return config('theme.primary_color', '#56DFCF');
    }
    
    public static function setPrimaryColor(string $color): void
    {
        // Update CSS variables atau database
        // Implementasi sesuai kebutuhan
    }
    
    public static function generateColorPalette(string $baseColor): array
    {
        // Generate palette dari base color
        return [
            '50' => self::lighten($baseColor, 0.95),
            '100' => self::lighten($baseColor, 0.9),
            '200' => self::lighten($baseColor, 0.8),
            '300' => self::lighten($baseColor, 0.6),
            '400' => self::lighten($baseColor, 0.3),
            '500' => $baseColor,
            '600' => self::darken($baseColor, 0.1),
            '700' => self::darken($baseColor, 0.2),
            '800' => self::darken($baseColor, 0.3),
            '900' => self::darken($baseColor, 0.4),
            '950' => self::darken($baseColor, 0.5),
        ];
    }
    
    private static function lighten(string $color, float $amount): string
    {
        // Implementasi lighten color
        return $color;
    }
    
    private static function darken(string $color, float $amount): string
    {
        // Implementasi darken color
        return $color;
    }
}