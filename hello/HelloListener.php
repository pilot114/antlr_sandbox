<?php

/*
 * Generated from Hello.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see HelloParser}.
 */
interface HelloListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see HelloParser::r()}.
	 * @param $context The parse tree.
	 */
	public function enterR(Context\RContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see HelloParser::r()}.
	 * @param $context The parse tree.
	 */
	public function exitR(Context\RContext $context) : void;
}