/*
 * @lc app=leetcode id=103 lang=php
 *
 * [103] Binary Tree Zigzag Level Order Traversal
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
    function zigzagLevelOrder($root) {
        if ($root === null) {
            return [];
        }
        $queue = [$root];
        $result = [];
        $depth = 1;
        while (count($queue) > 0) {
            $len = count($queue);
            for ($i = 0; $i < $len; $i++) {
                $node = array_shift($queue);
                $result[$depth][] = $node->val;
                if($node->left) {
                    $queue[] = $node->left;
                }
                if($node->right) {
                    $queue[] = $node->right;
                }
            }
            if($depth % 2 === 0) {
                    $result[$depth] = array_reverse($result[$depth]);
            }
            $depth++;
        }
        return $result;
    }
}
// @lc code=end
