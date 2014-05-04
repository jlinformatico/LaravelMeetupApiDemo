<?php

class AuthorsController extends ApiController {



	function __construct(Author $author){
		$this->author = $author;
	}

	/**
	 * Display a listing of authors
	 *
	 * @return Response
	 */
	public function index()
	{

		$authors = $this->author->all();

		return $this->response($authors);
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$author = $this->author->with('posts')->findOrFail($id);

		return $this->response($author);
	}

	

}
