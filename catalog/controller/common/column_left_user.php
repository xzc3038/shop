<?php
class ControllerCommonColumnLeftUser extends Controller {
	public function index() {
		$this->load->model('design/layout');

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$layout_id = 0;

		if ($route == 'product/category' && isset($this->request->get['path'])) {
			$this->load->model('catalog/category');

			$path = explode('_', (string)$this->request->get['path']);

			$layout_id = $this->model_catalog_category->getCategoryLayoutId(end($path));
		}

		if ($route == 'product/product' && isset($this->request->get['product_id'])) {
			$this->load->model('catalog/product');

			$layout_id = $this->model_catalog_product->getProductLayoutId($this->request->get['product_id']);
		}

		if ($route == 'information/information' && isset($this->request->get['information_id'])) {
			$this->load->model('catalog/information');

			$layout_id = $this->model_catalog_information->getInformationLayoutId($this->request->get['information_id']);
		}

		if (!$layout_id) {
			$layout_id = $this->model_design_layout->getLayout($route);
		}

		if (!$layout_id) {
			$layout_id = $this->config->get('config_layout_id');
		}

		$this->load->model('setting/module');

		$data['modules'] = array();

		$modules = $this->model_design_layout->getLayoutModules($layout_id, 'column_left');

		foreach ($modules as $module) {
			$part = explode('.', $module['code']);

			if (isset($part[0]) && $this->config->get('module_' . $part[0] . '_status')) {
				$module_data = $this->load->controller('extension/module/' . $part[0]);

				if ($module_data) {
					$data['modules'][] = $module_data;
				}
			}

			if (isset($part[1])) {
				$setting_info = $this->model_setting_module->getModule($part[1]);

				if ($setting_info && $setting_info['status']) {
					$output = $this->load->controller('extension/module/' . $part[0], $setting_info);

					if ($output) {
						$data['modules'][] = $output;
					}
				}
			}
		}
        $data['account'] = $this->url->link('account/account');
        $data['edit'] = $this->url->link('account/edit');
        $data['order'] = $this->url->link('account/order');
        $data['return'] = $this->url->link('account/return');
        $data['tickets'] = $this->url->link('account/tickets');
        $data['transaction'] = $this->url->link('account/transaction');
        $data['address'] = $this->url->link('account/address');
        $data['password'] = $this->url->link('account/password');
        $data['wishlist'] = $this->url->link('account/wishlist');
        $data['reward'] = $this->url->link('account/reward');
        $data['logout'] = $this->url->link('account/logout');

        $this->load->language('account/account');
        $data['text_account'] =  $this->language->get('text_account');
        $data['text_edit'] =  $this->language->get('text_edit');
        $data['text_my_orders'] =  $this->language->get('text_my_orders');
        $data['text_password'] =  $this->language->get('text_password');
        $data['text_transaction'] =  $this->language->get('text_transaction');
        $data['text_return'] =  $this->language->get('text_return');

        $this->load->language('account/address');
        $data['text_address_book'] =  $this->language->get('text_address_book');

        $this->load->language('account/logout');
        $data['text_logout'] =  $this->language->get('text_logout');

        $this->load->language('account/reward');
        $data['text_logout'] =  $this->language->get('text_logout');

        $this->load->language('account/wishlist');
        $data['heading_title'] =  $this->language->get('heading_title');

//var_dump($data);
		return $this->load->view('common/column_left_user', $data);
	}
}
