/*
 * @lc app=leetcode id=35 lang=php
 *
 * [35] Search Insert Position
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {

        $left = 0;
        $right = count($nums);

        while ($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            if  ($nums[$mid] === $target) {
                return $mid;
            } elseif ($target < $nums[$mid]) {
                $right = $mid;
                if ($left === $right) {
                    return $left;
                }
            } elseif ($target > $nums[$mid]) {
                $left = $mid + 1;
                if ($left === $right) {
                    return $left;
                }
            }
        }

    }
}
// @lc code=end
