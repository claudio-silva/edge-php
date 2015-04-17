<?php
namespace Edge;
use function Edge\HTML\div;

class Panel extends Element
{

  protected $body;

  function render ()
  {
    return
      div (".panel $this->class",
        div ('.panel-body',
          $this->body
        )
      );
  }


}