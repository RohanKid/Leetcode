/*
 * @lc app=leetcode id=589 lang=php
 *
 * [589] N-ary Tree Preorder Traversal
 */

// @lc code=start
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    private $result = [];
    function preorder($root) {
        $this->result[] = $root->val;
        if ($root->children !== null) {
            foreach ($root->children as $child){
                $this->preorder($child);
            }
        }
        return $this->result;
    }
}
// @lc code=end
