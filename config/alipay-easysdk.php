<?php

return [

//
//    'private_key_path' => __DIR__ . '/alipay-easysdk-key/private_key.pem', // 商户私钥
//    'public_key_path' => __DIR__ . '/alipay-easysdk-key/public_key.pem', // 阿里公钥
//    'payment_notify_url' => 'https://xxx', // 付款后.异步通知地址
//    'payment_return_url' => 'https://xxx', // 付款后.同步通知地址
//    'refund_notify_url' => 'https://xxx', // 支付宝无密退款异步通知地址
//    'app_pay_notify' => 'https://xxx',
//


    'protocol' => 'https',
    'gatewayHost' => 'openapi.alipay.com',
    'appId' => '<-- 请填写您的AppId，例如：2019022663440152 -->',
    'signType' => 'RSA2',

    // 合作身份者id，以2088开头的16位纯数字
    'partner_id' => '2088xxxxxxxxxxxx',

    // 收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
    'seller_id' => '2088xxxxxxxxxxxx',

    // 为避免私钥随源码泄露，推荐从文件中读取私钥字符串而不是写入源码中
    'merchantPrivateKey' => '<-- 请填写您的应用私钥，例如：MIIEvQIBADANB ... ... -->',

    'alipayCertPath' => '<-- 请填写您的支付宝公钥证书文件路径，例如：/foo/alipayCertPublicKey_RSA2.crt -->',
    'alipayRootCertPath' => '<-- 请填写您的支付宝根证书文件路径，例如：/foo/alipayRootCert.crt" -->',
    'merchantCertPath' => '<-- 请填写您的应用公钥证书文件路径，例如：/foo/appCertPublicKey_2019051064521003.crt -->',
    // 注：如果采用非证书模式，则无需赋值上面的三个证书路径，改为赋值如下的支付宝公钥字符串即可
    //'alipayPublicKey' => '<-- 请填写您的支付宝公钥，例如：MIIBIjANBg... -->',

    // 可设置异步通知接收服务地址（可选）
    'notifyUrl' => "<-- 请填写您的支付类接口异步通知接收服务地址，例如：https://www.test.com/callback -->",

    // 可设置AES密钥，调用AES加解密相关接口时需要（可选）
    'encryptKey' => "<-- 请填写您的AES密钥，例如：aa4BtZ4tspm2wnXLb1ThQA== -->",

    // 网络代理, 默认值 '' 表示不启用
    'httpProxy' => '',

    // 可设置ignoreSSL忽略SSL校验功能
    'ignoreSSL' => false,

];
