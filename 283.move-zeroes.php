/*
 * @lc app=leetcode id=283 lang=php
 *
 * [283] Move Zeroes
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $zeroArray = array_filter(
                    $nums,
                    function ($n) {
                    return $n === 0;
                    });
        $nums = array_merge(array_filter($nums), $zeroArray);
        return;
    }
}
// @lc code=end
