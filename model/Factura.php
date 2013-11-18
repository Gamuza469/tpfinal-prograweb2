<?php

	require("MovimientoFactura.php");

	class Factura {
		private $numeroFactura;
		private $cuit;

		private $movimientosFactura;

		public function __construct ($cuit) {
			$this->cuit = $cuit;
			$this->movimientosFactura = new MovimientoFactura();
		}

		public function getNumeroFactura () {
			return $this->numeroFactura;
		}
		public function setNumeroFactura ($numeroFactura) {
			$this->numeroFactura = $numeroFactura;
		}

		public function getCuit () {
			return $this->cuit;
		}
		public function setCuit ($cuit) {
			$this->cuit = $cuit;
		}
	}

?>