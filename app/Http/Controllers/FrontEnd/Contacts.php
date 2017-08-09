<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;


class Contacts extends DefaultController
{

    public function index(Request $request)
    {
        $this->_data['menu']['contacts']['class'] = 'current';
        return $this->_view('contacts');
    }

    public function en(Request $request)
    {
        $this->_data['menu']['contacts']['class'] = 'current';
        return $this->_view('contactsEn');
    }
}
