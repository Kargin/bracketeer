<?php

/**
 * Created by PhpStorm.
 * User: zeolite
 * Date: 01.01.18
 * Time: 20:48
 */
namespace Kargin;

class Bracketeer
{
    public function isBalanced($s) {
        $bal = 0;
        $allowed_chars = array("(", ")", " ", "\n", "\r", "\t");
        for ($i=0; $i < strlen($s); $i++) {
            $ch = substr($s, $i, 1);
            if (in_array($ch, $allowed_chars)) {
                switch ($ch) {
                    case '(':
                        $bal++;
                        break;
                    case ')':
                        $bal--;
                        break;
                    default:
                        continue;
                }
                if ($bal < 0) return false;
            } else {
                throw new \InvalidArgumentException('Input string contains forbidden symbol "' . $ch . '". Allowed chars are: "(", ")", " ", \n", "\t", "\r"');
            }
        }
        return ($bal == 0);
    }
}
