/*
 * @lc app=leetcode id=349 lang=php
 *
 * [349] Intersection of Two Arrays
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $hashMap1 = [];
        $hashMap2 = [];
        foreach ($nums1 as $num1) {
            if (isset($hashMap1[$num1])) {
                continue;
            } else {
                $hashMap1[$num1] = $num1;
            }
        }
        foreach ($nums2 as $num2) {
            if (isset($hashMap2[$num2])) {
                continue;
            } elseif (isset($hashMap1[$num2])) {
                $hashMap2[$num2] = $num2;
            }
        }
        return $hashMap2;
    }
}
// @lc code=end
