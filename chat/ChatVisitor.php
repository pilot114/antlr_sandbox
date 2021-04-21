<?php

/*
 * Generated from Chat.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see ChatParser}.
 */
interface ChatVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see ChatParser::chat()}.
	 *
	 * @param Context\ChatContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitChat(Context\ChatContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::line()}.
	 *
	 * @param Context\LineContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLine(Context\LineContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::message()}.
	 *
	 * @param Context\MessageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMessage(Context\MessageContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::name()}.
	 *
	 * @param Context\NameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitName(Context\NameContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::command()}.
	 *
	 * @param Context\CommandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCommand(Context\CommandContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::emoticon()}.
	 *
	 * @param Context\EmoticonContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmoticon(Context\EmoticonContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::link()}.
	 *
	 * @param Context\LinkContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLink(Context\LinkContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::color()}.
	 *
	 * @param Context\ColorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColor(Context\ColorContext $context);

	/**
	 * Visit a parse tree produced by {@see ChatParser::mention()}.
	 *
	 * @param Context\MentionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMention(Context\MentionContext $context);
}