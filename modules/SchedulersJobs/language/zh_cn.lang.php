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

$mod_strings = array (
'LBL_NAME' => '作业名称',
'LBL_EXECUTE_TIME'			=> '执行时间',
'LBL_SCHEDULER_ID' 	=> '调度程序',
'LBL_STATUS' 	=> '作业状态',
'LBL_RESOLUTION' 	=> '结果',
'LBL_MESSAGE' 	=> '消息',
'LBL_DATA' 	=> '作业数据',
'LBL_REQUEUE' 	=> '失败重试',
'LBL_RETRY_COUNT' 	=> '最大重试次数',
'LBL_FAIL_COUNT' 	=> '失败次数',
'LBL_INTERVAL' 	=> '重试最小时间间隔',
'LBL_CLIENT' 	=> '所属客户端',
'LBL_PERCENT'	=> '进度',
// Errors
'ERR_CALL' 	=> "调用该函数失败: %s",
'ERR_CURL' => "没有CURL - 无法允许URL作业",
'ERR_FAILED' => "未知错误，请检查PHP日志和sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "该作业未指定用户ID",
'ERR_NOSUCHUSER' => "找不到用户 %s",
'ERR_JOBTYPE' 	=> "未知的作业类型: %s",
'ERR_TIMEOUT' => "超时",
'ERR_JOB_FAILED_VERBOSE' => '作业 %1$s (%2$s) 在后台（CRON）运行时失败。',
);


?>

