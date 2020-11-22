<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name5_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name5_argument'}->createConditionValue();
if(!${'trigger_name5_argument'}->isValid()) return ${'trigger_name5_argument'}->getErrorMessage();
} else
${'trigger_name5_argument'} = NULL;if(${'trigger_name5_argument'} !== null) ${'trigger_name5_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position6_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position6_argument'}->createConditionValue();
if(!${'called_position6_argument'}->isValid()) return ${'called_position6_argument'}->getErrorMessage();
} else
${'called_position6_argument'} = NULL;if(${'called_position6_argument'} !== null) ${'called_position6_argument'}->setColumnType('varchar');

${'11_argument'} = new Argument('', $args->{''});
${'11_argument'}->ensureDefaultValue('called_method');
if(!${'11_argument'}->isValid()) return ${'11_argument'}->getErrorMessage();

${'10_argument'} = new Argument('', $args->{''});
${'10_argument'}->ensureDefaultValue('type');
if(!${'10_argument'}->isValid()) return ${'10_argument'}->getErrorMessage();

${'9_argument'} = new Argument('', $args->{''});
${'9_argument'}->ensureDefaultValue('module');
if(!${'9_argument'}->isValid()) return ${'9_argument'}->getErrorMessage();

${'8_argument'} = new Argument('', $args->{''});
${'8_argument'}->ensureDefaultValue('called_position');
if(!${'8_argument'}->isValid()) return ${'8_argument'}->getErrorMessage();

${'7_argument'} = new Argument('', $args->{''});
${'7_argument'}->ensureDefaultValue('trigger_name');
if(!${'7_argument'}->isValid()) return ${'7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name5_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'7_argument'}, "asc")
,new OrderByColumn(${'8_argument'}, "asc")
,new OrderByColumn(${'9_argument'}, "asc")
,new OrderByColumn(${'10_argument'}, "asc")
,new OrderByColumn(${'11_argument'}, "asc")
));
$query->setLimit();
return $query; ?>