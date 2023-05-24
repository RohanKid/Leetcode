/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];
        $count = count($nums);
        for($i=0;$i<$count;$i++){
                $secondIndex = $target-$nums[$i];
                if(isset($hashMap[$secondIndex])){
                    return array($hashMap[$secondIndex],$i);
                }else{
                    $hashMap[$nums[$i]]=$i;
                }
        }
        return[];
    }
}
// @lc code=end
