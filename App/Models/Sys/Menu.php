<?php
namespace Backend\Models\Sys;

use Backend\Models\Base;

class Menu extends Base
{
    public function initialize()
    {

    }

    /**
     * @var int $id
     */
    public $id;


    public function getSource()
    {
        return 'auth_ms_menu';
    }
}
