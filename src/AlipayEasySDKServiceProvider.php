<?php

namespace MyController\AlipayEasySDK;

use Alipay\EasySDK\Kernel\Config;
use Alipay\EasySDK\Kernel\Factory;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class AlipayEasySDKServiceProvider extends ServiceProvider
{
    /**
     * boot process
     */
    public function boot()
    {
        $configPath = realpath(__DIR__ . '/../config/alipay-easysdk.php');
        $privateKeyPath = realpath(__DIR__ . '/../config/alipay-easysdk-key/private_key.pem');
        $publicKeyPath = realpath(__DIR__ . '/../config/alipay-easysdk-key/public_key.pem');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $configPath => config_path('alipay-easysdk.php'),
                $privateKeyPath => config_path('alipay-easysdk-key/private_key.pem'),
                $publicKeyPath => config_path('alipay-easysdk-key/public_key.pem'),
            ], 'alipay-easysdk');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('alipay-easysdk');
        }

        $this->mergeConfigFrom($configPath, 'alipay-easysdk');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('alipay-easysdk-factory', function ($app) {
            $config = $app->make('config')->get('alipay-easysdk', []);
            $options = new Config($config);
            return Factory::setOptions($options);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'alipay-easysdk-factory',
        ];
    }
}
