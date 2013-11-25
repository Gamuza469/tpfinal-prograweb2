<?php

	class ConnectionProvider {
		const SERVIDOR = "localhost";
		const NOMBRE_DE_USUARIO = "root";
		const PASSWORD = NULL;
		const BASE_DE_DATOS = "tpfinal-prograweb2";

		private static $instance;
		private $conexion;

		public function __construct () {
			$this->conexion = mysqli_connect(self::SERVIDOR, self::NOMBRE_DE_USUARIO, self::PASSWORD, self::BASE_DE_DATOS);
		}

		public static function getInstance () {
			if (!isset(self::$instance)) {
				self::$instance = new ConnectionProvider();
			}
			return self::$instance;
		}

		public function getConnection () {
			$this->closeConnection();
			$this->conexion = mysqli_connect(self::SERVIDOR, self::NOMBRE_DE_USUARIO, self::PASSWORD, self::BASE_DE_DATOS);
			$this->conexion->autocommit(FALSE);

			return $this->conexion;
		}

		public function closeConnection () {
			if (!isset($this->conexion)) {
				$this->conexion->close();
			}
		}

		public function rollBack () {
			$this->conexion->rollback();
		}
	}

?>