<?php

	class Service {
		private $codigoService;

		private $equipo;
		private $problema;
		private $diagnostico;
		private $solucion;
		private $fechaDeEntrada;

		public function __construct ($equipo, $problema, $diagnostico, $solucion, $fechaDeEntrada) {
			$this->equipo = $equipo;
			$this->problema = $problema;
			$this->diagnostico = $diagnostico;
			$this->solucion = $solucion;
			$this->fechaDeEntrada = $fechaDeEntrada;
		}

		public function getCodigoService () {
			return $this->codigoService;
		}
		public function setCodigoService ($codigoService) {
			$this->codigoService = $codigoService;
		}

		public function getEquipo () {
			return $this->equipo;
		}
		public function setEquipo ($equipo) {
			$this->equipo = $equipo;
		}

		public function getProblema () {
			return $this->problema;
		}
		public function setProblema ($problema) {
			$this->problema = $problema;
		}

		public function getDiagnostico () {
			return $this->diagnostico;
		}
		public function setDiagnostico ($diagnostico) {
			$this->diagnostico = $diagnostico;
		}

		public function getSolucion () {
			return $this->solucion;
		}
		public function setSolucion ($solucion) {
			$this->solucion = $solucion;
		}

		public function getFechaDeEntrada () {
			return $this->fechaDeEntrada;
		}
		public function setFechaDeEntrada ($fechaDeEntrada) {
			$this->fechaDeEntrada = $fechaDeEntrada;
		}
	}

?>