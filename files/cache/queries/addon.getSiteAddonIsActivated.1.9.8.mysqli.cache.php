<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl49_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl49_argument'}->checkNotNull();
${'site_srl49_argument'}->createConditionValue();
if(!${'site_srl49_argument'}->isValid()) return ${'site_srl49_argument'}->getErrorMessage();
if(${'site_srl49_argument'} !== null) ${'site_srl49_argument'}->setColumnType('number');

${'addon50_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon50_argument'}->checkNotNull();
${'addon50_argument'}->createConditionValue();
if(!${'addon50_argument'}->isValid()) return ${'addon50_argument'}->getErrorMessage();
if(${'addon50_argument'} !== null) ${'addon50_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl49_argument,"equal")
,new ConditionWithArgument('`addon`',$addon50_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>