/*
 * @lc app=leetcode id=102 lang=php
 *
 * [102] Binary Tree Level Order Traversal
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        if($root === null) {
            return [];
        }
        $queue = [$root];
        $depth = 1;
        $result = [];
        while (count($queue) > 0) {
            $len = count($queue);
            for ($i = 0; $i < $len; $i++) {
                $node = array_shift($queue);
                $result[$depth][] = $node->val;
                if ($node->left) {
                    $queue[] = $node->left;
                }
                if ($node->right) {
                    $queue[] = $node->right;
                }
            }
            $depth += 1;
        }
        return $result;
    }
}
// @lc code=end
