/*
 * @lc app=leetcode id=49 lang=php
 *
 * [49] Group Anagrams
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];
        $hashMap = [];
        foreach ($strs as $str) {
            $strarray = str_split($str);
            sort($strarray);
            $strkey = implode($strarray);
            if (in_array($strArray, $hashMap)) {
                $result[$strkey][] = $str;
            } else {
                $hashMap[] = $strArray;
                $result[$strkey][] = $str;
            }
        }
        return $result;
    }
}
// @lc code=end
