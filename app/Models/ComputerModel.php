<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class ComputerModel extends Model{

    protected $table = 'komputer';
    protected $primaryKey = 'kom_id';
    
    protected $allowedFields = [
        'kom_nama',
        'kom_noic',
        'kom_jantina',
        'kom_alamat',
        'kom_poskod',
        'kom_bandar',
        'kom_negeri',
        'kom_nobimbit',
        'kom_norumah',
        'kom_email',
        'kom_ibubapa',
        'kom_icibubapa',
        'kom_gaji',
        'nama_u',
        'alamat_u',
        'pengakuan',
        'kom_date',
        'duit_kom',
        'kom_status',
        'user_id'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'kom_date'; 
    protected $updatedField = null;

    public function searchComputer($searchTerm)
    {
        // Use the query builder to search for users based on the provided term
        return $this->like('kom_nama', $searchTerm)
                    ->orLike('kom_noic', $searchTerm)
                    ->findAll();
    }

    public function getFormsByStatus($kom_status)
    {
        return $this->where('kom_status', $kom_status)->findAll();
    }
 
}