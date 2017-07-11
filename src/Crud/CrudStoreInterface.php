<?php

namespace Simplon\Mysql\Crud;

use Simplon\Mysql\QueryBuilder\CreateQueryBuilder;
use Simplon\Mysql\QueryBuilder\DeleteQueryBuilder;
use Simplon\Mysql\QueryBuilder\ReadQueryBuilder;
use Simplon\Mysql\QueryBuilder\UpdateQueryBuilder;

/**
 * @package Simplon\Mysql\Crud
 */
interface CrudStoreInterface
{
    /**
     * @return string
     */
    public function getTableName(): string;

    public function getModel();

    public function create(CreateQueryBuilder $builder);

    public function read(?ReadQueryBuilder $builder = null): ?array;

    public function readOne(ReadQueryBuilder $builder);

    public function update(UpdateQueryBuilder $builder);

    public function delete(DeleteQueryBuilder $builder);
}
