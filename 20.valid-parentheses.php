/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $s = str_split($s);
        $brackets = [];
        foreach ($s as $bracket) {
            if ($bracket === "(" || $bracket === "[" || $bracket === "{") {
                $brackets[] = $bracket;
            } elseif ($bracket === ")" && $brackets[array_key_last($brackets)] === "(" ) {
                array_pop($brackets);
            } elseif ($bracket === "]" && $brackets[array_key_last($brackets)] === "[" ) {
                array_pop($brackets);
            } elseif ($bracket === "}" && $brackets[array_key_last($brackets)] === "{" ) {
                array_pop($brackets);
            } else {
                return false;
            }
        }
        if ($brackets === []) {
            return true;
        }
        return false;
    }
}
// @lc code=end
