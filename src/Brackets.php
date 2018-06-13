<?php

namespace Koind;

use InvalidArgumentException;

/**
 * Class Brackets
 *
 * @package Koind
 */
class Brackets
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

        return $this->isValidString($string);
    }

    /**
     * Checks for invalid characters in the string.
     * Allowable characters: " , (), \t, \r, \n"
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

    /**
     * Checks whether the string is valid.
     * That is, all open parentheses are correctly opened and closed.
     *
     * @param string $string
     * @return bool
     */
    protected function isValidString(string $string): bool
    {
        $x = 0;
        for ($i = 0; $i < strlen($string); $i++)
        {
            if ($string[$i] === "(") {
                $x++;
            } elseif ($string[$i] === ")") {
                $x--;
            }

            if ($x < 0) {
                return false;
            }
        }

        return $x === 0;
    }
}