/*
 * @lc app=leetcode id=62 lang=php
 *
 * [62] Unique Paths
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    private $memo = [1];
    function uniquePaths($m, $n) {
        $result = $this->factorial($m + $n - 2);
        $result /= $this->memo[$m - 1];
        $result /= $this->memo[$n - 1];
        return $result;
    }
    function factorial($x) {
        if ($x === 1) {
            $this->memo[$x] = 1;
            return $this->memo[$x];
        }elseif (isset($this->memo[$x])) {
            return $this->memo[$x];
        } else {
            $this->memo[$x] = $x*$this->factorial($x - 1);
            return $this->memo[$x];
        }
    }
}
// @lc code=end
