<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl14_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl14_argument'}->checkNotNull();
${'site_srl14_argument'}->createConditionValue();
if(!${'site_srl14_argument'}->isValid()) return ${'site_srl14_argument'}->getErrorMessage();
if(${'site_srl14_argument'} !== null) ${'site_srl14_argument'}->setColumnType('number');

${'addon15_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon15_argument'}->checkNotNull();
${'addon15_argument'}->createConditionValue();
if(!${'addon15_argument'}->isValid()) return ${'addon15_argument'}->getErrorMessage();
if(${'addon15_argument'} !== null) ${'addon15_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl14_argument,"equal")
,new ConditionWithArgument('`addon`',$addon15_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>