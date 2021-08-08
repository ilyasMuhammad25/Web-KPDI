<?php

namespace Mastertag\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mastertag extends Migration
{
	public function up()
	{
		$this->forge->dropTable('m_fields', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'tag' 			=> ['type' => 'VARCHAR','constraint' => '3','null' => true,],
			'name' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'fixed'		 	=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'enabled' 		=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'length' 		=> ['type' => 'INT','constraint' => '11','null' => true,],
			'repeatable' 	=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'mandatory' 	=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'customable' 	=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'ref_format' 	=> ['type' => 'INT','constraint' => '11','null' => true,],
			'ref_group' 		=> ['type' => 'INT','constraint' => '11','null' => true,],
			'defaultsubtag' => ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'issubserial' 	=> ['type' => 'TINYINT','constraint' => '1','null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'created_terminal' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_terminal' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('m_fields');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('m_fields', true);
	}
}
