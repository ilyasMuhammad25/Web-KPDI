<?php

namespace Anggota\Models;
use CodeIgniter\HTTP\RequestInterface;

class AnggotaModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_anggota';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    // protected $protectFields = false;
    protected $allowedFields = [
        'id', 'slug', 'name','MemberNo','IdentityNo','PlaceOfBirth','DateOfBirth','Address','AddressNow','Phone','InstitutionName','InstitutionAddress','InstitutionPhone','MotherName','Email','LoanReturnLateCount','', 'NoHp','Provincy','City','ProvincyNow','CityNow','Kecamatan','KecamatanNow','Kelurahan','KelurahanNow','RT','RTNow','RW','RWNow','Tahunajaran','KeteranganLain','IsLunasBiayaPendaftaran','BiayaPendaftaran','TanggalBebasPustaka', 'RegisterDate','EndDate' ,'description', 'sort',  'active', 'created_by', 'updated_by'
    ];
    protected $column_order = ['file_image', 'nama', 'MemberNo','Email'];
	protected $column_search = ['name','Email'];
	protected $order = ['id' => 'desc'];
    protected $request;
	protected $db;
	protected $dt;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;

    function __construct(RequestInterface $request){
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);
     }
 
     private function _get_datatables_query(){
         $i = 0;
         foreach ($this->column_search as $item){
             if($this->request->getPost('search')['value']){ 
                 if($i===0){
                     $this->dt->groupStart();
                     $this->dt->like($item, $this->request->getPost('search')['value']);
                 }
                 else{
                     $this->dt->orLike($item, $this->request->getPost('search')['value']);
                 }
                 if(count($this->column_search) - 1 == $i)
                     $this->dt->groupEnd();
             }
             $i++;
         }
          
         if($this->request->getPost('order')){
                 $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
             } 
         else if(isset($this->order)){
             $order = $this->order;
             $this->dt->orderBy(key($order), $order[key($order)]);
         }
     }
 
     function get_datatables(){
         $this->_get_datatables_query();
         if($this->request->getPost('length') != -1)
         $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
         $query = $this->dt->get();
         return $query->getResult();
     }
 
     function count_filtered(){
         $this->_get_datatables_query();
         return $this->dt->countAllResults();
     }
 
     public function count_all(){
         $tbl_storage = $this->db->table($this->table);
         return $tbl_storage->countAllResults();
     }

    
}
// $q=$this->db->query("SELECT MAX(RIGHT(MemberNo,4)) AS MemberNo FROM t_anggota WHERE DATE(created_at)=CURDATE()");
    //     $Nomember="";
    //     if($q->CountAll()>0){
    //         foreach($q->result() as $k){
    //             $tmp=((int) $k->MemberNo) + 1;
    //             $Nomember=sprintf("%04s", $tmp);
    //         }
    //     } else{
    //         $Nomember="0001";
    //     }
    //     date_default_timezone_set('Asia/jakarta');
    //     return date('dmy').$Nomember;

    // }