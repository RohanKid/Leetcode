/*
 * @lc app=leetcode id=200 lang=php
 *
 * [200] Number of Islands
 */

// @lc code=start
class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        $countIsland = 0;
        for ($i = 0; $i < count($grid); $i++) {
            for($j = 0; $j < count($grid[0]); $j++) {
                if ($grid[$i][$j] === "1") {
                $this->checkIsland($grid, $i, $j);
                $countIsland += 1;
                }
            }
        }
        return $countIsland;
    }

    function checkIsland(&$grid, $i, $j) {
        if ($grid[$i][$j] === "0" || !isset($grid[$i][$j]) || $grid[$i][$j] === "2") {
            return;
        }
            $grid[$i][$j] = "2";

            $this->checkIsland($grid, $i, $j-1);
            $this->checkIsland($grid, $i-1, $j);
            $this->checkIsland($grid, $i, $j+1);
            $this->checkIsland($grid, $i+1, $j);
    }
}
// @lc code=end
