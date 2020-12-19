<?php

namespace XLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

/**
 * Class StrExtendServiceProvider
 * @package XLaravel
 */
class StrExtendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Str::macro('multipleSpaceClear', function (string $value): string {
            return strMultipleSpaceClear($value);
        });
    }
}
