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
			'name' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
<<<<<<< HEAD
			'noanggota' 	=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'nobarcode' 	=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
=======
>>>>>>> 3446e7e961706d2b5eeb011800c255a70fa3f2f0
			'sort' 			=> ['type' => 'MEDIUMINT','constraint' => '8','null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
<<<<<<< HEAD

=======
>>>>>>> 3446e7e961706d2b5eeb011800c255a70fa3f2f0
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
