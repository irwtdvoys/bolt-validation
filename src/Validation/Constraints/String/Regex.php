<?php
	namespace Bolt\Validation\Constraints\String;

	use Bolt\Validation\Constraint;

	class Regex extends Constraint
	{
		public string $pattern = "";
		
		public function isValid($value): bool
		{
			preg_match($this->pattern, $value, $matches);
			
			return (count($matches) === 0) ? false : true;
		}
	}
?>
