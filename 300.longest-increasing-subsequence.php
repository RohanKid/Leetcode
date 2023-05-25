/*
 * @lc app=leetcode id=300 lang=php
 *
 * [300] Longest Increasing Subsequence
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums) {
        $result = 0;
        $dp =array_fill(0, count($nums), 1);
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($nums[$j] < $nums[$i]) {
                    $dp[$i] = max($dp[$i], $dp[$j] + 1);
                }
            }
            $result = max($result, $dp[$i]);
        }
        return $result;
    }
}
// @lc code=end
