// тестовая грамматика для чата
grammar Chat;

/*
    ПАРСЕР
*/

chat                : line+ EOF ;
line                : name command message NEWLINE;
// 1 и более из этих состовляющих в любом порядке
// указывая тами образом пробелы, нам не надо больше беспокоится о пробелах
message             : (emoticon | link | color | mention | WORD | WHITESPACE)+ ;
name                : WORD WHITESPACE;
command             : (SAYS | SHOUTS) ':' WHITESPACE ;

emoticon            : ':' '-'? ')'
                    | ':' '-'? '('
                    ;
//link                : '[' TEXT ']' '(' TEXT ')' ;
link                : TEXT TEXT ;
// тут рекурсия, разрешающаяся контекстом (внутри message тоже может быть color)
color               : '/' WORD '/' message '/';
mention             : '@' WORD ;

/*
    ЛЕКСЕР
*/
// цифры. Чтобы не повторятся, цифры в числе выносим в фрагмент

NUMBER         : DIGIT+ ([.,] DIGIT+)? ;
fragment DIGIT : [0-9] ;

// описываем текст. чтобы ключевые слова были регистронезависимыми,
// используем фрагменты для букв

SAYS                : S A Y S ;
SHOUTS              : S H O U T S;
WORD                : (LOWERCASE | UPPERCASE | '_')+ ;
WHITESPACE          : (' ' | '\t') ;
NEWLINE             : ('\r'? '\n' | '\r')+ ;
// ~ означает захватить всё, что возможно (т.е. всё до ] или ))
// .*? - нежадное "что угодно"
//TEXT                : ~[\])]+ ;
//TEXT                : ('['|'(') ~[\])]+ (']'|')');
TEXT                : ('['|'(') .*? (']'|')');

fragment A          : ('A'|'a') ;
fragment S          : ('S'|'s') ;
fragment Y          : ('Y'|'y') ;
fragment H          : ('H'|'h') ;
fragment O          : ('O'|'o') ;
fragment U          : ('U'|'u') ;
fragment T          : ('T'|'t') ;
fragment LOWERCASE  : [a-z] ;
fragment UPPERCASE  : [A-Z] ;
