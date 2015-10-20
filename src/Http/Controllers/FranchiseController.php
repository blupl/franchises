<?php namespace Blupl\Franchises\Http\Controllers;

use Blupl\Franchises\Http\Requests\FranchiseManagementRequest;
use Blupl\Franchises\Http\Requests\FranchiseRequest;
use Blupl\Franchises\Http\Requests\PlayerRequest;
use Blupl\Franchises\Http\Requests\TeamManagementRequest;
use Blupl\Franchises\Http\Requests\TeamSupportRequest;
use Blupl\Franchises\Model\Franchise;
use Blupl\Franchises\Model\FranchiseManagement;
use Blupl\Franchises\Model\Player;
use Blupl\Franchises\Model\TeamManagement;
use Blupl\Franchises\Model\TeamSupportStuff;
use Blupl\Franchises\Processor\Franchises as FranchisesProcessor;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
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

    }



    public function create()
    {
        $franchise = Franchise::where('user_id', '=', Auth::user()->id)->first();
        if ($franchise == null ) {
            return view('blupl/franchises::form.create');
        } else {
            return $this->redirect(handles('blupl/franchise::management'));
        }
    }


    public function storeFranchise(FranchiseRequest $request)
    {
        try {
            $franchise = Franchise::create($request->all());
        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('blupl/franchise::create'));
        }
        Flash::success($franchise->name.' Franchise Save Successfully');
        return $this->redirect(handles('blupl/franchise::management'));
    }


    public function franchise()
    {
        $franchise = Franchise::where('user_id', '=', Auth::user()->id)->first();
        if ($franchise == null) {
            return $this->redirect(handles('blupl/franchise::create'));
        } else {

            return view('blupl/franchises::management.index', compact('franchise'));
        }
    }



    public function franchiseManagement($category)
    {
        $form = $category;
        return view('blupl/franchises::edit', compact('form'));
    }


    public function storeFranchiseManagement(FranchiseMAnagementRequest $request)
    {
        try {
            $franchise = FranchiseManagement::create($request->all());
        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('blupl/franchise::management'));
        }
        Flash::success($franchise->name.' Franchise Save Successfully');
        return $this->redirect(handles('blupl/franchise::management'));

    }


    public function storePlayer(PlayerRequest $request)
    {

        try {
            $franchise = Player::create($request->all());
        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('blupl/franchise::management'));
        }
        Flash::success($franchise->name.' Franchise Save Successfully');
        return $this->redirect(handles('blupl/franchise::management'));
    }



    public function storeTeam(TeamManagementRequest $request)
    {
//        dd($request->all());
        try {
            $franchise = TeamManagement::create($request->all());
        } catch (Exception $e) {
            Flash::error('Unable to Save '.$e);
            return $this->redirect(handles('blupl/franchise::management'));
        }
        Flash::success($franchise->name.' Franchise Save Successfully');
        return $this->redirect(handles('blupl/franchise::management'));
    }



    public function storeTeamStuff(TeamSupportRequest $request)
    {
        $franchise =  TeamSupportStuff::create($request->all());

        try {
            $franchise =  TeamSupportStuff::create($request->all());
        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('blupl/franchise::management'));
        }
        Flash::success($franchise->name.' Franchise Save Successfully');
        return $this->redirect(handles('blupl/franchise::management'));
    }
}