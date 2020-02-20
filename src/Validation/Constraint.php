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
			if (!$this->isValid($value))
			{
				throw new Exception($this->message());
			}
		}

		protected function placeholders($string)
		{
			$pattern = "/{{ (?'placeholder'[A-z]+) }}/";

			preg_match_all($pattern, $string, $matches);

			foreach ($matches['placeholder'] as $placeholder)
			{
				$value = $this->$placeholder;

				switch (true)
				{
					case is_array($value):
						$value = "`" . implode("`, `", $value) . "`";
						break;
				}

				$string = str_replace("{{ " . $placeholder . " }}", $value, $string);
			}

			return $string;
		}

		public function message($data = null)
		{
			if ($data === null)
			{
				return $this->placeholders($this->message);
			}

			$this->message = $data;

			return $this;
		}
	}
?>
