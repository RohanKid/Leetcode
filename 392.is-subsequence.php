/*
 * @lc app=leetcode id=392 lang=php
 *
 * [392] Is Subsequence
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $pointer = 0;
        for ($i = 0; $i < strlen($t); $i++) {
            if ($t[$i] === $s[$pointer]) {
                $pointer++;
            }
        }
        if ($pointer === strlen($s)) {
            return true;
        }
        return false;
    }
}
// @lc code=end
