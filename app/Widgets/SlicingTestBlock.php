<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingTestBlock extends AbstractWidget
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
        return view('widgets.slicing_test_block', [
            'config' => $this->config,
            'test_block'   => dataGetter(),
        ]);
    }

    public function container(){
        return[
            'element'   => 'div',
            'attributes'=> 'class="row"'
        ];
    }
}
