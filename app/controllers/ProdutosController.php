<?php

class ProdutosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
		return '<h1>Página de produtos!</h1>';
	}
	/**
	 *@return Response
	 */
	public function show_name($name) {
		return '<h1>O nome do produto é '.$name.'</h1>';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
		return '<h1>Mostrar formulário de cadastro de produtos</h1>';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		//
		return '<h1>Cadastrar o produto no banco de dados</h1>';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
		return '<h1>Pega o produto pelo id => '.$id.'</h1>';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
		return '<h1>Mostrar formulário para edição de produtos com o id => '.$id.'</h1>';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}
