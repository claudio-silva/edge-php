<?php
namespace Edge\HTML;
use Edge\Element;
use Edge\FormField;
use Edge\HTML\Interfaces as I;
use Edge\Mixin;
use Edge\Mixins\IconMixin;
use Edge\Panel;

/**
 * Creates a generic html element with the specified tag name.
 * @param string         $tag     The element's name.
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return HTMLElement
 */
function h ($tag, ...$args)
{
  return new HTMLElement ($tag, $args);
}

//----------------------------------------------------------------------------------------------------------------------
// All HTML elements, sorted by interface type
//----------------------------------------------------------------------------------------------------------------------

/**
 * Creates a new `a` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Hyperlink.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLAnchorElement The newly created element.
 */
function a (...$args)
{
  return new I\HTMLAnchorElement ('a', $args);
}

/**
 * Creates a new `area` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Hyperlink or dead area on an image map.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLAreaElement The newly created element.
 */
function area (...$args)
{
  return new I\HTMLAreaElement ('area', $args, true);
}

/**
 * Creates a new `audio` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Audio player.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLAudioElement The newly created element.
 */
function audio (...$args)
{
  return new I\HTMLAudioElement ('audio', $args);
}

/**
 * Creates a new `base` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Base URL and default target browsing context for hyperlinks and forms.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLBaseElement The newly created element.
 */
function base (...$args)
{
  return new I\HTMLBaseElement ('base', $args, true);
}

/**
 * Creates a new `br` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Line break, e.g. in poem or postal address.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLBRElement The newly created element.
 */
function br (...$args)
{
  return new I\HTMLBRElement ('br', $args, true);
}

/**
 * Creates a new `body` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Document body.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLBodyElement The newly created element.
 */
function body (...$args)
{
  return new I\HTMLBodyElement ('body', $args);
}

/**
 * Creates a new `button` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Button control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLButtonElement The newly created element.
 */
function button (...$args)
{
  return new I\HTMLButtonElement ('button', $args);
}

/**
 * Creates a new `canvas` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Scriptable bitmap canvas.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLCanvasElement The newly created element.
 */
function canvas (...$args)
{
  return new I\HTMLCanvasElement ('canvas', $args);
}

/**
 * Creates a new `data` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Machine-readable equivalent.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLDataElement The newly created element.
 */
function data (...$args)
{
  return new I\HTMLDataElement ('data', $args);
}

/**
 * Creates a new `datalist` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Container for options for combo box control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLDataListElement The newly created element.
 */
function datalist (...$args)
{
  return new I\HTMLDataListElement ('datalist', $args);
}

/**
 * Creates a new `div` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Generic flow container.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLDivElement The newly created element.
 */
function div (...$args)
{
  return new I\HTMLDivElement ('div', $args);
}

/**
 * Creates a new `dl` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Association list consisting of zero or more name-value groups.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLDListElement The newly created element.
 */
function dl (...$args)
{
  return new I\HTMLDListElement ('dl', $args);
}

