<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['nome'] = $_POST['nome'];
            $a['acompanhante'] = $_POST['acompanhante'];
            $a['itens'] = $_POST['itens'];

            $gravar = $_POST['nome']."|".$_POST['acompanhante']."|".$_POST['itens']."|";
            $arquivo = fopen('contatos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>