<?php 

namespace App\Controllers;  
use App\Models\UserModel;
use App\Models\AsnafModel;
use App\Models\ComputerModel;
use App\Models\ProvisionModel;
use CodeIgniter\Controller;

class UserController extends Controller {


public function userhomepage()
    {
        $session = session();
        $data['title'] = 'UserHomePage'; 
        return  view('user/userhome',$data);
              
    }

    public function asnafpage()
    {
        $session = session();
        $data['title'] = 'Asnaf'; 
        return  view('user/asnaf',$data);
              
    }

    public function addasnaf()
    {
        $session = session();
        $asnafModel = new AsnafModel();


        $user_id = $session->get('user_id');
        


        if ($asnafModel->where('user_id', $user_id)->first() !== null) {

            $data['alertBody'] = "This Account  Already fill this form, Wait for the Admin Process";
            return redirect()->to('asnaf')->with('alert', view('alert',$data));
        }

        $data = [
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'kad_pengenalan' => $this->request->getPost('kad_pengenalan'),
            'jantina' => $this->request->getPost('jantina'),
            'alamat' =>$this->request->getPost('alamat'), 
            'daerah' => $this->request->getPost('daerah'),
            'poskod' => $this->request->getPost('poskod'),
            'bandar' => $this->request->getPost('bandar'),
            'negeri' => $this->request->getPost('negeri'),
            'no_bimbit' => $this->request->getPost('no_bimbit'),
            'no_rumah' => $this->request->getPost('no_rumah'),
            'kesihatan' => $this->request->getPost('kesihatan'),
            'hurai' => $this->request->getPost('hurai'),
            'jawatan' => $this->request->getPost('jawatan'),
            'sektor' => $this->request->getPost('sektor'),
            'jenis_pekerjaan' => $this->request->getPost('jenis_pekerjaan'),
            'pendapatan' => $this->request->getPost('pendapatan'),
            'nama_pemegang' => $this->request->getPost('nama_pemegang'),
            'nama_bank' => $this->request->getPost('nama_bank'),
            'no_bank' => $this->request->getPost('no_bank'),
            'duit_asnaf' => 0, 
            'a_status' => "In Process",
            'user_id' =>  $user_id,
        ];


        if ($asnafModel->insert($data)) {
            // User signup successful
            // return redirect()->to('login')->with('success', 'User registered successfully');
            $data['alertBody'] = "Apply Asnaf Aid AND Can Update Form in 2 Days at Status Application Page";
            return redirect()->to('asnaf')->with('alertSuccess', view('alertSuccess',$data));
            // return redirect()->to('login')->with('success', 'Registration successful');

        } else {
            // User signup failed   
            // return redirect()->to('signup')->with('error', 'User registration failed');
            $data['alertBody'] = "Identification Card Number already use";
             return redirect()->to('asnaf')->with('alert', view('alert',$data));

            // return redirect()->to('signup')->withInput()->with('error', 'Registration failed');
        }
              
    }

    public function viewAsnaf()
    {
        $session = session();
        $user_id = $session->get('user_id'); 

        $asnafModel = new AsnafModel();
        $asnafData = $asnafModel->where('user_id', $user_id)->first();

        return view('user/viewasnaf', ['asnafData' => $asnafData]);

              
    }

