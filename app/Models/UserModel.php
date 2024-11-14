<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    
    protected $allowedFields = [
        'username',
        'full_name',
        'email',
        'password',
        'address',
        'register_date',
        'level_id'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'register_date'; 
    protected $updatedField = null;


    public function searchUsers($searchTerm)
    {
        // Use the query builder to search for users based on the provided term
        return $this->like('username', $searchTerm)
                    ->orLike('full_name', $searchTerm)
                    ->orLike('email', $searchTerm)
                    ->findAll();
    }


   

    
    
 
}