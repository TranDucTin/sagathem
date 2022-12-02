<?php

namespace App\Controllers\Modules;

class TestIndex
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
