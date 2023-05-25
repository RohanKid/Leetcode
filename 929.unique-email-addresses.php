/*
 * @lc app=leetcode id=929 lang=php
 *
 * [929] Unique Email Addresses
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $emailList = [];
        foreach ($emails as $email) {
            $emailArray = str_split($email);
            $key = array_search('@', $emailArray);
            $localNameArray = array_diff(array_slice($emailArray, 0, $key), ['.']);
            $localNameArray = array_values($localNameArray);
            $PlusKey = array_search('+', $localNameArray);
            if ($PlusKey !== false) {
                $localName = implode(array_slice($localNameArray, 0, $PlusKey));
            } else {
                $localName = implode($localNameArray);
            }
            $domainName = implode(array_slice($emailArray, $key + 1));
            $emailStr = $localName .'@'. $domainName;
            if (!in_array($emailStr, $emailList)) {
                $emailList[] = $emailStr;
            }

        }
        return count($emailList);
    }
}
// @lc code=end
