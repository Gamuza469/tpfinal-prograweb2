<?php

	class Cliente {
		private $cuit;

		private $nombre;
		private $apellido;
		private $eMail;
		private $domicilio;
		private $telefono;

		public function __construct ($cuit, $nombre, $telefono, $apellido, $domicilio, $eMail) {
			$this->cuit = $cuit;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->eMail = $eMail;
			$this->domicilio = $domicilio;
			$this->telefono = $telefono;
		}

		public function getCuit () {
			return $this->cuit;
		}
		public function setCuit($cuit) {
			$this->cuit = $cuit;
		}

		public function getNombre () {
			return $this->nombre;
		}
		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getApellido () {
			return $this->apellido;
		}
		public function setApellido ($apellido) {
			$this->apellido = $apellido;
		}

		public function getEMail () {
			return $this->eMail;
		}
		public function setEMail ($eMail) {
			$this->eMail = $eMail;
		}

		public function getDomicilio () {
			return $this->domicilio;
		}
		public function setDomicilio ($domicilio) {
			$this->domicilio = $domicilio;
		}

		public function getTelefono () {
			return $this->telefono;
		}
		public function setTelefono ($telefono) {
			$this->telefono = $telefono;
		}
	}
?>

