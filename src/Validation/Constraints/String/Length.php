<?php
	namespace Bolt\Validation\Constraints\String;

	use Bolt\Validation\Constraint;

	class Length extends Constraint
	{
		public int $min;
		public int $max;

		public function __construct($data = null)
		{
			parent::__construct($data);

			if (!isset($this->message))
			{
				switch (true)
				{
					case isset($this->min) && !isset($this->max):
						$this->message("Must be longer than " . $this->min() . " characters");
						break;
					case !isset($this->min) && isset($this->max):
						$this->message("Must be shorter than " . $this->max() . " characters");
						break;
					case isset($this->min) && isset($this->max):
						$this->message("Must be between " . $this->min() . " and " . $this->max() . " characters");
						break;
				}
			}
		}

		public function isValid($value): bool
		{
			$result = true;

			if (isset($this->min) && strlen($value) < $this->min())
			{
				$result = false;
			}

			if (isset($this->max) && strlen($value) > $this->max())
			{
				$result = false;
			}

			return $result;
		}
	}
?>
