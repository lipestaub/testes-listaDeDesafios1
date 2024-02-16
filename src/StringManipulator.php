<?php
    class StringManipulator {
        /**
         * Capitalizes a string.
         *
         * @param string $string The string to be capitalized.
         * @return string
         */
        public function capitalizeString(string $string): string {
            return $string !== '' ? ucfirst($string) : '';
        }

        /**
         * Concatenates two strings.
         *
         * @param string $firstString The first string to be concatenated.
         * @param string $secondString The second string to be concatenated.
         * @return string
         */
        public function concatenateStrings(string $firstString, string $secondString): string {
            return $firstString . $secondString;
        }

        /**
         * Count the vowels of a strings.
         *
         * @param string $string The string to count vowels of.
         * @return int
         */
        public function countVowels(string $string): int {
            $vowelsCount = 0;

            foreach (preg_split('//u', $string) as $character) {
                if (preg_match('/[aeiouà-úAEIOUÀ-Ú]/u', $character)) {
                    $vowelsCount++;
                }
            }

            return $vowelsCount;
        }
    }
?>