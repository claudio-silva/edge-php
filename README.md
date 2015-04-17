# Edge-PHP

A cutting-edge PHP library for building user interfaces.

### Project status

Edge-PHP is a proof-of-concept prototype and it's currently **on hold**, not being developed further.  
It is also **alpha**-grade software. Not all intended functionality is implemented yet, but stable releases are fully functional and are usable.  
Nevertheless, use in production applications is not recommended at this stage.

### Installation

Use [Composer](https://getcomposer.org) to install Edge into your project:

```bash
composer install claudio-silva\edge
```

### What is Edge?

Edge-PHP is a **next-generation VDOM-based view engine and control layer** for developing **web applications** and **websites**.

It uses the newest features available on **PHP 5.6** to bring you an expressive syntax, clean and pragmatic design and a pleasurable and productive development experience.

##### Elevator Pitch

Do you enjoy programming in PHP, but are you still developing web applications the _"old fashioned way"_, based on a *click --> reload* cycle?

PHP is becoming ***hot*** again, so it's time to upgrade your development to latest, shining tech!

Unlike traditional web pages, an Edge-powered website or web application is almost as responsive as a desktop application, but all of its rendering and program logic is still performed on the server and programmed in PHP.

Using Edge, you'll no longer be forced to develop your applications with client-side architectures and client-side languages (like Javascript) in order to be able to achieve a sofisticated, interactive and responsive experience for the user.

##### A library, not a full framework

Edge supports you in developing the **V** and the **C** in the **MVC** architectural pattern. It is responsible for generating an application's user interface, and also updating it based on the user's interaction with the application.

Edge does not make assumptions about your **M**odel, so you're free to use any ORM or any model architecture you desire.

Edge **has no external dependencies**, so you can use it **standalone** or easily integrate it into **any PHP framework** of your choosing.

To make it easier for you to get started, Edge provides *out-of-the-box*, seamless integration with the popular **Laravel** framework.

## Edge Introduction and Features Highlight

#### A component-based view engine

Edge enables **R**apid **A**pplication **D**evelopment via the use of **components**, which are pre-built, **composable** building blocks that can be used for rapidly assembling, not only application UIs, but also application functionality.

This kind of modularity is possible because each component encapsulates its own **M**odel, **V**iew and **C**ontroller, so it is a completely independent unit, that can be configured differently each time and at each location where it is instantiated.

Every view element in Edge is a **component**, including all HTML tags.

Components are PHP objects. Their *class* type determines which properties they have and which capabilities they provide. They can have inherent behaviour and be manipulated and transformed in several ways.

When components are "rendered", they generate a textual representation of themselves that can be sent to the browser as HTML markup to be displayed to the user.

HTML components are called *elements*, and they render into a single HTML tag, with their properties corresponding directly to HTML attributes.

Other (non HTML) components have no direct correspondence to any single HTML tag, nor do their properties correspond with HTML attributes.

When rendered, components generate HTML elements. Those, in turn, can be rendered to generate the final HTML markup.

A view is assembled by combining components in a tree-like structure. Each component can have one or more child components.

> A component can also have multiple child sets / subtrees, which is a capability often used by advanced components.

#### Native Templating

Edge templates are written in **pure PHP code**, using a DSL-like syntax that is pleasing to the eyes, readable and easy to write and edit.

Component instances are created by PHP expressions that call functions having the same name as the component type (or HTML tag).

So, instead of writing:

```xml
<div class="row">
  <label>Name:</label>
  <input type="text" id="nameField" name="name">
  <button class="btn btn-default" type="submit">Save</button>
</div>
```

You write:

```php
div ('.row',
  label ('Name:'),
  input ('#nameField')->type ('text')->name ('name'),
  button ('.btn btn-default')->type ('submit')->_ ('Save')
);
```

>The arguments of a constructor function are the children of the component.  
The first argument can be (optionally) a combination os CSS class names and/or an ID unique identifier.  
CSS class names are marked with a leading `.`; element IDs are defined with a leading `#`.  
If the string doesn't start with `.` or `#`, it is considered to represent a child text element.

You can use PHP expressions, function calls and native language constructs **directly** in the template (as all of it is PHP code, anyway).

A short example, showing off some of Edge's capabilities:

```php
namespace Edge\HTML;
echo render (
  header (
    h1 ('Welcome ', $user),
    p ('Press ', b ('OK'), ' to continue')
  ),
  ul (
    // comment: repeating list items, with an active element
    map ($things, function ($thing) {
      return li (
        a ("Click to edit $thing->name's properties.")
      );
    })
  ),
  form ('#myFormId.container',
    div ('.col-md-3',
      button ('.btn btn-default', 'OK')
        ->type ('submit')
        ->disabled (false)
        ->onclick (function ($ev) { doSomething(); }
      )
    )
  )
);
```

As you can see, iteration can be achieved by a simple array mapping function (you can use `array_map` or the shorter `map` function).

Interactivity can be achieved via **server-side event handlers**. We'll talk about that further ahead.

##### Fine-grained behaviour composition via Mixins

Edge provides **mixins** as a way to apply and share common behaviours between component / element instances.

Example of using an `icon` mixin:

```php
echo render (
  button ('Cancel')
    ->with (
      icon ('icon-cancel'),
      otherMixin (...$args)
    )
)
```

##### 'Magically' configuring and transforming stuff using Transforms

**Mixins** can be applied manually to specific elements or they can be applied automatically via a set of predefined **rules**, which are defined on "**transform sheets"**.

Each **transform** rule defines a CSS/jQuery-like selector for pattern matching and a set of mixins to be attached to the matching VDOM elements.

For instance:

```php
namespace Edge\HTML;
Edge::pattern ('My custom rules',
[
  'input[type=number].age' => [
    min (1), max (99), coerceToInteger ()
  ],
  'select.withIcons option' => [
    prepend (i ('.icon icon-arrow'), '&nbsp;')
  ],
  '.custom-form input[disabled]' => [
    set ([
      'class' => 'dimmed',
      'tabindex' => -1,
      'style' => ['color' => 0x808080, 'font-style' => $disabledTextStyle]
    ])
  ],
  // You can also inline any kind of custom logic:
  'div.container' => [
    function ($target) {
      if (empty($target->children))
        $target->children = [p ('No items.')];
    }]
]);

```

In this example, whenever elements are created and placed on the page, those that match one or more rules get attached with the respective mixins, which will transform them in the preconfigured way.

#### Easy and Powerful Extensibility

Developing your own **components**, **mixins** and **transforms** for Edge is quite easy and simple.

* You can create basic components very fast,
* but it's also not that difficult to create sophisticated components and mixins that perform advanced operations, like:
    * manipulate VDOM subtrees, 
    * integrate javascript libraries/widgets, 
    * participate in the application's asset building/optimisation pipeline, or 
    * provide runtime interactivity via both encapsulated client-side Javascript and server-side PHP code.

#### Amazing Performance and Responsiveness

Templates are parsed and rendered ***very*** *fast*.

They can also be **cached** in a compact binary format for achieving even faster response times to web requests.

Edge can **reduce network bandwidth** and **improve the application's responsiveness** by either

1. using a **VDOM *diffing* algorithm** to compute the difference between two consecutive renderings of the same template (or even between two different templates) and send only the differences to the browser; or

2. redraw independent subsections of the VDOM tree that are known to have been changed and send the resulting markup to the browser.

Edge can update the application's interface either by using a full page reload and redraw, or by performing **partial updates via XHR or Websockets**.

#### Blurring the distinction between client/server code

Edge implements **virtual DOM events** that run on the server-side and mirror some of the browser's client-side events.

When events are triggered client-side, Edge transfers them to the server-side, where they travel trough the virtual DOM and trigger the execution of PHP event handler code attached to specific VDOM elements.

Edge also manages the **persistence of the state** of the application's UI components between HTTP requests.

This means your application can be designed as if it was running directly on the client, but with all the advantages server-side execution can provide, like improved security and privacy and immediate access to server-side resources.

No need to define REST routes or dealing with boring low-level details of the HTTP protocol (although you can still do it if you want to).

#### A V.I.P. development experience

Edge allows an IDE (like PHPStorm) to assist you, when you're developing your templates, by providing you with:

1. autocompletion of HTML tags and their attributes,
0. autocompletion of component/mixin names and their properties,
0. attribute/property type hints,
0. inline contextual documentation,
0. syntax highlighting,
0. code analysis,
0. error detection,
0. go-to definition,
0. refactoring,
0. auto-formatting.

Edge templates **have no compilation step**, so you can **preview your changes immediately** by refreshing your browser (either manually or using an automated *Live Reload* watcher).

## Documentation

#### Templates

Similarly to Facebook's React component-based UI view engine, Edge also generates a Virtual DOM representation of a template, which is a tree of VDOM nodes that match each HTML element and each component that is defined in the template.

Unlike React, Edge templates can only be rendered on the server, as PHP is only available on the server. Nevertheless, Edge has a few strategies that allow it to update the application's UI very fast in response to user interaction, so you can develop server-side-based interactive web applications that feel like they are running client-side.

Edge templates are written in pure PHP code, without any markup. As such, they can be used in two ways:

##### Inline templates

As Edge templates are standard PHP code, they can be embedded in any PHP function or class method anywhere on your project.  
A common pattern for developing Edge components consists of inlining templates in component classes (just like it's done on React).

##### Standalone templates

Templates can also be specified in dedicated template files that contain only templating-related code, like it is usually done when working with other templates engines.  
When templates  are run for the first time, they are parsed into a VDOM tree which is then saved in a compact binary serialised form into a cache file or shared memory buffer.  
Further template renderings will fetch the preprocessed version from the cache, therefore speeding up the rendering process.  
If the source template file is modified and subsequently requested, Edge will automatically re-parse and re-cache the updated version.

### More documentation

Sorry, it is not yet available.

### License

The MIT License (MIT)

Copyright (c) 2015 Cláudio Silva

See the accompanying [LICENSE](https://github.com/claudio-silva/edge-php/blob/master/LICENSE) file.
