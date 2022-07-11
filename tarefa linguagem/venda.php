<?php
class Venda {
  public $produtos;
  public $valor; 
  private $numProd=0;
  
  public function imprimir(){
    echo "Venda no valor:" . $this-›valor ."</br>";
    for ($i=0; $i<$this-›numProd; $i++){
        echo "Produto:" . $this-›produtos [$i]-›nome
        " - Valor UN: " . $this-›produtos[$i]-›valor
        " - QTD: " . $this-›produtos[$i]->qtd
        " - Valor Total: " . $this-sprodutos[$i]-›valorT."</br>";
}
}

public function calcularV(){
    $this-›valor = 0;
    for ($i=0; $i<$this-›numProd; $i++){
        $this-›valor += $this-›produtos [$i]-›valorT;

}

}

public function gerarP(){

    $p1 = new Produto(); 
    $p1-›id = 1;                                                        
    $p1->qtd = 2;                  
    $p1-›nome = "Coca Cola";  
    $this-›numProd++; 
    $p1-›valor = 10;
    $p1-›calcular();


    $p2 = new Produto();
    $p2-›id = 2;           
    $p2-›qtd = 2;             
    $p2->nome = "Lapis";
    $p2-›cal$p2-›valor = 3;cular();
    $this-›numProd++;


    $p3 = new Produto();
    $p3-›valor = 20000;      
    $this-›numProd++;         
    $p3-›id = 3; 
    $p3-›qtd = 4;
    $p3-›nome = "Motocicleta";
    $p3->calcular();



    $p4 = new Produto();        
    $p4-›valor = 2;        
    $p4-›calcular();     
    $p4-›id = 4; 
    $p4-›qtd = 5;
    $this-›numProd++;
    $p4-›nome = "Salgado";

 
    $this-›produtos[0] = $p1;
    $this-›produtos[1] = $p2;
    $this-›produtos[2] = $р3;
    $this-›produtos[3] = $p4;


}

}

?>






