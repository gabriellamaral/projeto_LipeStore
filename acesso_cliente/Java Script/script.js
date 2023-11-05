function validarAt(){
  var atnome = atcadastro.atnome.value;              var atcpf = parseInt(atcadastro.atcpf.value);
  var atcep = parseInt(atcadastro.atcep.value);      var attelefone = parseInt(atcadastro.attel.value);
  var atemail = atcadastro.atemail.value;            var atcidade = atcadastro.atcidade.value; 
  var atbairro = atcadastro.atbairro.value;          var atrua = atcadastro.atrua.value;
  var atlogin = atcadastro.atlogin.value;            var atsenha = atcadastro.atsenha.value;

  if((atnome=="") || (atcpf=="")  ||  isNaN(atcpf)  || (atcep=="")   ||  isNaN(atcep) || (attelefone=="")  || isNaN(attelefone)  
  || (atemail=="")   || (atcidade=="") || (atbairro=="") || (atrua=="") || (atlogin=="")  || (atsenha=="")){
    alert("Voce só poderá atualizar os seus dados se os campos estiverem preenchidos corretamente, " +
     "verifique se possue algum campo vazio e se os campos estão preenchidos corretamente.");
    return(false);
  } else{
    alert("Os seus dados foram atualizados com sucesso!");
    window.open("obrigadoatcadastro.html");
    return(true);
  }
}

function validar(){
  var nome = cadastro.nome.value;              var cpf = parseInt(cadastro.cpf.value);
  var cep = parseInt(cadastro.cep.value);      var telefone = parseInt(cadastro.tel.value);
  var email = cadastro.email.value;            var cidade = cadastro.cidade.value; 
  var bairro = cadastro.bairro.value;          var rua = cadastro.rua.value;
  var login = cadastro.login.value;            var senha = cadastro.senha.value;
  if((nome=="") || (cpf=="")  ||  isNaN(cpf)  || (cep=="")   ||  isNaN(cep) || (telefone=="")  || isNaN(telefone)  
  || (email=="")   || (cidade=="") || (bairro=="") || (rua=="") || (login=="")  || (senha=="")){
    alert("Voce só pode se cadastrar se todos os campos estiverem preenchidos corretamente, " +
    "verifique se possue algum campo vazio e se os campos estão preenchidos corretamente.");
    return(false);
  } else{
    alert("Seu login foi efetuado com sucesso!");
    window.open("obrigado.html");
    return(true);
  }
}
function AddCarrinho(produto, qtd, valor, posicao)
 
var total = 0; // variável que retorna o total dos produtos que estão na LocalStorage.
var i = 0;     // variável que irá percorrer as posições
var valor = 0; // variável que irá receber o preço do produto convertido em Float.

for(i=1; i<=99; i++) // verifica até 99 produtos registrados na localStorage
{
  var prod = localStorage.getItem("produto" + i + ""); // verifica se há recheio nesta posição. 
  if(prod != null) 
  {	
    // exibe os dados da lista dentro da div itens
    document.getElementById("itens").innerHTML += localStorage.getItem("qtd" + i) + " x ";
    document.getElementById("itens").innerHTML += localStorage.getItem("produto" + i);
    document.getElementById("itens").innerHTML += " ";
    document.getElementById("itens").innerHTML += "R$: " + localStorage.getItem("valor" + i) + "<hr>";
    
    // calcula o total dos recheios
    valor = parseFloat(localStorage.getItem("valor" + i)); // valor convertido com o parseFloat()
    total = (total + valor); // arredonda para 2 casas decimais com o .toFixed(2)
  }
} 
// exibe o total dos recheios
document.getElementById("total").innerHTML = total.toFixed(2); 

function adicionaItemPedido(){ 

  var contador = (cont < 10) ? '0'+ cont++ : cont++;

  $("#table_itens").append(
     '<tr id="exc_'+ contador +'">\n\
         <td><b>'+ contador +'</b></td>\n\
            <td>'+ referencia_estofado[0] +'</td>\n\
               <td><input type="hidden" class="id_est_revest_aux" value="'+ $("#revestimento_aux").val() +'" />'+ revestimento[0] +'</td>\n\
               <td><input type="hidden" class="id_padrao_aux" value="'+ $("#cod_padrao option:selected").val() +'" />'+ $("#cod_padrao option:selected").text() +'</td>\n\
               <td>'+ (($("#revestimento_aux_2").val() === 'undefined') ? "-" : $("#revestimento_aux_2").val()) +'</td>\n\
               <td>'+ (($("#cod_padrao_2").val() === 'undefined')       ? "-" : $("#cod_padrao_2").val()) +'</td>\n\
               <td>'+ referencia_estofado[1] +'</td>\n\
               <td>'+ $("#quantidade").val() +'</td>\n\
               <td>'+ $("#valor_unitario").val() +'</td>\n\
               <td>'+ $("#desconto_acrescimo").val() +'</td>\n\
               <td>'+ $("#valor_total").val() +'</td>\n\
               <td><button type="button" class="btn btn-danger btn-xs btnRemover"><i class="glyphicon glyphicon-remove" ></i> Remover</button></td>\n\
     </tr>'); 
}   




