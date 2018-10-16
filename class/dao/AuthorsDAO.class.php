<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-10-16 05:00
 */
interface AuthorsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Authors 
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
 	 * @param author primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Authors author
 	 */
	public function insert($author);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Authors author
 	 */
	public function update($author);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFirstName($value);

	public function queryByLastName($value);

	public function queryByEmail($value);

	public function queryByBirthdate($value);

	public function queryByAdded($value);


	public function deleteByFirstName($value);

	public function deleteByLastName($value);

	public function deleteByEmail($value);

	public function deleteByBirthdate($value);

	public function deleteByAdded($value);


}
?>