# Unexpected Behavior of unset() within foreach Loop on Array in PHP

This repository demonstrates an uncommon error in PHP related to the unexpected behavior of the `unset()` function within a `foreach` loop when iterating over an array.  The issue arises because modifying the array's structure during iteration can cause elements to be skipped.

The `bug.php` file shows the problematic code using `unset()`, while `bugSolution.php` presents a more robust solution using `array_filter()`, which avoids this issue by creating a new array rather than directly modifying the original.

## Problem Description

When using `unset()` to remove an element from an array inside a `foreach` loop, the loop's internal pointer might skip elements due to the re-indexing of the array. This can result in incorrect results if not handled carefully. This behavior can be difficult for less experienced developers to anticipate and debug.

## Solution

The recommended approach is to avoid modifying arrays while iterating over them using `foreach`. Instead, utilize functions like `array_filter()` to create a new array containing only the desired elements, ensuring no unexpected skips.