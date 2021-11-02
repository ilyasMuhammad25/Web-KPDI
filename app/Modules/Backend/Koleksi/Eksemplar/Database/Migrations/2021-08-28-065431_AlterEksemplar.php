<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterEksemplar extends Migration
{
	public function up()
	{
		//
		$this->forge->addColumn('t_eksemplar', [
		'iskeranjang' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
		]);
	}

	public function down()
	{
		//
		$this->forge->dropColumn('t_eksemplar', 'iskeranjang');
	}
}
