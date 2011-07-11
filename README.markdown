phpRGBA
=======

PHP function for allowing rgba() css to work in older browsers.

Basic Implementation
--------------------

background: url('../img/rgba.php?r=255&g=255&b=255&a=10');

This makes a white background with a slight transparency.

Using [Paul Irish's HTML IE if statements](http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/), we can check if we need to use the phpRGBA rather than CSS' rgba().

.element{ background: rgba(255,255,255,0.9); }
.ie .element{ background: url('rgba.php?r=255&g=255&b=255&a=10'); }


Neil Sweeney
- [WolfieZero.com](http://wolfiezero.com/)