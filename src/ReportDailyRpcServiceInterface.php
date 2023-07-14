<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2023/6/6
 * Time: 16:23
 * Features:
 */
namespace Chbook4\ServiceApi;


/**
 * 日报统计相关
 */
interface ReportDailyRpcServiceInterface
{
    /**
     * 日报-目标营业额列表
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyTargetList(array $each): array;

    /**
     * 日报-保存目标营业额
     *
     * @param array  $data
     * @param string $o_id_edit
     *
     * @return array
     */
    public function saveDailyTarget(array $data, string $o_id_edit): array;

    /**
     * 日报-获取历史营业额列表
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyTargetItemList(array $each): array;

    /**
     * 日报-获取历史营业额统计
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyTargetItemCount(array $each): array;

    /**
     * 日报-统计数据
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyCount(array $each): array;

    /**
     * 日报-收款方式
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyPayType(array $each): array;

    /**
     * 日报-客单价统计
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyCustPrice(array $each): array;

    /**
     * 日报-用户访问统计
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyAccessLog(array $each): array;

    /**
     * 日报-排行榜
     *
     * @param array $each
     *
     * @return array
     */
    public function getDailyRanking(array $each): array;


}