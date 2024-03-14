<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CasestudiesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CasestudiesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CasestudiesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Casestudies::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/casestudies');
        CRUD::setEntityNameStrings('casestudies', 'casestudies');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {



        CRUD::addColumn(['name' => 'id', 'label' => 'No', 'type' => 'bigint']);
        CRUD::addColumn(['name' => 'title', 'label' => 'Title', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'img', 'label' => 'Image', 'type' => 'image']);
        CRUD::addColumn(['name' => 'client', 'label' => 'Client Name', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'challenge', 'label' => 'Challenge', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'overview', 'label' => 'The Solution', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'benefits', 'label' => 'Benefits', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'url', 'label' => 'Url', 'type' => 'varchar']);
       

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
        CRUD::setValidation(CasestudiesRequest::class);

        CRUD::field('title')->type('text')->label('Add Title');
        CRUD::field('client')->type('text')->label('Add Client');
        CRUD::field('challenge')->type('text')->label('Add Challenge');
       
        CRUD::addField([
            'name'          => 'overview',
            'label'         => 'Add Solution',
            'type'          => 'summernote',
            'options' => [
                'placeholder' => 'Add Solution Of Case Studies',
                'height' => 420,
            ]
        ]);
        CRUD::field('benefits')->type('text')->label('Add Benefits');
        CRUD::field('url')->type('text')->label('Add Url');
        CRUD::addField([
            'label' => "Case Study Image",
            'name' => "img",
            'type' => 'upload',
            'upload' => true,

            'crop' => true,
            'aspect_ratio' => 1.5,
            'prefix' => 'vector/upload/'
        ]);
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
