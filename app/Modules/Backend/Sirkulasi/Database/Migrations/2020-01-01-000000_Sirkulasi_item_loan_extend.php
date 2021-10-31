<?php

namespace Sirkulasi\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sirkulasi extends Migration
{
	public function up()
	{
		// t_sirkulasi
		$this->forge->dropTable('t_Eksemplar_extend', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			't_EksemplarLoan_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			't_EksemplarLoan_item_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			't_eksemplar_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			't_anggota_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'Due_Date_Extend' 	=> ['type' => 'DATETIME','null' => true,],
			'Due_Date' 		=> ['type' => 'DATETIME','null' => true,],
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