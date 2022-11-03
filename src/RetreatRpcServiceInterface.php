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
 * 退库
 */
interface RetreatRpcServiceInterface
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
     *
     * @return array
     */
    public function createOrUpdateIndex(array $params): array;

    /**
     * 新增/编辑详情
     *
     * @param array $params
     *
     * @return array
     */
    public function createOrUpdateItem(array $params): array;

    /**
     * 编辑入库详情
     *
     * @param array $params
     *
     * @return array
     */
    public function updateInItem(array $params): array;

    /**
     * 获取详情列表
     *
     * @param array $params
     * @param bool  $is_in
     *
     * @return array
     */
    public function getDetail(array $params, bool $is_in = false): array;

    /**
     * 获取单条信息
     *
     * @param int    $id
     * @param string $sn
     * @param bool   $is_in
     *
     * @return array
     */
    public function getOne(int $id, string $sn = '', bool $is_in = false): array;

    /**
     * 获取商品列表
     *
     * @param int  $id
     * @param int  $page
     * @param int  $pageSize
     * @param bool $is_get_img
     *
     * @return array
     */
    public function getItemList(int $id, int $page = 1, int $pageSize = 500, bool $is_get_img = false): array;

    /**
     * 审核
     *
     * @param string $ids
     *
     * @return array
     */
    public function setAudit(string $ids): array;

    /**
     * 批量出库
     *
     * @param string $ids
     *
     * @return array
     */
    public function setWarehousing(string $ids): array;

    /**
     * 批量入库
     *
     * @param string $ids
     *
     * @return array
     */
    public function setWarehousingIn(string $ids): array;

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