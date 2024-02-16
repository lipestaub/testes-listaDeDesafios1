<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/Calculator.php';

    class CalculatorTest extends TestCase {
        private Calculator $calculator;

        public function __construct(?string $name = null) {
            parent::__construct($name);
            $this->calculator = new Calculator();
        }

        /**
         * Test if the sum of two positive numbers return the expected result.
         */
        public function testPositiveNumbersSum() {
            $this->assertEquals(5, $this->calculator->sum(2, 3));
        }

        /**
         * Test if the sum of two negative numbers return the expected result.
         */
        public function testNegativeNumbersSum() {
            $this->assertEquals(-4, $this->calculator->sum(-3, -1));
        }

        /**
         * Test if the sum of a positive number and a negative number return the expected result.
         */
        public function testPositiveAndNegativeNumbersSum() {
            $this->assertEquals(4, $this->calculator->sum(5, -1));
        }

        /**
         * Test if the sum of a positive number and zero return the expected result.
         */
        public function testPositiveNumberAndZeroSum() {
            $this->assertEquals(5, $this->calculator->sum(5, 0));
        }

        /**
         * Test if the sum of a negative number and zero return the expected result.
         */
        public function testNegativeNumberAndZeroSum() {
            $this->assertEquals(-3, $this->calculator->sum(-3, 0));
        }

        /**
         * Test if the sum return type is the expect one (integer).
         */
        public function testSumReturnType() {
            $this->assertIsInt($this->calculator->sum(2, 3));
        }
    }
?>