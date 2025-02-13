The solution is to use strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks both the value and the type of the operands.  This prevents the type juggling that caused the original bug.  Below is an example of the corrected code:
```php
<?php
function checkValue($value) {
  return $value === 1 || $value === '1';
}
// Test cases
echo checkValue(1) . "\n"; // Output: 1
echo checkValue('1') . "\n"; // Output: 1
echo checkValue(true) . "\n"; // Output: 
echo checkValue('abc') . "\n"; // Output: 
?>
```
Using strict comparison ensures that the function only returns `true` when the input is strictly equal to 1 (integer) or '1' (string). 