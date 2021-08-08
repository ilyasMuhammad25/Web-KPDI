<?php

namespace Anggota\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnggotaSeeder extends Seeder
{
	public function run()
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");

        // Anggota
        $this->db->table('c_menus')->truncate();
        $anggota_data = [
            [
                'name' => 'ref_agama',
                'parent'=>'0',
                'icon'=>'',
                'premission'=>'access|create|read|update|delete|enable|disable',
                'category_id'=>'3',
                'sort'=>'6',
                'activate'=>'1',
                'slug'=>'agama',
                'type'=>'menu',


               
            ],
            // [
            //     'name' => 'Test 2',
            //     'description' => '',
            // ],
			// [
            //     'name' => 'Test 3',
            //     'description' => '',
            // ],
        ];
        $this->db->table('c_menus')->insertBatch($anggota_data);
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");
	}
}
