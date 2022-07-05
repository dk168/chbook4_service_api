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
 * 配送/店面
 */
interface DeliveryRpcServiceInterface
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
     * @param bool  $is_in 是否入库单
     *
     * @return array
     */
    public function getDetail(array $params, bool $is_in = false): array;

    /**
     * 获取单条信息
     *
     * @param int    $id
     * @param string $sn
     * @param bool   $is_in 是否入库单
     *
     * @return array
     */
    public function getOne(int $id, string $sn = '', bool $is_in = false): array;

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

    /**
     * 打包列表
     *
     * @param int $dis_id
     * @param int $page
     * @param int $pageSize
     *
     * @return array
     */
    public function packageList(int $dis_id, int $page = 1, int $pageSize = 500): array;

    /**
     * 打包
     *
     * @param int   $dis_id
     * @param array $data id详情表id、amount打包数量、package_no包号
     *
     * @return array
     */
    public function package(int $dis_id, array $data): array;

    /**
     * 删除打包记录
     *
     * @param int $dis_id
     *
     * @return array
     */
    public function deletePackageNo(int $dis_id): array;

    /**
     * 查询包件打印信息
     *
     * @param int    $dis_id
     * @param string $package_nos
     * @param int    $type 获取类型 1包件信息 2商品信息
     *
     * @return array
     */
    public function getPackageInfo(int $dis_id, string $package_nos = '', int $type = 1): array;

    /**
     * 修改对方发货信息
     *
     * @param array $params
     *
     * @return array
     */
    public function editSendInfo(array $params): array;
}