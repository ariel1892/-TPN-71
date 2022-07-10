<?php
class CRectangulo {
    private $largo;
    private $ancho;
    
    function __construct($l,$a){
      $this->largo = $l;
      $this->ancho = $a;
 
    }
  
    public function getlargo()
    {
      return $this->largo;
    }
    public function getancho()
    {
      return $this->ancho;
    }
    public function CalcularPerimetro()
    {
      return $this->largo*2+$this->ancho*2;
    }
   
    public function CalcularArea()
    {
      return $this->largo * $this->ancho;
    }
    public function MostrarDatos() 
    {
      return "el largo es: ".$this->largo."<br>"."el ancho es: ".$this->ancho."<br>"."el perimetro es: ".$this->CalcularPerimetro()."<br>"."el area es: ".$this->CalcularArea()."<br>";
    }
 
  
  }
  $rec= new CRectangulo($_POST['largo'], $_POST['ancho']);

  echo $rec-> MostrarDatos() ."<br>";



?>
