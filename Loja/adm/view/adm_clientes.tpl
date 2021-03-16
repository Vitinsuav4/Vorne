<h4 class="text-center">Gerenciar Clientes </h4>
<hr>

<!--- listando clientes ---->
<section class="row">
    
    <center>
    <table class="table table-bordered">
    
        
        <tr class="text-success bg-success">
            <td></td>
            <td>Nome</td>
            <td>Email </td>
            <td>Fone </td>
            <td>Data cad</td>
            <td>Cpf</td>
            <td>Cidade</td>
           
            
        </tr>
        
        {foreach from=$CLIENTES item=C}
        
        <tr>
            <td><a href="{$PAG_PEDIDOS}/{$C.cli_id} " class="btn btn-info">Pedidos</a> </td>
            <td>{$C.cli_nome} {$C.cli_sobrenome}</td>
            <td>{$C.cli_email}</td>
            <td>{$C.cli_celular}</td>
            <td>{$C.cli_data_cad}</td>
            <td>{$C.cli_cpf}</td>  
            <td>{$C.cli_cidade}</td> 
        </tr>
        
        {/foreach}
        
    </table>
    </center >
    
</section>

