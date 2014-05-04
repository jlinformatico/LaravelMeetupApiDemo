<?php

class AuthorsController extends ApiController {


	function __construct(Author $author)
	{
		$this->author = $author;
	}


	public function index()
	{

		$limit = Input::get('limit', 10);

		$authors = $this->author->paginate($limit);

		return $this->response($authors->toArray());
	}


	public function show($id)
	{

		try {

			$author = $this->author->with('posts')->findOrFail($id);
			return $this->response(['data'=>$author->toArray()]);

		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e) 
		{
			return $this->response(['error'=>$e->getMessage()], 404);
		}

	}


}
