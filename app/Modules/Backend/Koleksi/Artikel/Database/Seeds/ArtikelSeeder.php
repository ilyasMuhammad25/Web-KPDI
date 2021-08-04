<?php

namespace Artikel\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArtikelSeeder extends Seeder
{
	public function run()
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");

        // Artikel
        $this->db->table('t_artikel')->truncate();
        $artikel_data = [
            [
                'judul' => 'Young in Top ',
                'pengarang' => 'Maxwell',
                'tahun_terbit' => '2020',
                'bahasa' => 'Indonesia',
                'description' => '',
            ],
            [
                'judul' => 'Young in Top 2',
                'pengarang' => 'Maxwell',
                'tahun_terbit' => '2020',
                'bahasa' => 'Inggris',
                'description' => '',
            ],
            [
                'judul' => 'Young in Top 3',
                'pengarang' => 'Maxwell',
                'tahun_terbit' => '2020',
                'bahasa' => 'Indonesia',
                'description' => '',
            ],
        ];
        $this->db->table('t_artikel')->insertBatch($artikel_data);
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");
	}
}
