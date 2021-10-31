<?php

namespace LokasiRuang\Database\Migrations;

use CodeIgniter\Database\Migration;

class LokasiRuang extends Migration
{
	public function up()
	{
		// t_lokasiruang
		$this->forge->dropTable('m_lokasiruang', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'name' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'file_image' 			=> ['type' => 'VARCHAR','constraint' => '250','null' => true,],
			'code' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'Lokasi_perpustakaan_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'sort' 			=> ['type' => 'MEDIUMINT','constraint' => '8','null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'isPrintBarcode' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true],
			'isGenerateVisitorNumber' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true],
			'isInformationSought' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true],
			'isVisitsDestination' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('m_lokasiruang');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('m_lokasiruang', true);
	}
}
