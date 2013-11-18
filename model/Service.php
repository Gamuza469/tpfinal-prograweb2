<?php

	class Service {
		private $codigoService;
		private $cuit;

		private $equipo;
		private $problema;
		private $diagnostico;
		private $solucion;

		public function __construct ($cuit, $equipo, $problema, $diagnostico, $solucion) {
			$this->cuit = $cuit;
			$this->equipo = $equipo;
			$this->problema = $problema;
			$this->diagnostico = $diagnostico;
			$this->solucion = $solucion;
		}

		public function getCodigoService () {
			return $this->codigoService;
		}
		public function setCodigoService ($codigoService) {
			$this->codigoService = $codigoService;
		}

		public function getCuit () {
			return $this->cuit;
		}
		public function setCuit ($cuit) {
			$this->cuit = $cuit;
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
	}

?>