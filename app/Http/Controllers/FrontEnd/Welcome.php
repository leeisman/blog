<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;


class Welcome extends DefaultController
{

    public function index(Request $request)
    {
        $this->_data['menu']['welcome']['class'] = 'current';
        return $this->_view('welcome');
    }

    public function en(Request $request)
    {
        $this->_data['menu']['welcome']['class'] = 'current';
        return $this->_view('welcomeEn');
    }

}
