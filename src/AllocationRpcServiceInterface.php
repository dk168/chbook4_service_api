<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/7/5
 * Time: 17:54
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 调拨
 */
interface AllocationRpcServiceInterface
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
     * 新增/编辑主表信息
     *
     * @param array $params
     * @param array $user_info
     *
     * @return array
     */
    public function createOrUpdateIndex(array $params, array $user_info = []): array;

    /**
     * 新增/编辑详情
     *
     * @param array $params
     * @param array $user_info
     * @param bool  $manual_input 是否手动录入
     *
     * @return array
     */
    public function createOrUpdateItem(array $params, array $user_info = [], bool $manual_input = false): array;

    /**
     * 获取详情列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getDetail(array $params): array;

    /**
     * 获取单条信息
     *
     * @param int    $id
     * @param string $sn
     *
     * @return array
     */
    public function getOne(int $id, string $sn = ''): array;

    /**
     * 获取列表
     *
     * @param int $id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function getItemList(int $id, int $page = 1, int $pageSize = 500): array;

    /**
     * 审核
     *
     * @param string $ids
     *
     * @return array
     */
    public function setAudit(string $ids): array;

    /**
     * 批量调拨
     *
     * @param string $ids
     *
     * @return array
     */
    public function setWarehousing(string $ids): array;

    /**
     * 作废
     *
     * @param int $id
     *
     * @return array
     */
    public function setDestroy(int $id): array;

    /**
     * 恢复
     *
     * @param int $id
     *
     * @return array
     */
    public function setReply(int $id): array;
}