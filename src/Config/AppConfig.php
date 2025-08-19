<?php

namespace App\Config;

readonly class AppConfig
{
    public function __construct(
        public string $appName,
        public string $environment,
    ) {}
}
