<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:10
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/theme/view/detail/fields/em_field.js" */ ?>
<?php /*%%SmartyHeaderCode:8785610745ca5f1ca0f0706-96806095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84141ff590f2874cc69e89ba82c0d60247e60d37' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/theme/view/detail/fields/em_field.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8785610745ca5f1ca0f0706-96806095',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1ca0f6ae5_09384963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1ca0f6ae5_09384963')) {function content_5ca5f1ca0f6ae5_09384963($_smarty_tpl) {?>/**
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

/**
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.view.detail.fields.EmField', {
    extend: 'Shopware.apps.Theme.view.detail.fields.Suffix',

    alias: 'widget.theme-em-field',

    suffix: 'em',
    fallbackValue: '0',
    elementStyle: 'text-align: right'
});

//

<?php }} ?>