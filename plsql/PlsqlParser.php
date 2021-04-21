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
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, STRING = 12, 
               PERCENT_ROWTYPE = 13, PERCENT_TYPE = 14, INTRODUCER = 15, 
               DELIMITED_ID = 16, SPACES = 17, CREATE = 18, OR = 19, REPLACE = 20, 
               PACKAGE = 21, BODY = 22, IS = 23, AS = 24, END = 25, PROCEDURE = 26, 
               DECLARE = 27, BEGIN = 28, EXCEPTION = 29, WHEN = 30, THEN = 31, 
               IN = 32, OUT = 33, NOT = 34, U_NULL = 35, CONSTANT = 36, 
               REF = 37, DEFAULT = 38, ANY = 39, U_NUM = 40, REGULAR_ID = 41;

		public const RULE_plsql = 0, RULE_package = 1, RULE_package_obj_body = 2, 
               RULE_procedure_body = 3, RULE_body = 4, RULE_exception_handler = 5, 
               RULE_exception_name = 6, RULE_seq_of_statements = 7, RULE_statement = 8, 
               RULE_label_name = 9, RULE_label_declaration = 10, RULE_seq_of_declare_specs = 11, 
               RULE_parameter = 12, RULE_parameter_name = 13, RULE_variable_declaration = 14, 
               RULE_type_spec = 15, RULE_default_value_part = 16, RULE_datatype = 17, 
               RULE_identifier = 18, RULE_type_name = 19, RULE_char_set_name = 20, 
               RULE_id_expression = 21;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'plsql', 'package', 'package_obj_body', 'procedure_body', 'body', 'exception_handler', 
			'exception_name', 'seq_of_statements', 'statement', 'label_name', 'label_declaration', 
			'seq_of_declare_specs', 'parameter', 'parameter_name', 'variable_declaration', 
			'type_spec', 'default_value_part', 'datatype', 'identifier', 'type_name', 
			'char_set_name', 'id_expression'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "';'", "'('", "','", "')'", "'.'", "'<'", "'>'", "'integer'", 
		    "'varchar2'", "'number'", "'null'", null, null, null, "'_'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, "STRING", "PERCENT_ROWTYPE", "PERCENT_TYPE", "INTRODUCER", "DELIMITED_ID", 
		    "SPACES", "CREATE", "OR", "REPLACE", "PACKAGE", "BODY", "IS", "AS", 
		    "END", "PROCEDURE", "DECLARE", "BEGIN", "EXCEPTION", "WHEN", "THEN", 
		    "IN", "OUT", "NOT", "U_NULL", "CONSTANT", "REF", "DEFAULT", "ANY", 
		    "U_NUM", "REGULAR_ID"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{2B}\u{F0}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{5}\u{3}\u{3C}\u{A}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}" .
		    "\u{6}\u{4}\u{41}\u{A}\u{4}\u{D}\u{4}\u{E}\u{4}\u{42}\u{3}\u{5}\u{3}" .
		    "\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{7}\u{5}\u{4B}\u{A}" .
		    "\u{5}\u{C}\u{5}\u{E}\u{5}\u{4E}\u{B}\u{5}\u{3}\u{5}\u{3}\u{5}\u{5}" .
		    "\u{5}\u{52}\u{A}\u{5}\u{3}\u{5}\u{3}\u{5}\u{5}\u{5}\u{56}\u{A}\u{5}" .
		    "\u{3}\u{5}\u{5}\u{5}\u{59}\u{A}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{3}\u{6}\u{6}" .
		    "\u{6}\u{64}\u{A}\u{6}\u{D}\u{6}\u{E}\u{6}\u{65}\u{5}\u{6}\u{68}\u{A}" .
		    "\u{6}\u{3}\u{6}\u{3}\u{6}\u{5}\u{6}\u{6C}\u{A}\u{6}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{7}\u{7}\u{72}\u{A}\u{7}\u{C}\u{7}\u{E}" .
		    "\u{7}\u{75}\u{B}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{8}\u{3}" .
		    "\u{8}\u{3}\u{8}\u{7}\u{8}\u{7D}\u{A}\u{8}\u{C}\u{8}\u{E}\u{8}\u{80}" .
		    "\u{B}\u{8}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{9}\u{6}\u{9}\u{86}" .
		    "\u{A}\u{9}\u{D}\u{9}\u{E}\u{9}\u{87}\u{3}\u{A}\u{7}\u{A}\u{8B}\u{A}" .
		    "\u{A}\u{C}\u{A}\u{E}\u{A}\u{8E}\u{B}\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}" .
		    "\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{D}" .
		    "\u{6}\u{D}\u{99}\u{A}\u{D}\u{D}\u{D}\u{E}\u{D}\u{9A}\u{3}\u{E}\u{3}" .
		    "\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{7}\u{E}\u{A2}\u{A}\u{E}\u{C}" .
		    "\u{E}\u{E}\u{E}\u{A5}\u{B}\u{E}\u{3}\u{E}\u{5}\u{E}\u{A8}\u{A}\u{E}" .
		    "\u{3}\u{E}\u{5}\u{E}\u{AB}\u{A}\u{E}\u{3}\u{F}\u{6}\u{F}\u{AE}\u{A}" .
		    "\u{F}\u{D}\u{F}\u{E}\u{F}\u{AF}\u{3}\u{10}\u{3}\u{10}\u{5}\u{10}\u{B4}" .
		    "\u{A}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{5}\u{10}\u{B9}\u{A}" .
		    "\u{10}\u{3}\u{10}\u{5}\u{10}\u{BC}\u{A}\u{10}\u{3}\u{10}\u{3}\u{10}" .
		    "\u{3}\u{11}\u{3}\u{11}\u{5}\u{11}\u{C2}\u{A}\u{11}\u{3}\u{11}\u{3}" .
		    "\u{11}\u{5}\u{11}\u{C6}\u{A}\u{11}\u{5}\u{11}\u{C8}\u{A}\u{11}\u{3}" .
		    "\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}" .
		    "\u{13}\u{3}\u{13}\u{5}\u{13}\u{D2}\u{A}\u{13}\u{3}\u{13}\u{3}\u{13}" .
		    "\u{5}\u{13}\u{D6}\u{A}\u{13}\u{3}\u{14}\u{3}\u{14}\u{5}\u{14}\u{DA}" .
		    "\u{A}\u{14}\u{3}\u{14}\u{3}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{15}" .
		    "\u{7}\u{15}\u{E1}\u{A}\u{15}\u{C}\u{15}\u{E}\u{15}\u{E4}\u{B}\u{15}" .
		    "\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{7}\u{16}\u{E9}\u{A}\u{16}\u{C}" .
		    "\u{16}\u{E}\u{16}\u{EC}\u{B}\u{16}\u{3}\u{17}\u{3}\u{17}\u{3}\u{17}" .
		    "\u{3}\u{8C}\u{2}\u{18}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}" .
		    "\u{14}\u{16}\u{18}\u{1A}\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}\u{28}" .
		    "\u{2A}\u{2C}\u{2}\u{7}\u{3}\u{2}\u{19}\u{1A}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{2}\u{F}\u{10}\u{5}\u{2}\u{E}\u{E}\u{25}\u{25}\u{2A}\u{2A}\u{4}" .
		    "\u{2}\u{12}\u{12}\u{2B}\u{2B}\u{2}\u{FB}\u{2}\u{2E}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{4}\u{31}\u{3}\u{2}\u{2}\u{2}\u{6}\u{40}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{8}\u{44}\u{3}\u{2}\u{2}\u{2}\u{A}\u{5F}\u{3}\u{2}\u{2}\u{2}\u{C}" .
		    "\u{6D}\u{3}\u{2}\u{2}\u{2}\u{E}\u{79}\u{3}\u{2}\u{2}\u{2}\u{10}\u{85}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12}\u{8C}\u{3}\u{2}\u{2}\u{2}\u{14}\u{8F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{16}\u{91}\u{3}\u{2}\u{2}\u{2}\u{18}\u{98}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1A}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{1C}\u{AD}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{1E}\u{B1}\u{3}\u{2}\u{2}\u{2}\u{20}\u{C7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{22}\u{C9}\u{3}\u{2}\u{2}\u{2}\u{24}\u{D5}\u{3}\u{2}\u{2}\u{2}\u{26}" .
		    "\u{D9}\u{3}\u{2}\u{2}\u{2}\u{28}\u{DD}\u{3}\u{2}\u{2}\u{2}\u{2A}\u{E5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2C}\u{ED}\u{3}\u{2}\u{2}\u{2}\u{2E}\u{2F}\u{5}" .
		    "\u{4}\u{3}\u{2}\u{2F}\u{30}\u{7}\u{2}\u{2}\u{3}\u{30}\u{3}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{31}\u{32}\u{7}\u{14}\u{2}\u{2}\u{32}\u{33}\u{7}\u{15}" .
		    "\u{2}\u{2}\u{33}\u{34}\u{7}\u{16}\u{2}\u{2}\u{34}\u{35}\u{7}\u{17}" .
		    "\u{2}\u{2}\u{35}\u{36}\u{7}\u{18}\u{2}\u{2}\u{36}\u{37}\u{5}\u{26}" .
		    "\u{14}\u{2}\u{37}\u{38}\u{9}\u{2}\u{2}\u{2}\u{38}\u{39}\u{5}\u{6}" .
		    "\u{4}\u{2}\u{39}\u{3B}\u{7}\u{1B}\u{2}\u{2}\u{3A}\u{3C}\u{5}\u{26}" .
		    "\u{14}\u{2}\u{3B}\u{3A}\u{3}\u{2}\u{2}\u{2}\u{3B}\u{3C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{3C}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{3D}\u{3E}\u{7}\u{3}\u{2}" .
		    "\u{2}\u{3E}\u{5}\u{3}\u{2}\u{2}\u{2}\u{3F}\u{41}\u{5}\u{8}\u{5}\u{2}" .
		    "\u{40}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{41}\u{42}\u{3}\u{2}\u{2}\u{2}\u{42}" .
		    "\u{40}\u{3}\u{2}\u{2}\u{2}\u{42}\u{43}\u{3}\u{2}\u{2}\u{2}\u{43}\u{7}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{44}\u{45}\u{7}\u{1C}\u{2}\u{2}\u{45}\u{51}" .
		    "\u{5}\u{26}\u{14}\u{2}\u{46}\u{47}\u{7}\u{4}\u{2}\u{2}\u{47}\u{4C}" .
		    "\u{5}\u{1A}\u{E}\u{2}\u{48}\u{49}\u{7}\u{5}\u{2}\u{2}\u{49}\u{4B}" .
		    "\u{5}\u{1A}\u{E}\u{2}\u{4A}\u{48}\u{3}\u{2}\u{2}\u{2}\u{4B}\u{4E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4C}\u{4A}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{4D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{4D}\u{4F}\u{3}\u{2}\u{2}\u{2}\u{4E}\u{4C}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{4F}\u{50}\u{7}\u{6}\u{2}\u{2}\u{50}\u{52}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{51}\u{46}\u{3}\u{2}\u{2}\u{2}\u{51}\u{52}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{52}\u{53}\u{3}\u{2}\u{2}\u{2}\u{53}\u{55}\u{9}\u{2}\u{2}\u{2}\u{54}" .
		    "\u{56}\u{7}\u{1D}\u{2}\u{2}\u{55}\u{54}\u{3}\u{2}\u{2}\u{2}\u{55}" .
		    "\u{56}\u{3}\u{2}\u{2}\u{2}\u{56}\u{58}\u{3}\u{2}\u{2}\u{2}\u{57}\u{59}" .
		    "\u{5}\u{18}\u{D}\u{2}\u{58}\u{57}\u{3}\u{2}\u{2}\u{2}\u{58}\u{59}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{59}\u{5A}\u{3}\u{2}\u{2}\u{2}\u{5A}\u{5B}\u{5}" .
		    "\u{A}\u{6}\u{2}\u{5B}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{5D}\u{7}\u{1B}" .
		    "\u{2}\u{2}\u{5D}\u{5E}\u{7}\u{3}\u{2}\u{2}\u{5E}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{5F}\u{60}\u{7}\u{1E}\u{2}\u{2}\u{60}\u{67}\u{5}\u{10}\u{9}" .
		    "\u{2}\u{61}\u{63}\u{7}\u{1F}\u{2}\u{2}\u{62}\u{64}\u{5}\u{C}\u{7}" .
		    "\u{2}\u{63}\u{62}\u{3}\u{2}\u{2}\u{2}\u{64}\u{65}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{65}\u{63}\u{3}\u{2}\u{2}\u{2}\u{65}\u{66}\u{3}\u{2}\u{2}\u{2}\u{66}" .
		    "\u{68}\u{3}\u{2}\u{2}\u{2}\u{67}\u{61}\u{3}\u{2}\u{2}\u{2}\u{67}\u{68}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{68}\u{69}\u{3}\u{2}\u{2}\u{2}\u{69}\u{6B}\u{7}" .
		    "\u{1B}\u{2}\u{2}\u{6A}\u{6C}\u{5}\u{14}\u{B}\u{2}\u{6B}\u{6A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{6B}\u{6C}\u{3}\u{2}\u{2}\u{2}\u{6C}\u{B}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{6D}\u{6E}\u{7}\u{20}\u{2}\u{2}\u{6E}\u{73}\u{5}\u{E}" .
		    "\u{8}\u{2}\u{6F}\u{70}\u{7}\u{15}\u{2}\u{2}\u{70}\u{72}\u{5}\u{E}" .
		    "\u{8}\u{2}\u{71}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{72}\u{75}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{73}\u{71}\u{3}\u{2}\u{2}\u{2}\u{73}\u{74}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{74}\u{76}\u{3}\u{2}\u{2}\u{2}\u{75}\u{73}\u{3}\u{2}\u{2}\u{2}\u{76}" .
		    "\u{77}\u{7}\u{21}\u{2}\u{2}\u{77}\u{78}\u{5}\u{10}\u{9}\u{2}\u{78}" .
		    "\u{D}\u{3}\u{2}\u{2}\u{2}\u{79}\u{7E}\u{5}\u{26}\u{14}\u{2}\u{7A}" .
		    "\u{7B}\u{7}\u{7}\u{2}\u{2}\u{7B}\u{7D}\u{5}\u{2C}\u{17}\u{2}\u{7C}" .
		    "\u{7A}\u{3}\u{2}\u{2}\u{2}\u{7D}\u{80}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{7E}\u{7F}\u{3}\u{2}\u{2}\u{2}\u{7F}\u{F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{80}\u{7E}\u{3}\u{2}\u{2}\u{2}\u{81}\u{82}\u{5}\u{12}" .
		    "\u{A}\u{2}\u{82}\u{83}\u{9}\u{3}\u{2}\u{2}\u{83}\u{86}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{84}\u{86}\u{5}\u{16}\u{C}\u{2}\u{85}\u{81}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{85}\u{84}\u{3}\u{2}\u{2}\u{2}\u{86}\u{87}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{87}\u{85}\u{3}\u{2}\u{2}\u{2}\u{87}\u{88}\u{3}\u{2}\u{2}\u{2}\u{88}" .
		    "\u{11}\u{3}\u{2}\u{2}\u{2}\u{89}\u{8B}\u{B}\u{2}\u{2}\u{2}\u{8A}\u{89}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{8B}\u{8E}\u{3}\u{2}\u{2}\u{2}\u{8C}\u{8D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{8C}\u{8A}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{13}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{8E}\u{8C}\u{3}\u{2}\u{2}\u{2}\u{8F}\u{90}\u{5}\u{2C}" .
		    "\u{17}\u{2}\u{90}\u{15}\u{3}\u{2}\u{2}\u{2}\u{91}\u{92}\u{7}\u{8}" .
		    "\u{2}\u{2}\u{92}\u{93}\u{7}\u{8}\u{2}\u{2}\u{93}\u{94}\u{5}\u{14}" .
		    "\u{B}\u{2}\u{94}\u{95}\u{7}\u{9}\u{2}\u{2}\u{95}\u{96}\u{7}\u{9}\u{2}" .
		    "\u{2}\u{96}\u{17}\u{3}\u{2}\u{2}\u{2}\u{97}\u{99}\u{5}\u{1E}\u{10}" .
		    "\u{2}\u{98}\u{97}\u{3}\u{2}\u{2}\u{2}\u{99}\u{9A}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{9A}\u{98}\u{3}\u{2}\u{2}\u{2}\u{9A}\u{9B}\u{3}\u{2}\u{2}\u{2}\u{9B}" .
		    "\u{19}\u{3}\u{2}\u{2}\u{2}\u{9C}\u{A3}\u{5}\u{1C}\u{F}\u{2}\u{9D}" .
		    "\u{A2}\u{7}\u{22}\u{2}\u{2}\u{9E}\u{A2}\u{7}\u{23}\u{2}\u{2}\u{9F}" .
		    "\u{A0}\u{7}\u{22}\u{2}\u{2}\u{A0}\u{A2}\u{7}\u{23}\u{2}\u{2}\u{A1}" .
		    "\u{9D}\u{3}\u{2}\u{2}\u{2}\u{A1}\u{9E}\u{3}\u{2}\u{2}\u{2}\u{A1}\u{9F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{A2}\u{A5}\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A1}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{A3}\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A4}\u{A7}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A5}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{A6}\u{A8}\u{5}\u{20}" .
		    "\u{11}\u{2}\u{A7}\u{A6}\u{3}\u{2}\u{2}\u{2}\u{A7}\u{A8}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A8}\u{AA}\u{3}\u{2}\u{2}\u{2}\u{A9}\u{AB}\u{5}\u{22}" .
		    "\u{12}\u{2}\u{AA}\u{A9}\u{3}\u{2}\u{2}\u{2}\u{AA}\u{AB}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{AB}\u{1B}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AE}\u{7}\u{29}" .
		    "\u{2}\u{2}\u{AD}\u{AC}\u{3}\u{2}\u{2}\u{2}\u{AE}\u{AF}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{AF}\u{AD}\u{3}\u{2}\u{2}\u{2}\u{AF}\u{B0}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{B0}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{B1}\u{B3}\u{5}\u{26}\u{14}\u{2}" .
		    "\u{B2}\u{B4}\u{7}\u{26}\u{2}\u{2}\u{B3}\u{B2}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{B3}\u{B4}\u{3}\u{2}\u{2}\u{2}\u{B4}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{B5}" .
		    "\u{B8}\u{5}\u{20}\u{11}\u{2}\u{B6}\u{B7}\u{7}\u{24}\u{2}\u{2}\u{B7}" .
		    "\u{B9}\u{7}\u{25}\u{2}\u{2}\u{B8}\u{B6}\u{3}\u{2}\u{2}\u{2}\u{B8}" .
		    "\u{B9}\u{3}\u{2}\u{2}\u{2}\u{B9}\u{BB}\u{3}\u{2}\u{2}\u{2}\u{BA}\u{BC}" .
		    "\u{5}\u{22}\u{12}\u{2}\u{BB}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{BB}\u{BC}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{BC}\u{BD}\u{3}\u{2}\u{2}\u{2}\u{BD}\u{BE}\u{7}" .
		    "\u{3}\u{2}\u{2}\u{BE}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{BF}\u{C8}\u{5}\u{24}" .
		    "\u{13}\u{2}\u{C0}\u{C2}\u{7}\u{27}\u{2}\u{2}\u{C1}\u{C0}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{C1}\u{C2}\u{3}\u{2}\u{2}\u{2}\u{C2}\u{C3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{C3}\u{C5}\u{5}\u{28}\u{15}\u{2}\u{C4}\u{C6}\u{9}\u{4}\u{2}" .
		    "\u{2}\u{C5}\u{C4}\u{3}\u{2}\u{2}\u{2}\u{C5}\u{C6}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{C6}\u{C8}\u{3}\u{2}\u{2}\u{2}\u{C7}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{C7}" .
		    "\u{C1}\u{3}\u{2}\u{2}\u{2}\u{C8}\u{21}\u{3}\u{2}\u{2}\u{2}\u{C9}\u{CA}" .
		    "\u{7}\u{28}\u{2}\u{2}\u{CA}\u{CB}\u{9}\u{5}\u{2}\u{2}\u{CB}\u{23}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{CC}\u{D6}\u{7}\u{A}\u{2}\u{2}\u{CD}\u{D1}\u{7}" .
		    "\u{B}\u{2}\u{2}\u{CE}\u{CF}\u{7}\u{4}\u{2}\u{2}\u{CF}\u{D0}\u{7}\u{2A}" .
		    "\u{2}\u{2}\u{D0}\u{D2}\u{7}\u{6}\u{2}\u{2}\u{D1}\u{CE}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D1}\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D6}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D3}\u{D6}\u{7}\u{C}\u{2}\u{2}\u{D4}\u{D6}\u{7}\u{D}\u{2}\u{2}\u{D5}" .
		    "\u{CC}\u{3}\u{2}\u{2}\u{2}\u{D5}\u{CD}\u{3}\u{2}\u{2}\u{2}\u{D5}\u{D3}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{D5}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{D6}\u{25}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{D7}\u{D8}\u{7}\u{11}\u{2}\u{2}\u{D8}\u{DA}\u{5}" .
		    "\u{2A}\u{16}\u{2}\u{D9}\u{D7}\u{3}\u{2}\u{2}\u{2}\u{D9}\u{DA}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{DA}\u{DB}\u{3}\u{2}\u{2}\u{2}\u{DB}\u{DC}\u{5}\u{2C}" .
		    "\u{17}\u{2}\u{DC}\u{27}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{E2}\u{5}\u{2C}" .
		    "\u{17}\u{2}\u{DE}\u{DF}\u{7}\u{7}\u{2}\u{2}\u{DF}\u{E1}\u{5}\u{2C}" .
		    "\u{17}\u{2}\u{E0}\u{DE}\u{3}\u{2}\u{2}\u{2}\u{E1}\u{E4}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{E2}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{E2}\u{E3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E3}\u{29}\u{3}\u{2}\u{2}\u{2}\u{E4}\u{E2}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E5}\u{EA}\u{5}\u{2C}\u{17}\u{2}\u{E6}\u{E7}\u{7}\u{7}\u{2}\u{2}" .
		    "\u{E7}\u{E9}\u{5}\u{2C}\u{17}\u{2}\u{E8}\u{E6}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E9}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{EA}\u{E8}\u{3}\u{2}\u{2}\u{2}\u{EA}" .
		    "\u{EB}\u{3}\u{2}\u{2}\u{2}\u{EB}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{EC}\u{EA}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{ED}\u{EE}\u{9}\u{6}\u{2}\u{2}\u{EE}\u{2D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{21}\u{3B}\u{42}\u{4C}\u{51}\u{55}\u{58}\u{65}\u{67}" .
		    "\u{6B}\u{73}\u{7E}\u{85}\u{87}\u{8C}\u{9A}\u{A1}\u{A3}\u{A7}\u{AA}" .
		    "\u{AF}\u{B3}\u{B8}\u{BB}\u{C1}\u{C5}\u{C7}\u{D1}\u{D5}\u{D9}\u{E2}" .
		    "\u{EA}";

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
		        $this->setState(44);
		        $this->package();
		        $this->setState(45);
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
		public function package() : Context\PackageContext
		{
		    $localContext = new Context\PackageContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_package);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(47);
		        $this->match(self::CREATE);
		        $this->setState(48);
		        $this->match(self::OR);
		        $this->setState(49);
		        $this->match(self::REPLACE);
		        $this->setState(50);
		        $this->match(self::PACKAGE);
		        $this->setState(51);
		        $this->match(self::BODY);
		        $this->setState(52);
		        $this->identifier();
		        $this->setState(53);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::IS || $_la === self::AS)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(54);
		        $this->package_obj_body();
		        $this->setState(55);
		        $this->match(self::END);
		        $this->setState(57);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::INTRODUCER) | (1 << self::DELIMITED_ID) | (1 << self::REGULAR_ID))) !== 0)) {
		        	$this->setState(56);
		        	$this->identifier();
		        }
		        $this->setState(59);
		        $this->match(self::T__0);
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

		    $this->enterRule($localContext, 4, self::RULE_package_obj_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(62); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(61);
		        	$this->procedure_body();
		        	$this->setState(64); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::PROCEDURE);
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

		    $this->enterRule($localContext, 6, self::RULE_procedure_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(66);
		        $this->match(self::PROCEDURE);
		        $this->setState(67);
		        $this->identifier();
		        $this->setState(79);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__1) {
		        	$this->setState(68);
		        	$this->match(self::T__1);
		        	$this->setState(69);
		        	$this->parameter();
		        	$this->setState(74);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__2) {
		        		$this->setState(70);
		        		$this->match(self::T__2);
		        		$this->setState(71);
		        		$this->parameter();
		        		$this->setState(76);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        	$this->setState(77);
		        	$this->match(self::T__3);
		        }
		        $this->setState(81);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::IS || $_la === self::AS)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }

		        $this->setState(83);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DECLARE) {
		        	$this->setState(82);
		        	$this->match(self::DECLARE);
		        }
		        $this->setState(86);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::INTRODUCER) | (1 << self::DELIMITED_ID) | (1 << self::REGULAR_ID))) !== 0)) {
		        	$this->setState(85);
		        	$this->seq_of_declare_specs();
		        }
		        $this->setState(88);
		        $this->body();
		        $this->setState(90);
		        $this->match(self::END);
		        $this->setState(91);
		        $this->match(self::T__0);
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

		    $this->enterRule($localContext, 8, self::RULE_body);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(93);
		        $this->match(self::BEGIN);
		        $this->setState(94);
		        $this->seq_of_statements();
		        $this->setState(101);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::EXCEPTION) {
		        	$this->setState(95);
		        	$this->match(self::EXCEPTION);
		        	$this->setState(97); 
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	do {
		        		$this->setState(96);
		        		$this->exception_handler();
		        		$this->setState(99); 
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	} while ($_la === self::WHEN);
		        }
		        $this->setState(103);
		        $this->match(self::END);
		        $this->setState(105);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DELIMITED_ID || $_la === self::REGULAR_ID) {
		        	$this->setState(104);
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

		    $this->enterRule($localContext, 10, self::RULE_exception_handler);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(107);
		        $this->match(self::WHEN);
		        $this->setState(108);
		        $this->exception_name();
		        $this->setState(113);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::OR) {
		        	$this->setState(109);
		        	$this->match(self::OR);
		        	$this->setState(110);
		        	$this->exception_name();
		        	$this->setState(115);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(116);
		        $this->match(self::THEN);
		        $this->setState(117);
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

		    $this->enterRule($localContext, 12, self::RULE_exception_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(119);
		        $this->identifier();
		        $this->setState(124);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(120);
		        	$this->match(self::T__4);
		        	$this->setState(121);
		        	$this->id_expression();
		        	$this->setState(126);
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

		    $this->enterRule($localContext, 14, self::RULE_seq_of_statements);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(131); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(131);
		        		$this->errorHandler->sync($this);

		        		switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        			case 1:
		        			    $this->setState(127);
		        			    $this->statement();
		        			    $this->setState(128);

		        			    $_la = $this->input->LA(1);

		        			    if (!($_la === self::EOF || $_la === self::T__0)) {
		        			    $this->errorHandler->recoverInline($this);
		        			    } else {
		        			    	if ($this->input->LA(1) === Token::EOF) {
		        			    	    $this->matchedEOF = true;
		        			        }

		        			    	$this->errorHandler->reportMatch($this);
		        			    	$this->consume();
		        			    }
		        			break;

		        			case 2:
		        			    $this->setState(130);
		        			    $this->label_declaration();
		        			break;
		        		}
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(133); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx);
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
		public function statement() : Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_statement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(138);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx);

		        while ($alt !== 1 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1+1) {
		        		$this->setState(135);
		        		$this->matchWildcard(); 
		        	}

		        	$this->setState(140);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx);
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
		public function label_name() : Context\Label_nameContext
		{
		    $localContext = new Context\Label_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_label_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(141);
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

		    $this->enterRule($localContext, 20, self::RULE_label_declaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(143);
		        $localContext->ltp1 = $this->match(self::T__5);
		        $this->setState(144);
		        $this->match(self::T__5);
		        $this->setState(145);
		        $this->label_name();
		        $this->setState(146);
		        $this->match(self::T__6);
		        $this->setState(147);
		        $this->match(self::T__6);
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

		    $this->enterRule($localContext, 22, self::RULE_seq_of_declare_specs);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(150); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(149);
		        	$this->variable_declaration();
		        	$this->setState(152); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::INTRODUCER) | (1 << self::DELIMITED_ID) | (1 << self::REGULAR_ID))) !== 0));
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

		    $this->enterRule($localContext, 24, self::RULE_parameter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(154);
		        $this->parameter_name();
		        $this->setState(161);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::IN || $_la === self::OUT) {
		        	$this->setState(159);
		        	$this->errorHandler->sync($this);

		        	switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        		case 1:
		        		    $this->setState(155);
		        		    $this->match(self::IN);
		        		break;

		        		case 2:
		        		    $this->setState(156);
		        		    $this->match(self::OUT);
		        		break;

		        		case 3:
		        		    $this->setState(157);
		        		    $this->match(self::IN);
		        		    $this->setState(158);
		        		    $this->match(self::OUT);
		        		break;
		        	}
		        	$this->setState(163);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(165);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__7) | (1 << self::T__8) | (1 << self::T__9) | (1 << self::T__10) | (1 << self::DELIMITED_ID) | (1 << self::REF) | (1 << self::REGULAR_ID))) !== 0)) {
		        	$this->setState(164);
		        	$this->type_spec();
		        }
		        $this->setState(168);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(167);
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
		public function parameter_name() : Context\Parameter_nameContext
		{
		    $localContext = new Context\Parameter_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_parameter_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(171); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(170);
		        	$this->match(self::ANY);
		        	$this->setState(173); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::ANY);
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

		    $this->enterRule($localContext, 28, self::RULE_variable_declaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(175);
		        $this->identifier();
		        $this->setState(177);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::CONSTANT) {
		        	$this->setState(176);
		        	$this->match(self::CONSTANT);
		        }
		        $this->setState(179);
		        $this->type_spec();
		        $this->setState(182);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::NOT) {
		        	$this->setState(180);
		        	$this->match(self::NOT);
		        	$this->setState(181);
		        	$this->match(self::U_NULL);
		        }
		        $this->setState(185);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(184);
		        	$this->default_value_part();
		        }
		        $this->setState(187);
		        $this->match(self::T__0);
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

		    $this->enterRule($localContext, 30, self::RULE_type_spec);

		    try {
		        $this->setState(197);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__7:
		            case self::T__8:
		            case self::T__9:
		            case self::T__10:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(189);
		            	$this->datatype();
		            	break;

		            case self::DELIMITED_ID:
		            case self::REF:
		            case self::REGULAR_ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(191);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::REF) {
		            		$this->setState(190);
		            		$this->match(self::REF);
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

		    $this->enterRule($localContext, 32, self::RULE_default_value_part);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(199);
		        $this->match(self::DEFAULT);
		        $this->setState(200);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::STRING) | (1 << self::U_NULL) | (1 << self::U_NUM))) !== 0))) {
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

		    $this->enterRule($localContext, 34, self::RULE_datatype);

		    try {
		        $this->setState(211);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__7:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(202);
		            	$this->match(self::T__7);
		            	break;

		            case self::T__8:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(203);
		            	$this->match(self::T__8);
		            	$this->setState(207);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__1) {
		            		$this->setState(204);
		            		$this->match(self::T__1);
		            		$this->setState(205);
		            		$this->match(self::U_NUM);
		            		$this->setState(206);
		            		$this->match(self::T__3);
		            	}
		            	break;

		            case self::T__9:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(209);
		            	$this->match(self::T__9);
		            	break;

		            case self::T__10:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(210);
		            	$this->match(self::T__10);
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
		public function identifier() : Context\IdentifierContext
		{
		    $localContext = new Context\IdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_identifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(215);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::INTRODUCER) {
		        	$this->setState(213);
		        	$this->match(self::INTRODUCER);
		        	$this->setState(214);
		        	$this->char_set_name();
		        }
		        $this->setState(217);
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
		public function type_name() : Context\Type_nameContext
		{
		    $localContext = new Context\Type_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_type_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(219);
		        $this->id_expression();
		        $this->setState(224);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(220);
		        	$this->match(self::T__4);
		        	$this->setState(221);
		        	$this->id_expression();
		        	$this->setState(226);
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
		public function char_set_name() : Context\Char_set_nameContext
		{
		    $localContext = new Context\Char_set_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_char_set_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(227);
		        $this->id_expression();
		        $this->setState(232);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(228);
		        	$this->match(self::T__4);
		        	$this->setState(229);
		        	$this->id_expression();
		        	$this->setState(234);
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

		    $this->enterRule($localContext, 42, self::RULE_id_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(235);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::DELIMITED_ID || $_la === self::REGULAR_ID)) {
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

	    public function package() : ?PackageContext
	    {
	    	return $this->getTypedRuleContext(PackageContext::class, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::EOF, 0);
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

	class PackageContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return PlsqlParser::RULE_package;
	    }

	    public function CREATE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::CREATE, 0);
	    }

	    public function OR() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::OR, 0);
	    }

	    public function REPLACE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::REPLACE, 0);
	    }

	    public function PACKAGE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::PACKAGE, 0);
	    }

	    public function BODY() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::BODY, 0);
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    public function package_obj_body() : ?Package_obj_bodyContext
	    {
	    	return $this->getTypedRuleContext(Package_obj_bodyContext::class, 0);
	    }

	    public function END() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::END, 0);
	    }

	    public function IS() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::IS, 0);
	    }

	    public function AS() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::AS, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->enterPackage($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof PlsqlListener) {
			    $listener->exitPackage($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof PlsqlVisitor) {
			    return $visitor->visitPackage($this);
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

	    public function PROCEDURE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::PROCEDURE, 0);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function END() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::END, 0);
	    }

	    public function IS() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::IS, 0);
	    }

	    public function AS() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::AS, 0);
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

	    public function DECLARE() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::DECLARE, 0);
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

	    public function BEGIN() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::BEGIN, 0);
	    }

	    public function seq_of_statements() : ?Seq_of_statementsContext
	    {
	    	return $this->getTypedRuleContext(Seq_of_statementsContext::class, 0);
	    }

	    public function END() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::END, 0);
	    }

	    public function EXCEPTION() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::EXCEPTION, 0);
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

	    public function WHEN() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::WHEN, 0);
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

	    public function THEN() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::THEN, 0);
	    }

	    public function seq_of_statements() : ?Seq_of_statementsContext
	    {
	    	return $this->getTypedRuleContext(Seq_of_statementsContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function OR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PlsqlParser::OR);
	    	}

	        return $this->getToken(PlsqlParser::OR, $index);
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

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IN(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PlsqlParser::IN);
	    	}

	        return $this->getToken(PlsqlParser::IN, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function OUT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PlsqlParser::OUT);
	    	}

	        return $this->getToken(PlsqlParser::OUT, $index);
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

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ANY(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PlsqlParser::ANY);
	    	}

	        return $this->getToken(PlsqlParser::ANY, $index);
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

	    public function CONSTANT() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::CONSTANT, 0);
	    }

	    public function NOT() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::NOT, 0);
	    }

	    public function U_NULL() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::U_NULL, 0);
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

	    public function REF() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::REF, 0);
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

	    public function DEFAULT() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::DEFAULT, 0);
	    }

	    public function U_NUM() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::U_NUM, 0);
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::STRING, 0);
	    }

	    public function U_NULL() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::U_NULL, 0);
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

	    public function U_NUM() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::U_NUM, 0);
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

	    public function REGULAR_ID() : ?TerminalNode
	    {
	        return $this->getToken(PlsqlParser::REGULAR_ID, 0);
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
}