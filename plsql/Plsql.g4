grammar Plsql;

// пока парсим только пакеты
plsql : package EOF ;

package: CREATE OR REPLACE PACKAGE BODY
             identifier (IS | AS) package_obj_body
             END identifier? ';'
             ;

// пока тело пакета состоит только из процедур
package_obj_body : procedure_body+;

//procedure_body : PROCEDURE . END ';' ;

procedure_body
    : PROCEDURE identifier ('(' parameter (',' parameter)* ')')? (IS | AS)
      (DECLARE? seq_of_declare_specs? body) END ';'
    ;

body : BEGIN seq_of_statements (EXCEPTION exception_handler+)? END label_name? ;

exception_handler : WHEN exception_name (OR exception_name)* THEN seq_of_statements ;
exception_name : identifier ('.' id_expression)* ;

seq_of_statements : (statement (';' | EOF) | label_declaration)+ ;
statement : .*? ;

label_name : id_expression ;
label_declaration : ltp1= '<' '<' label_name '>' '>' ;

seq_of_declare_specs : variable_declaration+ ;
parameter : parameter_name (IN | OUT | (IN OUT))* type_spec? default_value_part? ;
parameter_name : ANY+ ;
variable_declaration : identifier CONSTANT? type_spec (NOT U_NULL)? default_value_part? ';' ;

type_spec
    : datatype
    | REF? type_name (PERCENT_ROWTYPE | PERCENT_TYPE)?
    ;

default_value_part : DEFAULT (U_NUM | STRING | U_NULL ) ;
datatype // simplified
    : 'integer' | 'varchar2' ('(' U_NUM ')')? | 'number' | 'null';

identifier    : (INTRODUCER char_set_name)? id_expression ;
type_name     : id_expression ('.' id_expression)* ;
char_set_name : id_expression ('.' id_expression)* ;
id_expression : REGULAR_ID | DELIMITED_ID ;

STRING          : '\'' REGULAR_ID '\'' ;
PERCENT_ROWTYPE : '%' SPACE* 'rowtype';
PERCENT_TYPE    :'%' SPACE* 'type';
INTRODUCER      : '_';
DELIMITED_ID    : '"' (~('"' | [\r] | [\n]) | '"' '"')+ '"' ;

SPACES: (SPACE | NEWLINE)+ -> channel(HIDDEN);

// все символы, допустимые в качестве имени
fragment REGULAR_ID     : ALPHA (ALPHA | '$' | '_' | '#' | U_NUM)*;
fragment U_NUM          : [0-9]+ ;
fragment ALPHA          : [A-Za-z];
fragment NEWLINE        : [\r]? [\n];
fragment SPACE          : [ \t];

// case insensitive words
CREATE         : C R E A T E;
OR             : O R;
REPLACE        : R E P L A C E;
PACKAGE        : P A C K A G E;
BODY           : B O D Y;
IS             : I S;
AS             : A S;
END            : E N D;
PROCEDURE      : P R O C E D U R E;
DECLARE        : D E C L A R E;
BEGIN          : B E G I N;
EXCEPTION      : E X C E P T I O N;
WHEN           : W H E N;
THEN           : T H E N;
IN             : I N;
OUT            : O U T;
NOT            : N O T;
U_NULL         : N U L L;
CONSTANT       : C O N S T A N T;
REF            : R E F;
DEFAULT        : D E F A U L T;
fragment A : [aA];
fragment B : [bB];
fragment C : [cC];
fragment D : [dD];
fragment E : [eE];
fragment F : [fF];
fragment G : [gG];
fragment H : [hH];
fragment I : [iI];
fragment J : [jJ];
fragment K : [kK];
fragment L : [lL];
fragment M : [mM];
fragment N : [nN];
fragment O : [oO];
fragment P : [pP];
fragment Q : [qQ];
fragment R : [rR];
fragment S : [sS];
fragment T : [tT];
fragment U : [uU];
fragment V : [vV];
fragment W : [wW];
fragment X : [xX];
fragment Y : [yY];
fragment Z : [zZ];

// ловит всё, что не распарсили
ANY: . ;
