/*
 * @lc app=leetcode id=82 lang=php
 *
 * [82] Remove Duplicates from Sorted List II
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $node = $head;
        $hashMap = [];
        while ($node !== null ) {
            if (isset($hashMap[$node->val])) {
                $hashMap[$node->val] += 1;
            } else {
                $hashMap[$node->val] = 1;
            }
            $node = $node->next;
        }
        $prev = $head;
        $curr = $head->next;
        while ($curr !== null ) {
            if ($hashMap[$curr->val] !== 1) {
                $prev->next = $curr->next;
            }else {
                $prev = $curr;
            }
            $curr = $curr->next;
        }
        if($hashMap[$head->val] !== 1) {
            return $head->next;
        }
        return $head;

    }
}
// @lc code=end
