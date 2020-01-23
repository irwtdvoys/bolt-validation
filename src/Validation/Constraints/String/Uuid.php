<?php
	namespace Bolt\Validation\Constraints\String;

	use Bolt\Validation\Constraint;
	use Bolt\Exceptions\Validation as Exception;

	class Uuid extends Regex
	{		
		public function __construct()
		{
			parent::__construct(array(
				"pattern" => "/^[0-9a-f]{8}-[0-9a-f]{4}-[0-5][0-9a-f]{3}-[089ab][0-9a-f]{3}-[0-9a-f]{12}$/i",
				"message" => "Must adhere to RFC4122"
			));
		}
	}
?>
