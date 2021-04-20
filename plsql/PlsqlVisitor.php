<?php

/*
 * Generated from Plsql.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see PlsqlParser}.
 */
interface PlsqlVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see PlsqlParser::plsql()}.
	 *
	 * @param Context\PlsqlContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPlsql(Context\PlsqlContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::package_obj_body()}.
	 *
	 * @param Context\Package_obj_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackage_obj_body(Context\Package_obj_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::procedure_body()}.
	 *
	 * @param Context\Procedure_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProcedure_body(Context\Procedure_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::body()}.
	 *
	 * @param Context\BodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBody(Context\BodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::exception_handler()}.
	 *
	 * @param Context\Exception_handlerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitException_handler(Context\Exception_handlerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::exception_name()}.
	 *
	 * @param Context\Exception_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitException_name(Context\Exception_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::seq_of_statements()}.
	 *
	 * @param Context\Seq_of_statementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSeq_of_statements(Context\Seq_of_statementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::statement()}.
	 *
	 * @param Context\StatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatement(Context\StatementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::label_name()}.
	 *
	 * @param Context\Label_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLabel_name(Context\Label_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::label_declaration()}.
	 *
	 * @param Context\Label_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLabel_declaration(Context\Label_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::seq_of_declare_specs()}.
	 *
	 * @param Context\Seq_of_declare_specsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSeq_of_declare_specs(Context\Seq_of_declare_specsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::parameter()}.
	 *
	 * @param Context\ParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter(Context\ParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::variable_declaration()}.
	 *
	 * @param Context\Variable_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariable_declaration(Context\Variable_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::type_spec()}.
	 *
	 * @param Context\Type_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_spec(Context\Type_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::default_value_part()}.
	 *
	 * @param Context\Default_value_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefault_value_part(Context\Default_value_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::datatype()}.
	 *
	 * @param Context\DatatypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatatype(Context\DatatypeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::parameter_name()}.
	 *
	 * @param Context\Parameter_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter_name(Context\Parameter_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::package_name()}.
	 *
	 * @param Context\Package_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackage_name(Context\Package_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::type_name()}.
	 *
	 * @param Context\Type_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_name(Context\Type_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::schema_object_name()}.
	 *
	 * @param Context\Schema_object_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSchema_object_name(Context\Schema_object_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::identifier()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::char_set_name()}.
	 *
	 * @param Context\Char_set_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitChar_set_name(Context\Char_set_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::id_expression()}.
	 *
	 * @param Context\Id_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitId_expression(Context\Id_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlsqlParser::regular_id()}.
	 *
	 * @param Context\Regular_idContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRegular_id(Context\Regular_idContext $context);
}