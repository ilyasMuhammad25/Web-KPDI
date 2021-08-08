<?php

namespace Artikel\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAddColumnArtikel extends Migration
{
	public function up()
	{
		$fields = [
			'pengarang' 	=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'tahun_terbit' 	=> ['type' => 'VARCHAR','constraint' => '4','null' => true,],
			'bahasa' 		=> ['type' => 'VARCHAR','constraint' => '20','null' => true,],
			'file_upload' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'file_uploads' 	=> ['type' => 'TEXT','null' => true,],
		];
		$this->forge->addColumn('t_artikel', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('t_artikel', ['pengarang','tahun_terbit','bahasa','file_upload','file_uploads']);
	}
}