/**
 * Creates a new `abbr` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Abbreviation.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function abbr (...$args)
{
  return new I\HTMLElement ('abbr', $args);
}

/**
 * Creates a new `address` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Contact information for a page or article element.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function address (...$args)
{
  return new I\HTMLElement ('address', $args);
}

/**
 * Creates a new `article` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Self-contained syndicatable or reusable composition.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function article (...$args)
{
  return new I\HTMLElement ('article', $args);
}

/**
 * Creates a new `aside` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Sidebar for tangentially related content.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function aside (...$args)
{
  return new I\HTMLElement ('aside', $args);
}

/**
 * Creates a new `b` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Bold (keywords).</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function b (...$args)
{
  return new I\HTMLElement ('b', $args);
}

/**
 * Creates a new `bdi` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Text directionality isolation.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function bdi (...$args)
{
  return new I\HTMLElement ('bdi', $args);
}

/**
 * Creates a new `bdo` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Text directionality formatting.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function bdo (...$args)
{
  return new I\HTMLElement ('bdo', $args);
}

/**
 * Creates a new `cite` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Title of a work.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function cite (...$args)
{
  return new I\HTMLElement ('cite', $args);
}

/**
 * Creates a new `code` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Computer code.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function code (...$args)
{
  return new I\HTMLElement ('code', $args);
}

/**
 * Creates a new `dd` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Content for corresponding dt element(s).</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function dd (...$args)
{
  return new I\HTMLElement ('dd', $args);
}

/**
 * Creates a new `dfn` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Defining instance.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function dfn (...$args)
{
  return new I\HTMLElement ('dfn', $args);
}

/**
 * Creates a new `dt` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Legend for corresponding dd element(s).</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function dt (...$args)
{
  return new I\HTMLElement ('dt', $args);
}

/**
 * Creates a new `em` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Stress emphasis.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function em (...$args)
{
  return new I\HTMLElement ('em', $args);
}

/**
 * Creates a new `figcaption` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Caption for figure.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function figcaption (...$args)
{
  return new I\HTMLElement ('figcaption', $args);
}

/**
 * Creates a new `figure` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Figure with optional caption.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function figure (...$args)
{
  return new I\HTMLElement ('figure', $args);
}

/**
 * Creates a new `footer` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Footer for a page or section.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function footer (...$args)
{
  return new I\HTMLElement ('footer', $args);
}

/**
 * Creates a new `header` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Introductory or navigational aids for a page or section.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function header (...$args)
{
  return new I\HTMLElement ('header', $args);
}

/**
 * Creates a new `i` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Italic (alternate voice).</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function i (...$args)
{
  return new I\HTMLElement ('i', $args);
}

/**
 * Creates a new `kbd` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>User input.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function kbd (...$args)
{
  return new I\HTMLElement ('kbd', $args);
}

/**
 * Creates a new `main` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Main content of a document.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function main (...$args)
{
  return new I\HTMLElement ('main', $args);
}

/**
 * Creates a new `mark` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Highlight.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function mark (...$args)
{
  return new I\HTMLElement ('mark', $args);
}

/**
 * Creates a new `nav` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section with navigational links.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function nav (...$args)
{
  return new I\HTMLElement ('nav', $args);
}

/**
 * Creates a new `noscript` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Fallback content for script.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function noscript (...$args)
{
  return new I\HTMLElement ('noscript', $args);
}

/**
 * Creates a new `rb` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Ruby base.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function rb (...$args)
{
  return new I\HTMLElement ('rb', $args);
}

/**
 * Creates a new `rp` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Parenthesis for ruby annotation text.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function rp (...$args)
{
  return new I\HTMLElement ('rp', $args);
}

/**
 * Creates a new `rt` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Ruby annotation text.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function rt (...$args)
{
  return new I\HTMLElement ('rt', $args);
}

/**
 * Creates a new `rtc` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Ruby annotation text container.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function rtc (...$args)
{
  return new I\HTMLElement ('rtc', $args);
}

/**
 * Creates a new `ruby` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Ruby annotation(s).</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function ruby (...$args)
{
  return new I\HTMLElement ('ruby', $args);
}

/**
 * Creates a new `s` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Inaccurate text.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function s (...$args)
{
  return new I\HTMLElement ('s', $args);
}

/**
 * Creates a new `samp` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Computer output.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function samp (...$args)
{
  return new I\HTMLElement ('samp', $args);
}

/**
 * Creates a new `section` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Generic document or application section.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function section (...$args)
{
  return new I\HTMLElement ('section', $args);
}

/**
 * Creates a new `small` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Side comment.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function small (...$args)
{
  return new I\HTMLElement ('small', $args);
}

/**
 * Creates a new `strong` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Importance.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function strong (...$args)
{
  return new I\HTMLElement ('strong', $args);
}

/**
 * Creates a new `sub` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Subscript.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function sub (...$args)
{
  return new I\HTMLElement ('sub', $args);
}

/**
 * Creates a new `sup` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Superscript.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function sup (...$args)
{
  return new I\HTMLElement ('sup', $args);
}

/**
 * Creates a new `u` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Underline (keywords).</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function u (...$args)
{
  return new I\HTMLElement ('u', $args);
}

/**
 * Creates a new `var` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Variable.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function var_ (...$args)
{
  return new I\HTMLElement ('var', $args);
}

/**
 * Creates a new `wbr` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Line breaking opportunity.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLElement The newly created element.
 */
