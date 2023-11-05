function atualizar_cliente(){
  var atnome = at_cliente.atnome.value;              var atnumero = parseInt(at_cliente.atnumero.value);
  var atcep = parseInt(at_cliente.atcep.value);      var attelefone = parseInt(at_cliente.attel.value);
  var atemail = at_cliente.atemail.value;            var atcidade = at_cliente.atcidade.value; 
  var atbairro = at_cliente.atbairro.value;          var atrua = at_cliente.atrua.value;
  var atlogin = at_cliente.atlogin.value;            var atsenha = at_cliente.atsenha.value;
  /* 
    var opcao_escolhida = document.getElementById('id_atuf_cliente');
    var atuf = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
    alert(atuf);
 */
  if((atnome=="") || (atcep=="")   ||  isNaN(atcep) || (attelefone=="")  || isNaN(attelefone)  
  || (atemail=="")   || (atcidade=="") || (atbairro=="") || (atrua=="") || (atlogin=="")  || (atsenha=="")
  || (atnumero=="") || isNaN(atnumero)){
    alert("OS CAMPOS CEP TELEFONE E NUMERO DE RESIDENCIA SÓ PODEM CONTER NUMEROS.");
     return(false);
  } else{
    alert("os dados do cliente foram atualizados com sucesso!");
    return(true);
  }
}

function excluir_cliente(){

    alert("O CLIENTE FOI DELETADO COM SUCESSO DO SISTEMA");
   // window.open("atualizar_cliente.php");
  
}

function atualizar_funcionario(){
  var atnome = at_funcionario.atnome.value;              var atcpf = parseInt(at_funcionario.atcpf.value);
  var atcep = parseInt(at_funcionario.atcep.value);      var atcidade = at_funcionario.atcidade.value;         
  var atbairro = at_funcionario.atbairro.value;          var atrua = at_funcionario.atrua.value;               
  var atlogin = at_funcionario.atlogin.value;            var atsenha = at_funcionario.atsenha.value;            
  var atdata_nascimento = at_funcionario.atdata_nascimento.value;  
  var atdata_admissao = at_funcionario.atdata_admissao.value;    
   
  
  var opcao_escolhida = document.getElementById('id_atuf_funcionario');
  var uf = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
  alert(uf);
  
  if((atnome=="") || (atcpf=="")  ||  isNaN(atcpf)  || (atcep=="")   ||  isNaN(atcep) ||   (atdata_nascimento=="")  
  || (atcidade=="") || (atbairro=="") || (atrua=="") || (atlogin=="")  || (atsenha=="")|| (atdata_admissao=="")){
    alert("Voce só pode se cadastrar se todos os campos estiverem preenchidos corretamente, " +
    "verifique se possue algum campo vazio e se os campos estão preenchidos corretamente.");
    return(false);
  } else{
    alert("Funcionario cadastrado com sucesso!");
    return(true);
  }

}

function excluir_funcionario(){

  alert("O FUNCIONARIO FOI DELETADO COM SUCESSO DO SISTEMA");
 // window.open("atualizar_cliente.php");

}

function atualizar_pedido(){
  var atcodpedido= at_pedido.atcodpedido.value;
  var atdata_emissao = atpedido.data_admissao.value;
  var atcod_clie_pedi = atpedido.atcod_clie_pedi.value;
   
   
  
  var opcao_escolhida = document.getElementById('id_atuf_pedido');
  var uf = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
  alert(uf);
  
  if((atcodpedido=="") || (atdata_emissao=="")  ||  (atcod_clie_pedi) ){
    alert("Voce só pode se cadastrar se todos os campos estiverem preenchidos corretamente, " +
    "verifique se possue algum campo vazio e se os campos estão preenchidos corretamente.");
    return(false);
  } else{
    alert("pedido cadastrado com sucesso!");
    return(true);
  }

}

function excluir_pedido(){

  alert("O pedido FOI DELETADO COM SUCESSO DO SISTEMA");
 // window.open("atualizar_cliente.php");

}




