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
 * Interface implemented by extension classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_ExtensionInterface
{
    /**
     * 获取语法分析器
     * Returns the token parser instances to add to the existing list.
     *
     * @return Twig_TokenParserInterface[]
     */
    public function getTokenParsers();

    /**
     * 获取节点访问器
     * Returns the node visitor instances to add to the existing list.
     *
     * @return Twig_NodeVisitorInterface[]
     */
    public function getNodeVisitors();

    /**
     * 获取过滤器对象
     * Returns a list of filters to add to the existing list.
     *
     * @return Twig_Filter[]
     */
    public function getFilters();

    /**
     * 获取测试函数
     * Returns a list of tests to add to the existing list.
     *
     * @return Twig_Test[]
     */
    public function getTests();

    /**
     * 获取模板函数
     * Returns a list of functions to add to the existing list.
     *
     * @return Twig_Function[]
     */
    public function getFunctions();

    /**
     * 获取操作符
     * Returns a list of operators to add to the existing list.
     *
     * @return array<array> First array of unary operators, second array of binary operators
     */
    public function getOperators();
}

class_alias('Twig_ExtensionInterface', 'Twig\Extension\ExtensionInterface', false);
class_exists('Twig_Environment');
