<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-10-16 05:00
 */
interface PostsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Posts 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param post primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Posts post
 	 */
	public function insert($post);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Posts post
 	 */
	public function update($post);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAuthorId($value);

	public function queryByTitle($value);

	public function queryByDescription($value);

	public function queryByContent($value);

	public function queryByDate($value);


	public function deleteByAuthorId($value);

	public function deleteByTitle($value);

	public function deleteByDescription($value);

	public function deleteByContent($value);

	public function deleteByDate($value);


}
?>