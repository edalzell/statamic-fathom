<?php

namespace Edalzell\Fathom;

use Edalzell\Fathom\Widgets\FathomWidget;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $widgets = [
        FathomWidget::class,
    ];
}
