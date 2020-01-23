<?php
	namespace Bolt\Validation;

	use Bolt\Base;

	abstract class Constraint extends Base
	{
		public $message;

		abstract public function isValid($value): bool;
	}
?>
