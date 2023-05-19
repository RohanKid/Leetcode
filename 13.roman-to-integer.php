/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $RomanNumeral = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $Roman = str_split($s);
        $integer = 0;

        for ($i = 0; $i < count($Roman); $i++) {
                if (($RomanNumeral[$Roman[$i + 1]] > $RomanNumeral[$Roman[$i]]) && isset($Roman[$i + 1])) {
                    $integer -= $RomanNumeral[$Roman[$i]];
                } else {
                    $integer += $RomanNumeral[$Roman[$i]];
                }
        }
        return $integer;
    }
}
// @lc code=end
