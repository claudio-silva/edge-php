<?php
use Edge\Edge;
use Edge\Element;

/**
 * Renders a VDOM (sub)tree into its textual markup representation.
 * @param Element|string ...$elements A set of peer elements.
 * @return string The generated markup.
 * @see Edge\Edge::render()
 */
function render (...$elements)
{
  return Edge::render (...$elements);
}

/**
 * Reads a value from the given array at the specified index/key.
 * <br><br>
 * Unlike the usual array access operator [], this function does not generate warnings when
 * the key is not present on the array; instead, it returns null or a default value.
 *
 * @param array         $array The target array.
 * @param number|string $key   The list index or map key.
 * @param mixed         $def   An optional default value.
 *
 * @return mixed
 */
function at (array $array = null, $key, $def = null)
{
  return is_array ($array) ? (isset ($array[$key]) ? $array[$key] : $def) : null;
}

/**
 * Builds an array from the supplied arguments.
 * <p>This is most useful when combined with PHP 5.6's splat operator.
 * <p>Ex:
 * <blockquote>arrayOf (1, ...$list, 2)</blockquote>
 * @param array ...$x
 * @return mixed
 */
function array_of (...$x) { return $x; }


/**
 * Similar to `array_map`.
 * @param array    $a
 * @param callable $fn
 * @return array|null null if the array argument is null.
 */
function map (array $a = null, callable $fn)
{
  return is_null ($a) ? null : array_map ($fn, $a);
}

/**
 * Returns `$a` when `$exp` is true, `$b` otherwise or `null` if `$b` is not specified.
 * <p><br><b>Warning:</b> unline the ternary ? operator, all arguments are always evaluated, regardless of the value of
 * `$exp`.
 * @param boolean $exp
 * @param mixed   $a
 * @param mixed   $b
 * @return mixed
 */
function when ($exp, $a, $b = null)
{
  return isset($exp) && $exp !== '' ? $a : $b;
}

/**
 * Builds a string with a list of the given items that are not empty, delimited by $delimiter.
 * @param string $delimiter
 * @param array  $args
 * @return string
 */
function enum ($delimiter, ...$args)
{
  return join ($delimiter, array_filter ($args, function ($e) { return isset($e) && $e !== ''; }));
}

/**
 * Builds a string with a list of the given items that are not empty, delimited by spaces and starting with a dot
 * if the list is not empty.
 * @param array ...$args
 * @return string
 */
function classList (...$args)
{
  $l = enum (' ', ...$args);
  return $l ? ".$l" : '';
}