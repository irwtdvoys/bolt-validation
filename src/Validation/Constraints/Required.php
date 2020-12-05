<?php
	namespace Bolt\Validation\Constraints;

	use Bolt\Validation\Constraint;

	class Required extends Constraint
	{
		public function __construct($data = null)
		{
			parent::__construct($data);

			if (!isset($this->message))
			{
				$this->message("Must be completed");
			}
		}
		
		public function isValid($value): bool
		{
			return $value !== null;
		}
	}
?>
