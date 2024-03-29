<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/StringManipulator.php';

    class StringManipulatorTest extends TestCase {
        private StringManipulator $stringManipulator;
        public function __construct(?string $name = null) {
            parent::__construct($name);
            $this->stringManipulator = new StringManipulator();
        }

        /**
         * Test if the string is being capitalized.
         */
        public function testCapitalizeString() {
            $this->assertEquals('Batata', $this->stringManipulator->capitalizeString('batata'));
        }

        /**
         * Test if the empty string is being returned.
         */
        public function testCapitalizeEmptyString() {
            $this->assertEquals('', $this->stringManipulator->capitalizeString(''));
        }

        /**
         * Test if the strings are being concatenated.
         */
        public function testConcatenateStrings() {
            $this->assertEquals('abacate', $this->stringManipulator->concatenateStrings('aba', 'cate'));
        }

        /**
         * Test if the spaces are being concatenated.
         */
        public function testConcatenateSpaces() {
            $this->assertEquals('  ', $this->stringManipulator->concatenateStrings(' ', ' '));
        }

        /**
         * Test if empty strings are being concatenated.
         */
        public function testConcatenateEmptyStrings() {
            $this->assertEquals('', $this->stringManipulator->concatenateStrings('', ''));
        }

        /**
         * Test if the strings with empty spaces are being concatenated as expected.
         */
        public function testConcatenateStringsWithEmptySpaces() {
            $this->assertEquals('Felipe Staub', $this->stringManipulator->concatenateStrings('Felipe', ' Staub'));
        }

        /**
         * Test if the accented vowels count is correct.
         */
        public function testAccentedVowelsCount() {
            $this->assertEquals(4, $this->stringManipulator->countVowels('ábácâxí'));
        }

        /**
         * Test if the empty string vowels count is correct.
         */
        public function testEmptyStringVowelsCount() {
            $this->assertEquals(0, $this->stringManipulator->countVowels(''));
        }

        /**
         * Test if the lowercase vowels count is correct.
         */
        public function testLowercaseVowelsCount() {
            $this->assertEquals(3, $this->stringManipulator->countVowels('batata'));
        }

        /**
         * Test if the uppercase vowels count is correct.
         */
        public function testUppercaseVowelsCount() {
            $this->assertEquals(3, $this->stringManipulator->countVowels('BATATA'));
        }

        /**
         * Test if the vowels count is correct.
         */
        public function testVowelsCount() {
            $this->assertEquals(4, $this->stringManipulator->countVowels('abacAxI'));
        }
    }
?>