/*
 * @lc app=leetcode id=142 lang=php
 *
 * [142] Linked List Cycle II
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function detectCycle($head) {
        $fast = $head;
        $slow = $head;
        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
            break;
            }
        }
        if ($fast === null || $fast->next === null) {
            return;
        }

        $slow = $head;
        while ($slow !== $fast) {
            $slow = $slow->next;
            $fast = $fast->next;
        }
        return $fast;
    }
}
// @lc code=end
