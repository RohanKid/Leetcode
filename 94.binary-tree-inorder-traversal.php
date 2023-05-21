/*
 * @lc app=leetcode id=94 lang=php
 *
 * [94] Binary Tree Inorder Traversal
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
     * @return Integer[]
     */
    public $result = [];
    function inorderTraversal($root) {
        if ( $root->val === null ) {
            return $this->result;
        } else {
            $this->inorderTraversal($root->left);
        $this->result[] = $root->val;
        $this->inorderTraversal($root->right);
        }
        return $this->result;
    }
}
// @lc code=end
