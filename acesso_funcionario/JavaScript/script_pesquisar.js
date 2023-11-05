function pesquisar_cliente(){
  //exemplo  de como pegar o valor de um select
  var opcao_escolhida = document.getElementById('idpesquisa_cliente_nome');
  var nome_cliente = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
   alert("Se eu precisar de ajuda para pegar o valor de um select eu vou em javascrip e script_pesquisa");
   alert("ABAIXO ESTÃO OS DADOS DO CLIENTE: " + nome_cliente);
}

function pesquisar_funcionario(){
  //exemplo  de como pegar o valor de um select
  var opcao_escolhida = document.getElementById('idpesquisa_funcionario_nome');
  var nome_funcionario = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
   alert("ABAIXO ESTÃO OS DADOS DO FUNCIONARIO: " + nome_funcionario);
}
function pesquisar_pedido(){
  //exemplo  de como pegar o valor de um select
  var opcao_escolhida = document.getElementById('idpesquisa_pedido_nome');
  var nome_pedido = opcao_escolhida.options[opcao_escolhida.selectedIndex].value;  
   alert("ABAIXO ESTÃO OS DADOS DO PEDIDO: " + nome_pedido);
}


