<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FieldIndicator2 extends Migration
{
	public function up()
	{
		$this->forge->dropTable('m_field_indicator2', true);
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
		$this->forge->createTable('m_field_indicator2');
	}

	public function down()
	{
		$this->forge->dropTable('m_field_indicator2', true);
	}
}
