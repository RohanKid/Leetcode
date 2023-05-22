/*
 * @lc app=leetcode id=141 lang=php
 *
 * [141] Linked List Cycle
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
     * @return Boolean
     */
    function hasCycle($head) {
        $fast = $head;
        $slow = $head;
        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                return true;
            }
        }
        if ($fast === null || $fast->next === null) {
            return false;
        }
    }
}
// @lc code=end
