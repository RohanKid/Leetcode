/*
 * @lc app=leetcode id=695 lang=php
 *
 * [695] Max Area of Island
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxAreaOfIsland($grid) {
        $IslandSizeList = [0];
        for ($i = 0; $i < count($grid); $i++) {
            for ($j = 0; $j < count($grid[0]); $j++) {
                if ($grid[$i][$j] === 1) {
                    $IslandSize = 0;
                    $this->checkIslandSize($grid, $i, $j, $IslandSize);
                    $IslandSizeList[] = $IslandSize;
                }
            }
        }
        return max($IslandSizeList);
    }

    function checkIslandSize(&$grid, $i, $j, &$IslandSize) {
        if($grid[$i][$j] === 0 || $grid[$i][$j] === 2 || !isset($grid[$i][$j])) {
            return;
        }
        $grid[$i][$j] = 2;
        $IslandSize += 1;
        $this->checkIslandSize($grid, $i-1, $j, $IslandSize);
        $this->checkIslandSize($grid, $i, $j-1, $IslandSize);
        $this->checkIslandSize($grid, $i+1, $j, $IslandSize);
        $this->checkIslandSize($grid, $i, $j+1, $IslandSize);

    }
}
// @lc code=end
