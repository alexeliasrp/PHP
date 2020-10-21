<?php

class Documento{
	private $num;
	
	public function getNum(){
		return $this->num;
	}

	public function setNum($num){
		$valido = Documento::ValidarCPf($num); // acessar método estático
		if($valido){
			$this->num = $num;
		}
		else{
			throw new Exception("CPF inválido");
		}
	}

	public static function ValidarCPf($cpf):bool{
		if(empty($cpf)) {
	        return false;
	    }
	 
	    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	     
	    
	    if (strlen($cpf) != 11) {
	        echo "length";
	        return false;
	    }
	    
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999') {
	        return false;

	     } else {   
	         
	        for ($t = 9; $t < 11; $t++) {
	             
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d) {
	                return false;
	            }
	        }
	 
	        return true;
	    }
	}

}

//$cpf = new Documento();
//$cpf->setNum("222");
//var_dump($cpf->getNum());

var_dump(Documento::ValidarCPf("282.560.308-28"));
var_dump(Documento::ValidarCPf("222"));
?>