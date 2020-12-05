<?php
	namespace Bolt\Validation\Constraints;

	use Bolt\Validation\Constraint;

	class Choice extends Constraint
	{
		public array $options = array();

		public function __construct($data = null)
		{
			parent::__construct($data);

			if (!isset($this->message))
			{
				$this->message("Must be one of the following options: {{ options }}");
			}
		}

		public function isValid($value): bool
		{
			return in_array($value, $this->options) ? true : false;
		}
	}
?>
