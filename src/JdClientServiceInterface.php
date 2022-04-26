<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/4/26
 * Time: 10:50
 * Features:
 */

namespace Chbook4\ServiceApi;


interface JdClientServiceInterface {
    public function queryBooks(array $params): array;

    /**
     * 查询
     *
     * @param array $params
     *
     * @return array
     */
    public function skuSearchBooks(array $params): array;
}