<?php

include '../vendor/autoload.php';
include './PlsqlLexer.php';
include './PlsqlParser.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

final class TreeShapeListener implements ParseTreeListener {
    public function visitTerminal(TerminalNode $node) : void {}
    public function visitErrorNode(ErrorNode $node) : void {}
    public function exitEveryRule(ParserRuleContext $ctx) : void {}

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        echo sprintf("%s: %s\n", get_class($ctx), $ctx->getText());
    }
}

$input = InputStream::fromPath($argv[1]);
$lexer = new PlsqlLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new PlsqlParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);

$tree = $parser->plsql();
ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
