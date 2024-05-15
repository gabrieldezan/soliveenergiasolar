<?php

require_once "Conexao.class.php";

class Enderecos extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_enderecos;
    private $titulo;
    private $endereco;
    private $cidade;
    private $estado;
    private $mapa;
    private $horario_atendimento;
    private $telefone;
    private $url_amigavel;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_enderecos === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO enderecos (
                        titulo,
                        endereco,
                        cidade,
                        estado,
                        mapa,
                        horario_atendimento, 
                        telefone,
                        url_amigavel
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->endereco",
                    "$this->cidade",
                    "$this->estado",
                    "$this->mapa",
                    "$this->horario_atendimento",
                    "$this->telefone",
                    "$this->url_amigavel"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE enderecos SET 
                        titulo = ?,
                        endereco = ?,
                        cidade = ?,
                        estado = ?,
                        mapa = ?,
                        horario_atendimento = ?,
                        telefone = ?,
                        url_amigavel = ?
                    WHERE 
                        id_enderecos = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->endereco",
                    "$this->cidade",
                    "$this->estado",
                    "$this->mapa",
                    "$this->horario_atendimento",
                    "$this->telefone",
                    "$this->url_amigavel",
                    "$this->id_enderecos"
                ));
                $this->setRetorno_dados($this->id_enderecos);
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
                    id_enderecos,
                    titulo,
                    endereco,
                    CONCAT(cidade, '-', estado) AS cidade_estado
                FROM
                    enderecos
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
                    titulo,
                    endereco,
                    cidade,
                    estado,
                    mapa,
                    horario_atendimento,
                    url_amigavel,
                    telefone
                FROM
                    enderecos
                WHERE
                    id_enderecos =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_enderecos"
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
    function getId_enderecos() {
        return $this->id_enderecos;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getMapa() {
        return $this->mapa;
    }

    function getHorario_atendimento() {
        return $this->horario_atendimento;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getUrl_amigavel() {
        return $this->url_amigavel;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_enderecos($id_enderecos) {
        $this->id_enderecos = $id_enderecos;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setMapa($mapa) {
        $this->mapa = $mapa;
    }

    function setHorario_atendimento($horario_atendimento) {
        $this->horario_atendimento = $horario_atendimento;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setUrl_amigavel($url_amigavel) {
        $this->url_amigavel = $url_amigavel;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
