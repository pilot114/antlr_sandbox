<?php

/*
 * Generated from PlSqlParser.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see PlSqlParser}.
 */
interface PlSqlParserVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sql_script()}.
	 *
	 * @param Context\Sql_scriptContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSql_script(Context\Sql_scriptContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unit_statement()}.
	 *
	 * @param Context\Unit_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnit_statement(Context\Unit_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_function()}.
	 *
	 * @param Context\Drop_functionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_function(Context\Drop_functionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_function()}.
	 *
	 * @param Context\Alter_functionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_function(Context\Alter_functionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_function_body()}.
	 *
	 * @param Context\Create_function_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_function_body(Context\Create_function_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::parallel_enable_clause()}.
	 *
	 * @param Context\Parallel_enable_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParallel_enable_clause(Context\Parallel_enable_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partition_by_clause()}.
	 *
	 * @param Context\Partition_by_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartition_by_clause(Context\Partition_by_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::result_cache_clause()}.
	 *
	 * @param Context\Result_cache_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitResult_cache_clause(Context\Result_cache_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::relies_on_part()}.
	 *
	 * @param Context\Relies_on_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelies_on_part(Context\Relies_on_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::streaming_clause()}.
	 *
	 * @param Context\Streaming_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStreaming_clause(Context\Streaming_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_package()}.
	 *
	 * @param Context\Drop_packageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_package(Context\Drop_packageContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_package()}.
	 *
	 * @param Context\Alter_packageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_package(Context\Alter_packageContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_package()}.
	 *
	 * @param Context\Create_packageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_package(Context\Create_packageContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_package_body()}.
	 *
	 * @param Context\Create_package_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_package_body(Context\Create_package_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::package_obj_spec()}.
	 *
	 * @param Context\Package_obj_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackage_obj_spec(Context\Package_obj_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::procedure_spec()}.
	 *
	 * @param Context\Procedure_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProcedure_spec(Context\Procedure_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_spec()}.
	 *
	 * @param Context\Function_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_spec(Context\Function_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::package_obj_body()}.
	 *
	 * @param Context\Package_obj_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackage_obj_body(Context\Package_obj_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_procedure()}.
	 *
	 * @param Context\Drop_procedureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_procedure(Context\Drop_procedureContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_procedure()}.
	 *
	 * @param Context\Alter_procedureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_procedure(Context\Alter_procedureContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_body()}.
	 *
	 * @param Context\Function_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_body(Context\Function_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::procedure_body()}.
	 *
	 * @param Context\Procedure_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProcedure_body(Context\Procedure_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_procedure_body()}.
	 *
	 * @param Context\Create_procedure_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_procedure_body(Context\Create_procedure_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_trigger()}.
	 *
	 * @param Context\Drop_triggerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_trigger(Context\Drop_triggerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_trigger()}.
	 *
	 * @param Context\Alter_triggerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_trigger(Context\Alter_triggerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_trigger()}.
	 *
	 * @param Context\Create_triggerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_trigger(Context\Create_triggerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::trigger_follows_clause()}.
	 *
	 * @param Context\Trigger_follows_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrigger_follows_clause(Context\Trigger_follows_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::trigger_when_clause()}.
	 *
	 * @param Context\Trigger_when_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrigger_when_clause(Context\Trigger_when_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::simple_dml_trigger()}.
	 *
	 * @param Context\Simple_dml_triggerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimple_dml_trigger(Context\Simple_dml_triggerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::for_each_row()}.
	 *
	 * @param Context\For_each_rowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFor_each_row(Context\For_each_rowContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::compound_dml_trigger()}.
	 *
	 * @param Context\Compound_dml_triggerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompound_dml_trigger(Context\Compound_dml_triggerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::non_dml_trigger()}.
	 *
	 * @param Context\Non_dml_triggerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNon_dml_trigger(Context\Non_dml_triggerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::trigger_body()}.
	 *
	 * @param Context\Trigger_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrigger_body(Context\Trigger_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::routine_clause()}.
	 *
	 * @param Context\Routine_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRoutine_clause(Context\Routine_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::compound_trigger_block()}.
	 *
	 * @param Context\Compound_trigger_blockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompound_trigger_block(Context\Compound_trigger_blockContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::timing_point_section()}.
	 *
	 * @param Context\Timing_point_sectionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTiming_point_section(Context\Timing_point_sectionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::non_dml_event()}.
	 *
	 * @param Context\Non_dml_eventContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNon_dml_event(Context\Non_dml_eventContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dml_event_clause()}.
	 *
	 * @param Context\Dml_event_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDml_event_clause(Context\Dml_event_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dml_event_element()}.
	 *
	 * @param Context\Dml_event_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDml_event_element(Context\Dml_event_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dml_event_nested_clause()}.
	 *
	 * @param Context\Dml_event_nested_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDml_event_nested_clause(Context\Dml_event_nested_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::referencing_clause()}.
	 *
	 * @param Context\Referencing_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReferencing_clause(Context\Referencing_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::referencing_element()}.
	 *
	 * @param Context\Referencing_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReferencing_element(Context\Referencing_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_type()}.
	 *
	 * @param Context\Drop_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_type(Context\Drop_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_type()}.
	 *
	 * @param Context\Alter_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_type(Context\Alter_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::compile_type_clause()}.
	 *
	 * @param Context\Compile_type_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompile_type_clause(Context\Compile_type_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::replace_type_clause()}.
	 *
	 * @param Context\Replace_type_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReplace_type_clause(Context\Replace_type_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_method_spec()}.
	 *
	 * @param Context\Alter_method_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_method_spec(Context\Alter_method_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_method_element()}.
	 *
	 * @param Context\Alter_method_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_method_element(Context\Alter_method_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_attribute_definition()}.
	 *
	 * @param Context\Alter_attribute_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_attribute_definition(Context\Alter_attribute_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::attribute_definition()}.
	 *
	 * @param Context\Attribute_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttribute_definition(Context\Attribute_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_collection_clauses()}.
	 *
	 * @param Context\Alter_collection_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_collection_clauses(Context\Alter_collection_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dependent_handling_clause()}.
	 *
	 * @param Context\Dependent_handling_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDependent_handling_clause(Context\Dependent_handling_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dependent_exceptions_part()}.
	 *
	 * @param Context\Dependent_exceptions_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDependent_exceptions_part(Context\Dependent_exceptions_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_type()}.
	 *
	 * @param Context\Create_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_type(Context\Create_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_definition()}.
	 *
	 * @param Context\Type_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_definition(Context\Type_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_type_def()}.
	 *
	 * @param Context\Object_type_defContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_type_def(Context\Object_type_defContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_as_part()}.
	 *
	 * @param Context\Object_as_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_as_part(Context\Object_as_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_under_part()}.
	 *
	 * @param Context\Object_under_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_under_part(Context\Object_under_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::nested_table_type_def()}.
	 *
	 * @param Context\Nested_table_type_defContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNested_table_type_def(Context\Nested_table_type_defContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sqlj_object_type()}.
	 *
	 * @param Context\Sqlj_object_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSqlj_object_type(Context\Sqlj_object_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_body()}.
	 *
	 * @param Context\Type_bodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_body(Context\Type_bodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_body_elements()}.
	 *
	 * @param Context\Type_body_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_body_elements(Context\Type_body_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::map_order_func_declaration()}.
	 *
	 * @param Context\Map_order_func_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMap_order_func_declaration(Context\Map_order_func_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subprog_decl_in_type()}.
	 *
	 * @param Context\Subprog_decl_in_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubprog_decl_in_type(Context\Subprog_decl_in_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::proc_decl_in_type()}.
	 *
	 * @param Context\Proc_decl_in_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProc_decl_in_type(Context\Proc_decl_in_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::func_decl_in_type()}.
	 *
	 * @param Context\Func_decl_in_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunc_decl_in_type(Context\Func_decl_in_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::constructor_declaration()}.
	 *
	 * @param Context\Constructor_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstructor_declaration(Context\Constructor_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modifier_clause()}.
	 *
	 * @param Context\Modifier_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModifier_clause(Context\Modifier_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_member_spec()}.
	 *
	 * @param Context\Object_member_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_member_spec(Context\Object_member_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sqlj_object_type_attr()}.
	 *
	 * @param Context\Sqlj_object_type_attrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSqlj_object_type_attr(Context\Sqlj_object_type_attrContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::element_spec()}.
	 *
	 * @param Context\Element_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElement_spec(Context\Element_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::element_spec_options()}.
	 *
	 * @param Context\Element_spec_optionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElement_spec_options(Context\Element_spec_optionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subprogram_spec()}.
	 *
	 * @param Context\Subprogram_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubprogram_spec(Context\Subprogram_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::overriding_subprogram_spec()}.
	 *
	 * @param Context\Overriding_subprogram_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOverriding_subprogram_spec(Context\Overriding_subprogram_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::overriding_function_spec()}.
	 *
	 * @param Context\Overriding_function_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOverriding_function_spec(Context\Overriding_function_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_procedure_spec()}.
	 *
	 * @param Context\Type_procedure_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_procedure_spec(Context\Type_procedure_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_function_spec()}.
	 *
	 * @param Context\Type_function_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_function_spec(Context\Type_function_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::constructor_spec()}.
	 *
	 * @param Context\Constructor_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstructor_spec(Context\Constructor_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::map_order_function_spec()}.
	 *
	 * @param Context\Map_order_function_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMap_order_function_spec(Context\Map_order_function_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pragma_clause()}.
	 *
	 * @param Context\Pragma_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPragma_clause(Context\Pragma_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pragma_elements()}.
	 *
	 * @param Context\Pragma_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPragma_elements(Context\Pragma_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_elements_parameter()}.
	 *
	 * @param Context\Type_elements_parameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_elements_parameter(Context\Type_elements_parameterContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_sequence()}.
	 *
	 * @param Context\Drop_sequenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_sequence(Context\Drop_sequenceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_sequence()}.
	 *
	 * @param Context\Alter_sequenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_sequence(Context\Alter_sequenceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_session()}.
	 *
	 * @param Context\Alter_sessionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_session(Context\Alter_sessionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_session_set_clause()}.
	 *
	 * @param Context\Alter_session_set_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_session_set_clause(Context\Alter_session_set_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_sequence()}.
	 *
	 * @param Context\Create_sequenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_sequence(Context\Create_sequenceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sequence_spec()}.
	 *
	 * @param Context\Sequence_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSequence_spec(Context\Sequence_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sequence_start_clause()}.
	 *
	 * @param Context\Sequence_start_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSequence_start_clause(Context\Sequence_start_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_index()}.
	 *
	 * @param Context\Create_indexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_index(Context\Create_indexContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cluster_index_clause()}.
	 *
	 * @param Context\Cluster_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCluster_index_clause(Context\Cluster_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cluster_name()}.
	 *
	 * @param Context\Cluster_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCluster_name(Context\Cluster_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_index_clause()}.
	 *
	 * @param Context\Table_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_index_clause(Context\Table_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::bitmap_join_index_clause()}.
	 *
	 * @param Context\Bitmap_join_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBitmap_join_index_clause(Context\Bitmap_join_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_expr()}.
	 *
	 * @param Context\Index_exprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_expr(Context\Index_exprContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_properties()}.
	 *
	 * @param Context\Index_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_properties(Context\Index_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::domain_index_clause()}.
	 *
	 * @param Context\Domain_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDomain_index_clause(Context\Domain_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::local_domain_index_clause()}.
	 *
	 * @param Context\Local_domain_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLocal_domain_index_clause(Context\Local_domain_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlindex_clause()}.
	 *
	 * @param Context\Xmlindex_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlindex_clause(Context\Xmlindex_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::local_xmlindex_clause()}.
	 *
	 * @param Context\Local_xmlindex_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLocal_xmlindex_clause(Context\Local_xmlindex_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::global_partitioned_index()}.
	 *
	 * @param Context\Global_partitioned_indexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGlobal_partitioned_index(Context\Global_partitioned_indexContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_partitioning_clause()}.
	 *
	 * @param Context\Index_partitioning_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_partitioning_clause(Context\Index_partitioning_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::local_partitioned_index()}.
	 *
	 * @param Context\Local_partitioned_indexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLocal_partitioned_index(Context\Local_partitioned_indexContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_range_partitioned_table()}.
	 *
	 * @param Context\On_range_partitioned_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_range_partitioned_table(Context\On_range_partitioned_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_list_partitioned_table()}.
	 *
	 * @param Context\On_list_partitioned_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_list_partitioned_table(Context\On_list_partitioned_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partitioned_table()}.
	 *
	 * @param Context\Partitioned_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartitioned_table(Context\Partitioned_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_hash_partitioned_table()}.
	 *
	 * @param Context\On_hash_partitioned_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_hash_partitioned_table(Context\On_hash_partitioned_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_hash_partitioned_clause()}.
	 *
	 * @param Context\On_hash_partitioned_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_hash_partitioned_clause(Context\On_hash_partitioned_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_comp_partitioned_table()}.
	 *
	 * @param Context\On_comp_partitioned_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_comp_partitioned_table(Context\On_comp_partitioned_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_comp_partitioned_clause()}.
	 *
	 * @param Context\On_comp_partitioned_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_comp_partitioned_clause(Context\On_comp_partitioned_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_subpartition_clause()}.
	 *
	 * @param Context\Index_subpartition_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_subpartition_clause(Context\Index_subpartition_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_subpartition_subclause()}.
	 *
	 * @param Context\Index_subpartition_subclauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_subpartition_subclause(Context\Index_subpartition_subclauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::odci_parameters()}.
	 *
	 * @param Context\Odci_parametersContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOdci_parameters(Context\Odci_parametersContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::indextype()}.
	 *
	 * @param Context\IndextypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndextype(Context\IndextypeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_index()}.
	 *
	 * @param Context\Alter_indexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_index(Context\Alter_indexContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_index_ops_set1()}.
	 *
	 * @param Context\Alter_index_ops_set1Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_index_ops_set1(Context\Alter_index_ops_set1Context $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_index_ops_set2()}.
	 *
	 * @param Context\Alter_index_ops_set2Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_index_ops_set2(Context\Alter_index_ops_set2Context $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::visible_or_invisible()}.
	 *
	 * @param Context\Visible_or_invisibleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVisible_or_invisible(Context\Visible_or_invisibleContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::monitoring_nomonitoring()}.
	 *
	 * @param Context\Monitoring_nomonitoringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMonitoring_nomonitoring(Context\Monitoring_nomonitoringContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rebuild_clause()}.
	 *
	 * @param Context\Rebuild_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRebuild_clause(Context\Rebuild_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_index_partitioning()}.
	 *
	 * @param Context\Alter_index_partitioningContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_index_partitioning(Context\Alter_index_partitioningContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_index_default_attrs()}.
	 *
	 * @param Context\Modify_index_default_attrsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_index_default_attrs(Context\Modify_index_default_attrsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_hash_index_partition()}.
	 *
	 * @param Context\Add_hash_index_partitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_hash_index_partition(Context\Add_hash_index_partitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::coalesce_index_partition()}.
	 *
	 * @param Context\Coalesce_index_partitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCoalesce_index_partition(Context\Coalesce_index_partitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_index_partition()}.
	 *
	 * @param Context\Modify_index_partitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_index_partition(Context\Modify_index_partitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_index_partitions_ops()}.
	 *
	 * @param Context\Modify_index_partitions_opsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_index_partitions_ops(Context\Modify_index_partitions_opsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rename_index_partition()}.
	 *
	 * @param Context\Rename_index_partitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRename_index_partition(Context\Rename_index_partitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_index_partition()}.
	 *
	 * @param Context\Drop_index_partitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_index_partition(Context\Drop_index_partitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::split_index_partition()}.
	 *
	 * @param Context\Split_index_partitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSplit_index_partition(Context\Split_index_partitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_partition_description()}.
	 *
	 * @param Context\Index_partition_descriptionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_partition_description(Context\Index_partition_descriptionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_index_subpartition()}.
	 *
	 * @param Context\Modify_index_subpartitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_index_subpartition(Context\Modify_index_subpartitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partition_name_old()}.
	 *
	 * @param Context\Partition_name_oldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartition_name_old(Context\Partition_name_oldContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::new_partition_name()}.
	 *
	 * @param Context\New_partition_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNew_partition_name(Context\New_partition_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::new_index_name()}.
	 *
	 * @param Context\New_index_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNew_index_name(Context\New_index_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_user()}.
	 *
	 * @param Context\Create_userContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_user(Context\Create_userContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_user()}.
	 *
	 * @param Context\Alter_userContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_user(Context\Alter_userContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_identified_by()}.
	 *
	 * @param Context\Alter_identified_byContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_identified_by(Context\Alter_identified_byContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::identified_by()}.
	 *
	 * @param Context\Identified_byContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentified_by(Context\Identified_byContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::identified_other_clause()}.
	 *
	 * @param Context\Identified_other_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentified_other_clause(Context\Identified_other_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::user_tablespace_clause()}.
	 *
	 * @param Context\User_tablespace_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUser_tablespace_clause(Context\User_tablespace_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::quota_clause()}.
	 *
	 * @param Context\Quota_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQuota_clause(Context\Quota_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::profile_clause()}.
	 *
	 * @param Context\Profile_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProfile_clause(Context\Profile_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::role_clause()}.
	 *
	 * @param Context\Role_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRole_clause(Context\Role_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::user_default_role_clause()}.
	 *
	 * @param Context\User_default_role_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUser_default_role_clause(Context\User_default_role_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::password_expire_clause()}.
	 *
	 * @param Context\Password_expire_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPassword_expire_clause(Context\Password_expire_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::user_lock_clause()}.
	 *
	 * @param Context\User_lock_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUser_lock_clause(Context\User_lock_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::user_editions_clause()}.
	 *
	 * @param Context\User_editions_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUser_editions_clause(Context\User_editions_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_user_editions_clause()}.
	 *
	 * @param Context\Alter_user_editions_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_user_editions_clause(Context\Alter_user_editions_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::proxy_clause()}.
	 *
	 * @param Context\Proxy_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProxy_clause(Context\Proxy_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::container_names()}.
	 *
	 * @param Context\Container_namesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContainer_names(Context\Container_namesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::set_container_data()}.
	 *
	 * @param Context\Set_container_dataContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSet_container_data(Context\Set_container_dataContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_rem_container_data()}.
	 *
	 * @param Context\Add_rem_container_dataContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_rem_container_data(Context\Add_rem_container_dataContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::container_data_clause()}.
	 *
	 * @param Context\Container_data_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContainer_data_clause(Context\Container_data_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::analyze()}.
	 *
	 * @param Context\AnalyzeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnalyze(Context\AnalyzeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partition_extention_clause()}.
	 *
	 * @param Context\Partition_extention_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartition_extention_clause(Context\Partition_extention_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::validation_clauses()}.
	 *
	 * @param Context\Validation_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValidation_clauses(Context\Validation_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::online_or_offline()}.
	 *
	 * @param Context\Online_or_offlineContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOnline_or_offline(Context\Online_or_offlineContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::into_clause1()}.
	 *
	 * @param Context\Into_clause1Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInto_clause1(Context\Into_clause1Context $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partition_key_value()}.
	 *
	 * @param Context\Partition_key_valueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartition_key_value(Context\Partition_key_valueContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subpartition_key_value()}.
	 *
	 * @param Context\Subpartition_key_valueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubpartition_key_value(Context\Subpartition_key_valueContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::associate_statistics()}.
	 *
	 * @param Context\Associate_statisticsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssociate_statistics(Context\Associate_statisticsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_association()}.
	 *
	 * @param Context\Column_associationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_association(Context\Column_associationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_association()}.
	 *
	 * @param Context\Function_associationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_association(Context\Function_associationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::indextype_name()}.
	 *
	 * @param Context\Indextype_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndextype_name(Context\Indextype_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::using_statistics_type()}.
	 *
	 * @param Context\Using_statistics_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUsing_statistics_type(Context\Using_statistics_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::statistics_type_name()}.
	 *
	 * @param Context\Statistics_type_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatistics_type_name(Context\Statistics_type_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::default_cost_clause()}.
	 *
	 * @param Context\Default_cost_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefault_cost_clause(Context\Default_cost_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cpu_cost()}.
	 *
	 * @param Context\Cpu_costContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCpu_cost(Context\Cpu_costContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::io_cost()}.
	 *
	 * @param Context\Io_costContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIo_cost(Context\Io_costContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::network_cost()}.
	 *
	 * @param Context\Network_costContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNetwork_cost(Context\Network_costContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::default_selectivity_clause()}.
	 *
	 * @param Context\Default_selectivity_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefault_selectivity_clause(Context\Default_selectivity_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::default_selectivity()}.
	 *
	 * @param Context\Default_selectivityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefault_selectivity(Context\Default_selectivityContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::storage_table_clause()}.
	 *
	 * @param Context\Storage_table_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStorage_table_clause(Context\Storage_table_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unified_auditing()}.
	 *
	 * @param Context\Unified_auditingContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnified_auditing(Context\Unified_auditingContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::policy_name()}.
	 *
	 * @param Context\Policy_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPolicy_name(Context\Policy_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::audit_traditional()}.
	 *
	 * @param Context\Audit_traditionalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAudit_traditional(Context\Audit_traditionalContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::audit_direct_path()}.
	 *
	 * @param Context\Audit_direct_pathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAudit_direct_path(Context\Audit_direct_pathContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::audit_container_clause()}.
	 *
	 * @param Context\Audit_container_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAudit_container_clause(Context\Audit_container_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::audit_operation_clause()}.
	 *
	 * @param Context\Audit_operation_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAudit_operation_clause(Context\Audit_operation_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::auditing_by_clause()}.
	 *
	 * @param Context\Auditing_by_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAuditing_by_clause(Context\Auditing_by_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::audit_user()}.
	 *
	 * @param Context\Audit_userContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAudit_user(Context\Audit_userContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::audit_schema_object_clause()}.
	 *
	 * @param Context\Audit_schema_object_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAudit_schema_object_clause(Context\Audit_schema_object_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sql_operation()}.
	 *
	 * @param Context\Sql_operationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSql_operation(Context\Sql_operationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::auditing_on_clause()}.
	 *
	 * @param Context\Auditing_on_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAuditing_on_clause(Context\Auditing_on_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_name()}.
	 *
	 * @param Context\Model_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_name(Context\Model_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_name()}.
	 *
	 * @param Context\Object_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_name(Context\Object_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::profile_name()}.
	 *
	 * @param Context\Profile_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProfile_name(Context\Profile_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sql_statement_shortcut()}.
	 *
	 * @param Context\Sql_statement_shortcutContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSql_statement_shortcut(Context\Sql_statement_shortcutContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_index()}.
	 *
	 * @param Context\Drop_indexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_index(Context\Drop_indexContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rename_object()}.
	 *
	 * @param Context\Rename_objectContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRename_object(Context\Rename_objectContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::grant_statement()}.
	 *
	 * @param Context\Grant_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGrant_statement(Context\Grant_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::container_clause()}.
	 *
	 * @param Context\Container_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContainer_clause(Context\Container_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_directory()}.
	 *
	 * @param Context\Create_directoryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_directory(Context\Create_directoryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::directory_name()}.
	 *
	 * @param Context\Directory_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDirectory_name(Context\Directory_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::directory_path()}.
	 *
	 * @param Context\Directory_pathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDirectory_path(Context\Directory_pathContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_library()}.
	 *
	 * @param Context\Alter_libraryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_library(Context\Alter_libraryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::library_editionable()}.
	 *
	 * @param Context\Library_editionableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLibrary_editionable(Context\Library_editionableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::library_debug()}.
	 *
	 * @param Context\Library_debugContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLibrary_debug(Context\Library_debugContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::compiler_parameters_clause()}.
	 *
	 * @param Context\Compiler_parameters_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompiler_parameters_clause(Context\Compiler_parameters_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::parameter_value()}.
	 *
	 * @param Context\Parameter_valueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter_value(Context\Parameter_valueContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::library_name()}.
	 *
	 * @param Context\Library_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLibrary_name(Context\Library_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_view()}.
	 *
	 * @param Context\Alter_viewContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_view(Context\Alter_viewContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_view_editionable()}.
	 *
	 * @param Context\Alter_view_editionableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_view_editionable(Context\Alter_view_editionableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_view()}.
	 *
	 * @param Context\Create_viewContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_view(Context\Create_viewContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::view_options()}.
	 *
	 * @param Context\View_optionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitView_options(Context\View_optionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::view_alias_constraint()}.
	 *
	 * @param Context\View_alias_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitView_alias_constraint(Context\View_alias_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_view_clause()}.
	 *
	 * @param Context\Object_view_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_view_clause(Context\Object_view_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::inline_constraint()}.
	 *
	 * @param Context\Inline_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInline_constraint(Context\Inline_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::inline_ref_constraint()}.
	 *
	 * @param Context\Inline_ref_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInline_ref_constraint(Context\Inline_ref_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::out_of_line_ref_constraint()}.
	 *
	 * @param Context\Out_of_line_ref_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOut_of_line_ref_constraint(Context\Out_of_line_ref_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::out_of_line_constraint()}.
	 *
	 * @param Context\Out_of_line_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOut_of_line_constraint(Context\Out_of_line_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::constraint_state()}.
	 *
	 * @param Context\Constraint_stateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraint_state(Context\Constraint_stateContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_tablespace()}.
	 *
	 * @param Context\Alter_tablespaceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_tablespace(Context\Alter_tablespaceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::datafile_tempfile_clauses()}.
	 *
	 * @param Context\Datafile_tempfile_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatafile_tempfile_clauses(Context\Datafile_tempfile_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace_logging_clauses()}.
	 *
	 * @param Context\Tablespace_logging_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace_logging_clauses(Context\Tablespace_logging_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace_group_clause()}.
	 *
	 * @param Context\Tablespace_group_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace_group_clause(Context\Tablespace_group_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace_group_name()}.
	 *
	 * @param Context\Tablespace_group_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace_group_name(Context\Tablespace_group_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace_state_clauses()}.
	 *
	 * @param Context\Tablespace_state_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace_state_clauses(Context\Tablespace_state_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::flashback_mode_clause()}.
	 *
	 * @param Context\Flashback_mode_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFlashback_mode_clause(Context\Flashback_mode_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::new_tablespace_name()}.
	 *
	 * @param Context\New_tablespace_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNew_tablespace_name(Context\New_tablespace_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_tablespace()}.
	 *
	 * @param Context\Create_tablespaceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_tablespace(Context\Create_tablespaceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::permanent_tablespace_clause()}.
	 *
	 * @param Context\Permanent_tablespace_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPermanent_tablespace_clause(Context\Permanent_tablespace_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace_encryption_spec()}.
	 *
	 * @param Context\Tablespace_encryption_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace_encryption_spec(Context\Tablespace_encryption_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::logging_clause()}.
	 *
	 * @param Context\Logging_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogging_clause(Context\Logging_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::extent_management_clause()}.
	 *
	 * @param Context\Extent_management_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExtent_management_clause(Context\Extent_management_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::segment_management_clause()}.
	 *
	 * @param Context\Segment_management_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSegment_management_clause(Context\Segment_management_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::temporary_tablespace_clause()}.
	 *
	 * @param Context\Temporary_tablespace_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTemporary_tablespace_clause(Context\Temporary_tablespace_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::undo_tablespace_clause()}.
	 *
	 * @param Context\Undo_tablespace_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUndo_tablespace_clause(Context\Undo_tablespace_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace_retention_clause()}.
	 *
	 * @param Context\Tablespace_retention_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace_retention_clause(Context\Tablespace_retention_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::datafile_specification()}.
	 *
	 * @param Context\Datafile_specificationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatafile_specification(Context\Datafile_specificationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tempfile_specification()}.
	 *
	 * @param Context\Tempfile_specificationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTempfile_specification(Context\Tempfile_specificationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::datafile_tempfile_spec()}.
	 *
	 * @param Context\Datafile_tempfile_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatafile_tempfile_spec(Context\Datafile_tempfile_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::redo_log_file_spec()}.
	 *
	 * @param Context\Redo_log_file_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRedo_log_file_spec(Context\Redo_log_file_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::autoextend_clause()}.
	 *
	 * @param Context\Autoextend_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAutoextend_clause(Context\Autoextend_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::maxsize_clause()}.
	 *
	 * @param Context\Maxsize_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMaxsize_clause(Context\Maxsize_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::build_clause()}.
	 *
	 * @param Context\Build_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBuild_clause(Context\Build_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::parallel_clause()}.
	 *
	 * @param Context\Parallel_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParallel_clause(Context\Parallel_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_materialized_view()}.
	 *
	 * @param Context\Alter_materialized_viewContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_materialized_view(Context\Alter_materialized_viewContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_mv_option1()}.
	 *
	 * @param Context\Alter_mv_option1Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_mv_option1(Context\Alter_mv_option1Context $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_mv_refresh()}.
	 *
	 * @param Context\Alter_mv_refreshContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_mv_refresh(Context\Alter_mv_refreshContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rollback_segment()}.
	 *
	 * @param Context\Rollback_segmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRollback_segment(Context\Rollback_segmentContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_mv_column_clause()}.
	 *
	 * @param Context\Modify_mv_column_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_mv_column_clause(Context\Modify_mv_column_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_materialized_view_log()}.
	 *
	 * @param Context\Alter_materialized_view_logContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_materialized_view_log(Context\Alter_materialized_view_logContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_mv_log_column_clause()}.
	 *
	 * @param Context\Add_mv_log_column_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_mv_log_column_clause(Context\Add_mv_log_column_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::move_mv_log_clause()}.
	 *
	 * @param Context\Move_mv_log_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMove_mv_log_clause(Context\Move_mv_log_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::mv_log_augmentation()}.
	 *
	 * @param Context\Mv_log_augmentationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMv_log_augmentation(Context\Mv_log_augmentationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::datetime_expr()}.
	 *
	 * @param Context\Datetime_exprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatetime_expr(Context\Datetime_exprContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::interval_expr()}.
	 *
	 * @param Context\Interval_exprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInterval_expr(Context\Interval_exprContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::synchronous_or_asynchronous()}.
	 *
	 * @param Context\Synchronous_or_asynchronousContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSynchronous_or_asynchronous(Context\Synchronous_or_asynchronousContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::including_or_excluding()}.
	 *
	 * @param Context\Including_or_excludingContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncluding_or_excluding(Context\Including_or_excludingContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_materialized_view_log()}.
	 *
	 * @param Context\Create_materialized_view_logContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_materialized_view_log(Context\Create_materialized_view_logContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::new_values_clause()}.
	 *
	 * @param Context\New_values_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNew_values_clause(Context\New_values_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::mv_log_purge_clause()}.
	 *
	 * @param Context\Mv_log_purge_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMv_log_purge_clause(Context\Mv_log_purge_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_materialized_view()}.
	 *
	 * @param Context\Create_materialized_viewContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_materialized_view(Context\Create_materialized_viewContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_mv_refresh()}.
	 *
	 * @param Context\Create_mv_refreshContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_mv_refresh(Context\Create_mv_refreshContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_context()}.
	 *
	 * @param Context\Create_contextContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_context(Context\Create_contextContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::oracle_namespace()}.
	 *
	 * @param Context\Oracle_namespaceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOracle_namespace(Context\Oracle_namespaceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_cluster()}.
	 *
	 * @param Context\Create_clusterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_cluster(Context\Create_clusterContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_table()}.
	 *
	 * @param Context\Create_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_table(Context\Create_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmltype_table()}.
	 *
	 * @param Context\Xmltype_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmltype_table(Context\Xmltype_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmltype_virtual_columns()}.
	 *
	 * @param Context\Xmltype_virtual_columnsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmltype_virtual_columns(Context\Xmltype_virtual_columnsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmltype_column_properties()}.
	 *
	 * @param Context\Xmltype_column_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmltype_column_properties(Context\Xmltype_column_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmltype_storage()}.
	 *
	 * @param Context\Xmltype_storageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmltype_storage(Context\Xmltype_storageContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlschema_spec()}.
	 *
	 * @param Context\Xmlschema_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlschema_spec(Context\Xmlschema_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_table()}.
	 *
	 * @param Context\Object_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_table(Context\Object_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::oid_index_clause()}.
	 *
	 * @param Context\Oid_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOid_index_clause(Context\Oid_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::oid_clause()}.
	 *
	 * @param Context\Oid_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOid_clause(Context\Oid_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_properties()}.
	 *
	 * @param Context\Object_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_properties(Context\Object_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_table_substitution()}.
	 *
	 * @param Context\Object_table_substitutionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_table_substitution(Context\Object_table_substitutionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::relational_table()}.
	 *
	 * @param Context\Relational_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelational_table(Context\Relational_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::relational_property()}.
	 *
	 * @param Context\Relational_propertyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelational_property(Context\Relational_propertyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_partitioning_clauses()}.
	 *
	 * @param Context\Table_partitioning_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_partitioning_clauses(Context\Table_partitioning_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::range_partitions()}.
	 *
	 * @param Context\Range_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRange_partitions(Context\Range_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::list_partitions()}.
	 *
	 * @param Context\List_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitList_partitions(Context\List_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::hash_partitions()}.
	 *
	 * @param Context\Hash_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHash_partitions(Context\Hash_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::individual_hash_partitions()}.
	 *
	 * @param Context\Individual_hash_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndividual_hash_partitions(Context\Individual_hash_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::hash_partitions_by_quantity()}.
	 *
	 * @param Context\Hash_partitions_by_quantityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHash_partitions_by_quantity(Context\Hash_partitions_by_quantityContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::hash_partition_quantity()}.
	 *
	 * @param Context\Hash_partition_quantityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHash_partition_quantity(Context\Hash_partition_quantityContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::composite_range_partitions()}.
	 *
	 * @param Context\Composite_range_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComposite_range_partitions(Context\Composite_range_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::composite_list_partitions()}.
	 *
	 * @param Context\Composite_list_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComposite_list_partitions(Context\Composite_list_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::composite_hash_partitions()}.
	 *
	 * @param Context\Composite_hash_partitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComposite_hash_partitions(Context\Composite_hash_partitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::reference_partitioning()}.
	 *
	 * @param Context\Reference_partitioningContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReference_partitioning(Context\Reference_partitioningContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::reference_partition_desc()}.
	 *
	 * @param Context\Reference_partition_descContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReference_partition_desc(Context\Reference_partition_descContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::system_partitioning()}.
	 *
	 * @param Context\System_partitioningContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSystem_partitioning(Context\System_partitioningContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::range_partition_desc()}.
	 *
	 * @param Context\Range_partition_descContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRange_partition_desc(Context\Range_partition_descContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::list_partition_desc()}.
	 *
	 * @param Context\List_partition_descContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitList_partition_desc(Context\List_partition_descContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subpartition_template()}.
	 *
	 * @param Context\Subpartition_templateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubpartition_template(Context\Subpartition_templateContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::hash_subpartition_quantity()}.
	 *
	 * @param Context\Hash_subpartition_quantityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHash_subpartition_quantity(Context\Hash_subpartition_quantityContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subpartition_by_range()}.
	 *
	 * @param Context\Subpartition_by_rangeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubpartition_by_range(Context\Subpartition_by_rangeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subpartition_by_list()}.
	 *
	 * @param Context\Subpartition_by_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubpartition_by_list(Context\Subpartition_by_listContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subpartition_by_hash()}.
	 *
	 * @param Context\Subpartition_by_hashContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubpartition_by_hash(Context\Subpartition_by_hashContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subpartition_name()}.
	 *
	 * @param Context\Subpartition_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubpartition_name(Context\Subpartition_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::range_subpartition_desc()}.
	 *
	 * @param Context\Range_subpartition_descContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRange_subpartition_desc(Context\Range_subpartition_descContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::list_subpartition_desc()}.
	 *
	 * @param Context\List_subpartition_descContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitList_subpartition_desc(Context\List_subpartition_descContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::individual_hash_subparts()}.
	 *
	 * @param Context\Individual_hash_subpartsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndividual_hash_subparts(Context\Individual_hash_subpartsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::hash_subparts_by_quantity()}.
	 *
	 * @param Context\Hash_subparts_by_quantityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHash_subparts_by_quantity(Context\Hash_subparts_by_quantityContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::range_values_clause()}.
	 *
	 * @param Context\Range_values_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRange_values_clause(Context\Range_values_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::list_values_clause()}.
	 *
	 * @param Context\List_values_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitList_values_clause(Context\List_values_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_partition_description()}.
	 *
	 * @param Context\Table_partition_descriptionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_partition_description(Context\Table_partition_descriptionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partitioning_storage_clause()}.
	 *
	 * @param Context\Partitioning_storage_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartitioning_storage_clause(Context\Partitioning_storage_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_partitioning_storage()}.
	 *
	 * @param Context\Lob_partitioning_storageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_partitioning_storage(Context\Lob_partitioning_storageContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::datatype_null_enable()}.
	 *
	 * @param Context\Datatype_null_enableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatatype_null_enable(Context\Datatype_null_enableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::size_clause()}.
	 *
	 * @param Context\Size_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSize_clause(Context\Size_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_compression()}.
	 *
	 * @param Context\Table_compressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_compression(Context\Table_compressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::physical_attributes_clause()}.
	 *
	 * @param Context\Physical_attributes_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPhysical_attributes_clause(Context\Physical_attributes_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::storage_clause()}.
	 *
	 * @param Context\Storage_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStorage_clause(Context\Storage_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::deferred_segment_creation()}.
	 *
	 * @param Context\Deferred_segment_creationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeferred_segment_creation(Context\Deferred_segment_creationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::segment_attributes_clause()}.
	 *
	 * @param Context\Segment_attributes_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSegment_attributes_clause(Context\Segment_attributes_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::physical_properties()}.
	 *
	 * @param Context\Physical_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPhysical_properties(Context\Physical_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::row_movement_clause()}.
	 *
	 * @param Context\Row_movement_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRow_movement_clause(Context\Row_movement_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::flashback_archive_clause()}.
	 *
	 * @param Context\Flashback_archive_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFlashback_archive_clause(Context\Flashback_archive_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::log_grp()}.
	 *
	 * @param Context\Log_grpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLog_grp(Context\Log_grpContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::supplemental_table_logging()}.
	 *
	 * @param Context\Supplemental_table_loggingContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSupplemental_table_logging(Context\Supplemental_table_loggingContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::supplemental_log_grp_clause()}.
	 *
	 * @param Context\Supplemental_log_grp_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSupplemental_log_grp_clause(Context\Supplemental_log_grp_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::supplemental_id_key_clause()}.
	 *
	 * @param Context\Supplemental_id_key_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSupplemental_id_key_clause(Context\Supplemental_id_key_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::allocate_extent_clause()}.
	 *
	 * @param Context\Allocate_extent_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAllocate_extent_clause(Context\Allocate_extent_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::deallocate_unused_clause()}.
	 *
	 * @param Context\Deallocate_unused_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeallocate_unused_clause(Context\Deallocate_unused_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::shrink_clause()}.
	 *
	 * @param Context\Shrink_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShrink_clause(Context\Shrink_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::records_per_block_clause()}.
	 *
	 * @param Context\Records_per_block_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecords_per_block_clause(Context\Records_per_block_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::upgrade_table_clause()}.
	 *
	 * @param Context\Upgrade_table_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpgrade_table_clause(Context\Upgrade_table_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::truncate_table()}.
	 *
	 * @param Context\Truncate_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTruncate_table(Context\Truncate_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_table()}.
	 *
	 * @param Context\Drop_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_table(Context\Drop_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_view()}.
	 *
	 * @param Context\Drop_viewContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_view(Context\Drop_viewContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::comment_on_column()}.
	 *
	 * @param Context\Comment_on_columnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComment_on_column(Context\Comment_on_columnContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::enable_or_disable()}.
	 *
	 * @param Context\Enable_or_disableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnable_or_disable(Context\Enable_or_disableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::allow_or_disallow()}.
	 *
	 * @param Context\Allow_or_disallowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAllow_or_disallow(Context\Allow_or_disallowContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_synonym()}.
	 *
	 * @param Context\Create_synonymContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_synonym(Context\Create_synonymContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::comment_on_table()}.
	 *
	 * @param Context\Comment_on_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComment_on_table(Context\Comment_on_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_cluster()}.
	 *
	 * @param Context\Alter_clusterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_cluster(Context\Alter_clusterContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cache_or_nocache()}.
	 *
	 * @param Context\Cache_or_nocacheContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCache_or_nocache(Context\Cache_or_nocacheContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::database_name()}.
	 *
	 * @param Context\Database_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatabase_name(Context\Database_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_database()}.
	 *
	 * @param Context\Alter_databaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_database(Context\Alter_databaseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::startup_clauses()}.
	 *
	 * @param Context\Startup_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStartup_clauses(Context\Startup_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::resetlogs_or_noresetlogs()}.
	 *
	 * @param Context\Resetlogs_or_noresetlogsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitResetlogs_or_noresetlogs(Context\Resetlogs_or_noresetlogsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::upgrade_or_downgrade()}.
	 *
	 * @param Context\Upgrade_or_downgradeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpgrade_or_downgrade(Context\Upgrade_or_downgradeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::recovery_clauses()}.
	 *
	 * @param Context\Recovery_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecovery_clauses(Context\Recovery_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::begin_or_end()}.
	 *
	 * @param Context\Begin_or_endContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBegin_or_end(Context\Begin_or_endContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::general_recovery()}.
	 *
	 * @param Context\General_recoveryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGeneral_recovery(Context\General_recoveryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::full_database_recovery()}.
	 *
	 * @param Context\Full_database_recoveryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFull_database_recovery(Context\Full_database_recoveryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partial_database_recovery()}.
	 *
	 * @param Context\Partial_database_recoveryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartial_database_recovery(Context\Partial_database_recoveryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partial_database_recovery_10g()}.
	 *
	 * @param Context\Partial_database_recovery_10gContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartial_database_recovery_10g(Context\Partial_database_recovery_10gContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::managed_standby_recovery()}.
	 *
	 * @param Context\Managed_standby_recoveryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitManaged_standby_recovery(Context\Managed_standby_recoveryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::db_name()}.
	 *
	 * @param Context\Db_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDb_name(Context\Db_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::database_file_clauses()}.
	 *
	 * @param Context\Database_file_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatabase_file_clauses(Context\Database_file_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::create_datafile_clause()}.
	 *
	 * @param Context\Create_datafile_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCreate_datafile_clause(Context\Create_datafile_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_datafile_clause()}.
	 *
	 * @param Context\Alter_datafile_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_datafile_clause(Context\Alter_datafile_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_tempfile_clause()}.
	 *
	 * @param Context\Alter_tempfile_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_tempfile_clause(Context\Alter_tempfile_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::logfile_clauses()}.
	 *
	 * @param Context\Logfile_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogfile_clauses(Context\Logfile_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_logfile_clauses()}.
	 *
	 * @param Context\Add_logfile_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_logfile_clauses(Context\Add_logfile_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::log_file_group()}.
	 *
	 * @param Context\Log_file_groupContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLog_file_group(Context\Log_file_groupContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_logfile_clauses()}.
	 *
	 * @param Context\Drop_logfile_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_logfile_clauses(Context\Drop_logfile_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::switch_logfile_clause()}.
	 *
	 * @param Context\Switch_logfile_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitch_logfile_clause(Context\Switch_logfile_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::supplemental_db_logging()}.
	 *
	 * @param Context\Supplemental_db_loggingContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSupplemental_db_logging(Context\Supplemental_db_loggingContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_or_drop()}.
	 *
	 * @param Context\Add_or_dropContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_or_drop(Context\Add_or_dropContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::supplemental_plsql_clause()}.
	 *
	 * @param Context\Supplemental_plsql_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSupplemental_plsql_clause(Context\Supplemental_plsql_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::logfile_descriptor()}.
	 *
	 * @param Context\Logfile_descriptorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogfile_descriptor(Context\Logfile_descriptorContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::controlfile_clauses()}.
	 *
	 * @param Context\Controlfile_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitControlfile_clauses(Context\Controlfile_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::trace_file_clause()}.
	 *
	 * @param Context\Trace_file_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrace_file_clause(Context\Trace_file_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::standby_database_clauses()}.
	 *
	 * @param Context\Standby_database_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStandby_database_clauses(Context\Standby_database_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::activate_standby_db_clause()}.
	 *
	 * @param Context\Activate_standby_db_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitActivate_standby_db_clause(Context\Activate_standby_db_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::maximize_standby_db_clause()}.
	 *
	 * @param Context\Maximize_standby_db_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMaximize_standby_db_clause(Context\Maximize_standby_db_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::register_logfile_clause()}.
	 *
	 * @param Context\Register_logfile_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRegister_logfile_clause(Context\Register_logfile_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::commit_switchover_clause()}.
	 *
	 * @param Context\Commit_switchover_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCommit_switchover_clause(Context\Commit_switchover_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::start_standby_clause()}.
	 *
	 * @param Context\Start_standby_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStart_standby_clause(Context\Start_standby_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::stop_standby_clause()}.
	 *
	 * @param Context\Stop_standby_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStop_standby_clause(Context\Stop_standby_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::convert_database_clause()}.
	 *
	 * @param Context\Convert_database_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConvert_database_clause(Context\Convert_database_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::default_settings_clause()}.
	 *
	 * @param Context\Default_settings_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefault_settings_clause(Context\Default_settings_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::set_time_zone_clause()}.
	 *
	 * @param Context\Set_time_zone_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSet_time_zone_clause(Context\Set_time_zone_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::instance_clauses()}.
	 *
	 * @param Context\Instance_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInstance_clauses(Context\Instance_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::security_clause()}.
	 *
	 * @param Context\Security_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSecurity_clause(Context\Security_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::domain()}.
	 *
	 * @param Context\DomainContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDomain(Context\DomainContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::database()}.
	 *
	 * @param Context\DatabaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatabase(Context\DatabaseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::edition_name()}.
	 *
	 * @param Context\Edition_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEdition_name(Context\Edition_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::filenumber()}.
	 *
	 * @param Context\FilenumberContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFilenumber(Context\FilenumberContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::filename()}.
	 *
	 * @param Context\FilenameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFilename(Context\FilenameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_table()}.
	 *
	 * @param Context\Alter_tableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_table(Context\Alter_tableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_table_properties()}.
	 *
	 * @param Context\Alter_table_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_table_properties(Context\Alter_table_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_table_properties_1()}.
	 *
	 * @param Context\Alter_table_properties_1Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_table_properties_1(Context\Alter_table_properties_1Context $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_iot_clauses()}.
	 *
	 * @param Context\Alter_iot_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_iot_clauses(Context\Alter_iot_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_mapping_table_clause()}.
	 *
	 * @param Context\Alter_mapping_table_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_mapping_table_clause(Context\Alter_mapping_table_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_overflow_clause()}.
	 *
	 * @param Context\Alter_overflow_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_overflow_clause(Context\Alter_overflow_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_overflow_clause()}.
	 *
	 * @param Context\Add_overflow_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_overflow_clause(Context\Add_overflow_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::enable_disable_clause()}.
	 *
	 * @param Context\Enable_disable_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnable_disable_clause(Context\Enable_disable_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::using_index_clause()}.
	 *
	 * @param Context\Using_index_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUsing_index_clause(Context\Using_index_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_attributes()}.
	 *
	 * @param Context\Index_attributesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_attributes(Context\Index_attributesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sort_or_nosort()}.
	 *
	 * @param Context\Sort_or_nosortContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSort_or_nosort(Context\Sort_or_nosortContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::exceptions_clause()}.
	 *
	 * @param Context\Exceptions_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExceptions_clause(Context\Exceptions_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::move_table_clause()}.
	 *
	 * @param Context\Move_table_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMove_table_clause(Context\Move_table_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_org_table_clause()}.
	 *
	 * @param Context\Index_org_table_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_org_table_clause(Context\Index_org_table_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::mapping_table_clause()}.
	 *
	 * @param Context\Mapping_table_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMapping_table_clause(Context\Mapping_table_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::key_compression()}.
	 *
	 * @param Context\Key_compressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKey_compression(Context\Key_compressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_org_overflow_clause()}.
	 *
	 * @param Context\Index_org_overflow_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_org_overflow_clause(Context\Index_org_overflow_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_clauses()}.
	 *
	 * @param Context\Column_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_clauses(Context\Column_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_collection_retrieval()}.
	 *
	 * @param Context\Modify_collection_retrievalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_collection_retrieval(Context\Modify_collection_retrievalContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::collection_item()}.
	 *
	 * @param Context\Collection_itemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCollection_item(Context\Collection_itemContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rename_column_clause()}.
	 *
	 * @param Context\Rename_column_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRename_column_clause(Context\Rename_column_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::old_column_name()}.
	 *
	 * @param Context\Old_column_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOld_column_name(Context\Old_column_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::new_column_name()}.
	 *
	 * @param Context\New_column_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNew_column_name(Context\New_column_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_modify_drop_column_clauses()}.
	 *
	 * @param Context\Add_modify_drop_column_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_modify_drop_column_clauses(Context\Add_modify_drop_column_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_column_clause()}.
	 *
	 * @param Context\Drop_column_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_column_clause(Context\Drop_column_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_column_clauses()}.
	 *
	 * @param Context\Modify_column_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_column_clauses(Context\Modify_column_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_col_properties()}.
	 *
	 * @param Context\Modify_col_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_col_properties(Context\Modify_col_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_col_substitutable()}.
	 *
	 * @param Context\Modify_col_substitutableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_col_substitutable(Context\Modify_col_substitutableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_column_clause()}.
	 *
	 * @param Context\Add_column_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_column_clause(Context\Add_column_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::alter_varray_col_properties()}.
	 *
	 * @param Context\Alter_varray_col_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlter_varray_col_properties(Context\Alter_varray_col_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::varray_col_properties()}.
	 *
	 * @param Context\Varray_col_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarray_col_properties(Context\Varray_col_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::varray_storage_clause()}.
	 *
	 * @param Context\Varray_storage_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarray_storage_clause(Context\Varray_storage_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_segname()}.
	 *
	 * @param Context\Lob_segnameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_segname(Context\Lob_segnameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_item()}.
	 *
	 * @param Context\Lob_itemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_item(Context\Lob_itemContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_storage_parameters()}.
	 *
	 * @param Context\Lob_storage_parametersContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_storage_parameters(Context\Lob_storage_parametersContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_storage_clause()}.
	 *
	 * @param Context\Lob_storage_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_storage_clause(Context\Lob_storage_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_lob_storage_clause()}.
	 *
	 * @param Context\Modify_lob_storage_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_lob_storage_clause(Context\Modify_lob_storage_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::modify_lob_parameters()}.
	 *
	 * @param Context\Modify_lob_parametersContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModify_lob_parameters(Context\Modify_lob_parametersContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_parameters()}.
	 *
	 * @param Context\Lob_parametersContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_parameters(Context\Lob_parametersContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_deduplicate_clause()}.
	 *
	 * @param Context\Lob_deduplicate_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_deduplicate_clause(Context\Lob_deduplicate_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_compression_clause()}.
	 *
	 * @param Context\Lob_compression_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_compression_clause(Context\Lob_compression_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lob_retention_clause()}.
	 *
	 * @param Context\Lob_retention_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLob_retention_clause(Context\Lob_retention_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::encryption_spec()}.
	 *
	 * @param Context\Encryption_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEncryption_spec(Context\Encryption_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tablespace()}.
	 *
	 * @param Context\TablespaceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTablespace(Context\TablespaceContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::varray_item()}.
	 *
	 * @param Context\Varray_itemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarray_item(Context\Varray_itemContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_properties()}.
	 *
	 * @param Context\Column_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_properties(Context\Column_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::period_definition()}.
	 *
	 * @param Context\Period_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPeriod_definition(Context\Period_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::start_time_column()}.
	 *
	 * @param Context\Start_time_columnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStart_time_column(Context\Start_time_columnContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::end_time_column()}.
	 *
	 * @param Context\End_time_columnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnd_time_column(Context\End_time_columnContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_definition()}.
	 *
	 * @param Context\Column_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_definition(Context\Column_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::virtual_column_definition()}.
	 *
	 * @param Context\Virtual_column_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVirtual_column_definition(Context\Virtual_column_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::autogenerated_sequence_definition()}.
	 *
	 * @param Context\Autogenerated_sequence_definitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAutogenerated_sequence_definition(Context\Autogenerated_sequence_definitionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::out_of_line_part_storage()}.
	 *
	 * @param Context\Out_of_line_part_storageContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOut_of_line_part_storage(Context\Out_of_line_part_storageContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::nested_table_col_properties()}.
	 *
	 * @param Context\Nested_table_col_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNested_table_col_properties(Context\Nested_table_col_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::nested_item()}.
	 *
	 * @param Context\Nested_itemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNested_item(Context\Nested_itemContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::substitutable_column_clause()}.
	 *
	 * @param Context\Substitutable_column_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubstitutable_column_clause(Context\Substitutable_column_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partition_name()}.
	 *
	 * @param Context\Partition_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartition_name(Context\Partition_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::supplemental_logging_props()}.
	 *
	 * @param Context\Supplemental_logging_propsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSupplemental_logging_props(Context\Supplemental_logging_propsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_or_attribute()}.
	 *
	 * @param Context\Column_or_attributeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_or_attribute(Context\Column_or_attributeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_type_col_properties()}.
	 *
	 * @param Context\Object_type_col_propertiesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_type_col_properties(Context\Object_type_col_propertiesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::constraint_clauses()}.
	 *
	 * @param Context\Constraint_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraint_clauses(Context\Constraint_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::old_constraint_name()}.
	 *
	 * @param Context\Old_constraint_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOld_constraint_name(Context\Old_constraint_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::new_constraint_name()}.
	 *
	 * @param Context\New_constraint_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNew_constraint_name(Context\New_constraint_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_constraint_clause()}.
	 *
	 * @param Context\Drop_constraint_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_constraint_clause(Context\Drop_constraint_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_primary_key_or_unique_or_generic_clause()}.
	 *
	 * @param Context\Drop_primary_key_or_unique_or_generic_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_primary_key_or_unique_or_generic_clause(Context\Drop_primary_key_or_unique_or_generic_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_constraint()}.
	 *
	 * @param Context\Add_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_constraint(Context\Add_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::add_constraint_clause()}.
	 *
	 * @param Context\Add_constraint_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd_constraint_clause(Context\Add_constraint_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::check_constraint()}.
	 *
	 * @param Context\Check_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCheck_constraint(Context\Check_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::drop_constraint()}.
	 *
	 * @param Context\Drop_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDrop_constraint(Context\Drop_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::enable_constraint()}.
	 *
	 * @param Context\Enable_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnable_constraint(Context\Enable_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::disable_constraint()}.
	 *
	 * @param Context\Disable_constraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDisable_constraint(Context\Disable_constraintContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::foreign_key_clause()}.
	 *
	 * @param Context\Foreign_key_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForeign_key_clause(Context\Foreign_key_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::references_clause()}.
	 *
	 * @param Context\References_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReferences_clause(Context\References_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::on_delete_clause()}.
	 *
	 * @param Context\On_delete_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOn_delete_clause(Context\On_delete_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unique_key_clause()}.
	 *
	 * @param Context\Unique_key_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnique_key_clause(Context\Unique_key_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::primary_key_clause()}.
	 *
	 * @param Context\Primary_key_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrimary_key_clause(Context\Primary_key_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::anonymous_block()}.
	 *
	 * @param Context\Anonymous_blockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnonymous_block(Context\Anonymous_blockContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::invoker_rights_clause()}.
	 *
	 * @param Context\Invoker_rights_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInvoker_rights_clause(Context\Invoker_rights_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::call_spec()}.
	 *
	 * @param Context\Call_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCall_spec(Context\Call_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::java_spec()}.
	 *
	 * @param Context\Java_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitJava_spec(Context\Java_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::c_spec()}.
	 *
	 * @param Context\C_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitC_spec(Context\C_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::c_agent_in_clause()}.
	 *
	 * @param Context\C_agent_in_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitC_agent_in_clause(Context\C_agent_in_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::c_parameters_clause()}.
	 *
	 * @param Context\C_parameters_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitC_parameters_clause(Context\C_parameters_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::parameter()}.
	 *
	 * @param Context\ParameterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter(Context\ParameterContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::default_value_part()}.
	 *
	 * @param Context\Default_value_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefault_value_part(Context\Default_value_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::seq_of_declare_specs()}.
	 *
	 * @param Context\Seq_of_declare_specsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSeq_of_declare_specs(Context\Seq_of_declare_specsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::declare_spec()}.
	 *
	 * @param Context\Declare_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclare_spec(Context\Declare_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::variable_declaration()}.
	 *
	 * @param Context\Variable_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariable_declaration(Context\Variable_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subtype_declaration()}.
	 *
	 * @param Context\Subtype_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubtype_declaration(Context\Subtype_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cursor_declaration()}.
	 *
	 * @param Context\Cursor_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCursor_declaration(Context\Cursor_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::parameter_spec()}.
	 *
	 * @param Context\Parameter_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter_spec(Context\Parameter_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::exception_declaration()}.
	 *
	 * @param Context\Exception_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitException_declaration(Context\Exception_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pragma_declaration()}.
	 *
	 * @param Context\Pragma_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPragma_declaration(Context\Pragma_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::record_type_def()}.
	 *
	 * @param Context\Record_type_defContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecord_type_def(Context\Record_type_defContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::field_spec()}.
	 *
	 * @param Context\Field_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitField_spec(Context\Field_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::ref_cursor_type_def()}.
	 *
	 * @param Context\Ref_cursor_type_defContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRef_cursor_type_def(Context\Ref_cursor_type_defContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_declaration()}.
	 *
	 * @param Context\Type_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_declaration(Context\Type_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_type_def()}.
	 *
	 * @param Context\Table_type_defContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_type_def(Context\Table_type_defContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_indexed_by_part()}.
	 *
	 * @param Context\Table_indexed_by_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_indexed_by_part(Context\Table_indexed_by_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::varray_type_def()}.
	 *
	 * @param Context\Varray_type_defContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarray_type_def(Context\Varray_type_defContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::seq_of_statements()}.
	 *
	 * @param Context\Seq_of_statementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSeq_of_statements(Context\Seq_of_statementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::label_declaration()}.
	 *
	 * @param Context\Label_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLabel_declaration(Context\Label_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::statement()}.
	 *
	 * @param Context\StatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatement(Context\StatementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::swallow_to_semi()}.
	 *
	 * @param Context\Swallow_to_semiContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwallow_to_semi(Context\Swallow_to_semiContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::assignment_statement()}.
	 *
	 * @param Context\Assignment_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment_statement(Context\Assignment_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::continue_statement()}.
	 *
	 * @param Context\Continue_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContinue_statement(Context\Continue_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::exit_statement()}.
	 *
	 * @param Context\Exit_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExit_statement(Context\Exit_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::goto_statement()}.
	 *
	 * @param Context\Goto_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGoto_statement(Context\Goto_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::if_statement()}.
	 *
	 * @param Context\If_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIf_statement(Context\If_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::elsif_part()}.
	 *
	 * @param Context\Elsif_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElsif_part(Context\Elsif_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::else_part()}.
	 *
	 * @param Context\Else_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElse_part(Context\Else_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::loop_statement()}.
	 *
	 * @param Context\Loop_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLoop_statement(Context\Loop_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cursor_loop_param()}.
	 *
	 * @param Context\Cursor_loop_paramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCursor_loop_param(Context\Cursor_loop_paramContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::forall_statement()}.
	 *
	 * @param Context\Forall_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForall_statement(Context\Forall_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::bounds_clause()}.
	 *
	 * @param Context\Bounds_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBounds_clause(Context\Bounds_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::between_bound()}.
	 *
	 * @param Context\Between_boundContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBetween_bound(Context\Between_boundContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lower_bound()}.
	 *
	 * @param Context\Lower_boundContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLower_bound(Context\Lower_boundContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::upper_bound()}.
	 *
	 * @param Context\Upper_boundContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpper_bound(Context\Upper_boundContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::null_statement()}.
	 *
	 * @param Context\Null_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNull_statement(Context\Null_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::raise_statement()}.
	 *
	 * @param Context\Raise_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRaise_statement(Context\Raise_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::return_statement()}.
	 *
	 * @param Context\Return_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturn_statement(Context\Return_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_call()}.
	 *
	 * @param Context\Function_callContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_call(Context\Function_callContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::procedure_call()}.
	 *
	 * @param Context\Procedure_callContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProcedure_call(Context\Procedure_callContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pipe_row_statement()}.
	 *
	 * @param Context\Pipe_row_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPipe_row_statement(Context\Pipe_row_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::body()}.
	 *
	 * @param Context\BodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBody(Context\BodyContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::exception_handler()}.
	 *
	 * @param Context\Exception_handlerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitException_handler(Context\Exception_handlerContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::trigger_block()}.
	 *
	 * @param Context\Trigger_blockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrigger_block(Context\Trigger_blockContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::block()}.
	 *
	 * @param Context\BlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlock(Context\BlockContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sql_statement()}.
	 *
	 * @param Context\Sql_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSql_statement(Context\Sql_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::execute_immediate()}.
	 *
	 * @param Context\Execute_immediateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExecute_immediate(Context\Execute_immediateContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dynamic_returning_clause()}.
	 *
	 * @param Context\Dynamic_returning_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDynamic_returning_clause(Context\Dynamic_returning_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::data_manipulation_language_statements()}.
	 *
	 * @param Context\Data_manipulation_language_statementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitData_manipulation_language_statements(Context\Data_manipulation_language_statementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cursor_manipulation_statements()}.
	 *
	 * @param Context\Cursor_manipulation_statementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCursor_manipulation_statements(Context\Cursor_manipulation_statementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::close_statement()}.
	 *
	 * @param Context\Close_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitClose_statement(Context\Close_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::open_statement()}.
	 *
	 * @param Context\Open_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpen_statement(Context\Open_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::fetch_statement()}.
	 *
	 * @param Context\Fetch_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFetch_statement(Context\Fetch_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::open_for_statement()}.
	 *
	 * @param Context\Open_for_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpen_for_statement(Context\Open_for_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::transaction_control_statements()}.
	 *
	 * @param Context\Transaction_control_statementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTransaction_control_statements(Context\Transaction_control_statementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::set_transaction_command()}.
	 *
	 * @param Context\Set_transaction_commandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSet_transaction_command(Context\Set_transaction_commandContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::set_constraint_command()}.
	 *
	 * @param Context\Set_constraint_commandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSet_constraint_command(Context\Set_constraint_commandContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::commit_statement()}.
	 *
	 * @param Context\Commit_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCommit_statement(Context\Commit_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::write_clause()}.
	 *
	 * @param Context\Write_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWrite_clause(Context\Write_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rollback_statement()}.
	 *
	 * @param Context\Rollback_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRollback_statement(Context\Rollback_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::savepoint_statement()}.
	 *
	 * @param Context\Savepoint_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSavepoint_statement(Context\Savepoint_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::explain_statement()}.
	 *
	 * @param Context\Explain_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExplain_statement(Context\Explain_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::select_only_statement()}.
	 *
	 * @param Context\Select_only_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelect_only_statement(Context\Select_only_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::select_statement()}.
	 *
	 * @param Context\Select_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelect_statement(Context\Select_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subquery_factoring_clause()}.
	 *
	 * @param Context\Subquery_factoring_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubquery_factoring_clause(Context\Subquery_factoring_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::factoring_element()}.
	 *
	 * @param Context\Factoring_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFactoring_element(Context\Factoring_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::search_clause()}.
	 *
	 * @param Context\Search_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSearch_clause(Context\Search_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cycle_clause()}.
	 *
	 * @param Context\Cycle_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCycle_clause(Context\Cycle_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subquery()}.
	 *
	 * @param Context\SubqueryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubquery(Context\SubqueryContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subquery_basic_elements()}.
	 *
	 * @param Context\Subquery_basic_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubquery_basic_elements(Context\Subquery_basic_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subquery_operation_part()}.
	 *
	 * @param Context\Subquery_operation_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubquery_operation_part(Context\Subquery_operation_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::query_block()}.
	 *
	 * @param Context\Query_blockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQuery_block(Context\Query_blockContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::selected_list()}.
	 *
	 * @param Context\Selected_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelected_list(Context\Selected_listContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::from_clause()}.
	 *
	 * @param Context\From_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFrom_clause(Context\From_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::select_list_elements()}.
	 *
	 * @param Context\Select_list_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelect_list_elements(Context\Select_list_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_ref_list()}.
	 *
	 * @param Context\Table_ref_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_ref_list(Context\Table_ref_listContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_ref()}.
	 *
	 * @param Context\Table_refContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_ref(Context\Table_refContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_ref_aux()}.
	 *
	 * @param Context\Table_ref_auxContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_ref_aux(Context\Table_ref_auxContext $context);

	/**
	 * Visit a parse tree produced by the `table_ref_aux_internal_one` labeled alternative
	 * in {@see PlSqlParser::table_ref_aux_internal()}.
	 *
	 * @param Context\Table_ref_aux_internal_oneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_ref_aux_internal_one(Context\Table_ref_aux_internal_oneContext $context);

	/**
	 * Visit a parse tree produced by the `table_ref_aux_internal_two` labeled alternative
	 * in {@see PlSqlParser::table_ref_aux_internal()}.
	 *
	 * @param Context\Table_ref_aux_internal_twoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_ref_aux_internal_two(Context\Table_ref_aux_internal_twoContext $context);

	/**
	 * Visit a parse tree produced by the `table_ref_aux_internal_three` labeled alternative
	 * in {@see PlSqlParser::table_ref_aux_internal()}.
	 *
	 * @param Context\Table_ref_aux_internal_threeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_ref_aux_internal_three(Context\Table_ref_aux_internal_threeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::join_clause()}.
	 *
	 * @param Context\Join_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitJoin_clause(Context\Join_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::join_on_part()}.
	 *
	 * @param Context\Join_on_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitJoin_on_part(Context\Join_on_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::join_using_part()}.
	 *
	 * @param Context\Join_using_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitJoin_using_part(Context\Join_using_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::outer_join_type()}.
	 *
	 * @param Context\Outer_join_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOuter_join_type(Context\Outer_join_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::query_partition_clause()}.
	 *
	 * @param Context\Query_partition_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQuery_partition_clause(Context\Query_partition_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::flashback_query_clause()}.
	 *
	 * @param Context\Flashback_query_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFlashback_query_clause(Context\Flashback_query_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pivot_clause()}.
	 *
	 * @param Context\Pivot_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPivot_clause(Context\Pivot_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pivot_element()}.
	 *
	 * @param Context\Pivot_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPivot_element(Context\Pivot_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pivot_for_clause()}.
	 *
	 * @param Context\Pivot_for_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPivot_for_clause(Context\Pivot_for_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pivot_in_clause()}.
	 *
	 * @param Context\Pivot_in_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPivot_in_clause(Context\Pivot_in_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pivot_in_clause_element()}.
	 *
	 * @param Context\Pivot_in_clause_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPivot_in_clause_element(Context\Pivot_in_clause_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::pivot_in_clause_elements()}.
	 *
	 * @param Context\Pivot_in_clause_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPivot_in_clause_elements(Context\Pivot_in_clause_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unpivot_clause()}.
	 *
	 * @param Context\Unpivot_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnpivot_clause(Context\Unpivot_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unpivot_in_clause()}.
	 *
	 * @param Context\Unpivot_in_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnpivot_in_clause(Context\Unpivot_in_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unpivot_in_elements()}.
	 *
	 * @param Context\Unpivot_in_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnpivot_in_elements(Context\Unpivot_in_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::hierarchical_query_clause()}.
	 *
	 * @param Context\Hierarchical_query_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHierarchical_query_clause(Context\Hierarchical_query_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::start_part()}.
	 *
	 * @param Context\Start_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStart_part(Context\Start_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::group_by_clause()}.
	 *
	 * @param Context\Group_by_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGroup_by_clause(Context\Group_by_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::group_by_elements()}.
	 *
	 * @param Context\Group_by_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGroup_by_elements(Context\Group_by_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rollup_cube_clause()}.
	 *
	 * @param Context\Rollup_cube_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRollup_cube_clause(Context\Rollup_cube_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::grouping_sets_clause()}.
	 *
	 * @param Context\Grouping_sets_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGrouping_sets_clause(Context\Grouping_sets_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::grouping_sets_elements()}.
	 *
	 * @param Context\Grouping_sets_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGrouping_sets_elements(Context\Grouping_sets_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::having_clause()}.
	 *
	 * @param Context\Having_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitHaving_clause(Context\Having_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_clause()}.
	 *
	 * @param Context\Model_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_clause(Context\Model_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cell_reference_options()}.
	 *
	 * @param Context\Cell_reference_optionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCell_reference_options(Context\Cell_reference_optionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::return_rows_clause()}.
	 *
	 * @param Context\Return_rows_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturn_rows_clause(Context\Return_rows_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::reference_model()}.
	 *
	 * @param Context\Reference_modelContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReference_model(Context\Reference_modelContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::main_model()}.
	 *
	 * @param Context\Main_modelContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMain_model(Context\Main_modelContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_column_clauses()}.
	 *
	 * @param Context\Model_column_clausesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_column_clauses(Context\Model_column_clausesContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_column_partition_part()}.
	 *
	 * @param Context\Model_column_partition_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_column_partition_part(Context\Model_column_partition_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_column_list()}.
	 *
	 * @param Context\Model_column_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_column_list(Context\Model_column_listContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_column()}.
	 *
	 * @param Context\Model_columnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_column(Context\Model_columnContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_rules_clause()}.
	 *
	 * @param Context\Model_rules_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_rules_clause(Context\Model_rules_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_rules_part()}.
	 *
	 * @param Context\Model_rules_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_rules_part(Context\Model_rules_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_rules_element()}.
	 *
	 * @param Context\Model_rules_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_rules_element(Context\Model_rules_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cell_assignment()}.
	 *
	 * @param Context\Cell_assignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCell_assignment(Context\Cell_assignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_iterate_clause()}.
	 *
	 * @param Context\Model_iterate_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_iterate_clause(Context\Model_iterate_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::until_part()}.
	 *
	 * @param Context\Until_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUntil_part(Context\Until_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::order_by_clause()}.
	 *
	 * @param Context\Order_by_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrder_by_clause(Context\Order_by_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::order_by_elements()}.
	 *
	 * @param Context\Order_by_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrder_by_elements(Context\Order_by_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::offset_clause()}.
	 *
	 * @param Context\Offset_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOffset_clause(Context\Offset_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::fetch_clause()}.
	 *
	 * @param Context\Fetch_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFetch_clause(Context\Fetch_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::for_update_clause()}.
	 *
	 * @param Context\For_update_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFor_update_clause(Context\For_update_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::for_update_of_part()}.
	 *
	 * @param Context\For_update_of_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFor_update_of_part(Context\For_update_of_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::for_update_options()}.
	 *
	 * @param Context\For_update_optionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFor_update_options(Context\For_update_optionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::update_statement()}.
	 *
	 * @param Context\Update_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpdate_statement(Context\Update_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::update_set_clause()}.
	 *
	 * @param Context\Update_set_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpdate_set_clause(Context\Update_set_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_based_update_set_clause()}.
	 *
	 * @param Context\Column_based_update_set_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_based_update_set_clause(Context\Column_based_update_set_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::delete_statement()}.
	 *
	 * @param Context\Delete_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDelete_statement(Context\Delete_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::insert_statement()}.
	 *
	 * @param Context\Insert_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInsert_statement(Context\Insert_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::single_table_insert()}.
	 *
	 * @param Context\Single_table_insertContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSingle_table_insert(Context\Single_table_insertContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::multi_table_insert()}.
	 *
	 * @param Context\Multi_table_insertContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulti_table_insert(Context\Multi_table_insertContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::multi_table_element()}.
	 *
	 * @param Context\Multi_table_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulti_table_element(Context\Multi_table_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::conditional_insert_clause()}.
	 *
	 * @param Context\Conditional_insert_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConditional_insert_clause(Context\Conditional_insert_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::conditional_insert_when_part()}.
	 *
	 * @param Context\Conditional_insert_when_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConditional_insert_when_part(Context\Conditional_insert_when_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::conditional_insert_else_part()}.
	 *
	 * @param Context\Conditional_insert_else_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConditional_insert_else_part(Context\Conditional_insert_else_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::insert_into_clause()}.
	 *
	 * @param Context\Insert_into_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInsert_into_clause(Context\Insert_into_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::values_clause()}.
	 *
	 * @param Context\Values_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValues_clause(Context\Values_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::merge_statement()}.
	 *
	 * @param Context\Merge_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMerge_statement(Context\Merge_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::merge_update_clause()}.
	 *
	 * @param Context\Merge_update_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMerge_update_clause(Context\Merge_update_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::merge_element()}.
	 *
	 * @param Context\Merge_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMerge_element(Context\Merge_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::merge_update_delete_part()}.
	 *
	 * @param Context\Merge_update_delete_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMerge_update_delete_part(Context\Merge_update_delete_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::merge_insert_clause()}.
	 *
	 * @param Context\Merge_insert_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMerge_insert_clause(Context\Merge_insert_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::selected_tableview()}.
	 *
	 * @param Context\Selected_tableviewContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelected_tableview(Context\Selected_tableviewContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lock_table_statement()}.
	 *
	 * @param Context\Lock_table_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLock_table_statement(Context\Lock_table_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::wait_nowait_part()}.
	 *
	 * @param Context\Wait_nowait_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWait_nowait_part(Context\Wait_nowait_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lock_table_element()}.
	 *
	 * @param Context\Lock_table_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLock_table_element(Context\Lock_table_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::lock_mode()}.
	 *
	 * @param Context\Lock_modeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLock_mode(Context\Lock_modeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::general_table_ref()}.
	 *
	 * @param Context\General_table_refContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGeneral_table_ref(Context\General_table_refContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::static_returning_clause()}.
	 *
	 * @param Context\Static_returning_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatic_returning_clause(Context\Static_returning_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::error_logging_clause()}.
	 *
	 * @param Context\Error_logging_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitError_logging_clause(Context\Error_logging_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::error_logging_into_part()}.
	 *
	 * @param Context\Error_logging_into_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitError_logging_into_part(Context\Error_logging_into_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::error_logging_reject_part()}.
	 *
	 * @param Context\Error_logging_reject_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitError_logging_reject_part(Context\Error_logging_reject_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dml_table_expression_clause()}.
	 *
	 * @param Context\Dml_table_expression_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDml_table_expression_clause(Context\Dml_table_expression_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_collection_expression()}.
	 *
	 * @param Context\Table_collection_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_collection_expression(Context\Table_collection_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::subquery_restriction_clause()}.
	 *
	 * @param Context\Subquery_restriction_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubquery_restriction_clause(Context\Subquery_restriction_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sample_clause()}.
	 *
	 * @param Context\Sample_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSample_clause(Context\Sample_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::seed_part()}.
	 *
	 * @param Context\Seed_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSeed_part(Context\Seed_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::condition()}.
	 *
	 * @param Context\ConditionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondition(Context\ConditionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::expressions()}.
	 *
	 * @param Context\ExpressionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressions(Context\ExpressionsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cursor_expression()}.
	 *
	 * @param Context\Cursor_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCursor_expression(Context\Cursor_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::logical_expression()}.
	 *
	 * @param Context\Logical_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogical_expression(Context\Logical_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unary_logical_expression()}.
	 *
	 * @param Context\Unary_logical_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnary_logical_expression(Context\Unary_logical_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::logical_operation()}.
	 *
	 * @param Context\Logical_operationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogical_operation(Context\Logical_operationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::multiset_expression()}.
	 *
	 * @param Context\Multiset_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultiset_expression(Context\Multiset_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::relational_expression()}.
	 *
	 * @param Context\Relational_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelational_expression(Context\Relational_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::compound_expression()}.
	 *
	 * @param Context\Compound_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompound_expression(Context\Compound_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::relational_operator()}.
	 *
	 * @param Context\Relational_operatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelational_operator(Context\Relational_operatorContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::in_elements()}.
	 *
	 * @param Context\In_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIn_elements(Context\In_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::between_elements()}.
	 *
	 * @param Context\Between_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBetween_elements(Context\Between_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::concatenation()}.
	 *
	 * @param Context\ConcatenationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConcatenation(Context\ConcatenationContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::interval_expression()}.
	 *
	 * @param Context\Interval_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInterval_expression(Context\Interval_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_expression()}.
	 *
	 * @param Context\Model_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_expression(Context\Model_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::model_expression_element()}.
	 *
	 * @param Context\Model_expression_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitModel_expression_element(Context\Model_expression_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::single_column_for_loop()}.
	 *
	 * @param Context\Single_column_for_loopContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSingle_column_for_loop(Context\Single_column_for_loopContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::multi_column_for_loop()}.
	 *
	 * @param Context\Multi_column_for_loopContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulti_column_for_loop(Context\Multi_column_for_loopContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::unary_expression()}.
	 *
	 * @param Context\Unary_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnary_expression(Context\Unary_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::case_statement()}.
	 *
	 * @param Context\Case_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCase_statement(Context\Case_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::simple_case_statement()}.
	 *
	 * @param Context\Simple_case_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimple_case_statement(Context\Simple_case_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::simple_case_when_part()}.
	 *
	 * @param Context\Simple_case_when_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimple_case_when_part(Context\Simple_case_when_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::searched_case_statement()}.
	 *
	 * @param Context\Searched_case_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSearched_case_statement(Context\Searched_case_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::searched_case_when_part()}.
	 *
	 * @param Context\Searched_case_when_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSearched_case_when_part(Context\Searched_case_when_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::case_else_part()}.
	 *
	 * @param Context\Case_else_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCase_else_part(Context\Case_else_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::atom()}.
	 *
	 * @param Context\AtomContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAtom(Context\AtomContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::quantified_expression()}.
	 *
	 * @param Context\Quantified_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQuantified_expression(Context\Quantified_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::string_function()}.
	 *
	 * @param Context\String_functionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitString_function(Context\String_functionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::standard_function()}.
	 *
	 * @param Context\Standard_functionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStandard_function(Context\Standard_functionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::numeric_function_wrapper()}.
	 *
	 * @param Context\Numeric_function_wrapperContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumeric_function_wrapper(Context\Numeric_function_wrapperContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::numeric_function()}.
	 *
	 * @param Context\Numeric_functionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumeric_function(Context\Numeric_functionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::other_function()}.
	 *
	 * @param Context\Other_functionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOther_function(Context\Other_functionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::over_clause_keyword()}.
	 *
	 * @param Context\Over_clause_keywordContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOver_clause_keyword(Context\Over_clause_keywordContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::within_or_over_clause_keyword()}.
	 *
	 * @param Context\Within_or_over_clause_keywordContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWithin_or_over_clause_keyword(Context\Within_or_over_clause_keywordContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::standard_prediction_function_keyword()}.
	 *
	 * @param Context\Standard_prediction_function_keywordContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStandard_prediction_function_keyword(Context\Standard_prediction_function_keywordContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::over_clause()}.
	 *
	 * @param Context\Over_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOver_clause(Context\Over_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::windowing_clause()}.
	 *
	 * @param Context\Windowing_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWindowing_clause(Context\Windowing_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::windowing_type()}.
	 *
	 * @param Context\Windowing_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWindowing_type(Context\Windowing_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::windowing_elements()}.
	 *
	 * @param Context\Windowing_elementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWindowing_elements(Context\Windowing_elementsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::using_clause()}.
	 *
	 * @param Context\Using_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUsing_clause(Context\Using_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::using_element()}.
	 *
	 * @param Context\Using_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUsing_element(Context\Using_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::collect_order_by_part()}.
	 *
	 * @param Context\Collect_order_by_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCollect_order_by_part(Context\Collect_order_by_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::within_or_over_part()}.
	 *
	 * @param Context\Within_or_over_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWithin_or_over_part(Context\Within_or_over_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cost_matrix_clause()}.
	 *
	 * @param Context\Cost_matrix_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCost_matrix_clause(Context\Cost_matrix_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_passing_clause()}.
	 *
	 * @param Context\Xml_passing_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_passing_clause(Context\Xml_passing_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_attributes_clause()}.
	 *
	 * @param Context\Xml_attributes_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_attributes_clause(Context\Xml_attributes_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_namespaces_clause()}.
	 *
	 * @param Context\Xml_namespaces_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_namespaces_clause(Context\Xml_namespaces_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_table_column()}.
	 *
	 * @param Context\Xml_table_columnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_table_column(Context\Xml_table_columnContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_general_default_part()}.
	 *
	 * @param Context\Xml_general_default_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_general_default_part(Context\Xml_general_default_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_multiuse_expression_element()}.
	 *
	 * @param Context\Xml_multiuse_expression_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_multiuse_expression_element(Context\Xml_multiuse_expression_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlroot_param_version_part()}.
	 *
	 * @param Context\Xmlroot_param_version_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlroot_param_version_part(Context\Xmlroot_param_version_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlroot_param_standalone_part()}.
	 *
	 * @param Context\Xmlroot_param_standalone_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlroot_param_standalone_part(Context\Xmlroot_param_standalone_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlserialize_param_enconding_part()}.
	 *
	 * @param Context\Xmlserialize_param_enconding_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlserialize_param_enconding_part(Context\Xmlserialize_param_enconding_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlserialize_param_version_part()}.
	 *
	 * @param Context\Xmlserialize_param_version_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlserialize_param_version_part(Context\Xmlserialize_param_version_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmlserialize_param_ident_part()}.
	 *
	 * @param Context\Xmlserialize_param_ident_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmlserialize_param_ident_part(Context\Xmlserialize_param_ident_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sql_plus_command()}.
	 *
	 * @param Context\Sql_plus_commandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSql_plus_command(Context\Sql_plus_commandContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::whenever_command()}.
	 *
	 * @param Context\Whenever_commandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhenever_command(Context\Whenever_commandContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::set_command()}.
	 *
	 * @param Context\Set_commandContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSet_command(Context\Set_commandContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::partition_extension_clause()}.
	 *
	 * @param Context\Partition_extension_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartition_extension_clause(Context\Partition_extension_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_alias()}.
	 *
	 * @param Context\Column_aliasContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_alias(Context\Column_aliasContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_alias()}.
	 *
	 * @param Context\Table_aliasContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_alias(Context\Table_aliasContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::where_clause()}.
	 *
	 * @param Context\Where_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhere_clause(Context\Where_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::into_clause()}.
	 *
	 * @param Context\Into_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInto_clause(Context\Into_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xml_column_name()}.
	 *
	 * @param Context\Xml_column_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXml_column_name(Context\Xml_column_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cost_class_name()}.
	 *
	 * @param Context\Cost_class_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCost_class_name(Context\Cost_class_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::attribute_name()}.
	 *
	 * @param Context\Attribute_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttribute_name(Context\Attribute_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::savepoint_name()}.
	 *
	 * @param Context\Savepoint_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSavepoint_name(Context\Savepoint_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::rollback_segment_name()}.
	 *
	 * @param Context\Rollback_segment_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRollback_segment_name(Context\Rollback_segment_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_var_name()}.
	 *
	 * @param Context\Table_var_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_var_name(Context\Table_var_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::schema_name()}.
	 *
	 * @param Context\Schema_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSchema_name(Context\Schema_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::routine_name()}.
	 *
	 * @param Context\Routine_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRoutine_name(Context\Routine_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::package_name()}.
	 *
	 * @param Context\Package_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPackage_name(Context\Package_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::implementation_type_name()}.
	 *
	 * @param Context\Implementation_type_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImplementation_type_name(Context\Implementation_type_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::parameter_name()}.
	 *
	 * @param Context\Parameter_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameter_name(Context\Parameter_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::reference_model_name()}.
	 *
	 * @param Context\Reference_model_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReference_model_name(Context\Reference_model_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::main_model_name()}.
	 *
	 * @param Context\Main_model_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMain_model_name(Context\Main_model_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::container_tableview_name()}.
	 *
	 * @param Context\Container_tableview_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContainer_tableview_name(Context\Container_tableview_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::aggregate_function_name()}.
	 *
	 * @param Context\Aggregate_function_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAggregate_function_name(Context\Aggregate_function_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::query_name()}.
	 *
	 * @param Context\Query_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQuery_name(Context\Query_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::grantee_name()}.
	 *
	 * @param Context\Grantee_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGrantee_name(Context\Grantee_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::role_name()}.
	 *
	 * @param Context\Role_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRole_name(Context\Role_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::constraint_name()}.
	 *
	 * @param Context\Constraint_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraint_name(Context\Constraint_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::label_name()}.
	 *
	 * @param Context\Label_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLabel_name(Context\Label_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_name()}.
	 *
	 * @param Context\Type_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_name(Context\Type_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::sequence_name()}.
	 *
	 * @param Context\Sequence_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSequence_name(Context\Sequence_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::exception_name()}.
	 *
	 * @param Context\Exception_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitException_name(Context\Exception_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_name()}.
	 *
	 * @param Context\Function_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_name(Context\Function_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::procedure_name()}.
	 *
	 * @param Context\Procedure_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProcedure_name(Context\Procedure_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::trigger_name()}.
	 *
	 * @param Context\Trigger_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrigger_name(Context\Trigger_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::variable_name()}.
	 *
	 * @param Context\Variable_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariable_name(Context\Variable_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::index_name()}.
	 *
	 * @param Context\Index_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex_name(Context\Index_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::cursor_name()}.
	 *
	 * @param Context\Cursor_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCursor_name(Context\Cursor_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::record_name()}.
	 *
	 * @param Context\Record_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecord_name(Context\Record_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::collection_name()}.
	 *
	 * @param Context\Collection_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCollection_name(Context\Collection_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::link_name()}.
	 *
	 * @param Context\Link_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLink_name(Context\Link_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_name()}.
	 *
	 * @param Context\Column_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_name(Context\Column_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::tableview_name()}.
	 *
	 * @param Context\Tableview_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTableview_name(Context\Tableview_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::xmltable()}.
	 *
	 * @param Context\XmltableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitXmltable(Context\XmltableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::char_set_name()}.
	 *
	 * @param Context\Char_set_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitChar_set_name(Context\Char_set_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::synonym_name()}.
	 *
	 * @param Context\Synonym_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSynonym_name(Context\Synonym_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::schema_object_name()}.
	 *
	 * @param Context\Schema_object_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSchema_object_name(Context\Schema_object_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::dir_object_name()}.
	 *
	 * @param Context\Dir_object_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDir_object_name(Context\Dir_object_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::user_object_name()}.
	 *
	 * @param Context\User_object_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUser_object_name(Context\User_object_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::grant_object_name()}.
	 *
	 * @param Context\Grant_object_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGrant_object_name(Context\Grant_object_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::column_list()}.
	 *
	 * @param Context\Column_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitColumn_list(Context\Column_listContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::paren_column_list()}.
	 *
	 * @param Context\Paren_column_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParen_column_list(Context\Paren_column_listContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::keep_clause()}.
	 *
	 * @param Context\Keep_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitKeep_clause(Context\Keep_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_argument()}.
	 *
	 * @param Context\Function_argumentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_argument(Context\Function_argumentContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_argument_analytic()}.
	 *
	 * @param Context\Function_argument_analyticContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_argument_analytic(Context\Function_argument_analyticContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::function_argument_modeling()}.
	 *
	 * @param Context\Function_argument_modelingContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunction_argument_modeling(Context\Function_argument_modelingContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::respect_or_ignore_nulls()}.
	 *
	 * @param Context\Respect_or_ignore_nullsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRespect_or_ignore_nulls(Context\Respect_or_ignore_nullsContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::argument()}.
	 *
	 * @param Context\ArgumentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArgument(Context\ArgumentContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::type_spec()}.
	 *
	 * @param Context\Type_specContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_spec(Context\Type_specContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::datatype()}.
	 *
	 * @param Context\DatatypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDatatype(Context\DatatypeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::precision_part()}.
	 *
	 * @param Context\Precision_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrecision_part(Context\Precision_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::native_datatype_element()}.
	 *
	 * @param Context\Native_datatype_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNative_datatype_element(Context\Native_datatype_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::bind_variable()}.
	 *
	 * @param Context\Bind_variableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBind_variable(Context\Bind_variableContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::general_element()}.
	 *
	 * @param Context\General_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGeneral_element(Context\General_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::general_element_part()}.
	 *
	 * @param Context\General_element_partContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGeneral_element_part(Context\General_element_partContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::table_element()}.
	 *
	 * @param Context\Table_elementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_element(Context\Table_elementContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::object_privilege()}.
	 *
	 * @param Context\Object_privilegeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitObject_privilege(Context\Object_privilegeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::system_privilege()}.
	 *
	 * @param Context\System_privilegeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSystem_privilege(Context\System_privilegeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::constant()}.
	 *
	 * @param Context\ConstantContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstant(Context\ConstantContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::numeric()}.
	 *
	 * @param Context\NumericContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumeric(Context\NumericContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::numeric_negative()}.
	 *
	 * @param Context\Numeric_negativeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumeric_negative(Context\Numeric_negativeContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::quoted_string()}.
	 *
	 * @param Context\Quoted_stringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitQuoted_string(Context\Quoted_stringContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::identifier()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::id_expression()}.
	 *
	 * @param Context\Id_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitId_expression(Context\Id_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::outer_join_sign()}.
	 *
	 * @param Context\Outer_join_signContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOuter_join_sign(Context\Outer_join_signContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::regular_id()}.
	 *
	 * @param Context\Regular_idContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRegular_id(Context\Regular_idContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::non_reserved_keywords_in_12c()}.
	 *
	 * @param Context\Non_reserved_keywords_in_12cContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNon_reserved_keywords_in_12c(Context\Non_reserved_keywords_in_12cContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::non_reserved_keywords_pre12c()}.
	 *
	 * @param Context\Non_reserved_keywords_pre12cContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNon_reserved_keywords_pre12c(Context\Non_reserved_keywords_pre12cContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::string_function_name()}.
	 *
	 * @param Context\String_function_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitString_function_name(Context\String_function_nameContext $context);

	/**
	 * Visit a parse tree produced by {@see PlSqlParser::numeric_function_name()}.
	 *
	 * @param Context\Numeric_function_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumeric_function_name(Context\Numeric_function_nameContext $context);
}