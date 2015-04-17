<?php
namespace Edge;

abstract class Mixin
{
  /**
   * The mixin's target element.
   * @var Element
   */
  protected $target;
  /**
   * @var callable Allows friend access to all properties of the target element.
   */
  private $tunnel;

  /**
   * Runs the mixin.
   * @param Element  $target
   * @param callable $tunnel
   * @return $this
   */
  function applyTo (Element $target, callable $tunnel)
  {
    $this->target = $target;
    $this->tunnel = $tunnel;
    return $this;
  }

  /**
   * Runs the mixin.
   * <p>Implement in subclasses to provide the mixin's specific functionality.
   */
  abstract function run ();

  /**
   * Gives read and write friend access to the specified property of the target element.
   * @param string $prop The name of the desired property.
   * @return mixed The property value.
   */
  protected function & target ($prop)
  {
    $f = $this->tunnel;
    return $f($prop);
  }
}