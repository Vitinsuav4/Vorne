<?php
/* Smarty version 3.1.36, created on 2021-01-05 02:02:49
  from 'C:\xampp\htdocs\Loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff3f2f9766658_48457899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e80d62a928da47e9195f928835f4bedfc3a5d6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja\\view\\index.tpl',
      1 => 1609822957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff3f2f9766658_48457899 (Smarty_Internal_Template $_smarty_tpl) {
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

<!-- Fontes e Css -->
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/52bbd83860.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/index/styles.css" rel="stylesheet" />

<!-- Icons -->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<a href="https://icons8.com/icon/77883/male-user"></a>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--Definições-->    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
    <body>
        <header>
                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">
	                <img  class="timlogo" src="https://static.wixstatic.com/media/2b9fcf_6b3fa22ccd34471da67dd5b86cb73e0f~mv2.jpg/v1/fill/w_161,h_161,al_c,q_80,usm_0.66_1.00_0.01/logo_nocopyright.webp"
                    onclick="location.reload()" >
                <div id="icons" class="headerStruture">
                </a>
                <br/><br/>
                <a id="config" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">
                    <img
                        src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/minha conta.png"
                        alt="Configurations"
                    />
                </a>

                <a id="config" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
                    <img
                        src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/carrinho-de-compras.svg"
                        alt="Configurations"
                    />
                </a>

                <a id="circle" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">
                    <img
                        src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/online-shop.svg"
                        alt="Circle"
                    />
                </a>
            </div>
        </header>
        <div>
	        <?php 
	            Rotas::get_Pagina();
            ?>
        </div>  
        <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
