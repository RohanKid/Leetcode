/*
 * @lc app=leetcode id=2 lang=php
 *
 * [2] Add Two Numbers
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
     * @param ListNode $l1
     * @param ListNode $l2
     */
    function addTwoNumbers($l1, $l2, $carry = 0) {
        if (!$l1 && !$l2 && $carry === 0) {
            return null;
        }
        $sum = $l1->val + $l2->val + $carry;
        $carry = 0;
        if ($sum >= 10) {
            $carry = 1;
        }
        return new ListNode($sum % 10, $this->addTwoNumbers($l1->next, $l2->next, $carry));
    }
}
// @lc code=end
