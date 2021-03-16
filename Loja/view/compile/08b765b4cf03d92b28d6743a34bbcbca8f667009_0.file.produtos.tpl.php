<?php
/* Smarty version 3.1.36, created on 2020-12-01 01:10:28
  from 'C:\xampp\htdocs\Loja\Loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fc5c2343ac631_32005977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b765b4cf03d92b28d6743a34bbcbca8f667009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja\\Loja\\view\\produtos.tpl',
      1 => 1606792276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc5c2343ac631_32005977 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Jquery & popper -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap 4 -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Bootstrap 3 -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">



<!-- CSS -->
<style media="screen">
  body{
      min-width: 1050px;
  }
  p{
    margin: 0;
  }

  .products-view .col-md-2{
    margin-right: 90px;

  }


  .row{
    margin-left: calc(100vw / 12 );
    margin-right: calc(100vw / 12 );
  }

  .card-body{
    width: 230px;
    padding-left: ;
    padding-top: 25px;

  }


  .verticall-btn{
    width: 160px;
    height: 60px;
    background-color: rgba(26, 26, 26, 1);
    text-align: left;
    box-shadow: -8.22px -3.66px 7px 1px rgba(0, 0, 0, 0.6);
    border-radius: 0;

    padding-right: 20px;
  }


  .verticall-btn > p{
    padding-top: 10px;
  }

  .verticall-btn lead{
    font-size: 18px;
    margin-top: 10px;
    vertical-align: middle;
  }
  .products > .card{
    margin-bottom: 5px;
    padding-bottom: 0;
    border: 0;
    cursor: pointer;
  }
  li > a{
    color: black;
  }

  .products > .card > .card-body{
    width: 150px;
    padding-top: 10px;
    padding-left: 5px;
    padding-bottom: 5px;
    height: 80px;
    padding-right: 0;

    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 140px;
  }

  .products-view{
    margin:0;
    margin-top: 10px;
    padding:0;
    padding-top: 10px;

  }

  .lead{
    font-size: 1.75rem;
    margin-bottom: 0;
    padding-bottom: 0;
    text-overflow: ellipsis;


  }
  .products > .card > .card-body > small{
    padding-top: ;
    margin-left: 5px;
    font-size: small;
  }


  #underRow{
    text-align: center;
    margin-top: 1rem;
    padding-top: 5px;
    border-top: 1px solid gray;
    border-top-style: dotted;
  }

  #underRow img{
    width: 10px;
    height: 10px;
  }

  #underRow #img1{
    float: left;
  }

  #underRow #img2{
    padding-left: 12%;
  }
  #underRow > spam{
    margin-left: 25%;
    margin-right: 25%;
  }
  .text{
    font-size:20px; 
    color: gray;
  }
   #cat-main{
    width: 13rem;
    margin-top:-1rem;
    margin-left: -90px;
    padding-right: 1rem;
    border-right: 1px solid gray;
          }

    .cat-bttns{
    height: 3.25rem;
    width: 10rem;
    color: white;
    /* font: normal normal normal 16px/1.4em nimbus-sans-tw01con,sans-serif; */
    display: inline-block;
    margin-bottom:0.5rem;
    background-color: black;
    border: 1px solid gray;
    border-radius: 0;
    text-align: left;
    transition: 0.5s;
          } 
    .cat-bttns:hover {
    background-color: gray;

    }

</style>



</head>
<body>
  <div class="row" id="upperRow">
    <div class="col-md-2 vbtn"></div>
    <div class="col-md-10">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#">Principais</a></li>
        <li><a href="#">Mais comprados</a></li>
        <li><a href="#">Último drop</a></li>
      </ul>
    </div>
  </div>
<div class="row" id="midRow">
    <div id="cat-main">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_link'];?>
"><button class="cat-bttns" id="cat-b1"><?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>
</button></a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><button class="cat-bttns" id="cat-b1">Todos os produtos</button></a>
    </div>

<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 class="alert alert-danger">Nenhum produto encontrado!!</h4>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    <div class="col-sm-3 products">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
        <div class="card" onclick="openProduct('product001')" id="product001">
          <img class="card-img-top img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="Card image" style="width:100%" width="200" height ="200">
          <div class="card-body">
            <p class="card-text lead prod-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</p>
            <center>R$: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</center>
          </div>
        </div>
        </a>
  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
