<?php

/*
 * Generated from Chat.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see ChatParser}.
 */
interface ChatListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see ChatParser::chat()}.
	 * @param $context The parse tree.
	 */
	public function enterChat(Context\ChatContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::chat()}.
	 * @param $context The parse tree.
	 */
	public function exitChat(Context\ChatContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::line()}.
	 * @param $context The parse tree.
	 */
	public function enterLine(Context\LineContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::line()}.
	 * @param $context The parse tree.
	 */
	public function exitLine(Context\LineContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::message()}.
	 * @param $context The parse tree.
	 */
	public function enterMessage(Context\MessageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::message()}.
	 * @param $context The parse tree.
	 */
	public function exitMessage(Context\MessageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::name()}.
	 * @param $context The parse tree.
	 */
	public function enterName(Context\NameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::name()}.
	 * @param $context The parse tree.
	 */
	public function exitName(Context\NameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::command()}.
	 * @param $context The parse tree.
	 */
	public function enterCommand(Context\CommandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::command()}.
	 * @param $context The parse tree.
	 */
	public function exitCommand(Context\CommandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::emoticon()}.
	 * @param $context The parse tree.
	 */
	public function enterEmoticon(Context\EmoticonContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::emoticon()}.
	 * @param $context The parse tree.
	 */
	public function exitEmoticon(Context\EmoticonContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::link()}.
	 * @param $context The parse tree.
	 */
	public function enterLink(Context\LinkContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::link()}.
	 * @param $context The parse tree.
	 */
	public function exitLink(Context\LinkContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::color()}.
	 * @param $context The parse tree.
	 */
	public function enterColor(Context\ColorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::color()}.
	 * @param $context The parse tree.
	 */
	public function exitColor(Context\ColorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see ChatParser::mention()}.
	 * @param $context The parse tree.
	 */
	public function enterMention(Context\MentionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see ChatParser::mention()}.
	 * @param $context The parse tree.
	 */
	public function exitMention(Context\MentionContext $context) : void;
}