<?php
if (!function_exists('get_worksheet_summary')) {
	function get_worksheet_summary()
	{
		$katalogModel = new \Katalog\Models\KatalogModel();
		$query = $katalogModel
			->select('t_worksheets.id, t_worksheets.name, count(*) as total')
			->join('t_worksheets','t_worksheets.id = t_katalog.Worksheet_id','inner')
    		->groupBy('t_katalog.Worksheet_id')
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

if (!function_exists('get_control_number')) {
    function get_control_number($id = null)
    {
        if (!empty($id)) {
            $row = db_get_data([
                'table'     => 't_katalog_ruas',
                'select'    => "Value` AS max",
                'where'     => [
                    ['field' => 'Catalogid', 'value' => $id],
                    ['field' => 'Tag', 'value' => '001'],
                ]
            ])->getRowArray()['max'];

            $newControlNumber =  substr($row, 3);
        } else {
            $row = db_get_data([
                'table'     => 't_katalog',
                'select'    => 'MAX(REPLACE(ControlNumber,"INLIS", "")) AS max',
                'like'      => ['ControlNumber' => 'INLIS0']
            ])->getRowArray()['max'];


            if ($row >= 0) {
                $controlNumber = (int)preg_replace('/[^0-9]/', '', $row);
            }
            $newControlNumber =  'INLIS' . str_pad((int)$controlNumber + 1, 15, '0', STR_PAD_LEFT);
        }

        return $newControlNumber;
    }
}

if (!function_exists('get_ruas')) {
    function get_ruas($key, $value, $katalog_id = null)
    {
		$column = array();
		switch ($key) {
			case 'ControlNumber':
				$column = [
					'tag'           => '001',
					'indicator1'    => null,
					'indicator2'    => null,
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case 'BIBID':
				$column = [
					'tag'           => '035',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case '005':
				$column = [
					'tag'           => $key,
					'indicator1'    => null,
					'indicator2'    => null,
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "$value"
				];
				break;
			case 'issn':
				foreach ($value as $issn) :
					$column = [
						'tag'           => '022',
						'indicator1'    => '0',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $issn"
					];

				endforeach;
				break;
			case 'class-ddc':
				$column = [
					'tag'           => '082',
					'indicator1'    => null,
					'indicator2'    => null,
					'katalog_id' 	=> $katalog_id,
					'value'        	=> "\$a $value"
				];
				break;
			case 'callnumber':
				foreach ($value as $callno) :
					$column = [
						'tag'           => '084',
						'indicator1'    => '0',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $callno"
					];

				endforeach;
				break;
			case 'author':
				$column = [
					'tag'           => '100',
					'indicator1'    => '0',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> '$a ' . $value['100']
				];
				break;
			case 'additional-author':
				foreach ($value['input'] as $additionalAuthor) :
					$column = [
						'tag'           => '700',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $additionalAuthor"
					];

				endforeach;
				break;
			case 'title':
				$currentValue = '';
				foreach ($value as $i => $title) :
					$currentValue .= "\$$i $title ";
				endforeach;
				$column = [
					'tag'           => '245',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> $currentValue
				];
				break;
			case 'previous-title':
				foreach ($value as $prev) :
					$column = [
						'tag'           => '247',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $prev"
					];

				endforeach;
				break;
			case 'publisher':
				$currentValue = '';
				foreach ($value as $i => $pub) :
					$currentValue .= "\$$i $pub ";
				endforeach;
				$column = [
					'tag'           => '260',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> rtrim($currentValue)
				];
				break;
			case 'physical-description':
				$currentValue = '';
				foreach ($value as $i => $phy) :
					$currentValue .= "\$$i $phy ";
				endforeach;
				$column = [
					'tag'           => '300',
					'indicator1'    => '#',
					'indicator2'    => '#',
					'katalog_id' 	=> $katalog_id,
					'value'        	=> rtrim($currentValue)
				];
				break;
	
			case 'frequency':
				foreach ($value as $i => $freq) :
					$column = [
						'tag'           => $i == 'current' ? '310' : '321',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $freq"
					];

				endforeach;
				break;
	
			case 'notes':
				foreach ($value['input'] as $i => $note) :
					$column = [
						'tag'           => '520',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $note"
					];

				endforeach;
				break;
	
			case 'subject':
				foreach ($value['desc'] as $i => $subject) :
					$column = [
						'tag'           => '600',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $subject"
					];

				endforeach;
				break;
	
			case 'location':
				foreach ($value as $i => $location) :
					$column = [
						'tag'           => '856',
						'indicator1'    => '#',
						'indicator2'    => '#',
						'katalog_id' 	=> $katalog_id,
						'value'        	=> "\$a $location"
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

if (!function_exists('get_bib_id')) {
    function get_bib_id($id = null)
    {
        if (!empty($id)) {
            $row = db_get_data([
                'table'     => 't_katalog_ruas',
                'select' => 'value AS max',
                'where'  => [
                    ['field' => 'katalog_id', 'value' => $id],
                    ['field' => 'tag', 'value' => '035'],
                ]
            ])->getRowArray()['max'];

            $newId =  substr($row, 3);
        } else {
            $yearMonth =  date('my');
            $row = db_get_data([
                'table'     => 't_katalog',
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
