<?php

    namespace App\Controllers;

    // miniframework resources
    use MF\Controller\Action;
    use MF\Model\Container;

    // models
    use App\Models\Product;
    use App\Models\Info;

    class IndexController extends Action {

        public function index() {

            $product = Container::getModel('Product');

            $products = $product->getProducts();

            $this->view->data = $products;

            $this->render('index', 'layout1');
        }

        public function aboutUs() {

            $info = Container::getModel('Info');

            $infos = $info->getInfo();

            $this->view->data = $infos;

            $this->render('aboutUs', 'layout2');

        }

    }

?>