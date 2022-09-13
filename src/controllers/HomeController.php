<?php 
namespace app\src\controllers;
use app\core\Application;
use app\core\Controller;
use app\src\models\Product;

class HomeController extends Controller
{
    /**
     * A method controller of the HomeController.
     */
    public function HomeController()
    {  
        $views = "Homepage";
        $products = Application::$product;
        $products = $products->getAll();
        $this->render($views,  $products);
    }

}
