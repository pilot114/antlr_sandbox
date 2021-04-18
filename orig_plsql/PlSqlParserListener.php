<?php

/*
 * Generated from PlSqlParser.g4 by ANTLR 4.9
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see PlSqlParser}.
 */
interface PlSqlParserListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sql_script()}.
	 * @param $context The parse tree.
	 */
	public function enterSql_script(Context\Sql_scriptContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sql_script()}.
	 * @param $context The parse tree.
	 */
	public function exitSql_script(Context\Sql_scriptContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unit_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterUnit_statement(Context\Unit_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unit_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitUnit_statement(Context\Unit_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_function()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_function(Context\Drop_functionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_function()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_function(Context\Drop_functionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_function()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_function(Context\Alter_functionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_function()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_function(Context\Alter_functionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_function_body()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_function_body(Context\Create_function_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_function_body()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_function_body(Context\Create_function_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::parallel_enable_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterParallel_enable_clause(Context\Parallel_enable_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::parallel_enable_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitParallel_enable_clause(Context\Parallel_enable_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partition_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPartition_by_clause(Context\Partition_by_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partition_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPartition_by_clause(Context\Partition_by_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::result_cache_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterResult_cache_clause(Context\Result_cache_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::result_cache_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitResult_cache_clause(Context\Result_cache_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::relies_on_part()}.
	 * @param $context The parse tree.
	 */
	public function enterRelies_on_part(Context\Relies_on_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::relies_on_part()}.
	 * @param $context The parse tree.
	 */
	public function exitRelies_on_part(Context\Relies_on_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::streaming_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterStreaming_clause(Context\Streaming_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::streaming_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitStreaming_clause(Context\Streaming_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_package()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_package(Context\Drop_packageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_package()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_package(Context\Drop_packageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_package()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_package(Context\Alter_packageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_package()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_package(Context\Alter_packageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_package()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_package(Context\Create_packageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_package()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_package(Context\Create_packageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_package_body()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_package_body(Context\Create_package_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_package_body()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_package_body(Context\Create_package_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::package_obj_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterPackage_obj_spec(Context\Package_obj_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::package_obj_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitPackage_obj_spec(Context\Package_obj_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::procedure_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedure_spec(Context\Procedure_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::procedure_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedure_spec(Context\Procedure_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_spec(Context\Function_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_spec(Context\Function_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::package_obj_body()}.
	 * @param $context The parse tree.
	 */
	public function enterPackage_obj_body(Context\Package_obj_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::package_obj_body()}.
	 * @param $context The parse tree.
	 */
	public function exitPackage_obj_body(Context\Package_obj_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_procedure()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_procedure(Context\Drop_procedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_procedure()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_procedure(Context\Drop_procedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_procedure()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_procedure(Context\Alter_procedureContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_procedure()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_procedure(Context\Alter_procedureContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_body()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_body(Context\Function_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_body()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_body(Context\Function_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::procedure_body()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedure_body(Context\Procedure_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::procedure_body()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedure_body(Context\Procedure_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_procedure_body()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_procedure_body(Context\Create_procedure_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_procedure_body()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_procedure_body(Context\Create_procedure_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_trigger()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_trigger(Context\Drop_triggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_trigger()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_trigger(Context\Drop_triggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_trigger()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_trigger(Context\Alter_triggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_trigger()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_trigger(Context\Alter_triggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_trigger()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_trigger(Context\Create_triggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_trigger()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_trigger(Context\Create_triggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::trigger_follows_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTrigger_follows_clause(Context\Trigger_follows_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::trigger_follows_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTrigger_follows_clause(Context\Trigger_follows_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::trigger_when_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTrigger_when_clause(Context\Trigger_when_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::trigger_when_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTrigger_when_clause(Context\Trigger_when_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::simple_dml_trigger()}.
	 * @param $context The parse tree.
	 */
	public function enterSimple_dml_trigger(Context\Simple_dml_triggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::simple_dml_trigger()}.
	 * @param $context The parse tree.
	 */
	public function exitSimple_dml_trigger(Context\Simple_dml_triggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::for_each_row()}.
	 * @param $context The parse tree.
	 */
	public function enterFor_each_row(Context\For_each_rowContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::for_each_row()}.
	 * @param $context The parse tree.
	 */
	public function exitFor_each_row(Context\For_each_rowContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::compound_dml_trigger()}.
	 * @param $context The parse tree.
	 */
	public function enterCompound_dml_trigger(Context\Compound_dml_triggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::compound_dml_trigger()}.
	 * @param $context The parse tree.
	 */
	public function exitCompound_dml_trigger(Context\Compound_dml_triggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::non_dml_trigger()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_dml_trigger(Context\Non_dml_triggerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::non_dml_trigger()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_dml_trigger(Context\Non_dml_triggerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::trigger_body()}.
	 * @param $context The parse tree.
	 */
	public function enterTrigger_body(Context\Trigger_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::trigger_body()}.
	 * @param $context The parse tree.
	 */
	public function exitTrigger_body(Context\Trigger_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::routine_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutine_clause(Context\Routine_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::routine_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutine_clause(Context\Routine_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::compound_trigger_block()}.
	 * @param $context The parse tree.
	 */
	public function enterCompound_trigger_block(Context\Compound_trigger_blockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::compound_trigger_block()}.
	 * @param $context The parse tree.
	 */
	public function exitCompound_trigger_block(Context\Compound_trigger_blockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::timing_point_section()}.
	 * @param $context The parse tree.
	 */
	public function enterTiming_point_section(Context\Timing_point_sectionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::timing_point_section()}.
	 * @param $context The parse tree.
	 */
	public function exitTiming_point_section(Context\Timing_point_sectionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::non_dml_event()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_dml_event(Context\Non_dml_eventContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::non_dml_event()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_dml_event(Context\Non_dml_eventContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dml_event_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDml_event_clause(Context\Dml_event_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dml_event_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDml_event_clause(Context\Dml_event_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dml_event_element()}.
	 * @param $context The parse tree.
	 */
	public function enterDml_event_element(Context\Dml_event_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dml_event_element()}.
	 * @param $context The parse tree.
	 */
	public function exitDml_event_element(Context\Dml_event_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dml_event_nested_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDml_event_nested_clause(Context\Dml_event_nested_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dml_event_nested_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDml_event_nested_clause(Context\Dml_event_nested_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::referencing_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterReferencing_clause(Context\Referencing_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::referencing_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitReferencing_clause(Context\Referencing_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::referencing_element()}.
	 * @param $context The parse tree.
	 */
	public function enterReferencing_element(Context\Referencing_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::referencing_element()}.
	 * @param $context The parse tree.
	 */
	public function exitReferencing_element(Context\Referencing_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_type()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_type(Context\Drop_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_type()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_type(Context\Drop_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_type()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_type(Context\Alter_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_type()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_type(Context\Alter_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::compile_type_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCompile_type_clause(Context\Compile_type_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::compile_type_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCompile_type_clause(Context\Compile_type_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::replace_type_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterReplace_type_clause(Context\Replace_type_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::replace_type_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitReplace_type_clause(Context\Replace_type_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_method_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_method_spec(Context\Alter_method_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_method_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_method_spec(Context\Alter_method_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_method_element()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_method_element(Context\Alter_method_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_method_element()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_method_element(Context\Alter_method_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_attribute_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_attribute_definition(Context\Alter_attribute_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_attribute_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_attribute_definition(Context\Alter_attribute_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::attribute_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterAttribute_definition(Context\Attribute_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::attribute_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitAttribute_definition(Context\Attribute_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_collection_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_collection_clauses(Context\Alter_collection_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_collection_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_collection_clauses(Context\Alter_collection_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dependent_handling_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDependent_handling_clause(Context\Dependent_handling_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dependent_handling_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDependent_handling_clause(Context\Dependent_handling_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dependent_exceptions_part()}.
	 * @param $context The parse tree.
	 */
	public function enterDependent_exceptions_part(Context\Dependent_exceptions_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dependent_exceptions_part()}.
	 * @param $context The parse tree.
	 */
	public function exitDependent_exceptions_part(Context\Dependent_exceptions_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_type()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_type(Context\Create_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_type()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_type(Context\Create_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterType_definition(Context\Type_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitType_definition(Context\Type_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_type_def()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_type_def(Context\Object_type_defContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_type_def()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_type_def(Context\Object_type_defContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_as_part()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_as_part(Context\Object_as_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_as_part()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_as_part(Context\Object_as_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_under_part()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_under_part(Context\Object_under_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_under_part()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_under_part(Context\Object_under_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::nested_table_type_def()}.
	 * @param $context The parse tree.
	 */
	public function enterNested_table_type_def(Context\Nested_table_type_defContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::nested_table_type_def()}.
	 * @param $context The parse tree.
	 */
	public function exitNested_table_type_def(Context\Nested_table_type_defContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sqlj_object_type()}.
	 * @param $context The parse tree.
	 */
	public function enterSqlj_object_type(Context\Sqlj_object_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sqlj_object_type()}.
	 * @param $context The parse tree.
	 */
	public function exitSqlj_object_type(Context\Sqlj_object_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_body()}.
	 * @param $context The parse tree.
	 */
	public function enterType_body(Context\Type_bodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_body()}.
	 * @param $context The parse tree.
	 */
	public function exitType_body(Context\Type_bodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_body_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterType_body_elements(Context\Type_body_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_body_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitType_body_elements(Context\Type_body_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::map_order_func_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterMap_order_func_declaration(Context\Map_order_func_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::map_order_func_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitMap_order_func_declaration(Context\Map_order_func_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subprog_decl_in_type()}.
	 * @param $context The parse tree.
	 */
	public function enterSubprog_decl_in_type(Context\Subprog_decl_in_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subprog_decl_in_type()}.
	 * @param $context The parse tree.
	 */
	public function exitSubprog_decl_in_type(Context\Subprog_decl_in_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::proc_decl_in_type()}.
	 * @param $context The parse tree.
	 */
	public function enterProc_decl_in_type(Context\Proc_decl_in_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::proc_decl_in_type()}.
	 * @param $context The parse tree.
	 */
	public function exitProc_decl_in_type(Context\Proc_decl_in_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::func_decl_in_type()}.
	 * @param $context The parse tree.
	 */
	public function enterFunc_decl_in_type(Context\Func_decl_in_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::func_decl_in_type()}.
	 * @param $context The parse tree.
	 */
	public function exitFunc_decl_in_type(Context\Func_decl_in_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::constructor_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterConstructor_declaration(Context\Constructor_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::constructor_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitConstructor_declaration(Context\Constructor_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modifier_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterModifier_clause(Context\Modifier_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modifier_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitModifier_clause(Context\Modifier_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_member_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_member_spec(Context\Object_member_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_member_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_member_spec(Context\Object_member_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sqlj_object_type_attr()}.
	 * @param $context The parse tree.
	 */
	public function enterSqlj_object_type_attr(Context\Sqlj_object_type_attrContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sqlj_object_type_attr()}.
	 * @param $context The parse tree.
	 */
	public function exitSqlj_object_type_attr(Context\Sqlj_object_type_attrContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::element_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterElement_spec(Context\Element_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::element_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitElement_spec(Context\Element_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::element_spec_options()}.
	 * @param $context The parse tree.
	 */
	public function enterElement_spec_options(Context\Element_spec_optionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::element_spec_options()}.
	 * @param $context The parse tree.
	 */
	public function exitElement_spec_options(Context\Element_spec_optionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subprogram_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterSubprogram_spec(Context\Subprogram_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subprogram_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitSubprogram_spec(Context\Subprogram_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::overriding_subprogram_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterOverriding_subprogram_spec(Context\Overriding_subprogram_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::overriding_subprogram_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitOverriding_subprogram_spec(Context\Overriding_subprogram_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::overriding_function_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterOverriding_function_spec(Context\Overriding_function_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::overriding_function_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitOverriding_function_spec(Context\Overriding_function_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_procedure_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterType_procedure_spec(Context\Type_procedure_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_procedure_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitType_procedure_spec(Context\Type_procedure_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_function_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterType_function_spec(Context\Type_function_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_function_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitType_function_spec(Context\Type_function_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::constructor_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterConstructor_spec(Context\Constructor_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::constructor_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitConstructor_spec(Context\Constructor_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::map_order_function_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterMap_order_function_spec(Context\Map_order_function_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::map_order_function_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitMap_order_function_spec(Context\Map_order_function_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pragma_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPragma_clause(Context\Pragma_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pragma_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPragma_clause(Context\Pragma_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pragma_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterPragma_elements(Context\Pragma_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pragma_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitPragma_elements(Context\Pragma_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_elements_parameter()}.
	 * @param $context The parse tree.
	 */
	public function enterType_elements_parameter(Context\Type_elements_parameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_elements_parameter()}.
	 * @param $context The parse tree.
	 */
	public function exitType_elements_parameter(Context\Type_elements_parameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_sequence()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_sequence(Context\Drop_sequenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_sequence()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_sequence(Context\Drop_sequenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_sequence()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_sequence(Context\Alter_sequenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_sequence()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_sequence(Context\Alter_sequenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_session()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_session(Context\Alter_sessionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_session()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_session(Context\Alter_sessionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_session_set_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_session_set_clause(Context\Alter_session_set_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_session_set_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_session_set_clause(Context\Alter_session_set_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_sequence()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_sequence(Context\Create_sequenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_sequence()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_sequence(Context\Create_sequenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sequence_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterSequence_spec(Context\Sequence_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sequence_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitSequence_spec(Context\Sequence_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sequence_start_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSequence_start_clause(Context\Sequence_start_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sequence_start_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSequence_start_clause(Context\Sequence_start_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_index()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_index(Context\Create_indexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_index()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_index(Context\Create_indexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cluster_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCluster_index_clause(Context\Cluster_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cluster_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCluster_index_clause(Context\Cluster_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cluster_name()}.
	 * @param $context The parse tree.
	 */
	public function enterCluster_name(Context\Cluster_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cluster_name()}.
	 * @param $context The parse tree.
	 */
	public function exitCluster_name(Context\Cluster_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_index_clause(Context\Table_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_index_clause(Context\Table_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::bitmap_join_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterBitmap_join_index_clause(Context\Bitmap_join_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::bitmap_join_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitBitmap_join_index_clause(Context\Bitmap_join_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_expr()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_expr(Context\Index_exprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_expr()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_expr(Context\Index_exprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_properties(Context\Index_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_properties(Context\Index_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::domain_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDomain_index_clause(Context\Domain_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::domain_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDomain_index_clause(Context\Domain_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::local_domain_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLocal_domain_index_clause(Context\Local_domain_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::local_domain_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLocal_domain_index_clause(Context\Local_domain_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlindex_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlindex_clause(Context\Xmlindex_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlindex_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlindex_clause(Context\Xmlindex_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::local_xmlindex_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLocal_xmlindex_clause(Context\Local_xmlindex_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::local_xmlindex_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLocal_xmlindex_clause(Context\Local_xmlindex_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::global_partitioned_index()}.
	 * @param $context The parse tree.
	 */
	public function enterGlobal_partitioned_index(Context\Global_partitioned_indexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::global_partitioned_index()}.
	 * @param $context The parse tree.
	 */
	public function exitGlobal_partitioned_index(Context\Global_partitioned_indexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_partitioning_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_partitioning_clause(Context\Index_partitioning_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_partitioning_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_partitioning_clause(Context\Index_partitioning_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::local_partitioned_index()}.
	 * @param $context The parse tree.
	 */
	public function enterLocal_partitioned_index(Context\Local_partitioned_indexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::local_partitioned_index()}.
	 * @param $context The parse tree.
	 */
	public function exitLocal_partitioned_index(Context\Local_partitioned_indexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_range_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_range_partitioned_table(Context\On_range_partitioned_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_range_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_range_partitioned_table(Context\On_range_partitioned_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_list_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_list_partitioned_table(Context\On_list_partitioned_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_list_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_list_partitioned_table(Context\On_list_partitioned_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitioned_table(Context\Partitioned_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitioned_table(Context\Partitioned_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_hash_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_hash_partitioned_table(Context\On_hash_partitioned_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_hash_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_hash_partitioned_table(Context\On_hash_partitioned_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_hash_partitioned_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_hash_partitioned_clause(Context\On_hash_partitioned_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_hash_partitioned_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_hash_partitioned_clause(Context\On_hash_partitioned_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_comp_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_comp_partitioned_table(Context\On_comp_partitioned_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_comp_partitioned_table()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_comp_partitioned_table(Context\On_comp_partitioned_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_comp_partitioned_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_comp_partitioned_clause(Context\On_comp_partitioned_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_comp_partitioned_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_comp_partitioned_clause(Context\On_comp_partitioned_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_subpartition_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_subpartition_clause(Context\Index_subpartition_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_subpartition_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_subpartition_clause(Context\Index_subpartition_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_subpartition_subclause()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_subpartition_subclause(Context\Index_subpartition_subclauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_subpartition_subclause()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_subpartition_subclause(Context\Index_subpartition_subclauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::odci_parameters()}.
	 * @param $context The parse tree.
	 */
	public function enterOdci_parameters(Context\Odci_parametersContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::odci_parameters()}.
	 * @param $context The parse tree.
	 */
	public function exitOdci_parameters(Context\Odci_parametersContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::indextype()}.
	 * @param $context The parse tree.
	 */
	public function enterIndextype(Context\IndextypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::indextype()}.
	 * @param $context The parse tree.
	 */
	public function exitIndextype(Context\IndextypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_index()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_index(Context\Alter_indexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_index()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_index(Context\Alter_indexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_index_ops_set1()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_index_ops_set1(Context\Alter_index_ops_set1Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_index_ops_set1()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_index_ops_set1(Context\Alter_index_ops_set1Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_index_ops_set2()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_index_ops_set2(Context\Alter_index_ops_set2Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_index_ops_set2()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_index_ops_set2(Context\Alter_index_ops_set2Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::visible_or_invisible()}.
	 * @param $context The parse tree.
	 */
	public function enterVisible_or_invisible(Context\Visible_or_invisibleContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::visible_or_invisible()}.
	 * @param $context The parse tree.
	 */
	public function exitVisible_or_invisible(Context\Visible_or_invisibleContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::monitoring_nomonitoring()}.
	 * @param $context The parse tree.
	 */
	public function enterMonitoring_nomonitoring(Context\Monitoring_nomonitoringContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::monitoring_nomonitoring()}.
	 * @param $context The parse tree.
	 */
	public function exitMonitoring_nomonitoring(Context\Monitoring_nomonitoringContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rebuild_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRebuild_clause(Context\Rebuild_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rebuild_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRebuild_clause(Context\Rebuild_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_index_partitioning()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_index_partitioning(Context\Alter_index_partitioningContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_index_partitioning()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_index_partitioning(Context\Alter_index_partitioningContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_index_default_attrs()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_index_default_attrs(Context\Modify_index_default_attrsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_index_default_attrs()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_index_default_attrs(Context\Modify_index_default_attrsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_hash_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_hash_index_partition(Context\Add_hash_index_partitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_hash_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_hash_index_partition(Context\Add_hash_index_partitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::coalesce_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function enterCoalesce_index_partition(Context\Coalesce_index_partitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::coalesce_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function exitCoalesce_index_partition(Context\Coalesce_index_partitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_index_partition(Context\Modify_index_partitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_index_partition(Context\Modify_index_partitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_index_partitions_ops()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_index_partitions_ops(Context\Modify_index_partitions_opsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_index_partitions_ops()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_index_partitions_ops(Context\Modify_index_partitions_opsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rename_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function enterRename_index_partition(Context\Rename_index_partitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rename_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function exitRename_index_partition(Context\Rename_index_partitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_index_partition(Context\Drop_index_partitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_index_partition(Context\Drop_index_partitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::split_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function enterSplit_index_partition(Context\Split_index_partitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::split_index_partition()}.
	 * @param $context The parse tree.
	 */
	public function exitSplit_index_partition(Context\Split_index_partitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_partition_description()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_partition_description(Context\Index_partition_descriptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_partition_description()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_partition_description(Context\Index_partition_descriptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_index_subpartition()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_index_subpartition(Context\Modify_index_subpartitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_index_subpartition()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_index_subpartition(Context\Modify_index_subpartitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partition_name_old()}.
	 * @param $context The parse tree.
	 */
	public function enterPartition_name_old(Context\Partition_name_oldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partition_name_old()}.
	 * @param $context The parse tree.
	 */
	public function exitPartition_name_old(Context\Partition_name_oldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::new_partition_name()}.
	 * @param $context The parse tree.
	 */
	public function enterNew_partition_name(Context\New_partition_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::new_partition_name()}.
	 * @param $context The parse tree.
	 */
	public function exitNew_partition_name(Context\New_partition_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::new_index_name()}.
	 * @param $context The parse tree.
	 */
	public function enterNew_index_name(Context\New_index_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::new_index_name()}.
	 * @param $context The parse tree.
	 */
	public function exitNew_index_name(Context\New_index_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_user()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_user(Context\Create_userContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_user()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_user(Context\Create_userContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_user()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_user(Context\Alter_userContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_user()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_user(Context\Alter_userContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_identified_by()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_identified_by(Context\Alter_identified_byContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_identified_by()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_identified_by(Context\Alter_identified_byContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::identified_by()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentified_by(Context\Identified_byContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::identified_by()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentified_by(Context\Identified_byContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::identified_other_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentified_other_clause(Context\Identified_other_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::identified_other_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentified_other_clause(Context\Identified_other_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::user_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUser_tablespace_clause(Context\User_tablespace_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::user_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUser_tablespace_clause(Context\User_tablespace_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::quota_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterQuota_clause(Context\Quota_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::quota_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitQuota_clause(Context\Quota_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::profile_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterProfile_clause(Context\Profile_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::profile_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitProfile_clause(Context\Profile_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::role_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRole_clause(Context\Role_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::role_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRole_clause(Context\Role_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::user_default_role_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUser_default_role_clause(Context\User_default_role_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::user_default_role_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUser_default_role_clause(Context\User_default_role_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::password_expire_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPassword_expire_clause(Context\Password_expire_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::password_expire_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPassword_expire_clause(Context\Password_expire_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::user_lock_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUser_lock_clause(Context\User_lock_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::user_lock_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUser_lock_clause(Context\User_lock_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::user_editions_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUser_editions_clause(Context\User_editions_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::user_editions_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUser_editions_clause(Context\User_editions_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_user_editions_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_user_editions_clause(Context\Alter_user_editions_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_user_editions_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_user_editions_clause(Context\Alter_user_editions_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::proxy_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterProxy_clause(Context\Proxy_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::proxy_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitProxy_clause(Context\Proxy_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::container_names()}.
	 * @param $context The parse tree.
	 */
	public function enterContainer_names(Context\Container_namesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::container_names()}.
	 * @param $context The parse tree.
	 */
	public function exitContainer_names(Context\Container_namesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::set_container_data()}.
	 * @param $context The parse tree.
	 */
	public function enterSet_container_data(Context\Set_container_dataContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::set_container_data()}.
	 * @param $context The parse tree.
	 */
	public function exitSet_container_data(Context\Set_container_dataContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_rem_container_data()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_rem_container_data(Context\Add_rem_container_dataContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_rem_container_data()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_rem_container_data(Context\Add_rem_container_dataContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::container_data_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterContainer_data_clause(Context\Container_data_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::container_data_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitContainer_data_clause(Context\Container_data_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::analyze()}.
	 * @param $context The parse tree.
	 */
	public function enterAnalyze(Context\AnalyzeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::analyze()}.
	 * @param $context The parse tree.
	 */
	public function exitAnalyze(Context\AnalyzeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partition_extention_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPartition_extention_clause(Context\Partition_extention_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partition_extention_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPartition_extention_clause(Context\Partition_extention_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::validation_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterValidation_clauses(Context\Validation_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::validation_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitValidation_clauses(Context\Validation_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::online_or_offline()}.
	 * @param $context The parse tree.
	 */
	public function enterOnline_or_offline(Context\Online_or_offlineContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::online_or_offline()}.
	 * @param $context The parse tree.
	 */
	public function exitOnline_or_offline(Context\Online_or_offlineContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::into_clause1()}.
	 * @param $context The parse tree.
	 */
	public function enterInto_clause1(Context\Into_clause1Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::into_clause1()}.
	 * @param $context The parse tree.
	 */
	public function exitInto_clause1(Context\Into_clause1Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partition_key_value()}.
	 * @param $context The parse tree.
	 */
	public function enterPartition_key_value(Context\Partition_key_valueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partition_key_value()}.
	 * @param $context The parse tree.
	 */
	public function exitPartition_key_value(Context\Partition_key_valueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subpartition_key_value()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartition_key_value(Context\Subpartition_key_valueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subpartition_key_value()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartition_key_value(Context\Subpartition_key_valueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::associate_statistics()}.
	 * @param $context The parse tree.
	 */
	public function enterAssociate_statistics(Context\Associate_statisticsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::associate_statistics()}.
	 * @param $context The parse tree.
	 */
	public function exitAssociate_statistics(Context\Associate_statisticsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_association()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_association(Context\Column_associationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_association()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_association(Context\Column_associationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_association()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_association(Context\Function_associationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_association()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_association(Context\Function_associationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::indextype_name()}.
	 * @param $context The parse tree.
	 */
	public function enterIndextype_name(Context\Indextype_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::indextype_name()}.
	 * @param $context The parse tree.
	 */
	public function exitIndextype_name(Context\Indextype_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::using_statistics_type()}.
	 * @param $context The parse tree.
	 */
	public function enterUsing_statistics_type(Context\Using_statistics_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::using_statistics_type()}.
	 * @param $context The parse tree.
	 */
	public function exitUsing_statistics_type(Context\Using_statistics_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::statistics_type_name()}.
	 * @param $context The parse tree.
	 */
	public function enterStatistics_type_name(Context\Statistics_type_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::statistics_type_name()}.
	 * @param $context The parse tree.
	 */
	public function exitStatistics_type_name(Context\Statistics_type_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::default_cost_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault_cost_clause(Context\Default_cost_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::default_cost_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault_cost_clause(Context\Default_cost_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cpu_cost()}.
	 * @param $context The parse tree.
	 */
	public function enterCpu_cost(Context\Cpu_costContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cpu_cost()}.
	 * @param $context The parse tree.
	 */
	public function exitCpu_cost(Context\Cpu_costContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::io_cost()}.
	 * @param $context The parse tree.
	 */
	public function enterIo_cost(Context\Io_costContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::io_cost()}.
	 * @param $context The parse tree.
	 */
	public function exitIo_cost(Context\Io_costContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::network_cost()}.
	 * @param $context The parse tree.
	 */
	public function enterNetwork_cost(Context\Network_costContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::network_cost()}.
	 * @param $context The parse tree.
	 */
	public function exitNetwork_cost(Context\Network_costContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::default_selectivity_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault_selectivity_clause(Context\Default_selectivity_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::default_selectivity_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault_selectivity_clause(Context\Default_selectivity_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::default_selectivity()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault_selectivity(Context\Default_selectivityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::default_selectivity()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault_selectivity(Context\Default_selectivityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::storage_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterStorage_table_clause(Context\Storage_table_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::storage_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitStorage_table_clause(Context\Storage_table_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unified_auditing()}.
	 * @param $context The parse tree.
	 */
	public function enterUnified_auditing(Context\Unified_auditingContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unified_auditing()}.
	 * @param $context The parse tree.
	 */
	public function exitUnified_auditing(Context\Unified_auditingContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::policy_name()}.
	 * @param $context The parse tree.
	 */
	public function enterPolicy_name(Context\Policy_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::policy_name()}.
	 * @param $context The parse tree.
	 */
	public function exitPolicy_name(Context\Policy_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::audit_traditional()}.
	 * @param $context The parse tree.
	 */
	public function enterAudit_traditional(Context\Audit_traditionalContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::audit_traditional()}.
	 * @param $context The parse tree.
	 */
	public function exitAudit_traditional(Context\Audit_traditionalContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::audit_direct_path()}.
	 * @param $context The parse tree.
	 */
	public function enterAudit_direct_path(Context\Audit_direct_pathContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::audit_direct_path()}.
	 * @param $context The parse tree.
	 */
	public function exitAudit_direct_path(Context\Audit_direct_pathContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::audit_container_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAudit_container_clause(Context\Audit_container_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::audit_container_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAudit_container_clause(Context\Audit_container_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::audit_operation_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAudit_operation_clause(Context\Audit_operation_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::audit_operation_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAudit_operation_clause(Context\Audit_operation_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::auditing_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAuditing_by_clause(Context\Auditing_by_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::auditing_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAuditing_by_clause(Context\Auditing_by_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::audit_user()}.
	 * @param $context The parse tree.
	 */
	public function enterAudit_user(Context\Audit_userContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::audit_user()}.
	 * @param $context The parse tree.
	 */
	public function exitAudit_user(Context\Audit_userContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::audit_schema_object_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAudit_schema_object_clause(Context\Audit_schema_object_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::audit_schema_object_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAudit_schema_object_clause(Context\Audit_schema_object_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sql_operation()}.
	 * @param $context The parse tree.
	 */
	public function enterSql_operation(Context\Sql_operationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sql_operation()}.
	 * @param $context The parse tree.
	 */
	public function exitSql_operation(Context\Sql_operationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::auditing_on_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAuditing_on_clause(Context\Auditing_on_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::auditing_on_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAuditing_on_clause(Context\Auditing_on_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_name()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_name(Context\Model_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_name()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_name(Context\Model_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_name()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_name(Context\Object_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_name()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_name(Context\Object_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::profile_name()}.
	 * @param $context The parse tree.
	 */
	public function enterProfile_name(Context\Profile_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::profile_name()}.
	 * @param $context The parse tree.
	 */
	public function exitProfile_name(Context\Profile_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sql_statement_shortcut()}.
	 * @param $context The parse tree.
	 */
	public function enterSql_statement_shortcut(Context\Sql_statement_shortcutContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sql_statement_shortcut()}.
	 * @param $context The parse tree.
	 */
	public function exitSql_statement_shortcut(Context\Sql_statement_shortcutContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_index()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_index(Context\Drop_indexContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_index()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_index(Context\Drop_indexContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rename_object()}.
	 * @param $context The parse tree.
	 */
	public function enterRename_object(Context\Rename_objectContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rename_object()}.
	 * @param $context The parse tree.
	 */
	public function exitRename_object(Context\Rename_objectContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::grant_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterGrant_statement(Context\Grant_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::grant_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitGrant_statement(Context\Grant_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::container_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterContainer_clause(Context\Container_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::container_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitContainer_clause(Context\Container_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_directory()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_directory(Context\Create_directoryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_directory()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_directory(Context\Create_directoryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::directory_name()}.
	 * @param $context The parse tree.
	 */
	public function enterDirectory_name(Context\Directory_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::directory_name()}.
	 * @param $context The parse tree.
	 */
	public function exitDirectory_name(Context\Directory_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::directory_path()}.
	 * @param $context The parse tree.
	 */
	public function enterDirectory_path(Context\Directory_pathContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::directory_path()}.
	 * @param $context The parse tree.
	 */
	public function exitDirectory_path(Context\Directory_pathContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_library()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_library(Context\Alter_libraryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_library()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_library(Context\Alter_libraryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::library_editionable()}.
	 * @param $context The parse tree.
	 */
	public function enterLibrary_editionable(Context\Library_editionableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::library_editionable()}.
	 * @param $context The parse tree.
	 */
	public function exitLibrary_editionable(Context\Library_editionableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::library_debug()}.
	 * @param $context The parse tree.
	 */
	public function enterLibrary_debug(Context\Library_debugContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::library_debug()}.
	 * @param $context The parse tree.
	 */
	public function exitLibrary_debug(Context\Library_debugContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::compiler_parameters_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCompiler_parameters_clause(Context\Compiler_parameters_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::compiler_parameters_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCompiler_parameters_clause(Context\Compiler_parameters_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::parameter_value()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter_value(Context\Parameter_valueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::parameter_value()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter_value(Context\Parameter_valueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::library_name()}.
	 * @param $context The parse tree.
	 */
	public function enterLibrary_name(Context\Library_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::library_name()}.
	 * @param $context The parse tree.
	 */
	public function exitLibrary_name(Context\Library_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_view()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_view(Context\Alter_viewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_view()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_view(Context\Alter_viewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_view_editionable()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_view_editionable(Context\Alter_view_editionableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_view_editionable()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_view_editionable(Context\Alter_view_editionableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_view()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_view(Context\Create_viewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_view()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_view(Context\Create_viewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::view_options()}.
	 * @param $context The parse tree.
	 */
	public function enterView_options(Context\View_optionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::view_options()}.
	 * @param $context The parse tree.
	 */
	public function exitView_options(Context\View_optionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::view_alias_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterView_alias_constraint(Context\View_alias_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::view_alias_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitView_alias_constraint(Context\View_alias_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_view_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_view_clause(Context\Object_view_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_view_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_view_clause(Context\Object_view_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::inline_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterInline_constraint(Context\Inline_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::inline_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitInline_constraint(Context\Inline_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::inline_ref_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterInline_ref_constraint(Context\Inline_ref_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::inline_ref_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitInline_ref_constraint(Context\Inline_ref_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::out_of_line_ref_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterOut_of_line_ref_constraint(Context\Out_of_line_ref_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::out_of_line_ref_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitOut_of_line_ref_constraint(Context\Out_of_line_ref_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::out_of_line_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterOut_of_line_constraint(Context\Out_of_line_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::out_of_line_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitOut_of_line_constraint(Context\Out_of_line_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::constraint_state()}.
	 * @param $context The parse tree.
	 */
	public function enterConstraint_state(Context\Constraint_stateContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::constraint_state()}.
	 * @param $context The parse tree.
	 */
	public function exitConstraint_state(Context\Constraint_stateContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_tablespace()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_tablespace(Context\Alter_tablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_tablespace()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_tablespace(Context\Alter_tablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::datafile_tempfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterDatafile_tempfile_clauses(Context\Datafile_tempfile_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::datafile_tempfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitDatafile_tempfile_clauses(Context\Datafile_tempfile_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace_logging_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace_logging_clauses(Context\Tablespace_logging_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace_logging_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace_logging_clauses(Context\Tablespace_logging_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace_group_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace_group_clause(Context\Tablespace_group_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace_group_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace_group_clause(Context\Tablespace_group_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace_group_name()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace_group_name(Context\Tablespace_group_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace_group_name()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace_group_name(Context\Tablespace_group_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace_state_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace_state_clauses(Context\Tablespace_state_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace_state_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace_state_clauses(Context\Tablespace_state_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::flashback_mode_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterFlashback_mode_clause(Context\Flashback_mode_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::flashback_mode_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitFlashback_mode_clause(Context\Flashback_mode_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::new_tablespace_name()}.
	 * @param $context The parse tree.
	 */
	public function enterNew_tablespace_name(Context\New_tablespace_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::new_tablespace_name()}.
	 * @param $context The parse tree.
	 */
	public function exitNew_tablespace_name(Context\New_tablespace_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_tablespace()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_tablespace(Context\Create_tablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_tablespace()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_tablespace(Context\Create_tablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::permanent_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPermanent_tablespace_clause(Context\Permanent_tablespace_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::permanent_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPermanent_tablespace_clause(Context\Permanent_tablespace_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace_encryption_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace_encryption_spec(Context\Tablespace_encryption_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace_encryption_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace_encryption_spec(Context\Tablespace_encryption_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::logging_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLogging_clause(Context\Logging_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::logging_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLogging_clause(Context\Logging_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::extent_management_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterExtent_management_clause(Context\Extent_management_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::extent_management_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitExtent_management_clause(Context\Extent_management_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::segment_management_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSegment_management_clause(Context\Segment_management_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::segment_management_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSegment_management_clause(Context\Segment_management_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::temporary_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTemporary_tablespace_clause(Context\Temporary_tablespace_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::temporary_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTemporary_tablespace_clause(Context\Temporary_tablespace_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::undo_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUndo_tablespace_clause(Context\Undo_tablespace_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::undo_tablespace_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUndo_tablespace_clause(Context\Undo_tablespace_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace_retention_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace_retention_clause(Context\Tablespace_retention_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace_retention_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace_retention_clause(Context\Tablespace_retention_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::datafile_specification()}.
	 * @param $context The parse tree.
	 */
	public function enterDatafile_specification(Context\Datafile_specificationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::datafile_specification()}.
	 * @param $context The parse tree.
	 */
	public function exitDatafile_specification(Context\Datafile_specificationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tempfile_specification()}.
	 * @param $context The parse tree.
	 */
	public function enterTempfile_specification(Context\Tempfile_specificationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tempfile_specification()}.
	 * @param $context The parse tree.
	 */
	public function exitTempfile_specification(Context\Tempfile_specificationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::datafile_tempfile_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterDatafile_tempfile_spec(Context\Datafile_tempfile_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::datafile_tempfile_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitDatafile_tempfile_spec(Context\Datafile_tempfile_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::redo_log_file_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterRedo_log_file_spec(Context\Redo_log_file_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::redo_log_file_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitRedo_log_file_spec(Context\Redo_log_file_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::autoextend_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAutoextend_clause(Context\Autoextend_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::autoextend_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAutoextend_clause(Context\Autoextend_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::maxsize_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMaxsize_clause(Context\Maxsize_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::maxsize_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMaxsize_clause(Context\Maxsize_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::build_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterBuild_clause(Context\Build_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::build_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitBuild_clause(Context\Build_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::parallel_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterParallel_clause(Context\Parallel_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::parallel_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitParallel_clause(Context\Parallel_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_materialized_view()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_materialized_view(Context\Alter_materialized_viewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_materialized_view()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_materialized_view(Context\Alter_materialized_viewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_mv_option1()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_mv_option1(Context\Alter_mv_option1Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_mv_option1()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_mv_option1(Context\Alter_mv_option1Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_mv_refresh()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_mv_refresh(Context\Alter_mv_refreshContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_mv_refresh()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_mv_refresh(Context\Alter_mv_refreshContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rollback_segment()}.
	 * @param $context The parse tree.
	 */
	public function enterRollback_segment(Context\Rollback_segmentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rollback_segment()}.
	 * @param $context The parse tree.
	 */
	public function exitRollback_segment(Context\Rollback_segmentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_mv_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_mv_column_clause(Context\Modify_mv_column_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_mv_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_mv_column_clause(Context\Modify_mv_column_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_materialized_view_log()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_materialized_view_log(Context\Alter_materialized_view_logContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_materialized_view_log()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_materialized_view_log(Context\Alter_materialized_view_logContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_mv_log_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_mv_log_column_clause(Context\Add_mv_log_column_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_mv_log_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_mv_log_column_clause(Context\Add_mv_log_column_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::move_mv_log_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMove_mv_log_clause(Context\Move_mv_log_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::move_mv_log_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMove_mv_log_clause(Context\Move_mv_log_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::mv_log_augmentation()}.
	 * @param $context The parse tree.
	 */
	public function enterMv_log_augmentation(Context\Mv_log_augmentationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::mv_log_augmentation()}.
	 * @param $context The parse tree.
	 */
	public function exitMv_log_augmentation(Context\Mv_log_augmentationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::datetime_expr()}.
	 * @param $context The parse tree.
	 */
	public function enterDatetime_expr(Context\Datetime_exprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::datetime_expr()}.
	 * @param $context The parse tree.
	 */
	public function exitDatetime_expr(Context\Datetime_exprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::interval_expr()}.
	 * @param $context The parse tree.
	 */
	public function enterInterval_expr(Context\Interval_exprContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::interval_expr()}.
	 * @param $context The parse tree.
	 */
	public function exitInterval_expr(Context\Interval_exprContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::synchronous_or_asynchronous()}.
	 * @param $context The parse tree.
	 */
	public function enterSynchronous_or_asynchronous(Context\Synchronous_or_asynchronousContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::synchronous_or_asynchronous()}.
	 * @param $context The parse tree.
	 */
	public function exitSynchronous_or_asynchronous(Context\Synchronous_or_asynchronousContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::including_or_excluding()}.
	 * @param $context The parse tree.
	 */
	public function enterIncluding_or_excluding(Context\Including_or_excludingContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::including_or_excluding()}.
	 * @param $context The parse tree.
	 */
	public function exitIncluding_or_excluding(Context\Including_or_excludingContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_materialized_view_log()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_materialized_view_log(Context\Create_materialized_view_logContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_materialized_view_log()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_materialized_view_log(Context\Create_materialized_view_logContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::new_values_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterNew_values_clause(Context\New_values_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::new_values_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitNew_values_clause(Context\New_values_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::mv_log_purge_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMv_log_purge_clause(Context\Mv_log_purge_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::mv_log_purge_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMv_log_purge_clause(Context\Mv_log_purge_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_materialized_view()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_materialized_view(Context\Create_materialized_viewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_materialized_view()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_materialized_view(Context\Create_materialized_viewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_mv_refresh()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_mv_refresh(Context\Create_mv_refreshContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_mv_refresh()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_mv_refresh(Context\Create_mv_refreshContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_context()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_context(Context\Create_contextContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_context()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_context(Context\Create_contextContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::oracle_namespace()}.
	 * @param $context The parse tree.
	 */
	public function enterOracle_namespace(Context\Oracle_namespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::oracle_namespace()}.
	 * @param $context The parse tree.
	 */
	public function exitOracle_namespace(Context\Oracle_namespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_cluster()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_cluster(Context\Create_clusterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_cluster()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_cluster(Context\Create_clusterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_table()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_table(Context\Create_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_table()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_table(Context\Create_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmltype_table()}.
	 * @param $context The parse tree.
	 */
	public function enterXmltype_table(Context\Xmltype_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmltype_table()}.
	 * @param $context The parse tree.
	 */
	public function exitXmltype_table(Context\Xmltype_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmltype_virtual_columns()}.
	 * @param $context The parse tree.
	 */
	public function enterXmltype_virtual_columns(Context\Xmltype_virtual_columnsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmltype_virtual_columns()}.
	 * @param $context The parse tree.
	 */
	public function exitXmltype_virtual_columns(Context\Xmltype_virtual_columnsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmltype_column_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterXmltype_column_properties(Context\Xmltype_column_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmltype_column_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitXmltype_column_properties(Context\Xmltype_column_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmltype_storage()}.
	 * @param $context The parse tree.
	 */
	public function enterXmltype_storage(Context\Xmltype_storageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmltype_storage()}.
	 * @param $context The parse tree.
	 */
	public function exitXmltype_storage(Context\Xmltype_storageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlschema_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlschema_spec(Context\Xmlschema_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlschema_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlschema_spec(Context\Xmlschema_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_table()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_table(Context\Object_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_table()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_table(Context\Object_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::oid_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOid_index_clause(Context\Oid_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::oid_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOid_index_clause(Context\Oid_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::oid_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOid_clause(Context\Oid_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::oid_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOid_clause(Context\Oid_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_properties(Context\Object_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_properties(Context\Object_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_table_substitution()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_table_substitution(Context\Object_table_substitutionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_table_substitution()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_table_substitution(Context\Object_table_substitutionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::relational_table()}.
	 * @param $context The parse tree.
	 */
	public function enterRelational_table(Context\Relational_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::relational_table()}.
	 * @param $context The parse tree.
	 */
	public function exitRelational_table(Context\Relational_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::relational_property()}.
	 * @param $context The parse tree.
	 */
	public function enterRelational_property(Context\Relational_propertyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::relational_property()}.
	 * @param $context The parse tree.
	 */
	public function exitRelational_property(Context\Relational_propertyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_partitioning_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_partitioning_clauses(Context\Table_partitioning_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_partitioning_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_partitioning_clauses(Context\Table_partitioning_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::range_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterRange_partitions(Context\Range_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::range_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitRange_partitions(Context\Range_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::list_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterList_partitions(Context\List_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::list_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitList_partitions(Context\List_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::hash_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterHash_partitions(Context\Hash_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::hash_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitHash_partitions(Context\Hash_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::individual_hash_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterIndividual_hash_partitions(Context\Individual_hash_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::individual_hash_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitIndividual_hash_partitions(Context\Individual_hash_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::hash_partitions_by_quantity()}.
	 * @param $context The parse tree.
	 */
	public function enterHash_partitions_by_quantity(Context\Hash_partitions_by_quantityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::hash_partitions_by_quantity()}.
	 * @param $context The parse tree.
	 */
	public function exitHash_partitions_by_quantity(Context\Hash_partitions_by_quantityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::hash_partition_quantity()}.
	 * @param $context The parse tree.
	 */
	public function enterHash_partition_quantity(Context\Hash_partition_quantityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::hash_partition_quantity()}.
	 * @param $context The parse tree.
	 */
	public function exitHash_partition_quantity(Context\Hash_partition_quantityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::composite_range_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterComposite_range_partitions(Context\Composite_range_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::composite_range_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitComposite_range_partitions(Context\Composite_range_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::composite_list_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterComposite_list_partitions(Context\Composite_list_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::composite_list_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitComposite_list_partitions(Context\Composite_list_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::composite_hash_partitions()}.
	 * @param $context The parse tree.
	 */
	public function enterComposite_hash_partitions(Context\Composite_hash_partitionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::composite_hash_partitions()}.
	 * @param $context The parse tree.
	 */
	public function exitComposite_hash_partitions(Context\Composite_hash_partitionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::reference_partitioning()}.
	 * @param $context The parse tree.
	 */
	public function enterReference_partitioning(Context\Reference_partitioningContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::reference_partitioning()}.
	 * @param $context The parse tree.
	 */
	public function exitReference_partitioning(Context\Reference_partitioningContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::reference_partition_desc()}.
	 * @param $context The parse tree.
	 */
	public function enterReference_partition_desc(Context\Reference_partition_descContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::reference_partition_desc()}.
	 * @param $context The parse tree.
	 */
	public function exitReference_partition_desc(Context\Reference_partition_descContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::system_partitioning()}.
	 * @param $context The parse tree.
	 */
	public function enterSystem_partitioning(Context\System_partitioningContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::system_partitioning()}.
	 * @param $context The parse tree.
	 */
	public function exitSystem_partitioning(Context\System_partitioningContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::range_partition_desc()}.
	 * @param $context The parse tree.
	 */
	public function enterRange_partition_desc(Context\Range_partition_descContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::range_partition_desc()}.
	 * @param $context The parse tree.
	 */
	public function exitRange_partition_desc(Context\Range_partition_descContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::list_partition_desc()}.
	 * @param $context The parse tree.
	 */
	public function enterList_partition_desc(Context\List_partition_descContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::list_partition_desc()}.
	 * @param $context The parse tree.
	 */
	public function exitList_partition_desc(Context\List_partition_descContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subpartition_template()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartition_template(Context\Subpartition_templateContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subpartition_template()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartition_template(Context\Subpartition_templateContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::hash_subpartition_quantity()}.
	 * @param $context The parse tree.
	 */
	public function enterHash_subpartition_quantity(Context\Hash_subpartition_quantityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::hash_subpartition_quantity()}.
	 * @param $context The parse tree.
	 */
	public function exitHash_subpartition_quantity(Context\Hash_subpartition_quantityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subpartition_by_range()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartition_by_range(Context\Subpartition_by_rangeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subpartition_by_range()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartition_by_range(Context\Subpartition_by_rangeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subpartition_by_list()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartition_by_list(Context\Subpartition_by_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subpartition_by_list()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartition_by_list(Context\Subpartition_by_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subpartition_by_hash()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartition_by_hash(Context\Subpartition_by_hashContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subpartition_by_hash()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartition_by_hash(Context\Subpartition_by_hashContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subpartition_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSubpartition_name(Context\Subpartition_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subpartition_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSubpartition_name(Context\Subpartition_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::range_subpartition_desc()}.
	 * @param $context The parse tree.
	 */
	public function enterRange_subpartition_desc(Context\Range_subpartition_descContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::range_subpartition_desc()}.
	 * @param $context The parse tree.
	 */
	public function exitRange_subpartition_desc(Context\Range_subpartition_descContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::list_subpartition_desc()}.
	 * @param $context The parse tree.
	 */
	public function enterList_subpartition_desc(Context\List_subpartition_descContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::list_subpartition_desc()}.
	 * @param $context The parse tree.
	 */
	public function exitList_subpartition_desc(Context\List_subpartition_descContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::individual_hash_subparts()}.
	 * @param $context The parse tree.
	 */
	public function enterIndividual_hash_subparts(Context\Individual_hash_subpartsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::individual_hash_subparts()}.
	 * @param $context The parse tree.
	 */
	public function exitIndividual_hash_subparts(Context\Individual_hash_subpartsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::hash_subparts_by_quantity()}.
	 * @param $context The parse tree.
	 */
	public function enterHash_subparts_by_quantity(Context\Hash_subparts_by_quantityContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::hash_subparts_by_quantity()}.
	 * @param $context The parse tree.
	 */
	public function exitHash_subparts_by_quantity(Context\Hash_subparts_by_quantityContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::range_values_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRange_values_clause(Context\Range_values_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::range_values_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRange_values_clause(Context\Range_values_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::list_values_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterList_values_clause(Context\List_values_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::list_values_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitList_values_clause(Context\List_values_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_partition_description()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_partition_description(Context\Table_partition_descriptionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_partition_description()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_partition_description(Context\Table_partition_descriptionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partitioning_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPartitioning_storage_clause(Context\Partitioning_storage_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partitioning_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPartitioning_storage_clause(Context\Partitioning_storage_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_partitioning_storage()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_partitioning_storage(Context\Lob_partitioning_storageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_partitioning_storage()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_partitioning_storage(Context\Lob_partitioning_storageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::datatype_null_enable()}.
	 * @param $context The parse tree.
	 */
	public function enterDatatype_null_enable(Context\Datatype_null_enableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::datatype_null_enable()}.
	 * @param $context The parse tree.
	 */
	public function exitDatatype_null_enable(Context\Datatype_null_enableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::size_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSize_clause(Context\Size_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::size_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSize_clause(Context\Size_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_compression()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_compression(Context\Table_compressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_compression()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_compression(Context\Table_compressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::physical_attributes_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPhysical_attributes_clause(Context\Physical_attributes_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::physical_attributes_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPhysical_attributes_clause(Context\Physical_attributes_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterStorage_clause(Context\Storage_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitStorage_clause(Context\Storage_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::deferred_segment_creation()}.
	 * @param $context The parse tree.
	 */
	public function enterDeferred_segment_creation(Context\Deferred_segment_creationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::deferred_segment_creation()}.
	 * @param $context The parse tree.
	 */
	public function exitDeferred_segment_creation(Context\Deferred_segment_creationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::segment_attributes_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSegment_attributes_clause(Context\Segment_attributes_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::segment_attributes_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSegment_attributes_clause(Context\Segment_attributes_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::physical_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterPhysical_properties(Context\Physical_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::physical_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitPhysical_properties(Context\Physical_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::row_movement_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRow_movement_clause(Context\Row_movement_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::row_movement_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRow_movement_clause(Context\Row_movement_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::flashback_archive_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterFlashback_archive_clause(Context\Flashback_archive_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::flashback_archive_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitFlashback_archive_clause(Context\Flashback_archive_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::log_grp()}.
	 * @param $context The parse tree.
	 */
	public function enterLog_grp(Context\Log_grpContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::log_grp()}.
	 * @param $context The parse tree.
	 */
	public function exitLog_grp(Context\Log_grpContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::supplemental_table_logging()}.
	 * @param $context The parse tree.
	 */
	public function enterSupplemental_table_logging(Context\Supplemental_table_loggingContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::supplemental_table_logging()}.
	 * @param $context The parse tree.
	 */
	public function exitSupplemental_table_logging(Context\Supplemental_table_loggingContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::supplemental_log_grp_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSupplemental_log_grp_clause(Context\Supplemental_log_grp_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::supplemental_log_grp_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSupplemental_log_grp_clause(Context\Supplemental_log_grp_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::supplemental_id_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSupplemental_id_key_clause(Context\Supplemental_id_key_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::supplemental_id_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSupplemental_id_key_clause(Context\Supplemental_id_key_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::allocate_extent_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAllocate_extent_clause(Context\Allocate_extent_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::allocate_extent_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAllocate_extent_clause(Context\Allocate_extent_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::deallocate_unused_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDeallocate_unused_clause(Context\Deallocate_unused_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::deallocate_unused_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDeallocate_unused_clause(Context\Deallocate_unused_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::shrink_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterShrink_clause(Context\Shrink_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::shrink_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitShrink_clause(Context\Shrink_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::records_per_block_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRecords_per_block_clause(Context\Records_per_block_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::records_per_block_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRecords_per_block_clause(Context\Records_per_block_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::upgrade_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUpgrade_table_clause(Context\Upgrade_table_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::upgrade_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUpgrade_table_clause(Context\Upgrade_table_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::truncate_table()}.
	 * @param $context The parse tree.
	 */
	public function enterTruncate_table(Context\Truncate_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::truncate_table()}.
	 * @param $context The parse tree.
	 */
	public function exitTruncate_table(Context\Truncate_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_table()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_table(Context\Drop_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_table()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_table(Context\Drop_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_view()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_view(Context\Drop_viewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_view()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_view(Context\Drop_viewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::comment_on_column()}.
	 * @param $context The parse tree.
	 */
	public function enterComment_on_column(Context\Comment_on_columnContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::comment_on_column()}.
	 * @param $context The parse tree.
	 */
	public function exitComment_on_column(Context\Comment_on_columnContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::enable_or_disable()}.
	 * @param $context The parse tree.
	 */
	public function enterEnable_or_disable(Context\Enable_or_disableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::enable_or_disable()}.
	 * @param $context The parse tree.
	 */
	public function exitEnable_or_disable(Context\Enable_or_disableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::allow_or_disallow()}.
	 * @param $context The parse tree.
	 */
	public function enterAllow_or_disallow(Context\Allow_or_disallowContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::allow_or_disallow()}.
	 * @param $context The parse tree.
	 */
	public function exitAllow_or_disallow(Context\Allow_or_disallowContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_synonym()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_synonym(Context\Create_synonymContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_synonym()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_synonym(Context\Create_synonymContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::comment_on_table()}.
	 * @param $context The parse tree.
	 */
	public function enterComment_on_table(Context\Comment_on_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::comment_on_table()}.
	 * @param $context The parse tree.
	 */
	public function exitComment_on_table(Context\Comment_on_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_cluster()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_cluster(Context\Alter_clusterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_cluster()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_cluster(Context\Alter_clusterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cache_or_nocache()}.
	 * @param $context The parse tree.
	 */
	public function enterCache_or_nocache(Context\Cache_or_nocacheContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cache_or_nocache()}.
	 * @param $context The parse tree.
	 */
	public function exitCache_or_nocache(Context\Cache_or_nocacheContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::database_name()}.
	 * @param $context The parse tree.
	 */
	public function enterDatabase_name(Context\Database_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::database_name()}.
	 * @param $context The parse tree.
	 */
	public function exitDatabase_name(Context\Database_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_database()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_database(Context\Alter_databaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_database()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_database(Context\Alter_databaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::startup_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterStartup_clauses(Context\Startup_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::startup_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitStartup_clauses(Context\Startup_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::resetlogs_or_noresetlogs()}.
	 * @param $context The parse tree.
	 */
	public function enterResetlogs_or_noresetlogs(Context\Resetlogs_or_noresetlogsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::resetlogs_or_noresetlogs()}.
	 * @param $context The parse tree.
	 */
	public function exitResetlogs_or_noresetlogs(Context\Resetlogs_or_noresetlogsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::upgrade_or_downgrade()}.
	 * @param $context The parse tree.
	 */
	public function enterUpgrade_or_downgrade(Context\Upgrade_or_downgradeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::upgrade_or_downgrade()}.
	 * @param $context The parse tree.
	 */
	public function exitUpgrade_or_downgrade(Context\Upgrade_or_downgradeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::recovery_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterRecovery_clauses(Context\Recovery_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::recovery_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitRecovery_clauses(Context\Recovery_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::begin_or_end()}.
	 * @param $context The parse tree.
	 */
	public function enterBegin_or_end(Context\Begin_or_endContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::begin_or_end()}.
	 * @param $context The parse tree.
	 */
	public function exitBegin_or_end(Context\Begin_or_endContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::general_recovery()}.
	 * @param $context The parse tree.
	 */
	public function enterGeneral_recovery(Context\General_recoveryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::general_recovery()}.
	 * @param $context The parse tree.
	 */
	public function exitGeneral_recovery(Context\General_recoveryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::full_database_recovery()}.
	 * @param $context The parse tree.
	 */
	public function enterFull_database_recovery(Context\Full_database_recoveryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::full_database_recovery()}.
	 * @param $context The parse tree.
	 */
	public function exitFull_database_recovery(Context\Full_database_recoveryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partial_database_recovery()}.
	 * @param $context The parse tree.
	 */
	public function enterPartial_database_recovery(Context\Partial_database_recoveryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partial_database_recovery()}.
	 * @param $context The parse tree.
	 */
	public function exitPartial_database_recovery(Context\Partial_database_recoveryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partial_database_recovery_10g()}.
	 * @param $context The parse tree.
	 */
	public function enterPartial_database_recovery_10g(Context\Partial_database_recovery_10gContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partial_database_recovery_10g()}.
	 * @param $context The parse tree.
	 */
	public function exitPartial_database_recovery_10g(Context\Partial_database_recovery_10gContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::managed_standby_recovery()}.
	 * @param $context The parse tree.
	 */
	public function enterManaged_standby_recovery(Context\Managed_standby_recoveryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::managed_standby_recovery()}.
	 * @param $context The parse tree.
	 */
	public function exitManaged_standby_recovery(Context\Managed_standby_recoveryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::db_name()}.
	 * @param $context The parse tree.
	 */
	public function enterDb_name(Context\Db_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::db_name()}.
	 * @param $context The parse tree.
	 */
	public function exitDb_name(Context\Db_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::database_file_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterDatabase_file_clauses(Context\Database_file_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::database_file_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitDatabase_file_clauses(Context\Database_file_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::create_datafile_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCreate_datafile_clause(Context\Create_datafile_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::create_datafile_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCreate_datafile_clause(Context\Create_datafile_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_datafile_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_datafile_clause(Context\Alter_datafile_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_datafile_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_datafile_clause(Context\Alter_datafile_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_tempfile_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_tempfile_clause(Context\Alter_tempfile_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_tempfile_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_tempfile_clause(Context\Alter_tempfile_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::logfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterLogfile_clauses(Context\Logfile_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::logfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitLogfile_clauses(Context\Logfile_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_logfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_logfile_clauses(Context\Add_logfile_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_logfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_logfile_clauses(Context\Add_logfile_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::log_file_group()}.
	 * @param $context The parse tree.
	 */
	public function enterLog_file_group(Context\Log_file_groupContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::log_file_group()}.
	 * @param $context The parse tree.
	 */
	public function exitLog_file_group(Context\Log_file_groupContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_logfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_logfile_clauses(Context\Drop_logfile_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_logfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_logfile_clauses(Context\Drop_logfile_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::switch_logfile_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitch_logfile_clause(Context\Switch_logfile_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::switch_logfile_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitch_logfile_clause(Context\Switch_logfile_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::supplemental_db_logging()}.
	 * @param $context The parse tree.
	 */
	public function enterSupplemental_db_logging(Context\Supplemental_db_loggingContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::supplemental_db_logging()}.
	 * @param $context The parse tree.
	 */
	public function exitSupplemental_db_logging(Context\Supplemental_db_loggingContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_or_drop()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_or_drop(Context\Add_or_dropContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_or_drop()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_or_drop(Context\Add_or_dropContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::supplemental_plsql_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSupplemental_plsql_clause(Context\Supplemental_plsql_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::supplemental_plsql_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSupplemental_plsql_clause(Context\Supplemental_plsql_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::logfile_descriptor()}.
	 * @param $context The parse tree.
	 */
	public function enterLogfile_descriptor(Context\Logfile_descriptorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::logfile_descriptor()}.
	 * @param $context The parse tree.
	 */
	public function exitLogfile_descriptor(Context\Logfile_descriptorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::controlfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterControlfile_clauses(Context\Controlfile_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::controlfile_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitControlfile_clauses(Context\Controlfile_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::trace_file_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterTrace_file_clause(Context\Trace_file_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::trace_file_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitTrace_file_clause(Context\Trace_file_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::standby_database_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterStandby_database_clauses(Context\Standby_database_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::standby_database_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitStandby_database_clauses(Context\Standby_database_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::activate_standby_db_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterActivate_standby_db_clause(Context\Activate_standby_db_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::activate_standby_db_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitActivate_standby_db_clause(Context\Activate_standby_db_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::maximize_standby_db_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMaximize_standby_db_clause(Context\Maximize_standby_db_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::maximize_standby_db_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMaximize_standby_db_clause(Context\Maximize_standby_db_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::register_logfile_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRegister_logfile_clause(Context\Register_logfile_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::register_logfile_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRegister_logfile_clause(Context\Register_logfile_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::commit_switchover_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCommit_switchover_clause(Context\Commit_switchover_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::commit_switchover_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCommit_switchover_clause(Context\Commit_switchover_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::start_standby_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterStart_standby_clause(Context\Start_standby_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::start_standby_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitStart_standby_clause(Context\Start_standby_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::stop_standby_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterStop_standby_clause(Context\Stop_standby_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::stop_standby_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitStop_standby_clause(Context\Stop_standby_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::convert_database_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterConvert_database_clause(Context\Convert_database_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::convert_database_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitConvert_database_clause(Context\Convert_database_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::default_settings_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault_settings_clause(Context\Default_settings_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::default_settings_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault_settings_clause(Context\Default_settings_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::set_time_zone_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSet_time_zone_clause(Context\Set_time_zone_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::set_time_zone_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSet_time_zone_clause(Context\Set_time_zone_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::instance_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterInstance_clauses(Context\Instance_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::instance_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitInstance_clauses(Context\Instance_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::security_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSecurity_clause(Context\Security_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::security_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSecurity_clause(Context\Security_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::domain()}.
	 * @param $context The parse tree.
	 */
	public function enterDomain(Context\DomainContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::domain()}.
	 * @param $context The parse tree.
	 */
	public function exitDomain(Context\DomainContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::database()}.
	 * @param $context The parse tree.
	 */
	public function enterDatabase(Context\DatabaseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::database()}.
	 * @param $context The parse tree.
	 */
	public function exitDatabase(Context\DatabaseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::edition_name()}.
	 * @param $context The parse tree.
	 */
	public function enterEdition_name(Context\Edition_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::edition_name()}.
	 * @param $context The parse tree.
	 */
	public function exitEdition_name(Context\Edition_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::filenumber()}.
	 * @param $context The parse tree.
	 */
	public function enterFilenumber(Context\FilenumberContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::filenumber()}.
	 * @param $context The parse tree.
	 */
	public function exitFilenumber(Context\FilenumberContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::filename()}.
	 * @param $context The parse tree.
	 */
	public function enterFilename(Context\FilenameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::filename()}.
	 * @param $context The parse tree.
	 */
	public function exitFilename(Context\FilenameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_table()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_table(Context\Alter_tableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_table()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_table(Context\Alter_tableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_table_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_table_properties(Context\Alter_table_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_table_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_table_properties(Context\Alter_table_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_table_properties_1()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_table_properties_1(Context\Alter_table_properties_1Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_table_properties_1()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_table_properties_1(Context\Alter_table_properties_1Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_iot_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_iot_clauses(Context\Alter_iot_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_iot_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_iot_clauses(Context\Alter_iot_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_mapping_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_mapping_table_clause(Context\Alter_mapping_table_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_mapping_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_mapping_table_clause(Context\Alter_mapping_table_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_overflow_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_overflow_clause(Context\Alter_overflow_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_overflow_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_overflow_clause(Context\Alter_overflow_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_overflow_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_overflow_clause(Context\Add_overflow_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_overflow_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_overflow_clause(Context\Add_overflow_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::enable_disable_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterEnable_disable_clause(Context\Enable_disable_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::enable_disable_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitEnable_disable_clause(Context\Enable_disable_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::using_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUsing_index_clause(Context\Using_index_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::using_index_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUsing_index_clause(Context\Using_index_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_attributes()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_attributes(Context\Index_attributesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_attributes()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_attributes(Context\Index_attributesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sort_or_nosort()}.
	 * @param $context The parse tree.
	 */
	public function enterSort_or_nosort(Context\Sort_or_nosortContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sort_or_nosort()}.
	 * @param $context The parse tree.
	 */
	public function exitSort_or_nosort(Context\Sort_or_nosortContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::exceptions_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterExceptions_clause(Context\Exceptions_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::exceptions_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitExceptions_clause(Context\Exceptions_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::move_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMove_table_clause(Context\Move_table_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::move_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMove_table_clause(Context\Move_table_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_org_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_org_table_clause(Context\Index_org_table_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_org_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_org_table_clause(Context\Index_org_table_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::mapping_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMapping_table_clause(Context\Mapping_table_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::mapping_table_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMapping_table_clause(Context\Mapping_table_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::key_compression()}.
	 * @param $context The parse tree.
	 */
	public function enterKey_compression(Context\Key_compressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::key_compression()}.
	 * @param $context The parse tree.
	 */
	public function exitKey_compression(Context\Key_compressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_org_overflow_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_org_overflow_clause(Context\Index_org_overflow_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_org_overflow_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_org_overflow_clause(Context\Index_org_overflow_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_clauses(Context\Column_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_clauses(Context\Column_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_collection_retrieval()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_collection_retrieval(Context\Modify_collection_retrievalContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_collection_retrieval()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_collection_retrieval(Context\Modify_collection_retrievalContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::collection_item()}.
	 * @param $context The parse tree.
	 */
	public function enterCollection_item(Context\Collection_itemContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::collection_item()}.
	 * @param $context The parse tree.
	 */
	public function exitCollection_item(Context\Collection_itemContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rename_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRename_column_clause(Context\Rename_column_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rename_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRename_column_clause(Context\Rename_column_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::old_column_name()}.
	 * @param $context The parse tree.
	 */
	public function enterOld_column_name(Context\Old_column_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::old_column_name()}.
	 * @param $context The parse tree.
	 */
	public function exitOld_column_name(Context\Old_column_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::new_column_name()}.
	 * @param $context The parse tree.
	 */
	public function enterNew_column_name(Context\New_column_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::new_column_name()}.
	 * @param $context The parse tree.
	 */
	public function exitNew_column_name(Context\New_column_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_modify_drop_column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_modify_drop_column_clauses(Context\Add_modify_drop_column_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_modify_drop_column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_modify_drop_column_clauses(Context\Add_modify_drop_column_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_column_clause(Context\Drop_column_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_column_clause(Context\Drop_column_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_column_clauses(Context\Modify_column_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_column_clauses(Context\Modify_column_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_col_properties(Context\Modify_col_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_col_properties(Context\Modify_col_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_col_substitutable()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_col_substitutable(Context\Modify_col_substitutableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_col_substitutable()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_col_substitutable(Context\Modify_col_substitutableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_column_clause(Context\Add_column_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_column_clause(Context\Add_column_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::alter_varray_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterAlter_varray_col_properties(Context\Alter_varray_col_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::alter_varray_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitAlter_varray_col_properties(Context\Alter_varray_col_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::varray_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterVarray_col_properties(Context\Varray_col_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::varray_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitVarray_col_properties(Context\Varray_col_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::varray_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterVarray_storage_clause(Context\Varray_storage_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::varray_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitVarray_storage_clause(Context\Varray_storage_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_segname()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_segname(Context\Lob_segnameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_segname()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_segname(Context\Lob_segnameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_item()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_item(Context\Lob_itemContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_item()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_item(Context\Lob_itemContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_storage_parameters()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_storage_parameters(Context\Lob_storage_parametersContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_storage_parameters()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_storage_parameters(Context\Lob_storage_parametersContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_storage_clause(Context\Lob_storage_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_storage_clause(Context\Lob_storage_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_lob_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_lob_storage_clause(Context\Modify_lob_storage_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_lob_storage_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_lob_storage_clause(Context\Modify_lob_storage_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::modify_lob_parameters()}.
	 * @param $context The parse tree.
	 */
	public function enterModify_lob_parameters(Context\Modify_lob_parametersContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::modify_lob_parameters()}.
	 * @param $context The parse tree.
	 */
	public function exitModify_lob_parameters(Context\Modify_lob_parametersContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_parameters()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_parameters(Context\Lob_parametersContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_parameters()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_parameters(Context\Lob_parametersContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_deduplicate_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_deduplicate_clause(Context\Lob_deduplicate_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_deduplicate_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_deduplicate_clause(Context\Lob_deduplicate_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_compression_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_compression_clause(Context\Lob_compression_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_compression_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_compression_clause(Context\Lob_compression_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lob_retention_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterLob_retention_clause(Context\Lob_retention_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lob_retention_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitLob_retention_clause(Context\Lob_retention_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::encryption_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterEncryption_spec(Context\Encryption_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::encryption_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitEncryption_spec(Context\Encryption_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tablespace()}.
	 * @param $context The parse tree.
	 */
	public function enterTablespace(Context\TablespaceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tablespace()}.
	 * @param $context The parse tree.
	 */
	public function exitTablespace(Context\TablespaceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::varray_item()}.
	 * @param $context The parse tree.
	 */
	public function enterVarray_item(Context\Varray_itemContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::varray_item()}.
	 * @param $context The parse tree.
	 */
	public function exitVarray_item(Context\Varray_itemContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_properties(Context\Column_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_properties(Context\Column_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::period_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterPeriod_definition(Context\Period_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::period_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitPeriod_definition(Context\Period_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::start_time_column()}.
	 * @param $context The parse tree.
	 */
	public function enterStart_time_column(Context\Start_time_columnContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::start_time_column()}.
	 * @param $context The parse tree.
	 */
	public function exitStart_time_column(Context\Start_time_columnContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::end_time_column()}.
	 * @param $context The parse tree.
	 */
	public function enterEnd_time_column(Context\End_time_columnContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::end_time_column()}.
	 * @param $context The parse tree.
	 */
	public function exitEnd_time_column(Context\End_time_columnContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_definition(Context\Column_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_definition(Context\Column_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::virtual_column_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterVirtual_column_definition(Context\Virtual_column_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::virtual_column_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitVirtual_column_definition(Context\Virtual_column_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::autogenerated_sequence_definition()}.
	 * @param $context The parse tree.
	 */
	public function enterAutogenerated_sequence_definition(Context\Autogenerated_sequence_definitionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::autogenerated_sequence_definition()}.
	 * @param $context The parse tree.
	 */
	public function exitAutogenerated_sequence_definition(Context\Autogenerated_sequence_definitionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::out_of_line_part_storage()}.
	 * @param $context The parse tree.
	 */
	public function enterOut_of_line_part_storage(Context\Out_of_line_part_storageContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::out_of_line_part_storage()}.
	 * @param $context The parse tree.
	 */
	public function exitOut_of_line_part_storage(Context\Out_of_line_part_storageContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::nested_table_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterNested_table_col_properties(Context\Nested_table_col_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::nested_table_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitNested_table_col_properties(Context\Nested_table_col_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::nested_item()}.
	 * @param $context The parse tree.
	 */
	public function enterNested_item(Context\Nested_itemContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::nested_item()}.
	 * @param $context The parse tree.
	 */
	public function exitNested_item(Context\Nested_itemContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::substitutable_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSubstitutable_column_clause(Context\Substitutable_column_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::substitutable_column_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSubstitutable_column_clause(Context\Substitutable_column_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partition_name()}.
	 * @param $context The parse tree.
	 */
	public function enterPartition_name(Context\Partition_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partition_name()}.
	 * @param $context The parse tree.
	 */
	public function exitPartition_name(Context\Partition_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::supplemental_logging_props()}.
	 * @param $context The parse tree.
	 */
	public function enterSupplemental_logging_props(Context\Supplemental_logging_propsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::supplemental_logging_props()}.
	 * @param $context The parse tree.
	 */
	public function exitSupplemental_logging_props(Context\Supplemental_logging_propsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_or_attribute()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_or_attribute(Context\Column_or_attributeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_or_attribute()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_or_attribute(Context\Column_or_attributeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_type_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_type_col_properties(Context\Object_type_col_propertiesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_type_col_properties()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_type_col_properties(Context\Object_type_col_propertiesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::constraint_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterConstraint_clauses(Context\Constraint_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::constraint_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitConstraint_clauses(Context\Constraint_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::old_constraint_name()}.
	 * @param $context The parse tree.
	 */
	public function enterOld_constraint_name(Context\Old_constraint_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::old_constraint_name()}.
	 * @param $context The parse tree.
	 */
	public function exitOld_constraint_name(Context\Old_constraint_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::new_constraint_name()}.
	 * @param $context The parse tree.
	 */
	public function enterNew_constraint_name(Context\New_constraint_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::new_constraint_name()}.
	 * @param $context The parse tree.
	 */
	public function exitNew_constraint_name(Context\New_constraint_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_constraint_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_constraint_clause(Context\Drop_constraint_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_constraint_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_constraint_clause(Context\Drop_constraint_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_primary_key_or_unique_or_generic_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_primary_key_or_unique_or_generic_clause(Context\Drop_primary_key_or_unique_or_generic_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_primary_key_or_unique_or_generic_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_primary_key_or_unique_or_generic_clause(Context\Drop_primary_key_or_unique_or_generic_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_constraint(Context\Add_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_constraint(Context\Add_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::add_constraint_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd_constraint_clause(Context\Add_constraint_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::add_constraint_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd_constraint_clause(Context\Add_constraint_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::check_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterCheck_constraint(Context\Check_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::check_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitCheck_constraint(Context\Check_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::drop_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterDrop_constraint(Context\Drop_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::drop_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitDrop_constraint(Context\Drop_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::enable_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterEnable_constraint(Context\Enable_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::enable_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitEnable_constraint(Context\Enable_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::disable_constraint()}.
	 * @param $context The parse tree.
	 */
	public function enterDisable_constraint(Context\Disable_constraintContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::disable_constraint()}.
	 * @param $context The parse tree.
	 */
	public function exitDisable_constraint(Context\Disable_constraintContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::foreign_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterForeign_key_clause(Context\Foreign_key_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::foreign_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitForeign_key_clause(Context\Foreign_key_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::references_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterReferences_clause(Context\References_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::references_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitReferences_clause(Context\References_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::on_delete_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOn_delete_clause(Context\On_delete_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::on_delete_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOn_delete_clause(Context\On_delete_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unique_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUnique_key_clause(Context\Unique_key_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unique_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUnique_key_clause(Context\Unique_key_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::primary_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimary_key_clause(Context\Primary_key_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::primary_key_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimary_key_clause(Context\Primary_key_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::anonymous_block()}.
	 * @param $context The parse tree.
	 */
	public function enterAnonymous_block(Context\Anonymous_blockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::anonymous_block()}.
	 * @param $context The parse tree.
	 */
	public function exitAnonymous_block(Context\Anonymous_blockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::invoker_rights_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterInvoker_rights_clause(Context\Invoker_rights_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::invoker_rights_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitInvoker_rights_clause(Context\Invoker_rights_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::call_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterCall_spec(Context\Call_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::call_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitCall_spec(Context\Call_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::java_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterJava_spec(Context\Java_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::java_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitJava_spec(Context\Java_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::c_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterC_spec(Context\C_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::c_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitC_spec(Context\C_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::c_agent_in_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterC_agent_in_clause(Context\C_agent_in_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::c_agent_in_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitC_agent_in_clause(Context\C_agent_in_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::c_parameters_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterC_parameters_clause(Context\C_parameters_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::c_parameters_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitC_parameters_clause(Context\C_parameters_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter(Context\ParameterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::parameter()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter(Context\ParameterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::default_value_part()}.
	 * @param $context The parse tree.
	 */
	public function enterDefault_value_part(Context\Default_value_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::default_value_part()}.
	 * @param $context The parse tree.
	 */
	public function exitDefault_value_part(Context\Default_value_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::seq_of_declare_specs()}.
	 * @param $context The parse tree.
	 */
	public function enterSeq_of_declare_specs(Context\Seq_of_declare_specsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::seq_of_declare_specs()}.
	 * @param $context The parse tree.
	 */
	public function exitSeq_of_declare_specs(Context\Seq_of_declare_specsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::declare_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclare_spec(Context\Declare_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::declare_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclare_spec(Context\Declare_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::variable_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterVariable_declaration(Context\Variable_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::variable_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitVariable_declaration(Context\Variable_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subtype_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterSubtype_declaration(Context\Subtype_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subtype_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitSubtype_declaration(Context\Subtype_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cursor_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterCursor_declaration(Context\Cursor_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cursor_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitCursor_declaration(Context\Cursor_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::parameter_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter_spec(Context\Parameter_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::parameter_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter_spec(Context\Parameter_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::exception_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterException_declaration(Context\Exception_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::exception_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitException_declaration(Context\Exception_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pragma_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterPragma_declaration(Context\Pragma_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pragma_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitPragma_declaration(Context\Pragma_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::record_type_def()}.
	 * @param $context The parse tree.
	 */
	public function enterRecord_type_def(Context\Record_type_defContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::record_type_def()}.
	 * @param $context The parse tree.
	 */
	public function exitRecord_type_def(Context\Record_type_defContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::field_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterField_spec(Context\Field_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::field_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitField_spec(Context\Field_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::ref_cursor_type_def()}.
	 * @param $context The parse tree.
	 */
	public function enterRef_cursor_type_def(Context\Ref_cursor_type_defContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::ref_cursor_type_def()}.
	 * @param $context The parse tree.
	 */
	public function exitRef_cursor_type_def(Context\Ref_cursor_type_defContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterType_declaration(Context\Type_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitType_declaration(Context\Type_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_type_def()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_type_def(Context\Table_type_defContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_type_def()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_type_def(Context\Table_type_defContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_indexed_by_part()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_indexed_by_part(Context\Table_indexed_by_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_indexed_by_part()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_indexed_by_part(Context\Table_indexed_by_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::varray_type_def()}.
	 * @param $context The parse tree.
	 */
	public function enterVarray_type_def(Context\Varray_type_defContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::varray_type_def()}.
	 * @param $context The parse tree.
	 */
	public function exitVarray_type_def(Context\Varray_type_defContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::seq_of_statements()}.
	 * @param $context The parse tree.
	 */
	public function enterSeq_of_statements(Context\Seq_of_statementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::seq_of_statements()}.
	 * @param $context The parse tree.
	 */
	public function exitSeq_of_statements(Context\Seq_of_statementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::label_declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterLabel_declaration(Context\Label_declarationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::label_declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitLabel_declaration(Context\Label_declarationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::swallow_to_semi()}.
	 * @param $context The parse tree.
	 */
	public function enterSwallow_to_semi(Context\Swallow_to_semiContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::swallow_to_semi()}.
	 * @param $context The parse tree.
	 */
	public function exitSwallow_to_semi(Context\Swallow_to_semiContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::assignment_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment_statement(Context\Assignment_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::assignment_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment_statement(Context\Assignment_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::continue_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterContinue_statement(Context\Continue_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::continue_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitContinue_statement(Context\Continue_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::exit_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterExit_statement(Context\Exit_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::exit_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitExit_statement(Context\Exit_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::goto_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterGoto_statement(Context\Goto_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::goto_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitGoto_statement(Context\Goto_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::if_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterIf_statement(Context\If_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::if_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitIf_statement(Context\If_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::elsif_part()}.
	 * @param $context The parse tree.
	 */
	public function enterElsif_part(Context\Elsif_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::elsif_part()}.
	 * @param $context The parse tree.
	 */
	public function exitElsif_part(Context\Elsif_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::else_part()}.
	 * @param $context The parse tree.
	 */
	public function enterElse_part(Context\Else_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::else_part()}.
	 * @param $context The parse tree.
	 */
	public function exitElse_part(Context\Else_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::loop_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterLoop_statement(Context\Loop_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::loop_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitLoop_statement(Context\Loop_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cursor_loop_param()}.
	 * @param $context The parse tree.
	 */
	public function enterCursor_loop_param(Context\Cursor_loop_paramContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cursor_loop_param()}.
	 * @param $context The parse tree.
	 */
	public function exitCursor_loop_param(Context\Cursor_loop_paramContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::forall_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterForall_statement(Context\Forall_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::forall_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitForall_statement(Context\Forall_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::bounds_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterBounds_clause(Context\Bounds_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::bounds_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitBounds_clause(Context\Bounds_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::between_bound()}.
	 * @param $context The parse tree.
	 */
	public function enterBetween_bound(Context\Between_boundContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::between_bound()}.
	 * @param $context The parse tree.
	 */
	public function exitBetween_bound(Context\Between_boundContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lower_bound()}.
	 * @param $context The parse tree.
	 */
	public function enterLower_bound(Context\Lower_boundContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lower_bound()}.
	 * @param $context The parse tree.
	 */
	public function exitLower_bound(Context\Lower_boundContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::upper_bound()}.
	 * @param $context The parse tree.
	 */
	public function enterUpper_bound(Context\Upper_boundContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::upper_bound()}.
	 * @param $context The parse tree.
	 */
	public function exitUpper_bound(Context\Upper_boundContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::null_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterNull_statement(Context\Null_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::null_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitNull_statement(Context\Null_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::raise_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterRaise_statement(Context\Raise_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::raise_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitRaise_statement(Context\Raise_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::return_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterReturn_statement(Context\Return_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::return_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitReturn_statement(Context\Return_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_call()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_call(Context\Function_callContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_call()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_call(Context\Function_callContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::procedure_call()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedure_call(Context\Procedure_callContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::procedure_call()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedure_call(Context\Procedure_callContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pipe_row_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterPipe_row_statement(Context\Pipe_row_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pipe_row_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitPipe_row_statement(Context\Pipe_row_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::body()}.
	 * @param $context The parse tree.
	 */
	public function enterBody(Context\BodyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::body()}.
	 * @param $context The parse tree.
	 */
	public function exitBody(Context\BodyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::exception_handler()}.
	 * @param $context The parse tree.
	 */
	public function enterException_handler(Context\Exception_handlerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::exception_handler()}.
	 * @param $context The parse tree.
	 */
	public function exitException_handler(Context\Exception_handlerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::trigger_block()}.
	 * @param $context The parse tree.
	 */
	public function enterTrigger_block(Context\Trigger_blockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::trigger_block()}.
	 * @param $context The parse tree.
	 */
	public function exitTrigger_block(Context\Trigger_blockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sql_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSql_statement(Context\Sql_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sql_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSql_statement(Context\Sql_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::execute_immediate()}.
	 * @param $context The parse tree.
	 */
	public function enterExecute_immediate(Context\Execute_immediateContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::execute_immediate()}.
	 * @param $context The parse tree.
	 */
	public function exitExecute_immediate(Context\Execute_immediateContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dynamic_returning_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDynamic_returning_clause(Context\Dynamic_returning_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dynamic_returning_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDynamic_returning_clause(Context\Dynamic_returning_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::data_manipulation_language_statements()}.
	 * @param $context The parse tree.
	 */
	public function enterData_manipulation_language_statements(Context\Data_manipulation_language_statementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::data_manipulation_language_statements()}.
	 * @param $context The parse tree.
	 */
	public function exitData_manipulation_language_statements(Context\Data_manipulation_language_statementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cursor_manipulation_statements()}.
	 * @param $context The parse tree.
	 */
	public function enterCursor_manipulation_statements(Context\Cursor_manipulation_statementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cursor_manipulation_statements()}.
	 * @param $context The parse tree.
	 */
	public function exitCursor_manipulation_statements(Context\Cursor_manipulation_statementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::close_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterClose_statement(Context\Close_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::close_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitClose_statement(Context\Close_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::open_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterOpen_statement(Context\Open_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::open_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitOpen_statement(Context\Open_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::fetch_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterFetch_statement(Context\Fetch_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::fetch_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitFetch_statement(Context\Fetch_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::open_for_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterOpen_for_statement(Context\Open_for_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::open_for_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitOpen_for_statement(Context\Open_for_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::transaction_control_statements()}.
	 * @param $context The parse tree.
	 */
	public function enterTransaction_control_statements(Context\Transaction_control_statementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::transaction_control_statements()}.
	 * @param $context The parse tree.
	 */
	public function exitTransaction_control_statements(Context\Transaction_control_statementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::set_transaction_command()}.
	 * @param $context The parse tree.
	 */
	public function enterSet_transaction_command(Context\Set_transaction_commandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::set_transaction_command()}.
	 * @param $context The parse tree.
	 */
	public function exitSet_transaction_command(Context\Set_transaction_commandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::set_constraint_command()}.
	 * @param $context The parse tree.
	 */
	public function enterSet_constraint_command(Context\Set_constraint_commandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::set_constraint_command()}.
	 * @param $context The parse tree.
	 */
	public function exitSet_constraint_command(Context\Set_constraint_commandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::commit_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterCommit_statement(Context\Commit_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::commit_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitCommit_statement(Context\Commit_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::write_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterWrite_clause(Context\Write_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::write_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitWrite_clause(Context\Write_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rollback_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterRollback_statement(Context\Rollback_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rollback_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitRollback_statement(Context\Rollback_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::savepoint_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSavepoint_statement(Context\Savepoint_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::savepoint_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSavepoint_statement(Context\Savepoint_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::explain_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterExplain_statement(Context\Explain_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::explain_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitExplain_statement(Context\Explain_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::select_only_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect_only_statement(Context\Select_only_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::select_only_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect_only_statement(Context\Select_only_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::select_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect_statement(Context\Select_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::select_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect_statement(Context\Select_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subquery_factoring_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSubquery_factoring_clause(Context\Subquery_factoring_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subquery_factoring_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSubquery_factoring_clause(Context\Subquery_factoring_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::factoring_element()}.
	 * @param $context The parse tree.
	 */
	public function enterFactoring_element(Context\Factoring_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::factoring_element()}.
	 * @param $context The parse tree.
	 */
	public function exitFactoring_element(Context\Factoring_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::search_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSearch_clause(Context\Search_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::search_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSearch_clause(Context\Search_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cycle_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCycle_clause(Context\Cycle_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cycle_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCycle_clause(Context\Cycle_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subquery()}.
	 * @param $context The parse tree.
	 */
	public function enterSubquery(Context\SubqueryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subquery()}.
	 * @param $context The parse tree.
	 */
	public function exitSubquery(Context\SubqueryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subquery_basic_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterSubquery_basic_elements(Context\Subquery_basic_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subquery_basic_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitSubquery_basic_elements(Context\Subquery_basic_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subquery_operation_part()}.
	 * @param $context The parse tree.
	 */
	public function enterSubquery_operation_part(Context\Subquery_operation_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subquery_operation_part()}.
	 * @param $context The parse tree.
	 */
	public function exitSubquery_operation_part(Context\Subquery_operation_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::query_block()}.
	 * @param $context The parse tree.
	 */
	public function enterQuery_block(Context\Query_blockContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::query_block()}.
	 * @param $context The parse tree.
	 */
	public function exitQuery_block(Context\Query_blockContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::selected_list()}.
	 * @param $context The parse tree.
	 */
	public function enterSelected_list(Context\Selected_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::selected_list()}.
	 * @param $context The parse tree.
	 */
	public function exitSelected_list(Context\Selected_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::from_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterFrom_clause(Context\From_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::from_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitFrom_clause(Context\From_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::select_list_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect_list_elements(Context\Select_list_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::select_list_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect_list_elements(Context\Select_list_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_ref_list()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_ref_list(Context\Table_ref_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_ref_list()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_ref_list(Context\Table_ref_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_ref()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_ref(Context\Table_refContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_ref()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_ref(Context\Table_refContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_ref_aux()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_ref_aux(Context\Table_ref_auxContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_ref_aux()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_ref_aux(Context\Table_ref_auxContext $context) : void;
	/**
	 * Enter a parse tree produced by the `table_ref_aux_internal_one`
	 * labeled alternative in {@see PlSqlParser::table_ref_aux_internal()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_ref_aux_internal_one(Context\Table_ref_aux_internal_oneContext $context) : void;
	/**
	 * Exit a parse tree produced by the `table_ref_aux_internal_one` labeled alternative
	 * in {@see PlSqlParser::table_ref_aux_internal()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_ref_aux_internal_one(Context\Table_ref_aux_internal_oneContext $context) : void;
	/**
	 * Enter a parse tree produced by the `table_ref_aux_internal_two`
	 * labeled alternative in {@see PlSqlParser::table_ref_aux_internal()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_ref_aux_internal_two(Context\Table_ref_aux_internal_twoContext $context) : void;
	/**
	 * Exit a parse tree produced by the `table_ref_aux_internal_two` labeled alternative
	 * in {@see PlSqlParser::table_ref_aux_internal()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_ref_aux_internal_two(Context\Table_ref_aux_internal_twoContext $context) : void;
	/**
	 * Enter a parse tree produced by the `table_ref_aux_internal_three`
	 * labeled alternative in {@see PlSqlParser::table_ref_aux_internal()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_ref_aux_internal_three(Context\Table_ref_aux_internal_threeContext $context) : void;
	/**
	 * Exit a parse tree produced by the `table_ref_aux_internal_three` labeled alternative
	 * in {@see PlSqlParser::table_ref_aux_internal()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_ref_aux_internal_three(Context\Table_ref_aux_internal_threeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::join_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterJoin_clause(Context\Join_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::join_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitJoin_clause(Context\Join_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::join_on_part()}.
	 * @param $context The parse tree.
	 */
	public function enterJoin_on_part(Context\Join_on_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::join_on_part()}.
	 * @param $context The parse tree.
	 */
	public function exitJoin_on_part(Context\Join_on_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::join_using_part()}.
	 * @param $context The parse tree.
	 */
	public function enterJoin_using_part(Context\Join_using_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::join_using_part()}.
	 * @param $context The parse tree.
	 */
	public function exitJoin_using_part(Context\Join_using_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::outer_join_type()}.
	 * @param $context The parse tree.
	 */
	public function enterOuter_join_type(Context\Outer_join_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::outer_join_type()}.
	 * @param $context The parse tree.
	 */
	public function exitOuter_join_type(Context\Outer_join_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::query_partition_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterQuery_partition_clause(Context\Query_partition_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::query_partition_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitQuery_partition_clause(Context\Query_partition_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::flashback_query_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterFlashback_query_clause(Context\Flashback_query_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::flashback_query_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitFlashback_query_clause(Context\Flashback_query_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pivot_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPivot_clause(Context\Pivot_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pivot_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPivot_clause(Context\Pivot_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pivot_element()}.
	 * @param $context The parse tree.
	 */
	public function enterPivot_element(Context\Pivot_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pivot_element()}.
	 * @param $context The parse tree.
	 */
	public function exitPivot_element(Context\Pivot_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pivot_for_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPivot_for_clause(Context\Pivot_for_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pivot_for_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPivot_for_clause(Context\Pivot_for_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pivot_in_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPivot_in_clause(Context\Pivot_in_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pivot_in_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPivot_in_clause(Context\Pivot_in_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pivot_in_clause_element()}.
	 * @param $context The parse tree.
	 */
	public function enterPivot_in_clause_element(Context\Pivot_in_clause_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pivot_in_clause_element()}.
	 * @param $context The parse tree.
	 */
	public function exitPivot_in_clause_element(Context\Pivot_in_clause_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::pivot_in_clause_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterPivot_in_clause_elements(Context\Pivot_in_clause_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::pivot_in_clause_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitPivot_in_clause_elements(Context\Pivot_in_clause_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unpivot_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUnpivot_clause(Context\Unpivot_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unpivot_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUnpivot_clause(Context\Unpivot_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unpivot_in_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUnpivot_in_clause(Context\Unpivot_in_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unpivot_in_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUnpivot_in_clause(Context\Unpivot_in_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unpivot_in_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterUnpivot_in_elements(Context\Unpivot_in_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unpivot_in_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitUnpivot_in_elements(Context\Unpivot_in_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::hierarchical_query_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterHierarchical_query_clause(Context\Hierarchical_query_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::hierarchical_query_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitHierarchical_query_clause(Context\Hierarchical_query_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::start_part()}.
	 * @param $context The parse tree.
	 */
	public function enterStart_part(Context\Start_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::start_part()}.
	 * @param $context The parse tree.
	 */
	public function exitStart_part(Context\Start_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::group_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterGroup_by_clause(Context\Group_by_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::group_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitGroup_by_clause(Context\Group_by_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::group_by_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterGroup_by_elements(Context\Group_by_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::group_by_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitGroup_by_elements(Context\Group_by_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rollup_cube_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterRollup_cube_clause(Context\Rollup_cube_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rollup_cube_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitRollup_cube_clause(Context\Rollup_cube_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::grouping_sets_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterGrouping_sets_clause(Context\Grouping_sets_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::grouping_sets_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitGrouping_sets_clause(Context\Grouping_sets_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::grouping_sets_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterGrouping_sets_elements(Context\Grouping_sets_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::grouping_sets_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitGrouping_sets_elements(Context\Grouping_sets_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::having_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterHaving_clause(Context\Having_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::having_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitHaving_clause(Context\Having_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_clause(Context\Model_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_clause(Context\Model_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cell_reference_options()}.
	 * @param $context The parse tree.
	 */
	public function enterCell_reference_options(Context\Cell_reference_optionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cell_reference_options()}.
	 * @param $context The parse tree.
	 */
	public function exitCell_reference_options(Context\Cell_reference_optionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::return_rows_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterReturn_rows_clause(Context\Return_rows_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::return_rows_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitReturn_rows_clause(Context\Return_rows_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::reference_model()}.
	 * @param $context The parse tree.
	 */
	public function enterReference_model(Context\Reference_modelContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::reference_model()}.
	 * @param $context The parse tree.
	 */
	public function exitReference_model(Context\Reference_modelContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::main_model()}.
	 * @param $context The parse tree.
	 */
	public function enterMain_model(Context\Main_modelContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::main_model()}.
	 * @param $context The parse tree.
	 */
	public function exitMain_model(Context\Main_modelContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_column_clauses(Context\Model_column_clausesContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_column_clauses()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_column_clauses(Context\Model_column_clausesContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_column_partition_part()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_column_partition_part(Context\Model_column_partition_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_column_partition_part()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_column_partition_part(Context\Model_column_partition_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_column_list()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_column_list(Context\Model_column_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_column_list()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_column_list(Context\Model_column_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_column()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_column(Context\Model_columnContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_column()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_column(Context\Model_columnContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_rules_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_rules_clause(Context\Model_rules_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_rules_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_rules_clause(Context\Model_rules_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_rules_part()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_rules_part(Context\Model_rules_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_rules_part()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_rules_part(Context\Model_rules_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_rules_element()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_rules_element(Context\Model_rules_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_rules_element()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_rules_element(Context\Model_rules_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cell_assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterCell_assignment(Context\Cell_assignmentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cell_assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitCell_assignment(Context\Cell_assignmentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_iterate_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_iterate_clause(Context\Model_iterate_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_iterate_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_iterate_clause(Context\Model_iterate_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::until_part()}.
	 * @param $context The parse tree.
	 */
	public function enterUntil_part(Context\Until_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::until_part()}.
	 * @param $context The parse tree.
	 */
	public function exitUntil_part(Context\Until_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::order_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOrder_by_clause(Context\Order_by_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::order_by_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOrder_by_clause(Context\Order_by_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::order_by_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterOrder_by_elements(Context\Order_by_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::order_by_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitOrder_by_elements(Context\Order_by_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::offset_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOffset_clause(Context\Offset_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::offset_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOffset_clause(Context\Offset_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::fetch_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterFetch_clause(Context\Fetch_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::fetch_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitFetch_clause(Context\Fetch_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::for_update_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterFor_update_clause(Context\For_update_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::for_update_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitFor_update_clause(Context\For_update_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::for_update_of_part()}.
	 * @param $context The parse tree.
	 */
	public function enterFor_update_of_part(Context\For_update_of_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::for_update_of_part()}.
	 * @param $context The parse tree.
	 */
	public function exitFor_update_of_part(Context\For_update_of_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::for_update_options()}.
	 * @param $context The parse tree.
	 */
	public function enterFor_update_options(Context\For_update_optionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::for_update_options()}.
	 * @param $context The parse tree.
	 */
	public function exitFor_update_options(Context\For_update_optionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::update_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdate_statement(Context\Update_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::update_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdate_statement(Context\Update_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::update_set_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdate_set_clause(Context\Update_set_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::update_set_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdate_set_clause(Context\Update_set_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_based_update_set_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_based_update_set_clause(Context\Column_based_update_set_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_based_update_set_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_based_update_set_clause(Context\Column_based_update_set_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::delete_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterDelete_statement(Context\Delete_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::delete_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitDelete_statement(Context\Delete_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::insert_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterInsert_statement(Context\Insert_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::insert_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitInsert_statement(Context\Insert_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::single_table_insert()}.
	 * @param $context The parse tree.
	 */
	public function enterSingle_table_insert(Context\Single_table_insertContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::single_table_insert()}.
	 * @param $context The parse tree.
	 */
	public function exitSingle_table_insert(Context\Single_table_insertContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::multi_table_insert()}.
	 * @param $context The parse tree.
	 */
	public function enterMulti_table_insert(Context\Multi_table_insertContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::multi_table_insert()}.
	 * @param $context The parse tree.
	 */
	public function exitMulti_table_insert(Context\Multi_table_insertContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::multi_table_element()}.
	 * @param $context The parse tree.
	 */
	public function enterMulti_table_element(Context\Multi_table_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::multi_table_element()}.
	 * @param $context The parse tree.
	 */
	public function exitMulti_table_element(Context\Multi_table_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::conditional_insert_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterConditional_insert_clause(Context\Conditional_insert_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::conditional_insert_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitConditional_insert_clause(Context\Conditional_insert_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::conditional_insert_when_part()}.
	 * @param $context The parse tree.
	 */
	public function enterConditional_insert_when_part(Context\Conditional_insert_when_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::conditional_insert_when_part()}.
	 * @param $context The parse tree.
	 */
	public function exitConditional_insert_when_part(Context\Conditional_insert_when_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::conditional_insert_else_part()}.
	 * @param $context The parse tree.
	 */
	public function enterConditional_insert_else_part(Context\Conditional_insert_else_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::conditional_insert_else_part()}.
	 * @param $context The parse tree.
	 */
	public function exitConditional_insert_else_part(Context\Conditional_insert_else_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::insert_into_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterInsert_into_clause(Context\Insert_into_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::insert_into_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitInsert_into_clause(Context\Insert_into_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::values_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterValues_clause(Context\Values_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::values_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitValues_clause(Context\Values_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::merge_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterMerge_statement(Context\Merge_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::merge_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitMerge_statement(Context\Merge_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::merge_update_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMerge_update_clause(Context\Merge_update_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::merge_update_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMerge_update_clause(Context\Merge_update_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::merge_element()}.
	 * @param $context The parse tree.
	 */
	public function enterMerge_element(Context\Merge_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::merge_element()}.
	 * @param $context The parse tree.
	 */
	public function exitMerge_element(Context\Merge_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::merge_update_delete_part()}.
	 * @param $context The parse tree.
	 */
	public function enterMerge_update_delete_part(Context\Merge_update_delete_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::merge_update_delete_part()}.
	 * @param $context The parse tree.
	 */
	public function exitMerge_update_delete_part(Context\Merge_update_delete_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::merge_insert_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterMerge_insert_clause(Context\Merge_insert_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::merge_insert_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitMerge_insert_clause(Context\Merge_insert_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::selected_tableview()}.
	 * @param $context The parse tree.
	 */
	public function enterSelected_tableview(Context\Selected_tableviewContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::selected_tableview()}.
	 * @param $context The parse tree.
	 */
	public function exitSelected_tableview(Context\Selected_tableviewContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lock_table_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterLock_table_statement(Context\Lock_table_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lock_table_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitLock_table_statement(Context\Lock_table_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::wait_nowait_part()}.
	 * @param $context The parse tree.
	 */
	public function enterWait_nowait_part(Context\Wait_nowait_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::wait_nowait_part()}.
	 * @param $context The parse tree.
	 */
	public function exitWait_nowait_part(Context\Wait_nowait_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lock_table_element()}.
	 * @param $context The parse tree.
	 */
	public function enterLock_table_element(Context\Lock_table_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lock_table_element()}.
	 * @param $context The parse tree.
	 */
	public function exitLock_table_element(Context\Lock_table_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::lock_mode()}.
	 * @param $context The parse tree.
	 */
	public function enterLock_mode(Context\Lock_modeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::lock_mode()}.
	 * @param $context The parse tree.
	 */
	public function exitLock_mode(Context\Lock_modeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::general_table_ref()}.
	 * @param $context The parse tree.
	 */
	public function enterGeneral_table_ref(Context\General_table_refContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::general_table_ref()}.
	 * @param $context The parse tree.
	 */
	public function exitGeneral_table_ref(Context\General_table_refContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::static_returning_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterStatic_returning_clause(Context\Static_returning_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::static_returning_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitStatic_returning_clause(Context\Static_returning_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::error_logging_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterError_logging_clause(Context\Error_logging_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::error_logging_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitError_logging_clause(Context\Error_logging_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::error_logging_into_part()}.
	 * @param $context The parse tree.
	 */
	public function enterError_logging_into_part(Context\Error_logging_into_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::error_logging_into_part()}.
	 * @param $context The parse tree.
	 */
	public function exitError_logging_into_part(Context\Error_logging_into_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::error_logging_reject_part()}.
	 * @param $context The parse tree.
	 */
	public function enterError_logging_reject_part(Context\Error_logging_reject_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::error_logging_reject_part()}.
	 * @param $context The parse tree.
	 */
	public function exitError_logging_reject_part(Context\Error_logging_reject_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dml_table_expression_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterDml_table_expression_clause(Context\Dml_table_expression_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dml_table_expression_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitDml_table_expression_clause(Context\Dml_table_expression_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_collection_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_collection_expression(Context\Table_collection_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_collection_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_collection_expression(Context\Table_collection_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::subquery_restriction_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSubquery_restriction_clause(Context\Subquery_restriction_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::subquery_restriction_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSubquery_restriction_clause(Context\Subquery_restriction_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sample_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterSample_clause(Context\Sample_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sample_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitSample_clause(Context\Sample_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::seed_part()}.
	 * @param $context The parse tree.
	 */
	public function enterSeed_part(Context\Seed_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::seed_part()}.
	 * @param $context The parse tree.
	 */
	public function exitSeed_part(Context\Seed_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::expressions()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressions(Context\ExpressionsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::expressions()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressions(Context\ExpressionsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cursor_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterCursor_expression(Context\Cursor_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cursor_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitCursor_expression(Context\Cursor_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogical_expression(Context\Logical_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogical_expression(Context\Logical_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unary_logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterUnary_logical_expression(Context\Unary_logical_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unary_logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitUnary_logical_expression(Context\Unary_logical_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::logical_operation()}.
	 * @param $context The parse tree.
	 */
	public function enterLogical_operation(Context\Logical_operationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::logical_operation()}.
	 * @param $context The parse tree.
	 */
	public function exitLogical_operation(Context\Logical_operationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::multiset_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMultiset_expression(Context\Multiset_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::multiset_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMultiset_expression(Context\Multiset_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::relational_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterRelational_expression(Context\Relational_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::relational_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitRelational_expression(Context\Relational_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::compound_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterCompound_expression(Context\Compound_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::compound_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitCompound_expression(Context\Compound_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::relational_operator()}.
	 * @param $context The parse tree.
	 */
	public function enterRelational_operator(Context\Relational_operatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::relational_operator()}.
	 * @param $context The parse tree.
	 */
	public function exitRelational_operator(Context\Relational_operatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::in_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterIn_elements(Context\In_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::in_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitIn_elements(Context\In_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::between_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterBetween_elements(Context\Between_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::between_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitBetween_elements(Context\Between_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::concatenation()}.
	 * @param $context The parse tree.
	 */
	public function enterConcatenation(Context\ConcatenationContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::concatenation()}.
	 * @param $context The parse tree.
	 */
	public function exitConcatenation(Context\ConcatenationContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::interval_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterInterval_expression(Context\Interval_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::interval_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitInterval_expression(Context\Interval_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_expression(Context\Model_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_expression(Context\Model_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::model_expression_element()}.
	 * @param $context The parse tree.
	 */
	public function enterModel_expression_element(Context\Model_expression_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::model_expression_element()}.
	 * @param $context The parse tree.
	 */
	public function exitModel_expression_element(Context\Model_expression_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::single_column_for_loop()}.
	 * @param $context The parse tree.
	 */
	public function enterSingle_column_for_loop(Context\Single_column_for_loopContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::single_column_for_loop()}.
	 * @param $context The parse tree.
	 */
	public function exitSingle_column_for_loop(Context\Single_column_for_loopContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::multi_column_for_loop()}.
	 * @param $context The parse tree.
	 */
	public function enterMulti_column_for_loop(Context\Multi_column_for_loopContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::multi_column_for_loop()}.
	 * @param $context The parse tree.
	 */
	public function exitMulti_column_for_loop(Context\Multi_column_for_loopContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::unary_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterUnary_expression(Context\Unary_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::unary_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitUnary_expression(Context\Unary_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::case_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterCase_statement(Context\Case_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::case_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitCase_statement(Context\Case_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::simple_case_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSimple_case_statement(Context\Simple_case_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::simple_case_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSimple_case_statement(Context\Simple_case_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::simple_case_when_part()}.
	 * @param $context The parse tree.
	 */
	public function enterSimple_case_when_part(Context\Simple_case_when_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::simple_case_when_part()}.
	 * @param $context The parse tree.
	 */
	public function exitSimple_case_when_part(Context\Simple_case_when_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::searched_case_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSearched_case_statement(Context\Searched_case_statementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::searched_case_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSearched_case_statement(Context\Searched_case_statementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::searched_case_when_part()}.
	 * @param $context The parse tree.
	 */
	public function enterSearched_case_when_part(Context\Searched_case_when_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::searched_case_when_part()}.
	 * @param $context The parse tree.
	 */
	public function exitSearched_case_when_part(Context\Searched_case_when_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::case_else_part()}.
	 * @param $context The parse tree.
	 */
	public function enterCase_else_part(Context\Case_else_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::case_else_part()}.
	 * @param $context The parse tree.
	 */
	public function exitCase_else_part(Context\Case_else_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterAtom(Context\AtomContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitAtom(Context\AtomContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::quantified_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterQuantified_expression(Context\Quantified_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::quantified_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitQuantified_expression(Context\Quantified_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::string_function()}.
	 * @param $context The parse tree.
	 */
	public function enterString_function(Context\String_functionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::string_function()}.
	 * @param $context The parse tree.
	 */
	public function exitString_function(Context\String_functionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::standard_function()}.
	 * @param $context The parse tree.
	 */
	public function enterStandard_function(Context\Standard_functionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::standard_function()}.
	 * @param $context The parse tree.
	 */
	public function exitStandard_function(Context\Standard_functionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::numeric_function_wrapper()}.
	 * @param $context The parse tree.
	 */
	public function enterNumeric_function_wrapper(Context\Numeric_function_wrapperContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::numeric_function_wrapper()}.
	 * @param $context The parse tree.
	 */
	public function exitNumeric_function_wrapper(Context\Numeric_function_wrapperContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::numeric_function()}.
	 * @param $context The parse tree.
	 */
	public function enterNumeric_function(Context\Numeric_functionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::numeric_function()}.
	 * @param $context The parse tree.
	 */
	public function exitNumeric_function(Context\Numeric_functionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::other_function()}.
	 * @param $context The parse tree.
	 */
	public function enterOther_function(Context\Other_functionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::other_function()}.
	 * @param $context The parse tree.
	 */
	public function exitOther_function(Context\Other_functionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::over_clause_keyword()}.
	 * @param $context The parse tree.
	 */
	public function enterOver_clause_keyword(Context\Over_clause_keywordContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::over_clause_keyword()}.
	 * @param $context The parse tree.
	 */
	public function exitOver_clause_keyword(Context\Over_clause_keywordContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::within_or_over_clause_keyword()}.
	 * @param $context The parse tree.
	 */
	public function enterWithin_or_over_clause_keyword(Context\Within_or_over_clause_keywordContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::within_or_over_clause_keyword()}.
	 * @param $context The parse tree.
	 */
	public function exitWithin_or_over_clause_keyword(Context\Within_or_over_clause_keywordContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::standard_prediction_function_keyword()}.
	 * @param $context The parse tree.
	 */
	public function enterStandard_prediction_function_keyword(Context\Standard_prediction_function_keywordContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::standard_prediction_function_keyword()}.
	 * @param $context The parse tree.
	 */
	public function exitStandard_prediction_function_keyword(Context\Standard_prediction_function_keywordContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::over_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterOver_clause(Context\Over_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::over_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitOver_clause(Context\Over_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::windowing_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterWindowing_clause(Context\Windowing_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::windowing_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitWindowing_clause(Context\Windowing_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::windowing_type()}.
	 * @param $context The parse tree.
	 */
	public function enterWindowing_type(Context\Windowing_typeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::windowing_type()}.
	 * @param $context The parse tree.
	 */
	public function exitWindowing_type(Context\Windowing_typeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::windowing_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterWindowing_elements(Context\Windowing_elementsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::windowing_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitWindowing_elements(Context\Windowing_elementsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::using_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterUsing_clause(Context\Using_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::using_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitUsing_clause(Context\Using_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::using_element()}.
	 * @param $context The parse tree.
	 */
	public function enterUsing_element(Context\Using_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::using_element()}.
	 * @param $context The parse tree.
	 */
	public function exitUsing_element(Context\Using_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::collect_order_by_part()}.
	 * @param $context The parse tree.
	 */
	public function enterCollect_order_by_part(Context\Collect_order_by_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::collect_order_by_part()}.
	 * @param $context The parse tree.
	 */
	public function exitCollect_order_by_part(Context\Collect_order_by_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::within_or_over_part()}.
	 * @param $context The parse tree.
	 */
	public function enterWithin_or_over_part(Context\Within_or_over_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::within_or_over_part()}.
	 * @param $context The parse tree.
	 */
	public function exitWithin_or_over_part(Context\Within_or_over_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cost_matrix_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterCost_matrix_clause(Context\Cost_matrix_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cost_matrix_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitCost_matrix_clause(Context\Cost_matrix_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_passing_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_passing_clause(Context\Xml_passing_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_passing_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_passing_clause(Context\Xml_passing_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_attributes_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_attributes_clause(Context\Xml_attributes_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_attributes_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_attributes_clause(Context\Xml_attributes_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_namespaces_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_namespaces_clause(Context\Xml_namespaces_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_namespaces_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_namespaces_clause(Context\Xml_namespaces_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_table_column()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_table_column(Context\Xml_table_columnContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_table_column()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_table_column(Context\Xml_table_columnContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_general_default_part()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_general_default_part(Context\Xml_general_default_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_general_default_part()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_general_default_part(Context\Xml_general_default_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_multiuse_expression_element()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_multiuse_expression_element(Context\Xml_multiuse_expression_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_multiuse_expression_element()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_multiuse_expression_element(Context\Xml_multiuse_expression_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlroot_param_version_part()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlroot_param_version_part(Context\Xmlroot_param_version_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlroot_param_version_part()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlroot_param_version_part(Context\Xmlroot_param_version_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlroot_param_standalone_part()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlroot_param_standalone_part(Context\Xmlroot_param_standalone_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlroot_param_standalone_part()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlroot_param_standalone_part(Context\Xmlroot_param_standalone_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlserialize_param_enconding_part()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlserialize_param_enconding_part(Context\Xmlserialize_param_enconding_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlserialize_param_enconding_part()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlserialize_param_enconding_part(Context\Xmlserialize_param_enconding_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlserialize_param_version_part()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlserialize_param_version_part(Context\Xmlserialize_param_version_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlserialize_param_version_part()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlserialize_param_version_part(Context\Xmlserialize_param_version_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmlserialize_param_ident_part()}.
	 * @param $context The parse tree.
	 */
	public function enterXmlserialize_param_ident_part(Context\Xmlserialize_param_ident_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmlserialize_param_ident_part()}.
	 * @param $context The parse tree.
	 */
	public function exitXmlserialize_param_ident_part(Context\Xmlserialize_param_ident_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sql_plus_command()}.
	 * @param $context The parse tree.
	 */
	public function enterSql_plus_command(Context\Sql_plus_commandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sql_plus_command()}.
	 * @param $context The parse tree.
	 */
	public function exitSql_plus_command(Context\Sql_plus_commandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::whenever_command()}.
	 * @param $context The parse tree.
	 */
	public function enterWhenever_command(Context\Whenever_commandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::whenever_command()}.
	 * @param $context The parse tree.
	 */
	public function exitWhenever_command(Context\Whenever_commandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::set_command()}.
	 * @param $context The parse tree.
	 */
	public function enterSet_command(Context\Set_commandContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::set_command()}.
	 * @param $context The parse tree.
	 */
	public function exitSet_command(Context\Set_commandContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::partition_extension_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterPartition_extension_clause(Context\Partition_extension_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::partition_extension_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitPartition_extension_clause(Context\Partition_extension_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_alias()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_alias(Context\Column_aliasContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_alias()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_alias(Context\Column_aliasContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_alias()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_alias(Context\Table_aliasContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_alias()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_alias(Context\Table_aliasContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::where_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterWhere_clause(Context\Where_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::where_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitWhere_clause(Context\Where_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::into_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterInto_clause(Context\Into_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::into_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitInto_clause(Context\Into_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xml_column_name()}.
	 * @param $context The parse tree.
	 */
	public function enterXml_column_name(Context\Xml_column_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xml_column_name()}.
	 * @param $context The parse tree.
	 */
	public function exitXml_column_name(Context\Xml_column_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cost_class_name()}.
	 * @param $context The parse tree.
	 */
	public function enterCost_class_name(Context\Cost_class_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cost_class_name()}.
	 * @param $context The parse tree.
	 */
	public function exitCost_class_name(Context\Cost_class_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::attribute_name()}.
	 * @param $context The parse tree.
	 */
	public function enterAttribute_name(Context\Attribute_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::attribute_name()}.
	 * @param $context The parse tree.
	 */
	public function exitAttribute_name(Context\Attribute_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::savepoint_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSavepoint_name(Context\Savepoint_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::savepoint_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSavepoint_name(Context\Savepoint_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::rollback_segment_name()}.
	 * @param $context The parse tree.
	 */
	public function enterRollback_segment_name(Context\Rollback_segment_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::rollback_segment_name()}.
	 * @param $context The parse tree.
	 */
	public function exitRollback_segment_name(Context\Rollback_segment_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_var_name()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_var_name(Context\Table_var_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_var_name()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_var_name(Context\Table_var_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::schema_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSchema_name(Context\Schema_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::schema_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSchema_name(Context\Schema_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::routine_name()}.
	 * @param $context The parse tree.
	 */
	public function enterRoutine_name(Context\Routine_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::routine_name()}.
	 * @param $context The parse tree.
	 */
	public function exitRoutine_name(Context\Routine_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::package_name()}.
	 * @param $context The parse tree.
	 */
	public function enterPackage_name(Context\Package_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::package_name()}.
	 * @param $context The parse tree.
	 */
	public function exitPackage_name(Context\Package_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::implementation_type_name()}.
	 * @param $context The parse tree.
	 */
	public function enterImplementation_type_name(Context\Implementation_type_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::implementation_type_name()}.
	 * @param $context The parse tree.
	 */
	public function exitImplementation_type_name(Context\Implementation_type_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::parameter_name()}.
	 * @param $context The parse tree.
	 */
	public function enterParameter_name(Context\Parameter_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::parameter_name()}.
	 * @param $context The parse tree.
	 */
	public function exitParameter_name(Context\Parameter_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::reference_model_name()}.
	 * @param $context The parse tree.
	 */
	public function enterReference_model_name(Context\Reference_model_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::reference_model_name()}.
	 * @param $context The parse tree.
	 */
	public function exitReference_model_name(Context\Reference_model_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::main_model_name()}.
	 * @param $context The parse tree.
	 */
	public function enterMain_model_name(Context\Main_model_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::main_model_name()}.
	 * @param $context The parse tree.
	 */
	public function exitMain_model_name(Context\Main_model_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::container_tableview_name()}.
	 * @param $context The parse tree.
	 */
	public function enterContainer_tableview_name(Context\Container_tableview_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::container_tableview_name()}.
	 * @param $context The parse tree.
	 */
	public function exitContainer_tableview_name(Context\Container_tableview_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::aggregate_function_name()}.
	 * @param $context The parse tree.
	 */
	public function enterAggregate_function_name(Context\Aggregate_function_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::aggregate_function_name()}.
	 * @param $context The parse tree.
	 */
	public function exitAggregate_function_name(Context\Aggregate_function_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::query_name()}.
	 * @param $context The parse tree.
	 */
	public function enterQuery_name(Context\Query_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::query_name()}.
	 * @param $context The parse tree.
	 */
	public function exitQuery_name(Context\Query_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::grantee_name()}.
	 * @param $context The parse tree.
	 */
	public function enterGrantee_name(Context\Grantee_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::grantee_name()}.
	 * @param $context The parse tree.
	 */
	public function exitGrantee_name(Context\Grantee_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::role_name()}.
	 * @param $context The parse tree.
	 */
	public function enterRole_name(Context\Role_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::role_name()}.
	 * @param $context The parse tree.
	 */
	public function exitRole_name(Context\Role_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::constraint_name()}.
	 * @param $context The parse tree.
	 */
	public function enterConstraint_name(Context\Constraint_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::constraint_name()}.
	 * @param $context The parse tree.
	 */
	public function exitConstraint_name(Context\Constraint_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::label_name()}.
	 * @param $context The parse tree.
	 */
	public function enterLabel_name(Context\Label_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::label_name()}.
	 * @param $context The parse tree.
	 */
	public function exitLabel_name(Context\Label_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_name()}.
	 * @param $context The parse tree.
	 */
	public function enterType_name(Context\Type_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_name()}.
	 * @param $context The parse tree.
	 */
	public function exitType_name(Context\Type_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::sequence_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSequence_name(Context\Sequence_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::sequence_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSequence_name(Context\Sequence_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::exception_name()}.
	 * @param $context The parse tree.
	 */
	public function enterException_name(Context\Exception_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::exception_name()}.
	 * @param $context The parse tree.
	 */
	public function exitException_name(Context\Exception_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_name()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_name(Context\Function_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_name()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_name(Context\Function_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::procedure_name()}.
	 * @param $context The parse tree.
	 */
	public function enterProcedure_name(Context\Procedure_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::procedure_name()}.
	 * @param $context The parse tree.
	 */
	public function exitProcedure_name(Context\Procedure_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::trigger_name()}.
	 * @param $context The parse tree.
	 */
	public function enterTrigger_name(Context\Trigger_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::trigger_name()}.
	 * @param $context The parse tree.
	 */
	public function exitTrigger_name(Context\Trigger_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::variable_name()}.
	 * @param $context The parse tree.
	 */
	public function enterVariable_name(Context\Variable_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::variable_name()}.
	 * @param $context The parse tree.
	 */
	public function exitVariable_name(Context\Variable_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::index_name()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex_name(Context\Index_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::index_name()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex_name(Context\Index_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::cursor_name()}.
	 * @param $context The parse tree.
	 */
	public function enterCursor_name(Context\Cursor_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::cursor_name()}.
	 * @param $context The parse tree.
	 */
	public function exitCursor_name(Context\Cursor_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::record_name()}.
	 * @param $context The parse tree.
	 */
	public function enterRecord_name(Context\Record_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::record_name()}.
	 * @param $context The parse tree.
	 */
	public function exitRecord_name(Context\Record_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::collection_name()}.
	 * @param $context The parse tree.
	 */
	public function enterCollection_name(Context\Collection_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::collection_name()}.
	 * @param $context The parse tree.
	 */
	public function exitCollection_name(Context\Collection_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::link_name()}.
	 * @param $context The parse tree.
	 */
	public function enterLink_name(Context\Link_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::link_name()}.
	 * @param $context The parse tree.
	 */
	public function exitLink_name(Context\Link_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_name()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_name(Context\Column_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_name()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_name(Context\Column_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::tableview_name()}.
	 * @param $context The parse tree.
	 */
	public function enterTableview_name(Context\Tableview_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::tableview_name()}.
	 * @param $context The parse tree.
	 */
	public function exitTableview_name(Context\Tableview_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::xmltable()}.
	 * @param $context The parse tree.
	 */
	public function enterXmltable(Context\XmltableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::xmltable()}.
	 * @param $context The parse tree.
	 */
	public function exitXmltable(Context\XmltableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::char_set_name()}.
	 * @param $context The parse tree.
	 */
	public function enterChar_set_name(Context\Char_set_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::char_set_name()}.
	 * @param $context The parse tree.
	 */
	public function exitChar_set_name(Context\Char_set_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::synonym_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSynonym_name(Context\Synonym_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::synonym_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSynonym_name(Context\Synonym_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::schema_object_name()}.
	 * @param $context The parse tree.
	 */
	public function enterSchema_object_name(Context\Schema_object_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::schema_object_name()}.
	 * @param $context The parse tree.
	 */
	public function exitSchema_object_name(Context\Schema_object_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::dir_object_name()}.
	 * @param $context The parse tree.
	 */
	public function enterDir_object_name(Context\Dir_object_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::dir_object_name()}.
	 * @param $context The parse tree.
	 */
	public function exitDir_object_name(Context\Dir_object_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::user_object_name()}.
	 * @param $context The parse tree.
	 */
	public function enterUser_object_name(Context\User_object_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::user_object_name()}.
	 * @param $context The parse tree.
	 */
	public function exitUser_object_name(Context\User_object_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::grant_object_name()}.
	 * @param $context The parse tree.
	 */
	public function enterGrant_object_name(Context\Grant_object_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::grant_object_name()}.
	 * @param $context The parse tree.
	 */
	public function exitGrant_object_name(Context\Grant_object_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::column_list()}.
	 * @param $context The parse tree.
	 */
	public function enterColumn_list(Context\Column_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::column_list()}.
	 * @param $context The parse tree.
	 */
	public function exitColumn_list(Context\Column_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::paren_column_list()}.
	 * @param $context The parse tree.
	 */
	public function enterParen_column_list(Context\Paren_column_listContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::paren_column_list()}.
	 * @param $context The parse tree.
	 */
	public function exitParen_column_list(Context\Paren_column_listContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::keep_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterKeep_clause(Context\Keep_clauseContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::keep_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitKeep_clause(Context\Keep_clauseContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_argument()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_argument(Context\Function_argumentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_argument()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_argument(Context\Function_argumentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_argument_analytic()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_argument_analytic(Context\Function_argument_analyticContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_argument_analytic()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_argument_analytic(Context\Function_argument_analyticContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::function_argument_modeling()}.
	 * @param $context The parse tree.
	 */
	public function enterFunction_argument_modeling(Context\Function_argument_modelingContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::function_argument_modeling()}.
	 * @param $context The parse tree.
	 */
	public function exitFunction_argument_modeling(Context\Function_argument_modelingContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::respect_or_ignore_nulls()}.
	 * @param $context The parse tree.
	 */
	public function enterRespect_or_ignore_nulls(Context\Respect_or_ignore_nullsContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::respect_or_ignore_nulls()}.
	 * @param $context The parse tree.
	 */
	public function exitRespect_or_ignore_nulls(Context\Respect_or_ignore_nullsContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function enterArgument(Context\ArgumentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::argument()}.
	 * @param $context The parse tree.
	 */
	public function exitArgument(Context\ArgumentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::type_spec()}.
	 * @param $context The parse tree.
	 */
	public function enterType_spec(Context\Type_specContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::type_spec()}.
	 * @param $context The parse tree.
	 */
	public function exitType_spec(Context\Type_specContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::datatype()}.
	 * @param $context The parse tree.
	 */
	public function enterDatatype(Context\DatatypeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::datatype()}.
	 * @param $context The parse tree.
	 */
	public function exitDatatype(Context\DatatypeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::precision_part()}.
	 * @param $context The parse tree.
	 */
	public function enterPrecision_part(Context\Precision_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::precision_part()}.
	 * @param $context The parse tree.
	 */
	public function exitPrecision_part(Context\Precision_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::native_datatype_element()}.
	 * @param $context The parse tree.
	 */
	public function enterNative_datatype_element(Context\Native_datatype_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::native_datatype_element()}.
	 * @param $context The parse tree.
	 */
	public function exitNative_datatype_element(Context\Native_datatype_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::bind_variable()}.
	 * @param $context The parse tree.
	 */
	public function enterBind_variable(Context\Bind_variableContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::bind_variable()}.
	 * @param $context The parse tree.
	 */
	public function exitBind_variable(Context\Bind_variableContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::general_element()}.
	 * @param $context The parse tree.
	 */
	public function enterGeneral_element(Context\General_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::general_element()}.
	 * @param $context The parse tree.
	 */
	public function exitGeneral_element(Context\General_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::general_element_part()}.
	 * @param $context The parse tree.
	 */
	public function enterGeneral_element_part(Context\General_element_partContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::general_element_part()}.
	 * @param $context The parse tree.
	 */
	public function exitGeneral_element_part(Context\General_element_partContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::table_element()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_element(Context\Table_elementContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::table_element()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_element(Context\Table_elementContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::object_privilege()}.
	 * @param $context The parse tree.
	 */
	public function enterObject_privilege(Context\Object_privilegeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::object_privilege()}.
	 * @param $context The parse tree.
	 */
	public function exitObject_privilege(Context\Object_privilegeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::system_privilege()}.
	 * @param $context The parse tree.
	 */
	public function enterSystem_privilege(Context\System_privilegeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::system_privilege()}.
	 * @param $context The parse tree.
	 */
	public function exitSystem_privilege(Context\System_privilegeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::constant()}.
	 * @param $context The parse tree.
	 */
	public function enterConstant(Context\ConstantContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::constant()}.
	 * @param $context The parse tree.
	 */
	public function exitConstant(Context\ConstantContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::numeric()}.
	 * @param $context The parse tree.
	 */
	public function enterNumeric(Context\NumericContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::numeric()}.
	 * @param $context The parse tree.
	 */
	public function exitNumeric(Context\NumericContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::numeric_negative()}.
	 * @param $context The parse tree.
	 */
	public function enterNumeric_negative(Context\Numeric_negativeContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::numeric_negative()}.
	 * @param $context The parse tree.
	 */
	public function exitNumeric_negative(Context\Numeric_negativeContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::quoted_string()}.
	 * @param $context The parse tree.
	 */
	public function enterQuoted_string(Context\Quoted_stringContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::quoted_string()}.
	 * @param $context The parse tree.
	 */
	public function exitQuoted_string(Context\Quoted_stringContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::identifier()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::identifier()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::id_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterId_expression(Context\Id_expressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::id_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitId_expression(Context\Id_expressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::outer_join_sign()}.
	 * @param $context The parse tree.
	 */
	public function enterOuter_join_sign(Context\Outer_join_signContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::outer_join_sign()}.
	 * @param $context The parse tree.
	 */
	public function exitOuter_join_sign(Context\Outer_join_signContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::regular_id()}.
	 * @param $context The parse tree.
	 */
	public function enterRegular_id(Context\Regular_idContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::regular_id()}.
	 * @param $context The parse tree.
	 */
	public function exitRegular_id(Context\Regular_idContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::non_reserved_keywords_in_12c()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_reserved_keywords_in_12c(Context\Non_reserved_keywords_in_12cContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::non_reserved_keywords_in_12c()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_reserved_keywords_in_12c(Context\Non_reserved_keywords_in_12cContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::non_reserved_keywords_pre12c()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_reserved_keywords_pre12c(Context\Non_reserved_keywords_pre12cContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::non_reserved_keywords_pre12c()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_reserved_keywords_pre12c(Context\Non_reserved_keywords_pre12cContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::string_function_name()}.
	 * @param $context The parse tree.
	 */
	public function enterString_function_name(Context\String_function_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::string_function_name()}.
	 * @param $context The parse tree.
	 */
	public function exitString_function_name(Context\String_function_nameContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see PlSqlParser::numeric_function_name()}.
	 * @param $context The parse tree.
	 */
	public function enterNumeric_function_name(Context\Numeric_function_nameContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see PlSqlParser::numeric_function_name()}.
	 * @param $context The parse tree.
	 */
	public function exitNumeric_function_name(Context\Numeric_function_nameContext $context) : void;
}