<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;


class Product extends DefaultController
{

    public function index(Request $request)
    {
        $this->_data['menu']['product']['class'] = 'current';
        return $this->_view('product');
    }

    public function en(Request $request)
    {
        $this->_data['menu']['product']['class'] = 'current';
        return $this->_view('productEn');
    }
}
