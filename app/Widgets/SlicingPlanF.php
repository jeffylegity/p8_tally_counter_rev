<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB;

class SlicingPlanF extends AbstractWidget
{
    public $reloadTimeout = 20;
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
        return view('widgets.slicing_plan_f', [
            'config' => $this->config,
            'plan'   => getFshiftLatest(),
        ]);
    }

    public function container(){
        return[
            'element'   => 'div',
            'attributes'=> 'class="row"'
        ];
    }
}
