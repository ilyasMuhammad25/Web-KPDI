<?php

namespace Eksemplar\Database\Migrations;

use CodeIgniter\Database\Migration;

class Eksemplar extends Migration
{
	public function up()
	{
		// t_eksemplar
		$this->forge->dropTable('t_eksemplar', true);
		
		$this->forge->addField([
			'id' 			=> ['type' => 'MEDIUMINT','constraint' => '11','unsigned' => true,'auto_increment' => true,],
			'NomorBarcode' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'NoInduk' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'RFID' 			=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'ref_currency' 	=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'CallNumber' 	=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'Price' 	=> ['type' => 'DECIMAL','constraint' => 11,'null' => true,],
			'PriceType' 	=> ['type' => 'VARCHAR','constraint' => '45','null' => true,],
			'TanggalPengadaan' 	=> ['type' => 'DATETIME','null' => true,],
			'katalog_id' 	=> ['type' => 'INT','constraint'=> 11,'null' => true,],
			'ref_Branch' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'ref_partner' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Location_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'ref_rules' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'ref_category' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'ref_media' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'ref_source' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'ref_status' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'Location_library_id' 	=> ['type' => 'INT','constraint' =>11,'null' => true,],
			'Keterangan_Sumber' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'slug' 			=> ['type' => 'VARCHAR','constraint' => '150','null' => true,],
			'sort' 			=> ['type' => 'MEDIUMINT','constraint' => '8','null' => true,],
			'description' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'active' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'IsQUARANINE' 		=> ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'QUARANTINEBY' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'QUARANTINEDATE' 	=> ['type' => 'DATETIME','null' => true,],
			'ISREFERENSI'   => ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'ISOPAC'   => ['type' => 'TINYINT','constraint' => '1','unsigned' => true,'default' => 1,],
			'EDISISERIAL' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'NoJIlid' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Bahan_Sertaan' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,],
			'created_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'updated_by' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Tanggal_terbit_Edisi_Serial' 	=> ['type' => 'DATE','null' => true,],
			'Keterangan_lain' 	=> ['type' => 'VARCHAR','constraint' => '255','null' => true,], 
			'Tanggal_Entry_Jilid' 	=> ['type' => 'DATETIME','null' => true,],
			'BookingMemberID' 	=> ['type' => 'VARCHAR','constraint' => '50','null' => true,],
			'BookingExpiredDate' 	=> ['type' => 'DATETIME','null' => true,],
			'ThnTerbitDeposit' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Deposit_ws_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'Deposit_kode_wilayah_id' 	=> ['type' => 'INT','constraint' => 11,'null' => true,],
			'NomorDeposit' 	=> ['type' => 'VARCHAR','constraint' => '25','null' => true,], 
			'Nomor_Regis' 	=> ['type' => 'VARCHAR','constraint' => '11','null' => true,], 
			'created_at' 	=> ['type' => 'DATETIME','null' => true,],
			'updated_at' 	=> ['type' => 'DATETIME','null' => true,],
			'deleted_at' 	=> ['type' => 'DATETIME','null' => true,],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('t_eksemplar');
	}
	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_eksemplar', true);
	}
}
