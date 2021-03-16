<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Jquery & popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Bootstrap 4 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Bootstrap 3 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- Fontes e Css -->
<script src="https://kit.fontawesome.com/52bbd83860.js" crossorigin="anonymous"></script>
<link href="{$GET_SITE_HOME}/lib/paginas/index/styles.css" rel="stylesheet" />

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
                <a href="{$GET_SITE_HOME}">
	                <img  class="timlogo" src="https://static.wixstatic.com/media/2b9fcf_6b3fa22ccd34471da67dd5b86cb73e0f~mv2.jpg/v1/fill/w_161,h_161,al_c,q_80,usm_0.66_1.00_0.01/logo_nocopyright.webp"
                    onclick="location.reload()" >
                <div id="icons" class="headerStruture">
                </a>
                <br/><br/>
                <a id="config" href="{$PAG_MINHACONTA}">
                    <img
                        src="{$GET_SITE_HOME}/media/minha conta.png"
                        alt="Configurations"
                    />
                </a>

                <a id="config" href="{$PAG_CARRINHO}">
                    <img
                        src="{$GET_SITE_HOME}/media/carrinho-de-compras.svg"
                        alt="Configurations"
                    />
                </a>

                <a id="circle" href="{$GET_SITE_HOME}">
                    <img
                        src="{$GET_SITE_HOME}/media/online-shop.svg"
                        alt="Circle"
                    />
                </a>
            </div>
        </header>
        <div>
	        {php}
	            Rotas::get_Pagina();
            {/php}
        </div>  
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </body>
</html>