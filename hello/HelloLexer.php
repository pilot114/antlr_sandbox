<?php

/*
 * Generated from Hello.g4 by ANTLR 4.9
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class HelloLexer extends Lexer
	{
		public const T__0 = 1, ID = 2, WS = 3;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'T__0', 'ID', 'WS'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'hello'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, "ID", "WS"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{2}\u{5}\u{1B}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{3}\u{6}\u{3}\u{11}\u{A}\u{3}\u{D}\u{3}\u{E}" .
		    "\u{3}\u{12}\u{3}\u{4}\u{6}\u{4}\u{16}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}" .
		    "\u{17}\u{3}\u{4}\u{3}\u{4}\u{2}\u{2}\u{5}\u{3}\u{3}\u{5}\u{4}\u{7}" .
		    "\u{5}\u{3}\u{2}\u{4}\u{3}\u{2}\u{63}\u{7C}\u{5}\u{2}\u{B}\u{C}\u{F}" .
		    "\u{F}\u{22}\u{22}\u{2}\u{1C}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{3}\u{9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{5}\u{10}\u{3}\u{2}\u{2}\u{2}\u{7}\u{15}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{9}\u{A}\u{7}\u{6A}\u{2}\u{2}\u{A}\u{B}\u{7}\u{67}\u{2}" .
		    "\u{2}\u{B}\u{C}\u{7}\u{6E}\u{2}\u{2}\u{C}\u{D}\u{7}\u{6E}\u{2}\u{2}" .
		    "\u{D}\u{E}\u{7}\u{71}\u{2}\u{2}\u{E}\u{4}\u{3}\u{2}\u{2}\u{2}\u{F}" .
		    "\u{11}\u{9}\u{2}\u{2}\u{2}\u{10}\u{F}\u{3}\u{2}\u{2}\u{2}\u{11}\u{12}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12}\u{10}\u{3}\u{2}\u{2}\u{2}\u{12}\u{13}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{13}\u{6}\u{3}\u{2}\u{2}\u{2}\u{14}\u{16}\u{9}\u{3}" .
		    "\u{2}\u{2}\u{15}\u{14}\u{3}\u{2}\u{2}\u{2}\u{16}\u{17}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{17}\u{15}\u{3}\u{2}\u{2}\u{2}\u{17}\u{18}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{18}\u{19}\u{3}\u{2}\u{2}\u{2}\u{19}\u{1A}\u{8}\u{4}\u{2}\u{2}\u{1A}" .
		    "\u{8}\u{3}\u{2}\u{2}\u{2}\u{5}\u{2}\u{12}\u{17}\u{3}\u{8}\u{2}\u{2}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary() : Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName() : string
		{
			return 'Hello.g4';
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames() : array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames() : array
		{
			return self::MODE_NAMES;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
		{
			return self::vocabulary();
		}
	}
}