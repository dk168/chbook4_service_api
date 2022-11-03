<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/7/5
 * Time: 17:55
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 调剂差错单
 */
interface DispensingRpcServiceInterface
{
    /**
     * 获取列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getList(array $params): array;

    /**
     * 统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getCount(array $params): array;

    /**
     * 编辑详情
     *
     * @param array $params
     *
     * @return array
     */
    public function updateItem(array $params): array;

    /**
     * 获取详情列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getDetail(array $params): array;

    /**
     * 批量处理
     *
     * @param string $ids
     *
     * @return array
     */
    public function setHandle(string $ids): array;
}