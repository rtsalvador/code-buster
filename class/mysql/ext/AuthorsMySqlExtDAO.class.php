<?php
/**
 * Class that operate on table 'authors'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2018-10-16 05:00
 */
class AuthorsMySqlExtDAO extends AuthorsMySqlDAO{

	public function step1() {
        $sql = "SELECT count(*) as total_row FROM authors";
        $sqlQuery = new SqlQuery($sql);
        return QueryExecutor::execute($sqlQuery);
    }

	public function step2($startPage, $perPage) {
        $sql = "SELECT * FROM authors LIMIT {$startPage}, {$perPage}";
        $sqlQuery = new SqlQuery($sql);
        return QueryExecutor::execute($sqlQuery);
    }
}
?>