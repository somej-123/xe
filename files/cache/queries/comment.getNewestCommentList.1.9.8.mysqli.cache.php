<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status9_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status9_argument'}->createConditionValue();
if(!${'status9_argument'}->isValid()) return ${'status9_argument'}->getErrorMessage();
} else
${'status9_argument'} = NULL;if(${'status9_argument'} !== null) ${'status9_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
} else
${'module_srl10_argument'} = NULL;if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl11_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl11_argument'}->checkFilter('number');
${'document_srl11_argument'}->createConditionValue();
if(!${'document_srl11_argument'}->isValid()) return ${'document_srl11_argument'}->getErrorMessage();
} else
${'document_srl11_argument'} = NULL;if(${'document_srl11_argument'} !== null) ${'document_srl11_argument'}->setColumnType('number');

${'list_count13_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count13_argument'}->ensureDefaultValue('20');
if(!${'list_count13_argument'}->isValid()) return ${'list_count13_argument'}->getErrorMessage();

${'sort_index12_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index12_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index12_argument'}->isValid()) return ${'sort_index12_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status9_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl10_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index12_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count13_argument'}));
return $query; ?>