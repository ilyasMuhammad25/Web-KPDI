<?php

namespace Anggota\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggaran extends Migration
{
	public function up()
	{
		//
		$this->forge->dropTable('t_pelanggaran', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'CollectionLoan_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'CollectionLoanItem_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'JenisPelanggaran_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'JenisPelanggaran_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'JenisDenda_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'JumlahDenda' 			=>  ['type' => 'decimal','constraint' => '10,0','null' => true,],
			'CollectionLoanItem_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Collection_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Member_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'JumlahSuspend' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('t_pelanggaran');
	}

	public function down()
	{
		//
		$this->forge->dropTable('t_pelanggaran', true);
	}
}
