<?php 

class Intervalo 
{

	private $inferior;
	private $superior;

	function __construct($inferior, $superior) 
	{
		$this->inferior = $inferior;
		$this->superior = $superior;
	}

	public function clonar() 
	{
		// return this($this->inferior, $this->superior);
	}

	public function longitud() 
	{
		// return $superior - $inferior;
	}

	public function desplazar($desplazamiento) 
	{
		// $this->inferior = $this->inferior + $desplazamiento;
		// $this->superior = $this->superior + $desplazamiento;
	}

	public function desplazado($desplazamiento) 
	{
		// $intervalo = $this->clone();
		// $intervalo->desplazar($desplazamiento);
		// return $intervalo;
	}

	public function incluye($valor) 
	{
		// return $this->inferior <= $valor && $valor <= $this->superior;
	}

	// public function incluye(IntervaloAntiguo intervalo) {
		// assert intervalo!=null;
		// return $this->incluye(intervalo->inferior) && 
		// 		$this->incluye(intervalo->superior);
	// }

	public function equals($intervalo) 
	{
		// assert intervalo!=null;
		// return inferior == intervalo->inferior && 
		// 		superior == intervalo->superior;
	}

	public function interseccion($intervalo) {
		// assert $this->intersecta(intervalo);
		// if ($this->incluye(intervalo)){
		// 	return intervalo->clone();
		// } else if (intervalo->incluye($this)){
		// 	return $this->clone();
		// } else if ($this->incluye(intervalo->inferior)){
		// 	return new IntervaloAntiguo(intervalo->inferior, superior);
		// } else {
		// 	return new IntervaloAntiguo(inferior, intervalo->superior);
		// }
	}

	public function intersecta($intervalo) 
	{
		// assert intervalo!=null;
		// return $this->incluye(intervalo->inferior) ||
		// 		$this->incluye(intervalo->superior) || 
		// 		intervalo->incluye($this);
	}

	public function oponer() 
	{
		// $inferiorInicial = inferior;
		// $superiorInicial = superior;
		// inferior = -superiorInicial;
		// superior = -inferiorInicial;
	}

	public function doblar() 
	{
		// $longitudInicial = $this->longitud();
		// inferior -= longitudInicial / 2;
		// superior += longitudInicial / 2;
	}

	public function recoger() 
	{
		// GestorIO gestorIO = new GestorIO();
		// gestorIO->out("Inferior?");
		// inferior = gestorIO->inDouble();
		// gestorIO->out("Superior?");
		// superior = gestorIO->inDouble();
	}

	public function mostrar() 
	{
		echo "[" . $this->inferior . "," . $this->superior . "]";
	}

	public function trocear($trozos) 
	{
		// return null;
	}
}
