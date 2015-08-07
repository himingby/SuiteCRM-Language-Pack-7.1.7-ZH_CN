<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

$mod_strings = array (
  'LBL_ASSIGNED_TO_NAME' => '合同负责人',
  'LBL_CONTRACT_ACCOUNT' => '客户',
  'LBL_OPPORTUNITY' => '商业机会',
  'LBL_ID' => '编号',
  'LBL_DATE_ENTERED' => '创建时间',
  'LBL_DATE_MODIFIED' => '修改时间',
  'LBL_MODIFIED' => '修改人',
  'LBL_MODIFIED_ID' => '修改人编号',
  'LBL_MODIFIED_NAME' => '修改人姓名',
  'LBL_CREATED' => '创建人',
  'LBL_CREATED_ID' => '创建人编号',
  'LBL_DESCRIPTION' => '说明',
  'LBL_DELETED' => '已删除',
  'LBL_NAME' => '合同名',
  'LBL_CREATED_USER' => '创建人',
  'LBL_MODIFIED_USER' => '修改人',
  'LBL_LIST_NAME' => '名称',
  'LBL_LIST_FORM_TITLE' => '合同列表',
  'LBL_MODULE_NAME' => '合同',
  'LBL_MODULE_TITLE' => '合同:首页',
  'LBL_HOMEPAGE_TITLE' => '我的合同',
  'LNK_NEW_RECORD' => '创建合同',
  'LNK_LIST' => '查看合同',
  'LNK_IMPORT_AOS_CONTRACTS' => '导入合同',
  'LBL_SEARCH_FORM_TITLE' => '查找合同',
  'LBL_HISTORY_SUBPANEL_TITLE' => '查看历史',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => '合同',
  'LBL_NEW_FORM_TITLE' => '创建合同',
  'LBL_CONTRACT_NAME' => '合同名',
  'LBL_REFERENCE_CODE ' => '订单号',
  'LBL_START_DATE' => '开始时间',
  'LBL_END_DATE' => '结束时间',
  'LBL_TOTAL_CONTRACT_VALUE' => '合同金额',
  'LBL_STATUS' => '状态',
  'LBL_CUSTOMER_SIGNED_DATE' => '客户签字日期',
  'LBL_COMPANY_SIGNED_DATE' => '公司签字日期',
  'LBL_RENEWAL_REMINDER_DATE' => '续约提醒日期',
  'LBL_CONTRACT_TYPE' => '合同类型',
  
  'LBL_CONTACT' => '联系人',

  'LBL_ADD_GROUP' => '增加组',
  'LBL_DELETE_GROUP' => '删除组',
  'LBL_GROUP_NAME' => '组名',
  'LBL_GROUP_TOTAL' => '组合计',

  'LBL_PRODUCT_QUANITY' => '数量',
  'LBL_PRODUCT_NAME' => '产品',
  'LBL_PART_NUMBER' => '物料编号',
  'LBL_PRODUCT_NOTE' => '备注',
  'LBL_PRODUCT_DESCRIPTION' => '说明',
  'LBL_LIST_PRICE' => '列表',
  'LBL_DISCOUNT_TYPE' => '类型',
  'LBL_DISCOUNT_AMT' => '折扣',
  'LBL_UNIT_PRICE' => '售价',
  'LBL_TOTAL_PRICE' => '合计',
  'LBL_VAT' => '税',
  'LBL_VAT_AMT' => '税金',

  'LBL_SERVICE_NAME' => '服务',
  'LBL_SERVICE_LIST_PRICE' => '列表',
  'LBL_SERVICE_PRICE' => '售价',
  'LBL_SERVICE_DISCOUNT' => '折扣',
'LBL_AOS_CONTRACTS_AOS_PRODUCTS_QUOTES_1_FROM_AOS_PRODUCTS_QUOTES_TITLE' => '产品',
  'LBL_LINE_ITEMS' => '项目行',
  'LBL_SUBTOTAL_AMOUNT' => '小计',
  'LBL_DISCOUNT_AMOUNT' => '折扣',
  'LBL_TAX_AMOUNT' => '税',
  'LBL_SHIPPING_AMOUNT' => '运费',
  'LBL_TOTAL_AMT' => '合计',
  'LBL_GRAND_TOTAL' => '组合计',
  'LBL_SHIPPING_TAX' => '车船税',
  'LBL_SHIPPING_TAX_AMT' => '车船税',
  'LBL_ADD_PRODUCT_LINE' => '增加产品行',
  'LBL_ADD_SERVICE_LINE' => '增加服务行',
  'LBL_PRINT_AS_PDF' => '打印成PDF',
  'LBL_EMAIL_PDF' => '用邮件发送PDF',
  'LBL_PDF_NAME' => '合同',
  'LBL_EMAIL_NAME' => '发送合同给',
  'LBL_NO_TEMPLATE' => '出错啦\n没有发现模板。如果没有创建合同模板，请到PDF模板模块创建一个。',
  'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => '小计(默认货币码)',
  'LBL_DISCOUNT_AMOUNT_USDOLLAR' => '折扣(默认货币码)',
  'LBL_TAX_AMOUNT_USDOLLAR' => '税(默认货币码)',
  'LBL_SHIPPING_AMOUNT_USDOLLAR' => '运费(默认货币码)',
  'LBL_TOTAL_AMT_USDOLLAR' => '合计(默认货币码)',
  'LBL_SHIPPING_TAX_USDOLLAR' => '车船税(默认货币码)',
  'LBL_SHIPPING_TAX_AMT_USDOLLAR' => '车船税(默认货币码)',
  'LBL_GRAND_TOTAL_USDOLLAR' => '组合计(默认货币码)',
);
?>
