<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;


class Service extends DefaultController
{

    public function index(Request $request)
    {
        $this->_data['menu']['service']['class'] = 'current';
        return $this->_view('service');
    }

    public function en(Request $request)
    {
        $this->_data['menu']['service']['class'] = 'current';
        return $this->_view('serviceEn');
    }
}
