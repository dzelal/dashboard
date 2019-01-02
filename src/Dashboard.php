<?php

namespace Dzelal\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Dashboard
{
    /**
     * Instance of request
     *
     * @var \Illuminate\Http\Request
     */
    private $request;
    /**
     * @var array
     */
    private $config = [];

    public $items;

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  array $config
     * @param  string $defaultLocale
     */
    public function __construct(array $config = [])
    {
        //$this->request = $request;
        $this->config = $config;

        // Set defaults
        $this->saveToMenu($this->config['menu']);
        //$this->set('url', $this->request->url());

    }

    protected function saveToMenu(array $items)
    {
        return $items->items = $items;
    }

    public function show()
    {
        return $items->items;
    }



}
