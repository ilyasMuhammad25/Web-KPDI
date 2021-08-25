<?php
if (!function_exists('get_field_data')) {
    function get_field_data($field_id)
    {        
		$model = new \Tag\Models\FieldDataModel();
        $query = $model
            ->select('m_field_data.*')
            ->where('m_field_data.field_id', $field_id);
		$data = $query->get()->getResult();
        return $data;
    }
}

if (!function_exists('get_field_indicator1')) {
    function get_field_indicator1($field_id)
    {        
		$model = new \Tag\Models\Fieldindicator1Model();
        $query = $model
            ->select('m_field_indicator1.*')
            ->where('m_field_indicator1.field_id', $field_id);
		$data = $query->get()->getResult();
        return $data;
    }
}

if (!function_exists('get_field_indicator2')) {
    function get_field_indicator2($field_id)
    {        
		$model = new \Tag\Models\Fieldindicator2Model();
        $query = $model
            ->select('m_field_indicator2.*')
            ->where('m_field_indicator2.field_id', $field_id);
		$data = $query->get()->getResult();
        return $data;
    }
}
?>

