<?php

namespace App\Enum;

enum HabitFrequency: string
{
    case DAILY = 'daily';
    case WEEKLY = 'weekly';
    case CUSTOM = 'custom';

    public function label(): string
    {
        return match($this) {
            self::DAILY => 'Ежедневно',
            self::WEEKLY => 'Еженедельно',
            self::CUSTOM => 'Индивидуально',
        };
    }

    public static function fromString(string $value): self
    {
        return match($value) {
            'daily' => self::DAILY,
            'weekly' => self::WEEKLY,
            'custom' => self::CUSTOM,
            default => throw new \InvalidArgumentException("Unknown frequency: $value"),
        };
    }
}
