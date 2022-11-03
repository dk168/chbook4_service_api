<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/7/5
 * Time: 17:57
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 现货批销/批销退货
 */
interface WholesaleRpcServiceInterface
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
     * @param bool  $manual_input 是否手动录入
     *
     * @return array
     */
    public function createOrUpdateItem(array $params, bool $manual_input = false): array;

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
     * @param int   $id
     * @param int   $page
     * @param int   $pageSize
     * @param bool  $get_xt_info      是否获取退货的冲减信息
     * @param bool  $is_shelf_scatter 是否查询架位分布
     * @param array $detail           主表信息
     * @param bool  $is_get_img
     *
     * @return array
     */
    public function getItemList(int $id, int $page = 1, int $pageSize = 500, bool $get_xt_info = false, array $detail = [], bool $is_shelf_scatter = false, bool $is_get_img = false): array;

    /**
     * 获取商品批销记录统计
     *
     * @param string $h_ids
     * @param int    $c_id
     *
     * @return array
     */
    public function getHistoryCount(string $h_ids, int $c_id): array;

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
     * 批量出/入库
     *
     * @param string $ids
     * @param int    $notice
     *
     * @return array
     */
    public function setWarehousing(string $ids, int $notice): array;

    /**
     * 批量承收/承付
     *
     * @param string $ids
     *
     * @return array
     */
    public function setPay(string $ids): array;

    /**
     * 批量反承收/承付
     *
     * @param string $ids
     *
     * @return array
     */
    public function setPayDestroy(string $ids): array;

    /**
     * 修改单据折扣
     *
     * @param int   $id
     * @param array $data id详情id，h_discount折扣,refund_rate退货百分比,refund_term退货期限，单位天
     *
     * @return array
     */
    public function editDiscount(int $id, array $data): array;

    /**
     * 修改客户
     *
     * @param int $id
     * @param int $c_id
     *
     * @return array
     */
    public function editClient(int $id, int $c_id): array;

    /**
     * 修改发货信息
     *
     * @param array $params
     *
     * @return array
     */
    public function editSendInfo(array $params): array;

    /**
     * 打包列表
     *
     * @param int $px_id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function packageList(int $px_id, int $page = 1, int $pageSize = 500): array;

    /**
     * 打包
     *
     * @param int   $px_id
     * @param array $data id批销详情表id、amount打包数量、package_no包号
     *
     * @return array
     */
    public function package(int $px_id, array $data): array;

    /**
     * 删除打包记录
     *
     * @param int $px_id
     *
     * @return array
     */
    public function deletePackageNo(int $px_id): array;

    /**
     * 查看指定批销单、费用单的收款单列表
     *
     * @param int $px_id
     * @param int $type 单据类型 1批销单 2费用单
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function getPxSkList(int $px_id, int $type = 1, int $page = 1, int $pageSize = 500): array;

    /**
     * 查询包件打印信息
     *
     * @param int    $px_id
     * @param string $package_nos
     * @param int    $type 获取类型 1包件信息 2商品信息
     *
     * @return array
     */
    public function getPackageInfo(int $px_id, string $package_nos = '', int $type = 1): array;

    /**
     * 获取商品批销记录
     *
     * @param int    $h_id
     * @param int    $c_id
     * @param string $station_id
     * @param string $order_field
     * @param string $order_by
     *
     * @return array
     */
    public function getGoodsBuyInfo(int $h_id, int $c_id, string $station_id, string $order_field = '', string $order_by = ''): array;

    /**
     * 获取商品批销可退数量
     *
     * @param string $h_ids
     * @param int    $c_id
     * @param string $station_id
     * @param string $order_field
     * @param string $order_by
     *
     * @return array
     */
    public function getGoodsPxKtAmount(string $h_ids, int $c_id, string $station_id, string $order_field = '', string $order_by = ''): array;

    /**
     * 获取自动冲减信息
     *
     * @param array  $data
     * @param int    $c_id
     * @param string $station_id
     * @param string $order_field
     * @param string $order_by
     *
     * @return array
     */
    public function getAutoXtInfo(array $data, int $c_id, string $station_id, string $order_field = '', string $order_by = ''): array;
}