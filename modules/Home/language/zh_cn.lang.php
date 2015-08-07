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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => '主页',
  'LBL_MODULES_TO_SEARCH' => '搜索模块',
  'LBL_NEW_FORM_TITLE' => '新增联系人',
  'LBL_FIRST_NAME' => '名:',
  'LBL_LAST_NAME' => '姓:',
  'LBL_LIST_LAST_NAME' => '姓',
  'LBL_PHONE' => '电话:',
  'LBL_EMAIL_ADDRESS' => '电子邮件:',
  'LBL_MY_PIPELINE_FORM_TITLE' => '我的管道',
  'LBL_PIPELINE_FORM_TITLE' => '我的销售数据',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => '我的销售数据',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => '我谈成结束的商业机会',
  'LNK_NEW_CONTACT' => '新增联系人',
  'LNK_NEW_ACCOUNT' => '新增客户',
  'LNK_NEW_OPPORTUNITY' => '新增商业机会',
  'LNK_NEW_LEAD' => '新增潜在客户',
  'LNK_NEW_CASE' => '新增客户反馈',
  'LNK_NEW_NOTE' => '新增备忘录',
  'LNK_NEW_CALL' => '安排电话',
  'LNK_NEW_EMAIL' => '存档电子邮件',
  'LNK_COMPOSE_EMAIL' => '撰写电子邮件',
  'LNK_NEW_MEETING' => '安排会议',
  'LNK_NEW_TASK' => '新增任务',
  'LNK_NEW_BUG' => '汇报缺陷',
  'LBL_ADD_BUSINESSCARD' => '新增名片',
  'ERR_ONE_CHAR' => '请至少输入一个文字或者数字再查找 ...',
  'LBL_OPEN_TASKS' => '我未完成的任务',
  'LBL_SEARCH_RESULTS' => '查找结果',
  'LBL_SEARCH_RESULTS_IN' => '中',
  'LNK_NEW_SEND_EMAIL' => '撰写电子邮件',
  'LBL_NO_ACCESS' => '您对此没有权限，请联系系统管理员获取权限。',
  'LBL_NO_RESULTS_IN_MODULE' => '-- 没有结果 --',
  'LBL_NO_RESULTS' => '<h2>未找到结果。请重新查找。</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>查找技巧:</h3><ul><li>确信您在上面选择了合适的类别。</li><li>拓宽您的查找条件。</li><li>如果您还没有查找到任何结果，请使用高级搜索。</li></ul>',

  'LBL_RELOAD_PAGE' => '请 <a href="javascript: window.location.reload()">重新加载窗口</a> 来使用这个新增栏。',
  'LBL_ADD_DASHLETS' => '增加新增栏',
  'LBL_ADD_PAGE' => '添加页',
  'LBL_DEL_PAGE' => '删除页',
  'LBL_WEBSITE_TITLE' => '网站',
  'LBL_RSS_TITLE' => '新闻提要',
  'LBL_DELETE_PAGE' => '删除页',
  'LBL_CHANGE_LAYOUT' => '改变布局',
  'LBL_RENAME_PAGE' => '重命名页',
  'LBL_CLOSE_DASHLETS' => '关闭',
  'LBL_CLOSE_SITEMAP' => '关闭',
  'LBL_OPTIONS' => '选项',
  // dashlet search fields
  'LBL_TODAY'=>'今天',
  'LBL_YESTERDAY' => '昨天',
  'LBL_TOMORROW'=>'明天',
  'LBL_LAST_WEEK'=>'上周',
  'LBL_NEXT_WEEK'=>'下周',
  'LBL_LAST_7_DAYS'=>'过去7天',
  'LBL_NEXT_7_DAYS'=>'未来7天',
  'LBL_LAST_MONTH'=>'上个月',
  'LBL_NEXT_MONTH'=>'下个月',
  'LBL_LAST_QUARTER'=>'上个季度',
  'LBL_THIS_QUARTER'=>'这个季度',
  'LBL_LAST_YEAR'=>'去年',
  'LBL_NEXT_YEAR'=>'明年',
  'LBL_LAST_30_DAYS' => '过去30天',
  'LBL_NEXT_30_DAYS' => '未来30天',
  'LBL_THIS_MONTH' => '本月',
  'LBL_THIS_YEAR' => '今年',

  'LBL_MODULES' => '模块',
  'LBL_CHARTS' => '图表',
  'LBL_TOOLS' => '工具',
  'LBL_WEB' => '网',
  'LBL_SEARCH_RESULTS' => '查找结果',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => '模块视图',
      'Portal' => '门户网站',
      'Charts' => '图表',
      'Tools' => '工具',
      'Miscellaneous' => '杂项'),
  'LBL_MAX_DASHLETS_REACHED' => '您已经达到管理员设置新增栏的最大数目。要增加新增栏，请移除一个已有的。',
  'LBL_ADDING_DASHLET' => '正在增加新增栏 ...',
  'LBL_ADDED_DASHLET' => '新增栏已增加',
  'LBL_REMOVE_DASHLET_CONFIRM' => '您确定要移除这个新增栏吗?',
  'LBL_REMOVING_DASHLET' => '移除新增栏中 ...',
  'LBL_REMOVED_DASHLET' => '新增栏已移除',
  'LBL_DASHLET_CONFIGURE_GENERAL' => '常规',
  'LBL_DASHLET_CONFIGURE_FILTERS' => '过滤',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '只显示我的记录',
  'LBL_DASHLET_CONFIGURE_TITLE' => '名称',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '显示行数',
  'LBL_DASHLET_DELETE' => '删除新增栏',
  'LBL_DASHLET_REFRESH' => '刷新新增栏',
  'LBL_DASHLET_EDIT' => '编辑新增栏',
  'LBL_TRAINING_TITLE' => '培训',

  'LBL_CREATING_NEW_PAGE' => '正在创建新页...',
  'LBL_NEW_PAGE_FEEDBACK' => '您已创建一个新页. 您可以为新增栏添加内容。',
  'LBL_DELETE_PAGE_CONFIRM' => '您确定您要删除这一页吗?',
  'LBL_SAVING_PAGE_TITLE' => '保存页标题...',
  'LBL_RETRIEVING_PAGE' => 'Retrieving Page...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => '我的CRM',
  'LBL_HOME_PAGE_2_NAME' => '销售',
  'LBL_HOME_PAGE_3_NAME' => '服务',
  'LBL_HOME_PAGE_6_NAME' => '市场营销',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => '追踪',
  'LBL_CLOSE_SITEMAP' =>'关闭',

  'LBL_SEARCH' => '查找',
  'LBL_CLEAR' => '清除',

  'LBL_BASIC_CHARTS' => '基本图表',
  'LBL_REPORT_CHARTS' => '报表图表',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => '我收藏的报表',
  'LBL_GLOBAL_REPORT_CHARTS' => '全局团队报表',
  'LBL_MY_TEAM_REPORT_CHARTS' => '我团队的报表',
  'LBL_MY_SAVED_REPORT_CHARTS' => '我保存的报表',

  'LBL_DASHLET_SEARCH' => '查找新增栏',

