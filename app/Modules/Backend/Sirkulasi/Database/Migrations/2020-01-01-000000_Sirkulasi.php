<?php

namespace Sirkulasi\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sirkulasi extends Migration
{
	public function up()
	{
		// t_sirkulasi
		$this->forge->dropTable('t_sirkulasi', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'NomorTransaksi' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			't_anggota_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			't_eksemplar_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'branch_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'Location_library_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'sort' 			=> ['type' => 'MEDIUMINT','constraint' => '8','null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'Tanggal_pinjam' 		=> ['type' => 'DATETIME','null' => true,],
			'Tanggal_kembali' 		=> ['type' => 'DATETIME','null' => true,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('t_sirkulasi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_sirkulasi', true);
	}
}
