<?php
class ControllerAccountForgotten extends Controller {
	private $error = array();

	public function index() {
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/account'));
		}

		$this->load->language('account/forgotten');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);
			$this->model_account_customer->editCode($customer_info['customer_id'], token(40));

            require 'class.phpmailer.php';
            require 'class.smtp.php';
            $config = include('config.php');
            $mail = new PHPMailer;
            //$mail->SMTPDebug = 3; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.qq.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = $config['username']; // SMTP username
            $mail->Password = $config['password']; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $config['port']; // TCP port to connect to
            $mail->setFrom($config['address'], $config['name']);

            $email = $_POST['email'];
            $mail->addAddress($email, '.'); // Add a recipient
            $mail->addReplyTo($email, 'php');

            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $config['title'];
            $code = $this->get_code(6,0);
            $mail->Body = '您的验证码是（请不要告诉别人）:  '.$code;
            if(!$mail->send()) {
                //输出错误信息
                $this->session->data['success'] = '发送失败';
            } else {
                $this->session->data['success'] = $this->language->get('text_success');
            }


//			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('account/login'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_forgotten'),
			'href' => $this->url->link('account/forgotten')
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('account/forgotten');

		$data['back'] = $this->url->link('account/login');

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} else {
			$data['email'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/forgotten', $data));
	}

	protected function validate() {
		if (!isset($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_email');
		} elseif (!$this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_email');
		}
		
		// Check if customer has been approved.
		$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

		if ($customer_info && !$customer_info['status']) {
			$this->error['warning'] = $this->language->get('error_approved');
		}

		return !$this->error;
	}

    function get_code($length=6,$mode=0)//获取随机验证码函数
    {
//        $mode 0为大小写英文和数字,1为数字,2为小写字母,3为大写字母,
//        4为大小写字母,5为大写字母和数字,6为小写字母和数字
        switch ($mode)
        {
            case '1':
                $str='123456789';
                break;
            case '2':
                $str='abcdefghijklmnopqrstuvwxyz';
                break;
            case '3':
                $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case '4':
                $str='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                break;
            case '5':
                $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                break;
            case '6':
                $str='abcdefghijklmnopqrstuvwxyz1234567890';
                break;
            default:
                $str='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
                break;
        }
        $checkstr='';
        $len=strlen($str)-1;
        for ($i=0;$i<$length;$i++)
        {
            //$num=rand(0,$len);//产生一个0到$len之间的随机数
            $num=mt_rand(0,$len);//产生一个0到$len之间的随机数
            $checkstr.=$str[$num];
        }
        return $checkstr;
    }

}
