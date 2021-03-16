<?php
/* Smarty version 3.1.36, created on 2020-11-18 09:20:46
  from 'C:\xampp1\htdocs\Loja\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb5119e2d9466_45042420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f24f6adf26601c4c79ab48ca3b6724ed788dbe59' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\Loja\\view\\pedido_finalizar.tpl',
      1 => 1594866892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5119e2d9466_45042420 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <center><h4>Pedido Finalizado</h4>
        </center>
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                        <tr>
                            <td data-th="Product">
                                    <div class="col-sm-10">
                                        <h4 class="nomargin"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control text-center" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                            </td>
                            <td data-th="Subtotal" class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subtotal'];?>
</td>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"align="right"><strong>Total:R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</strong></td>
                        
                        </tr>
                        <tr>
                            <td class="hidden-xs text-center" align="right"><strong>Total:R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</strong></td>
                            

                        </tr>
                    </tfoot>
                </table>
</div>
<?php }
}
