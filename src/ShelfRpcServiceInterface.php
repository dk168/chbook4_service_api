<?php

/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/7/1
 * Time: 14:02
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 单据上下架
 */
interface ShelfRpcServiceInterface
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
     * 搜索单据
     *
     * @param array $params
     *
     * @return array
     */
    public function searchBill(array $params): array;

    /**
     * 获取上架列表详情
     *
     * @param mixed  $id 单据id或单号
     * @param string $type
     * @param int    $page
     * @param int    $pageSize
     * @param bool   $is_get_img
     *
     * @return array
     */
    public function getUpList($id, string $type = '', int $page = 1, int $pageSize = 500, bool $is_get_img = false): array;

    /**
     * 上架
     *
     * @param mixed  $id    原单据id或单号
     * @param int    $sj_id 上架单id
     * @param string $type  单据类型
     * @param string $list  json  id 详情ID, h_id 商品ID, shelf_id 架位ID, h_amount 数量
     *
     * @return array
     */
    public function setUpShelf($id, int $sj_id, string $list, string $type = ''): array;

    /**
     * 获取下架列表详情
     *
     * @param mixed  $id
     * @param string $type
     * @param int    $page
     * @param int    $pageSize
     * @param bool   $is_get_img
     * @param string $s_id
     * @param int    $jh_type //拣货类型 1最小数量推荐 2最大数量推荐 3架号顺序推荐
     *
     * @return array
     */
    public function getDownList($id, string $type = '', int $page = 1, int $pageSize = 500, bool $is_get_img = false, string $s_id = '', int $jh_type = 0): array;

    /**
     * 下架
     *
     * @param mixed  $id
     * @param int    $xj_id
     * @param string $type
     * @param string $list
     *
     * @return array
     */
    public function setDownShelf($id, int $xj_id, string $list, string $type = ''): array;

    /**
     * 获取商品架号分布列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getGoodsShelfList(array $params): array;

    /**
     * 获取商品架号分布统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getGoodsShelfCount(array $params): array;

    /**
     * 架号流水
     *
     * @param array $params
     *
     * @return array
     */
    public function getShelfAmountRunList(array $params): array;

    /**
     * 架上数量调整
     *
     * @param int    $h_id
     * @param string $shelf_id
     * @param int    $amount
     * @param int    $is_add
     *
     * @return array
     */
    public function adjustAmount(int $h_id, string $shelf_id, int $amount, int $is_add = 1): array;

    /**
     * 批量架上数量调整-生成调架单
     *
     * @param array $data
     * @param int   $is_add
     *
     * @return array
     */
    public function batchAdjustAmount(array $data, int $is_add = 1): array;

    /**
     * 自动下架对应批销单、调拨单
     *
     * @param int    $id        单据id
     * @param int    $type      类型 1收订拣货 2要货拣货 3退货拣货
     * @param string $bill_type 单据类型PX、PS、TK、DB
     * @param array  $user_info
     *
     * @return array
     */
    public function autoDownShelf(int $id, int $type, string $bill_type, array $user_info): array;

    /**
     * 获取指定商品的架号数量分布
     *
     * @param array     $params  查询参数 h_id必传 station_id s_id
     * @param int|array $type    架位类型 0不限 1正常架 2退货架 3残损架
     * @param int       $jh_type 架位推荐类型 1最小数量推荐 2最大数量推荐 3架号顺序推荐
     * @param int       $limit
     *
     * @return array
     */
    public function getShelfAmountScatter(array $params, $type = 0, int $jh_type = 0, int $limit = 500): array;
}