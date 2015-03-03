<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Project\ProjectRepository;

class ProjectsController extends Controller {

	/**
	 * 
	 * @var App\Repositories\Project\ProjectRepository
	 */
	protected $repository;

	/**
	 * Create new instance of the controller
	 * 
	 * @param App\Repositories\Project\ProjectRepository $repository
	 */
	public function __construct(ProjectRepository $repository)
	{
		$this->repository = $repository;

		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = $this->repository->all();

		return view('projects.index', compact('projects'));
	}

}
