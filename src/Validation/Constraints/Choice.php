<?php
	namespace Bolt\Validation\Constraints;

	use Bolt\Validation\Constraint;

	class Choice extends Constraint
	{
		public $options = array();

		public function isValid($value): bool
		{
			return in_array($value, $this->options) ? true : false;
		}
		
		public function message($data = null)
		{
			if ($data === null)
			{
				return ($this->message === null) ? "Must be one of the following options: `" . implode("`, `", $this->options) . "`" : $this->message;
			}

			$this->message = $data;

			return $this;
		}
	}
?>
