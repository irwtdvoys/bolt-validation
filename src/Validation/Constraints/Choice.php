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
				$message = ($this->message === null) ? "Must be one of the following options: {{ options }}" : $this->message;

				return $this->placeholders($message);
			}

			$this->message = $data;

			return $this;
		}
	}
?>
