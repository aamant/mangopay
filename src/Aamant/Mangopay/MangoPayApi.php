<?php namespace Aamant\Mangopay;

use \MangoPay\MangoPayApi as MangoPayApiBase;

class MangoPayApi extends MangoPayApiBase
{
	public function __call($name, $args) {

		return $this->{ucFirst($name)};
	}

	public function make()
	{
		$this->Config->ClientId = "creationleaders";
		$this->Config->ClientPassword = "FVUZs5tAaFxDM62TMeNPE4KmmzW7MevyoxXGKUK6jYSMRB26r8";
		$this->Config->TemporaryFolder = storage_path() . '/mangopay/';

		return $this;
	}
}