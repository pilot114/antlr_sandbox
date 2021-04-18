<?php

/*
 * Generated from JSON.g4 by ANTLR 4.9
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

	final class JSONLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, STRING = 10, NUMBER = 11, WS = 12;

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
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'T__6', 'T__7', 'T__8', 
			'STRING', 'ESC', 'UNICODE', 'HEX', 'SAFECODEPOINT', 'NUMBER', 'INT', 
			'EXP', 'WS'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'{'", "','", "'}'", "':'", "'['", "']'", "'true'", "'false'", 
		    "'null'"
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
		    "\u{2}\u{E}\u{82}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}" .
		    "\u{7}\u{9}\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}" .
		    "\u{9}\u{A}\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}" .
		    "\u{D}\u{4}\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}" .
		    "\u{4}\u{11}\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}" .
		    "\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{8}" .
		    "\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}\u{3}" .
		    "\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}" .
		    "\u{3}\u{A}\u{3}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{7}\u{B}\u{47}" .
		    "\u{A}\u{B}\u{C}\u{B}\u{E}\u{B}\u{4A}\u{B}\u{B}\u{3}\u{B}\u{3}\u{B}" .
		    "\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{5}\u{C}\u{51}\u{A}\u{C}\u{3}\u{D}" .
		    "\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}\u{3}" .
		    "\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{10}\u{5}\u{10}\u{5E}\u{A}\u{10}\u{3}" .
		    "\u{10}\u{3}\u{10}\u{3}\u{10}\u{6}\u{10}\u{63}\u{A}\u{10}\u{D}\u{10}" .
		    "\u{E}\u{10}\u{64}\u{5}\u{10}\u{67}\u{A}\u{10}\u{3}\u{10}\u{5}\u{10}" .
		    "\u{6A}\u{A}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{7}\u{11}\u{6F}" .
		    "\u{A}\u{11}\u{C}\u{11}\u{E}\u{11}\u{72}\u{B}\u{11}\u{5}\u{11}\u{74}" .
		    "\u{A}\u{11}\u{3}\u{12}\u{3}\u{12}\u{5}\u{12}\u{78}\u{A}\u{12}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{3}\u{13}\u{6}\u{13}\u{7D}\u{A}\u{13}\u{D}\u{13}" .
		    "\u{E}\u{13}\u{7E}\u{3}\u{13}\u{3}\u{13}\u{2}\u{2}\u{14}\u{3}\u{3}" .
		    "\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}\u{B}\u{7}\u{D}\u{8}\u{F}\u{9}\u{11}" .
		    "\u{A}\u{13}\u{B}\u{15}\u{C}\u{17}\u{2}\u{19}\u{2}\u{1B}\u{2}\u{1D}" .
		    "\u{2}\u{1F}\u{D}\u{21}\u{2}\u{23}\u{2}\u{25}\u{E}\u{3}\u{2}\u{A}\u{A}" .
		    "\u{2}\u{24}\u{24}\u{31}\u{31}\u{5E}\u{5E}\u{64}\u{64}\u{68}\u{68}" .
		    "\u{70}\u{70}\u{74}\u{74}\u{76}\u{76}\u{5}\u{2}\u{32}\u{3B}\u{43}\u{48}" .
		    "\u{63}\u{68}\u{5}\u{2}\u{2}\u{21}\u{24}\u{24}\u{5E}\u{5E}\u{3}\u{2}" .
		    "\u{32}\u{3B}\u{3}\u{2}\u{33}\u{3B}\u{4}\u{2}\u{47}\u{47}\u{67}\u{67}" .
		    "\u{4}\u{2}\u{2D}\u{2D}\u{2F}\u{2F}\u{5}\u{2}\u{B}\u{C}\u{F}\u{F}\u{22}" .
		    "\u{22}\u{2}\u{86}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{11}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{13}\u{3}\u{2}\u{2}\u{2}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{25}\u{3}\u{2}\u{2}\u{2}\u{3}\u{27}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{5}\u{29}\u{3}\u{2}\u{2}\u{2}\u{7}\u{2B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{9}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{B}\u{2F}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D}\u{31}\u{3}\u{2}\u{2}\u{2}\u{F}\u{33}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{11}\u{38}\u{3}\u{2}\u{2}\u{2}\u{13}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{15}" .
		    "\u{43}\u{3}\u{2}\u{2}\u{2}\u{17}\u{4D}\u{3}\u{2}\u{2}\u{2}\u{19}\u{52}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1B}\u{58}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{5A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1F}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{21}\u{73}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{23}\u{75}\u{3}\u{2}\u{2}\u{2}\u{25}\u{7C}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{27}\u{28}\u{7}\u{7D}\u{2}\u{2}\u{28}\u{4}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{29}\u{2A}\u{7}\u{2E}\u{2}\u{2}\u{2A}\u{6}\u{3}\u{2}\u{2}\u{2}\u{2B}" .
		    "\u{2C}\u{7}\u{7F}\u{2}\u{2}\u{2C}\u{8}\u{3}\u{2}\u{2}\u{2}\u{2D}\u{2E}" .
		    "\u{7}\u{3C}\u{2}\u{2}\u{2E}\u{A}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{30}\u{7}" .
		    "\u{5D}\u{2}\u{2}\u{30}\u{C}\u{3}\u{2}\u{2}\u{2}\u{31}\u{32}\u{7}\u{5F}" .
		    "\u{2}\u{2}\u{32}\u{E}\u{3}\u{2}\u{2}\u{2}\u{33}\u{34}\u{7}\u{76}\u{2}" .
		    "\u{2}\u{34}\u{35}\u{7}\u{74}\u{2}\u{2}\u{35}\u{36}\u{7}\u{77}\u{2}" .
		    "\u{2}\u{36}\u{37}\u{7}\u{67}\u{2}\u{2}\u{37}\u{10}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{38}\u{39}\u{7}\u{68}\u{2}\u{2}\u{39}\u{3A}\u{7}\u{63}\u{2}" .
		    "\u{2}\u{3A}\u{3B}\u{7}\u{6E}\u{2}\u{2}\u{3B}\u{3C}\u{7}\u{75}\u{2}" .
		    "\u{2}\u{3C}\u{3D}\u{7}\u{67}\u{2}\u{2}\u{3D}\u{12}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3E}\u{3F}\u{7}\u{70}\u{2}\u{2}\u{3F}\u{40}\u{7}\u{77}\u{2}" .
		    "\u{2}\u{40}\u{41}\u{7}\u{6E}\u{2}\u{2}\u{41}\u{42}\u{7}\u{6E}\u{2}" .
		    "\u{2}\u{42}\u{14}\u{3}\u{2}\u{2}\u{2}\u{43}\u{48}\u{7}\u{24}\u{2}" .
		    "\u{2}\u{44}\u{47}\u{5}\u{17}\u{C}\u{2}\u{45}\u{47}\u{5}\u{1D}\u{F}" .
		    "\u{2}\u{46}\u{44}\u{3}\u{2}\u{2}\u{2}\u{46}\u{45}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{47}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{48}\u{46}\u{3}\u{2}\u{2}\u{2}\u{48}" .
		    "\u{49}\u{3}\u{2}\u{2}\u{2}\u{49}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{4A}\u{48}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4B}\u{4C}\u{7}\u{24}\u{2}\u{2}\u{4C}\u{16}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4D}\u{50}\u{7}\u{5E}\u{2}\u{2}\u{4E}\u{51}" .
		    "\u{9}\u{2}\u{2}\u{2}\u{4F}\u{51}\u{5}\u{19}\u{D}\u{2}\u{50}\u{4E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{50}\u{4F}\u{3}\u{2}\u{2}\u{2}\u{51}\u{18}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{52}\u{53}\u{7}\u{77}\u{2}\u{2}\u{53}\u{54}\u{5}" .
		    "\u{1B}\u{E}\u{2}\u{54}\u{55}\u{5}\u{1B}\u{E}\u{2}\u{55}\u{56}\u{5}" .
		    "\u{1B}\u{E}\u{2}\u{56}\u{57}\u{5}\u{1B}\u{E}\u{2}\u{57}\u{1A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{58}\u{59}\u{9}\u{3}\u{2}\u{2}\u{59}\u{1C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{5A}\u{5B}\u{A}\u{4}\u{2}\u{2}\u{5B}\u{1E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{5C}\u{5E}\u{7}\u{2F}\u{2}\u{2}\u{5D}\u{5C}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{5D}\u{5E}\u{3}\u{2}\u{2}\u{2}\u{5E}\u{5F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{5F}\u{66}\u{5}\u{21}\u{11}\u{2}\u{60}\u{62}\u{7}\u{30}\u{2}\u{2}" .
		    "\u{61}\u{63}\u{9}\u{5}\u{2}\u{2}\u{62}\u{61}\u{3}\u{2}\u{2}\u{2}\u{63}" .
		    "\u{64}\u{3}\u{2}\u{2}\u{2}\u{64}\u{62}\u{3}\u{2}\u{2}\u{2}\u{64}\u{65}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{65}\u{67}\u{3}\u{2}\u{2}\u{2}\u{66}\u{60}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{66}\u{67}\u{3}\u{2}\u{2}\u{2}\u{67}\u{69}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{68}\u{6A}\u{5}\u{23}\u{12}\u{2}\u{69}\u{68}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{69}\u{6A}\u{3}\u{2}\u{2}\u{2}\u{6A}\u{20}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{6B}\u{74}\u{7}\u{32}\u{2}\u{2}\u{6C}\u{70}\u{9}\u{6}\u{2}" .
		    "\u{2}\u{6D}\u{6F}\u{9}\u{5}\u{2}\u{2}\u{6E}\u{6D}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{6F}\u{72}\u{3}\u{2}\u{2}\u{2}\u{70}\u{6E}\u{3}\u{2}\u{2}\u{2}\u{70}" .
		    "\u{71}\u{3}\u{2}\u{2}\u{2}\u{71}\u{74}\u{3}\u{2}\u{2}\u{2}\u{72}\u{70}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{73}\u{6B}\u{3}\u{2}\u{2}\u{2}\u{73}\u{6C}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{74}\u{22}\u{3}\u{2}\u{2}\u{2}\u{75}\u{77}\u{9}\u{7}" .
		    "\u{2}\u{2}\u{76}\u{78}\u{9}\u{8}\u{2}\u{2}\u{77}\u{76}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{77}\u{78}\u{3}\u{2}\u{2}\u{2}\u{78}\u{79}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{79}\u{7A}\u{5}\u{21}\u{11}\u{2}\u{7A}\u{24}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{7B}\u{7D}\u{9}\u{9}\u{2}\u{2}\u{7C}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{7D}" .
		    "\u{7E}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7C}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{7F}\u{80}\u{3}\u{2}\u{2}\u{2}\u{80}\u{81}\u{8}" .
		    "\u{13}\u{2}\u{2}\u{81}\u{26}\u{3}\u{2}\u{2}\u{2}\u{E}\u{2}\u{46}\u{48}" .
		    "\u{50}\u{5D}\u{64}\u{66}\u{69}\u{70}\u{73}\u{77}\u{7E}\u{3}\u{8}\u{2}" .
		    "\u{2}";

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
			return 'JSON.g4';
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