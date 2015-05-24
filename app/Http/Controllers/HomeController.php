<?php namespace App\Http\Controllers;

use App\Domain\Entities\Post;
use Doctrine\ORM\EntityManager;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     * Create a new controller instance.
     *
     * @param EntityManager $entityManager
     * @param Post          $post
     */
	public function __construct(EntityManager $entityManager)
	{
        $this->entityManager = $entityManager;
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $post = new Post(['title' => 'Hello World', 'body' => 'Body']);

        $this->entityManager->persist($post);
        $this->entityManager->flush();
	}

}
