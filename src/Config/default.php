<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 加密算法.
    |--------------------------------------------------------------------------
    |
    | 默认使用 `HS256` ,对应 hash_hmac('sha256')
    |
    */
    'alg' => 'HS256',

    /*
    |--------------------------------------------------------------------------
    | 有效期
    |--------------------------------------------------------------------------
    |
    | 单位秒,默认为 1小时
    |
    */
    'ttl' => 3600,

    /*
    |--------------------------------------------------------------------------
    | 刷新有效期
    |--------------------------------------------------------------------------
    |
    | 单位秒,默认为 1天
    |
    */
    'refresh_ttl' => 86400,

    /*
    |--------------------------------------------------------------------------
    | 有效期偏差
    |--------------------------------------------------------------------------
    |
    | 检测时间时，当前时间会减去此值后再做检测
    | （保证多个服务器间 时间出现偏差时，Token依然可以被通过）
    | 单位秒,默认为 0秒 （通过不超过1分钟）
    |
    */
    'leeway' => 0,

    /*
    |--------------------------------------------------------------------------
    | 算法密钥
    |--------------------------------------------------------------------------
    |
    | 获取.env文件中生成的密钥 （同时设定了一个默认的密钥）
    | 默认密钥是在使用命令行生成密钥之前，当做测试使用
    | 根据框架不同将 ServiceProvider注册好后，就应立即使用命令行去生成算法密钥和公私钥
    |
    */
    'secret' => env('MITSUHA_AYA_JWT_SECRET','4bmCusDruVG6N7ZMAE2eu3c7NrUaHQ6VZCL6vqMU6SGWGIvYOoRlHtHp1UadXaLG'),

    'redis' => [
        'host' => env('REDIS_HOST', '127.0.0.1'),
        'password' => env('REDIS_PASSWORD', null),
        'port' => env('REDIS_PORT', 6379),
        'database' => env('REDIS_DB', 3),
        'options' => [
            'prefix' => env('APP_NAME') ? env('APP_NAME').':ma_jwt:' : 'ma_jwt:'
        ],
    ],
];