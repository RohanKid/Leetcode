/*
 * @lc app=leetcode id=108 lang=php
 *
 * [108] Convert Sorted Array to Binary Search Tree
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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        if ($nums === []) {
            return;
        }
        $n = count($nums);
        $mid = (int)($n/2);
        $BinaryTree = new TreeNode($nums[$mid]);
        $BinaryTree->right = $this->sortedArrayToBST(array_slice($nums, $mid + 1));
        $BinaryTree->left = $this->sortedArrayToBST(array_slice($nums, 0, $mid));
        return $BinaryTree;
    }
}
// @lc code=end
