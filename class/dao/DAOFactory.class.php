<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AuthorsDAO
	 */
	public static function getAuthorsDAO(){
		return new AuthorsMySqlExtDAO();
	}

	/**
	 * @return PostsDAO
	 */
	public static function getPostsDAO(){
		return new PostsMySqlExtDAO();
	}


}
?>