<?php


declare(strict_types=1); // checagem de tipos restrita

    class ContaBancaria
    {

        // modificador de acesso: 
        // public (torna todos os elementos da classe publicos)
        // private (torna todos os elementos da classe privados/restritos)
        // protected (semelhante ao private, mas tem uma exceção que podemos acessar elementos protegidos de classes que herdam da classe pai)

        /**
        * @var string
        */

        private $banco;

        /**
        * @var string
        */

        private $nomeTitular;
        
        /**
        * @var string
        */
        
        private $numeroAgencia;

        /**
        * @var string
        */

        private $numeroConta;
        
        /**
        * @var float
        */

        private $saldo;

        // metodo construtor
        public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
        ) {
            // $this = acessando atributo/metodo de dentro da propria classe
            $this -> banco = $banco;
            $this -> nomeTitular = $nomeTitular;
            $this -> numeroAgencia = $numeroAgencia;
            $this -> numeroConta = $numeroConta;
            $this -> saldo = $saldo;
        }

        // metodo para obter saldo
        public function obterSaldo(): string
        {
            return 'Seu saldo atual é: R$'. $this -> saldo;
        }

        // metodo para depositos
        public function depositar(float $valor): string
        {
            $this -> saldo += $valor;
            // saldo + valor depositado
            return 'Depósito de R$ ' . $valor . ' realizado';
        }

        // metodo para saques
        public function sacar(float $valor): string
        {
            $this -> saldo -= $valor;
            // saldo - valor para saque
            return 'Saque de R$ ' . $valor . ' realizado';
        }
            
    }
    
    // new NomeDaClasse() cria uma instancia da classe 
    $conta1 = new ContaBancaria(
        'Banco do Brasil', // banco
        'Luigi Belanda', // nomeTitular
        '8244', // numeroAgencia
        '573854-10', // numeroConta
        0 // saldo
    );

    var_dump($conta1);

    $conta2 = new ContaBancaria(
        'Caixa Economica', 
        'Maria Eduarda', 
        '4324', 
        '43245-10', 
        300 
    );

    var_dump($conta2);

    /* depositando/sacando e mostrando o funcionamento do metodo depositar
    echo $conta1 -> obterSaldo();
    echo "<br>";
    echo $conta1 -> depositar(300.00);
    echo "<br>";
    echo $conta1 -> obterSaldo();
    echo "<br>";
    echo $conta1 -> sacar(150.00); 
    echo "<br>";
    echo $conta1 -> obterSaldo();
    */

    // acessando e mostrando oque está dentro do atributo
    // var_dump($conta -> nomeTitular);
    // usamos o -> para indicar qual atributo queremos  


    // métodos = ações/funções da classe 

?>