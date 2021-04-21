<?php

/*
 * Generated from JSON.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see JSONParser}.
 */
interface JSONVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see JSONParser::json()}.
	 *
	 * @param Context\JsonContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitJson(Context\JsonContext $context);

	/**
	 * Visit a parse tree produced by {@see JSONParser::value()}.
	 *
	 * @param Context\ValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValue(Context\ValueContext $context);

	/**
	 * Visit a parse tree produced by {@see JSONParser::obj()}.
	 *
	 * @param Context\ObjContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObj(Context\ObjContext $context);

	/**
	 * Visit a parse tree produced by {@see JSONParser::arr()}.
	 *
	 * @param Context\ArrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArr(Context\ArrContext $context);

	/**
	 * Visit a parse tree produced by {@see JSONParser::pair()}.
	 *
	 * @param Context\PairContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPair(Context\PairContext $context);
}