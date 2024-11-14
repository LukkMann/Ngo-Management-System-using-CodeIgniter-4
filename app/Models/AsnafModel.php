<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class AsnafModel extends Model{

    protected $table = 'asnaf';
    protected $primaryKey = 'asnaf_id';
    
    protected $allowedFields = [
        'nama_pemohon',
        'kad_pengenalan',
        'jantina',
        'alamat',
        'daerah',
        'poskod',
        'bandar',
        'negeri',
        'no_bimbit',
        'no_rumah',
        'kesihatan',
        'hurai',
        'jawatan',
        'sektor',
        'jenis_pekerjaan',
        'pendapatan',
        'nama_pemegang',
        'nama_bank',
        'no_bank',
        'as_date',
        'duit_asnaf',
        'a_status',
        'user_id'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'as_date'; 
    protected $updatedField = null;

    public function searchAsnaf($searchTerm)
    {
        // Use the query builder to search for users based on the provided term
        return $this->like('nama_pemohon', $searchTerm)
                    ->orLike('kad_pengenalan', $searchTerm)
                    ->findAll();
    }

    public function getFormsByStatus($a_status)
    {
        return $this->where('a_status', $a_status)->findAll();
    }
 
}