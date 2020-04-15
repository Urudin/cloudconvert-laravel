<?php namespace Lingwave\CloudConvertLaravel;

class ConvertMultiple {
	
	public $file;
	public $filename;

	public function toJson() 
	{
		return (object) get_object_vars($this);
	}

}