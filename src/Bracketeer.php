<?php

namespace Kargin;

class Bracketeer
{
    /**
     * Checks if given string with brackets is balanced
     * @param $s
     * @return bool
     */
    public function isBalanced($s) {
        $balance = 0;
        $allowedChars = [
            "(",
            ")",
            " ",
            "\n",
            "\r",
            "\t",
        ];
        $length = strlen($s);

        for ($i=0;  $i < $length; $i++) {
            $ch = substr($s, $i, 1);

            if (!in_array($ch, $allowedChars)) {
                throw new \InvalidArgumentException(sprintf('Input string contains forbidden symbol %s.
                Allowed chars are: "(", ")", " ", "\n", "\t", "\r\".', $ch));
            }

            switch ($ch) {
                case '(':
                    $balance++;
                    break;
                case ')':
                    $balance--;
                    break;
                default:
                    continue;
            }

            if ($balance < 0) {
                return false;
            }
        }

        return ($balance == 0);
    }
}
