<?php

namespace Katalog\Database\Migrations;

use CodeIgniter\Database\Migration;

class Katalog extends Migration
{
	public function up()
	{
		// t_katalog
		$this->forge->dropTable('t_katalog', true);
		$this->forge->addField([
			'ID' 					=> ['type' => 'DOUBLE', 'constraint' => '0', 'unsigned' => true, 'auto_increment' => true,],
			'ControlNumber'			=> ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true,],
			'BIBID'					=> ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true,],
			'Title' 				=> ['type' => 'TEXT', 'null' => FALSE,],
			'Author' 				=> ['type' => 'TEXT', 'null' => FALSE,],
			'Edition'				=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'Publisher' 			=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'PublishLocation' 		=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'PublishYear' 			=> ['type' => 'VARCHAR', 'constraint' => '4', 'null' => true,],
			'Publikasi' 			=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'Subject' 				=> ['type' => 'TEXT', 'null' => FALSE,],
			'PhysicalDescription' 	=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'ISBN' 					=> ['type' => 'TEXT', 'null' => FALSE,],
			'CallNumber' 			=> ['type' => 'TEXT', 'null' => FALSE,],
			'Languages' 			=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'DeweyNo' 				=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true,],
			'ApproveDateOP' 		=> ['type' => 'DATETIME', 'null' => true,],
			'IsOPAC'				=> ['type' => 'TINYINT', 'constraint' => '4', 'null' => true],
			'IsBNI'					=> ['type' => 'TINYINT', 'constraint' => '1', 'null' => true],
			'IsOKIN'				=> ['type' => 'TINYINT', 'constraint' => '1', 'null' => true],
			'IsRDA'					=> ['type' => 'TINYINT', 'constraint' => '1', 'null' => true],
			'CoverURL' 				=> ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
			'Worksheet_id' 			=> ['type' => 'INT', 'constraint' => 11],
			'IsQUARENTINE'			=> ['type' => 'TINYINT', 'constraint' => '1', 'null' => true],
			'MARC_LOC' 				=> ['type' => 'TEXT', 'null' => FALSE,],
			'QUARENTINEDDATE' 		=> ['type' => 'DATETIME', 'null' => true,],
			'QUARENTINEDBY' 		=> ['type' => 'INT', 'constraint' => 11, 'null' => true,],
			'QUARENTINEDUPDATE' 	=> ['type' => 'DATETIME', 'null' => true,],
			'PRESERVASI_ID' 		=> ['type' => 'INT', 'constraint' => 11],
			'created_by' 			=> ['type' => 'INT', 'constraint' => 11, 'null' => true,],
			'updated_by' 			=> ['type' => 'INT', 'constraint' => 11, 'null' => true,],
			'deleted_by' 			=> ['type' => 'INT', 'constraint' => 11, 'null' => true,],
			'created_at' 			=> ['type' => 'DATETIME', 'null' => true,],
			'updated_at' 			=> ['type' => 'DATETIME', 'null' => true,],
			'deleted_at' 			=> ['type' => 'DATETIME', 'null' => true,],
		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('t_katalog');
		$this->katalogRuas_Migration();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_katalog', true);
		$this->forge->dropTable('t_katalog_ruas', true);
	}

	public function katalogRuas_Migration()
	{
		$this->forge->dropTable('t_katalog_ruas', true);
		$this->forge->addField([
			'ID' 			=> ['type' => 'DOUBLE', 'constraint' => '0', 'unsigned' => true, 'auto_increment' => true],
			'Tag'			=> ['type' => 'VARCHAR', 'constraint' => '3', 'null' => true],
			'Indicator1'	=> ['type' => 'CHAR', 'constraint' => '1', 'null' => true],
			'Indicator1'	=> ['type' => 'CHAR', 'constraint' => '1', 'null' => true],
			'Catalog_id'	=> ['type' => 'DOUBLE', 'constraint' => '0', 'null' => true],
			'Value'			=> ['type' => 'TEXT', 'null' => FALSE],
		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('t_katalog_ruas');
	}
}
