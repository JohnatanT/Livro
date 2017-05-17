<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 09</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Johnatan",17,"M");
            $p[1] = new Pessoa("Sandy",16 ,"F");
            
            $l[0] = new Livro("Fazendo meu filme", "Paula Pimenta",331,$p[0]);
            $l[1] = new Livro("A guerra", "Jose", 200, $p[1]);
         
            $l[0]->abrir();
            $l[0]->folhear(20);
            $l[0]->avancarPag();
            $l[0]->detalhes();
        
        ?>
        </pre>
    </body>
</html>
