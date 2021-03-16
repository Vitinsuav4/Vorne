<?php
/* Smarty version 3.1.36, created on 2020-12-17 04:03:48
  from 'C:\xampp1\htdocs\Loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fdb02d40d9b61_36278049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c478c2e690d537200c8cd3a5872eaab79d2b955f' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\Loja\\view\\index.tpl',
      1 => 1608188619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb02d40d9b61_36278049 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<style>
  :root{
    font-size: 16px;
  }

  body{
    margin: 0;
    padding: 0;
  }

  /* Start of header */

  #header{
    background-color: black;
    padding: 0;
    margin: 0;
    size: auto;
    display: flex;
    align-items: center;
  }

  #header #txt{
    display: block;
  }

  #logo{
    height: 10rem;
    width: 10rem;
    margin-left: 10rem;
  }

  #container{
    margin: 0 6rem 0 6rem;
  }
  #container p{
    color: white;
    text-align: center;
    font-family: belinda-w00-regular;
  }
  #input{
    background-color: white;
    padding: 5px 5px 5px 0;
    size: auto;
  }
  #input img {
    height: 1rem;
    width 1rem;
  }
  #input input{
    border: 0;
    width: 25rem;
  }


  #icons{
    margin-right: 10rem;
  }

  #icons a{
    text-decoration: none;
    margin-left: 1rem;
    margin-right: 1rem;
  }

  #icons img{
    height: 2.5rem;
    width: 2.5rem;
  }

  /* End of header || Start of breadcrumb */

  ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #eee;
  }

  ul.breadcrumb li {
    display: inline;
    font-size: 18px;
  }

  ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
  }

  ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
  }

  ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
  }

  /* End of breadcrumb || Start of index */

  #index{
    margin: 0 4rem 0 4rem;

  }

  /* Index:categories */
  #cat-main{
        width: 10rem;
        margin-top:1rem;
        margin-left: 6px;
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
  } .cat-bttns:hover {
    background-color: gray;

  }
</style>

</head>
<body>
    <div id="header">
      <div id="logoSession" class="headerStruture">
        <img id="logo"
            alt="logo"
            src="https://static.wixstatic.com/media/2b9fcf_6b3fa22ccd34471da67dd5b86cb73e0f~mv2.jpg/v1/fill/w_161,h_161,al_c,q_80,usm_0.66_1.00_0.01/logo_nocopyright.webp"
              onclick="location.reload()"
          />
      </div>

      <div id="container">
        <p id="txt">©2020 Vorne All rights reserved</p>
        <div id="input" class="headerStruture">
          <input id="inputArea" placeholder="Search..." />
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAaVBMVEX///8AAAD8/Pzz8/MzMzPv7+/s7OxFRUW9vb1ISEj4+Pg6Ojqvr6/o6OhdXV1MTEzMzMzh4eHGxsZ+fn6NjY0uLi7X19dWVlajo6MhISFiYmK2trZoaGgYGBiTk5OGhoZwcHANDQ2bm5vYP8ZlAAAE7UlEQVR4nO1b2ZKjMAzkSMgFBHJwTA4g//+RC8lmZjNuyZbNMLVV6eeYlm25JUuO573xxhtv/FeYF7v4cE5Xm9lss03ba5zl4WTkUdaUG/87ukV5KyYwYl6dFe4vHNtl8JPswbJk2P9in/0UfX6t9fQDNqef2IqkuZjR302oxjYhvHbm9ANmp1H5TzL2O1bFaPT51oK/x349Dn8l2PxXbMY4EOvWln7AzZk/n7nw+37qyL90o++xyV34bbxfscDhNIzB7/u19RrEo/D3SH6Z379YrUE2Gn+vinM5f6STn3rz0VRxj2pfznQ//hDzB7z8lnH2Eu+i3Y0XjIPUgD3LDtOe8MrZsJPxMwKUFmTWtT6tyGF1JOEPj9R3FvxMgorMmlqJAeQG3LQ5Z0QmrUtz/oL4hJmuU9tXG6cHAZH7toaJXkE449XUAGIKjXHKnxBn2HACwQKO3pvS9wjxJwzFAMfARsDfA1tgdhTVe59w/gNC6AdGS7BDI0txglsgQTiaLAE8xxYXHejKBteVEI0TCvkDB/ChhX7YDQyTOsADAdJzbYKIRKi2TKnQJmjFKAGDKjt+zwN6dNGNqdQxR+srHsrqdOEkHXEBPA/sp+ZrEdAPhzsu8IKWHwEC8dme35urB6HmQxq4CwjyCBUgs+GPlHoX7yxS+i8AXecnpAaxrQs/0lW2ZBCoEUSc0L9CTZNZWU3UG46TCyAnYC9J4BA41rpUYVtwkVWVLvvL/QNqerXhvFoVDvbnBgBT4s6hau/CsdaXq5vKramqQ1vH8vvbAKEBwAcc6+5CA379FIyvA+qmslMaXwnVJHvFbSoojU0bCzw1Ggovpd8QqCkef8lQE2mDuwyDubqnfAtBXbHO8lbyALjq83v66zkhOAalAz9w6gsvrSGoTjhIEVjQVjMEVAeMi1sKAlA41d2zgM0X63CAii06YYvAGOvEGOxnpxsTfIBBlvEAtVz0+4lGydsNA8LOYgf6JQCj/NjGANRyNdFVWCm3kENQ6jCbCSyVy/MSWG40qhOiskbvBsL0PIeNCzNJgbb7rYh/jhsnhm0bXGyX9MET3PIxFRSiZVkaKyKsE/cwTvGJNwtbQ0FaEm1M83IbSObvqE1ygwAVewdIcitUZ75D/y6lIFuuogclsGkxoMNd0yciuuMqi+pU484fniiRzphwj71SWVSnNnLA5pCDZVhnLd9DF3ZdQFj+14bm9BIe8krDPkCW4cN2wyvqtG0Oh31r8MbvAfZWpgCruRtkfpB1v22B+ysmFSuJAaO+Y3lCVnbLrB/S0TCPaQOoTrwLZH4Q0a9CrCHsAFzHt0BYft1ZbwOpJDI/4EIch0uc41cEvjgyeZlelxWcEzI39C06QbHQhNUj/QB9u+cPpDXgICaTFDC/z9xtTjqQ0A96hCfD98Xl7h8vT0bzgwGF3h27w7cLcEKvgVUlftcwYXp2AG8t6F0Q+8FzTvG+VKw4pt+SpC/gFzX3NbCu/qyjPItv+3Oaph9tczsVecTMZlw/sEFCniA7P5CD8YNpDPDWtCaO9CcAHSLSD9ppDGD8wLEnYgzSD9xaEgKsCQtsC6FyUH4w1R6QFljVQe2A/WBCA7AfWL0WtMVc3QX7hoQVVD9oJ+UHfjDZKXwieNXEcf8WZ4SXd88OrwUdLPjMLY/TidAriuu28+v29BWL/wDoUz3i+pO+iAAAAABJRU5ErkJggg==" />
        </div>
      </div>

      <div id="icons" class="headerStruture">
        <br/><br/>
          <a id="profile" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
 ">
              <img
                  src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/my-account.svg"
                  alt="Your profile"
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
  </div>

  


      <?php 
      Rotas::get_Pagina();
      ?>

</body>
</html><?php }
}
