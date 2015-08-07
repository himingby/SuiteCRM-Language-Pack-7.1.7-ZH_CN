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
	'LBL_MODULE_NAME' => '项目管理',
	'LBL_MODULE_TITLE' => '项目管理: 首页',
	'LBL_SEARCH_FORM_TITLE' => '查找项目管理',
    'LBL_LIST_FORM_TITLE' => '项目管理列表',
    'LBL_HISTORY_TITLE' => '历史记录',
	'LBL_ID' => '编号:',
	'LBL_DATE_ENTERED' => '创建日期:',
	'LBL_DATE_MODIFIED' => '修改日期:',
	'LBL_ASSIGNED_USER_ID' => '负责人:',
    'LBL_ASSIGNED_USER_NAME' => '负责人:',
	'LBL_MODIFIED_USER_ID' => '修改人编号:',
	'LBL_CREATED_BY' => '创建人:',
	'LBL_TEAM_ID' => '团队:',
	'LBL_NAME' => '名称:',
    'LBL_PDF_PROJECT_NAME' => '项目管理名称:',
	'LBL_DESCRIPTION' => '描述:',
	'LBL_DELETED' => '已删除:',
    'LBL_DATE' => '日期:',
	'LBL_DATE_START' => '开始日期:',
	'LBL_DATE_END' => '结束日期:',
	'LBL_PRIORITY' => '优先级:',
    'LBL_STATUS' => '状态:',
    'LBL_MY_PROJECTS' => '我的项目管理',
    'LBL_MY_PROJECT_TASKS' => '我的项目任务',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => '估算总时间 (小时):',
	'LBL_TOTAL_ACTUAL_EFFORT' => '实际总时间 (小时):',

	'LBL_LIST_NAME' => '名称',
    'LBL_LIST_DAYS' => '天数',
	'LBL_LIST_ASSIGNED_USER_ID' => '负责人',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => '估算总时间 (小时)',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => '估算总时间 (小时)',
    'LBL_LIST_UPCOMING_TASKS' => '即将到来的任务 (1周)',
    'LBL_LIST_OVERDUE_TASKS' => '过期任务',
    'LBL_LIST_OPEN_CASES' => '未解决的客户反馈',
    'LBL_LIST_END_DATE' => '结束日期',
    'LBL_LIST_TEAM_ID' => '团队',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => '项目管理',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => '项目任务',
	'LBL_CONTACT_SUBPANEL_TITLE' => '联系人',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => '客户',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商业机会',
	'LBL_QUOTE_SUBPANEL_TITLE' => '报价',

    // quick create label
    'LBL_NEW_FORM_TITLE' => '新建项目管理',
	'CONTACT_REMOVE_PROJECT_CONFIRM' => '您确定将要在您的项目中删除这个联系人吗？?',

	'LNK_NEW_PROJECT'	=> '创建项目管理',
	'LNK_PROJECT_LIST'	=> '项目管理列表',
	'LNK_NEW_PROJECT_TASK'	=> '创建项目任务',
	'LNK_PROJECT_TASK_LIST'	=> '查看项目任务',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => '项目管理',
	'LBL_ACTIVITIES_TITLE'=>'活动',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活动',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'历史记录',
	'LBL_QUICK_NEW_PROJECT'	=> '新建项目管理',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => '项目任务',
	'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
    'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
    'LBL_BUGS_SUBPANEL_TITLE' => '缺陷追踪',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => '产品',
    

    'LBL_TASK_ID' => '编号',
    'LBL_TASK_NAME' => '任务名称',
    'LBL_DURATION' => '期间',
    'LBL_ACTUAL_DURATION' => '实际期间',
    'LBL_START' => '开始',
    'LBL_FINISH' => '结束',
    'LBL_PREDECESSORS' => '前任',
    'LBL_PERCENT_COMPLETE' => '% 完成',
    'LBL_MORE'  => '更多...',

    'LBL_PERCENT_BUSY' => '% 忙',
    'LBL_TASK_ID_WIDGET' => '编号',
    'LBL_TASK_NAME_WIDGET' => '描述',
    'LBL_DURATION_WIDGET' => '期间',
    'LBL_START_WIDGET' => '开始日期',
    'LBL_FINISH_WIDGET' => '结束日期',
    'LBL_PREDECESSORS_WIDGET' => '前任_',
    'LBL_PERCENT_COMPLETE_WIDGET' => '完成比例',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> '编辑项目任务',
    
    'LBL_OPPORTUNITIES' => '商业机会',
	'LBL_LAST_WEEK' => '上周',
	'LBL_NEXT_WEEK' => '下周',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => '项目资源',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => '项目任务',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => '假期',
	'LBL_PROJECT_INFORMATION' => '项目概览',
	'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => '插入行' /*for 508 compliance fix*/,
	'LBL_PROJECT_INFORMATION' => '项目概览',


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
);
?>