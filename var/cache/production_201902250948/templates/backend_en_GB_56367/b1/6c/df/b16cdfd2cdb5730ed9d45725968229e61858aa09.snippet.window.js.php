<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/order/view/mail/window.js" */ ?>
<?php /*%%SmartyHeaderCode:6974382345ca5f1c454e4c3-46985043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16cdfd2cdb5730ed9d45725968229e61858aa09' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/order/view/mail/window.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6974382345ca5f1c454e4c3-46985043',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4575d90_95826819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4575d90_95826819')) {function content_5ca5f1c4575d90_95826819($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list main window.
 */
//
Ext.define('Shopware.apps.Order.view.mail.Window', {

    /**
     * Define that the order main window is an extension of the enlight application window
     *
     * @type { String }
     */
    extend: 'Enlight.app.Window',

    /**
     * Set base css class prefix and module individual css class for css styling
     *
     * @type { String }
     */
    cls: Ext.baseCSSPrefix + 'order-mail-window',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     *
     * @type { String }
     */
    alias: 'widget.order-mail-window',

    /**
     * Define window width
     *
     * @type { Number }
     */
    width: 700,

    /**
     * Define window height
     *
     * @type { String }
     */
    height: '90%',

    /**
     * Show scroll bar when the content is overflowing the window viewport
     *
     * @type { Boolean }
     */
    autoScroll: true,

    /**
     * Set layout for this component to fit
     *
     * @type { String }
     */
    layout: 'fit',

    /**
     * The text of the window title.
     *
     * @type { String }
     */
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'mail'/'title','default'=>'Send an email to the customer','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mail'/'title','default'=>'Send an email to the customer','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send an email to the customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mail'/'title','default'=>'Send an email to the customer','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Constructor parameters
     *
     * @type { Shopware.apps.Order.model.Order }
     */
    order: null,

    /**
     * @type { Shopware.apps.Order.model.Receipt }
     */
    preSelectedAttachment: null,

    /**
     * @type { Shopware.apps.Order.store.DocType }
     */
    documentTypeStore: null,

    /**
     * @type { Shopware.apps.Order.store.Order }
     */
    listStore: null,

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     */
    initComponent: function() {
        var me = this;

        me.form = Ext.create('Shopware.apps.Order.view.mail.Form', {
            order: this.order,
            preSelectedAttachment: this.preSelectedAttachment,
            listStore: this.listStore,
            documentTypeStore: this.documentTypeStore,
            mail: this.mail
        });

        me.items = me.form;

        me.callParent(arguments);
    },

    /**
     * Overwrite the doClose function to reset all documents to active = false
     * @override
     */
    doClose: function() {
        var me = this;

        me.form.attachmentGrid.store.resetDocuments();
        me.callParent(arguments);
    }

});
//
<?php }} ?>