function wbr (...$args)
{
  return new I\HTMLElement ('wbr', $args, true);
}

/**
 * Creates a new `embed` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Plugin.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLEmbedElement The newly created element.
 */
function embed (...$args)
{
  return new I\HTMLEmbedElement ('embed', $args, true);
}

/**
 * Creates a new `fieldset` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Group of form controls.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLFieldSetElement The newly created element.
 */
function fieldset (...$args)
{
  return new I\HTMLFieldSetElement ('fieldset', $args);
}

/**
 * Creates a new `form` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>User-submittable form.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLFormElement The newly created element.
 */
function form (...$args)
{
  return new I\HTMLFormElement ('form', $args);
}

/**
 * Creates a new `head` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Container for document metadata.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadElement The newly created element.
 */
function head (...$args)
{
  return new I\HTMLHeadElement ('head', $args);
}

/**
 * Creates a new `h1` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section heading.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadingElement The newly created element.
 */
function h1 (...$args)
{
  return new I\HTMLHeadingElement ('h1', $args);
}

/**
 * Creates a new `h2` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section heading.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadingElement The newly created element.
 */
function h2 (...$args)
{
  return new I\HTMLHeadingElement ('h2', $args);
}

/**
 * Creates a new `h3` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section heading.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadingElement The newly created element.
 */
function h3 (...$args)
{
  return new I\HTMLHeadingElement ('h3', $args);
}

/**
 * Creates a new `h4` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section heading.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadingElement The newly created element.
 */
function h4 (...$args)
{
  return new I\HTMLHeadingElement ('h4', $args);
}

/**
 * Creates a new `h5` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section heading.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadingElement The newly created element.
 */
function h5 (...$args)
{
  return new I\HTMLHeadingElement ('h5', $args);
}

/**
 * Creates a new `h6` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Section heading.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHeadingElement The newly created element.
 */
function h6 (...$args)
{
  return new I\HTMLHeadingElement ('h6', $args);
}

/**
 * Creates a new `hr` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Thematic break.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHRElement The newly created element.
 */
function hr (...$args)
{
  return new I\HTMLHRElement ('hr', $args, true);
}

/**
 * Creates a new `html` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Root element.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLHtmlElement The newly created element.
 */
function html (...$args)
{
  return new I\HTMLHtmlElement ('html', $args);
}

/**
 * Creates a new `iframe` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Nested browsing context.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLIFrameElement The newly created element.
 */
function iframe (...$args)
{
  return new I\HTMLIFrameElement ('iframe', $args);
}

/**
 * Creates a new `img` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Image.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLImageElement The newly created element.
 */
function img (...$args)
{
  return new I\HTMLImageElement ('img', $args, true);
}

/**
 * Creates a new `input` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Form control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLInputElement The newly created element.
 */
function input (...$args)
{
  return new I\HTMLInputElement ('input', $args, true);
}

/**
 * Creates a new `keygen` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Cryptographic key-pair generator form control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLKeygenElement The newly created element.
 */
function keygen (...$args)
{
  return new I\HTMLKeygenElement ('keygen', $args, true);
}

/**
 * Creates a new `label` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Caption for a form control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLLabelElement The newly created element.
 */
function label (...$args)
{
  return new I\HTMLLabelElement ('label', $args);
}

/**
 * Creates a new `legend` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Caption for fieldset.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLLegendElement The newly created element.
 */
function legend (...$args)
{
  return new I\HTMLLegendElement ('legend', $args);
}

/**
 * Creates a new `li` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>List item.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLLIElement The newly created element.
 */
function li (...$args)
{
  return new I\HTMLLIElement ('li', $args);
}

/**
 * Creates a new `link` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Link metadata.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLLinkElement The newly created element.
 */
function link (...$args)
{
  return new I\HTMLLinkElement ('link', $args, true);
}

/**
 * Creates a new `map` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Image map.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLMapElement The newly created element.
 */
