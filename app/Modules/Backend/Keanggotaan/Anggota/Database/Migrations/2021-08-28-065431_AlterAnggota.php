<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAnggota extends Migration
{
	public function up()
	{
		//
		$this->forge->addColumn('t_anggota', [
			'RegisterDate' 	=> ['type' => 'DATETIME','null' => true,],
			'EndDate' 	=> ['type' => 'DATETIME','null' => true,]
		]);
	}

	public function down()
	{
		//
		$this->forge->dropColumn('t_anggota', 'RegisterDate','EndDate');
	}
}