    public function editAsnafProcess()
    {
        // Get the form input values
        $session = session();
        $user_id = $session->get('user_id'); 

        $nama_pemohon = $this->request->getPost('nama_pemohon');
        $kad_pengenalan = $this->request->getPost('kad_pengenalan');
        $jantina = $this->request->getPost('jantina');
        $alamat = $this->request->getPost('alamat');
        $daerah = $this->request->getPost('daerah');
        $poskod = $this->request->getPost('poskod');
        $bandar = $this->request->getPost('bandar');
        $negeri = $this->request->getPost('negeri');
        $no_bimbit = $this->request->getPost('no_bimbit');
        $no_rumah = $this->request->getPost('no_rumah');
        $kesihatan = $this->request->getPost('kesihatan');
        $hurai = $this->request->getPost('hurai');
        $jawatan = $this->request->getPost('jawatan');
        $sektor = $this->request->getPost('sektor');
        $jenis_pekerjaan = $this->request->getPost('jenis_pekerjaan');
        $pendapatan = $this->request->getPost('pendapatan');
        $nama_pemegang = $this->request->getPost('nama_pemegang');
        $nama_bank = $this->request->getPost('nama_bank');
        $no_bank = $this->request->getPost('no_bank');



        $asnafModel = new AsnafModel();
        $asnaf = $asnafModel->where('user_id', $user_id)->first();



            $updatedAsnafData = [
                'nama_pemohon' => $nama_pemohon,
                'kad_pengenalan' => $kad_pengenalan,
                'jantina' => $jantina,
                'alamat' => $alamat,
                'daerah' => $daerah,
                'poskod' => $poskod,
                'bandar' => $bandar,
                'negeri' => $negeri,
                'no_bimbit' => $no_bimbit,
                'no_rumah' => $no_rumah,
                'kesihatan' => $kesihatan,
                'hurai' => $hurai,
                'jawatan' => $jawatan,
                'sektor' => $sektor,
                'jenis_pekerjaan' => $jenis_pekerjaan,
                'pendapatan' => $pendapatan,
                'nama_pemegang' => $nama_pemegang,
                'nama_bank' => $nama_bank,
                'no_bank' => $no_bank,
            ];
   
        

        $asnafModel->update($asnaf['asnaf_id'], $updatedAsnafData);

            $data['alertBody'] = "Successfully updated Asnaf Form";


            return redirect()->to('status')->with('alertSuccess', view('alertSuccess',$data));
        }
        


    public function computerpage()
    {
        $session = session();
        $data['title'] = 'Computer'; 
        return  view('user/computer',$data);
              
    }


    public function addcomputer()
    {
        $session = session();
        $computerModel = new ComputerModel();


        $user_id = $session->get('user_id');
    
        


        if ($computerModel->where('user_id', $user_id)->first() !== null) {

            $data['alertBody'] = "This Account  Already fill this form, Wait for the Admin Process";
            return redirect()->to('computer')->with('alert', view('alert',$data));
        }

        $data = [
            'kom_nama' => $this->request->getPost('kom_nama'),
            'kom_noic' => $this->request->getPost('kom_noic'),
            'kom_jantina' => $this->request->getPost('kom_jantina'),
            'kom_alamat' =>$this->request->getPost('kom_alamat'), 
            'kom_poskod' => $this->request->getPost('kom_poskod'),
            'kom_bandar' => $this->request->getPost('kom_bandar'),
            'kom_negeri' => $this->request->getPost('kom_negeri'),
            'kom_nobimbit' => $this->request->getPost('kom_nobimbit'),
            'kom_norumah' => $this->request->getPost('kom_norumah'),
            'kom_email' => $this->request->getPost('kom_email'),
            'kom_ibubapa' => $this->request->getPost('kom_ibubapa'),
            'kom_icibubapa' => $this->request->getPost('kom_icibubapa'),
            'kom_gaji' => $this->request->getPost('kom_gaji'),
            'nama_u' => $this->request->getPost('nama_u'),
            'alamat_u' => $this->request->getPost('alamat_u'),
            'pengakuan' => $this->request->getPost('pengakuan'),
            'duit_kom' => 0, 
            'kom_status' => "In Process",
            'user_id' =>  $user_id,
        ];


        if ($computerModel->insert($data)) {
            // User signup successful
            // return redirect()->to('login')->with('success', 'User registered successfully');
            $data['alertBody'] = "Apply Laptop Aid AND Can Update Form in 2 Days at Status Application Page";
            return redirect()->to('computer')->with('alertSuccess', view('alertSuccess',$data));
            // return redirect()->to('login')->with('success', 'Registration successful');

        } else {
            // User signup failed   
            // return redirect()->to('signup')->with('error', 'User registration failed');
            $data['alertBody'] = "Identification Card Number already use";
             return redirect()->to('computer')->with('alert', view('alert',$data));

            // return redirect()->to('signup')->withInput()->with('error', 'Registration failed');
        }
              
    }

    public function viewComputer()
    {
        $session = session();
        $user_id = $session->get('user_id'); 
  
          // Retrieve asnaf information based on user_id
          $computerModel = new ComputerModel();
          $computerData = $computerModel->where('user_id', $user_id)->first();

        // $computerModel = new ComputerModel();
        // $computerData = $computerModel->find($user_id);

        return view('user/viewcomputer', ['computerData' => $computerData]);
              
    }

