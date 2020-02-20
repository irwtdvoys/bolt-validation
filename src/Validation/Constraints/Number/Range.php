<?php
	namespace Bolt\Validation\Constraints\Number;

	use Bolt\Validation\Constraint;

	class Range extends Constraint
	{
		public $from;
		public $to;

		public function __construct($data = null)
		{
			parent::__construct($data);

			if (!isset($this->message))
			{
				$this->message("Must be between {{ from }} and {{ to }}");
			}
		}

		public function isValid($value): bool
		{
			return ($value >= $this->from && $value <= $this->to) ? true : false;
		}
	}
?>
