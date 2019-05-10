<?php
include_once('classes/PrimeNumberMulltiplication.php')
 
class PrimeMultiplicationTests extends PHPUnit_Framework_TestCase
{
    private $count;
 	private $multiplicator;
 
    protected function setUp()
    {
        $this->multiplicator = new PrimeNumberMulltiplication($this->count);
    }
 
    protected function tearDown()
    {
        $this->count = NULL;
    }
 
    public function testMultiplication()
    {
		$expectedResult = array
		(
			[2] => array
				(
					[2] => 4
					[3] => 6
					[5] => 10
					[7] => 14
					[11] => 22
					[13] => 26
					[17] => 34
					[19] => 38
					[23] => 46
					[29] => 58
				)

			[3] => array
				(
					[2] => 6
					[3] => 9
					[5] => 15
					[7] => 21
					[11] => 33
					[13] => 39
					[17] => 51
					[19] => 57
					[23] => 69
					[29] => 87
				)

			[5] => array
				(
					[2] => 10
					[3] => 15
					[5] => 25
					[7] => 35
					[11] => 55
					[13] => 65
					[17] => 85
					[19] => 95
					[23] => 115
					[29] => 145
				)

			[7] => array
				(
					[2] => 14
					[3] => 21
					[5] => 35
					[7] => 49
					[11] => 77
					[13] => 91
					[17] => 119
					[19] => 133
					[23] => 161
					[29] => 203
				)

			[11] => array
				(
					[2] => 22
					[3] => 33
					[5] => 55
					[7] => 77
					[11] => 121
					[13] => 143
					[17] => 187
					[19] => 209
					[23] => 253
					[29] => 319
				)

			[13] => array
				(
					[2] => 26
					[3] => 39
					[5] => 65
					[7] => 91
					[11] => 143
					[13] => 169
					[17] => 221
					[19] => 247
					[23] => 299
					[29] => 377
				)

			[17] => array
				(
					[2] => 34
					[3] => 51
					[5] => 85
					[7] => 119
					[11] => 187
					[13] => 221
					[17] => 289
					[19] => 323
					[23] => 391
					[29] => 493
				)

			[19] => array
				(
					[2] => 38
					[3] => 57
					[5] => 95
					[7] => 133
					[11] => 209
					[13] => 247
					[17] => 323
					[19] => 361
					[23] => 437
					[29] => 551
				)

			[23] => array
				(
					[2] => 46
					[3] => 69
					[5] => 115
					[7] => 161
					[11] => 253
					[13] => 299
					[17] => 391
					[19] => 437
					[23] => 529
					[29] => 667
				)

			[29] => array
				(
					[2] => 58
					[3] => 87
					[5] => 145
					[7] => 203
					[11] => 319
					[13] => 377
					[17] => 493
					[19] => 551
					[23] => 667
					[29] => 841
				)

		);
		$result = $this->multiplicator->getPrimeMulitplicationResult();
        $this->assertEquals($expectedResult, $result);
    }
 
}
