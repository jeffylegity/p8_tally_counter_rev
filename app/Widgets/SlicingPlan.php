<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB;

class SlicingPlan extends AbstractWidget
{
    public $reloadTimeout = 5;
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
        return view('widgets.slicing_plan', [
            'config' => $this->config,
            'plan'   => dataGetter(),
        ]);
    }

    public function container(){
        return[
            'element'   => 'div',
            'attributes'=> 'class="row"'
        ];
    }
}
