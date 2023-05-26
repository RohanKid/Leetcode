/*
 * @lc app=leetcode id=104 lang=php
 *
 * [104] Maximum Depth of Binary Tree
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
     * @return Integer
     */
    function maxDepth($root) {
        $maxDepth = $this->PreOrderTree($root);
        return $maxDepth;

    }
    function PreOrderTree($root) {
        if ($root->val === null) {
            return 0;
        }
        return 1 + max($this->PreOrderTree($root->left), $this->PreOrderTree($root->right));
    }
}
// @lc code=end
