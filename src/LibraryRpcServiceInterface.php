<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2023/10/7
 * Time: 16:26
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 图书馆对接相关
 */
interface LibraryRpcServiceInterface
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
     * 更新商品上下架状态
     *
     * @param array $params
     *
     * @return array
     */
    public function updatePlaneStatus(array $params): array;

    /**
     * 更新商品推荐与取消推荐
     *
     * @param array $params
     *
     * @return array
     */
    public function updateRecomStatus(array $params): array;
}