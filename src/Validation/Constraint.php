<?php
	namespace Bolt\Validation;

	use Bolt\Base;
	use Bolt\Exceptions\Validation as Exception;

	abstract class Constraint extends Base
	{
		public $message;

		abstract public function isValid($value): bool;

		public function validate($value): void
		{
			if ($this->isValid($value))
			{
				throw new Exception($this->message());
			}
		}
	}
?>
