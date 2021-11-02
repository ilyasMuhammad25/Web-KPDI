<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAnggota_addPassword extends Migration
{
	public function up()
	{
		//
		$this->forge->addColumn('t_anggota', [
			'Password' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,]
		]);
	}

	public function down()
	{
		//
		$this->forge->dropColumn('t_anggota', 'Password');
	}
}
