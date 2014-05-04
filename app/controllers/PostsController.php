<?php

class PostsController extends ApiController {



	function __construct(Post $post){
		$this->post = $post;
	}
	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{

		$limit = Input::get('limit', 20);
		$posts = $this->post->paginate($limit);

		return $this->response($posts->toArray());
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		try {

			$post = $this->post->with(['comments', 'author'])->findOrFail($id);	
			return $this->response(['data'=>$post->toArray()]);

		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			return $this->response(['error'=>$e->getMessage()], 404);
		}

	}



}
