<?php

	class Producto {
		private $codigoProducto;

		private $descripcion;
		private $categoria;
		private $costo;
		private $precioDeVenta;

		public function __construct ($descripcion, $precioDeVenta, $categoria, $costo) {
			$this->descripcion = $descripcion;
			$this->categoria = $categoria;
			$this->costo = $costo;
			$this->precioDeVenta = $precioDeVenta;
		}

		public function getCodigoProducto () {
			return $this->codigoProducto;
		}
		public function setCodigoProducto ($codigoProducto) {
			$this->codigoProducto = $codigoProducto;
		}

		public function getDescripcion () {
			return $this->descripcion;
		}
		public function setDescripcion ($descripcion) {
			$this->descripcion = $descripcion;
		}

		public function getCategoria () {
			return $this->categoria;
		}
		public function setCategoria ($categoria) {
			$this->categoria = $categoria;
		}

		public function getCosto () {
			return $this->costo;
		}
		public function setCosto ($costo) {
			$this->costo = $costo;
		}

		public function getPrecioDeVenta () {
			return $this->precioDeVenta;
		}
		public function setPrecioDeVenta ($precioDeVenta) {
			$this->precioDeVenta = $precioDeVenta;
		}
	}

?>