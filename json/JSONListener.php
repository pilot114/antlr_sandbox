<?php

/*
 * Generated from JSON.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see JSONParser}.
 */
interface JSONListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see JSONParser::json()}.
	 * @param $context The parse tree.
	 */
	public function enterJson(Context\JsonContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JSONParser::json()}.
	 * @param $context The parse tree.
	 */
	public function exitJson(Context\JsonContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JSONParser::obj()}.
	 * @param $context The parse tree.
	 */
	public function enterObj(Context\ObjContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JSONParser::obj()}.
	 * @param $context The parse tree.
	 */
	public function exitObj(Context\ObjContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JSONParser::pair()}.
	 * @param $context The parse tree.
	 */
	public function enterPair(Context\PairContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JSONParser::pair()}.
	 * @param $context The parse tree.
	 */
	public function exitPair(Context\PairContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JSONParser::arr()}.
	 * @param $context The parse tree.
	 */
	public function enterArr(Context\ArrContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JSONParser::arr()}.
	 * @param $context The parse tree.
	 */
	public function exitArr(Context\ArrContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JSONParser::value()}.
	 * @param $context The parse tree.
	 */
	public function enterValue(Context\ValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JSONParser::value()}.
	 * @param $context The parse tree.
	 */
	public function exitValue(Context\ValueContext $context) : void;
}