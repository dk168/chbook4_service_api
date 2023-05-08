<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/6/16
 * Time: 17:51
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 直接到货/预定到货//退货管理
 */
interface DirectArrivalRpcServiceInterface
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
     * @param int   $id
     * @param int   $page
     * @param int   $pageSize
     * @param bool  $get_jt_info 是否获取退货的冲减信息
     * @param array $detail      主表信息
     * @param bool  $is_get_img
     *
     * @return array
     */
    public function getItemList(int $id, int $page = 1, int $pageSize = 500, bool $get_jt_info = false, array $detail = [], bool $is_get_img = false): array;

    /**
     * 审核
     *
     * @param string $ids
     *
     * @return array
     */
    public function setAudit(string $ids): array;

    /**
     * 入库
     *
     * @param string $ids
     * @param int    $notice 是否发送通知 0否 1是
     *
     * @return array
     */
    public function setWarehousing(string $ids, int $notice = 1): array;

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
     * 承付
     *
     * @param string $ids
     * @param int    $notice 是否发送通知 0否 1是
     *
     * @return array
     */
    public function setPay(string $ids, int $notice = 1): array;

    /**
     * 反承付
     *
     * @param string $ids
     * @param int    $notice 是否发送通知 0否 1是
     *
     * @return array
     */
    public function setPayDestroy(string $ids, int $notice = 1): array;

    /**
     * 修改单据折扣
     *
     * @param int   $id
     * @param array $data id:详情id h_discount:折扣 f_discount:供应商折扣
     *
     * @return array
     */
    public function editDiscount(int $id, array $data): array;

    /**
     * 修改供应商
     *
     * @param int $id
     * @param int $f_id
     *
     * @return array
     */
    public function editFactory(int $id, int $f_id): array;

    /**
     * 修改对方发货信息
     *
     * @param array $params
     *
     * @return array
     */
    public function editFactoryInfo(array $params): array;

    /**
     * 获取到货单商品品种折扣列表
     *
     * @param int $dh_id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function getGoodsTypeDiscount(int $dh_id, int $page = 1, int $pageSize = 500): array;

    /**
     * 到货-查看指定到货单、费用单的付款单列表
     *
     * @param int $dh_id
     * @param int $type
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function getDhFkList(int $dh_id, int $type = 1, int $page = 1, int $pageSize = 500): array;

    /**
     * 预定到货-内报分发列表
     *
     * @param int $id
     *
     * @return array
     */
    public function getItemListByNB(int $id): array;

    /**
     * 预定到货-溢出分发列表
     *
     * @param int    $item_id
     * @param string $type_id 商品分类id
     *
     * @return array
     */
    public function getItemListBySa(int $item_id, string $type_id): array;

    /**
     * 预定到货-分发保存
     *
     * @param int   $item_id 详情id
     * @param int   $type    类别 1正常分发 2溢出分发
     * @param array $data    分发数据 id:分发ID nb_item_id:内报ID h_amount:数量 sta_id:站点 c_id:客户 h_discount:折扣
     *
     * @return array
     */
    public function setHand(int $item_id, int $type = 2, array $data = []): array;

    /**
     * 预定到货-重置分发
     *
     * @param int $item_id
     *
     * @return array
     */
    public function resetHand(int $item_id): array;

    /**
     * 预定到货-分发审核
     *
     * @param int    $id
     * @param string $item_ids
     *
     * @return array
     */
    public function setAuditHand(int $id, string $item_ids): array;

    /**
     * 预定到货-直接配送
     *
     * @param int    $id
     * @param string $item_ids
     *
     * @return array
     */
    public function setPsItem(int $id, string $item_ids): array;

    /**
     * 预定到货-单品分发详情
     *
     * @param int $id
     *
     * @return array
     */
    public function getItemHandList(int $id): array;

    /**
     * 预定到货-锁定或取消锁定分发
     *
     * @param int $id
     * @param int $type 类型 1取消锁定 2锁定
     *
     * @return array
     */
    public function lockHand(int $id, int $type = 1): array;

    /**
     * 到货单作废 还原报订单、内报单、要货单分发数量、收订单分发数量
     *
     * @param int   $dh_id
     * @param array $dh_info
     *
     * @return array
     */
    public function replyHandAmount(int $dh_id, array $dh_info = []): array;

    /**
     * 预定到货-获取征订商品列表
     *
     * @param int $id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function getZdDetail(int $id, int $page = 1, int $pageSize = 50): array;

    /**
     * 进货退货-获取进货购买记录
     *
     * @param array $params
     *
     * @return array
     */
    public function getGoodsBuyInfo(array $params): array;

    /**
     * 进货退货-获取商品总可退数量
     *
     * @param array $params
     *
     * @return array
     */
    public function getGoodsJhKtAmount(array $params): array;

    /**
     * 进货退货-获取自动冲减信息
     *
     * @param array $params
     *
     * @return array
     */
    public function getAutoJtInfo(array $params): array;

    /**
     * 退货发货-打包列表
     *
     * @param int $dh_id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function packageList(int $dh_id, int $page = 1, int $pageSize = 500): array;

    /**
     * 退货发货-打包
     *
     * @param int   $dh_id
     * @param array $list id详情表id、amount打包数量、package_no包号
     *
     * @return array
     */
    public function package(int $dh_id, array $list): array;

    /**
     * 退货发货-删除打包记录
     *
     * @param int $dh_id
     *
     * @return array
     */
    public function deletePackageNo(int $dh_id): array;

    /**
     * 退货发货-查询包件打印信息
     *
     * @param int   $dh_id
     * @param array $package_nos
     * @param int   $type 获取类型 1包件信息 2商品信息
     *
     * @return array
     */
    public function getPackageInfo(int $dh_id, array $package_nos = [], int $type = 1): array;

    /**
     * 获取退货冲减记录
     *
     * @param int  $item_id
     * @param bool $get_kt 获取可退数量
     *
     * @return array
     */
    public function getJtInfo(int $item_id, bool $get_kt = false): array;

    /**
     * 对账
     *
     * @param array $data
     *
     * @return array
     */
    public function reconciliation(array $data): array;
}