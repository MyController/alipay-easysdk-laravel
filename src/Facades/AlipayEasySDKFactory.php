<?php

namespace MyController\AlipayEasySDK\Facades;

use Illuminate\Support\Facades\Facade;

class AlipayEasySDKFactory extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'alipay-easysdk-factory';
	}
}