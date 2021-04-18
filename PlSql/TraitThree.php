<?php

namespace PlSql;

use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Token;

trait TraitThree
{
    /**
     * @throws RecognitionException
     */
    public function on_range_partitioned_table(): Context\On_range_partitioned_tableContext
    {
        $localContext = new Context\On_range_partitioned_tableContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 206, self::RULE_on_range_partitioned_table);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3072);
            $this->match(self::LEFT_PAREN);
            $this->setState(3073);
            $this->partitioned_table();
            $this->setState(3078);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMMA) {
                $this->setState(3074);
                $this->match(self::COMMA);
                $this->setState(3075);
                $this->partitioned_table();
                $this->setState(3080);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3081);
            $this->match(self::RIGHT_PAREN);
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
    public function on_list_partitioned_table(): Context\On_list_partitioned_tableContext
    {
        $localContext = new Context\On_list_partitioned_tableContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 208, self::RULE_on_list_partitioned_table);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3083);
            $this->match(self::LEFT_PAREN);
            $this->setState(3084);
            $this->partitioned_table();
            $this->setState(3089);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMMA) {
                $this->setState(3085);
                $this->match(self::COMMA);
                $this->setState(3086);
                $this->partitioned_table();
                $this->setState(3091);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3092);
            $this->match(self::RIGHT_PAREN);
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
    public function partitioned_table(): Context\Partitioned_tableContext
    {
        $localContext = new Context\Partitioned_tableContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 210, self::RULE_partitioned_table);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3094);
            $this->match(self::PARTITION);
            $this->setState(3096);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 235, $this->ctx)) {
                case 1:
                    $this->setState(3095);
                    $this->partition_name();
                    break;
            }
            $this->setState(3102);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMPRESS || $_la === self::FILESYSTEM_LIKE_LOGGING || $_la === self::INITRANS || $_la === self::LOGGING || $_la === self::NOCOMPRESS || $_la === self::NOLOGGING || $_la === self::PCTFREE || $_la === self::PCTUSED || $_la === self::STORAGE || $_la === self::TABLESPACE) {
                $this->setState(3100);
                $this->errorHandler->sync($this);

                switch ($this->input->LA(1)) {
                    case self::FILESYSTEM_LIKE_LOGGING:
                    case self::INITRANS:
                    case self::LOGGING:
                    case self::NOLOGGING:
                    case self::PCTFREE:
                    case self::PCTUSED:
                    case self::STORAGE:
                    case self::TABLESPACE:
                        $this->setState(3098);
                        $this->segment_attributes_clause();
                        break;

                    case self::COMPRESS:
                    case self::NOCOMPRESS:
                        $this->setState(3099);
                        $this->key_compression();
                        break;

                    default:
                        throw new NoViableAltException($this);
                }
                $this->setState(3104);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3106);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::UNUSABLE) {
                $this->setState(3105);
                $this->match(self::UNUSABLE);
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
    public function on_hash_partitioned_table(): Context\On_hash_partitioned_tableContext
    {
        $localContext = new Context\On_hash_partitioned_tableContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 212, self::RULE_on_hash_partitioned_table);

        try {
            $this->setState(3132);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::STORE:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3108);
                    $this->match(self::STORE);
                    $this->setState(3109);
                    $this->match(self::IN);
                    $this->setState(3110);
                    $this->match(self::LEFT_PAREN);
                    $this->setState(3111);
                    $this->tablespace();
                    $this->setState(3116);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3112);
                        $this->match(self::COMMA);
                        $this->setState(3113);
                        $this->tablespace();
                        $this->setState(3118);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    $this->setState(3119);
                    $this->match(self::RIGHT_PAREN);
                    break;

                case self::LEFT_PAREN:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3121);
                    $this->match(self::LEFT_PAREN);
                    $this->setState(3122);
                    $this->on_hash_partitioned_clause();
                    $this->setState(3127);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3123);
                        $this->match(self::COMMA);
                        $this->setState(3124);
                        $this->on_hash_partitioned_clause();
                        $this->setState(3129);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    $this->setState(3130);
                    $this->match(self::RIGHT_PAREN);
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
    public function on_hash_partitioned_clause(): Context\On_hash_partitioned_clauseContext
    {
        $localContext = new Context\On_hash_partitioned_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 214, self::RULE_on_hash_partitioned_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3134);
            $this->match(self::PARTITION);
            $this->setState(3136);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 242, $this->ctx)) {
                case 1:
                    $this->setState(3135);
                    $this->partition_name();
                    break;
            }
            $this->setState(3140);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::TABLESPACE) {
                $this->setState(3138);
                $this->match(self::TABLESPACE);
                $this->setState(3139);
                $this->tablespace();
            }
            $this->setState(3143);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::COMPRESS || $_la === self::NOCOMPRESS) {
                $this->setState(3142);
                $this->key_compression();
            }
            $this->setState(3146);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::UNUSABLE) {
                $this->setState(3145);
                $this->match(self::UNUSABLE);
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
    public function on_comp_partitioned_table(): Context\On_comp_partitioned_tableContext
    {
        $localContext = new Context\On_comp_partitioned_tableContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 216, self::RULE_on_comp_partitioned_table);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3161);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::STORE) {
                $this->setState(3148);
                $this->match(self::STORE);
                $this->setState(3149);
                $this->match(self::IN);
                $this->setState(3150);
                $this->match(self::LEFT_PAREN);
                $this->setState(3151);
                $this->tablespace();
                $this->setState(3156);
                $this->errorHandler->sync($this);

                $_la = $this->input->LA(1);
                while ($_la === self::COMMA) {
                    $this->setState(3152);
                    $this->match(self::COMMA);
                    $this->setState(3153);
                    $this->tablespace();
                    $this->setState(3158);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);
                }
                $this->setState(3159);
                $this->match(self::RIGHT_PAREN);
            }
            $this->setState(3163);
            $this->match(self::LEFT_PAREN);
            $this->setState(3164);
            $this->on_comp_partitioned_clause();
            $this->setState(3169);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMMA) {
                $this->setState(3165);
                $this->match(self::COMMA);
                $this->setState(3166);
                $this->on_comp_partitioned_clause();
                $this->setState(3171);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3172);
            $this->match(self::RIGHT_PAREN);
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
    public function on_comp_partitioned_clause(): Context\On_comp_partitioned_clauseContext
    {
        $localContext = new Context\On_comp_partitioned_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 218, self::RULE_on_comp_partitioned_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3174);
            $this->match(self::PARTITION);
            $this->setState(3176);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 249, $this->ctx)) {
                case 1:
                    $this->setState(3175);
                    $this->partition_name();
                    break;
            }
            $this->setState(3182);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMPRESS || $_la === self::FILESYSTEM_LIKE_LOGGING || $_la === self::INITRANS || $_la === self::LOGGING || $_la === self::NOCOMPRESS || $_la === self::NOLOGGING || $_la === self::PCTFREE || $_la === self::PCTUSED || $_la === self::STORAGE || $_la === self::TABLESPACE) {
                $this->setState(3180);
                $this->errorHandler->sync($this);

                switch ($this->input->LA(1)) {
                    case self::FILESYSTEM_LIKE_LOGGING:
                    case self::INITRANS:
                    case self::LOGGING:
                    case self::NOLOGGING:
                    case self::PCTFREE:
                    case self::PCTUSED:
                    case self::STORAGE:
                    case self::TABLESPACE:
                        $this->setState(3178);
                        $this->segment_attributes_clause();
                        break;

                    case self::COMPRESS:
                    case self::NOCOMPRESS:
                        $this->setState(3179);
                        $this->key_compression();
                        break;

                    default:
                        throw new NoViableAltException($this);
                }
                $this->setState(3184);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3185);
            $this->match(self::UNUSABLE);
            $this->setState(3187);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::STORE || $_la === self::LEFT_PAREN) {
                $this->setState(3186);
                $this->index_subpartition_clause();
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
    public function index_subpartition_clause(): Context\Index_subpartition_clauseContext
    {
        $localContext = new Context\Index_subpartition_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 220, self::RULE_index_subpartition_clause);

        try {
            $this->setState(3213);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::STORE:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3189);
                    $this->match(self::STORE);
                    $this->setState(3190);
                    $this->match(self::IN);
                    $this->setState(3191);
                    $this->match(self::LEFT_PAREN);
                    $this->setState(3192);
                    $this->tablespace();
                    $this->setState(3197);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3193);
                        $this->match(self::COMMA);
                        $this->setState(3194);
                        $this->tablespace();
                        $this->setState(3199);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    $this->setState(3200);
                    $this->match(self::RIGHT_PAREN);
                    break;

                case self::LEFT_PAREN:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3202);
                    $this->match(self::LEFT_PAREN);
                    $this->setState(3203);
                    $this->index_subpartition_subclause();
                    $this->setState(3208);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3204);
                        $this->match(self::COMMA);
                        $this->setState(3205);
                        $this->index_subpartition_subclause();
                        $this->setState(3210);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    $this->setState(3211);
                    $this->match(self::RIGHT_PAREN);
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
    public function index_subpartition_subclause(): Context\Index_subpartition_subclauseContext
    {
        $localContext = new Context\Index_subpartition_subclauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 222, self::RULE_index_subpartition_subclause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3215);
            $this->match(self::SUBPARTITION);
            $this->setState(3217);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 256, $this->ctx)) {
                case 1:
                    $this->setState(3216);
                    $this->subpartition_name();
                    break;
            }
            $this->setState(3221);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::TABLESPACE) {
                $this->setState(3219);
                $this->match(self::TABLESPACE);
                $this->setState(3220);
                $this->tablespace();
            }
            $this->setState(3224);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::COMPRESS || $_la === self::NOCOMPRESS) {
                $this->setState(3223);
                $this->key_compression();
            }
            $this->setState(3227);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::UNUSABLE) {
                $this->setState(3226);
                $this->match(self::UNUSABLE);
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
    public function odci_parameters(): Context\Odci_parametersContext
    {
        $localContext = new Context\Odci_parametersContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 224, self::RULE_odci_parameters);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3229);
            $this->match(self::CHAR_STRING);
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
    public function indextype(): Context\IndextypeContext
    {
        $localContext = new Context\IndextypeContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 226, self::RULE_indextype);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3234);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 260, $this->ctx)) {
                case 1:
                    $this->setState(3231);
                    $this->id_expression();
                    $this->setState(3232);
                    $this->match(self::PERIOD);
                    break;
            }
            $this->setState(3236);
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
    public function alter_index(): Context\Alter_indexContext
    {
        $localContext = new Context\Alter_indexContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 228, self::RULE_alter_index);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3238);
            $this->match(self::ALTER);
            $this->setState(3239);
            $this->match(self::INDEX);
            $this->setState(3240);
            $this->index_name();
            $this->setState(3243);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::ALLOCATE:
                case self::DEALLOCATE:
                case self::FILESYSTEM_LIKE_LOGGING:
                case self::INITRANS:
                case self::LOGGING:
                case self::NOLOGGING:
                case self::NOPARALLEL:
                case self::PARALLEL:
                case self::PCTFREE:
                case self::PCTUSED:
                case self::SHRINK:
                case self::STORAGE:
                    $this->setState(3241);
                    $this->alter_index_ops_set1();
                    break;

                case self::ADD:
                case self::COALESCE:
                case self::COMPILE:
                case self::DISABLE:
                case self::DROP:
                case self::ENABLE:
                case self::INVISIBLE:
                case self::MODIFY:
                case self::MONITORING:
                case self::NOMONITORING:
                case self::PARAMETERS:
                case self::REBUILD:
                case self::RENAME:
                case self::SPLIT:
                case self::UNUSABLE:
                case self::UPDATE:
                case self::VISIBLE:
                    $this->setState(3242);
                    $this->alter_index_ops_set2();
                    break;

                default:
                    throw new NoViableAltException($this);
            }
            $this->setState(3245);
            $this->match(self::SEMICOLON);
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
    public function alter_index_ops_set1(): Context\Alter_index_ops_set1Context
    {
        $localContext = new Context\Alter_index_ops_set1Context($this->ctx, $this->getState());

        $this->enterRule($localContext, 230, self::RULE_alter_index_ops_set1);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3253);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            do {
                $this->setState(3253);
                $this->errorHandler->sync($this);

                switch ($this->input->LA(1)) {
                    case self::DEALLOCATE:
                        $this->setState(3247);
                        $this->deallocate_unused_clause();
                        break;

                    case self::ALLOCATE:
                        $this->setState(3248);
                        $this->allocate_extent_clause();
                        break;

                    case self::SHRINK:
                        $this->setState(3249);
                        $this->shrink_clause();
                        break;

                    case self::NOPARALLEL:
                    case self::PARALLEL:
                        $this->setState(3250);
                        $this->parallel_clause();
                        break;

                    case self::INITRANS:
                    case self::PCTFREE:
                    case self::PCTUSED:
                    case self::STORAGE:
                        $this->setState(3251);
                        $this->physical_attributes_clause();
                        break;

                    case self::FILESYSTEM_LIKE_LOGGING:
                    case self::LOGGING:
                    case self::NOLOGGING:
                        $this->setState(3252);
                        $this->logging_clause();
                        break;

                    default:
                        throw new NoViableAltException($this);
                }
                $this->setState(3255);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            } while ($_la === self::ALLOCATE || $_la === self::DEALLOCATE || $_la === self::FILESYSTEM_LIKE_LOGGING || $_la === self::INITRANS || $_la === self::LOGGING || $_la === self::NOLOGGING || $_la === self::NOPARALLEL || (((($_la - 1195)) & ~0x3f) === 0 && ((1 << ($_la - 1195)) & ((1 << (self::PARALLEL - 1195)) | (1 << (self::PCTFREE - 1195)) | (1 << (self::PCTUSED - 1195)))) !== 0) || $_la === self::SHRINK || $_la === self::STORAGE);
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
    public function alter_index_ops_set2(): Context\Alter_index_ops_set2Context
    {
        $localContext = new Context\Alter_index_ops_set2Context($this->ctx, $this->getState());

        $this->enterRule($localContext, 232, self::RULE_alter_index_ops_set2);

        try {
            $this->setState(3278);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 264, $this->ctx)) {
                case 1:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3257);
                    $this->rebuild_clause();
                    break;

                case 2:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3258);
                    $this->match(self::PARAMETERS);
                    $this->setState(3259);
                    $this->match(self::LEFT_PAREN);
                    $this->setState(3260);
                    $this->odci_parameters();
                    $this->setState(3261);
                    $this->match(self::RIGHT_PAREN);
                    break;

                case 3:
                    $this->enterOuterAlt($localContext, 3);
                    $this->setState(3263);
                    $this->match(self::COMPILE);
                    break;

                case 4:
                    $this->enterOuterAlt($localContext, 4);
                    $this->setState(3264);
                    $this->enable_or_disable();
                    break;

                case 5:
                    $this->enterOuterAlt($localContext, 5);
                    $this->setState(3265);
                    $this->match(self::UNUSABLE);
                    break;

                case 6:
                    $this->enterOuterAlt($localContext, 6);
                    $this->setState(3266);
                    $this->visible_or_invisible();
                    break;

                case 7:
                    $this->enterOuterAlt($localContext, 7);
                    $this->setState(3267);
                    $this->match(self::RENAME);
                    $this->setState(3268);
                    $this->match(self::TO);
                    $this->setState(3269);
                    $this->new_index_name();
                    break;

                case 8:
                    $this->enterOuterAlt($localContext, 8);
                    $this->setState(3270);
                    $this->match(self::COALESCE);
                    break;

                case 9:
                    $this->enterOuterAlt($localContext, 9);
                    $this->setState(3271);
                    $this->monitoring_nomonitoring();
                    $this->setState(3272);
                    $this->match(self::USAGE);
                    break;

                case 10:
                    $this->enterOuterAlt($localContext, 10);
                    $this->setState(3274);
                    $this->match(self::UPDATE);
                    $this->setState(3275);
                    $this->match(self::BLOCK);
                    $this->setState(3276);
                    $this->match(self::REFERENCES);
                    break;

                case 11:
                    $this->enterOuterAlt($localContext, 11);
                    $this->setState(3277);
                    $this->alter_index_partitioning();
                    break;
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
    public function visible_or_invisible(): Context\Visible_or_invisibleContext
    {
        $localContext = new Context\Visible_or_invisibleContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 234, self::RULE_visible_or_invisible);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3280);

            $_la = $this->input->LA(1);

            if (!($_la === self::INVISIBLE || $_la === self::VISIBLE)) {
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
    public function monitoring_nomonitoring(): Context\Monitoring_nomonitoringContext
    {
        $localContext = new Context\Monitoring_nomonitoringContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 236, self::RULE_monitoring_nomonitoring);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3282);

            $_la = $this->input->LA(1);

            if (!($_la === self::MONITORING || $_la === self::NOMONITORING)) {
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
    public function rebuild_clause(): Context\Rebuild_clauseContext
    {
        $localContext = new Context\Rebuild_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 238, self::RULE_rebuild_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3284);
            $this->match(self::REBUILD);
            $this->setState(3291);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::PARTITION:
                    $this->setState(3285);
                    $this->match(self::PARTITION);
                    $this->setState(3286);
                    $this->partition_name();
                    break;

                case self::SUBPARTITION:
                    $this->setState(3287);
                    $this->match(self::SUBPARTITION);
                    $this->setState(3288);
                    $this->subpartition_name();
                    break;

                case self::REVERSE:
                    $this->setState(3289);
                    $this->match(self::REVERSE);
                    break;

                case self::NOREVERSE:
                    $this->setState(3290);
                    $this->match(self::NOREVERSE);
                    break;

                case self::COMPRESS:
                case self::FILESYSTEM_LIKE_LOGGING:
                case self::INITRANS:
                case self::LOGGING:
                case self::NOCOMPRESS:
                case self::NOLOGGING:
                case self::NOPARALLEL:
                case self::ONLINE:
                case self::PARALLEL:
                case self::PARAMETERS:
                case self::PCTFREE:
                case self::PCTUSED:
                case self::STORAGE:
                case self::TABLESPACE:
                case self::SEMICOLON:
                    break;

                default:
                    break;
            }
            $this->setState(3307);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMPRESS || $_la === self::FILESYSTEM_LIKE_LOGGING || $_la === self::INITRANS || $_la === self::LOGGING || $_la === self::NOCOMPRESS || $_la === self::NOLOGGING || $_la === self::NOPARALLEL || $_la === self::ONLINE || (((($_la - 1195)) & ~0x3f) === 0 && ((1 << ($_la - 1195)) & ((1 << (self::PARALLEL - 1195)) | (1 << (self::PARAMETERS - 1195)) | (1 << (self::PCTFREE - 1195)) | (1 << (self::PCTUSED - 1195)))) !== 0) || $_la === self::STORAGE || $_la === self::TABLESPACE) {
                $this->setState(3305);
                $this->errorHandler->sync($this);

                switch ($this->input->LA(1)) {
                    case self::NOPARALLEL:
                    case self::PARALLEL:
                        $this->setState(3293);
                        $this->parallel_clause();
                        break;

                    case self::TABLESPACE:
                        $this->setState(3294);
                        $this->match(self::TABLESPACE);
                        $this->setState(3295);
                        $this->tablespace();
                        break;

                    case self::PARAMETERS:
                        $this->setState(3296);
                        $this->match(self::PARAMETERS);
                        $this->setState(3297);
                        $this->match(self::LEFT_PAREN);
                        $this->setState(3298);
                        $this->odci_parameters();
                        $this->setState(3299);
                        $this->match(self::RIGHT_PAREN);
                        break;

                    case self::ONLINE:
                        $this->setState(3301);
                        $this->match(self::ONLINE);
                        break;

                    case self::INITRANS:
                    case self::PCTFREE:
                    case self::PCTUSED:
                    case self::STORAGE:
                        $this->setState(3302);
                        $this->physical_attributes_clause();
                        break;

                    case self::COMPRESS:
                    case self::NOCOMPRESS:
                        $this->setState(3303);
                        $this->key_compression();
                        break;

                    case self::FILESYSTEM_LIKE_LOGGING:
                    case self::LOGGING:
                    case self::NOLOGGING:
                        $this->setState(3304);
                        $this->logging_clause();
                        break;

                    default:
                        throw new NoViableAltException($this);
                }
                $this->setState(3309);
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
    public function alter_index_partitioning(): Context\Alter_index_partitioningContext
    {
        $localContext = new Context\Alter_index_partitioningContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 240, self::RULE_alter_index_partitioning);

        try {
            $this->setState(3318);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 268, $this->ctx)) {
                case 1:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3310);
                    $this->modify_index_default_attrs();
                    break;

                case 2:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3311);
                    $this->add_hash_index_partition();
                    break;

                case 3:
                    $this->enterOuterAlt($localContext, 3);
                    $this->setState(3312);
                    $this->modify_index_partition();
                    break;

                case 4:
                    $this->enterOuterAlt($localContext, 4);
                    $this->setState(3313);
                    $this->rename_index_partition();
                    break;

                case 5:
                    $this->enterOuterAlt($localContext, 5);
                    $this->setState(3314);
                    $this->drop_index_partition();
                    break;

                case 6:
                    $this->enterOuterAlt($localContext, 6);
                    $this->setState(3315);
                    $this->split_index_partition();
                    break;

                case 7:
                    $this->enterOuterAlt($localContext, 7);
                    $this->setState(3316);
                    $this->coalesce_index_partition();
                    break;

                case 8:
                    $this->enterOuterAlt($localContext, 8);
                    $this->setState(3317);
                    $this->modify_index_subpartition();
                    break;
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
    public function modify_index_default_attrs(): Context\Modify_index_default_attrsContext
    {
        $localContext = new Context\Modify_index_default_attrsContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 242, self::RULE_modify_index_default_attrs);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3320);
            $this->match(self::MODIFY);
            $this->setState(3321);
            $this->match(self::DEFAULT);
            $this->setState(3322);
            $this->match(self::ATTRIBUTES);
            $this->setState(3326);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::FOR) {
                $this->setState(3323);
                $this->match(self::FOR);
                $this->setState(3324);
                $this->match(self::PARTITION);
                $this->setState(3325);
                $this->partition_name();
            }
            $this->setState(3335);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::INITRANS:
                case self::PCTFREE:
                case self::PCTUSED:
                case self::STORAGE:
                    $this->setState(3328);
                    $this->physical_attributes_clause();
                    break;

                case self::TABLESPACE:
                    $this->setState(3329);
                    $this->match(self::TABLESPACE);
                    $this->setState(3332);
                    $this->errorHandler->sync($this);

                    switch ($this->input->LA(1)) {
                        case self::ABORT:
                        case self::ABS:
                        case self::ACCESS:
                        case self::ACCESSED:
                        case self::ACCOUNT:
                        case self::ACL:
                        case self::ACOS:
                        case self::ACTION:
                        case self::ACTIONS:
                        case self::ACTIVATE:
                        case self::ACTIVE:
                        case self::ACTIVE_COMPONENT:
                        case self::ACTIVE_DATA:
                        case self::ACTIVE_FUNCTION:
                        case self::ACTIVE_TAG:
                        case self::ACTIVITY:
                        case self::ADAPTIVE_PLAN:
                        case self::ADD:
                        case self::ADD_COLUMN:
                        case self::ADD_GROUP:
                        case self::ADD_MONTHS:
                        case self::ADJ_DATE:
                        case self::ADMIN:
                        case self::ADMINISTER:
                        case self::ADMINISTRATOR:
                        case self::ADVANCED:
                        case self::ADVISE:
                        case self::ADVISOR:
                        case self::AFD_DISKSTRING:
                        case self::AFTER:
                        case self::AGENT:
                        case self::AGGREGATE:
                        case self::A_LETTER:
                        case self::ALIAS:
                        case self::ALLOCATE:
                        case self::ALLOW:
                        case self::ALL_ROWS:
                        case self::ALWAYS:
                        case self::ANALYZE:
                        case self::ANCILLARY:
                        case self::AND_EQUAL:
                        case self::ANOMALY:
                        case self::ANSI_REARCH:
                        case self::ANTIJOIN:
                        case self::ANYSCHEMA:
                        case self::APPEND:
                        case self::APPENDCHILDXML:
                        case self::APPEND_VALUES:
                        case self::APPLICATION:
                        case self::APPLY:
                        case self::APPROX_COUNT_DISTINCT:
                        case self::ARCHIVAL:
                        case self::ARCHIVE:
                        case self::ARCHIVED:
                        case self::ARCHIVELOG:
                        case self::ARRAY:
                        case self::ASCII:
                        case self::ASCIISTR:
                        case self::ASIN:
                        case self::ASIS:
                        case self::ASSEMBLY:
                        case self::ASSIGN:
                        case self::ASSOCIATE:
                        case self::ASYNC:
                        case self::ASYNCHRONOUS:
                        case self::ATAN2:
                        case self::ATAN:
                        case self::AT:
                        case self::ATTRIBUTE:
                        case self::ATTRIBUTES:
                        case self::AUTHENTICATED:
                        case self::AUTHENTICATION:
                        case self::AUTHID:
                        case self::AUTHORIZATION:
                        case self::AUTOALLOCATE:
                        case self::AUTO:
                        case self::AUTOEXTEND:
                        case self::AUTO_LOGIN:
                        case self::AUTOMATIC:
                        case self::AUTONOMOUS_TRANSACTION:
                        case self::AUTO_REOPTIMIZE:
                        case self::AVAILABILITY:
                        case self::AVRO:
                        case self::BACKGROUND:
                        case self::BACKUP:
                        case self::BASIC:
                        case self::BASICFILE:
                        case self::BATCH:
                        case self::BATCHSIZE:
                        case self::BATCH_TABLE_ACCESS_BY_ROWID:
                        case self::BECOME:
                        case self::BEFORE:
                        case self::BEGIN:
                        case self::BEGINNING:
                        case self::BEGIN_OUTLINE_DATA:
                        case self::BEHALF:
                        case self::BEQUEATH:
                        case self::BFILE:
                        case self::BFILENAME:
                        case self::BIGFILE:
                        case self::BINARY:
                        case self::BINARY_DOUBLE:
                        case self::BINARY_DOUBLE_INFINITY:
                        case self::BINARY_DOUBLE_NAN:
                        case self::BINARY_FLOAT:
                        case self::BINARY_FLOAT_INFINITY:
                        case self::BINARY_FLOAT_NAN:
                        case self::BINARY_INTEGER:
                        case self::BIND_AWARE:
                        case self::BINDING:
                        case self::BIN_TO_NUM:
                        case self::BITAND:
                        case self::BITMAP_AND:
                        case self::BITMAP:
                        case self::BITMAPS:
                        case self::BITMAP_TREE:
                        case self::BITS:
                        case self::BLOB:
                        case self::BLOCK:
                        case self::BLOCK_RANGE:
                        case self::BLOCKS:
                        case self::BLOCKSIZE:
                        case self::BODY:
                        case self::BOOLEAN:
                        case self::BOTH:
                        case self::BOUND:
                        case self::BRANCH:
                        case self::BREADTH:
                        case self::BROADCAST:
                        case self::BSON:
                        case self::BUFFER:
                        case self::BUFFER_CACHE:
                        case self::BUFFER_POOL:
                        case self::BUILD:
                        case self::BULK:
                        case self::BYPASS_RECURSIVE_CHECK:
                        case self::BYPASS_UJVC:
                        case self::BYTE:
                        case self::CACHE:
                        case self::CACHE_CB:
                        case self::CACHE_INSTANCES:
                        case self::CACHE_TEMP_TABLE:
                        case self::CACHING:
                        case self::CALCULATED:
                        case self::CALLBACK:
                        case self::CALL:
                        case self::CANCEL:
                        case self::CAPACITY:
                        case self::CARDINALITY:
                        case self::CASCADE:
                        case self::CASE:
                        case self::CAST:
                        case self::CATEGORY:
                        case self::CDBDEFAULT:
                        case self::CEIL:
                        case self::CELL_FLASH_CACHE:
                        case self::CERTIFICATE:
                        case self::CFILE:
                        case self::CHAINED:
                        case self::CHANGE:
                        case self::CHANGE_DUPKEY_ERROR_INDEX:
                        case self::CHARACTER:
                        case self::CHAR:
                        case self::CHAR_CS:
                        case self::CHARTOROWID:
                        case self::CHECK_ACL_REWRITE:
                        case self::CHECKPOINT:
                        case self::CHILD:
                        case self::CHOOSE:
                        case self::CHR:
                        case self::CHUNK:
                        case self::CLASS:
                        case self::CLASSIFIER:
                        case self::CLEANUP:
                        case self::CLEAR:
                        case self::C_LETTER:
                        case self::CLIENT:
                        case self::CLOB:
                        case self::CLONE:
                        case self::CLOSE_CACHED_OPEN_CURSORS:
                        case self::CLOSE:
                        case self::CLUSTER_BY_ROWID:
                        case self::CLUSTER:
                        case self::CLUSTER_DETAILS:
                        case self::CLUSTER_DISTANCE:
                        case self::CLUSTER_ID:
                        case self::CLUSTERING:
                        case self::CLUSTERING_FACTOR:
                        case self::CLUSTER_PROBABILITY:
                        case self::CLUSTER_SET:
                        case self::COALESCE:
                        case self::COALESCE_SQ:
                        case self::COARSE:
                        case self::CO_AUTH_IND:
                        case self::COLD:
                        case self::COLLECT:
                        case self::COLUMNAR:
                        case self::COLUMN_AUTH_INDICATOR:
                        case self::COLUMN:
                        case self::COLUMNS:
                        case self::COLUMN_STATS:
                        case self::COLUMN_VALUE:
                        case self::COMMENT:
                        case self::COMMIT:
                        case self::COMMITTED:
                        case self::COMMON_DATA:
                        case self::COMPACT:
                        case self::COMPATIBILITY:
                        case self::COMPILE:
                        case self::COMPLETE:
                        case self::COMPLIANCE:
                        case self::COMPONENT:
                        case self::COMPONENTS:
                        case self::COMPOSE:
                        case self::COMPOSITE:
                        case self::COMPOSITE_LIMIT:
                        case self::COMPOUND:
                        case self::COMPUTE:
                        case self::CONCAT:
                        case self::CON_DBID_TO_ID:
                        case self::CONDITIONAL:
                        case self::CONDITION:
                        case self::CONFIRM:
                        case self::CONFORMING:
                        case self::CON_GUID_TO_ID:
                        case self::CON_ID:
                        case self::CON_NAME_TO_ID:
                        case self::CONNECT_BY_CB_WHR_ONLY:
                        case self::CONNECT_BY_COMBINE_SW:
                        case self::CONNECT_BY_COST_BASED:
                        case self::CONNECT_BY_ELIM_DUPS:
                        case self::CONNECT_BY_FILTERING:
                        case self::CONNECT_BY_ISCYCLE:
                        case self::CONNECT_BY_ISLEAF:
                        case self::CONNECT_BY_ROOT:
                        case self::CONNECT_TIME:
                        case self::CONSIDER:
                        case self::CONSISTENT:
                        case self::CONSTANT:
                        case self::CONST:
                        case self::CONSTRAINT:
                        case self::CONSTRAINTS:
                        case self::CONSTRUCTOR:
                        case self::CONTAINER:
                        case self::CONTAINER_DATA:
                        case self::CONTAINERS:
                        case self::CONTENT:
                        case self::CONTENTS:
                        case self::CONTEXT:
                        case self::CONTINUE:
                        case self::CONTROLFILE:
                        case self::CON_UID_TO_ID:
                        case self::CONVERT:
                        case self::COOKIE:
                        case self::COPY:
                        case self::CORR_K:
                        case self::CORR_S:
                        case self::CORRUPTION:
                        case self::CORRUPT_XID_ALL:
                        case self::CORRUPT_XID:
                        case self::COS:
                        case self::COSH:
                        case self::COST:
                        case self::COST_XML_QUERY_REWRITE:
                        case self::COUNT:
                        case self::COVAR_POP:
                        case self::COVAR_SAMP:
                        case self::CPU_COSTING:
                        case self::CPU_PER_CALL:
                        case self::CPU_PER_SESSION:
                        case self::CRASH:
                        case self::CREATE_FILE_DEST:
                        case self::CREATE_STORED_OUTLINES:
                        case self::CREATION:
                        case self::CREDENTIAL:
                        case self::CRITICAL:
                        case self::CROSS:
                        case self::CROSSEDITION:
                        case self::CSCONVERT:
                        case self::CUBE_AJ:
                        case self::CUBE:
                        case self::CUBE_GB:
                        case self::CUBE_SJ:
                        case self::CUME_DISTM:
                        case self::CURRENT:
                        case self::CURRENT_DATE:
                        case self::CURRENT_SCHEMA:
                        case self::CURRENT_TIME:
                        case self::CURRENT_TIMESTAMP:
                        case self::CURRENT_USER:
                        case self::CURRENTV:
                        case self::CURSOR:
                        case self::CURSOR_SHARING_EXACT:
                        case self::CURSOR_SPECIFIC_SEGMENT:
                        case self::CUSTOMDATUM:
                        case self::CV:
                        case self::CYCLE:
                        case self::DANGLING:
                        case self::DATABASE:
                        case self::DATA:
                        case self::DATAFILE:
                        case self::DATAFILES:
                        case self::DATAMOVEMENT:
                        case self::DATAOBJNO:
                        case self::DATAOBJ_TO_MAT_PARTITION:
                        case self::DATAOBJ_TO_PARTITION:
                        case self::DATAPUMP:
                        case self::DATA_SECURITY_REWRITE_LIMIT:
                        case self::DATE_MODE:
                        case self::DAY:
                        case self::DAYS:
                        case self::DBA:
                        case self::DBA_RECYCLEBIN:
                        case self::DBMS_STATS:
                        case self::DB_ROLE_CHANGE:
                        case self::DBTIMEZONE:
                        case self::DB_UNIQUE_NAME:
                        case self::DB_VERSION:
                        case self::DDL:
                        case self::DEALLOCATE:
                        case self::DEBUG:
                        case self::DEBUGGER:
                        case self::DEC:
                        case self::DECIMAL:
                        case self::DECLARE:
                        case self::DECOMPOSE:
                        case self::DECORRELATE:
                        case self::DECR:
                        case self::DECREMENT:
                        case self::DECRYPT:
                        case self::DEDUPLICATE:
                        case self::DEFAULTS:
                        case self::DEFERRABLE:
                        case self::DEFERRED:
                        case self::DEFINED:
                        case self::DEFINE:
                        case self::DEFINER:
                        case self::DEGREE:
                        case self::DELAY:
                        case self::DELEGATE:
                        case self::DELETE_ALL:
                        case self::DELETE:
                        case self::DELETEXML:
                        case self::DEMAND:
                        case self::DENSE_RANKM:
                        case self::DEPENDENT:
                        case self::DEPTH:
                        case self::DEQUEUE:
                        case self::DEREF:
                        case self::DEREF_NO_REWRITE:
                        case self::DESTROY:
                        case self::DETACHED:
                        case self::DETERMINES:
                        case self::DETERMINISTIC:
                        case self::DICTIONARY:
                        case self::DIMENSION:
                        case self::DIMENSIONS:
                        case self::DIRECT_LOAD:
                        case self::DIRECTORY:
                        case self::DIRECT_PATH:
                        case self::DISABLE_ALL:
                        case self::DISABLE:
                        case self::DISABLE_PARALLEL_DML:
                        case self::DISABLE_PRESET:
                        case self::DISABLE_RPKE:
                        case self::DISALLOW:
                        case self::DISASSOCIATE:
                        case self::DISCARD:
                        case self::DISCONNECT:
                        case self::DISK:
                        case self::DISKGROUP:
                        case self::DISKS:
                        case self::DISMOUNT:
                        case self::DISTINGUISHED:
                        case self::DISTRIBUTED:
                        case self::DISTRIBUTE:
                        case self::DML:
                        case self::DML_UPDATE:
                        case self::DOCFIDELITY:
                        case self::DOCUMENT:
                        case self::DOMAIN_INDEX_FILTER:
                        case self::DOMAIN_INDEX_NO_SORT:
                        case self::DOMAIN_INDEX_SORT:
                        case self::DOUBLE:
                        case self::DOWNGRADE:
                        case self::DRIVING_SITE:
                        case self::DROP_COLUMN:
                        case self::DROP_GROUP:
                        case self::DSINTERVAL_UNCONSTRAINED:
                        case self::DST_UPGRADE_INSERT_CONV:
                        case self::DUMP:
                        case self::DUPLICATE:
                        case self::DV:
                        case self::DYNAMIC:
                        case self::DYNAMIC_SAMPLING:
                        case self::DYNAMIC_SAMPLING_EST_CDN:
                        case self::EACH:
                        case self::EDITIONABLE:
                        case self::EDITION:
                        case self::EDITIONING:
                        case self::EDITIONS:
                        case self::ELEMENT:
                        case self::ELIM_GROUPBY:
                        case self::ELIMINATE_JOIN:
                        case self::ELIMINATE_OBY:
                        case self::ELIMINATE_OUTER_JOIN:
                        case self::EM:
                        case self::EMPTY_BLOB:
                        case self::EMPTY_CLOB:
                        case self::EMPTY:
                        case self::ENABLE_ALL:
                        case self::ENABLE:
                        case self::ENABLE_PARALLEL_DML:
                        case self::ENABLE_PRESET:
                        case self::ENCODING:
                        case self::ENCRYPT:
                        case self::ENCRYPTION:
                        case self::END_OUTLINE_DATA:
                        case self::ENFORCED:
                        case self::ENFORCE:
                        case self::ENQUEUE:
                        case self::ENTERPRISE:
                        case self::ENTITYESCAPING:
                        case self::ENTRY:
                        case self::EQUIPART:
                        case self::ERR:
                        case self::ERROR_ARGUMENT:
                        case self::ERROR:
                        case self::ERROR_ON_OVERLAP_TIME:
                        case self::ERRORS:
                        case self::ESCAPE:
                        case self::ESTIMATE:
                        case self::EVAL:
                        case self::EVALNAME:
                        case self::EVALUATE:
                        case self::EVALUATION:
                        case self::EVENTS:
                        case self::EVERY:
                        case self::EXCEPT:
                        case self::EXCEPTION:
                        case self::EXCEPTION_INIT:
                        case self::EXCEPTIONS:
                        case self::EXCHANGE:
                        case self::EXCLUDE:
                        case self::EXCLUDING:
                        case self::EXECUTE:
                        case self::EXEMPT:
                        case self::EXISTING:
                        case self::EXISTS:
                        case self::EXISTSNODE:
                        case self::EXIT:
                        case self::EXPAND_GSET_TO_UNION:
                        case self::EXPAND_TABLE:
                        case self::EXP:
                        case self::EXPIRE:
                        case self::EXPLAIN:
                        case self::EXPLOSION:
                        case self::EXPORT:
                        case self::EXPR_CORR_CHECK:
                        case self::EXPRESS:
                        case self::EXTENDS:
                        case self::EXTENT:
                        case self::EXTENTS:
                        case self::EXTERNAL:
                        case self::EXTERNALLY:
                        case self::EXTRACTCLOBXML:
                        case self::EXTRACT:
                        case self::EXTRACTVALUE:
                        case self::EXTRA:
                        case self::FACILITY:
                        case self::FACT:
                        case self::FACTOR:
                        case self::FACTORIZE_JOIN:
                        case self::FAILED:
                        case self::FAILED_LOGIN_ATTEMPTS:
                        case self::FAILGROUP:
                        case self::FAILOVER:
                        case self::FAILURE:
                        case self::FALSE:
                        case self::FAMILY:
                        case self::FAR:
                        case self::FAST:
                        case self::FASTSTART:
                        case self::FBTSCAN:
                        case self::FEATURE_DETAILS:
                        case self::FEATURE_ID:
                        case self::FEATURE_SET:
                        case self::FEATURE_VALUE:
                        case self::FETCH:
                        case self::FILE:
                        case self::FILE_NAME_CONVERT:
                        case self::FILESYSTEM_LIKE_LOGGING:
                        case self::FILTER:
                        case self::FINAL:
                        case self::FINE:
                        case self::FINISH:
                        case self::FIRST:
                        case self::FIRSTM:
                        case self::FIRST_ROWS:
                        case self::FIRST_VALUE:
                        case self::FIXED_VIEW_DATA:
                        case self::FLAGGER:
                        case self::FLASHBACK:
                        case self::FLASH_CACHE:
                        case self::FLOAT:
                        case self::FLOB:
                        case self::FLOOR:
                        case self::FLUSH:
                        case self::FOLDER:
                        case self::FOLLOWING:
                        case self::FOLLOWS:
                        case self::FORALL:
                        case self::FORCE:
                        case self::FORCE_XML_QUERY_REWRITE:
                        case self::FOREIGN:
                        case self::FOREVER:
                        case self::FORMAT:
                        case self::FORWARD:
                        case self::FRAGMENT_NUMBER:
                        case self::FREELIST:
                        case self::FREELISTS:
                        case self::FREEPOOLS:
                        case self::FRESH:
                        case self::FROM_TZ:
                        case self::FULL:
                        case self::FULL_OUTER_JOIN_TO_OUTER:
                        case self::FUNCTION:
                        case self::FUNCTIONS:
                        case self::GATHER_OPTIMIZER_STATISTICS:
                        case self::GATHER_PLAN_STATISTICS:
                        case self::GBY_CONC_ROLLUP:
                        case self::GBY_PUSHDOWN:
                        case self::GENERATED:
                        case self::GET:
                        case self::GLOBAL:
                        case self::GLOBALLY:
                        case self::GLOBAL_NAME:
                        case self::GLOBAL_TOPIC_ENABLED:
                        case self::GROUP_BY:
                        case self::GROUP_ID:
                        case self::GROUPING:
                        case self::GROUPING_ID:
                        case self::GROUPS:
                        case self::GUARANTEED:
                        case self::GUARANTEE:
                        case self::GUARD:
                        case self::HASH_AJ:
                        case self::HASH:
                        case self::HASHKEYS:
                        case self::HASH_SJ:
                        case self::HEADER:
                        case self::HEAP:
                        case self::HELP:
                        case self::HEXTORAW:
                        case self::HEXTOREF:
                        case self::HIDDEN_KEYWORD:
                        case self::HIDE:
                        case self::HIERARCHY:
                        case self::HIGH:
                        case self::HINTSET_BEGIN:
                        case self::HINTSET_END:
                        case self::HOT:
                        case self::HOUR:
                        case self::HWM_BROKERED:
                        case self::HYBRID:
                        case self::IDENTIFIER:
                        case self::IDENTITY:
                        case self::IDGENERATORS:
                        case self::ID:
                        case self::IDLE_TIME:
                        case self::IF:
                        case self::IGNORE:
                        case self::IGNORE_OPTIM_EMBEDDED_HINTS:
                        case self::IGNORE_ROW_ON_DUPKEY_INDEX:
                        case self::IGNORE_WHERE_CLAUSE:
                        case self::ILM:
                        case self::IMMEDIATE:
                        case self::IMPACT:
                        case self::IMPORT:
                        case self::INACTIVE:
                        case self::INCLUDE:
                        case self::INCLUDE_VERSION:
                        case self::INCLUDING:
                        case self::INCREMENTAL:
                        case self::INCREMENT:
                        case self::INCR:
                        case self::INDENT:
                        case self::INDEX_ASC:
                        case self::INDEX_COMBINE:
                        case self::INDEX_DESC:
                        case self::INDEXED:
                        case self::INDEXES:
                        case self::INDEX_FFS:
                        case self::INDEX_FILTER:
                        case self::INDEXING:
                        case self::INDEX_JOIN:
                        case self::INDEX_ROWS:
                        case self::INDEX_RRS:
                        case self::INDEX_RS_ASC:
                        case self::INDEX_RS_DESC:
                        case self::INDEX_RS:
                        case self::INDEX_SCAN:
                        case self::INDEX_SKIP_SCAN:
                        case self::INDEX_SS_ASC:
                        case self::INDEX_SS_DESC:
                        case self::INDEX_SS:
                        case self::INDEX_STATS:
                        case self::INDEXTYPE:
                        case self::INDEXTYPES:
                        case self::INDICATOR:
                        case self::INDICES:
                        case self::INFINITE:
                        case self::INFORMATIONAL:
                        case self::INHERIT:
                        case self::INITCAP:
                        case self::INITIAL:
                        case self::INITIALIZED:
                        case self::INITIALLY:
                        case self::INITRANS:
                        case self::INLINE:
                        case self::INLINE_XMLTYPE_NT:
                        case self::INMEMORY:
                        case self::IN_MEMORY_METADATA:
                        case self::INMEMORY_PRUNING:
                        case self::INNER:
                        case self::INOUT:
                        case self::INPLACE:
                        case self::INSERTCHILDXMLAFTER:
                        case self::INSERTCHILDXMLBEFORE:
                        case self::INSERTCHILDXML:
                        case self::INSERTXMLAFTER:
                        case self::INSERTXMLBEFORE:
                        case self::INSTANCE:
                        case self::INSTANCES:
                        case self::INSTANTIABLE:
                        case self::INSTANTLY:
                        case self::INSTEAD:
                        case self::INSTR2:
                        case self::INSTR4:
                        case self::INSTRB:
                        case self::INSTRC:
                        case self::INSTR:
                        case self::INTEGER:
                        case self::INTERLEAVED:
                        case self::INTERMEDIATE:
                        case self::INTERNAL_CONVERT:
                        case self::INTERNAL_USE:
                        case self::INTERPRETED:
                        case self::INTERVAL:
                        case self::INT:
                        case self::INVALIDATE:
                        case self::INVISIBLE:
                        case self::IN_XQUERY:
                        case self::ISOLATION:
                        case self::ISOLATION_LEVEL:
                        case self::ITERATE:
                        case self::ITERATION_NUMBER:
                        case self::JAVA:
                        case self::JOB:
                        case self::JOIN:
                        case self::JSON_ARRAYAGG:
                        case self::JSON_ARRAY:
                        case self::JSON_EQUAL:
                        case self::JSON_EXISTS2:
                        case self::JSON_EXISTS:
                        case self::JSONGET:
                        case self::JSON:
                        case self::JSON_OBJECTAGG:
                        case self::JSON_OBJECT:
                        case self::JSONPARSE:
                        case self::JSON_QUERY:
                        case self::JSON_SERIALIZE:
                        case self::JSON_TABLE:
                        case self::JSON_TEXTCONTAINS2:
                        case self::JSON_TEXTCONTAINS:
                        case self::JSON_VALUE:
                        case self::KEEP_DUPLICATES:
                        case self::KEEP:
                        case self::KERBEROS:
                        case self::KEY:
                        case self::KEY_LENGTH:
                        case self::KEYSIZE:
                        case self::KEYS:
                        case self::KEYSTORE:
                        case self::KILL:
                        case self::LABEL:
                        case self::LANGUAGE:
                        case self::LAST_DAY:
                        case self::LAST:
                        case self::LAST_VALUE:
                        case self::LATERAL:
                        case self::LAX:
                        case self::LAYER:
                        case self::LDAP_REGISTRATION_ENABLED:
                        case self::LDAP_REGISTRATION:
                        case self::LDAP_REG_SYNC_INTERVAL:
                        case self::LEADING:
                        case self::LEFT:
                        case self::LENGTH2:
                        case self::LENGTH4:
                        case self::LENGTHB:
                        case self::LENGTHC:
                        case self::LENGTH:
                        case self::LESS:
                        case self::LEVEL:
                        case self::LEVELS:
                        case self::LIBRARY:
                        case self::LIFECYCLE:
                        case self::LIFE:
                        case self::LIFETIME:
                        case self::LIKE2:
                        case self::LIKE4:
                        case self::LIKEC:
                        case self::LIKE_EXPAND:
                        case self::LIMIT:
                        case self::LINEAR:
                        case self::LINK:
                        case self::LIST:
                        case self::LN:
                        case self::LNNVL:
                        case self::LOAD:
                        case self::LOB:
                        case self::LOBNVL:
                        case self::LOBS:
                        case self::LOCAL_INDEXES:
                        case self::LOCAL:
                        case self::LOCALTIME:
                        case self::LOCALTIMESTAMP:
                        case self::LOCATION:
                        case self::LOCATOR:
                        case self::LOCKED:
                        case self::LOCKING:
                        case self::LOGFILE:
                        case self::LOGFILES:
                        case self::LOGGING:
                        case self::LOGICAL:
                        case self::LOGICAL_READS_PER_CALL:
                        case self::LOGICAL_READS_PER_SESSION:
                        case self::LOG:
                        case self::LOGMINING:
                        case self::LOGOFF:
                        case self::LOGON:
                        case self::LOG_READ_ONLY_VIOLATIONS:
                        case self::LONG:
                        case self::LOOP:
                        case self::LOWER:
                        case self::LOW:
                        case self::LPAD:
                        case self::LTRIM:
                        case self::MAIN:
                        case self::MAKE_REF:
                        case self::MANAGED:
                        case self::MANAGE:
                        case self::MANAGEMENT:
                        case self::MANAGER:
                        case self::MANUAL:
                        case self::MAP:
                        case self::MAPPING:
                        case self::MASTER:
                        case self::MATCHED:
                        case self::MATCHES:
                        case self::MATCH:
                        case self::MATCH_NUMBER:
                        case self::MATCH_RECOGNIZE:
                        case self::MATERIALIZED:
                        case self::MATERIALIZE:
                        case self::MAXARCHLOGS:
                        case self::MAXDATAFILES:
                        case self::MAXEXTENTS:
                        case self::MAXIMIZE:
                        case self::MAXINSTANCES:
                        case self::MAXLOGFILES:
                        case self::MAXLOGHISTORY:
                        case self::MAXLOGMEMBERS:
                        case self::MAX_SHARED_TEMP_SIZE:
                        case self::MAXSIZE:
                        case self::MAXTRANS:
                        case self::MAXVALUE:
                        case self::MEASURE:
                        case self::MEASURES:
                        case self::MEDIUM:
                        case self::MEMBER:
                        case self::MEMCOMPRESS:
                        case self::MEMORY:
                        case self::MERGEACTIONS:
                        case self::MERGE_AJ:
                        case self::MERGE_CONST_ON:
                        case self::MERGE:
                        case self::MERGE_SJ:
                        case self::METADATA:
                        case self::METHOD:
                        case self::MIGRATE:
                        case self::MIGRATION:
                        case self::MINEXTENTS:
                        case self::MINIMIZE:
                        case self::MINIMUM:
                        case self::MINING:
                        case self::MINUS_NULL:
                        case self::MINUTE:
                        case self::MINVALUE:
                        case self::MIRRORCOLD:
                        case self::MIRRORHOT:
                        case self::MIRROR:
                        case self::MLSLABEL:
                        case self::MODEL_COMPILE_SUBQUERY:
                        case self::MODEL_DONTVERIFY_UNIQUENESS:
                        case self::MODEL_DYNAMIC_SUBQUERY:
                        case self::MODEL_MIN_ANALYSIS:
                        case self::MODEL:
                        case self::MODEL_NB:
                        case self::MODEL_NO_ANALYSIS:
                        case self::MODEL_PBY:
                        case self::MODEL_PUSH_REF:
                        case self::MODEL_SV:
                        case self::MODIFICATION:
                        case self::MODIFY_COLUMN_TYPE:
                        case self::MODIFY:
                        case self::MOD:
                        case self::MODULE:
                        case self::MONITORING:
                        case self::MONITOR:
                        case self::MONTH:
                        case self::MONTHS_BETWEEN:
                        case self::MONTHS:
                        case self::MOUNT:
                        case self::MOUNTPATH:
                        case self::MOVEMENT:
                        case self::MOVE:
                        case self::MULTIDIMENSIONAL:
                        case self::MULTISET:
                        case self::MV_MERGE:
                        case self::NAMED:
                        case self::NAME:
                        case self::NAMESPACE:
                        case self::NAN:
                        case self::NANVL:
                        case self::NATIONAL:
                        case self::NATIVE_FULL_OUTER_JOIN:
                        case self::NATIVE:
                        case self::NATURAL:
                        case self::NAV:
                        case self::NCHAR_CS:
                        case self::NCHAR:
                        case self::NCHR:
                        case self::NCLOB:
                        case self::NEEDED:
                        case self::NEG:
                        case self::NESTED:
                        case self::NESTED_TABLE_FAST_INSERT:
                        case self::NESTED_TABLE_GET_REFS:
                        case self::NESTED_TABLE_ID:
                        case self::NESTED_TABLE_SET_REFS:
                        case self::NESTED_TABLE_SET_SETID:
                        case self::NETWORK:
                        case self::NEVER:
                        case self::NEW:
                        case self::NEW_TIME:
                        case self::NEXT_DAY:
                        case self::NEXT:
                        case self::NL_AJ:
                        case self::NLJ_BATCHING:
                        case self::NLJ_INDEX_FILTER:
                        case self::NLJ_INDEX_SCAN:
                        case self::NLJ_PREFETCH:
                        case self::NLS_CALENDAR:
                        case self::NLS_CHARACTERSET:
                        case self::NLS_CHARSET_DECL_LEN:
                        case self::NLS_CHARSET_ID:
                        case self::NLS_CHARSET_NAME:
                        case self::NLS_COMP:
                        case self::NLS_CURRENCY:
                        case self::NLS_DATE_FORMAT:
                        case self::NLS_DATE_LANGUAGE:
                        case self::NLS_INITCAP:
                        case self::NLS_ISO_CURRENCY:
                        case self::NL_SJ:
                        case self::NLS_LANG:
                        case self::NLS_LANGUAGE:
                        case self::NLS_LENGTH_SEMANTICS:
                        case self::NLS_LOWER:
                        case self::NLS_NCHAR_CONV_EXCP:
                        case self::NLS_NUMERIC_CHARACTERS:
                        case self::NLS_SORT:
                        case self::NLSSORT:
                        case self::NLS_SPECIAL_CHARS:
                        case self::NLS_TERRITORY:
                        case self::NLS_UPPER:
                        case self::NO_ACCESS:
                        case self::NO_ADAPTIVE_PLAN:
                        case self::NO_ANSI_REARCH:
                        case self::NOAPPEND:
                        case self::NOARCHIVELOG:
                        case self::NOAUDIT:
                        case self::NO_AUTO_REOPTIMIZE:
                        case self::NO_BASETABLE_MULTIMV_REWRITE:
                        case self::NO_BATCH_TABLE_ACCESS_BY_ROWID:
                        case self::NO_BIND_AWARE:
                        case self::NO_BUFFER:
                        case self::NOCACHE:
                        case self::NO_CARTESIAN:
                        case self::NO_CHECK_ACL_REWRITE:
                        case self::NO_CLUSTER_BY_ROWID:
                        case self::NO_CLUSTERING:
                        case self::NO_COALESCE_SQ:
                        case self::NO_COMMON_DATA:
                        case self::NO_CONNECT_BY_CB_WHR_ONLY:
                        case self::NO_CONNECT_BY_COMBINE_SW:
                        case self::NO_CONNECT_BY_COST_BASED:
                        case self::NO_CONNECT_BY_ELIM_DUPS:
                        case self::NO_CONNECT_BY_FILTERING:
                        case self::NOCOPY:
                        case self::NO_COST_XML_QUERY_REWRITE:
                        case self::NO_CPU_COSTING:
                        case self::NOCPU_COSTING:
                        case self::NOCYCLE:
                        case self::NO_DATA_SECURITY_REWRITE:
                        case self::NO_DECORRELATE:
                        case self::NODELAY:
                        case self::NO_DOMAIN_INDEX_FILTER:
                        case self::NO_DST_UPGRADE_INSERT_CONV:
                        case self::NO_ELIM_GROUPBY:
                        case self::NO_ELIMINATE_JOIN:
                        case self::NO_ELIMINATE_OBY:
                        case self::NO_ELIMINATE_OUTER_JOIN:
                        case self::NOENTITYESCAPING:
                        case self::NO_EXPAND_GSET_TO_UNION:
                        case self::NO_EXPAND:
                        case self::NO_EXPAND_TABLE:
                        case self::NO_FACT:
                        case self::NO_FACTORIZE_JOIN:
                        case self::NO_FILTERING:
                        case self::NOFORCE:
                        case self::NO_FULL_OUTER_JOIN_TO_OUTER:
                        case self::NO_GATHER_OPTIMIZER_STATISTICS:
                        case self::NO_GBY_PUSHDOWN:
                        case self::NOGUARANTEE:
                        case self::NO_INDEX_FFS:
                        case self::NO_INDEX:
                        case self::NO_INDEX_SS:
                        case self::NO_INMEMORY:
                        case self::NO_INMEMORY_PRUNING:
                        case self::NOKEEP:
                        case self::NO_LOAD:
                        case self::NOLOCAL:
                        case self::NOLOGGING:
                        case self::NOMAPPING:
                        case self::NOMAXVALUE:
                        case self::NO_MERGE:
                        case self::NOMINIMIZE:
                        case self::NOMINVALUE:
                        case self::NO_MODEL_PUSH_REF:
                        case self::NO_MONITORING:
                        case self::NOMONITORING:
                        case self::NO_MONITOR:
                        case self::NO_MULTIMV_REWRITE:
                        case self::NO_NATIVE_FULL_OUTER_JOIN:
                        case self::NONBLOCKING:
                        case self::NONEDITIONABLE:
                        case self::NONE:
                        case self::NO_NLJ_BATCHING:
                        case self::NO_NLJ_PREFETCH:
                        case self::NO:
                        case self::NONSCHEMA:
                        case self::NO_OBJECT_LINK:
                        case self::NOORDER:
                        case self::NO_ORDER_ROLLUPS:
                        case self::NO_OUTER_JOIN_TO_ANTI:
                        case self::NO_OUTER_JOIN_TO_INNER:
                        case self::NOOVERRIDE:
                        case self::NO_PARALLEL_INDEX:
                        case self::NOPARALLEL_INDEX:
                        case self::NO_PARALLEL:
                        case self::NOPARALLEL:
                        case self::NO_PARTIAL_COMMIT:
                        case self::NO_PARTIAL_JOIN:
                        case self::NO_PARTIAL_ROLLUP_PUSHDOWN:
                        case self::NOPARTITION:
                        case self::NO_PLACE_DISTINCT:
                        case self::NO_PLACE_GROUP_BY:
                        case self::NO_PQ_CONCURRENT_UNION:
                        case self::NO_PQ_MAP:
                        case self::NO_PQ_REPLICATE:
                        case self::NO_PQ_SKEW:
                        case self::NO_PRUNE_GSETS:
                        case self::NO_PULL_PRED:
                        case self::NO_PUSH_PRED:
                        case self::NO_PUSH_SUBQ:
                        case self::NO_PX_FAULT_TOLERANCE:
                        case self::NO_PX_JOIN_FILTER:
                        case self::NO_QKN_BUFF:
                        case self::NO_QUERY_TRANSFORMATION:
                        case self::NO_REF_CASCADE:
                        case self::NORELOCATE:
                        case self::NORELY:
                        case self::NOREPAIR:
                        case self::NOREPLAY:
                        case self::NORESETLOGS:
                        case self::NO_RESULT_CACHE:
                        case self::NOREVERSE:
                        case self::NO_REWRITE:
                        case self::NOREWRITE:
                        case self::NORMAL:
                        case self::NO_ROOT_SW_FOR_LOCAL:
                        case self::NOROWDEPENDENCIES:
                        case self::NOSCHEMACHECK:
                        case self::NOSEGMENT:
                        case self::NO_SEMIJOIN:
                        case self::NO_SEMI_TO_INNER:
                        case self::NO_SET_TO_JOIN:
                        case self::NOSORT:
                        case self::NO_SQL_TRANSLATION:
                        case self::NO_SQL_TUNE:
                        case self::NO_STAR_TRANSFORMATION:
                        case self::NO_STATEMENT_QUEUING:
                        case self::NO_STATS_GSETS:
                        case self::NOSTRICT:
                        case self::NO_SUBQUERY_PRUNING:
                        case self::NO_SUBSTRB_PAD:
                        case self::NO_SWAP_JOIN_INPUTS:
                        case self::NOSWITCH:
                        case self::NO_TABLE_LOOKUP_BY_NL:
                        case self::NO_TEMP_TABLE:
                        case self::NOTHING:
                        case self::NOTIFICATION:
                        case self::NO_TRANSFORM_DISTINCT_AGG:
                        case self::NO_UNNEST:
                        case self::NO_USE_CUBE:
                        case self::NO_USE_HASH_AGGREGATION:
                        case self::NO_USE_HASH_GBY_FOR_PUSHDOWN:
                        case self::NO_USE_HASH:
                        case self::NO_USE_INVISIBLE_INDEXES:
                        case self::NO_USE_MERGE:
                        case self::NO_USE_NL:
                        case self::NO_USE_VECTOR_AGGREGATION:
                        case self::NOVALIDATE:
                        case self::NO_VECTOR_TRANSFORM_DIMS:
                        case self::NO_VECTOR_TRANSFORM_FACT:
                        case self::NO_VECTOR_TRANSFORM:
                        case self::NO_XDB_FASTPATH_INSERT:
                        case self::NO_XML_DML_REWRITE:
                        case self::NO_XMLINDEX_REWRITE_IN_SELECT:
                        case self::NO_XMLINDEX_REWRITE:
                        case self::NO_XML_QUERY_REWRITE:
                        case self::NO_ZONEMAP:
                        case self::NTH_VALUE:
                        case self::NULLIF:
                        case self::NULLS:
                        case self::NUMBER:
                        case self::NUMERIC:
                        case self::NUM_INDEX_KEYS:
                        case self::NUMTODSINTERVAL:
                        case self::NUMTOYMINTERVAL:
                        case self::NVARCHAR2:
                        case self::NVL2:
                        case self::OBJECT2XML:
                        case self::OBJECT:
                        case self::OBJ_ID:
                        case self::OBJNO:
                        case self::OBJNO_REUSE:
                        case self::OCCURENCES:
                        case self::OFFLINE:
                        case self::OFF:
                        case self::OFFSET:
                        case self::OIDINDEX:
                        case self::OID:
                        case self::OLAP:
                        case self::OLD:
                        case self::OLD_PUSH_PRED:
                        case self::OLS:
                        case self::OLTP:
                        case self::OMIT:
                        case self::ONE:
                        case self::ONLINE:
                        case self::ONLY:
                        case self::OPAQUE:
                        case self::OPAQUE_TRANSFORM:
                        case self::OPAQUE_XCANONICAL:
                        case self::OPCODE:
                        case self::OPEN:
                        case self::OPERATIONS:
                        case self::OPERATOR:
                        case self::OPT_ESTIMATE:
                        case self::OPTIMAL:
                        case self::OPTIMIZE:
                        case self::OPTIMIZER_FEATURES_ENABLE:
                        case self::OPTIMIZER_GOAL:
                        case self::OPT_PARAM:
                        case self::ORA_BRANCH:
                        case self::ORA_CHECK_ACL:
                        case self::ORA_CHECK_PRIVILEGE:
                        case self::ORA_CLUSTERING:
                        case self::ORADATA:
                        case self::ORADEBUG:
                        case self::ORA_DST_AFFECTED:
                        case self::ORA_DST_CONVERT:
                        case self::ORA_DST_ERROR:
                        case self::ORA_GET_ACLIDS:
                        case self::ORA_GET_PRIVILEGES:
                        case self::ORA_HASH:
                        case self::ORA_INVOKING_USERID:
                        case self::ORA_INVOKING_USER:
                        case self::ORA_INVOKING_XS_USER_GUID:
                        case self::ORA_INVOKING_XS_USER:
                        case self::ORA_RAWCOMPARE:
                        case self::ORA_RAWCONCAT:
                        case self::ORA_ROWSCN:
                        case self::ORA_ROWSCN_RAW:
                        case self::ORA_ROWVERSION:
                        case self::ORA_TABVERSION:
                        case self::ORA_WRITE_TIME:
                        case self::ORDERED:
                        case self::ORDERED_PREDICATES:
                        case self::ORDINALITY:
                        case self::OR_EXPAND:
                        case self::ORGANIZATION:
                        case self::OR_PREDICATES:
                        case self::OSERROR:
                        case self::OTHER:
                        case self::OUTER_JOIN_TO_ANTI:
                        case self::OUTER_JOIN_TO_INNER:
                        case self::OUTER:
                        case self::OUTLINE_LEAF:
                        case self::OUTLINE:
                        case self::OUT_OF_LINE:
                        case self::OUT:
                        case self::OVERFLOW_NOMOVE:
                        case self::OVERFLOW:
                        case self::OVERLAPS:
                        case self::OVER:
                        case self::OVERRIDING:
                        case self::OWNER:
                        case self::OWNERSHIP:
                        case self::OWN:
                        case self::PACKAGE:
                        case self::PACKAGES:
                        case self::PARALLEL_ENABLE:
                        case self::PARALLEL_INDEX:
                        case self::PARALLEL:
                        case self::PARAMETERS:
                        case self::PARAM:
                        case self::PARENT:
                        case self::PARITY:
                        case self::PARTIAL_JOIN:
                        case self::PARTIALLY:
                        case self::PARTIAL:
                        case self::PARTIAL_ROLLUP_PUSHDOWN:
                        case self::PARTITION_HASH:
                        case self::PARTITION_LIST:
                        case self::PARTITION:
                        case self::PARTITION_RANGE:
                        case self::PARTITIONS:
                        case self::PARTNUMINST:
                        case self::PASSING:
                        case self::PASSWORD_GRACE_TIME:
                        case self::PASSWORD_LIFE_TIME:
                        case self::PASSWORD_LOCK_TIME:
                        case self::PASSWORD:
                        case self::PASSWORD_REUSE_MAX:
                        case self::PASSWORD_REUSE_TIME:
                        case self::PASSWORD_VERIFY_FUNCTION:
                        case self::PAST:
                        case self::PATCH:
                        case self::PATH:
                        case self::PATH_PREFIX:
                        case self::PATHS:
                        case self::PATTERN:
                        case self::PBL_HS_BEGIN:
                        case self::PBL_HS_END:
                        case self::PCTINCREASE:
                        case self::PCTTHRESHOLD:
                        case self::PCTUSED:
                        case self::PCTVERSION:
                        case self::PENDING:
                        case self::PERCENT_KEYWORD:
                        case self::PERCENT_RANKM:
                        case self::PERFORMANCE:
                        case self::PERIOD_KEYWORD:
                        case self::PERMANENT:
                        case self::PERMISSION:
                        case self::PERMUTE:
                        case self::PER:
                        case self::PFILE:
                        case self::PHYSICAL:
                        case self::PIKEY:
                        case self::PIPELINED:
                        case self::PIV_GB:
                        case self::PIVOT:
                        case self::PIV_SSF:
                        case self::PLACE_DISTINCT:
                        case self::PLACE_GROUP_BY:
                        case self::PLAN:
                        case self::PLSCOPE_SETTINGS:
                        case self::PLS_INTEGER:
                        case self::PLSQL_CCFLAGS:
                        case self::PLSQL_CODE_TYPE:
                        case self::PLSQL_DEBUG:
                        case self::PLSQL_OPTIMIZE_LEVEL:
                        case self::PLSQL_WARNINGS:
                        case self::PLUGGABLE:
                        case self::POINT:
                        case self::POLICY:
                        case self::POOL_16K:
                        case self::POOL_2K:
                        case self::POOL_32K:
                        case self::POOL_4K:
                        case self::POOL_8K:
                        case self::POSITIVEN:
                        case self::POSITIVE:
                        case self::POST_TRANSACTION:
                        case self::POWERMULTISET_BY_CARDINALITY:
                        case self::POWERMULTISET:
                        case self::POWER:
                        case self::PQ_CONCURRENT_UNION:
                        case self::PQ_DISTRIBUTE:
                        case self::PQ_DISTRIBUTE_WINDOW:
                        case self::PQ_FILTER:
                        case self::PQ_MAP:
                        case self::PQ_NOMAP:
                        case self::PQ_REPLICATE:
                        case self::PQ_SKEW:
                        case self::PRAGMA:
                        case self::PREBUILT:
                        case self::PRECEDES:
                        case self::PRECEDING:
                        case self::PRECISION:
                        case self::PRECOMPUTE_SUBQUERY:
                        case self::PREDICATE_REORDERS:
                        case self::PRELOAD:
                        case self::PREPARE:
                        case self::PRESENTNNV:
                        case self::PRESENT:
                        case self::PRESENTV:
                        case self::PRESERVE_OID:
                        case self::PRESERVE:
                        case self::PRETTY:
                        case self::PREVIOUS:
                        case self::PREV:
                        case self::PRIMARY:
                        case self::PRINTBLOBTOCLOB:
                        case self::PRIORITY:
                        case self::PRIVATE:
                        case self::PRIVATE_SGA:
                        case self::PRIVILEGED:
                        case self::PRIVILEGE:
                        case self::PRIVILEGES:
                        case self::PROCEDURAL:
                        case self::PROCEDURE:
                        case self::PROCESS:
                        case self::PROFILE:
                        case self::PROGRAM:
                        case self::PROJECT:
                        case self::PROPAGATE:
                        case self::PROTECTED:
                        case self::PROTECTION:
                        case self::PROXY:
                        case self::PRUNING:
                        case self::PULL_PRED:
                        case self::PURGE:
                        case self::PUSH_PRED:
                        case self::PUSH_SUBQ:
                        case self::PX_FAULT_TOLERANCE:
                        case self::PX_GRANULE:
                        case self::PX_JOIN_FILTER:
                        case self::QB_NAME:
                        case self::QUERY_BLOCK:
                        case self::QUERY:
                        case self::QUEUE_CURR:
                        case self::QUEUE:
                        case self::QUEUE_ROWP:
                        case self::QUIESCE:
                        case self::QUORUM:
                        case self::QUOTA:
                        case self::RAISE:
                        case self::RANDOM_LOCAL:
                        case self::RANDOM:
                        case self::RANGE:
                        case self::RANKM:
                        case self::RAPIDLY:
                        case self::RAW:
                        case self::RAWTOHEX:
                        case self::RAWTONHEX:
                        case self::RBA:
                        case self::RBO_OUTLINE:
                        case self::RDBA:
                        case self::READ:
                        case self::READS:
                        case self::REALM:
                        case self::REAL:
                        case self::REBALANCE:
                        case self::REBUILD:
                        case self::RECORD:
                        case self::RECORDS_PER_BLOCK:
                        case self::RECOVERABLE:
                        case self::RECOVER:
                        case self::RECOVERY:
                        case self::RECYCLEBIN:
                        case self::RECYCLE:
                        case self::REDACTION:
                        case self::REDEFINE:
                        case self::REDO:
                        case self::REDUCED:
                        case self::REDUNDANCY:
                        case self::REF_CASCADE_CURSOR:
                        case self::REFERENCED:
                        case self::REFERENCE:
                        case self::REFERENCES:
                        case self::REFERENCING:
                        case self::REF:
                        case self::REFRESH:
                        case self::REFTOHEX:
                        case self::REGEXP_COUNT:
                        case self::REGEXP_INSTR:
                        case self::REGEXP_LIKE:
                        case self::REGEXP_REPLACE:
                        case self::REGEXP_SUBSTR:
                        case self::REGISTER:
                        case self::REGR_AVGX:
                        case self::REGR_AVGY:
                        case self::REGR_COUNT:
                        case self::REGR_INTERCEPT:
                        case self::REGR_R2:
                        case self::REGR_SLOPE:
                        case self::REGR_SXX:
                        case self::REGR_SXY:
                        case self::REGR_SYY:
                        case self::REGULAR:
                        case self::REJECT:
                        case self::REKEY:
                        case self::RELATIONAL:
                        case self::RELOCATE:
                        case self::RELY:
                        case self::REMAINDER:
                        case self::REMOTE_MAPPED:
                        case self::REMOVE:
                        case self::RENAME:
                        case self::REPAIR:
                        case self::REPEAT:
                        case self::REPLACE:
                        case self::REPLICATION:
                        case self::REQUIRED:
                        case self::RESETLOGS:
                        case self::RESET:
                        case self::RESIZE:
                        case self::RESOLVE:
                        case self::RESOLVER:
                        case self::RESPECT:
                        case self::RESTART:
                        case self::RESTORE_AS_INTERVALS:
                        case self::RESTORE:
                        case self::RESTRICT_ALL_REF_CONS:
                        case self::RESTRICTED:
                        case self::RESTRICT_REFERENCES:
                        case self::RESTRICT:
                        case self::RESULT_CACHE:
                        case self::RESULT:
                        case self::RESUMABLE:
                        case self::RESUME:
                        case self::RETENTION:
                        case self::RETRY_ON_ROW_CHANGE:
                        case self::RETURNING:
                        case self::RETURN:
                        case self::REUSE:
                        case self::REVERSE:
                        case self::REWRITE_OR_ERROR:
                        case self::REWRITE:
                        case self::RIGHT:
                        case self::ROLE:
                        case self::ROLESET:
                        case self::ROLES:
                        case self::ROLLBACK:
                        case self::ROLLING:
                        case self::ROLLUP:
                        case self::ROWDEPENDENCIES:
                        case self::ROWID_MAPPING_TABLE:
                        case self::ROWID:
                        case self::ROWIDTOCHAR:
                        case self::ROWIDTONCHAR:
                        case self::ROW_LENGTH:
                        case self::ROWNUM:
                        case self::ROW:
                        case self::ROWS:
                        case self::RPAD:
                        case self::RTRIM:
                        case self::RULE:
                        case self::RULES:
                        case self::RUNNING:
                        case self::SALT:
                        case self::SAMPLE:
                        case self::SAVE_AS_INTERVALS:
                        case self::SAVEPOINT:
                        case self::SAVE:
                        case self::SB4:
                        case self::SCALE_ROWS:
                        case self::SCALE:
                        case self::SCAN_INSTANCES:
                        case self::SCAN:
                        case self::SCHEDULER:
                        case self::SCHEMACHECK:
                        case self::SCHEMA:
                        case self::SCN_ASCENDING:
                        case self::SCN:
                        case self::SCOPE:
                        case self::SCRUB:
                        case self::SD_ALL:
                        case self::SD_INHIBIT:
                        case self::SDO_GEOM_MBR:
                        case self::SD_SHOW:
                        case self::SEARCH:
                        case self::SECOND:
                        case self::SECRET:
                        case self::SECUREFILE_DBA:
                        case self::SECUREFILE:
                        case self::SECURITY:
                        case self::SEED:
                        case self::SEG_BLOCK:
                        case self::SEG_FILE:
                        case self::SEGMENT:
                        case self::SELECTIVITY:
                        case self::SELF:
                        case self::SEMIJOIN_DRIVER:
                        case self::SEMIJOIN:
                        case self::SEMI_TO_INNER:
                        case self::SEQUENCED:
                        case self::SEQUENCE:
                        case self::SEQUENTIAL:
                        case self::SERIALIZABLE:
                        case self::SERIALLY_REUSABLE:
                        case self::SERIAL:
                        case self::SERVERERROR:
                        case self::SERVICE_NAME_CONVERT:
                        case self::SERVICES:
                        case self::SESSION_CACHED_CURSORS:
                        case self::SESSION:
                        case self::SESSIONS_PER_USER:
                        case self::SESSIONTIMEZONE:
                        case self::SESSIONTZNAME:
                        case self::SET:
                        case self::SETS:
                        case self::SETTINGS:
                        case self::SET_TO_JOIN:
                        case self::SEVERE:
                        case self::SHARED_POOL:
                        case self::SHARED:
                        case self::SHARING:
                        case self::SHELFLIFE:
                        case self::SHOW:
                        case self::SHRINK:
                        case self::SHUTDOWN:
                        case self::SIBLINGS:
                        case self::SID:
                        case self::SIGNAL_COMPONENT:
                        case self::SIGNAL_FUNCTION:
                        case self::SIGN:
                        case self::SIGNTYPE:
                        case self::SIMPLE_INTEGER:
                        case self::SIMPLE:
                        case self::SINGLE:
                        case self::SINGLETASK:
                        case self::SINH:
                        case self::SIN:
                        case self::SKIP_EXT_OPTIMIZER:
                        case self::SKIP_:
                        case self::SKIP_UNQ_UNUSABLE_IDX:
                        case self::SKIP_UNUSABLE_INDEXES:
                        case self::SMALLFILE:
                        case self::SMALLINT:
                        case self::SNAPSHOT:
                        case self::SOME:
                        case self::SORT:
                        case self::SOUNDEX:
                        case self::SOURCE_FILE_DIRECTORY:
                        case self::SOURCE_FILE_NAME_CONVERT:
                        case self::SOURCE:
                        case self::SPACE_KEYWORD:
                        case self::SPECIFICATION:
                        case self::SPFILE:
                        case self::SPLIT:
                        case self::SPREADSHEET:
                        case self::SQLDATA:
                        case self::SQLERROR:
                        case self::SQLLDR:
                        case self::SQL:
                        case self::SQL_TRACE:
                        case self::SQL_TRANSLATION_PROFILE:
                        case self::SQRT:
                        case self::STALE:
                        case self::STANDALONE:
                        case self::STANDARD_HASH:
                        case self::STANDBY_MAX_DATA_DELAY:
                        case self::STANDBYS:
                        case self::STANDBY:
                        case self::STAR:
                        case self::STAR_TRANSFORMATION:
                        case self::STARTUP:
                        case self::STATEMENT_ID:
                        case self::STATEMENT_QUEUING:
                        case self::STATEMENTS:
                        case self::STATEMENT:
                        case self::STATE:
                        case self::STATIC:
                        case self::STATISTICS:
                        case self::STATS_BINOMIAL_TEST:
                        case self::STATS_CROSSTAB:
                        case self::STATS_F_TEST:
                        case self::STATS_KS_TEST:
                        case self::STATS_MODE:
                        case self::STATS_MW_TEST:
                        case self::STATS_ONE_WAY_ANOVA:
                        case self::STATS_T_TEST_INDEP:
                        case self::STATS_T_TEST_INDEPU:
                        case self::STATS_T_TEST_ONE:
                        case self::STATS_T_TEST_PAIRED:
                        case self::STATS_WSR_TEST:
                        case self::STDDEV_POP:
                        case self::STDDEV_SAMP:
                        case self::STOP:
                        case self::STORAGE:
                        case self::STORE:
                        case self::STREAMS:
                        case self::STREAM:
                        case self::STRICT:
                        case self::STRING:
                        case self::STRIPE_COLUMNS:
                        case self::STRIPE_WIDTH:
                        case self::STRIP:
                        case self::STRUCTURE:
                        case self::SUBMULTISET:
                        case self::SUBPARTITION_REL:
                        case self::SUBPARTITIONS:
                        case self::SUBPARTITION:
                        case self::SUBQUERIES:
                        case self::SUBQUERY_PRUNING:
                        case self::SUBSCRIBE:
                        case self::SUBSET:
                        case self::SUBSTITUTABLE:
                        case self::SUBSTR2:
                        case self::SUBSTR4:
                        case self::SUBSTRB:
                        case self::SUBSTRC:
                        case self::SUBTYPE:
                        case self::SUCCESSFUL:
                        case self::SUCCESS:
                        case self::SUMMARY:
                        case self::SUPPLEMENTAL:
                        case self::SUSPEND:
                        case self::SWAP_JOIN_INPUTS:
                        case self::SWITCHOVER:
                        case self::SWITCH:
                        case self::SYNCHRONOUS:
                        case self::SYNC:
                        case self::SYSASM:
                        case self::SYS_AUDIT:
                        case self::SYSAUX:
                        case self::SYSBACKUP:
                        case self::SYS_CHECKACL:
                        case self::SYS_CHECK_PRIVILEGE:
                        case self::SYS_CONNECT_BY_PATH:
                        case self::SYS_CONTEXT:
                        case self::SYSDATE:
                        case self::SYSDBA:
                        case self::SYS_DBURIGEN:
                        case self::SYSDG:
                        case self::SYS_DL_CURSOR:
                        case self::SYS_DM_RXFORM_CHR:
                        case self::SYS_DM_RXFORM_NUM:
                        case self::SYS_DOM_COMPARE:
                        case self::SYS_DST_PRIM2SEC:
                        case self::SYS_DST_SEC2PRIM:
                        case self::SYS_ET_BFILE_TO_RAW:
                        case self::SYS_ET_BLOB_TO_IMAGE:
                        case self::SYS_ET_IMAGE_TO_BLOB:
                        case self::SYS_ET_RAW_TO_BFILE:
                        case self::SYS_EXTPDTXT:
                        case self::SYS_EXTRACT_UTC:
                        case self::SYS_FBT_INSDEL:
                        case self::SYS_FILTER_ACLS:
                        case self::SYS_FNMATCHES:
                        case self::SYS_FNREPLACE:
                        case self::SYS_GET_ACLIDS:
                        case self::SYS_GET_COL_ACLIDS:
                        case self::SYS_GET_PRIVILEGES:
                        case self::SYS_GETTOKENID:
                        case self::SYS_GETXTIVAL:
                        case self::SYS_GUID:
                        case self::SYSGUID:
                        case self::SYSKM:
                        case self::SYS_MAKE_XMLNODEID:
                        case self::SYS_MAKEXML:
                        case self::SYS_MKXMLATTR:
                        case self::SYS_MKXTI:
                        case self::SYSOBJ:
                        case self::SYS_OP_ADT2BIN:
                        case self::SYS_OP_ADTCONS:
                        case self::SYS_OP_ALSCRVAL:
                        case self::SYS_OP_ATG:
                        case self::SYS_OP_BIN2ADT:
                        case self::SYS_OP_BITVEC:
                        case self::SYS_OP_BL2R:
                        case self::SYS_OP_BLOOM_FILTER_LIST:
                        case self::SYS_OP_BLOOM_FILTER:
                        case self::SYS_OP_C2C:
                        case self::SYS_OP_CAST:
                        case self::SYS_OP_CEG:
                        case self::SYS_OP_CL2C:
                        case self::SYS_OP_COMBINED_HASH:
                        case self::SYS_OP_COMP:
                        case self::SYS_OP_CONVERT:
                        case self::SYS_OP_COUNTCHG:
                        case self::SYS_OP_CSCONV:
                        case self::SYS_OP_CSCONVTEST:
                        case self::SYS_OP_CSR:
                        case self::SYS_OP_CSX_PATCH:
                        case self::SYS_OP_CYCLED_SEQ:
                        case self::SYS_OP_DECOMP:
                        case self::SYS_OP_DESCEND:
                        case self::SYS_OP_DISTINCT:
                        case self::SYS_OP_DRA:
                        case self::SYS_OP_DUMP:
                        case self::SYS_OP_DV_CHECK:
                        case self::SYS_OP_ENFORCE_NOT_NULL:
                        case self::SYSOPER:
                        case self::SYS_OP_EXTRACT:
                        case self::SYS_OP_GROUPING:
                        case self::SYS_OP_GUID:
                        case self::SYS_OP_HASH:
                        case self::SYS_OP_IIX:
                        case self::SYS_OP_ITR:
                        case self::SYS_OP_KEY_VECTOR_CREATE:
                        case self::SYS_OP_KEY_VECTOR_FILTER_LIST:
                        case self::SYS_OP_KEY_VECTOR_FILTER:
                        case self::SYS_OP_KEY_VECTOR_SUCCEEDED:
                        case self::SYS_OP_KEY_VECTOR_USE:
                        case self::SYS_OP_LBID:
                        case self::SYS_OP_LOBLOC2BLOB:
                        case self::SYS_OP_LOBLOC2CLOB:
                        case self::SYS_OP_LOBLOC2ID:
                        case self::SYS_OP_LOBLOC2NCLOB:
                        case self::SYS_OP_LOBLOC2TYP:
                        case self::SYS_OP_LSVI:
                        case self::SYS_OP_LVL:
                        case self::SYS_OP_MAKEOID:
                        case self::SYS_OP_MAP_NONNULL:
                        case self::SYS_OP_MSR:
                        case self::SYS_OP_NICOMBINE:
                        case self::SYS_OP_NIEXTRACT:
                        case self::SYS_OP_NII:
                        case self::SYS_OP_NIX:
                        case self::SYS_OP_NOEXPAND:
                        case self::SYS_OP_NTCIMG:
                        case self::SYS_OP_NUMTORAW:
                        case self::SYS_OP_OIDVALUE:
                        case self::SYS_OP_OPNSIZE:
                        case self::SYS_OP_PAR_1:
                        case self::SYS_OP_PARGID_1:
                        case self::SYS_OP_PARGID:
                        case self::SYS_OP_PAR:
                        case self::SYS_OP_PART_ID:
                        case self::SYS_OP_PIVOT:
                        case self::SYS_OP_R2O:
                        case self::SYS_OP_RAWTONUM:
                        case self::SYS_OP_RDTM:
                        case self::SYS_OP_REF:
                        case self::SYS_OP_RMTD:
                        case self::SYS_OP_ROWIDTOOBJ:
                        case self::SYS_OP_RPB:
                        case self::SYS_OPTLOBPRBSC:
                        case self::SYS_OP_TOSETID:
                        case self::SYS_OP_TPR:
                        case self::SYS_OP_TRTB:
                        case self::SYS_OPTXICMP:
                        case self::SYS_OPTXQCASTASNQ:
                        case self::SYS_OP_UNDESCEND:
                        case self::SYS_OP_VECAND:
                        case self::SYS_OP_VECBIT:
                        case self::SYS_OP_VECOR:
                        case self::SYS_OP_VECXOR:
                        case self::SYS_OP_VERSION:
                        case self::SYS_OP_VREF:
                        case self::SYS_OP_VVD:
                        case self::SYS_OP_XMLCONS_FOR_CSX:
                        case self::SYS_OP_XPTHATG:
                        case self::SYS_OP_XPTHIDX:
                        case self::SYS_OP_XPTHOP:
                        case self::SYS_OP_XTXT2SQLT:
                        case self::SYS_OP_ZONE_ID:
                        case self::SYS_ORDERKEY_DEPTH:
                        case self::SYS_ORDERKEY_MAXCHILD:
                        case self::SYS_ORDERKEY_PARENT:
                        case self::SYS_PARALLEL_TXN:
                        case self::SYS_PATHID_IS_ATTR:
                        case self::SYS_PATHID_IS_NMSPC:
                        case self::SYS_PATHID_LASTNAME:
                        case self::SYS_PATHID_LASTNMSPC:
                        case self::SYS_PATH_REVERSE:
                        case self::SYS_PXQEXTRACT:
                        case self::SYS_RAW_TO_XSID:
                        case self::SYS_RID_ORDER:
                        case self::SYS_ROW_DELTA:
                        case self::SYS_SC_2_XMLT:
                        case self::SYS_SYNRCIREDO:
                        case self::SYSTEM_DEFINED:
                        case self::SYSTEM:
                        case self::SYSTIMESTAMP:
                        case self::SYS_TYPEID:
                        case self::SYS_UMAKEXML:
                        case self::SYS_XMLANALYZE:
                        case self::SYS_XMLCONTAINS:
                        case self::SYS_XMLCONV:
                        case self::SYS_XMLEXNSURI:
                        case self::SYS_XMLGEN:
                        case self::SYS_XMLI_LOC_ISNODE:
                        case self::SYS_XMLI_LOC_ISTEXT:
                        case self::SYS_XMLINSTR:
                        case self::SYS_XMLLOCATOR_GETSVAL:
                        case self::SYS_XMLNODEID_GETCID:
                        case self::SYS_XMLNODEID_GETLOCATOR:
                        case self::SYS_XMLNODEID_GETOKEY:
                        case self::SYS_XMLNODEID_GETPATHID:
                        case self::SYS_XMLNODEID_GETPTRID:
                        case self::SYS_XMLNODEID_GETRID:
                        case self::SYS_XMLNODEID_GETSVAL:
                        case self::SYS_XMLNODEID_GETTID:
                        case self::SYS_XMLNODEID:
                        case self::SYS_XMLT_2_SC:
                        case self::SYS_XMLTRANSLATE:
                        case self::SYS_XMLTYPE2SQL:
                        case self::SYS_XQ_ASQLCNV:
                        case self::SYS_XQ_ATOMCNVCHK:
                        case self::SYS_XQBASEURI:
                        case self::SYS_XQCASTABLEERRH:
                        case self::SYS_XQCODEP2STR:
                        case self::SYS_XQCODEPEQ:
                        case self::SYS_XQCON2SEQ:
                        case self::SYS_XQCONCAT:
                        case self::SYS_XQDELETE:
                        case self::SYS_XQDFLTCOLATION:
                        case self::SYS_XQDOC:
                        case self::SYS_XQDOCURI:
                        case self::SYS_XQDURDIV:
                        case self::SYS_XQED4URI:
                        case self::SYS_XQENDSWITH:
                        case self::SYS_XQERRH:
                        case self::SYS_XQERR:
                        case self::SYS_XQESHTMLURI:
                        case self::SYS_XQEXLOBVAL:
                        case self::SYS_XQEXSTWRP:
                        case self::SYS_XQEXTRACT:
                        case self::SYS_XQEXTRREF:
                        case self::SYS_XQEXVAL:
                        case self::SYS_XQFB2STR:
                        case self::SYS_XQFNBOOL:
                        case self::SYS_XQFNCMP:
                        case self::SYS_XQFNDATIM:
                        case self::SYS_XQFNLNAME:
                        case self::SYS_XQFNNM:
                        case self::SYS_XQFNNSURI:
                        case self::SYS_XQFNPREDTRUTH:
                        case self::SYS_XQFNQNM:
                        case self::SYS_XQFNROOT:
                        case self::SYS_XQFORMATNUM:
                        case self::SYS_XQFTCONTAIN:
                        case self::SYS_XQFUNCR:
                        case self::SYS_XQGETCONTENT:
                        case self::SYS_XQINDXOF:
                        case self::SYS_XQINSERT:
                        case self::SYS_XQINSPFX:
                        case self::SYS_XQIRI2URI:
                        case self::SYS_XQLANG:
                        case self::SYS_XQLLNMFRMQNM:
                        case self::SYS_XQMKNODEREF:
                        case self::SYS_XQNILLED:
                        case self::SYS_XQNODENAME:
                        case self::SYS_XQNORMSPACE:
                        case self::SYS_XQNORMUCODE:
                        case self::SYS_XQ_NRNG:
                        case self::SYS_XQNSP4PFX:
                        case self::SYS_XQNSPFRMQNM:
                        case self::SYS_XQPFXFRMQNM:
                        case self::SYS_XQ_PKSQL2XML:
                        case self::SYS_XQPOLYABS:
                        case self::SYS_XQPOLYADD:
                        case self::SYS_XQPOLYCEL:
                        case self::SYS_XQPOLYCSTBL:
                        case self::SYS_XQPOLYCST:
                        case self::SYS_XQPOLYDIV:
                        case self::SYS_XQPOLYFLR:
                        case self::SYS_XQPOLYMOD:
                        case self::SYS_XQPOLYMUL:
                        case self::SYS_XQPOLYRND:
                        case self::SYS_XQPOLYSQRT:
                        case self::SYS_XQPOLYSUB:
                        case self::SYS_XQPOLYUMUS:
                        case self::SYS_XQPOLYUPLS:
                        case self::SYS_XQPOLYVEQ:
                        case self::SYS_XQPOLYVGE:
                        case self::SYS_XQPOLYVGT:
                        case self::SYS_XQPOLYVLE:
                        case self::SYS_XQPOLYVLT:
                        case self::SYS_XQPOLYVNE:
                        case self::SYS_XQREF2VAL:
                        case self::SYS_XQRENAME:
                        case self::SYS_XQREPLACE:
                        case self::SYS_XQRESVURI:
                        case self::SYS_XQRNDHALF2EVN:
                        case self::SYS_XQRSLVQNM:
                        case self::SYS_XQRYENVPGET:
                        case self::SYS_XQRYVARGET:
                        case self::SYS_XQRYWRP:
                        case self::SYS_XQSEQ2CON4XC:
                        case self::SYS_XQSEQ2CON:
                        case self::SYS_XQSEQDEEPEQ:
                        case self::SYS_XQSEQINSB:
                        case self::SYS_XQSEQRM:
                        case self::SYS_XQSEQRVS:
                        case self::SYS_XQSEQSUB:
                        case self::SYS_XQSEQTYPMATCH:
                        case self::SYS_XQSTARTSWITH:
                        case self::SYS_XQSTATBURI:
                        case self::SYS_XQSTR2CODEP:
                        case self::SYS_XQSTRJOIN:
                        case self::SYS_XQSUBSTRAFT:
                        case self::SYS_XQSUBSTRBEF:
                        case self::SYS_XQTOKENIZE:
                        case self::SYS_XQTREATAS:
                        case self::SYS_XQ_UPKXML2SQL:
                        case self::SYS_XQXFORM:
                        case self::SYS_XSID_TO_RAW:
                        case self::SYS_ZMAP_FILTER:
                        case self::SYS_ZMAP_REFRESH:
                        case self::TABLE_LOOKUP_BY_NL:
                        case self::TABLESPACE_NO:
                        case self::TABLESPACE:
                        case self::TABLES:
                        case self::TABLE_STATS:
                        case self::TABLE:
                        case self::TABNO:
                        case self::TAG:
                        case self::TANH:
                        case self::TAN:
                        case self::TBLORIDXPARTNUM:
                        case self::TEMPFILE:
                        case self::TEMPLATE:
                        case self::TEMPORARY:
                        case self::TEMP_TABLE:
                        case self::TEST:
                        case self::TEXT:
                        case self::THAN:
                        case self::THEN:
                        case self::THE:
                        case self::THREAD:
                        case self::THROUGH:
                        case self::TIER:
                        case self::TIES:
                        case self::TIMEOUT:
                        case self::TIMESTAMP_LTZ_UNCONSTRAINED:
                        case self::TIMESTAMP:
                        case self::TIMESTAMP_TZ_UNCONSTRAINED:
                        case self::TIMESTAMP_UNCONSTRAINED:
                        case self::TIMES:
                        case self::TIME:
                        case self::TIMEZONE_ABBR:
                        case self::TIMEZONE_HOUR:
                        case self::TIMEZONE_MINUTE:
                        case self::TIMEZONE_OFFSET:
                        case self::TIMEZONE_REGION:
                        case self::TIME_ZONE:
                        case self::TIV_GB:
                        case self::TIV_SSF:
                        case self::TO_ACLID:
                        case self::TO_BINARY_DOUBLE:
                        case self::TO_BINARY_FLOAT:
                        case self::TO_BLOB:
                        case self::TO_CLOB:
                        case self::TO_DSINTERVAL:
                        case self::TO_LOB:
                        case self::TO_MULTI_BYTE:
                        case self::TO_NCHAR:
                        case self::TO_NCLOB:
                        case self::TO_NUMBER:
                        case self::TOPLEVEL:
                        case self::TO_SINGLE_BYTE:
                        case self::TO_TIMESTAMP:
                        case self::TO_TIMESTAMP_TZ:
                        case self::TO_TIME:
                        case self::TO_TIME_TZ:
                        case self::TO_YMINTERVAL:
                        case self::TRACE:
                        case self::TRACING:
                        case self::TRACKING:
                        case self::TRAILING:
                        case self::TRANSACTION:
                        case self::TRANSFORM_DISTINCT_AGG:
                        case self::TRANSITIONAL:
                        case self::TRANSITION:
                        case self::TRANSLATE:
                        case self::TRANSLATION:
                        case self::TREAT:
                        case self::TRIGGERS:
                        case self::TRIGGER:
                        case self::TRUE:
                        case self::TRUNCATE:
                        case self::TRUNC:
                        case self::TRUSTED:
                        case self::TRUST:
                        case self::TUNING:
                        case self::TX:
                        case self::TYPES:
                        case self::TYPE:
                        case self::TZ_OFFSET:
                        case self::UB2:
                        case self::UBA:
                        case self::UCS2:
                        case self::UID:
                        case self::UNARCHIVED:
                        case self::UNBOUNDED:
                        case self::UNBOUND:
                        case self::UNCONDITIONAL:
                        case self::UNDER:
                        case self::UNDO:
                        case self::UNDROP:
                        case self::UNIFORM:
                        case self::UNISTR:
                        case self::UNLIMITED:
                        case self::UNLOAD:
                        case self::UNLOCK:
                        case self::UNMATCHED:
                        case self::UNNEST_INNERJ_DISTINCT_VIEW:
                        case self::UNNEST_NOSEMIJ_NODISTINCTVIEW:
                        case self::UNNEST_SEMIJ_VIEW:
                        case self::UNNEST:
                        case self::UNPACKED:
                        case self::UNPIVOT:
                        case self::UNPLUG:
                        case self::UNPROTECTED:
                        case self::UNQUIESCE:
                        case self::UNRECOVERABLE:
                        case self::UNRESTRICTED:
                        case self::UNSUBSCRIBE:
                        case self::UNTIL:
                        case self::UNUSABLE:
                        case self::UNUSED:
                        case self::UPDATABLE:
                        case self::UPDATED:
                        case self::UPDATEXML:
                        case self::UPD_INDEXES:
                        case self::UPD_JOININDEX:
                        case self::UPGRADE:
                        case self::UPPER:
                        case self::UPSERT:
                        case self::UROWID:
                        case self::USABLE:
                        case self::USAGE:
                        case self::USE_ANTI:
                        case self::USE_CONCAT:
                        case self::USE_CUBE:
                        case self::USE_HASH_AGGREGATION:
                        case self::USE_HASH_GBY_FOR_PUSHDOWN:
                        case self::USE_HASH:
                        case self::USE_HIDDEN_PARTITIONS:
                        case self::USE_INVISIBLE_INDEXES:
                        case self::USE_MERGE_CARTESIAN:
                        case self::USE_MERGE:
                        case self::USE_NL:
                        case self::USE_NL_WITH_INDEX:
                        case self::USE_PRIVATE_OUTLINES:
                        case self::USER_DATA:
                        case self::USER_DEFINED:
                        case self::USERENV:
                        case self::USERGROUP:
                        case self::USER_RECYCLEBIN:
                        case self::USERS:
                        case self::USER_TABLESPACES:
                        case self::USER:
                        case self::USE_SEMI:
                        case self::USE_STORED_OUTLINES:
                        case self::USE_TTT_FOR_GSETS:
                        case self::USE:
                        case self::USE_VECTOR_AGGREGATION:
                        case self::USE_WEAK_NAME_RESL:
                        case self::USING_NO_EXPAND:
                        case self::USING:
                        case self::UTF16BE:
                        case self::UTF16LE:
                        case self::UTF32:
                        case self::UTF8:
                        case self::V1:
                        case self::V2:
                        case self::VALIDATE:
                        case self::VALIDATION:
                        case self::VALID_TIME_END:
                        case self::VALUE:
                        case self::VARCHAR2:
                        case self::VARCHAR:
                        case self::VARIABLE:
                        case self::VAR_POP:
                        case self::VARRAYS:
                        case self::VARRAY:
                        case self::VAR_SAMP:
                        case self::VARYING:
                        case self::VECTOR_READ_TRACE:
                        case self::VECTOR_READ:
                        case self::VECTOR_TRANSFORM_DIMS:
                        case self::VECTOR_TRANSFORM_FACT:
                        case self::VECTOR_TRANSFORM:
                        case self::VERIFIER:
                        case self::VERIFY:
                        case self::VERSIONING:
                        case self::VERSIONS_ENDSCN:
                        case self::VERSIONS_ENDTIME:
                        case self::VERSIONS_OPERATION:
                        case self::VERSIONS_STARTSCN:
                        case self::VERSIONS_STARTTIME:
                        case self::VERSIONS:
                        case self::VERSIONS_XID:
                        case self::VERSION:
                        case self::VIOLATION:
                        case self::VIRTUAL:
                        case self::VISIBILITY:
                        case self::VISIBLE:
                        case self::VOLUME:
                        case self::VSIZE:
                        case self::WAIT:
                        case self::WALLET:
                        case self::WARNING:
                        case self::WEEKS:
                        case self::WEEK:
                        case self::WELLFORMED:
                        case self::WHENEVER:
                        case self::WHEN:
                        case self::WHILE:
                        case self::WHITESPACE:
                        case self::WIDTH_BUCKET:
                        case self::WITHIN:
                        case self::WITHOUT:
                        case self::WITH_PLSQL:
                        case self::WORK:
                        case self::WRAPPED:
                        case self::WRAPPER:
                        case self::WRITE:
                        case self::XDB_FASTPATH_INSERT:
                        case self::X_DYN_PRUNE:
                        case self::XID:
                        case self::XML2OBJECT:
                        case self::XMLAGG:
                        case self::XMLATTRIBUTES:
                        case self::XMLCAST:
                        case self::XMLCDATA:
                        case self::XMLCOLATTVAL:
                        case self::XMLCOMMENT:
                        case self::XMLCONCAT:
                        case self::XMLDIFF:
                        case self::XML_DML_RWT_STMT:
                        case self::XMLELEMENT:
                        case self::XMLEXISTS2:
                        case self::XMLEXISTS:
                        case self::XMLFOREST:
                        case self::XMLINDEX_REWRITE_IN_SELECT:
                        case self::XMLINDEX_REWRITE:
                        case self::XMLINDEX_SEL_IDX_TBL:
                        case self::XMLISNODE:
                        case self::XMLISVALID:
                        case self::XMLNAMESPACES:
                        case self::XMLPARSE:
                        case self::XMLPATCH:
                        case self::XMLPI:
                        case self::XMLQUERYVAL:
                        case self::XMLQUERY:
                        case self::XMLROOT:
                        case self::XMLSCHEMA:
                        case self::XMLSERIALIZE:
                        case self::XMLTABLE:
                        case self::XMLTRANSFORMBLOB:
                        case self::XMLTRANSFORM:
                        case self::XMLTYPE:
                        case self::XML:
                        case self::XPATHTABLE:
                        case self::XS_SYS_CONTEXT:
                        case self::XS:
                        case self::YEARS:
                        case self::YEAR:
                        case self::YES:
                        case self::YMINTERVAL_UNCONSTRAINED:
                        case self::ZONEMAP:
                        case self::ZONE:
                        case self::PREDICTION:
                        case self::PREDICTION_BOUNDS:
                        case self::PREDICTION_COST:
                        case self::PREDICTION_DETAILS:
                        case self::PREDICTION_PROBABILITY:
                        case self::PREDICTION_SET:
                        case self::CUME_DIST:
                        case self::DENSE_RANK:
                        case self::LISTAGG:
                        case self::PERCENT_RANK:
                        case self::PERCENTILE_CONT:
                        case self::PERCENTILE_DISC:
                        case self::RANK:
                        case self::AVG:
                        case self::CORR:
                        case self::COVAR_:
                        case self::LAG:
                        case self::LEAD:
                        case self::MAX:
                        case self::MEDIAN:
                        case self::MIN:
                        case self::NTILE:
                        case self::NVL:
                        case self::RATIO_TO_REPORT:
                        case self::REGR_:
                        case self::ROUND:
                        case self::ROW_NUMBER:
                        case self::SUBSTR:
                        case self::TO_CHAR:
                        case self::TRIM:
                        case self::SUM:
                        case self::STDDEV:
                        case self::VAR_:
                        case self::VARIANCE:
                        case self::LEAST:
                        case self::GREATEST:
                        case self::TO_DATE:
                        case self::PERIOD:
                        case self::REGULAR_ID:
                            $this->setState(3330);
                            $this->tablespace();
                            break;

                        case self::DEFAULT:
                            $this->setState(3331);
                            $this->match(self::DEFAULT);
                            break;

                        default:
                            throw new NoViableAltException($this);
                    }
                    break;

                case self::FILESYSTEM_LIKE_LOGGING:
                case self::LOGGING:
                case self::NOLOGGING:
                    $this->setState(3334);
                    $this->logging_clause();
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
    public function add_hash_index_partition(): Context\Add_hash_index_partitionContext
    {
        $localContext = new Context\Add_hash_index_partitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 244, self::RULE_add_hash_index_partition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3337);
            $this->match(self::ADD);
            $this->setState(3338);
            $this->match(self::PARTITION);
            $this->setState(3340);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 272, $this->ctx)) {
                case 1:
                    $this->setState(3339);
                    $this->partition_name();
                    break;
            }
            $this->setState(3344);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::TABLESPACE) {
                $this->setState(3342);
                $this->match(self::TABLESPACE);
                $this->setState(3343);
                $this->tablespace();
            }
            $this->setState(3347);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::COMPRESS || $_la === self::NOCOMPRESS) {
                $this->setState(3346);
                $this->key_compression();
            }
            $this->setState(3350);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::NOPARALLEL || $_la === self::PARALLEL) {
                $this->setState(3349);
                $this->parallel_clause();
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
    public function coalesce_index_partition(): Context\Coalesce_index_partitionContext
    {
        $localContext = new Context\Coalesce_index_partitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 246, self::RULE_coalesce_index_partition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3352);
            $this->match(self::COALESCE);
            $this->setState(3353);
            $this->match(self::PARTITION);
            $this->setState(3355);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::NOPARALLEL || $_la === self::PARALLEL) {
                $this->setState(3354);
                $this->parallel_clause();
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
    public function modify_index_partition(): Context\Modify_index_partitionContext
    {
        $localContext = new Context\Modify_index_partitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 248, self::RULE_modify_index_partition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3357);
            $this->match(self::MODIFY);
            $this->setState(3358);
            $this->match(self::PARTITION);
            $this->setState(3359);
            $this->partition_name();
            $this->setState(3375);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::ALLOCATE:
                case self::COMPRESS:
                case self::DEALLOCATE:
                case self::FILESYSTEM_LIKE_LOGGING:
                case self::INITRANS:
                case self::LOGGING:
                case self::NOCOMPRESS:
                case self::NOLOGGING:
                case self::PCTFREE:
                case self::PCTUSED:
                case self::STORAGE:
                    $this->setState(3361);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    do {
                        $this->setState(3360);
                        $this->modify_index_partitions_ops();
                        $this->setState(3363);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    } while ($_la === self::ALLOCATE || $_la === self::COMPRESS || $_la === self::DEALLOCATE || $_la === self::FILESYSTEM_LIKE_LOGGING || $_la === self::INITRANS || $_la === self::LOGGING || $_la === self::NOCOMPRESS || $_la === self::NOLOGGING || $_la === self::PCTFREE || $_la === self::PCTUSED || $_la === self::STORAGE);
                    break;

                case self::PARAMETERS:
                    $this->setState(3365);
                    $this->match(self::PARAMETERS);
                    $this->setState(3366);
                    $this->match(self::LEFT_PAREN);
                    $this->setState(3367);
                    $this->odci_parameters();
                    $this->setState(3368);
                    $this->match(self::RIGHT_PAREN);
                    break;

                case self::COALESCE:
                    $this->setState(3370);
                    $this->match(self::COALESCE);
                    break;

                case self::UPDATE:
                    $this->setState(3371);
                    $this->match(self::UPDATE);
                    $this->setState(3372);
                    $this->match(self::BLOCK);
                    $this->setState(3373);
                    $this->match(self::REFERENCES);
                    break;

                case self::UNUSABLE:
                    $this->setState(3374);
                    $this->match(self::UNUSABLE);
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
    public function modify_index_partitions_ops(): Context\Modify_index_partitions_opsContext
    {
        $localContext = new Context\Modify_index_partitions_opsContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 250, self::RULE_modify_index_partitions_ops);

        try {
            $this->setState(3382);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::DEALLOCATE:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3377);
                    $this->deallocate_unused_clause();
                    break;

                case self::ALLOCATE:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3378);
                    $this->allocate_extent_clause();
                    break;

                case self::INITRANS:
                case self::PCTFREE:
                case self::PCTUSED:
                case self::STORAGE:
                    $this->enterOuterAlt($localContext, 3);
                    $this->setState(3379);
                    $this->physical_attributes_clause();
                    break;

                case self::FILESYSTEM_LIKE_LOGGING:
                case self::LOGGING:
                case self::NOLOGGING:
                    $this->enterOuterAlt($localContext, 4);
                    $this->setState(3380);
                    $this->logging_clause();
                    break;

                case self::COMPRESS:
                case self::NOCOMPRESS:
                    $this->enterOuterAlt($localContext, 5);
                    $this->setState(3381);
                    $this->key_compression();
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
    public function rename_index_partition(): Context\Rename_index_partitionContext
    {
        $localContext = new Context\Rename_index_partitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 252, self::RULE_rename_index_partition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3384);
            $this->match(self::RENAME);
            $this->setState(3389);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::PARTITION:
                    $this->setState(3385);
                    $this->match(self::PARTITION);
                    $this->setState(3386);
                    $this->partition_name();
                    break;

                case self::SUBPARTITION:
                    $this->setState(3387);
                    $this->match(self::SUBPARTITION);
                    $this->setState(3388);
                    $this->subpartition_name();
                    break;

                default:
                    throw new NoViableAltException($this);
            }
            $this->setState(3391);
            $this->match(self::TO);
            $this->setState(3392);
            $this->new_partition_name();
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
    public function drop_index_partition(): Context\Drop_index_partitionContext
    {
        $localContext = new Context\Drop_index_partitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 254, self::RULE_drop_index_partition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3394);
            $this->match(self::DROP);
            $this->setState(3395);
            $this->match(self::PARTITION);
            $this->setState(3396);
            $this->partition_name();
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
    public function split_index_partition(): Context\Split_index_partitionContext
    {
        $localContext = new Context\Split_index_partitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 256, self::RULE_split_index_partition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3398);
            $this->match(self::SPLIT);
            $this->setState(3399);
            $this->match(self::PARTITION);
            $this->setState(3400);
            $this->partition_name_old();
            $this->setState(3401);
            $this->match(self::AT);
            $this->setState(3402);
            $this->match(self::LEFT_PAREN);
            $this->setState(3403);
            $this->literal();
            $this->setState(3408);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMMA) {
                $this->setState(3404);
                $this->match(self::COMMA);
                $this->setState(3405);
                $this->literal();
                $this->setState(3410);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3411);
            $this->match(self::RIGHT_PAREN);
            $this->setState(3419);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::INTO) {
                $this->setState(3412);
                $this->match(self::INTO);
                $this->setState(3413);
                $this->match(self::LEFT_PAREN);
                $this->setState(3414);
                $this->index_partition_description();
                $this->setState(3415);
                $this->match(self::COMMA);
                $this->setState(3416);
                $this->index_partition_description();
                $this->setState(3417);
                $this->match(self::RIGHT_PAREN);
            }
            $this->setState(3422);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::NOPARALLEL || $_la === self::PARALLEL) {
                $this->setState(3421);
                $this->parallel_clause();
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
    public function index_partition_description(): Context\Index_partition_descriptionContext
    {
        $localContext = new Context\Index_partition_descriptionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 258, self::RULE_index_partition_description);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3424);
            $this->match(self::PARTITION);
            $this->setState(3442);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::ABORT) | (1 << self::ABS) | (1 << self::ACCESS) | (1 << self::ACCESSED) | (1 << self::ACCOUNT) | (1 << self::ACL) | (1 << self::ACOS) | (1 << self::ACTION) | (1 << self::ACTIONS) | (1 << self::ACTIVATE) | (1 << self::ACTIVE) | (1 << self::ACTIVE_COMPONENT) | (1 << self::ACTIVE_DATA) | (1 << self::ACTIVE_FUNCTION) | (1 << self::ACTIVE_TAG) | (1 << self::ACTIVITY) | (1 << self::ADAPTIVE_PLAN) | (1 << self::ADD) | (1 << self::ADD_COLUMN) | (1 << self::ADD_GROUP) | (1 << self::ADD_MONTHS) | (1 << self::ADJ_DATE) | (1 << self::ADMIN) | (1 << self::ADMINISTER) | (1 << self::ADMINISTRATOR) | (1 << self::ADVANCED) | (1 << self::ADVISE) | (1 << self::ADVISOR) | (1 << self::AFD_DISKSTRING) | (1 << self::AFTER) | (1 << self::AGENT) | (1 << self::AGGREGATE) | (1 << self::A_LETTER) | (1 << self::ALIAS) | (1 << self::ALLOCATE) | (1 << self::ALLOW) | (1 << self::ALL_ROWS) | (1 << self::ALWAYS) | (1 << self::ANALYZE) | (1 << self::ANCILLARY) | (1 << self::AND_EQUAL) | (1 << self::ANOMALY) | (1 << self::ANSI_REARCH) | (1 << self::ANTIJOIN) | (1 << self::ANYSCHEMA) | (1 << self::APPEND) | (1 << self::APPENDCHILDXML) | (1 << self::APPEND_VALUES) | (1 << self::APPLICATION) | (1 << self::APPLY) | (1 << self::APPROX_COUNT_DISTINCT) | (1 << self::ARCHIVAL) | (1 << self::ARCHIVE) | (1 << self::ARCHIVED) | (1 << self::ARCHIVELOG) | (1 << self::ARRAY) | (1 << self::ASCII))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::ASCIISTR - 64)) | (1 << (self::ASIN - 64)) | (1 << (self::ASIS - 64)) | (1 << (self::ASSEMBLY - 64)) | (1 << (self::ASSIGN - 64)) | (1 << (self::ASSOCIATE - 64)) | (1 << (self::ASYNC - 64)) | (1 << (self::ASYNCHRONOUS - 64)) | (1 << (self::ATAN2 - 64)) | (1 << (self::ATAN - 64)) | (1 << (self::AT - 64)) | (1 << (self::ATTRIBUTE - 64)) | (1 << (self::ATTRIBUTES - 64)) | (1 << (self::AUTHENTICATED - 64)) | (1 << (self::AUTHENTICATION - 64)) | (1 << (self::AUTHID - 64)) | (1 << (self::AUTHORIZATION - 64)) | (1 << (self::AUTOALLOCATE - 64)) | (1 << (self::AUTO - 64)) | (1 << (self::AUTOEXTEND - 64)) | (1 << (self::AUTO_LOGIN - 64)) | (1 << (self::AUTOMATIC - 64)) | (1 << (self::AUTONOMOUS_TRANSACTION - 64)) | (1 << (self::AUTO_REOPTIMIZE - 64)) | (1 << (self::AVAILABILITY - 64)) | (1 << (self::AVRO - 64)) | (1 << (self::BACKGROUND - 64)) | (1 << (self::BACKUP - 64)) | (1 << (self::BASIC - 64)) | (1 << (self::BASICFILE - 64)) | (1 << (self::BATCH - 64)) | (1 << (self::BATCHSIZE - 64)) | (1 << (self::BATCH_TABLE_ACCESS_BY_ROWID - 64)) | (1 << (self::BECOME - 64)) | (1 << (self::BEFORE - 64)) | (1 << (self::BEGIN - 64)) | (1 << (self::BEGINNING - 64)) | (1 << (self::BEGIN_OUTLINE_DATA - 64)) | (1 << (self::BEHALF - 64)) | (1 << (self::BEQUEATH - 64)) | (1 << (self::BFILE - 64)) | (1 << (self::BFILENAME - 64)) | (1 << (self::BIGFILE - 64)) | (1 << (self::BINARY - 64)) | (1 << (self::BINARY_DOUBLE - 64)) | (1 << (self::BINARY_DOUBLE_INFINITY - 64)) | (1 << (self::BINARY_DOUBLE_NAN - 64)) | (1 << (self::BINARY_FLOAT - 64)) | (1 << (self::BINARY_FLOAT_INFINITY - 64)) | (1 << (self::BINARY_FLOAT_NAN - 64)) | (1 << (self::BINARY_INTEGER - 64)) | (1 << (self::BIND_AWARE - 64)) | (1 << (self::BINDING - 64)) | (1 << (self::BIN_TO_NUM - 64)) | (1 << (self::BITAND - 64)) | (1 << (self::BITMAP_AND - 64)) | (1 << (self::BITMAP - 64)) | (1 << (self::BITMAPS - 64)) | (1 << (self::BITMAP_TREE - 64)) | (1 << (self::BITS - 64)))) !== 0) || (((($_la - 128)) & ~0x3f) === 0 && ((1 << ($_la - 128)) & ((1 << (self::BLOB - 128)) | (1 << (self::BLOCK - 128)) | (1 << (self::BLOCK_RANGE - 128)) | (1 << (self::BLOCKS - 128)) | (1 << (self::BLOCKSIZE - 128)) | (1 << (self::BODY - 128)) | (1 << (self::BOOLEAN - 128)) | (1 << (self::BOTH - 128)) | (1 << (self::BOUND - 128)) | (1 << (self::BRANCH - 128)) | (1 << (self::BREADTH - 128)) | (1 << (self::BROADCAST - 128)) | (1 << (self::BSON - 128)) | (1 << (self::BUFFER - 128)) | (1 << (self::BUFFER_CACHE - 128)) | (1 << (self::BUFFER_POOL - 128)) | (1 << (self::BUILD - 128)) | (1 << (self::BULK - 128)) | (1 << (self::BYPASS_RECURSIVE_CHECK - 128)) | (1 << (self::BYPASS_UJVC - 128)) | (1 << (self::BYTE - 128)) | (1 << (self::CACHE - 128)) | (1 << (self::CACHE_CB - 128)) | (1 << (self::CACHE_INSTANCES - 128)) | (1 << (self::CACHE_TEMP_TABLE - 128)) | (1 << (self::CACHING - 128)) | (1 << (self::CALCULATED - 128)) | (1 << (self::CALLBACK - 128)) | (1 << (self::CALL - 128)) | (1 << (self::CANCEL - 128)) | (1 << (self::CAPACITY - 128)) | (1 << (self::CARDINALITY - 128)) | (1 << (self::CASCADE - 128)) | (1 << (self::CASE - 128)) | (1 << (self::CAST - 128)) | (1 << (self::CATEGORY - 128)) | (1 << (self::CDBDEFAULT - 128)) | (1 << (self::CEIL - 128)) | (1 << (self::CELL_FLASH_CACHE - 128)) | (1 << (self::CERTIFICATE - 128)) | (1 << (self::CFILE - 128)) | (1 << (self::CHAINED - 128)) | (1 << (self::CHANGE - 128)) | (1 << (self::CHANGE_DUPKEY_ERROR_INDEX - 128)) | (1 << (self::CHARACTER - 128)) | (1 << (self::CHAR - 128)) | (1 << (self::CHAR_CS - 128)) | (1 << (self::CHARTOROWID - 128)) | (1 << (self::CHECK_ACL_REWRITE - 128)) | (1 << (self::CHECKPOINT - 128)) | (1 << (self::CHILD - 128)) | (1 << (self::CHOOSE - 128)) | (1 << (self::CHR - 128)) | (1 << (self::CHUNK - 128)) | (1 << (self::CLASS - 128)) | (1 << (self::CLASSIFIER - 128)) | (1 << (self::CLEANUP - 128)) | (1 << (self::CLEAR - 128)) | (1 << (self::C_LETTER - 128)) | (1 << (self::CLIENT - 128)))) !== 0) || (((($_la - 192)) & ~0x3f) === 0 && ((1 << ($_la - 192)) & ((1 << (self::CLOB - 192)) | (1 << (self::CLONE - 192)) | (1 << (self::CLOSE_CACHED_OPEN_CURSORS - 192)) | (1 << (self::CLOSE - 192)) | (1 << (self::CLUSTER_BY_ROWID - 192)) | (1 << (self::CLUSTER - 192)) | (1 << (self::CLUSTER_DETAILS - 192)) | (1 << (self::CLUSTER_DISTANCE - 192)) | (1 << (self::CLUSTER_ID - 192)) | (1 << (self::CLUSTERING - 192)) | (1 << (self::CLUSTERING_FACTOR - 192)) | (1 << (self::CLUSTER_PROBABILITY - 192)) | (1 << (self::CLUSTER_SET - 192)) | (1 << (self::COALESCE - 192)) | (1 << (self::COALESCE_SQ - 192)) | (1 << (self::COARSE - 192)) | (1 << (self::CO_AUTH_IND - 192)) | (1 << (self::COLD - 192)) | (1 << (self::COLLECT - 192)) | (1 << (self::COLUMNAR - 192)) | (1 << (self::COLUMN_AUTH_INDICATOR - 192)) | (1 << (self::COLUMN - 192)) | (1 << (self::COLUMNS - 192)) | (1 << (self::COLUMN_STATS - 192)) | (1 << (self::COLUMN_VALUE - 192)) | (1 << (self::COMMENT - 192)) | (1 << (self::COMMIT - 192)) | (1 << (self::COMMITTED - 192)) | (1 << (self::COMMON_DATA - 192)) | (1 << (self::COMPACT - 192)) | (1 << (self::COMPATIBILITY - 192)) | (1 << (self::COMPILE - 192)) | (1 << (self::COMPLETE - 192)) | (1 << (self::COMPLIANCE - 192)) | (1 << (self::COMPONENT - 192)) | (1 << (self::COMPONENTS - 192)) | (1 << (self::COMPOSE - 192)) | (1 << (self::COMPOSITE - 192)) | (1 << (self::COMPOSITE_LIMIT - 192)) | (1 << (self::COMPOUND - 192)) | (1 << (self::COMPUTE - 192)) | (1 << (self::CONCAT - 192)) | (1 << (self::CON_DBID_TO_ID - 192)) | (1 << (self::CONDITIONAL - 192)) | (1 << (self::CONDITION - 192)) | (1 << (self::CONFIRM - 192)) | (1 << (self::CONFORMING - 192)) | (1 << (self::CON_GUID_TO_ID - 192)) | (1 << (self::CON_ID - 192)) | (1 << (self::CON_NAME_TO_ID - 192)) | (1 << (self::CONNECT_BY_CB_WHR_ONLY - 192)) | (1 << (self::CONNECT_BY_COMBINE_SW - 192)) | (1 << (self::CONNECT_BY_COST_BASED - 192)) | (1 << (self::CONNECT_BY_ELIM_DUPS - 192)) | (1 << (self::CONNECT_BY_FILTERING - 192)) | (1 << (self::CONNECT_BY_ISCYCLE - 192)) | (1 << (self::CONNECT_BY_ISLEAF - 192)) | (1 << (self::CONNECT_BY_ROOT - 192)) | (1 << (self::CONNECT_TIME - 192)) | (1 << (self::CONSIDER - 192)) | (1 << (self::CONSISTENT - 192)) | (1 << (self::CONSTANT - 192)))) !== 0) || (((($_la - 256)) & ~0x3f) === 0 && ((1 << ($_la - 256)) & ((1 << (self::CONST - 256)) | (1 << (self::CONSTRAINT - 256)) | (1 << (self::CONSTRAINTS - 256)) | (1 << (self::CONSTRUCTOR - 256)) | (1 << (self::CONTAINER - 256)) | (1 << (self::CONTAINER_DATA - 256)) | (1 << (self::CONTAINERS - 256)) | (1 << (self::CONTENT - 256)) | (1 << (self::CONTENTS - 256)) | (1 << (self::CONTEXT - 256)) | (1 << (self::CONTINUE - 256)) | (1 << (self::CONTROLFILE - 256)) | (1 << (self::CON_UID_TO_ID - 256)) | (1 << (self::CONVERT - 256)) | (1 << (self::COOKIE - 256)) | (1 << (self::COPY - 256)) | (1 << (self::CORR_K - 256)) | (1 << (self::CORR_S - 256)) | (1 << (self::CORRUPTION - 256)) | (1 << (self::CORRUPT_XID_ALL - 256)) | (1 << (self::CORRUPT_XID - 256)) | (1 << (self::COS - 256)) | (1 << (self::COSH - 256)) | (1 << (self::COST - 256)) | (1 << (self::COST_XML_QUERY_REWRITE - 256)) | (1 << (self::COUNT - 256)) | (1 << (self::COVAR_POP - 256)) | (1 << (self::COVAR_SAMP - 256)) | (1 << (self::CPU_COSTING - 256)) | (1 << (self::CPU_PER_CALL - 256)) | (1 << (self::CPU_PER_SESSION - 256)) | (1 << (self::CRASH - 256)) | (1 << (self::CREATE_FILE_DEST - 256)) | (1 << (self::CREATE_STORED_OUTLINES - 256)) | (1 << (self::CREATION - 256)) | (1 << (self::CREDENTIAL - 256)) | (1 << (self::CRITICAL - 256)) | (1 << (self::CROSS - 256)) | (1 << (self::CROSSEDITION - 256)) | (1 << (self::CSCONVERT - 256)) | (1 << (self::CUBE_AJ - 256)) | (1 << (self::CUBE - 256)) | (1 << (self::CUBE_GB - 256)) | (1 << (self::CUBE_SJ - 256)) | (1 << (self::CUME_DISTM - 256)) | (1 << (self::CURRENT - 256)) | (1 << (self::CURRENT_DATE - 256)) | (1 << (self::CURRENT_SCHEMA - 256)) | (1 << (self::CURRENT_TIME - 256)) | (1 << (self::CURRENT_TIMESTAMP - 256)) | (1 << (self::CURRENT_USER - 256)) | (1 << (self::CURRENTV - 256)) | (1 << (self::CURSOR - 256)) | (1 << (self::CURSOR_SHARING_EXACT - 256)) | (1 << (self::CURSOR_SPECIFIC_SEGMENT - 256)) | (1 << (self::CUSTOMDATUM - 256)) | (1 << (self::CV - 256)) | (1 << (self::CYCLE - 256)) | (1 << (self::DANGLING - 256)) | (1 << (self::DATABASE - 256)) | (1 << (self::DATA - 256)) | (1 << (self::DATAFILE - 256)) | (1 << (self::DATAFILES - 256)))) !== 0) || (((($_la - 321)) & ~0x3f) === 0 && ((1 << ($_la - 321)) & ((1 << (self::DATAMOVEMENT - 321)) | (1 << (self::DATAOBJNO - 321)) | (1 << (self::DATAOBJ_TO_MAT_PARTITION - 321)) | (1 << (self::DATAOBJ_TO_PARTITION - 321)) | (1 << (self::DATAPUMP - 321)) | (1 << (self::DATA_SECURITY_REWRITE_LIMIT - 321)) | (1 << (self::DATE_MODE - 321)) | (1 << (self::DAY - 321)) | (1 << (self::DAYS - 321)) | (1 << (self::DBA - 321)) | (1 << (self::DBA_RECYCLEBIN - 321)) | (1 << (self::DBMS_STATS - 321)) | (1 << (self::DB_ROLE_CHANGE - 321)) | (1 << (self::DBTIMEZONE - 321)) | (1 << (self::DB_UNIQUE_NAME - 321)) | (1 << (self::DB_VERSION - 321)) | (1 << (self::DDL - 321)) | (1 << (self::DEALLOCATE - 321)) | (1 << (self::DEBUG - 321)) | (1 << (self::DEBUGGER - 321)) | (1 << (self::DEC - 321)) | (1 << (self::DECIMAL - 321)) | (1 << (self::DECLARE - 321)) | (1 << (self::DECOMPOSE - 321)) | (1 << (self::DECORRELATE - 321)) | (1 << (self::DECR - 321)) | (1 << (self::DECREMENT - 321)) | (1 << (self::DECRYPT - 321)) | (1 << (self::DEDUPLICATE - 321)) | (1 << (self::DEFAULTS - 321)) | (1 << (self::DEFERRABLE - 321)) | (1 << (self::DEFERRED - 321)) | (1 << (self::DEFINED - 321)) | (1 << (self::DEFINE - 321)) | (1 << (self::DEFINER - 321)) | (1 << (self::DEGREE - 321)) | (1 << (self::DELAY - 321)) | (1 << (self::DELEGATE - 321)) | (1 << (self::DELETE_ALL - 321)) | (1 << (self::DELETE - 321)) | (1 << (self::DELETEXML - 321)) | (1 << (self::DEMAND - 321)) | (1 << (self::DENSE_RANKM - 321)) | (1 << (self::DEPENDENT - 321)) | (1 << (self::DEPTH - 321)) | (1 << (self::DEQUEUE - 321)) | (1 << (self::DEREF - 321)) | (1 << (self::DEREF_NO_REWRITE - 321)) | (1 << (self::DESTROY - 321)) | (1 << (self::DETACHED - 321)) | (1 << (self::DETERMINES - 321)) | (1 << (self::DETERMINISTIC - 321)) | (1 << (self::DICTIONARY - 321)) | (1 << (self::DIMENSION - 321)) | (1 << (self::DIMENSIONS - 321)) | (1 << (self::DIRECT_LOAD - 321)) | (1 << (self::DIRECTORY - 321)) | (1 << (self::DIRECT_PATH - 321)) | (1 << (self::DISABLE_ALL - 321)) | (1 << (self::DISABLE - 321)) | (1 << (self::DISABLE_PARALLEL_DML - 321)))) !== 0) || (((($_la - 385)) & ~0x3f) === 0 && ((1 << ($_la - 385)) & ((1 << (self::DISABLE_PRESET - 385)) | (1 << (self::DISABLE_RPKE - 385)) | (1 << (self::DISALLOW - 385)) | (1 << (self::DISASSOCIATE - 385)) | (1 << (self::DISCARD - 385)) | (1 << (self::DISCONNECT - 385)) | (1 << (self::DISK - 385)) | (1 << (self::DISKGROUP - 385)) | (1 << (self::DISKS - 385)) | (1 << (self::DISMOUNT - 385)) | (1 << (self::DISTINGUISHED - 385)) | (1 << (self::DISTRIBUTED - 385)) | (1 << (self::DISTRIBUTE - 385)) | (1 << (self::DML - 385)) | (1 << (self::DML_UPDATE - 385)) | (1 << (self::DOCFIDELITY - 385)) | (1 << (self::DOCUMENT - 385)) | (1 << (self::DOMAIN_INDEX_FILTER - 385)) | (1 << (self::DOMAIN_INDEX_NO_SORT - 385)) | (1 << (self::DOMAIN_INDEX_SORT - 385)) | (1 << (self::DOUBLE - 385)) | (1 << (self::DOWNGRADE - 385)) | (1 << (self::DRIVING_SITE - 385)) | (1 << (self::DROP_COLUMN - 385)) | (1 << (self::DROP_GROUP - 385)) | (1 << (self::DSINTERVAL_UNCONSTRAINED - 385)) | (1 << (self::DST_UPGRADE_INSERT_CONV - 385)) | (1 << (self::DUMP - 385)) | (1 << (self::DUPLICATE - 385)) | (1 << (self::DV - 385)) | (1 << (self::DYNAMIC - 385)) | (1 << (self::DYNAMIC_SAMPLING - 385)) | (1 << (self::DYNAMIC_SAMPLING_EST_CDN - 385)) | (1 << (self::EACH - 385)) | (1 << (self::EDITIONABLE - 385)) | (1 << (self::EDITION - 385)) | (1 << (self::EDITIONING - 385)) | (1 << (self::EDITIONS - 385)) | (1 << (self::ELEMENT - 385)) | (1 << (self::ELIM_GROUPBY - 385)) | (1 << (self::ELIMINATE_JOIN - 385)) | (1 << (self::ELIMINATE_OBY - 385)) | (1 << (self::ELIMINATE_OUTER_JOIN - 385)) | (1 << (self::EM - 385)) | (1 << (self::EMPTY_BLOB - 385)) | (1 << (self::EMPTY_CLOB - 385)) | (1 << (self::EMPTY - 385)) | (1 << (self::ENABLE_ALL - 385)) | (1 << (self::ENABLE - 385)) | (1 << (self::ENABLE_PARALLEL_DML - 385)) | (1 << (self::ENABLE_PRESET - 385)) | (1 << (self::ENCODING - 385)) | (1 << (self::ENCRYPT - 385)) | (1 << (self::ENCRYPTION - 385)) | (1 << (self::END_OUTLINE_DATA - 385)) | (1 << (self::ENFORCED - 385)) | (1 << (self::ENFORCE - 385)))) !== 0) || (((($_la - 449)) & ~0x3f) === 0 && ((1 << ($_la - 449)) & ((1 << (self::ENQUEUE - 449)) | (1 << (self::ENTERPRISE - 449)) | (1 << (self::ENTITYESCAPING - 449)) | (1 << (self::ENTRY - 449)) | (1 << (self::EQUIPART - 449)) | (1 << (self::ERR - 449)) | (1 << (self::ERROR_ARGUMENT - 449)) | (1 << (self::ERROR - 449)) | (1 << (self::ERROR_ON_OVERLAP_TIME - 449)) | (1 << (self::ERRORS - 449)) | (1 << (self::ESCAPE - 449)) | (1 << (self::ESTIMATE - 449)) | (1 << (self::EVAL - 449)) | (1 << (self::EVALNAME - 449)) | (1 << (self::EVALUATE - 449)) | (1 << (self::EVALUATION - 449)) | (1 << (self::EVENTS - 449)) | (1 << (self::EVERY - 449)) | (1 << (self::EXCEPT - 449)) | (1 << (self::EXCEPTION - 449)) | (1 << (self::EXCEPTION_INIT - 449)) | (1 << (self::EXCEPTIONS - 449)) | (1 << (self::EXCHANGE - 449)) | (1 << (self::EXCLUDE - 449)) | (1 << (self::EXCLUDING - 449)) | (1 << (self::EXECUTE - 449)) | (1 << (self::EXEMPT - 449)) | (1 << (self::EXISTING - 449)) | (1 << (self::EXISTS - 449)) | (1 << (self::EXISTSNODE - 449)) | (1 << (self::EXIT - 449)) | (1 << (self::EXPAND_GSET_TO_UNION - 449)) | (1 << (self::EXPAND_TABLE - 449)) | (1 << (self::EXP - 449)) | (1 << (self::EXPIRE - 449)) | (1 << (self::EXPLAIN - 449)) | (1 << (self::EXPLOSION - 449)) | (1 << (self::EXPORT - 449)) | (1 << (self::EXPR_CORR_CHECK - 449)) | (1 << (self::EXPRESS - 449)) | (1 << (self::EXTENDS - 449)) | (1 << (self::EXTENT - 449)) | (1 << (self::EXTENTS - 449)) | (1 << (self::EXTERNAL - 449)) | (1 << (self::EXTERNALLY - 449)) | (1 << (self::EXTRACTCLOBXML - 449)) | (1 << (self::EXTRACT - 449)) | (1 << (self::EXTRACTVALUE - 449)) | (1 << (self::EXTRA - 449)) | (1 << (self::FACILITY - 449)) | (1 << (self::FACT - 449)) | (1 << (self::FACTOR - 449)) | (1 << (self::FACTORIZE_JOIN - 449)) | (1 << (self::FAILED - 449)) | (1 << (self::FAILED_LOGIN_ATTEMPTS - 449)) | (1 << (self::FAILGROUP - 449)) | (1 << (self::FAILOVER - 449)) | (1 << (self::FAILURE - 449)) | (1 << (self::FALSE - 449)) | (1 << (self::FAMILY - 449)) | (1 << (self::FAR - 449)) | (1 << (self::FAST - 449)) | (1 << (self::FASTSTART - 449)))) !== 0) || (((($_la - 513)) & ~0x3f) === 0 && ((1 << ($_la - 513)) & ((1 << (self::FBTSCAN - 513)) | (1 << (self::FEATURE_DETAILS - 513)) | (1 << (self::FEATURE_ID - 513)) | (1 << (self::FEATURE_SET - 513)) | (1 << (self::FEATURE_VALUE - 513)) | (1 << (self::FETCH - 513)) | (1 << (self::FILE - 513)) | (1 << (self::FILE_NAME_CONVERT - 513)) | (1 << (self::FILESYSTEM_LIKE_LOGGING - 513)) | (1 << (self::FILTER - 513)) | (1 << (self::FINAL - 513)) | (1 << (self::FINE - 513)) | (1 << (self::FINISH - 513)) | (1 << (self::FIRST - 513)) | (1 << (self::FIRSTM - 513)) | (1 << (self::FIRST_ROWS - 513)) | (1 << (self::FIRST_VALUE - 513)) | (1 << (self::FIXED_VIEW_DATA - 513)) | (1 << (self::FLAGGER - 513)) | (1 << (self::FLASHBACK - 513)) | (1 << (self::FLASH_CACHE - 513)) | (1 << (self::FLOAT - 513)) | (1 << (self::FLOB - 513)) | (1 << (self::FLOOR - 513)) | (1 << (self::FLUSH - 513)) | (1 << (self::FOLDER - 513)) | (1 << (self::FOLLOWING - 513)) | (1 << (self::FOLLOWS - 513)) | (1 << (self::FORALL - 513)) | (1 << (self::FORCE - 513)) | (1 << (self::FORCE_XML_QUERY_REWRITE - 513)) | (1 << (self::FOREIGN - 513)) | (1 << (self::FOREVER - 513)) | (1 << (self::FORMAT - 513)) | (1 << (self::FORWARD - 513)) | (1 << (self::FRAGMENT_NUMBER - 513)) | (1 << (self::FREELIST - 513)) | (1 << (self::FREELISTS - 513)) | (1 << (self::FREEPOOLS - 513)) | (1 << (self::FRESH - 513)) | (1 << (self::FROM_TZ - 513)) | (1 << (self::FULL - 513)) | (1 << (self::FULL_OUTER_JOIN_TO_OUTER - 513)) | (1 << (self::FUNCTION - 513)) | (1 << (self::FUNCTIONS - 513)) | (1 << (self::GATHER_OPTIMIZER_STATISTICS - 513)) | (1 << (self::GATHER_PLAN_STATISTICS - 513)) | (1 << (self::GBY_CONC_ROLLUP - 513)) | (1 << (self::GBY_PUSHDOWN - 513)) | (1 << (self::GENERATED - 513)) | (1 << (self::GET - 513)) | (1 << (self::GLOBAL - 513)) | (1 << (self::GLOBALLY - 513)) | (1 << (self::GLOBAL_NAME - 513)) | (1 << (self::GLOBAL_TOPIC_ENABLED - 513)) | (1 << (self::GROUP_BY - 513)) | (1 << (self::GROUP_ID - 513)) | (1 << (self::GROUPING - 513)) | (1 << (self::GROUPING_ID - 513)))) !== 0) || (((($_la - 577)) & ~0x3f) === 0 && ((1 << ($_la - 577)) & ((1 << (self::GROUPS - 577)) | (1 << (self::GUARANTEED - 577)) | (1 << (self::GUARANTEE - 577)) | (1 << (self::GUARD - 577)) | (1 << (self::HASH_AJ - 577)) | (1 << (self::HASH - 577)) | (1 << (self::HASHKEYS - 577)) | (1 << (self::HASH_SJ - 577)) | (1 << (self::HEADER - 577)) | (1 << (self::HEAP - 577)) | (1 << (self::HELP - 577)) | (1 << (self::HEXTORAW - 577)) | (1 << (self::HEXTOREF - 577)) | (1 << (self::HIDDEN_KEYWORD - 577)) | (1 << (self::HIDE - 577)) | (1 << (self::HIERARCHY - 577)) | (1 << (self::HIGH - 577)) | (1 << (self::HINTSET_BEGIN - 577)) | (1 << (self::HINTSET_END - 577)) | (1 << (self::HOT - 577)) | (1 << (self::HOUR - 577)) | (1 << (self::HWM_BROKERED - 577)) | (1 << (self::HYBRID - 577)) | (1 << (self::IDENTIFIER - 577)) | (1 << (self::IDENTITY - 577)) | (1 << (self::IDGENERATORS - 577)) | (1 << (self::ID - 577)) | (1 << (self::IDLE_TIME - 577)) | (1 << (self::IF - 577)) | (1 << (self::IGNORE - 577)) | (1 << (self::IGNORE_OPTIM_EMBEDDED_HINTS - 577)) | (1 << (self::IGNORE_ROW_ON_DUPKEY_INDEX - 577)) | (1 << (self::IGNORE_WHERE_CLAUSE - 577)) | (1 << (self::ILM - 577)) | (1 << (self::IMMEDIATE - 577)) | (1 << (self::IMPACT - 577)) | (1 << (self::IMPORT - 577)) | (1 << (self::INACTIVE - 577)) | (1 << (self::INCLUDE - 577)) | (1 << (self::INCLUDE_VERSION - 577)) | (1 << (self::INCLUDING - 577)) | (1 << (self::INCREMENTAL - 577)) | (1 << (self::INCREMENT - 577)) | (1 << (self::INCR - 577)) | (1 << (self::INDENT - 577)) | (1 << (self::INDEX_ASC - 577)) | (1 << (self::INDEX_COMBINE - 577)) | (1 << (self::INDEX_DESC - 577)) | (1 << (self::INDEXED - 577)) | (1 << (self::INDEXES - 577)) | (1 << (self::INDEX_FFS - 577)) | (1 << (self::INDEX_FILTER - 577)) | (1 << (self::INDEXING - 577)) | (1 << (self::INDEX_JOIN - 577)) | (1 << (self::INDEX_ROWS - 577)) | (1 << (self::INDEX_RRS - 577)) | (1 << (self::INDEX_RS_ASC - 577)) | (1 << (self::INDEX_RS_DESC - 577)) | (1 << (self::INDEX_RS - 577)) | (1 << (self::INDEX_SCAN - 577)) | (1 << (self::INDEX_SKIP_SCAN - 577)))) !== 0) || (((($_la - 641)) & ~0x3f) === 0 && ((1 << ($_la - 641)) & ((1 << (self::INDEX_SS_ASC - 641)) | (1 << (self::INDEX_SS_DESC - 641)) | (1 << (self::INDEX_SS - 641)) | (1 << (self::INDEX_STATS - 641)) | (1 << (self::INDEXTYPE - 641)) | (1 << (self::INDEXTYPES - 641)) | (1 << (self::INDICATOR - 641)) | (1 << (self::INDICES - 641)) | (1 << (self::INFINITE - 641)) | (1 << (self::INFORMATIONAL - 641)) | (1 << (self::INHERIT - 641)) | (1 << (self::INITCAP - 641)) | (1 << (self::INITIAL - 641)) | (1 << (self::INITIALIZED - 641)) | (1 << (self::INITIALLY - 641)) | (1 << (self::INITRANS - 641)) | (1 << (self::INLINE - 641)) | (1 << (self::INLINE_XMLTYPE_NT - 641)) | (1 << (self::INMEMORY - 641)) | (1 << (self::IN_MEMORY_METADATA - 641)) | (1 << (self::INMEMORY_PRUNING - 641)) | (1 << (self::INNER - 641)) | (1 << (self::INOUT - 641)) | (1 << (self::INPLACE - 641)) | (1 << (self::INSERTCHILDXMLAFTER - 641)) | (1 << (self::INSERTCHILDXMLBEFORE - 641)) | (1 << (self::INSERTCHILDXML - 641)) | (1 << (self::INSERTXMLAFTER - 641)) | (1 << (self::INSERTXMLBEFORE - 641)) | (1 << (self::INSTANCE - 641)) | (1 << (self::INSTANCES - 641)) | (1 << (self::INSTANTIABLE - 641)) | (1 << (self::INSTANTLY - 641)) | (1 << (self::INSTEAD - 641)) | (1 << (self::INSTR2 - 641)) | (1 << (self::INSTR4 - 641)) | (1 << (self::INSTRB - 641)) | (1 << (self::INSTRC - 641)) | (1 << (self::INSTR - 641)) | (1 << (self::INTEGER - 641)) | (1 << (self::INTERLEAVED - 641)) | (1 << (self::INTERMEDIATE - 641)) | (1 << (self::INTERNAL_CONVERT - 641)) | (1 << (self::INTERNAL_USE - 641)) | (1 << (self::INTERPRETED - 641)) | (1 << (self::INTERVAL - 641)) | (1 << (self::INT - 641)) | (1 << (self::INVALIDATE - 641)) | (1 << (self::INVISIBLE - 641)) | (1 << (self::IN_XQUERY - 641)) | (1 << (self::ISOLATION - 641)) | (1 << (self::ISOLATION_LEVEL - 641)) | (1 << (self::ITERATE - 641)) | (1 << (self::ITERATION_NUMBER - 641)) | (1 << (self::JAVA - 641)) | (1 << (self::JOB - 641)) | (1 << (self::JOIN - 641)) | (1 << (self::JSON_ARRAYAGG - 641)) | (1 << (self::JSON_ARRAY - 641)))) !== 0) || (((($_la - 705)) & ~0x3f) === 0 && ((1 << ($_la - 705)) & ((1 << (self::JSON_EQUAL - 705)) | (1 << (self::JSON_EXISTS2 - 705)) | (1 << (self::JSON_EXISTS - 705)) | (1 << (self::JSONGET - 705)) | (1 << (self::JSON - 705)) | (1 << (self::JSON_OBJECTAGG - 705)) | (1 << (self::JSON_OBJECT - 705)) | (1 << (self::JSONPARSE - 705)) | (1 << (self::JSON_QUERY - 705)) | (1 << (self::JSON_SERIALIZE - 705)) | (1 << (self::JSON_TABLE - 705)) | (1 << (self::JSON_TEXTCONTAINS2 - 705)) | (1 << (self::JSON_TEXTCONTAINS - 705)) | (1 << (self::JSON_VALUE - 705)) | (1 << (self::KEEP_DUPLICATES - 705)) | (1 << (self::KEEP - 705)) | (1 << (self::KERBEROS - 705)) | (1 << (self::KEY - 705)) | (1 << (self::KEY_LENGTH - 705)) | (1 << (self::KEYSIZE - 705)) | (1 << (self::KEYS - 705)) | (1 << (self::KEYSTORE - 705)) | (1 << (self::KILL - 705)) | (1 << (self::LABEL - 705)) | (1 << (self::LANGUAGE - 705)) | (1 << (self::LAST_DAY - 705)) | (1 << (self::LAST - 705)) | (1 << (self::LAST_VALUE - 705)) | (1 << (self::LATERAL - 705)) | (1 << (self::LAX - 705)) | (1 << (self::LAYER - 705)) | (1 << (self::LDAP_REGISTRATION_ENABLED - 705)) | (1 << (self::LDAP_REGISTRATION - 705)) | (1 << (self::LDAP_REG_SYNC_INTERVAL - 705)) | (1 << (self::LEADING - 705)) | (1 << (self::LEFT - 705)) | (1 << (self::LENGTH2 - 705)) | (1 << (self::LENGTH4 - 705)) | (1 << (self::LENGTHB - 705)) | (1 << (self::LENGTHC - 705)) | (1 << (self::LENGTH - 705)) | (1 << (self::LESS - 705)) | (1 << (self::LEVEL - 705)) | (1 << (self::LEVELS - 705)) | (1 << (self::LIBRARY - 705)) | (1 << (self::LIFECYCLE - 705)) | (1 << (self::LIFE - 705)) | (1 << (self::LIFETIME - 705)) | (1 << (self::LIKE2 - 705)) | (1 << (self::LIKE4 - 705)) | (1 << (self::LIKEC - 705)) | (1 << (self::LIKE_EXPAND - 705)) | (1 << (self::LIMIT - 705)) | (1 << (self::LINEAR - 705)) | (1 << (self::LINK - 705)) | (1 << (self::LIST - 705)) | (1 << (self::LN - 705)) | (1 << (self::LNNVL - 705)) | (1 << (self::LOAD - 705)) | (1 << (self::LOB - 705)) | (1 << (self::LOBNVL - 705)) | (1 << (self::LOBS - 705)) | (1 << (self::LOCAL_INDEXES - 705)))) !== 0) || (((($_la - 769)) & ~0x3f) === 0 && ((1 << ($_la - 769)) & ((1 << (self::LOCAL - 769)) | (1 << (self::LOCALTIME - 769)) | (1 << (self::LOCALTIMESTAMP - 769)) | (1 << (self::LOCATION - 769)) | (1 << (self::LOCATOR - 769)) | (1 << (self::LOCKED - 769)) | (1 << (self::LOCKING - 769)) | (1 << (self::LOGFILE - 769)) | (1 << (self::LOGFILES - 769)) | (1 << (self::LOGGING - 769)) | (1 << (self::LOGICAL - 769)) | (1 << (self::LOGICAL_READS_PER_CALL - 769)) | (1 << (self::LOGICAL_READS_PER_SESSION - 769)) | (1 << (self::LOG - 769)) | (1 << (self::LOGMINING - 769)) | (1 << (self::LOGOFF - 769)) | (1 << (self::LOGON - 769)) | (1 << (self::LOG_READ_ONLY_VIOLATIONS - 769)) | (1 << (self::LONG - 769)) | (1 << (self::LOOP - 769)) | (1 << (self::LOWER - 769)) | (1 << (self::LOW - 769)) | (1 << (self::LPAD - 769)) | (1 << (self::LTRIM - 769)) | (1 << (self::MAIN - 769)) | (1 << (self::MAKE_REF - 769)) | (1 << (self::MANAGED - 769)) | (1 << (self::MANAGE - 769)) | (1 << (self::MANAGEMENT - 769)) | (1 << (self::MANAGER - 769)) | (1 << (self::MANUAL - 769)) | (1 << (self::MAP - 769)) | (1 << (self::MAPPING - 769)) | (1 << (self::MASTER - 769)) | (1 << (self::MATCHED - 769)) | (1 << (self::MATCHES - 769)) | (1 << (self::MATCH - 769)) | (1 << (self::MATCH_NUMBER - 769)) | (1 << (self::MATCH_RECOGNIZE - 769)) | (1 << (self::MATERIALIZED - 769)) | (1 << (self::MATERIALIZE - 769)) | (1 << (self::MAXARCHLOGS - 769)) | (1 << (self::MAXDATAFILES - 769)) | (1 << (self::MAXEXTENTS - 769)) | (1 << (self::MAXIMIZE - 769)) | (1 << (self::MAXINSTANCES - 769)) | (1 << (self::MAXLOGFILES - 769)) | (1 << (self::MAXLOGHISTORY - 769)) | (1 << (self::MAXLOGMEMBERS - 769)) | (1 << (self::MAX_SHARED_TEMP_SIZE - 769)) | (1 << (self::MAXSIZE - 769)) | (1 << (self::MAXTRANS - 769)) | (1 << (self::MAXVALUE - 769)) | (1 << (self::MEASURE - 769)) | (1 << (self::MEASURES - 769)) | (1 << (self::MEDIUM - 769)) | (1 << (self::MEMBER - 769)) | (1 << (self::MEMCOMPRESS - 769)) | (1 << (self::MEMORY - 769)) | (1 << (self::MERGEACTIONS - 769)) | (1 << (self::MERGE_AJ - 769)) | (1 << (self::MERGE_CONST_ON - 769)) | (1 << (self::MERGE - 769)))) !== 0) || (((($_la - 833)) & ~0x3f) === 0 && ((1 << ($_la - 833)) & ((1 << (self::MERGE_SJ - 833)) | (1 << (self::METADATA - 833)) | (1 << (self::METHOD - 833)) | (1 << (self::MIGRATE - 833)) | (1 << (self::MIGRATION - 833)) | (1 << (self::MINEXTENTS - 833)) | (1 << (self::MINIMIZE - 833)) | (1 << (self::MINIMUM - 833)) | (1 << (self::MINING - 833)) | (1 << (self::MINUS_NULL - 833)) | (1 << (self::MINUTE - 833)) | (1 << (self::MINVALUE - 833)) | (1 << (self::MIRRORCOLD - 833)) | (1 << (self::MIRRORHOT - 833)) | (1 << (self::MIRROR - 833)) | (1 << (self::MLSLABEL - 833)) | (1 << (self::MODEL_COMPILE_SUBQUERY - 833)) | (1 << (self::MODEL_DONTVERIFY_UNIQUENESS - 833)) | (1 << (self::MODEL_DYNAMIC_SUBQUERY - 833)) | (1 << (self::MODEL_MIN_ANALYSIS - 833)) | (1 << (self::MODEL - 833)) | (1 << (self::MODEL_NB - 833)) | (1 << (self::MODEL_NO_ANALYSIS - 833)) | (1 << (self::MODEL_PBY - 833)) | (1 << (self::MODEL_PUSH_REF - 833)) | (1 << (self::MODEL_SV - 833)) | (1 << (self::MODIFICATION - 833)) | (1 << (self::MODIFY_COLUMN_TYPE - 833)) | (1 << (self::MODIFY - 833)) | (1 << (self::MOD - 833)) | (1 << (self::MODULE - 833)) | (1 << (self::MONITORING - 833)) | (1 << (self::MONITOR - 833)) | (1 << (self::MONTH - 833)) | (1 << (self::MONTHS_BETWEEN - 833)) | (1 << (self::MONTHS - 833)) | (1 << (self::MOUNT - 833)) | (1 << (self::MOUNTPATH - 833)) | (1 << (self::MOVEMENT - 833)) | (1 << (self::MOVE - 833)) | (1 << (self::MULTIDIMENSIONAL - 833)) | (1 << (self::MULTISET - 833)) | (1 << (self::MV_MERGE - 833)) | (1 << (self::NAMED - 833)) | (1 << (self::NAME - 833)) | (1 << (self::NAMESPACE - 833)) | (1 << (self::NAN - 833)) | (1 << (self::NANVL - 833)) | (1 << (self::NATIONAL - 833)) | (1 << (self::NATIVE_FULL_OUTER_JOIN - 833)) | (1 << (self::NATIVE - 833)) | (1 << (self::NATURAL - 833)) | (1 << (self::NAV - 833)) | (1 << (self::NCHAR_CS - 833)) | (1 << (self::NCHAR - 833)) | (1 << (self::NCHR - 833)) | (1 << (self::NCLOB - 833)) | (1 << (self::NEEDED - 833)) | (1 << (self::NEG - 833)) | (1 << (self::NESTED - 833)) | (1 << (self::NESTED_TABLE_FAST_INSERT - 833)))) !== 0) || (((($_la - 897)) & ~0x3f) === 0 && ((1 << ($_la - 897)) & ((1 << (self::NESTED_TABLE_GET_REFS - 897)) | (1 << (self::NESTED_TABLE_ID - 897)) | (1 << (self::NESTED_TABLE_SET_REFS - 897)) | (1 << (self::NESTED_TABLE_SET_SETID - 897)) | (1 << (self::NETWORK - 897)) | (1 << (self::NEVER - 897)) | (1 << (self::NEW - 897)) | (1 << (self::NEW_TIME - 897)) | (1 << (self::NEXT_DAY - 897)) | (1 << (self::NEXT - 897)) | (1 << (self::NL_AJ - 897)) | (1 << (self::NLJ_BATCHING - 897)) | (1 << (self::NLJ_INDEX_FILTER - 897)) | (1 << (self::NLJ_INDEX_SCAN - 897)) | (1 << (self::NLJ_PREFETCH - 897)) | (1 << (self::NLS_CALENDAR - 897)) | (1 << (self::NLS_CHARACTERSET - 897)) | (1 << (self::NLS_CHARSET_DECL_LEN - 897)) | (1 << (self::NLS_CHARSET_ID - 897)) | (1 << (self::NLS_CHARSET_NAME - 897)) | (1 << (self::NLS_COMP - 897)) | (1 << (self::NLS_CURRENCY - 897)) | (1 << (self::NLS_DATE_FORMAT - 897)) | (1 << (self::NLS_DATE_LANGUAGE - 897)) | (1 << (self::NLS_INITCAP - 897)) | (1 << (self::NLS_ISO_CURRENCY - 897)) | (1 << (self::NL_SJ - 897)) | (1 << (self::NLS_LANG - 897)) | (1 << (self::NLS_LANGUAGE - 897)) | (1 << (self::NLS_LENGTH_SEMANTICS - 897)) | (1 << (self::NLS_LOWER - 897)) | (1 << (self::NLS_NCHAR_CONV_EXCP - 897)) | (1 << (self::NLS_NUMERIC_CHARACTERS - 897)) | (1 << (self::NLS_SORT - 897)) | (1 << (self::NLSSORT - 897)) | (1 << (self::NLS_SPECIAL_CHARS - 897)) | (1 << (self::NLS_TERRITORY - 897)) | (1 << (self::NLS_UPPER - 897)) | (1 << (self::NO_ACCESS - 897)) | (1 << (self::NO_ADAPTIVE_PLAN - 897)) | (1 << (self::NO_ANSI_REARCH - 897)) | (1 << (self::NOAPPEND - 897)) | (1 << (self::NOARCHIVELOG - 897)) | (1 << (self::NOAUDIT - 897)) | (1 << (self::NO_AUTO_REOPTIMIZE - 897)) | (1 << (self::NO_BASETABLE_MULTIMV_REWRITE - 897)) | (1 << (self::NO_BATCH_TABLE_ACCESS_BY_ROWID - 897)) | (1 << (self::NO_BIND_AWARE - 897)) | (1 << (self::NO_BUFFER - 897)) | (1 << (self::NOCACHE - 897)) | (1 << (self::NO_CARTESIAN - 897)) | (1 << (self::NO_CHECK_ACL_REWRITE - 897)) | (1 << (self::NO_CLUSTER_BY_ROWID - 897)) | (1 << (self::NO_CLUSTERING - 897)) | (1 << (self::NO_COALESCE_SQ - 897)) | (1 << (self::NO_COMMON_DATA - 897)) | (1 << (self::NO_CONNECT_BY_CB_WHR_ONLY - 897)) | (1 << (self::NO_CONNECT_BY_COMBINE_SW - 897)) | (1 << (self::NO_CONNECT_BY_COST_BASED - 897)) | (1 << (self::NO_CONNECT_BY_ELIM_DUPS - 897)) | (1 << (self::NO_CONNECT_BY_FILTERING - 897)) | (1 << (self::NOCOPY - 897)) | (1 << (self::NO_COST_XML_QUERY_REWRITE - 897)))) !== 0) || (((($_la - 961)) & ~0x3f) === 0 && ((1 << ($_la - 961)) & ((1 << (self::NO_CPU_COSTING - 961)) | (1 << (self::NOCPU_COSTING - 961)) | (1 << (self::NOCYCLE - 961)) | (1 << (self::NO_DATA_SECURITY_REWRITE - 961)) | (1 << (self::NO_DECORRELATE - 961)) | (1 << (self::NODELAY - 961)) | (1 << (self::NO_DOMAIN_INDEX_FILTER - 961)) | (1 << (self::NO_DST_UPGRADE_INSERT_CONV - 961)) | (1 << (self::NO_ELIM_GROUPBY - 961)) | (1 << (self::NO_ELIMINATE_JOIN - 961)) | (1 << (self::NO_ELIMINATE_OBY - 961)) | (1 << (self::NO_ELIMINATE_OUTER_JOIN - 961)) | (1 << (self::NOENTITYESCAPING - 961)) | (1 << (self::NO_EXPAND_GSET_TO_UNION - 961)) | (1 << (self::NO_EXPAND - 961)) | (1 << (self::NO_EXPAND_TABLE - 961)) | (1 << (self::NO_FACT - 961)) | (1 << (self::NO_FACTORIZE_JOIN - 961)) | (1 << (self::NO_FILTERING - 961)) | (1 << (self::NOFORCE - 961)) | (1 << (self::NO_FULL_OUTER_JOIN_TO_OUTER - 961)) | (1 << (self::NO_GATHER_OPTIMIZER_STATISTICS - 961)) | (1 << (self::NO_GBY_PUSHDOWN - 961)) | (1 << (self::NOGUARANTEE - 961)) | (1 << (self::NO_INDEX_FFS - 961)) | (1 << (self::NO_INDEX - 961)) | (1 << (self::NO_INDEX_SS - 961)) | (1 << (self::NO_INMEMORY - 961)) | (1 << (self::NO_INMEMORY_PRUNING - 961)) | (1 << (self::NOKEEP - 961)) | (1 << (self::NO_LOAD - 961)) | (1 << (self::NOLOCAL - 961)) | (1 << (self::NOLOGGING - 961)) | (1 << (self::NOMAPPING - 961)) | (1 << (self::NOMAXVALUE - 961)) | (1 << (self::NO_MERGE - 961)) | (1 << (self::NOMINIMIZE - 961)) | (1 << (self::NOMINVALUE - 961)) | (1 << (self::NO_MODEL_PUSH_REF - 961)) | (1 << (self::NO_MONITORING - 961)) | (1 << (self::NOMONITORING - 961)) | (1 << (self::NO_MONITOR - 961)) | (1 << (self::NO_MULTIMV_REWRITE - 961)) | (1 << (self::NO_NATIVE_FULL_OUTER_JOIN - 961)) | (1 << (self::NONBLOCKING - 961)) | (1 << (self::NONEDITIONABLE - 961)) | (1 << (self::NONE - 961)) | (1 << (self::NO_NLJ_BATCHING - 961)) | (1 << (self::NO_NLJ_PREFETCH - 961)) | (1 << (self::NO - 961)) | (1 << (self::NONSCHEMA - 961)) | (1 << (self::NO_OBJECT_LINK - 961)) | (1 << (self::NOORDER - 961)) | (1 << (self::NO_ORDER_ROLLUPS - 961)) | (1 << (self::NO_OUTER_JOIN_TO_ANTI - 961)) | (1 << (self::NO_OUTER_JOIN_TO_INNER - 961)) | (1 << (self::NOOVERRIDE - 961)) | (1 << (self::NO_PARALLEL_INDEX - 961)) | (1 << (self::NOPARALLEL_INDEX - 961)) | (1 << (self::NO_PARALLEL - 961)) | (1 << (self::NOPARALLEL - 961)) | (1 << (self::NO_PARTIAL_COMMIT - 961)) | (1 << (self::NO_PARTIAL_JOIN - 961)) | (1 << (self::NO_PARTIAL_ROLLUP_PUSHDOWN - 961)))) !== 0) || (((($_la - 1025)) & ~0x3f) === 0 && ((1 << ($_la - 1025)) & ((1 << (self::NOPARTITION - 1025)) | (1 << (self::NO_PLACE_DISTINCT - 1025)) | (1 << (self::NO_PLACE_GROUP_BY - 1025)) | (1 << (self::NO_PQ_CONCURRENT_UNION - 1025)) | (1 << (self::NO_PQ_MAP - 1025)) | (1 << (self::NO_PQ_REPLICATE - 1025)) | (1 << (self::NO_PQ_SKEW - 1025)) | (1 << (self::NO_PRUNE_GSETS - 1025)) | (1 << (self::NO_PULL_PRED - 1025)) | (1 << (self::NO_PUSH_PRED - 1025)) | (1 << (self::NO_PUSH_SUBQ - 1025)) | (1 << (self::NO_PX_FAULT_TOLERANCE - 1025)) | (1 << (self::NO_PX_JOIN_FILTER - 1025)) | (1 << (self::NO_QKN_BUFF - 1025)) | (1 << (self::NO_QUERY_TRANSFORMATION - 1025)) | (1 << (self::NO_REF_CASCADE - 1025)) | (1 << (self::NORELOCATE - 1025)) | (1 << (self::NORELY - 1025)) | (1 << (self::NOREPAIR - 1025)) | (1 << (self::NOREPLAY - 1025)) | (1 << (self::NORESETLOGS - 1025)) | (1 << (self::NO_RESULT_CACHE - 1025)) | (1 << (self::NOREVERSE - 1025)) | (1 << (self::NO_REWRITE - 1025)) | (1 << (self::NOREWRITE - 1025)) | (1 << (self::NORMAL - 1025)) | (1 << (self::NO_ROOT_SW_FOR_LOCAL - 1025)) | (1 << (self::NOROWDEPENDENCIES - 1025)) | (1 << (self::NOSCHEMACHECK - 1025)) | (1 << (self::NOSEGMENT - 1025)) | (1 << (self::NO_SEMIJOIN - 1025)) | (1 << (self::NO_SEMI_TO_INNER - 1025)) | (1 << (self::NO_SET_TO_JOIN - 1025)) | (1 << (self::NOSORT - 1025)) | (1 << (self::NO_SQL_TRANSLATION - 1025)) | (1 << (self::NO_SQL_TUNE - 1025)) | (1 << (self::NO_STAR_TRANSFORMATION - 1025)) | (1 << (self::NO_STATEMENT_QUEUING - 1025)) | (1 << (self::NO_STATS_GSETS - 1025)) | (1 << (self::NOSTRICT - 1025)) | (1 << (self::NO_SUBQUERY_PRUNING - 1025)) | (1 << (self::NO_SUBSTRB_PAD - 1025)) | (1 << (self::NO_SWAP_JOIN_INPUTS - 1025)) | (1 << (self::NOSWITCH - 1025)) | (1 << (self::NO_TABLE_LOOKUP_BY_NL - 1025)) | (1 << (self::NO_TEMP_TABLE - 1025)) | (1 << (self::NOTHING - 1025)) | (1 << (self::NOTIFICATION - 1025)) | (1 << (self::NO_TRANSFORM_DISTINCT_AGG - 1025)) | (1 << (self::NO_UNNEST - 1025)) | (1 << (self::NO_USE_CUBE - 1025)) | (1 << (self::NO_USE_HASH_AGGREGATION - 1025)) | (1 << (self::NO_USE_HASH_GBY_FOR_PUSHDOWN - 1025)) | (1 << (self::NO_USE_HASH - 1025)) | (1 << (self::NO_USE_INVISIBLE_INDEXES - 1025)) | (1 << (self::NO_USE_MERGE - 1025)) | (1 << (self::NO_USE_NL - 1025)) | (1 << (self::NO_USE_VECTOR_AGGREGATION - 1025)) | (1 << (self::NOVALIDATE - 1025)) | (1 << (self::NO_VECTOR_TRANSFORM_DIMS - 1025)) | (1 << (self::NO_VECTOR_TRANSFORM_FACT - 1025)) | (1 << (self::NO_VECTOR_TRANSFORM - 1025)))) !== 0) || (((($_la - 1089)) & ~0x3f) === 0 && ((1 << ($_la - 1089)) & ((1 << (self::NO_XDB_FASTPATH_INSERT - 1089)) | (1 << (self::NO_XML_DML_REWRITE - 1089)) | (1 << (self::NO_XMLINDEX_REWRITE_IN_SELECT - 1089)) | (1 << (self::NO_XMLINDEX_REWRITE - 1089)) | (1 << (self::NO_XML_QUERY_REWRITE - 1089)) | (1 << (self::NO_ZONEMAP - 1089)) | (1 << (self::NTH_VALUE - 1089)) | (1 << (self::NULLIF - 1089)) | (1 << (self::NULLS - 1089)) | (1 << (self::NUMBER - 1089)) | (1 << (self::NUMERIC - 1089)) | (1 << (self::NUM_INDEX_KEYS - 1089)) | (1 << (self::NUMTODSINTERVAL - 1089)) | (1 << (self::NUMTOYMINTERVAL - 1089)) | (1 << (self::NVARCHAR2 - 1089)) | (1 << (self::NVL2 - 1089)) | (1 << (self::OBJECT2XML - 1089)) | (1 << (self::OBJECT - 1089)) | (1 << (self::OBJ_ID - 1089)) | (1 << (self::OBJNO - 1089)) | (1 << (self::OBJNO_REUSE - 1089)) | (1 << (self::OCCURENCES - 1089)) | (1 << (self::OFFLINE - 1089)) | (1 << (self::OFF - 1089)) | (1 << (self::OFFSET - 1089)) | (1 << (self::OIDINDEX - 1089)) | (1 << (self::OID - 1089)) | (1 << (self::OLAP - 1089)) | (1 << (self::OLD - 1089)) | (1 << (self::OLD_PUSH_PRED - 1089)) | (1 << (self::OLS - 1089)) | (1 << (self::OLTP - 1089)) | (1 << (self::OMIT - 1089)) | (1 << (self::ONE - 1089)) | (1 << (self::ONLINE - 1089)) | (1 << (self::ONLY - 1089)) | (1 << (self::OPAQUE - 1089)) | (1 << (self::OPAQUE_TRANSFORM - 1089)) | (1 << (self::OPAQUE_XCANONICAL - 1089)) | (1 << (self::OPCODE - 1089)) | (1 << (self::OPEN - 1089)) | (1 << (self::OPERATIONS - 1089)) | (1 << (self::OPERATOR - 1089)) | (1 << (self::OPT_ESTIMATE - 1089)) | (1 << (self::OPTIMAL - 1089)) | (1 << (self::OPTIMIZE - 1089)) | (1 << (self::OPTIMIZER_FEATURES_ENABLE - 1089)) | (1 << (self::OPTIMIZER_GOAL - 1089)) | (1 << (self::OPT_PARAM - 1089)) | (1 << (self::ORA_BRANCH - 1089)) | (1 << (self::ORA_CHECK_ACL - 1089)) | (1 << (self::ORA_CHECK_PRIVILEGE - 1089)) | (1 << (self::ORA_CLUSTERING - 1089)) | (1 << (self::ORADATA - 1089)) | (1 << (self::ORADEBUG - 1089)) | (1 << (self::ORA_DST_AFFECTED - 1089)) | (1 << (self::ORA_DST_CONVERT - 1089)) | (1 << (self::ORA_DST_ERROR - 1089)) | (1 << (self::ORA_GET_ACLIDS - 1089)))) !== 0) || (((($_la - 1153)) & ~0x3f) === 0 && ((1 << ($_la - 1153)) & ((1 << (self::ORA_GET_PRIVILEGES - 1153)) | (1 << (self::ORA_HASH - 1153)) | (1 << (self::ORA_INVOKING_USERID - 1153)) | (1 << (self::ORA_INVOKING_USER - 1153)) | (1 << (self::ORA_INVOKING_XS_USER_GUID - 1153)) | (1 << (self::ORA_INVOKING_XS_USER - 1153)) | (1 << (self::ORA_RAWCOMPARE - 1153)) | (1 << (self::ORA_RAWCONCAT - 1153)) | (1 << (self::ORA_ROWSCN - 1153)) | (1 << (self::ORA_ROWSCN_RAW - 1153)) | (1 << (self::ORA_ROWVERSION - 1153)) | (1 << (self::ORA_TABVERSION - 1153)) | (1 << (self::ORA_WRITE_TIME - 1153)) | (1 << (self::ORDERED - 1153)) | (1 << (self::ORDERED_PREDICATES - 1153)) | (1 << (self::ORDINALITY - 1153)) | (1 << (self::OR_EXPAND - 1153)) | (1 << (self::ORGANIZATION - 1153)) | (1 << (self::OR_PREDICATES - 1153)) | (1 << (self::OSERROR - 1153)) | (1 << (self::OTHER - 1153)) | (1 << (self::OUTER_JOIN_TO_ANTI - 1153)) | (1 << (self::OUTER_JOIN_TO_INNER - 1153)) | (1 << (self::OUTER - 1153)) | (1 << (self::OUTLINE_LEAF - 1153)) | (1 << (self::OUTLINE - 1153)) | (1 << (self::OUT_OF_LINE - 1153)) | (1 << (self::OUT - 1153)) | (1 << (self::OVERFLOW_NOMOVE - 1153)) | (1 << (self::OVERFLOW - 1153)) | (1 << (self::OVERLAPS - 1153)) | (1 << (self::OVER - 1153)) | (1 << (self::OVERRIDING - 1153)) | (1 << (self::OWNER - 1153)) | (1 << (self::OWNERSHIP - 1153)) | (1 << (self::OWN - 1153)) | (1 << (self::PACKAGE - 1153)) | (1 << (self::PACKAGES - 1153)) | (1 << (self::PARALLEL_ENABLE - 1153)) | (1 << (self::PARALLEL_INDEX - 1153)) | (1 << (self::PARALLEL - 1153)) | (1 << (self::PARAMETERS - 1153)) | (1 << (self::PARAM - 1153)) | (1 << (self::PARENT - 1153)) | (1 << (self::PARITY - 1153)) | (1 << (self::PARTIAL_JOIN - 1153)) | (1 << (self::PARTIALLY - 1153)) | (1 << (self::PARTIAL - 1153)) | (1 << (self::PARTIAL_ROLLUP_PUSHDOWN - 1153)) | (1 << (self::PARTITION_HASH - 1153)) | (1 << (self::PARTITION_LIST - 1153)) | (1 << (self::PARTITION - 1153)) | (1 << (self::PARTITION_RANGE - 1153)) | (1 << (self::PARTITIONS - 1153)) | (1 << (self::PARTNUMINST - 1153)) | (1 << (self::PASSING - 1153)) | (1 << (self::PASSWORD_GRACE_TIME - 1153)) | (1 << (self::PASSWORD_LIFE_TIME - 1153)) | (1 << (self::PASSWORD_LOCK_TIME - 1153)) | (1 << (self::PASSWORD - 1153)) | (1 << (self::PASSWORD_REUSE_MAX - 1153)))) !== 0) || (((($_la - 1217)) & ~0x3f) === 0 && ((1 << ($_la - 1217)) & ((1 << (self::PASSWORD_REUSE_TIME - 1217)) | (1 << (self::PASSWORD_VERIFY_FUNCTION - 1217)) | (1 << (self::PAST - 1217)) | (1 << (self::PATCH - 1217)) | (1 << (self::PATH - 1217)) | (1 << (self::PATH_PREFIX - 1217)) | (1 << (self::PATHS - 1217)) | (1 << (self::PATTERN - 1217)) | (1 << (self::PBL_HS_BEGIN - 1217)) | (1 << (self::PBL_HS_END - 1217)) | (1 << (self::PCTINCREASE - 1217)) | (1 << (self::PCTTHRESHOLD - 1217)) | (1 << (self::PCTUSED - 1217)) | (1 << (self::PCTVERSION - 1217)) | (1 << (self::PENDING - 1217)) | (1 << (self::PERCENT_KEYWORD - 1217)) | (1 << (self::PERCENT_RANKM - 1217)) | (1 << (self::PERFORMANCE - 1217)) | (1 << (self::PERIOD_KEYWORD - 1217)) | (1 << (self::PERMANENT - 1217)) | (1 << (self::PERMISSION - 1217)) | (1 << (self::PERMUTE - 1217)) | (1 << (self::PER - 1217)) | (1 << (self::PFILE - 1217)) | (1 << (self::PHYSICAL - 1217)) | (1 << (self::PIKEY - 1217)) | (1 << (self::PIPELINED - 1217)) | (1 << (self::PIV_GB - 1217)) | (1 << (self::PIVOT - 1217)) | (1 << (self::PIV_SSF - 1217)) | (1 << (self::PLACE_DISTINCT - 1217)) | (1 << (self::PLACE_GROUP_BY - 1217)) | (1 << (self::PLAN - 1217)) | (1 << (self::PLSCOPE_SETTINGS - 1217)) | (1 << (self::PLS_INTEGER - 1217)) | (1 << (self::PLSQL_CCFLAGS - 1217)) | (1 << (self::PLSQL_CODE_TYPE - 1217)) | (1 << (self::PLSQL_DEBUG - 1217)) | (1 << (self::PLSQL_OPTIMIZE_LEVEL - 1217)) | (1 << (self::PLSQL_WARNINGS - 1217)) | (1 << (self::PLUGGABLE - 1217)) | (1 << (self::POINT - 1217)) | (1 << (self::POLICY - 1217)) | (1 << (self::POOL_16K - 1217)) | (1 << (self::POOL_2K - 1217)) | (1 << (self::POOL_32K - 1217)) | (1 << (self::POOL_4K - 1217)) | (1 << (self::POOL_8K - 1217)) | (1 << (self::POSITIVEN - 1217)) | (1 << (self::POSITIVE - 1217)) | (1 << (self::POST_TRANSACTION - 1217)) | (1 << (self::POWERMULTISET_BY_CARDINALITY - 1217)) | (1 << (self::POWERMULTISET - 1217)) | (1 << (self::POWER - 1217)) | (1 << (self::PQ_CONCURRENT_UNION - 1217)) | (1 << (self::PQ_DISTRIBUTE - 1217)))) !== 0) || (((($_la - 1281)) & ~0x3f) === 0 && ((1 << ($_la - 1281)) & ((1 << (self::PQ_DISTRIBUTE_WINDOW - 1281)) | (1 << (self::PQ_FILTER - 1281)) | (1 << (self::PQ_MAP - 1281)) | (1 << (self::PQ_NOMAP - 1281)) | (1 << (self::PQ_REPLICATE - 1281)) | (1 << (self::PQ_SKEW - 1281)) | (1 << (self::PRAGMA - 1281)) | (1 << (self::PREBUILT - 1281)) | (1 << (self::PRECEDES - 1281)) | (1 << (self::PRECEDING - 1281)) | (1 << (self::PRECISION - 1281)) | (1 << (self::PRECOMPUTE_SUBQUERY - 1281)) | (1 << (self::PREDICATE_REORDERS - 1281)) | (1 << (self::PRELOAD - 1281)) | (1 << (self::PREPARE - 1281)) | (1 << (self::PRESENTNNV - 1281)) | (1 << (self::PRESENT - 1281)) | (1 << (self::PRESENTV - 1281)) | (1 << (self::PRESERVE_OID - 1281)) | (1 << (self::PRESERVE - 1281)) | (1 << (self::PRETTY - 1281)) | (1 << (self::PREVIOUS - 1281)) | (1 << (self::PREV - 1281)) | (1 << (self::PRIMARY - 1281)) | (1 << (self::PRINTBLOBTOCLOB - 1281)) | (1 << (self::PRIORITY - 1281)) | (1 << (self::PRIVATE - 1281)) | (1 << (self::PRIVATE_SGA - 1281)) | (1 << (self::PRIVILEGED - 1281)) | (1 << (self::PRIVILEGE - 1281)) | (1 << (self::PRIVILEGES - 1281)) | (1 << (self::PROCEDURAL - 1281)) | (1 << (self::PROCEDURE - 1281)) | (1 << (self::PROCESS - 1281)) | (1 << (self::PROFILE - 1281)) | (1 << (self::PROGRAM - 1281)) | (1 << (self::PROJECT - 1281)) | (1 << (self::PROPAGATE - 1281)) | (1 << (self::PROTECTED - 1281)) | (1 << (self::PROTECTION - 1281)) | (1 << (self::PROXY - 1281)) | (1 << (self::PRUNING - 1281)) | (1 << (self::PULL_PRED - 1281)) | (1 << (self::PURGE - 1281)) | (1 << (self::PUSH_PRED - 1281)) | (1 << (self::PUSH_SUBQ - 1281)) | (1 << (self::PX_FAULT_TOLERANCE - 1281)) | (1 << (self::PX_GRANULE - 1281)) | (1 << (self::PX_JOIN_FILTER - 1281)) | (1 << (self::QB_NAME - 1281)) | (1 << (self::QUERY_BLOCK - 1281)) | (1 << (self::QUERY - 1281)) | (1 << (self::QUEUE_CURR - 1281)) | (1 << (self::QUEUE - 1281)) | (1 << (self::QUEUE_ROWP - 1281)) | (1 << (self::QUIESCE - 1281)) | (1 << (self::QUORUM - 1281)) | (1 << (self::QUOTA - 1281)) | (1 << (self::RAISE - 1281)) | (1 << (self::RANDOM_LOCAL - 1281)) | (1 << (self::RANDOM - 1281)) | (1 << (self::RANGE - 1281)))) !== 0) || (((($_la - 1345)) & ~0x3f) === 0 && ((1 << ($_la - 1345)) & ((1 << (self::RANKM - 1345)) | (1 << (self::RAPIDLY - 1345)) | (1 << (self::RAW - 1345)) | (1 << (self::RAWTOHEX - 1345)) | (1 << (self::RAWTONHEX - 1345)) | (1 << (self::RBA - 1345)) | (1 << (self::RBO_OUTLINE - 1345)) | (1 << (self::RDBA - 1345)) | (1 << (self::READ - 1345)) | (1 << (self::READS - 1345)) | (1 << (self::REALM - 1345)) | (1 << (self::REAL - 1345)) | (1 << (self::REBALANCE - 1345)) | (1 << (self::REBUILD - 1345)) | (1 << (self::RECORD - 1345)) | (1 << (self::RECORDS_PER_BLOCK - 1345)) | (1 << (self::RECOVERABLE - 1345)) | (1 << (self::RECOVER - 1345)) | (1 << (self::RECOVERY - 1345)) | (1 << (self::RECYCLEBIN - 1345)) | (1 << (self::RECYCLE - 1345)) | (1 << (self::REDACTION - 1345)) | (1 << (self::REDEFINE - 1345)) | (1 << (self::REDO - 1345)) | (1 << (self::REDUCED - 1345)) | (1 << (self::REDUNDANCY - 1345)) | (1 << (self::REF_CASCADE_CURSOR - 1345)) | (1 << (self::REFERENCED - 1345)) | (1 << (self::REFERENCE - 1345)) | (1 << (self::REFERENCES - 1345)) | (1 << (self::REFERENCING - 1345)) | (1 << (self::REF - 1345)) | (1 << (self::REFRESH - 1345)) | (1 << (self::REFTOHEX - 1345)) | (1 << (self::REGEXP_COUNT - 1345)) | (1 << (self::REGEXP_INSTR - 1345)) | (1 << (self::REGEXP_LIKE - 1345)) | (1 << (self::REGEXP_REPLACE - 1345)) | (1 << (self::REGEXP_SUBSTR - 1345)) | (1 << (self::REGISTER - 1345)) | (1 << (self::REGR_AVGX - 1345)) | (1 << (self::REGR_AVGY - 1345)) | (1 << (self::REGR_COUNT - 1345)) | (1 << (self::REGR_INTERCEPT - 1345)) | (1 << (self::REGR_R2 - 1345)) | (1 << (self::REGR_SLOPE - 1345)) | (1 << (self::REGR_SXX - 1345)) | (1 << (self::REGR_SXY - 1345)) | (1 << (self::REGR_SYY - 1345)) | (1 << (self::REGULAR - 1345)) | (1 << (self::REJECT - 1345)) | (1 << (self::REKEY - 1345)) | (1 << (self::RELATIONAL - 1345)) | (1 << (self::RELOCATE - 1345)) | (1 << (self::RELY - 1345)) | (1 << (self::REMAINDER - 1345)) | (1 << (self::REMOTE_MAPPED - 1345)) | (1 << (self::REMOVE - 1345)) | (1 << (self::RENAME - 1345)) | (1 << (self::REPAIR - 1345)) | (1 << (self::REPEAT - 1345)) | (1 << (self::REPLACE - 1345)) | (1 << (self::REPLICATION - 1345)))) !== 0) || (((($_la - 1409)) & ~0x3f) === 0 && ((1 << ($_la - 1409)) & ((1 << (self::REQUIRED - 1409)) | (1 << (self::RESETLOGS - 1409)) | (1 << (self::RESET - 1409)) | (1 << (self::RESIZE - 1409)) | (1 << (self::RESOLVE - 1409)) | (1 << (self::RESOLVER - 1409)) | (1 << (self::RESPECT - 1409)) | (1 << (self::RESTART - 1409)) | (1 << (self::RESTORE_AS_INTERVALS - 1409)) | (1 << (self::RESTORE - 1409)) | (1 << (self::RESTRICT_ALL_REF_CONS - 1409)) | (1 << (self::RESTRICTED - 1409)) | (1 << (self::RESTRICT_REFERENCES - 1409)) | (1 << (self::RESTRICT - 1409)) | (1 << (self::RESULT_CACHE - 1409)) | (1 << (self::RESULT - 1409)) | (1 << (self::RESUMABLE - 1409)) | (1 << (self::RESUME - 1409)) | (1 << (self::RETENTION - 1409)) | (1 << (self::RETRY_ON_ROW_CHANGE - 1409)) | (1 << (self::RETURNING - 1409)) | (1 << (self::RETURN - 1409)) | (1 << (self::REUSE - 1409)) | (1 << (self::REVERSE - 1409)) | (1 << (self::REWRITE_OR_ERROR - 1409)) | (1 << (self::REWRITE - 1409)) | (1 << (self::RIGHT - 1409)) | (1 << (self::ROLE - 1409)) | (1 << (self::ROLESET - 1409)) | (1 << (self::ROLES - 1409)) | (1 << (self::ROLLBACK - 1409)) | (1 << (self::ROLLING - 1409)) | (1 << (self::ROLLUP - 1409)) | (1 << (self::ROWDEPENDENCIES - 1409)) | (1 << (self::ROWID_MAPPING_TABLE - 1409)) | (1 << (self::ROWID - 1409)) | (1 << (self::ROWIDTOCHAR - 1409)) | (1 << (self::ROWIDTONCHAR - 1409)) | (1 << (self::ROW_LENGTH - 1409)) | (1 << (self::ROWNUM - 1409)) | (1 << (self::ROW - 1409)) | (1 << (self::ROWS - 1409)) | (1 << (self::RPAD - 1409)) | (1 << (self::RTRIM - 1409)) | (1 << (self::RULE - 1409)) | (1 << (self::RULES - 1409)) | (1 << (self::RUNNING - 1409)) | (1 << (self::SALT - 1409)) | (1 << (self::SAMPLE - 1409)) | (1 << (self::SAVE_AS_INTERVALS - 1409)) | (1 << (self::SAVEPOINT - 1409)) | (1 << (self::SAVE - 1409)) | (1 << (self::SB4 - 1409)) | (1 << (self::SCALE_ROWS - 1409)) | (1 << (self::SCALE - 1409)) | (1 << (self::SCAN_INSTANCES - 1409)) | (1 << (self::SCAN - 1409)) | (1 << (self::SCHEDULER - 1409)) | (1 << (self::SCHEMACHECK - 1409)) | (1 << (self::SCHEMA - 1409)) | (1 << (self::SCN_ASCENDING - 1409)) | (1 << (self::SCN - 1409)))) !== 0) || (((($_la - 1473)) & ~0x3f) === 0 && ((1 << ($_la - 1473)) & ((1 << (self::SCOPE - 1473)) | (1 << (self::SCRUB - 1473)) | (1 << (self::SD_ALL - 1473)) | (1 << (self::SD_INHIBIT - 1473)) | (1 << (self::SDO_GEOM_MBR - 1473)) | (1 << (self::SD_SHOW - 1473)) | (1 << (self::SEARCH - 1473)) | (1 << (self::SECOND - 1473)) | (1 << (self::SECRET - 1473)) | (1 << (self::SECUREFILE_DBA - 1473)) | (1 << (self::SECUREFILE - 1473)) | (1 << (self::SECURITY - 1473)) | (1 << (self::SEED - 1473)) | (1 << (self::SEG_BLOCK - 1473)) | (1 << (self::SEG_FILE - 1473)) | (1 << (self::SEGMENT - 1473)) | (1 << (self::SELECTIVITY - 1473)) | (1 << (self::SELF - 1473)) | (1 << (self::SEMIJOIN_DRIVER - 1473)) | (1 << (self::SEMIJOIN - 1473)) | (1 << (self::SEMI_TO_INNER - 1473)) | (1 << (self::SEQUENCED - 1473)) | (1 << (self::SEQUENCE - 1473)) | (1 << (self::SEQUENTIAL - 1473)) | (1 << (self::SERIALIZABLE - 1473)) | (1 << (self::SERIALLY_REUSABLE - 1473)) | (1 << (self::SERIAL - 1473)) | (1 << (self::SERVERERROR - 1473)) | (1 << (self::SERVICE_NAME_CONVERT - 1473)) | (1 << (self::SERVICES - 1473)) | (1 << (self::SESSION_CACHED_CURSORS - 1473)) | (1 << (self::SESSION - 1473)) | (1 << (self::SESSIONS_PER_USER - 1473)) | (1 << (self::SESSIONTIMEZONE - 1473)) | (1 << (self::SESSIONTZNAME - 1473)) | (1 << (self::SET - 1473)) | (1 << (self::SETS - 1473)) | (1 << (self::SETTINGS - 1473)) | (1 << (self::SET_TO_JOIN - 1473)) | (1 << (self::SEVERE - 1473)) | (1 << (self::SHARED_POOL - 1473)) | (1 << (self::SHARED - 1473)) | (1 << (self::SHARING - 1473)) | (1 << (self::SHELFLIFE - 1473)) | (1 << (self::SHOW - 1473)) | (1 << (self::SHRINK - 1473)) | (1 << (self::SHUTDOWN - 1473)) | (1 << (self::SIBLINGS - 1473)) | (1 << (self::SID - 1473)) | (1 << (self::SIGNAL_COMPONENT - 1473)) | (1 << (self::SIGNAL_FUNCTION - 1473)) | (1 << (self::SIGN - 1473)) | (1 << (self::SIGNTYPE - 1473)) | (1 << (self::SIMPLE_INTEGER - 1473)) | (1 << (self::SIMPLE - 1473)) | (1 << (self::SINGLE - 1473)) | (1 << (self::SINGLETASK - 1473)) | (1 << (self::SINH - 1473)) | (1 << (self::SIN - 1473)) | (1 << (self::SKIP_EXT_OPTIMIZER - 1473)))) !== 0) || (((($_la - 1537)) & ~0x3f) === 0 && ((1 << ($_la - 1537)) & ((1 << (self::SKIP_ - 1537)) | (1 << (self::SKIP_UNQ_UNUSABLE_IDX - 1537)) | (1 << (self::SKIP_UNUSABLE_INDEXES - 1537)) | (1 << (self::SMALLFILE - 1537)) | (1 << (self::SMALLINT - 1537)) | (1 << (self::SNAPSHOT - 1537)) | (1 << (self::SOME - 1537)) | (1 << (self::SORT - 1537)) | (1 << (self::SOUNDEX - 1537)) | (1 << (self::SOURCE_FILE_DIRECTORY - 1537)) | (1 << (self::SOURCE_FILE_NAME_CONVERT - 1537)) | (1 << (self::SOURCE - 1537)) | (1 << (self::SPACE_KEYWORD - 1537)) | (1 << (self::SPECIFICATION - 1537)) | (1 << (self::SPFILE - 1537)) | (1 << (self::SPLIT - 1537)) | (1 << (self::SPREADSHEET - 1537)) | (1 << (self::SQLDATA - 1537)) | (1 << (self::SQLERROR - 1537)) | (1 << (self::SQLLDR - 1537)) | (1 << (self::SQL - 1537)) | (1 << (self::SQL_TRACE - 1537)) | (1 << (self::SQL_TRANSLATION_PROFILE - 1537)) | (1 << (self::SQRT - 1537)) | (1 << (self::STALE - 1537)) | (1 << (self::STANDALONE - 1537)) | (1 << (self::STANDARD_HASH - 1537)) | (1 << (self::STANDBY_MAX_DATA_DELAY - 1537)) | (1 << (self::STANDBYS - 1537)) | (1 << (self::STANDBY - 1537)) | (1 << (self::STAR - 1537)) | (1 << (self::STAR_TRANSFORMATION - 1537)) | (1 << (self::STARTUP - 1537)) | (1 << (self::STATEMENT_ID - 1537)) | (1 << (self::STATEMENT_QUEUING - 1537)) | (1 << (self::STATEMENTS - 1537)) | (1 << (self::STATEMENT - 1537)) | (1 << (self::STATE - 1537)) | (1 << (self::STATIC - 1537)) | (1 << (self::STATISTICS - 1537)) | (1 << (self::STATS_BINOMIAL_TEST - 1537)) | (1 << (self::STATS_CROSSTAB - 1537)) | (1 << (self::STATS_F_TEST - 1537)) | (1 << (self::STATS_KS_TEST - 1537)) | (1 << (self::STATS_MODE - 1537)) | (1 << (self::STATS_MW_TEST - 1537)) | (1 << (self::STATS_ONE_WAY_ANOVA - 1537)) | (1 << (self::STATS_T_TEST_INDEP - 1537)) | (1 << (self::STATS_T_TEST_INDEPU - 1537)) | (1 << (self::STATS_T_TEST_ONE - 1537)) | (1 << (self::STATS_T_TEST_PAIRED - 1537)) | (1 << (self::STATS_WSR_TEST - 1537)) | (1 << (self::STDDEV_POP - 1537)) | (1 << (self::STDDEV_SAMP - 1537)) | (1 << (self::STOP - 1537)) | (1 << (self::STORAGE - 1537)) | (1 << (self::STORE - 1537)) | (1 << (self::STREAMS - 1537)) | (1 << (self::STREAM - 1537)) | (1 << (self::STRICT - 1537)) | (1 << (self::STRING - 1537)) | (1 << (self::STRIPE_COLUMNS - 1537)) | (1 << (self::STRIPE_WIDTH - 1537)))) !== 0) || (((($_la - 1601)) & ~0x3f) === 0 && ((1 << ($_la - 1601)) & ((1 << (self::STRIP - 1601)) | (1 << (self::STRUCTURE - 1601)) | (1 << (self::SUBMULTISET - 1601)) | (1 << (self::SUBPARTITION_REL - 1601)) | (1 << (self::SUBPARTITIONS - 1601)) | (1 << (self::SUBPARTITION - 1601)) | (1 << (self::SUBQUERIES - 1601)) | (1 << (self::SUBQUERY_PRUNING - 1601)) | (1 << (self::SUBSCRIBE - 1601)) | (1 << (self::SUBSET - 1601)) | (1 << (self::SUBSTITUTABLE - 1601)) | (1 << (self::SUBSTR2 - 1601)) | (1 << (self::SUBSTR4 - 1601)) | (1 << (self::SUBSTRB - 1601)) | (1 << (self::SUBSTRC - 1601)) | (1 << (self::SUBTYPE - 1601)) | (1 << (self::SUCCESSFUL - 1601)) | (1 << (self::SUCCESS - 1601)) | (1 << (self::SUMMARY - 1601)) | (1 << (self::SUPPLEMENTAL - 1601)) | (1 << (self::SUSPEND - 1601)) | (1 << (self::SWAP_JOIN_INPUTS - 1601)) | (1 << (self::SWITCHOVER - 1601)) | (1 << (self::SWITCH - 1601)) | (1 << (self::SYNCHRONOUS - 1601)) | (1 << (self::SYNC - 1601)) | (1 << (self::SYSASM - 1601)) | (1 << (self::SYS_AUDIT - 1601)) | (1 << (self::SYSAUX - 1601)) | (1 << (self::SYSBACKUP - 1601)) | (1 << (self::SYS_CHECKACL - 1601)) | (1 << (self::SYS_CHECK_PRIVILEGE - 1601)) | (1 << (self::SYS_CONNECT_BY_PATH - 1601)) | (1 << (self::SYS_CONTEXT - 1601)) | (1 << (self::SYSDATE - 1601)) | (1 << (self::SYSDBA - 1601)) | (1 << (self::SYS_DBURIGEN - 1601)) | (1 << (self::SYSDG - 1601)) | (1 << (self::SYS_DL_CURSOR - 1601)) | (1 << (self::SYS_DM_RXFORM_CHR - 1601)) | (1 << (self::SYS_DM_RXFORM_NUM - 1601)) | (1 << (self::SYS_DOM_COMPARE - 1601)) | (1 << (self::SYS_DST_PRIM2SEC - 1601)) | (1 << (self::SYS_DST_SEC2PRIM - 1601)) | (1 << (self::SYS_ET_BFILE_TO_RAW - 1601)) | (1 << (self::SYS_ET_BLOB_TO_IMAGE - 1601)) | (1 << (self::SYS_ET_IMAGE_TO_BLOB - 1601)) | (1 << (self::SYS_ET_RAW_TO_BFILE - 1601)) | (1 << (self::SYS_EXTPDTXT - 1601)) | (1 << (self::SYS_EXTRACT_UTC - 1601)) | (1 << (self::SYS_FBT_INSDEL - 1601)) | (1 << (self::SYS_FILTER_ACLS - 1601)) | (1 << (self::SYS_FNMATCHES - 1601)) | (1 << (self::SYS_FNREPLACE - 1601)) | (1 << (self::SYS_GET_ACLIDS - 1601)) | (1 << (self::SYS_GET_COL_ACLIDS - 1601)) | (1 << (self::SYS_GET_PRIVILEGES - 1601)) | (1 << (self::SYS_GETTOKENID - 1601)) | (1 << (self::SYS_GETXTIVAL - 1601)) | (1 << (self::SYS_GUID - 1601)) | (1 << (self::SYSGUID - 1601)) | (1 << (self::SYSKM - 1601)) | (1 << (self::SYS_MAKE_XMLNODEID - 1601)))) !== 0) || (((($_la - 1665)) & ~0x3f) === 0 && ((1 << ($_la - 1665)) & ((1 << (self::SYS_MAKEXML - 1665)) | (1 << (self::SYS_MKXMLATTR - 1665)) | (1 << (self::SYS_MKXTI - 1665)) | (1 << (self::SYSOBJ - 1665)) | (1 << (self::SYS_OP_ADT2BIN - 1665)) | (1 << (self::SYS_OP_ADTCONS - 1665)) | (1 << (self::SYS_OP_ALSCRVAL - 1665)) | (1 << (self::SYS_OP_ATG - 1665)) | (1 << (self::SYS_OP_BIN2ADT - 1665)) | (1 << (self::SYS_OP_BITVEC - 1665)) | (1 << (self::SYS_OP_BL2R - 1665)) | (1 << (self::SYS_OP_BLOOM_FILTER_LIST - 1665)) | (1 << (self::SYS_OP_BLOOM_FILTER - 1665)) | (1 << (self::SYS_OP_C2C - 1665)) | (1 << (self::SYS_OP_CAST - 1665)) | (1 << (self::SYS_OP_CEG - 1665)) | (1 << (self::SYS_OP_CL2C - 1665)) | (1 << (self::SYS_OP_COMBINED_HASH - 1665)) | (1 << (self::SYS_OP_COMP - 1665)) | (1 << (self::SYS_OP_CONVERT - 1665)) | (1 << (self::SYS_OP_COUNTCHG - 1665)) | (1 << (self::SYS_OP_CSCONV - 1665)) | (1 << (self::SYS_OP_CSCONVTEST - 1665)) | (1 << (self::SYS_OP_CSR - 1665)) | (1 << (self::SYS_OP_CSX_PATCH - 1665)) | (1 << (self::SYS_OP_CYCLED_SEQ - 1665)) | (1 << (self::SYS_OP_DECOMP - 1665)) | (1 << (self::SYS_OP_DESCEND - 1665)) | (1 << (self::SYS_OP_DISTINCT - 1665)) | (1 << (self::SYS_OP_DRA - 1665)) | (1 << (self::SYS_OP_DUMP - 1665)) | (1 << (self::SYS_OP_DV_CHECK - 1665)) | (1 << (self::SYS_OP_ENFORCE_NOT_NULL - 1665)) | (1 << (self::SYSOPER - 1665)) | (1 << (self::SYS_OP_EXTRACT - 1665)) | (1 << (self::SYS_OP_GROUPING - 1665)) | (1 << (self::SYS_OP_GUID - 1665)) | (1 << (self::SYS_OP_HASH - 1665)) | (1 << (self::SYS_OP_IIX - 1665)) | (1 << (self::SYS_OP_ITR - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_CREATE - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_FILTER_LIST - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_FILTER - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_SUCCEEDED - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_USE - 1665)) | (1 << (self::SYS_OP_LBID - 1665)) | (1 << (self::SYS_OP_LOBLOC2BLOB - 1665)) | (1 << (self::SYS_OP_LOBLOC2CLOB - 1665)) | (1 << (self::SYS_OP_LOBLOC2ID - 1665)) | (1 << (self::SYS_OP_LOBLOC2NCLOB - 1665)) | (1 << (self::SYS_OP_LOBLOC2TYP - 1665)) | (1 << (self::SYS_OP_LSVI - 1665)) | (1 << (self::SYS_OP_LVL - 1665)) | (1 << (self::SYS_OP_MAKEOID - 1665)) | (1 << (self::SYS_OP_MAP_NONNULL - 1665)) | (1 << (self::SYS_OP_MSR - 1665)) | (1 << (self::SYS_OP_NICOMBINE - 1665)) | (1 << (self::SYS_OP_NIEXTRACT - 1665)) | (1 << (self::SYS_OP_NII - 1665)) | (1 << (self::SYS_OP_NIX - 1665)) | (1 << (self::SYS_OP_NOEXPAND - 1665)) | (1 << (self::SYS_OP_NTCIMG - 1665)) | (1 << (self::SYS_OP_NUMTORAW - 1665)) | (1 << (self::SYS_OP_OIDVALUE - 1665)))) !== 0) || (((($_la - 1729)) & ~0x3f) === 0 && ((1 << ($_la - 1729)) & ((1 << (self::SYS_OP_OPNSIZE - 1729)) | (1 << (self::SYS_OP_PAR_1 - 1729)) | (1 << (self::SYS_OP_PARGID_1 - 1729)) | (1 << (self::SYS_OP_PARGID - 1729)) | (1 << (self::SYS_OP_PAR - 1729)) | (1 << (self::SYS_OP_PART_ID - 1729)) | (1 << (self::SYS_OP_PIVOT - 1729)) | (1 << (self::SYS_OP_R2O - 1729)) | (1 << (self::SYS_OP_RAWTONUM - 1729)) | (1 << (self::SYS_OP_RDTM - 1729)) | (1 << (self::SYS_OP_REF - 1729)) | (1 << (self::SYS_OP_RMTD - 1729)) | (1 << (self::SYS_OP_ROWIDTOOBJ - 1729)) | (1 << (self::SYS_OP_RPB - 1729)) | (1 << (self::SYS_OPTLOBPRBSC - 1729)) | (1 << (self::SYS_OP_TOSETID - 1729)) | (1 << (self::SYS_OP_TPR - 1729)) | (1 << (self::SYS_OP_TRTB - 1729)) | (1 << (self::SYS_OPTXICMP - 1729)) | (1 << (self::SYS_OPTXQCASTASNQ - 1729)) | (1 << (self::SYS_OP_UNDESCEND - 1729)) | (1 << (self::SYS_OP_VECAND - 1729)) | (1 << (self::SYS_OP_VECBIT - 1729)) | (1 << (self::SYS_OP_VECOR - 1729)) | (1 << (self::SYS_OP_VECXOR - 1729)) | (1 << (self::SYS_OP_VERSION - 1729)) | (1 << (self::SYS_OP_VREF - 1729)) | (1 << (self::SYS_OP_VVD - 1729)) | (1 << (self::SYS_OP_XMLCONS_FOR_CSX - 1729)) | (1 << (self::SYS_OP_XPTHATG - 1729)) | (1 << (self::SYS_OP_XPTHIDX - 1729)) | (1 << (self::SYS_OP_XPTHOP - 1729)) | (1 << (self::SYS_OP_XTXT2SQLT - 1729)) | (1 << (self::SYS_OP_ZONE_ID - 1729)) | (1 << (self::SYS_ORDERKEY_DEPTH - 1729)) | (1 << (self::SYS_ORDERKEY_MAXCHILD - 1729)) | (1 << (self::SYS_ORDERKEY_PARENT - 1729)) | (1 << (self::SYS_PARALLEL_TXN - 1729)) | (1 << (self::SYS_PATHID_IS_ATTR - 1729)) | (1 << (self::SYS_PATHID_IS_NMSPC - 1729)) | (1 << (self::SYS_PATHID_LASTNAME - 1729)) | (1 << (self::SYS_PATHID_LASTNMSPC - 1729)) | (1 << (self::SYS_PATH_REVERSE - 1729)) | (1 << (self::SYS_PXQEXTRACT - 1729)) | (1 << (self::SYS_RAW_TO_XSID - 1729)) | (1 << (self::SYS_RID_ORDER - 1729)) | (1 << (self::SYS_ROW_DELTA - 1729)) | (1 << (self::SYS_SC_2_XMLT - 1729)) | (1 << (self::SYS_SYNRCIREDO - 1729)) | (1 << (self::SYSTEM_DEFINED - 1729)) | (1 << (self::SYSTEM - 1729)) | (1 << (self::SYSTIMESTAMP - 1729)) | (1 << (self::SYS_TYPEID - 1729)) | (1 << (self::SYS_UMAKEXML - 1729)) | (1 << (self::SYS_XMLANALYZE - 1729)) | (1 << (self::SYS_XMLCONTAINS - 1729)) | (1 << (self::SYS_XMLCONV - 1729)) | (1 << (self::SYS_XMLEXNSURI - 1729)) | (1 << (self::SYS_XMLGEN - 1729)) | (1 << (self::SYS_XMLI_LOC_ISNODE - 1729)) | (1 << (self::SYS_XMLI_LOC_ISTEXT - 1729)) | (1 << (self::SYS_XMLINSTR - 1729)) | (1 << (self::SYS_XMLLOCATOR_GETSVAL - 1729)) | (1 << (self::SYS_XMLNODEID_GETCID - 1729)))) !== 0) || (((($_la - 1793)) & ~0x3f) === 0 && ((1 << ($_la - 1793)) & ((1 << (self::SYS_XMLNODEID_GETLOCATOR - 1793)) | (1 << (self::SYS_XMLNODEID_GETOKEY - 1793)) | (1 << (self::SYS_XMLNODEID_GETPATHID - 1793)) | (1 << (self::SYS_XMLNODEID_GETPTRID - 1793)) | (1 << (self::SYS_XMLNODEID_GETRID - 1793)) | (1 << (self::SYS_XMLNODEID_GETSVAL - 1793)) | (1 << (self::SYS_XMLNODEID_GETTID - 1793)) | (1 << (self::SYS_XMLNODEID - 1793)) | (1 << (self::SYS_XMLT_2_SC - 1793)) | (1 << (self::SYS_XMLTRANSLATE - 1793)) | (1 << (self::SYS_XMLTYPE2SQL - 1793)) | (1 << (self::SYS_XQ_ASQLCNV - 1793)) | (1 << (self::SYS_XQ_ATOMCNVCHK - 1793)) | (1 << (self::SYS_XQBASEURI - 1793)) | (1 << (self::SYS_XQCASTABLEERRH - 1793)) | (1 << (self::SYS_XQCODEP2STR - 1793)) | (1 << (self::SYS_XQCODEPEQ - 1793)) | (1 << (self::SYS_XQCON2SEQ - 1793)) | (1 << (self::SYS_XQCONCAT - 1793)) | (1 << (self::SYS_XQDELETE - 1793)) | (1 << (self::SYS_XQDFLTCOLATION - 1793)) | (1 << (self::SYS_XQDOC - 1793)) | (1 << (self::SYS_XQDOCURI - 1793)) | (1 << (self::SYS_XQDURDIV - 1793)) | (1 << (self::SYS_XQED4URI - 1793)) | (1 << (self::SYS_XQENDSWITH - 1793)) | (1 << (self::SYS_XQERRH - 1793)) | (1 << (self::SYS_XQERR - 1793)) | (1 << (self::SYS_XQESHTMLURI - 1793)) | (1 << (self::SYS_XQEXLOBVAL - 1793)) | (1 << (self::SYS_XQEXSTWRP - 1793)) | (1 << (self::SYS_XQEXTRACT - 1793)) | (1 << (self::SYS_XQEXTRREF - 1793)) | (1 << (self::SYS_XQEXVAL - 1793)) | (1 << (self::SYS_XQFB2STR - 1793)) | (1 << (self::SYS_XQFNBOOL - 1793)) | (1 << (self::SYS_XQFNCMP - 1793)) | (1 << (self::SYS_XQFNDATIM - 1793)) | (1 << (self::SYS_XQFNLNAME - 1793)) | (1 << (self::SYS_XQFNNM - 1793)) | (1 << (self::SYS_XQFNNSURI - 1793)) | (1 << (self::SYS_XQFNPREDTRUTH - 1793)) | (1 << (self::SYS_XQFNQNM - 1793)) | (1 << (self::SYS_XQFNROOT - 1793)) | (1 << (self::SYS_XQFORMATNUM - 1793)) | (1 << (self::SYS_XQFTCONTAIN - 1793)) | (1 << (self::SYS_XQFUNCR - 1793)) | (1 << (self::SYS_XQGETCONTENT - 1793)) | (1 << (self::SYS_XQINDXOF - 1793)) | (1 << (self::SYS_XQINSERT - 1793)) | (1 << (self::SYS_XQINSPFX - 1793)) | (1 << (self::SYS_XQIRI2URI - 1793)) | (1 << (self::SYS_XQLANG - 1793)) | (1 << (self::SYS_XQLLNMFRMQNM - 1793)) | (1 << (self::SYS_XQMKNODEREF - 1793)) | (1 << (self::SYS_XQNILLED - 1793)) | (1 << (self::SYS_XQNODENAME - 1793)) | (1 << (self::SYS_XQNORMSPACE - 1793)) | (1 << (self::SYS_XQNORMUCODE - 1793)) | (1 << (self::SYS_XQ_NRNG - 1793)) | (1 << (self::SYS_XQNSP4PFX - 1793)) | (1 << (self::SYS_XQNSPFRMQNM - 1793)) | (1 << (self::SYS_XQPFXFRMQNM - 1793)) | (1 << (self::SYS_XQ_PKSQL2XML - 1793)))) !== 0) || (((($_la - 1857)) & ~0x3f) === 0 && ((1 << ($_la - 1857)) & ((1 << (self::SYS_XQPOLYABS - 1857)) | (1 << (self::SYS_XQPOLYADD - 1857)) | (1 << (self::SYS_XQPOLYCEL - 1857)) | (1 << (self::SYS_XQPOLYCSTBL - 1857)) | (1 << (self::SYS_XQPOLYCST - 1857)) | (1 << (self::SYS_XQPOLYDIV - 1857)) | (1 << (self::SYS_XQPOLYFLR - 1857)) | (1 << (self::SYS_XQPOLYMOD - 1857)) | (1 << (self::SYS_XQPOLYMUL - 1857)) | (1 << (self::SYS_XQPOLYRND - 1857)) | (1 << (self::SYS_XQPOLYSQRT - 1857)) | (1 << (self::SYS_XQPOLYSUB - 1857)) | (1 << (self::SYS_XQPOLYUMUS - 1857)) | (1 << (self::SYS_XQPOLYUPLS - 1857)) | (1 << (self::SYS_XQPOLYVEQ - 1857)) | (1 << (self::SYS_XQPOLYVGE - 1857)) | (1 << (self::SYS_XQPOLYVGT - 1857)) | (1 << (self::SYS_XQPOLYVLE - 1857)) | (1 << (self::SYS_XQPOLYVLT - 1857)) | (1 << (self::SYS_XQPOLYVNE - 1857)) | (1 << (self::SYS_XQREF2VAL - 1857)) | (1 << (self::SYS_XQRENAME - 1857)) | (1 << (self::SYS_XQREPLACE - 1857)) | (1 << (self::SYS_XQRESVURI - 1857)) | (1 << (self::SYS_XQRNDHALF2EVN - 1857)) | (1 << (self::SYS_XQRSLVQNM - 1857)) | (1 << (self::SYS_XQRYENVPGET - 1857)) | (1 << (self::SYS_XQRYVARGET - 1857)) | (1 << (self::SYS_XQRYWRP - 1857)) | (1 << (self::SYS_XQSEQ2CON4XC - 1857)) | (1 << (self::SYS_XQSEQ2CON - 1857)) | (1 << (self::SYS_XQSEQDEEPEQ - 1857)) | (1 << (self::SYS_XQSEQINSB - 1857)) | (1 << (self::SYS_XQSEQRM - 1857)) | (1 << (self::SYS_XQSEQRVS - 1857)) | (1 << (self::SYS_XQSEQSUB - 1857)) | (1 << (self::SYS_XQSEQTYPMATCH - 1857)) | (1 << (self::SYS_XQSTARTSWITH - 1857)) | (1 << (self::SYS_XQSTATBURI - 1857)) | (1 << (self::SYS_XQSTR2CODEP - 1857)) | (1 << (self::SYS_XQSTRJOIN - 1857)) | (1 << (self::SYS_XQSUBSTRAFT - 1857)) | (1 << (self::SYS_XQSUBSTRBEF - 1857)) | (1 << (self::SYS_XQTOKENIZE - 1857)) | (1 << (self::SYS_XQTREATAS - 1857)) | (1 << (self::SYS_XQ_UPKXML2SQL - 1857)) | (1 << (self::SYS_XQXFORM - 1857)) | (1 << (self::SYS_XSID_TO_RAW - 1857)) | (1 << (self::SYS_ZMAP_FILTER - 1857)) | (1 << (self::SYS_ZMAP_REFRESH - 1857)) | (1 << (self::TABLE_LOOKUP_BY_NL - 1857)) | (1 << (self::TABLESPACE_NO - 1857)) | (1 << (self::TABLESPACE - 1857)) | (1 << (self::TABLES - 1857)) | (1 << (self::TABLE_STATS - 1857)) | (1 << (self::TABLE - 1857)) | (1 << (self::TABNO - 1857)) | (1 << (self::TAG - 1857)) | (1 << (self::TANH - 1857)) | (1 << (self::TAN - 1857)) | (1 << (self::TBLORIDXPARTNUM - 1857)) | (1 << (self::TEMPFILE - 1857)) | (1 << (self::TEMPLATE - 1857)) | (1 << (self::TEMPORARY - 1857)))) !== 0) || (((($_la - 1921)) & ~0x3f) === 0 && ((1 << ($_la - 1921)) & ((1 << (self::TEMP_TABLE - 1921)) | (1 << (self::TEST - 1921)) | (1 << (self::TEXT - 1921)) | (1 << (self::THAN - 1921)) | (1 << (self::THEN - 1921)) | (1 << (self::THE - 1921)) | (1 << (self::THREAD - 1921)) | (1 << (self::THROUGH - 1921)) | (1 << (self::TIER - 1921)) | (1 << (self::TIES - 1921)) | (1 << (self::TIMEOUT - 1921)) | (1 << (self::TIMESTAMP_LTZ_UNCONSTRAINED - 1921)) | (1 << (self::TIMESTAMP - 1921)) | (1 << (self::TIMESTAMP_TZ_UNCONSTRAINED - 1921)) | (1 << (self::TIMESTAMP_UNCONSTRAINED - 1921)) | (1 << (self::TIMES - 1921)) | (1 << (self::TIME - 1921)) | (1 << (self::TIMEZONE_ABBR - 1921)) | (1 << (self::TIMEZONE_HOUR - 1921)) | (1 << (self::TIMEZONE_MINUTE - 1921)) | (1 << (self::TIMEZONE_OFFSET - 1921)) | (1 << (self::TIMEZONE_REGION - 1921)) | (1 << (self::TIME_ZONE - 1921)) | (1 << (self::TIV_GB - 1921)) | (1 << (self::TIV_SSF - 1921)) | (1 << (self::TO_ACLID - 1921)) | (1 << (self::TO_BINARY_DOUBLE - 1921)) | (1 << (self::TO_BINARY_FLOAT - 1921)) | (1 << (self::TO_BLOB - 1921)) | (1 << (self::TO_CLOB - 1921)) | (1 << (self::TO_DSINTERVAL - 1921)) | (1 << (self::TO_LOB - 1921)) | (1 << (self::TO_MULTI_BYTE - 1921)) | (1 << (self::TO_NCHAR - 1921)) | (1 << (self::TO_NCLOB - 1921)) | (1 << (self::TO_NUMBER - 1921)) | (1 << (self::TOPLEVEL - 1921)) | (1 << (self::TO_SINGLE_BYTE - 1921)) | (1 << (self::TO_TIMESTAMP - 1921)) | (1 << (self::TO_TIMESTAMP_TZ - 1921)) | (1 << (self::TO_TIME - 1921)) | (1 << (self::TO_TIME_TZ - 1921)) | (1 << (self::TO_YMINTERVAL - 1921)) | (1 << (self::TRACE - 1921)) | (1 << (self::TRACING - 1921)) | (1 << (self::TRACKING - 1921)) | (1 << (self::TRAILING - 1921)) | (1 << (self::TRANSACTION - 1921)) | (1 << (self::TRANSFORM_DISTINCT_AGG - 1921)) | (1 << (self::TRANSITIONAL - 1921)) | (1 << (self::TRANSITION - 1921)) | (1 << (self::TRANSLATE - 1921)) | (1 << (self::TRANSLATION - 1921)) | (1 << (self::TREAT - 1921)) | (1 << (self::TRIGGERS - 1921)) | (1 << (self::TRIGGER - 1921)) | (1 << (self::TRUE - 1921)) | (1 << (self::TRUNCATE - 1921)) | (1 << (self::TRUNC - 1921)) | (1 << (self::TRUSTED - 1921)) | (1 << (self::TRUST - 1921)) | (1 << (self::TUNING - 1921)))) !== 0) || (((($_la - 1985)) & ~0x3f) === 0 && ((1 << ($_la - 1985)) & ((1 << (self::TX - 1985)) | (1 << (self::TYPES - 1985)) | (1 << (self::TYPE - 1985)) | (1 << (self::TZ_OFFSET - 1985)) | (1 << (self::UB2 - 1985)) | (1 << (self::UBA - 1985)) | (1 << (self::UCS2 - 1985)) | (1 << (self::UID - 1985)) | (1 << (self::UNARCHIVED - 1985)) | (1 << (self::UNBOUNDED - 1985)) | (1 << (self::UNBOUND - 1985)) | (1 << (self::UNCONDITIONAL - 1985)) | (1 << (self::UNDER - 1985)) | (1 << (self::UNDO - 1985)) | (1 << (self::UNDROP - 1985)) | (1 << (self::UNIFORM - 1985)) | (1 << (self::UNISTR - 1985)) | (1 << (self::UNLIMITED - 1985)) | (1 << (self::UNLOAD - 1985)) | (1 << (self::UNLOCK - 1985)) | (1 << (self::UNMATCHED - 1985)) | (1 << (self::UNNEST_INNERJ_DISTINCT_VIEW - 1985)) | (1 << (self::UNNEST_NOSEMIJ_NODISTINCTVIEW - 1985)) | (1 << (self::UNNEST_SEMIJ_VIEW - 1985)) | (1 << (self::UNNEST - 1985)) | (1 << (self::UNPACKED - 1985)) | (1 << (self::UNPIVOT - 1985)) | (1 << (self::UNPLUG - 1985)) | (1 << (self::UNPROTECTED - 1985)) | (1 << (self::UNQUIESCE - 1985)) | (1 << (self::UNRECOVERABLE - 1985)) | (1 << (self::UNRESTRICTED - 1985)) | (1 << (self::UNSUBSCRIBE - 1985)) | (1 << (self::UNTIL - 1985)) | (1 << (self::UNUSABLE - 1985)) | (1 << (self::UNUSED - 1985)) | (1 << (self::UPDATABLE - 1985)) | (1 << (self::UPDATED - 1985)) | (1 << (self::UPDATEXML - 1985)) | (1 << (self::UPD_INDEXES - 1985)) | (1 << (self::UPD_JOININDEX - 1985)) | (1 << (self::UPGRADE - 1985)) | (1 << (self::UPPER - 1985)) | (1 << (self::UPSERT - 1985)) | (1 << (self::UROWID - 1985)) | (1 << (self::USABLE - 1985)) | (1 << (self::USAGE - 1985)) | (1 << (self::USE_ANTI - 1985)) | (1 << (self::USE_CONCAT - 1985)) | (1 << (self::USE_CUBE - 1985)) | (1 << (self::USE_HASH_AGGREGATION - 1985)) | (1 << (self::USE_HASH_GBY_FOR_PUSHDOWN - 1985)) | (1 << (self::USE_HASH - 1985)) | (1 << (self::USE_HIDDEN_PARTITIONS - 1985)) | (1 << (self::USE_INVISIBLE_INDEXES - 1985)) | (1 << (self::USE_MERGE_CARTESIAN - 1985)) | (1 << (self::USE_MERGE - 1985)) | (1 << (self::USE_NL - 1985)) | (1 << (self::USE_NL_WITH_INDEX - 1985)) | (1 << (self::USE_PRIVATE_OUTLINES - 1985)) | (1 << (self::USER_DATA - 1985)))) !== 0) || (((($_la - 2049)) & ~0x3f) === 0 && ((1 << ($_la - 2049)) & ((1 << (self::USER_DEFINED - 2049)) | (1 << (self::USERENV - 2049)) | (1 << (self::USERGROUP - 2049)) | (1 << (self::USER_RECYCLEBIN - 2049)) | (1 << (self::USERS - 2049)) | (1 << (self::USER_TABLESPACES - 2049)) | (1 << (self::USER - 2049)) | (1 << (self::USE_SEMI - 2049)) | (1 << (self::USE_STORED_OUTLINES - 2049)) | (1 << (self::USE_TTT_FOR_GSETS - 2049)) | (1 << (self::USE - 2049)) | (1 << (self::USE_VECTOR_AGGREGATION - 2049)) | (1 << (self::USE_WEAK_NAME_RESL - 2049)) | (1 << (self::USING_NO_EXPAND - 2049)) | (1 << (self::USING - 2049)) | (1 << (self::UTF16BE - 2049)) | (1 << (self::UTF16LE - 2049)) | (1 << (self::UTF32 - 2049)) | (1 << (self::UTF8 - 2049)) | (1 << (self::V1 - 2049)) | (1 << (self::V2 - 2049)) | (1 << (self::VALIDATE - 2049)) | (1 << (self::VALIDATION - 2049)) | (1 << (self::VALID_TIME_END - 2049)) | (1 << (self::VALUE - 2049)) | (1 << (self::VARCHAR2 - 2049)) | (1 << (self::VARCHAR - 2049)) | (1 << (self::VARIABLE - 2049)) | (1 << (self::VAR_POP - 2049)) | (1 << (self::VARRAYS - 2049)) | (1 << (self::VARRAY - 2049)) | (1 << (self::VAR_SAMP - 2049)) | (1 << (self::VARYING - 2049)) | (1 << (self::VECTOR_READ_TRACE - 2049)) | (1 << (self::VECTOR_READ - 2049)) | (1 << (self::VECTOR_TRANSFORM_DIMS - 2049)) | (1 << (self::VECTOR_TRANSFORM_FACT - 2049)) | (1 << (self::VECTOR_TRANSFORM - 2049)) | (1 << (self::VERIFIER - 2049)) | (1 << (self::VERIFY - 2049)) | (1 << (self::VERSIONING - 2049)) | (1 << (self::VERSIONS_ENDSCN - 2049)) | (1 << (self::VERSIONS_ENDTIME - 2049)) | (1 << (self::VERSIONS_OPERATION - 2049)) | (1 << (self::VERSIONS_STARTSCN - 2049)) | (1 << (self::VERSIONS_STARTTIME - 2049)) | (1 << (self::VERSIONS - 2049)) | (1 << (self::VERSIONS_XID - 2049)) | (1 << (self::VERSION - 2049)) | (1 << (self::VIOLATION - 2049)) | (1 << (self::VIRTUAL - 2049)) | (1 << (self::VISIBILITY - 2049)) | (1 << (self::VISIBLE - 2049)) | (1 << (self::VOLUME - 2049)) | (1 << (self::VSIZE - 2049)) | (1 << (self::WAIT - 2049)) | (1 << (self::WALLET - 2049)) | (1 << (self::WARNING - 2049)) | (1 << (self::WEEKS - 2049)) | (1 << (self::WEEK - 2049)) | (1 << (self::WELLFORMED - 2049)) | (1 << (self::WHENEVER - 2049)))) !== 0) || (((($_la - 2113)) & ~0x3f) === 0 && ((1 << ($_la - 2113)) & ((1 << (self::WHEN - 2113)) | (1 << (self::WHILE - 2113)) | (1 << (self::WHITESPACE - 2113)) | (1 << (self::WIDTH_BUCKET - 2113)) | (1 << (self::WITHIN - 2113)) | (1 << (self::WITHOUT - 2113)) | (1 << (self::WITH_PLSQL - 2113)) | (1 << (self::WORK - 2113)) | (1 << (self::WRAPPED - 2113)) | (1 << (self::WRAPPER - 2113)) | (1 << (self::WRITE - 2113)) | (1 << (self::XDB_FASTPATH_INSERT - 2113)) | (1 << (self::X_DYN_PRUNE - 2113)) | (1 << (self::XID - 2113)) | (1 << (self::XML2OBJECT - 2113)) | (1 << (self::XMLAGG - 2113)) | (1 << (self::XMLATTRIBUTES - 2113)) | (1 << (self::XMLCAST - 2113)) | (1 << (self::XMLCDATA - 2113)) | (1 << (self::XMLCOLATTVAL - 2113)) | (1 << (self::XMLCOMMENT - 2113)) | (1 << (self::XMLCONCAT - 2113)) | (1 << (self::XMLDIFF - 2113)) | (1 << (self::XML_DML_RWT_STMT - 2113)) | (1 << (self::XMLELEMENT - 2113)) | (1 << (self::XMLEXISTS2 - 2113)) | (1 << (self::XMLEXISTS - 2113)) | (1 << (self::XMLFOREST - 2113)) | (1 << (self::XMLINDEX_REWRITE_IN_SELECT - 2113)) | (1 << (self::XMLINDEX_REWRITE - 2113)) | (1 << (self::XMLINDEX_SEL_IDX_TBL - 2113)) | (1 << (self::XMLISNODE - 2113)) | (1 << (self::XMLISVALID - 2113)) | (1 << (self::XMLNAMESPACES - 2113)) | (1 << (self::XMLPARSE - 2113)) | (1 << (self::XMLPATCH - 2113)) | (1 << (self::XMLPI - 2113)) | (1 << (self::XMLQUERYVAL - 2113)) | (1 << (self::XMLQUERY - 2113)) | (1 << (self::XMLROOT - 2113)) | (1 << (self::XMLSCHEMA - 2113)) | (1 << (self::XMLSERIALIZE - 2113)) | (1 << (self::XMLTABLE - 2113)) | (1 << (self::XMLTRANSFORMBLOB - 2113)) | (1 << (self::XMLTRANSFORM - 2113)) | (1 << (self::XMLTYPE - 2113)) | (1 << (self::XML - 2113)) | (1 << (self::XPATHTABLE - 2113)) | (1 << (self::XS_SYS_CONTEXT - 2113)) | (1 << (self::XS - 2113)) | (1 << (self::YEARS - 2113)) | (1 << (self::YEAR - 2113)) | (1 << (self::YES - 2113)) | (1 << (self::YMINTERVAL_UNCONSTRAINED - 2113)) | (1 << (self::ZONEMAP - 2113)) | (1 << (self::ZONE - 2113)) | (1 << (self::PREDICTION - 2113)) | (1 << (self::PREDICTION_BOUNDS - 2113)) | (1 << (self::PREDICTION_COST - 2113)))) !== 0) || (((($_la - 2177)) & ~0x3f) === 0 && ((1 << ($_la - 2177)) & ((1 << (self::PREDICTION_DETAILS - 2177)) | (1 << (self::PREDICTION_PROBABILITY - 2177)) | (1 << (self::PREDICTION_SET - 2177)) | (1 << (self::CUME_DIST - 2177)) | (1 << (self::DENSE_RANK - 2177)) | (1 << (self::LISTAGG - 2177)) | (1 << (self::PERCENT_RANK - 2177)) | (1 << (self::PERCENTILE_CONT - 2177)) | (1 << (self::PERCENTILE_DISC - 2177)) | (1 << (self::RANK - 2177)) | (1 << (self::AVG - 2177)) | (1 << (self::CORR - 2177)) | (1 << (self::COVAR_ - 2177)) | (1 << (self::LAG - 2177)) | (1 << (self::LEAD - 2177)) | (1 << (self::MAX - 2177)) | (1 << (self::MEDIAN - 2177)) | (1 << (self::MIN - 2177)) | (1 << (self::NTILE - 2177)) | (1 << (self::NVL - 2177)) | (1 << (self::RATIO_TO_REPORT - 2177)) | (1 << (self::REGR_ - 2177)) | (1 << (self::ROUND - 2177)) | (1 << (self::ROW_NUMBER - 2177)) | (1 << (self::SUBSTR - 2177)) | (1 << (self::TO_CHAR - 2177)) | (1 << (self::TRIM - 2177)) | (1 << (self::SUM - 2177)) | (1 << (self::STDDEV - 2177)) | (1 << (self::VAR_ - 2177)) | (1 << (self::VARIANCE - 2177)) | (1 << (self::LEAST - 2177)) | (1 << (self::GREATEST - 2177)) | (1 << (self::TO_DATE - 2177)) | (1 << (self::PERIOD - 2177)))) !== 0) || $_la === self::REGULAR_ID) {
                $this->setState(3425);
                $this->partition_name();
                $this->setState(3437);
                $this->errorHandler->sync($this);

                switch ($this->input->LA(1)) {
                    case self::COMPRESS:
                    case self::FILESYSTEM_LIKE_LOGGING:
                    case self::INITRANS:
                    case self::LOGGING:
                    case self::NOCOMPRESS:
                    case self::NOLOGGING:
                    case self::PCTFREE:
                    case self::PCTUSED:
                    case self::STORAGE:
                    case self::TABLESPACE:
                        $this->setState(3428);
                        $this->errorHandler->sync($this);

                        $_la = $this->input->LA(1);
                        do {
                            $this->setState(3428);
                            $this->errorHandler->sync($this);

                            switch ($this->input->LA(1)) {
                                case self::FILESYSTEM_LIKE_LOGGING:
                                case self::INITRANS:
                                case self::LOGGING:
                                case self::NOLOGGING:
                                case self::PCTFREE:
                                case self::PCTUSED:
                                case self::STORAGE:
                                case self::TABLESPACE:
                                    $this->setState(3426);
                                    $this->segment_attributes_clause();
                                    break;

                                case self::COMPRESS:
                                case self::NOCOMPRESS:
                                    $this->setState(3427);
                                    $this->key_compression();
                                    break;

                                default:
                                    throw new NoViableAltException($this);
                            }
                            $this->setState(3430);
                            $this->errorHandler->sync($this);
                            $_la = $this->input->LA(1);
                        } while ($_la === self::COMPRESS || $_la === self::FILESYSTEM_LIKE_LOGGING || $_la === self::INITRANS || $_la === self::LOGGING || $_la === self::NOCOMPRESS || $_la === self::NOLOGGING || $_la === self::PCTFREE || $_la === self::PCTUSED || $_la === self::STORAGE || $_la === self::TABLESPACE);
                        break;

                    case self::PARAMETERS:
                        $this->setState(3432);
                        $this->match(self::PARAMETERS);
                        $this->setState(3433);
                        $this->match(self::LEFT_PAREN);
                        $this->setState(3434);
                        $this->odci_parameters();
                        $this->setState(3435);
                        $this->match(self::RIGHT_PAREN);
                        break;

                    default:
                        throw new NoViableAltException($this);
                }
                $this->setState(3440);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);

                if ($_la === self::UNUSABLE) {
                    $this->setState(3439);
                    $this->match(self::UNUSABLE);
                }
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
    public function modify_index_subpartition(): Context\Modify_index_subpartitionContext
    {
        $localContext = new Context\Modify_index_subpartitionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 260, self::RULE_modify_index_subpartition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3444);
            $this->match(self::MODIFY);
            $this->setState(3445);
            $this->match(self::SUBPARTITION);
            $this->setState(3446);
            $this->subpartition_name();
            $this->setState(3450);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::UNUSABLE:
                    $this->setState(3447);
                    $this->match(self::UNUSABLE);
                    break;

                case self::ALLOCATE:
                    $this->setState(3448);
                    $this->allocate_extent_clause();
                    break;

                case self::DEALLOCATE:
                    $this->setState(3449);
                    $this->deallocate_unused_clause();
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
    public function partition_name_old(): Context\Partition_name_oldContext
    {
        $localContext = new Context\Partition_name_oldContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 262, self::RULE_partition_name_old);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3452);
            $this->partition_name();
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
    public function new_partition_name(): Context\New_partition_nameContext
    {
        $localContext = new Context\New_partition_nameContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 264, self::RULE_new_partition_name);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3454);
            $this->partition_name();
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
    public function new_index_name(): Context\New_index_nameContext
    {
        $localContext = new Context\New_index_nameContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 266, self::RULE_new_index_name);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3456);
            $this->index_name();
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
    public function create_user(): Context\Create_userContext
    {
        $localContext = new Context\Create_userContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 268, self::RULE_create_user);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3458);
            $this->match(self::CREATE);
            $this->setState(3459);
            $this->match(self::USER);
            $this->setState(3460);
            $this->user_object_name();
            $this->setState(3470);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            do {
                $this->setState(3470);
                $this->errorHandler->sync($this);

                switch ($this->getInterpreter()->adaptivePredict($this->input, 290, $this->ctx)) {
                    case 1:
                        $this->setState(3461);
                        $this->identified_by();
                        break;

                    case 2:
                        $this->setState(3462);
                        $this->identified_other_clause();
                        break;

                    case 3:
                        $this->setState(3463);
                        $this->user_tablespace_clause();
                        break;

                    case 4:
                        $this->setState(3464);
                        $this->quota_clause();
                        break;

                    case 5:
                        $this->setState(3465);
                        $this->profile_clause();
                        break;

                    case 6:
                        $this->setState(3466);
                        $this->password_expire_clause();
                        break;

                    case 7:
                        $this->setState(3467);
                        $this->user_lock_clause();
                        break;

                    case 8:
                        $this->setState(3468);
                        $this->user_editions_clause();
                        break;

                    case 9:
                        $this->setState(3469);
                        $this->container_clause();
                        break;
                }
                $this->setState(3472);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            } while ($_la === self::ACCOUNT || $_la === self::CONTAINER || $_la === self::DEFAULT || $_la === self::ENABLE || $_la === self::IDENTIFIED || $_la === self::PASSWORD || $_la === self::PROFILE || $_la === self::QUOTA || $_la === self::TEMPORARY);
            $this->setState(3474);
            $this->match(self::SEMICOLON);
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
    public function alter_user(): Context\Alter_userContext
    {
        $localContext = new Context\Alter_userContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 270, self::RULE_alter_user);

        try {
            $this->setState(3507);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::ALTER:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3476);
                    $this->match(self::ALTER);
                    $this->setState(3477);
                    $this->match(self::USER);
                    $this->setState(3478);
                    $this->user_object_name();
                    $this->setState(3490);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    do {
                        $this->setState(3490);
                        $this->errorHandler->sync($this);

                        switch ($this->getInterpreter()->adaptivePredict($this->input, 292, $this->ctx)) {
                            case 1:
                                $this->setState(3479);
                                $this->alter_identified_by();
                                break;

                            case 2:
                                $this->setState(3480);
                                $this->identified_other_clause();
                                break;

                            case 3:
                                $this->setState(3481);
                                $this->user_tablespace_clause();
                                break;

                            case 4:
                                $this->setState(3482);
                                $this->quota_clause();
                                break;

                            case 5:
                                $this->setState(3483);
                                $this->profile_clause();
                                break;

                            case 6:
                                $this->setState(3484);
                                $this->user_default_role_clause();
                                break;

                            case 7:
                                $this->setState(3485);
                                $this->password_expire_clause();
                                break;

                            case 8:
                                $this->setState(3486);
                                $this->user_lock_clause();
                                break;

                            case 9:
                                $this->setState(3487);
                                $this->alter_user_editions_clause();
                                break;

                            case 10:
                                $this->setState(3488);
                                $this->container_clause();
                                break;

                            case 11:
                                $this->setState(3489);
                                $this->container_data_clause();
                                break;
                        }
                        $this->setState(3492);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    } while ($_la === self::ACCOUNT || $_la === self::ADD || $_la === self::CONTAINER || $_la === self::DEFAULT || $_la === self::ENABLE || $_la === self::IDENTIFIED || $_la === self::PASSWORD || $_la === self::PROFILE || $_la === self::QUOTA || $_la === self::REMOVE || $_la === self::SET || $_la === self::TEMPORARY);
                    $this->setState(3494);
                    $this->match(self::SEMICOLON);
                    break;

                case self::ABORT:
                case self::ABS:
                case self::ACCESS:
                case self::ACCESSED:
                case self::ACCOUNT:
                case self::ACL:
                case self::ACOS:
                case self::ACTION:
                case self::ACTIONS:
                case self::ACTIVATE:
                case self::ACTIVE:
                case self::ACTIVE_COMPONENT:
                case self::ACTIVE_DATA:
                case self::ACTIVE_FUNCTION:
                case self::ACTIVE_TAG:
                case self::ACTIVITY:
                case self::ADAPTIVE_PLAN:
                case self::ADD:
                case self::ADD_COLUMN:
                case self::ADD_GROUP:
                case self::ADD_MONTHS:
                case self::ADJ_DATE:
                case self::ADMIN:
                case self::ADMINISTER:
                case self::ADMINISTRATOR:
                case self::ADVANCED:
                case self::ADVISE:
                case self::ADVISOR:
                case self::AFD_DISKSTRING:
                case self::AFTER:
                case self::AGENT:
                case self::AGGREGATE:
                case self::A_LETTER:
                case self::ALIAS:
                case self::ALLOCATE:
                case self::ALLOW:
                case self::ALL_ROWS:
                case self::ALWAYS:
                case self::ANALYZE:
                case self::ANCILLARY:
                case self::AND_EQUAL:
                case self::ANOMALY:
                case self::ANSI_REARCH:
                case self::ANTIJOIN:
                case self::ANYSCHEMA:
                case self::APPEND:
                case self::APPENDCHILDXML:
                case self::APPEND_VALUES:
                case self::APPLICATION:
                case self::APPLY:
                case self::APPROX_COUNT_DISTINCT:
                case self::ARCHIVAL:
                case self::ARCHIVE:
                case self::ARCHIVED:
                case self::ARCHIVELOG:
                case self::ARRAY:
                case self::ASCII:
                case self::ASCIISTR:
                case self::ASIN:
                case self::ASIS:
                case self::ASSEMBLY:
                case self::ASSIGN:
                case self::ASSOCIATE:
                case self::ASYNC:
                case self::ASYNCHRONOUS:
                case self::ATAN2:
                case self::ATAN:
                case self::AT:
                case self::ATTRIBUTE:
                case self::ATTRIBUTES:
                case self::AUTHENTICATED:
                case self::AUTHENTICATION:
                case self::AUTHID:
                case self::AUTHORIZATION:
                case self::AUTOALLOCATE:
                case self::AUTO:
                case self::AUTOEXTEND:
                case self::AUTO_LOGIN:
                case self::AUTOMATIC:
                case self::AUTONOMOUS_TRANSACTION:
                case self::AUTO_REOPTIMIZE:
                case self::AVAILABILITY:
                case self::AVRO:
                case self::BACKGROUND:
                case self::BACKUP:
                case self::BASIC:
                case self::BASICFILE:
                case self::BATCH:
                case self::BATCHSIZE:
                case self::BATCH_TABLE_ACCESS_BY_ROWID:
                case self::BECOME:
                case self::BEFORE:
                case self::BEGIN:
                case self::BEGINNING:
                case self::BEGIN_OUTLINE_DATA:
                case self::BEHALF:
                case self::BEQUEATH:
                case self::BFILE:
                case self::BFILENAME:
                case self::BIGFILE:
                case self::BINARY:
                case self::BINARY_DOUBLE:
                case self::BINARY_DOUBLE_INFINITY:
                case self::BINARY_DOUBLE_NAN:
                case self::BINARY_FLOAT:
                case self::BINARY_FLOAT_INFINITY:
                case self::BINARY_FLOAT_NAN:
                case self::BINARY_INTEGER:
                case self::BIND_AWARE:
                case self::BINDING:
                case self::BIN_TO_NUM:
                case self::BITAND:
                case self::BITMAP_AND:
                case self::BITMAP:
                case self::BITMAPS:
                case self::BITMAP_TREE:
                case self::BITS:
                case self::BLOB:
                case self::BLOCK:
                case self::BLOCK_RANGE:
                case self::BLOCKS:
                case self::BLOCKSIZE:
                case self::BODY:
                case self::BOOLEAN:
                case self::BOTH:
                case self::BOUND:
                case self::BRANCH:
                case self::BREADTH:
                case self::BROADCAST:
                case self::BSON:
                case self::BUFFER:
                case self::BUFFER_CACHE:
                case self::BUFFER_POOL:
                case self::BUILD:
                case self::BULK:
                case self::BYPASS_RECURSIVE_CHECK:
                case self::BYPASS_UJVC:
                case self::BYTE:
                case self::CACHE:
                case self::CACHE_CB:
                case self::CACHE_INSTANCES:
                case self::CACHE_TEMP_TABLE:
                case self::CACHING:
                case self::CALCULATED:
                case self::CALLBACK:
                case self::CALL:
                case self::CANCEL:
                case self::CAPACITY:
                case self::CARDINALITY:
                case self::CASCADE:
                case self::CASE:
                case self::CAST:
                case self::CATEGORY:
                case self::CDBDEFAULT:
                case self::CEIL:
                case self::CELL_FLASH_CACHE:
                case self::CERTIFICATE:
                case self::CFILE:
                case self::CHAINED:
                case self::CHANGE:
                case self::CHANGE_DUPKEY_ERROR_INDEX:
                case self::CHARACTER:
                case self::CHAR:
                case self::CHAR_CS:
                case self::CHARTOROWID:
                case self::CHECK_ACL_REWRITE:
                case self::CHECKPOINT:
                case self::CHILD:
                case self::CHOOSE:
                case self::CHR:
                case self::CHUNK:
                case self::CLASS:
                case self::CLASSIFIER:
                case self::CLEANUP:
                case self::CLEAR:
                case self::C_LETTER:
                case self::CLIENT:
                case self::CLOB:
                case self::CLONE:
                case self::CLOSE_CACHED_OPEN_CURSORS:
                case self::CLOSE:
                case self::CLUSTER_BY_ROWID:
                case self::CLUSTER:
                case self::CLUSTER_DETAILS:
                case self::CLUSTER_DISTANCE:
                case self::CLUSTER_ID:
                case self::CLUSTERING:
                case self::CLUSTERING_FACTOR:
                case self::CLUSTER_PROBABILITY:
                case self::CLUSTER_SET:
                case self::COALESCE:
                case self::COALESCE_SQ:
                case self::COARSE:
                case self::CO_AUTH_IND:
                case self::COLD:
                case self::COLLECT:
                case self::COLUMNAR:
                case self::COLUMN_AUTH_INDICATOR:
                case self::COLUMN:
                case self::COLUMNS:
                case self::COLUMN_STATS:
                case self::COLUMN_VALUE:
                case self::COMMENT:
                case self::COMMIT:
                case self::COMMITTED:
                case self::COMMON_DATA:
                case self::COMPACT:
                case self::COMPATIBILITY:
                case self::COMPILE:
                case self::COMPLETE:
                case self::COMPLIANCE:
                case self::COMPONENT:
                case self::COMPONENTS:
                case self::COMPOSE:
                case self::COMPOSITE:
                case self::COMPOSITE_LIMIT:
                case self::COMPOUND:
                case self::COMPUTE:
                case self::CONCAT:
                case self::CON_DBID_TO_ID:
                case self::CONDITIONAL:
                case self::CONDITION:
                case self::CONFIRM:
                case self::CONFORMING:
                case self::CON_GUID_TO_ID:
                case self::CON_ID:
                case self::CON_NAME_TO_ID:
                case self::CONNECT_BY_CB_WHR_ONLY:
                case self::CONNECT_BY_COMBINE_SW:
                case self::CONNECT_BY_COST_BASED:
                case self::CONNECT_BY_ELIM_DUPS:
                case self::CONNECT_BY_FILTERING:
                case self::CONNECT_BY_ISCYCLE:
                case self::CONNECT_BY_ISLEAF:
                case self::CONNECT_BY_ROOT:
                case self::CONNECT_TIME:
                case self::CONSIDER:
                case self::CONSISTENT:
                case self::CONSTANT:
                case self::CONST:
                case self::CONSTRAINT:
                case self::CONSTRAINTS:
                case self::CONSTRUCTOR:
                case self::CONTAINER:
                case self::CONTAINER_DATA:
                case self::CONTAINERS:
                case self::CONTENT:
                case self::CONTENTS:
                case self::CONTEXT:
                case self::CONTINUE:
                case self::CONTROLFILE:
                case self::CON_UID_TO_ID:
                case self::CONVERT:
                case self::COOKIE:
                case self::COPY:
                case self::CORR_K:
                case self::CORR_S:
                case self::CORRUPTION:
                case self::CORRUPT_XID_ALL:
                case self::CORRUPT_XID:
                case self::COS:
                case self::COSH:
                case self::COST:
                case self::COST_XML_QUERY_REWRITE:
                case self::COUNT:
                case self::COVAR_POP:
                case self::COVAR_SAMP:
                case self::CPU_COSTING:
                case self::CPU_PER_CALL:
                case self::CPU_PER_SESSION:
                case self::CRASH:
                case self::CREATE_FILE_DEST:
                case self::CREATE_STORED_OUTLINES:
                case self::CREATION:
                case self::CREDENTIAL:
                case self::CRITICAL:
                case self::CROSS:
                case self::CROSSEDITION:
                case self::CSCONVERT:
                case self::CUBE_AJ:
                case self::CUBE:
                case self::CUBE_GB:
                case self::CUBE_SJ:
                case self::CUME_DISTM:
                case self::CURRENT:
                case self::CURRENT_DATE:
                case self::CURRENT_SCHEMA:
                case self::CURRENT_TIME:
                case self::CURRENT_TIMESTAMP:
                case self::CURRENT_USER:
                case self::CURRENTV:
                case self::CURSOR:
                case self::CURSOR_SHARING_EXACT:
                case self::CURSOR_SPECIFIC_SEGMENT:
                case self::CUSTOMDATUM:
                case self::CV:
                case self::CYCLE:
                case self::DANGLING:
                case self::DATABASE:
                case self::DATA:
                case self::DATAFILE:
                case self::DATAFILES:
                case self::DATAMOVEMENT:
                case self::DATAOBJNO:
                case self::DATAOBJ_TO_MAT_PARTITION:
                case self::DATAOBJ_TO_PARTITION:
                case self::DATAPUMP:
                case self::DATA_SECURITY_REWRITE_LIMIT:
                case self::DATE_MODE:
                case self::DAY:
                case self::DAYS:
                case self::DBA:
                case self::DBA_RECYCLEBIN:
                case self::DBMS_STATS:
                case self::DB_ROLE_CHANGE:
                case self::DBTIMEZONE:
                case self::DB_UNIQUE_NAME:
                case self::DB_VERSION:
                case self::DDL:
                case self::DEALLOCATE:
                case self::DEBUG:
                case self::DEBUGGER:
                case self::DEC:
                case self::DECIMAL:
                case self::DECLARE:
                case self::DECOMPOSE:
                case self::DECORRELATE:
                case self::DECR:
                case self::DECREMENT:
                case self::DECRYPT:
                case self::DEDUPLICATE:
                case self::DEFAULTS:
                case self::DEFERRABLE:
                case self::DEFERRED:
                case self::DEFINED:
                case self::DEFINE:
                case self::DEFINER:
                case self::DEGREE:
                case self::DELAY:
                case self::DELEGATE:
                case self::DELETE_ALL:
                case self::DELETE:
                case self::DELETEXML:
                case self::DEMAND:
                case self::DENSE_RANKM:
                case self::DEPENDENT:
                case self::DEPTH:
                case self::DEQUEUE:
                case self::DEREF:
                case self::DEREF_NO_REWRITE:
                case self::DESTROY:
                case self::DETACHED:
                case self::DETERMINES:
                case self::DETERMINISTIC:
                case self::DICTIONARY:
                case self::DIMENSION:
                case self::DIMENSIONS:
                case self::DIRECT_LOAD:
                case self::DIRECTORY:
                case self::DIRECT_PATH:
                case self::DISABLE_ALL:
                case self::DISABLE:
                case self::DISABLE_PARALLEL_DML:
                case self::DISABLE_PRESET:
                case self::DISABLE_RPKE:
                case self::DISALLOW:
                case self::DISASSOCIATE:
                case self::DISCARD:
                case self::DISCONNECT:
                case self::DISK:
                case self::DISKGROUP:
                case self::DISKS:
                case self::DISMOUNT:
                case self::DISTINGUISHED:
                case self::DISTRIBUTED:
                case self::DISTRIBUTE:
                case self::DML:
                case self::DML_UPDATE:
                case self::DOCFIDELITY:
                case self::DOCUMENT:
                case self::DOMAIN_INDEX_FILTER:
                case self::DOMAIN_INDEX_NO_SORT:
                case self::DOMAIN_INDEX_SORT:
                case self::DOUBLE:
                case self::DOWNGRADE:
                case self::DRIVING_SITE:
                case self::DROP_COLUMN:
                case self::DROP_GROUP:
                case self::DSINTERVAL_UNCONSTRAINED:
                case self::DST_UPGRADE_INSERT_CONV:
                case self::DUMP:
                case self::DUPLICATE:
                case self::DV:
                case self::DYNAMIC:
                case self::DYNAMIC_SAMPLING:
                case self::DYNAMIC_SAMPLING_EST_CDN:
                case self::EACH:
                case self::EDITIONABLE:
                case self::EDITION:
                case self::EDITIONING:
                case self::EDITIONS:
                case self::ELEMENT:
                case self::ELIM_GROUPBY:
                case self::ELIMINATE_JOIN:
                case self::ELIMINATE_OBY:
                case self::ELIMINATE_OUTER_JOIN:
                case self::EM:
                case self::EMPTY_BLOB:
                case self::EMPTY_CLOB:
                case self::EMPTY:
                case self::ENABLE_ALL:
                case self::ENABLE:
                case self::ENABLE_PARALLEL_DML:
                case self::ENABLE_PRESET:
                case self::ENCODING:
                case self::ENCRYPT:
                case self::ENCRYPTION:
                case self::END_OUTLINE_DATA:
                case self::ENFORCED:
                case self::ENFORCE:
                case self::ENQUEUE:
                case self::ENTERPRISE:
                case self::ENTITYESCAPING:
                case self::ENTRY:
                case self::EQUIPART:
                case self::ERR:
                case self::ERROR_ARGUMENT:
                case self::ERROR:
                case self::ERROR_ON_OVERLAP_TIME:
                case self::ERRORS:
                case self::ESCAPE:
                case self::ESTIMATE:
                case self::EVAL:
                case self::EVALNAME:
                case self::EVALUATE:
                case self::EVALUATION:
                case self::EVENTS:
                case self::EVERY:
                case self::EXCEPT:
                case self::EXCEPTION:
                case self::EXCEPTION_INIT:
                case self::EXCEPTIONS:
                case self::EXCHANGE:
                case self::EXCLUDE:
                case self::EXCLUDING:
                case self::EXECUTE:
                case self::EXEMPT:
                case self::EXISTING:
                case self::EXISTS:
                case self::EXISTSNODE:
                case self::EXIT:
                case self::EXPAND_GSET_TO_UNION:
                case self::EXPAND_TABLE:
                case self::EXP:
                case self::EXPIRE:
                case self::EXPLAIN:
                case self::EXPLOSION:
                case self::EXPORT:
                case self::EXPR_CORR_CHECK:
                case self::EXPRESS:
                case self::EXTENDS:
                case self::EXTENT:
                case self::EXTENTS:
                case self::EXTERNAL:
                case self::EXTERNALLY:
                case self::EXTRACTCLOBXML:
                case self::EXTRACT:
                case self::EXTRACTVALUE:
                case self::EXTRA:
                case self::FACILITY:
                case self::FACT:
                case self::FACTOR:
                case self::FACTORIZE_JOIN:
                case self::FAILED:
                case self::FAILED_LOGIN_ATTEMPTS:
                case self::FAILGROUP:
                case self::FAILOVER:
                case self::FAILURE:
                case self::FALSE:
                case self::FAMILY:
                case self::FAR:
                case self::FAST:
                case self::FASTSTART:
                case self::FBTSCAN:
                case self::FEATURE_DETAILS:
                case self::FEATURE_ID:
                case self::FEATURE_SET:
                case self::FEATURE_VALUE:
                case self::FETCH:
                case self::FILE:
                case self::FILE_NAME_CONVERT:
                case self::FILESYSTEM_LIKE_LOGGING:
                case self::FILTER:
                case self::FINAL:
                case self::FINE:
                case self::FINISH:
                case self::FIRST:
                case self::FIRSTM:
                case self::FIRST_ROWS:
                case self::FIRST_VALUE:
                case self::FIXED_VIEW_DATA:
                case self::FLAGGER:
                case self::FLASHBACK:
                case self::FLASH_CACHE:
                case self::FLOAT:
                case self::FLOB:
                case self::FLOOR:
                case self::FLUSH:
                case self::FOLDER:
                case self::FOLLOWING:
                case self::FOLLOWS:
                case self::FORALL:
                case self::FORCE:
                case self::FORCE_XML_QUERY_REWRITE:
                case self::FOREIGN:
                case self::FOREVER:
                case self::FORMAT:
                case self::FORWARD:
                case self::FRAGMENT_NUMBER:
                case self::FREELIST:
                case self::FREELISTS:
                case self::FREEPOOLS:
                case self::FRESH:
                case self::FROM_TZ:
                case self::FULL:
                case self::FULL_OUTER_JOIN_TO_OUTER:
                case self::FUNCTION:
                case self::FUNCTIONS:
                case self::GATHER_OPTIMIZER_STATISTICS:
                case self::GATHER_PLAN_STATISTICS:
                case self::GBY_CONC_ROLLUP:
                case self::GBY_PUSHDOWN:
                case self::GENERATED:
                case self::GET:
                case self::GLOBAL:
                case self::GLOBALLY:
                case self::GLOBAL_NAME:
                case self::GLOBAL_TOPIC_ENABLED:
                case self::GROUP_BY:
                case self::GROUP_ID:
                case self::GROUPING:
                case self::GROUPING_ID:
                case self::GROUPS:
                case self::GUARANTEED:
                case self::GUARANTEE:
                case self::GUARD:
                case self::HASH_AJ:
                case self::HASH:
                case self::HASHKEYS:
                case self::HASH_SJ:
                case self::HEADER:
                case self::HEAP:
                case self::HELP:
                case self::HEXTORAW:
                case self::HEXTOREF:
                case self::HIDDEN_KEYWORD:
                case self::HIDE:
                case self::HIERARCHY:
                case self::HIGH:
                case self::HINTSET_BEGIN:
                case self::HINTSET_END:
                case self::HOT:
                case self::HOUR:
                case self::HWM_BROKERED:
                case self::HYBRID:
                case self::IDENTIFIER:
                case self::IDENTITY:
                case self::IDGENERATORS:
                case self::ID:
                case self::IDLE_TIME:
                case self::IF:
                case self::IGNORE:
                case self::IGNORE_OPTIM_EMBEDDED_HINTS:
                case self::IGNORE_ROW_ON_DUPKEY_INDEX:
                case self::IGNORE_WHERE_CLAUSE:
                case self::ILM:
                case self::IMMEDIATE:
                case self::IMPACT:
                case self::IMPORT:
                case self::INACTIVE:
                case self::INCLUDE:
                case self::INCLUDE_VERSION:
                case self::INCLUDING:
                case self::INCREMENTAL:
                case self::INCREMENT:
                case self::INCR:
                case self::INDENT:
                case self::INDEX_ASC:
                case self::INDEX_COMBINE:
                case self::INDEX_DESC:
                case self::INDEXED:
                case self::INDEXES:
                case self::INDEX_FFS:
                case self::INDEX_FILTER:
                case self::INDEXING:
                case self::INDEX_JOIN:
                case self::INDEX_ROWS:
                case self::INDEX_RRS:
                case self::INDEX_RS_ASC:
                case self::INDEX_RS_DESC:
                case self::INDEX_RS:
                case self::INDEX_SCAN:
                case self::INDEX_SKIP_SCAN:
                case self::INDEX_SS_ASC:
                case self::INDEX_SS_DESC:
                case self::INDEX_SS:
                case self::INDEX_STATS:
                case self::INDEXTYPE:
                case self::INDEXTYPES:
                case self::INDICATOR:
                case self::INDICES:
                case self::INFINITE:
                case self::INFORMATIONAL:
                case self::INHERIT:
                case self::INITCAP:
                case self::INITIAL:
                case self::INITIALIZED:
                case self::INITIALLY:
                case self::INITRANS:
                case self::INLINE:
                case self::INLINE_XMLTYPE_NT:
                case self::INMEMORY:
                case self::IN_MEMORY_METADATA:
                case self::INMEMORY_PRUNING:
                case self::INNER:
                case self::INOUT:
                case self::INPLACE:
                case self::INSERTCHILDXMLAFTER:
                case self::INSERTCHILDXMLBEFORE:
                case self::INSERTCHILDXML:
                case self::INSERTXMLAFTER:
                case self::INSERTXMLBEFORE:
                case self::INSTANCE:
                case self::INSTANCES:
                case self::INSTANTIABLE:
                case self::INSTANTLY:
                case self::INSTEAD:
                case self::INSTR2:
                case self::INSTR4:
                case self::INSTRB:
                case self::INSTRC:
                case self::INSTR:
                case self::INTEGER:
                case self::INTERLEAVED:
                case self::INTERMEDIATE:
                case self::INTERNAL_CONVERT:
                case self::INTERNAL_USE:
                case self::INTERPRETED:
                case self::INTERVAL:
                case self::INT:
                case self::INVALIDATE:
                case self::INVISIBLE:
                case self::IN_XQUERY:
                case self::ISOLATION:
                case self::ISOLATION_LEVEL:
                case self::ITERATE:
                case self::ITERATION_NUMBER:
                case self::JAVA:
                case self::JOB:
                case self::JOIN:
                case self::JSON_ARRAYAGG:
                case self::JSON_ARRAY:
                case self::JSON_EQUAL:
                case self::JSON_EXISTS2:
                case self::JSON_EXISTS:
                case self::JSONGET:
                case self::JSON:
                case self::JSON_OBJECTAGG:
                case self::JSON_OBJECT:
                case self::JSONPARSE:
                case self::JSON_QUERY:
                case self::JSON_SERIALIZE:
                case self::JSON_TABLE:
                case self::JSON_TEXTCONTAINS2:
                case self::JSON_TEXTCONTAINS:
                case self::JSON_VALUE:
                case self::KEEP_DUPLICATES:
                case self::KEEP:
                case self::KERBEROS:
                case self::KEY:
                case self::KEY_LENGTH:
                case self::KEYSIZE:
                case self::KEYS:
                case self::KEYSTORE:
                case self::KILL:
                case self::LABEL:
                case self::LANGUAGE:
                case self::LAST_DAY:
                case self::LAST:
                case self::LAST_VALUE:
                case self::LATERAL:
                case self::LAX:
                case self::LAYER:
                case self::LDAP_REGISTRATION_ENABLED:
                case self::LDAP_REGISTRATION:
                case self::LDAP_REG_SYNC_INTERVAL:
                case self::LEADING:
                case self::LEFT:
                case self::LENGTH2:
                case self::LENGTH4:
                case self::LENGTHB:
                case self::LENGTHC:
                case self::LENGTH:
                case self::LESS:
                case self::LEVEL:
                case self::LEVELS:
                case self::LIBRARY:
                case self::LIFECYCLE:
                case self::LIFE:
                case self::LIFETIME:
                case self::LIKE2:
                case self::LIKE4:
                case self::LIKEC:
                case self::LIKE_EXPAND:
                case self::LIMIT:
                case self::LINEAR:
                case self::LINK:
                case self::LIST:
                case self::LN:
                case self::LNNVL:
                case self::LOAD:
                case self::LOB:
                case self::LOBNVL:
                case self::LOBS:
                case self::LOCAL_INDEXES:
                case self::LOCAL:
                case self::LOCALTIME:
                case self::LOCALTIMESTAMP:
                case self::LOCATION:
                case self::LOCATOR:
                case self::LOCKED:
                case self::LOCKING:
                case self::LOGFILE:
                case self::LOGFILES:
                case self::LOGGING:
                case self::LOGICAL:
                case self::LOGICAL_READS_PER_CALL:
                case self::LOGICAL_READS_PER_SESSION:
                case self::LOG:
                case self::LOGMINING:
                case self::LOGOFF:
                case self::LOGON:
                case self::LOG_READ_ONLY_VIOLATIONS:
                case self::LONG:
                case self::LOOP:
                case self::LOWER:
                case self::LOW:
                case self::LPAD:
                case self::LTRIM:
                case self::MAIN:
                case self::MAKE_REF:
                case self::MANAGED:
                case self::MANAGE:
                case self::MANAGEMENT:
                case self::MANAGER:
                case self::MANUAL:
                case self::MAP:
                case self::MAPPING:
                case self::MASTER:
                case self::MATCHED:
                case self::MATCHES:
                case self::MATCH:
                case self::MATCH_NUMBER:
                case self::MATCH_RECOGNIZE:
                case self::MATERIALIZED:
                case self::MATERIALIZE:
                case self::MAXARCHLOGS:
                case self::MAXDATAFILES:
                case self::MAXEXTENTS:
                case self::MAXIMIZE:
                case self::MAXINSTANCES:
                case self::MAXLOGFILES:
                case self::MAXLOGHISTORY:
                case self::MAXLOGMEMBERS:
                case self::MAX_SHARED_TEMP_SIZE:
                case self::MAXSIZE:
                case self::MAXTRANS:
                case self::MAXVALUE:
                case self::MEASURE:
                case self::MEASURES:
                case self::MEDIUM:
                case self::MEMBER:
                case self::MEMCOMPRESS:
                case self::MEMORY:
                case self::MERGEACTIONS:
                case self::MERGE_AJ:
                case self::MERGE_CONST_ON:
                case self::MERGE:
                case self::MERGE_SJ:
                case self::METADATA:
                case self::METHOD:
                case self::MIGRATE:
                case self::MIGRATION:
                case self::MINEXTENTS:
                case self::MINIMIZE:
                case self::MINIMUM:
                case self::MINING:
                case self::MINUS_NULL:
                case self::MINUTE:
                case self::MINVALUE:
                case self::MIRRORCOLD:
                case self::MIRRORHOT:
                case self::MIRROR:
                case self::MLSLABEL:
                case self::MODEL_COMPILE_SUBQUERY:
                case self::MODEL_DONTVERIFY_UNIQUENESS:
                case self::MODEL_DYNAMIC_SUBQUERY:
                case self::MODEL_MIN_ANALYSIS:
                case self::MODEL:
                case self::MODEL_NB:
                case self::MODEL_NO_ANALYSIS:
                case self::MODEL_PBY:
                case self::MODEL_PUSH_REF:
                case self::MODEL_SV:
                case self::MODIFICATION:
                case self::MODIFY_COLUMN_TYPE:
                case self::MODIFY:
                case self::MOD:
                case self::MODULE:
                case self::MONITORING:
                case self::MONITOR:
                case self::MONTH:
                case self::MONTHS_BETWEEN:
                case self::MONTHS:
                case self::MOUNT:
                case self::MOUNTPATH:
                case self::MOVEMENT:
                case self::MOVE:
                case self::MULTIDIMENSIONAL:
                case self::MULTISET:
                case self::MV_MERGE:
                case self::NAMED:
                case self::NAME:
                case self::NAMESPACE:
                case self::NAN:
                case self::NANVL:
                case self::NATIONAL:
                case self::NATIVE_FULL_OUTER_JOIN:
                case self::NATIVE:
                case self::NATURAL:
                case self::NAV:
                case self::NCHAR_CS:
                case self::NCHAR:
                case self::NCHR:
                case self::NCLOB:
                case self::NEEDED:
                case self::NEG:
                case self::NESTED:
                case self::NESTED_TABLE_FAST_INSERT:
                case self::NESTED_TABLE_GET_REFS:
                case self::NESTED_TABLE_ID:
                case self::NESTED_TABLE_SET_REFS:
                case self::NESTED_TABLE_SET_SETID:
                case self::NETWORK:
                case self::NEVER:
                case self::NEW:
                case self::NEW_TIME:
                case self::NEXT_DAY:
                case self::NEXT:
                case self::NL_AJ:
                case self::NLJ_BATCHING:
                case self::NLJ_INDEX_FILTER:
                case self::NLJ_INDEX_SCAN:
                case self::NLJ_PREFETCH:
                case self::NLS_CALENDAR:
                case self::NLS_CHARACTERSET:
                case self::NLS_CHARSET_DECL_LEN:
                case self::NLS_CHARSET_ID:
                case self::NLS_CHARSET_NAME:
                case self::NLS_COMP:
                case self::NLS_CURRENCY:
                case self::NLS_DATE_FORMAT:
                case self::NLS_DATE_LANGUAGE:
                case self::NLS_INITCAP:
                case self::NLS_ISO_CURRENCY:
                case self::NL_SJ:
                case self::NLS_LANG:
                case self::NLS_LANGUAGE:
                case self::NLS_LENGTH_SEMANTICS:
                case self::NLS_LOWER:
                case self::NLS_NCHAR_CONV_EXCP:
                case self::NLS_NUMERIC_CHARACTERS:
                case self::NLS_SORT:
                case self::NLSSORT:
                case self::NLS_SPECIAL_CHARS:
                case self::NLS_TERRITORY:
                case self::NLS_UPPER:
                case self::NO_ACCESS:
                case self::NO_ADAPTIVE_PLAN:
                case self::NO_ANSI_REARCH:
                case self::NOAPPEND:
                case self::NOARCHIVELOG:
                case self::NOAUDIT:
                case self::NO_AUTO_REOPTIMIZE:
                case self::NO_BASETABLE_MULTIMV_REWRITE:
                case self::NO_BATCH_TABLE_ACCESS_BY_ROWID:
                case self::NO_BIND_AWARE:
                case self::NO_BUFFER:
                case self::NOCACHE:
                case self::NO_CARTESIAN:
                case self::NO_CHECK_ACL_REWRITE:
                case self::NO_CLUSTER_BY_ROWID:
                case self::NO_CLUSTERING:
                case self::NO_COALESCE_SQ:
                case self::NO_COMMON_DATA:
                case self::NO_CONNECT_BY_CB_WHR_ONLY:
                case self::NO_CONNECT_BY_COMBINE_SW:
                case self::NO_CONNECT_BY_COST_BASED:
                case self::NO_CONNECT_BY_ELIM_DUPS:
                case self::NO_CONNECT_BY_FILTERING:
                case self::NOCOPY:
                case self::NO_COST_XML_QUERY_REWRITE:
                case self::NO_CPU_COSTING:
                case self::NOCPU_COSTING:
                case self::NOCYCLE:
                case self::NO_DATA_SECURITY_REWRITE:
                case self::NO_DECORRELATE:
                case self::NODELAY:
                case self::NO_DOMAIN_INDEX_FILTER:
                case self::NO_DST_UPGRADE_INSERT_CONV:
                case self::NO_ELIM_GROUPBY:
                case self::NO_ELIMINATE_JOIN:
                case self::NO_ELIMINATE_OBY:
                case self::NO_ELIMINATE_OUTER_JOIN:
                case self::NOENTITYESCAPING:
                case self::NO_EXPAND_GSET_TO_UNION:
                case self::NO_EXPAND:
                case self::NO_EXPAND_TABLE:
                case self::NO_FACT:
                case self::NO_FACTORIZE_JOIN:
                case self::NO_FILTERING:
                case self::NOFORCE:
                case self::NO_FULL_OUTER_JOIN_TO_OUTER:
                case self::NO_GATHER_OPTIMIZER_STATISTICS:
                case self::NO_GBY_PUSHDOWN:
                case self::NOGUARANTEE:
                case self::NO_INDEX_FFS:
                case self::NO_INDEX:
                case self::NO_INDEX_SS:
                case self::NO_INMEMORY:
                case self::NO_INMEMORY_PRUNING:
                case self::NOKEEP:
                case self::NO_LOAD:
                case self::NOLOCAL:
                case self::NOLOGGING:
                case self::NOMAPPING:
                case self::NOMAXVALUE:
                case self::NO_MERGE:
                case self::NOMINIMIZE:
                case self::NOMINVALUE:
                case self::NO_MODEL_PUSH_REF:
                case self::NO_MONITORING:
                case self::NOMONITORING:
                case self::NO_MONITOR:
                case self::NO_MULTIMV_REWRITE:
                case self::NO_NATIVE_FULL_OUTER_JOIN:
                case self::NONBLOCKING:
                case self::NONEDITIONABLE:
                case self::NONE:
                case self::NO_NLJ_BATCHING:
                case self::NO_NLJ_PREFETCH:
                case self::NO:
                case self::NONSCHEMA:
                case self::NO_OBJECT_LINK:
                case self::NOORDER:
                case self::NO_ORDER_ROLLUPS:
                case self::NO_OUTER_JOIN_TO_ANTI:
                case self::NO_OUTER_JOIN_TO_INNER:
                case self::NOOVERRIDE:
                case self::NO_PARALLEL_INDEX:
                case self::NOPARALLEL_INDEX:
                case self::NO_PARALLEL:
                case self::NOPARALLEL:
                case self::NO_PARTIAL_COMMIT:
                case self::NO_PARTIAL_JOIN:
                case self::NO_PARTIAL_ROLLUP_PUSHDOWN:
                case self::NOPARTITION:
                case self::NO_PLACE_DISTINCT:
                case self::NO_PLACE_GROUP_BY:
                case self::NO_PQ_CONCURRENT_UNION:
                case self::NO_PQ_MAP:
                case self::NO_PQ_REPLICATE:
                case self::NO_PQ_SKEW:
                case self::NO_PRUNE_GSETS:
                case self::NO_PULL_PRED:
                case self::NO_PUSH_PRED:
                case self::NO_PUSH_SUBQ:
                case self::NO_PX_FAULT_TOLERANCE:
                case self::NO_PX_JOIN_FILTER:
                case self::NO_QKN_BUFF:
                case self::NO_QUERY_TRANSFORMATION:
                case self::NO_REF_CASCADE:
                case self::NORELOCATE:
                case self::NORELY:
                case self::NOREPAIR:
                case self::NOREPLAY:
                case self::NORESETLOGS:
                case self::NO_RESULT_CACHE:
                case self::NOREVERSE:
                case self::NO_REWRITE:
                case self::NOREWRITE:
                case self::NORMAL:
                case self::NO_ROOT_SW_FOR_LOCAL:
                case self::NOROWDEPENDENCIES:
                case self::NOSCHEMACHECK:
                case self::NOSEGMENT:
                case self::NO_SEMIJOIN:
                case self::NO_SEMI_TO_INNER:
                case self::NO_SET_TO_JOIN:
                case self::NOSORT:
                case self::NO_SQL_TRANSLATION:
                case self::NO_SQL_TUNE:
                case self::NO_STAR_TRANSFORMATION:
                case self::NO_STATEMENT_QUEUING:
                case self::NO_STATS_GSETS:
                case self::NOSTRICT:
                case self::NO_SUBQUERY_PRUNING:
                case self::NO_SUBSTRB_PAD:
                case self::NO_SWAP_JOIN_INPUTS:
                case self::NOSWITCH:
                case self::NO_TABLE_LOOKUP_BY_NL:
                case self::NO_TEMP_TABLE:
                case self::NOTHING:
                case self::NOTIFICATION:
                case self::NO_TRANSFORM_DISTINCT_AGG:
                case self::NO_UNNEST:
                case self::NO_USE_CUBE:
                case self::NO_USE_HASH_AGGREGATION:
                case self::NO_USE_HASH_GBY_FOR_PUSHDOWN:
                case self::NO_USE_HASH:
                case self::NO_USE_INVISIBLE_INDEXES:
                case self::NO_USE_MERGE:
                case self::NO_USE_NL:
                case self::NO_USE_VECTOR_AGGREGATION:
                case self::NOVALIDATE:
                case self::NO_VECTOR_TRANSFORM_DIMS:
                case self::NO_VECTOR_TRANSFORM_FACT:
                case self::NO_VECTOR_TRANSFORM:
                case self::NO_XDB_FASTPATH_INSERT:
                case self::NO_XML_DML_REWRITE:
                case self::NO_XMLINDEX_REWRITE_IN_SELECT:
                case self::NO_XMLINDEX_REWRITE:
                case self::NO_XML_QUERY_REWRITE:
                case self::NO_ZONEMAP:
                case self::NTH_VALUE:
                case self::NULLIF:
                case self::NULLS:
                case self::NUMBER:
                case self::NUMERIC:
                case self::NUM_INDEX_KEYS:
                case self::NUMTODSINTERVAL:
                case self::NUMTOYMINTERVAL:
                case self::NVARCHAR2:
                case self::NVL2:
                case self::OBJECT2XML:
                case self::OBJECT:
                case self::OBJ_ID:
                case self::OBJNO:
                case self::OBJNO_REUSE:
                case self::OCCURENCES:
                case self::OFFLINE:
                case self::OFF:
                case self::OFFSET:
                case self::OIDINDEX:
                case self::OID:
                case self::OLAP:
                case self::OLD:
                case self::OLD_PUSH_PRED:
                case self::OLS:
                case self::OLTP:
                case self::OMIT:
                case self::ONE:
                case self::ONLINE:
                case self::ONLY:
                case self::OPAQUE:
                case self::OPAQUE_TRANSFORM:
                case self::OPAQUE_XCANONICAL:
                case self::OPCODE:
                case self::OPEN:
                case self::OPERATIONS:
                case self::OPERATOR:
                case self::OPT_ESTIMATE:
                case self::OPTIMAL:
                case self::OPTIMIZE:
                case self::OPTIMIZER_FEATURES_ENABLE:
                case self::OPTIMIZER_GOAL:
                case self::OPT_PARAM:
                case self::ORA_BRANCH:
                case self::ORA_CHECK_ACL:
                case self::ORA_CHECK_PRIVILEGE:
                case self::ORA_CLUSTERING:
                case self::ORADATA:
                case self::ORADEBUG:
                case self::ORA_DST_AFFECTED:
                case self::ORA_DST_CONVERT:
                case self::ORA_DST_ERROR:
                case self::ORA_GET_ACLIDS:
                case self::ORA_GET_PRIVILEGES:
                case self::ORA_HASH:
                case self::ORA_INVOKING_USERID:
                case self::ORA_INVOKING_USER:
                case self::ORA_INVOKING_XS_USER_GUID:
                case self::ORA_INVOKING_XS_USER:
                case self::ORA_RAWCOMPARE:
                case self::ORA_RAWCONCAT:
                case self::ORA_ROWSCN:
                case self::ORA_ROWSCN_RAW:
                case self::ORA_ROWVERSION:
                case self::ORA_TABVERSION:
                case self::ORA_WRITE_TIME:
                case self::ORDERED:
                case self::ORDERED_PREDICATES:
                case self::ORDINALITY:
                case self::OR_EXPAND:
                case self::ORGANIZATION:
                case self::OR_PREDICATES:
                case self::OSERROR:
                case self::OTHER:
                case self::OUTER_JOIN_TO_ANTI:
                case self::OUTER_JOIN_TO_INNER:
                case self::OUTER:
                case self::OUTLINE_LEAF:
                case self::OUTLINE:
                case self::OUT_OF_LINE:
                case self::OUT:
                case self::OVERFLOW_NOMOVE:
                case self::OVERFLOW:
                case self::OVERLAPS:
                case self::OVER:
                case self::OVERRIDING:
                case self::OWNER:
                case self::OWNERSHIP:
                case self::OWN:
                case self::PACKAGE:
                case self::PACKAGES:
                case self::PARALLEL_ENABLE:
                case self::PARALLEL_INDEX:
                case self::PARALLEL:
                case self::PARAMETERS:
                case self::PARAM:
                case self::PARENT:
                case self::PARITY:
                case self::PARTIAL_JOIN:
                case self::PARTIALLY:
                case self::PARTIAL:
                case self::PARTIAL_ROLLUP_PUSHDOWN:
                case self::PARTITION_HASH:
                case self::PARTITION_LIST:
                case self::PARTITION:
                case self::PARTITION_RANGE:
                case self::PARTITIONS:
                case self::PARTNUMINST:
                case self::PASSING:
                case self::PASSWORD_GRACE_TIME:
                case self::PASSWORD_LIFE_TIME:
                case self::PASSWORD_LOCK_TIME:
                case self::PASSWORD:
                case self::PASSWORD_REUSE_MAX:
                case self::PASSWORD_REUSE_TIME:
                case self::PASSWORD_VERIFY_FUNCTION:
                case self::PAST:
                case self::PATCH:
                case self::PATH:
                case self::PATH_PREFIX:
                case self::PATHS:
                case self::PATTERN:
                case self::PBL_HS_BEGIN:
                case self::PBL_HS_END:
                case self::PCTINCREASE:
                case self::PCTTHRESHOLD:
                case self::PCTUSED:
                case self::PCTVERSION:
                case self::PENDING:
                case self::PERCENT_KEYWORD:
                case self::PERCENT_RANKM:
                case self::PERFORMANCE:
                case self::PERIOD_KEYWORD:
                case self::PERMANENT:
                case self::PERMISSION:
                case self::PERMUTE:
                case self::PER:
                case self::PFILE:
                case self::PHYSICAL:
                case self::PIKEY:
                case self::PIPELINED:
                case self::PIV_GB:
                case self::PIVOT:
                case self::PIV_SSF:
                case self::PLACE_DISTINCT:
                case self::PLACE_GROUP_BY:
                case self::PLAN:
                case self::PLSCOPE_SETTINGS:
                case self::PLS_INTEGER:
                case self::PLSQL_CCFLAGS:
                case self::PLSQL_CODE_TYPE:
                case self::PLSQL_DEBUG:
                case self::PLSQL_OPTIMIZE_LEVEL:
                case self::PLSQL_WARNINGS:
                case self::PLUGGABLE:
                case self::POINT:
                case self::POLICY:
                case self::POOL_16K:
                case self::POOL_2K:
                case self::POOL_32K:
                case self::POOL_4K:
                case self::POOL_8K:
                case self::POSITIVEN:
                case self::POSITIVE:
                case self::POST_TRANSACTION:
                case self::POWERMULTISET_BY_CARDINALITY:
                case self::POWERMULTISET:
                case self::POWER:
                case self::PQ_CONCURRENT_UNION:
                case self::PQ_DISTRIBUTE:
                case self::PQ_DISTRIBUTE_WINDOW:
                case self::PQ_FILTER:
                case self::PQ_MAP:
                case self::PQ_NOMAP:
                case self::PQ_REPLICATE:
                case self::PQ_SKEW:
                case self::PRAGMA:
                case self::PREBUILT:
                case self::PRECEDES:
                case self::PRECEDING:
                case self::PRECISION:
                case self::PRECOMPUTE_SUBQUERY:
                case self::PREDICATE_REORDERS:
                case self::PRELOAD:
                case self::PREPARE:
                case self::PRESENTNNV:
                case self::PRESENT:
                case self::PRESENTV:
                case self::PRESERVE_OID:
                case self::PRESERVE:
                case self::PRETTY:
                case self::PREVIOUS:
                case self::PREV:
                case self::PRIMARY:
                case self::PRINTBLOBTOCLOB:
                case self::PRIORITY:
                case self::PRIVATE:
                case self::PRIVATE_SGA:
                case self::PRIVILEGED:
                case self::PRIVILEGE:
                case self::PRIVILEGES:
                case self::PROCEDURAL:
                case self::PROCEDURE:
                case self::PROCESS:
                case self::PROFILE:
                case self::PROGRAM:
                case self::PROJECT:
                case self::PROPAGATE:
                case self::PROTECTED:
                case self::PROTECTION:
                case self::PROXY:
                case self::PRUNING:
                case self::PULL_PRED:
                case self::PURGE:
                case self::PUSH_PRED:
                case self::PUSH_SUBQ:
                case self::PX_FAULT_TOLERANCE:
                case self::PX_GRANULE:
                case self::PX_JOIN_FILTER:
                case self::QB_NAME:
                case self::QUERY_BLOCK:
                case self::QUERY:
                case self::QUEUE_CURR:
                case self::QUEUE:
                case self::QUEUE_ROWP:
                case self::QUIESCE:
                case self::QUORUM:
                case self::QUOTA:
                case self::RAISE:
                case self::RANDOM_LOCAL:
                case self::RANDOM:
                case self::RANGE:
                case self::RANKM:
                case self::RAPIDLY:
                case self::RAW:
                case self::RAWTOHEX:
                case self::RAWTONHEX:
                case self::RBA:
                case self::RBO_OUTLINE:
                case self::RDBA:
                case self::READ:
                case self::READS:
                case self::REALM:
                case self::REAL:
                case self::REBALANCE:
                case self::REBUILD:
                case self::RECORD:
                case self::RECORDS_PER_BLOCK:
                case self::RECOVERABLE:
                case self::RECOVER:
                case self::RECOVERY:
                case self::RECYCLEBIN:
                case self::RECYCLE:
                case self::REDACTION:
                case self::REDEFINE:
                case self::REDO:
                case self::REDUCED:
                case self::REDUNDANCY:
                case self::REF_CASCADE_CURSOR:
                case self::REFERENCED:
                case self::REFERENCE:
                case self::REFERENCES:
                case self::REFERENCING:
                case self::REF:
                case self::REFRESH:
                case self::REFTOHEX:
                case self::REGEXP_COUNT:
                case self::REGEXP_INSTR:
                case self::REGEXP_LIKE:
                case self::REGEXP_REPLACE:
                case self::REGEXP_SUBSTR:
                case self::REGISTER:
                case self::REGR_AVGX:
                case self::REGR_AVGY:
                case self::REGR_COUNT:
                case self::REGR_INTERCEPT:
                case self::REGR_R2:
                case self::REGR_SLOPE:
                case self::REGR_SXX:
                case self::REGR_SXY:
                case self::REGR_SYY:
                case self::REGULAR:
                case self::REJECT:
                case self::REKEY:
                case self::RELATIONAL:
                case self::RELOCATE:
                case self::RELY:
                case self::REMAINDER:
                case self::REMOTE_MAPPED:
                case self::REMOVE:
                case self::RENAME:
                case self::REPAIR:
                case self::REPEAT:
                case self::REPLACE:
                case self::REPLICATION:
                case self::REQUIRED:
                case self::RESETLOGS:
                case self::RESET:
                case self::RESIZE:
                case self::RESOLVE:
                case self::RESOLVER:
                case self::RESPECT:
                case self::RESTART:
                case self::RESTORE_AS_INTERVALS:
                case self::RESTORE:
                case self::RESTRICT_ALL_REF_CONS:
                case self::RESTRICTED:
                case self::RESTRICT_REFERENCES:
                case self::RESTRICT:
                case self::RESULT_CACHE:
                case self::RESULT:
                case self::RESUMABLE:
                case self::RESUME:
                case self::RETENTION:
                case self::RETRY_ON_ROW_CHANGE:
                case self::RETURNING:
                case self::RETURN:
                case self::REUSE:
                case self::REVERSE:
                case self::REWRITE_OR_ERROR:
                case self::REWRITE:
                case self::RIGHT:
                case self::ROLE:
                case self::ROLESET:
                case self::ROLES:
                case self::ROLLBACK:
                case self::ROLLING:
                case self::ROLLUP:
                case self::ROWDEPENDENCIES:
                case self::ROWID_MAPPING_TABLE:
                case self::ROWID:
                case self::ROWIDTOCHAR:
                case self::ROWIDTONCHAR:
                case self::ROW_LENGTH:
                case self::ROWNUM:
                case self::ROW:
                case self::ROWS:
                case self::RPAD:
                case self::RTRIM:
                case self::RULE:
                case self::RULES:
                case self::RUNNING:
                case self::SALT:
                case self::SAMPLE:
                case self::SAVE_AS_INTERVALS:
                case self::SAVEPOINT:
                case self::SAVE:
                case self::SB4:
                case self::SCALE_ROWS:
                case self::SCALE:
                case self::SCAN_INSTANCES:
                case self::SCAN:
                case self::SCHEDULER:
                case self::SCHEMACHECK:
                case self::SCHEMA:
                case self::SCN_ASCENDING:
                case self::SCN:
                case self::SCOPE:
                case self::SCRUB:
                case self::SD_ALL:
                case self::SD_INHIBIT:
                case self::SDO_GEOM_MBR:
                case self::SD_SHOW:
                case self::SEARCH:
                case self::SECOND:
                case self::SECRET:
                case self::SECUREFILE_DBA:
                case self::SECUREFILE:
                case self::SECURITY:
                case self::SEED:
                case self::SEG_BLOCK:
                case self::SEG_FILE:
                case self::SEGMENT:
                case self::SELECTIVITY:
                case self::SELF:
                case self::SEMIJOIN_DRIVER:
                case self::SEMIJOIN:
                case self::SEMI_TO_INNER:
                case self::SEQUENCED:
                case self::SEQUENCE:
                case self::SEQUENTIAL:
                case self::SERIALIZABLE:
                case self::SERIALLY_REUSABLE:
                case self::SERIAL:
                case self::SERVERERROR:
                case self::SERVICE_NAME_CONVERT:
                case self::SERVICES:
                case self::SESSION_CACHED_CURSORS:
                case self::SESSION:
                case self::SESSIONS_PER_USER:
                case self::SESSIONTIMEZONE:
                case self::SESSIONTZNAME:
                case self::SET:
                case self::SETS:
                case self::SETTINGS:
                case self::SET_TO_JOIN:
                case self::SEVERE:
                case self::SHARED_POOL:
                case self::SHARED:
                case self::SHARING:
                case self::SHELFLIFE:
                case self::SHOW:
                case self::SHRINK:
                case self::SHUTDOWN:
                case self::SIBLINGS:
                case self::SID:
                case self::SIGNAL_COMPONENT:
                case self::SIGNAL_FUNCTION:
                case self::SIGN:
                case self::SIGNTYPE:
                case self::SIMPLE_INTEGER:
                case self::SIMPLE:
                case self::SINGLE:
                case self::SINGLETASK:
                case self::SINH:
                case self::SIN:
                case self::SKIP_EXT_OPTIMIZER:
                case self::SKIP_:
                case self::SKIP_UNQ_UNUSABLE_IDX:
                case self::SKIP_UNUSABLE_INDEXES:
                case self::SMALLFILE:
                case self::SMALLINT:
                case self::SNAPSHOT:
                case self::SOME:
                case self::SORT:
                case self::SOUNDEX:
                case self::SOURCE_FILE_DIRECTORY:
                case self::SOURCE_FILE_NAME_CONVERT:
                case self::SOURCE:
                case self::SPACE_KEYWORD:
                case self::SPECIFICATION:
                case self::SPFILE:
                case self::SPLIT:
                case self::SPREADSHEET:
                case self::SQLDATA:
                case self::SQLERROR:
                case self::SQLLDR:
                case self::SQL:
                case self::SQL_TRACE:
                case self::SQL_TRANSLATION_PROFILE:
                case self::SQRT:
                case self::STALE:
                case self::STANDALONE:
                case self::STANDARD_HASH:
                case self::STANDBY_MAX_DATA_DELAY:
                case self::STANDBYS:
                case self::STANDBY:
                case self::STAR:
                case self::STAR_TRANSFORMATION:
                case self::STARTUP:
                case self::STATEMENT_ID:
                case self::STATEMENT_QUEUING:
                case self::STATEMENTS:
                case self::STATEMENT:
                case self::STATE:
                case self::STATIC:
                case self::STATISTICS:
                case self::STATS_BINOMIAL_TEST:
                case self::STATS_CROSSTAB:
                case self::STATS_F_TEST:
                case self::STATS_KS_TEST:
                case self::STATS_MODE:
                case self::STATS_MW_TEST:
                case self::STATS_ONE_WAY_ANOVA:
                case self::STATS_T_TEST_INDEP:
                case self::STATS_T_TEST_INDEPU:
                case self::STATS_T_TEST_ONE:
                case self::STATS_T_TEST_PAIRED:
                case self::STATS_WSR_TEST:
                case self::STDDEV_POP:
                case self::STDDEV_SAMP:
                case self::STOP:
                case self::STORAGE:
                case self::STORE:
                case self::STREAMS:
                case self::STREAM:
                case self::STRICT:
                case self::STRING:
                case self::STRIPE_COLUMNS:
                case self::STRIPE_WIDTH:
                case self::STRIP:
                case self::STRUCTURE:
                case self::SUBMULTISET:
                case self::SUBPARTITION_REL:
                case self::SUBPARTITIONS:
                case self::SUBPARTITION:
                case self::SUBQUERIES:
                case self::SUBQUERY_PRUNING:
                case self::SUBSCRIBE:
                case self::SUBSET:
                case self::SUBSTITUTABLE:
                case self::SUBSTR2:
                case self::SUBSTR4:
                case self::SUBSTRB:
                case self::SUBSTRC:
                case self::SUBTYPE:
                case self::SUCCESSFUL:
                case self::SUCCESS:
                case self::SUMMARY:
                case self::SUPPLEMENTAL:
                case self::SUSPEND:
                case self::SWAP_JOIN_INPUTS:
                case self::SWITCHOVER:
                case self::SWITCH:
                case self::SYNCHRONOUS:
                case self::SYNC:
                case self::SYSASM:
                case self::SYS_AUDIT:
                case self::SYSAUX:
                case self::SYSBACKUP:
                case self::SYS_CHECKACL:
                case self::SYS_CHECK_PRIVILEGE:
                case self::SYS_CONNECT_BY_PATH:
                case self::SYS_CONTEXT:
                case self::SYSDATE:
                case self::SYSDBA:
                case self::SYS_DBURIGEN:
                case self::SYSDG:
                case self::SYS_DL_CURSOR:
                case self::SYS_DM_RXFORM_CHR:
                case self::SYS_DM_RXFORM_NUM:
                case self::SYS_DOM_COMPARE:
                case self::SYS_DST_PRIM2SEC:
                case self::SYS_DST_SEC2PRIM:
                case self::SYS_ET_BFILE_TO_RAW:
                case self::SYS_ET_BLOB_TO_IMAGE:
                case self::SYS_ET_IMAGE_TO_BLOB:
                case self::SYS_ET_RAW_TO_BFILE:
                case self::SYS_EXTPDTXT:
                case self::SYS_EXTRACT_UTC:
                case self::SYS_FBT_INSDEL:
                case self::SYS_FILTER_ACLS:
                case self::SYS_FNMATCHES:
                case self::SYS_FNREPLACE:
                case self::SYS_GET_ACLIDS:
                case self::SYS_GET_COL_ACLIDS:
                case self::SYS_GET_PRIVILEGES:
                case self::SYS_GETTOKENID:
                case self::SYS_GETXTIVAL:
                case self::SYS_GUID:
                case self::SYSGUID:
                case self::SYSKM:
                case self::SYS_MAKE_XMLNODEID:
                case self::SYS_MAKEXML:
                case self::SYS_MKXMLATTR:
                case self::SYS_MKXTI:
                case self::SYSOBJ:
                case self::SYS_OP_ADT2BIN:
                case self::SYS_OP_ADTCONS:
                case self::SYS_OP_ALSCRVAL:
                case self::SYS_OP_ATG:
                case self::SYS_OP_BIN2ADT:
                case self::SYS_OP_BITVEC:
                case self::SYS_OP_BL2R:
                case self::SYS_OP_BLOOM_FILTER_LIST:
                case self::SYS_OP_BLOOM_FILTER:
                case self::SYS_OP_C2C:
                case self::SYS_OP_CAST:
                case self::SYS_OP_CEG:
                case self::SYS_OP_CL2C:
                case self::SYS_OP_COMBINED_HASH:
                case self::SYS_OP_COMP:
                case self::SYS_OP_CONVERT:
                case self::SYS_OP_COUNTCHG:
                case self::SYS_OP_CSCONV:
                case self::SYS_OP_CSCONVTEST:
                case self::SYS_OP_CSR:
                case self::SYS_OP_CSX_PATCH:
                case self::SYS_OP_CYCLED_SEQ:
                case self::SYS_OP_DECOMP:
                case self::SYS_OP_DESCEND:
                case self::SYS_OP_DISTINCT:
                case self::SYS_OP_DRA:
                case self::SYS_OP_DUMP:
                case self::SYS_OP_DV_CHECK:
                case self::SYS_OP_ENFORCE_NOT_NULL:
                case self::SYSOPER:
                case self::SYS_OP_EXTRACT:
                case self::SYS_OP_GROUPING:
                case self::SYS_OP_GUID:
                case self::SYS_OP_HASH:
                case self::SYS_OP_IIX:
                case self::SYS_OP_ITR:
                case self::SYS_OP_KEY_VECTOR_CREATE:
                case self::SYS_OP_KEY_VECTOR_FILTER_LIST:
                case self::SYS_OP_KEY_VECTOR_FILTER:
                case self::SYS_OP_KEY_VECTOR_SUCCEEDED:
                case self::SYS_OP_KEY_VECTOR_USE:
                case self::SYS_OP_LBID:
                case self::SYS_OP_LOBLOC2BLOB:
                case self::SYS_OP_LOBLOC2CLOB:
                case self::SYS_OP_LOBLOC2ID:
                case self::SYS_OP_LOBLOC2NCLOB:
                case self::SYS_OP_LOBLOC2TYP:
                case self::SYS_OP_LSVI:
                case self::SYS_OP_LVL:
                case self::SYS_OP_MAKEOID:
                case self::SYS_OP_MAP_NONNULL:
                case self::SYS_OP_MSR:
                case self::SYS_OP_NICOMBINE:
                case self::SYS_OP_NIEXTRACT:
                case self::SYS_OP_NII:
                case self::SYS_OP_NIX:
                case self::SYS_OP_NOEXPAND:
                case self::SYS_OP_NTCIMG:
                case self::SYS_OP_NUMTORAW:
                case self::SYS_OP_OIDVALUE:
                case self::SYS_OP_OPNSIZE:
                case self::SYS_OP_PAR_1:
                case self::SYS_OP_PARGID_1:
                case self::SYS_OP_PARGID:
                case self::SYS_OP_PAR:
                case self::SYS_OP_PART_ID:
                case self::SYS_OP_PIVOT:
                case self::SYS_OP_R2O:
                case self::SYS_OP_RAWTONUM:
                case self::SYS_OP_RDTM:
                case self::SYS_OP_REF:
                case self::SYS_OP_RMTD:
                case self::SYS_OP_ROWIDTOOBJ:
                case self::SYS_OP_RPB:
                case self::SYS_OPTLOBPRBSC:
                case self::SYS_OP_TOSETID:
                case self::SYS_OP_TPR:
                case self::SYS_OP_TRTB:
                case self::SYS_OPTXICMP:
                case self::SYS_OPTXQCASTASNQ:
                case self::SYS_OP_UNDESCEND:
                case self::SYS_OP_VECAND:
                case self::SYS_OP_VECBIT:
                case self::SYS_OP_VECOR:
                case self::SYS_OP_VECXOR:
                case self::SYS_OP_VERSION:
                case self::SYS_OP_VREF:
                case self::SYS_OP_VVD:
                case self::SYS_OP_XMLCONS_FOR_CSX:
                case self::SYS_OP_XPTHATG:
                case self::SYS_OP_XPTHIDX:
                case self::SYS_OP_XPTHOP:
                case self::SYS_OP_XTXT2SQLT:
                case self::SYS_OP_ZONE_ID:
                case self::SYS_ORDERKEY_DEPTH:
                case self::SYS_ORDERKEY_MAXCHILD:
                case self::SYS_ORDERKEY_PARENT:
                case self::SYS_PARALLEL_TXN:
                case self::SYS_PATHID_IS_ATTR:
                case self::SYS_PATHID_IS_NMSPC:
                case self::SYS_PATHID_LASTNAME:
                case self::SYS_PATHID_LASTNMSPC:
                case self::SYS_PATH_REVERSE:
                case self::SYS_PXQEXTRACT:
                case self::SYS_RAW_TO_XSID:
                case self::SYS_RID_ORDER:
                case self::SYS_ROW_DELTA:
                case self::SYS_SC_2_XMLT:
                case self::SYS_SYNRCIREDO:
                case self::SYSTEM_DEFINED:
                case self::SYSTEM:
                case self::SYSTIMESTAMP:
                case self::SYS_TYPEID:
                case self::SYS_UMAKEXML:
                case self::SYS_XMLANALYZE:
                case self::SYS_XMLCONTAINS:
                case self::SYS_XMLCONV:
                case self::SYS_XMLEXNSURI:
                case self::SYS_XMLGEN:
                case self::SYS_XMLI_LOC_ISNODE:
                case self::SYS_XMLI_LOC_ISTEXT:
                case self::SYS_XMLINSTR:
                case self::SYS_XMLLOCATOR_GETSVAL:
                case self::SYS_XMLNODEID_GETCID:
                case self::SYS_XMLNODEID_GETLOCATOR:
                case self::SYS_XMLNODEID_GETOKEY:
                case self::SYS_XMLNODEID_GETPATHID:
                case self::SYS_XMLNODEID_GETPTRID:
                case self::SYS_XMLNODEID_GETRID:
                case self::SYS_XMLNODEID_GETSVAL:
                case self::SYS_XMLNODEID_GETTID:
                case self::SYS_XMLNODEID:
                case self::SYS_XMLT_2_SC:
                case self::SYS_XMLTRANSLATE:
                case self::SYS_XMLTYPE2SQL:
                case self::SYS_XQ_ASQLCNV:
                case self::SYS_XQ_ATOMCNVCHK:
                case self::SYS_XQBASEURI:
                case self::SYS_XQCASTABLEERRH:
                case self::SYS_XQCODEP2STR:
                case self::SYS_XQCODEPEQ:
                case self::SYS_XQCON2SEQ:
                case self::SYS_XQCONCAT:
                case self::SYS_XQDELETE:
                case self::SYS_XQDFLTCOLATION:
                case self::SYS_XQDOC:
                case self::SYS_XQDOCURI:
                case self::SYS_XQDURDIV:
                case self::SYS_XQED4URI:
                case self::SYS_XQENDSWITH:
                case self::SYS_XQERRH:
                case self::SYS_XQERR:
                case self::SYS_XQESHTMLURI:
                case self::SYS_XQEXLOBVAL:
                case self::SYS_XQEXSTWRP:
                case self::SYS_XQEXTRACT:
                case self::SYS_XQEXTRREF:
                case self::SYS_XQEXVAL:
                case self::SYS_XQFB2STR:
                case self::SYS_XQFNBOOL:
                case self::SYS_XQFNCMP:
                case self::SYS_XQFNDATIM:
                case self::SYS_XQFNLNAME:
                case self::SYS_XQFNNM:
                case self::SYS_XQFNNSURI:
                case self::SYS_XQFNPREDTRUTH:
                case self::SYS_XQFNQNM:
                case self::SYS_XQFNROOT:
                case self::SYS_XQFORMATNUM:
                case self::SYS_XQFTCONTAIN:
                case self::SYS_XQFUNCR:
                case self::SYS_XQGETCONTENT:
                case self::SYS_XQINDXOF:
                case self::SYS_XQINSERT:
                case self::SYS_XQINSPFX:
                case self::SYS_XQIRI2URI:
                case self::SYS_XQLANG:
                case self::SYS_XQLLNMFRMQNM:
                case self::SYS_XQMKNODEREF:
                case self::SYS_XQNILLED:
                case self::SYS_XQNODENAME:
                case self::SYS_XQNORMSPACE:
                case self::SYS_XQNORMUCODE:
                case self::SYS_XQ_NRNG:
                case self::SYS_XQNSP4PFX:
                case self::SYS_XQNSPFRMQNM:
                case self::SYS_XQPFXFRMQNM:
                case self::SYS_XQ_PKSQL2XML:
                case self::SYS_XQPOLYABS:
                case self::SYS_XQPOLYADD:
                case self::SYS_XQPOLYCEL:
                case self::SYS_XQPOLYCSTBL:
                case self::SYS_XQPOLYCST:
                case self::SYS_XQPOLYDIV:
                case self::SYS_XQPOLYFLR:
                case self::SYS_XQPOLYMOD:
                case self::SYS_XQPOLYMUL:
                case self::SYS_XQPOLYRND:
                case self::SYS_XQPOLYSQRT:
                case self::SYS_XQPOLYSUB:
                case self::SYS_XQPOLYUMUS:
                case self::SYS_XQPOLYUPLS:
                case self::SYS_XQPOLYVEQ:
                case self::SYS_XQPOLYVGE:
                case self::SYS_XQPOLYVGT:
                case self::SYS_XQPOLYVLE:
                case self::SYS_XQPOLYVLT:
                case self::SYS_XQPOLYVNE:
                case self::SYS_XQREF2VAL:
                case self::SYS_XQRENAME:
                case self::SYS_XQREPLACE:
                case self::SYS_XQRESVURI:
                case self::SYS_XQRNDHALF2EVN:
                case self::SYS_XQRSLVQNM:
                case self::SYS_XQRYENVPGET:
                case self::SYS_XQRYVARGET:
                case self::SYS_XQRYWRP:
                case self::SYS_XQSEQ2CON4XC:
                case self::SYS_XQSEQ2CON:
                case self::SYS_XQSEQDEEPEQ:
                case self::SYS_XQSEQINSB:
                case self::SYS_XQSEQRM:
                case self::SYS_XQSEQRVS:
                case self::SYS_XQSEQSUB:
                case self::SYS_XQSEQTYPMATCH:
                case self::SYS_XQSTARTSWITH:
                case self::SYS_XQSTATBURI:
                case self::SYS_XQSTR2CODEP:
                case self::SYS_XQSTRJOIN:
                case self::SYS_XQSUBSTRAFT:
                case self::SYS_XQSUBSTRBEF:
                case self::SYS_XQTOKENIZE:
                case self::SYS_XQTREATAS:
                case self::SYS_XQ_UPKXML2SQL:
                case self::SYS_XQXFORM:
                case self::SYS_XSID_TO_RAW:
                case self::SYS_ZMAP_FILTER:
                case self::SYS_ZMAP_REFRESH:
                case self::TABLE_LOOKUP_BY_NL:
                case self::TABLESPACE_NO:
                case self::TABLESPACE:
                case self::TABLES:
                case self::TABLE_STATS:
                case self::TABLE:
                case self::TABNO:
                case self::TAG:
                case self::TANH:
                case self::TAN:
                case self::TBLORIDXPARTNUM:
                case self::TEMPFILE:
                case self::TEMPLATE:
                case self::TEMPORARY:
                case self::TEMP_TABLE:
                case self::TEST:
                case self::TEXT:
                case self::THAN:
                case self::THEN:
                case self::THE:
                case self::THREAD:
                case self::THROUGH:
                case self::TIER:
                case self::TIES:
                case self::TIMEOUT:
                case self::TIMESTAMP_LTZ_UNCONSTRAINED:
                case self::TIMESTAMP:
                case self::TIMESTAMP_TZ_UNCONSTRAINED:
                case self::TIMESTAMP_UNCONSTRAINED:
                case self::TIMES:
                case self::TIME:
                case self::TIMEZONE_ABBR:
                case self::TIMEZONE_HOUR:
                case self::TIMEZONE_MINUTE:
                case self::TIMEZONE_OFFSET:
                case self::TIMEZONE_REGION:
                case self::TIME_ZONE:
                case self::TIV_GB:
                case self::TIV_SSF:
                case self::TO_ACLID:
                case self::TO_BINARY_DOUBLE:
                case self::TO_BINARY_FLOAT:
                case self::TO_BLOB:
                case self::TO_CLOB:
                case self::TO_DSINTERVAL:
                case self::TO_LOB:
                case self::TO_MULTI_BYTE:
                case self::TO_NCHAR:
                case self::TO_NCLOB:
                case self::TO_NUMBER:
                case self::TOPLEVEL:
                case self::TO_SINGLE_BYTE:
                case self::TO_TIMESTAMP:
                case self::TO_TIMESTAMP_TZ:
                case self::TO_TIME:
                case self::TO_TIME_TZ:
                case self::TO_YMINTERVAL:
                case self::TRACE:
                case self::TRACING:
                case self::TRACKING:
                case self::TRAILING:
                case self::TRANSACTION:
                case self::TRANSFORM_DISTINCT_AGG:
                case self::TRANSITIONAL:
                case self::TRANSITION:
                case self::TRANSLATE:
                case self::TRANSLATION:
                case self::TREAT:
                case self::TRIGGERS:
                case self::TRIGGER:
                case self::TRUE:
                case self::TRUNCATE:
                case self::TRUNC:
                case self::TRUSTED:
                case self::TRUST:
                case self::TUNING:
                case self::TX:
                case self::TYPES:
                case self::TYPE:
                case self::TZ_OFFSET:
                case self::UB2:
                case self::UBA:
                case self::UCS2:
                case self::UID:
                case self::UNARCHIVED:
                case self::UNBOUNDED:
                case self::UNBOUND:
                case self::UNCONDITIONAL:
                case self::UNDER:
                case self::UNDO:
                case self::UNDROP:
                case self::UNIFORM:
                case self::UNISTR:
                case self::UNLIMITED:
                case self::UNLOAD:
                case self::UNLOCK:
                case self::UNMATCHED:
                case self::UNNEST_INNERJ_DISTINCT_VIEW:
                case self::UNNEST_NOSEMIJ_NODISTINCTVIEW:
                case self::UNNEST_SEMIJ_VIEW:
                case self::UNNEST:
                case self::UNPACKED:
                case self::UNPIVOT:
                case self::UNPLUG:
                case self::UNPROTECTED:
                case self::UNQUIESCE:
                case self::UNRECOVERABLE:
                case self::UNRESTRICTED:
                case self::UNSUBSCRIBE:
                case self::UNTIL:
                case self::UNUSABLE:
                case self::UNUSED:
                case self::UPDATABLE:
                case self::UPDATED:
                case self::UPDATEXML:
                case self::UPD_INDEXES:
                case self::UPD_JOININDEX:
                case self::UPGRADE:
                case self::UPPER:
                case self::UPSERT:
                case self::UROWID:
                case self::USABLE:
                case self::USAGE:
                case self::USE_ANTI:
                case self::USE_CONCAT:
                case self::USE_CUBE:
                case self::USE_HASH_AGGREGATION:
                case self::USE_HASH_GBY_FOR_PUSHDOWN:
                case self::USE_HASH:
                case self::USE_HIDDEN_PARTITIONS:
                case self::USE_INVISIBLE_INDEXES:
                case self::USE_MERGE_CARTESIAN:
                case self::USE_MERGE:
                case self::USE_NL:
                case self::USE_NL_WITH_INDEX:
                case self::USE_PRIVATE_OUTLINES:
                case self::USER_DATA:
                case self::USER_DEFINED:
                case self::USERENV:
                case self::USERGROUP:
                case self::USER_RECYCLEBIN:
                case self::USERS:
                case self::USER_TABLESPACES:
                case self::USER:
                case self::USE_SEMI:
                case self::USE_STORED_OUTLINES:
                case self::USE_TTT_FOR_GSETS:
                case self::USE:
                case self::USE_VECTOR_AGGREGATION:
                case self::USE_WEAK_NAME_RESL:
                case self::USING_NO_EXPAND:
                case self::USING:
                case self::UTF16BE:
                case self::UTF16LE:
                case self::UTF32:
                case self::UTF8:
                case self::V1:
                case self::V2:
                case self::VALIDATE:
                case self::VALIDATION:
                case self::VALID_TIME_END:
                case self::VALUE:
                case self::VARCHAR2:
                case self::VARCHAR:
                case self::VARIABLE:
                case self::VAR_POP:
                case self::VARRAYS:
                case self::VARRAY:
                case self::VAR_SAMP:
                case self::VARYING:
                case self::VECTOR_READ_TRACE:
                case self::VECTOR_READ:
                case self::VECTOR_TRANSFORM_DIMS:
                case self::VECTOR_TRANSFORM_FACT:
                case self::VECTOR_TRANSFORM:
                case self::VERIFIER:
                case self::VERIFY:
                case self::VERSIONING:
                case self::VERSIONS_ENDSCN:
                case self::VERSIONS_ENDTIME:
                case self::VERSIONS_OPERATION:
                case self::VERSIONS_STARTSCN:
                case self::VERSIONS_STARTTIME:
                case self::VERSIONS:
                case self::VERSIONS_XID:
                case self::VERSION:
                case self::VIOLATION:
                case self::VIRTUAL:
                case self::VISIBILITY:
                case self::VISIBLE:
                case self::VOLUME:
                case self::VSIZE:
                case self::WAIT:
                case self::WALLET:
                case self::WARNING:
                case self::WEEKS:
                case self::WEEK:
                case self::WELLFORMED:
                case self::WHENEVER:
                case self::WHEN:
                case self::WHILE:
                case self::WHITESPACE:
                case self::WIDTH_BUCKET:
                case self::WITHIN:
                case self::WITHOUT:
                case self::WITH_PLSQL:
                case self::WORK:
                case self::WRAPPED:
                case self::WRAPPER:
                case self::WRITE:
                case self::XDB_FASTPATH_INSERT:
                case self::X_DYN_PRUNE:
                case self::XID:
                case self::XML2OBJECT:
                case self::XMLAGG:
                case self::XMLATTRIBUTES:
                case self::XMLCAST:
                case self::XMLCDATA:
                case self::XMLCOLATTVAL:
                case self::XMLCOMMENT:
                case self::XMLCONCAT:
                case self::XMLDIFF:
                case self::XML_DML_RWT_STMT:
                case self::XMLELEMENT:
                case self::XMLEXISTS2:
                case self::XMLEXISTS:
                case self::XMLFOREST:
                case self::XMLINDEX_REWRITE_IN_SELECT:
                case self::XMLINDEX_REWRITE:
                case self::XMLINDEX_SEL_IDX_TBL:
                case self::XMLISNODE:
                case self::XMLISVALID:
                case self::XMLNAMESPACES:
                case self::XMLPARSE:
                case self::XMLPATCH:
                case self::XMLPI:
                case self::XMLQUERYVAL:
                case self::XMLQUERY:
                case self::XMLROOT:
                case self::XMLSCHEMA:
                case self::XMLSERIALIZE:
                case self::XMLTABLE:
                case self::XMLTRANSFORMBLOB:
                case self::XMLTRANSFORM:
                case self::XMLTYPE:
                case self::XML:
                case self::XPATHTABLE:
                case self::XS_SYS_CONTEXT:
                case self::XS:
                case self::YEARS:
                case self::YEAR:
                case self::YES:
                case self::YMINTERVAL_UNCONSTRAINED:
                case self::ZONEMAP:
                case self::ZONE:
                case self::PREDICTION:
                case self::PREDICTION_BOUNDS:
                case self::PREDICTION_COST:
                case self::PREDICTION_DETAILS:
                case self::PREDICTION_PROBABILITY:
                case self::PREDICTION_SET:
                case self::CUME_DIST:
                case self::DENSE_RANK:
                case self::LISTAGG:
                case self::PERCENT_RANK:
                case self::PERCENTILE_CONT:
                case self::PERCENTILE_DISC:
                case self::RANK:
                case self::AVG:
                case self::CORR:
                case self::COVAR_:
                case self::LAG:
                case self::LEAD:
                case self::MAX:
                case self::MEDIAN:
                case self::MIN:
                case self::NTILE:
                case self::NVL:
                case self::RATIO_TO_REPORT:
                case self::REGR_:
                case self::ROUND:
                case self::ROW_NUMBER:
                case self::SUBSTR:
                case self::TO_CHAR:
                case self::TRIM:
                case self::SUM:
                case self::STDDEV:
                case self::VAR_:
                case self::VARIANCE:
                case self::LEAST:
                case self::GREATEST:
                case self::TO_DATE:
                case self::PERIOD:
                case self::DELIMITED_ID:
                case self::REGULAR_ID:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3496);
                    $this->user_object_name();
                    $this->setState(3501);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3497);
                        $this->match(self::COMMA);
                        $this->setState(3498);
                        $this->user_object_name();
                        $this->setState(3503);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    $this->setState(3504);
                    $this->proxy_clause();
                    $this->setState(3505);
                    $this->match(self::SEMICOLON);
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
    public function alter_identified_by(): Context\Alter_identified_byContext
    {
        $localContext = new Context\Alter_identified_byContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 272, self::RULE_alter_identified_by);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3509);
            $this->identified_by();
            $this->setState(3512);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::REPLACE) {
                $this->setState(3510);
                $this->match(self::REPLACE);
                $this->setState(3511);
                $this->id_expression();
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
    public function identified_by(): Context\Identified_byContext
    {
        $localContext = new Context\Identified_byContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 274, self::RULE_identified_by);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3514);
            $this->match(self::IDENTIFIED);
            $this->setState(3515);
            $this->match(self::BY);
            $this->setState(3516);
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
    public function identified_other_clause(): Context\Identified_other_clauseContext
    {
        $localContext = new Context\Identified_other_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 276, self::RULE_identified_other_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3518);
            $this->match(self::IDENTIFIED);
            $this->setState(3519);

            $_la = $this->input->LA(1);

            if (!($_la === self::EXTERNALLY || $_la === self::GLOBALLY)) {
                $this->errorHandler->recoverInline($this);
            } else {
                if ($this->input->LA(1) === Token::EOF) {
                    $this->matchedEOF = true;
                }

                $this->errorHandler->reportMatch($this);
                $this->consume();
            }
            $this->setState(3522);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::AS) {
                $this->setState(3520);
                $this->match(self::AS);
                $this->setState(3521);
                $this->quoted_string();
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
    public function user_tablespace_clause(): Context\User_tablespace_clauseContext
    {
        $localContext = new Context\User_tablespace_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 278, self::RULE_user_tablespace_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3524);

            $_la = $this->input->LA(1);

            if (!($_la === self::DEFAULT || $_la === self::TEMPORARY)) {
                $this->errorHandler->recoverInline($this);
            } else {
                if ($this->input->LA(1) === Token::EOF) {
                    $this->matchedEOF = true;
                }

                $this->errorHandler->reportMatch($this);
                $this->consume();
            }
            $this->setState(3525);
            $this->match(self::TABLESPACE);
            $this->setState(3526);
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
    public function quota_clause(): Context\Quota_clauseContext
    {
        $localContext = new Context\Quota_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 280, self::RULE_quota_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3528);
            $this->match(self::QUOTA);
            $this->setState(3531);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::UNSIGNED_INTEGER:
                    $this->setState(3529);
                    $this->size_clause();
                    break;

                case self::UNLIMITED:
                    $this->setState(3530);
                    $this->match(self::UNLIMITED);
                    break;

                default:
                    throw new NoViableAltException($this);
            }
            $this->setState(3533);
            $this->match(self::ON);
            $this->setState(3534);
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
    public function profile_clause(): Context\Profile_clauseContext
    {
        $localContext = new Context\Profile_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 282, self::RULE_profile_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3536);
            $this->match(self::PROFILE);
            $this->setState(3537);
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
    public function role_clause(): Context\Role_clauseContext
    {
        $localContext = new Context\Role_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 284, self::RULE_role_clause);

        try {
            $this->setState(3562);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::ABORT:
                case self::ABS:
                case self::ACCESS:
                case self::ACCESSED:
                case self::ACCOUNT:
                case self::ACL:
                case self::ACOS:
                case self::ACTION:
                case self::ACTIONS:
                case self::ACTIVATE:
                case self::ACTIVE:
                case self::ACTIVE_COMPONENT:
                case self::ACTIVE_DATA:
                case self::ACTIVE_FUNCTION:
                case self::ACTIVE_TAG:
                case self::ACTIVITY:
                case self::ADAPTIVE_PLAN:
                case self::ADD:
                case self::ADD_COLUMN:
                case self::ADD_GROUP:
                case self::ADD_MONTHS:
                case self::ADJ_DATE:
                case self::ADMIN:
                case self::ADMINISTER:
                case self::ADMINISTRATOR:
                case self::ADVANCED:
                case self::ADVISE:
                case self::ADVISOR:
                case self::AFD_DISKSTRING:
                case self::AFTER:
                case self::AGENT:
                case self::AGGREGATE:
                case self::A_LETTER:
                case self::ALIAS:
                case self::ALLOCATE:
                case self::ALLOW:
                case self::ALL_ROWS:
                case self::ALWAYS:
                case self::ANALYZE:
                case self::ANCILLARY:
                case self::AND_EQUAL:
                case self::ANOMALY:
                case self::ANSI_REARCH:
                case self::ANTIJOIN:
                case self::ANYSCHEMA:
                case self::APPEND:
                case self::APPENDCHILDXML:
                case self::APPEND_VALUES:
                case self::APPLICATION:
                case self::APPLY:
                case self::APPROX_COUNT_DISTINCT:
                case self::ARCHIVAL:
                case self::ARCHIVE:
                case self::ARCHIVED:
                case self::ARCHIVELOG:
                case self::ARRAY:
                case self::ASCII:
                case self::ASCIISTR:
                case self::ASIN:
                case self::ASIS:
                case self::ASSEMBLY:
                case self::ASSIGN:
                case self::ASSOCIATE:
                case self::ASYNC:
                case self::ASYNCHRONOUS:
                case self::ATAN2:
                case self::ATAN:
                case self::AT:
                case self::ATTRIBUTE:
                case self::ATTRIBUTES:
                case self::AUTHENTICATED:
                case self::AUTHENTICATION:
                case self::AUTHID:
                case self::AUTHORIZATION:
                case self::AUTOALLOCATE:
                case self::AUTO:
                case self::AUTOEXTEND:
                case self::AUTO_LOGIN:
                case self::AUTOMATIC:
                case self::AUTONOMOUS_TRANSACTION:
                case self::AUTO_REOPTIMIZE:
                case self::AVAILABILITY:
                case self::AVRO:
                case self::BACKGROUND:
                case self::BACKUP:
                case self::BASIC:
                case self::BASICFILE:
                case self::BATCH:
                case self::BATCHSIZE:
                case self::BATCH_TABLE_ACCESS_BY_ROWID:
                case self::BECOME:
                case self::BEFORE:
                case self::BEGIN:
                case self::BEGINNING:
                case self::BEGIN_OUTLINE_DATA:
                case self::BEHALF:
                case self::BEQUEATH:
                case self::BFILE:
                case self::BFILENAME:
                case self::BIGFILE:
                case self::BINARY:
                case self::BINARY_DOUBLE:
                case self::BINARY_DOUBLE_INFINITY:
                case self::BINARY_DOUBLE_NAN:
                case self::BINARY_FLOAT:
                case self::BINARY_FLOAT_INFINITY:
                case self::BINARY_FLOAT_NAN:
                case self::BINARY_INTEGER:
                case self::BIND_AWARE:
                case self::BINDING:
                case self::BIN_TO_NUM:
                case self::BITAND:
                case self::BITMAP_AND:
                case self::BITMAP:
                case self::BITMAPS:
                case self::BITMAP_TREE:
                case self::BITS:
                case self::BLOB:
                case self::BLOCK:
                case self::BLOCK_RANGE:
                case self::BLOCKS:
                case self::BLOCKSIZE:
                case self::BODY:
                case self::BOOLEAN:
                case self::BOTH:
                case self::BOUND:
                case self::BRANCH:
                case self::BREADTH:
                case self::BROADCAST:
                case self::BSON:
                case self::BUFFER:
                case self::BUFFER_CACHE:
                case self::BUFFER_POOL:
                case self::BUILD:
                case self::BULK:
                case self::BYPASS_RECURSIVE_CHECK:
                case self::BYPASS_UJVC:
                case self::BYTE:
                case self::CACHE:
                case self::CACHE_CB:
                case self::CACHE_INSTANCES:
                case self::CACHE_TEMP_TABLE:
                case self::CACHING:
                case self::CALCULATED:
                case self::CALLBACK:
                case self::CALL:
                case self::CANCEL:
                case self::CAPACITY:
                case self::CARDINALITY:
                case self::CASCADE:
                case self::CASE:
                case self::CAST:
                case self::CATEGORY:
                case self::CDBDEFAULT:
                case self::CEIL:
                case self::CELL_FLASH_CACHE:
                case self::CERTIFICATE:
                case self::CFILE:
                case self::CHAINED:
                case self::CHANGE:
                case self::CHANGE_DUPKEY_ERROR_INDEX:
                case self::CHARACTER:
                case self::CHAR:
                case self::CHAR_CS:
                case self::CHARTOROWID:
                case self::CHECK_ACL_REWRITE:
                case self::CHECKPOINT:
                case self::CHILD:
                case self::CHOOSE:
                case self::CHR:
                case self::CHUNK:
                case self::CLASS:
                case self::CLASSIFIER:
                case self::CLEANUP:
                case self::CLEAR:
                case self::C_LETTER:
                case self::CLIENT:
                case self::CLOB:
                case self::CLONE:
                case self::CLOSE_CACHED_OPEN_CURSORS:
                case self::CLOSE:
                case self::CLUSTER_BY_ROWID:
                case self::CLUSTER:
                case self::CLUSTER_DETAILS:
                case self::CLUSTER_DISTANCE:
                case self::CLUSTER_ID:
                case self::CLUSTERING:
                case self::CLUSTERING_FACTOR:
                case self::CLUSTER_PROBABILITY:
                case self::CLUSTER_SET:
                case self::COALESCE:
                case self::COALESCE_SQ:
                case self::COARSE:
                case self::CO_AUTH_IND:
                case self::COLD:
                case self::COLLECT:
                case self::COLUMNAR:
                case self::COLUMN_AUTH_INDICATOR:
                case self::COLUMN:
                case self::COLUMNS:
                case self::COLUMN_STATS:
                case self::COLUMN_VALUE:
                case self::COMMENT:
                case self::COMMIT:
                case self::COMMITTED:
                case self::COMMON_DATA:
                case self::COMPACT:
                case self::COMPATIBILITY:
                case self::COMPILE:
                case self::COMPLETE:
                case self::COMPLIANCE:
                case self::COMPONENT:
                case self::COMPONENTS:
                case self::COMPOSE:
                case self::COMPOSITE:
                case self::COMPOSITE_LIMIT:
                case self::COMPOUND:
                case self::COMPUTE:
                case self::CONCAT:
                case self::CON_DBID_TO_ID:
                case self::CONDITIONAL:
                case self::CONDITION:
                case self::CONFIRM:
                case self::CONFORMING:
                case self::CON_GUID_TO_ID:
                case self::CON_ID:
                case self::CON_NAME_TO_ID:
                case self::CONNECT_BY_CB_WHR_ONLY:
                case self::CONNECT_BY_COMBINE_SW:
                case self::CONNECT_BY_COST_BASED:
                case self::CONNECT_BY_ELIM_DUPS:
                case self::CONNECT_BY_FILTERING:
                case self::CONNECT_BY_ISCYCLE:
                case self::CONNECT_BY_ISLEAF:
                case self::CONNECT_BY_ROOT:
                case self::CONNECT:
                case self::CONNECT_TIME:
                case self::CONSIDER:
                case self::CONSISTENT:
                case self::CONSTANT:
                case self::CONST:
                case self::CONSTRAINT:
                case self::CONSTRAINTS:
                case self::CONSTRUCTOR:
                case self::CONTAINER:
                case self::CONTAINER_DATA:
                case self::CONTAINERS:
                case self::CONTENT:
                case self::CONTENTS:
                case self::CONTEXT:
                case self::CONTINUE:
                case self::CONTROLFILE:
                case self::CON_UID_TO_ID:
                case self::CONVERT:
                case self::COOKIE:
                case self::COPY:
                case self::CORR_K:
                case self::CORR_S:
                case self::CORRUPTION:
                case self::CORRUPT_XID_ALL:
                case self::CORRUPT_XID:
                case self::COS:
                case self::COSH:
                case self::COST:
                case self::COST_XML_QUERY_REWRITE:
                case self::COUNT:
                case self::COVAR_POP:
                case self::COVAR_SAMP:
                case self::CPU_COSTING:
                case self::CPU_PER_CALL:
                case self::CPU_PER_SESSION:
                case self::CRASH:
                case self::CREATE_FILE_DEST:
                case self::CREATE_STORED_OUTLINES:
                case self::CREATION:
                case self::CREDENTIAL:
                case self::CRITICAL:
                case self::CROSS:
                case self::CROSSEDITION:
                case self::CSCONVERT:
                case self::CUBE_AJ:
                case self::CUBE:
                case self::CUBE_GB:
                case self::CUBE_SJ:
                case self::CUME_DISTM:
                case self::CURRENT:
                case self::CURRENT_DATE:
                case self::CURRENT_SCHEMA:
                case self::CURRENT_TIME:
                case self::CURRENT_TIMESTAMP:
                case self::CURRENT_USER:
                case self::CURRENTV:
                case self::CURSOR:
                case self::CURSOR_SHARING_EXACT:
                case self::CURSOR_SPECIFIC_SEGMENT:
                case self::CUSTOMDATUM:
                case self::CV:
                case self::CYCLE:
                case self::DANGLING:
                case self::DATABASE:
                case self::DATA:
                case self::DATAFILE:
                case self::DATAFILES:
                case self::DATAMOVEMENT:
                case self::DATAOBJNO:
                case self::DATAOBJ_TO_MAT_PARTITION:
                case self::DATAOBJ_TO_PARTITION:
                case self::DATAPUMP:
                case self::DATA_SECURITY_REWRITE_LIMIT:
                case self::DATE_MODE:
                case self::DAY:
                case self::DAYS:
                case self::DBA:
                case self::DBA_RECYCLEBIN:
                case self::DBMS_STATS:
                case self::DB_ROLE_CHANGE:
                case self::DBTIMEZONE:
                case self::DB_UNIQUE_NAME:
                case self::DB_VERSION:
                case self::DDL:
                case self::DEALLOCATE:
                case self::DEBUG:
                case self::DEBUGGER:
                case self::DEC:
                case self::DECIMAL:
                case self::DECLARE:
                case self::DECOMPOSE:
                case self::DECORRELATE:
                case self::DECR:
                case self::DECREMENT:
                case self::DECRYPT:
                case self::DEDUPLICATE:
                case self::DEFAULTS:
                case self::DEFERRABLE:
                case self::DEFERRED:
                case self::DEFINED:
                case self::DEFINE:
                case self::DEFINER:
                case self::DEGREE:
                case self::DELAY:
                case self::DELEGATE:
                case self::DELETE_ALL:
                case self::DELETE:
                case self::DELETEXML:
                case self::DEMAND:
                case self::DENSE_RANKM:
                case self::DEPENDENT:
                case self::DEPTH:
                case self::DEQUEUE:
                case self::DEREF:
                case self::DEREF_NO_REWRITE:
                case self::DESTROY:
                case self::DETACHED:
                case self::DETERMINES:
                case self::DETERMINISTIC:
                case self::DICTIONARY:
                case self::DIMENSION:
                case self::DIMENSIONS:
                case self::DIRECT_LOAD:
                case self::DIRECTORY:
                case self::DIRECT_PATH:
                case self::DISABLE_ALL:
                case self::DISABLE:
                case self::DISABLE_PARALLEL_DML:
                case self::DISABLE_PRESET:
                case self::DISABLE_RPKE:
                case self::DISALLOW:
                case self::DISASSOCIATE:
                case self::DISCARD:
                case self::DISCONNECT:
                case self::DISK:
                case self::DISKGROUP:
                case self::DISKS:
                case self::DISMOUNT:
                case self::DISTINGUISHED:
                case self::DISTRIBUTED:
                case self::DISTRIBUTE:
                case self::DML:
                case self::DML_UPDATE:
                case self::DOCFIDELITY:
                case self::DOCUMENT:
                case self::DOMAIN_INDEX_FILTER:
                case self::DOMAIN_INDEX_NO_SORT:
                case self::DOMAIN_INDEX_SORT:
                case self::DOUBLE:
                case self::DOWNGRADE:
                case self::DRIVING_SITE:
                case self::DROP_COLUMN:
                case self::DROP_GROUP:
                case self::DSINTERVAL_UNCONSTRAINED:
                case self::DST_UPGRADE_INSERT_CONV:
                case self::DUMP:
                case self::DUPLICATE:
                case self::DV:
                case self::DYNAMIC:
                case self::DYNAMIC_SAMPLING:
                case self::DYNAMIC_SAMPLING_EST_CDN:
                case self::EACH:
                case self::EDITIONABLE:
                case self::EDITION:
                case self::EDITIONING:
                case self::EDITIONS:
                case self::ELEMENT:
                case self::ELIM_GROUPBY:
                case self::ELIMINATE_JOIN:
                case self::ELIMINATE_OBY:
                case self::ELIMINATE_OUTER_JOIN:
                case self::EM:
                case self::EMPTY_BLOB:
                case self::EMPTY_CLOB:
                case self::EMPTY:
                case self::ENABLE_ALL:
                case self::ENABLE:
                case self::ENABLE_PARALLEL_DML:
                case self::ENABLE_PRESET:
                case self::ENCODING:
                case self::ENCRYPT:
                case self::ENCRYPTION:
                case self::END_OUTLINE_DATA:
                case self::ENFORCED:
                case self::ENFORCE:
                case self::ENQUEUE:
                case self::ENTERPRISE:
                case self::ENTITYESCAPING:
                case self::ENTRY:
                case self::EQUIPART:
                case self::ERR:
                case self::ERROR_ARGUMENT:
                case self::ERROR:
                case self::ERROR_ON_OVERLAP_TIME:
                case self::ERRORS:
                case self::ESCAPE:
                case self::ESTIMATE:
                case self::EVAL:
                case self::EVALNAME:
                case self::EVALUATE:
                case self::EVALUATION:
                case self::EVENTS:
                case self::EVERY:
                case self::EXCEPT:
                case self::EXCEPTION:
                case self::EXCEPTION_INIT:
                case self::EXCEPTIONS:
                case self::EXCHANGE:
                case self::EXCLUDE:
                case self::EXCLUDING:
                case self::EXECUTE:
                case self::EXEMPT:
                case self::EXISTING:
                case self::EXISTS:
                case self::EXISTSNODE:
                case self::EXIT:
                case self::EXPAND_GSET_TO_UNION:
                case self::EXPAND_TABLE:
                case self::EXP:
                case self::EXPIRE:
                case self::EXPLAIN:
                case self::EXPLOSION:
                case self::EXPORT:
                case self::EXPR_CORR_CHECK:
                case self::EXPRESS:
                case self::EXTENDS:
                case self::EXTENT:
                case self::EXTENTS:
                case self::EXTERNAL:
                case self::EXTERNALLY:
                case self::EXTRACTCLOBXML:
                case self::EXTRACT:
                case self::EXTRACTVALUE:
                case self::EXTRA:
                case self::FACILITY:
                case self::FACT:
                case self::FACTOR:
                case self::FACTORIZE_JOIN:
                case self::FAILED:
                case self::FAILED_LOGIN_ATTEMPTS:
                case self::FAILGROUP:
                case self::FAILOVER:
                case self::FAILURE:
                case self::FALSE:
                case self::FAMILY:
                case self::FAR:
                case self::FAST:
                case self::FASTSTART:
                case self::FBTSCAN:
                case self::FEATURE_DETAILS:
                case self::FEATURE_ID:
                case self::FEATURE_SET:
                case self::FEATURE_VALUE:
                case self::FETCH:
                case self::FILE:
                case self::FILE_NAME_CONVERT:
                case self::FILESYSTEM_LIKE_LOGGING:
                case self::FILTER:
                case self::FINAL:
                case self::FINE:
                case self::FINISH:
                case self::FIRST:
                case self::FIRSTM:
                case self::FIRST_ROWS:
                case self::FIRST_VALUE:
                case self::FIXED_VIEW_DATA:
                case self::FLAGGER:
                case self::FLASHBACK:
                case self::FLASH_CACHE:
                case self::FLOAT:
                case self::FLOB:
                case self::FLOOR:
                case self::FLUSH:
                case self::FOLDER:
                case self::FOLLOWING:
                case self::FOLLOWS:
                case self::FORALL:
                case self::FORCE:
                case self::FORCE_XML_QUERY_REWRITE:
                case self::FOREIGN:
                case self::FOREVER:
                case self::FORMAT:
                case self::FORWARD:
                case self::FRAGMENT_NUMBER:
                case self::FREELIST:
                case self::FREELISTS:
                case self::FREEPOOLS:
                case self::FRESH:
                case self::FROM_TZ:
                case self::FULL:
                case self::FULL_OUTER_JOIN_TO_OUTER:
                case self::FUNCTION:
                case self::FUNCTIONS:
                case self::GATHER_OPTIMIZER_STATISTICS:
                case self::GATHER_PLAN_STATISTICS:
                case self::GBY_CONC_ROLLUP:
                case self::GBY_PUSHDOWN:
                case self::GENERATED:
                case self::GET:
                case self::GLOBAL:
                case self::GLOBALLY:
                case self::GLOBAL_NAME:
                case self::GLOBAL_TOPIC_ENABLED:
                case self::GROUP_BY:
                case self::GROUP_ID:
                case self::GROUPING:
                case self::GROUPING_ID:
                case self::GROUPS:
                case self::GUARANTEED:
                case self::GUARANTEE:
                case self::GUARD:
                case self::HASH_AJ:
                case self::HASH:
                case self::HASHKEYS:
                case self::HASH_SJ:
                case self::HEADER:
                case self::HEAP:
                case self::HELP:
                case self::HEXTORAW:
                case self::HEXTOREF:
                case self::HIDDEN_KEYWORD:
                case self::HIDE:
                case self::HIERARCHY:
                case self::HIGH:
                case self::HINTSET_BEGIN:
                case self::HINTSET_END:
                case self::HOT:
                case self::HOUR:
                case self::HWM_BROKERED:
                case self::HYBRID:
                case self::IDENTIFIER:
                case self::IDENTITY:
                case self::IDGENERATORS:
                case self::ID:
                case self::IDLE_TIME:
                case self::IF:
                case self::IGNORE:
                case self::IGNORE_OPTIM_EMBEDDED_HINTS:
                case self::IGNORE_ROW_ON_DUPKEY_INDEX:
                case self::IGNORE_WHERE_CLAUSE:
                case self::ILM:
                case self::IMMEDIATE:
                case self::IMPACT:
                case self::IMPORT:
                case self::INACTIVE:
                case self::INCLUDE:
                case self::INCLUDE_VERSION:
                case self::INCLUDING:
                case self::INCREMENTAL:
                case self::INCREMENT:
                case self::INCR:
                case self::INDENT:
                case self::INDEX_ASC:
                case self::INDEX_COMBINE:
                case self::INDEX_DESC:
                case self::INDEXED:
                case self::INDEXES:
                case self::INDEX_FFS:
                case self::INDEX_FILTER:
                case self::INDEXING:
                case self::INDEX_JOIN:
                case self::INDEX_ROWS:
                case self::INDEX_RRS:
                case self::INDEX_RS_ASC:
                case self::INDEX_RS_DESC:
                case self::INDEX_RS:
                case self::INDEX_SCAN:
                case self::INDEX_SKIP_SCAN:
                case self::INDEX_SS_ASC:
                case self::INDEX_SS_DESC:
                case self::INDEX_SS:
                case self::INDEX_STATS:
                case self::INDEXTYPE:
                case self::INDEXTYPES:
                case self::INDICATOR:
                case self::INDICES:
                case self::INFINITE:
                case self::INFORMATIONAL:
                case self::INHERIT:
                case self::INITCAP:
                case self::INITIAL:
                case self::INITIALIZED:
                case self::INITIALLY:
                case self::INITRANS:
                case self::INLINE:
                case self::INLINE_XMLTYPE_NT:
                case self::INMEMORY:
                case self::IN_MEMORY_METADATA:
                case self::INMEMORY_PRUNING:
                case self::INNER:
                case self::INOUT:
                case self::INPLACE:
                case self::INSERTCHILDXMLAFTER:
                case self::INSERTCHILDXMLBEFORE:
                case self::INSERTCHILDXML:
                case self::INSERTXMLAFTER:
                case self::INSERTXMLBEFORE:
                case self::INSTANCE:
                case self::INSTANCES:
                case self::INSTANTIABLE:
                case self::INSTANTLY:
                case self::INSTEAD:
                case self::INSTR2:
                case self::INSTR4:
                case self::INSTRB:
                case self::INSTRC:
                case self::INSTR:
                case self::INTEGER:
                case self::INTERLEAVED:
                case self::INTERMEDIATE:
                case self::INTERNAL_CONVERT:
                case self::INTERNAL_USE:
                case self::INTERPRETED:
                case self::INTERVAL:
                case self::INT:
                case self::INVALIDATE:
                case self::INVISIBLE:
                case self::IN_XQUERY:
                case self::ISOLATION:
                case self::ISOLATION_LEVEL:
                case self::ITERATE:
                case self::ITERATION_NUMBER:
                case self::JAVA:
                case self::JOB:
                case self::JOIN:
                case self::JSON_ARRAYAGG:
                case self::JSON_ARRAY:
                case self::JSON_EQUAL:
                case self::JSON_EXISTS2:
                case self::JSON_EXISTS:
                case self::JSONGET:
                case self::JSON:
                case self::JSON_OBJECTAGG:
                case self::JSON_OBJECT:
                case self::JSONPARSE:
                case self::JSON_QUERY:
                case self::JSON_SERIALIZE:
                case self::JSON_TABLE:
                case self::JSON_TEXTCONTAINS2:
                case self::JSON_TEXTCONTAINS:
                case self::JSON_VALUE:
                case self::KEEP_DUPLICATES:
                case self::KEEP:
                case self::KERBEROS:
                case self::KEY:
                case self::KEY_LENGTH:
                case self::KEYSIZE:
                case self::KEYS:
                case self::KEYSTORE:
                case self::KILL:
                case self::LABEL:
                case self::LANGUAGE:
                case self::LAST_DAY:
                case self::LAST:
                case self::LAST_VALUE:
                case self::LATERAL:
                case self::LAX:
                case self::LAYER:
                case self::LDAP_REGISTRATION_ENABLED:
                case self::LDAP_REGISTRATION:
                case self::LDAP_REG_SYNC_INTERVAL:
                case self::LEADING:
                case self::LEFT:
                case self::LENGTH2:
                case self::LENGTH4:
                case self::LENGTHB:
                case self::LENGTHC:
                case self::LENGTH:
                case self::LESS:
                case self::LEVEL:
                case self::LEVELS:
                case self::LIBRARY:
                case self::LIFECYCLE:
                case self::LIFE:
                case self::LIFETIME:
                case self::LIKE2:
                case self::LIKE4:
                case self::LIKEC:
                case self::LIKE_EXPAND:
                case self::LIMIT:
                case self::LINEAR:
                case self::LINK:
                case self::LIST:
                case self::LN:
                case self::LNNVL:
                case self::LOAD:
                case self::LOB:
                case self::LOBNVL:
                case self::LOBS:
                case self::LOCAL_INDEXES:
                case self::LOCAL:
                case self::LOCALTIME:
                case self::LOCALTIMESTAMP:
                case self::LOCATION:
                case self::LOCATOR:
                case self::LOCKED:
                case self::LOCKING:
                case self::LOGFILE:
                case self::LOGFILES:
                case self::LOGGING:
                case self::LOGICAL:
                case self::LOGICAL_READS_PER_CALL:
                case self::LOGICAL_READS_PER_SESSION:
                case self::LOG:
                case self::LOGMINING:
                case self::LOGOFF:
                case self::LOGON:
                case self::LOG_READ_ONLY_VIOLATIONS:
                case self::LONG:
                case self::LOOP:
                case self::LOWER:
                case self::LOW:
                case self::LPAD:
                case self::LTRIM:
                case self::MAIN:
                case self::MAKE_REF:
                case self::MANAGED:
                case self::MANAGE:
                case self::MANAGEMENT:
                case self::MANAGER:
                case self::MANUAL:
                case self::MAP:
                case self::MAPPING:
                case self::MASTER:
                case self::MATCHED:
                case self::MATCHES:
                case self::MATCH:
                case self::MATCH_NUMBER:
                case self::MATCH_RECOGNIZE:
                case self::MATERIALIZED:
                case self::MATERIALIZE:
                case self::MAXARCHLOGS:
                case self::MAXDATAFILES:
                case self::MAXEXTENTS:
                case self::MAXIMIZE:
                case self::MAXINSTANCES:
                case self::MAXLOGFILES:
                case self::MAXLOGHISTORY:
                case self::MAXLOGMEMBERS:
                case self::MAX_SHARED_TEMP_SIZE:
                case self::MAXSIZE:
                case self::MAXTRANS:
                case self::MAXVALUE:
                case self::MEASURE:
                case self::MEASURES:
                case self::MEDIUM:
                case self::MEMBER:
                case self::MEMCOMPRESS:
                case self::MEMORY:
                case self::MERGEACTIONS:
                case self::MERGE_AJ:
                case self::MERGE_CONST_ON:
                case self::MERGE:
                case self::MERGE_SJ:
                case self::METADATA:
                case self::METHOD:
                case self::MIGRATE:
                case self::MIGRATION:
                case self::MINEXTENTS:
                case self::MINIMIZE:
                case self::MINIMUM:
                case self::MINING:
                case self::MINUS_NULL:
                case self::MINUTE:
                case self::MINVALUE:
                case self::MIRRORCOLD:
                case self::MIRRORHOT:
                case self::MIRROR:
                case self::MLSLABEL:
                case self::MODEL_COMPILE_SUBQUERY:
                case self::MODEL_DONTVERIFY_UNIQUENESS:
                case self::MODEL_DYNAMIC_SUBQUERY:
                case self::MODEL_MIN_ANALYSIS:
                case self::MODEL:
                case self::MODEL_NB:
                case self::MODEL_NO_ANALYSIS:
                case self::MODEL_PBY:
                case self::MODEL_PUSH_REF:
                case self::MODEL_SV:
                case self::MODIFICATION:
                case self::MODIFY_COLUMN_TYPE:
                case self::MODIFY:
                case self::MOD:
                case self::MODULE:
                case self::MONITORING:
                case self::MONITOR:
                case self::MONTH:
                case self::MONTHS_BETWEEN:
                case self::MONTHS:
                case self::MOUNT:
                case self::MOUNTPATH:
                case self::MOVEMENT:
                case self::MOVE:
                case self::MULTIDIMENSIONAL:
                case self::MULTISET:
                case self::MV_MERGE:
                case self::NAMED:
                case self::NAME:
                case self::NAMESPACE:
                case self::NAN:
                case self::NANVL:
                case self::NATIONAL:
                case self::NATIVE_FULL_OUTER_JOIN:
                case self::NATIVE:
                case self::NATURAL:
                case self::NAV:
                case self::NCHAR_CS:
                case self::NCHAR:
                case self::NCHR:
                case self::NCLOB:
                case self::NEEDED:
                case self::NEG:
                case self::NESTED:
                case self::NESTED_TABLE_FAST_INSERT:
                case self::NESTED_TABLE_GET_REFS:
                case self::NESTED_TABLE_ID:
                case self::NESTED_TABLE_SET_REFS:
                case self::NESTED_TABLE_SET_SETID:
                case self::NETWORK:
                case self::NEVER:
                case self::NEW:
                case self::NEW_TIME:
                case self::NEXT_DAY:
                case self::NEXT:
                case self::NL_AJ:
                case self::NLJ_BATCHING:
                case self::NLJ_INDEX_FILTER:
                case self::NLJ_INDEX_SCAN:
                case self::NLJ_PREFETCH:
                case self::NLS_CALENDAR:
                case self::NLS_CHARACTERSET:
                case self::NLS_CHARSET_DECL_LEN:
                case self::NLS_CHARSET_ID:
                case self::NLS_CHARSET_NAME:
                case self::NLS_COMP:
                case self::NLS_CURRENCY:
                case self::NLS_DATE_FORMAT:
                case self::NLS_DATE_LANGUAGE:
                case self::NLS_INITCAP:
                case self::NLS_ISO_CURRENCY:
                case self::NL_SJ:
                case self::NLS_LANG:
                case self::NLS_LANGUAGE:
                case self::NLS_LENGTH_SEMANTICS:
                case self::NLS_LOWER:
                case self::NLS_NCHAR_CONV_EXCP:
                case self::NLS_NUMERIC_CHARACTERS:
                case self::NLS_SORT:
                case self::NLSSORT:
                case self::NLS_SPECIAL_CHARS:
                case self::NLS_TERRITORY:
                case self::NLS_UPPER:
                case self::NO_ACCESS:
                case self::NO_ADAPTIVE_PLAN:
                case self::NO_ANSI_REARCH:
                case self::NOAPPEND:
                case self::NOARCHIVELOG:
                case self::NOAUDIT:
                case self::NO_AUTO_REOPTIMIZE:
                case self::NO_BASETABLE_MULTIMV_REWRITE:
                case self::NO_BATCH_TABLE_ACCESS_BY_ROWID:
                case self::NO_BIND_AWARE:
                case self::NO_BUFFER:
                case self::NOCACHE:
                case self::NO_CARTESIAN:
                case self::NO_CHECK_ACL_REWRITE:
                case self::NO_CLUSTER_BY_ROWID:
                case self::NO_CLUSTERING:
                case self::NO_COALESCE_SQ:
                case self::NO_COMMON_DATA:
                case self::NO_CONNECT_BY_CB_WHR_ONLY:
                case self::NO_CONNECT_BY_COMBINE_SW:
                case self::NO_CONNECT_BY_COST_BASED:
                case self::NO_CONNECT_BY_ELIM_DUPS:
                case self::NO_CONNECT_BY_FILTERING:
                case self::NOCOPY:
                case self::NO_COST_XML_QUERY_REWRITE:
                case self::NO_CPU_COSTING:
                case self::NOCPU_COSTING:
                case self::NOCYCLE:
                case self::NO_DATA_SECURITY_REWRITE:
                case self::NO_DECORRELATE:
                case self::NODELAY:
                case self::NO_DOMAIN_INDEX_FILTER:
                case self::NO_DST_UPGRADE_INSERT_CONV:
                case self::NO_ELIM_GROUPBY:
                case self::NO_ELIMINATE_JOIN:
                case self::NO_ELIMINATE_OBY:
                case self::NO_ELIMINATE_OUTER_JOIN:
                case self::NOENTITYESCAPING:
                case self::NO_EXPAND_GSET_TO_UNION:
                case self::NO_EXPAND:
                case self::NO_EXPAND_TABLE:
                case self::NO_FACT:
                case self::NO_FACTORIZE_JOIN:
                case self::NO_FILTERING:
                case self::NOFORCE:
                case self::NO_FULL_OUTER_JOIN_TO_OUTER:
                case self::NO_GATHER_OPTIMIZER_STATISTICS:
                case self::NO_GBY_PUSHDOWN:
                case self::NOGUARANTEE:
                case self::NO_INDEX_FFS:
                case self::NO_INDEX:
                case self::NO_INDEX_SS:
                case self::NO_INMEMORY:
                case self::NO_INMEMORY_PRUNING:
                case self::NOKEEP:
                case self::NO_LOAD:
                case self::NOLOCAL:
                case self::NOLOGGING:
                case self::NOMAPPING:
                case self::NOMAXVALUE:
                case self::NO_MERGE:
                case self::NOMINIMIZE:
                case self::NOMINVALUE:
                case self::NO_MODEL_PUSH_REF:
                case self::NO_MONITORING:
                case self::NOMONITORING:
                case self::NO_MONITOR:
                case self::NO_MULTIMV_REWRITE:
                case self::NO_NATIVE_FULL_OUTER_JOIN:
                case self::NONBLOCKING:
                case self::NONEDITIONABLE:
                case self::NONE:
                case self::NO_NLJ_BATCHING:
                case self::NO_NLJ_PREFETCH:
                case self::NO:
                case self::NONSCHEMA:
                case self::NO_OBJECT_LINK:
                case self::NOORDER:
                case self::NO_ORDER_ROLLUPS:
                case self::NO_OUTER_JOIN_TO_ANTI:
                case self::NO_OUTER_JOIN_TO_INNER:
                case self::NOOVERRIDE:
                case self::NO_PARALLEL_INDEX:
                case self::NOPARALLEL_INDEX:
                case self::NO_PARALLEL:
                case self::NOPARALLEL:
                case self::NO_PARTIAL_COMMIT:
                case self::NO_PARTIAL_JOIN:
                case self::NO_PARTIAL_ROLLUP_PUSHDOWN:
                case self::NOPARTITION:
                case self::NO_PLACE_DISTINCT:
                case self::NO_PLACE_GROUP_BY:
                case self::NO_PQ_CONCURRENT_UNION:
                case self::NO_PQ_MAP:
                case self::NO_PQ_REPLICATE:
                case self::NO_PQ_SKEW:
                case self::NO_PRUNE_GSETS:
                case self::NO_PULL_PRED:
                case self::NO_PUSH_PRED:
                case self::NO_PUSH_SUBQ:
                case self::NO_PX_FAULT_TOLERANCE:
                case self::NO_PX_JOIN_FILTER:
                case self::NO_QKN_BUFF:
                case self::NO_QUERY_TRANSFORMATION:
                case self::NO_REF_CASCADE:
                case self::NORELOCATE:
                case self::NORELY:
                case self::NOREPAIR:
                case self::NOREPLAY:
                case self::NORESETLOGS:
                case self::NO_RESULT_CACHE:
                case self::NOREVERSE:
                case self::NO_REWRITE:
                case self::NOREWRITE:
                case self::NORMAL:
                case self::NO_ROOT_SW_FOR_LOCAL:
                case self::NOROWDEPENDENCIES:
                case self::NOSCHEMACHECK:
                case self::NOSEGMENT:
                case self::NO_SEMIJOIN:
                case self::NO_SEMI_TO_INNER:
                case self::NO_SET_TO_JOIN:
                case self::NOSORT:
                case self::NO_SQL_TRANSLATION:
                case self::NO_SQL_TUNE:
                case self::NO_STAR_TRANSFORMATION:
                case self::NO_STATEMENT_QUEUING:
                case self::NO_STATS_GSETS:
                case self::NOSTRICT:
                case self::NO_SUBQUERY_PRUNING:
                case self::NO_SUBSTRB_PAD:
                case self::NO_SWAP_JOIN_INPUTS:
                case self::NOSWITCH:
                case self::NO_TABLE_LOOKUP_BY_NL:
                case self::NO_TEMP_TABLE:
                case self::NOTHING:
                case self::NOTIFICATION:
                case self::NO_TRANSFORM_DISTINCT_AGG:
                case self::NO_UNNEST:
                case self::NO_USE_CUBE:
                case self::NO_USE_HASH_AGGREGATION:
                case self::NO_USE_HASH_GBY_FOR_PUSHDOWN:
                case self::NO_USE_HASH:
                case self::NO_USE_INVISIBLE_INDEXES:
                case self::NO_USE_MERGE:
                case self::NO_USE_NL:
                case self::NO_USE_VECTOR_AGGREGATION:
                case self::NOVALIDATE:
                case self::NO_VECTOR_TRANSFORM_DIMS:
                case self::NO_VECTOR_TRANSFORM_FACT:
                case self::NO_VECTOR_TRANSFORM:
                case self::NO_XDB_FASTPATH_INSERT:
                case self::NO_XML_DML_REWRITE:
                case self::NO_XMLINDEX_REWRITE_IN_SELECT:
                case self::NO_XMLINDEX_REWRITE:
                case self::NO_XML_QUERY_REWRITE:
                case self::NO_ZONEMAP:
                case self::NTH_VALUE:
                case self::NULLIF:
                case self::NULLS:
                case self::NUMBER:
                case self::NUMERIC:
                case self::NUM_INDEX_KEYS:
                case self::NUMTODSINTERVAL:
                case self::NUMTOYMINTERVAL:
                case self::NVARCHAR2:
                case self::NVL2:
                case self::OBJECT2XML:
                case self::OBJECT:
                case self::OBJ_ID:
                case self::OBJNO:
                case self::OBJNO_REUSE:
                case self::OCCURENCES:
                case self::OFFLINE:
                case self::OFF:
                case self::OFFSET:
                case self::OIDINDEX:
                case self::OID:
                case self::OLAP:
                case self::OLD:
                case self::OLD_PUSH_PRED:
                case self::OLS:
                case self::OLTP:
                case self::OMIT:
                case self::ONE:
                case self::ONLINE:
                case self::ONLY:
                case self::OPAQUE:
                case self::OPAQUE_TRANSFORM:
                case self::OPAQUE_XCANONICAL:
                case self::OPCODE:
                case self::OPEN:
                case self::OPERATIONS:
                case self::OPERATOR:
                case self::OPT_ESTIMATE:
                case self::OPTIMAL:
                case self::OPTIMIZE:
                case self::OPTIMIZER_FEATURES_ENABLE:
                case self::OPTIMIZER_GOAL:
                case self::OPT_PARAM:
                case self::ORA_BRANCH:
                case self::ORA_CHECK_ACL:
                case self::ORA_CHECK_PRIVILEGE:
                case self::ORA_CLUSTERING:
                case self::ORADATA:
                case self::ORADEBUG:
                case self::ORA_DST_AFFECTED:
                case self::ORA_DST_CONVERT:
                case self::ORA_DST_ERROR:
                case self::ORA_GET_ACLIDS:
                case self::ORA_GET_PRIVILEGES:
                case self::ORA_HASH:
                case self::ORA_INVOKING_USERID:
                case self::ORA_INVOKING_USER:
                case self::ORA_INVOKING_XS_USER_GUID:
                case self::ORA_INVOKING_XS_USER:
                case self::ORA_RAWCOMPARE:
                case self::ORA_RAWCONCAT:
                case self::ORA_ROWSCN:
                case self::ORA_ROWSCN_RAW:
                case self::ORA_ROWVERSION:
                case self::ORA_TABVERSION:
                case self::ORA_WRITE_TIME:
                case self::ORDERED:
                case self::ORDERED_PREDICATES:
                case self::ORDINALITY:
                case self::OR_EXPAND:
                case self::ORGANIZATION:
                case self::OR_PREDICATES:
                case self::OSERROR:
                case self::OTHER:
                case self::OUTER_JOIN_TO_ANTI:
                case self::OUTER_JOIN_TO_INNER:
                case self::OUTER:
                case self::OUTLINE_LEAF:
                case self::OUTLINE:
                case self::OUT_OF_LINE:
                case self::OUT:
                case self::OVERFLOW_NOMOVE:
                case self::OVERFLOW:
                case self::OVERLAPS:
                case self::OVER:
                case self::OVERRIDING:
                case self::OWNER:
                case self::OWNERSHIP:
                case self::OWN:
                case self::PACKAGE:
                case self::PACKAGES:
                case self::PARALLEL_ENABLE:
                case self::PARALLEL_INDEX:
                case self::PARALLEL:
                case self::PARAMETERS:
                case self::PARAM:
                case self::PARENT:
                case self::PARITY:
                case self::PARTIAL_JOIN:
                case self::PARTIALLY:
                case self::PARTIAL:
                case self::PARTIAL_ROLLUP_PUSHDOWN:
                case self::PARTITION_HASH:
                case self::PARTITION_LIST:
                case self::PARTITION:
                case self::PARTITION_RANGE:
                case self::PARTITIONS:
                case self::PARTNUMINST:
                case self::PASSING:
                case self::PASSWORD_GRACE_TIME:
                case self::PASSWORD_LIFE_TIME:
                case self::PASSWORD_LOCK_TIME:
                case self::PASSWORD:
                case self::PASSWORD_REUSE_MAX:
                case self::PASSWORD_REUSE_TIME:
                case self::PASSWORD_VERIFY_FUNCTION:
                case self::PAST:
                case self::PATCH:
                case self::PATH:
                case self::PATH_PREFIX:
                case self::PATHS:
                case self::PATTERN:
                case self::PBL_HS_BEGIN:
                case self::PBL_HS_END:
                case self::PCTINCREASE:
                case self::PCTTHRESHOLD:
                case self::PCTUSED:
                case self::PCTVERSION:
                case self::PENDING:
                case self::PERCENT_KEYWORD:
                case self::PERCENT_RANKM:
                case self::PERFORMANCE:
                case self::PERIOD_KEYWORD:
                case self::PERMANENT:
                case self::PERMISSION:
                case self::PERMUTE:
                case self::PER:
                case self::PFILE:
                case self::PHYSICAL:
                case self::PIKEY:
                case self::PIPELINED:
                case self::PIV_GB:
                case self::PIVOT:
                case self::PIV_SSF:
                case self::PLACE_DISTINCT:
                case self::PLACE_GROUP_BY:
                case self::PLAN:
                case self::PLSCOPE_SETTINGS:
                case self::PLS_INTEGER:
                case self::PLSQL_CCFLAGS:
                case self::PLSQL_CODE_TYPE:
                case self::PLSQL_DEBUG:
                case self::PLSQL_OPTIMIZE_LEVEL:
                case self::PLSQL_WARNINGS:
                case self::PLUGGABLE:
                case self::POINT:
                case self::POLICY:
                case self::POOL_16K:
                case self::POOL_2K:
                case self::POOL_32K:
                case self::POOL_4K:
                case self::POOL_8K:
                case self::POSITIVEN:
                case self::POSITIVE:
                case self::POST_TRANSACTION:
                case self::POWERMULTISET_BY_CARDINALITY:
                case self::POWERMULTISET:
                case self::POWER:
                case self::PQ_CONCURRENT_UNION:
                case self::PQ_DISTRIBUTE:
                case self::PQ_DISTRIBUTE_WINDOW:
                case self::PQ_FILTER:
                case self::PQ_MAP:
                case self::PQ_NOMAP:
                case self::PQ_REPLICATE:
                case self::PQ_SKEW:
                case self::PRAGMA:
                case self::PREBUILT:
                case self::PRECEDES:
                case self::PRECEDING:
                case self::PRECISION:
                case self::PRECOMPUTE_SUBQUERY:
                case self::PREDICATE_REORDERS:
                case self::PRELOAD:
                case self::PREPARE:
                case self::PRESENTNNV:
                case self::PRESENT:
                case self::PRESENTV:
                case self::PRESERVE_OID:
                case self::PRESERVE:
                case self::PRETTY:
                case self::PREVIOUS:
                case self::PREV:
                case self::PRIMARY:
                case self::PRINTBLOBTOCLOB:
                case self::PRIORITY:
                case self::PRIVATE:
                case self::PRIVATE_SGA:
                case self::PRIVILEGED:
                case self::PRIVILEGE:
                case self::PRIVILEGES:
                case self::PROCEDURAL:
                case self::PROCEDURE:
                case self::PROCESS:
                case self::PROFILE:
                case self::PROGRAM:
                case self::PROJECT:
                case self::PROPAGATE:
                case self::PROTECTED:
                case self::PROTECTION:
                case self::PROXY:
                case self::PRUNING:
                case self::PULL_PRED:
                case self::PURGE:
                case self::PUSH_PRED:
                case self::PUSH_SUBQ:
                case self::PX_FAULT_TOLERANCE:
                case self::PX_GRANULE:
                case self::PX_JOIN_FILTER:
                case self::QB_NAME:
                case self::QUERY_BLOCK:
                case self::QUERY:
                case self::QUEUE_CURR:
                case self::QUEUE:
                case self::QUEUE_ROWP:
                case self::QUIESCE:
                case self::QUORUM:
                case self::QUOTA:
                case self::RAISE:
                case self::RANDOM_LOCAL:
                case self::RANDOM:
                case self::RANGE:
                case self::RANKM:
                case self::RAPIDLY:
                case self::RAW:
                case self::RAWTOHEX:
                case self::RAWTONHEX:
                case self::RBA:
                case self::RBO_OUTLINE:
                case self::RDBA:
                case self::READ:
                case self::READS:
                case self::REALM:
                case self::REAL:
                case self::REBALANCE:
                case self::REBUILD:
                case self::RECORD:
                case self::RECORDS_PER_BLOCK:
                case self::RECOVERABLE:
                case self::RECOVER:
                case self::RECOVERY:
                case self::RECYCLEBIN:
                case self::RECYCLE:
                case self::REDACTION:
                case self::REDEFINE:
                case self::REDO:
                case self::REDUCED:
                case self::REDUNDANCY:
                case self::REF_CASCADE_CURSOR:
                case self::REFERENCED:
                case self::REFERENCE:
                case self::REFERENCES:
                case self::REFERENCING:
                case self::REF:
                case self::REFRESH:
                case self::REFTOHEX:
                case self::REGEXP_COUNT:
                case self::REGEXP_INSTR:
                case self::REGEXP_LIKE:
                case self::REGEXP_REPLACE:
                case self::REGEXP_SUBSTR:
                case self::REGISTER:
                case self::REGR_AVGX:
                case self::REGR_AVGY:
                case self::REGR_COUNT:
                case self::REGR_INTERCEPT:
                case self::REGR_R2:
                case self::REGR_SLOPE:
                case self::REGR_SXX:
                case self::REGR_SXY:
                case self::REGR_SYY:
                case self::REGULAR:
                case self::REJECT:
                case self::REKEY:
                case self::RELATIONAL:
                case self::RELOCATE:
                case self::RELY:
                case self::REMAINDER:
                case self::REMOTE_MAPPED:
                case self::REMOVE:
                case self::RENAME:
                case self::REPAIR:
                case self::REPEAT:
                case self::REPLACE:
                case self::REPLICATION:
                case self::REQUIRED:
                case self::RESETLOGS:
                case self::RESET:
                case self::RESIZE:
                case self::RESOLVE:
                case self::RESOLVER:
                case self::RESPECT:
                case self::RESTART:
                case self::RESTORE_AS_INTERVALS:
                case self::RESTORE:
                case self::RESTRICT_ALL_REF_CONS:
                case self::RESTRICTED:
                case self::RESTRICT_REFERENCES:
                case self::RESTRICT:
                case self::RESULT_CACHE:
                case self::RESULT:
                case self::RESUMABLE:
                case self::RESUME:
                case self::RETENTION:
                case self::RETRY_ON_ROW_CHANGE:
                case self::RETURNING:
                case self::RETURN:
                case self::REUSE:
                case self::REVERSE:
                case self::REWRITE_OR_ERROR:
                case self::REWRITE:
                case self::RIGHT:
                case self::ROLE:
                case self::ROLESET:
                case self::ROLES:
                case self::ROLLBACK:
                case self::ROLLING:
                case self::ROLLUP:
                case self::ROWDEPENDENCIES:
                case self::ROWID_MAPPING_TABLE:
                case self::ROWID:
                case self::ROWIDTOCHAR:
                case self::ROWIDTONCHAR:
                case self::ROW_LENGTH:
                case self::ROWNUM:
                case self::ROW:
                case self::ROWS:
                case self::RPAD:
                case self::RTRIM:
                case self::RULE:
                case self::RULES:
                case self::RUNNING:
                case self::SALT:
                case self::SAMPLE:
                case self::SAVE_AS_INTERVALS:
                case self::SAVEPOINT:
                case self::SAVE:
                case self::SB4:
                case self::SCALE_ROWS:
                case self::SCALE:
                case self::SCAN_INSTANCES:
                case self::SCAN:
                case self::SCHEDULER:
                case self::SCHEMACHECK:
                case self::SCHEMA:
                case self::SCN_ASCENDING:
                case self::SCN:
                case self::SCOPE:
                case self::SCRUB:
                case self::SD_ALL:
                case self::SD_INHIBIT:
                case self::SDO_GEOM_MBR:
                case self::SD_SHOW:
                case self::SEARCH:
                case self::SECOND:
                case self::SECRET:
                case self::SECUREFILE_DBA:
                case self::SECUREFILE:
                case self::SECURITY:
                case self::SEED:
                case self::SEG_BLOCK:
                case self::SEG_FILE:
                case self::SEGMENT:
                case self::SELECTIVITY:
                case self::SELF:
                case self::SEMIJOIN_DRIVER:
                case self::SEMIJOIN:
                case self::SEMI_TO_INNER:
                case self::SEQUENCED:
                case self::SEQUENCE:
                case self::SEQUENTIAL:
                case self::SERIALIZABLE:
                case self::SERIALLY_REUSABLE:
                case self::SERIAL:
                case self::SERVERERROR:
                case self::SERVICE_NAME_CONVERT:
                case self::SERVICES:
                case self::SESSION_CACHED_CURSORS:
                case self::SESSION:
                case self::SESSIONS_PER_USER:
                case self::SESSIONTIMEZONE:
                case self::SESSIONTZNAME:
                case self::SET:
                case self::SETS:
                case self::SETTINGS:
                case self::SET_TO_JOIN:
                case self::SEVERE:
                case self::SHARED_POOL:
                case self::SHARED:
                case self::SHARING:
                case self::SHELFLIFE:
                case self::SHOW:
                case self::SHRINK:
                case self::SHUTDOWN:
                case self::SIBLINGS:
                case self::SID:
                case self::SIGNAL_COMPONENT:
                case self::SIGNAL_FUNCTION:
                case self::SIGN:
                case self::SIGNTYPE:
                case self::SIMPLE_INTEGER:
                case self::SIMPLE:
                case self::SINGLE:
                case self::SINGLETASK:
                case self::SINH:
                case self::SIN:
                case self::SKIP_EXT_OPTIMIZER:
                case self::SKIP_:
                case self::SKIP_UNQ_UNUSABLE_IDX:
                case self::SKIP_UNUSABLE_INDEXES:
                case self::SMALLFILE:
                case self::SMALLINT:
                case self::SNAPSHOT:
                case self::SOME:
                case self::SORT:
                case self::SOUNDEX:
                case self::SOURCE_FILE_DIRECTORY:
                case self::SOURCE_FILE_NAME_CONVERT:
                case self::SOURCE:
                case self::SPACE_KEYWORD:
                case self::SPECIFICATION:
                case self::SPFILE:
                case self::SPLIT:
                case self::SPREADSHEET:
                case self::SQLDATA:
                case self::SQLERROR:
                case self::SQLLDR:
                case self::SQL:
                case self::SQL_TRACE:
                case self::SQL_TRANSLATION_PROFILE:
                case self::SQRT:
                case self::STALE:
                case self::STANDALONE:
                case self::STANDARD_HASH:
                case self::STANDBY_MAX_DATA_DELAY:
                case self::STANDBYS:
                case self::STANDBY:
                case self::STAR:
                case self::STAR_TRANSFORMATION:
                case self::STARTUP:
                case self::STATEMENT_ID:
                case self::STATEMENT_QUEUING:
                case self::STATEMENTS:
                case self::STATEMENT:
                case self::STATE:
                case self::STATIC:
                case self::STATISTICS:
                case self::STATS_BINOMIAL_TEST:
                case self::STATS_CROSSTAB:
                case self::STATS_F_TEST:
                case self::STATS_KS_TEST:
                case self::STATS_MODE:
                case self::STATS_MW_TEST:
                case self::STATS_ONE_WAY_ANOVA:
                case self::STATS_T_TEST_INDEP:
                case self::STATS_T_TEST_INDEPU:
                case self::STATS_T_TEST_ONE:
                case self::STATS_T_TEST_PAIRED:
                case self::STATS_WSR_TEST:
                case self::STDDEV_POP:
                case self::STDDEV_SAMP:
                case self::STOP:
                case self::STORAGE:
                case self::STORE:
                case self::STREAMS:
                case self::STREAM:
                case self::STRICT:
                case self::STRING:
                case self::STRIPE_COLUMNS:
                case self::STRIPE_WIDTH:
                case self::STRIP:
                case self::STRUCTURE:
                case self::SUBMULTISET:
                case self::SUBPARTITION_REL:
                case self::SUBPARTITIONS:
                case self::SUBPARTITION:
                case self::SUBQUERIES:
                case self::SUBQUERY_PRUNING:
                case self::SUBSCRIBE:
                case self::SUBSET:
                case self::SUBSTITUTABLE:
                case self::SUBSTR2:
                case self::SUBSTR4:
                case self::SUBSTRB:
                case self::SUBSTRC:
                case self::SUBTYPE:
                case self::SUCCESSFUL:
                case self::SUCCESS:
                case self::SUMMARY:
                case self::SUPPLEMENTAL:
                case self::SUSPEND:
                case self::SWAP_JOIN_INPUTS:
                case self::SWITCHOVER:
                case self::SWITCH:
                case self::SYNCHRONOUS:
                case self::SYNC:
                case self::SYSASM:
                case self::SYS_AUDIT:
                case self::SYSAUX:
                case self::SYSBACKUP:
                case self::SYS_CHECKACL:
                case self::SYS_CHECK_PRIVILEGE:
                case self::SYS_CONNECT_BY_PATH:
                case self::SYS_CONTEXT:
                case self::SYSDATE:
                case self::SYSDBA:
                case self::SYS_DBURIGEN:
                case self::SYSDG:
                case self::SYS_DL_CURSOR:
                case self::SYS_DM_RXFORM_CHR:
                case self::SYS_DM_RXFORM_NUM:
                case self::SYS_DOM_COMPARE:
                case self::SYS_DST_PRIM2SEC:
                case self::SYS_DST_SEC2PRIM:
                case self::SYS_ET_BFILE_TO_RAW:
                case self::SYS_ET_BLOB_TO_IMAGE:
                case self::SYS_ET_IMAGE_TO_BLOB:
                case self::SYS_ET_RAW_TO_BFILE:
                case self::SYS_EXTPDTXT:
                case self::SYS_EXTRACT_UTC:
                case self::SYS_FBT_INSDEL:
                case self::SYS_FILTER_ACLS:
                case self::SYS_FNMATCHES:
                case self::SYS_FNREPLACE:
                case self::SYS_GET_ACLIDS:
                case self::SYS_GET_COL_ACLIDS:
                case self::SYS_GET_PRIVILEGES:
                case self::SYS_GETTOKENID:
                case self::SYS_GETXTIVAL:
                case self::SYS_GUID:
                case self::SYSGUID:
                case self::SYSKM:
                case self::SYS_MAKE_XMLNODEID:
                case self::SYS_MAKEXML:
                case self::SYS_MKXMLATTR:
                case self::SYS_MKXTI:
                case self::SYSOBJ:
                case self::SYS_OP_ADT2BIN:
                case self::SYS_OP_ADTCONS:
                case self::SYS_OP_ALSCRVAL:
                case self::SYS_OP_ATG:
                case self::SYS_OP_BIN2ADT:
                case self::SYS_OP_BITVEC:
                case self::SYS_OP_BL2R:
                case self::SYS_OP_BLOOM_FILTER_LIST:
                case self::SYS_OP_BLOOM_FILTER:
                case self::SYS_OP_C2C:
                case self::SYS_OP_CAST:
                case self::SYS_OP_CEG:
                case self::SYS_OP_CL2C:
                case self::SYS_OP_COMBINED_HASH:
                case self::SYS_OP_COMP:
                case self::SYS_OP_CONVERT:
                case self::SYS_OP_COUNTCHG:
                case self::SYS_OP_CSCONV:
                case self::SYS_OP_CSCONVTEST:
                case self::SYS_OP_CSR:
                case self::SYS_OP_CSX_PATCH:
                case self::SYS_OP_CYCLED_SEQ:
                case self::SYS_OP_DECOMP:
                case self::SYS_OP_DESCEND:
                case self::SYS_OP_DISTINCT:
                case self::SYS_OP_DRA:
                case self::SYS_OP_DUMP:
                case self::SYS_OP_DV_CHECK:
                case self::SYS_OP_ENFORCE_NOT_NULL:
                case self::SYSOPER:
                case self::SYS_OP_EXTRACT:
                case self::SYS_OP_GROUPING:
                case self::SYS_OP_GUID:
                case self::SYS_OP_HASH:
                case self::SYS_OP_IIX:
                case self::SYS_OP_ITR:
                case self::SYS_OP_KEY_VECTOR_CREATE:
                case self::SYS_OP_KEY_VECTOR_FILTER_LIST:
                case self::SYS_OP_KEY_VECTOR_FILTER:
                case self::SYS_OP_KEY_VECTOR_SUCCEEDED:
                case self::SYS_OP_KEY_VECTOR_USE:
                case self::SYS_OP_LBID:
                case self::SYS_OP_LOBLOC2BLOB:
                case self::SYS_OP_LOBLOC2CLOB:
                case self::SYS_OP_LOBLOC2ID:
                case self::SYS_OP_LOBLOC2NCLOB:
                case self::SYS_OP_LOBLOC2TYP:
                case self::SYS_OP_LSVI:
                case self::SYS_OP_LVL:
                case self::SYS_OP_MAKEOID:
                case self::SYS_OP_MAP_NONNULL:
                case self::SYS_OP_MSR:
                case self::SYS_OP_NICOMBINE:
                case self::SYS_OP_NIEXTRACT:
                case self::SYS_OP_NII:
                case self::SYS_OP_NIX:
                case self::SYS_OP_NOEXPAND:
                case self::SYS_OP_NTCIMG:
                case self::SYS_OP_NUMTORAW:
                case self::SYS_OP_OIDVALUE:
                case self::SYS_OP_OPNSIZE:
                case self::SYS_OP_PAR_1:
                case self::SYS_OP_PARGID_1:
                case self::SYS_OP_PARGID:
                case self::SYS_OP_PAR:
                case self::SYS_OP_PART_ID:
                case self::SYS_OP_PIVOT:
                case self::SYS_OP_R2O:
                case self::SYS_OP_RAWTONUM:
                case self::SYS_OP_RDTM:
                case self::SYS_OP_REF:
                case self::SYS_OP_RMTD:
                case self::SYS_OP_ROWIDTOOBJ:
                case self::SYS_OP_RPB:
                case self::SYS_OPTLOBPRBSC:
                case self::SYS_OP_TOSETID:
                case self::SYS_OP_TPR:
                case self::SYS_OP_TRTB:
                case self::SYS_OPTXICMP:
                case self::SYS_OPTXQCASTASNQ:
                case self::SYS_OP_UNDESCEND:
                case self::SYS_OP_VECAND:
                case self::SYS_OP_VECBIT:
                case self::SYS_OP_VECOR:
                case self::SYS_OP_VECXOR:
                case self::SYS_OP_VERSION:
                case self::SYS_OP_VREF:
                case self::SYS_OP_VVD:
                case self::SYS_OP_XMLCONS_FOR_CSX:
                case self::SYS_OP_XPTHATG:
                case self::SYS_OP_XPTHIDX:
                case self::SYS_OP_XPTHOP:
                case self::SYS_OP_XTXT2SQLT:
                case self::SYS_OP_ZONE_ID:
                case self::SYS_ORDERKEY_DEPTH:
                case self::SYS_ORDERKEY_MAXCHILD:
                case self::SYS_ORDERKEY_PARENT:
                case self::SYS_PARALLEL_TXN:
                case self::SYS_PATHID_IS_ATTR:
                case self::SYS_PATHID_IS_NMSPC:
                case self::SYS_PATHID_LASTNAME:
                case self::SYS_PATHID_LASTNMSPC:
                case self::SYS_PATH_REVERSE:
                case self::SYS_PXQEXTRACT:
                case self::SYS_RAW_TO_XSID:
                case self::SYS_RID_ORDER:
                case self::SYS_ROW_DELTA:
                case self::SYS_SC_2_XMLT:
                case self::SYS_SYNRCIREDO:
                case self::SYSTEM_DEFINED:
                case self::SYSTEM:
                case self::SYSTIMESTAMP:
                case self::SYS_TYPEID:
                case self::SYS_UMAKEXML:
                case self::SYS_XMLANALYZE:
                case self::SYS_XMLCONTAINS:
                case self::SYS_XMLCONV:
                case self::SYS_XMLEXNSURI:
                case self::SYS_XMLGEN:
                case self::SYS_XMLI_LOC_ISNODE:
                case self::SYS_XMLI_LOC_ISTEXT:
                case self::SYS_XMLINSTR:
                case self::SYS_XMLLOCATOR_GETSVAL:
                case self::SYS_XMLNODEID_GETCID:
                case self::SYS_XMLNODEID_GETLOCATOR:
                case self::SYS_XMLNODEID_GETOKEY:
                case self::SYS_XMLNODEID_GETPATHID:
                case self::SYS_XMLNODEID_GETPTRID:
                case self::SYS_XMLNODEID_GETRID:
                case self::SYS_XMLNODEID_GETSVAL:
                case self::SYS_XMLNODEID_GETTID:
                case self::SYS_XMLNODEID:
                case self::SYS_XMLT_2_SC:
                case self::SYS_XMLTRANSLATE:
                case self::SYS_XMLTYPE2SQL:
                case self::SYS_XQ_ASQLCNV:
                case self::SYS_XQ_ATOMCNVCHK:
                case self::SYS_XQBASEURI:
                case self::SYS_XQCASTABLEERRH:
                case self::SYS_XQCODEP2STR:
                case self::SYS_XQCODEPEQ:
                case self::SYS_XQCON2SEQ:
                case self::SYS_XQCONCAT:
                case self::SYS_XQDELETE:
                case self::SYS_XQDFLTCOLATION:
                case self::SYS_XQDOC:
                case self::SYS_XQDOCURI:
                case self::SYS_XQDURDIV:
                case self::SYS_XQED4URI:
                case self::SYS_XQENDSWITH:
                case self::SYS_XQERRH:
                case self::SYS_XQERR:
                case self::SYS_XQESHTMLURI:
                case self::SYS_XQEXLOBVAL:
                case self::SYS_XQEXSTWRP:
                case self::SYS_XQEXTRACT:
                case self::SYS_XQEXTRREF:
                case self::SYS_XQEXVAL:
                case self::SYS_XQFB2STR:
                case self::SYS_XQFNBOOL:
                case self::SYS_XQFNCMP:
                case self::SYS_XQFNDATIM:
                case self::SYS_XQFNLNAME:
                case self::SYS_XQFNNM:
                case self::SYS_XQFNNSURI:
                case self::SYS_XQFNPREDTRUTH:
                case self::SYS_XQFNQNM:
                case self::SYS_XQFNROOT:
                case self::SYS_XQFORMATNUM:
                case self::SYS_XQFTCONTAIN:
                case self::SYS_XQFUNCR:
                case self::SYS_XQGETCONTENT:
                case self::SYS_XQINDXOF:
                case self::SYS_XQINSERT:
                case self::SYS_XQINSPFX:
                case self::SYS_XQIRI2URI:
                case self::SYS_XQLANG:
                case self::SYS_XQLLNMFRMQNM:
                case self::SYS_XQMKNODEREF:
                case self::SYS_XQNILLED:
                case self::SYS_XQNODENAME:
                case self::SYS_XQNORMSPACE:
                case self::SYS_XQNORMUCODE:
                case self::SYS_XQ_NRNG:
                case self::SYS_XQNSP4PFX:
                case self::SYS_XQNSPFRMQNM:
                case self::SYS_XQPFXFRMQNM:
                case self::SYS_XQ_PKSQL2XML:
                case self::SYS_XQPOLYABS:
                case self::SYS_XQPOLYADD:
                case self::SYS_XQPOLYCEL:
                case self::SYS_XQPOLYCSTBL:
                case self::SYS_XQPOLYCST:
                case self::SYS_XQPOLYDIV:
                case self::SYS_XQPOLYFLR:
                case self::SYS_XQPOLYMOD:
                case self::SYS_XQPOLYMUL:
                case self::SYS_XQPOLYRND:
                case self::SYS_XQPOLYSQRT:
                case self::SYS_XQPOLYSUB:
                case self::SYS_XQPOLYUMUS:
                case self::SYS_XQPOLYUPLS:
                case self::SYS_XQPOLYVEQ:
                case self::SYS_XQPOLYVGE:
                case self::SYS_XQPOLYVGT:
                case self::SYS_XQPOLYVLE:
                case self::SYS_XQPOLYVLT:
                case self::SYS_XQPOLYVNE:
                case self::SYS_XQREF2VAL:
                case self::SYS_XQRENAME:
                case self::SYS_XQREPLACE:
                case self::SYS_XQRESVURI:
                case self::SYS_XQRNDHALF2EVN:
                case self::SYS_XQRSLVQNM:
                case self::SYS_XQRYENVPGET:
                case self::SYS_XQRYVARGET:
                case self::SYS_XQRYWRP:
                case self::SYS_XQSEQ2CON4XC:
                case self::SYS_XQSEQ2CON:
                case self::SYS_XQSEQDEEPEQ:
                case self::SYS_XQSEQINSB:
                case self::SYS_XQSEQRM:
                case self::SYS_XQSEQRVS:
                case self::SYS_XQSEQSUB:
                case self::SYS_XQSEQTYPMATCH:
                case self::SYS_XQSTARTSWITH:
                case self::SYS_XQSTATBURI:
                case self::SYS_XQSTR2CODEP:
                case self::SYS_XQSTRJOIN:
                case self::SYS_XQSUBSTRAFT:
                case self::SYS_XQSUBSTRBEF:
                case self::SYS_XQTOKENIZE:
                case self::SYS_XQTREATAS:
                case self::SYS_XQ_UPKXML2SQL:
                case self::SYS_XQXFORM:
                case self::SYS_XSID_TO_RAW:
                case self::SYS_ZMAP_FILTER:
                case self::SYS_ZMAP_REFRESH:
                case self::TABLE_LOOKUP_BY_NL:
                case self::TABLESPACE_NO:
                case self::TABLESPACE:
                case self::TABLES:
                case self::TABLE_STATS:
                case self::TABLE:
                case self::TABNO:
                case self::TAG:
                case self::TANH:
                case self::TAN:
                case self::TBLORIDXPARTNUM:
                case self::TEMPFILE:
                case self::TEMPLATE:
                case self::TEMPORARY:
                case self::TEMP_TABLE:
                case self::TEST:
                case self::TEXT:
                case self::THAN:
                case self::THEN:
                case self::THE:
                case self::THREAD:
                case self::THROUGH:
                case self::TIER:
                case self::TIES:
                case self::TIMEOUT:
                case self::TIMESTAMP_LTZ_UNCONSTRAINED:
                case self::TIMESTAMP:
                case self::TIMESTAMP_TZ_UNCONSTRAINED:
                case self::TIMESTAMP_UNCONSTRAINED:
                case self::TIMES:
                case self::TIME:
                case self::TIMEZONE_ABBR:
                case self::TIMEZONE_HOUR:
                case self::TIMEZONE_MINUTE:
                case self::TIMEZONE_OFFSET:
                case self::TIMEZONE_REGION:
                case self::TIME_ZONE:
                case self::TIV_GB:
                case self::TIV_SSF:
                case self::TO_ACLID:
                case self::TO_BINARY_DOUBLE:
                case self::TO_BINARY_FLOAT:
                case self::TO_BLOB:
                case self::TO_CLOB:
                case self::TO_DSINTERVAL:
                case self::TO_LOB:
                case self::TO_MULTI_BYTE:
                case self::TO_NCHAR:
                case self::TO_NCLOB:
                case self::TO_NUMBER:
                case self::TOPLEVEL:
                case self::TO_SINGLE_BYTE:
                case self::TO_TIMESTAMP:
                case self::TO_TIMESTAMP_TZ:
                case self::TO_TIME:
                case self::TO_TIME_TZ:
                case self::TO_YMINTERVAL:
                case self::TRACE:
                case self::TRACING:
                case self::TRACKING:
                case self::TRAILING:
                case self::TRANSACTION:
                case self::TRANSFORM_DISTINCT_AGG:
                case self::TRANSITIONAL:
                case self::TRANSITION:
                case self::TRANSLATE:
                case self::TRANSLATION:
                case self::TREAT:
                case self::TRIGGERS:
                case self::TRIGGER:
                case self::TRUE:
                case self::TRUNCATE:
                case self::TRUNC:
                case self::TRUSTED:
                case self::TRUST:
                case self::TUNING:
                case self::TX:
                case self::TYPES:
                case self::TYPE:
                case self::TZ_OFFSET:
                case self::UB2:
                case self::UBA:
                case self::UCS2:
                case self::UID:
                case self::UNARCHIVED:
                case self::UNBOUNDED:
                case self::UNBOUND:
                case self::UNCONDITIONAL:
                case self::UNDER:
                case self::UNDO:
                case self::UNDROP:
                case self::UNIFORM:
                case self::UNISTR:
                case self::UNLIMITED:
                case self::UNLOAD:
                case self::UNLOCK:
                case self::UNMATCHED:
                case self::UNNEST_INNERJ_DISTINCT_VIEW:
                case self::UNNEST_NOSEMIJ_NODISTINCTVIEW:
                case self::UNNEST_SEMIJ_VIEW:
                case self::UNNEST:
                case self::UNPACKED:
                case self::UNPIVOT:
                case self::UNPLUG:
                case self::UNPROTECTED:
                case self::UNQUIESCE:
                case self::UNRECOVERABLE:
                case self::UNRESTRICTED:
                case self::UNSUBSCRIBE:
                case self::UNTIL:
                case self::UNUSABLE:
                case self::UNUSED:
                case self::UPDATABLE:
                case self::UPDATED:
                case self::UPDATEXML:
                case self::UPD_INDEXES:
                case self::UPD_JOININDEX:
                case self::UPGRADE:
                case self::UPPER:
                case self::UPSERT:
                case self::UROWID:
                case self::USABLE:
                case self::USAGE:
                case self::USE_ANTI:
                case self::USE_CONCAT:
                case self::USE_CUBE:
                case self::USE_HASH_AGGREGATION:
                case self::USE_HASH_GBY_FOR_PUSHDOWN:
                case self::USE_HASH:
                case self::USE_HIDDEN_PARTITIONS:
                case self::USE_INVISIBLE_INDEXES:
                case self::USE_MERGE_CARTESIAN:
                case self::USE_MERGE:
                case self::USE_NL:
                case self::USE_NL_WITH_INDEX:
                case self::USE_PRIVATE_OUTLINES:
                case self::USER_DATA:
                case self::USER_DEFINED:
                case self::USERENV:
                case self::USERGROUP:
                case self::USER_RECYCLEBIN:
                case self::USERS:
                case self::USER_TABLESPACES:
                case self::USER:
                case self::USE_SEMI:
                case self::USE_STORED_OUTLINES:
                case self::USE_TTT_FOR_GSETS:
                case self::USE:
                case self::USE_VECTOR_AGGREGATION:
                case self::USE_WEAK_NAME_RESL:
                case self::USING_NO_EXPAND:
                case self::USING:
                case self::UTF16BE:
                case self::UTF16LE:
                case self::UTF32:
                case self::UTF8:
                case self::V1:
                case self::V2:
                case self::VALIDATE:
                case self::VALIDATION:
                case self::VALID_TIME_END:
                case self::VALUE:
                case self::VARCHAR2:
                case self::VARCHAR:
                case self::VARIABLE:
                case self::VAR_POP:
                case self::VARRAYS:
                case self::VARRAY:
                case self::VAR_SAMP:
                case self::VARYING:
                case self::VECTOR_READ_TRACE:
                case self::VECTOR_READ:
                case self::VECTOR_TRANSFORM_DIMS:
                case self::VECTOR_TRANSFORM_FACT:
                case self::VECTOR_TRANSFORM:
                case self::VERIFIER:
                case self::VERIFY:
                case self::VERSIONING:
                case self::VERSIONS_ENDSCN:
                case self::VERSIONS_ENDTIME:
                case self::VERSIONS_OPERATION:
                case self::VERSIONS_STARTSCN:
                case self::VERSIONS_STARTTIME:
                case self::VERSIONS:
                case self::VERSIONS_XID:
                case self::VERSION:
                case self::VIOLATION:
                case self::VIRTUAL:
                case self::VISIBILITY:
                case self::VISIBLE:
                case self::VOLUME:
                case self::VSIZE:
                case self::WAIT:
                case self::WALLET:
                case self::WARNING:
                case self::WEEKS:
                case self::WEEK:
                case self::WELLFORMED:
                case self::WHENEVER:
                case self::WHEN:
                case self::WHILE:
                case self::WHITESPACE:
                case self::WIDTH_BUCKET:
                case self::WITHIN:
                case self::WITHOUT:
                case self::WITH_PLSQL:
                case self::WORK:
                case self::WRAPPED:
                case self::WRAPPER:
                case self::WRITE:
                case self::XDB_FASTPATH_INSERT:
                case self::X_DYN_PRUNE:
                case self::XID:
                case self::XML2OBJECT:
                case self::XMLAGG:
                case self::XMLATTRIBUTES:
                case self::XMLCAST:
                case self::XMLCDATA:
                case self::XMLCOLATTVAL:
                case self::XMLCOMMENT:
                case self::XMLCONCAT:
                case self::XMLDIFF:
                case self::XML_DML_RWT_STMT:
                case self::XMLELEMENT:
                case self::XMLEXISTS2:
                case self::XMLEXISTS:
                case self::XMLFOREST:
                case self::XMLINDEX_REWRITE_IN_SELECT:
                case self::XMLINDEX_REWRITE:
                case self::XMLINDEX_SEL_IDX_TBL:
                case self::XMLISNODE:
                case self::XMLISVALID:
                case self::XMLNAMESPACES:
                case self::XMLPARSE:
                case self::XMLPATCH:
                case self::XMLPI:
                case self::XMLQUERYVAL:
                case self::XMLQUERY:
                case self::XMLROOT:
                case self::XMLSCHEMA:
                case self::XMLSERIALIZE:
                case self::XMLTABLE:
                case self::XMLTRANSFORMBLOB:
                case self::XMLTRANSFORM:
                case self::XMLTYPE:
                case self::XML:
                case self::XPATHTABLE:
                case self::XS_SYS_CONTEXT:
                case self::XS:
                case self::YEARS:
                case self::YEAR:
                case self::YES:
                case self::YMINTERVAL_UNCONSTRAINED:
                case self::ZONEMAP:
                case self::ZONE:
                case self::PREDICTION:
                case self::PREDICTION_BOUNDS:
                case self::PREDICTION_COST:
                case self::PREDICTION_DETAILS:
                case self::PREDICTION_PROBABILITY:
                case self::PREDICTION_SET:
                case self::CUME_DIST:
                case self::DENSE_RANK:
                case self::LISTAGG:
                case self::PERCENT_RANK:
                case self::PERCENTILE_CONT:
                case self::PERCENTILE_DISC:
                case self::RANK:
                case self::AVG:
                case self::CORR:
                case self::COVAR_:
                case self::LAG:
                case self::LEAD:
                case self::MAX:
                case self::MEDIAN:
                case self::MIN:
                case self::NTILE:
                case self::NVL:
                case self::RATIO_TO_REPORT:
                case self::REGR_:
                case self::ROUND:
                case self::ROW_NUMBER:
                case self::SUBSTR:
                case self::TO_CHAR:
                case self::TRIM:
                case self::SUM:
                case self::STDDEV:
                case self::VAR_:
                case self::VARIANCE:
                case self::LEAST:
                case self::GREATEST:
                case self::TO_DATE:
                case self::PERIOD:
                case self::DELIMITED_ID:
                case self::REGULAR_ID:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3539);
                    $this->role_name();
                    $this->setState(3544);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3540);
                        $this->match(self::COMMA);
                        $this->setState(3541);
                        $this->role_name();
                        $this->setState(3546);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    break;

                case self::ALL:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3547);
                    $this->match(self::ALL);
                    $this->setState(3559);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::EXCEPT) {
                        $this->setState(3548);
                        $this->match(self::EXCEPT);
                        $this->setState(3549);
                        $this->role_name();
                        $this->setState(3554);
                        $this->errorHandler->sync($this);

                        $_la = $this->input->LA(1);
                        while ($_la === self::COMMA) {
                            $this->setState(3550);
                            $this->match(self::COMMA);
                            $this->setState(3551);
                            $this->role_name();
                            $this->setState(3556);
                            $this->errorHandler->sync($this);
                            $_la = $this->input->LA(1);
                        }
                        $this->setState(3561);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
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
    public function user_default_role_clause(): Context\User_default_role_clauseContext
    {
        $localContext = new Context\User_default_role_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 286, self::RULE_user_default_role_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3564);
            $this->match(self::DEFAULT);
            $this->setState(3565);
            $this->match(self::ROLE);
            $this->setState(3568);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 303, $this->ctx)) {
                case 1:
                    $this->setState(3566);
                    $this->match(self::NONE);
                    break;

                case 2:
                    $this->setState(3567);
                    $this->role_clause();
                    break;
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
    public function password_expire_clause(): Context\Password_expire_clauseContext
    {
        $localContext = new Context\Password_expire_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 288, self::RULE_password_expire_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3570);
            $this->match(self::PASSWORD);
            $this->setState(3571);
            $this->match(self::EXPIRE);
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
    public function user_lock_clause(): Context\User_lock_clauseContext
    {
        $localContext = new Context\User_lock_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 290, self::RULE_user_lock_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3573);
            $this->match(self::ACCOUNT);
            $this->setState(3574);

            $_la = $this->input->LA(1);

            if (!($_la === self::LOCK || $_la === self::UNLOCK)) {
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
    public function user_editions_clause(): Context\User_editions_clauseContext
    {
        $localContext = new Context\User_editions_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 292, self::RULE_user_editions_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3576);
            $this->match(self::ENABLE);
            $this->setState(3577);
            $this->match(self::EDITIONS);
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
    public function alter_user_editions_clause(): Context\Alter_user_editions_clauseContext
    {
        $localContext = new Context\Alter_user_editions_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 294, self::RULE_alter_user_editions_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3579);
            $this->user_editions_clause();
            $this->setState(3589);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::FOR) {
                $this->setState(3580);
                $this->match(self::FOR);
                $this->setState(3581);
                $this->regular_id();
                $this->setState(3586);
                $this->errorHandler->sync($this);

                $_la = $this->input->LA(1);
                while ($_la === self::COMMA) {
                    $this->setState(3582);
                    $this->match(self::COMMA);
                    $this->setState(3583);
                    $this->regular_id();
                    $this->setState(3588);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);
                }
            }
            $this->setState(3592);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::FORCE) {
                $this->setState(3591);
                $this->match(self::FORCE);
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
    public function proxy_clause(): Context\Proxy_clauseContext
    {
        $localContext = new Context\Proxy_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 296, self::RULE_proxy_clause);

        try {
            $this->setState(3633);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::REVOKE:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3594);
                    $this->match(self::REVOKE);
                    $this->setState(3595);
                    $this->match(self::CONNECT);
                    $this->setState(3596);
                    $this->match(self::THROUGH);
                    $this->setState(3600);
                    $this->errorHandler->sync($this);

                    switch ($this->getInterpreter()->adaptivePredict($this->input, 307, $this->ctx)) {
                        case 1:
                            $this->setState(3597);
                            $this->match(self::ENTERPRISE);
                            $this->setState(3598);
                            $this->match(self::USERS);
                            break;

                        case 2:
                            $this->setState(3599);
                            $this->user_object_name();
                            break;
                    }
                    break;

                case self::GRANT:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3602);
                    $this->match(self::GRANT);
                    $this->setState(3603);
                    $this->match(self::CONNECT);
                    $this->setState(3604);
                    $this->match(self::THROUGH);
                    $this->setState(3631);
                    $this->errorHandler->sync($this);

                    switch ($this->getInterpreter()->adaptivePredict($this->input, 313, $this->ctx)) {
                        case 1:
                            $this->setState(3605);
                            $this->match(self::ENTERPRISE);
                            $this->setState(3606);
                            $this->match(self::USERS);
                            break;

                        case 2:
                            $this->setState(3607);
                            $this->user_object_name();
                            $this->setState(3615);
                            $this->errorHandler->sync($this);
                            $_la = $this->input->LA(1);

                            if ($_la === self::WITH) {
                                $this->setState(3608);
                                $this->match(self::WITH);
                                $this->setState(3613);
                                $this->errorHandler->sync($this);

                                switch ($this->input->LA(1)) {
                                    case self::NO:
                                        $this->setState(3609);
                                        $this->match(self::NO);
                                        $this->setState(3610);
                                        $this->match(self::ROLES);
                                        break;

                                    case self::ROLE:
                                        $this->setState(3611);
                                        $this->match(self::ROLE);
                                        $this->setState(3612);
                                        $this->role_clause();
                                        break;

                                    default:
                                        throw new NoViableAltException($this);
                                }
                            }
                            $this->setState(3619);
                            $this->errorHandler->sync($this);
                            $_la = $this->input->LA(1);

                            if ($_la === self::AUTHENTICATION) {
                                $this->setState(3617);
                                $this->match(self::AUTHENTICATION);
                                $this->setState(3618);
                                $this->match(self::REQUIRED);
                            }
                            $this->setState(3629);
                            $this->errorHandler->sync($this);
                            $_la = $this->input->LA(1);

                            if ($_la === self::AUTHENTICATED) {
                                $this->setState(3621);
                                $this->match(self::AUTHENTICATED);
                                $this->setState(3622);
                                $this->match(self::USING);
                                $this->setState(3627);
                                $this->errorHandler->sync($this);

                                switch ($this->input->LA(1)) {
                                    case self::PASSWORD:
                                        $this->setState(3623);
                                        $this->match(self::PASSWORD);
                                        break;

                                    case self::CERTIFICATE:
                                        $this->setState(3624);
                                        $this->match(self::CERTIFICATE);
                                        break;

                                    case self::DISTINGUISHED:
                                        $this->setState(3625);
                                        $this->match(self::DISTINGUISHED);
                                        $this->setState(3626);
                                        $this->match(self::NAME);
                                        break;

                                    default:
                                        throw new NoViableAltException($this);
                                }
                            }
                            break;
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
    public function container_names(): Context\Container_namesContext
    {
        $localContext = new Context\Container_namesContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 298, self::RULE_container_names);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3635);
            $this->match(self::LEFT_PAREN);
            $this->setState(3636);
            $this->id_expression();
            $this->setState(3641);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMMA) {
                $this->setState(3637);
                $this->match(self::COMMA);
                $this->setState(3638);
                $this->id_expression();
                $this->setState(3643);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3644);
            $this->match(self::RIGHT_PAREN);
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
    public function set_container_data(): Context\Set_container_dataContext
    {
        $localContext = new Context\Set_container_dataContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 300, self::RULE_set_container_data);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3646);
            $this->match(self::SET);
            $this->setState(3647);
            $this->match(self::CONTAINER_DATA);
            $this->setState(3648);
            $this->match(self::EQUALS_OP);
            $this->setState(3652);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::ALL:
                    $this->setState(3649);
                    $this->match(self::ALL);
                    break;

                case self::DEFAULT:
                    $this->setState(3650);
                    $this->match(self::DEFAULT);
                    break;

                case self::LEFT_PAREN:
                    $this->setState(3651);
                    $this->container_names();
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
    public function add_rem_container_data(): Context\Add_rem_container_dataContext
    {
        $localContext = new Context\Add_rem_container_dataContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 302, self::RULE_add_rem_container_data);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3654);

            $_la = $this->input->LA(1);

            if (!($_la === self::ADD || $_la === self::REMOVE)) {
                $this->errorHandler->recoverInline($this);
            } else {
                if ($this->input->LA(1) === Token::EOF) {
                    $this->matchedEOF = true;
                }

                $this->errorHandler->reportMatch($this);
                $this->consume();
            }
            $this->setState(3655);
            $this->match(self::CONTAINER_DATA);
            $this->setState(3656);
            $this->match(self::EQUALS_OP);
            $this->setState(3657);
            $this->container_names();
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
    public function container_data_clause(): Context\Container_data_clauseContext
    {
        $localContext = new Context\Container_data_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 304, self::RULE_container_data_clause);

        try {
            $this->setState(3665);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::SET:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3659);
                    $this->set_container_data();
                    break;

                case self::ADD:
                case self::REMOVE:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3660);
                    $this->add_rem_container_data();
                    $this->setState(3663);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::FOR) {
                        $this->setState(3661);
                        $this->match(self::FOR);
                        $this->setState(3662);
                        $this->container_tableview_name();
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
    public function analyze(): Context\AnalyzeContext
    {
        $localContext = new Context\AnalyzeContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 306, self::RULE_analyze);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3680);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 321, $this->ctx)) {
                case 1:
                    $this->setState(3667);
                    $this->match(self::ANALYZE);
                    $this->setState(3672);
                    $this->errorHandler->sync($this);

                    switch ($this->input->LA(1)) {
                        case self::TABLE:
                            $this->setState(3668);
                            $this->match(self::TABLE);
                            $this->setState(3669);
                            $this->tableview_name();
                            break;

                        case self::INDEX:
                            $this->setState(3670);
                            $this->match(self::INDEX);
                            $this->setState(3671);
                            $this->index_name();
                            break;

                        default:
                            throw new NoViableAltException($this);
                    }
                    $this->setState(3675);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::PARTITION || $_la === self::SUBPARTITION) {
                        $this->setState(3674);
                        $this->partition_extention_clause();
                    }
                    break;

                case 2:
                    $this->setState(3677);
                    $this->match(self::ANALYZE);
                    $this->setState(3678);
                    $this->match(self::CLUSTER);
                    $this->setState(3679);
                    $this->cluster_name();
                    break;
            }
            $this->setState(3694);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::VALIDATE:
                    $this->setState(3682);
                    $this->validation_clauses();
                    break;

                case self::LIST:
                    $this->setState(3683);
                    $this->match(self::LIST);
                    $this->setState(3684);
                    $this->match(self::CHAINED);
                    $this->setState(3685);
                    $this->match(self::ROWS);
                    $this->setState(3687);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::INTO) {
                        $this->setState(3686);
                        $this->into_clause1();
                    }
                    break;

                case self::DELETE:
                    $this->setState(3689);
                    $this->match(self::DELETE);
                    $this->setState(3691);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::SYSTEM) {
                        $this->setState(3690);
                        $this->match(self::SYSTEM);
                    }
                    $this->setState(3693);
                    $this->match(self::STATISTICS);
                    break;

                default:
                    throw new NoViableAltException($this);
            }
            $this->setState(3696);
            $this->match(self::SEMICOLON);
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
    public function partition_extention_clause(): Context\Partition_extention_clauseContext
    {
        $localContext = new Context\Partition_extention_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 308, self::RULE_partition_extention_clause);

        try {
            $this->setState(3736);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::PARTITION:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3698);
                    $this->match(self::PARTITION);
                    $this->setState(3715);
                    $this->errorHandler->sync($this);

                    switch ($this->input->LA(1)) {
                        case self::LEFT_PAREN:
                            $this->setState(3699);
                            $this->match(self::LEFT_PAREN);
                            $this->setState(3700);
                            $this->partition_name();
                            $this->setState(3701);
                            $this->match(self::RIGHT_PAREN);
                            break;

                        case self::FOR:
                            $this->setState(3703);
                            $this->match(self::FOR);
                            $this->setState(3704);
                            $this->match(self::LEFT_PAREN);
                            $this->setState(3705);
                            $this->partition_key_value();
                            $this->setState(3710);
                            $this->errorHandler->sync($this);

                            $_la = $this->input->LA(1);
                            while ($_la === self::COMMA) {
                                $this->setState(3706);
                                $this->match(self::COMMA);
                                $this->setState(3707);
                                $this->partition_key_value();
                                $this->setState(3712);
                                $this->errorHandler->sync($this);
                                $_la = $this->input->LA(1);
                            }
                            $this->setState(3713);
                            $this->match(self::RIGHT_PAREN);
                            break;

                        default:
                            throw new NoViableAltException($this);
                    }
                    break;

                case self::SUBPARTITION:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3717);
                    $this->match(self::SUBPARTITION);
                    $this->setState(3734);
                    $this->errorHandler->sync($this);

                    switch ($this->input->LA(1)) {
                        case self::LEFT_PAREN:
                            $this->setState(3718);
                            $this->match(self::LEFT_PAREN);
                            $this->setState(3719);
                            $this->subpartition_name();
                            $this->setState(3720);
                            $this->match(self::RIGHT_PAREN);
                            break;

                        case self::FOR:
                            $this->setState(3722);
                            $this->match(self::FOR);
                            $this->setState(3723);
                            $this->match(self::LEFT_PAREN);
                            $this->setState(3724);
                            $this->subpartition_key_value();
                            $this->setState(3729);
                            $this->errorHandler->sync($this);

                            $_la = $this->input->LA(1);
                            while ($_la === self::COMMA) {
                                $this->setState(3725);
                                $this->match(self::COMMA);
                                $this->setState(3726);
                                $this->subpartition_key_value();
                                $this->setState(3731);
                                $this->errorHandler->sync($this);
                                $_la = $this->input->LA(1);
                            }
                            $this->setState(3732);
                            $this->match(self::RIGHT_PAREN);
                            break;

                        default:
                            throw new NoViableAltException($this);
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
    public function validation_clauses(): Context\Validation_clausesContext
    {
        $localContext = new Context\Validation_clausesContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 310, self::RULE_validation_clauses);

        try {
            $this->setState(3767);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 336, $this->ctx)) {
                case 1:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(3738);
                    $this->match(self::VALIDATE);
                    $this->setState(3739);
                    $this->match(self::REF);
                    $this->setState(3740);
                    $this->match(self::UPDATE);
                    $this->setState(3745);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::SET) {
                        $this->setState(3741);
                        $this->match(self::SET);
                        $this->setState(3742);
                        $this->match(self::DANGLING);
                        $this->setState(3743);
                        $this->match(self::TO);
                        $this->setState(3744);
                        $this->match(self::NULL_);
                    }
                    break;

                case 2:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(3747);
                    $this->match(self::VALIDATE);
                    $this->setState(3748);
                    $this->match(self::STRUCTURE);
                    $this->setState(3759);
                    $this->errorHandler->sync($this);

                    switch ($this->getInterpreter()->adaptivePredict($this->input, 333, $this->ctx)) {
                        case 1:
                            $this->setState(3749);
                            $this->match(self::CASCADE);
                            $this->setState(3750);
                            $this->match(self::FAST);
                            break;

                        case 2:
                            $this->setState(3751);
                            $this->match(self::CASCADE);
                            $this->setState(3753);
                            $this->errorHandler->sync($this);

                            switch ($this->getInterpreter()->adaptivePredict($this->input, 331, $this->ctx)) {
                                case 1:
                                    $this->setState(3752);
                                    $this->online_or_offline();
                                    break;
                            }
                            $this->setState(3756);
                            $this->errorHandler->sync($this);

                            switch ($this->getInterpreter()->adaptivePredict($this->input, 332, $this->ctx)) {
                                case 1:
                                    $this->setState(3755);
                                    $this->into_clause();
                                    break;
                            }
                            break;

                        case 3:
                            $this->setState(3758);
                            $this->match(self::CASCADE);
                            break;
                    }
                    $this->setState(3762);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::OFFLINE || $_la === self::ONLINE) {
                        $this->setState(3761);
                        $this->online_or_offline();
                    }
                    $this->setState(3765);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::BULK || $_la === self::INTO) {
                        $this->setState(3764);
                        $this->into_clause();
                    }
                    break;
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
    public function online_or_offline(): Context\Online_or_offlineContext
    {
        $localContext = new Context\Online_or_offlineContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 312, self::RULE_online_or_offline);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3769);

            $_la = $this->input->LA(1);

            if (!($_la === self::OFFLINE || $_la === self::ONLINE)) {
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
    public function into_clause1(): Context\Into_clause1Context
    {
        $localContext = new Context\Into_clause1Context($this->ctx, $this->getState());

        $this->enterRule($localContext, 314, self::RULE_into_clause1);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3771);
            $this->match(self::INTO);
            $this->setState(3773);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::ABORT) | (1 << self::ABS) | (1 << self::ACCESS) | (1 << self::ACCESSED) | (1 << self::ACCOUNT) | (1 << self::ACL) | (1 << self::ACOS) | (1 << self::ACTION) | (1 << self::ACTIONS) | (1 << self::ACTIVATE) | (1 << self::ACTIVE) | (1 << self::ACTIVE_COMPONENT) | (1 << self::ACTIVE_DATA) | (1 << self::ACTIVE_FUNCTION) | (1 << self::ACTIVE_TAG) | (1 << self::ACTIVITY) | (1 << self::ADAPTIVE_PLAN) | (1 << self::ADD) | (1 << self::ADD_COLUMN) | (1 << self::ADD_GROUP) | (1 << self::ADD_MONTHS) | (1 << self::ADJ_DATE) | (1 << self::ADMIN) | (1 << self::ADMINISTER) | (1 << self::ADMINISTRATOR) | (1 << self::ADVANCED) | (1 << self::ADVISE) | (1 << self::ADVISOR) | (1 << self::AFD_DISKSTRING) | (1 << self::AFTER) | (1 << self::AGENT) | (1 << self::AGGREGATE) | (1 << self::A_LETTER) | (1 << self::ALIAS) | (1 << self::ALLOCATE) | (1 << self::ALLOW) | (1 << self::ALL_ROWS) | (1 << self::ALWAYS) | (1 << self::ANALYZE) | (1 << self::ANCILLARY) | (1 << self::AND_EQUAL) | (1 << self::ANOMALY) | (1 << self::ANSI_REARCH) | (1 << self::ANTIJOIN) | (1 << self::ANYSCHEMA) | (1 << self::APPEND) | (1 << self::APPENDCHILDXML) | (1 << self::APPEND_VALUES) | (1 << self::APPLICATION) | (1 << self::APPLY) | (1 << self::APPROX_COUNT_DISTINCT) | (1 << self::ARCHIVAL) | (1 << self::ARCHIVE) | (1 << self::ARCHIVED) | (1 << self::ARCHIVELOG) | (1 << self::ARRAY) | (1 << self::ASCII))) !== 0) || (((($_la - 64)) & ~0x3f) === 0 && ((1 << ($_la - 64)) & ((1 << (self::ASCIISTR - 64)) | (1 << (self::ASIN - 64)) | (1 << (self::ASIS - 64)) | (1 << (self::ASSEMBLY - 64)) | (1 << (self::ASSIGN - 64)) | (1 << (self::ASSOCIATE - 64)) | (1 << (self::ASYNC - 64)) | (1 << (self::ASYNCHRONOUS - 64)) | (1 << (self::ATAN2 - 64)) | (1 << (self::ATAN - 64)) | (1 << (self::AT - 64)) | (1 << (self::ATTRIBUTE - 64)) | (1 << (self::ATTRIBUTES - 64)) | (1 << (self::AUTHENTICATED - 64)) | (1 << (self::AUTHENTICATION - 64)) | (1 << (self::AUTHID - 64)) | (1 << (self::AUTHORIZATION - 64)) | (1 << (self::AUTOALLOCATE - 64)) | (1 << (self::AUTO - 64)) | (1 << (self::AUTOEXTEND - 64)) | (1 << (self::AUTO_LOGIN - 64)) | (1 << (self::AUTOMATIC - 64)) | (1 << (self::AUTONOMOUS_TRANSACTION - 64)) | (1 << (self::AUTO_REOPTIMIZE - 64)) | (1 << (self::AVAILABILITY - 64)) | (1 << (self::AVRO - 64)) | (1 << (self::BACKGROUND - 64)) | (1 << (self::BACKUP - 64)) | (1 << (self::BASIC - 64)) | (1 << (self::BASICFILE - 64)) | (1 << (self::BATCH - 64)) | (1 << (self::BATCHSIZE - 64)) | (1 << (self::BATCH_TABLE_ACCESS_BY_ROWID - 64)) | (1 << (self::BECOME - 64)) | (1 << (self::BEFORE - 64)) | (1 << (self::BEGIN - 64)) | (1 << (self::BEGINNING - 64)) | (1 << (self::BEGIN_OUTLINE_DATA - 64)) | (1 << (self::BEHALF - 64)) | (1 << (self::BEQUEATH - 64)) | (1 << (self::BFILE - 64)) | (1 << (self::BFILENAME - 64)) | (1 << (self::BIGFILE - 64)) | (1 << (self::BINARY - 64)) | (1 << (self::BINARY_DOUBLE - 64)) | (1 << (self::BINARY_DOUBLE_INFINITY - 64)) | (1 << (self::BINARY_DOUBLE_NAN - 64)) | (1 << (self::BINARY_FLOAT - 64)) | (1 << (self::BINARY_FLOAT_INFINITY - 64)) | (1 << (self::BINARY_FLOAT_NAN - 64)) | (1 << (self::BINARY_INTEGER - 64)) | (1 << (self::BIND_AWARE - 64)) | (1 << (self::BINDING - 64)) | (1 << (self::BIN_TO_NUM - 64)) | (1 << (self::BITAND - 64)) | (1 << (self::BITMAP_AND - 64)) | (1 << (self::BITMAP - 64)) | (1 << (self::BITMAPS - 64)) | (1 << (self::BITMAP_TREE - 64)) | (1 << (self::BITS - 64)))) !== 0) || (((($_la - 128)) & ~0x3f) === 0 && ((1 << ($_la - 128)) & ((1 << (self::BLOB - 128)) | (1 << (self::BLOCK - 128)) | (1 << (self::BLOCK_RANGE - 128)) | (1 << (self::BLOCKS - 128)) | (1 << (self::BLOCKSIZE - 128)) | (1 << (self::BODY - 128)) | (1 << (self::BOOLEAN - 128)) | (1 << (self::BOTH - 128)) | (1 << (self::BOUND - 128)) | (1 << (self::BRANCH - 128)) | (1 << (self::BREADTH - 128)) | (1 << (self::BROADCAST - 128)) | (1 << (self::BSON - 128)) | (1 << (self::BUFFER - 128)) | (1 << (self::BUFFER_CACHE - 128)) | (1 << (self::BUFFER_POOL - 128)) | (1 << (self::BUILD - 128)) | (1 << (self::BULK - 128)) | (1 << (self::BYPASS_RECURSIVE_CHECK - 128)) | (1 << (self::BYPASS_UJVC - 128)) | (1 << (self::BYTE - 128)) | (1 << (self::CACHE - 128)) | (1 << (self::CACHE_CB - 128)) | (1 << (self::CACHE_INSTANCES - 128)) | (1 << (self::CACHE_TEMP_TABLE - 128)) | (1 << (self::CACHING - 128)) | (1 << (self::CALCULATED - 128)) | (1 << (self::CALLBACK - 128)) | (1 << (self::CALL - 128)) | (1 << (self::CANCEL - 128)) | (1 << (self::CAPACITY - 128)) | (1 << (self::CARDINALITY - 128)) | (1 << (self::CASCADE - 128)) | (1 << (self::CASE - 128)) | (1 << (self::CAST - 128)) | (1 << (self::CATEGORY - 128)) | (1 << (self::CDBDEFAULT - 128)) | (1 << (self::CEIL - 128)) | (1 << (self::CELL_FLASH_CACHE - 128)) | (1 << (self::CERTIFICATE - 128)) | (1 << (self::CFILE - 128)) | (1 << (self::CHAINED - 128)) | (1 << (self::CHANGE - 128)) | (1 << (self::CHANGE_DUPKEY_ERROR_INDEX - 128)) | (1 << (self::CHARACTER - 128)) | (1 << (self::CHAR - 128)) | (1 << (self::CHAR_CS - 128)) | (1 << (self::CHARTOROWID - 128)) | (1 << (self::CHECK_ACL_REWRITE - 128)) | (1 << (self::CHECKPOINT - 128)) | (1 << (self::CHILD - 128)) | (1 << (self::CHOOSE - 128)) | (1 << (self::CHR - 128)) | (1 << (self::CHUNK - 128)) | (1 << (self::CLASS - 128)) | (1 << (self::CLASSIFIER - 128)) | (1 << (self::CLEANUP - 128)) | (1 << (self::CLEAR - 128)) | (1 << (self::C_LETTER - 128)) | (1 << (self::CLIENT - 128)))) !== 0) || (((($_la - 192)) & ~0x3f) === 0 && ((1 << ($_la - 192)) & ((1 << (self::CLOB - 192)) | (1 << (self::CLONE - 192)) | (1 << (self::CLOSE_CACHED_OPEN_CURSORS - 192)) | (1 << (self::CLOSE - 192)) | (1 << (self::CLUSTER_BY_ROWID - 192)) | (1 << (self::CLUSTER - 192)) | (1 << (self::CLUSTER_DETAILS - 192)) | (1 << (self::CLUSTER_DISTANCE - 192)) | (1 << (self::CLUSTER_ID - 192)) | (1 << (self::CLUSTERING - 192)) | (1 << (self::CLUSTERING_FACTOR - 192)) | (1 << (self::CLUSTER_PROBABILITY - 192)) | (1 << (self::CLUSTER_SET - 192)) | (1 << (self::COALESCE - 192)) | (1 << (self::COALESCE_SQ - 192)) | (1 << (self::COARSE - 192)) | (1 << (self::CO_AUTH_IND - 192)) | (1 << (self::COLD - 192)) | (1 << (self::COLLECT - 192)) | (1 << (self::COLUMNAR - 192)) | (1 << (self::COLUMN_AUTH_INDICATOR - 192)) | (1 << (self::COLUMN - 192)) | (1 << (self::COLUMNS - 192)) | (1 << (self::COLUMN_STATS - 192)) | (1 << (self::COLUMN_VALUE - 192)) | (1 << (self::COMMENT - 192)) | (1 << (self::COMMIT - 192)) | (1 << (self::COMMITTED - 192)) | (1 << (self::COMMON_DATA - 192)) | (1 << (self::COMPACT - 192)) | (1 << (self::COMPATIBILITY - 192)) | (1 << (self::COMPILE - 192)) | (1 << (self::COMPLETE - 192)) | (1 << (self::COMPLIANCE - 192)) | (1 << (self::COMPONENT - 192)) | (1 << (self::COMPONENTS - 192)) | (1 << (self::COMPOSE - 192)) | (1 << (self::COMPOSITE - 192)) | (1 << (self::COMPOSITE_LIMIT - 192)) | (1 << (self::COMPOUND - 192)) | (1 << (self::COMPUTE - 192)) | (1 << (self::CONCAT - 192)) | (1 << (self::CON_DBID_TO_ID - 192)) | (1 << (self::CONDITIONAL - 192)) | (1 << (self::CONDITION - 192)) | (1 << (self::CONFIRM - 192)) | (1 << (self::CONFORMING - 192)) | (1 << (self::CON_GUID_TO_ID - 192)) | (1 << (self::CON_ID - 192)) | (1 << (self::CON_NAME_TO_ID - 192)) | (1 << (self::CONNECT_BY_CB_WHR_ONLY - 192)) | (1 << (self::CONNECT_BY_COMBINE_SW - 192)) | (1 << (self::CONNECT_BY_COST_BASED - 192)) | (1 << (self::CONNECT_BY_ELIM_DUPS - 192)) | (1 << (self::CONNECT_BY_FILTERING - 192)) | (1 << (self::CONNECT_BY_ISCYCLE - 192)) | (1 << (self::CONNECT_BY_ISLEAF - 192)) | (1 << (self::CONNECT_BY_ROOT - 192)) | (1 << (self::CONNECT_TIME - 192)) | (1 << (self::CONSIDER - 192)) | (1 << (self::CONSISTENT - 192)) | (1 << (self::CONSTANT - 192)))) !== 0) || (((($_la - 256)) & ~0x3f) === 0 && ((1 << ($_la - 256)) & ((1 << (self::CONST - 256)) | (1 << (self::CONSTRAINT - 256)) | (1 << (self::CONSTRAINTS - 256)) | (1 << (self::CONSTRUCTOR - 256)) | (1 << (self::CONTAINER - 256)) | (1 << (self::CONTAINER_DATA - 256)) | (1 << (self::CONTAINERS - 256)) | (1 << (self::CONTENT - 256)) | (1 << (self::CONTENTS - 256)) | (1 << (self::CONTEXT - 256)) | (1 << (self::CONTINUE - 256)) | (1 << (self::CONTROLFILE - 256)) | (1 << (self::CON_UID_TO_ID - 256)) | (1 << (self::CONVERT - 256)) | (1 << (self::COOKIE - 256)) | (1 << (self::COPY - 256)) | (1 << (self::CORR_K - 256)) | (1 << (self::CORR_S - 256)) | (1 << (self::CORRUPTION - 256)) | (1 << (self::CORRUPT_XID_ALL - 256)) | (1 << (self::CORRUPT_XID - 256)) | (1 << (self::COS - 256)) | (1 << (self::COSH - 256)) | (1 << (self::COST - 256)) | (1 << (self::COST_XML_QUERY_REWRITE - 256)) | (1 << (self::COUNT - 256)) | (1 << (self::COVAR_POP - 256)) | (1 << (self::COVAR_SAMP - 256)) | (1 << (self::CPU_COSTING - 256)) | (1 << (self::CPU_PER_CALL - 256)) | (1 << (self::CPU_PER_SESSION - 256)) | (1 << (self::CRASH - 256)) | (1 << (self::CREATE_FILE_DEST - 256)) | (1 << (self::CREATE_STORED_OUTLINES - 256)) | (1 << (self::CREATION - 256)) | (1 << (self::CREDENTIAL - 256)) | (1 << (self::CRITICAL - 256)) | (1 << (self::CROSS - 256)) | (1 << (self::CROSSEDITION - 256)) | (1 << (self::CSCONVERT - 256)) | (1 << (self::CUBE_AJ - 256)) | (1 << (self::CUBE - 256)) | (1 << (self::CUBE_GB - 256)) | (1 << (self::CUBE_SJ - 256)) | (1 << (self::CUME_DISTM - 256)) | (1 << (self::CURRENT - 256)) | (1 << (self::CURRENT_DATE - 256)) | (1 << (self::CURRENT_SCHEMA - 256)) | (1 << (self::CURRENT_TIME - 256)) | (1 << (self::CURRENT_TIMESTAMP - 256)) | (1 << (self::CURRENT_USER - 256)) | (1 << (self::CURRENTV - 256)) | (1 << (self::CURSOR - 256)) | (1 << (self::CURSOR_SHARING_EXACT - 256)) | (1 << (self::CURSOR_SPECIFIC_SEGMENT - 256)) | (1 << (self::CUSTOMDATUM - 256)) | (1 << (self::CV - 256)) | (1 << (self::CYCLE - 256)) | (1 << (self::DANGLING - 256)) | (1 << (self::DATABASE - 256)) | (1 << (self::DATA - 256)) | (1 << (self::DATAFILE - 256)) | (1 << (self::DATAFILES - 256)))) !== 0) || (((($_la - 321)) & ~0x3f) === 0 && ((1 << ($_la - 321)) & ((1 << (self::DATAMOVEMENT - 321)) | (1 << (self::DATAOBJNO - 321)) | (1 << (self::DATAOBJ_TO_MAT_PARTITION - 321)) | (1 << (self::DATAOBJ_TO_PARTITION - 321)) | (1 << (self::DATAPUMP - 321)) | (1 << (self::DATA_SECURITY_REWRITE_LIMIT - 321)) | (1 << (self::DATE_MODE - 321)) | (1 << (self::DAY - 321)) | (1 << (self::DAYS - 321)) | (1 << (self::DBA - 321)) | (1 << (self::DBA_RECYCLEBIN - 321)) | (1 << (self::DBMS_STATS - 321)) | (1 << (self::DB_ROLE_CHANGE - 321)) | (1 << (self::DBTIMEZONE - 321)) | (1 << (self::DB_UNIQUE_NAME - 321)) | (1 << (self::DB_VERSION - 321)) | (1 << (self::DDL - 321)) | (1 << (self::DEALLOCATE - 321)) | (1 << (self::DEBUG - 321)) | (1 << (self::DEBUGGER - 321)) | (1 << (self::DEC - 321)) | (1 << (self::DECIMAL - 321)) | (1 << (self::DECLARE - 321)) | (1 << (self::DECOMPOSE - 321)) | (1 << (self::DECORRELATE - 321)) | (1 << (self::DECR - 321)) | (1 << (self::DECREMENT - 321)) | (1 << (self::DECRYPT - 321)) | (1 << (self::DEDUPLICATE - 321)) | (1 << (self::DEFAULTS - 321)) | (1 << (self::DEFERRABLE - 321)) | (1 << (self::DEFERRED - 321)) | (1 << (self::DEFINED - 321)) | (1 << (self::DEFINE - 321)) | (1 << (self::DEFINER - 321)) | (1 << (self::DEGREE - 321)) | (1 << (self::DELAY - 321)) | (1 << (self::DELEGATE - 321)) | (1 << (self::DELETE_ALL - 321)) | (1 << (self::DELETE - 321)) | (1 << (self::DELETEXML - 321)) | (1 << (self::DEMAND - 321)) | (1 << (self::DENSE_RANKM - 321)) | (1 << (self::DEPENDENT - 321)) | (1 << (self::DEPTH - 321)) | (1 << (self::DEQUEUE - 321)) | (1 << (self::DEREF - 321)) | (1 << (self::DEREF_NO_REWRITE - 321)) | (1 << (self::DESTROY - 321)) | (1 << (self::DETACHED - 321)) | (1 << (self::DETERMINES - 321)) | (1 << (self::DETERMINISTIC - 321)) | (1 << (self::DICTIONARY - 321)) | (1 << (self::DIMENSION - 321)) | (1 << (self::DIMENSIONS - 321)) | (1 << (self::DIRECT_LOAD - 321)) | (1 << (self::DIRECTORY - 321)) | (1 << (self::DIRECT_PATH - 321)) | (1 << (self::DISABLE_ALL - 321)) | (1 << (self::DISABLE - 321)) | (1 << (self::DISABLE_PARALLEL_DML - 321)))) !== 0) || (((($_la - 385)) & ~0x3f) === 0 && ((1 << ($_la - 385)) & ((1 << (self::DISABLE_PRESET - 385)) | (1 << (self::DISABLE_RPKE - 385)) | (1 << (self::DISALLOW - 385)) | (1 << (self::DISASSOCIATE - 385)) | (1 << (self::DISCARD - 385)) | (1 << (self::DISCONNECT - 385)) | (1 << (self::DISK - 385)) | (1 << (self::DISKGROUP - 385)) | (1 << (self::DISKS - 385)) | (1 << (self::DISMOUNT - 385)) | (1 << (self::DISTINGUISHED - 385)) | (1 << (self::DISTRIBUTED - 385)) | (1 << (self::DISTRIBUTE - 385)) | (1 << (self::DML - 385)) | (1 << (self::DML_UPDATE - 385)) | (1 << (self::DOCFIDELITY - 385)) | (1 << (self::DOCUMENT - 385)) | (1 << (self::DOMAIN_INDEX_FILTER - 385)) | (1 << (self::DOMAIN_INDEX_NO_SORT - 385)) | (1 << (self::DOMAIN_INDEX_SORT - 385)) | (1 << (self::DOUBLE - 385)) | (1 << (self::DOWNGRADE - 385)) | (1 << (self::DRIVING_SITE - 385)) | (1 << (self::DROP_COLUMN - 385)) | (1 << (self::DROP_GROUP - 385)) | (1 << (self::DSINTERVAL_UNCONSTRAINED - 385)) | (1 << (self::DST_UPGRADE_INSERT_CONV - 385)) | (1 << (self::DUMP - 385)) | (1 << (self::DUPLICATE - 385)) | (1 << (self::DV - 385)) | (1 << (self::DYNAMIC - 385)) | (1 << (self::DYNAMIC_SAMPLING - 385)) | (1 << (self::DYNAMIC_SAMPLING_EST_CDN - 385)) | (1 << (self::EACH - 385)) | (1 << (self::EDITIONABLE - 385)) | (1 << (self::EDITION - 385)) | (1 << (self::EDITIONING - 385)) | (1 << (self::EDITIONS - 385)) | (1 << (self::ELEMENT - 385)) | (1 << (self::ELIM_GROUPBY - 385)) | (1 << (self::ELIMINATE_JOIN - 385)) | (1 << (self::ELIMINATE_OBY - 385)) | (1 << (self::ELIMINATE_OUTER_JOIN - 385)) | (1 << (self::EM - 385)) | (1 << (self::EMPTY_BLOB - 385)) | (1 << (self::EMPTY_CLOB - 385)) | (1 << (self::EMPTY - 385)) | (1 << (self::ENABLE_ALL - 385)) | (1 << (self::ENABLE - 385)) | (1 << (self::ENABLE_PARALLEL_DML - 385)) | (1 << (self::ENABLE_PRESET - 385)) | (1 << (self::ENCODING - 385)) | (1 << (self::ENCRYPT - 385)) | (1 << (self::ENCRYPTION - 385)) | (1 << (self::END_OUTLINE_DATA - 385)) | (1 << (self::ENFORCED - 385)) | (1 << (self::ENFORCE - 385)))) !== 0) || (((($_la - 449)) & ~0x3f) === 0 && ((1 << ($_la - 449)) & ((1 << (self::ENQUEUE - 449)) | (1 << (self::ENTERPRISE - 449)) | (1 << (self::ENTITYESCAPING - 449)) | (1 << (self::ENTRY - 449)) | (1 << (self::EQUIPART - 449)) | (1 << (self::ERR - 449)) | (1 << (self::ERROR_ARGUMENT - 449)) | (1 << (self::ERROR - 449)) | (1 << (self::ERROR_ON_OVERLAP_TIME - 449)) | (1 << (self::ERRORS - 449)) | (1 << (self::ESCAPE - 449)) | (1 << (self::ESTIMATE - 449)) | (1 << (self::EVAL - 449)) | (1 << (self::EVALNAME - 449)) | (1 << (self::EVALUATE - 449)) | (1 << (self::EVALUATION - 449)) | (1 << (self::EVENTS - 449)) | (1 << (self::EVERY - 449)) | (1 << (self::EXCEPT - 449)) | (1 << (self::EXCEPTION - 449)) | (1 << (self::EXCEPTION_INIT - 449)) | (1 << (self::EXCEPTIONS - 449)) | (1 << (self::EXCHANGE - 449)) | (1 << (self::EXCLUDE - 449)) | (1 << (self::EXCLUDING - 449)) | (1 << (self::EXECUTE - 449)) | (1 << (self::EXEMPT - 449)) | (1 << (self::EXISTING - 449)) | (1 << (self::EXISTS - 449)) | (1 << (self::EXISTSNODE - 449)) | (1 << (self::EXIT - 449)) | (1 << (self::EXPAND_GSET_TO_UNION - 449)) | (1 << (self::EXPAND_TABLE - 449)) | (1 << (self::EXP - 449)) | (1 << (self::EXPIRE - 449)) | (1 << (self::EXPLAIN - 449)) | (1 << (self::EXPLOSION - 449)) | (1 << (self::EXPORT - 449)) | (1 << (self::EXPR_CORR_CHECK - 449)) | (1 << (self::EXPRESS - 449)) | (1 << (self::EXTENDS - 449)) | (1 << (self::EXTENT - 449)) | (1 << (self::EXTENTS - 449)) | (1 << (self::EXTERNAL - 449)) | (1 << (self::EXTERNALLY - 449)) | (1 << (self::EXTRACTCLOBXML - 449)) | (1 << (self::EXTRACT - 449)) | (1 << (self::EXTRACTVALUE - 449)) | (1 << (self::EXTRA - 449)) | (1 << (self::FACILITY - 449)) | (1 << (self::FACT - 449)) | (1 << (self::FACTOR - 449)) | (1 << (self::FACTORIZE_JOIN - 449)) | (1 << (self::FAILED - 449)) | (1 << (self::FAILED_LOGIN_ATTEMPTS - 449)) | (1 << (self::FAILGROUP - 449)) | (1 << (self::FAILOVER - 449)) | (1 << (self::FAILURE - 449)) | (1 << (self::FALSE - 449)) | (1 << (self::FAMILY - 449)) | (1 << (self::FAR - 449)) | (1 << (self::FAST - 449)) | (1 << (self::FASTSTART - 449)))) !== 0) || (((($_la - 513)) & ~0x3f) === 0 && ((1 << ($_la - 513)) & ((1 << (self::FBTSCAN - 513)) | (1 << (self::FEATURE_DETAILS - 513)) | (1 << (self::FEATURE_ID - 513)) | (1 << (self::FEATURE_SET - 513)) | (1 << (self::FEATURE_VALUE - 513)) | (1 << (self::FETCH - 513)) | (1 << (self::FILE - 513)) | (1 << (self::FILE_NAME_CONVERT - 513)) | (1 << (self::FILESYSTEM_LIKE_LOGGING - 513)) | (1 << (self::FILTER - 513)) | (1 << (self::FINAL - 513)) | (1 << (self::FINE - 513)) | (1 << (self::FINISH - 513)) | (1 << (self::FIRST - 513)) | (1 << (self::FIRSTM - 513)) | (1 << (self::FIRST_ROWS - 513)) | (1 << (self::FIRST_VALUE - 513)) | (1 << (self::FIXED_VIEW_DATA - 513)) | (1 << (self::FLAGGER - 513)) | (1 << (self::FLASHBACK - 513)) | (1 << (self::FLASH_CACHE - 513)) | (1 << (self::FLOAT - 513)) | (1 << (self::FLOB - 513)) | (1 << (self::FLOOR - 513)) | (1 << (self::FLUSH - 513)) | (1 << (self::FOLDER - 513)) | (1 << (self::FOLLOWING - 513)) | (1 << (self::FOLLOWS - 513)) | (1 << (self::FORALL - 513)) | (1 << (self::FORCE - 513)) | (1 << (self::FORCE_XML_QUERY_REWRITE - 513)) | (1 << (self::FOREIGN - 513)) | (1 << (self::FOREVER - 513)) | (1 << (self::FORMAT - 513)) | (1 << (self::FORWARD - 513)) | (1 << (self::FRAGMENT_NUMBER - 513)) | (1 << (self::FREELIST - 513)) | (1 << (self::FREELISTS - 513)) | (1 << (self::FREEPOOLS - 513)) | (1 << (self::FRESH - 513)) | (1 << (self::FROM_TZ - 513)) | (1 << (self::FULL - 513)) | (1 << (self::FULL_OUTER_JOIN_TO_OUTER - 513)) | (1 << (self::FUNCTION - 513)) | (1 << (self::FUNCTIONS - 513)) | (1 << (self::GATHER_OPTIMIZER_STATISTICS - 513)) | (1 << (self::GATHER_PLAN_STATISTICS - 513)) | (1 << (self::GBY_CONC_ROLLUP - 513)) | (1 << (self::GBY_PUSHDOWN - 513)) | (1 << (self::GENERATED - 513)) | (1 << (self::GET - 513)) | (1 << (self::GLOBAL - 513)) | (1 << (self::GLOBALLY - 513)) | (1 << (self::GLOBAL_NAME - 513)) | (1 << (self::GLOBAL_TOPIC_ENABLED - 513)) | (1 << (self::GROUP_BY - 513)) | (1 << (self::GROUP_ID - 513)) | (1 << (self::GROUPING - 513)) | (1 << (self::GROUPING_ID - 513)))) !== 0) || (((($_la - 577)) & ~0x3f) === 0 && ((1 << ($_la - 577)) & ((1 << (self::GROUPS - 577)) | (1 << (self::GUARANTEED - 577)) | (1 << (self::GUARANTEE - 577)) | (1 << (self::GUARD - 577)) | (1 << (self::HASH_AJ - 577)) | (1 << (self::HASH - 577)) | (1 << (self::HASHKEYS - 577)) | (1 << (self::HASH_SJ - 577)) | (1 << (self::HEADER - 577)) | (1 << (self::HEAP - 577)) | (1 << (self::HELP - 577)) | (1 << (self::HEXTORAW - 577)) | (1 << (self::HEXTOREF - 577)) | (1 << (self::HIDDEN_KEYWORD - 577)) | (1 << (self::HIDE - 577)) | (1 << (self::HIERARCHY - 577)) | (1 << (self::HIGH - 577)) | (1 << (self::HINTSET_BEGIN - 577)) | (1 << (self::HINTSET_END - 577)) | (1 << (self::HOT - 577)) | (1 << (self::HOUR - 577)) | (1 << (self::HWM_BROKERED - 577)) | (1 << (self::HYBRID - 577)) | (1 << (self::IDENTIFIER - 577)) | (1 << (self::IDENTITY - 577)) | (1 << (self::IDGENERATORS - 577)) | (1 << (self::ID - 577)) | (1 << (self::IDLE_TIME - 577)) | (1 << (self::IF - 577)) | (1 << (self::IGNORE - 577)) | (1 << (self::IGNORE_OPTIM_EMBEDDED_HINTS - 577)) | (1 << (self::IGNORE_ROW_ON_DUPKEY_INDEX - 577)) | (1 << (self::IGNORE_WHERE_CLAUSE - 577)) | (1 << (self::ILM - 577)) | (1 << (self::IMMEDIATE - 577)) | (1 << (self::IMPACT - 577)) | (1 << (self::IMPORT - 577)) | (1 << (self::INACTIVE - 577)) | (1 << (self::INCLUDE - 577)) | (1 << (self::INCLUDE_VERSION - 577)) | (1 << (self::INCLUDING - 577)) | (1 << (self::INCREMENTAL - 577)) | (1 << (self::INCREMENT - 577)) | (1 << (self::INCR - 577)) | (1 << (self::INDENT - 577)) | (1 << (self::INDEX_ASC - 577)) | (1 << (self::INDEX_COMBINE - 577)) | (1 << (self::INDEX_DESC - 577)) | (1 << (self::INDEXED - 577)) | (1 << (self::INDEXES - 577)) | (1 << (self::INDEX_FFS - 577)) | (1 << (self::INDEX_FILTER - 577)) | (1 << (self::INDEXING - 577)) | (1 << (self::INDEX_JOIN - 577)) | (1 << (self::INDEX_ROWS - 577)) | (1 << (self::INDEX_RRS - 577)) | (1 << (self::INDEX_RS_ASC - 577)) | (1 << (self::INDEX_RS_DESC - 577)) | (1 << (self::INDEX_RS - 577)) | (1 << (self::INDEX_SCAN - 577)) | (1 << (self::INDEX_SKIP_SCAN - 577)))) !== 0) || (((($_la - 641)) & ~0x3f) === 0 && ((1 << ($_la - 641)) & ((1 << (self::INDEX_SS_ASC - 641)) | (1 << (self::INDEX_SS_DESC - 641)) | (1 << (self::INDEX_SS - 641)) | (1 << (self::INDEX_STATS - 641)) | (1 << (self::INDEXTYPE - 641)) | (1 << (self::INDEXTYPES - 641)) | (1 << (self::INDICATOR - 641)) | (1 << (self::INDICES - 641)) | (1 << (self::INFINITE - 641)) | (1 << (self::INFORMATIONAL - 641)) | (1 << (self::INHERIT - 641)) | (1 << (self::INITCAP - 641)) | (1 << (self::INITIAL - 641)) | (1 << (self::INITIALIZED - 641)) | (1 << (self::INITIALLY - 641)) | (1 << (self::INITRANS - 641)) | (1 << (self::INLINE - 641)) | (1 << (self::INLINE_XMLTYPE_NT - 641)) | (1 << (self::INMEMORY - 641)) | (1 << (self::IN_MEMORY_METADATA - 641)) | (1 << (self::INMEMORY_PRUNING - 641)) | (1 << (self::INNER - 641)) | (1 << (self::INOUT - 641)) | (1 << (self::INPLACE - 641)) | (1 << (self::INSERTCHILDXMLAFTER - 641)) | (1 << (self::INSERTCHILDXMLBEFORE - 641)) | (1 << (self::INSERTCHILDXML - 641)) | (1 << (self::INSERTXMLAFTER - 641)) | (1 << (self::INSERTXMLBEFORE - 641)) | (1 << (self::INSTANCE - 641)) | (1 << (self::INSTANCES - 641)) | (1 << (self::INSTANTIABLE - 641)) | (1 << (self::INSTANTLY - 641)) | (1 << (self::INSTEAD - 641)) | (1 << (self::INSTR2 - 641)) | (1 << (self::INSTR4 - 641)) | (1 << (self::INSTRB - 641)) | (1 << (self::INSTRC - 641)) | (1 << (self::INSTR - 641)) | (1 << (self::INTEGER - 641)) | (1 << (self::INTERLEAVED - 641)) | (1 << (self::INTERMEDIATE - 641)) | (1 << (self::INTERNAL_CONVERT - 641)) | (1 << (self::INTERNAL_USE - 641)) | (1 << (self::INTERPRETED - 641)) | (1 << (self::INTERVAL - 641)) | (1 << (self::INT - 641)) | (1 << (self::INVALIDATE - 641)) | (1 << (self::INVISIBLE - 641)) | (1 << (self::IN_XQUERY - 641)) | (1 << (self::ISOLATION - 641)) | (1 << (self::ISOLATION_LEVEL - 641)) | (1 << (self::ITERATE - 641)) | (1 << (self::ITERATION_NUMBER - 641)) | (1 << (self::JAVA - 641)) | (1 << (self::JOB - 641)) | (1 << (self::JOIN - 641)) | (1 << (self::JSON_ARRAYAGG - 641)) | (1 << (self::JSON_ARRAY - 641)))) !== 0) || (((($_la - 705)) & ~0x3f) === 0 && ((1 << ($_la - 705)) & ((1 << (self::JSON_EQUAL - 705)) | (1 << (self::JSON_EXISTS2 - 705)) | (1 << (self::JSON_EXISTS - 705)) | (1 << (self::JSONGET - 705)) | (1 << (self::JSON - 705)) | (1 << (self::JSON_OBJECTAGG - 705)) | (1 << (self::JSON_OBJECT - 705)) | (1 << (self::JSONPARSE - 705)) | (1 << (self::JSON_QUERY - 705)) | (1 << (self::JSON_SERIALIZE - 705)) | (1 << (self::JSON_TABLE - 705)) | (1 << (self::JSON_TEXTCONTAINS2 - 705)) | (1 << (self::JSON_TEXTCONTAINS - 705)) | (1 << (self::JSON_VALUE - 705)) | (1 << (self::KEEP_DUPLICATES - 705)) | (1 << (self::KEEP - 705)) | (1 << (self::KERBEROS - 705)) | (1 << (self::KEY - 705)) | (1 << (self::KEY_LENGTH - 705)) | (1 << (self::KEYSIZE - 705)) | (1 << (self::KEYS - 705)) | (1 << (self::KEYSTORE - 705)) | (1 << (self::KILL - 705)) | (1 << (self::LABEL - 705)) | (1 << (self::LANGUAGE - 705)) | (1 << (self::LAST_DAY - 705)) | (1 << (self::LAST - 705)) | (1 << (self::LAST_VALUE - 705)) | (1 << (self::LATERAL - 705)) | (1 << (self::LAX - 705)) | (1 << (self::LAYER - 705)) | (1 << (self::LDAP_REGISTRATION_ENABLED - 705)) | (1 << (self::LDAP_REGISTRATION - 705)) | (1 << (self::LDAP_REG_SYNC_INTERVAL - 705)) | (1 << (self::LEADING - 705)) | (1 << (self::LEFT - 705)) | (1 << (self::LENGTH2 - 705)) | (1 << (self::LENGTH4 - 705)) | (1 << (self::LENGTHB - 705)) | (1 << (self::LENGTHC - 705)) | (1 << (self::LENGTH - 705)) | (1 << (self::LESS - 705)) | (1 << (self::LEVEL - 705)) | (1 << (self::LEVELS - 705)) | (1 << (self::LIBRARY - 705)) | (1 << (self::LIFECYCLE - 705)) | (1 << (self::LIFE - 705)) | (1 << (self::LIFETIME - 705)) | (1 << (self::LIKE2 - 705)) | (1 << (self::LIKE4 - 705)) | (1 << (self::LIKEC - 705)) | (1 << (self::LIKE_EXPAND - 705)) | (1 << (self::LIMIT - 705)) | (1 << (self::LINEAR - 705)) | (1 << (self::LINK - 705)) | (1 << (self::LIST - 705)) | (1 << (self::LN - 705)) | (1 << (self::LNNVL - 705)) | (1 << (self::LOAD - 705)) | (1 << (self::LOB - 705)) | (1 << (self::LOBNVL - 705)) | (1 << (self::LOBS - 705)) | (1 << (self::LOCAL_INDEXES - 705)))) !== 0) || (((($_la - 769)) & ~0x3f) === 0 && ((1 << ($_la - 769)) & ((1 << (self::LOCAL - 769)) | (1 << (self::LOCALTIME - 769)) | (1 << (self::LOCALTIMESTAMP - 769)) | (1 << (self::LOCATION - 769)) | (1 << (self::LOCATOR - 769)) | (1 << (self::LOCKED - 769)) | (1 << (self::LOCKING - 769)) | (1 << (self::LOGFILE - 769)) | (1 << (self::LOGFILES - 769)) | (1 << (self::LOGGING - 769)) | (1 << (self::LOGICAL - 769)) | (1 << (self::LOGICAL_READS_PER_CALL - 769)) | (1 << (self::LOGICAL_READS_PER_SESSION - 769)) | (1 << (self::LOG - 769)) | (1 << (self::LOGMINING - 769)) | (1 << (self::LOGOFF - 769)) | (1 << (self::LOGON - 769)) | (1 << (self::LOG_READ_ONLY_VIOLATIONS - 769)) | (1 << (self::LONG - 769)) | (1 << (self::LOOP - 769)) | (1 << (self::LOWER - 769)) | (1 << (self::LOW - 769)) | (1 << (self::LPAD - 769)) | (1 << (self::LTRIM - 769)) | (1 << (self::MAIN - 769)) | (1 << (self::MAKE_REF - 769)) | (1 << (self::MANAGED - 769)) | (1 << (self::MANAGE - 769)) | (1 << (self::MANAGEMENT - 769)) | (1 << (self::MANAGER - 769)) | (1 << (self::MANUAL - 769)) | (1 << (self::MAP - 769)) | (1 << (self::MAPPING - 769)) | (1 << (self::MASTER - 769)) | (1 << (self::MATCHED - 769)) | (1 << (self::MATCHES - 769)) | (1 << (self::MATCH - 769)) | (1 << (self::MATCH_NUMBER - 769)) | (1 << (self::MATCH_RECOGNIZE - 769)) | (1 << (self::MATERIALIZED - 769)) | (1 << (self::MATERIALIZE - 769)) | (1 << (self::MAXARCHLOGS - 769)) | (1 << (self::MAXDATAFILES - 769)) | (1 << (self::MAXEXTENTS - 769)) | (1 << (self::MAXIMIZE - 769)) | (1 << (self::MAXINSTANCES - 769)) | (1 << (self::MAXLOGFILES - 769)) | (1 << (self::MAXLOGHISTORY - 769)) | (1 << (self::MAXLOGMEMBERS - 769)) | (1 << (self::MAX_SHARED_TEMP_SIZE - 769)) | (1 << (self::MAXSIZE - 769)) | (1 << (self::MAXTRANS - 769)) | (1 << (self::MAXVALUE - 769)) | (1 << (self::MEASURE - 769)) | (1 << (self::MEASURES - 769)) | (1 << (self::MEDIUM - 769)) | (1 << (self::MEMBER - 769)) | (1 << (self::MEMCOMPRESS - 769)) | (1 << (self::MEMORY - 769)) | (1 << (self::MERGEACTIONS - 769)) | (1 << (self::MERGE_AJ - 769)) | (1 << (self::MERGE_CONST_ON - 769)) | (1 << (self::MERGE - 769)))) !== 0) || (((($_la - 833)) & ~0x3f) === 0 && ((1 << ($_la - 833)) & ((1 << (self::MERGE_SJ - 833)) | (1 << (self::METADATA - 833)) | (1 << (self::METHOD - 833)) | (1 << (self::MIGRATE - 833)) | (1 << (self::MIGRATION - 833)) | (1 << (self::MINEXTENTS - 833)) | (1 << (self::MINIMIZE - 833)) | (1 << (self::MINIMUM - 833)) | (1 << (self::MINING - 833)) | (1 << (self::MINUS_NULL - 833)) | (1 << (self::MINUTE - 833)) | (1 << (self::MINVALUE - 833)) | (1 << (self::MIRRORCOLD - 833)) | (1 << (self::MIRRORHOT - 833)) | (1 << (self::MIRROR - 833)) | (1 << (self::MLSLABEL - 833)) | (1 << (self::MODEL_COMPILE_SUBQUERY - 833)) | (1 << (self::MODEL_DONTVERIFY_UNIQUENESS - 833)) | (1 << (self::MODEL_DYNAMIC_SUBQUERY - 833)) | (1 << (self::MODEL_MIN_ANALYSIS - 833)) | (1 << (self::MODEL - 833)) | (1 << (self::MODEL_NB - 833)) | (1 << (self::MODEL_NO_ANALYSIS - 833)) | (1 << (self::MODEL_PBY - 833)) | (1 << (self::MODEL_PUSH_REF - 833)) | (1 << (self::MODEL_SV - 833)) | (1 << (self::MODIFICATION - 833)) | (1 << (self::MODIFY_COLUMN_TYPE - 833)) | (1 << (self::MODIFY - 833)) | (1 << (self::MOD - 833)) | (1 << (self::MODULE - 833)) | (1 << (self::MONITORING - 833)) | (1 << (self::MONITOR - 833)) | (1 << (self::MONTH - 833)) | (1 << (self::MONTHS_BETWEEN - 833)) | (1 << (self::MONTHS - 833)) | (1 << (self::MOUNT - 833)) | (1 << (self::MOUNTPATH - 833)) | (1 << (self::MOVEMENT - 833)) | (1 << (self::MOVE - 833)) | (1 << (self::MULTIDIMENSIONAL - 833)) | (1 << (self::MULTISET - 833)) | (1 << (self::MV_MERGE - 833)) | (1 << (self::NAMED - 833)) | (1 << (self::NAME - 833)) | (1 << (self::NAMESPACE - 833)) | (1 << (self::NAN - 833)) | (1 << (self::NANVL - 833)) | (1 << (self::NATIONAL - 833)) | (1 << (self::NATIVE_FULL_OUTER_JOIN - 833)) | (1 << (self::NATIVE - 833)) | (1 << (self::NATURAL - 833)) | (1 << (self::NAV - 833)) | (1 << (self::NCHAR_CS - 833)) | (1 << (self::NCHAR - 833)) | (1 << (self::NCHR - 833)) | (1 << (self::NCLOB - 833)) | (1 << (self::NEEDED - 833)) | (1 << (self::NEG - 833)) | (1 << (self::NESTED - 833)) | (1 << (self::NESTED_TABLE_FAST_INSERT - 833)))) !== 0) || (((($_la - 897)) & ~0x3f) === 0 && ((1 << ($_la - 897)) & ((1 << (self::NESTED_TABLE_GET_REFS - 897)) | (1 << (self::NESTED_TABLE_ID - 897)) | (1 << (self::NESTED_TABLE_SET_REFS - 897)) | (1 << (self::NESTED_TABLE_SET_SETID - 897)) | (1 << (self::NETWORK - 897)) | (1 << (self::NEVER - 897)) | (1 << (self::NEW - 897)) | (1 << (self::NEW_TIME - 897)) | (1 << (self::NEXT_DAY - 897)) | (1 << (self::NEXT - 897)) | (1 << (self::NL_AJ - 897)) | (1 << (self::NLJ_BATCHING - 897)) | (1 << (self::NLJ_INDEX_FILTER - 897)) | (1 << (self::NLJ_INDEX_SCAN - 897)) | (1 << (self::NLJ_PREFETCH - 897)) | (1 << (self::NLS_CALENDAR - 897)) | (1 << (self::NLS_CHARACTERSET - 897)) | (1 << (self::NLS_CHARSET_DECL_LEN - 897)) | (1 << (self::NLS_CHARSET_ID - 897)) | (1 << (self::NLS_CHARSET_NAME - 897)) | (1 << (self::NLS_COMP - 897)) | (1 << (self::NLS_CURRENCY - 897)) | (1 << (self::NLS_DATE_FORMAT - 897)) | (1 << (self::NLS_DATE_LANGUAGE - 897)) | (1 << (self::NLS_INITCAP - 897)) | (1 << (self::NLS_ISO_CURRENCY - 897)) | (1 << (self::NL_SJ - 897)) | (1 << (self::NLS_LANG - 897)) | (1 << (self::NLS_LANGUAGE - 897)) | (1 << (self::NLS_LENGTH_SEMANTICS - 897)) | (1 << (self::NLS_LOWER - 897)) | (1 << (self::NLS_NCHAR_CONV_EXCP - 897)) | (1 << (self::NLS_NUMERIC_CHARACTERS - 897)) | (1 << (self::NLS_SORT - 897)) | (1 << (self::NLSSORT - 897)) | (1 << (self::NLS_SPECIAL_CHARS - 897)) | (1 << (self::NLS_TERRITORY - 897)) | (1 << (self::NLS_UPPER - 897)) | (1 << (self::NO_ACCESS - 897)) | (1 << (self::NO_ADAPTIVE_PLAN - 897)) | (1 << (self::NO_ANSI_REARCH - 897)) | (1 << (self::NOAPPEND - 897)) | (1 << (self::NOARCHIVELOG - 897)) | (1 << (self::NOAUDIT - 897)) | (1 << (self::NO_AUTO_REOPTIMIZE - 897)) | (1 << (self::NO_BASETABLE_MULTIMV_REWRITE - 897)) | (1 << (self::NO_BATCH_TABLE_ACCESS_BY_ROWID - 897)) | (1 << (self::NO_BIND_AWARE - 897)) | (1 << (self::NO_BUFFER - 897)) | (1 << (self::NOCACHE - 897)) | (1 << (self::NO_CARTESIAN - 897)) | (1 << (self::NO_CHECK_ACL_REWRITE - 897)) | (1 << (self::NO_CLUSTER_BY_ROWID - 897)) | (1 << (self::NO_CLUSTERING - 897)) | (1 << (self::NO_COALESCE_SQ - 897)) | (1 << (self::NO_COMMON_DATA - 897)) | (1 << (self::NO_CONNECT_BY_CB_WHR_ONLY - 897)) | (1 << (self::NO_CONNECT_BY_COMBINE_SW - 897)) | (1 << (self::NO_CONNECT_BY_COST_BASED - 897)) | (1 << (self::NO_CONNECT_BY_ELIM_DUPS - 897)) | (1 << (self::NO_CONNECT_BY_FILTERING - 897)) | (1 << (self::NOCOPY - 897)) | (1 << (self::NO_COST_XML_QUERY_REWRITE - 897)))) !== 0) || (((($_la - 961)) & ~0x3f) === 0 && ((1 << ($_la - 961)) & ((1 << (self::NO_CPU_COSTING - 961)) | (1 << (self::NOCPU_COSTING - 961)) | (1 << (self::NOCYCLE - 961)) | (1 << (self::NO_DATA_SECURITY_REWRITE - 961)) | (1 << (self::NO_DECORRELATE - 961)) | (1 << (self::NODELAY - 961)) | (1 << (self::NO_DOMAIN_INDEX_FILTER - 961)) | (1 << (self::NO_DST_UPGRADE_INSERT_CONV - 961)) | (1 << (self::NO_ELIM_GROUPBY - 961)) | (1 << (self::NO_ELIMINATE_JOIN - 961)) | (1 << (self::NO_ELIMINATE_OBY - 961)) | (1 << (self::NO_ELIMINATE_OUTER_JOIN - 961)) | (1 << (self::NOENTITYESCAPING - 961)) | (1 << (self::NO_EXPAND_GSET_TO_UNION - 961)) | (1 << (self::NO_EXPAND - 961)) | (1 << (self::NO_EXPAND_TABLE - 961)) | (1 << (self::NO_FACT - 961)) | (1 << (self::NO_FACTORIZE_JOIN - 961)) | (1 << (self::NO_FILTERING - 961)) | (1 << (self::NOFORCE - 961)) | (1 << (self::NO_FULL_OUTER_JOIN_TO_OUTER - 961)) | (1 << (self::NO_GATHER_OPTIMIZER_STATISTICS - 961)) | (1 << (self::NO_GBY_PUSHDOWN - 961)) | (1 << (self::NOGUARANTEE - 961)) | (1 << (self::NO_INDEX_FFS - 961)) | (1 << (self::NO_INDEX - 961)) | (1 << (self::NO_INDEX_SS - 961)) | (1 << (self::NO_INMEMORY - 961)) | (1 << (self::NO_INMEMORY_PRUNING - 961)) | (1 << (self::NOKEEP - 961)) | (1 << (self::NO_LOAD - 961)) | (1 << (self::NOLOCAL - 961)) | (1 << (self::NOLOGGING - 961)) | (1 << (self::NOMAPPING - 961)) | (1 << (self::NOMAXVALUE - 961)) | (1 << (self::NO_MERGE - 961)) | (1 << (self::NOMINIMIZE - 961)) | (1 << (self::NOMINVALUE - 961)) | (1 << (self::NO_MODEL_PUSH_REF - 961)) | (1 << (self::NO_MONITORING - 961)) | (1 << (self::NOMONITORING - 961)) | (1 << (self::NO_MONITOR - 961)) | (1 << (self::NO_MULTIMV_REWRITE - 961)) | (1 << (self::NO_NATIVE_FULL_OUTER_JOIN - 961)) | (1 << (self::NONBLOCKING - 961)) | (1 << (self::NONEDITIONABLE - 961)) | (1 << (self::NONE - 961)) | (1 << (self::NO_NLJ_BATCHING - 961)) | (1 << (self::NO_NLJ_PREFETCH - 961)) | (1 << (self::NO - 961)) | (1 << (self::NONSCHEMA - 961)) | (1 << (self::NO_OBJECT_LINK - 961)) | (1 << (self::NOORDER - 961)) | (1 << (self::NO_ORDER_ROLLUPS - 961)) | (1 << (self::NO_OUTER_JOIN_TO_ANTI - 961)) | (1 << (self::NO_OUTER_JOIN_TO_INNER - 961)) | (1 << (self::NOOVERRIDE - 961)) | (1 << (self::NO_PARALLEL_INDEX - 961)) | (1 << (self::NOPARALLEL_INDEX - 961)) | (1 << (self::NO_PARALLEL - 961)) | (1 << (self::NOPARALLEL - 961)) | (1 << (self::NO_PARTIAL_COMMIT - 961)) | (1 << (self::NO_PARTIAL_JOIN - 961)) | (1 << (self::NO_PARTIAL_ROLLUP_PUSHDOWN - 961)))) !== 0) || (((($_la - 1025)) & ~0x3f) === 0 && ((1 << ($_la - 1025)) & ((1 << (self::NOPARTITION - 1025)) | (1 << (self::NO_PLACE_DISTINCT - 1025)) | (1 << (self::NO_PLACE_GROUP_BY - 1025)) | (1 << (self::NO_PQ_CONCURRENT_UNION - 1025)) | (1 << (self::NO_PQ_MAP - 1025)) | (1 << (self::NO_PQ_REPLICATE - 1025)) | (1 << (self::NO_PQ_SKEW - 1025)) | (1 << (self::NO_PRUNE_GSETS - 1025)) | (1 << (self::NO_PULL_PRED - 1025)) | (1 << (self::NO_PUSH_PRED - 1025)) | (1 << (self::NO_PUSH_SUBQ - 1025)) | (1 << (self::NO_PX_FAULT_TOLERANCE - 1025)) | (1 << (self::NO_PX_JOIN_FILTER - 1025)) | (1 << (self::NO_QKN_BUFF - 1025)) | (1 << (self::NO_QUERY_TRANSFORMATION - 1025)) | (1 << (self::NO_REF_CASCADE - 1025)) | (1 << (self::NORELOCATE - 1025)) | (1 << (self::NORELY - 1025)) | (1 << (self::NOREPAIR - 1025)) | (1 << (self::NOREPLAY - 1025)) | (1 << (self::NORESETLOGS - 1025)) | (1 << (self::NO_RESULT_CACHE - 1025)) | (1 << (self::NOREVERSE - 1025)) | (1 << (self::NO_REWRITE - 1025)) | (1 << (self::NOREWRITE - 1025)) | (1 << (self::NORMAL - 1025)) | (1 << (self::NO_ROOT_SW_FOR_LOCAL - 1025)) | (1 << (self::NOROWDEPENDENCIES - 1025)) | (1 << (self::NOSCHEMACHECK - 1025)) | (1 << (self::NOSEGMENT - 1025)) | (1 << (self::NO_SEMIJOIN - 1025)) | (1 << (self::NO_SEMI_TO_INNER - 1025)) | (1 << (self::NO_SET_TO_JOIN - 1025)) | (1 << (self::NOSORT - 1025)) | (1 << (self::NO_SQL_TRANSLATION - 1025)) | (1 << (self::NO_SQL_TUNE - 1025)) | (1 << (self::NO_STAR_TRANSFORMATION - 1025)) | (1 << (self::NO_STATEMENT_QUEUING - 1025)) | (1 << (self::NO_STATS_GSETS - 1025)) | (1 << (self::NOSTRICT - 1025)) | (1 << (self::NO_SUBQUERY_PRUNING - 1025)) | (1 << (self::NO_SUBSTRB_PAD - 1025)) | (1 << (self::NO_SWAP_JOIN_INPUTS - 1025)) | (1 << (self::NOSWITCH - 1025)) | (1 << (self::NO_TABLE_LOOKUP_BY_NL - 1025)) | (1 << (self::NO_TEMP_TABLE - 1025)) | (1 << (self::NOTHING - 1025)) | (1 << (self::NOTIFICATION - 1025)) | (1 << (self::NO_TRANSFORM_DISTINCT_AGG - 1025)) | (1 << (self::NO_UNNEST - 1025)) | (1 << (self::NO_USE_CUBE - 1025)) | (1 << (self::NO_USE_HASH_AGGREGATION - 1025)) | (1 << (self::NO_USE_HASH_GBY_FOR_PUSHDOWN - 1025)) | (1 << (self::NO_USE_HASH - 1025)) | (1 << (self::NO_USE_INVISIBLE_INDEXES - 1025)) | (1 << (self::NO_USE_MERGE - 1025)) | (1 << (self::NO_USE_NL - 1025)) | (1 << (self::NO_USE_VECTOR_AGGREGATION - 1025)) | (1 << (self::NOVALIDATE - 1025)) | (1 << (self::NO_VECTOR_TRANSFORM_DIMS - 1025)) | (1 << (self::NO_VECTOR_TRANSFORM_FACT - 1025)) | (1 << (self::NO_VECTOR_TRANSFORM - 1025)))) !== 0) || (((($_la - 1089)) & ~0x3f) === 0 && ((1 << ($_la - 1089)) & ((1 << (self::NO_XDB_FASTPATH_INSERT - 1089)) | (1 << (self::NO_XML_DML_REWRITE - 1089)) | (1 << (self::NO_XMLINDEX_REWRITE_IN_SELECT - 1089)) | (1 << (self::NO_XMLINDEX_REWRITE - 1089)) | (1 << (self::NO_XML_QUERY_REWRITE - 1089)) | (1 << (self::NO_ZONEMAP - 1089)) | (1 << (self::NTH_VALUE - 1089)) | (1 << (self::NULLIF - 1089)) | (1 << (self::NULLS - 1089)) | (1 << (self::NUMBER - 1089)) | (1 << (self::NUMERIC - 1089)) | (1 << (self::NUM_INDEX_KEYS - 1089)) | (1 << (self::NUMTODSINTERVAL - 1089)) | (1 << (self::NUMTOYMINTERVAL - 1089)) | (1 << (self::NVARCHAR2 - 1089)) | (1 << (self::NVL2 - 1089)) | (1 << (self::OBJECT2XML - 1089)) | (1 << (self::OBJECT - 1089)) | (1 << (self::OBJ_ID - 1089)) | (1 << (self::OBJNO - 1089)) | (1 << (self::OBJNO_REUSE - 1089)) | (1 << (self::OCCURENCES - 1089)) | (1 << (self::OFFLINE - 1089)) | (1 << (self::OFF - 1089)) | (1 << (self::OFFSET - 1089)) | (1 << (self::OIDINDEX - 1089)) | (1 << (self::OID - 1089)) | (1 << (self::OLAP - 1089)) | (1 << (self::OLD - 1089)) | (1 << (self::OLD_PUSH_PRED - 1089)) | (1 << (self::OLS - 1089)) | (1 << (self::OLTP - 1089)) | (1 << (self::OMIT - 1089)) | (1 << (self::ONE - 1089)) | (1 << (self::ONLINE - 1089)) | (1 << (self::ONLY - 1089)) | (1 << (self::OPAQUE - 1089)) | (1 << (self::OPAQUE_TRANSFORM - 1089)) | (1 << (self::OPAQUE_XCANONICAL - 1089)) | (1 << (self::OPCODE - 1089)) | (1 << (self::OPEN - 1089)) | (1 << (self::OPERATIONS - 1089)) | (1 << (self::OPERATOR - 1089)) | (1 << (self::OPT_ESTIMATE - 1089)) | (1 << (self::OPTIMAL - 1089)) | (1 << (self::OPTIMIZE - 1089)) | (1 << (self::OPTIMIZER_FEATURES_ENABLE - 1089)) | (1 << (self::OPTIMIZER_GOAL - 1089)) | (1 << (self::OPT_PARAM - 1089)) | (1 << (self::ORA_BRANCH - 1089)) | (1 << (self::ORA_CHECK_ACL - 1089)) | (1 << (self::ORA_CHECK_PRIVILEGE - 1089)) | (1 << (self::ORA_CLUSTERING - 1089)) | (1 << (self::ORADATA - 1089)) | (1 << (self::ORADEBUG - 1089)) | (1 << (self::ORA_DST_AFFECTED - 1089)) | (1 << (self::ORA_DST_CONVERT - 1089)) | (1 << (self::ORA_DST_ERROR - 1089)) | (1 << (self::ORA_GET_ACLIDS - 1089)))) !== 0) || (((($_la - 1153)) & ~0x3f) === 0 && ((1 << ($_la - 1153)) & ((1 << (self::ORA_GET_PRIVILEGES - 1153)) | (1 << (self::ORA_HASH - 1153)) | (1 << (self::ORA_INVOKING_USERID - 1153)) | (1 << (self::ORA_INVOKING_USER - 1153)) | (1 << (self::ORA_INVOKING_XS_USER_GUID - 1153)) | (1 << (self::ORA_INVOKING_XS_USER - 1153)) | (1 << (self::ORA_RAWCOMPARE - 1153)) | (1 << (self::ORA_RAWCONCAT - 1153)) | (1 << (self::ORA_ROWSCN - 1153)) | (1 << (self::ORA_ROWSCN_RAW - 1153)) | (1 << (self::ORA_ROWVERSION - 1153)) | (1 << (self::ORA_TABVERSION - 1153)) | (1 << (self::ORA_WRITE_TIME - 1153)) | (1 << (self::ORDERED - 1153)) | (1 << (self::ORDERED_PREDICATES - 1153)) | (1 << (self::ORDINALITY - 1153)) | (1 << (self::OR_EXPAND - 1153)) | (1 << (self::ORGANIZATION - 1153)) | (1 << (self::OR_PREDICATES - 1153)) | (1 << (self::OSERROR - 1153)) | (1 << (self::OTHER - 1153)) | (1 << (self::OUTER_JOIN_TO_ANTI - 1153)) | (1 << (self::OUTER_JOIN_TO_INNER - 1153)) | (1 << (self::OUTER - 1153)) | (1 << (self::OUTLINE_LEAF - 1153)) | (1 << (self::OUTLINE - 1153)) | (1 << (self::OUT_OF_LINE - 1153)) | (1 << (self::OUT - 1153)) | (1 << (self::OVERFLOW_NOMOVE - 1153)) | (1 << (self::OVERFLOW - 1153)) | (1 << (self::OVERLAPS - 1153)) | (1 << (self::OVER - 1153)) | (1 << (self::OVERRIDING - 1153)) | (1 << (self::OWNER - 1153)) | (1 << (self::OWNERSHIP - 1153)) | (1 << (self::OWN - 1153)) | (1 << (self::PACKAGE - 1153)) | (1 << (self::PACKAGES - 1153)) | (1 << (self::PARALLEL_ENABLE - 1153)) | (1 << (self::PARALLEL_INDEX - 1153)) | (1 << (self::PARALLEL - 1153)) | (1 << (self::PARAMETERS - 1153)) | (1 << (self::PARAM - 1153)) | (1 << (self::PARENT - 1153)) | (1 << (self::PARITY - 1153)) | (1 << (self::PARTIAL_JOIN - 1153)) | (1 << (self::PARTIALLY - 1153)) | (1 << (self::PARTIAL - 1153)) | (1 << (self::PARTIAL_ROLLUP_PUSHDOWN - 1153)) | (1 << (self::PARTITION_HASH - 1153)) | (1 << (self::PARTITION_LIST - 1153)) | (1 << (self::PARTITION - 1153)) | (1 << (self::PARTITION_RANGE - 1153)) | (1 << (self::PARTITIONS - 1153)) | (1 << (self::PARTNUMINST - 1153)) | (1 << (self::PASSING - 1153)) | (1 << (self::PASSWORD_GRACE_TIME - 1153)) | (1 << (self::PASSWORD_LIFE_TIME - 1153)) | (1 << (self::PASSWORD_LOCK_TIME - 1153)) | (1 << (self::PASSWORD - 1153)) | (1 << (self::PASSWORD_REUSE_MAX - 1153)))) !== 0) || (((($_la - 1217)) & ~0x3f) === 0 && ((1 << ($_la - 1217)) & ((1 << (self::PASSWORD_REUSE_TIME - 1217)) | (1 << (self::PASSWORD_VERIFY_FUNCTION - 1217)) | (1 << (self::PAST - 1217)) | (1 << (self::PATCH - 1217)) | (1 << (self::PATH - 1217)) | (1 << (self::PATH_PREFIX - 1217)) | (1 << (self::PATHS - 1217)) | (1 << (self::PATTERN - 1217)) | (1 << (self::PBL_HS_BEGIN - 1217)) | (1 << (self::PBL_HS_END - 1217)) | (1 << (self::PCTINCREASE - 1217)) | (1 << (self::PCTTHRESHOLD - 1217)) | (1 << (self::PCTUSED - 1217)) | (1 << (self::PCTVERSION - 1217)) | (1 << (self::PENDING - 1217)) | (1 << (self::PERCENT_KEYWORD - 1217)) | (1 << (self::PERCENT_RANKM - 1217)) | (1 << (self::PERFORMANCE - 1217)) | (1 << (self::PERIOD_KEYWORD - 1217)) | (1 << (self::PERMANENT - 1217)) | (1 << (self::PERMISSION - 1217)) | (1 << (self::PERMUTE - 1217)) | (1 << (self::PER - 1217)) | (1 << (self::PFILE - 1217)) | (1 << (self::PHYSICAL - 1217)) | (1 << (self::PIKEY - 1217)) | (1 << (self::PIPELINED - 1217)) | (1 << (self::PIV_GB - 1217)) | (1 << (self::PIVOT - 1217)) | (1 << (self::PIV_SSF - 1217)) | (1 << (self::PLACE_DISTINCT - 1217)) | (1 << (self::PLACE_GROUP_BY - 1217)) | (1 << (self::PLAN - 1217)) | (1 << (self::PLSCOPE_SETTINGS - 1217)) | (1 << (self::PLS_INTEGER - 1217)) | (1 << (self::PLSQL_CCFLAGS - 1217)) | (1 << (self::PLSQL_CODE_TYPE - 1217)) | (1 << (self::PLSQL_DEBUG - 1217)) | (1 << (self::PLSQL_OPTIMIZE_LEVEL - 1217)) | (1 << (self::PLSQL_WARNINGS - 1217)) | (1 << (self::PLUGGABLE - 1217)) | (1 << (self::POINT - 1217)) | (1 << (self::POLICY - 1217)) | (1 << (self::POOL_16K - 1217)) | (1 << (self::POOL_2K - 1217)) | (1 << (self::POOL_32K - 1217)) | (1 << (self::POOL_4K - 1217)) | (1 << (self::POOL_8K - 1217)) | (1 << (self::POSITIVEN - 1217)) | (1 << (self::POSITIVE - 1217)) | (1 << (self::POST_TRANSACTION - 1217)) | (1 << (self::POWERMULTISET_BY_CARDINALITY - 1217)) | (1 << (self::POWERMULTISET - 1217)) | (1 << (self::POWER - 1217)) | (1 << (self::PQ_CONCURRENT_UNION - 1217)) | (1 << (self::PQ_DISTRIBUTE - 1217)))) !== 0) || (((($_la - 1281)) & ~0x3f) === 0 && ((1 << ($_la - 1281)) & ((1 << (self::PQ_DISTRIBUTE_WINDOW - 1281)) | (1 << (self::PQ_FILTER - 1281)) | (1 << (self::PQ_MAP - 1281)) | (1 << (self::PQ_NOMAP - 1281)) | (1 << (self::PQ_REPLICATE - 1281)) | (1 << (self::PQ_SKEW - 1281)) | (1 << (self::PRAGMA - 1281)) | (1 << (self::PREBUILT - 1281)) | (1 << (self::PRECEDES - 1281)) | (1 << (self::PRECEDING - 1281)) | (1 << (self::PRECISION - 1281)) | (1 << (self::PRECOMPUTE_SUBQUERY - 1281)) | (1 << (self::PREDICATE_REORDERS - 1281)) | (1 << (self::PRELOAD - 1281)) | (1 << (self::PREPARE - 1281)) | (1 << (self::PRESENTNNV - 1281)) | (1 << (self::PRESENT - 1281)) | (1 << (self::PRESENTV - 1281)) | (1 << (self::PRESERVE_OID - 1281)) | (1 << (self::PRESERVE - 1281)) | (1 << (self::PRETTY - 1281)) | (1 << (self::PREVIOUS - 1281)) | (1 << (self::PREV - 1281)) | (1 << (self::PRIMARY - 1281)) | (1 << (self::PRINTBLOBTOCLOB - 1281)) | (1 << (self::PRIORITY - 1281)) | (1 << (self::PRIVATE - 1281)) | (1 << (self::PRIVATE_SGA - 1281)) | (1 << (self::PRIVILEGED - 1281)) | (1 << (self::PRIVILEGE - 1281)) | (1 << (self::PRIVILEGES - 1281)) | (1 << (self::PROCEDURAL - 1281)) | (1 << (self::PROCEDURE - 1281)) | (1 << (self::PROCESS - 1281)) | (1 << (self::PROFILE - 1281)) | (1 << (self::PROGRAM - 1281)) | (1 << (self::PROJECT - 1281)) | (1 << (self::PROPAGATE - 1281)) | (1 << (self::PROTECTED - 1281)) | (1 << (self::PROTECTION - 1281)) | (1 << (self::PROXY - 1281)) | (1 << (self::PRUNING - 1281)) | (1 << (self::PULL_PRED - 1281)) | (1 << (self::PURGE - 1281)) | (1 << (self::PUSH_PRED - 1281)) | (1 << (self::PUSH_SUBQ - 1281)) | (1 << (self::PX_FAULT_TOLERANCE - 1281)) | (1 << (self::PX_GRANULE - 1281)) | (1 << (self::PX_JOIN_FILTER - 1281)) | (1 << (self::QB_NAME - 1281)) | (1 << (self::QUERY_BLOCK - 1281)) | (1 << (self::QUERY - 1281)) | (1 << (self::QUEUE_CURR - 1281)) | (1 << (self::QUEUE - 1281)) | (1 << (self::QUEUE_ROWP - 1281)) | (1 << (self::QUIESCE - 1281)) | (1 << (self::QUORUM - 1281)) | (1 << (self::QUOTA - 1281)) | (1 << (self::RAISE - 1281)) | (1 << (self::RANDOM_LOCAL - 1281)) | (1 << (self::RANDOM - 1281)) | (1 << (self::RANGE - 1281)))) !== 0) || (((($_la - 1345)) & ~0x3f) === 0 && ((1 << ($_la - 1345)) & ((1 << (self::RANKM - 1345)) | (1 << (self::RAPIDLY - 1345)) | (1 << (self::RAW - 1345)) | (1 << (self::RAWTOHEX - 1345)) | (1 << (self::RAWTONHEX - 1345)) | (1 << (self::RBA - 1345)) | (1 << (self::RBO_OUTLINE - 1345)) | (1 << (self::RDBA - 1345)) | (1 << (self::READ - 1345)) | (1 << (self::READS - 1345)) | (1 << (self::REALM - 1345)) | (1 << (self::REAL - 1345)) | (1 << (self::REBALANCE - 1345)) | (1 << (self::REBUILD - 1345)) | (1 << (self::RECORD - 1345)) | (1 << (self::RECORDS_PER_BLOCK - 1345)) | (1 << (self::RECOVERABLE - 1345)) | (1 << (self::RECOVER - 1345)) | (1 << (self::RECOVERY - 1345)) | (1 << (self::RECYCLEBIN - 1345)) | (1 << (self::RECYCLE - 1345)) | (1 << (self::REDACTION - 1345)) | (1 << (self::REDEFINE - 1345)) | (1 << (self::REDO - 1345)) | (1 << (self::REDUCED - 1345)) | (1 << (self::REDUNDANCY - 1345)) | (1 << (self::REF_CASCADE_CURSOR - 1345)) | (1 << (self::REFERENCED - 1345)) | (1 << (self::REFERENCE - 1345)) | (1 << (self::REFERENCES - 1345)) | (1 << (self::REFERENCING - 1345)) | (1 << (self::REF - 1345)) | (1 << (self::REFRESH - 1345)) | (1 << (self::REFTOHEX - 1345)) | (1 << (self::REGEXP_COUNT - 1345)) | (1 << (self::REGEXP_INSTR - 1345)) | (1 << (self::REGEXP_LIKE - 1345)) | (1 << (self::REGEXP_REPLACE - 1345)) | (1 << (self::REGEXP_SUBSTR - 1345)) | (1 << (self::REGISTER - 1345)) | (1 << (self::REGR_AVGX - 1345)) | (1 << (self::REGR_AVGY - 1345)) | (1 << (self::REGR_COUNT - 1345)) | (1 << (self::REGR_INTERCEPT - 1345)) | (1 << (self::REGR_R2 - 1345)) | (1 << (self::REGR_SLOPE - 1345)) | (1 << (self::REGR_SXX - 1345)) | (1 << (self::REGR_SXY - 1345)) | (1 << (self::REGR_SYY - 1345)) | (1 << (self::REGULAR - 1345)) | (1 << (self::REJECT - 1345)) | (1 << (self::REKEY - 1345)) | (1 << (self::RELATIONAL - 1345)) | (1 << (self::RELOCATE - 1345)) | (1 << (self::RELY - 1345)) | (1 << (self::REMAINDER - 1345)) | (1 << (self::REMOTE_MAPPED - 1345)) | (1 << (self::REMOVE - 1345)) | (1 << (self::RENAME - 1345)) | (1 << (self::REPAIR - 1345)) | (1 << (self::REPEAT - 1345)) | (1 << (self::REPLACE - 1345)) | (1 << (self::REPLICATION - 1345)))) !== 0) || (((($_la - 1409)) & ~0x3f) === 0 && ((1 << ($_la - 1409)) & ((1 << (self::REQUIRED - 1409)) | (1 << (self::RESETLOGS - 1409)) | (1 << (self::RESET - 1409)) | (1 << (self::RESIZE - 1409)) | (1 << (self::RESOLVE - 1409)) | (1 << (self::RESOLVER - 1409)) | (1 << (self::RESPECT - 1409)) | (1 << (self::RESTART - 1409)) | (1 << (self::RESTORE_AS_INTERVALS - 1409)) | (1 << (self::RESTORE - 1409)) | (1 << (self::RESTRICT_ALL_REF_CONS - 1409)) | (1 << (self::RESTRICTED - 1409)) | (1 << (self::RESTRICT_REFERENCES - 1409)) | (1 << (self::RESTRICT - 1409)) | (1 << (self::RESULT_CACHE - 1409)) | (1 << (self::RESULT - 1409)) | (1 << (self::RESUMABLE - 1409)) | (1 << (self::RESUME - 1409)) | (1 << (self::RETENTION - 1409)) | (1 << (self::RETRY_ON_ROW_CHANGE - 1409)) | (1 << (self::RETURNING - 1409)) | (1 << (self::RETURN - 1409)) | (1 << (self::REUSE - 1409)) | (1 << (self::REVERSE - 1409)) | (1 << (self::REWRITE_OR_ERROR - 1409)) | (1 << (self::REWRITE - 1409)) | (1 << (self::RIGHT - 1409)) | (1 << (self::ROLE - 1409)) | (1 << (self::ROLESET - 1409)) | (1 << (self::ROLES - 1409)) | (1 << (self::ROLLBACK - 1409)) | (1 << (self::ROLLING - 1409)) | (1 << (self::ROLLUP - 1409)) | (1 << (self::ROWDEPENDENCIES - 1409)) | (1 << (self::ROWID_MAPPING_TABLE - 1409)) | (1 << (self::ROWID - 1409)) | (1 << (self::ROWIDTOCHAR - 1409)) | (1 << (self::ROWIDTONCHAR - 1409)) | (1 << (self::ROW_LENGTH - 1409)) | (1 << (self::ROWNUM - 1409)) | (1 << (self::ROW - 1409)) | (1 << (self::ROWS - 1409)) | (1 << (self::RPAD - 1409)) | (1 << (self::RTRIM - 1409)) | (1 << (self::RULE - 1409)) | (1 << (self::RULES - 1409)) | (1 << (self::RUNNING - 1409)) | (1 << (self::SALT - 1409)) | (1 << (self::SAMPLE - 1409)) | (1 << (self::SAVE_AS_INTERVALS - 1409)) | (1 << (self::SAVEPOINT - 1409)) | (1 << (self::SAVE - 1409)) | (1 << (self::SB4 - 1409)) | (1 << (self::SCALE_ROWS - 1409)) | (1 << (self::SCALE - 1409)) | (1 << (self::SCAN_INSTANCES - 1409)) | (1 << (self::SCAN - 1409)) | (1 << (self::SCHEDULER - 1409)) | (1 << (self::SCHEMACHECK - 1409)) | (1 << (self::SCHEMA - 1409)) | (1 << (self::SCN_ASCENDING - 1409)) | (1 << (self::SCN - 1409)))) !== 0) || (((($_la - 1473)) & ~0x3f) === 0 && ((1 << ($_la - 1473)) & ((1 << (self::SCOPE - 1473)) | (1 << (self::SCRUB - 1473)) | (1 << (self::SD_ALL - 1473)) | (1 << (self::SD_INHIBIT - 1473)) | (1 << (self::SDO_GEOM_MBR - 1473)) | (1 << (self::SD_SHOW - 1473)) | (1 << (self::SEARCH - 1473)) | (1 << (self::SECOND - 1473)) | (1 << (self::SECRET - 1473)) | (1 << (self::SECUREFILE_DBA - 1473)) | (1 << (self::SECUREFILE - 1473)) | (1 << (self::SECURITY - 1473)) | (1 << (self::SEED - 1473)) | (1 << (self::SEG_BLOCK - 1473)) | (1 << (self::SEG_FILE - 1473)) | (1 << (self::SEGMENT - 1473)) | (1 << (self::SELECTIVITY - 1473)) | (1 << (self::SELF - 1473)) | (1 << (self::SEMIJOIN_DRIVER - 1473)) | (1 << (self::SEMIJOIN - 1473)) | (1 << (self::SEMI_TO_INNER - 1473)) | (1 << (self::SEQUENCED - 1473)) | (1 << (self::SEQUENCE - 1473)) | (1 << (self::SEQUENTIAL - 1473)) | (1 << (self::SERIALIZABLE - 1473)) | (1 << (self::SERIALLY_REUSABLE - 1473)) | (1 << (self::SERIAL - 1473)) | (1 << (self::SERVERERROR - 1473)) | (1 << (self::SERVICE_NAME_CONVERT - 1473)) | (1 << (self::SERVICES - 1473)) | (1 << (self::SESSION_CACHED_CURSORS - 1473)) | (1 << (self::SESSION - 1473)) | (1 << (self::SESSIONS_PER_USER - 1473)) | (1 << (self::SESSIONTIMEZONE - 1473)) | (1 << (self::SESSIONTZNAME - 1473)) | (1 << (self::SET - 1473)) | (1 << (self::SETS - 1473)) | (1 << (self::SETTINGS - 1473)) | (1 << (self::SET_TO_JOIN - 1473)) | (1 << (self::SEVERE - 1473)) | (1 << (self::SHARED_POOL - 1473)) | (1 << (self::SHARED - 1473)) | (1 << (self::SHARING - 1473)) | (1 << (self::SHELFLIFE - 1473)) | (1 << (self::SHOW - 1473)) | (1 << (self::SHRINK - 1473)) | (1 << (self::SHUTDOWN - 1473)) | (1 << (self::SIBLINGS - 1473)) | (1 << (self::SID - 1473)) | (1 << (self::SIGNAL_COMPONENT - 1473)) | (1 << (self::SIGNAL_FUNCTION - 1473)) | (1 << (self::SIGN - 1473)) | (1 << (self::SIGNTYPE - 1473)) | (1 << (self::SIMPLE_INTEGER - 1473)) | (1 << (self::SIMPLE - 1473)) | (1 << (self::SINGLE - 1473)) | (1 << (self::SINGLETASK - 1473)) | (1 << (self::SINH - 1473)) | (1 << (self::SIN - 1473)) | (1 << (self::SKIP_EXT_OPTIMIZER - 1473)))) !== 0) || (((($_la - 1537)) & ~0x3f) === 0 && ((1 << ($_la - 1537)) & ((1 << (self::SKIP_ - 1537)) | (1 << (self::SKIP_UNQ_UNUSABLE_IDX - 1537)) | (1 << (self::SKIP_UNUSABLE_INDEXES - 1537)) | (1 << (self::SMALLFILE - 1537)) | (1 << (self::SMALLINT - 1537)) | (1 << (self::SNAPSHOT - 1537)) | (1 << (self::SOME - 1537)) | (1 << (self::SORT - 1537)) | (1 << (self::SOUNDEX - 1537)) | (1 << (self::SOURCE_FILE_DIRECTORY - 1537)) | (1 << (self::SOURCE_FILE_NAME_CONVERT - 1537)) | (1 << (self::SOURCE - 1537)) | (1 << (self::SPACE_KEYWORD - 1537)) | (1 << (self::SPECIFICATION - 1537)) | (1 << (self::SPFILE - 1537)) | (1 << (self::SPLIT - 1537)) | (1 << (self::SPREADSHEET - 1537)) | (1 << (self::SQLDATA - 1537)) | (1 << (self::SQLERROR - 1537)) | (1 << (self::SQLLDR - 1537)) | (1 << (self::SQL - 1537)) | (1 << (self::SQL_TRACE - 1537)) | (1 << (self::SQL_TRANSLATION_PROFILE - 1537)) | (1 << (self::SQRT - 1537)) | (1 << (self::STALE - 1537)) | (1 << (self::STANDALONE - 1537)) | (1 << (self::STANDARD_HASH - 1537)) | (1 << (self::STANDBY_MAX_DATA_DELAY - 1537)) | (1 << (self::STANDBYS - 1537)) | (1 << (self::STANDBY - 1537)) | (1 << (self::STAR - 1537)) | (1 << (self::STAR_TRANSFORMATION - 1537)) | (1 << (self::STARTUP - 1537)) | (1 << (self::STATEMENT_ID - 1537)) | (1 << (self::STATEMENT_QUEUING - 1537)) | (1 << (self::STATEMENTS - 1537)) | (1 << (self::STATEMENT - 1537)) | (1 << (self::STATE - 1537)) | (1 << (self::STATIC - 1537)) | (1 << (self::STATISTICS - 1537)) | (1 << (self::STATS_BINOMIAL_TEST - 1537)) | (1 << (self::STATS_CROSSTAB - 1537)) | (1 << (self::STATS_F_TEST - 1537)) | (1 << (self::STATS_KS_TEST - 1537)) | (1 << (self::STATS_MODE - 1537)) | (1 << (self::STATS_MW_TEST - 1537)) | (1 << (self::STATS_ONE_WAY_ANOVA - 1537)) | (1 << (self::STATS_T_TEST_INDEP - 1537)) | (1 << (self::STATS_T_TEST_INDEPU - 1537)) | (1 << (self::STATS_T_TEST_ONE - 1537)) | (1 << (self::STATS_T_TEST_PAIRED - 1537)) | (1 << (self::STATS_WSR_TEST - 1537)) | (1 << (self::STDDEV_POP - 1537)) | (1 << (self::STDDEV_SAMP - 1537)) | (1 << (self::STOP - 1537)) | (1 << (self::STORAGE - 1537)) | (1 << (self::STORE - 1537)) | (1 << (self::STREAMS - 1537)) | (1 << (self::STREAM - 1537)) | (1 << (self::STRICT - 1537)) | (1 << (self::STRING - 1537)) | (1 << (self::STRIPE_COLUMNS - 1537)) | (1 << (self::STRIPE_WIDTH - 1537)))) !== 0) || (((($_la - 1601)) & ~0x3f) === 0 && ((1 << ($_la - 1601)) & ((1 << (self::STRIP - 1601)) | (1 << (self::STRUCTURE - 1601)) | (1 << (self::SUBMULTISET - 1601)) | (1 << (self::SUBPARTITION_REL - 1601)) | (1 << (self::SUBPARTITIONS - 1601)) | (1 << (self::SUBPARTITION - 1601)) | (1 << (self::SUBQUERIES - 1601)) | (1 << (self::SUBQUERY_PRUNING - 1601)) | (1 << (self::SUBSCRIBE - 1601)) | (1 << (self::SUBSET - 1601)) | (1 << (self::SUBSTITUTABLE - 1601)) | (1 << (self::SUBSTR2 - 1601)) | (1 << (self::SUBSTR4 - 1601)) | (1 << (self::SUBSTRB - 1601)) | (1 << (self::SUBSTRC - 1601)) | (1 << (self::SUBTYPE - 1601)) | (1 << (self::SUCCESSFUL - 1601)) | (1 << (self::SUCCESS - 1601)) | (1 << (self::SUMMARY - 1601)) | (1 << (self::SUPPLEMENTAL - 1601)) | (1 << (self::SUSPEND - 1601)) | (1 << (self::SWAP_JOIN_INPUTS - 1601)) | (1 << (self::SWITCHOVER - 1601)) | (1 << (self::SWITCH - 1601)) | (1 << (self::SYNCHRONOUS - 1601)) | (1 << (self::SYNC - 1601)) | (1 << (self::SYSASM - 1601)) | (1 << (self::SYS_AUDIT - 1601)) | (1 << (self::SYSAUX - 1601)) | (1 << (self::SYSBACKUP - 1601)) | (1 << (self::SYS_CHECKACL - 1601)) | (1 << (self::SYS_CHECK_PRIVILEGE - 1601)) | (1 << (self::SYS_CONNECT_BY_PATH - 1601)) | (1 << (self::SYS_CONTEXT - 1601)) | (1 << (self::SYSDATE - 1601)) | (1 << (self::SYSDBA - 1601)) | (1 << (self::SYS_DBURIGEN - 1601)) | (1 << (self::SYSDG - 1601)) | (1 << (self::SYS_DL_CURSOR - 1601)) | (1 << (self::SYS_DM_RXFORM_CHR - 1601)) | (1 << (self::SYS_DM_RXFORM_NUM - 1601)) | (1 << (self::SYS_DOM_COMPARE - 1601)) | (1 << (self::SYS_DST_PRIM2SEC - 1601)) | (1 << (self::SYS_DST_SEC2PRIM - 1601)) | (1 << (self::SYS_ET_BFILE_TO_RAW - 1601)) | (1 << (self::SYS_ET_BLOB_TO_IMAGE - 1601)) | (1 << (self::SYS_ET_IMAGE_TO_BLOB - 1601)) | (1 << (self::SYS_ET_RAW_TO_BFILE - 1601)) | (1 << (self::SYS_EXTPDTXT - 1601)) | (1 << (self::SYS_EXTRACT_UTC - 1601)) | (1 << (self::SYS_FBT_INSDEL - 1601)) | (1 << (self::SYS_FILTER_ACLS - 1601)) | (1 << (self::SYS_FNMATCHES - 1601)) | (1 << (self::SYS_FNREPLACE - 1601)) | (1 << (self::SYS_GET_ACLIDS - 1601)) | (1 << (self::SYS_GET_COL_ACLIDS - 1601)) | (1 << (self::SYS_GET_PRIVILEGES - 1601)) | (1 << (self::SYS_GETTOKENID - 1601)) | (1 << (self::SYS_GETXTIVAL - 1601)) | (1 << (self::SYS_GUID - 1601)) | (1 << (self::SYSGUID - 1601)) | (1 << (self::SYSKM - 1601)) | (1 << (self::SYS_MAKE_XMLNODEID - 1601)))) !== 0) || (((($_la - 1665)) & ~0x3f) === 0 && ((1 << ($_la - 1665)) & ((1 << (self::SYS_MAKEXML - 1665)) | (1 << (self::SYS_MKXMLATTR - 1665)) | (1 << (self::SYS_MKXTI - 1665)) | (1 << (self::SYSOBJ - 1665)) | (1 << (self::SYS_OP_ADT2BIN - 1665)) | (1 << (self::SYS_OP_ADTCONS - 1665)) | (1 << (self::SYS_OP_ALSCRVAL - 1665)) | (1 << (self::SYS_OP_ATG - 1665)) | (1 << (self::SYS_OP_BIN2ADT - 1665)) | (1 << (self::SYS_OP_BITVEC - 1665)) | (1 << (self::SYS_OP_BL2R - 1665)) | (1 << (self::SYS_OP_BLOOM_FILTER_LIST - 1665)) | (1 << (self::SYS_OP_BLOOM_FILTER - 1665)) | (1 << (self::SYS_OP_C2C - 1665)) | (1 << (self::SYS_OP_CAST - 1665)) | (1 << (self::SYS_OP_CEG - 1665)) | (1 << (self::SYS_OP_CL2C - 1665)) | (1 << (self::SYS_OP_COMBINED_HASH - 1665)) | (1 << (self::SYS_OP_COMP - 1665)) | (1 << (self::SYS_OP_CONVERT - 1665)) | (1 << (self::SYS_OP_COUNTCHG - 1665)) | (1 << (self::SYS_OP_CSCONV - 1665)) | (1 << (self::SYS_OP_CSCONVTEST - 1665)) | (1 << (self::SYS_OP_CSR - 1665)) | (1 << (self::SYS_OP_CSX_PATCH - 1665)) | (1 << (self::SYS_OP_CYCLED_SEQ - 1665)) | (1 << (self::SYS_OP_DECOMP - 1665)) | (1 << (self::SYS_OP_DESCEND - 1665)) | (1 << (self::SYS_OP_DISTINCT - 1665)) | (1 << (self::SYS_OP_DRA - 1665)) | (1 << (self::SYS_OP_DUMP - 1665)) | (1 << (self::SYS_OP_DV_CHECK - 1665)) | (1 << (self::SYS_OP_ENFORCE_NOT_NULL - 1665)) | (1 << (self::SYSOPER - 1665)) | (1 << (self::SYS_OP_EXTRACT - 1665)) | (1 << (self::SYS_OP_GROUPING - 1665)) | (1 << (self::SYS_OP_GUID - 1665)) | (1 << (self::SYS_OP_HASH - 1665)) | (1 << (self::SYS_OP_IIX - 1665)) | (1 << (self::SYS_OP_ITR - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_CREATE - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_FILTER_LIST - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_FILTER - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_SUCCEEDED - 1665)) | (1 << (self::SYS_OP_KEY_VECTOR_USE - 1665)) | (1 << (self::SYS_OP_LBID - 1665)) | (1 << (self::SYS_OP_LOBLOC2BLOB - 1665)) | (1 << (self::SYS_OP_LOBLOC2CLOB - 1665)) | (1 << (self::SYS_OP_LOBLOC2ID - 1665)) | (1 << (self::SYS_OP_LOBLOC2NCLOB - 1665)) | (1 << (self::SYS_OP_LOBLOC2TYP - 1665)) | (1 << (self::SYS_OP_LSVI - 1665)) | (1 << (self::SYS_OP_LVL - 1665)) | (1 << (self::SYS_OP_MAKEOID - 1665)) | (1 << (self::SYS_OP_MAP_NONNULL - 1665)) | (1 << (self::SYS_OP_MSR - 1665)) | (1 << (self::SYS_OP_NICOMBINE - 1665)) | (1 << (self::SYS_OP_NIEXTRACT - 1665)) | (1 << (self::SYS_OP_NII - 1665)) | (1 << (self::SYS_OP_NIX - 1665)) | (1 << (self::SYS_OP_NOEXPAND - 1665)) | (1 << (self::SYS_OP_NTCIMG - 1665)) | (1 << (self::SYS_OP_NUMTORAW - 1665)) | (1 << (self::SYS_OP_OIDVALUE - 1665)))) !== 0) || (((($_la - 1729)) & ~0x3f) === 0 && ((1 << ($_la - 1729)) & ((1 << (self::SYS_OP_OPNSIZE - 1729)) | (1 << (self::SYS_OP_PAR_1 - 1729)) | (1 << (self::SYS_OP_PARGID_1 - 1729)) | (1 << (self::SYS_OP_PARGID - 1729)) | (1 << (self::SYS_OP_PAR - 1729)) | (1 << (self::SYS_OP_PART_ID - 1729)) | (1 << (self::SYS_OP_PIVOT - 1729)) | (1 << (self::SYS_OP_R2O - 1729)) | (1 << (self::SYS_OP_RAWTONUM - 1729)) | (1 << (self::SYS_OP_RDTM - 1729)) | (1 << (self::SYS_OP_REF - 1729)) | (1 << (self::SYS_OP_RMTD - 1729)) | (1 << (self::SYS_OP_ROWIDTOOBJ - 1729)) | (1 << (self::SYS_OP_RPB - 1729)) | (1 << (self::SYS_OPTLOBPRBSC - 1729)) | (1 << (self::SYS_OP_TOSETID - 1729)) | (1 << (self::SYS_OP_TPR - 1729)) | (1 << (self::SYS_OP_TRTB - 1729)) | (1 << (self::SYS_OPTXICMP - 1729)) | (1 << (self::SYS_OPTXQCASTASNQ - 1729)) | (1 << (self::SYS_OP_UNDESCEND - 1729)) | (1 << (self::SYS_OP_VECAND - 1729)) | (1 << (self::SYS_OP_VECBIT - 1729)) | (1 << (self::SYS_OP_VECOR - 1729)) | (1 << (self::SYS_OP_VECXOR - 1729)) | (1 << (self::SYS_OP_VERSION - 1729)) | (1 << (self::SYS_OP_VREF - 1729)) | (1 << (self::SYS_OP_VVD - 1729)) | (1 << (self::SYS_OP_XMLCONS_FOR_CSX - 1729)) | (1 << (self::SYS_OP_XPTHATG - 1729)) | (1 << (self::SYS_OP_XPTHIDX - 1729)) | (1 << (self::SYS_OP_XPTHOP - 1729)) | (1 << (self::SYS_OP_XTXT2SQLT - 1729)) | (1 << (self::SYS_OP_ZONE_ID - 1729)) | (1 << (self::SYS_ORDERKEY_DEPTH - 1729)) | (1 << (self::SYS_ORDERKEY_MAXCHILD - 1729)) | (1 << (self::SYS_ORDERKEY_PARENT - 1729)) | (1 << (self::SYS_PARALLEL_TXN - 1729)) | (1 << (self::SYS_PATHID_IS_ATTR - 1729)) | (1 << (self::SYS_PATHID_IS_NMSPC - 1729)) | (1 << (self::SYS_PATHID_LASTNAME - 1729)) | (1 << (self::SYS_PATHID_LASTNMSPC - 1729)) | (1 << (self::SYS_PATH_REVERSE - 1729)) | (1 << (self::SYS_PXQEXTRACT - 1729)) | (1 << (self::SYS_RAW_TO_XSID - 1729)) | (1 << (self::SYS_RID_ORDER - 1729)) | (1 << (self::SYS_ROW_DELTA - 1729)) | (1 << (self::SYS_SC_2_XMLT - 1729)) | (1 << (self::SYS_SYNRCIREDO - 1729)) | (1 << (self::SYSTEM_DEFINED - 1729)) | (1 << (self::SYSTEM - 1729)) | (1 << (self::SYSTIMESTAMP - 1729)) | (1 << (self::SYS_TYPEID - 1729)) | (1 << (self::SYS_UMAKEXML - 1729)) | (1 << (self::SYS_XMLANALYZE - 1729)) | (1 << (self::SYS_XMLCONTAINS - 1729)) | (1 << (self::SYS_XMLCONV - 1729)) | (1 << (self::SYS_XMLEXNSURI - 1729)) | (1 << (self::SYS_XMLGEN - 1729)) | (1 << (self::SYS_XMLI_LOC_ISNODE - 1729)) | (1 << (self::SYS_XMLI_LOC_ISTEXT - 1729)) | (1 << (self::SYS_XMLINSTR - 1729)) | (1 << (self::SYS_XMLLOCATOR_GETSVAL - 1729)) | (1 << (self::SYS_XMLNODEID_GETCID - 1729)))) !== 0) || (((($_la - 1793)) & ~0x3f) === 0 && ((1 << ($_la - 1793)) & ((1 << (self::SYS_XMLNODEID_GETLOCATOR - 1793)) | (1 << (self::SYS_XMLNODEID_GETOKEY - 1793)) | (1 << (self::SYS_XMLNODEID_GETPATHID - 1793)) | (1 << (self::SYS_XMLNODEID_GETPTRID - 1793)) | (1 << (self::SYS_XMLNODEID_GETRID - 1793)) | (1 << (self::SYS_XMLNODEID_GETSVAL - 1793)) | (1 << (self::SYS_XMLNODEID_GETTID - 1793)) | (1 << (self::SYS_XMLNODEID - 1793)) | (1 << (self::SYS_XMLT_2_SC - 1793)) | (1 << (self::SYS_XMLTRANSLATE - 1793)) | (1 << (self::SYS_XMLTYPE2SQL - 1793)) | (1 << (self::SYS_XQ_ASQLCNV - 1793)) | (1 << (self::SYS_XQ_ATOMCNVCHK - 1793)) | (1 << (self::SYS_XQBASEURI - 1793)) | (1 << (self::SYS_XQCASTABLEERRH - 1793)) | (1 << (self::SYS_XQCODEP2STR - 1793)) | (1 << (self::SYS_XQCODEPEQ - 1793)) | (1 << (self::SYS_XQCON2SEQ - 1793)) | (1 << (self::SYS_XQCONCAT - 1793)) | (1 << (self::SYS_XQDELETE - 1793)) | (1 << (self::SYS_XQDFLTCOLATION - 1793)) | (1 << (self::SYS_XQDOC - 1793)) | (1 << (self::SYS_XQDOCURI - 1793)) | (1 << (self::SYS_XQDURDIV - 1793)) | (1 << (self::SYS_XQED4URI - 1793)) | (1 << (self::SYS_XQENDSWITH - 1793)) | (1 << (self::SYS_XQERRH - 1793)) | (1 << (self::SYS_XQERR - 1793)) | (1 << (self::SYS_XQESHTMLURI - 1793)) | (1 << (self::SYS_XQEXLOBVAL - 1793)) | (1 << (self::SYS_XQEXSTWRP - 1793)) | (1 << (self::SYS_XQEXTRACT - 1793)) | (1 << (self::SYS_XQEXTRREF - 1793)) | (1 << (self::SYS_XQEXVAL - 1793)) | (1 << (self::SYS_XQFB2STR - 1793)) | (1 << (self::SYS_XQFNBOOL - 1793)) | (1 << (self::SYS_XQFNCMP - 1793)) | (1 << (self::SYS_XQFNDATIM - 1793)) | (1 << (self::SYS_XQFNLNAME - 1793)) | (1 << (self::SYS_XQFNNM - 1793)) | (1 << (self::SYS_XQFNNSURI - 1793)) | (1 << (self::SYS_XQFNPREDTRUTH - 1793)) | (1 << (self::SYS_XQFNQNM - 1793)) | (1 << (self::SYS_XQFNROOT - 1793)) | (1 << (self::SYS_XQFORMATNUM - 1793)) | (1 << (self::SYS_XQFTCONTAIN - 1793)) | (1 << (self::SYS_XQFUNCR - 1793)) | (1 << (self::SYS_XQGETCONTENT - 1793)) | (1 << (self::SYS_XQINDXOF - 1793)) | (1 << (self::SYS_XQINSERT - 1793)) | (1 << (self::SYS_XQINSPFX - 1793)) | (1 << (self::SYS_XQIRI2URI - 1793)) | (1 << (self::SYS_XQLANG - 1793)) | (1 << (self::SYS_XQLLNMFRMQNM - 1793)) | (1 << (self::SYS_XQMKNODEREF - 1793)) | (1 << (self::SYS_XQNILLED - 1793)) | (1 << (self::SYS_XQNODENAME - 1793)) | (1 << (self::SYS_XQNORMSPACE - 1793)) | (1 << (self::SYS_XQNORMUCODE - 1793)) | (1 << (self::SYS_XQ_NRNG - 1793)) | (1 << (self::SYS_XQNSP4PFX - 1793)) | (1 << (self::SYS_XQNSPFRMQNM - 1793)) | (1 << (self::SYS_XQPFXFRMQNM - 1793)) | (1 << (self::SYS_XQ_PKSQL2XML - 1793)))) !== 0) || (((($_la - 1857)) & ~0x3f) === 0 && ((1 << ($_la - 1857)) & ((1 << (self::SYS_XQPOLYABS - 1857)) | (1 << (self::SYS_XQPOLYADD - 1857)) | (1 << (self::SYS_XQPOLYCEL - 1857)) | (1 << (self::SYS_XQPOLYCSTBL - 1857)) | (1 << (self::SYS_XQPOLYCST - 1857)) | (1 << (self::SYS_XQPOLYDIV - 1857)) | (1 << (self::SYS_XQPOLYFLR - 1857)) | (1 << (self::SYS_XQPOLYMOD - 1857)) | (1 << (self::SYS_XQPOLYMUL - 1857)) | (1 << (self::SYS_XQPOLYRND - 1857)) | (1 << (self::SYS_XQPOLYSQRT - 1857)) | (1 << (self::SYS_XQPOLYSUB - 1857)) | (1 << (self::SYS_XQPOLYUMUS - 1857)) | (1 << (self::SYS_XQPOLYUPLS - 1857)) | (1 << (self::SYS_XQPOLYVEQ - 1857)) | (1 << (self::SYS_XQPOLYVGE - 1857)) | (1 << (self::SYS_XQPOLYVGT - 1857)) | (1 << (self::SYS_XQPOLYVLE - 1857)) | (1 << (self::SYS_XQPOLYVLT - 1857)) | (1 << (self::SYS_XQPOLYVNE - 1857)) | (1 << (self::SYS_XQREF2VAL - 1857)) | (1 << (self::SYS_XQRENAME - 1857)) | (1 << (self::SYS_XQREPLACE - 1857)) | (1 << (self::SYS_XQRESVURI - 1857)) | (1 << (self::SYS_XQRNDHALF2EVN - 1857)) | (1 << (self::SYS_XQRSLVQNM - 1857)) | (1 << (self::SYS_XQRYENVPGET - 1857)) | (1 << (self::SYS_XQRYVARGET - 1857)) | (1 << (self::SYS_XQRYWRP - 1857)) | (1 << (self::SYS_XQSEQ2CON4XC - 1857)) | (1 << (self::SYS_XQSEQ2CON - 1857)) | (1 << (self::SYS_XQSEQDEEPEQ - 1857)) | (1 << (self::SYS_XQSEQINSB - 1857)) | (1 << (self::SYS_XQSEQRM - 1857)) | (1 << (self::SYS_XQSEQRVS - 1857)) | (1 << (self::SYS_XQSEQSUB - 1857)) | (1 << (self::SYS_XQSEQTYPMATCH - 1857)) | (1 << (self::SYS_XQSTARTSWITH - 1857)) | (1 << (self::SYS_XQSTATBURI - 1857)) | (1 << (self::SYS_XQSTR2CODEP - 1857)) | (1 << (self::SYS_XQSTRJOIN - 1857)) | (1 << (self::SYS_XQSUBSTRAFT - 1857)) | (1 << (self::SYS_XQSUBSTRBEF - 1857)) | (1 << (self::SYS_XQTOKENIZE - 1857)) | (1 << (self::SYS_XQTREATAS - 1857)) | (1 << (self::SYS_XQ_UPKXML2SQL - 1857)) | (1 << (self::SYS_XQXFORM - 1857)) | (1 << (self::SYS_XSID_TO_RAW - 1857)) | (1 << (self::SYS_ZMAP_FILTER - 1857)) | (1 << (self::SYS_ZMAP_REFRESH - 1857)) | (1 << (self::TABLE_LOOKUP_BY_NL - 1857)) | (1 << (self::TABLESPACE_NO - 1857)) | (1 << (self::TABLESPACE - 1857)) | (1 << (self::TABLES - 1857)) | (1 << (self::TABLE_STATS - 1857)) | (1 << (self::TABLE - 1857)) | (1 << (self::TABNO - 1857)) | (1 << (self::TAG - 1857)) | (1 << (self::TANH - 1857)) | (1 << (self::TAN - 1857)) | (1 << (self::TBLORIDXPARTNUM - 1857)) | (1 << (self::TEMPFILE - 1857)) | (1 << (self::TEMPLATE - 1857)) | (1 << (self::TEMPORARY - 1857)))) !== 0) || (((($_la - 1921)) & ~0x3f) === 0 && ((1 << ($_la - 1921)) & ((1 << (self::TEMP_TABLE - 1921)) | (1 << (self::TEST - 1921)) | (1 << (self::TEXT - 1921)) | (1 << (self::THAN - 1921)) | (1 << (self::THEN - 1921)) | (1 << (self::THE - 1921)) | (1 << (self::THREAD - 1921)) | (1 << (self::THROUGH - 1921)) | (1 << (self::TIER - 1921)) | (1 << (self::TIES - 1921)) | (1 << (self::TIMEOUT - 1921)) | (1 << (self::TIMESTAMP_LTZ_UNCONSTRAINED - 1921)) | (1 << (self::TIMESTAMP - 1921)) | (1 << (self::TIMESTAMP_TZ_UNCONSTRAINED - 1921)) | (1 << (self::TIMESTAMP_UNCONSTRAINED - 1921)) | (1 << (self::TIMES - 1921)) | (1 << (self::TIME - 1921)) | (1 << (self::TIMEZONE_ABBR - 1921)) | (1 << (self::TIMEZONE_HOUR - 1921)) | (1 << (self::TIMEZONE_MINUTE - 1921)) | (1 << (self::TIMEZONE_OFFSET - 1921)) | (1 << (self::TIMEZONE_REGION - 1921)) | (1 << (self::TIME_ZONE - 1921)) | (1 << (self::TIV_GB - 1921)) | (1 << (self::TIV_SSF - 1921)) | (1 << (self::TO_ACLID - 1921)) | (1 << (self::TO_BINARY_DOUBLE - 1921)) | (1 << (self::TO_BINARY_FLOAT - 1921)) | (1 << (self::TO_BLOB - 1921)) | (1 << (self::TO_CLOB - 1921)) | (1 << (self::TO_DSINTERVAL - 1921)) | (1 << (self::TO_LOB - 1921)) | (1 << (self::TO_MULTI_BYTE - 1921)) | (1 << (self::TO_NCHAR - 1921)) | (1 << (self::TO_NCLOB - 1921)) | (1 << (self::TO_NUMBER - 1921)) | (1 << (self::TOPLEVEL - 1921)) | (1 << (self::TO_SINGLE_BYTE - 1921)) | (1 << (self::TO_TIMESTAMP - 1921)) | (1 << (self::TO_TIMESTAMP_TZ - 1921)) | (1 << (self::TO_TIME - 1921)) | (1 << (self::TO_TIME_TZ - 1921)) | (1 << (self::TO_YMINTERVAL - 1921)) | (1 << (self::TRACE - 1921)) | (1 << (self::TRACING - 1921)) | (1 << (self::TRACKING - 1921)) | (1 << (self::TRAILING - 1921)) | (1 << (self::TRANSACTION - 1921)) | (1 << (self::TRANSFORM_DISTINCT_AGG - 1921)) | (1 << (self::TRANSITIONAL - 1921)) | (1 << (self::TRANSITION - 1921)) | (1 << (self::TRANSLATE - 1921)) | (1 << (self::TRANSLATION - 1921)) | (1 << (self::TREAT - 1921)) | (1 << (self::TRIGGERS - 1921)) | (1 << (self::TRIGGER - 1921)) | (1 << (self::TRUE - 1921)) | (1 << (self::TRUNCATE - 1921)) | (1 << (self::TRUNC - 1921)) | (1 << (self::TRUSTED - 1921)) | (1 << (self::TRUST - 1921)) | (1 << (self::TUNING - 1921)))) !== 0) || (((($_la - 1985)) & ~0x3f) === 0 && ((1 << ($_la - 1985)) & ((1 << (self::TX - 1985)) | (1 << (self::TYPES - 1985)) | (1 << (self::TYPE - 1985)) | (1 << (self::TZ_OFFSET - 1985)) | (1 << (self::UB2 - 1985)) | (1 << (self::UBA - 1985)) | (1 << (self::UCS2 - 1985)) | (1 << (self::UID - 1985)) | (1 << (self::UNARCHIVED - 1985)) | (1 << (self::UNBOUNDED - 1985)) | (1 << (self::UNBOUND - 1985)) | (1 << (self::UNCONDITIONAL - 1985)) | (1 << (self::UNDER - 1985)) | (1 << (self::UNDO - 1985)) | (1 << (self::UNDROP - 1985)) | (1 << (self::UNIFORM - 1985)) | (1 << (self::UNISTR - 1985)) | (1 << (self::UNLIMITED - 1985)) | (1 << (self::UNLOAD - 1985)) | (1 << (self::UNLOCK - 1985)) | (1 << (self::UNMATCHED - 1985)) | (1 << (self::UNNEST_INNERJ_DISTINCT_VIEW - 1985)) | (1 << (self::UNNEST_NOSEMIJ_NODISTINCTVIEW - 1985)) | (1 << (self::UNNEST_SEMIJ_VIEW - 1985)) | (1 << (self::UNNEST - 1985)) | (1 << (self::UNPACKED - 1985)) | (1 << (self::UNPIVOT - 1985)) | (1 << (self::UNPLUG - 1985)) | (1 << (self::UNPROTECTED - 1985)) | (1 << (self::UNQUIESCE - 1985)) | (1 << (self::UNRECOVERABLE - 1985)) | (1 << (self::UNRESTRICTED - 1985)) | (1 << (self::UNSUBSCRIBE - 1985)) | (1 << (self::UNTIL - 1985)) | (1 << (self::UNUSABLE - 1985)) | (1 << (self::UNUSED - 1985)) | (1 << (self::UPDATABLE - 1985)) | (1 << (self::UPDATED - 1985)) | (1 << (self::UPDATEXML - 1985)) | (1 << (self::UPD_INDEXES - 1985)) | (1 << (self::UPD_JOININDEX - 1985)) | (1 << (self::UPGRADE - 1985)) | (1 << (self::UPPER - 1985)) | (1 << (self::UPSERT - 1985)) | (1 << (self::UROWID - 1985)) | (1 << (self::USABLE - 1985)) | (1 << (self::USAGE - 1985)) | (1 << (self::USE_ANTI - 1985)) | (1 << (self::USE_CONCAT - 1985)) | (1 << (self::USE_CUBE - 1985)) | (1 << (self::USE_HASH_AGGREGATION - 1985)) | (1 << (self::USE_HASH_GBY_FOR_PUSHDOWN - 1985)) | (1 << (self::USE_HASH - 1985)) | (1 << (self::USE_HIDDEN_PARTITIONS - 1985)) | (1 << (self::USE_INVISIBLE_INDEXES - 1985)) | (1 << (self::USE_MERGE_CARTESIAN - 1985)) | (1 << (self::USE_MERGE - 1985)) | (1 << (self::USE_NL - 1985)) | (1 << (self::USE_NL_WITH_INDEX - 1985)) | (1 << (self::USE_PRIVATE_OUTLINES - 1985)) | (1 << (self::USER_DATA - 1985)))) !== 0) || (((($_la - 2049)) & ~0x3f) === 0 && ((1 << ($_la - 2049)) & ((1 << (self::USER_DEFINED - 2049)) | (1 << (self::USERENV - 2049)) | (1 << (self::USERGROUP - 2049)) | (1 << (self::USER_RECYCLEBIN - 2049)) | (1 << (self::USERS - 2049)) | (1 << (self::USER_TABLESPACES - 2049)) | (1 << (self::USER - 2049)) | (1 << (self::USE_SEMI - 2049)) | (1 << (self::USE_STORED_OUTLINES - 2049)) | (1 << (self::USE_TTT_FOR_GSETS - 2049)) | (1 << (self::USE - 2049)) | (1 << (self::USE_VECTOR_AGGREGATION - 2049)) | (1 << (self::USE_WEAK_NAME_RESL - 2049)) | (1 << (self::USING_NO_EXPAND - 2049)) | (1 << (self::USING - 2049)) | (1 << (self::UTF16BE - 2049)) | (1 << (self::UTF16LE - 2049)) | (1 << (self::UTF32 - 2049)) | (1 << (self::UTF8 - 2049)) | (1 << (self::V1 - 2049)) | (1 << (self::V2 - 2049)) | (1 << (self::VALIDATE - 2049)) | (1 << (self::VALIDATION - 2049)) | (1 << (self::VALID_TIME_END - 2049)) | (1 << (self::VALUE - 2049)) | (1 << (self::VARCHAR2 - 2049)) | (1 << (self::VARCHAR - 2049)) | (1 << (self::VARIABLE - 2049)) | (1 << (self::VAR_POP - 2049)) | (1 << (self::VARRAYS - 2049)) | (1 << (self::VARRAY - 2049)) | (1 << (self::VAR_SAMP - 2049)) | (1 << (self::VARYING - 2049)) | (1 << (self::VECTOR_READ_TRACE - 2049)) | (1 << (self::VECTOR_READ - 2049)) | (1 << (self::VECTOR_TRANSFORM_DIMS - 2049)) | (1 << (self::VECTOR_TRANSFORM_FACT - 2049)) | (1 << (self::VECTOR_TRANSFORM - 2049)) | (1 << (self::VERIFIER - 2049)) | (1 << (self::VERIFY - 2049)) | (1 << (self::VERSIONING - 2049)) | (1 << (self::VERSIONS_ENDSCN - 2049)) | (1 << (self::VERSIONS_ENDTIME - 2049)) | (1 << (self::VERSIONS_OPERATION - 2049)) | (1 << (self::VERSIONS_STARTSCN - 2049)) | (1 << (self::VERSIONS_STARTTIME - 2049)) | (1 << (self::VERSIONS - 2049)) | (1 << (self::VERSIONS_XID - 2049)) | (1 << (self::VERSION - 2049)) | (1 << (self::VIOLATION - 2049)) | (1 << (self::VIRTUAL - 2049)) | (1 << (self::VISIBILITY - 2049)) | (1 << (self::VISIBLE - 2049)) | (1 << (self::VOLUME - 2049)) | (1 << (self::VSIZE - 2049)) | (1 << (self::WAIT - 2049)) | (1 << (self::WALLET - 2049)) | (1 << (self::WARNING - 2049)) | (1 << (self::WEEKS - 2049)) | (1 << (self::WEEK - 2049)) | (1 << (self::WELLFORMED - 2049)) | (1 << (self::WHENEVER - 2049)))) !== 0) || (((($_la - 2113)) & ~0x3f) === 0 && ((1 << ($_la - 2113)) & ((1 << (self::WHEN - 2113)) | (1 << (self::WHILE - 2113)) | (1 << (self::WHITESPACE - 2113)) | (1 << (self::WIDTH_BUCKET - 2113)) | (1 << (self::WITHIN - 2113)) | (1 << (self::WITHOUT - 2113)) | (1 << (self::WITH_PLSQL - 2113)) | (1 << (self::WORK - 2113)) | (1 << (self::WRAPPED - 2113)) | (1 << (self::WRAPPER - 2113)) | (1 << (self::WRITE - 2113)) | (1 << (self::XDB_FASTPATH_INSERT - 2113)) | (1 << (self::X_DYN_PRUNE - 2113)) | (1 << (self::XID - 2113)) | (1 << (self::XML2OBJECT - 2113)) | (1 << (self::XMLAGG - 2113)) | (1 << (self::XMLATTRIBUTES - 2113)) | (1 << (self::XMLCAST - 2113)) | (1 << (self::XMLCDATA - 2113)) | (1 << (self::XMLCOLATTVAL - 2113)) | (1 << (self::XMLCOMMENT - 2113)) | (1 << (self::XMLCONCAT - 2113)) | (1 << (self::XMLDIFF - 2113)) | (1 << (self::XML_DML_RWT_STMT - 2113)) | (1 << (self::XMLELEMENT - 2113)) | (1 << (self::XMLEXISTS2 - 2113)) | (1 << (self::XMLEXISTS - 2113)) | (1 << (self::XMLFOREST - 2113)) | (1 << (self::XMLINDEX_REWRITE_IN_SELECT - 2113)) | (1 << (self::XMLINDEX_REWRITE - 2113)) | (1 << (self::XMLINDEX_SEL_IDX_TBL - 2113)) | (1 << (self::XMLISNODE - 2113)) | (1 << (self::XMLISVALID - 2113)) | (1 << (self::XMLNAMESPACES - 2113)) | (1 << (self::XMLPARSE - 2113)) | (1 << (self::XMLPATCH - 2113)) | (1 << (self::XMLPI - 2113)) | (1 << (self::XMLQUERYVAL - 2113)) | (1 << (self::XMLQUERY - 2113)) | (1 << (self::XMLROOT - 2113)) | (1 << (self::XMLSCHEMA - 2113)) | (1 << (self::XMLSERIALIZE - 2113)) | (1 << (self::XMLTABLE - 2113)) | (1 << (self::XMLTRANSFORMBLOB - 2113)) | (1 << (self::XMLTRANSFORM - 2113)) | (1 << (self::XMLTYPE - 2113)) | (1 << (self::XML - 2113)) | (1 << (self::XPATHTABLE - 2113)) | (1 << (self::XS_SYS_CONTEXT - 2113)) | (1 << (self::XS - 2113)) | (1 << (self::YEARS - 2113)) | (1 << (self::YEAR - 2113)) | (1 << (self::YES - 2113)) | (1 << (self::YMINTERVAL_UNCONSTRAINED - 2113)) | (1 << (self::ZONEMAP - 2113)) | (1 << (self::ZONE - 2113)) | (1 << (self::PREDICTION - 2113)) | (1 << (self::PREDICTION_BOUNDS - 2113)) | (1 << (self::PREDICTION_COST - 2113)))) !== 0) || (((($_la - 2177)) & ~0x3f) === 0 && ((1 << ($_la - 2177)) & ((1 << (self::PREDICTION_DETAILS - 2177)) | (1 << (self::PREDICTION_PROBABILITY - 2177)) | (1 << (self::PREDICTION_SET - 2177)) | (1 << (self::CUME_DIST - 2177)) | (1 << (self::DENSE_RANK - 2177)) | (1 << (self::LISTAGG - 2177)) | (1 << (self::PERCENT_RANK - 2177)) | (1 << (self::PERCENTILE_CONT - 2177)) | (1 << (self::PERCENTILE_DISC - 2177)) | (1 << (self::RANK - 2177)) | (1 << (self::AVG - 2177)) | (1 << (self::CORR - 2177)) | (1 << (self::COVAR_ - 2177)) | (1 << (self::LAG - 2177)) | (1 << (self::LEAD - 2177)) | (1 << (self::MAX - 2177)) | (1 << (self::MEDIAN - 2177)) | (1 << (self::MIN - 2177)) | (1 << (self::NTILE - 2177)) | (1 << (self::NVL - 2177)) | (1 << (self::RATIO_TO_REPORT - 2177)) | (1 << (self::REGR_ - 2177)) | (1 << (self::ROUND - 2177)) | (1 << (self::ROW_NUMBER - 2177)) | (1 << (self::SUBSTR - 2177)) | (1 << (self::TO_CHAR - 2177)) | (1 << (self::TRIM - 2177)) | (1 << (self::SUM - 2177)) | (1 << (self::STDDEV - 2177)) | (1 << (self::VAR_ - 2177)) | (1 << (self::VARIANCE - 2177)) | (1 << (self::LEAST - 2177)) | (1 << (self::GREATEST - 2177)) | (1 << (self::TO_DATE - 2177)) | (1 << (self::PERIOD - 2177)) | (1 << (self::DELIMITED_ID - 2177)))) !== 0) || $_la === self::INTRODUCER || $_la === self::REGULAR_ID) {
                $this->setState(3772);
                $this->tableview_name();
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
    public function partition_key_value(): Context\Partition_key_valueContext
    {
        $localContext = new Context\Partition_key_valueContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 316, self::RULE_partition_key_value);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3775);
            $this->literal();
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
    public function subpartition_key_value(): Context\Subpartition_key_valueContext
    {
        $localContext = new Context\Subpartition_key_valueContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 318, self::RULE_subpartition_key_value);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3777);
            $this->literal();
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
    public function associate_statistics(): Context\Associate_statisticsContext
    {
        $localContext = new Context\Associate_statisticsContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 320, self::RULE_associate_statistics);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3779);
            $this->match(self::ASSOCIATE);
            $this->setState(3780);
            $this->match(self::STATISTICS);
            $this->setState(3781);
            $this->match(self::WITH);
            $this->setState(3784);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::COLUMNS:
                    $this->setState(3782);
                    $this->column_association();
                    break;

                case self::FUNCTIONS:
                case self::INDEXES:
                case self::INDEXTYPES:
                case self::PACKAGES:
                case self::TYPES:
                    $this->setState(3783);
                    $this->function_association();
                    break;

                default:
                    throw new NoViableAltException($this);
            }
            $this->setState(3787);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::WITH) {
                $this->setState(3786);
                $this->storage_table_clause();
            }
            $this->setState(3789);
            $this->match(self::SEMICOLON);
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
    public function column_association(): Context\Column_associationContext
    {
        $localContext = new Context\Column_associationContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 322, self::RULE_column_association);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3791);
            $this->match(self::COLUMNS);
            $this->setState(3792);
            $this->tableview_name();
            $this->setState(3793);
            $this->match(self::PERIOD);
            $this->setState(3794);
            $this->column_name();
            $this->setState(3802);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while ($_la === self::COMMA) {
                $this->setState(3795);
                $this->match(self::COMMA);
                $this->setState(3796);
                $this->tableview_name();
                $this->setState(3797);
                $this->match(self::PERIOD);
                $this->setState(3798);
                $this->column_name();
                $this->setState(3804);
                $this->errorHandler->sync($this);
                $_la = $this->input->LA(1);
            }
            $this->setState(3805);
            $this->using_statistics_type();
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
    public function function_association(): Context\Function_associationContext
    {
        $localContext = new Context\Function_associationContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 324, self::RULE_function_association);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3852);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::FUNCTIONS:
                    $this->setState(3807);
                    $this->match(self::FUNCTIONS);
                    $this->setState(3808);
                    $this->function_name();
                    $this->setState(3813);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3809);
                        $this->match(self::COMMA);
                        $this->setState(3810);
                        $this->function_name();
                        $this->setState(3815);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    break;

                case self::PACKAGES:
                    $this->setState(3816);
                    $this->match(self::PACKAGES);
                    $this->setState(3817);
                    $this->package_name();
                    $this->setState(3822);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3818);
                        $this->match(self::COMMA);
                        $this->setState(3819);
                        $this->package_name();
                        $this->setState(3824);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    break;

                case self::TYPES:
                    $this->setState(3825);
                    $this->match(self::TYPES);
                    $this->setState(3826);
                    $this->type_name();
                    $this->setState(3831);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3827);
                        $this->match(self::COMMA);
                        $this->setState(3828);
                        $this->type_name();
                        $this->setState(3833);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    break;

                case self::INDEXES:
                    $this->setState(3834);
                    $this->match(self::INDEXES);
                    $this->setState(3835);
                    $this->index_name();
                    $this->setState(3840);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3836);
                        $this->match(self::COMMA);
                        $this->setState(3837);
                        $this->index_name();
                        $this->setState(3842);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    break;

                case self::INDEXTYPES:
                    $this->setState(3843);
                    $this->match(self::INDEXTYPES);
                    $this->setState(3844);
                    $this->indextype_name();
                    $this->setState(3849);
                    $this->errorHandler->sync($this);

                    $_la = $this->input->LA(1);
                    while ($_la === self::COMMA) {
                        $this->setState(3845);
                        $this->match(self::COMMA);
                        $this->setState(3846);
                        $this->indextype_name();
                        $this->setState(3851);
                        $this->errorHandler->sync($this);
                        $_la = $this->input->LA(1);
                    }
                    break;

                default:
                    throw new NoViableAltException($this);
            }
            $this->setState(3865);
            $this->errorHandler->sync($this);

            switch ($this->getInterpreter()->adaptivePredict($this->input, 349, $this->ctx)) {
                case 1:
                    $this->setState(3854);
                    $this->using_statistics_type();
                    break;

                case 2:
                    $this->setState(3855);
                    $this->default_cost_clause();
                    $this->setState(3858);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::COMMA) {
                        $this->setState(3856);
                        $this->match(self::COMMA);
                        $this->setState(3857);
                        $this->default_selectivity_clause();
                    }
                    break;

                case 3:
                    $this->setState(3860);
                    $this->default_selectivity_clause();
                    $this->setState(3863);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);

                    if ($_la === self::COMMA) {
                        $this->setState(3861);
                        $this->match(self::COMMA);
                        $this->setState(3862);
                        $this->default_cost_clause();
                    }
                    break;
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
    public function indextype_name(): Context\Indextype_nameContext
    {
        $localContext = new Context\Indextype_nameContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 326, self::RULE_indextype_name);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3867);
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
    public function using_statistics_type(): Context\Using_statistics_typeContext
    {
        $localContext = new Context\Using_statistics_typeContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 328, self::RULE_using_statistics_type);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3869);
            $this->match(self::USING);
            $this->setState(3872);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::ABORT:
                case self::ABS:
                case self::ACCESS:
                case self::ACCESSED:
                case self::ACCOUNT:
                case self::ACL:
                case self::ACOS:
                case self::ACTION:
                case self::ACTIONS:
                case self::ACTIVATE:
                case self::ACTIVE:
                case self::ACTIVE_COMPONENT:
                case self::ACTIVE_DATA:
                case self::ACTIVE_FUNCTION:
                case self::ACTIVE_TAG:
                case self::ACTIVITY:
                case self::ADAPTIVE_PLAN:
                case self::ADD:
                case self::ADD_COLUMN:
                case self::ADD_GROUP:
                case self::ADD_MONTHS:
                case self::ADJ_DATE:
                case self::ADMIN:
                case self::ADMINISTER:
                case self::ADMINISTRATOR:
                case self::ADVANCED:
                case self::ADVISE:
                case self::ADVISOR:
                case self::AFD_DISKSTRING:
                case self::AFTER:
                case self::AGENT:
                case self::AGGREGATE:
                case self::A_LETTER:
                case self::ALIAS:
                case self::ALLOCATE:
                case self::ALLOW:
                case self::ALL_ROWS:
                case self::ALWAYS:
                case self::ANALYZE:
                case self::ANCILLARY:
                case self::AND_EQUAL:
                case self::ANOMALY:
                case self::ANSI_REARCH:
                case self::ANTIJOIN:
                case self::ANYSCHEMA:
                case self::APPEND:
                case self::APPENDCHILDXML:
                case self::APPEND_VALUES:
                case self::APPLICATION:
                case self::APPLY:
                case self::APPROX_COUNT_DISTINCT:
                case self::ARCHIVAL:
                case self::ARCHIVE:
                case self::ARCHIVED:
                case self::ARCHIVELOG:
                case self::ARRAY:
                case self::ASCII:
                case self::ASCIISTR:
                case self::ASIN:
                case self::ASIS:
                case self::ASSEMBLY:
                case self::ASSIGN:
                case self::ASSOCIATE:
                case self::ASYNC:
                case self::ASYNCHRONOUS:
                case self::ATAN2:
                case self::ATAN:
                case self::AT:
                case self::ATTRIBUTE:
                case self::ATTRIBUTES:
                case self::AUTHENTICATED:
                case self::AUTHENTICATION:
                case self::AUTHID:
                case self::AUTHORIZATION:
                case self::AUTOALLOCATE:
                case self::AUTO:
                case self::AUTOEXTEND:
                case self::AUTO_LOGIN:
                case self::AUTOMATIC:
                case self::AUTONOMOUS_TRANSACTION:
                case self::AUTO_REOPTIMIZE:
                case self::AVAILABILITY:
                case self::AVRO:
                case self::BACKGROUND:
                case self::BACKUP:
                case self::BASIC:
                case self::BASICFILE:
                case self::BATCH:
                case self::BATCHSIZE:
                case self::BATCH_TABLE_ACCESS_BY_ROWID:
                case self::BECOME:
                case self::BEFORE:
                case self::BEGIN:
                case self::BEGINNING:
                case self::BEGIN_OUTLINE_DATA:
                case self::BEHALF:
                case self::BEQUEATH:
                case self::BFILE:
                case self::BFILENAME:
                case self::BIGFILE:
                case self::BINARY:
                case self::BINARY_DOUBLE:
                case self::BINARY_DOUBLE_INFINITY:
                case self::BINARY_DOUBLE_NAN:
                case self::BINARY_FLOAT:
                case self::BINARY_FLOAT_INFINITY:
                case self::BINARY_FLOAT_NAN:
                case self::BINARY_INTEGER:
                case self::BIND_AWARE:
                case self::BINDING:
                case self::BIN_TO_NUM:
                case self::BITAND:
                case self::BITMAP_AND:
                case self::BITMAP:
                case self::BITMAPS:
                case self::BITMAP_TREE:
                case self::BITS:
                case self::BLOB:
                case self::BLOCK:
                case self::BLOCK_RANGE:
                case self::BLOCKS:
                case self::BLOCKSIZE:
                case self::BODY:
                case self::BOOLEAN:
                case self::BOTH:
                case self::BOUND:
                case self::BRANCH:
                case self::BREADTH:
                case self::BROADCAST:
                case self::BSON:
                case self::BUFFER:
                case self::BUFFER_CACHE:
                case self::BUFFER_POOL:
                case self::BUILD:
                case self::BULK:
                case self::BYPASS_RECURSIVE_CHECK:
                case self::BYPASS_UJVC:
                case self::BYTE:
                case self::CACHE:
                case self::CACHE_CB:
                case self::CACHE_INSTANCES:
                case self::CACHE_TEMP_TABLE:
                case self::CACHING:
                case self::CALCULATED:
                case self::CALLBACK:
                case self::CALL:
                case self::CANCEL:
                case self::CAPACITY:
                case self::CARDINALITY:
                case self::CASCADE:
                case self::CASE:
                case self::CAST:
                case self::CATEGORY:
                case self::CDBDEFAULT:
                case self::CEIL:
                case self::CELL_FLASH_CACHE:
                case self::CERTIFICATE:
                case self::CFILE:
                case self::CHAINED:
                case self::CHANGE:
                case self::CHANGE_DUPKEY_ERROR_INDEX:
                case self::CHARACTER:
                case self::CHAR:
                case self::CHAR_CS:
                case self::CHARTOROWID:
                case self::CHECK_ACL_REWRITE:
                case self::CHECKPOINT:
                case self::CHILD:
                case self::CHOOSE:
                case self::CHR:
                case self::CHUNK:
                case self::CLASS:
                case self::CLASSIFIER:
                case self::CLEANUP:
                case self::CLEAR:
                case self::C_LETTER:
                case self::CLIENT:
                case self::CLOB:
                case self::CLONE:
                case self::CLOSE_CACHED_OPEN_CURSORS:
                case self::CLOSE:
                case self::CLUSTER_BY_ROWID:
                case self::CLUSTER:
                case self::CLUSTER_DETAILS:
                case self::CLUSTER_DISTANCE:
                case self::CLUSTER_ID:
                case self::CLUSTERING:
                case self::CLUSTERING_FACTOR:
                case self::CLUSTER_PROBABILITY:
                case self::CLUSTER_SET:
                case self::COALESCE:
                case self::COALESCE_SQ:
                case self::COARSE:
                case self::CO_AUTH_IND:
                case self::COLD:
                case self::COLLECT:
                case self::COLUMNAR:
                case self::COLUMN_AUTH_INDICATOR:
                case self::COLUMN:
                case self::COLUMNS:
                case self::COLUMN_STATS:
                case self::COLUMN_VALUE:
                case self::COMMENT:
                case self::COMMIT:
                case self::COMMITTED:
                case self::COMMON_DATA:
                case self::COMPACT:
                case self::COMPATIBILITY:
                case self::COMPILE:
                case self::COMPLETE:
                case self::COMPLIANCE:
                case self::COMPONENT:
                case self::COMPONENTS:
                case self::COMPOSE:
                case self::COMPOSITE:
                case self::COMPOSITE_LIMIT:
                case self::COMPOUND:
                case self::COMPUTE:
                case self::CONCAT:
                case self::CON_DBID_TO_ID:
                case self::CONDITIONAL:
                case self::CONDITION:
                case self::CONFIRM:
                case self::CONFORMING:
                case self::CON_GUID_TO_ID:
                case self::CON_ID:
                case self::CON_NAME_TO_ID:
                case self::CONNECT_BY_CB_WHR_ONLY:
                case self::CONNECT_BY_COMBINE_SW:
                case self::CONNECT_BY_COST_BASED:
                case self::CONNECT_BY_ELIM_DUPS:
                case self::CONNECT_BY_FILTERING:
                case self::CONNECT_BY_ISCYCLE:
                case self::CONNECT_BY_ISLEAF:
                case self::CONNECT_BY_ROOT:
                case self::CONNECT_TIME:
                case self::CONSIDER:
                case self::CONSISTENT:
                case self::CONSTANT:
                case self::CONST:
                case self::CONSTRAINT:
                case self::CONSTRAINTS:
                case self::CONSTRUCTOR:
                case self::CONTAINER:
                case self::CONTAINER_DATA:
                case self::CONTAINERS:
                case self::CONTENT:
                case self::CONTENTS:
                case self::CONTEXT:
                case self::CONTINUE:
                case self::CONTROLFILE:
                case self::CON_UID_TO_ID:
                case self::CONVERT:
                case self::COOKIE:
                case self::COPY:
                case self::CORR_K:
                case self::CORR_S:
                case self::CORRUPTION:
                case self::CORRUPT_XID_ALL:
                case self::CORRUPT_XID:
                case self::COS:
                case self::COSH:
                case self::COST:
                case self::COST_XML_QUERY_REWRITE:
                case self::COUNT:
                case self::COVAR_POP:
                case self::COVAR_SAMP:
                case self::CPU_COSTING:
                case self::CPU_PER_CALL:
                case self::CPU_PER_SESSION:
                case self::CRASH:
                case self::CREATE_FILE_DEST:
                case self::CREATE_STORED_OUTLINES:
                case self::CREATION:
                case self::CREDENTIAL:
                case self::CRITICAL:
                case self::CROSS:
                case self::CROSSEDITION:
                case self::CSCONVERT:
                case self::CUBE_AJ:
                case self::CUBE:
                case self::CUBE_GB:
                case self::CUBE_SJ:
                case self::CUME_DISTM:
                case self::CURRENT:
                case self::CURRENT_DATE:
                case self::CURRENT_SCHEMA:
                case self::CURRENT_TIME:
                case self::CURRENT_TIMESTAMP:
                case self::CURRENT_USER:
                case self::CURRENTV:
                case self::CURSOR:
                case self::CURSOR_SHARING_EXACT:
                case self::CURSOR_SPECIFIC_SEGMENT:
                case self::CUSTOMDATUM:
                case self::CV:
                case self::CYCLE:
                case self::DANGLING:
                case self::DATABASE:
                case self::DATA:
                case self::DATAFILE:
                case self::DATAFILES:
                case self::DATAMOVEMENT:
                case self::DATAOBJNO:
                case self::DATAOBJ_TO_MAT_PARTITION:
                case self::DATAOBJ_TO_PARTITION:
                case self::DATAPUMP:
                case self::DATA_SECURITY_REWRITE_LIMIT:
                case self::DATE_MODE:
                case self::DAY:
                case self::DAYS:
                case self::DBA:
                case self::DBA_RECYCLEBIN:
                case self::DBMS_STATS:
                case self::DB_ROLE_CHANGE:
                case self::DBTIMEZONE:
                case self::DB_UNIQUE_NAME:
                case self::DB_VERSION:
                case self::DDL:
                case self::DEALLOCATE:
                case self::DEBUG:
                case self::DEBUGGER:
                case self::DEC:
                case self::DECIMAL:
                case self::DECLARE:
                case self::DECOMPOSE:
                case self::DECORRELATE:
                case self::DECR:
                case self::DECREMENT:
                case self::DECRYPT:
                case self::DEDUPLICATE:
                case self::DEFAULTS:
                case self::DEFERRABLE:
                case self::DEFERRED:
                case self::DEFINED:
                case self::DEFINE:
                case self::DEFINER:
                case self::DEGREE:
                case self::DELAY:
                case self::DELEGATE:
                case self::DELETE_ALL:
                case self::DELETE:
                case self::DELETEXML:
                case self::DEMAND:
                case self::DENSE_RANKM:
                case self::DEPENDENT:
                case self::DEPTH:
                case self::DEQUEUE:
                case self::DEREF:
                case self::DEREF_NO_REWRITE:
                case self::DESTROY:
                case self::DETACHED:
                case self::DETERMINES:
                case self::DETERMINISTIC:
                case self::DICTIONARY:
                case self::DIMENSION:
                case self::DIMENSIONS:
                case self::DIRECT_LOAD:
                case self::DIRECTORY:
                case self::DIRECT_PATH:
                case self::DISABLE_ALL:
                case self::DISABLE:
                case self::DISABLE_PARALLEL_DML:
                case self::DISABLE_PRESET:
                case self::DISABLE_RPKE:
                case self::DISALLOW:
                case self::DISASSOCIATE:
                case self::DISCARD:
                case self::DISCONNECT:
                case self::DISK:
                case self::DISKGROUP:
                case self::DISKS:
                case self::DISMOUNT:
                case self::DISTINGUISHED:
                case self::DISTRIBUTED:
                case self::DISTRIBUTE:
                case self::DML:
                case self::DML_UPDATE:
                case self::DOCFIDELITY:
                case self::DOCUMENT:
                case self::DOMAIN_INDEX_FILTER:
                case self::DOMAIN_INDEX_NO_SORT:
                case self::DOMAIN_INDEX_SORT:
                case self::DOUBLE:
                case self::DOWNGRADE:
                case self::DRIVING_SITE:
                case self::DROP_COLUMN:
                case self::DROP_GROUP:
                case self::DSINTERVAL_UNCONSTRAINED:
                case self::DST_UPGRADE_INSERT_CONV:
                case self::DUMP:
                case self::DUPLICATE:
                case self::DV:
                case self::DYNAMIC:
                case self::DYNAMIC_SAMPLING:
                case self::DYNAMIC_SAMPLING_EST_CDN:
                case self::EACH:
                case self::EDITIONABLE:
                case self::EDITION:
                case self::EDITIONING:
                case self::EDITIONS:
                case self::ELEMENT:
                case self::ELIM_GROUPBY:
                case self::ELIMINATE_JOIN:
                case self::ELIMINATE_OBY:
                case self::ELIMINATE_OUTER_JOIN:
                case self::EM:
                case self::EMPTY_BLOB:
                case self::EMPTY_CLOB:
                case self::EMPTY:
                case self::ENABLE_ALL:
                case self::ENABLE:
                case self::ENABLE_PARALLEL_DML:
                case self::ENABLE_PRESET:
                case self::ENCODING:
                case self::ENCRYPT:
                case self::ENCRYPTION:
                case self::END_OUTLINE_DATA:
                case self::ENFORCED:
                case self::ENFORCE:
                case self::ENQUEUE:
                case self::ENTERPRISE:
                case self::ENTITYESCAPING:
                case self::ENTRY:
                case self::EQUIPART:
                case self::ERR:
                case self::ERROR_ARGUMENT:
                case self::ERROR:
                case self::ERROR_ON_OVERLAP_TIME:
                case self::ERRORS:
                case self::ESCAPE:
                case self::ESTIMATE:
                case self::EVAL:
                case self::EVALNAME:
                case self::EVALUATE:
                case self::EVALUATION:
                case self::EVENTS:
                case self::EVERY:
                case self::EXCEPT:
                case self::EXCEPTION:
                case self::EXCEPTION_INIT:
                case self::EXCEPTIONS:
                case self::EXCHANGE:
                case self::EXCLUDE:
                case self::EXCLUDING:
                case self::EXECUTE:
                case self::EXEMPT:
                case self::EXISTING:
                case self::EXISTS:
                case self::EXISTSNODE:
                case self::EXIT:
                case self::EXPAND_GSET_TO_UNION:
                case self::EXPAND_TABLE:
                case self::EXP:
                case self::EXPIRE:
                case self::EXPLAIN:
                case self::EXPLOSION:
                case self::EXPORT:
                case self::EXPR_CORR_CHECK:
                case self::EXPRESS:
                case self::EXTENDS:
                case self::EXTENT:
                case self::EXTENTS:
                case self::EXTERNAL:
                case self::EXTERNALLY:
                case self::EXTRACTCLOBXML:
                case self::EXTRACT:
                case self::EXTRACTVALUE:
                case self::EXTRA:
                case self::FACILITY:
                case self::FACT:
                case self::FACTOR:
                case self::FACTORIZE_JOIN:
                case self::FAILED:
                case self::FAILED_LOGIN_ATTEMPTS:
                case self::FAILGROUP:
                case self::FAILOVER:
                case self::FAILURE:
                case self::FALSE:
                case self::FAMILY:
                case self::FAR:
                case self::FAST:
                case self::FASTSTART:
                case self::FBTSCAN:
                case self::FEATURE_DETAILS:
                case self::FEATURE_ID:
                case self::FEATURE_SET:
                case self::FEATURE_VALUE:
                case self::FETCH:
                case self::FILE:
                case self::FILE_NAME_CONVERT:
                case self::FILESYSTEM_LIKE_LOGGING:
                case self::FILTER:
                case self::FINAL:
                case self::FINE:
                case self::FINISH:
                case self::FIRST:
                case self::FIRSTM:
                case self::FIRST_ROWS:
                case self::FIRST_VALUE:
                case self::FIXED_VIEW_DATA:
                case self::FLAGGER:
                case self::FLASHBACK:
                case self::FLASH_CACHE:
                case self::FLOAT:
                case self::FLOB:
                case self::FLOOR:
                case self::FLUSH:
                case self::FOLDER:
                case self::FOLLOWING:
                case self::FOLLOWS:
                case self::FORALL:
                case self::FORCE:
                case self::FORCE_XML_QUERY_REWRITE:
                case self::FOREIGN:
                case self::FOREVER:
                case self::FORMAT:
                case self::FORWARD:
                case self::FRAGMENT_NUMBER:
                case self::FREELIST:
                case self::FREELISTS:
                case self::FREEPOOLS:
                case self::FRESH:
                case self::FROM_TZ:
                case self::FULL:
                case self::FULL_OUTER_JOIN_TO_OUTER:
                case self::FUNCTION:
                case self::FUNCTIONS:
                case self::GATHER_OPTIMIZER_STATISTICS:
                case self::GATHER_PLAN_STATISTICS:
                case self::GBY_CONC_ROLLUP:
                case self::GBY_PUSHDOWN:
                case self::GENERATED:
                case self::GET:
                case self::GLOBAL:
                case self::GLOBALLY:
                case self::GLOBAL_NAME:
                case self::GLOBAL_TOPIC_ENABLED:
                case self::GROUP_BY:
                case self::GROUP_ID:
                case self::GROUPING:
                case self::GROUPING_ID:
                case self::GROUPS:
                case self::GUARANTEED:
                case self::GUARANTEE:
                case self::GUARD:
                case self::HASH_AJ:
                case self::HASH:
                case self::HASHKEYS:
                case self::HASH_SJ:
                case self::HEADER:
                case self::HEAP:
                case self::HELP:
                case self::HEXTORAW:
                case self::HEXTOREF:
                case self::HIDDEN_KEYWORD:
                case self::HIDE:
                case self::HIERARCHY:
                case self::HIGH:
                case self::HINTSET_BEGIN:
                case self::HINTSET_END:
                case self::HOT:
                case self::HOUR:
                case self::HWM_BROKERED:
                case self::HYBRID:
                case self::IDENTIFIER:
                case self::IDENTITY:
                case self::IDGENERATORS:
                case self::ID:
                case self::IDLE_TIME:
                case self::IF:
                case self::IGNORE:
                case self::IGNORE_OPTIM_EMBEDDED_HINTS:
                case self::IGNORE_ROW_ON_DUPKEY_INDEX:
                case self::IGNORE_WHERE_CLAUSE:
                case self::ILM:
                case self::IMMEDIATE:
                case self::IMPACT:
                case self::IMPORT:
                case self::INACTIVE:
                case self::INCLUDE:
                case self::INCLUDE_VERSION:
                case self::INCLUDING:
                case self::INCREMENTAL:
                case self::INCREMENT:
                case self::INCR:
                case self::INDENT:
                case self::INDEX_ASC:
                case self::INDEX_COMBINE:
                case self::INDEX_DESC:
                case self::INDEXED:
                case self::INDEXES:
                case self::INDEX_FFS:
                case self::INDEX_FILTER:
                case self::INDEXING:
                case self::INDEX_JOIN:
                case self::INDEX_ROWS:
                case self::INDEX_RRS:
                case self::INDEX_RS_ASC:
                case self::INDEX_RS_DESC:
                case self::INDEX_RS:
                case self::INDEX_SCAN:
                case self::INDEX_SKIP_SCAN:
                case self::INDEX_SS_ASC:
                case self::INDEX_SS_DESC:
                case self::INDEX_SS:
                case self::INDEX_STATS:
                case self::INDEXTYPE:
                case self::INDEXTYPES:
                case self::INDICATOR:
                case self::INDICES:
                case self::INFINITE:
                case self::INFORMATIONAL:
                case self::INHERIT:
                case self::INITCAP:
                case self::INITIAL:
                case self::INITIALIZED:
                case self::INITIALLY:
                case self::INITRANS:
                case self::INLINE:
                case self::INLINE_XMLTYPE_NT:
                case self::INMEMORY:
                case self::IN_MEMORY_METADATA:
                case self::INMEMORY_PRUNING:
                case self::INNER:
                case self::INOUT:
                case self::INPLACE:
                case self::INSERTCHILDXMLAFTER:
                case self::INSERTCHILDXMLBEFORE:
                case self::INSERTCHILDXML:
                case self::INSERTXMLAFTER:
                case self::INSERTXMLBEFORE:
                case self::INSTANCE:
                case self::INSTANCES:
                case self::INSTANTIABLE:
                case self::INSTANTLY:
                case self::INSTEAD:
                case self::INSTR2:
                case self::INSTR4:
                case self::INSTRB:
                case self::INSTRC:
                case self::INSTR:
                case self::INTEGER:
                case self::INTERLEAVED:
                case self::INTERMEDIATE:
                case self::INTERNAL_CONVERT:
                case self::INTERNAL_USE:
                case self::INTERPRETED:
                case self::INTERVAL:
                case self::INT:
                case self::INVALIDATE:
                case self::INVISIBLE:
                case self::IN_XQUERY:
                case self::ISOLATION:
                case self::ISOLATION_LEVEL:
                case self::ITERATE:
                case self::ITERATION_NUMBER:
                case self::JAVA:
                case self::JOB:
                case self::JOIN:
                case self::JSON_ARRAYAGG:
                case self::JSON_ARRAY:
                case self::JSON_EQUAL:
                case self::JSON_EXISTS2:
                case self::JSON_EXISTS:
                case self::JSONGET:
                case self::JSON:
                case self::JSON_OBJECTAGG:
                case self::JSON_OBJECT:
                case self::JSONPARSE:
                case self::JSON_QUERY:
                case self::JSON_SERIALIZE:
                case self::JSON_TABLE:
                case self::JSON_TEXTCONTAINS2:
                case self::JSON_TEXTCONTAINS:
                case self::JSON_VALUE:
                case self::KEEP_DUPLICATES:
                case self::KEEP:
                case self::KERBEROS:
                case self::KEY:
                case self::KEY_LENGTH:
                case self::KEYSIZE:
                case self::KEYS:
                case self::KEYSTORE:
                case self::KILL:
                case self::LABEL:
                case self::LANGUAGE:
                case self::LAST_DAY:
                case self::LAST:
                case self::LAST_VALUE:
                case self::LATERAL:
                case self::LAX:
                case self::LAYER:
                case self::LDAP_REGISTRATION_ENABLED:
                case self::LDAP_REGISTRATION:
                case self::LDAP_REG_SYNC_INTERVAL:
                case self::LEADING:
                case self::LEFT:
                case self::LENGTH2:
                case self::LENGTH4:
                case self::LENGTHB:
                case self::LENGTHC:
                case self::LENGTH:
                case self::LESS:
                case self::LEVEL:
                case self::LEVELS:
                case self::LIBRARY:
                case self::LIFECYCLE:
                case self::LIFE:
                case self::LIFETIME:
                case self::LIKE2:
                case self::LIKE4:
                case self::LIKEC:
                case self::LIKE_EXPAND:
                case self::LIMIT:
                case self::LINEAR:
                case self::LINK:
                case self::LIST:
                case self::LN:
                case self::LNNVL:
                case self::LOAD:
                case self::LOB:
                case self::LOBNVL:
                case self::LOBS:
                case self::LOCAL_INDEXES:
                case self::LOCAL:
                case self::LOCALTIME:
                case self::LOCALTIMESTAMP:
                case self::LOCATION:
                case self::LOCATOR:
                case self::LOCKED:
                case self::LOCKING:
                case self::LOGFILE:
                case self::LOGFILES:
                case self::LOGGING:
                case self::LOGICAL:
                case self::LOGICAL_READS_PER_CALL:
                case self::LOGICAL_READS_PER_SESSION:
                case self::LOG:
                case self::LOGMINING:
                case self::LOGOFF:
                case self::LOGON:
                case self::LOG_READ_ONLY_VIOLATIONS:
                case self::LONG:
                case self::LOOP:
                case self::LOWER:
                case self::LOW:
                case self::LPAD:
                case self::LTRIM:
                case self::MAIN:
                case self::MAKE_REF:
                case self::MANAGED:
                case self::MANAGE:
                case self::MANAGEMENT:
                case self::MANAGER:
                case self::MANUAL:
                case self::MAP:
                case self::MAPPING:
                case self::MASTER:
                case self::MATCHED:
                case self::MATCHES:
                case self::MATCH:
                case self::MATCH_NUMBER:
                case self::MATCH_RECOGNIZE:
                case self::MATERIALIZED:
                case self::MATERIALIZE:
                case self::MAXARCHLOGS:
                case self::MAXDATAFILES:
                case self::MAXEXTENTS:
                case self::MAXIMIZE:
                case self::MAXINSTANCES:
                case self::MAXLOGFILES:
                case self::MAXLOGHISTORY:
                case self::MAXLOGMEMBERS:
                case self::MAX_SHARED_TEMP_SIZE:
                case self::MAXSIZE:
                case self::MAXTRANS:
                case self::MAXVALUE:
                case self::MEASURE:
                case self::MEASURES:
                case self::MEDIUM:
                case self::MEMBER:
                case self::MEMCOMPRESS:
                case self::MEMORY:
                case self::MERGEACTIONS:
                case self::MERGE_AJ:
                case self::MERGE_CONST_ON:
                case self::MERGE:
                case self::MERGE_SJ:
                case self::METADATA:
                case self::METHOD:
                case self::MIGRATE:
                case self::MIGRATION:
                case self::MINEXTENTS:
                case self::MINIMIZE:
                case self::MINIMUM:
                case self::MINING:
                case self::MINUS_NULL:
                case self::MINUTE:
                case self::MINVALUE:
                case self::MIRRORCOLD:
                case self::MIRRORHOT:
                case self::MIRROR:
                case self::MLSLABEL:
                case self::MODEL_COMPILE_SUBQUERY:
                case self::MODEL_DONTVERIFY_UNIQUENESS:
                case self::MODEL_DYNAMIC_SUBQUERY:
                case self::MODEL_MIN_ANALYSIS:
                case self::MODEL:
                case self::MODEL_NB:
                case self::MODEL_NO_ANALYSIS:
                case self::MODEL_PBY:
                case self::MODEL_PUSH_REF:
                case self::MODEL_SV:
                case self::MODIFICATION:
                case self::MODIFY_COLUMN_TYPE:
                case self::MODIFY:
                case self::MOD:
                case self::MODULE:
                case self::MONITORING:
                case self::MONITOR:
                case self::MONTH:
                case self::MONTHS_BETWEEN:
                case self::MONTHS:
                case self::MOUNT:
                case self::MOUNTPATH:
                case self::MOVEMENT:
                case self::MOVE:
                case self::MULTIDIMENSIONAL:
                case self::MULTISET:
                case self::MV_MERGE:
                case self::NAMED:
                case self::NAME:
                case self::NAMESPACE:
                case self::NAN:
                case self::NANVL:
                case self::NATIONAL:
                case self::NATIVE_FULL_OUTER_JOIN:
                case self::NATIVE:
                case self::NATURAL:
                case self::NAV:
                case self::NCHAR_CS:
                case self::NCHAR:
                case self::NCHR:
                case self::NCLOB:
                case self::NEEDED:
                case self::NEG:
                case self::NESTED:
                case self::NESTED_TABLE_FAST_INSERT:
                case self::NESTED_TABLE_GET_REFS:
                case self::NESTED_TABLE_ID:
                case self::NESTED_TABLE_SET_REFS:
                case self::NESTED_TABLE_SET_SETID:
                case self::NETWORK:
                case self::NEVER:
                case self::NEW:
                case self::NEW_TIME:
                case self::NEXT_DAY:
                case self::NEXT:
                case self::NL_AJ:
                case self::NLJ_BATCHING:
                case self::NLJ_INDEX_FILTER:
                case self::NLJ_INDEX_SCAN:
                case self::NLJ_PREFETCH:
                case self::NLS_CALENDAR:
                case self::NLS_CHARACTERSET:
                case self::NLS_CHARSET_DECL_LEN:
                case self::NLS_CHARSET_ID:
                case self::NLS_CHARSET_NAME:
                case self::NLS_COMP:
                case self::NLS_CURRENCY:
                case self::NLS_DATE_FORMAT:
                case self::NLS_DATE_LANGUAGE:
                case self::NLS_INITCAP:
                case self::NLS_ISO_CURRENCY:
                case self::NL_SJ:
                case self::NLS_LANG:
                case self::NLS_LANGUAGE:
                case self::NLS_LENGTH_SEMANTICS:
                case self::NLS_LOWER:
                case self::NLS_NCHAR_CONV_EXCP:
                case self::NLS_NUMERIC_CHARACTERS:
                case self::NLS_SORT:
                case self::NLSSORT:
                case self::NLS_SPECIAL_CHARS:
                case self::NLS_TERRITORY:
                case self::NLS_UPPER:
                case self::NO_ACCESS:
                case self::NO_ADAPTIVE_PLAN:
                case self::NO_ANSI_REARCH:
                case self::NOAPPEND:
                case self::NOARCHIVELOG:
                case self::NOAUDIT:
                case self::NO_AUTO_REOPTIMIZE:
                case self::NO_BASETABLE_MULTIMV_REWRITE:
                case self::NO_BATCH_TABLE_ACCESS_BY_ROWID:
                case self::NO_BIND_AWARE:
                case self::NO_BUFFER:
                case self::NOCACHE:
                case self::NO_CARTESIAN:
                case self::NO_CHECK_ACL_REWRITE:
                case self::NO_CLUSTER_BY_ROWID:
                case self::NO_CLUSTERING:
                case self::NO_COALESCE_SQ:
                case self::NO_COMMON_DATA:
                case self::NO_CONNECT_BY_CB_WHR_ONLY:
                case self::NO_CONNECT_BY_COMBINE_SW:
                case self::NO_CONNECT_BY_COST_BASED:
                case self::NO_CONNECT_BY_ELIM_DUPS:
                case self::NO_CONNECT_BY_FILTERING:
                case self::NOCOPY:
                case self::NO_COST_XML_QUERY_REWRITE:
                case self::NO_CPU_COSTING:
                case self::NOCPU_COSTING:
                case self::NOCYCLE:
                case self::NO_DATA_SECURITY_REWRITE:
                case self::NO_DECORRELATE:
                case self::NODELAY:
                case self::NO_DOMAIN_INDEX_FILTER:
                case self::NO_DST_UPGRADE_INSERT_CONV:
                case self::NO_ELIM_GROUPBY:
                case self::NO_ELIMINATE_JOIN:
                case self::NO_ELIMINATE_OBY:
                case self::NO_ELIMINATE_OUTER_JOIN:
                case self::NOENTITYESCAPING:
                case self::NO_EXPAND_GSET_TO_UNION:
                case self::NO_EXPAND:
                case self::NO_EXPAND_TABLE:
                case self::NO_FACT:
                case self::NO_FACTORIZE_JOIN:
                case self::NO_FILTERING:
                case self::NOFORCE:
                case self::NO_FULL_OUTER_JOIN_TO_OUTER:
                case self::NO_GATHER_OPTIMIZER_STATISTICS:
                case self::NO_GBY_PUSHDOWN:
                case self::NOGUARANTEE:
                case self::NO_INDEX_FFS:
                case self::NO_INDEX:
                case self::NO_INDEX_SS:
                case self::NO_INMEMORY:
                case self::NO_INMEMORY_PRUNING:
                case self::NOKEEP:
                case self::NO_LOAD:
                case self::NOLOCAL:
                case self::NOLOGGING:
                case self::NOMAPPING:
                case self::NOMAXVALUE:
                case self::NO_MERGE:
                case self::NOMINIMIZE:
                case self::NOMINVALUE:
                case self::NO_MODEL_PUSH_REF:
                case self::NO_MONITORING:
                case self::NOMONITORING:
                case self::NO_MONITOR:
                case self::NO_MULTIMV_REWRITE:
                case self::NO_NATIVE_FULL_OUTER_JOIN:
                case self::NONBLOCKING:
                case self::NONEDITIONABLE:
                case self::NONE:
                case self::NO_NLJ_BATCHING:
                case self::NO_NLJ_PREFETCH:
                case self::NO:
                case self::NONSCHEMA:
                case self::NO_OBJECT_LINK:
                case self::NOORDER:
                case self::NO_ORDER_ROLLUPS:
                case self::NO_OUTER_JOIN_TO_ANTI:
                case self::NO_OUTER_JOIN_TO_INNER:
                case self::NOOVERRIDE:
                case self::NO_PARALLEL_INDEX:
                case self::NOPARALLEL_INDEX:
                case self::NO_PARALLEL:
                case self::NOPARALLEL:
                case self::NO_PARTIAL_COMMIT:
                case self::NO_PARTIAL_JOIN:
                case self::NO_PARTIAL_ROLLUP_PUSHDOWN:
                case self::NOPARTITION:
                case self::NO_PLACE_DISTINCT:
                case self::NO_PLACE_GROUP_BY:
                case self::NO_PQ_CONCURRENT_UNION:
                case self::NO_PQ_MAP:
                case self::NO_PQ_REPLICATE:
                case self::NO_PQ_SKEW:
                case self::NO_PRUNE_GSETS:
                case self::NO_PULL_PRED:
                case self::NO_PUSH_PRED:
                case self::NO_PUSH_SUBQ:
                case self::NO_PX_FAULT_TOLERANCE:
                case self::NO_PX_JOIN_FILTER:
                case self::NO_QKN_BUFF:
                case self::NO_QUERY_TRANSFORMATION:
                case self::NO_REF_CASCADE:
                case self::NORELOCATE:
                case self::NORELY:
                case self::NOREPAIR:
                case self::NOREPLAY:
                case self::NORESETLOGS:
                case self::NO_RESULT_CACHE:
                case self::NOREVERSE:
                case self::NO_REWRITE:
                case self::NOREWRITE:
                case self::NORMAL:
                case self::NO_ROOT_SW_FOR_LOCAL:
                case self::NOROWDEPENDENCIES:
                case self::NOSCHEMACHECK:
                case self::NOSEGMENT:
                case self::NO_SEMIJOIN:
                case self::NO_SEMI_TO_INNER:
                case self::NO_SET_TO_JOIN:
                case self::NOSORT:
                case self::NO_SQL_TRANSLATION:
                case self::NO_SQL_TUNE:
                case self::NO_STAR_TRANSFORMATION:
                case self::NO_STATEMENT_QUEUING:
                case self::NO_STATS_GSETS:
                case self::NOSTRICT:
                case self::NO_SUBQUERY_PRUNING:
                case self::NO_SUBSTRB_PAD:
                case self::NO_SWAP_JOIN_INPUTS:
                case self::NOSWITCH:
                case self::NO_TABLE_LOOKUP_BY_NL:
                case self::NO_TEMP_TABLE:
                case self::NOTHING:
                case self::NOTIFICATION:
                case self::NO_TRANSFORM_DISTINCT_AGG:
                case self::NO_UNNEST:
                case self::NO_USE_CUBE:
                case self::NO_USE_HASH_AGGREGATION:
                case self::NO_USE_HASH_GBY_FOR_PUSHDOWN:
                case self::NO_USE_HASH:
                case self::NO_USE_INVISIBLE_INDEXES:
                case self::NO_USE_MERGE:
                case self::NO_USE_NL:
                case self::NO_USE_VECTOR_AGGREGATION:
                case self::NOVALIDATE:
                case self::NO_VECTOR_TRANSFORM_DIMS:
                case self::NO_VECTOR_TRANSFORM_FACT:
                case self::NO_VECTOR_TRANSFORM:
                case self::NO_XDB_FASTPATH_INSERT:
                case self::NO_XML_DML_REWRITE:
                case self::NO_XMLINDEX_REWRITE_IN_SELECT:
                case self::NO_XMLINDEX_REWRITE:
                case self::NO_XML_QUERY_REWRITE:
                case self::NO_ZONEMAP:
                case self::NTH_VALUE:
                case self::NULLIF:
                case self::NULLS:
                case self::NUMBER:
                case self::NUMERIC:
                case self::NUM_INDEX_KEYS:
                case self::NUMTODSINTERVAL:
                case self::NUMTOYMINTERVAL:
                case self::NVARCHAR2:
                case self::NVL2:
                case self::OBJECT2XML:
                case self::OBJECT:
                case self::OBJ_ID:
                case self::OBJNO:
                case self::OBJNO_REUSE:
                case self::OCCURENCES:
                case self::OFFLINE:
                case self::OFF:
                case self::OFFSET:
                case self::OIDINDEX:
                case self::OID:
                case self::OLAP:
                case self::OLD:
                case self::OLD_PUSH_PRED:
                case self::OLS:
                case self::OLTP:
                case self::OMIT:
                case self::ONE:
                case self::ONLINE:
                case self::ONLY:
                case self::OPAQUE:
                case self::OPAQUE_TRANSFORM:
                case self::OPAQUE_XCANONICAL:
                case self::OPCODE:
                case self::OPEN:
                case self::OPERATIONS:
                case self::OPERATOR:
                case self::OPT_ESTIMATE:
                case self::OPTIMAL:
                case self::OPTIMIZE:
                case self::OPTIMIZER_FEATURES_ENABLE:
                case self::OPTIMIZER_GOAL:
                case self::OPT_PARAM:
                case self::ORA_BRANCH:
                case self::ORA_CHECK_ACL:
                case self::ORA_CHECK_PRIVILEGE:
                case self::ORA_CLUSTERING:
                case self::ORADATA:
                case self::ORADEBUG:
                case self::ORA_DST_AFFECTED:
                case self::ORA_DST_CONVERT:
                case self::ORA_DST_ERROR:
                case self::ORA_GET_ACLIDS:
                case self::ORA_GET_PRIVILEGES:
                case self::ORA_HASH:
                case self::ORA_INVOKING_USERID:
                case self::ORA_INVOKING_USER:
                case self::ORA_INVOKING_XS_USER_GUID:
                case self::ORA_INVOKING_XS_USER:
                case self::ORA_RAWCOMPARE:
                case self::ORA_RAWCONCAT:
                case self::ORA_ROWSCN:
                case self::ORA_ROWSCN_RAW:
                case self::ORA_ROWVERSION:
                case self::ORA_TABVERSION:
                case self::ORA_WRITE_TIME:
                case self::ORDERED:
                case self::ORDERED_PREDICATES:
                case self::ORDINALITY:
                case self::OR_EXPAND:
                case self::ORGANIZATION:
                case self::OR_PREDICATES:
                case self::OSERROR:
                case self::OTHER:
                case self::OUTER_JOIN_TO_ANTI:
                case self::OUTER_JOIN_TO_INNER:
                case self::OUTER:
                case self::OUTLINE_LEAF:
                case self::OUTLINE:
                case self::OUT_OF_LINE:
                case self::OUT:
                case self::OVERFLOW_NOMOVE:
                case self::OVERFLOW:
                case self::OVERLAPS:
                case self::OVER:
                case self::OVERRIDING:
                case self::OWNER:
                case self::OWNERSHIP:
                case self::OWN:
                case self::PACKAGE:
                case self::PACKAGES:
                case self::PARALLEL_ENABLE:
                case self::PARALLEL_INDEX:
                case self::PARALLEL:
                case self::PARAMETERS:
                case self::PARAM:
                case self::PARENT:
                case self::PARITY:
                case self::PARTIAL_JOIN:
                case self::PARTIALLY:
                case self::PARTIAL:
                case self::PARTIAL_ROLLUP_PUSHDOWN:
                case self::PARTITION_HASH:
                case self::PARTITION_LIST:
                case self::PARTITION:
                case self::PARTITION_RANGE:
                case self::PARTITIONS:
                case self::PARTNUMINST:
                case self::PASSING:
                case self::PASSWORD_GRACE_TIME:
                case self::PASSWORD_LIFE_TIME:
                case self::PASSWORD_LOCK_TIME:
                case self::PASSWORD:
                case self::PASSWORD_REUSE_MAX:
                case self::PASSWORD_REUSE_TIME:
                case self::PASSWORD_VERIFY_FUNCTION:
                case self::PAST:
                case self::PATCH:
                case self::PATH:
                case self::PATH_PREFIX:
                case self::PATHS:
                case self::PATTERN:
                case self::PBL_HS_BEGIN:
                case self::PBL_HS_END:
                case self::PCTINCREASE:
                case self::PCTTHRESHOLD:
                case self::PCTUSED:
                case self::PCTVERSION:
                case self::PENDING:
                case self::PERCENT_KEYWORD:
                case self::PERCENT_RANKM:
                case self::PERFORMANCE:
                case self::PERIOD_KEYWORD:
                case self::PERMANENT:
                case self::PERMISSION:
                case self::PERMUTE:
                case self::PER:
                case self::PFILE:
                case self::PHYSICAL:
                case self::PIKEY:
                case self::PIPELINED:
                case self::PIV_GB:
                case self::PIVOT:
                case self::PIV_SSF:
                case self::PLACE_DISTINCT:
                case self::PLACE_GROUP_BY:
                case self::PLAN:
                case self::PLSCOPE_SETTINGS:
                case self::PLS_INTEGER:
                case self::PLSQL_CCFLAGS:
                case self::PLSQL_CODE_TYPE:
                case self::PLSQL_DEBUG:
                case self::PLSQL_OPTIMIZE_LEVEL:
                case self::PLSQL_WARNINGS:
                case self::PLUGGABLE:
                case self::POINT:
                case self::POLICY:
                case self::POOL_16K:
                case self::POOL_2K:
                case self::POOL_32K:
                case self::POOL_4K:
                case self::POOL_8K:
                case self::POSITIVEN:
                case self::POSITIVE:
                case self::POST_TRANSACTION:
                case self::POWERMULTISET_BY_CARDINALITY:
                case self::POWERMULTISET:
                case self::POWER:
                case self::PQ_CONCURRENT_UNION:
                case self::PQ_DISTRIBUTE:
                case self::PQ_DISTRIBUTE_WINDOW:
                case self::PQ_FILTER:
                case self::PQ_MAP:
                case self::PQ_NOMAP:
                case self::PQ_REPLICATE:
                case self::PQ_SKEW:
                case self::PRAGMA:
                case self::PREBUILT:
                case self::PRECEDES:
                case self::PRECEDING:
                case self::PRECISION:
                case self::PRECOMPUTE_SUBQUERY:
                case self::PREDICATE_REORDERS:
                case self::PRELOAD:
                case self::PREPARE:
                case self::PRESENTNNV:
                case self::PRESENT:
                case self::PRESENTV:
                case self::PRESERVE_OID:
                case self::PRESERVE:
                case self::PRETTY:
                case self::PREVIOUS:
                case self::PREV:
                case self::PRIMARY:
                case self::PRINTBLOBTOCLOB:
                case self::PRIORITY:
                case self::PRIVATE:
                case self::PRIVATE_SGA:
                case self::PRIVILEGED:
                case self::PRIVILEGE:
                case self::PRIVILEGES:
                case self::PROCEDURAL:
                case self::PROCEDURE:
                case self::PROCESS:
                case self::PROFILE:
                case self::PROGRAM:
                case self::PROJECT:
                case self::PROPAGATE:
                case self::PROTECTED:
                case self::PROTECTION:
                case self::PROXY:
                case self::PRUNING:
                case self::PULL_PRED:
                case self::PURGE:
                case self::PUSH_PRED:
                case self::PUSH_SUBQ:
                case self::PX_FAULT_TOLERANCE:
                case self::PX_GRANULE:
                case self::PX_JOIN_FILTER:
                case self::QB_NAME:
                case self::QUERY_BLOCK:
                case self::QUERY:
                case self::QUEUE_CURR:
                case self::QUEUE:
                case self::QUEUE_ROWP:
                case self::QUIESCE:
                case self::QUORUM:
                case self::QUOTA:
                case self::RAISE:
                case self::RANDOM_LOCAL:
                case self::RANDOM:
                case self::RANGE:
                case self::RANKM:
                case self::RAPIDLY:
                case self::RAW:
                case self::RAWTOHEX:
                case self::RAWTONHEX:
                case self::RBA:
                case self::RBO_OUTLINE:
                case self::RDBA:
                case self::READ:
                case self::READS:
                case self::REALM:
                case self::REAL:
                case self::REBALANCE:
                case self::REBUILD:
                case self::RECORD:
                case self::RECORDS_PER_BLOCK:
                case self::RECOVERABLE:
                case self::RECOVER:
                case self::RECOVERY:
                case self::RECYCLEBIN:
                case self::RECYCLE:
                case self::REDACTION:
                case self::REDEFINE:
                case self::REDO:
                case self::REDUCED:
                case self::REDUNDANCY:
                case self::REF_CASCADE_CURSOR:
                case self::REFERENCED:
                case self::REFERENCE:
                case self::REFERENCES:
                case self::REFERENCING:
                case self::REF:
                case self::REFRESH:
                case self::REFTOHEX:
                case self::REGEXP_COUNT:
                case self::REGEXP_INSTR:
                case self::REGEXP_LIKE:
                case self::REGEXP_REPLACE:
                case self::REGEXP_SUBSTR:
                case self::REGISTER:
                case self::REGR_AVGX:
                case self::REGR_AVGY:
                case self::REGR_COUNT:
                case self::REGR_INTERCEPT:
                case self::REGR_R2:
                case self::REGR_SLOPE:
                case self::REGR_SXX:
                case self::REGR_SXY:
                case self::REGR_SYY:
                case self::REGULAR:
                case self::REJECT:
                case self::REKEY:
                case self::RELATIONAL:
                case self::RELOCATE:
                case self::RELY:
                case self::REMAINDER:
                case self::REMOTE_MAPPED:
                case self::REMOVE:
                case self::RENAME:
                case self::REPAIR:
                case self::REPEAT:
                case self::REPLACE:
                case self::REPLICATION:
                case self::REQUIRED:
                case self::RESETLOGS:
                case self::RESET:
                case self::RESIZE:
                case self::RESOLVE:
                case self::RESOLVER:
                case self::RESPECT:
                case self::RESTART:
                case self::RESTORE_AS_INTERVALS:
                case self::RESTORE:
                case self::RESTRICT_ALL_REF_CONS:
                case self::RESTRICTED:
                case self::RESTRICT_REFERENCES:
                case self::RESTRICT:
                case self::RESULT_CACHE:
                case self::RESULT:
                case self::RESUMABLE:
                case self::RESUME:
                case self::RETENTION:
                case self::RETRY_ON_ROW_CHANGE:
                case self::RETURNING:
                case self::RETURN:
                case self::REUSE:
                case self::REVERSE:
                case self::REWRITE_OR_ERROR:
                case self::REWRITE:
                case self::RIGHT:
                case self::ROLE:
                case self::ROLESET:
                case self::ROLES:
                case self::ROLLBACK:
                case self::ROLLING:
                case self::ROLLUP:
                case self::ROWDEPENDENCIES:
                case self::ROWID_MAPPING_TABLE:
                case self::ROWID:
                case self::ROWIDTOCHAR:
                case self::ROWIDTONCHAR:
                case self::ROW_LENGTH:
                case self::ROWNUM:
                case self::ROW:
                case self::ROWS:
                case self::RPAD:
                case self::RTRIM:
                case self::RULE:
                case self::RULES:
                case self::RUNNING:
                case self::SALT:
                case self::SAMPLE:
                case self::SAVE_AS_INTERVALS:
                case self::SAVEPOINT:
                case self::SAVE:
                case self::SB4:
                case self::SCALE_ROWS:
                case self::SCALE:
                case self::SCAN_INSTANCES:
                case self::SCAN:
                case self::SCHEDULER:
                case self::SCHEMACHECK:
                case self::SCHEMA:
                case self::SCN_ASCENDING:
                case self::SCN:
                case self::SCOPE:
                case self::SCRUB:
                case self::SD_ALL:
                case self::SD_INHIBIT:
                case self::SDO_GEOM_MBR:
                case self::SD_SHOW:
                case self::SEARCH:
                case self::SECOND:
                case self::SECRET:
                case self::SECUREFILE_DBA:
                case self::SECUREFILE:
                case self::SECURITY:
                case self::SEED:
                case self::SEG_BLOCK:
                case self::SEG_FILE:
                case self::SEGMENT:
                case self::SELECTIVITY:
                case self::SELF:
                case self::SEMIJOIN_DRIVER:
                case self::SEMIJOIN:
                case self::SEMI_TO_INNER:
                case self::SEQUENCED:
                case self::SEQUENCE:
                case self::SEQUENTIAL:
                case self::SERIALIZABLE:
                case self::SERIALLY_REUSABLE:
                case self::SERIAL:
                case self::SERVERERROR:
                case self::SERVICE_NAME_CONVERT:
                case self::SERVICES:
                case self::SESSION_CACHED_CURSORS:
                case self::SESSION:
                case self::SESSIONS_PER_USER:
                case self::SESSIONTIMEZONE:
                case self::SESSIONTZNAME:
                case self::SET:
                case self::SETS:
                case self::SETTINGS:
                case self::SET_TO_JOIN:
                case self::SEVERE:
                case self::SHARED_POOL:
                case self::SHARED:
                case self::SHARING:
                case self::SHELFLIFE:
                case self::SHOW:
                case self::SHRINK:
                case self::SHUTDOWN:
                case self::SIBLINGS:
                case self::SID:
                case self::SIGNAL_COMPONENT:
                case self::SIGNAL_FUNCTION:
                case self::SIGN:
                case self::SIGNTYPE:
                case self::SIMPLE_INTEGER:
                case self::SIMPLE:
                case self::SINGLE:
                case self::SINGLETASK:
                case self::SINH:
                case self::SIN:
                case self::SKIP_EXT_OPTIMIZER:
                case self::SKIP_:
                case self::SKIP_UNQ_UNUSABLE_IDX:
                case self::SKIP_UNUSABLE_INDEXES:
                case self::SMALLFILE:
                case self::SMALLINT:
                case self::SNAPSHOT:
                case self::SOME:
                case self::SORT:
                case self::SOUNDEX:
                case self::SOURCE_FILE_DIRECTORY:
                case self::SOURCE_FILE_NAME_CONVERT:
                case self::SOURCE:
                case self::SPACE_KEYWORD:
                case self::SPECIFICATION:
                case self::SPFILE:
                case self::SPLIT:
                case self::SPREADSHEET:
                case self::SQLDATA:
                case self::SQLERROR:
                case self::SQLLDR:
                case self::SQL:
                case self::SQL_TRACE:
                case self::SQL_TRANSLATION_PROFILE:
                case self::SQRT:
                case self::STALE:
                case self::STANDALONE:
                case self::STANDARD_HASH:
                case self::STANDBY_MAX_DATA_DELAY:
                case self::STANDBYS:
                case self::STANDBY:
                case self::STAR:
                case self::STAR_TRANSFORMATION:
                case self::STARTUP:
                case self::STATEMENT_ID:
                case self::STATEMENT_QUEUING:
                case self::STATEMENTS:
                case self::STATEMENT:
                case self::STATE:
                case self::STATIC:
                case self::STATISTICS:
                case self::STATS_BINOMIAL_TEST:
                case self::STATS_CROSSTAB:
                case self::STATS_F_TEST:
                case self::STATS_KS_TEST:
                case self::STATS_MODE:
                case self::STATS_MW_TEST:
                case self::STATS_ONE_WAY_ANOVA:
                case self::STATS_T_TEST_INDEP:
                case self::STATS_T_TEST_INDEPU:
                case self::STATS_T_TEST_ONE:
                case self::STATS_T_TEST_PAIRED:
                case self::STATS_WSR_TEST:
                case self::STDDEV_POP:
                case self::STDDEV_SAMP:
                case self::STOP:
                case self::STORAGE:
                case self::STORE:
                case self::STREAMS:
                case self::STREAM:
                case self::STRICT:
                case self::STRING:
                case self::STRIPE_COLUMNS:
                case self::STRIPE_WIDTH:
                case self::STRIP:
                case self::STRUCTURE:
                case self::SUBMULTISET:
                case self::SUBPARTITION_REL:
                case self::SUBPARTITIONS:
                case self::SUBPARTITION:
                case self::SUBQUERIES:
                case self::SUBQUERY_PRUNING:
                case self::SUBSCRIBE:
                case self::SUBSET:
                case self::SUBSTITUTABLE:
                case self::SUBSTR2:
                case self::SUBSTR4:
                case self::SUBSTRB:
                case self::SUBSTRC:
                case self::SUBTYPE:
                case self::SUCCESSFUL:
                case self::SUCCESS:
                case self::SUMMARY:
                case self::SUPPLEMENTAL:
                case self::SUSPEND:
                case self::SWAP_JOIN_INPUTS:
                case self::SWITCHOVER:
                case self::SWITCH:
                case self::SYNCHRONOUS:
                case self::SYNC:
                case self::SYSASM:
                case self::SYS_AUDIT:
                case self::SYSAUX:
                case self::SYSBACKUP:
                case self::SYS_CHECKACL:
                case self::SYS_CHECK_PRIVILEGE:
                case self::SYS_CONNECT_BY_PATH:
                case self::SYS_CONTEXT:
                case self::SYSDATE:
                case self::SYSDBA:
                case self::SYS_DBURIGEN:
                case self::SYSDG:
                case self::SYS_DL_CURSOR:
                case self::SYS_DM_RXFORM_CHR:
                case self::SYS_DM_RXFORM_NUM:
                case self::SYS_DOM_COMPARE:
                case self::SYS_DST_PRIM2SEC:
                case self::SYS_DST_SEC2PRIM:
                case self::SYS_ET_BFILE_TO_RAW:
                case self::SYS_ET_BLOB_TO_IMAGE:
                case self::SYS_ET_IMAGE_TO_BLOB:
                case self::SYS_ET_RAW_TO_BFILE:
                case self::SYS_EXTPDTXT:
                case self::SYS_EXTRACT_UTC:
                case self::SYS_FBT_INSDEL:
                case self::SYS_FILTER_ACLS:
                case self::SYS_FNMATCHES:
                case self::SYS_FNREPLACE:
                case self::SYS_GET_ACLIDS:
                case self::SYS_GET_COL_ACLIDS:
                case self::SYS_GET_PRIVILEGES:
                case self::SYS_GETTOKENID:
                case self::SYS_GETXTIVAL:
                case self::SYS_GUID:
                case self::SYSGUID:
                case self::SYSKM:
                case self::SYS_MAKE_XMLNODEID:
                case self::SYS_MAKEXML:
                case self::SYS_MKXMLATTR:
                case self::SYS_MKXTI:
                case self::SYSOBJ:
                case self::SYS_OP_ADT2BIN:
                case self::SYS_OP_ADTCONS:
                case self::SYS_OP_ALSCRVAL:
                case self::SYS_OP_ATG:
                case self::SYS_OP_BIN2ADT:
                case self::SYS_OP_BITVEC:
                case self::SYS_OP_BL2R:
                case self::SYS_OP_BLOOM_FILTER_LIST:
                case self::SYS_OP_BLOOM_FILTER:
                case self::SYS_OP_C2C:
                case self::SYS_OP_CAST:
                case self::SYS_OP_CEG:
                case self::SYS_OP_CL2C:
                case self::SYS_OP_COMBINED_HASH:
                case self::SYS_OP_COMP:
                case self::SYS_OP_CONVERT:
                case self::SYS_OP_COUNTCHG:
                case self::SYS_OP_CSCONV:
                case self::SYS_OP_CSCONVTEST:
                case self::SYS_OP_CSR:
                case self::SYS_OP_CSX_PATCH:
                case self::SYS_OP_CYCLED_SEQ:
                case self::SYS_OP_DECOMP:
                case self::SYS_OP_DESCEND:
                case self::SYS_OP_DISTINCT:
                case self::SYS_OP_DRA:
                case self::SYS_OP_DUMP:
                case self::SYS_OP_DV_CHECK:
                case self::SYS_OP_ENFORCE_NOT_NULL:
                case self::SYSOPER:
                case self::SYS_OP_EXTRACT:
                case self::SYS_OP_GROUPING:
                case self::SYS_OP_GUID:
                case self::SYS_OP_HASH:
                case self::SYS_OP_IIX:
                case self::SYS_OP_ITR:
                case self::SYS_OP_KEY_VECTOR_CREATE:
                case self::SYS_OP_KEY_VECTOR_FILTER_LIST:
                case self::SYS_OP_KEY_VECTOR_FILTER:
                case self::SYS_OP_KEY_VECTOR_SUCCEEDED:
                case self::SYS_OP_KEY_VECTOR_USE:
                case self::SYS_OP_LBID:
                case self::SYS_OP_LOBLOC2BLOB:
                case self::SYS_OP_LOBLOC2CLOB:
                case self::SYS_OP_LOBLOC2ID:
                case self::SYS_OP_LOBLOC2NCLOB:
                case self::SYS_OP_LOBLOC2TYP:
                case self::SYS_OP_LSVI:
                case self::SYS_OP_LVL:
                case self::SYS_OP_MAKEOID:
                case self::SYS_OP_MAP_NONNULL:
                case self::SYS_OP_MSR:
                case self::SYS_OP_NICOMBINE:
                case self::SYS_OP_NIEXTRACT:
                case self::SYS_OP_NII:
                case self::SYS_OP_NIX:
                case self::SYS_OP_NOEXPAND:
                case self::SYS_OP_NTCIMG:
                case self::SYS_OP_NUMTORAW:
                case self::SYS_OP_OIDVALUE:
                case self::SYS_OP_OPNSIZE:
                case self::SYS_OP_PAR_1:
                case self::SYS_OP_PARGID_1:
                case self::SYS_OP_PARGID:
                case self::SYS_OP_PAR:
                case self::SYS_OP_PART_ID:
                case self::SYS_OP_PIVOT:
                case self::SYS_OP_R2O:
                case self::SYS_OP_RAWTONUM:
                case self::SYS_OP_RDTM:
                case self::SYS_OP_REF:
                case self::SYS_OP_RMTD:
                case self::SYS_OP_ROWIDTOOBJ:
                case self::SYS_OP_RPB:
                case self::SYS_OPTLOBPRBSC:
                case self::SYS_OP_TOSETID:
                case self::SYS_OP_TPR:
                case self::SYS_OP_TRTB:
                case self::SYS_OPTXICMP:
                case self::SYS_OPTXQCASTASNQ:
                case self::SYS_OP_UNDESCEND:
                case self::SYS_OP_VECAND:
                case self::SYS_OP_VECBIT:
                case self::SYS_OP_VECOR:
                case self::SYS_OP_VECXOR:
                case self::SYS_OP_VERSION:
                case self::SYS_OP_VREF:
                case self::SYS_OP_VVD:
                case self::SYS_OP_XMLCONS_FOR_CSX:
                case self::SYS_OP_XPTHATG:
                case self::SYS_OP_XPTHIDX:
                case self::SYS_OP_XPTHOP:
                case self::SYS_OP_XTXT2SQLT:
                case self::SYS_OP_ZONE_ID:
                case self::SYS_ORDERKEY_DEPTH:
                case self::SYS_ORDERKEY_MAXCHILD:
                case self::SYS_ORDERKEY_PARENT:
                case self::SYS_PARALLEL_TXN:
                case self::SYS_PATHID_IS_ATTR:
                case self::SYS_PATHID_IS_NMSPC:
                case self::SYS_PATHID_LASTNAME:
                case self::SYS_PATHID_LASTNMSPC:
                case self::SYS_PATH_REVERSE:
                case self::SYS_PXQEXTRACT:
                case self::SYS_RAW_TO_XSID:
                case self::SYS_RID_ORDER:
                case self::SYS_ROW_DELTA:
                case self::SYS_SC_2_XMLT:
                case self::SYS_SYNRCIREDO:
                case self::SYSTEM_DEFINED:
                case self::SYSTEM:
                case self::SYSTIMESTAMP:
                case self::SYS_TYPEID:
                case self::SYS_UMAKEXML:
                case self::SYS_XMLANALYZE:
                case self::SYS_XMLCONTAINS:
                case self::SYS_XMLCONV:
                case self::SYS_XMLEXNSURI:
                case self::SYS_XMLGEN:
                case self::SYS_XMLI_LOC_ISNODE:
                case self::SYS_XMLI_LOC_ISTEXT:
                case self::SYS_XMLINSTR:
                case self::SYS_XMLLOCATOR_GETSVAL:
                case self::SYS_XMLNODEID_GETCID:
                case self::SYS_XMLNODEID_GETLOCATOR:
                case self::SYS_XMLNODEID_GETOKEY:
                case self::SYS_XMLNODEID_GETPATHID:
                case self::SYS_XMLNODEID_GETPTRID:
                case self::SYS_XMLNODEID_GETRID:
                case self::SYS_XMLNODEID_GETSVAL:
                case self::SYS_XMLNODEID_GETTID:
                case self::SYS_XMLNODEID:
                case self::SYS_XMLT_2_SC:
                case self::SYS_XMLTRANSLATE:
                case self::SYS_XMLTYPE2SQL:
                case self::SYS_XQ_ASQLCNV:
                case self::SYS_XQ_ATOMCNVCHK:
                case self::SYS_XQBASEURI:
                case self::SYS_XQCASTABLEERRH:
                case self::SYS_XQCODEP2STR:
                case self::SYS_XQCODEPEQ:
                case self::SYS_XQCON2SEQ:
                case self::SYS_XQCONCAT:
                case self::SYS_XQDELETE:
                case self::SYS_XQDFLTCOLATION:
                case self::SYS_XQDOC:
                case self::SYS_XQDOCURI:
                case self::SYS_XQDURDIV:
                case self::SYS_XQED4URI:
                case self::SYS_XQENDSWITH:
                case self::SYS_XQERRH:
                case self::SYS_XQERR:
                case self::SYS_XQESHTMLURI:
                case self::SYS_XQEXLOBVAL:
                case self::SYS_XQEXSTWRP:
                case self::SYS_XQEXTRACT:
                case self::SYS_XQEXTRREF:
                case self::SYS_XQEXVAL:
                case self::SYS_XQFB2STR:
                case self::SYS_XQFNBOOL:
                case self::SYS_XQFNCMP:
                case self::SYS_XQFNDATIM:
                case self::SYS_XQFNLNAME:
                case self::SYS_XQFNNM:
                case self::SYS_XQFNNSURI:
                case self::SYS_XQFNPREDTRUTH:
                case self::SYS_XQFNQNM:
                case self::SYS_XQFNROOT:
                case self::SYS_XQFORMATNUM:
                case self::SYS_XQFTCONTAIN:
                case self::SYS_XQFUNCR:
                case self::SYS_XQGETCONTENT:
                case self::SYS_XQINDXOF:
                case self::SYS_XQINSERT:
                case self::SYS_XQINSPFX:
                case self::SYS_XQIRI2URI:
                case self::SYS_XQLANG:
                case self::SYS_XQLLNMFRMQNM:
                case self::SYS_XQMKNODEREF:
                case self::SYS_XQNILLED:
                case self::SYS_XQNODENAME:
                case self::SYS_XQNORMSPACE:
                case self::SYS_XQNORMUCODE:
                case self::SYS_XQ_NRNG:
                case self::SYS_XQNSP4PFX:
                case self::SYS_XQNSPFRMQNM:
                case self::SYS_XQPFXFRMQNM:
                case self::SYS_XQ_PKSQL2XML:
                case self::SYS_XQPOLYABS:
                case self::SYS_XQPOLYADD:
                case self::SYS_XQPOLYCEL:
                case self::SYS_XQPOLYCSTBL:
                case self::SYS_XQPOLYCST:
                case self::SYS_XQPOLYDIV:
                case self::SYS_XQPOLYFLR:
                case self::SYS_XQPOLYMOD:
                case self::SYS_XQPOLYMUL:
                case self::SYS_XQPOLYRND:
                case self::SYS_XQPOLYSQRT:
                case self::SYS_XQPOLYSUB:
                case self::SYS_XQPOLYUMUS:
                case self::SYS_XQPOLYUPLS:
                case self::SYS_XQPOLYVEQ:
                case self::SYS_XQPOLYVGE:
                case self::SYS_XQPOLYVGT:
                case self::SYS_XQPOLYVLE:
                case self::SYS_XQPOLYVLT:
                case self::SYS_XQPOLYVNE:
                case self::SYS_XQREF2VAL:
                case self::SYS_XQRENAME:
                case self::SYS_XQREPLACE:
                case self::SYS_XQRESVURI:
                case self::SYS_XQRNDHALF2EVN:
                case self::SYS_XQRSLVQNM:
                case self::SYS_XQRYENVPGET:
                case self::SYS_XQRYVARGET:
                case self::SYS_XQRYWRP:
                case self::SYS_XQSEQ2CON4XC:
                case self::SYS_XQSEQ2CON:
                case self::SYS_XQSEQDEEPEQ:
                case self::SYS_XQSEQINSB:
                case self::SYS_XQSEQRM:
                case self::SYS_XQSEQRVS:
                case self::SYS_XQSEQSUB:
                case self::SYS_XQSEQTYPMATCH:
                case self::SYS_XQSTARTSWITH:
                case self::SYS_XQSTATBURI:
                case self::SYS_XQSTR2CODEP:
                case self::SYS_XQSTRJOIN:
                case self::SYS_XQSUBSTRAFT:
                case self::SYS_XQSUBSTRBEF:
                case self::SYS_XQTOKENIZE:
                case self::SYS_XQTREATAS:
                case self::SYS_XQ_UPKXML2SQL:
                case self::SYS_XQXFORM:
                case self::SYS_XSID_TO_RAW:
                case self::SYS_ZMAP_FILTER:
                case self::SYS_ZMAP_REFRESH:
                case self::TABLE_LOOKUP_BY_NL:
                case self::TABLESPACE_NO:
                case self::TABLESPACE:
                case self::TABLES:
                case self::TABLE_STATS:
                case self::TABLE:
                case self::TABNO:
                case self::TAG:
                case self::TANH:
                case self::TAN:
                case self::TBLORIDXPARTNUM:
                case self::TEMPFILE:
                case self::TEMPLATE:
                case self::TEMPORARY:
                case self::TEMP_TABLE:
                case self::TEST:
                case self::TEXT:
                case self::THAN:
                case self::THEN:
                case self::THE:
                case self::THREAD:
                case self::THROUGH:
                case self::TIER:
                case self::TIES:
                case self::TIMEOUT:
                case self::TIMESTAMP_LTZ_UNCONSTRAINED:
                case self::TIMESTAMP:
                case self::TIMESTAMP_TZ_UNCONSTRAINED:
                case self::TIMESTAMP_UNCONSTRAINED:
                case self::TIMES:
                case self::TIME:
                case self::TIMEZONE_ABBR:
                case self::TIMEZONE_HOUR:
                case self::TIMEZONE_MINUTE:
                case self::TIMEZONE_OFFSET:
                case self::TIMEZONE_REGION:
                case self::TIME_ZONE:
                case self::TIV_GB:
                case self::TIV_SSF:
                case self::TO_ACLID:
                case self::TO_BINARY_DOUBLE:
                case self::TO_BINARY_FLOAT:
                case self::TO_BLOB:
                case self::TO_CLOB:
                case self::TO_DSINTERVAL:
                case self::TO_LOB:
                case self::TO_MULTI_BYTE:
                case self::TO_NCHAR:
                case self::TO_NCLOB:
                case self::TO_NUMBER:
                case self::TOPLEVEL:
                case self::TO_SINGLE_BYTE:
                case self::TO_TIMESTAMP:
                case self::TO_TIMESTAMP_TZ:
                case self::TO_TIME:
                case self::TO_TIME_TZ:
                case self::TO_YMINTERVAL:
                case self::TRACE:
                case self::TRACING:
                case self::TRACKING:
                case self::TRAILING:
                case self::TRANSACTION:
                case self::TRANSFORM_DISTINCT_AGG:
                case self::TRANSITIONAL:
                case self::TRANSITION:
                case self::TRANSLATE:
                case self::TRANSLATION:
                case self::TREAT:
                case self::TRIGGERS:
                case self::TRIGGER:
                case self::TRUE:
                case self::TRUNCATE:
                case self::TRUNC:
                case self::TRUSTED:
                case self::TRUST:
                case self::TUNING:
                case self::TX:
                case self::TYPES:
                case self::TYPE:
                case self::TZ_OFFSET:
                case self::UB2:
                case self::UBA:
                case self::UCS2:
                case self::UID:
                case self::UNARCHIVED:
                case self::UNBOUNDED:
                case self::UNBOUND:
                case self::UNCONDITIONAL:
                case self::UNDER:
                case self::UNDO:
                case self::UNDROP:
                case self::UNIFORM:
                case self::UNISTR:
                case self::UNLIMITED:
                case self::UNLOAD:
                case self::UNLOCK:
                case self::UNMATCHED:
                case self::UNNEST_INNERJ_DISTINCT_VIEW:
                case self::UNNEST_NOSEMIJ_NODISTINCTVIEW:
                case self::UNNEST_SEMIJ_VIEW:
                case self::UNNEST:
                case self::UNPACKED:
                case self::UNPIVOT:
                case self::UNPLUG:
                case self::UNPROTECTED:
                case self::UNQUIESCE:
                case self::UNRECOVERABLE:
                case self::UNRESTRICTED:
                case self::UNSUBSCRIBE:
                case self::UNTIL:
                case self::UNUSABLE:
                case self::UNUSED:
                case self::UPDATABLE:
                case self::UPDATED:
                case self::UPDATEXML:
                case self::UPD_INDEXES:
                case self::UPD_JOININDEX:
                case self::UPGRADE:
                case self::UPPER:
                case self::UPSERT:
                case self::UROWID:
                case self::USABLE:
                case self::USAGE:
                case self::USE_ANTI:
                case self::USE_CONCAT:
                case self::USE_CUBE:
                case self::USE_HASH_AGGREGATION:
                case self::USE_HASH_GBY_FOR_PUSHDOWN:
                case self::USE_HASH:
                case self::USE_HIDDEN_PARTITIONS:
                case self::USE_INVISIBLE_INDEXES:
                case self::USE_MERGE_CARTESIAN:
                case self::USE_MERGE:
                case self::USE_NL:
                case self::USE_NL_WITH_INDEX:
                case self::USE_PRIVATE_OUTLINES:
                case self::USER_DATA:
                case self::USER_DEFINED:
                case self::USERENV:
                case self::USERGROUP:
                case self::USER_RECYCLEBIN:
                case self::USERS:
                case self::USER_TABLESPACES:
                case self::USER:
                case self::USE_SEMI:
                case self::USE_STORED_OUTLINES:
                case self::USE_TTT_FOR_GSETS:
                case self::USE:
                case self::USE_VECTOR_AGGREGATION:
                case self::USE_WEAK_NAME_RESL:
                case self::USING_NO_EXPAND:
                case self::USING:
                case self::UTF16BE:
                case self::UTF16LE:
                case self::UTF32:
                case self::UTF8:
                case self::V1:
                case self::V2:
                case self::VALIDATE:
                case self::VALIDATION:
                case self::VALID_TIME_END:
                case self::VALUE:
                case self::VARCHAR2:
                case self::VARCHAR:
                case self::VARIABLE:
                case self::VAR_POP:
                case self::VARRAYS:
                case self::VARRAY:
                case self::VAR_SAMP:
                case self::VARYING:
                case self::VECTOR_READ_TRACE:
                case self::VECTOR_READ:
                case self::VECTOR_TRANSFORM_DIMS:
                case self::VECTOR_TRANSFORM_FACT:
                case self::VECTOR_TRANSFORM:
                case self::VERIFIER:
                case self::VERIFY:
                case self::VERSIONING:
                case self::VERSIONS_ENDSCN:
                case self::VERSIONS_ENDTIME:
                case self::VERSIONS_OPERATION:
                case self::VERSIONS_STARTSCN:
                case self::VERSIONS_STARTTIME:
                case self::VERSIONS:
                case self::VERSIONS_XID:
                case self::VERSION:
                case self::VIOLATION:
                case self::VIRTUAL:
                case self::VISIBILITY:
                case self::VISIBLE:
                case self::VOLUME:
                case self::VSIZE:
                case self::WAIT:
                case self::WALLET:
                case self::WARNING:
                case self::WEEKS:
                case self::WEEK:
                case self::WELLFORMED:
                case self::WHENEVER:
                case self::WHEN:
                case self::WHILE:
                case self::WHITESPACE:
                case self::WIDTH_BUCKET:
                case self::WITHIN:
                case self::WITHOUT:
                case self::WITH_PLSQL:
                case self::WORK:
                case self::WRAPPED:
                case self::WRAPPER:
                case self::WRITE:
                case self::XDB_FASTPATH_INSERT:
                case self::X_DYN_PRUNE:
                case self::XID:
                case self::XML2OBJECT:
                case self::XMLAGG:
                case self::XMLATTRIBUTES:
                case self::XMLCAST:
                case self::XMLCDATA:
                case self::XMLCOLATTVAL:
                case self::XMLCOMMENT:
                case self::XMLCONCAT:
                case self::XMLDIFF:
                case self::XML_DML_RWT_STMT:
                case self::XMLELEMENT:
                case self::XMLEXISTS2:
                case self::XMLEXISTS:
                case self::XMLFOREST:
                case self::XMLINDEX_REWRITE_IN_SELECT:
                case self::XMLINDEX_REWRITE:
                case self::XMLINDEX_SEL_IDX_TBL:
                case self::XMLISNODE:
                case self::XMLISVALID:
                case self::XMLNAMESPACES:
                case self::XMLPARSE:
                case self::XMLPATCH:
                case self::XMLPI:
                case self::XMLQUERYVAL:
                case self::XMLQUERY:
                case self::XMLROOT:
                case self::XMLSCHEMA:
                case self::XMLSERIALIZE:
                case self::XMLTABLE:
                case self::XMLTRANSFORMBLOB:
                case self::XMLTRANSFORM:
                case self::XMLTYPE:
                case self::XML:
                case self::XPATHTABLE:
                case self::XS_SYS_CONTEXT:
                case self::XS:
                case self::YEARS:
                case self::YEAR:
                case self::YES:
                case self::YMINTERVAL_UNCONSTRAINED:
                case self::ZONEMAP:
                case self::ZONE:
                case self::PREDICTION:
                case self::PREDICTION_BOUNDS:
                case self::PREDICTION_COST:
                case self::PREDICTION_DETAILS:
                case self::PREDICTION_PROBABILITY:
                case self::PREDICTION_SET:
                case self::CUME_DIST:
                case self::DENSE_RANK:
                case self::LISTAGG:
                case self::PERCENT_RANK:
                case self::PERCENTILE_CONT:
                case self::PERCENTILE_DISC:
                case self::RANK:
                case self::AVG:
                case self::CORR:
                case self::COVAR_:
                case self::LAG:
                case self::LEAD:
                case self::MAX:
                case self::MEDIAN:
                case self::MIN:
                case self::NTILE:
                case self::NVL:
                case self::RATIO_TO_REPORT:
                case self::REGR_:
                case self::ROUND:
                case self::ROW_NUMBER:
                case self::SUBSTR:
                case self::TO_CHAR:
                case self::TRIM:
                case self::SUM:
                case self::STDDEV:
                case self::VAR_:
                case self::VARIANCE:
                case self::LEAST:
                case self::GREATEST:
                case self::TO_DATE:
                case self::PERIOD:
                case self::REGULAR_ID:
                    $this->setState(3870);
                    $this->statistics_type_name();
                    break;

                case self::NULL_:
                    $this->setState(3871);
                    $this->match(self::NULL_);
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
    public function statistics_type_name(): Context\Statistics_type_nameContext
    {
        $localContext = new Context\Statistics_type_nameContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 330, self::RULE_statistics_type_name);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3874);
            $this->regular_id();
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
    public function default_cost_clause(): Context\Default_cost_clauseContext
    {
        $localContext = new Context\Default_cost_clauseContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 332, self::RULE_default_cost_clause);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3876);
            $this->match(self::DEFAULT);
            $this->setState(3877);
            $this->match(self::COST);
            $this->setState(3878);
            $this->match(self::LEFT_PAREN);
            $this->setState(3879);
            $this->cpu_cost();
            $this->setState(3880);
            $this->match(self::COMMA);
            $this->setState(3881);
            $this->io_cost();
            $this->setState(3882);
            $this->match(self::COMMA);
            $this->setState(3883);
            $this->network_cost();
            $this->setState(3884);
            $this->match(self::RIGHT_PAREN);
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
    public function cpu_cost(): Context\Cpu_costContext
    {
        $localContext = new Context\Cpu_costContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 334, self::RULE_cpu_cost);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(3886);
            $this->match(self::UNSIGNED_INTEGER);
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