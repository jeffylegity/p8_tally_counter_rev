<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingTestBlockF extends AbstractWidget
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
        return view('widgets.slicing_test_block_f', [
            'config' => $this->config,
            'test_block'   => getFshiftLatest(),
        ]);
    }

    public function container(){
        return[
            'element'   => 'div',
            'attributes'=> 'class="row"'
        ];
    }
}
