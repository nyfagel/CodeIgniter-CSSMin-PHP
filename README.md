# CodeIgniter CSSMin Spark

This is a CodeIgniter Spark that provides cssmin.php, a PHP implementation of YUI Compressor by Julien Lecomte.

## Usage

### As a spark

First, install the spark by running

    $ php tools/spark install cssmin

Then, in your code:

```
$this->load->spark('cssmin/1.0.0');

$minified = minifycss($source);
```

### Directly into your project
First, install it by copying ``libraries/cssmin.php`` into ``application/libraries`` and ``helpers/cssmin_helper.php`` into ``application/helpers``.

```
$this->load->helper('cssmin');

$minified = minifycss($source);
```

## References

* [github.com/tubalmartin/YUI-CSS-compressor-PHP-port](https://github.com/tubalmartin/YUI-CSS-compressor-PHP-port)

## License

Permission is hereby granted to use the PHP version under the same conditions as the YUICompressor.

* [BSD License](http://opensource.org/licenses/BSD-3-Clause)

## Copyright

* Copyright © 2013 Ny fågel <hej@nyfagel.se> ([CodeIgniter Spark](https://github.com/nyfagel/codeigniter-jsmin-php))
* Copyright © 2013 Tubal Martin ([YUI CSS compressor PHP port](https://github.com/tubalmartin/YUI-CSS-compressor-PHP-port))
* Copyright © 209 Yahoo! Inc. ([YUI Compressor](https://github.com/yui/yuicompressor/tree/yuicompressor-24))
