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
 * 要货
 */
interface PurchaseRpcServiceInterface
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

    /**
     * 获取商品要货记录
     *
     * @param string $h_ids
     *
     * @return array
     */
    public function getHistoryCount(string $h_ids): array;

    /**
     * 要货拣货-拣货详情列表
     *
     * @param int    $id
     * @param string $s_id_out 拣货库房
     * @param int    $page
     * @param int    $pageSize
     *
     * @return array
     */
    public function getJhList(int $id, string $s_id_out, int $page = 1, int $pageSize = 500): array;

    /**
     * 要货拣货-拣货审核
     *
     * @param int    $id       要货ID
     * @param string $s_id_out 调出库房-正常库房
     * @param array  $list     id 商品ID,amount 数量，shelf_list[shelf_id、amount]架号下架分布
     * @param int    $type     1 预留发货；2 直接配送
     *
     * @return array
     */
    public function setWarehousing(int $id, string $s_id_out, array $list, int $type = 2): array;

    /**
     * 要货拣货-生成内报
     *
     * @param string $ids
     *
     * @return array
     */
    public function setNB(string $ids): array;

    /**
     * 要货拣货-关闭拣货
     *
     * @param int $id
     *
     * @return array
     */
    public function closeJh(int $id): array;

    /**
     * 要货拣货-锁定拣货或取消锁定拣货
     *
     * @param int $id
     * @param int $type 类型 1取消锁定 2锁定
     *
     * @return array
     */
    public function lockJh(int $id, int $type = 1): array;

    /**
     * 要货拣货-指定拣货
     *
     * @param int    $id
     * @param string $o_id
     *
     * @return array
     */
    public function appointLockJh(int $id, string $o_id): array;

    /**
     * 修改优先级别
     *
     * @param string $ids
     * @param int    $priority_level
     *
     * @return array
     */
    public function editPriorityLevel(string $ids, int $priority_level): array;
}