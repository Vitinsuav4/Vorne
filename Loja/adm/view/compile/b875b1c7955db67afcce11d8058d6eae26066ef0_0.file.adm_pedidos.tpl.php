<?php
/* Smarty version 3.1.36, created on 2020-12-17 04:15:34
  from 'C:\xampp1\htdocs\Loja\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fdb0596a37b99_74190353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b875b1c7955db67afcce11d8058d6eae26066ef0' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\Loja\\adm\\view\\adm_pedidos.tpl',
      1 => 1606956400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb0596a37b99_74190353 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Pedidos
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered"  width="100%" cellspacing="0">
        <section class="row" id="pesquisa">
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">
            <div class="col-md-3">            
                <input type="date" name="data_ini" class="form-control" required>
            </div> 
            <div class="col-md-3"> 
                <input type="date" name="data_fim" class="form-control" required>
            </div> 
            <div class="col-md-3"> 
                <button class="btn btn-success"> Buscar </button>
            </div> 
            <div class="col-md-3">    
            </div> 
        </form>
        </section>

        <br>

        <section class="row">
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_ref" class="form-control" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-success"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>
        </section>
        <hr>

        <thead>
            <tr>
                <th>Nome</th>
                <th>Nº Pedido</th>                                                                               
                <th>Valor do pedido</th>
                <th>Status de pagamento</th>
                <th>Data</th>
                <th>Horário</th>
                <th></th> 
                <th></th>
            </tr>
        </thead>
                                       
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>          
                <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['ped_valor'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                <td><form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                    </form> 
                </td>
                <td>
                    <form name="deletar" method="post" action="">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-menu-remove"></i> </button>
                    </form>      
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
    </div>
</div>
       
        

        
 <?php }
}
