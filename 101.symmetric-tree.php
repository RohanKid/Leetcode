/*
 * @lc app=leetcode id=101 lang=php
 *
 * [101] Symmetric Tree
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

    function isSymmetric($root) {
        return $this->controversial($root->left,$root->right);
    }

    function controversial($left,$right) {
        if (!$left && !$right) {
            return true;
        } elseif ($left->val !== $right->val) {
            return false;
        }
        return $this->controversial($left->left,$right->right) && $this->controversial($left->right,$right->left);
    }

    }

// @lc code=end
