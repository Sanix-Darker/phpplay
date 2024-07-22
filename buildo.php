<?php
// Ensure the extension is loaded
/* if (!extension_loaded('buildo')) { */
/*     die('The buildo extension is not loaded.'); */
/* } */

// Use the custom function provided by the extension
$result = zif_test1();
echo "Result of addition: $result\n"; // Output: Result of addition: 5
?>
