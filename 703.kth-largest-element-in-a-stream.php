/*
 * @lc app=leetcode id=703 lang=php
 *
 * [703] Kth Largest Element in a Stream
 */

// @lc code=start
class KthLargest {
    /**
     * @param Integer $k
     * @param Integer[] $nums
     */
    public $heap;
    public $k;
    function __construct($k, $nums) {
        $this->k = $k;
        $this->heap = new SplMinHeap();
        foreach($nums as $num){
            $this->heap->insert($num);
        }
    }

    /**
     * @param Integer $val
     * @return Integer
     */
    function add($val) {
        $this->heap->insert($val);
        while($this->heap->count() > $this->k) {
            $this->heap->extract();
        }
        return $this->heap->top();
    }
}


/**
 * Your KthLargest object will be instantiated and called as such:
 * $obj = KthLargest($k, $nums);
 * $ret_1 = $obj->add($val);
 */
// @lc code=end
