
<?php

$smarty = new Template();

if(isset($_POST['pro_nome']) && isset($_POST['pro_valor'])){
	$pro_nome      = $_POST['pro_nome'];
    $pro_categoria = $_POST['pro_categoria'];
    $pro_ativo     = $_POST['pro_ativo'];
    $pro_modelo    = $_POST['pro_modelo'];
    $pro_ref       = $_POST['pro_ref'];
    $pro_valor     = $_POST['pro_valor'];
    $pro_estoque   = $_POST['pro_estoque'];
    $pro_tamanho   = $_POST['pro_tamanho'];
    $pro_img       = $_FILES['pro_img']['name'];
    $pro_desc      = $_POST['pro_desc'];
    $pro_slug      = $_POST['pro_slug'];
    

    if(!empty($_FILES)){
        $upload = new ImageUpload();
        if($upload->Upload(300, 'pro_img')){
            $pro_img = $upload->retorno;
        }else{
            exit('Erro ao fazer o upload de imagem');
        }
    }


    $gravar = new Produtos();

    $gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_modelo, $pro_ref, 
            $pro_valor, $pro_estoque, $pro_tamanho, $pro_img, $pro_desc, $pro_slug);

    if($gravar->Inserir()){
    	echo '<div class="alert alert-sucess">Produto cadastrado com sucesso!!</div>';
    }
    else{
    	echo '<div class="alert alert-danger">Erro ao cadastrar</div>';
    }
}

$categorias = new Categorias();
$categorias->GetCategorias();

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->display('adm_novos_produtos.tpl');