<?php
namespace Edge\Mixins;
use Edge\Mixin;
use function Edge\HTML\i;

/**
 * Inserts an icon into the target element.
 */
class IconMixin extends Mixin
{
  private $class;

  /**
   * IconMixin constructor.
   * @param string $class A list of CSS classes for the icon element that will be inserted into the target element.
   */
  public function __construct ($class)
  {
    $this->class = $class;
  }

  function run ()
  {
    array_push ($this->target->children, ' &nbsp;', i (".$this->class"));
  }
}

