<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAnggota1 extends Migration
{
	public function up()
	{
		//
		$this->forge->addColumn('t_anggota', [
			'iskarantina' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'iskeranjang' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
		]);
	}

	public function down()
	{
		//
		$this->forge->dropColumn('t_anggota', 'iskarantina','iskeranjang');
	}
}
