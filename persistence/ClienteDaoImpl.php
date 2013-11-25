<?php

	require("../model/Cliente.php");

	require("TransactionImpl.php");
	require("ClienteDao.php");

	class ClienteDaoImpl implements ClienteDao{
		private static $instance;

		public function getInstance () {
			if (!isset(self::$instance)) {
				self::$instance = new ClienteDaoImpl();
			}
			return self::$instance;
		}

		public function findById ($cuit) {
			$trans = new TransactionImpl();
			$trans = $trans->getInstance();
			$conn = $trans->getConnection();

			$query = "SELECT * FROM cliente WHERE cuit = $cuit";
			$queryResult = $conn->query($query);
			$listaDeClientes = array();

			while ($unCliente = $queryResult->fetch_array(MYSQLI_ASSOC)) {
				$listaDeClientes[] = $this->convertOne($unCliente);
			}

			if ($queryResult->num_rows == 1) {
				return $listaDeClientes;
			} else {
				return NULL;
			}
		}

		public function insert ($cliente) {
			$trans = new TransactionImpl();
			$trans = $trans->getInstance();
			$conn = $trans->getConnection();

			$trans->beginTransaction();
			$query = "INSERT INTO cliente (cuit, nombre, apellido, eMail, domicilio, telefono) "
				. "VALUES ($cliente->cuit, $cliente->nombre, $cliente->apellido, "
				. "$cliente->eMail, $cliente->domicilio, $cliente->telefono)";
			$queryResult = $conn->real_query($query);

			if ($queryResult === TRUE) {
				$trans->commit();
			} else {
				$trans->rollBack();
			}
		}

		public function update ($cliente) {
			$trans = new TransactionImpl();
			$trans = $trans->getInstance();
			$conn = $trans->getConnection();

			$trans->beginTransaction();
			$query = "UPDATE cliente SET nombre = $cliente->nombre, apellido = $cliente->apellido, "
				. "eMail = $cliente->eMail, domicilio = $cliente->domicilio, telefono = $cliente->telefono)"
				. "WHERE cuit = $cliente->cuit";

			$queryResult = $conn->real_query($query);

			if ($queryResult === TRUE) {
				if ($conn->affected_rows == 1) {
					$trans->commit();
				} else {
					$trans->rollBack();
				}
			} else {
				$trans->rollBack();
			}
		}

		public function findAll () {
			$trans = new TransactionImpl();
			$trans = $trans->getInstance();
			$conn = $trans->getConnection();

			$query = "SELECT * FROM cliente";
			$queryResult = $conn->query($query);
			$listaDeClientes = array();

			while ($unCliente = $queryResult->fetch_array(MYSQLI_ASSOC)) {
				$listaDeClientes[] = $this->convertOne($unCliente);
			}

			if ($queryResult->num_rows > 0) {
				return $listaDeClientes;
			} else {
				return NULL;
			}
		}

		private function convertOne ($unCliente) {
			$nuevoCliente = new Cliente (
				$unCliente["cuit"],
				$unCliente["nombre"],
				$unCliente["apellido"],
				$unCliente["eMail"],
				$unCliente["domicilio"],
				$unCliente["telefono"]
			);

			return $nuevoCliente;
		}
	}

?>