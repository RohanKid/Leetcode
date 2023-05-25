/*
 * @lc app=leetcode id=387 lang=php
 *
 * [387] First Unique Character in a String
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $strArray = str_split($s);
        $hashMap = [];
        foreach ($strArray as $index => $str) {
            if (isset($hashMap[$str])) {
                $hashMap[$str][1] += 1;
            } else {
                $hashMap[$str][0] = $index;
                $hashMap[$str][1] = 1;
            }
        }

        foreach ($hashMap as $str) {
            if ($str[1] === 1) {
                return $str[0];
            }
        }
        return -1;
    }
}
// @lc code=end
