<?php

/*
 * Generated from Hello.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see HelloParser}.
 */
interface HelloVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see HelloParser::r()}.
	 *
	 * @param Context\RContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitR(Context\RContext $context);
}