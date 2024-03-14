<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DemosRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DemosCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DemosCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Demos::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/demos');
        CRUD::setEntityNameStrings('demos', 'demos');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        CRUD::addColumn(['name' => 'mail', 'label' => 'Email', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'mno', 'label' => 'Mobile No', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'pname', 'label' => 'Product Name', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'forwhat', 'label' => 'For What', 'type' => 'varchar']);

        CRUD::addColumn(['name' => 'created_at', 'label' => 'Date', 'type' => 'timestamp']);

        CRUD::column('updated_at');

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
        CRUD::setValidation(DemosRequest::class);

        CRUD::field('id');
        CRUD::field('name');
        CRUD::field('mail')->label('Email');
        CRUD::field('mno')->label('Mobile No.');
        CRUD::field('pname')->label('Product Name');
        CRUD::field('forwhat')->label('For What');
        CRUD::field('created_at')->label('Date');
        CRUD::field('updated_at');

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