    public function editComputerProcess()
    {
        // Get the form input values
        $session = session();
        $user_id = $session->get('user_id'); 

        $kom_nama = $this->request->getPost('kom_nama');
        $kom_noic = $this->request->getPost('kom_noic');
        $kom_jantina = $this->request->getPost('kom_jantina');
        $kom_alamat = $this->request->getPost('kom_alamat');
        $kom_poskod = $this->request->getPost('kom_poskod');
        $kom_bandar = $this->request->getPost('kom_bandar');
        $kom_negeri = $this->request->getPost('kom_negeri');
        $kom_nobimbit = $this->request->getPost('kom_nobimbit');
        $kom_norumah = $this->request->getPost('kom_norumah');
        $kom_email = $this->request->getPost('kom_email');
        $kom_ibubapa = $this->request->getPost('kom_ibubapa');
        $kom_icibubapa = $this->request->getPost('kom_icibubapa');
        $kom_gaji = $this->request->getPost('kom_gaji');
        $nama_u = $this->request->getPost('nama_u');
        $alamat_u = $this->request->getPost('alamat_u');



        $computerModel = new ComputerModel();
        $computer = $computerModel->where('user_id', $user_id)->first();


            $updatedComputerData = [
                'kom_nama' => $kom_nama,
                'kom_noic' => $kom_noic,
                'kom_jantina' => $kom_jantina,
                'kom_alamat' => $kom_alamat,
                'kom_poskod' => $kom_poskod,
                'kom_bandar' => $kom_bandar,
                'kom_negeri' => $kom_negeri,
                'kom_nobimbit' => $kom_nobimbit,
                'kom_norumah' => $kom_norumah,
                'kom_email' => $kom_email,
                'kom_ibubapa' => $kom_ibubapa,
                'kom_icibubapa' => $kom_icibubapa,
                'kom_gaji' => $kom_gaji,
                'nama_u' => $nama_u,
                'alamat_u' => $alamat_u,
               
            ];
   
        

        $computerModel->update($computer['kom_id'],$updatedComputerData);

            $data['alertBody'] = "Successfully updated Laptop Form";


            return redirect()->to('status')->with('alertSuccess', view('alertSuccess',$data));
        }


    public function provisionpage()
    {
        $session = session();
        $data['title'] = 'Provision'; 
        return  view('user/provision',$data);
              
    }

    public function addprovision()
    {
        $session = session();
        $provisionModel = new ProvisionModel();


        $user_id = $session->get('user_id');
        
        


        if ($provisionModel->where('user_id', $user_id)->first() !== null) {

            $data['alertBody'] = "This Account  Already fill this form, Wait for the Admin Process";
            return redirect()->to('provision')->with('alert', view('alert',$data));
        }

        $data = [
            'nama_masjid' => $this->request->getPost('nama_masjid'),
            'mukim' => $this->request->getPost('mukim'),
            'alamat' => $this->request->getPost('alamat'),
            'status_tanah' =>$this->request->getPost('status_tanah'), 
            'no_lot' => $this->request->getPost('no_lot'),
            'nama_mohon_servis' => $this->request->getPost('nama_mohon_servis'),
            'jawatan' => $this->request->getPost('jawatan'),
            'no_fon' => $this->request->getPost('no_fon'),
            'acc_masjid' => $this->request->getPost('acc_masjid'),
            'nama_bank' => $this->request->getPost('nama_bank'),
            'nama_acc' => $this->request->getPost('nama_acc'),
            'duit_pe' => 0, 
            'pe_status' => "In Process",
            'user_id' =>  $user_id,
        ];


        if ($provisionModel->insert($data)) {
            // User signup successful
            // return redirect()->to('login')->with('success', 'User registered successfully');
            $data['alertBody'] = "Apply Provision Aid AND Can Update Form in 2 Days at Status Application Page";
            return redirect()->to('provision')->with('alertSuccess', view('alertSuccess',$data));
            // return redirect()->to('login')->with('success', 'Registration successful');

        } 
        else {
            // User signup failed   
            // return redirect()->to('signup')->with('error', 'User registration failed');
            $data['alertBody'] = "Identification Card Number already use";
             return redirect()->to('provision')->with('alert', view('alert',$data));

            // return redirect()->to('signup')->withInput()->with('error', 'Registration failed');
        }
              
    }

