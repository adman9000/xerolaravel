<?php
namespace adman_9000\LaravelXero\Facades;

use Illuminate\Support\Facades\Facade;

class XeroAccount extends Facade
{
    protected static function getFacadeAccessor() { return 'XeroAccount'; }
}
