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
 * 系统版本
 */
interface ZxtProductTypeRpcServiceInterface
{
    /**
     * 系统版本列表
     *
     * @return array
     */
    public function getProductTypeList(): array;

    /**
     * 获取系统版本详情
     *
     * @param array $params
     *
     * @return array
     */
    public function getProductTypeDetail(array $params): array;

}