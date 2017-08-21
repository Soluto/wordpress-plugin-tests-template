<?php
/**
 * Class SampleTest
 *
 * @package Plugin_Sample
 */

/**
 * Sample test case.
 */
class SampleTests extends WP_UnitTestCase {

	/**
	 * @test
	 */
	function some_function_return_4() {
		$result = some_function();

		$this->assertSame(4, $result);
	}
}
