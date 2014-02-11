<?php namespace Aamant\Mangopay;

use Illuminate\Support\Facades\Facade;

class MangoPayFacade extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'mangopay'; }

}