<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'title', 'label' => 'Title', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'img', 'label' => 'Image', 'type' => 'image']);
        CRUD::addColumn(['name' => 'decrip', 'label' => 'Description', 'type' => 'varchar']);
        CRUD::addColumn(['name' => 'tag', 'label' => 'Tag', 'type' => 'varchar']);
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
        CRUD::setValidation(NewsRequest::class);

        CRUD::field('title')->type('text');
        CRUD::addField([
            'label' => "News Image",
            'name' => "img",
            'type' => 'upload',
            'upload' => true,

            'crop' => true,
            'aspect_ratio' => 1.5,
            'prefix' => 'vector/upload/'
        ]);
        CRUD::addField([
            'name'          => 'decrip',
            'label'         => 'Description',
            'type'          => 'summernote',
            'options' => [
                'placeholder' => 'Add Descripton Of Product',
                'height' => 420,
            ]
        ]);
        CRUD::field('tag')->type('text');
        CRUD::field('url')->type('text');

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
