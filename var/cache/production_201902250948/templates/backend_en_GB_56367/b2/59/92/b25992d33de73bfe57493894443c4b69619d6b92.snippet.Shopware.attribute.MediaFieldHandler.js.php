<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:01
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.MediaFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:12981677685ca5f1c1314105-94267942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b25992d33de73bfe57493894443c4b69619d6b92' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.MediaFieldHandler.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12981677685ca5f1c1314105-94267942',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c1319894_64372013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c1319894_64372013')) {function content_5ca5f1c1319894_64372013($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.MediaFieldHandler', {
    extend: 'Shopware.attribute.AbstractEntityFieldHandler',
    entity: "Shopware\\Models\\Media\\Media",
    singleSelectionClass: 'Shopware.form.field.Media',
    multiSelectionClass: 'Shopware.form.field.MediaGrid'
});<?php }} ?>