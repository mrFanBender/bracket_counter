<?php
namespace Habibullin;

class Bracket
{
	private $openBrackets = 0;
	private $closeBrackets = 0;

	public function compare(String $str)
	{
		$i=0;
		$this->openBrackets=0;
		$this->closeBrackets=0;
		$str = preg_replace("/[\t\r\n\s]+/", '', $str);

		while (isset($str[$i])) {
			if ($str[$i]=='(') {
				$this->openBrackets++;
			}elseif ($str[$i]==')') {
				$this->closeBrackets++;
			}else {
				throw new \InvalidArgumentException("Недопустимый символ в строке:'.$str[$i].'Строки должны содержать только открывающие или закрывающие скобки, пробелы или табуляцию \n");
			}
			$i++;
		}

		if ($this->openBrackets == $this->closeBrackets) {
			return true;
		}

		return false;
	}
}



