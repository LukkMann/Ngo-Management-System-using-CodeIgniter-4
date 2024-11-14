<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class ProvisionModel extends Model{

    protected $table = 'penyelenggaraan';
    protected $primaryKey = 'pe_id';
    
    protected $allowedFields = [
        'nama_masjid',
        'mukim',
        'alamat',
        'status_tanah',
        'no_lot',
        'nama_mohon_servis',
        'jawatan',
        'no_fon',
        'acc_masjid',
        'nama_bank',
        'nama_acc',
        'pe_date',
        'duit_pe',
        'pe_status',
        'user_id'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'pe_date'; 
    protected $updatedField = null;

    public function searchProvision($searchTerm)
    {
        // Use the query builder to search for users based on the provided term
        return $this->like('nama_masjid', $searchTerm)
                    ->findAll();
    }

    public function getFormsByStatus($pe_status)
    {
        return $this->where('pe_status', $pe_status)->findAll();
    }
 
}