<?php 

namespace App\Controllers;  
use App\Models\UserModel;
use App\Models\DonateModel;
use CodeIgniter\Controller;

class IndexController extends Controller {

    public function index()
    {
        $data['title'] = 'Homepage'; 
        return  view('index',$data);
                
    }

     public function about()
    {
        $data['title'] = 'About Us'; 
        return  view('about',$data);
              
    }

    public function indexdonate()
    {
        $data['title'] = 'About Us'; 
        return  view('indexdonate',$data);
              
    }

    public function donateProcess()
    {
        $donateModel = new DonateModel();

  

    $data = [
        'nama' => $this->request->getPost('nama'),
        'email' => $this->request->getPost('email'),
        'ic' => $this->request->getPost('ic'),
        'phone_number' => $this->request->getPost('phone_number'),
        'amount' => $this->request->getPost('amount'),
        
    ];

        if ($donateModel->insert($data)) {

             // Get the inserted data, including donate_date
            $insertedData = $donateModel->find($donateModel->insertID());

              // Include donate_date in the $data array
              $data['donate_date'] = $insertedData['donate_date'];

           
            // $data['alertBody'] = "Successfull Donate";
            // return redirect()->to('receipt')->with('alertSuccess', view('alertSuccess',$data));
            
            return redirect()->to('receipt')->with('data',  $insertedData);

           

        } else {
            // User signup failed   
            // return redirect()->to('signup')->with('error', 'User registration failed');
            $data['alertBody'] = "Unsuccessfull Donate";
             return redirect()->to('indexdonate')->with('alert', view('alert',$data));

            // return redirect()->to('signup')->withInput()->with('error', 'Registration failed');
        }


    }

    public function receipt()
    {
        // Get data from the session (or any other method you prefer)
        $data = session('data');

        // Display the receipt view with the donation details
        return view('receipt', $data);
    }

    


    public function login()
    {
        $data['title'] = 'Login'; 
        return  view('login',$data);
              
    }


    public function loginProcess()
    {

        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $user = $userModel->where('username', $username)->first();

        if ($user && $password== $user['password']) {
            // Set session for user_id
            session()->set('user_id', $user['user_id']);
          

            // echo $user['username'];
            // echo $user['password'];

            // Redirect based on user's level
            if ($user['level_id'] == 1) {
                // return redirect()->to('admin/adminhome');
                $data['alertBody'] = "Login to Admin";
                return redirect()->to('admin/adminhome')->with('alertSuccess', view('alertSuccess',$data));

            } elseif ($user['level_id'] == 2) {
                // return redirect()->to('user/')->with('/alertsuccess', 'Success Login');
                $data['alertBody'] = "Login";
                return redirect()->to('user/')->with('alertSuccess', view('alertSuccess',$data));
            }
        } 
        else {
            return redirect()->to('login')->with('error', 'Invalid login credentials');
        }

        // $session = session();
        // $userModel = new UserModel();
        // $username = $this->request->getPost('username');
        // $password = $this->request->getPost('password');
        
        // $user = $userModel->where('username', $username)->first();

        
        // if ($user && password_verify($password, $user['password'])) {
        //     // Store user details in the session.
        //     session()->set('user_id', $user['user_id']);
        //     session()->set('level_id', $user['level_id']);

        //     if ($user['level_id'] == 1) {
        //         return redirect()->to('admin/admin');
        //     } else {
        //         return redirect()->to('user/user');
        //     }
        // } else {
        //     return redirect()->to('login')->with('error', 'Invalid username or password');
        // }


    }

   
    public function signup()
    {
        $data['title'] = 'Signup'; 
        return  view('signup',$data);
              
    }

    public function signupProcess()
    {
        $userModel = new UserModel();

          // Get the username from the submitted form data
        $username = $this->request->getPost('username');

    // Check if the username already exists in the database
    if ($userModel->where('username', $username)->first() !== null) {
        // Username already exists
        // return redirect()->to('signup')->with('error', 'Username already exists. Please choose a different username.');
        $data['alertBody'] = "Username already exists";
        return redirect()->to('signup')->with('alert', view('alert',$data));
    }

    $data = [
        'username' => $username,
        'full_name' => $this->request->getPost('full_name'),
        'email' => $this->request->getPost('email'),
        'password' =>$this->request->getPost('password'), 
        'address' => $this->request->getPost('address'),
        // 'register_date' => date('Y-m-d H:i:s'),
        'level_id' => 2, // You can set the default level ID here.
    ];

        if ($userModel->insert($data)) {
            // User signup successful
            // return redirect()->to('login')->with('success', 'User registered successfully');
            $data['alertBody'] = "Successfull register new account";
            return redirect()->to('login')->with('alertSuccess', view('alertSuccess',$data));
            // return redirect()->to('login')->with('success', 'Registration successful');

        } else {
            // User signup failed   
            // return redirect()->to('signup')->with('error', 'User registration failed');
            $data['alertBody'] = "Username already exists";
             return redirect()->to('signup')->with('alert', view('alert',$data));

            // return redirect()->to('signup')->withInput()->with('error', 'Registration failed');
        }

     

        }    

        public function logout()
        {
            // Load the session library
            $session = session();
    
            // Destroy the session
            $session->destroy();
    
            // Redirect the user to the login page or any other desired page
            return redirect()->to('/');
        }


   

}