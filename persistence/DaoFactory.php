<?php

	require("ClienteDaoImpl.php");

	class DaoFactory {
		public function getClienteDao () {
			$clienteDaoInstance = new ClienteDaoImpl();
			return $clienteDaoInstance->getInstance();
		}

		public function getProductoDao () {
			return NULL;
		}

		public function getFacturaDao () {
			return NULL;
		}

		public function getServiceDao () {
			return NULL;
		}
	}

?>