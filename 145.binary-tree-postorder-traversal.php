/*
 * @lc app=leetcode id=145 lang=php
 *
 * [145] Binary Tree Postorder Traversal
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
    function postorderTraversal($root) {
        if ($root->val !== null) {
            $this->postorderTraversal($root->left);
            $this->postorderTraversal($root->right);
            $this->result[] = $root->val;
        }
        return $this->result;
    }
}
// @lc code=end
