<?php namespace Blupl\Franchises\Http\Controllers;

use Blupl\Franchises\Model\Franchise;
use Illuminate\Http\Request;
use Blupl\PrintMedia\Processor\Approval as ApprovalProcessor;
use Laracasts\Flash\Flash;
use Orchestra\Foundation\Http\Controllers\AdminController;

class ApprovalController extends AdminController
{

    public function __construct(ApprovalProcessor $processor)
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
     * @param Franchise $franchise
     * @return mixed
     */
    public function index()
    {
        $franchises = Franchise::all();
        return view('blupl/franchises::home-approval', compact('franchises'));

    }


    /**
     * Show a role.
     */
    public function show($id, $category)
    {
        $items = Franchise::find($id)->$category;
        return view('blupl/franchises::list', compact('items', 'category'));
    }

    public function showFranchise($franchise, $cateegory, $id)
    {
        $item = Franchise::find($franchise)->$cateegory->find($id);

        set_meta('title', trans('blupl/franchises::title.media.reporter'));
        if($item != null && $item->status == 0) {
            return view('blupl/franchises::franchise', compact('item'));
        }else {
            if($item->status == 1) {
                $massage = "Already Approve";
            } else {
                $massage = "Reporter Not Found";
            }
            Flash::error($massage);
            return $this->redirect(handles('blupl/franchise::approval/franchise/'.$franchise.'/'.$cateegory));
        }
    }



    /**
     * Update the role.
     * @return mixed
     */
    public function update($franchise, $cateegory, $id, Request $request)
    {
        $item = Franchise::find($franchise)->$cateegory->find($id);
//        dd($item);

        if ($item->status == 0) {

                foreach ($request->zone as $zone) {
                    $item->zone()->create(['zone'=>$zone]);
                }

                $item->status = 1;
                $item->save();
        }else {
            if($item->status == 1) {
                $massage = "Already Approve";
            } else {
                $massage = "Reporter Not Found";
            }
            Flash::error($massage);
            return $this->redirect(handles('blupl/franchise::approval/franchise/'.$franchise.'/'.$cateegory));
        }

        Flash::success($item->name.' Approved Successfully');
        return $this->redirect(handles('blupl/franchise::approval/franchise/'.$franchise.'/'.$cateegory));

    }


}
