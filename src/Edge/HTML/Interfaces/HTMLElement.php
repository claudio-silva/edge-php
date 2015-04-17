<?php
namespace Edge\HTML\Interfaces;
use Edge\Element;
use function Edge\render;

/**
 * A generic foundation for all HTML elements.
 *
 * @method HTMLElement accesskey (string $v)
 * @method HTMLElement class ($v) A set of space-separated CSS classes or an array of string => boolean.
 * @method HTMLElement contenteditable (boolean $v)
 * @method HTMLElement dir (string $v)
 * @method HTMLElement hidden (boolean $v)
 * @method HTMLElement lang (string $v)
 * @method HTMLElement spellcheck (boolean $v)
 * @method HTMLElement style (string $v)
 * @method HTMLElement tabindex (int $v)
 * @method HTMLElement title (string $v)
 * @method HTMLElement translate (boolean $v)
 */
class HTMLElement extends Element
{
  /** @var array */
  public $attrs = [];
  /** @var string */
  protected $tag;
  /** @var boolean */
  protected $isVoid;

  function __construct ($tag, $args, $isVoid = false)
  {
//    echo "Create &lt;$tag&gt;<br>\n";
//    var_dump($tag, $args);
    $this->tag    = $tag;
    $this->isVoid = $isVoid;
    parent::__construct (...$args);
  }

  function _ (...$children)
  {
    if ($children) {
      if ($this->isVoid)
        throw new \InvalidArgumentException("A '$this->tag' element cannot have content.");
      $this->children = array_merge ($this->children, $children);
    }
    return $this;
  }

  /**
   * Implements dynamic setters for the element's HTML attributes.
   * <p>Attributes are stored in the `attrs` property.
   * @param string $name
   * @param array  $args
   * @return $this
   */
  function __call ($name, $args)
  {
    if ($name == 'class')
      $this->_class ($args[0]);
    else $this->attrs[$name] = $args ? $args[0] : true;
    return $this;
  }

  /**
   * Returns the textual representation of the component as HTML markup.
   * @return string
   */
  function render ()
  {
//    echo "RENDER &lt;$this->tag class='$this->class'&gt;.\n";
    $o = [];
    if (!empty($this->id))
      $o[] = " id=\"$this->id\"";
    if (!empty($this->class))
      $o[] = " class=\"$this->class\"";
    //print_r($this->attrs);
    foreach ($this->attrs as $k => $v) {
      switch ($t = gettype ($v)) {
        case 'string':
          $v   = htmlspecialchars ($v, ENT_COMPAT | ENT_HTML5);
          $o[] = " $k=\"$v\"";
          break;
        case 'boolean':
          if ($v)
            $o[] = " $k";
          break;
        case 'integer':
        case 'double':
          $o[] = " $k=\"$v\"";
          break;
        case 'NULL':
          break;
        default:
          throw new \InvalidArgumentException ("Unsupported type '$t' for attribute '$k' on tag '$this->tag'.");
      }
    }
    $content = render (...$this->children);
    $attrs   = join ('', $o);
    $html    = $this->isVoid ? "<$this->tag$attrs>" : "<$this->tag$attrs>$content</$this->tag>";
    return $html;
  }

}
