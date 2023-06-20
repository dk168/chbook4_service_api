<?php

/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2023/5/10
 * Time: 13:38
 * Features:
 */
namespace Chbook4\ServiceApi;


interface YouZanRpcServiceInterface
{
    /**
     * 创建会员卡
     *
     * @param array $params
     *
     * @return array
     */
    public function createMember(array $params): array;

    /**
     * 会员卡详情
     *
     * @param array $params
     *
     * @return array
     */
    public function getMemberDetail(array $params): array;

    /**
     * 获取可用的储值卡
     *
     * @param array $params
     *
     * @return array
     */
    public function getMemberCard(array $params): array;

    /**
     * 获取该商家的会员等级模版列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getLevelList(array $params): array;

    /**
     * 设置会员等级
     *
     * @param array $params
     *
     * @return array
     */
    public function memberLevelSet(array $params): array;

    /**
     * 修改会员基本信息
     *
     * @param array $params
     *
     * @return array
     */
    public function updateMemberInfo(array $params): array;

    /**
     * 给用户加积分
     *
     * @param array $params
     *
     * @return array
     */
    public function memberPointsIncrease(array $params): array;

    /**
     * 给用户减积分
     *
     * @param array $params
     *
     * @return array
     */
    public function memberPointsDecrease(array $params): array;

    /**
     * 给用户加成长值
     *
     * @param array $params
     *
     * @return array
     */
    public function memberGrowthIncrease(array $params): array;

    /**
     * 给用户减成长值
     *
     * @param array $params
     *
     * @return array
     */
    public function memberGrowthDecrease(array $params): array;

    /**
     * 获取总店站点
     *
     * @param string $host
     *
     * @return array
     */
    public function getMainStation(string $host): array;

    /**
     * 修改会员余额
     *
     * @param array $params
     *
     * @return array
     */
    public function updateMemberBalance(array $params): array;

    /**
     * 会员余额充值
     *
     * @param array $params
     *
     * @return array
     */
    public function rechargeMemberBalance(array $params): array;

    /**
     * 触发会员同步信息投递
     *
     * @param string $host
     * @param int    $m_id
     *
     * @return array
     */
    public function producer(string $host, int $m_id = 0): array;

    /**
     * 获取所有已开通有赞的站点
     *
     * @param string $host
     *
     * @return array
     */
    public function getStationALL(string $host): array;

    /**
     * 获取接口访问数
     *
     * @return array
     */
    public function getVisitsNumber(): array;

    /**
     * 解密二维码一维码
     *
     * @param array $params
     *
     * @return array
     */
    public function getOpenIdByCode(array $params): array;

    /**
     * 商品新增接口
     *
     * @param array $params
     *
     * @return array
     */
    public function goodsAdd(array $params): array;

    /**
     * 增量更新商品信息接口
     *
     * @param array $params
     *
     * @return array
     */
    public function goodsUpdate(array $params): array;

    /**
     * 删除商品
     *
     * @param array $h_ids
     *
     * @return array
     */
    public function deleteGoods(array $h_ids): array;

    /**
     * 总店修改分店sku信息
     *
     * @param array $params
     *
     * @return array
     */
    public function goodsStockUpdate(array $params): array;

    /**
     * 根据动态码获取会员ids
     *
     * @param      $kdt_id
     * @param      $code
     * @param      $is_gift
     *
     * @return array
     */
    public function getMIdsByCode($kdt_id, $code, $is_gift): array;

    /**
     * 通知处理
     *
     * @param array  $data
     * @param string $client_id
     * @param string $type
     * @param string $signature
     * @param bool   $is_verify_sign
     *
     * @return array
     */
    public function notificationHandle(array $data, string $client_id, string $type, string $signature, bool $is_verify_sign = true): array;

    /**
     * 获取有赞图片id
     *
     * @param string $img_url
     *
     * @return array
     */
    public function getImageId(string $img_url): array;

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
     * 发起商品处理队列请求
     *
     * @param string $host
     * @param        $ids
     * @param string $actionType
     *
     * @return array
     */
    public function producerGoods(string $host, $ids, string $actionType): array;
}