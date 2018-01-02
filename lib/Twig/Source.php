<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * 没有被编译过的原始模板源码类(可能是一个Context??????????????)
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Twig_Source
{
    private $code;
    private $name;
    private $path;

    /**
     * @param string $code The template source code  模板源码
     * @param string $name The template logical name
     * @param string $path The filesystem path of the template if any
     */
    public function __construct($code, $name, $path = '')
    {
        // $this->code 把原始的html模板全部加载进来，比如下面这样的
        //<!DOCTYPE html>
        //
        // <head>
        //     <title>My Webpage</title>
        // </head>
        // <body>
        // <ul id="navigation">
        //     {% for item in navigation %}
        //         <li><a href="{{ item.href }}">{{ item.caption }}</a></li>
        //     {% endfor %}
        // </ul>
        //
        // <h1>My Webpage</h1>
        // {{ a_variable }}
        // </body>
        // </html>
        $this->code = $code;
        $this->name = $name;
        $this->path = $path;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPath()
    {
        return $this->path;
    }
}

class_alias('Twig_Source', 'Twig\Source', false);
