<?php

namespace Members\Database\Migrations;

use CodeIgniter\Database\Migration;

class Members extends Migration
{
	public function up()
	{
		// t_members
		$this->forge->dropTable('t_members', true);
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'name' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'MemberNo' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'IdentityNo' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'PlaceOfBirth' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'DateOfBirth' 	=> ['type' => 'DATETIME','null' => true,],
			'Address' 		=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'AddressNow' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'Phone' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'InstitutionName' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'InstitutionAddress' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'InstitutionPhone' 			=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'MotherName' 			=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'Email' 			=> ['type' => 'VARCHAR','constraint' => '100','null' => true,],
			'LoanReturnLateCount' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'PhotoUrl' 		=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'NoHp' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'Provincy' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'City' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'ProvincyNow' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'CityNow' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'Kecamatan' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'KecamatanNow' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'Kelurahan' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'KelurahanNow' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'RT' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'RTNow' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'RW' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'RWNow' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'TahunAjaran' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'KeteranganLain' 		=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'IsLunasBiayaPendaftaran' 		=> ['type' => 'bit','constraint' => '1','null' => true,],
			'BiayaPendaftaran' 		=> ['type' => 'decimal','constraint' => '10,0','null' => true,],
			'TanggalBebasPustaka' 		=> ['type' => 'DATETIME','null' => true,],
			'sort' 			=> ['type' => 'MEDIUMINT','constraint' => '8','null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'category_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('t_members');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_members', true);
	}
}
