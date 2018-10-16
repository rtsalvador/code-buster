<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AuthorsDAO.class.php');
	require_once('class/dto/Author.class.php');
	require_once('class/mysql/AuthorsMySqlDAO.class.php');
	require_once('class/mysql/ext/AuthorsMySqlExtDAO.class.php');
	require_once('class/dao/PostsDAO.class.php');
	require_once('class/dto/Post.class.php');
	require_once('class/mysql/PostsMySqlDAO.class.php');
	require_once('class/mysql/ext/PostsMySqlExtDAO.class.php');

?>