<?php

$mod_strings = array (
  'LBL_ALL_MODULES'=>'全部',//rost fix
  'LBL_ASSIGNED_TO_ID' => '负责人编号',
  'LBL_ASSIGNED_TO_NAME' => '负责人',
  'LBL_ID' => '编号',
  'LBL_DATE_ENTERED' => '创建日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_MODIFIED' => '修改人',
  'LBL_MODIFIED_ID' => '修改人编号',
  'LBL_MODIFIED_NAME' => '修改人姓名',
  'LBL_CREATED' => '创建人',
  'LBL_CREATED_ID' => '创建人编号',
  'LBL_DESCRIPTION' => '说明',
  'LBL_DELETED' => '已删除',
  'LBL_NONINHERITABLE' => '不可继承的',
  'LBL_LIST_NONINHERITABLE' => '不可继承的',
  'LBL_NAME' => '名称',
  'LBL_CREATED_USER' => '创建人',
  'LBL_MODIFIED_USER' => '修改人',
  'LBL_LIST_FORM_TITLE' => '安全组',
  'LBL_MODULE_NAME' => '安全组管理',
  'LBL_MODULE_TITLE' => '安全组管理',
  'LNK_NEW_RECORD' => '新增一个安全组',
  'LNK_LIST' => 'List View',
  'LBL_SEARCH_FORM_TITLE' => '查找安全组',
  'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '安全组管理',
  'LBL_USERS' => '用户',
  'LBL_USERS_SUBPANEL_TITLE' => '用户',
  'LBL_ROLES_SUBPANEL_TITLE' => '角色',
  
  'LBL_CONFIGURE_SETTINGS' => '配置',
  'LBL_ADDITIVE' => 'Additive Rights',
  'LBL_ADDITIVE_DESC' => "User gets greatest rights of all roles assigned to the user or the user's group(s)",
  'LBL_STRICT_RIGHTS' => 'Strict Rights',
  'LBL_STRICT_RIGHTS_DESC' => "If a user is a member of several groups only the respective rights from the group assigned to the current record are used.",
  'LBL_USER_ROLE_PRECEDENCE' => 'User Role Precedence',
  'LBL_USER_ROLE_PRECEDENCE_DESC' => 'If any role is assigned directly to a user that role should take precedence over any group roles.',
  'LBL_INHERIT_TITLE' => '组继承规则',
  'LBL_INHERIT_CREATOR' => 'Inherit from Created By User',
  'LBL_INHERIT_CREATOR_DESC' => 'The record will inherit all the groups assigned to the user who created it.',
  'LBL_INHERIT_PARENT' => 'Inherit from Parent Record',
  'LBL_INHERIT_PARENT_DESC' => 'e.g. If a case is created for a contact the case will inherit the groups associated with the contact.',
  'LBL_USER_POPUP' => 'New User Group Popup',
  'LBL_USER_POPUP_DESC' => 'When creating a new user show the SecurityGroups popup to assign the user to a group(s).',
  'LBL_INHERIT_ASSIGNED' => 'Inherit from Assigned To User',
  'LBL_INHERIT_ASSIGNED_DESC' => 'The record will inherit all the groups of the user assigned to the record. Other groups assigned to the record will NOT be removed.',
  'LBL_POPUP_SELECT' => 'Use Creator Group Select',
  'LBL_POPUP_SELECT_DESC' => 'When a record is created by a user in more than one group show a group selection panel on the create screen. Otherwise inherit that one group.',
  'LBL_FILTER_USER_LIST' => 'Filter User List',
  'LBL_FILTER_USER_LIST_DESC' => "Non-admin users can only assign to users in the same group(s)",  
  
  'LBL_DEFAULT_GROUP_TITLE' => '新记录的默认组',
  'LBL_ADD_BUTTON_LABEL' => '增加',
  'LBL_REMOVE_BUTTON_LABEL' => '移除',
  'LBL_GROUP' => '组:',
  'LBL_MODULE' => '模块:',
  
  'LBL_MASS_ASSIGN' => '安全组: 批量分配',
  'LBL_ASSIGN' => '分配',
  'LBL_REMOVE' => '移除',
  'LBL_ASSIGN_CONFIRM' => 'Are you sure that you want to add this group to the ',
  'LBL_REMOVE_CONFIRM' => 'Are you sure that you want to remove this group from the ',
  'LBL_CONFIRM_END' =>' selected record(s)?',
  
  'LBL_SECURITYGROUP_USER_FORM_TITLE' => '安全组/用户',
  'LBL_USER_NAME' => '用户名',
  'LBL_SECURITYGROUP_NAME' => '安全组名称',
  'LBL_LIST_USER_NONINHERITABLE' => '不可继承的',
  'LBL_HOMEPAGE_TITLE' => '组消息',
  'LBL_TITLE' => 'Title',
  'LBL_ROWS' => '行数',
  'LBL_MAKE_POST' => 'Make a Post',
  'LBL_POST' => 'Post',
  'LBL_SELECT_GROUP' => '选择一个组',
  'LBL_SELECT_GROUP_ERROR' => '请选择一个组然后重试。',
  
  'LBL_HOOKUP_SELECT' => "选择一个模块",
  'LBL_HOOKUP_CONFIRM_PART1' => "You are about to add a relationship between Security Groups and ",
  'LBL_HOOKUP_CONFIRM_PART2' => ". Continue?",
  
  'LBL_GROUP_SELECT' => 'Select which groups should have access to this record',
  'LBL_ERROR_DUPLICATE' => 'Due to a possible duplicate detected by Sugar you will have to manually add Security Groups to your newly created record.',

  'LBL_INBOUND_EMAIL' => 'Inbound email account',
  'LBL_INBOUND_EMAIL_DESC' => 'Only allow access to an email account if user belongs to a group that is assigned to the mail account.',
  'LBL_PRIMARY_GROUP' => '主要组',

);
?>