<?php

namespace Bukutamu\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bukutamu extends Migration
{
	public function up()
	{
		// t_bukutamu
		$this->forge->dropTable('t_bukutamu', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'name' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'MemberNo' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'ref_Statusanggota' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'Alamat' 		=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'MasaBerlaku_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Profesi_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'JenisKelamin_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'PendidikanTerahir_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'LOCATIONLOANS_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Locations_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'TujuanKunjungan_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Information' 		=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'NoPengunjung' 		=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('t_bukutamu');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_bukutamu', true);
	}
}
