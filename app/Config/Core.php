<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Core extends BaseConfig
{
    public $site_name = 'INLIS Lite';
    public $layout_popup = 'Core\layout\backend\popup'; //\hamkamannan\adminigniter\Views\layout\backend\main
    public $layout_blank = 'Core\layout\backend\blank'; //\hamkamannan\adminigniter\Views\layout\backend\main
    public $layout_backend = 'Core\layout\backend\main'; //\hamkamannan\adminigniter\Views\layout\backend\blank
    public $layout_frontend = 'Core\layout\frontend\main';

}