    public function viewProvision()
    {
        $session = session();
        $user_id = $session->get('user_id'); 

        $provisionModel = new ProvisionModel();
        $provisionData = $provisionModel->where('user_id', $user_id)->first();


        return view('user/viewprovision', ['provisionData' => $provisionData]);
              
    }

    public function editProvisionProcess()
    {
        // Get the form input values
        $session = session();
        $user_id = $session->get('user_id'); 

        $nama_masjid = $this->request->getPost('nama_masjid');
        $mukim = $this->request->getPost('mukim');
        $alamat = $this->request->getPost('alamat');
        $status_tanah = $this->request->getPost('status_tanah');
        $no_lot = $this->request->getPost('no_lot');
        $nama_mohon_servis = $this->request->getPost('nama_mohon_servis');
        $jawatan = $this->request->getPost('jawatan');
        $no_fon = $this->request->getPost('no_fon');
        $acc_masjid = $this->request->getPost('acc_masjid');
        $nama_bank = $this->request->getPost('nama_bank');
        $nama_acc = $this->request->getPost('nama_acc');



        $provisionModel = new ProvisionModel();
        $provision = $provisionModel->where('user_id', $user_id)->first();



            $updatedProvisionData = [
                'nama_masjid' => $nama_masjid,
                'mukim' => $mukim,
                'alamat' => $alamat,
                'status_tanah' => $status_tanah,
                'no_lot' => $no_lot,
                'nama_mohon_servis' => $nama_mohon_servis,
                'jawatan' => $jawatan,
                'no_fon' => $no_fon,
                'acc_masjid' => $acc_masjid,
                'nama_bank' => $nama_bank,
                'nama_acc' => $nama_acc,
               
            ];
   
        

        $provisionModel->update($provision['pe_id'],$updatedProvisionData);


            $data['alertBody'] = "Successfully updated Provision Form";


            return redirect()->to('status')->with('alertSuccess', view('alertSuccess',$data));
        }


    public function statuspage()
    {

        $session = session();
        $user_id = $session->get('user_id'); 

        $asnafModel = new AsnafModel();
        $computerModel = new ComputerModel();
        $provisionModel = new ProvisionModel();

        $asnafData = $asnafModel->where('user_id', $user_id)->findAll();
        $computerData = $computerModel->where('user_id', $user_id)->findAll();
        $provisionData = $provisionModel->where('user_id', $user_id)->findAll();

        // $asnafData = $asnafModel->find($user_id);
        // $computerData = $computerModel->find($user_id);
        // $provisionData = $provisionModel->find($user_id);

        return view('user/statusform', ['asnafData' => $asnafData, 'computerData' => $computerData, 'provisionData' => $provisionData]);
        // return view('user/statusform', ['computerData' => $computerData]);
        // return view('user/statusform', ['provisionData' => $provisionData]);

              
    }


    public function viewProfile()
    {
        $session = session();
        $user_id = $session->get('user_id'); 

        $userModel = new UserModel();
        $userData = $userModel->find($user_id);

        return view('user/profile', ['userData' => $userData]);
              
    }

    public function editProfileProcess()
    {
        // Get the form input values
        $session = session();
        $user_id = $session->get('user_id'); 

        $username = $this->request->getPost('username');
        $full_name = $this->request->getPost('full_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $address = $this->request->getPost('address');

        // Create an instance of the UsersModel
        $userModel = new UserModel();


            // Prepare the updated user data including the new profile picture filename
            $updatedUserData = [
                'username' => $username,
                'full_name' => $full_name,
                'email' => $email,
                'password' => $password,
                'address' => $address 
            ];
   
        

        // Update the user profile
        $userModel->update($user_id, $updatedUserData);

            $data['alertBody'] = "Successfully updated profile info";

            // return redirect()->to('profile');
            return redirect()->to('profile')->with('alertSuccess', view('alertSuccess',$data));
        }
        

        // Handle successful profile update
        // Return a success message or redirect to a success page
    







}