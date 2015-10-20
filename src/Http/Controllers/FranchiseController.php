<?php namespace Blupl\Franchises\Http\Controllers;

use Blupl\Franchises\Processor\Franchises as FranchisesProcessor;
use Orchestra\Foundation\Http\Controllers\AdminController;

class FranchiseController extends AdminController
{

    public function __construct(FranchisesProcessor $processor)
    {
        $this->processor = $processor;

        parent::__construct();
    }

    protected function setupFilters()
    {
        $this->beforeFilter('control.csrf', ['only' => 'delete']);
    }

    /**
     * Get landing page.
     *
     * @return mixed
     */
    public function index()
    {
        return view('blupl/franchises::management.index');
    }

    public function management($category)
    {
        $form = $category;
        return view('blupl/franchises::edit', compact('form'));
    }

    public function storeFranchise()
    {
        //
    }


    public function storePlayer()
    {
        //
    }



    public function storeTeam()
    {
        //
    }



    public function storeTeamStuff()
    {
        //
    }
}