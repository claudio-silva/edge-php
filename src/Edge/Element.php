<?php
namespace Edge;


class Element
{
  public $id;
  public $class    = '';
  public $children = [];

  function __construct (...$children)
  {
    list ($sel, $class, $id) = self::extractSelector ($children);
    if ($sel) {
      $this->class = $class;
      $this->id    = $id;
    }
    $this->_ (...$children);
  }

  /**
   * Sets the element's unique identifier.
   * <p>The value must be unique amongst all the IDs in the same document and it must contain at least one
   * character and it must not contain any space characters. There are no other restrictions on what form an ID can
   * take; in particular, IDs can consist of just digits, start with a digit, start with an underscore, consist of just
   * punctuation, etc.
   * @param string $v
   * @return $this
   */
  function id ($v)
  {
    $this->id = $v;
    return $this;
  }

  /**
   * Append elements to the component's children list.
   * <p>This is chainable.
   * @param array $children
   * @return $this
   */
  function _ (...$children)
  {
    if ($children)
      $this->children = array_merge ($this->children, $children);
    return $this;
  }

  /**
   * Implements dynamic setters for the element's properties.
   * <p>These are chainable.
   * @param string $name
   * @param array  $args
   * @return $this
   */
  function __call ($name, $args)
  {
    if ($name == 'class')
      $this->_class ($args[0]);
    else {
      if (property_exists ($this, $name))
        $this->$name = $args ? (count ($args) > 1 ? $args : $args[0]) : true;
      else throw new \InvalidArgumentException ("Can't set unknown attribute '$name' on a '" . get_class ($this) .
                                                "' element.");
    }
    return $this;
  }
  /**
   * Returns the textual representation of the component as HTML markup.
   * <p>Override on subclasses to implement their rendering algorithms.
   * @return string
   */
  function render ()
  {
    return render (...$this->children);
  }

  /**
   * Adds on or more class names to the element's class list.
   * @param string $class
   */
  function addClass ($class)
  {
    $this->class = enum (' ', $this->class, $class);
  }

  /**
   * Applies to the component the mixins given as arguments.
   * @param Mixin ...$mixins
   * @return $this
   */
  function with (...$mixins)
  {
    /** @var Mixin $mixin */
    foreach ($mixins as $mixin)
      $mixin->applyTo ($this, function &($prop) { return $this->$prop; })->run ();
    return $this;
  }


  /**
   * This is called when invoking $instance->class().
   * <p>This is chainable.
   * @param string|array $v
   * @return $this
   */
  protected function _class ($v)
  {
    if (is_array ($v)) {
      $c = [];
      foreach ($v as $k => $b)
        if ($b) $c[] = $k;
      $v = implode (' ', $c);
    }
    $this->class = $v;
    return $this;
  }

  /**
   * Checks whether the first item in the given array is a CSS selector and, if it is,
   * removes it from the list and returns the selector split into its constituent parts.
   * @param array $args
   * @return string[] Array with [full selector, CSS classes, id].
   *                  <p>Each item may be an empty string when it's not applicable.
   */
  public static function extractSelector (array &$args)
  {
    $o = ['', '', ''];
    if ($args) {
      $sel = $args[0];
      if (is_string ($sel)) {
        if ($sel[0] == '.')
          $sel = substr ($sel, 1);
        else if ($sel[0] != '#')
          return $o;
        $id    = '';
        $class = preg_replace_callback ('/ ?#(\S+) ?/', function ($m) use (&$id) {
          $id = $m[1];
          return '';
        }, $sel);
        return [array_shift ($args), $class, $id];
      }
    }
    return $o;
  }

}