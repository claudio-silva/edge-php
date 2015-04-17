<?php
namespace Edge;

class Edge {

    /**
     * Renders a VDOM (sub)tree into its textual markup representation.
     * @param Element|string ...$elements A set of peer elements.
     * @return string The generated markup.
     */
    public static function render (...$elements)
    {
        $o = [];
        foreach ($elements as $i => $e) {
            if ($e instanceof Element)
                $o[] = render ($e->render ());
            else if (is_string ($e))
                $o[] = $e;
            else if (is_array ($e))
                $o[] = render (...$e);
            else if (!is_null ($e))
                throw new \RuntimeException ("Invalid argument type " . gettype ($e));
        }
        return implode ('', $o);
    }

}