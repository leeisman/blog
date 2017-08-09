<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use SEOMeta;
use OpenGraph;
use Twitter;

class DefaultController extends Controller
{

    use SEOToolsTrait;

    const EN = 'en';
    const TW = 'tw';

    protected $_data = [];

    protected $langSelect;

    public function __construct(Request $request)
    {
        $this->_setMultiLingual($request);

        $this->setSEO();
    }

    protected function setSEO()
    {
        $this->seo()->opengraph()->setUrl('http://35.167.58.15/');
        $this->seo()->opengraph()->addProperty('type', 'batteries');
        $this->seo()->opengraph()->addImage('/images/logo.png');

        OpenGraph::setSiteName('騏駿科技有限公司'); //define site_name

        SEOMeta::addKeyword(['騏駿', '騏駿科技', '騏駿科技公司','鋰電池','電池','OEM','鋰聚合物電池組']);
//
//        <meta name="keywords" content="騏駿,騏駿科技,騏駿科技有限公司,鋰電池,
//    電池,電池加工,鋰離子,鋰離子電池組
//    ,鋰聚合物電池組,鋰聚合物,鎳氫,鎳氫鎳鎘電池組,OEM,電源,研發設計,製造,工廠,電池組,可攜式">
    }

    protected function _setMultiLingual($request)
    {

        $this->_checkLang($request);

        if ($this->langSelect == static::TW) {
            $this->_data['menu'] = $this->_getChineseMenu();
        }

        if ($this->langSelect == static::EN) {
            $this->_data['menu'] = $this->_getEnglishMenu();
        }

        $this->_data['lang'] = $this->langSelect;

    }

    protected function _checkLang($request)
    {
        $uri = explode('/', $request->getRequestUri());

        $this->langSelect = static::TW;

        if (count($uri) < 2) {
            return;
        }

        if ($uri[1] == 'en') {
            $this->langSelect = static::EN;
        }
    }

    protected function _getEnglishMenu()
    {
        return
            [
                'welcome'    => ['url' => '/en', 'name' => 'About Us', 'class' => ''],
                'service'    => ['url' => '/en/service', 'name' => 'Service', 'class' => ''],
                'product' => ['url' => '/en/product', 'name' => 'Product', 'class' => ''],
                'contacts'   => ['url' => '/en/contacts', 'name' => 'Contacts Us', 'class' => ''],
            ];
    }

    protected function _getChineseMenu()
    {
        return
            [
                'welcome'    => ['url' => '/', 'name' => '關於我們', 'class' => ''],
                'service'    => ['url' => '/service', 'name' => '服務介紹', 'class' => ''],
                'product' => ['url' => '/product', 'name' => '產品', 'class' => ''],
                'contacts'   => ['url' => '/contacts', 'name' => '聯絡我們', 'class' => ''],
            ];
    }

    protected function _view($view)
    {
        $this->_data = array_merge($this->_data,['myindex'=>request()->all()]);
        return view($view, $this->_data);
    }
}
