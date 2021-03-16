<?php
/* Smarty version 3.1.36, created on 2021-01-05 00:54:37
  from 'C:\xampp\htdocs\Loja\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff3e2fd66b545_85006340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8819726cd2e74cdc64f6f44c50a79b549c6c0081' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja\\view\\cadastro.tpl',
      1 => 1609818872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff3e2fd66b545_85006340 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Vorne</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/cadastro/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/cadastro/css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                   <img style="height: 97%;" src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/cadastro/images.jfif" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <center><h2>Cadastro Vorne</h2></center>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Nome :</label>
                                <input type="text" name="cli_nome" id="cli_nome" minlength="3" required/>
                            </div>
                            <div class="form-group">
                                <label>Sobrenome :</label>
                                <input type="text" name="cli_sobrenome" id="cli_sobrenome" minlength="3" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nascimento :</label>
                            <input type="date" name="cli_data_nasc" class="form-control" required>
                        </div>
                         <div class="form-group">
                                <label>Email:</label>
                                <input type="text" name="cli_email" id="cli_email" required/>
                            </div>
                        <div class="form-row">
                          <div class="form-group">
                                <label>CPF :</label>
                                <input type="text" name="cli_cpf" id="cli_cpf" minlength="11" maxlength="11" required/>
                            </div>
                             <div class="form-group">
                                <label>Senha :</label>
                                <input type="text" name="cli_senha" id="cli_senha" minlength="8" maxlength=""  required/>
                            </div>                          
                        </div>
                          <div class="form-group">
                                <label>Confirme a Senha:</label>
                                <input type="text" name="cli_verificarsenha" id="cli_verificarsenha" minlength="8" maxlength=""  required/>
                            </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Estado :</label>
                                <div class="form-select">
                                    <select name="cli_uf" id="cli_uf">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="ES">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>CEP :</label>
                                <input type="text" name="cli_cep" id="cli_cep" minlength="8" maxlength="8" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cidade :</label>
                            <input type="text" name="cli_cidade" id="cli_cidade" minlength="3" required/>
                        </div>
                        <div class="form-group">
                            <label>Bairro :</label>
                            <input type="text" name="cli_bairro" id="cli_bairro" minlength="3" required/>
                        </div>
                        <div class="form-group">
                            <label>Endereço :</label>
                            <input type="text" name="cli_endereco" id="cli_endereco" minlength="3" required/>
                        </div>
                         <div class="form-row">
                             <div class="form-group">
                                <label>Número Casa :</label>
                                <input type="text" name="cli_numero" id="cli_numero" required/>
                            </div>
                            <div class="form-group">
                                <label> Complemento(Opcional) </label>
                                <input type="text" name="cli_complemento" id="Cli_Complemento"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>DDD :</label>
                                <input type="text" name="cli_ddd" id="cli_ddd" min="10" max="99" required/>
                            </div>
                             <div class="form-group">
                            <label>Celular :</label>
                            <input type="number" name="cli_celular" id="cli_celular" required/>
                        </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Cadastrar" class="submit" name="submit" id="submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/cadastro/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/cadastro/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
