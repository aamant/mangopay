<?php namespace Aamant\Mangopay;

use \MangoPay\MangoPayApi as MangoPayApiBase;

class MangoPayApi extends MangoPayApiBase
{
	/**
	 * undocumented class variable
	 *
	 * @var Aamant\Mangopay\Errors
	 **/
	protected $errors = null;

	public function __call($name, $args) {

		return $this->{ucFirst($name)};
	}

	public function make()
	{
		$this->Config->ClientId = \Config::get('mangopay::auth.client_id');
		$this->Config->ClientPassword = \Config::get('mangopay::auth.client_password');
		$this->Config->TemporaryFolder = \Config::get('mangopay::auth.temp_folder');
		$this->Config->DebugMode = \Config::get('mangopay::auth.debug');

		if (false === \Config::get('mangopay::auth.sandbox')){
			$this->Config->BaseUrl = "https://api.mangopay.com/v2/";
		}
		return $this;
	}

	public function sandbox($id, $name, $email)
	{
		return $this->Client->Create($id, $name, $email);
	}

	public function errors($code, $raw = false)
	{
		if (null === $this->errors){
			$this->errors = new Errors;
		}

		if ($raw){
			return $this->errors->raw($code);
		}

		return $this->errors->message($code);
	}
}