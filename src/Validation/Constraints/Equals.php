<?php
	namespace Bolt\Validation\Constraints;

	use Bolt\Validation\Constraint;

	class Equals extends Constraint
	{
		public $value;

		public function __construct($data = null)
		{
			parent::__construct($data);

			if (!isset($this->message))
			{
				$this->message("Must be equal to {{ value }}");
			}
		}
		
		public function isValid($value): bool
		{
			return $value == $this->value ? true : false;
		}
	}
?>
