<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: pzl
 * Date: 2023/10/25
 * Time: 14:40
 * Features:
 */
namespace Chbook4\ServiceApi;


/**
 * 客户产品
 */
interface ZxtClientProductRpcServiceInterface
{
    /**
     * 获取客户产品列表
     *
     * @return array
     */
    public function getClientProductList(): array;

    /**
     * 修改产品其它编码
     *
     * @param array $params
     *
     * @return array
     */
    public function editClientProductCode(array $params): array;

    /**
     * 客户产品列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getProductList(array $params): array;

    /**
     * 客户产品统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getProductCount(array $params): array;
}