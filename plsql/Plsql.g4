grammar Plsql;

plsql : // create_package_body
    'CREATE' 'OR REPLACE'? 'package body'
    (schema_object_name '.')? package_name ('is' | 'as') package_obj_body*
    'END' package_name? ';'
    ;

package_obj_body : procedure_body+ ;

procedure_body
    : 'procedure' identifier ('(' parameter (',' parameter)* ')')? ('is' | 'as')
      ('declare'? seq_of_declare_specs? body) ';'
    ;

body : 'begin' seq_of_statements ('exception' exception_handler+)? 'end' label_name? ;

exception_handler : 'when' exception_name ('or' exception_name)* 'then' seq_of_statements ;
exception_name : identifier ('.' id_expression)* ;

seq_of_statements : (statement (';' | EOF) | label_declaration)+ ;

statement : LINE+ ;

label_name : id_expression ;
label_declaration : ltp1= '<' '<' label_name '>' '>' ;

seq_of_declare_specs : variable_declaration+ ;
parameter : parameter_name ('in' | 'out' | 'in out')* type_spec? default_value_part? ;

variable_declaration : identifier 'constant'? type_spec 'not null'? default_value_part? ';' ;

type_spec
    : datatype
    | 'ref'? type_name (PERCENT_ROWTYPE | PERCENT_TYPE)?
    ;

default_value_part : 'default' (NUMMMM | STRING | 'null' ) ;
datatype // simplified
    : 'integer' | 'varchar2' ('(' NUMMMM ')')? | 'number' | 'null';

parameter_name : identifier ;
package_name : identifier ;

type_name : id_expression ('.' id_expression)* ;
schema_object_name : id_expression ;
identifier : (INTRODUCER char_set_name)? id_expression ;
char_set_name : id_expression ('.' id_expression)* ;
id_expression : regular_id | DELIMITED_ID ;
regular_id : // ключевые слова
    REGULAR_ID
    | 'A'
    | 'BOOLEAN'
    | 'C'
    | 'CHAR'
    | 'NUMBER'
    | 'WHILE'
    ;

LINE : .*? NEWLINE ;
STRING : '\'' REGULAR_ID '\'' ;
PERCENT_ROWTYPE : '%' SPACE* 'rowtype';
PERCENT_TYPE    :'%' SPACE* 'type';
INTRODUCER: '_';
REGULAR_ID: SIMPLE_LETTER (SIMPLE_LETTER | '$' | '_' | '#' | [0-9])*;
DELIMITED_ID: '"' (~('"' | '\r' | '\n') | '"' '"')+ '"' ;
NUMMMM : [0-9]+ ;
fragment SIMPLE_LETTER  : [A-Z];
fragment NEWLINE_EOF    : NEWLINE | EOF;
fragment NEWLINE        : '\r'? '\n';
fragment SPACE          : [ \t];
