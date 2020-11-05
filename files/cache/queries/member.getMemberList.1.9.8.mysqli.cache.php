<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin16_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin16_argument'}->createConditionValue();
if(!${'is_admin16_argument'}->isValid()) return ${'is_admin16_argument'}->getErrorMessage();
} else
${'is_admin16_argument'} = NULL;if(${'is_admin16_argument'} !== null) ${'is_admin16_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied17_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied17_argument'}->createConditionValue();
if(!${'is_denied17_argument'}->isValid()) return ${'is_denied17_argument'}->getErrorMessage();
} else
${'is_denied17_argument'} = NULL;if(${'is_denied17_argument'} !== null) ${'is_denied17_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls18_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls18_argument'}->createConditionValue();
if(!${'member_srls18_argument'}->isValid()) return ${'member_srls18_argument'}->getErrorMessage();
} else
${'member_srls18_argument'} = NULL;if(${'member_srls18_argument'} !== null) ${'member_srls18_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id19_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id19_argument'}->createConditionValue();
if(!${'s_user_id19_argument'}->isValid()) return ${'s_user_id19_argument'}->getErrorMessage();
} else
${'s_user_id19_argument'} = NULL;if(${'s_user_id19_argument'} !== null) ${'s_user_id19_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name20_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name20_argument'}->createConditionValue();
if(!${'s_user_name20_argument'}->isValid()) return ${'s_user_name20_argument'}->getErrorMessage();
} else
${'s_user_name20_argument'} = NULL;if(${'s_user_name20_argument'} !== null) ${'s_user_name20_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name21_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name21_argument'}->createConditionValue();
if(!${'s_nick_name21_argument'}->isValid()) return ${'s_nick_name21_argument'}->getErrorMessage();
} else
${'s_nick_name21_argument'} = NULL;if(${'s_nick_name21_argument'} !== null) ${'s_nick_name21_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name22_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name22_argument'}->createConditionValue();
if(!${'html_nick_name22_argument'}->isValid()) return ${'html_nick_name22_argument'}->getErrorMessage();
} else
${'html_nick_name22_argument'} = NULL;if(${'html_nick_name22_argument'} !== null) ${'html_nick_name22_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address23_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address23_argument'}->createConditionValue();
if(!${'s_email_address23_argument'}->isValid()) return ${'s_email_address23_argument'}->getErrorMessage();
} else
${'s_email_address23_argument'} = NULL;if(${'s_email_address23_argument'} !== null) ${'s_email_address23_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday24_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday24_argument'}->createConditionValue();
if(!${'s_birthday24_argument'}->isValid()) return ${'s_birthday24_argument'}->getErrorMessage();
} else
${'s_birthday24_argument'} = NULL;if(${'s_birthday24_argument'} !== null) ${'s_birthday24_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars25_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars25_argument'}->createConditionValue();
if(!${'s_extra_vars25_argument'}->isValid()) return ${'s_extra_vars25_argument'}->getErrorMessage();
} else
${'s_extra_vars25_argument'} = NULL;if(${'s_extra_vars25_argument'} !== null) ${'s_extra_vars25_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate26_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate26_argument'}->createConditionValue();
if(!${'s_regdate26_argument'}->isValid()) return ${'s_regdate26_argument'}->getErrorMessage();
} else
${'s_regdate26_argument'} = NULL;if(${'s_regdate26_argument'} !== null) ${'s_regdate26_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login27_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login27_argument'}->createConditionValue();
if(!${'s_last_login27_argument'}->isValid()) return ${'s_last_login27_argument'}->getErrorMessage();
} else
${'s_last_login27_argument'} = NULL;if(${'s_last_login27_argument'} !== null) ${'s_last_login27_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more28_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more28_argument'}->createConditionValue();
if(!${'s_regdate_more28_argument'}->isValid()) return ${'s_regdate_more28_argument'}->getErrorMessage();
} else
${'s_regdate_more28_argument'} = NULL;if(${'s_regdate_more28_argument'} !== null) ${'s_regdate_more28_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less29_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less29_argument'}->createConditionValue();
if(!${'s_regdate_less29_argument'}->isValid()) return ${'s_regdate_less29_argument'}->getErrorMessage();
} else
${'s_regdate_less29_argument'} = NULL;if(${'s_regdate_less29_argument'} !== null) ${'s_regdate_less29_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more30_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more30_argument'}->createConditionValue();
if(!${'s_last_login_more30_argument'}->isValid()) return ${'s_last_login_more30_argument'}->getErrorMessage();
} else
${'s_last_login_more30_argument'} = NULL;if(${'s_last_login_more30_argument'} !== null) ${'s_last_login_more30_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less31_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less31_argument'}->createConditionValue();
if(!${'s_last_login_less31_argument'}->isValid()) return ${'s_last_login_less31_argument'}->getErrorMessage();
} else
${'s_last_login_less31_argument'} = NULL;if(${'s_last_login_less31_argument'} !== null) ${'s_last_login_less31_argument'}->setColumnType('date');

${'page34_argument'} = new Argument('page', $args->{'page'});
${'page34_argument'}->ensureDefaultValue('1');
if(!${'page34_argument'}->isValid()) return ${'page34_argument'}->getErrorMessage();

${'page_count35_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count35_argument'}->ensureDefaultValue('10');
if(!${'page_count35_argument'}->isValid()) return ${'page_count35_argument'}->getErrorMessage();

${'list_count36_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count36_argument'}->ensureDefaultValue('20');
if(!${'list_count36_argument'}->isValid()) return ${'list_count36_argument'}->getErrorMessage();

${'sort_index32_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index32_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index32_argument'}->isValid()) return ${'sort_index32_argument'}->getErrorMessage();

${'sort_order33_argument'} = new SortArgument('sort_order33', $args->sort_order);
${'sort_order33_argument'}->ensureDefaultValue('asc');
if(!${'sort_order33_argument'}->isValid()) return ${'sort_order33_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin16_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied17_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls18_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id19_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name20_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name21_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name22_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address23_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday24_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars25_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate26_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login27_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more28_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less29_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more30_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less31_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index32_argument'}, $sort_order33_argument)
));
$query->setLimit(new Limit(${'list_count36_argument'}, ${'page34_argument'}, ${'page_count35_argument'}));
return $query; ?>