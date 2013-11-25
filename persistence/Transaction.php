<?php

	interface Transaction {
		public function getConnection ();
		public function beginTransaction ();
		public function commit ();
		public function rollBack ();
	}

?>