<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "騏駿科技公司", // set false to total remove
            'description'  => '本公司為一專業電池組裝製造廠，主要業務如鋰離子電池組、
          鋰聚合物電池組、鎳氫鎳鎘電池組，將其電池成品完成組裝後，
          應用於可攜式3C產品及OEM代工，研發設計製造等。', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => '騏駿科技公司', // set false to total remove
            'description' => '本公司為一專業電池組裝製造廠，主要業務如鋰離子電池組、
          鋰聚合物電池組、鎳氫鎳鎘電池組，將其電池成品完成組裝後，
          應用於可攜式3C產品及OEM代工，研發設計製造等。', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
