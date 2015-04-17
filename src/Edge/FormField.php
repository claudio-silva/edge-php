<?php
namespace Edge;
use Edge\HTML\Interfaces\HTMLElement;
use function Edge\HTML\div;
use function Edge\HTML\label;
use function Edge\HTML\span;

class FormField extends Element
{
  protected $label;
  protected $icon;

  function render ()
  {
    $c = $this->children;
    if (count ($c) != 1)
      throw new \RuntimeException("The 'form-field' component requires one child element.");
    /** @var HTMLElement $field */
    $field = $c[0];
    $type  = at ($field->attrs, 'type');
    if (isset($this->label) && $type == 'checkbox') {
      $label          = label ($field, " $this->label");
      $this->children = [];
    } else {
      $label = when ($this->label, label ($this->label));
      $field->addClass ('form-control');
    }
    return
      div (classList ('form-group', when ($this->icon, 'has-feedback'), $this->class),
        $label,
        $this->children,
        isset ($this->icon) ? span (".form-control-feedback $this->icon") : ''
      );
  }


}