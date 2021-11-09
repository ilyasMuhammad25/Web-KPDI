<?php
if (!function_exists('get_catalog_value')) {
	function get_catalog_value($catalog_id, $tag, $start = '$a', $end = false)
	{
		$data = '';
		$katalogRuasModel = new \Katalog\Models\KatalogRuasModel();
		$query = $katalogRuasModel
			->where('t_catalog_ruas.catalog_id', $catalog_id)
			->where('t_catalog_ruas.tag', $tag);

		$row = $query->get()->getRow();
		if(!empty($row)){
			if($end){
				$data = get_string_between(trim($row->value), $start, $end);
			} else {
				$data = get_string_after(trim($row->value), $start);
			}
		}
		return trim($data);
	}
}

if (!function_exists('get_catalog_ruas')) {
	function get_catalog_ruas($catalog_id, $tag)
	{
		$data = '';
		$katalogRuasModel = new \Katalog\Models\KatalogRuasModel();
		$query = $katalogRuasModel
			->where('t_catalog_ruas.catalog_id', $catalog_id)
			->where('t_catalog_ruas.tag', $tag);

		$row = $query->get()->getRow();
		return $row;
	}
}

if (!function_exists('get_ruas')) {
    function get_ruas($key, $value, $catalog_id = null)
    {
		$column = array();
		switch ($key) {
			case 'control_no':
				$column = [
					'tag'           => '001',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $catalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case 'bibid':
				$column = [
					'tag'           => '035',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case '005':
				$column = [
					'tag'           => $key,
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $catalog_id,
					'value'        	=> "$value"
				];
				break;
			case 'isbn':
				foreach ($value as $row) :
					$column = [
						'tag'           => '022',
						'indicator1'    => '0',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			case 'class_ddc':
				$column = [
					'tag'           => '082',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $catalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case 'call_no':
				foreach ($value as $row) :
					$column = [
						'tag'           => '084',
						'indicator1'    => '0',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			case 'author':
				$column = [
					'tag'           => '100',
					'indicator1'    => '0',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> '$a ' . $value['100']
				];
				break;
			case 'author_additional':
				foreach ($value['input'] as $row) :
					$column = [
						'tag'           => '700',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			case 'title': 
				$current_value = '';
				foreach ($value as $i => $row) :
					$current_value .= "\$$i $row ";
				endforeach;
				$column = [
					'tag'           => '245',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> $current_value
				];
				break;
			case 'title_varian':
				$current_value = '';
				foreach ($value as $i => $row) :
					$current_value .= "\$$i $row ";
				endforeach;
				$column = [
					'tag'           => '246',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> $current_value
				];
				break;
			case 'title_original':
				$current_value = '';
				foreach ($value as $i => $row) :
					$current_value .= "\$$i $row ";
				endforeach;
				$column = [
					'tag'           => '740',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> $current_value
				];
				break;
			case 'title_general':
				$column = [
					'tag'           => '830',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> '$a ' . $value
				];
				break;
			case 'title_previous':
				foreach ($value as $prev) :
					$column = [
						'tag'           => '247',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $prev"
					];

				endforeach;
				break;
			case 'publisher':
				$current_value = '';
				foreach ($value as $i => $row) :
					$current_value .= "\$$i $row ";
				endforeach;
				$column = [
					'tag'           => '260',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> rtrim($current_value)
				];
				break;
			case 'description_physical':
				$current_value = '';
				foreach ($value as $i => $row) :
					$current_value .= "\$$i $row ";
				endforeach;
				$column = [
					'tag'           => '300',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'catalog_id' 	=> $catalog_id,
					'value'        	=> rtrim($current_value)
				];
				break;
			case 'frequency':
				foreach ($value as $i => $row) :
					$column = [
						'tag'           => $i == 'current' ? '310' : '321',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			case 'notes':
				foreach ($value['input'] as $i => $row) :
					$column = [
						'tag'           => '520',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			case 'subject':
				foreach ($value['desc'] as $i => $row) :
					$column = [
						'tag'           => '600',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			case 'location':
				foreach ($value as $i => $row) :
					$column = [
						'tag'           => '856',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'catalog_id' 	=> $catalog_id,
						'value'        	=> "\$a $row"
					];

				endforeach;
				break;
			default:
				'do nothing';
				break;
		}

		return $column;
    }
}

if (!function_exists('get_control_number')) {
    function get_control_number($id = null)
    {
        if (!empty($id)) {
            $row = db_get_data([
                'table'     => 't_catalog_ruas',
                'select'    => "Value` AS max",
                'where'     => [
                    ['field' => 'Catalogid', 'value' => $id],
                    ['field' => 'Tag', 'value' => '001'],
                ]
            ])->getRowArray()['max'];

            $newControlNumber =  substr($row, 3);
        } else {
            $row = db_get_data([
                'table'     => 't_catalog',
                'select'    => 'MAX(REPLACE(control_no,"INLIS", "")) AS max',
                'like'      => ['control_no' => 'INLIS0']
            ])->getRowArray()['max'];


            if ($row >= 0) {
                $controlNumber = (int)preg_replace('/[^0-9]/', '', $row);
            }
            $newControlNumber =  'INLIS' . str_pad((int)$controlNumber + 1, 15, '0', STR_PAD_LEFT);
        }

        return $newControlNumber;
    }
}

if (!function_exists('get_bib_id')) {
    function get_bib_id($id = null)
    {
        if (!empty($id)) {
            $row = db_get_data([
                'table'     => 't_catalog_ruas',
                'select' => 'value AS max',
                'where'  => [
                    ['field' => 'catalog_id', 'value' => $id],
                    ['field' => 'tag', 'value' => '035'],
                ]
            ])->getRowArray()['max'];

            $newId =  substr($row, 3);
        } else {
            $yearMonth =  date('my');
            $row = db_get_data([
                'table'     => 't_catalog',
                'select'    => "SUBSTR(MAX(BIBID),'0010-$yearMonth') AS max",
                'like'      => ['BIBID' => "0010-$yearMonth"],
                'where'     =>
                [
                    ['field' => 'LENGTH(BIBID)', 'value' => '15'],
                ]
            ])->getRowArray()['max'];

            $maxId =  (int)$row + 1;
            $newId =  '0010-' . $yearMonth . str_pad($maxId, 6, '0', STR_PAD_LEFT);
        }
        return $newId;
    }
}

if (!function_exists('get_imploded_array')) {
    function get_imploded_array($post, $param)
    {
        $fixdata = (is_array($post) ?  implode($param, $post) : $post);

        return $fixdata;
    }
}

if (!function_exists('get_imploded_penerbit')) {
    function get_imploded_penerbit($post, $var = null)
    {
        $arrPenerbit = '';
        foreach ($post as $key => $value) {
            $arrPenerbit .=  (!empty($var) ?  $value[$var] . ';' : implode(" ", $value) . ';');
        }

        return $arrPenerbit;
    }
}

if (!function_exists('get_eksemplars')) {
	function get_eksemplars($catalog_id)
	{
		$eksemplarModel = new \Eksemplar\Models\EksemplarModel();
		$query = $eksemplarModel
			->where('t_eksemplar.catalog_id', $catalog_id);

		return $query->get()->getResult();
	}
}

if (!function_exists('get_worksheet_summary')) {
	function get_worksheet_summary()
	{
		$katalogModel = new \Katalog\Models\KatalogModel();
		$query = $katalogModel
			->select('t_worksheets.id, t_worksheets.name, count(*) as total')
			->join('t_worksheets','t_worksheets.id = t_catalog.worksheet_id','inner')
    		->groupBy('t_catalog.worksheet_id')
			->where('t_worksheets.active', 1);

		return $query->get()->getResult();
	}
}

if (!function_exists('get_worksheet_label')) {
	function get_worksheet_label($worksheet_id)
	{
		$alias_name = '';
		switch ($worksheet_id) {
			case 1:
				$alias_name = 'Monograf';
				break;
			case 2: 
				$alias_name = 'Sumber Elektronik';
				break;
			case 3:
				$alias_name = 'Film';
				break;
			case 4:
				$alias_name = 'Terbitan Berkala';
				break;
			case 5:
				$alias_name = 'Bahan Kartografis';
				break;
			case 6: 
				$alias_name = 'Bahan Grafis';
				break;
			case 7:
				$alias_name = 'Rekaman Video';
				break;
			case 8:
				$alias_name = 'Musik';
				break;
			case 9:
				$alias_name = 'Bahan Campuran';
				break;
			case 10: 
				$alias_name = 'Rekaman Suara';
				break;
			case 11:
				$alias_name = 'Bentuk Mikro';
				break;
			case 12:
				$alias_name = 'Manuskrip';
				break;
			case 15:
				$alias_name = 'Bahan Ephemeral ';
				break;
			default:
				$alias_name = 'Monograf';
		}
		return $alias_name;
	}
}

if (!function_exists('get_worksheet_label2')) {
	function get_worksheet_label2($worksheet_name)
	{
		$alias_name = '';
		switch (strtoupper($worksheet_name)) {
			case 'MANUSKRIP':
				$alias_name = 'OPAC_NASKAH_KUNO_LABEL';
				break;
			case 'MONOGRAF': // di nomor panggil 
				$alias_name = 'OPAC_BUKU_LANGKA_LABEL';
				break;
			case 'BAHAN KARTOGRAFIS':
				$alias_name = 'OPAC_PETA_LABEL';
				break;
			case 'BAHAN CAMPURAN':
				$alias_name = 'OPAC_FOTO_GAMBAR_LUKISAN_LABEL';
				break;
			case 'TERBITAN BERKALA':
				$alias_name = 'OPAC_MAJALAH_SURAT_KABAR_LANGKA_LABEL';
				break;
			case 'SUMBER ELEKTRONIK':
				$alias_name = 'OPAC_SUMBER_LAINNYA_LABEL';
				break;
			case 'REKAMAN SUARA':
				$alias_name = 'OPAC_SUMBER_LAINNYA_LABEL';
				break;
			case 'BENTUK MIKRO':
				$alias_name = 'OPAC_MIKRO_FILM_LABEL';
				break;
			default:
				$alias_name = 'OPAC_SEMUA_KOLEKSI_LABEL';
		}
		return $alias_name;
	}
}

if (!function_exists('get_search_by_label')) {
	function get_search_by_label($search_id)
	{
		$alias_name = '';
		switch ($search_id) {
			case 'FORM_JUDUL':
				$alias_name = 'FORM_JUDUL_LABEL';
				break;
			case 'FORM_PENGARANG':
				$alias_name = 'FORM_PENGARANG_LABEL';
				break;
			case 'FORM_TAHUN':
				$alias_name = 'FORM_TAHUN_LABEL';
				break;
			case 'FORM_SUBJEK':
				$alias_name = 'FORM_SUBJEK_LABEL';
				break;
			case 'FORM_CATALOGID':
				$alias_name = 'FORM_CATALOGID_LABEL';
				break;
			case 'FORM_BIBID':
				$alias_name = 'FORM_BIBID_LABEL';
				break;
			default:
				$alias_name = 'FORM_JUDUL_LABEL';
		}
		return $alias_name;
	}
}

if (!function_exists('get_search_by_label2')) {
	function get_search_by_label2($search_id)
	{
		$alias_name = '';
		switch ($search_id) {
			case 'JUDUL':
				$alias_name = 'JUDUL_LABEL';
				break;
			case 'PENGARANG':
				$alias_name = 'PENGARANG_LABEL';
				break;
			case 'TAHUN':
				$alias_name = 'TAHUN_LABEL';
				break;
			case 'SUBJEK':
				$alias_name = 'SUBJEK_LABEL';
				break;
			case 'CATALOGID':
				$alias_name = 'CATALOGID_LABEL';
				break;
			case 'BIBID':
				$alias_name = 'BIBID_LABEL';
				break;
			default:
				$alias_name = '';
		}
		return $alias_name;
	}
}