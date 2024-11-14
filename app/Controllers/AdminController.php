<?php 

namespace App\Controllers;  
use App\Models\UserModel;
use App\Models\AsnafModel;
use App\Models\ComputerModel;
use App\Models\ProvisionModel;
use App\Models\DonateModel;
use CodeIgniter\Controller;

class AdminController extends Controller {




    public function adminhomepage()
    {


        $session = session();
        $data['title'] = 'AdminHomePage'; 

        $userModel = new UserModel();
        $asnafModel = new AsnafModel();
        $computerModel = new ComputerModel();
        $provisionModel = new ProvisionModel();

     
       


            // Pass data to the view

        $data = [


            'totalUsers' => $userModel->where('level_id', 2)->countAllResults(),
            'totalAsnafForms' => $asnafModel->countAllResults(),
            'totalComputerForms' => $computerModel->countAllResults(),
            'totalProvisionForms' => $provisionModel->countAllResults(),
            'totalInProcess' => $asnafModel->where('a_status', 'In Process')->countAllResults()
                + $computerModel->where('kom_status', 'In Process')->countAllResults()
                + $provisionModel->where('pe_status', 'In Process')->countAllResults(),
            'totalSuccessfull' => $asnafModel->where('a_status', 'Successfull')->countAllResults()
                + $computerModel->where('kom_status', 'Successfull')->countAllResults()
                + $provisionModel->where('pe_status', 'Successfull')->countAllResults(),
            'totalReject' => $asnafModel->where('a_status', 'Reject')->countAllResults()
                + $computerModel->where('kom_status', 'Reject')->countAllResults()
                + $provisionModel->where('pe_status', 'Reject')->countAllResults(),

                'asnafStatus' => [
                    'inProcess' => $asnafModel->where('a_status', 'In Process')->countAllResults(),
                    'successful' => $asnafModel->where('a_status', 'Successfull')->countAllResults(),
                    'reject' => $asnafModel->where('a_status', 'Reject')->countAllResults(),
                ],

                'computerStatus' => [
                    'inProcess' => $computerModel->where('kom_status', 'In Process')->countAllResults(),
                    'successful' => $computerModel->where('kom_status', 'Successfull')->countAllResults(),
                    'reject' => $computerModel->where('kom_status', 'Reject')->countAllResults(),
                ],

                'provisionStatus' => [
                    'inProcess' => $provisionModel->where('pe_status', 'In Process')->countAllResults(),
                    'successful' => $provisionModel->where('pe_status', 'Successfull')->countAllResults(),
                    'reject' => $provisionModel->where('pe_status', 'Reject')->countAllResults(),
                ],



        ];

       
        
        $data['userCounts'] = $this->getUserCountsByYear($userModel);
        $data['asnafCounts'] = $this->getAsnafCountsByYear($asnafModel);
        $data['computerCounts'] = $this->getComputerCountsByYear($computerModel);
        $data['provisionCounts'] = $this->getProvisionCountsByYear($provisionModel);
        $data['asnafStatusCounts'] = $this->getAsnafStatusCounts($asnafModel);
        $data['computerStatusCounts'] = $this->getComputerStatusCounts($computerModel);
        $data['provisionStatusCounts'] = $this->getProvisionStatusCounts($provisionModel);




        

        return  view('admin/adminhome',$data);
              
    }

    private function getUserCountsByYear($userModel)
    {
        $query = $userModel->select('YEAR(register_date) as year, COUNT(*) as count')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        return $query->getResult();
    }

   
    private function getAsnafCountsByYear($asnafModel)
    {
        $query = $asnafModel->select('YEAR(as_date) as year, COUNT(*) as count')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        return $query->getResult();
    }

    private function getComputerCountsByYear($computerModel)
    {
        $query = $computerModel->select('YEAR(kom_date) as year, COUNT(*) as count')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        return $query->getResult();
    }

    private function getProvisionCountsByYear($provisionModel)
    {
        $query = $provisionModel->select('YEAR(pe_date) as year, COUNT(*) as count')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        return $query->getResult();
    }


