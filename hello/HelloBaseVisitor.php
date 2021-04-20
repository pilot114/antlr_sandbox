<?php

/*
 * Generated from Hello.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\AbstractParseTreeVisitor;

/**
 * This class provides an empty implementation of {@see HelloVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class HelloBaseVisitor extends AbstractParseTreeVisitor implements HelloVisitor
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitR(Context\RContext $context)
	{
	    return $this->visitChildren($context);
	}
}