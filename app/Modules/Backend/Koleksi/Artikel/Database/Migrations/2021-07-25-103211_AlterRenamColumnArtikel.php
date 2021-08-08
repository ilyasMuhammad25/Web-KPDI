<?php

namespace Artikel\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterRenamColumnArtikel extends Migration
{
	public function up()
	{
		// $fields = [
		// 	'name' 	=> ['name' => 'judul', 'type' => 'VARCHAR','constraint' => '255','null' => true,],
		// ];
		// $this->forge->modifyColumn('t_artikel', $fields);
	}

	public function down()
	{
		// $fields = [
		// 	'judul' 	=> ['name' => 'name', 'type' => 'VARCHAR','constraint' => '150','null' => true,],
		// ];
		// $this->forge->modifyColumn('t_artikel', $fields);
	}
}
