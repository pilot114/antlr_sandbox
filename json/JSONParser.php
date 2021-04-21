<?php

/*
 * Generated from JSON.g4 by ANTLR 4.9
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

	final class JSONParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, STRING = 10, NUMBER = 11, WS = 12;

		public const RULE_json = 0, RULE_value = 1, RULE_obj = 2, RULE_arr = 3, 
               RULE_pair = 4;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'json', 'value', 'obj', 'arr', 'pair'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'true'", "'false'", "'null'", "'{'", "','", "'}'", "'['", "']'", 
		    "':'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, "STRING", 
		    "NUMBER", "WS"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{E}\u{3A}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{5}\u{3}\u{16}\u{A}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{7}\u{4}\u{1C}\u{A}\u{4}\u{C}\u{4}\u{E}\u{4}\u{1F}\u{B}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{25}\u{A}" .
		    "\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{2B}\u{A}" .
		    "\u{5}\u{C}\u{5}\u{E}\u{5}\u{2E}\u{B}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}" .
		    "\u{5}\u{3}\u{5}\u{5}\u{5}\u{34}\u{A}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}" .
		    "\u{6}\u{3}\u{6}\u{3}\u{6}\u{2}\u{2}\u{7}\u{2}\u{4}\u{6}\u{8}\u{A}" .
		    "\u{2}\u{2}\u{2}\u{3E}\u{2}\u{C}\u{3}\u{2}\u{2}\u{2}\u{4}\u{15}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{6}\u{24}\u{3}\u{2}\u{2}\u{2}\u{8}\u{33}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A}\u{35}\u{3}\u{2}\u{2}\u{2}\u{C}\u{D}\u{5}\u{4}\u{3}" .
		    "\u{2}\u{D}\u{3}\u{3}\u{2}\u{2}\u{2}\u{E}\u{16}\u{7}\u{C}\u{2}\u{2}" .
		    "\u{F}\u{16}\u{7}\u{D}\u{2}\u{2}\u{10}\u{16}\u{5}\u{6}\u{4}\u{2}\u{11}" .
		    "\u{16}\u{5}\u{8}\u{5}\u{2}\u{12}\u{16}\u{7}\u{3}\u{2}\u{2}\u{13}\u{16}" .
		    "\u{7}\u{4}\u{2}\u{2}\u{14}\u{16}\u{7}\u{5}\u{2}\u{2}\u{15}\u{E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{15}\u{F}\u{3}\u{2}\u{2}\u{2}\u{15}\u{10}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{15}\u{11}\u{3}\u{2}\u{2}\u{2}\u{15}\u{12}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{15}\u{13}\u{3}\u{2}\u{2}\u{2}\u{15}\u{14}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{16}\u{5}\u{3}\u{2}\u{2}\u{2}\u{17}\u{18}\u{7}\u{6}\u{2}\u{2}\u{18}" .
		    "\u{1D}\u{5}\u{A}\u{6}\u{2}\u{19}\u{1A}\u{7}\u{7}\u{2}\u{2}\u{1A}\u{1C}" .
		    "\u{5}\u{A}\u{6}\u{2}\u{1B}\u{19}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{1F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1D}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{1E}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1E}\u{20}\u{3}\u{2}\u{2}\u{2}\u{1F}\u{1D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{20}\u{21}\u{7}\u{8}\u{2}\u{2}\u{21}\u{25}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{22}\u{23}\u{7}\u{6}\u{2}\u{2}\u{23}\u{25}\u{7}\u{8}\u{2}\u{2}\u{24}" .
		    "\u{17}\u{3}\u{2}\u{2}\u{2}\u{24}\u{22}\u{3}\u{2}\u{2}\u{2}\u{25}\u{7}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{26}\u{27}\u{7}\u{9}\u{2}\u{2}\u{27}\u{2C}\u{5}" .
		    "\u{4}\u{3}\u{2}\u{28}\u{29}\u{7}\u{7}\u{2}\u{2}\u{29}\u{2B}\u{5}\u{4}" .
		    "\u{3}\u{2}\u{2A}\u{28}\u{3}\u{2}\u{2}\u{2}\u{2B}\u{2E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2C}\u{2A}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{2D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2D}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{2E}\u{2C}\u{3}\u{2}\u{2}\u{2}\u{2F}" .
		    "\u{30}\u{7}\u{A}\u{2}\u{2}\u{30}\u{34}\u{3}\u{2}\u{2}\u{2}\u{31}\u{32}" .
		    "\u{7}\u{9}\u{2}\u{2}\u{32}\u{34}\u{7}\u{A}\u{2}\u{2}\u{33}\u{26}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{33}\u{31}\u{3}\u{2}\u{2}\u{2}\u{34}\u{9}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{35}\u{36}\u{7}\u{C}\u{2}\u{2}\u{36}\u{37}\u{7}\u{B}\u{2}" .
		    "\u{2}\u{37}\u{38}\u{5}\u{4}\u{3}\u{2}\u{38}\u{B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{7}\u{15}\u{1D}\u{24}\u{2C}\u{33}";

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
			return "JSON.g4";
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
		public function json() : Context\JsonContext
		{
		    $localContext = new Context\JsonContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_json);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(10);
		        $this->value();
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
		public function value() : Context\ValueContext
		{
		    $localContext = new Context\ValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_value);

		    try {
		        $this->setState(19);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::STRING:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(12);
		            	$this->match(self::STRING);
		            	break;

		            case self::NUMBER:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(13);
		            	$this->match(self::NUMBER);
		            	break;

		            case self::T__3:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(14);
		            	$this->obj();
		            	break;

		            case self::T__6:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(15);
		            	$this->arr();
		            	break;

		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(16);
		            	$this->match(self::T__0);
		            	break;

		            case self::T__1:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(17);
		            	$this->match(self::T__1);
		            	break;

		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(18);
		            	$this->match(self::T__2);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
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
		public function obj() : Context\ObjContext
		{
		    $localContext = new Context\ObjContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_obj);

		    try {
		        $this->setState(34);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(21);
		        	    $this->match(self::T__3);
		        	    $this->setState(22);
		        	    $this->pair();
		        	    $this->setState(27);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__4) {
		        	    	$this->setState(23);
		        	    	$this->match(self::T__4);
		        	    	$this->setState(24);
		        	    	$this->pair();
		        	    	$this->setState(29);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(30);
		        	    $this->match(self::T__5);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(32);
		        	    $this->match(self::T__3);
		        	    $this->setState(33);
		        	    $this->match(self::T__5);
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
		public function arr() : Context\ArrContext
		{
		    $localContext = new Context\ArrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_arr);

		    try {
		        $this->setState(49);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(36);
		        	    $this->match(self::T__6);
		        	    $this->setState(37);
		        	    $this->value();
		        	    $this->setState(42);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__4) {
		        	    	$this->setState(38);
		        	    	$this->match(self::T__4);
		        	    	$this->setState(39);
		        	    	$this->value();
		        	    	$this->setState(44);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(45);
		        	    $this->match(self::T__7);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(47);
		        	    $this->match(self::T__6);
		        	    $this->setState(48);
		        	    $this->match(self::T__7);
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
		public function pair() : Context\PairContext
		{
		    $localContext = new Context\PairContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_pair);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(51);
		        $this->match(self::STRING);
		        $this->setState(52);
		        $this->match(self::T__8);
		        $this->setState(53);
		        $this->value();
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
	use JSONParser;
	use JSONVisitor;
	use JSONListener;

	class JsonContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return JSONParser::RULE_json;
	    }

	    public function value() : ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->enterJson($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->exitJson($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof JSONVisitor) {
			    return $visitor->visitJson($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return JSONParser::RULE_value;
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(JSONParser::STRING, 0);
	    }

	    public function NUMBER() : ?TerminalNode
	    {
	        return $this->getToken(JSONParser::NUMBER, 0);
	    }

	    public function obj() : ?ObjContext
	    {
	    	return $this->getTypedRuleContext(ObjContext::class, 0);
	    }

	    public function arr() : ?ArrContext
	    {
	    	return $this->getTypedRuleContext(ArrContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->enterValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->exitValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof JSONVisitor) {
			    return $visitor->visitValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ObjContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return JSONParser::RULE_obj;
	    }

	    /**
	     * @return array<PairContext>|PairContext|null
	     */
	    public function pair(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(PairContext::class);
	    	}

	        return $this->getTypedRuleContext(PairContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->enterObj($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->exitObj($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof JSONVisitor) {
			    return $visitor->visitObj($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return JSONParser::RULE_arr;
	    }

	    /**
	     * @return array<ValueContext>|ValueContext|null
	     */
	    public function value(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ValueContext::class);
	    	}

	        return $this->getTypedRuleContext(ValueContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->enterArr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->exitArr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof JSONVisitor) {
			    return $visitor->visitArr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PairContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return JSONParser::RULE_pair;
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(JSONParser::STRING, 0);
	    }

	    public function value() : ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->enterPair($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JSONListener) {
			    $listener->exitPair($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof JSONVisitor) {
			    return $visitor->visitPair($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}