<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2023/8/14
 * Time: 13:40
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 消息推送相关
 */
interface JuShuiTanRpcServiceInterface
{
    /**
     * 发起商品处理队列请求
     *
     * @param string $host
     * @param        $ids
     * @param string $actionType
     *
     * @return array
     */
    public function producerGoods(string $host, $ids, string $actionType): array;

    /**
     * 更新或者新增商品
     *
     * @param array $params
     *
     * @return array
     */
    public function updateOrInsertGoods(array $params): array;

    /**
     * 更新商品库存
     *
     * @param array $params
     *
     * @return array
     */
    public function updateGoodsStock(array $params): array;

    /**
     * 删除商品
     *
     * @param array $h_ids
     *
     * @return array
     */
    public function deleteGoods(array $h_ids): array;

    /**
     * 通知处理
     *
     * @param array $data
     *
     * @return array
     */
    public function notificationHandle(array $data): array;

    /**
     * 设置access_token
     *
     * @param string $host
     *
     * @return array
     */
    public function setAccessToken(string $host): array;
}