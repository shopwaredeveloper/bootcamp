<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:01
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/index/view/widgets/upload.js" */ ?>
<?php /*%%SmartyHeaderCode:17679346765ca5f1c1d42178-54735626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d4efd5e5a8e0d7c502a31c9abfcc55d9c954ccf' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/index/view/widgets/upload.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17679346765ca5f1c1d42178-54735626',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c1d567b6_99059594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c1d567b6_99059594')) {function content_5ca5f1c1d567b6_99059594($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Upload Widget
 *
 * This file holds off the upload widget.
 *
 * @link http://www.shopware.de/
 * @license http://www.shopware.de/license
 * @package index
 * @subpackage views/widgets/Upload
 */
//
Ext.define('Shopware.apps.Index.view.widgets.Upload', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-upload-widget',

    height: 160,
    minHeight: 160,

    /**
     * Initializes the widget.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.mediaDropZone = me.createFileUpload();
        me.items = [ me.mediaDropZone ];

        me.callParent(arguments);
    },

    /**
     * Creates the drop zone container which represents
     * the file upload.
     *
     * @private
     * @return [object] Shopware.app.FileUpload
     */
    createFileUpload: function() {
        var me = this, mediaDropZone = Ext.create('Shopware.app.FileUpload', {
            requestURL: '<?php echo '/bootcamp/shopware.php/backend/mediaManager/upload';?>',
            padding: 0,
            showInput: false,
            checkType: false,
            checkAmount: false,
            enablePreviewImage: false,
            dropZoneText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'upload'/'drop_zone_text','default'=>'Upload files via <strong>Drag+Drop</strong>','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'upload'/'drop_zone_text','default'=>'Upload files via <strong>Drag+Drop</strong>','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload files via <strong>drag & drop</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'upload'/'drop_zone_text','default'=>'Upload files via <strong>Drag+Drop</strong>','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        return mediaDropZone;
    }
});
//
<?php }} ?>