<?php

	interface ClienteDao {
		public function findById ($cuit);
		public function insert ($cliente);
		public function update ($cliente);
		public function findAll ();
	}

?>