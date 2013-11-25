<?php

	require("Transaction.php");
	require("ConnectionProvider.php");

	class TransactionImpl implements Transaction {
		private static $instance;
		private $conexion;

		public function __construct () {}

		public function getConnection () {
			if (!isset($this->conexion) || $this->conexion->close() === FALSE) {
				$this->conexion = ConnectionProvider::getInstance()->getConnection();
				echo(isset($this->conexion));
			}
			return $this->conexion;
		}

		public function getInstance () {
			if (!isset(self::$instance)) {
				self::$instance = new TransactionImpl();
			}
			return self::$instance;
		}

		public function beginTransaction () {
			$this->conexion->autocommit(FALSE);
		}

		public function commit () {
			$this->conexion->commit();
		}

		public function rollBack () {
			$this->conexion->rollback();
		}
	}

?>