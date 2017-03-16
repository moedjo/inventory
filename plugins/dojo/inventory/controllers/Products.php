<?php namespace Dojo\Inventory\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Products extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'dojo.inventory.access_products' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Inventory', 'master-data', 'product');
    }
    
    
//     public function listExtendQuery($query)
//     {
//     	$query->with(['brand' => function ($query) {
//         	$query->withTrashed();
//     	},'category' => function ($query) {
//         	$query->withTrashed();
//     	}]);
//     }
}