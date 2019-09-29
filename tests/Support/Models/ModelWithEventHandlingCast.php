<?php

namespace Vkovic\LaravelCustomCasts\Test\Support\Models;

use Vkovic\LaravelCustomCasts\Test\Support\CustomCasts\EventHandlingCast;

class ModelWithEventHandlingCast extends ModelWithCustomCasts
{
    protected $casts = [
        'field_1' => EventHandlingCast::class
    ];
}