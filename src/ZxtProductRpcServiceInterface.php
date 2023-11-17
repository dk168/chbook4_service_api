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
 * 产品
 */
interface ZxtProductRpcServiceInterface
{
    /**
     * 应用市场产品列表
     *
     * @return array
     */
    public function getProductList(): array;

    /**
     * 获取产品详情
     *
     * @param array $params
     *
     * @return array
     */
    public function getProductDetail(array $params): array;

}