<?php

// Load the shared library
$ffi = FFI::cdef(
    "void zif_test1();",
    "/usr/lib/php/20230831/buildo.so"
);

// Call the Add function from the Go library
$result = $ffi->zif_test1();
echo "The result is: " . $result . "\n";
