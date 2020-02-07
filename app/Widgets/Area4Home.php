<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Area4Home extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.area4_home', [
            'config' => $this->config,
        ]);
    }
}
