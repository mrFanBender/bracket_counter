<?php
namespace Habibullin;

class Bracket
{
	private $open_sk = 0;
	private $close_sk = 0;
	
	public function compare(String $str){
		$i=0;
		$this->open_sk=0;
		$this->close_sk=0;
		$str = preg_replace("/[\t\r\n\s]+/", '', $str);	
		while(isset($str[$i])){
			if($str[$i]=='('){
				$this->open_sk++;
			}elseif($str[$i]==')'){
				$this->close_sk++;
			}else{
				throw new \InvalidArgumentException('Недопустимый символ в строке:'.$str[$i].'Строки должны содержать только открывающие или закрывающие скобки, пробелы или табуляцию');			
			}
			$i++;
		}
		if($this->open_sk == $this->close_sk)
			return true;
		return false;
	} 
}

