<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class DonateModel extends Model{

    protected $table = 'sumbangan';
    protected $primaryKey = 'sum_id';
    
    protected $allowedFields = [
        'nama',
        'email',
        'ic',
        'phone_number',
        'amount',
        'donate_date'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'donate_date'; 
    protected $updatedField = null;

    public function searchDonate($searchTerm)
    {
        // Use the query builder to search for users based on the provided term
        return $this->like('nama', $searchTerm)
                    ->orLike('email', $searchTerm)
                    ->orLike('ic', $searchTerm)
                    ->findAll();
    }


    
    public function getTotalDonationAmount()
    {
        return $this->selectSum('amount')->first();
    }
    
   
}