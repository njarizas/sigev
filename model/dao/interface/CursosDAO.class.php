<?php

/**
 * 
 *
 * @author: http://phpdao.com
 * @date: 2016-07-24 18:58
 */
interface CursosDAO {

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @Return Cursos 
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
     * @param curso primary key
     */
    public function delete($idCurso);

    /**
     * Insert record to table
     *
     * @param Cursos curso
     */
    public function insert($curso);

    /**
     * Update record in table
     *
     * @param Cursos curso
     */
    public function update($curso);

    /**
     * Delete all rows
     */
    public function clean();

    public function queryByNombreCurso($value);

    public function deleteByNombreCurso($value);
}

?>