<?php

    class Venda
    {

        /*
        Crie uma classe chamada "Venda" com os atributos PRIVADOS "data",
        "produto", "quantidade" e "valorTotal". Crie uma instancia da classe
        e passe os atributos através de um método construtor, em seguida, invoque
        o método responsável por exibir o conteúdo da venda devidamente formatado
        */

        private $data;
        private $produto;
        private $quantidade;
        private $valorTotal;
    

        public function __construct($data, $produto, $quantidade, $valorTotal)
        {
        
            $this -> data = $data;
            $this -> produto = $produto ;
            $this -> quantidade = $quantidade;
            $this -> valorTotal = $valorTotal;
        }

        /*
        public function dataVenda()
        {
            return 'A data da venda foi: '. $this -> data;
        }

        public function produtoVenda()
        {
            return 'Produto comprado: '. $this -> produto;
        }

        public function quantidadeVenda()
        {
            return 'Quantidade comprada: '. $this -> quantidade;
        }

        public function valorVenda()
        {
            return 'Valor total a pagar: R$ '. $this -> valorTotal;
        }
        */

        public function vendaGeral()
        {
            echo 'A data da venda foi: '. $this -> data;
            echo "<br>";
            echo 'Produto comprado: '. $this -> produto;
            echo "<br>";            
            echo 'Quantidade comprada: '. $this -> quantidade;
            echo "<br>";
            echo 'Valor total a pagar: R$ '. $this -> valorTotal;
        }

    }

    $venda1 = new Venda(
        '03/04/2020',
        'legumes',
        '1kg',
        10.00
    );

    // var_dump($venda1);
    
    /*
    echo $venda1 -> dataVenda();
    echo "<br>";
    echo $venda1 -> produtoVenda();
    echo "<br>";
    echo $venda1 -> quantidadeVenda();
    echo "<br>";
    echo $venda1 -> valorVenda();
    */

    echo $venda1 -> vendaGeral();

?>