<?php 

	//format date
	function Fdate($date)
	{
		return date('F j, Y, g:i a', strtotime($date));
	}

	function Fbody($text,$char = 700)
	{
		$text = $text." ";
		$text = substr($text, 0, $char);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text."...";
		return $text;

	}
?>