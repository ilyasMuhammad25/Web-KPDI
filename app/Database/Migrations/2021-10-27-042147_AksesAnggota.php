<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AksesAnggota extends Migration
{
	public function up()
	{
		$this->forge->dropTable('t_AksesLokasiAnggota', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			't_anggota_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Location_loan_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'LocationRuang_loan_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('t_AksesLokasiAnggota');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_AksesLokasiAnggota', true);
	}

	}

	

