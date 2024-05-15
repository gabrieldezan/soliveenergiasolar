<?php

require_once "Conexao.class.php";

class Solucoes extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_solucoes;
    private $titulo;
    private $texto;
    private $icone;
    private $imagem;
    private $id_servicos;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_solucoes === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO solucoes (
                        titulo,
                        texto,
                        icone,
                        imagem,
                        id_servicos
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->texto",
                    "$this->icone",
                    "$this->imagem",
                    "$this->id_servicos"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE solucoes SET 
                        titulo = ?,
                        texto = ?,
                        icone = ?,
                        imagem = ?,
                        id_servicos = ?
                    WHERE 
                        id_solucoes = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->texto",
                    "$this->icone",
                    "$this->imagem",
                    "$this->id_servicos",
                    "$this->id_solucoes"
                ));
                $this->setRetorno_dados($this->id_solucoes);
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
                    id_solucoes,
                    titulo,
                    texto,
                    icone,
                    imagem
                FROM
                    solucoes
                WHERE
                    id_servicos = $this->id_servicos
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
                    texto,
                    icone,
                    imagem
                FROM
                    solucoes
                WHERE
                    id_solucoes =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_solucoes"
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

    function getId_solucoes() {
        return $this->id_solucoes;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTexto() {
        return $this->texto;
    }

    function getIcone() {
        return $this->icone;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getId_servicos() {
        return $this->id_servicos;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_solucoes($id_solucoes) {
        $this->id_solucoes = $id_solucoes;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setIcone($icone) {
        $this->icone = $icone;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setId_servicos($id_servicos) {
        $this->id_servicos = $id_servicos;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
