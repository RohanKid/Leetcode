/*
 * @lc app=leetcode id=347 lang=php
 *
 * [347] Top K Frequent Elements
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $hashMaps = [];
        foreach ($nums as $num) {
            if (isset($hashMaps[$num])) {
                $hashMaps[$num] += 1;
            }else {
                $hashMaps[$num] = 1;
            }
        }
        $heap = new SplMaxHeap();
        foreach ($hashMaps as $hashMap => $count) {
            $heap->insert([$count, $hashMap]);
        }
        $result = [];
        for($i = 0; $i < $k; $i++) {
            $result[] = $heap->extract()[1];
        }
        return $result;
    }
}
// @lc code=end
