<?php

namespace Tag\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mfielddatas extends Migration
{
	public function up()
	{
		$this->forge->dropTable('m_field_data', true);
		$this->forge->addField([
			'field_id' 	=> ['type' => 'INT','constraint' => '11','null' => true,],
			'code' 			=> ['type' => 'VARCHAR','constraint' => '10','null' => true,],
			'name' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'delimiter' 	=> ['type' => 'VARCHAR','constraint' => '5','null' => true,],
			'sortno' 		=> ['type' => 'INT','constraint' => '11','null' => true,],
			'repeatable' 	=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'isshow' 		=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'created_terminal' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','constraint' => true,],
			'updated_terminal' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->createTable('m_field_data');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('m_field_data', true);
	}
}