function map (...$args)
{
  return new I\HTMLMapElement ('map', $args);
}

/**
 * Creates a new `meta` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Text metadata.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLMetaElement The newly created element.
 */
function meta (...$args)
{
  return new I\HTMLMetaElement ('meta', $args, true);
}

/**
 * Creates a new `meter` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Gauge.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLMeterElement The newly created element.
 */
function meter (...$args)
{
  return new I\HTMLMeterElement ('meter', $args);
}

/**
 * Creates a new `del` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>A removal from the document.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLModElement The newly created element.
 */
function del (...$args)
{
  return new I\HTMLModElement ('del', $args);
}

/**
 * Creates a new `ins` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>An addition to the document.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLModElement The newly created element.
 */
function ins (...$args)
{
  return new I\HTMLModElement ('ins', $args);
}

/**
 * Creates a new `object` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Image, nested browsing context, or plugin.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLObjectElement The newly created element.
 */
function object (...$args)
{
  return new I\HTMLObjectElement ('object', $args);
}

/**
 * Creates a new `ol` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Ordered list.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLOListElement The newly created element.
 */
function ol (...$args)
{
  return new I\HTMLOListElement ('ol', $args);
}

/**
 * Creates a new `optgroup` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Group of options in a list box.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLOptGroupElement The newly created element.
 */
function optgroup (...$args)
{
  return new I\HTMLOptGroupElement ('optgroup', $args);
}

/**
 * Creates a new `option` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Option in a list box or combo box control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLOptionElement The newly created element.
 */
function option (...$args)
{
  return new I\HTMLOptionElement ('option', $args);
}

/**
 * Creates a new `output` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Calculated output value.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLOutputElement The newly created element.
 */
function output (...$args)
{
  return new I\HTMLOutputElement ('output', $args);
}

/**
 * Creates a new `p` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Paragraph.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLParagraphElement The newly created element.
 */
function p (...$args)
{
  return new I\HTMLParagraphElement ('p', $args);
}

/**
 * Creates a new `param` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Parameter for object.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLParamElement The newly created element.
 */
function param (...$args)
{
  return new I\HTMLParamElement ('param', $args, true);
}

/**
 * Creates a new `pre` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Block of preformatted text.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLPreElement The newly created element.
 */
function pre (...$args)
{
  return new I\HTMLPreElement ('pre', $args);
}

/**
 * Creates a new `progress` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Progress bar.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLProgressElement The newly created element.
 */
function progress (...$args)
{
  return new I\HTMLProgressElement ('progress', $args);
}

/**
 * Creates a new `blockquote` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>A section quoted from another source.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLQuoteElement The newly created element.
 */
function blockquote (...$args)
{
  return new I\HTMLQuoteElement ('blockquote', $args);
}

/**
 * Creates a new `q` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Quotation.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLQuoteElement The newly created element.
 */
function q (...$args)
{
  return new I\HTMLQuoteElement ('q', $args);
}

/**
 * Creates a new `script` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Embedded script.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLScriptElement The newly created element.
 */
function script (...$args)
{
  return new I\HTMLScriptElement ('script', $args);
}

/**
 * Creates a new `select` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>List box control.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLSelectElement The newly created element.
 */
function select (...$args)
{
  return new I\HTMLSelectElement ('select', $args);
}

/**
 * Creates a new `source` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Media source for video or audio.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLSourceElement The newly created element.
 */
function source (...$args)
{
  return new I\HTMLSourceElement ('source', $args, true);
}

/**
 * Creates a new `span` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Generic phrasing container.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLSpanElement The newly created element.
 */
function span (...$args)
{
  return new I\HTMLSpanElement ('span', $args);
}

/**
 * Creates a new `style` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Embedded styling information.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLStyleElement The newly created element.
 */
function style (...$args)
{
  return new I\HTMLStyleElement ('style', $args);
}

/**
 * Creates a new `caption` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Table caption.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableCaptionElement The newly created element.
 */
function caption (...$args)
{
  return new I\HTMLTableCaptionElement ('caption', $args);
}

/**
 * Creates a new `col` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Table column.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableColElement The newly created element.
 */
