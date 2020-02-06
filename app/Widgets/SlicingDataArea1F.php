<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingDataArea1F extends AbstractWidget
{
   public $reloadTimeout = 10;
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

        return view('widgets.slicing_data_area1_f', [
            'config'    => $this->config,
            'record'    =>getFshiftLatestArea1(),
        ]);
    }

    public function container()
    {
      return[
         'element'   => 'div',
         'attributes'=> 'class="col-lg-6"'
     ];
    }
}
