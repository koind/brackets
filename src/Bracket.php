<?php

namespace App;

use InvalidArgumentException;

class Bracket
{
    /**
     * Checks the string.
     *
     * @param string $string
     * @throws InvalidArgumentException
     * @return bool
     */
    public function checkString(string $string)
    {
        $this->checkForInvalidCharacters($string);
    }

    /**
     * Checks for invalid characters in the string.
     *
     * @param string $string
     * @throws InvalidArgumentException
     */
    protected function checkForInvalidCharacters(string $string)
    {
        if (preg_match('#[^ ()\t\r\n]#i', $string) || empty($string)) {
            throw new InvalidArgumentException("The string contains invalid characters!");
        }
    }
}