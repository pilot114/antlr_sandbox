<?php

/*
 * Generated from Chat.g4 by ANTLR 4.9
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class ChatParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               NUMBER = 7, SAYS = 8, SHOUTS = 9, WORD = 10, WHITESPACE = 11, 
               NEWLINE = 12, TEXT = 13;

		public const RULE_chat = 0, RULE_line = 1, RULE_message = 2, RULE_name = 3, 
               RULE_command = 4, RULE_emoticon = 5, RULE_link = 6, RULE_color = 7, 
               RULE_mention = 8;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'chat', 'line', 'message', 'name', 'command', 'emoticon', 'link', 'color', 
			'mention'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "':'", "'-'", "')'", "'('", "'/'", "'@'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, "NUMBER", "SAYS", "SHOUTS", 
		    "WORD", "WHITESPACE", "NEWLINE", "TEXT"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{F}\u{4A}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{3}\u{2}\u{6}\u{2}\u{16}\u{A}\u{2}\u{D}\u{2}\u{E}\u{2}\u{17}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{6}" .
		    "\u{4}\u{27}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}\u{28}\u{3}\u{5}\u{3}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{5}\u{7}\u{34}\u{A}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{5}" .
		    "\u{7}\u{39}\u{A}\u{7}\u{3}\u{7}\u{5}\u{7}\u{3C}\u{A}\u{7}\u{3}\u{8}" .
		    "\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}" .
		    "\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{2}\u{2}" .
		    "\u{B}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{2}\u{3}\u{3}" .
		    "\u{2}\u{A}\u{B}\u{2}\u{4A}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}\u{4}\u{1B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{6}\u{26}\u{3}\u{2}\u{2}\u{2}\u{8}\u{2A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{A}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{C}\u{3B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{E}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{10}\u{40}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{12}\u{46}\u{3}\u{2}\u{2}\u{2}\u{14}\u{16}\u{5}\u{4}\u{3}\u{2}" .
		    "\u{15}\u{14}\u{3}\u{2}\u{2}\u{2}\u{16}\u{17}\u{3}\u{2}\u{2}\u{2}\u{17}" .
		    "\u{15}\u{3}\u{2}\u{2}\u{2}\u{17}\u{18}\u{3}\u{2}\u{2}\u{2}\u{18}\u{19}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{19}\u{1A}\u{7}\u{2}\u{2}\u{3}\u{1A}\u{3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1B}\u{1C}\u{5}\u{8}\u{5}\u{2}\u{1C}\u{1D}\u{5}\u{A}" .
		    "\u{6}\u{2}\u{1D}\u{1E}\u{5}\u{6}\u{4}\u{2}\u{1E}\u{1F}\u{7}\u{E}\u{2}" .
		    "\u{2}\u{1F}\u{5}\u{3}\u{2}\u{2}\u{2}\u{20}\u{27}\u{5}\u{C}\u{7}\u{2}" .
		    "\u{21}\u{27}\u{5}\u{E}\u{8}\u{2}\u{22}\u{27}\u{5}\u{10}\u{9}\u{2}" .
		    "\u{23}\u{27}\u{5}\u{12}\u{A}\u{2}\u{24}\u{27}\u{7}\u{C}\u{2}\u{2}" .
		    "\u{25}\u{27}\u{7}\u{D}\u{2}\u{2}\u{26}\u{20}\u{3}\u{2}\u{2}\u{2}\u{26}" .
		    "\u{21}\u{3}\u{2}\u{2}\u{2}\u{26}\u{22}\u{3}\u{2}\u{2}\u{2}\u{26}\u{23}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{26}\u{24}\u{3}\u{2}\u{2}\u{2}\u{26}\u{25}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{27}\u{28}\u{3}\u{2}\u{2}\u{2}\u{28}\u{26}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{28}\u{29}\u{3}\u{2}\u{2}\u{2}\u{29}\u{7}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2A}\u{2B}\u{7}\u{C}\u{2}\u{2}\u{2B}\u{2C}\u{7}\u{D}\u{2}\u{2}" .
		    "\u{2C}\u{9}\u{3}\u{2}\u{2}\u{2}\u{2D}\u{2E}\u{9}\u{2}\u{2}\u{2}\u{2E}" .
		    "\u{2F}\u{7}\u{3}\u{2}\u{2}\u{2F}\u{30}\u{7}\u{D}\u{2}\u{2}\u{30}\u{B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{31}\u{33}\u{7}\u{3}\u{2}\u{2}\u{32}\u{34}\u{7}" .
		    "\u{4}\u{2}\u{2}\u{33}\u{32}\u{3}\u{2}\u{2}\u{2}\u{33}\u{34}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{34}\u{35}\u{3}\u{2}\u{2}\u{2}\u{35}\u{3C}\u{7}\u{5}\u{2}" .
		    "\u{2}\u{36}\u{38}\u{7}\u{3}\u{2}\u{2}\u{37}\u{39}\u{7}\u{4}\u{2}\u{2}" .
		    "\u{38}\u{37}\u{3}\u{2}\u{2}\u{2}\u{38}\u{39}\u{3}\u{2}\u{2}\u{2}\u{39}" .
		    "\u{3A}\u{3}\u{2}\u{2}\u{2}\u{3A}\u{3C}\u{7}\u{6}\u{2}\u{2}\u{3B}\u{31}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3B}\u{36}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{3D}\u{3E}\u{7}\u{F}\u{2}\u{2}\u{3E}\u{3F}\u{7}\u{F}" .
		    "\u{2}\u{2}\u{3F}\u{F}\u{3}\u{2}\u{2}\u{2}\u{40}\u{41}\u{7}\u{7}\u{2}" .
		    "\u{2}\u{41}\u{42}\u{7}\u{C}\u{2}\u{2}\u{42}\u{43}\u{7}\u{7}\u{2}\u{2}" .
		    "\u{43}\u{44}\u{5}\u{6}\u{4}\u{2}\u{44}\u{45}\u{7}\u{7}\u{2}\u{2}\u{45}" .
		    "\u{11}\u{3}\u{2}\u{2}\u{2}\u{46}\u{47}\u{7}\u{8}\u{2}\u{2}\u{47}\u{48}" .
		    "\u{7}\u{C}\u{2}\u{2}\u{48}\u{13}\u{3}\u{2}\u{2}\u{2}\u{8}\u{17}\u{26}" .
		    "\u{28}\u{33}\u{38}\u{3B}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "Chat.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function chat() : Context\ChatContext
		{
		    $localContext = new Context\ChatContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_chat);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(19); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(18);
		        	$this->line();
		        	$this->setState(21); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::WORD);
		        $this->setState(23);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function line() : Context\LineContext
		{
		    $localContext = new Context\LineContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_line);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(25);
		        $this->name();
		        $this->setState(26);
		        $this->command();
		        $this->setState(27);
		        $this->message();
		        $this->setState(28);
		        $this->match(self::NEWLINE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function message() : Context\MessageContext
		{
		    $localContext = new Context\MessageContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_message);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(36); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(36);
		        		$this->errorHandler->sync($this);

		        		switch ($this->input->LA(1)) {
		        		    case self::T__0:
		        		    	$this->setState(30);
		        		    	$this->emoticon();
		        		    	break;

		        		    case self::TEXT:
		        		    	$this->setState(31);
		        		    	$this->link();
		        		    	break;

		        		    case self::T__4:
		        		    	$this->setState(32);
		        		    	$this->color();
		        		    	break;

		        		    case self::T__5:
		        		    	$this->setState(33);
		        		    	$this->mention();
		        		    	break;

		        		    case self::WORD:
		        		    	$this->setState(34);
		        		    	$this->match(self::WORD);
		        		    	break;

		        		    case self::WHITESPACE:
		        		    	$this->setState(35);
		        		    	$this->match(self::WHITESPACE);
		        		    	break;

		        		default:
		        			throw new NoViableAltException($this);
		        		}
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(38); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function name() : Context\NameContext
		{
		    $localContext = new Context\NameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(40);
		        $this->match(self::WORD);
		        $this->setState(41);
		        $this->match(self::WHITESPACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function command() : Context\CommandContext
		{
		    $localContext = new Context\CommandContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_command);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(43);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::SAYS || $_la === self::SHOUTS)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(44);
		        $this->match(self::T__0);
		        $this->setState(45);
		        $this->match(self::WHITESPACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function emoticon() : Context\EmoticonContext
		{
		    $localContext = new Context\EmoticonContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_emoticon);

		    try {
		        $this->setState(57);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(47);
		        	    $this->match(self::T__0);
		        	    $this->setState(49);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__1) {
		        	    	$this->setState(48);
		        	    	$this->match(self::T__1);
		        	    }
		        	    $this->setState(51);
		        	    $this->match(self::T__2);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(52);
		        	    $this->match(self::T__0);
		        	    $this->setState(54);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__1) {
		        	    	$this->setState(53);
		        	    	$this->match(self::T__1);
		        	    }
		        	    $this->setState(56);
		        	    $this->match(self::T__3);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function link() : Context\LinkContext
		{
		    $localContext = new Context\LinkContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_link);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(59);
		        $this->match(self::TEXT);
		        $this->setState(60);
		        $this->match(self::TEXT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function color() : Context\ColorContext
		{
		    $localContext = new Context\ColorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_color);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(62);
		        $this->match(self::T__4);
		        $this->setState(63);
		        $this->match(self::WORD);
		        $this->setState(64);
		        $this->match(self::T__4);
		        $this->setState(65);
		        $this->message();
		        $this->setState(66);
		        $this->match(self::T__4);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function mention() : Context\MentionContext
		{
		    $localContext = new Context\MentionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_mention);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(68);
		        $this->match(self::T__5);
		        $this->setState(69);
		        $this->match(self::WORD);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use ChatParser;
	use ChatVisitor;
	use ChatListener;

	class ChatContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_chat;
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::EOF, 0);
	    }

	    /**
	     * @return array<LineContext>|LineContext|null
	     */
	    public function line(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LineContext::class);
	    	}

	        return $this->getTypedRuleContext(LineContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterChat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitChat($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitChat($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LineContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_line;
	    }

	    public function name() : ?NameContext
	    {
	    	return $this->getTypedRuleContext(NameContext::class, 0);
	    }

	    public function command() : ?CommandContext
	    {
	    	return $this->getTypedRuleContext(CommandContext::class, 0);
	    }

	    public function message() : ?MessageContext
	    {
	    	return $this->getTypedRuleContext(MessageContext::class, 0);
	    }

	    public function NEWLINE() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::NEWLINE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterLine($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitLine($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitLine($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MessageContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_message;
	    }

	    /**
	     * @return array<EmoticonContext>|EmoticonContext|null
	     */
	    public function emoticon(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EmoticonContext::class);
	    	}

	        return $this->getTypedRuleContext(EmoticonContext::class, $index);
	    }

	    /**
	     * @return array<LinkContext>|LinkContext|null
	     */
	    public function link(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LinkContext::class);
	    	}

	        return $this->getTypedRuleContext(LinkContext::class, $index);
	    }

	    /**
	     * @return array<ColorContext>|ColorContext|null
	     */
	    public function color(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ColorContext::class);
	    	}

	        return $this->getTypedRuleContext(ColorContext::class, $index);
	    }

	    /**
	     * @return array<MentionContext>|MentionContext|null
	     */
	    public function mention(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MentionContext::class);
	    	}

	        return $this->getTypedRuleContext(MentionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function WORD(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ChatParser::WORD);
	    	}

	        return $this->getToken(ChatParser::WORD, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function WHITESPACE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ChatParser::WHITESPACE);
	    	}

	        return $this->getToken(ChatParser::WHITESPACE, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterMessage($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitMessage($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitMessage($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_name;
	    }

	    public function WORD() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::WORD, 0);
	    }

	    public function WHITESPACE() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::WHITESPACE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterName($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitName($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitName($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CommandContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_command;
	    }

	    public function WHITESPACE() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::WHITESPACE, 0);
	    }

	    public function SAYS() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::SAYS, 0);
	    }

	    public function SHOUTS() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::SHOUTS, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterCommand($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitCommand($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitCommand($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EmoticonContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_emoticon;
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterEmoticon($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitEmoticon($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitEmoticon($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LinkContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_link;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function TEXT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ChatParser::TEXT);
	    	}

	        return $this->getToken(ChatParser::TEXT, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterLink($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitLink($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitLink($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ColorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_color;
	    }

	    public function WORD() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::WORD, 0);
	    }

	    public function message() : ?MessageContext
	    {
	    	return $this->getTypedRuleContext(MessageContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterColor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitColor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitColor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MentionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return ChatParser::RULE_mention;
	    }

	    public function WORD() : ?TerminalNode
	    {
	        return $this->getToken(ChatParser::WORD, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->enterMention($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof ChatListener) {
			    $listener->exitMention($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof ChatVisitor) {
			    return $visitor->visitMention($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}