/*
 * @lc app=leetcode id=98 lang=php
 *
 * [98] Validate Binary Search Tree
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
     * @return Boolean
     */
    function isValidBST($root, $min = PHP_INT_MIN, $max = PHP_INT_MAX) {
        if($root === null) {
            return true;
        }
        if ($root->val <= $min || $root->val >= $max) {
            return false;
        }
        return $this->isValidBST($root->left, $min, $root->val) &&
                $this->isValidBST($root->right, $root->val, $max);
    }
}
// @lc code=end
