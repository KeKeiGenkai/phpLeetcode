<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $result = [];
        if ($root === null) {
            return $result;
        }
        $queue = [$root];

        while (!empty($queue)) {
            $levelSize = count($queue);
            $currentLevel = [];

            for ($i = 0; $i < $levelSize; $i++) {
                $currentNode = array_shift($queue);
                $currentLevel[] = $currentNode->val;

                if ($currentNode->left !== null) {
                    $queue[] = $currentNode->left;
                }
                if ($currentNode->right !== null) {
                    $queue[] = $currentNode->right;
                }
            }

            $result[] = $currentLevel;
        }

        return $result;
    }
}
