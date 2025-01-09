# PHP Foreach Loop Pass-by-Reference Bug
This repository demonstrates a common, yet subtle, bug in PHP related to the pass-by-reference behavior of foreach loops.  When modifying array elements within a foreach loop using pass-by-reference (&), changes are reflected in the original array, which can be unexpected if not properly accounted for.

The `bug.php` file contains code that exhibits this problem, while `bugSolution.php` provides a corrected version.

**Problem:**
The `processData` function intends to convert strings to lowercase. However, due to the use of pass-by-reference in the foreach loop, the original `$myData` array is modified directly.

**Solution:**
The corrected version creates a copy of the array before processing, ensuring the original data remains unchanged.