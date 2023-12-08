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
 * 客户信息
 */
interface ZxtClientRpcServiceInterface
{
    /**
     * 获取客户信息
     *
     * @param string $client_host
     *
     * @return array
     */
    public function getClientInfo(string $client_host): array;

    /**
     * 获取客户菜单权限
     *
     * @param array $params
     *
     * @return array
     */
    public function getClientMenu(array $params): array;

    /**
     * 获取客户其它权限列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getClientJurisdiction(array $params): array;

}