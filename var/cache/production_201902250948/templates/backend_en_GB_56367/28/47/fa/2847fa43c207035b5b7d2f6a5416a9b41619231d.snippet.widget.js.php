<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:01
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/index/model/widget.js" */ ?>
<?php /*%%SmartyHeaderCode:6485800165ca5f1c1adbd25-98575178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2847fa43c207035b5b7d2f6a5416a9b41619231d' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/index/model/widget.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6485800165ca5f1c1adbd25-98575178',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c1ae5023_84041063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c1ae5023_84041063')) {function content_5ca5f1c1ae5023_84041063($_smarty_tpl) {?>/**
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
 */

//

Ext.define('Shopware.apps.Index.model.Widget', {

    extend: 'Ext.data.Model',

    fields: [
        'id',
        'name',
        'label',
        'views'
    ]
});

//
<?php }} ?>