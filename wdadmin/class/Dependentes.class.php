<?php

require_once "Conexao.class.php";

class Dependentes extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_dependentes;
    private $codigo;
    private $nome;
    private $cpf;
    private $rg;
    private $data_nascimento;
    private $id_associados;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_dependentes === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO dependentes (
                        codigo,
                        nome,
                        cpf,
                        rg,
                        data_nascimento,
                        id_associados
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->codigo",
                    "$this->nome",
                    "$this->cpf",
                    "$this->rg",
                    "$this->data_nascimento",
                    "$this->id_associados"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE dependentes SET 
                        nome = ?,
                        cpf = ?,
                        rg = ?,
                        data_nascimento = ?,
                        id_associados = ?
                    WHERE 
                        id_dependentes = ?;
                ');
                $salva_dados->execute(array(
                    "$this->nome",
                    "$this->cpf",
                    "$this->rg",
                    "$this->data_nascimento",
                    "$this->id_associados",
                    "$this->id_dependentes"
                ));
                $this->setRetorno_dados($this->id_dependentes);
            }
            return true;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO CONSULTA DADOS =============== */

    public function consulta_dados() {

        try {
            $pdo = parent::getDB();

            $consulta_dados = $pdo->prepare("
                SELECT
                    id_dependentes,
                    codigo,
                    nome,
                    cpf,
                    rg,
                    DATE_FORMAT(data_nascimento, '%d/%m/%Y') AS data_nascimento_formatado
                FROM
                    dependentes
                WHERE
                    id_associados = $this->id_associados
            ");
            $consulta_dados->execute();
            if ($consulta_dados->rowCount() > 0):
                $this->setRetorno_dados(json_encode($consulta_dados->fetchAll()));
                return true;
            else:
                return false;
            endif;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO EDITA DADOS =============== */

    public function edita_dados() {

        try {
            $pdo = parent::getDB();

            $edita_dados = $pdo->prepare("
                SELECT
                    nome,
                    cpf,
                    rg,
                    data_nascimento
                FROM
                    dependentes
                WHERE
                    id_dependentes =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_dependentes"
            ));
            if ($edita_dados->rowCount() > 0):
                $this->setRetorno_dados(json_encode($edita_dados->fetchAll()));
                return true;
            else:
                return false;
            endif;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== GETTERS E SETTERS =============== */

    function getId_dependentes() {
        return $this->id_dependentes;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getId_associados() {
        return $this->id_associados;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_dependentes($id_dependentes) {
        $this->id_dependentes = $id_dependentes;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setId_associados($id_associados) {
        $this->id_associados = $id_associados;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
