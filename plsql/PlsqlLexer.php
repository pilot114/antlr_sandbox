<?php

/*
 * Generated from Plsql.g4 by ANTLR 4.9
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

	final class PlsqlLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, T__31 = 32, 
               T__32 = 33, T__33 = 34, T__34 = 35, T__35 = 36, T__36 = 37, 
               T__37 = 38, LINE = 39, STRING = 40, PERCENT_ROWTYPE = 41, 
               PERCENT_TYPE = 42, INTRODUCER = 43, REGULAR_ID = 44, DELIMITED_ID = 45, 
               NUMMMM = 46;

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
			'T__9', 'T__10', 'T__11', 'T__12', 'T__13', 'T__14', 'T__15', 'T__16', 
			'T__17', 'T__18', 'T__19', 'T__20', 'T__21', 'T__22', 'T__23', 'T__24', 
			'T__25', 'T__26', 'T__27', 'T__28', 'T__29', 'T__30', 'T__31', 'T__32', 
			'T__33', 'T__34', 'T__35', 'T__36', 'T__37', 'LINE', 'STRING', 'PERCENT_ROWTYPE', 
			'PERCENT_TYPE', 'INTRODUCER', 'REGULAR_ID', 'DELIMITED_ID', 'NUMMMM', 
			'SIMPLE_LETTER', 'NEWLINE_EOF', 'NEWLINE', 'SPACE'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'CREATE'", "'OR REPLACE'", "'package body'", "'.'", "'is'", 
		    "'as'", "'END'", "';'", "'procedure'", "'('", "','", "')'", "'declare'", 
		    "'begin'", "'exception'", "'end'", "'when'", "'or'", "'then'", "'<'", 
		    "'>'", "'in'", "'out'", "'in out'", "'constant'", "'not null'", "'ref'", 
		    "'default'", "'null'", "'integer'", "'varchar2'", "'number'", "'A'", 
		    "'BOOLEAN'", "'C'", "'CHAR'", "'NUMBER'", "'WHILE'", null, null, null, 
		    null, "'_'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, "LINE", "STRING", "PERCENT_ROWTYPE", 
		    "PERCENT_TYPE", "INTRODUCER", "REGULAR_ID", "DELIMITED_ID", "NUMMMM"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{2}\u{30}\u{185}\u{8}\u{1}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}" .
		    "\u{4}\u{4}\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}" .
		    "\u{7}\u{9}\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}" .
		    "\u{9}\u{A}\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}" .
		    "\u{D}\u{4}\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}" .
		    "\u{4}\u{11}\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}" .
		    "\u{4}\u{14}\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}" .
		    "\u{4}\u{17}\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}" .
		    "\u{4}\u{1A}\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}\u{1C}\u{9}\u{1C}" .
		    "\u{4}\u{1D}\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}\u{9}\u{1F}" .
		    "\u{4}\u{20}\u{9}\u{20}\u{4}\u{21}\u{9}\u{21}\u{4}\u{22}\u{9}\u{22}" .
		    "\u{4}\u{23}\u{9}\u{23}\u{4}\u{24}\u{9}\u{24}\u{4}\u{25}\u{9}\u{25}" .
		    "\u{4}\u{26}\u{9}\u{26}\u{4}\u{27}\u{9}\u{27}\u{4}\u{28}\u{9}\u{28}" .
		    "\u{4}\u{29}\u{9}\u{29}\u{4}\u{2A}\u{9}\u{2A}\u{4}\u{2B}\u{9}\u{2B}" .
		    "\u{4}\u{2C}\u{9}\u{2C}\u{4}\u{2D}\u{9}\u{2D}\u{4}\u{2E}\u{9}\u{2E}" .
		    "\u{4}\u{2F}\u{9}\u{2F}\u{4}\u{30}\u{9}\u{30}\u{4}\u{31}\u{9}\u{31}" .
		    "\u{4}\u{32}\u{9}\u{32}\u{4}\u{33}\u{9}\u{33}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}" .
		    "\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}" .
		    "\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}" .
		    "\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}" .
		    "\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{D}\u{3}\u{D}" .
		    "\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}" .
		    "\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}\u{3}\u{F}" .
		    "\u{3}\u{F}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}" .
		    "\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{11}" .
		    "\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}" .
		    "\u{3}\u{12}\u{3}\u{12}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}\u{14}" .
		    "\u{3}\u{14}\u{3}\u{14}\u{3}\u{14}\u{3}\u{14}\u{3}\u{15}\u{3}\u{15}" .
		    "\u{3}\u{16}\u{3}\u{16}\u{3}\u{17}\u{3}\u{17}\u{3}\u{17}\u{3}\u{18}" .
		    "\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}" .
		    "\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{3}\u{1A}\u{3}\u{1A}" .
		    "\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}" .
		    "\u{3}\u{1A}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}" .
		    "\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1B}\u{3}\u{1C}\u{3}\u{1C}" .
		    "\u{3}\u{1C}\u{3}\u{1C}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}" .
		    "\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1E}\u{3}\u{1E}" .
		    "\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}" .
		    "\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{1F}\u{3}\u{20}" .
		    "\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}\u{3}\u{20}" .
		    "\u{3}\u{20}\u{3}\u{20}\u{3}\u{21}\u{3}\u{21}\u{3}\u{21}\u{3}\u{21}" .
		    "\u{3}\u{21}\u{3}\u{21}\u{3}\u{21}\u{3}\u{22}\u{3}\u{22}\u{3}\u{23}" .
		    "\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}\u{3}\u{23}" .
		    "\u{3}\u{23}\u{3}\u{24}\u{3}\u{24}\u{3}\u{25}\u{3}\u{25}\u{3}\u{25}" .
		    "\u{3}\u{25}\u{3}\u{25}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}" .
		    "\u{3}\u{26}\u{3}\u{26}\u{3}\u{26}\u{3}\u{27}\u{3}\u{27}\u{3}\u{27}" .
		    "\u{3}\u{27}\u{3}\u{27}\u{3}\u{27}\u{3}\u{28}\u{7}\u{28}\u{13A}\u{A}" .
		    "\u{28}\u{C}\u{28}\u{E}\u{28}\u{13D}\u{B}\u{28}\u{3}\u{28}\u{3}\u{28}" .
		    "\u{3}\u{29}\u{3}\u{29}\u{3}\u{29}\u{3}\u{29}\u{3}\u{2A}\u{3}\u{2A}" .
		    "\u{7}\u{2A}\u{147}\u{A}\u{2A}\u{C}\u{2A}\u{E}\u{2A}\u{14A}\u{B}\u{2A}" .
		    "\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2A}" .
		    "\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2B}\u{3}\u{2B}\u{7}\u{2B}\u{156}\u{A}" .
		    "\u{2B}\u{C}\u{2B}\u{E}\u{2B}\u{159}\u{B}\u{2B}\u{3}\u{2B}\u{3}\u{2B}" .
		    "\u{3}\u{2B}\u{3}\u{2B}\u{3}\u{2B}\u{3}\u{2C}\u{3}\u{2C}\u{3}\u{2D}" .
		    "\u{3}\u{2D}\u{3}\u{2D}\u{7}\u{2D}\u{165}\u{A}\u{2D}\u{C}\u{2D}\u{E}" .
		    "\u{2D}\u{168}\u{B}\u{2D}\u{3}\u{2E}\u{3}\u{2E}\u{3}\u{2E}\u{3}\u{2E}" .
		    "\u{6}\u{2E}\u{16E}\u{A}\u{2E}\u{D}\u{2E}\u{E}\u{2E}\u{16F}\u{3}\u{2E}" .
		    "\u{3}\u{2E}\u{3}\u{2F}\u{6}\u{2F}\u{175}\u{A}\u{2F}\u{D}\u{2F}\u{E}" .
		    "\u{2F}\u{176}\u{3}\u{30}\u{3}\u{30}\u{3}\u{31}\u{3}\u{31}\u{5}\u{31}" .
		    "\u{17D}\u{A}\u{31}\u{3}\u{32}\u{5}\u{32}\u{180}\u{A}\u{32}\u{3}\u{32}" .
		    "\u{3}\u{32}\u{3}\u{33}\u{3}\u{33}\u{3}\u{13B}\u{2}\u{34}\u{3}\u{3}" .
		    "\u{5}\u{4}\u{7}\u{5}\u{9}\u{6}\u{B}\u{7}\u{D}\u{8}\u{F}\u{9}\u{11}" .
		    "\u{A}\u{13}\u{B}\u{15}\u{C}\u{17}\u{D}\u{19}\u{E}\u{1B}\u{F}\u{1D}" .
		    "\u{10}\u{1F}\u{11}\u{21}\u{12}\u{23}\u{13}\u{25}\u{14}\u{27}\u{15}" .
		    "\u{29}\u{16}\u{2B}\u{17}\u{2D}\u{18}\u{2F}\u{19}\u{31}\u{1A}\u{33}" .
		    "\u{1B}\u{35}\u{1C}\u{37}\u{1D}\u{39}\u{1E}\u{3B}\u{1F}\u{3D}\u{20}" .
		    "\u{3F}\u{21}\u{41}\u{22}\u{43}\u{23}\u{45}\u{24}\u{47}\u{25}\u{49}" .
		    "\u{26}\u{4B}\u{27}\u{4D}\u{28}\u{4F}\u{29}\u{51}\u{2A}\u{53}\u{2B}" .
		    "\u{55}\u{2C}\u{57}\u{2D}\u{59}\u{2E}\u{5B}\u{2F}\u{5D}\u{30}\u{5F}" .
		    "\u{2}\u{61}\u{2}\u{63}\u{2}\u{65}\u{2}\u{3}\u{2}\u{7}\u{5}\u{2}\u{25}" .
		    "\u{26}\u{32}\u{3B}\u{61}\u{61}\u{5}\u{2}\u{C}\u{C}\u{F}\u{F}\u{24}" .
		    "\u{24}\u{3}\u{2}\u{32}\u{3B}\u{3}\u{2}\u{43}\u{5C}\u{4}\u{2}\u{B}" .
		    "\u{B}\u{22}\u{22}\u{2}\u{18A}\u{2}\u{3}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{7}\u{3}\u{2}\u{2}\u{2}\u{2}\u{9}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{11}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{13}\u{3}\u{2}\u{2}\u{2}\u{2}\u{15}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{17}\u{3}\u{2}\u{2}\u{2}\u{2}\u{19}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{1B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{1F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{21}\u{3}\u{2}\u{2}\u{2}\u{2}\u{23}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{25}\u{3}\u{2}\u{2}\u{2}\u{2}\u{27}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{29}\u{3}\u{2}\u{2}\u{2}\u{2}\u{2B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{2}\u{2F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{31}\u{3}\u{2}\u{2}\u{2}\u{2}\u{33}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{35}\u{3}\u{2}\u{2}\u{2}\u{2}\u{37}\u{3}\u{2}\u{2}\u{2}\u{2}\u{39}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{3D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{41}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{43}\u{3}\u{2}\u{2}\u{2}\u{2}\u{45}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{2}\u{47}\u{3}\u{2}\u{2}\u{2}\u{2}\u{49}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{2}\u{4D}\u{3}\u{2}\u{2}\u{2}\u{2}" .
		    "\u{4F}\u{3}\u{2}\u{2}\u{2}\u{2}\u{51}\u{3}\u{2}\u{2}\u{2}\u{2}\u{53}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2}\u{55}\u{3}\u{2}\u{2}\u{2}\u{2}\u{57}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{2}\u{59}\u{3}\u{2}\u{2}\u{2}\u{2}\u{5B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{2}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{3}\u{67}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{5}\u{6E}\u{3}\u{2}\u{2}\u{2}\u{7}\u{79}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{9}\u{86}\u{3}\u{2}\u{2}\u{2}\u{B}\u{88}\u{3}\u{2}\u{2}\u{2}\u{D}" .
		    "\u{8B}\u{3}\u{2}\u{2}\u{2}\u{F}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{11}\u{92}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{13}\u{94}\u{3}\u{2}\u{2}\u{2}\u{15}\u{9E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{17}\u{A0}\u{3}\u{2}\u{2}\u{2}\u{19}\u{A2}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1B}\u{A4}\u{3}\u{2}\u{2}\u{2}\u{1D}\u{AC}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{1F}\u{B2}\u{3}\u{2}\u{2}\u{2}\u{21}\u{BC}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{23}\u{C0}\u{3}\u{2}\u{2}\u{2}\u{25}\u{C5}\u{3}\u{2}\u{2}\u{2}\u{27}" .
		    "\u{C8}\u{3}\u{2}\u{2}\u{2}\u{29}\u{CD}\u{3}\u{2}\u{2}\u{2}\u{2B}\u{CF}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2D}\u{D1}\u{3}\u{2}\u{2}\u{2}\u{2F}\u{D4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{31}\u{D8}\u{3}\u{2}\u{2}\u{2}\u{33}\u{DF}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{35}\u{E8}\u{3}\u{2}\u{2}\u{2}\u{37}\u{F1}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{39}\u{F5}\u{3}\u{2}\u{2}\u{2}\u{3B}\u{FD}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{3D}\u{102}\u{3}\u{2}\u{2}\u{2}\u{3F}\u{10A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{41}\u{113}\u{3}\u{2}\u{2}\u{2}\u{43}\u{11A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{45}\u{11C}\u{3}\u{2}\u{2}\u{2}\u{47}\u{124}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{49}\u{126}\u{3}\u{2}\u{2}\u{2}\u{4B}\u{12B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{4D}\u{132}\u{3}\u{2}\u{2}\u{2}\u{4F}\u{13B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{51}\u{140}\u{3}\u{2}\u{2}\u{2}\u{53}\u{144}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{55}\u{153}\u{3}\u{2}\u{2}\u{2}\u{57}\u{15F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{59}\u{161}\u{3}\u{2}\u{2}\u{2}\u{5B}\u{169}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{5D}\u{174}\u{3}\u{2}\u{2}\u{2}\u{5F}\u{178}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{61}\u{17C}\u{3}\u{2}\u{2}\u{2}\u{63}\u{17F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{65}\u{183}\u{3}\u{2}\u{2}\u{2}\u{67}\u{68}\u{7}\u{45}\u{2}\u{2}" .
		    "\u{68}\u{69}\u{7}\u{54}\u{2}\u{2}\u{69}\u{6A}\u{7}\u{47}\u{2}\u{2}" .
		    "\u{6A}\u{6B}\u{7}\u{43}\u{2}\u{2}\u{6B}\u{6C}\u{7}\u{56}\u{2}\u{2}" .
		    "\u{6C}\u{6D}\u{7}\u{47}\u{2}\u{2}\u{6D}\u{4}\u{3}\u{2}\u{2}\u{2}\u{6E}" .
		    "\u{6F}\u{7}\u{51}\u{2}\u{2}\u{6F}\u{70}\u{7}\u{54}\u{2}\u{2}\u{70}" .
		    "\u{71}\u{7}\u{22}\u{2}\u{2}\u{71}\u{72}\u{7}\u{54}\u{2}\u{2}\u{72}" .
		    "\u{73}\u{7}\u{47}\u{2}\u{2}\u{73}\u{74}\u{7}\u{52}\u{2}\u{2}\u{74}" .
		    "\u{75}\u{7}\u{4E}\u{2}\u{2}\u{75}\u{76}\u{7}\u{43}\u{2}\u{2}\u{76}" .
		    "\u{77}\u{7}\u{45}\u{2}\u{2}\u{77}\u{78}\u{7}\u{47}\u{2}\u{2}\u{78}" .
		    "\u{6}\u{3}\u{2}\u{2}\u{2}\u{79}\u{7A}\u{7}\u{72}\u{2}\u{2}\u{7A}\u{7B}" .
		    "\u{7}\u{63}\u{2}\u{2}\u{7B}\u{7C}\u{7}\u{65}\u{2}\u{2}\u{7C}\u{7D}" .
		    "\u{7}\u{6D}\u{2}\u{2}\u{7D}\u{7E}\u{7}\u{63}\u{2}\u{2}\u{7E}\u{7F}" .
		    "\u{7}\u{69}\u{2}\u{2}\u{7F}\u{80}\u{7}\u{67}\u{2}\u{2}\u{80}\u{81}" .
		    "\u{7}\u{22}\u{2}\u{2}\u{81}\u{82}\u{7}\u{64}\u{2}\u{2}\u{82}\u{83}" .
		    "\u{7}\u{71}\u{2}\u{2}\u{83}\u{84}\u{7}\u{66}\u{2}\u{2}\u{84}\u{85}" .
		    "\u{7}\u{7B}\u{2}\u{2}\u{85}\u{8}\u{3}\u{2}\u{2}\u{2}\u{86}\u{87}\u{7}" .
		    "\u{30}\u{2}\u{2}\u{87}\u{A}\u{3}\u{2}\u{2}\u{2}\u{88}\u{89}\u{7}\u{6B}" .
		    "\u{2}\u{2}\u{89}\u{8A}\u{7}\u{75}\u{2}\u{2}\u{8A}\u{C}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{8B}\u{8C}\u{7}\u{63}\u{2}\u{2}\u{8C}\u{8D}\u{7}\u{75}\u{2}" .
		    "\u{2}\u{8D}\u{E}\u{3}\u{2}\u{2}\u{2}\u{8E}\u{8F}\u{7}\u{47}\u{2}\u{2}" .
		    "\u{8F}\u{90}\u{7}\u{50}\u{2}\u{2}\u{90}\u{91}\u{7}\u{46}\u{2}\u{2}" .
		    "\u{91}\u{10}\u{3}\u{2}\u{2}\u{2}\u{92}\u{93}\u{7}\u{3D}\u{2}\u{2}" .
		    "\u{93}\u{12}\u{3}\u{2}\u{2}\u{2}\u{94}\u{95}\u{7}\u{72}\u{2}\u{2}" .
		    "\u{95}\u{96}\u{7}\u{74}\u{2}\u{2}\u{96}\u{97}\u{7}\u{71}\u{2}\u{2}" .
		    "\u{97}\u{98}\u{7}\u{65}\u{2}\u{2}\u{98}\u{99}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{99}\u{9A}\u{7}\u{66}\u{2}\u{2}\u{9A}\u{9B}\u{7}\u{77}\u{2}\u{2}" .
		    "\u{9B}\u{9C}\u{7}\u{74}\u{2}\u{2}\u{9C}\u{9D}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{9D}\u{14}\u{3}\u{2}\u{2}\u{2}\u{9E}\u{9F}\u{7}\u{2A}\u{2}\u{2}" .
		    "\u{9F}\u{16}\u{3}\u{2}\u{2}\u{2}\u{A0}\u{A1}\u{7}\u{2E}\u{2}\u{2}" .
		    "\u{A1}\u{18}\u{3}\u{2}\u{2}\u{2}\u{A2}\u{A3}\u{7}\u{2B}\u{2}\u{2}" .
		    "\u{A3}\u{1A}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{A5}\u{7}\u{66}\u{2}\u{2}" .
		    "\u{A5}\u{A6}\u{7}\u{67}\u{2}\u{2}\u{A6}\u{A7}\u{7}\u{65}\u{2}\u{2}" .
		    "\u{A7}\u{A8}\u{7}\u{6E}\u{2}\u{2}\u{A8}\u{A9}\u{7}\u{63}\u{2}\u{2}" .
		    "\u{A9}\u{AA}\u{7}\u{74}\u{2}\u{2}\u{AA}\u{AB}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{AB}\u{1C}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AD}\u{7}\u{64}\u{2}\u{2}" .
		    "\u{AD}\u{AE}\u{7}\u{67}\u{2}\u{2}\u{AE}\u{AF}\u{7}\u{69}\u{2}\u{2}" .
		    "\u{AF}\u{B0}\u{7}\u{6B}\u{2}\u{2}\u{B0}\u{B1}\u{7}\u{70}\u{2}\u{2}" .
		    "\u{B1}\u{1E}\u{3}\u{2}\u{2}\u{2}\u{B2}\u{B3}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{B3}\u{B4}\u{7}\u{7A}\u{2}\u{2}\u{B4}\u{B5}\u{7}\u{65}\u{2}\u{2}" .
		    "\u{B5}\u{B6}\u{7}\u{67}\u{2}\u{2}\u{B6}\u{B7}\u{7}\u{72}\u{2}\u{2}" .
		    "\u{B7}\u{B8}\u{7}\u{76}\u{2}\u{2}\u{B8}\u{B9}\u{7}\u{6B}\u{2}\u{2}" .
		    "\u{B9}\u{BA}\u{7}\u{71}\u{2}\u{2}\u{BA}\u{BB}\u{7}\u{70}\u{2}\u{2}" .
		    "\u{BB}\u{20}\u{3}\u{2}\u{2}\u{2}\u{BC}\u{BD}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{BD}\u{BE}\u{7}\u{70}\u{2}\u{2}\u{BE}\u{BF}\u{7}\u{66}\u{2}\u{2}" .
		    "\u{BF}\u{22}\u{3}\u{2}\u{2}\u{2}\u{C0}\u{C1}\u{7}\u{79}\u{2}\u{2}" .
		    "\u{C1}\u{C2}\u{7}\u{6A}\u{2}\u{2}\u{C2}\u{C3}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{C3}\u{C4}\u{7}\u{70}\u{2}\u{2}\u{C4}\u{24}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{C5}\u{C6}\u{7}\u{71}\u{2}\u{2}\u{C6}\u{C7}\u{7}\u{74}\u{2}\u{2}" .
		    "\u{C7}\u{26}\u{3}\u{2}\u{2}\u{2}\u{C8}\u{C9}\u{7}\u{76}\u{2}\u{2}" .
		    "\u{C9}\u{CA}\u{7}\u{6A}\u{2}\u{2}\u{CA}\u{CB}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{CB}\u{CC}\u{7}\u{70}\u{2}\u{2}\u{CC}\u{28}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{CD}\u{CE}\u{7}\u{3E}\u{2}\u{2}\u{CE}\u{2A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{CF}\u{D0}\u{7}\u{40}\u{2}\u{2}\u{D0}\u{2C}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D1}\u{D2}\u{7}\u{6B}\u{2}\u{2}\u{D2}\u{D3}\u{7}\u{70}\u{2}\u{2}" .
		    "\u{D3}\u{2E}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{D5}\u{7}\u{71}\u{2}\u{2}" .
		    "\u{D5}\u{D6}\u{7}\u{77}\u{2}\u{2}\u{D6}\u{D7}\u{7}\u{76}\u{2}\u{2}" .
		    "\u{D7}\u{30}\u{3}\u{2}\u{2}\u{2}\u{D8}\u{D9}\u{7}\u{6B}\u{2}\u{2}" .
		    "\u{D9}\u{DA}\u{7}\u{70}\u{2}\u{2}\u{DA}\u{DB}\u{7}\u{22}\u{2}\u{2}" .
		    "\u{DB}\u{DC}\u{7}\u{71}\u{2}\u{2}\u{DC}\u{DD}\u{7}\u{77}\u{2}\u{2}" .
		    "\u{DD}\u{DE}\u{7}\u{76}\u{2}\u{2}\u{DE}\u{32}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{DF}\u{E0}\u{7}\u{65}\u{2}\u{2}\u{E0}\u{E1}\u{7}\u{71}\u{2}\u{2}" .
		    "\u{E1}\u{E2}\u{7}\u{70}\u{2}\u{2}\u{E2}\u{E3}\u{7}\u{75}\u{2}\u{2}" .
		    "\u{E3}\u{E4}\u{7}\u{76}\u{2}\u{2}\u{E4}\u{E5}\u{7}\u{63}\u{2}\u{2}" .
		    "\u{E5}\u{E6}\u{7}\u{70}\u{2}\u{2}\u{E6}\u{E7}\u{7}\u{76}\u{2}\u{2}" .
		    "\u{E7}\u{34}\u{3}\u{2}\u{2}\u{2}\u{E8}\u{E9}\u{7}\u{70}\u{2}\u{2}" .
		    "\u{E9}\u{EA}\u{7}\u{71}\u{2}\u{2}\u{EA}\u{EB}\u{7}\u{76}\u{2}\u{2}" .
		    "\u{EB}\u{EC}\u{7}\u{22}\u{2}\u{2}\u{EC}\u{ED}\u{7}\u{70}\u{2}\u{2}" .
		    "\u{ED}\u{EE}\u{7}\u{77}\u{2}\u{2}\u{EE}\u{EF}\u{7}\u{6E}\u{2}\u{2}" .
		    "\u{EF}\u{F0}\u{7}\u{6E}\u{2}\u{2}\u{F0}\u{36}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{F1}\u{F2}\u{7}\u{74}\u{2}\u{2}\u{F2}\u{F3}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{F3}\u{F4}\u{7}\u{68}\u{2}\u{2}\u{F4}\u{38}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{F5}\u{F6}\u{7}\u{66}\u{2}\u{2}\u{F6}\u{F7}\u{7}\u{67}\u{2}\u{2}" .
		    "\u{F7}\u{F8}\u{7}\u{68}\u{2}\u{2}\u{F8}\u{F9}\u{7}\u{63}\u{2}\u{2}" .
		    "\u{F9}\u{FA}\u{7}\u{77}\u{2}\u{2}\u{FA}\u{FB}\u{7}\u{6E}\u{2}\u{2}" .
		    "\u{FB}\u{FC}\u{7}\u{76}\u{2}\u{2}\u{FC}\u{3A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{FD}\u{FE}\u{7}\u{70}\u{2}\u{2}\u{FE}\u{FF}\u{7}\u{77}\u{2}\u{2}" .
		    "\u{FF}\u{100}\u{7}\u{6E}\u{2}\u{2}\u{100}\u{101}\u{7}\u{6E}\u{2}\u{2}" .
		    "\u{101}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{102}\u{103}\u{7}\u{6B}\u{2}\u{2}" .
		    "\u{103}\u{104}\u{7}\u{70}\u{2}\u{2}\u{104}\u{105}\u{7}\u{76}\u{2}" .
		    "\u{2}\u{105}\u{106}\u{7}\u{67}\u{2}\u{2}\u{106}\u{107}\u{7}\u{69}" .
		    "\u{2}\u{2}\u{107}\u{108}\u{7}\u{67}\u{2}\u{2}\u{108}\u{109}\u{7}\u{74}" .
		    "\u{2}\u{2}\u{109}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{10A}\u{10B}\u{7}\u{78}" .
		    "\u{2}\u{2}\u{10B}\u{10C}\u{7}\u{63}\u{2}\u{2}\u{10C}\u{10D}\u{7}\u{74}" .
		    "\u{2}\u{2}\u{10D}\u{10E}\u{7}\u{65}\u{2}\u{2}\u{10E}\u{10F}\u{7}\u{6A}" .
		    "\u{2}\u{2}\u{10F}\u{110}\u{7}\u{63}\u{2}\u{2}\u{110}\u{111}\u{7}\u{74}" .
		    "\u{2}\u{2}\u{111}\u{112}\u{7}\u{34}\u{2}\u{2}\u{112}\u{40}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{113}\u{114}\u{7}\u{70}\u{2}\u{2}\u{114}\u{115}\u{7}\u{77}" .
		    "\u{2}\u{2}\u{115}\u{116}\u{7}\u{6F}\u{2}\u{2}\u{116}\u{117}\u{7}\u{64}" .
		    "\u{2}\u{2}\u{117}\u{118}\u{7}\u{67}\u{2}\u{2}\u{118}\u{119}\u{7}\u{74}" .
		    "\u{2}\u{2}\u{119}\u{42}\u{3}\u{2}\u{2}\u{2}\u{11A}\u{11B}\u{7}\u{43}" .
		    "\u{2}\u{2}\u{11B}\u{44}\u{3}\u{2}\u{2}\u{2}\u{11C}\u{11D}\u{7}\u{44}" .
		    "\u{2}\u{2}\u{11D}\u{11E}\u{7}\u{51}\u{2}\u{2}\u{11E}\u{11F}\u{7}\u{51}" .
		    "\u{2}\u{2}\u{11F}\u{120}\u{7}\u{4E}\u{2}\u{2}\u{120}\u{121}\u{7}\u{47}" .
		    "\u{2}\u{2}\u{121}\u{122}\u{7}\u{43}\u{2}\u{2}\u{122}\u{123}\u{7}\u{50}" .
		    "\u{2}\u{2}\u{123}\u{46}\u{3}\u{2}\u{2}\u{2}\u{124}\u{125}\u{7}\u{45}" .
		    "\u{2}\u{2}\u{125}\u{48}\u{3}\u{2}\u{2}\u{2}\u{126}\u{127}\u{7}\u{45}" .
		    "\u{2}\u{2}\u{127}\u{128}\u{7}\u{4A}\u{2}\u{2}\u{128}\u{129}\u{7}\u{43}" .
		    "\u{2}\u{2}\u{129}\u{12A}\u{7}\u{54}\u{2}\u{2}\u{12A}\u{4A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{12B}\u{12C}\u{7}\u{50}\u{2}\u{2}\u{12C}\u{12D}\u{7}\u{57}" .
		    "\u{2}\u{2}\u{12D}\u{12E}\u{7}\u{4F}\u{2}\u{2}\u{12E}\u{12F}\u{7}\u{44}" .
		    "\u{2}\u{2}\u{12F}\u{130}\u{7}\u{47}\u{2}\u{2}\u{130}\u{131}\u{7}\u{54}" .
		    "\u{2}\u{2}\u{131}\u{4C}\u{3}\u{2}\u{2}\u{2}\u{132}\u{133}\u{7}\u{59}" .
		    "\u{2}\u{2}\u{133}\u{134}\u{7}\u{4A}\u{2}\u{2}\u{134}\u{135}\u{7}\u{4B}" .
		    "\u{2}\u{2}\u{135}\u{136}\u{7}\u{4E}\u{2}\u{2}\u{136}\u{137}\u{7}\u{47}" .
		    "\u{2}\u{2}\u{137}\u{4E}\u{3}\u{2}\u{2}\u{2}\u{138}\u{13A}\u{B}\u{2}" .
		    "\u{2}\u{2}\u{139}\u{138}\u{3}\u{2}\u{2}\u{2}\u{13A}\u{13D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{13B}\u{13C}\u{3}\u{2}\u{2}\u{2}\u{13B}\u{139}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{13C}\u{13E}\u{3}\u{2}\u{2}\u{2}\u{13D}\u{13B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{13E}\u{13F}\u{5}\u{63}\u{32}\u{2}\u{13F}\u{50}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{140}\u{141}\u{7}\u{29}\u{2}\u{2}\u{141}\u{142}\u{5}\u{59}" .
		    "\u{2D}\u{2}\u{142}\u{143}\u{7}\u{29}\u{2}\u{2}\u{143}\u{52}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{144}\u{148}\u{7}\u{27}\u{2}\u{2}\u{145}\u{147}\u{5}\u{65}" .
		    "\u{33}\u{2}\u{146}\u{145}\u{3}\u{2}\u{2}\u{2}\u{147}\u{14A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{148}\u{146}\u{3}\u{2}\u{2}\u{2}\u{148}\u{149}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{149}\u{14B}\u{3}\u{2}\u{2}\u{2}\u{14A}\u{148}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{14B}\u{14C}\u{7}\u{74}\u{2}\u{2}\u{14C}\u{14D}\u{7}\u{71}" .
		    "\u{2}\u{2}\u{14D}\u{14E}\u{7}\u{79}\u{2}\u{2}\u{14E}\u{14F}\u{7}\u{76}" .
		    "\u{2}\u{2}\u{14F}\u{150}\u{7}\u{7B}\u{2}\u{2}\u{150}\u{151}\u{7}\u{72}" .
		    "\u{2}\u{2}\u{151}\u{152}\u{7}\u{67}\u{2}\u{2}\u{152}\u{54}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{153}\u{157}\u{7}\u{27}\u{2}\u{2}\u{154}\u{156}\u{5}\u{65}" .
		    "\u{33}\u{2}\u{155}\u{154}\u{3}\u{2}\u{2}\u{2}\u{156}\u{159}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{157}\u{155}\u{3}\u{2}\u{2}\u{2}\u{157}\u{158}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{158}\u{15A}\u{3}\u{2}\u{2}\u{2}\u{159}\u{157}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{15A}\u{15B}\u{7}\u{76}\u{2}\u{2}\u{15B}\u{15C}\u{7}\u{7B}" .
		    "\u{2}\u{2}\u{15C}\u{15D}\u{7}\u{72}\u{2}\u{2}\u{15D}\u{15E}\u{7}\u{67}" .
		    "\u{2}\u{2}\u{15E}\u{56}\u{3}\u{2}\u{2}\u{2}\u{15F}\u{160}\u{7}\u{61}" .
		    "\u{2}\u{2}\u{160}\u{58}\u{3}\u{2}\u{2}\u{2}\u{161}\u{166}\u{5}\u{5F}" .
		    "\u{30}\u{2}\u{162}\u{165}\u{5}\u{5F}\u{30}\u{2}\u{163}\u{165}\u{9}" .
		    "\u{2}\u{2}\u{2}\u{164}\u{162}\u{3}\u{2}\u{2}\u{2}\u{164}\u{163}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{165}\u{168}\u{3}\u{2}\u{2}\u{2}\u{166}\u{164}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{166}\u{167}\u{3}\u{2}\u{2}\u{2}\u{167}\u{5A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{168}\u{166}\u{3}\u{2}\u{2}\u{2}\u{169}\u{16D}\u{7}" .
		    "\u{24}\u{2}\u{2}\u{16A}\u{16E}\u{A}\u{3}\u{2}\u{2}\u{16B}\u{16C}\u{7}" .
		    "\u{24}\u{2}\u{2}\u{16C}\u{16E}\u{7}\u{24}\u{2}\u{2}\u{16D}\u{16A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{16D}\u{16B}\u{3}\u{2}\u{2}\u{2}\u{16E}\u{16F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{16F}\u{16D}\u{3}\u{2}\u{2}\u{2}\u{16F}\u{170}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{170}\u{171}\u{3}\u{2}\u{2}\u{2}\u{171}\u{172}" .
		    "\u{7}\u{24}\u{2}\u{2}\u{172}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{173}\u{175}" .
		    "\u{9}\u{4}\u{2}\u{2}\u{174}\u{173}\u{3}\u{2}\u{2}\u{2}\u{175}\u{176}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{176}\u{174}\u{3}\u{2}\u{2}\u{2}\u{176}\u{177}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{177}\u{5E}\u{3}\u{2}\u{2}\u{2}\u{178}\u{179}" .
		    "\u{9}\u{5}\u{2}\u{2}\u{179}\u{60}\u{3}\u{2}\u{2}\u{2}\u{17A}\u{17D}" .
		    "\u{5}\u{63}\u{32}\u{2}\u{17B}\u{17D}\u{7}\u{2}\u{2}\u{3}\u{17C}\u{17A}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{17C}\u{17B}\u{3}\u{2}\u{2}\u{2}\u{17D}\u{62}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{17E}\u{180}\u{7}\u{F}\u{2}\u{2}\u{17F}\u{17E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{17F}\u{180}\u{3}\u{2}\u{2}\u{2}\u{180}\u{181}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{181}\u{182}\u{7}\u{C}\u{2}\u{2}\u{182}\u{64}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{183}\u{184}\u{9}\u{6}\u{2}\u{2}\u{184}\u{66}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{D}\u{2}\u{13B}\u{148}\u{157}\u{164}\u{166}" .
		    "\u{16D}\u{16F}\u{176}\u{17C}\u{17F}\u{2}";

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
			return 'Plsql.g4';
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