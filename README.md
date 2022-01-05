# alipay-easysdk-laravel

基于 [alipay/alipay-easysdk](https://github.com/alipay/alipay-easysdk) 的 Laravel/Lumen 框架扩展

## 安装

```
composer require mycontroller/alipay-easysdk-laravel
```

## 配置

### Laravel

在文件 `config/app.php` 中添加:
```php
    'providers' => [
        // ...
        MyController\AlipayEasySDK\AlipayEasySDKServiceProvider::class,
    ],

    'aliases' => [
        // ...
        'AlipayEasySDKFactory' => MyController\AlipayEasySDK\Facades\AlipayEasySDKFactory::class,
    ],
```

运行 `php artisan vendor:publish --tag=alipay-easysdk` 命令，发布配置文件到你的项目中。


### Lumen

在文件 `bootstrap/app.php` 里添加:
```php
$app->withFacades(true, [
    // ...
    MyController\AlipayEasySDK\Facades\AlipayEasySDKFactory::class => 'AlipayEasySDKFactory',
]);

//Register Service Providers
// ...
$app->register(MyController\AlipayEasySDK\AlipayEasySDKServiceProvider::class);
// ...

//Loading configure
// ...
$app->configure('alipay-easysdk');
// ...
```

将 `/config/` 目录下的配置文件拷贝到项目的 `/config/` 目录里
```text
alipay-easysdk.php                  ===>   alipay-easysdk.php
alipay-easysdk-key/private_key.pem  ===>   alipay-easysdk-key/private_key.pem
alipay-easysdk-key/public_key.pem   ===>   alipay-easysdk-key/public_key.pem
```

## 使用

可以通过门面 `AlipayEasySDKFactory` 或者 `app('alipay-easysdk-factory')` 使用, 

具体用法需要去看 [alipay/alipay-easysdk](https://github.com/alipay/alipay-easysdk)
