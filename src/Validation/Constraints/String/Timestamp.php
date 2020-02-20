<?php
	namespace Bolt\Validation\Constraints\String;

	class Timestamp extends Regex
	{		
		public function __construct()
		{
			parent::__construct(array(
				"pattern" => "/^\d{4}(-\d\d(-\d\d(T\d\d:\d\d(:\d\d)?(\.\d+)?(([+-]\d\d:\d\d)|Z)?)?)?)?$/i",
				"message" => "Must adhere to ISO 8601"
			));
		}
	}
?>
