<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para desenvolvimento web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Salvar.php">
    <h1> Meu site está online! </h1>
    <table class="table1">
        
        <tr>
            <td class="titulo" colspan=100%>Formulário</td>
        </tr>
        <tr>
            <td><label>Nome:</label></td>
            <td><input class="campo_nome" type="text" id="Nome" name="Nome"></td>
        </tr>
        
            <tr>
                <td><label>E-mail:</label></td>
                <td><input class="campo_email" type="text" id="email" name="email" onblur="validacaoEmail(this)" maxlength="19" size="20"></td>
            </tr>
            <tr>
                <td class="profissao">
                    Profissão:
                </td>
                <td class="camposProfissao">
                    <select id="ESPECIALIDADE_SELECIONADA">
                    <option value="Professor">Professor</option>
                    <option value="Engenheiro">Engenheiro</option>
                    <option value="Medico">Médico</option>
                    </select>
                    <input type="text"
                    onchange="fnBuscaSelectEspecifico(this, 'ESPECIALIDADE_SELECIONADA');" id="value"> ↓
                    <div id="msprofissao"></div>
                </td>
            </tr>
            <script language='JavaScript'>
                function fnBuscaSelectEspecifico(busca, select) {
                    var valorABuscar= busca.value;
                    var buscaid=busca.id;
                    var valorABuscarSemFormatacao = 
                    valorABuscar.
                    replace(/(\.|\(|\)|\/|\-| )+/g, '');
                    var valorABuscarFormatado="";
                    document.getElementById("msprofissao").innerHTML="";

                    valorABuscar=valorABuscar.toLowerCase();
                    var selectedTrends = document.getElementById(select);
                    selectedTrends.style.display="none";
                    valorIndex=selectedTrends.selectedIndex;
                    var soprimeiro=true;
                    var soprimeiroSelecionado='0';

                    for(var i=1; i < selectedTrends.length; i++)
                    {
                        valorTextSelectedMaiusculo=selectedTrends.options[i].text;

                    }
                }

            </script>
                 <tr>
                    <td><label>CEP:</label></td>
                    <td><input class="campo_cep" type="text" id="cep"></td>
                 </tr>

                 <tr>
                    <td><label>Telefone:</label></td>
                    <td><input class="campo_telefone" type="text" id="telefone"></td>
                 </tr>
                    <tr>
                        <td><label>CPF:</label></td>
                        <td><input class="campo_cpf" type="text" id="cpf"></td>
                    </tr>
                    <tr>
                        <td class="titulo" colspan=100%>
                            
                            <button onclick="fnValidarCampos()" 
                            >Salvar
                            </button>
                        </td>
                    </tr>
                </form>
                    <script>
                        function fnValidarCampos(){
                        if(document.getElementById("Nome").value==0){
                            alert("Campo obrigatório!");
                            return false;
                        }

                        if(document.getElementById("email").value==0){
                            alert("Campo obrigatório!");
                            return false;
                        
                        }
                        if(document.getElementById("cep").value==0){
                            alert("Campo obrigatório!");
                            return false;
                        
                        }
                        if(document.getElementById("telefone").value==0){
                            alert("Campo obrigatório!");
                            return false;
                        }
                        if(document.getElementById("cpf").value==0){
                            alert("Campo obrigatório!");
                            return false;
                        }
                    }
                    </script>
           
    </table>
    <div id="msgemail"> </div>

    <script language="Javascript">
        function validacaoEmail(field) {
        usuario = field.value.substring(0, field.value.indexOf("@"));
        dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

            if ((usuario.length >=1) &&
                (dominio.length >=3) &&
                (usuario.search("@")== -1) &&
                (dominio.search("@")== -1) &&
                (usuario.search(" ")== -1) &&
                (dominio.search(" ")== -1) &&
                (dominio.search(".")!= -1) &&
                (dominio.indexOf(".")>= 1) &&
                (dominio.lastIndexOf(".") < dominio.length - 1)) {
                    document.getElementById("msgemail").innerHTML="E-mail válido";
                    alert("E-mail válido!");
                }
                else {
                    document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
                    alert("E-mail inválido!");
                }

            
        }
    </script>
  
</body>
</html>