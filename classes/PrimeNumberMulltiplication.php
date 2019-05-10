<?php
/**
* Generate Prime Number Multiplication Table
* @Author: S.Prabhakaran <ramprabha.yoge@gmail.com>
* @Date-Modified: 09-May-2019
*/
class PrimeNumberMultiplication{
	
	public $requiredPrimecount = null;
	public $primeNumbers = [];
	
	public function __construct($argRequiredPrimeCount) {		
		$this->requiredPrimecount = $argRequiredPrimeCount;
		$this->primeNumbers = $this->generatePrimeNumbers();
	}
	/**
	* Generate Multiplication Table
	*
	*/
	public function getPrimeMulitplicationResult() {
		if(!$this->requiredPrimecount) {
			return false;
		}
		
		if(!$this->primeNumbers) {
			return false;
		}
		$multiplicationResult = [];
		try {
			if(!count($this->primeNumbers)) {
				return false;
			}
		
			//Loop through prime numbers to generate the multiplication result
			foreach($this->primeNumbers as $primeNum) {
				$multiplicationResult[$primeNum] = $this->doMultiplication($primeNum, $this->primeNumbers);
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
		
		return $multiplicationResult;
	}
	
	/**
	* Basic Multiplication Algorithm
	* 
	* @param integer $argMulKey Prime Number for which the multiplication takes place
	* @param array $argMulArray Array of prime numbers
	* 
	* @return array $multiplicationOutput Array of multiplication output
	*/
	public function doMultiplication($argMulKey, $argMulArray) {
		$multiplicationOutput = [];
		if(null == ($argMulKey) || !count($argMulArray)) {
			return false;
		}
		
		foreach ($argMulArray as $primeNum) {
			$multiplicationOutput[$primeNum] = $argMulKey * $primeNum; 
		}
		
		return $multiplicationOutput;
	}
	
	/**
	* Generate Prime Numbers
	*
	* @return array $arrPrimeNumbers Array of Prime Numbers
	*/
	public function generatePrimeNumbers() {
		$arrPrimeNumbers = [];
		if(null == $this->requiredPrimecount) {
			return false;
		}
		
		$count = 0;  
		$num = 2;  
		$result = [];
		while ($count < $this->requiredPrimecount)  
		{  
			$div_count=0;  
			//numbers to be checked as prime
			for ( $i=1; $i<=$num; $i++)  
			{  
				if (($num%$i)==0)  
				{  
					$div_count++;  
				}  
			}  
			//prime requires 2 rules ( divisible by 1 and divisible by itself)
			if ($div_count<3)  
			{  
				$arrPrimeNumbers[] = $num;
				$count=$count+1;  
			}  
			$num=$num+1;  
		}
		return $arrPrimeNumbers;
	}
	
	/**
	* Generate View Component
	*
	* @param array $argMuptiplicationData
	* @return string $html
	*/
	public function renderMultiplicationTable($argMuptiplicationData) {
		if(!$argMuptiplicationData) {
			echo "Give input is Invalid"; die;
		}
		$html = '<table>';
		$headerHtml = $this->buildTableHeader($this->primeNumbers);
		$html .= $headerHtml;
		$counter = 0;
		foreach($argMuptiplicationData as $outerKey => $outerVal) {
			$html.='<tr>';
			$html.='<td style="border-right: 2px dashed #ccc;">'.$outerKey.'</td>';
			foreach($outerVal as $innerKey => $innerVal) {
				$html.='<td>'.$argMuptiplicationData[$outerKey][$innerKey].'</td>';
			}
			$html.='</tr>';
			$counter++;
		}
		
		echo $html;
	}
	
	/**
	* Generate Header for the view component
	*
	* @param array $arrHeaderData
	* @return string $header
	*/
	public function buildTableHeader($arrHeaderData) {
		if(!$arrHeaderData) {
			return false;
		}
		$header = '<tr>';
		$header.='<td style="border-bottom: 2px dashed #ccc; border-right: 2px dashed #ccc;">&nbsp;</td>';
		foreach($arrHeaderData as $headerKey => $headerVal) {
			$header.='<td style="border-bottom: 2px dashed #ccc;">'.$headerVal.'</td>';
		}
		$header .= '</tr>';
		
		return $header;
	}
}

## Note: This code is not tested by running through Command Prompt
## To Run through Command Prompt, please enable the below two lines of code.
//$opts = getopt('count:');
//$requiredPrimeCount = $opts['count'];

/*$requiredPrimeCount = 10;
$primeMulObj = new PrimeNumberMultiplication($requiredPrimeCount);
//print_r($primeMulObj->getPrimeMulitplicationResult());
$primeMulObj->renderMultiplicationTable($primeMulObj->getPrimeMulitplicationResult());*/

?>
