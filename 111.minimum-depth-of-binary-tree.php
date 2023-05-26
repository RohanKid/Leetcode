/*
 * @lc app=leetcode id=111 lang=php
 *
 * [111] Minimum Depth of Binary Tree
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
    function minDepth($root) {
        if ($root === null) {
            return 0;
        }elseif($root->right === null && $root->left === null) {
            return 1;
        } elseif ($root->right === null) {
            return 1 + $this->minDepth($root->left);
        } elseif ($root->left === null) {
            return 1 + $this->minDepth($root->right);
        }
        return 1+min($this->minDepth($root->left), $this->minDepth($root->right));
    }
}
// @lc code=end
