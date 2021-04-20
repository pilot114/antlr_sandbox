<?php

/*
 * Generated from Plsql.g4 by ANTLR 4.9
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

	final class PlsqlParser extends Parser
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

		public const RULE_plsql = 0, RULE_package_obj_body = 1, RULE_procedure_body = 2, 
               RULE_body = 3, RULE_exception_handler = 4, RULE_exception_name = 5, 
               RULE_seq_of_statements = 6, RULE_statement = 7, RULE_label_name = 8, 
               RULE_label_declaration = 9, RULE_seq_of_declare_specs = 10, 
               RULE_parameter = 11, RULE_variable_declaration = 12, RULE_type_spec = 13, 
               RULE_default_value_part = 14, RULE_datatype = 15, RULE_parameter_name = 16, 
               RULE_package_name = 17, RULE_type_name = 18, RULE_schema_object_name = 19, 
               RULE_identifier = 20, RULE_char_set_name = 21, RULE_id_expression = 22, 
               RULE_regular_id = 23;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'plsql', 'package_obj_body', 'procedure_body', 'body', 'exception_handler', 
			'exception_name', 'seq_of_statements', 'statement', 'label_name', 'label_declaration', 
			'seq_of_declare_specs', 'parameter', 'variable_declaration', 'type_spec', 
			'default_value_part', 'datatype', 'parameter_name', 'package_name', 'type_name', 
			'schema_object_name', 'identifier', 'char_set_name', 'id_expression', 
			'regular_id'
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
		    "\u{3}\u{30}\u{FA}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}\u{3}\u{2}" .
		    "\u{3}\u{2}\u{5}\u{2}\u{35}\u{A}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}" .
		    "\u{3}\u{2}\u{5}\u{2}\u{3B}\u{A}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}" .
		    "\u{7}\u{2}\u{40}\u{A}\u{2}\u{C}\u{2}\u{E}\u{2}\u{43}\u{B}\u{2}\u{3}" .
		    "\u{2}\u{3}\u{2}\u{5}\u{2}\u{47}\u{A}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{3}\u{6}\u{3}\u{4C}\u{A}\u{3}\u{D}\u{3}\u{E}\u{3}\u{4D}\u{3}\u{4}" .
		    "\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{7}\u{4}\u{56}" .
		    "\u{A}\u{4}\u{C}\u{4}\u{E}\u{4}\u{59}\u{B}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{5}\u{4}\u{5D}\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}\u{5}\u{4}\u{61}\u{A}" .
		    "\u{4}\u{3}\u{4}\u{5}\u{4}\u{64}\u{A}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}" .
		    "\u{4}\u{3}\u{4}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{6}\u{5}" .
		    "\u{6E}\u{A}\u{5}\u{D}\u{5}\u{E}\u{5}\u{6F}\u{5}\u{5}\u{72}\u{A}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{5}\u{5}\u{76}\u{A}\u{5}\u{3}\u{6}\u{3}\u{6}" .
		    "\u{3}\u{6}\u{3}\u{6}\u{7}\u{6}\u{7C}\u{A}\u{6}\u{C}\u{6}\u{E}\u{6}" .
		    "\u{7F}\u{B}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{7}\u{3}\u{7}" .
		    "\u{3}\u{7}\u{7}\u{7}\u{87}\u{A}\u{7}\u{C}\u{7}\u{E}\u{7}\u{8A}\u{B}" .
		    "\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{6}\u{8}\u{90}\u{A}" .
		    "\u{8}\u{D}\u{8}\u{E}\u{8}\u{91}\u{3}\u{9}\u{6}\u{9}\u{95}\u{A}\u{9}" .
		    "\u{D}\u{9}\u{E}\u{9}\u{96}\u{3}\u{A}\u{3}\u{A}\u{3}\u{B}\u{3}\u{B}" .
		    "\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{6}\u{C}\u{A2}" .
		    "\u{A}\u{C}\u{D}\u{C}\u{E}\u{C}\u{A3}\u{3}\u{D}\u{3}\u{D}\u{7}\u{D}" .
		    "\u{A8}\u{A}\u{D}\u{C}\u{D}\u{E}\u{D}\u{AB}\u{B}\u{D}\u{3}\u{D}\u{5}" .
		    "\u{D}\u{AE}\u{A}\u{D}\u{3}\u{D}\u{5}\u{D}\u{B1}\u{A}\u{D}\u{3}\u{E}" .
		    "\u{3}\u{E}\u{5}\u{E}\u{B5}\u{A}\u{E}\u{3}\u{E}\u{3}\u{E}\u{5}\u{E}" .
		    "\u{B9}\u{A}\u{E}\u{3}\u{E}\u{5}\u{E}\u{BC}\u{A}\u{E}\u{3}\u{E}\u{3}" .
		    "\u{E}\u{3}\u{F}\u{3}\u{F}\u{5}\u{F}\u{C2}\u{A}\u{F}\u{3}\u{F}\u{3}" .
		    "\u{F}\u{5}\u{F}\u{C6}\u{A}\u{F}\u{5}\u{F}\u{C8}\u{A}\u{F}\u{3}\u{10}" .
		    "\u{3}\u{10}\u{3}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}" .
		    "\u{3}\u{11}\u{5}\u{11}\u{D2}\u{A}\u{11}\u{3}\u{11}\u{3}\u{11}\u{5}" .
		    "\u{11}\u{D6}\u{A}\u{11}\u{3}\u{12}\u{3}\u{12}\u{3}\u{13}\u{3}\u{13}" .
		    "\u{3}\u{14}\u{3}\u{14}\u{3}\u{14}\u{7}\u{14}\u{DF}\u{A}\u{14}\u{C}" .
		    "\u{14}\u{E}\u{14}\u{E2}\u{B}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{16}" .
		    "\u{3}\u{16}\u{5}\u{16}\u{E8}\u{A}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}" .
		    "\u{17}\u{3}\u{17}\u{3}\u{17}\u{7}\u{17}\u{EF}\u{A}\u{17}\u{C}\u{17}" .
		    "\u{E}\u{17}\u{F2}\u{B}\u{17}\u{3}\u{18}\u{3}\u{18}\u{5}\u{18}\u{F6}" .
		    "\u{A}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}\u{19}\u{2}\u{2}\u{1A}\u{2}" .
		    "\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}\u{16}\u{18}\u{1A}" .
		    "\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}\u{28}\u{2A}\u{2C}\u{2E}\u{30}" .
		    "\u{2}\u{8}\u{3}\u{2}\u{7}\u{8}\u{3}\u{3}\u{A}\u{A}\u{3}\u{2}\u{18}" .
		    "\u{1A}\u{3}\u{2}\u{2B}\u{2C}\u{5}\u{2}\u{1F}\u{1F}\u{2A}\u{2A}\u{30}" .
		    "\u{30}\u{4}\u{2}\u{23}\u{28}\u{2E}\u{2E}\u{2}\u{104}\u{2}\u{32}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{4}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{6}\u{4F}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{8}\u{69}\u{3}\u{2}\u{2}\u{2}\u{A}\u{77}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{C}\u{83}\u{3}\u{2}\u{2}\u{2}\u{E}\u{8F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{10}\u{94}\u{3}\u{2}\u{2}\u{2}\u{12}\u{98}\u{3}\u{2}\u{2}\u{2}\u{14}" .
		    "\u{9A}\u{3}\u{2}\u{2}\u{2}\u{16}\u{A1}\u{3}\u{2}\u{2}\u{2}\u{18}\u{A5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1A}\u{B2}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{C7}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{1E}\u{C9}\u{3}\u{2}\u{2}\u{2}\u{20}\u{D5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{22}\u{D7}\u{3}\u{2}\u{2}\u{2}\u{24}\u{D9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{26}\u{DB}\u{3}\u{2}\u{2}\u{2}\u{28}\u{E3}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2A}\u{E7}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{EB}\u{3}\u{2}\u{2}\u{2}\u{2E}" .
		    "\u{F5}\u{3}\u{2}\u{2}\u{2}\u{30}\u{F7}\u{3}\u{2}\u{2}\u{2}\u{32}\u{34}" .
		    "\u{7}\u{3}\u{2}\u{2}\u{33}\u{35}\u{7}\u{4}\u{2}\u{2}\u{34}\u{33}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{34}\u{35}\u{3}\u{2}\u{2}\u{2}\u{35}\u{36}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{36}\u{3A}\u{7}\u{5}\u{2}\u{2}\u{37}\u{38}\u{5}\u{28}" .
		    "\u{15}\u{2}\u{38}\u{39}\u{7}\u{6}\u{2}\u{2}\u{39}\u{3B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{3A}\u{37}\u{3}\u{2}\u{2}\u{2}\u{3A}\u{3B}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{3B}\u{3C}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{3D}\u{5}\u{24}\u{13}" .
		    "\u{2}\u{3D}\u{41}\u{9}\u{2}\u{2}\u{2}\u{3E}\u{40}\u{5}\u{4}\u{3}\u{2}" .
		    "\u{3F}\u{3E}\u{3}\u{2}\u{2}\u{2}\u{40}\u{43}\u{3}\u{2}\u{2}\u{2}\u{41}" .
		    "\u{3F}\u{3}\u{2}\u{2}\u{2}\u{41}\u{42}\u{3}\u{2}\u{2}\u{2}\u{42}\u{44}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{43}\u{41}\u{3}\u{2}\u{2}\u{2}\u{44}\u{46}\u{7}" .
		    "\u{9}\u{2}\u{2}\u{45}\u{47}\u{5}\u{24}\u{13}\u{2}\u{46}\u{45}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{46}\u{47}\u{3}\u{2}\u{2}\u{2}\u{47}\u{48}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{48}\u{49}\u{7}\u{A}\u{2}\u{2}\u{49}\u{3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4A}\u{4C}\u{5}\u{6}\u{4}\u{2}\u{4B}\u{4A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{4C}\u{4D}\u{3}\u{2}\u{2}\u{2}\u{4D}\u{4B}\u{3}\u{2}\u{2}\u{2}\u{4D}" .
		    "\u{4E}\u{3}\u{2}\u{2}\u{2}\u{4E}\u{5}\u{3}\u{2}\u{2}\u{2}\u{4F}\u{50}" .
		    "\u{7}\u{B}\u{2}\u{2}\u{50}\u{5C}\u{5}\u{2A}\u{16}\u{2}\u{51}\u{52}" .
		    "\u{7}\u{C}\u{2}\u{2}\u{52}\u{57}\u{5}\u{18}\u{D}\u{2}\u{53}\u{54}" .
		    "\u{7}\u{D}\u{2}\u{2}\u{54}\u{56}\u{5}\u{18}\u{D}\u{2}\u{55}\u{53}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{56}\u{59}\u{3}\u{2}\u{2}\u{2}\u{57}\u{55}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{57}\u{58}\u{3}\u{2}\u{2}\u{2}\u{58}\u{5A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{59}\u{57}\u{3}\u{2}\u{2}\u{2}\u{5A}\u{5B}\u{7}\u{E}\u{2}" .
		    "\u{2}\u{5B}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{51}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{5C}\u{5D}\u{3}\u{2}\u{2}\u{2}\u{5D}\u{5E}\u{3}\u{2}\u{2}\u{2}\u{5E}" .
		    "\u{60}\u{9}\u{2}\u{2}\u{2}\u{5F}\u{61}\u{7}\u{F}\u{2}\u{2}\u{60}\u{5F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{60}\u{61}\u{3}\u{2}\u{2}\u{2}\u{61}\u{63}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{62}\u{64}\u{5}\u{16}\u{C}\u{2}\u{63}\u{62}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{63}\u{64}\u{3}\u{2}\u{2}\u{2}\u{64}\u{65}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{65}\u{66}\u{5}\u{8}\u{5}\u{2}\u{66}\u{67}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{67}\u{68}\u{7}\u{A}\u{2}\u{2}\u{68}\u{7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{69}\u{6A}\u{7}\u{10}\u{2}\u{2}\u{6A}\u{71}\u{5}\u{E}\u{8}\u{2}" .
		    "\u{6B}\u{6D}\u{7}\u{11}\u{2}\u{2}\u{6C}\u{6E}\u{5}\u{A}\u{6}\u{2}" .
		    "\u{6D}\u{6C}\u{3}\u{2}\u{2}\u{2}\u{6E}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{6F}" .
		    "\u{6D}\u{3}\u{2}\u{2}\u{2}\u{6F}\u{70}\u{3}\u{2}\u{2}\u{2}\u{70}\u{72}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{71}\u{6B}\u{3}\u{2}\u{2}\u{2}\u{71}\u{72}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{72}\u{73}\u{3}\u{2}\u{2}\u{2}\u{73}\u{75}\u{7}\u{12}" .
		    "\u{2}\u{2}\u{74}\u{76}\u{5}\u{12}\u{A}\u{2}\u{75}\u{74}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{75}\u{76}\u{3}\u{2}\u{2}\u{2}\u{76}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{77}\u{78}\u{7}\u{13}\u{2}\u{2}\u{78}\u{7D}\u{5}\u{C}\u{7}" .
		    "\u{2}\u{79}\u{7A}\u{7}\u{14}\u{2}\u{2}\u{7A}\u{7C}\u{5}\u{C}\u{7}" .
		    "\u{2}\u{7B}\u{79}\u{3}\u{2}\u{2}\u{2}\u{7C}\u{7F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{7D}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{7D}\u{7E}\u{3}\u{2}\u{2}\u{2}\u{7E}" .
		    "\u{80}\u{3}\u{2}\u{2}\u{2}\u{7F}\u{7D}\u{3}\u{2}\u{2}\u{2}\u{80}\u{81}" .
		    "\u{7}\u{15}\u{2}\u{2}\u{81}\u{82}\u{5}\u{E}\u{8}\u{2}\u{82}\u{B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{83}\u{88}\u{5}\u{2A}\u{16}\u{2}\u{84}\u{85}\u{7}" .
		    "\u{6}\u{2}\u{2}\u{85}\u{87}\u{5}\u{2E}\u{18}\u{2}\u{86}\u{84}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{87}\u{8A}\u{3}\u{2}\u{2}\u{2}\u{88}\u{86}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{88}\u{89}\u{3}\u{2}\u{2}\u{2}\u{89}\u{D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{8A}\u{88}\u{3}\u{2}\u{2}\u{2}\u{8B}\u{8C}\u{5}\u{10}\u{9}" .
		    "\u{2}\u{8C}\u{8D}\u{9}\u{3}\u{2}\u{2}\u{8D}\u{90}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{8E}\u{90}\u{5}\u{14}\u{B}\u{2}\u{8F}\u{8B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{8F}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{90}\u{91}\u{3}\u{2}\u{2}\u{2}\u{91}" .
		    "\u{8F}\u{3}\u{2}\u{2}\u{2}\u{91}\u{92}\u{3}\u{2}\u{2}\u{2}\u{92}\u{F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{93}\u{95}\u{7}\u{29}\u{2}\u{2}\u{94}\u{93}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{95}\u{96}\u{3}\u{2}\u{2}\u{2}\u{96}\u{94}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{96}\u{97}\u{3}\u{2}\u{2}\u{2}\u{97}\u{11}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{98}\u{99}\u{5}\u{2E}\u{18}\u{2}\u{99}\u{13}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{9A}\u{9B}\u{7}\u{16}\u{2}\u{2}\u{9B}\u{9C}\u{7}\u{16}" .
		    "\u{2}\u{2}\u{9C}\u{9D}\u{5}\u{12}\u{A}\u{2}\u{9D}\u{9E}\u{7}\u{17}" .
		    "\u{2}\u{2}\u{9E}\u{9F}\u{7}\u{17}\u{2}\u{2}\u{9F}\u{15}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A0}\u{A2}\u{5}\u{1A}\u{E}\u{2}\u{A1}\u{A0}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A2}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A1}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{A3}\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{17}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{A5}\u{A9}\u{5}\u{22}\u{12}\u{2}\u{A6}\u{A8}\u{9}\u{4}\u{2}\u{2}" .
		    "\u{A7}\u{A6}\u{3}\u{2}\u{2}\u{2}\u{A8}\u{AB}\u{3}\u{2}\u{2}\u{2}\u{A9}" .
		    "\u{A7}\u{3}\u{2}\u{2}\u{2}\u{A9}\u{AA}\u{3}\u{2}\u{2}\u{2}\u{AA}\u{AD}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{AB}\u{A9}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AE}\u{5}" .
		    "\u{1C}\u{F}\u{2}\u{AD}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{AD}\u{AE}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{AE}\u{B0}\u{3}\u{2}\u{2}\u{2}\u{AF}\u{B1}\u{5}\u{1E}" .
		    "\u{10}\u{2}\u{B0}\u{AF}\u{3}\u{2}\u{2}\u{2}\u{B0}\u{B1}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B1}\u{19}\u{3}\u{2}\u{2}\u{2}\u{B2}\u{B4}\u{5}\u{2A}" .
		    "\u{16}\u{2}\u{B3}\u{B5}\u{7}\u{1B}\u{2}\u{2}\u{B4}\u{B3}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B4}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{B5}\u{B6}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{B6}\u{B8}\u{5}\u{1C}\u{F}\u{2}\u{B7}\u{B9}\u{7}\u{1C}\u{2}" .
		    "\u{2}\u{B8}\u{B7}\u{3}\u{2}\u{2}\u{2}\u{B8}\u{B9}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{B9}\u{BB}\u{3}\u{2}\u{2}\u{2}\u{BA}\u{BC}\u{5}\u{1E}\u{10}\u{2}" .
		    "\u{BB}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{BB}\u{BC}\u{3}\u{2}\u{2}\u{2}\u{BC}" .
		    "\u{BD}\u{3}\u{2}\u{2}\u{2}\u{BD}\u{BE}\u{7}\u{A}\u{2}\u{2}\u{BE}\u{1B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{BF}\u{C8}\u{5}\u{20}\u{11}\u{2}\u{C0}\u{C2}" .
		    "\u{7}\u{1D}\u{2}\u{2}\u{C1}\u{C0}\u{3}\u{2}\u{2}\u{2}\u{C1}\u{C2}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C2}\u{C3}\u{3}\u{2}\u{2}\u{2}\u{C3}\u{C5}\u{5}" .
		    "\u{26}\u{14}\u{2}\u{C4}\u{C6}\u{9}\u{5}\u{2}\u{2}\u{C5}\u{C4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{C5}\u{C6}\u{3}\u{2}\u{2}\u{2}\u{C6}\u{C8}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{C7}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{C7}\u{C1}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{C8}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{C9}\u{CA}\u{7}\u{1E}\u{2}" .
		    "\u{2}\u{CA}\u{CB}\u{9}\u{6}\u{2}\u{2}\u{CB}\u{1F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{CC}\u{D6}\u{7}\u{20}\u{2}\u{2}\u{CD}\u{D1}\u{7}\u{21}\u{2}\u{2}" .
		    "\u{CE}\u{CF}\u{7}\u{C}\u{2}\u{2}\u{CF}\u{D0}\u{7}\u{30}\u{2}\u{2}" .
		    "\u{D0}\u{D2}\u{7}\u{E}\u{2}\u{2}\u{D1}\u{CE}\u{3}\u{2}\u{2}\u{2}\u{D1}" .
		    "\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D6}\u{3}\u{2}\u{2}\u{2}\u{D3}\u{D6}" .
		    "\u{7}\u{22}\u{2}\u{2}\u{D4}\u{D6}\u{7}\u{1F}\u{2}\u{2}\u{D5}\u{CC}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{D5}\u{CD}\u{3}\u{2}\u{2}\u{2}\u{D5}\u{D3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{D5}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{D6}\u{21}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{D7}\u{D8}\u{5}\u{2A}\u{16}\u{2}\u{D8}\u{23}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{D9}\u{DA}\u{5}\u{2A}\u{16}\u{2}\u{DA}\u{25}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{DB}\u{E0}\u{5}\u{2E}\u{18}\u{2}\u{DC}\u{DD}\u{7}\u{6}" .
		    "\u{2}\u{2}\u{DD}\u{DF}\u{5}\u{2E}\u{18}\u{2}\u{DE}\u{DC}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{DF}\u{E2}\u{3}\u{2}\u{2}\u{2}\u{E0}\u{DE}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E0}\u{E1}\u{3}\u{2}\u{2}\u{2}\u{E1}\u{27}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E2}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{E3}\u{E4}\u{5}\u{2E}\u{18}\u{2}" .
		    "\u{E4}\u{29}\u{3}\u{2}\u{2}\u{2}\u{E5}\u{E6}\u{7}\u{2D}\u{2}\u{2}" .
		    "\u{E6}\u{E8}\u{5}\u{2C}\u{17}\u{2}\u{E7}\u{E5}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E7}\u{E8}\u{3}\u{2}\u{2}\u{2}\u{E8}\u{E9}\u{3}\u{2}\u{2}\u{2}\u{E9}" .
		    "\u{EA}\u{5}\u{2E}\u{18}\u{2}\u{EA}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{EB}" .
		    "\u{F0}\u{5}\u{2E}\u{18}\u{2}\u{EC}\u{ED}\u{7}\u{6}\u{2}\u{2}\u{ED}" .
		    "\u{EF}\u{5}\u{2E}\u{18}\u{2}\u{EE}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{EF}" .
		    "\u{F2}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{EE}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{F1}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F1}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{F2}\u{F0}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F3}\u{F6}\u{5}\u{30}\u{19}\u{2}\u{F4}\u{F6}\u{7}" .
		    "\u{2F}\u{2}\u{2}\u{F5}\u{F3}\u{3}\u{2}\u{2}\u{2}\u{F5}\u{F4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F6}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{F7}\u{F8}\u{9}\u{7}" .
		    "\u{2}\u{2}\u{F8}\u{31}\u{3}\u{2}\u{2}\u{2}\u{23}\u{34}\u{3A}\u{41}" .
		    "\u{46}\u{4D}\u{57}\u{5C}\u{60}\u{63}\u{6F}\u{71}\u{75}\u{7D}\u{88}" .
		    "\u{8F}\u{91}\u{96}\u{A3}\u{A9}\u{AD}\u{B0}\u{B4}\u{B8}\u{BB}\u{C1}" .
		    "\u{C5}\u{C7}\u{D1}\u{D5}\u{E0}\u{E7}\u{F0}\u{F5}";

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
			return "Plsql.g4";
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
		public function plsql() : Context\PlsqlContext
		{
		    $localContext = new Context\PlsqlContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_plsql);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(48);
		        $this->match(self::T__0);
		        $this->setState(50);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__1) {
		        	$this->setState(49);
		        	$this->match(self::T__1);
		        }
		        $this->setState(52);
		        $this->match(self::T__2);
		        $this->setState(56);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		            case 1:
		        	    $this->setState(53);
		        	    $this->schema_object_name();
		        	    $this->setState(54);
		        	    $this->match(self::T__3);
		        	break;
		        }
		        $this->setState(58);
		        $this->package_name();
		        $this->setState(59);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__4 || $_la === self::T__5)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(63);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__8) {
		        	$this->setState(60);
		        	$this->package_obj_body();
		        	$this->setState(65);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(66);
		        $this->match(self::T__6);
		        $this->setState(68);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__32) | (1 << self::T__33) | (1 << self::T__34) | (1 << self::T__35) | (1 << self::T__36) | (1 << self::T__37) | (1 << self::INTRODUCER) | (1 << self::REGULAR_ID) | (1 << self::DELIMITED_ID))) !== 0)) {
		        	$this->setState(67);
		        	$this->package_name();
		        }
		        $this->setState(70);
		        $this->match(self::T__7);
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
		public function package_obj_body() : Context\Package_obj_bodyContext
		{
		    $localContext = new Context\Package_obj_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_package_obj_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(73); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(72);
		        		$this->procedure_body();
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(75); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx);
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
		public function procedure_body() : Context\Procedure_bodyContext
		{
		    $localContext = new Context\Procedure_bodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_procedure_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(77);
		        $this->match(self::T__8);
		        $this->setState(78);
		        $this->identifier();
		        $this->setState(90);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__9) {
		        	$this->setState(79);
		        	$this->match(self::T__9);
		        	$this->setState(80);
		        	$this->parameter();
		        	$this->setState(85);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__10) {
		        		$this->setState(81);
		        		$this->match(self::T__10);
		        		$this->setState(82);
		        		$this->parameter();
		        		$this->setState(87);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        	$this->setState(88);
		        	$this->match(self::T__11);
		        }
		        $this->setState(92);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__4 || $_la === self::T__5)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }

		        $this->setState(94);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__12) {
		        	$this->setState(93);
		        	$this->match(self::T__12);
		        }
		        $this->setState(97);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__32) | (1 << self::T__33) | (1 << self::T__34) | (1 << self::T__35) | (1 << self::T__36) | (1 << self::T__37) | (1 << self::INTRODUCER) | (1 << self::REGULAR_ID) | (1 << self::DELIMITED_ID))) !== 0)) {
		        	$this->setState(96);
		        	$this->seq_of_declare_specs();
		        }
		        $this->setState(99);
		        $this->body();
		        $this->setState(101);
		        $this->match(self::T__7);
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
		public function body() : Context\BodyContext
		{
		    $localContext = new Context\BodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(103);
		        $this->match(self::T__13);
		        $this->setState(104);
		        $this->seq_of_statements();
		        $this->setState(111);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__14) {
		        	$this->setState(105);
		        	$this->match(self::T__14);
		        	$this->setState(107); 
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	do {
		        		$this->setState(106);
		        		$this->exception_handler();
		        		$this->setState(109); 
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	} while ($_la === self::T__16);
		        }
		        $this->setState(113);
		        $this->match(self::T__15);
		        $this->setState(115);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__32) | (1 << self::T__33) | (1 << self::T__34) | (1 << self::T__35) | (1 << self::T__36) | (1 << self::T__37) | (1 << self::REGULAR_ID) | (1 << self::DELIMITED_ID))) !== 0)) {
		        	$this->setState(114);
		        	$this->label_name();
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
		public function exception_handler() : Context\Exception_handlerContext
		{
		    $localContext = new Context\Exception_handlerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_exception_handler);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(117);
		        $this->match(self::T__16);
		        $this->setState(118);
		        $this->exception_name();
		        $this->setState(123);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__17) {
		        	$this->setState(119);
		        	$this->match(self::T__17);
		        	$this->setState(120);
		        	$this->exception_name();
		        	$this->setState(125);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(126);
		        $this->match(self::T__18);
		        $this->setState(127);
		        $this->seq_of_statements();
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
		public function exception_name() : Context\Exception_nameContext
		{
		    $localContext = new Context\Exception_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_exception_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(129);
		        $this->identifier();
		        $this->setState(134);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(130);
		        	$this->match(self::T__3);
		        	$this->setState(131);
		        	$this->id_expression();
		        	$this->setState(136);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
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
		public function seq_of_statements() : Context\Seq_of_statementsContext
		{
		    $localContext = new Context\Seq_of_statementsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_seq_of_statements);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(141); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(141);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::LINE:
		        	    	$this->setState(137);
		        	    	$this->statement();
		        	    	$this->setState(138);

		        	    	$_la = $this->input->LA(1);

		        	    	if (!($_la === self::EOF || $_la === self::T__7)) {
		        	    	$this->errorHandler->recoverInline($this);
		        	    	} else {
		        	    		if ($this->input->LA(1) === Token::EOF) {
		        	    		    $this->matchedEOF = true;
		        	    	    }

		        	    		$this->errorHandler->reportMatch($this);
		        	    		$this->consume();
		        	    	}
		        	    	break;

		        	    case self::T__19:
		        	    	$this->setState(140);
		        	    	$this->label_declaration();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(143); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__19 || $_la === self::LINE);
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
		public function statement() : Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_statement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(146); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(145);
		        	$this->match(self::LINE);
		        	$this->setState(148); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::LINE);
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
		public function label_name() : Context\Label_nameContext
		{
		    $localContext = new Context\Label_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_label_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(150);
		        $this->id_expression();
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
		public function label_declaration() : Context\Label_declarationContext
		{
		    $localContext = new Context\Label_declarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_label_declaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $localContext->ltp1 = $this->match(self::T__19);
		        $this->setState(153);
		        $this->match(self::T__19);
		        $this->setState(154);
		        $this->label_name();
		        $this->setState(155);
		        $this->match(self::T__20);
		        $this->setState(156);
		        $this->match(self::T__20);
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
		public function seq_of_declare_specs() : Context\Seq_of_declare_specsContext
		{
		    $localContext = new Context\Seq_of_declare_specsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_seq_of_declare_specs);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(159); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(158);
		        	$this->variable_declaration();
		        	$this->setState(161); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__32) | (1 << self::T__33) | (1 << self::T__34) | (1 << self::T__35) | (1 << self::T__36) | (1 << self::T__37) | (1 << self::INTRODUCER) | (1 << self::REGULAR_ID) | (1 << self::DELIMITED_ID))) !== 0));
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
		public function parameter() : Context\ParameterContext
		{
		    $localContext = new Context\ParameterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_parameter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(163);
		        $this->parameter_name();
		        $this->setState(167);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__21) | (1 << self::T__22) | (1 << self::T__23))) !== 0)) {
		        	$this->setState(164);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__21) | (1 << self::T__22) | (1 << self::T__23))) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(169);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(171);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__26) | (1 << self::T__28) | (1 << self::T__29) | (1 << self::T__30) | (1 << self::T__31) | (1 << self::T__32) | (1 << self::T__33) | (1 << self::T__34) | (1 << self::T__35) | (1 << self::T__36) | (1 << self::T__37) | (1 << self::REGULAR_ID) | (1 << self::DELIMITED_ID))) !== 0)) {
		        	$this->setState(170);
		        	$this->type_spec();
		        }
		        $this->setState(174);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__27) {
		        	$this->setState(173);
		        	$this->default_value_part();
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
		public function variable_declaration() : Context\Variable_declarationContext
		{
		    $localContext = new Context\Variable_declarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_variable_declaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(176);
		        $this->identifier();
		        $this->setState(178);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__24) {
		        	$this->setState(177);
		        	$this->match(self::T__24);
		        }
		        $this->setState(180);
		        $this->type_spec();
		        $this->setState(182);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__25) {
		        	$this->setState(181);
		        	$this->match(self::T__25);
		        }
		        $this->setState(185);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__27) {
		        	$this->setState(184);
		        	$this->default_value_part();
		        }
		        $this->setState(187);
		        $this->match(self::T__7);
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
		public function type_spec() : Context\Type_specContext
		{
		    $localContext = new Context\Type_specContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_type_spec);

		    try {
		        $this->setState(197);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__28:
		            case self::T__29:
		            case self::T__30:
		            case self::T__31:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(189);
		            	$this->datatype();
		            	break;

		            case self::T__26:
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            case self::T__35:
		            case self::T__36:
		            case self::T__37:
		            case self::REGULAR_ID:
		            case self::DELIMITED_ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(191);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__26) {
		            		$this->setState(190);
		            		$this->match(self::T__26);
		            	}
		            	$this->setState(193);
		            	$this->type_name();
		            	$this->setState(195);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::PERCENT_ROWTYPE || $_la === self::PERCENT_TYPE) {
		            		$this->setState(194);

		            		$_la = $this->input->LA(1);

		            		if (!($_la === self::PERCENT_ROWTYPE || $_la === self::PERCENT_TYPE)) {
		            		$this->errorHandler->recoverInline($this);
		            		} else {
		            			if ($this->input->LA(1) === Token::EOF) {
		            			    $this->matchedEOF = true;
		            		    }

		            			$this->errorHandler->reportMatch($this);
		            			$this->consume();
		            		}
		            	}
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
		public function default_value_part() : Context\Default_value_partContext
		{
		    $localContext = new Context\Default_value_partContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_default_value_part);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(199);
		        $this->match(self::T__27);
		        $this->setState(200);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__28) | (1 << self::STRING) | (1 << self::NUMMMM))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
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
		public function datatype() : Context\DatatypeContext
		{
		    $localContext = new Context\DatatypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_datatype);

		    try {
		        $this->setState(211);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__29:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(202);
		            	$this->match(self::T__29);
		            	break;

		            case self::T__30:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(203);
		            	$this->match(self::T__30);
		            	$this->setState(207);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__9) {
		            		$this->setState(204);
		            		$this->match(self::T__9);
		            		$this->setState(205);
		            		$this->match(self::NUMMMM);
		            		$this->setState(206);
		            		$this->match(self::T__11);
		            	}
		            	break;

		            case self::T__31:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(209);
		            	$this->match(self::T__31);
		            	break;

		            case self::T__28:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(210);
		            	$this->match(self::T__28);
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
		public function parameter_name() : Context\Parameter_nameContext
		{
		    $localContext = new Context\Parameter_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_parameter_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(213);
		        $this->identifier();
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
		public function package_name() : Context\Package_nameContext
		{
		    $localContext = new Context\Package_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_package_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(215);
		        $this->identifier();
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
		public function type_name() : Context\Type_nameContext
		{
		    $localContext = new Context\Type_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_type_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(217);
		        $this->id_expression();
		        $this->setState(222);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(218);
		        	$this->match(self::T__3);
		        	$this->setState(219);
		        	$this->id_expression();
		        	$this->setState(224);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
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
		public function schema_object_name() : Context\Schema_object_nameContext
		{
		    $localContext = new Context\Schema_object_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_schema_object_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(225);
		        $this->id_expression();
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
		public function identifier() : Context\IdentifierContext
		{
		    $localContext = new Context\IdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_identifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(229);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::INTRODUCER) {
		        	$this->setState(227);
		        	$this->match(self::INTRODUCER);
		        	$this->setState(228);
		        	$this->char_set_name();
		        }
		        $this->setState(231);
		        $this->id_expression();
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
		public function char_set_name() : Context\Char_set_nameContext
		{
		    $localContext = new Context\Char_set_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_char_set_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(233);
		        $this->id_expression();
		        $this->setState(238);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__3) {
		        	$this->setState(234);
		        	$this->match(self::T__3);
		        	$this->setState(235);
		        	$this->id_expression();
		        	$this->setState(240);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
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
		public function id_expression() : Context\Id_expressionContext
		{
		    $localContext = new Context\Id_expressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_id_expression);

		    try {
		        $this->setState(243);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            case self::T__35:
		            case self::T__36:
		            case self::T__37:
		            case self::REGULAR_ID:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(241);
		            	$this->regular_id();
		            	break;

		            case self::DELIMITED_ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(242);
		            	$this->match(self::DELIMITED_ID);
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
		public function regular_id() : Context\Regular_idContext
		{
		    $localContext = new Context\Regular_idContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_regular_id);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(245);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__32) | (1 << self::T__33) | (1 << self::T__34) | (1 << self::T__35) | (1 << self::T__36) | (1 << self::T__37) | (1 << self::REGULAR_ID))) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
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
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use PlsqlParser;
	use PlsqlVisitor;
	use PlsqlListener;

	class PlsqlContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_plsql;
	    }

	    /**
	     * @return array<Package_nameContext>|Package_nameContext|null
	     */
	    public function package_name(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Package_nameContext::class);
	    	}

	        return $this->getTypedRuleContext(Package_nameContext::class, $index);
	    }

	    public function schema_object_name() : ?Schema_object_nameContext
	    {
	    	return $this->getTypedRuleContext(Schema_object_nameContext::class, 0);
	    }

	    /**
	     * @return array<Package_obj_bodyContext>|Package_obj_bodyContext|null
	     */
	    public function package_obj_body(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Package_obj_bodyContext::class);
	    	}

	        return $this->getTypedRuleContext(Package_obj_bodyContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterPlsql($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitPlsql($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitPlsql($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Package_obj_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_package_obj_body;
	    }

	    /**
	     * @return array<Procedure_bodyContext>|Procedure_bodyContext|null
	     */
	    public function procedure_body(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Procedure_bodyContext::class);
	    	}

	        return $this->getTypedRuleContext(Procedure_bodyContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterPackage_obj_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitPackage_obj_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitPackage_obj_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Procedure_bodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_procedure_body;
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function body() : ?BodyContext
	    {
	    	return $this->getTypedRuleContext(BodyContext::class, 0);
	    }

	    /**
	     * @return array<ParameterContext>|ParameterContext|null
	     */
	    public function parameter(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParameterContext::class);
	    	}

	        return $this->getTypedRuleContext(ParameterContext::class, $index);
	    }

	    public function seq_of_declare_specs() : ?Seq_of_declare_specsContext
	    {
	    	return $this->getTypedRuleContext(Seq_of_declare_specsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterProcedure_body($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitProcedure_body($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitProcedure_body($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_body;
	    }

	    public function seq_of_statements() : ?Seq_of_statementsContext
	    {
	    	return $this->getTypedRuleContext(Seq_of_statementsContext::class, 0);
	    }

	    public function label_name() : ?Label_nameContext
	    {
	    	return $this->getTypedRuleContext(Label_nameContext::class, 0);
	    }

	    /**
	     * @return array<Exception_handlerContext>|Exception_handlerContext|null
	     */
	    public function exception_handler(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Exception_handlerContext::class);
	    	}

	        return $this->getTypedRuleContext(Exception_handlerContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterBody($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitBody($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitBody($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Exception_handlerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_exception_handler;
	    }

	    /**
	     * @return array<Exception_nameContext>|Exception_nameContext|null
	     */
	    public function exception_name(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Exception_nameContext::class);
	    	}

	        return $this->getTypedRuleContext(Exception_nameContext::class, $index);
	    }

	    public function seq_of_statements() : ?Seq_of_statementsContext
	    {
	    	return $this->getTypedRuleContext(Seq_of_statementsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterException_handler($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitException_handler($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitException_handler($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Exception_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_exception_name;
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    /**
	     * @return array<Id_expressionContext>|Id_expressionContext|null
	     */
	    public function id_expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Id_expressionContext::class);
	    	}

	        return $this->getTypedRuleContext(Id_expressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterException_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitException_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitException_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Seq_of_statementsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_seq_of_statements;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

	    /**
	     * @return array<Label_declarationContext>|Label_declarationContext|null
	     */
	    public function label_declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Label_declarationContext::class);
	    	}

	        return $this->getTypedRuleContext(Label_declarationContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function EOF(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PlsqlParser::EOF);
	    	}

	        return $this->getToken(PlsqlParser::EOF, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterSeq_of_statements($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitSeq_of_statements($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitSeq_of_statements($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_statement;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LINE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PlsqlParser::LINE);
	    	}

	        return $this->getToken(PlsqlParser::LINE, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Label_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_label_name;
	    }

	    public function id_expression() : ?Id_expressionContext
	    {
	    	return $this->getTypedRuleContext(Id_expressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterLabel_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitLabel_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitLabel_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Label_declarationContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $ltp1
		 */
		public $ltp1;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_label_declaration;
	    }

	    public function label_name() : ?Label_nameContext
	    {
	    	return $this->getTypedRuleContext(Label_nameContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterLabel_declaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitLabel_declaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitLabel_declaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Seq_of_declare_specsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_seq_of_declare_specs;
	    }

	    /**
	     * @return array<Variable_declarationContext>|Variable_declarationContext|null
	     */
	    public function variable_declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Variable_declarationContext::class);
	    	}

	        return $this->getTypedRuleContext(Variable_declarationContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterSeq_of_declare_specs($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitSeq_of_declare_specs($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitSeq_of_declare_specs($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_parameter;
	    }

	    public function parameter_name() : ?Parameter_nameContext
	    {
	    	return $this->getTypedRuleContext(Parameter_nameContext::class, 0);
	    }

	    public function type_spec() : ?Type_specContext
	    {
	    	return $this->getTypedRuleContext(Type_specContext::class, 0);
	    }

	    public function default_value_part() : ?Default_value_partContext
	    {
	    	return $this->getTypedRuleContext(Default_value_partContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterParameter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitParameter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitParameter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Variable_declarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_variable_declaration;
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function type_spec() : ?Type_specContext
	    {
	    	return $this->getTypedRuleContext(Type_specContext::class, 0);
	    }

	    public function default_value_part() : ?Default_value_partContext
	    {
	    	return $this->getTypedRuleContext(Default_value_partContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterVariable_declaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitVariable_declaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitVariable_declaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Type_specContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_type_spec;
	    }

	    public function datatype() : ?DatatypeContext
	    {
	    	return $this->getTypedRuleContext(DatatypeContext::class, 0);
	    }

	    public function type_name() : ?Type_nameContext
	    {
	    	return $this->getTypedRuleContext(Type_nameContext::class, 0);
	    }

	    public function PERCENT_ROWTYPE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::PERCENT_ROWTYPE, 0);
	    }

	    public function PERCENT_TYPE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::PERCENT_TYPE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterType_spec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitType_spec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitType_spec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Default_value_partContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_default_value_part;
	    }

	    public function NUMMMM() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::NUMMMM, 0);
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterDefault_value_part($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitDefault_value_part($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitDefault_value_part($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DatatypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_datatype;
	    }

	    public function NUMMMM() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::NUMMMM, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterDatatype($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitDatatype($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitDatatype($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Parameter_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_parameter_name;
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterParameter_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitParameter_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitParameter_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Package_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_package_name;
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterPackage_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitPackage_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitPackage_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Type_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_type_name;
	    }

	    /**
	     * @return array<Id_expressionContext>|Id_expressionContext|null
	     */
	    public function id_expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Id_expressionContext::class);
	    	}

	        return $this->getTypedRuleContext(Id_expressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterType_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitType_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitType_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Schema_object_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_schema_object_name;
	    }

	    public function id_expression() : ?Id_expressionContext
	    {
	    	return $this->getTypedRuleContext(Id_expressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterSchema_object_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitSchema_object_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitSchema_object_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdentifierContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_identifier;
	    }

	    public function id_expression() : ?Id_expressionContext
	    {
	    	return $this->getTypedRuleContext(Id_expressionContext::class, 0);
	    }

	    public function INTRODUCER() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::INTRODUCER, 0);
	    }

	    public function char_set_name() : ?Char_set_nameContext
	    {
	    	return $this->getTypedRuleContext(Char_set_nameContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Char_set_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_char_set_name;
	    }

	    /**
	     * @return array<Id_expressionContext>|Id_expressionContext|null
	     */
	    public function id_expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Id_expressionContext::class);
	    	}

	        return $this->getTypedRuleContext(Id_expressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterChar_set_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitChar_set_name($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitChar_set_name($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Id_expressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_id_expression;
	    }

	    public function regular_id() : ?Regular_idContext
	    {
	    	return $this->getTypedRuleContext(Regular_idContext::class, 0);
	    }

	    public function DELIMITED_ID() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::DELIMITED_ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterId_expression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitId_expression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitId_expression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Regular_idContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_regular_id;
	    }

	    public function REGULAR_ID() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::REGULAR_ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterRegular_id($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitRegular_id($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitRegular_id($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}