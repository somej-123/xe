<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl7_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl7_argument'}->createConditionValue();
if(!${'site_srl7_argument'}->isValid()) return ${'site_srl7_argument'}->getErrorMessage();
} else
${'site_srl7_argument'} = NULL;if(${'site_srl7_argument'} !== null) ${'site_srl7_argument'}->setColumnType('number');

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

${'order_type9_argument'} = new SortArgument('order_type9', $args->order_type);
${'order_type9_argument'}->ensureDefaultValue('asc');
if(!${'order_type9_argument'}->isValid()) return ${'order_type9_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, $order_type9_argument)
));
$query->setLimit();
return $query; ?>