/*
 * @lc app=leetcode id=121 lang=php
 *
 * [121] Best Time to Buy and Sell Stock
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $min = $prices[0];
        $maxProfit = 0;
        for ($i = 1; $i < count($prices); $i++) {
            $min = min($min, $prices[$i]);
            $maxProfit = max($maxProfit, $prices[$i] - $min);
        }
        return $maxProfit;
    }
}
// @lc code=end
