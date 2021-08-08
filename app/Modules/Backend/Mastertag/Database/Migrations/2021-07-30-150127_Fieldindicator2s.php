<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fieldindicator2s extends Migration
{
	public function up()
	{
		$this->forge->dropTable('m_fieldindicator2s', true);
		$this->forge->addField([
			'field_id' 	=> ['type' => 'INT','constraint' => '11','null' => true,],
			'code' 			=> ['type' => 'VARCHAR','constraint' => '10','null' => true,],
			'name' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'created_terminal' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','constraint' => true,],
			'updated_terminal' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->createTable('m_fieldindicator2s');
	}

	public function down()
	{
		$this->forge->dropTable('m_fieldindicator2s', true);
	}
}
