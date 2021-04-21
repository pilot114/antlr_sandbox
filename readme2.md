# установка

- install java
- cd /usr/local/lib && sudo curl -O https://www.antlr.org/download/antlr-4.9-complete.jar
- export CLASSPATH=".:/usr/local/lib/antlr-4.9-complete.jar:$CLASSPATH"
- alias antlr4='java -Xmx500M -cp "/usr/local/lib/antlr-4.9-complete.jar:$CLASSPATH" org.antlr.v4.Tool'
- alias grun='java -Xmx500M -cp "/usr/local/lib/antlr-4.9-complete.jar:$CLASSPATH" org.antlr.v4.gui.TestRig'

# генерация парсера грамматики
antlr4 -Dlanguage=PHP -visitor Hello.g

antlr4 -Dlanguage=PHP -visitor Plsql.g4 && php plsql.php example_1.sql