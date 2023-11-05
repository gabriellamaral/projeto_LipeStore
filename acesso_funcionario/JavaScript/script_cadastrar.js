function cadastrar_cliente(){
  var nome = cadastro_cliente.nome.value;              var cpf = parseInt(cadastro_cliente.cpf.value);
  var cep = parseInt(cadastro_cliente.cep.value);      var telefone = parseInt(cadastro_cliente.tel.value);
  var email = cadastro_cliente.email.value;            var cidade = cadastro_cliente.cidade.value; 
  var bairro = cadastro_cliente.bairro.value;          var rua = cadastro_cliente.rua.value;
  var login = cadastro_cliente.login.value;            var senha = cadastro_cliente.senha.value;
  var numero = parseInt(cadastro_cliente.numero.value);
  /*
  var opcao_escolhida = document.getElementById('id_uf');
  var uf = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
  alert(uf);
  */
  if((nome=="") || (cpf=="")  ||  isNaN(cpf)  || (cep=="")   ||  isNaN(cep) || (telefone=="")  || isNaN(telefone)  
  || (email=="")   || (cidade=="") || (bairro=="") || (rua=="") || (login=="")  || (senha=="") || (numero=="") 
  || isNaN(numero)){
    alert("OS CAMPOS CPF, CEP, TELEFONE, E NUMERO DE RESIDENCIA SÓ PODEM CONTER NUMEROS!!");
    return(false);
  } else{
    alert("Cliente cadastrado com sucesso!");
    return(true);
  }
}

function cadastrar_funcionario(){

  var nome = cadastro_funcionario.nome.value;              var cpf = parseInt(cadastro_funcionario.cpf.value);
  var cep = parseInt(cadastro_funcionario.cep.value);      var cidade = cadastro_funcionario.cidade.value;         
  var bairro = cadastro_funcionario.bairro.value;          var rua = cadastro_funcionario.rua.value;               
  var login = cadastro_funcionario.login.value;            var senha = cadastro_funcionario.senha.value;            
  var data_nascimento = cadastro_funcionario.data_de_nascimento.value;  
   
  /*
  var opcao_escolhida = document.getElementById('id_uf_funcionario');
  var uf = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
  alert(uf);
  */
  if((nome=="") || (cpf=="")  ||  isNaN(cpf)  || (cep=="")   ||  isNaN(cep) ||   (data_nascimento=="")  
  || (cidade=="") || (bairro=="") || (rua=="") || (login=="")  || (senha=="")){
    alert("Voce só pode se cadastrar se todos os campos estiverem preenchidos corretamente, " +
    "verifique se possue algum campo vazio e se os campos estão preenchidos corretamente.");
    return(false);
  } else{
    alert("Funcionario cadastrado com sucesso!");
    return(true);
  }

}

function cadastrar_pedido(){

  var codpedido = cadastro_pedido.codpedido.value;
  var data_emissao = cadastro_pedido.data_emissao
  .value;
  var codcliente = cadastro_pedido.codcliente.value;
  
   
  
  if((codpedido=="") || (data_emissao=="")  ||  (codcliente=="") ){
    alert("Voce só pode se cadastrar se todos os campos estiverem preenchidos corretamente, " +
    "verifique se possue algum campo vazio e se os campos estão preenchidos corretamente.");
    return(false);
  } else{
    alert("pedido cadastrado com sucesso!");
    return(true);
  }

}





