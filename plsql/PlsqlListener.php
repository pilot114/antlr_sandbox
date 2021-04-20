<?php

/*
 * Generated from Plsql.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see PlsqlParser}.
 */
interface PlsqlListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::plsql()}.
	 * @param $context The parse tree.
	 */
	public function enterPlsql(Context\PlsqlContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::plsql()}.
	 * @param $context The parse tree.
	 */
	public function exitPlsql(Context\PlsqlContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::package_obj_body()}.
	 * @param $context The parse tree.
	 */
	public function enterPackage_obj_body(Context\Package_obj_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::package_obj_body()}.
	 * @param $context The parse tree.
	 */
	public function exitPackage_obj_body(Context\Package_obj_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::procedure_body()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedure_body(Context\Procedure_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::procedure_body()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedure_body(Context\Procedure_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::body()}.
	 * @param $context The parse tree.
	 */
	public function enterBody(Context\BodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::body()}.
	 * @param $context The parse tree.
	 */
	public function exitBody(Context\BodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::exception_handler()}.
	 * @param $context The parse tree.
	 */
	public function enterException_handler(Context\Exception_handlerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::exception_handler()}.
	 * @param $context The parse tree.
	 */
	public function exitException_handler(Context\Exception_handlerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::exception_name()}.
	 * @param $context The parse tree.
	 */
	public function enterException_name(Context\Exception_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::exception_name()}.
	 * @param $context The parse tree.
	 */
	public function exitException_name(Context\Exception_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::seq_of_statements()}.
	 * @param $context The parse tree.
	 */
	public function enterSeq_of_statements(Context\Seq_of_statementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::seq_of_statements()}.
	 * @param $context The parse tree.
	 */
	public function exitSeq_of_statements(Context\Seq_of_statementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::label_name()}.
	 * @param $context The parse tree.
	 */
	public function enterLabel_name(Context\Label_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::label_name()}.
	 * @param $context The parse tree.
	 */
	public function exitLabel_name(Context\Label_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::label_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterLabel_declaration(Context\Label_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::label_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitLabel_declaration(Context\Label_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::seq_of_declare_specs()}.
	 * @param $context The parse tree.
	 */
	public function enterSeq_of_declare_specs(Context\Seq_of_declare_specsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::seq_of_declare_specs()}.
	 * @param $context The parse tree.
	 */
	public function exitSeq_of_declare_specs(Context\Seq_of_declare_specsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter(Context\ParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter(Context\ParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::variable_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterVariable_declaration(Context\Variable_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::variable_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitVariable_declaration(Context\Variable_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::type_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterType_spec(Context\Type_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::type_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitType_spec(Context\Type_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::default_value_part()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault_value_part(Context\Default_value_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::default_value_part()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault_value_part(Context\Default_value_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::datatype()}.
	 * @param $context The parse tree.
	 */
	public function enterDatatype(Context\DatatypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::datatype()}.
	 * @param $context The parse tree.
	 */
	public function exitDatatype(Context\DatatypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::parameter_name()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter_name(Context\Parameter_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::parameter_name()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter_name(Context\Parameter_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::package_name()}.
	 * @param $context The parse tree.
	 */
	public function enterPackage_name(Context\Package_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::package_name()}.
	 * @param $context The parse tree.
	 */
	public function exitPackage_name(Context\Package_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::type_name()}.
	 * @param $context The parse tree.
	 */
	public function enterType_name(Context\Type_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::type_name()}.
	 * @param $context The parse tree.
	 */
	public function exitType_name(Context\Type_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::schema_object_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSchema_object_name(Context\Schema_object_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::schema_object_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSchema_object_name(Context\Schema_object_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::identifier()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::identifier()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::char_set_name()}.
	 * @param $context The parse tree.
	 */
	public function enterChar_set_name(Context\Char_set_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::char_set_name()}.
	 * @param $context The parse tree.
	 */
	public function exitChar_set_name(Context\Char_set_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::id_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterId_expression(Context\Id_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::id_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitId_expression(Context\Id_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlsqlParser::regular_id()}.
	 * @param $context The parse tree.
	 */
	public function enterRegular_id(Context\Regular_idContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlsqlParser::regular_id()}.
	 * @param $context The parse tree.
	 */
	public function exitRegular_id(Context\Regular_idContext $context) : void;
}