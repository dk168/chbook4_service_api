<?php

/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/10/13
 * Time: 16:16
 * Features:
 */
namespace Chbook4\ServiceApi;


/**
 * 报订单
 *
 */
interface BOrderRpcServiceInterface
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
     * 关闭订单
     *
     * @param int $id
     *
     * @return array
     */
    public function closeJh(int $id): array;

    /**
     * 获取报订单内报分发记录
     *
     * @param int $bd_item_id
     *
     * @return array
     */
    public function getNbHandList(int $bd_item_id): array;

    /**
     * 获取报订单内报记录
     *
     * @param int $bd_id
     *
     * @return array
     */
    public function getNbList(int $bd_id): array;

    /**
     * 获取供应商报订单列表
     *
     * @param int    $f_id
     * @param int    $page
     * @param int    $pageSize
     * @param string $station_id
     *
     * @return array
     */
    public function getListByF(int $f_id, int $page, int $pageSize, string $station_id): array;

    /**
     * 获取报订商品列表
     *
     * @param int $f_id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function getDetailByO(int $f_id, int $page, int $pageSize): array;

    /**
     * 修改备注
     *
     * @param array $params
     *
     * @return array
     */
    public function saveRemark(array $params): array;
}