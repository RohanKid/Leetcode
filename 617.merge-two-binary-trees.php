/*
 * @lc app=leetcode id=617 lang=php
 *
 * [617] Merge Two Binary Trees
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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return TreeNode
     */
    function mergeTrees($root1, $root2) {
        $mergeTree = new TreeNode();
        if($root1 === null && $root2 === null) {
            return null;
        } elseif($root1 === null) {
            return $root2;
        } elseif($root2 === null) {
            return $root1;
        }
        $mergeTree->val = $root1->val + $root2->val;
        $mergeTree->left = $this->mergeTrees($root1->left, $root2->left);
        $mergeTree->right = $this->mergeTrees($root1->right, $root2->right);
        return $mergeTree;
    }
}
// @lc code=end
