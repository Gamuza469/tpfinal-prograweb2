<?php

	class MovimientoFactura {
		private $idMovimiento;
		private $codigoProducto;

		public function __construct ($codigoProducto) {
			$this->codigoProducto = $codigoProducto;
		}

		public function getIdMovimiento () {
			return $this->idMovimiento;
		}
		public function setIdMovimiento ($idMovimiento) {
			$this->idMovimiento = $idMovimiento;
		}

		public function getCodigoProducto () {
			return $this->codigoProducto;
		}
		public function setCodigoProducto ($codigoProducto) {
			$this->codigoProducto = $codigoProducto;
		}
	}

?>