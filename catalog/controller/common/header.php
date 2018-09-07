<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($this->config->get('config_url') . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $this->config->get('config_url');
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		// Facebook share meta tag
		$this->load->model('tool/image');

		$facebook_share_image_width = 600;
		$facebook_share_image_height = 315;

		if($this->document->getImage()){
			$facebook_share_image = $this->model_tool_image->resize($this->document->getImage(), $facebook_share_image_width, $facebook_share_image_height);
		} else {
			$facebook_share_image = $this->model_tool_image->resize($this->config->get('config_logo'), $facebook_share_image_width, $facebook_share_image_height);
		}

		$data['facebook_site_name'] = $data['name'];
		$data['facebook_share_url'] = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
		$data['facebook_share_type'] = ($this->document->getType()) ? $this->document->getType() : 'website';
		$data['facebook_share_title'] = $this->document->getTitle();
		$data['facebook_share_description'] = $this->document->getDescription();
		$data['facebook_share_image'] = $facebook_share_image;
		$data['facebook_share_image_width'] = $facebook_share_image_width;
		$data['facebook_share_image_height'] = $facebook_share_image_height;
		$data['facebook_product_price_amount'] = $this->document->getPrice();
		$data['facebook_product_price_currency'] = $this->config->get('config_currency');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account'), $this->customer->getFullName(), $this->url->link('account/logout'));

		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account');
		$data['register'] = $this->url->link('account/register');
		$data['login'] = $this->url->link('account/login');
		$data['order'] = $this->url->link('account/order');
		$data['transaction'] = $this->url->link('account/transaction');
		$data['download'] = $this->url->link('account/download');
		$data['logout'] = $this->url->link('account/logout');
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout');
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');
//var_dump($data);
		return $this->load->view('common/header', $data);
	}
}
