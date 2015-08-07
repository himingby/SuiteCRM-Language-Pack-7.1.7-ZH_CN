<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_DELETE_USER_CONFIRM' => '如果删除用户记录，对于的员工激励也将会被删除。<br/><br/>如果要删除用户，请点击确定。',
	'LBL_DELETE_GROUP_CONFIRM' => '您确定要删除这个组用户吗？ 如果是，请点击确定<br/>如果删除组用户，您将不能重新分配这个组用户的记录给其他用户。',
	'LBL_DELETE_PORTAL_CONFIRM' => '您确定要删除这个Portal API用户吗？如果要删除用户，请点击确定。',
	'LBL_DELETE_USER_CONFIRM' => '如果删除用户记录，对于的员工激励也将会被删除。<br/><br/>如果要删除用户，请点击确定。',

	'LNK_IMPORT_USERS'                 => '导入用户',
	'ERR_DELETE_RECORD'					=> '必须指定记录编号才能删除客户。',
	'ERR_EMAIL_INCORRECT'				=> '请提供一个有效的电子邮件地址用以生成和发送密码.',
	'ERR_EMAIL_NO_OPTS'					=> '不能找到收件箱的优化设置。',
	'ERR_ENTER_CONFIRMATION_PASSWORD' => '请输入确认密码。',
	'ERR_ENTER_NEW_PASSWORD' => '请输入新密码',
	'ERR_ENTER_OLD_PASSWORD' => '请输入旧密码',
	'ERR_IE_FAILURE1' => '[点击这儿返回]',
	'ERR_IE_FAILURE2' => '连接电子邮件帐户存在问题。请检查您的设置，再试一次。',
	'ERR_IE_MISSING_REQUIRED'			=> "内部邮件的设置丢失了需要的信息.\n  请查看您的设置后重试.\n\n如果您没有设置内部邮件, 请清除这个段的所有字段.",
	'ERR_INVALID_PASSWORD' => '您必须指定一个有效的用户名和密码。',
	'ERR_NO_LOGIN_MOBILE' => '您第一次登录本系统必须使用非移动浏览器或者使用常规模式. 请使用全能浏览器或者点击下面的常规链接. 由此造成的不便我们深表歉意.',
	'ERR_LAST_ADMIN_1' => '用户名“',
	'ERR_LAST_ADMIN_2' => '”是最后一个具有管理员权限的员工。至少有一个员工必须是管理员。',
	'ERR_PASSWORD_CHANGE_FAILED_1' => '用户密码更改失败',
	'ERR_PASSWORD_CHANGE_FAILED_2' => '失败。必须设置新密码。',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '.新密码无效.',
	'ERR_PASSWORD_INCORRECT_OLD_1' => '用户的旧密码不正确',
	'ERR_PASSWORD_INCORRECT_OLD_2' => '。重新输入密码信息。',
	'ERR_PASSWORD_MISMATCH'				=> '密码不匹配',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => '必须指定一个有效的用户名和电子邮件地址.',
	'ERR_PASSWORD_LINK_EXPIRED'         => '你的链接已经过期,请生成一个新的',
	'ERR_REENTER_PASSWORDS'				=> '输入的密码与新密码不符',
	'ERR_REPORT_LOOP'					=> '系统检测到循环汇报。用户不可以自己汇报，用户的经理也不可以汇报给他们。',
	'ERR_RULES_NOT_MET'                 => '密码输入错误，请重新输入',
	'ERR_USER_INFO_NOT_FOUND'			=> '用户信息缺失',
	'ERR_USER_NAME_EXISTS_1'			=> '用户名 ',
	'ERR_USER_NAME_EXISTS_2'			=> ' 用户名存在，请修改用户名',
	'ERR_USER_IS_LOCKED_OUT'			=> '当前用户已被锁定, 不能使用现有密码登录. 欲尝试再次登录Sugar, 请点击发送新密码按钮.',

	'LBL_PASSWORD_SENT'                => '密码已更新',
	'LBL_CANNOT_SEND_PASSWORD'         => '密码无法发送',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> '系统无法处理你的需求，请核查:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP服务器地址与端口',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP用户名和密码',
	'ERR_RECIPIENT_EMAIL'				=> '接收邮件地址',
	'ERR_SERVER_STATUS'					=> '你的服务器状态',
	'ERR_SERVER_SMTP_EMPTY'				=> '系统无法发送邮件到该用户. 请检查系统发信设置. <a href="index.php?module=EmailMan&action=config">邮件设置</a>.',

	'LBL_ADDRESS_CITY' => '城市',
	'LBL_ADDRESS_COUNTRY' => '国家',
	'LBL_ADDRESS_INFORMATION' => '地址信息',
	'LBL_ADDRESS_POSTALCODE' => '邮编',
	'LBL_ADDRESS_STATE' => '省份',
	'LBL_ADDRESS_STREET' => '街道',
	'LBL_ADDRESS' => '地址',
	'LBL_ADMIN_USER' => '系统管理员',


	'LBL_ADMIN_DESC' => '用户可以访问管理页面和所有的记录.',
	'LBL_REGULAR_DESC' => '用户根据角色权限访问模块和记录.',



	'LBL_ADMIN_TEXT' => '给这个用户授予管理员权限',
	'LBL_ADMIN' => '管理员',
	'LBL_ANY_EMAIL' => '任何电子邮件',
	'LBL_ANY_PHONE' => '任何电话',
	'LBL_BUTTON_CREATE' => '新增',
	'LBL_BUTTON_EDIT' => '编辑',
	'LBL_CALENDAR_OPTIONS' => '日程安排选项',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> '请输入一个新密码.',
	'LBL_CHANGE_PASSWORD_TITLE'         => '更改密码',
	'LBL_CHANGE_PASSWORD_BUTTON_KEY'	=> 'P',
	'LBL_CHANGE_PASSWORD_BUTTON_LABEL' => '更改密码',
	'LBL_CHANGE_PASSWORD_BUTTON_TITLE' => '更改密码[Alt+P]',
	'LBL_CHANGE_PASSWORD' => '更改密码',
	'LBL_CHOOSE_A_KEY' => '选择一个密钥来阻止未授权的人公布您的日程安排',
	'LBL_CHOOSE_WHICH' => '选择要显示的标签',
	'LBL_CITY' => '城市',

	'LBL_CLEAR_BUTTON_TITLE' => '清除',


	'LBL_CONFIRM_PASSWORD'				=> '密码确认',
	'LBL_CONFIRM_REGULAR_USER'=>'您已将该用户从系统管理员转换为普通用户. 保存修改之后, 该用户将没有系统管理权限.\n\n确认操作请点击 “确定” .\n取消操作请点击 “返回”.',
	'LBL_COUNTRY'						=> '国家',
	'LBL_CURRENCY_TEXT'					=> '选择默认将显示的货币当你创建一个新记录。这也是人民币,将显示在列表视图中的列机会。',
	'LBL_CURRENCY'						=> '货币',
	'LBL_CURRENCY_EXAMPLE'				=> '货币显示示例',
	'LBL_CURRENCY_SIG_DIGITS'			=> '货币有效数字',
	'LBL_CURRENCY_SIG_DIGITS_DESC'		=> '显示的小数位数',
	'LBL_NUMBER_GROUPING_SEP' => '千分符',
	'LBL_NUMBER_GROUPING_SEP_TEXT' => '分隔千位的字符',
	'LBL_DECIMAL_SEP' => '小数符号',
	'LBL_DECIMAL_SEP_TEXT'				=>  '分隔小数部分的字符',
	'LBL_FDOW'					=> '周的第一天',
	'LBL_FDOW_TEXT'				=> '第一天显示在周、月和年',
	'LBL_DATE_FORMAT_TEXT' => '设置日期戳的显示格式',
	'LBL_DATE_FORMAT' => '日期格式',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> '用户',
	'LBL_DEPARTMENT'					=> '部门',
	'LBL_DESCRIPTION'					=> '说明',
	'LBL_DISPLAY_TABS'					=> '显示模块',
	'LBL_DOWNLOADS'                    => '下载',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST)指示您遵循夏令时',
	'LBL_EDIT_TABS'						=> '编辑标签',
	'LBL_EDIT'							=> '编辑',
	'LBL_USER_HASH'						=> '密码',
	'LBL_AUTHENTICATE_ID'				=> '身份验证Id',
	'LBL_ACCOUNT_NAME'					=> '账户名称',
	'LBL_USER_PREFERENCES'				=> '用户首选项',
	'LBL_EXT_AUTHENTICATE'				=> '外部认证',
	'LBL_EMAIL_OTHER'					=> 'Email 2',
	'LBL_EMAIL'							=> 'Email地址',
	'LBL_EMAIL_CHARSET'					=> '出站字符集',
	'LBL_EMAIL_EDITOR_OPTION'			=> '撰写格式',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> '预先填入Gmail默认值',
	'LBL_EMAIL_LINK_TYPE'				=> 'Email客户端',

	'LBL_EMAIL_LINK_TYPE_HELP'=>'系统默认邮件客户端 : 默认邮件客户端由系统管理员设置.	SugarCRM邮件客户端 : 该客户端在Sugar的电子邮件模块中.	外部邮件客户端 : 其他邮件客户端, 例如Microsoft Outlook.',

	'LBL_EMAIL_NOT_SENT'=>'系统无法处理您的请求. 请联系系统管理员.',
    'LBL_EMAIL_PROVIDER'               => 'Email供应商',
	'LBL_EMAIL_SHOW_COUNTS'				=> '显示email数量?',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> '这个签名需要一个名字。',
    'LBL_EMAIL_SMTP_SSL'				=> '设置SMTP在SSL上有效',
	'LBL_EMAIL_TEMPLATE_MISSING'=>'尚未选择邮件模板来发送包含密码的邮件给用户. 请在密码管理页面中选择一个邮件模板.',
    'LBL_EMPLOYEE_STATUS'				=> '雇员状态',
    'LBL_EMPLOYEE_INFORMATION'         => '雇员信息',
	'LBL_ERROR'							=> '错误',
	'LBL_EXPORT_CHARSET'				=> '导入导出字符设置',
	'LBL_EXPORT_CHARSET_DESC'			=> '选择你的语言环境中使用的字符集。进口,该属性将用于数据。csv导出和名片的一代。',
	'LBL_EXPORT_DELIMITER'				=> '出口分隔符',
	'LBL_EXPORT_DELIMITER_DESC'			=> '指定用于分隔导出数据的字符。',
	'LBL_FAX_PHONE'						=> '传真',
	'LBL_FAX'							=> '传真',
	'LBL_FIRST_NAME'					=> '姓',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'系统生成的密码',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => '重置密码',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => '重置密码',
    'LBL_GENERATE_PASSWORD'             => '重置密码',
	'LBL_GROUP_DESC' => '作为分组用户。这个用户不可以通过Sugar Suite网页登录。这个用户只能用于通过收件箱功能指派记录到分组。',
	'LBL_GROUP_USER_STATUS'				=> '组用户',
	'LBL_GROUP_USER'					=> '组用户',
	'LBL_HIDE_TABS'						=> '隐藏模块',
	'LBL_HOME_PHONE'					=> '家庭电话',
	'LBL_INBOUND_TITLE'					=> '账户信息',
	'LBL_IS_ADMIN'						=> '管理员',
	'LBL_LANGUAGE'						=> '语言',
	'LBL_LAST_NAME'						=> '名字',
    'LBL_LAST_NAME_SLASH_NAME'			=> '名字',
    'LBL_LAYOUT_OPTIONS'                => '布局操作',
	'LBL_LDAP'=>'LDAP',
	'LBL_LDAP_AUTHENTICATION'=>'LDAP认证',
	'LBL_LIST_ACCEPT_STATUS'			=> '接受状态',
	'LBL_LIST_ADMIN'					=> '管理',
	'LBL_LIST_DEPARTMENT'				=> '部门',
	'LBL_LIST_EMAIL'					=> 'Email',
	'LBL_LIST_FORM_TITLE'				=> '用户',
	'LBL_LIST_GROUP'					=> '组',
	'LBL_LIST_LAST_NAME'				=> '名字',
	'LBL_LIST_MEMBERSHIP'				=> '会员',
	'LBL_LIST_NAME'						=> '名字',
	'LBL_LIST_PRIMARY_PHONE'			=> '主要电话',
	'LBL_LIST_PASSWORD'					=> '密码',
	'LBL_LIST_STATUS'					=> '状态',
	'LBL_LIST_TITLE'					=> '标题',
	'LBL_LIST_USER_NAME'				=> '用户名字',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> '名字显示格式',
	'LBL_LOCALE_DESC_FIRST' => '[名]',
	'LBL_LOCALE_DESC_LAST' => '[姓]',
	'LBL_LOCALE_DESC_SALUTATION' => '[称谓]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Title]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => '实例',
	'LBL_LOCALE_NAME_FORMAT_DESC' => '设置如何显示名字。',
	'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>“s”称谓<br>“f”名<br>“l”姓</i>',
    'LBL_SAVED_SEARCH'                  => '保存查找 & 布局',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> '登录',
	'LBL_LOGIN_BUTTON_TITLE'			=> '登录',
	'LBL_LOGIN_WELCOME_TO'				=> '欢迎',
	'LBL_LOGIN_OPTIONS'					=> '操作',
    'LBL_LOGIN_FORGOT_PASSWORD'         => '忘记密码?',
    'LBL_LOGIN_SUBMIT'      		    => '确认',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => '输入错误尝试太多',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => '重新登录 ',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> '天',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> '小时',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => '分钟',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => '秒',
    'LBL_LOGIN_ADMIN_CALL'              => '请联系系统管理员',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => '你应退出请重新登录',
    'LBL_LOGGED_OUT_2' => '这里',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> '回复地址',
	'LBL_MAIL_FROMNAME'					=> '回复名字',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'Email设置',
	'LBL_MAIL_SENDTYPE'					=> 'Mail传输代理',
	'LBL_MAIL_SMTPAUTH_REQ'				=> '使用SMTP身份验证?',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP端口',
	'LBL_MAILMERGE_TEXT'				=>  '启用邮件合并(邮件合并必须由管理员在配置中启用)',
	'LBL_MAILMERGE'						=> 'Mail合并',
	'LBL_MAX_TAB'						=> '模块最大数量',
	'LBL_MAX_TAB_DESCRIPTION' => '显示在益出菜单前，页面上方的标签的数量。',
	'LBL_MAX_SUBTAB' => '子标签的数量',
	'LBL_MAX_SUBTAB_DESCRIPTION' => '显示在益出菜单前，每个标签中子标签的数量。',
	'LBL_MESSENGER_ID'					=> 'IM名称',
	'LBL_MESSENGER_TYPE'				=> 'IM类型',
	'LBL_MOBILE_PHONE'					=> '移动手机',
	'LBL_MODIFIED_BY'                  =>'修改者',
	'LBL_CREATED_BY_NAME' => '创建者', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'修改者ID',
    'LBL_MODULE_NAME'					=> '用户',
	'LBL_MODULE_TITLE'					=> '用户: 首页',
    'LBL_NAME'							=> '全名',
    'LBL_SIGNATURE_NAME'                                        =>  '名称',
    'LBL_NAVIGATION_PARADIGM'           => '导航',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION'   => '选择能够查看模块根据预定义的团体在导航栏中。选中时,“过滤器菜单”功能将出现在“更多”菜单。',
    'LBL_USE_GROUP_TABS'                => '模块分组',
	'LBL_NEW_FORM_TITLE'				=> '新用户',
	'LBL_NEW_PASSWORD'					=> '新密码',
	'LBL_NEW_PASSWORD1'					=> '密码',
	'LBL_NEW_PASSWORD2'					=> '确认密码',
	'LBL_NEW_USER_PASSWORD_1'			=> '密码修改成功.',
	'LBL_NEW_USER_PASSWORD_2'=>'包含有系统生成链接的电子邮件已发送到该用户. 用户必须提供一个新的密码.',
	'LBL_NEW_USER_PASSWORD_3'=>'密码生成成功.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> '新用户',
	'LBL_NEW_USER_BUTTON_TITLE'			=> '新用户',
	'LBL_NORMAL_LOGIN'					=> '切换到常规视图',
	'LBL_NOTES'							=> '笔记',
	'LBL_OFFICE_PHONE'					=> '办公电话',
	'LBL_OLD_PASSWORD'					=> '当前密码',
	'LBL_OTHER_EMAIL'					=> '其他email地址',
	'LBL_OTHER_PHONE'					=> '其他电话',
	'LBL_OTHER'							=> '其他',
	'LBL_PASSWORD'						=> '密码',
	'LBL_PASSWORD_GENERATED'=>'已生成新密码',
	'LBL_PASSWORD_EXPIRATION_LOGIN'=>'您的密码已过期. 请提供一个新密码.',
	'LBL_PASSWORD_EXPIRATION_GENERATED'=>'您的密码为系统生成',
	'LBL_PASSWORD_EXPIRATION_TIME'=>'您的密码已过期. 请提供一个新密码.',

	'LBL_PSW_MODIFIED' => '密码最后更新时间',
	'LBL_PHONE' => '电话',
	'LBL_PICK_TZ_WELCOME' => '欢迎来到Sugar Suite。',
	'LBL_PICK_TZ_DESCRIPTION' => '在继续以前，请从下面的时区列表中确认您的时区。您可以通过访问“我的帐户”来修改您的时区。',
	'LBL_PORTAL_ONLY_DESC'				=> '用于门户API。这种类型不能登录通过糖的web界面。',
	'LBL_PORTAL_ONLY_USER'					=> '门户API用户',
	'LBL_POSTAL_CODE'					=> '邮政编码',
	'LBL_PRIMARY_ADDRESS'				=> '主要地址',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> '选择新用户经历了第一次登录新用户向导。',
	'LBL_PROMPT_TIMEZONE'				=> '用户向导提示',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> '提供一个用户名和邮件地址',
	'LBL_PUBLISH_KEY'					=> '发布关键',

	'LBL_RECAPTCHA_NEW_CAPTCHA'=>'重新获取CAPTCHA',
	'LBL_RECAPTCHA_SOUND'=>'切换到声音',
	'LBL_RECAPTCHA_IMAGE'=>'切换到图像',
	'LBL_RECAPTCHA_INSTRUCTION'=>'输入下面的两个字',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=>'在右边输入两个字',
	'LBL_RECAPTCHA_FILL_FIELD'=>'输入图片中的文本.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'=>'无效的Recaptcha密钥',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=>'验证码不正确.',
	'LBL_RECAPTCHA_UNKNOWN'=>'未知的Recaptcha错误',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT' => '当有记录指派给您的时候，接收电子邮件通知。',
	'LBL_RECEIVE_NOTIFICATIONS' => '在指派的时候通知',
	'LBL_REGISTER'                      => '新用户? 请登记',
	'LBL_REGULAR_USER'                  => '普通用户',
	'LBL_REMINDER_TEXT' => '为即将到来的电话或者会议，弹出提醒',
	'LBL_REMINDER'						=> '显示提醒',
	'LBL_REMINDER_POPUP' => '流行',
	'LBL_REMINDER_EMAIL' => 'Email',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => '发送邮件所有受邀者',
	'LBL_REMOVED_TABS' => '管理员移除的标签',
	'LBL_REPORTS_TO_NAME'				=> '上级领导',
	'LBL_REPORTS_TO'					=> '上级领导',
    'LBL_REPORTS_TO_ID'                => '上级领导ID:',
	'LBL_REQUEST_SUBMIT'				=> '你的需求已经被确认.',
	'LBL_RESET_TO_DEFAULT'				=> '恢复初始化设置',
	'LBL_RESET_PREFERENCES'				=> '恢复默认值',
	'LBL_RESET_PREFERENCES_WARNING' => '您确定要重新设置您所有的参数?',
    'LBL_RESET_PREFERENCES_WARNING_USER' => '您确定要重新设置这个用户的所有参数?',
    'LBL_RESET_HOMEPAGE'                => '复位默认主页',
    'LBL_RESET_DASHBOARD'               => '复位指示板',
	'LBL_RESET_HOMEPAGE_WARNING' => '您确定要重新设置您的主页吗?',
    'LBL_RESET_DASHBOARD_WARNING'       => '您确定您想重新设置您的统计图吗?',
	'LBL_SALUTATION'                    => '问候',
    'LBL_ROLES_SUBPANEL_TITLE'			=> '角色',
	'LBL_SEARCH_FORM_TITLE'				=> '搜索用户',
	'LBL_SEARCH_URL'					=> '搜索位置',
	'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择打钩的用户',
	'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择打钩的用户',
	'LBL_SETTINGS_URL_DESC' => '当为Microsoft&reg;Outlook&reg;和Microsoft&reg;Word&reg;的Sugar插件建立登录设置时，使用这个网址。',
	'LBL_SETTINGS_URL' => '网址',
	'LBL_SIGNATURE' => '签名',
	'LBL_SIGNATURE_HTML' => 'HTML签名',
	'LBL_SIGNATURE_DEFAULT' => '使用签名?',
	'LBL_SIGNATURE_PREPEND' => '使用上面签名回复?',
	'LBL_SIGNATURES' => '签名',
	'LBL_STATE' => '省份',
	'LBL_STATUS' => '状态',
	'LBL_SUBPANEL_LINKS' => '面板链接',
	'LBL_SUBPANEL_LINKS_DESCRIPTION' => '在详细视图中，显示一行面板的快速链接。',
	'LBL_SUBPANEL_TABS' => '面板标签',
	'LBL_SUBPANEL_TABS_DESCRIPTION' => '在详细视图中，把面板分组到标签中，并且一次显示一个标签。',
	'LBL_SUGAR_LOGIN' => '是sugar用户',
	'LBL_SUPPORTED_THEME_ONLY' => '只有影响主题才支持这个选项。',
	'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => '如果选中，在边上显示最近查看栏。否则的话，它会在顶部显示。',
	'LBL_SWAP_SHORTCUT_DESCRIPTION' => '如果选中，在顶部显示快捷方式栏。否则的话，它会在边上显示。',
	'LBL_SWAP_LAST_VIEWED_POSITION' => '边上显示最近查看',
	'LBL_SWAP_SHORTCUT_POSITION' => '顶部显示快捷方式',
	'LBL_TAB_TITLE_EMAIL' => '电子邮件设置',
	'LBL_TAB_TITLE_USER' => '用户设置',
	'LBL_THEME' => '主题',
	'LBL_THEME_COLOR'					=> '颜色',
	'LBL_THEME_FONT'					=> '字体',
	'LBL_TIME_FORMAT_TEXT' => '设置时间戳的显示格式',
	'LBL_TIME_FORMAT' => '时间格式',
	'LBL_TIMEZONE_DST_TEXT' => '遵循夏令时',
	'LBL_TIMEZONE_DST' => '夏令时',
	'LBL_TIMEZONE_TEXT' => '设置当前的时区',
	'LBL_TIMEZONE' => '时区',
	'LBL_TITLE' => '职称',
	'LBL_USE_REAL_NAMES' => '显示全名',
	'LBL_USE_REAL_NAMES_DESC' => '显示用户全名来代替用户名',
	'LBL_USER_INFORMATION' => '用户信息',
	'LBL_USER_LOCALE' => '区域设置',
	'LBL_USER_NAME' => '用户名',
	'LBL_USER_SETTINGS' => '用户设置',
	'LBL_USER_TYPE' => '用户类型',
	'LBL_USER_ACCESS'                  => '访问',
	'LBL_USER'				=> '用户',
	'LBL_WORK_PHONE'					=> '办公电话',
	'LBL_YOUR_PUBLISH_URL'				=> '公布我的存储单元',
    'LBL_ICAL_PUB_URL'                  => 'iCal集成URL',
    'LBL_ICAL_PUB_URL_HELP'             => '使用这个URL订阅sugar crm 在iCal日历。',
	'LBL_YOUR_QUERY_URL'				=> '你的查询网站',
	'LNK_NEW_USER'						=> '创建新用户',
	'LNK_NEW_PORTAL_USER'				=> '建立门户API用户',
	'LNK_NEW_GROUP_USER'				=> '建立组用户',
	'LNK_USER_LIST'						=> '查看用户',
	'LNK_REASSIGN_RECORDS'				=> '重新分配记录',
    'LBL_PROSPECT_LIST'                 => '前景列表',
    'LBL_EMAILS'                        => 'Emails',
    'LBL_PROCESSING'                    => '处理',
    'LBL_UPDATE_FINISH'                 => '更新完成',
    'LBL_AFFECTED'                      => '影响',

    'LBL_USER_NAME_FOR_ROLE'            =>'用户/组/角色',
    'LBL_SESSION_EXPIRED'               => '由于许可到期你已经退出系统',

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS' => '提交最佳设置',
	'LBL_ASSIGN_TO_USER' => '指派给用户',
	'LBL_BASIC' => '收件箱设置',
	'LBL_CERT_DESC' => '强制验证邮件服务器的安全证书–如果是自我签署，请不要使用',
	'LBL_CERT' => '证书验证',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG' => '<br>寻找最佳连接变量。',
	'LBL_FIND_OPTIMUM_TITLE' => '寻找最佳配置',
	'LBL_FORCE' => '强制否定',
	'LBL_FORCE_DESC' => '一些IMAP/POP3服务器需要特殊的交换机。当连接失败的时候，请检查交换机(像/notls)',
	'LBL_FOUND_OPTIMUM_MSG' => '<br>发现优化设置。点击下面的按钮来提交他们到您的邮箱。',
	'LBL_EMAIL_INBOUND_TITLE' => '收件箱设置',
	'LBL_EMAIL_OUTBOUND_TITLE' => '发件箱设置',
	'LBL_LOGIN' => '用户名',
	'LBL_MAILBOX_DEFAULT' => '收件箱',
	'LBL_MAILBOX_SSL_DESC' => '连接时使用SSL。如果不能连接，请检查您在安装PHP的时候，配置项中是否包含了“--with-imap-ssl”。',
	'LBL_MAILBOX' => '已监视的文件夹',
	'LBL_MAILBOX_TYPE' => '可能的动作',
	'LBL_MARK_READ_NO' => '导入后删除标记过的电子邮件',
	'LBL_MARK_READ_YES' => '导入后在服务器上保留电子邮件',
	'LBL_MARK_READ_DESC' => '导入并标记邮件服务器上已读的消息；不要删除它们。',
	'LBL_MARK_READ' => '在服务器上保留消息',
	'LBL_ONLY_SINCE_NO' => '不。检查此邮件服务器上的所有邮件。',
	'LBL_ONLY_SINCE_YES' => '是。',
	'LBL_ONLY_SINCE_DESC' => '当使用POP3时，PHP将不能过滤新信息或未读信息。此标签可以核对上次收件箱里的信息。如果您的邮件服务器不支持IMAP，它将对此有很大改进。',
	'LBL_ONLY_SINCE' => '导入最后确认',
	'LBL_PORT' => '邮件服务器端口',
	'LBL_SERVER_OPTIONS' => '高级设置',
	'LBL_SERVER_TYPE' => '邮件服务器协议',
	'LBL_SERVER_URL' => '邮件服务器地址',
	'LBL_SSL' => '使用SSL',
	'LBL_SSL_DESC' => '连接到您的邮件服务器的时候，使用安全端口层。',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE' => '测试[Alt+T]',
	'LBL_TEST_SETTINGS' => '测试设置',
	'LBL_TEST_SUCCESSFUL' => '连接完全成功。',
	'LBL_TLS_DESC' => '连接邮件服务器时使用传输层安全协议–如果您的邮件服务器支持这此协议，请只使用这一个。',
	'LBL_TLS' => '使用TLS',
	'LBL_TOGGLE_ADV' => '显示高级选项',
	'LBL_OWN_OPPS' => '没有商业机会',
	'LBL_EXTERNAL_AUTH_ONLY'			=> '验证该用户只能通过',
	'LBL_ONLY'							=> '只能',
	'LBL_OWN_OPPS_DESC' => '如果这个用户未给指派商业机会，设置它为真。您应该忽略这个用户标记，他不是经理，没有涉及销售活动。在销售预测模块中使用。',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP错误:请和管理员联系',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP错误:服务未加载',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => '用户假期',
	'LBL_RESOURCE_NAME' => '名称',
	'LBL_RESOURCE_TYPE' => '类型',

	'LBL_PDF_SETTINGS'  =>  'PDF设置',
	'LBL_PDF_PAGE_FORMAT'  =>  '页面格式',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  '页面使用的格式',
	'LBL_PDF_PAGE_ORIENTATION'  =>  '以页面为基准',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  '纵向',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  '横向',
	'LBL_PDF_MARGIN_HEADER'  =>  '页眉',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  '页脚',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  '上边距',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  '下边距',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  '左边距',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  '右边距',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  '主字体名称',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  '主字体一般用于标题和正文',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  '主字体大小',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  '资料字体名称',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  '资料字体通常用于页脚',
	'LBL_PDF_FONT_SIZE_DATA'  =>  '资料字体大小',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'You have selected yourself. You cannot change the User Type or Status of yourself.',
	'LBL_MAIL_SMTPUSER'	=> '用户名',
	'LBL_MAIL_SMTPPASS'	=> '密码',
	'LBL_MAIL_SMTPSERVER' => 'SMTP邮件服务器',
	'LBL_SMTP_SERVER_HELP' => '这个SMTP邮件服务器可以用于发文。提供一个用户名和密码为您的电子邮件帐户以使用邮件服务器。',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理员尚未配置默认的境外账户。无法发送测试邮件。',
    'LBL_MAIL_SMTPAUTH_REQ'				=> '使用SMTP身份验证?',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP密码:',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP端口:',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP服务器:',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP用户名:',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP服务器类型:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP服务器规格',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '选择你的邮件供应商:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail密码:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail密码:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail邮件地址:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange密码:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange用户名:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange服务器端口:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange服务器:',
        'LBL_OK'   =>'确认',
        'LBL_CANCEL'    => '取消',
        'LBL_DELETE_USER' => '删除用户',
	// Wizard
	'LBL_WIZARD_TITLE' => '用户向导',
	'LBL_WIZARD_WELCOME_TAB' => '欢迎',
	'LBL_WIZARD_WELCOME_TITLE' => '欢迎使用SuiteCRM！',
	'LBL_WIZARD_WELCOME' => '单击 <b>下一步</b> 配置SuiteCRM基本信息。',
	'LBL_WIZARD_WELCOME_NOSMTP' => '单击 <b>下一步</b> 配置SuiteCRM基本信息。',
	'LBL_WIZARD_NEXT_BUTTON' => '下一步 >',
	'LBL_WIZARD_BACK_BUTTON' => '< 上一步',
	'LBL_WIZARD_SKIP_BUTTON' => '跳过',
	'LBL_WIZARD_FINISH_BUTTON' => '完成',
	'LBL_WIZARD_CONTINUE_BUTTON' => '继续',
	'LBL_WIZARD_FINISH_TAB' => '完成',
	'LBL_WIZARD_FINISH_TITLE' => '系统基本信息配置完成',

    'LBL_WIZARD_FINISH' => '点击 <b>完成</b> 按钮保存您的设置信息并开始使用SuiteCRM. 要获取更多SuiteCRM的信息:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!-->请访问 www.suitecrm.com <img src=include/images/sugarcrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>Suite CRM</b></a></td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => '下一步您想要做什么？',
    'LBL_WIZARD_FINISH2' => '开始使用Sugar',
    'LBL_WIZARD_FINISH3' => '导入数据 ',
    'LBL_WIZARD_FINISH4' => '从外部数据源导入数据。',
    'LBL_WIZARD_FINISH5' => '创建用户',
    'LBL_WIZARD_FINISH6' => '创建新用户。',
    'LBL_WIZARD_FINISH7' => '查看和管理应用设置',
    'LBL_WIZARD_FINISH8' => '管理高级设置，包括应用缺省设置。',
    'LBL_WIZARD_FINISH9' => '应用设置',
    'LBL_WIZARD_FINISH10' => '使用工作室创建并管理应用字段和布局。',
    'LBL_WIZARD_FINISH11' => '访问Sugar大学 ',
    'LBL_WIZARD_FINISH12' => '最终用户和系统管理员培训文档和资料。',
    'LBL_WIZARD_FINISH14' => '文档 ',
    'LBL_WIZARD_FINISH15' => '产品说明和版本发布说明 ',
    'LBL_WIZARD_FINISH16' => '知识库 ',
    'LBL_WIZARD_FINISH17' => 'SugarCRM使用技巧 ',
    'LBL_WIZARD_FINISH18' => '论坛 ',
    'LBL_WIZARD_FINISH19' => 'Sugar用户和开发人员社区 ',
    'LBL_WIZARD_FINISH2DESC' => '进入应用首页。',
    'LBL_WIZARD_PERSONALINFO' => '你的信息',
    'LBL_WIZARD_LOCALE' => '你的场所',
    'LBL_WIZARD_SMTP' => '您的电子邮件账户',
	'LBL_WIZARD_PERSONALINFO_DESC' => '提供您的个人信息。别的SugarCRM用户将能看到您的这些信息<br />用 <span class="required">*</span> 标识的是必填字段。',
	'LBL_WIZARD_LOCALE_DESC' => '指定您希望SugarCRM使用的时区、日期格式、货币格式、姓名格式。',
	'LBL_WIZARD_SMTP_DESC' => '提供您的电子邮件帐户的用户名和密码，作为缺省的外发电子邮件服务器。',
	'LBL_EAPM_SUBPANEL_TITLE' => '外部账户',

	'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
	'LBL_HELP' => '帮助' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => '选择目录' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => '预览' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth令牌',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth访问令牌",

    //For export labels
    'LBL_MODIFIED_USER_ID' => '修改人编号',
    'LBL_PHONE_HOME' => '家庭电话',
    'LBL_PHONE_MOBILE' => '移动电话',
    'LBL_PHONE_WORK' => '工作电话',
    'LBL_PHONE_OTHER' => '其他电话',
    'LBL_PHONE_FAX' => '传真',
    'LBL_PORTAL_ONLY' => '门户网站',
    'LBL_SHOW_ON_EMPLOYEES' => '显示员工的记录',
    'LBL_IS_GROUP' => '组',
    'LBL_EXPORT_CREATED_BY' => '创建人编号',

    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_DATE_ENTERED' => '输入日期',
    'LBL_DELETED' => '已删除',
    'LBL_HIDEOPTIONS' => '隐藏操作',
    'LBL_SHOWOPTIONS' => '显示操作',

    'LBL_SUITE_SUPERCHARGED' => "Supercharged by SuiteCRM",
    'LBL_SUITE_POWERED_BY' => "技术支持SugarCRM",
    'LBL_SUITE_TOP' => "返回顶部",
    'LBL_SUITE_PRINT' => "打印本页",
    'LBL_SUITE_DESC1' => 'SuiteCRM被SalesAgility重新编写和修改，SalesAgility是一家世界著名的SugarCRM顾问公司。',
    'LBL_SUITE_DESC2' => 'SuiteCRM将继续SugarCRM的承诺，继续做免费开源的CRM项目，并提供更加强大的功能，目前有社区版。',
    'LBL_SUITE_DESC3' => 'SalesAgility公司开发的SuiteCRM软件是不需要许可的，所有的代码都是开放的、免费的，可以下载的。没有任何收费项目。它将永远是开源的、免费的，不会有收费版本出现。',
    'LBL_QUICK_ACCOUNT' => '创建账户',
    'LBL_QUICK_CONTACT' => '创建联系人',
    'LBL_QUICK_OPPORTUNITY' => '创建商机',
    'LBL_QUICK_LEAD' => '创建线索',
    'LBL_QUICK_DOCUMENT' => '创建文档',
    'LBL_QUICK_CALL' => '安排电话',
    'LBL_QUICK_TASK' => '创建任务',

); // END STRINGS DEFS

?>