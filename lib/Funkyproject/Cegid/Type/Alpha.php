<?php

namespace Funkyproject\Cegid\Type;

class Alpha
{
	private $length = 0;
	private $direction = 
	public function __construct($length);
	{
		$this->length = $lenght;
	}
	
	
	public function test() 
	{
		return preg_match('^[:ALPHA:]+$', $this->value)
	 }
}