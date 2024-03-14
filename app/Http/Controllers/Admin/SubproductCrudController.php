<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubproductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SubproductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubproductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Subproduct::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/subproduct');
        CRUD::setEntityNameStrings('subproduct', 'subproducts');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::addColumn(['name' => 'sname', 'label' => 'Sub Product Name', 'type' => 'text']);
        CRUD::addColumn(['name' => 'pname', 'label' => 'Product Name', 'type' => 'text']);
        CRUD::addColumn(['name' => 'img', 'label' => 'Image', 'type' => 'image']);
        CRUD::addColumn(['name' => 'decrip', 'label' => 'Description', 'type' => 'varchar']);
        CRUD::column('features')->type('varchar');
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SubproductRequest::class);

        CRUD::addField(['name' => 'sname', 'label' => 'Sub Product Name', 'type' => 'text']);
        CRUD::addField(['name' => 'pname', 'label' => 'Product Name', 'type' => 'text']);
           
        CRUD::addField(['name' => 'img', 'label' => 'Sub Product Image', 'type' => 'upload', 'upload' => true]);
        CRUD::addField([
            'name'          => 'decrip',
            'label'         => 'Description',
            'type'          => 'summernote',
            'options' => [
                'placeholder' => 'Add Descripton Of Product',
                'height' => 420,
            ]
        ]);

        CRUD::field('features')->type('text');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
