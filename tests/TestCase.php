<?php

namespace Tests;

use Neoistone\Smtp2Go\Providers\Smtp2GoServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            Smtp2GoServiceProvider::class,
        ];
    }

}
