<?php 
class ClienteEntidade {
     #Atributos da Classe
    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $cep;
    public $profissao;

    #Funções
    private function fnVerificaCampoPreenchido ($campo) {
        if ($campo=="") {
            echo "Campo obrigatório";
            return false;
        } else {
            return true;
        }
    }

    #Métodos GETs e SETs
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        if ($this->fnVerificaCampoPreenchido($nome)) {
            $this->nome=htmlspecialchars($nome);
        }
    }
}

$pessoa = new ClienteEntidade();

$pessoa->setNome($_GET['nome']);

?>