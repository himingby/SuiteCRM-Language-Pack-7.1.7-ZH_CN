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
global $sugar_config;

$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'		=> '处理工作流任务',
'LBL_OOTB_REPORTS'		=> '运行计划任务产生报表',
'LBL_OOTB_IE'			=> '检查收件箱',
'LBL_OOTB_BOUNCE'		=> '每晚处理退回的电子邮件',
'LBL_OOTB_CAMPAIGN'		=> '每晚批量运行电子邮件市场活动',
'LBL_OOTB_PRUNE'		=> '每月1号精简数据库',
'LBL_OOTB_TRACKER'		=> '精简跟踪表',
'LBL_OOTB_SUGARFEEDS'   => '精简SugarFeed表',
'LBL_UPDATE_TRACKER_SESSIONS' => '更新跟踪会话表',
'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> '运行电子邮件提醒通知',
'LBL_OOTB_CLEANUP_QUEUE' => '清除计划任务队列',
'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => '从文件系统中删除文件',

// List Labels
'LBL_LIST_JOB_INTERVAL' => '间隔:',
'LBL_LIST_LIST_ORDER' => '计划任务:',
'LBL_LIST_NAME' => '计划任务:',
'LBL_LIST_RANGE' => '范围:',
'LBL_LIST_REMOVE' => '移除:',
'LBL_LIST_STATUS' => '状态:',
'LBL_LIST_TITLE' => '计划任务列表:',
'LBL_LIST_EXECUTE_TIME' => '执行时间:',
// human readable:
'LBL_SUN'		=> '星期日',
'LBL_MON'		=> '星期一',
'LBL_TUE'		=> '星期二',
'LBL_WED'		=> '星期三',
'LBL_THU'		=> '星期四',
'LBL_FRI'		=> '星期五',
'LBL_SAT'		=> '星期六',
'LBL_ALL'		=> '每天',
'LBL_EVERY_DAY'	=> '每天',
'LBL_AT_THE'	=> '在 ',
'LBL_EVERY'		=> '每 ',
'LBL_FROM'		=> '从 ',
'LBL_ON_THE'	=> '于 ',
'LBL_RANGE'		=> ' 到 ',
'LBL_AT' 		=> ' 在 ',
'LBL_IN'		=> ' 在 ',
'LBL_AND'		=> ' 和 ',
'LBL_MINUTES'	=> ' 分钟 ',
'LBL_HOUR'		=> ' 小时',
'LBL_HOUR_SING'	=> ' 小时',
'LBL_MONTH'		=> ' 月',
'LBL_OFTEN'		=> ' 越频繁越好。',
'LBL_MIN_MARK'	=> ' 分钟标示',


// crontabs
'LBL_MINS' => '分钟',
'LBL_HOURS' => '小时',
'LBL_DAY_OF_MONTH' => '日期',
'LBL_MONTHS' => '月',
'LBL_DAY_OF_WEEK' => '天',
'LBL_CRONTAB_EXAMPLES' => '使用上述标准crontab符号。',
'LBL_CRONTAB_SERVER_TIME_PRE' =>  'Cron根据服务器上的时区设置运行(',
'LBL_CRONTAB_SERVER_TIME_POST' => '). 请根据该时区设置设定相应的计划任务的运行时间',
// Labels
'LBL_ALWAYS' => '始终',
'LBL_CATCH_UP' => '错过时执行',
'LBL_CATCH_UP_WARNING' => '如果这个任务执行需要一些时间就取消选择。',
'LBL_DATE_TIME_END' => '结束日期和时间',
'LBL_DATE_TIME_START' => '开始日期和时间',
'LBL_INTERVAL' => '间隔',
'LBL_JOB' => '作业',
'LBL_JOB_URL' => '作业链接',
'LBL_LAST_RUN' => '最后成功运行',
'LBL_MODULE_NAME' => 'Sugar计划任务',
'LBL_MODULE_TITLE' => '计划任务',
'LBL_NAME' => '作业名',
'LBL_NEVER' => '从不',
'LBL_NEW_FORM_TITLE' => '新增计划任务',
'LBL_PERENNIAL' => '永久',
'LBL_SEARCH_FORM_TITLE' => '查找计划任务',
'LBL_SCHEDULER' => '计划任务:',
'LBL_STATUS' => '状态',
'LBL_TIME_FROM' => '启用从',
'LBL_TIME_TO' => '启用到',
'LBL_WARN_CURL_TITLE' => 'cURL警告:',
'LBL_WARN_CURL' => '警告:',
'LBL_WARN_NO_CURL' => '本系统没有cURL库启用/编译到php模块下(--with-curl=/path/to/curl_library)。请联系管理员解决此问题。如果没有cURL功能，计划任务就不能调度其作业。',
'LBL_BASIC_OPTIONS' => '基本设置',
'LBL_ADV_OPTIONS'		=> '高级选项',
'LBL_TOGGLE_ADV' => '显示高级选项',
'LBL_TOGGLE_BASIC' => '显示基本选项',
// Links
'LNK_LIST_SCHEDULER' => '计划任务',
'LNK_NEW_SCHEDULER' => '新增计划任务',
'LNK_LIST_SCHEDULED' => '计划任务作业',
// Messages
'SOCK_GREETING' => "\n这是SugarCRM日程表服务的界面. \n[ 可守护进程的命令: 开始|重起|关闭|状态 ]\n退出, 键入'quit'.  要关闭服务'shutdown'.\n",
'ERR_DELETE_RECORD' => '必须指定记录编号才能删除计划任务。',
'ERR_CRON_SYNTAX' => 'Cron语法无效。',
'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
'NTC_STATUS' => '设置状态为“停用”，计划任务会从下拉列表中移除。',
'NTC_LIST_ORDER' => '设置计划任务的下拉框选项',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => '设置windows任务计划',
'LBL_CRON_INSTRUCTIONS_LINUX' => '设置Crontab',
'LBL_CRON_LINUX_DESC' => '注意：为了运行Sugar的计划任务，需要增加以下内容到crontab文件: ',
'LBL_CRON_WINDOWS_DESC' => 'N注意：为了运行Sugar的计划任务，需要在windows计划任务里创建一个批处理文件，该批处理文件应该包括以下命令: ',
'LBL_NO_PHP_CLI' => '如果您的主机没有这个PHP二进制程序，您可以使用wget或着curl来执行您的任务。<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1',
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> '作业日志',
//jobstrings
'LBL_REFRESHJOBS' => '刷新作业',
'LBL_POLLMONITOREDINBOXES' => '检查收件账户',
'LBL_PERFORMFULLFTSINDEX' => '全文检索系统',
'LBL_RUNMASSEMAILCAMPAIGN' => '批量发送市场活动邮件',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => '收取退订邮件',
'LBL_PRUNEDATABASE' => '每月1号精简数据库',
'LBL_TRIMTRACKER' => '精简跟踪表',
'LBL_TRIMSUGARFEEDS'   => '精简SugarFeed表格',
'LBL_SENDEMAILREMINDERS'=> '开始Email提醒发送',
'LBL_CLEANJOBQUEUE' => '清除计划任务队列',
'LBL_REMOVEDOCUMENTSFROMFS' => '从文件系统中删除文件',
);
?>
