<?php
namespace App\Model;

use App\Lib\Json;
use App\Lib\Response;

class UserModel
{
    private $table = 'empleado';
    private $response;
	private $json;
    
    public function __CONSTRUCT()
    {
        $this->response = new Response();
		$this->json = new Json();
    }
    
    public function GetAll()
    {
		try
		{
			return $this->json->getAll();
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}
    }
    
    public function Get($id)
    {
		try
		{
			return $this->json->getId($id);
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}  
    }
    public function getCorreo($correo)
    {
		try
		{

			return $this->json->getCorreo($correo);
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}  
    }
	public function getApiRangoSalarial($minimo,$maximo)
    {
		try
		{
			return $this->json->getApiRangoSalarial($minimo,$maximo);
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}  
    }
}