# pertemuan 5

##buat database user
buat database user 
    CREATE TABLE user (
        id INT(11) auto_increment,
        username VARCHAR(200) NOT NULL,
        useremail VARCHAR(200),
        userpassword VARCHAR(200),
    PRIMARY KEY(id)
    );

##buat contorller untuk model use
<?php
namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{
public function index()
{
$title = 'Daftar User';
$model = new UserModel();
$users = $model->findAll();
return view('user/index', compact('users', 'title'));
}
public function login()
{
helper(['form']);
$email = $this->request->getPost('email');
$password = $this->request->getPost('password');
if (!$email)
{
return view('user/login');
}
$session = session();
$model = new UserModel();
$login = $model->where('useremail', $email)->first();
if ($login)
{
$pass = $login['userpassword'];
if (password_verify($password, $pass))
{
$login_data = [
'user_id' => $login['id'],
'user_name' => $login['username'],
'user_email' => $login['useremail'],
'logged_in' => TRUE,
];
$session->set($login_data);
return redirect('admin/artikel');
}
else
{
$session->setFlashdata("flash_msg", "Password salah.");
return redirect()->to('/user/login');
}
}
else
{
$session->setFlashdata("flash_msg", "email tidak terdaftar.");
return redirect()->to('/user/login');
}
}
}


## lalu kita buat view untuk login

kemudian buka di browser

![alt text](./ss_README/image-1.png)

lalu kita buat auth filter untuk admin. dengan membuat file baru pada file Auth.php di derektori app/Filters 

    <?php namespace App\Filters;
    use CodeIgniter\HTTP\RequestInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\Filters\FilterInterface;
    use Config\Services;

    class Auth implements FilterInterface
    {
        public function before(RequestInterface $request, $arguments = null)
        {
            // jika user belum login
            $session = \Config\Services::session();
            if(! session()->get('logged_in')){
            // maka redirct ke halaman login
                return redirect()->to('/user/login');
            }
            }
            public function after(RequestInterface $request, ResponseInterface
                $response, $arguments = null)
            {
            // Do something here
        }
    }

tambakan pada app/Config/Filters 

'auth' => \App\Filters\Auth::class,

juga tambahkan "['filter' => 'auth']" pada app/Config/routes
di bagian route group admin

    $routes->group('admin', ['filter' => 'auth'], function($routes) {
        $routes->get('artikel', 'Artikel::admin_index');
        $routes->add('artikel/add', 'Artikel::add');
        $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
        $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
    });

dan tambahkan pada controller user method logout untuk logut
    public function logout(){
        session()->destroy();
        return redirect()->to('/user/login');
    }