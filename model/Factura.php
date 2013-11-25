<?php

	require("MovimientoFactura.php");

	class Factura {
		private $numeroFactura;

		private $movimientosFactura;

		public function __construct () {
			$this->movimientosFactura = array();
		}

		public function getNumeroFactura () {
			return $this->numeroFactura;
		}
		public function setNumeroFactura ($numeroFactura) {
			$this->numeroFactura = $numeroFactura;
		}
	}

?>