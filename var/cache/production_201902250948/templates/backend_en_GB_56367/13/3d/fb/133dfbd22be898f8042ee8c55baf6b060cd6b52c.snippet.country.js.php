<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:00
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/base/store/country.js" */ ?>
<?php /*%%SmartyHeaderCode:21464403435ca5f1c0304eb6-44494838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '133dfbd22be898f8042ee8c55baf6b060cd6b52c' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/base/store/country.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21464403435ca5f1c0304eb6-44494838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c030cfa4_92726822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c030cfa4_92726822')) {function content_5ca5f1c030cfa4_92726822($_smarty_tpl) {?>/**
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
 * @category   Shopware
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.Country', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Country',
    storeId: 'base.Country',
    model : 'Shopware.apps.Base.model.Country',
    pageSize: 1000,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/bootcamp/shopware.php/backend/base/getCountries';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
}).create();
<?php }} ?>