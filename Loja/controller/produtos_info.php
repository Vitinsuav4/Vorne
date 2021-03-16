<?php 

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);
//var_dump($produtos->GetItens());

$image = new ProdutosImages();
$image->GetImagesPRO(Rotas::$pag[1]);

$smarty->assign('PRO',$produtos->GetItens());
$smarty->assign('IMAGES',$image->GetItens());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());


$ID = Rotas::$pag[1];

$smarty->display('produtos_info.tpl');


 ?>