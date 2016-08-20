<?php

abstract class Features
{
    public static function getAll()
    {
        return [
            'free' => [
                '<b>Multi-server</b> support',
                '<b>Port</b> selection <span style="font-size:9px;">(ex: 88.180.108.192<u>:85</u>)</span>',
                '<b>2</b> sample servers to try the app',
                'Save graphs on SD card',
                '<b>Labels</b>',
                'Plugins documentation',
                'MunStrap compatibility',
                '8 <b>languages</b>*',
                '<b>SSL</b> support',
                '<b>HTTP Basic Auth</b> support'
            ],
            'premium' => [
                '<b>HTTP Digest Auth</b> support',
                'Graphs <b>grids</b>',
                'Servers configuration import/export',
                'Graph widget',
                'Alerts widget',
                'Chromecast Support'
            ]
        ];
    }
}
