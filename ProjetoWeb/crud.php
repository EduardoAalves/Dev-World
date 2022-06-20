<?php
require_once 'config.php';
require_once DBAPI;

class Crud extends Conexao
{
    private $conexao;
    private $sql;

    public function insert($tabela, array $dados)
    {
        $this->conexao = $this->Conectar();
        $col = '';
        $val = '';
        foreach ($dados as $coluna => $valor){
            $col .= "$coluna,";
            $val .= "'$valor',";
        }
        $col = rtrim($col,',');
        $val = rtrim($val,',');
        $this->sql = "INSERT INTO $tabela ( $col ) VALUES ( $val )";
        return $this->conexao->query($this->sql);
    }

    public function select($tabela, array $dados)
    {
        $this->conexao = $this->Conectar();
        $where = '';
        if(empty($dados)){
            $this->sql = "SELECT * FROM $tabela";
        }else{
            foreach ($dados as $coluna => $valor){
                $where .= "$coluna = '$valor' AND ";
            }
            $where = rtrim($where,' AND ');
            $this->sql = "SELECT * FROM $tabela WHERE $where";
        }
        return $this->conexao->query($this->sql);
    }



    public function update($tabela, array $dados, $id)
    {
        $this->conexao = $this->Conectar();
        $up = '';
        foreach ($dados as $coluna => $valor){
            $up .= "$coluna = '$valor',";
        }
        $up = rtrim($up,',');
        $this->sql = "UPDATE $tabela SET $up WHERE id = '$id'";
        var_dump($this->sql);
        return $this->conexao->query($this->sql);
    }

    public function delete($tabela,$dados)
    {
        $this->conexao = $this->Conectar();
        $this->sql = "DELETE FROM $tabela WHERE id = '$dados'";
        return $this->conexao->query($this->sql);
    }
}