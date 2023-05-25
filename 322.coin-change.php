/*
 * @lc app=leetcode id=322 lang=php
 *
 * [322] Coin Change
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    function coinChange($coins, $amount) {
        $coinCount = array_fill(0, $amount+1, INF);
        $coinCount[0] = 0;
        for ($i = 0; $i <= count($coins); $i++) {
            for ($j = 0; $j <=$amount; $j++) {
                if($j >= $coins[$i]) {
                    $coinCount[$j] = min($coinCount[$j], $coinCount[$j-$coins[$i]]+1);
                }
            }
        }
        if ($coinCount[$amount] === INF) {
            return -1;
        }
        return $coinCount[$amount];
    }
}
// @lc code=end
