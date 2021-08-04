<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArtikelSeeder extends Seeder
{
	public function run()
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");

        // Artikel
        $this->db->table('t_artikel')->truncate();

        $faker = \Faker\Factory::create();

        for($i=1; $i<= 1000; $i++){
            $artikel_data = [
                [
                    'judul' => $faker->text,
                    'pengarang' => $faker->name,
                    'tahun_terbit' => $faker->year,
                    'bahasa' => 'Indonesia',
                    'description' => $faker->text,
                ],
            ];
            $this->db->table('t_artikel')->insertBatch($artikel_data);
        }

        
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");
	}
}
