<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingActualE extends AbstractWidget
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
        return view('widgets.slicing_actual_e', [
            'config' => $this->config,
            'actual'   => getEshiftLatest(),
        ]);
    }

    public function container(){
        return[
            'element'   => 'div',
            'attributes'=> 'class="row"'
        ];
    }
}
