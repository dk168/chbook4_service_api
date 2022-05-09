<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/4/26
 * Time: 10:50
 * Features:
 */

namespace Chbook4\ServiceApi;


interface JdClientServiceInterface {
    /**
     * 图书商品全量查询接口
     *
     * @param array $params
     *
     * @return array
     */
    public function skuSearchBooks(array $params): array;

    /**
     * 查询商品详情
     *
     * @param array $params
     *
     * @return array
     */
    public function batchGetSkuInfo(array $params): array;

    /**
     * 查询图书音像基本信息
     *
     * @param array $params
     *
     * @return array
     */
    public function queryBookVideoBasicField(array $params): array;

    /**
     * 图书大字段接口查询
     *
     * @param array $params
     *
     * @return array
     */
    public function queryBookVideoBigField(array $params): array;

    /**
     * 查询图书图片
     *
     * @param array $params
     *
     * @return array
     */
    public function queryImage(array $params): array;

    /**
     * 查询图书价格
     *
     * @param string $sku_id
     *
     * @return array
     */
    public function getPrice(string $sku_id): array;
}