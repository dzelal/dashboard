<?php
namespace Dzelal\Dashboard\Facades;
use Illuminate\Support\Facades\Facade;
class Dashboard extends Facade
{
    /**
     * Name of the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dashboard';
    }
}
