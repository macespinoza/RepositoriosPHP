<?php
namespace App\Lib;

class Json
{
	private $xmlCompleto;
	
    public function __CONSTRUCT()
    {
        $string = file_get_contents("employees.json");
        $this->xmlCompleto = json_decode($string, true);
    }
	public function getAll(){
		return $this->xmlCompleto;
	}
	public function getId($id){
		foreach ($this->xmlCompleto  as $person_name => $person_a) {
			if($person_a['id']==$id){
				$salida = $person_a;
			}
		}
		return $salida;
	}	
	public function getCorreo($correo){
		$salida="";
		foreach ($this->xmlCompleto  as $person_name => $person_a) {
			if($person_a['email']==$correo){
				$salida = $person_a;
			}
		}
		return $salida;
	}	
	public function getApiRangoSalarial($minimo,$maximo){
		$salida="";
		$listaRep = array("$", ",");
		foreach ($this->xmlCompleto  as $person_name => $person_a) {
			if(str_replace($listaRep,"",$person_a['salary'])>=$minimo and  str_replace($listaRep,"",$person_a['salary'])<=$maximo){
				$salida[] = $person_a;
			}
		}
		return $salida;
	}
	
}