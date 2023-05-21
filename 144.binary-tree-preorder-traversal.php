/*
 * @lc app=leetcode id=144 lang=php
 *
 * [144] Binary Tree Preorder Traversal
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
     private $result = [];
    function preorderTraversal($root) {
        if($root->val !== null) {
            $this->result[] = $root->val;
            $this->preorderTraversal($root->left);
            $this->preorderTraversal($root->right);
        }
        return $this->result;
    }
}
// @lc code=end
