/*
 * @lc app=leetcode id=53 lang=php
 *
 * [53] Maximum Subarray
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $s = $nums[0];
        $result = $nums[0];
        for($i = 1; $i < count($nums); $i++) {
            $s = max($s + $nums[$i], $nums[$i]);
            $result = max($s,$result);
        }
        return $result;
    }
}
// @lc code=end
