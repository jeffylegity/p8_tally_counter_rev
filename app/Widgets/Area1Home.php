<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Area1Home extends AbstractWidget
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

        return view('widgets.area1_home', [
            'config' => $this->config,
            'slicing_data' =>getLatestArea1(),
        ]);
    }

    public function container(){
       return[
         'element'   => 'div',
         'attributes'=> 'class="container-fluid"'
       ];
    }
}
