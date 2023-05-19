/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $Number = str_split(strval($x));
        $reversNumber = array_reverse($Number);
        if ($Number === $reversNumber) {
            return true;
        } else {
            return false;
        }

    }
}
// @lc code=end