function col (...$args)
{
  return new I\HTMLTableColElement ('col', $args, true);
}

/**
 * Creates a new `colgroup` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Group of columns in a table.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableColElement The newly created element.
 */
function colgroup (...$args)
{
  return new I\HTMLTableColElement ('colgroup', $args);
}

/**
 * Creates a new `td` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Table cell.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableDataCellElement The newly created element.
 */
function td (...$args)
{
  return new I\HTMLTableDataCellElement ('td', $args);
}

/**
 * Creates a new `table` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Table.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableElement The newly created element.
 */
function table (...$args)
{
  return new I\HTMLTableElement ('table', $args);
}

/**
 * Creates a new `th` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Table header cell.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableHeaderCellElement The newly created element.
 */
function th (...$args)
{
  return new I\HTMLTableHeaderCellElement ('th', $args);
}

/**
 * Creates a new `tr` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Table row.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableRowElement The newly created element.
 */
function tr (...$args)
{
  return new I\HTMLTableRowElement ('tr', $args);
}

/**
 * Creates a new `tbody` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Group of rows in a table.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableSectionElement The newly created element.
 */
function tbody (...$args)
{
  return new I\HTMLTableSectionElement ('tbody', $args);
}

/**
 * Creates a new `tfoot` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Group of footer rows in a table.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableSectionElement The newly created element.
 */
function tfoot (...$args)
{
  return new I\HTMLTableSectionElement ('tfoot', $args);
}

/**
 * Creates a new `thead` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Group of heading rows in a table.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTableSectionElement The newly created element.
 */
function thead (...$args)
{
  return new I\HTMLTableSectionElement ('thead', $args);
}

/**
 * Creates a new `template` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Embedded I\HTML template.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTemplateElement The newly created element.
 */
function template (...$args)
{
  return new I\HTMLTemplateElement ('template', $args);
}

/**
 * Creates a new `textarea` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Multiline text field.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTextAreaElement The newly created element.
 */
function textarea (...$args)
{
  return new I\HTMLTextAreaElement ('textarea', $args);
}

/**
 * Creates a new `time` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Machine-readable equivalent of date- or time-related data.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTimeElement The newly created element.
 */
function time (...$args)
{
  return new I\HTMLTimeElement ('time', $args);
}

/**
 * Creates a new `title` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Document/page title.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTitleElement The newly created element.
 */
function title (...$args)
{
  return new I\HTMLTitleElement ('title', $args);
}

/**
 * Creates a new `track` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Timed text track.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLTrackElement The newly created element.
 */
function track (...$args)
{
  return new I\HTMLTrackElement ('track', $args, true);
}

/**
 * Creates a new `ul` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Unordered list.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLUListElement The newly created element.
 */
function ul (...$args)
{
  return new I\HTMLUListElement ('ul', $args);
}

/**
 * Creates a new `video` HTML element.
 *
 * <p><sup>Element description:</sup>
 * <blockquote>Video player.</blockquote>
 *
 * @param string|Element ...$args Child elements, with an optional leading selector string.
 * @return I\HTMLVideoElement The newly created element.
 */
function video (...$args)
{
  return new I\HTMLVideoElement ('video', $args);
}

//----------------------------------------------------------------------------------------------------------------------
// Other non-void HTML elements
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------

function panel (...$args)
{
  return new Panel (...$args);
}

function row (...$args)
{
  return new I\HTMLElement ('div', array_of ('.row', ...$args));
}

function column (...$args)
{
  return new I\HTMLElement ('div', $args);
}

function form_field (...$args)
{
  return new FormField (...$args);
}

//function trans ($x) { return $x; }

//function old ($x) { return $x; }

function token ()
{
  return input ()->type ('hidden')->name ('_token')->value (\Session::getToken ());
}

//class Config
//{
//  public static function get ($x) { return $x; }
//}

/**
 * Inserts an icon into the target element.
 *
 * @param string $class One or more CSS classes to apply to the generated icon element.
 * @return IconMixin
 */
function icon ($class)
{
  return new IconMixin ($class);
}