<?php declare(strict_types=1);

namespace Knops\Utilities\Factory;

use DateTimeInterface;
use DateTimeZone;

final class DateTimeFactory
{
    private static string $defaultTimezone = 'Europe/Brussels';

    public static function getDefaultTimezone(): string
    {
        return self::$defaultTimezone;
    }

    public static function setDefaultTimezone(string $defaultTimezone): void
    {
        self::$defaultTimezone = $defaultTimezone;
    }

    public static function createTimezone(): DateTimeZone
    {
        return new DateTimeZone(self::getDefaultTimezone());
    }

    public static function now(): DateTimeInterface
    {
        return self::create('now');
    }

    public static function create(string $datetime): DateTimeInterface
    {
        return new \DateTimeImmutable($datetime, self::createTimezone());
    }

    public static function createFromFormat(string $format, string $datetime): DateTimeInterface
    {
        return \DateTimeImmutable::createFromFormat($format, $datetime);
    }
}