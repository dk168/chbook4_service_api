<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/6/16
 * Time: 18:02
 * Features:
 */
namespace Chbook4\ServiceApi;

interface StocktakingRpcServiceInterface
{
    /**
     * 盘点计划-获取列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getPlanList(array $params): array;

    /**
     * 盘点计划-获取详情
     *
     * @param int $id
     *
     * @return array
     */
    public function getPlanDetail(int $id): array;

    /**
     * 盘点计划-新增/编辑
     *
     * @param array $params
     *
     * @return array
     */
    public function createOrUpdatePlanIndex(array $params): array;

    /**
     * 盘点初始化
     *
     * @param string $s_id
     *
     * @return array
     */
    public function initialize(string $s_id): array;

    /**
     * 盘点录入-获取列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getItemList(array $params): array;

    /**
     * 盘点录入-统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getItemCount(array $params): array;

    /**
     * 盘点录入-未盘列表查询
     *
     * @param array $params
     *
     * @return array
     */
    public function getNotItemList(array $params): array;

    /**
     * 盘点录入-详情
     *
     * @param int $id
     *
     * @return array
     */
    public function getItemDetail(int $id): array;

    /**
     * 盘点录入-新增/编辑
     *
     * @param array $params
     *
     * @return array
     */
    public function createOrUpdateItem(array $params): array;

    /**
     * 盘点录入-审核
     *
     * @param string $ids
     *
     * @return array
     */
    public function setItemAudit(string $ids = ''): array;

    /**
     * 取消审核
     *
     * @param string $ids
     *
     * @return array
     */
    public function cancelItemAudit(string $ids = ''): array;

    /**
     * 盘点处理-列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getWaitList(array $params): array;

    /**
     * 盘点处理-统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getWaitCount(array $params): array;

    /**
     * 盘点开始处理
     *
     * @param string $s_id
     *
     * @return array
     */
    public function setHandle(string $s_id): array;

    /**
     * 盘点处理-设置折扣
     *
     * @param string $ids
     * @param float  $h_discount
     *
     * @return array
     */
    public function setItemDiscount(string $ids, float $h_discount): array;

    /**
     * 完成盘点
     *
     * @param string $s_id
     *
     * @return array
     */
    public function complete(string $s_id): array;

    /**
     * 盘点历史-列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getHistoryList(array $params): array;

    /**
     * 盘点历史-统计
     *
     * @param array $params
     *
     * @return array
     */
    public function getHistoryCount(array $params): array;
}