    private function getAsnafStatusCounts($asnafModel)
    {
        $query = $asnafModel->select('a_status, COUNT(*) as count')
            ->groupBy('a_status')
            ->get();

        return $query->getResult();
    }

    
    private function getComputerStatusCounts($computerModel)
    {
        $query = $computerModel->select('kom_status, COUNT(*) as count')
            ->groupBy('kom_status')
            ->get();

        return $query->getResult();
    }

    private function getProvisionStatusCounts($provisionModel)
    {
        $query = $provisionModel->select('pe_status, COUNT(*) as count')
            ->groupBy('pe_status')
            ->get();

        return $query->getResult();
    }



   

    

   
    public function userlist()
    {

        $session = session();
        $user_id = $session->get('user_id'); 
     
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();   

        return  view('admin/user-list',$data);
    }


    public function viewuserdetail($user_id = null)
    {


        $userModel = new UserModel();
        $userData= $userModel->where('user_id', $user_id)->first();

        // $userData = $userModel->find($user_id);

        return view('admin/detail-user', ['userData' => $userData]);
              
    }

    public function editUserProcess()
    {
        // Get the form input values
        $user_id = $this->request->getPost('user_id');
        $username = $this->request->getPost('username');
        $full_name = $this->request->getPost('full_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $address = $this->request->getPost('address');

        // Create an instance of the UsersModel
        $userModel = new UserModel();


            $updatedUserData = [
                'user_id' => $user_id,
                'username' => $username,
                'full_name' => $full_name,
                'email' => $email,
                'password' => $password,
                'address' => $address 
            ];
   
        

        // Update the user profile
        $userModel->update($user_id, $updatedUserData);

            $data['alertBody'] = "Successfully updated";

            return redirect()->to('admin/user-list')->with('alertSuccess', view('alertSuccess',$data));
        }
        


    public function deleteuser($user_id = null){
        
        $userModel = new UserModel();
        $data['users'] = $userModel->where('user_id', $user_id)->delete($user_id);

        return $this->response->redirect(site_url('admin/user-list'));
    } 
    
    public function searchuser()
    {


        $session = session();
        $data['title'] = 'Search User'; 
       

        $model = new UserModel();
        
       // Check if a search term is provided
       $searchTerm = $this->request->getGet('search');
       if (!empty($searchTerm)) {
           // If search term is provided, get users based on the search term
           $data['users'] = $model->searchUsers($searchTerm);
       } else {
           // If no search term, get all users
           $data['users'] = $model->findAll();
       }
        
        return  view('admin/search-user',$data);
              
    }




    public function asnaflist()
    {

        $session = session();
        $user_id = $session->get('user_id'); 
     
        $asnafModel = new AsnafModel();
        // $data['asnafs'] = $asnafModel->findAll();   

        $data = [

        'asnafs' => $asnafModel->findAll(),
        'asnafStatus' => [
            'inProcess' => $asnafModel->where('a_status', 'In Process')->countAllResults(),
            'successful' => $asnafModel->where('a_status', 'Successfull')->countAllResults(),
            'reject' => $asnafModel->where('a_status', 'Reject')->countAllResults(),
           
        ],

        'successForms' => $asnafModel->getFormsByStatus('Successfull'),
        'inprocessForms' => $asnafModel->getFormsByStatus('In Process'),
        'rejectForms' => $asnafModel->getFormsByStatus('Reject'),
    ];

        return  view('admin/asnaf-list',$data);
    }


    public function viewasnafdetail($asnaf_id = null)
    {


        $asnafModel = new AsnafModel();
        $asnafData= $asnafModel->where('asnaf_id', $asnaf_id)->first();


        return view('admin/detail-asnaf', ['asnafData' => $asnafData]);
              
    }


    public function editAsnafProcess()
    {
        // Get the form input values
        $asnaf_id = $this->request->getPost('asnaf_id');
        $a_status = $this->request->getPost('a_status');
        $duit_asnaf = $this->request->getPost('duit_asnaf');

        // Create an instance of the UsersModel
        $asnafModel = new AsnafModel();


            $updatedAsnafData = [
                'asnaf_id' => $asnaf_id,
                'a_status' => $a_status,
                'duit_asnaf' => $duit_asnaf,
            ];
   
        

        $asnafModel->update($asnaf_id, $updatedAsnafData);

            $data['alertBody'] = "Successfully updated";

            return redirect()->to('admin/asnaf-list')->with('alertSuccess', view('alertSuccess',$data));
        }


     public function deleteasnaf($asnaf_id = null){
        
             $asnafModel = new AsnafModel();
            $data['asnafs'] = $asnafModel->where('asnaf_id', $asnaf_id)->delete($asnaf_id);
    
            return $this->response->redirect(site_url('admin/asnaf-list'));
    }    

    public function searchasnaf()
    {


        $session = session();
        $data['title'] = 'Search Asnaf'; 
       

        $model = new AsnafModel();

        $data = [

           
            'asnafStatus' => [
                'inProcess' => $model->where('a_status', 'In Process')->countAllResults(),
                'successful' => $model->where('a_status', 'Successfull')->countAllResults(),
                'reject' => $model->where('a_status', 'Reject')->countAllResults(),
            ],
        ];
        
       // Check if a search term is provided
       $searchTerm = $this->request->getGet('search');
       if (!empty($searchTerm)) {
           // If search term is provided, get users based on the search term
           $data['asnafs'] = $model->searchAsnaf($searchTerm);
       } else {
           // If no search term, get all users
           $data['asnafs'] = $model->findAll();
       }
        
        return  view('admin/search-asnaf',$data);
              
    }



    public function computerlist()
    {

        $session = session();
        $user_id = $session->get('user_id'); 
     
        $computerModel = new ComputerModel();

        // $data['computers'] = $computerModel->findAll();   

        
        $data = [

            'computers' => $computerModel->findAll(),
            'computerStatus' => [
                'inProcess' => $computerModel->where('kom_status', 'In Process')->countAllResults(),
                'successful' => $computerModel->where('kom_status', 'Successfull')->countAllResults(),
                'reject' => $computerModel->where('kom_status', 'Reject')->countAllResults(),
            ],
        ];

        return  view('admin/computer-list',$data);
    }


    public function viewcomputerdetail($kom_id = null)
    {


        $computerModel = new ComputerModel();
        $compData= $computerModel->where('kom_id', $kom_id)->first();


        return view('admin/detail-computer', ['compData' => $compData]);
              
    }


    public function editComputerProcess()
    {
        // Get the form input values
        $kom_id = $this->request->getPost('kom_id');
        $kom_status = $this->request->getPost('kom_status');
        $duit_kom = $this->request->getPost('duit_kom');

        // Create an instance of the UsersModel
        $computerModel = new ComputerModel();


            $updatedComputerData = [
                'kom_id' => $kom_id,
                'kom_status' => $kom_status,
                'duit_kom' => $duit_kom,
            ];
   
        

        $computerModel->update($kom_id, $updatedComputerData);

            $data['alertBody'] = "Successfully updated";

            return redirect()->to('admin/computer-list')->with('alertSuccess', view('alertSuccess',$data));
        }


     public function deletecomputer($kom_id = null){
        
        $computerModel = new ComputerModel();
            $data['computers'] = $computerModel->where('kom_id', $kom_id)->delete($kom_id);
    
            return $this->response->redirect(site_url('admin/computer-list'));
    }    

    public function searchcomputer()
    {


        $session = session();
        $data['title'] = 'Search Computers'; 
       

        $model = new ComputerModel();

        $data = [

          
        'computerStatus' => [
            'inProcess' => $model->where('kom_status', 'In Process')->countAllResults(),
            'successful' => $model->where('kom_status', 'Successfull')->countAllResults(),
            'reject' => $model->where('kom_status', 'Reject')->countAllResults(),
        ],
        ];
        
       // Check if a search term is provided
       $searchTerm = $this->request->getGet('search');
       if (!empty($searchTerm)) {
           // If search term is provided, get users based on the search term
           $data['computers'] = $model->searchComputer($searchTerm);
       } else {
           // If no search term, get all users
           $data['computers'] = $model->findAll();
       }
        
        return  view('admin/search-computer',$data);
              
    }





    public function provisionlist()
    {

        $session = session();
        $user_id = $session->get('user_id'); 
     
        $provisionModel = new ProvisionModel();


        $data = [

            'provisions' => $provisionModel->findAll(),
            'provisionStatus' => [
                'inProcess' => $provisionModel->where('pe_status', 'In Process')->countAllResults(),
                'successful' => $provisionModel->where('pe_status', 'Successfull')->countAllResults(),
                'reject' => $provisionModel->where('pe_status', 'Reject')->countAllResults(),
            ],
        ];

        return  view('admin/provision-list',$data);
    }

    public function viewprovisiondetail($pe_id = null)
    {


        $provisionModel = new ProvisionModel();
        $provisionData= $provisionModel->where('pe_id', $pe_id)->first();


        return view('admin/detail-provision', ['provisionData' => $provisionData]);
              
    }

    public function editProvisionProcess()
    {
        // Get the form input values
        $pe_id = $this->request->getPost('pe_id');
        $pe_status = $this->request->getPost('pe_status');
        $duit_pe = $this->request->getPost('duit_pe');

        // Create an instance of the UsersModel
        $provisionModel = new ProvisionModel();


            $updatedProvisionData = [
                'pe_id' => $pe_id,
                'pe_status' => $pe_status,
                'duit_pe' => $duit_pe,
            ];
   
        

        $provisionModel->update($pe_id, $updatedProvisionData);

            $data['alertBody'] = "Successfully updated";

            return redirect()->to('admin/provision-list')->with('alertSuccess', view('alertSuccess',$data));
        }


     public function deleteprovision($pe_id = null){
        
        $provisionModel = new ProvisionModel();
            $data['provisions'] = $provisionModel->where('pe_id', $pe_id)->delete($pe_id);
    
            return $this->response->redirect(site_url('admin/provision-list'));
    } 

    public function searchprovision()
    {


        $session = session();
        $data['title'] = 'Search Provision'; 
       

        $model = new ProvisionModel();

      
        $data = [

            'provisionStatus' => [
                'inProcess' => $model->where('pe_status', 'In Process')->countAllResults(),
                'successful' => $model->where('pe_status', 'Successfull')->countAllResults(),
                'reject' => $model->where('pe_status', 'Reject')->countAllResults(),
            ],
        ];
        
       // Check if a search term is provided
       $searchTerm = $this->request->getGet('search');
       if (!empty($searchTerm)) {
           // If search term is provided, get users based on the search term
           $data['provisions'] = $model->searchProvision($searchTerm);
       } else {
           // If no search term, get all users
           $data['provisions'] = $model->findAll();
       }
        
        return  view('admin/search-provision',$data);
              
    }


    public function searchdonation()
    {


        $session = session();
        $data['title'] = 'Search Donate'; 

        $model = new DonateModel();

        $data['totalAmount'] = $model->getTotalDonationAmount();
        
       // Check if a search term is provided
       $searchTerm = $this->request->getGet('search');
       if (!empty($searchTerm)) {
           // If search term is provided, get users based on the search term
           $data['donates'] = $model->searchUsers($searchTerm);
       } else {
           // If no search term, get all users
           $data['donates'] = $model->findAll();
       }
        
        return  view('admin/donation-list',$data);    
              
    }


    public function viewdonationdetail($sum_id = null)
    {


        $model = new DonateModel();
        $donationData= $model->where('sum_id', $sum_id)->first();


        return view('admin/detail-donation', ['donationData' => $donationData]);
              
    }


    public function deletedonation($sum_id = null){
        
        $model = new DonateModel();

            $data['donates'] = $model->where('sum_id', $sum_id)->delete($sum_id);
    
            return $this->response->redirect(site_url('admin/donation-list'));
    } 








}