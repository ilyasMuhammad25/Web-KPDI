<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PatchSeeder extends Seeder
{
	public function run()
	{
		// c_references
		$references = [];
		$builder = $this->db->table('c_references');
		$query = $builder->get();
		foreach ($query->getResult() as $row) {
			$slug = url_title($row->name, '-', TRUE);
			$references[] = [
				'id' => $row->id,
				'slug' => $slug,
			];
		}
		$this->db->table('c_references')->updateBatch($references, 'id');

		// c_menus
		$references = [];
		$builder = $this->db->table('c_menus');
		$query = $builder->get();
		foreach ($query->getResult() as $row) {
			$slug = url_title($row->name, '-', TRUE);
			$references[] = [
				'id' => $row->id,
				'slug' => $slug,
			];
		}
		$this->db->table('c_menus')->updateBatch($references, 'id');

		//c_users
		// $builder = $this->db->table('c_users');
		// $query = $builder->get();
		// $user = [
		// 	'password' => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa',
		// ];
		
		// $builder->where('username', 'admin');
		// $builder->update($user);
	}
}