//ABOUT page
  'LBL_VERSION' => '版本',
  'LBL_BUILD' => '建立',


  'LBL_VIEWLICENSE_COM' => '<P>这是免费软件; 在<a href="LICENSE.txt" target="_blank" class="body">GNU通用公共许可证版本3</a> 条款许可下（由自由软件基金会发布），您可以重新分配和/或修改此软件， 包括附加许可所列的源代码。</P>',
  'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar社区版',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar专业版",
  'LBL_SUGAR_ENTERPRISE' => "Sugar企业版",
  'LBL_AND' => "和",
  'LBL_ARE' => "是",
  'LBL_TRADEMARKS' => '商标',
  'LBL_OF' => '的',
  'LBL_FOUNDERS' => '创办人',
  'LBL_JOIN_SUGAR_COMMUNITY' => '加入Sugar社区',
  'LBL_DETAILS_SUGARFORGE' => '合作和开发Sugar插件',
  'LBL_DETAILS_SUGAREXCHANGE' => '购买和销售已获取认证的插件',
  'LBL_TRAINING' => '培训',
  'LBL_DETAILS_TRAINING' => '通过在线和互动学习sugar知识',
  'LBL_FORUMS' => '论坛',
  'LBL_DETAILS_FORUMS' => '与专家社区用户或开发人员讨论Sugar',
  'LBL_WIKI' => '维基',
  'LBL_DETAILS_WIKI' => '搜索知识库中的用户和开发者话题',
  'LBL_DEVSITE' => '开发者论坛',
  'LBL_DETAILS_DEVSITE' => '资源、教程和有用的链接都能帮助您加速对sugar的开发',
  'LBL_GET_SUGARCRM_RSS' => '得到SugarCRM的RSS',
  'LBL_SUGARCRM_NEWS' => 'SugarCRM新闻',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM培训新闻',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM论坛',
  'LBL_SUGARFORGE_NEWS' => 'SugarForge新闻',
  'LBL_ALL_NEWS' => '所有新闻',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => '点击链接能看到sugar贡献者!',
  'LBL_SOURCE_CODE' => '源代码',
  'LBL_SOURCE_SUGAR' => 'Sugar - SugarCRM公司开发的一款世界上最受欢迎的销售自动化应用程序。',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Barnabás Debreceni公司开发的一个基于PHP的模板引擎',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - NuSphere公司和Dietrich Ayala开发的一组PHP类，允许开发人员创建和使用web service',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Mihai Bazon开发的一个可以输入日期的日历软件',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Wayne Munro开发的用于创建PDF文档的库',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - 一个实施在PHP里的WebDAV服务器.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - Vincent Blavet开发的能压缩和解压缩zip文件的库',
  'LBL_SOURCE_SMARTY' => 'Smarty - 一个基于PHP的模板引擎.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - 一个全功能的PHP邮件传输类',
  'LBL_SOURCE_JSHRINK' => 'JShrink - 用PHP写的一个Javascript压缩器',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - A free CAPTCHA service that helps to digitize books, newspapers and old time radio shows.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - 生成PDF文件的一个php类.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - css解析器和压缩器.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - 一个简单的基于PHP的SAML工具包.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - 一个开源的，面向对象的PHP5的网络应用框架.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV数据解析器',
  'LBL_SOURCE_PHPJS' => 'php.js - 在JavaScript中使用php函数',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL解析器',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
  'LBL_SOURCE_XHPROF' => 'XHProf - A function-level hierarchical profiler for PHP.',
  'LBL_SOURCE_ELASTICA' => 'Elastica - 一个基于Lucene的搜索服务器，分布式搜索引擎',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'jQuery - jQuery是一个快速小巧、功能丰富的JavaScript库.',
  'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - The overlibmws library uses javascript for DHTML popups that serve as informational and navigational aids for websites.',

  'LBL_DASHLET_TITLE' => '我的网站',
  'LBL_DASHLET_OPT_TITLE' => '标题',
  'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
  'LBL_DASHLET_OPT_URL' => '网站地址',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet高度 (像素)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Sugar新闻',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Discover Sugar',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => '详细信息' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => '基本查找' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => '高级查找' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => '模块',
    'LBL_TOUR_MODULES_DESCRIPTION' => '你的所有重要的模块都在这里。',
    'LBL_TOUR_MORE' => '更多模块',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => '全文搜索',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => '提醒',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Sugar application notifications would go here.',
    'LBL_TOUR_PROFILE' => '个人资料',
    'LBL_TOUR_PROFILE_DESCRIPTION' => '进入个人资料，设置后退出.',
    'LBL_TOUR_QUICKCREATE' => '快速创建',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => '可折叠的页脚',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => '欢迎使用SuiteCRM',
    'LBL_TOUR_WATCH' => '查看SuiteCRM更新了什么',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => '更多信息请访问我们的应用程序',
    'LBL_TOUR_DONE' => '大功告成!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => '文档',
    'LBL_TOUR_CALENDAR_URL_1' => '您会将您的SugarCRM日历与第三方软件分享吗？比如Microsoft Outlook或者Exchange? 如果是，您会得到一个新的链接，此链接更安全，包括了一个私钥，此私钥会防止未授权者访问您的日历。',
    'LBL_TOUR_CALENDAR_URL_2' => '获取您新共享日历的链接。',

);


?>
