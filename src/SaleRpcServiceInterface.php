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
 * 销售订单
 */
interface SaleRpcServiceInterface
{
    /**
     * 销售订单-获取列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getList(array $params): array;

    /**
     * 销售订单-获取统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getCount(array $params): array;

    /**
     * 销售订单-获取详情
     *
     * @param array $params
     *
     * @return array
     */
    public function getDetail(array $params): array;

    /**
     * 销售订单-获取主表信息
     *
     * @param int    $id
     * @param string $sn
     *
     * @return array
     */
    public function getOne(int $id, string $sn = ''): array;

    /**
     * 销售订单-获取商品明细
     *
     * @param int    $id
     * @param string $s_id
     * @param bool   $is_shelf_scatter 是否查询架位分布
     * @param int    $page
     * @param int    $pageSize
     * @param array  $detail
     * @param bool   $is_get_img
     *
     * @return array
     */
    public function getItemList(int $id, string $s_id = '', bool $is_shelf_scatter = false, int $page = 1, int $pageSize = 500, array $detail = [], bool $is_get_img = false): array;

    /**
     * 销售订单-新增/编辑
     *
     * @param array $params
     *
     * @return array
     */
    public function createOrUpdateIndex(array $params): array;

    /**
     * 销售订单-新增/编辑详情
     *
     * @param array $params
     *
     * @return array
     */
    public function createOrUpdateItem(array $params): array;

    /**
     * 销售订单-审核
     *
     * @param string $ids
     *
     * @return array
     */
    public function setAudit(string $ids): array;

    /**
     * 销售订单-作废
     *
     * @param int $id
     *
     * @return array
     */
    public function setDestroy(int $id): array;

    /**
     * 销售订单-恢复
     *
     * @param int $id
     *
     * @return array
     */
    public function setReply(int $id): array;

    /**
     * 锁定库存
     *
     * @param int    $id
     * @param string $s_id_out
     * @param array  $data
     *
     * @return array
     */
    public function lockStock(int $id, string $s_id_out, array $data): array;

    /**
     * 解锁库存
     *
     * @param int $id
     *
     * @return array
     */
    public function unlockStock(int $id): array;

    /**
     * 设为按品种拣货
     *
     * @param string $ids
     *
     * @return array
     */
    public function setJhTypeGoods(string $ids): array;

    /**
     * 修改优先级别
     *
     * @param string $ids
     * @param int    $priority_level
     *
     * @return array
     */
    public function editPriorityLevel(string $ids, int $priority_level): array;

    /**
     * 获取拣货商品列表
     *
     * @param int    $id
     * @param string $s_id_out
     * @param int    $page
     * @param int    $pageSize
     *
     * @return array
     */
    public function getJhList(int $id, string $s_id_out, int $page = 1, int $pageSize = 500): array;

    /**
     * 销售订单-拣货审核
     *
     * @param int    $id
     * @param string $s_id_out
     * @param int    $type
     * @param array  $data
     *
     * @return array
     */
    public function setWarehousing(int $id, string $s_id_out, int $type, array $data = []): array;

    /**
     * 销售订单-生成内报
     *
     * @param string $ids
     * @param array  $user_info
     *
     * @return array
     */
    public function setNB(string $ids, array $user_info = []): array;

    /**
     * 关闭拣货
     *
     * @param int $id
     *
     * @return array
     */
    public function closeJh(int $id): array;

    /**
     * 锁定拣货或取消锁定拣货
     *
     * @param int $id
     * @param int $type 类型 1取消锁定 2锁定
     *
     * @return array
     */
    public function lockJh(int $id, int $type = 1): array;

    /**
     * 指定拣货
     *
     * @param int    $id
     * @param string $o_id
     *
     * @return array
     */
    public function appointLockJh(int $id, string $o_id): array;

    /**
     * 销售订单按品种拣货-列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getAuListByG(array $params): array;

    /**
     * 销售订单按品种拣货-获取商品最大可分拣数
     *
     * @param int $h_id
     *
     * @return array
     */
    public function getPickingMaxAmount(int $h_id): array;

    /**
     * 销售订单按品种拣货-保存架位信息
     *
     * @param int   $h_id
     * @param array $data
     *
     * @return array
     */
    public function savePickingShelf(int $h_id, array $data): array;

    /**
     * 销售订单按品种拣货-获取分发情况
     *
     * @param string $s_id
     * @param int    $h_id
     * @param int    $page
     * @param int    $pageSize
     *
     * @return array
     */
    public function getPickingHand(string $s_id, int $h_id, int $page = 1, int $pageSize = 500): array;

    /**
     * 销售订单按品种拣货-分发数量
     *
     * @param int   $h_id
     * @param array $data
     *
     * @return array
     */
    public function setPickingHand(int $h_id, array $data): array;

    /**
     * 销售订单按品种拣货-删除分发记录
     *
     * @param string $h_ids
     *
     * @return array
     */
    public function deletePickingHand(string $h_ids): array;

    /**
     * 销售订单按品种拣货-打印分发记录表
     *
     * @param string $h_ids
     *
     * @return array
     */
    public function getHandDetailList(string $h_ids): array;

    /**
     * 销售订单按品种拣货-生成预留批销单
     *
     * @param string $h_ids
     * @param int    $type 1预留 2批销
     *
     * @return array
     */
    public function setWarehousingByG(string $h_ids, int $type = 2): array;

}