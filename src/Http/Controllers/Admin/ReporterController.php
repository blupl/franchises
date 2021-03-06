<?php namespace Blupl\Franchises\Http\Controllers\Admin;

use Blupl\Franchises\Http\Requests\Reporter;
use Blupl\Franchises\Model\MediaOrganization;
use Blupl\Franchises\Model\MediaPrint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Blupl\Franchises\Processor\Media as MediaProcessor;
use Orchestra\Foundation\Http\Controllers\AdminController;

class ReporterController extends AdminController
{

    public function __construct(MediaProcessor $processor)
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
        return $this->processor->index($this);
    }

    public function indexSucceed(array $data)
    {
        set_meta('title', 'blupl/franchises::title.media');

        return view('blupl/franchises::index', $data);
    }


    /**
     * Show a role.
     *
     * @param  int  $roles
     *
     * @return mixed
     */
    public function show($medias)
    {
        return $this->edit($medias);
    }

    /**
     * Create a new role.
     *
     * @return mixed
     */
    public function create()
    {
        return $this->processor->create($this);
    }

    /**
     * Edit the role.
     *
     * @param  int  $roles
     *
     * @return mixed
     */
     public function edit($medias)
     {
        return $this->processor->edit($this, $medias);
     }

    /**
     * Create the role.
     *
     * @return mixed
     */
     public function store(Reporter $request)
     {
        return $this->processor->store($this, $request);
     }

    /**
     * Update the role.
     *
     * @param  int  $roles
     *
     * @return mixed
     */
    public function update($medias)
    {
        return $this->processor->update($this, Input::all(), $medias);
    }

    /**
     * Request to delete a role.
     *
     * @param  int  $roles
     *
     * @return mixed
     */
    public function delete($medias)
    {
        return $this->destroy($medias);
    }

    /**
     * Request to delete a role.
     *
     * @param  int  $roles
     *
     * @return mixed
     */
    public function destroy($medias)
    {
        return $this->processor->destroy($this, $medias);
    }


    /**
     * Response when create role page succeed.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function createSucceed()
    {
        set_meta('title', trans('blupl/franchises::title.media.create'));

        return view('blupl/franchises::edit');
    }

    /**
     * Response when edit role page succeed.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function editSucceed(array $data)
    {
        set_meta('title', trans('blupl/franchises::title.media.update'));

        return view('blupl/franchises::edit', $data);
    }

    /**
     * Response when storing role failed on validation.
     *
     * @param  object  $validation
     *
     * @return mixed
     */
     public function storeValidationFailed($validation)
     {
        return $this->redirectWithErrors(handles('orchestra::media/reporter'), $validation);
     }

    /**
     * Response when storing role failed.
     *
     * @param  array  $error
     *
     * @return mixed
     */
     public function storeFailed(array $error)
     {
        $message = trans('orchestra/foundation::response.db-failed', $error);

        return $this->redirectWithMessage(handles('orchestra::media/reporter'), $message);
     }

    /**
     * Response when storing user succeed.
     *
     * @param  \Orchestra\Model\Role  $role
     *
     * @return mixed
     */
     public function storeSucceed()
     {
        $message = trans('blupl/franchises::response.media.create', [
//            'name' => $media->getAttribute('name')
        ]);

         return $this->redirectWithMessage(handles('orchestra::media/reporter'), $message);
     }

    /**
     * Response when updating role failed on validation.
     *
     * @param  object  $validation
     * @param  int     $id
     *
     * @return mixed
     */
     public function updateValidationFailed($validation, $id)
     {
        return $this->redirectWithErrors(handles("orchestra::media/reporter/{$id}/edit"), $validation);
     }

    /**
     * Response when updating role failed.
     *
     * @param  array  $errors
     *
     * @return mixed
     */
     public function updateFailed(array $errors)
     {
        $message = trans('orchestra/foundation::response.db-failed', $errors);

        return $this->redirectWithMessage(handles('orchestra::media/reporter'), $message);
     }

    /**
     * Response when updating role succeed.
     */
    public function updateSucceed(media $media)
    {
        $message = trans('orchestra/control::response.roles.update', [
            'name' => $media->getAttribute('name')
        ]);

        return $this->redirectWithMessage(handles('orchestra::media'), $message);
    }

    /**
     * Response when deleting role failed.
     *
     * @param  array  $error
     *
     * @return mixed
     */
    public function destroyFailed(array $error)
    {
        $message = trans('orchestra/foundation::response.db-failed', $error);

        return $this->redirectWithMessage(handles('orchestra::media'), $message);
    }

    /**
     * Response when updating role succeed.
     *
     * @param  \Orchestra\Model\Role  $role
     *
     * @return mixed
     */
    public function destroySucceed(media $media)
    {
        $message = trans('orchestra/control::response.roles.delete', [
            'name' => $media->getAttribute('name')
        ]);

        return $this->redirectWithMessage(handles('orchestra::media'), $message);
    }

    /**
     * Response when user verification failed.
     *
     * @return mixed
     */
    public function userVerificationFailed()
    {
        return $this->suspend(500);
    }

}
