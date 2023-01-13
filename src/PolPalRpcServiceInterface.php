<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2022/7/26
 * Time: 11:22
 * Features:
 */
namespace Chbook4\ServiceApi;

/**
 * 银豹第三方对接
 */
interface PolPalRpcServiceInterface
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
     * 根据会员手机号查询会员(存在一号多会员)
     *
     * @param string $tel
     *
     * @return array
     */
    public function queryMemberByTel(string $tel): array;

    /**
     * 根据会员手机号查询会员(存在一号多会员)
     *
     * @param int $uid
     *
     * @return array
     */
    public function queryMemberByUid(int $uid): array;

    /**
     * 根据会员手机号查询会员(存在一号多会员)
     *
     * @param string $number
     *
     * @return array
     */
    public function queryMemberByNumber(string $number): array;

    /**
     * 分页查询全部会员
     *
     * @param string $type
     * @param string $value
     *
     * @return array
     */
    public function queryMemberPages(string $type = '', string $value = ''): array;

    /**
     * 修改会员基本信息
     *
     * @param array $params
     *
     * @return array
     */
    public function updateMemberInfo(array $params): array;

    /**
     * 修改会员余额积分
     *
     * @param array $params
     *
     * @return array
     */
    public function updateMemberBalanceOrIntegral(array $params): array;

    /**
     * 查询全部通用金额充值记录
     *
     * @param string $stateDate
     * @param string $endDate
     * @param string $type
     * @param string $value
     *
     * @return array
     */
    public function queryAllRechargeLogs(string $stateDate, string $endDate, string $type = '', string $value = ''): array;

    /**
     * 会员通用金额充值日志查询
     *
     * @param int $uid
     *
     * @return array
     */
    public function queryMemberRechargeLog(int $uid): array;

    /**
     * 查询所有会员分类（会员等级）
     *
     * @return array
     */
    public function queryAllMemberCategory(): array;

    /**
     * 批量修改会员类型（等级）
     *
     * @param array $params
     *
     * @return array
     */
    public function batchUpdateCategory(array $params): array;

    /**
     * 修改会员密码
     *
     * @param int    $uid
     * @param string $password
     *
     * @return array
     */
    public function updateMemberPassword(int $uid, string $password): array;

    /**
     * 查询访问量配置
     *
     * @return array
     */
    public function queryAccessTimes(): array;

    /**
     * 查询每日访问量
     *
     * @param string $beginDate 开始日期，格式yyyy-MM-dd
     * @param string $endDate   结束日期，格式yyyy-MM-dd endDate – beginDate <=7 天
     *
     * @return array
     */
    public function queryDailyAccessTimesLog(string $beginDate, string $endDate): array;

    /**
     * 查询推送地址
     *
     * @return array
     */
    public function queryPushUrl(): array;

    /**
     * 修改推送地址
     *
     * @param string $pushUrl
     *
     * @return array
     */
    public function updatePushUrl(string $pushUrl): array;

    /**
     * 根据单据序列号查询
     *
     * @param string $sn
     *
     * @return array
     */
    public function queryTicketBySn(string $sn): array;

    /**
     * 根据销售单据sn查询对应的退货单据
     *
     * @param string $sn
     *
     * @return array
     */
    public function queryRefunTicketBySellTicketSn(string $sn): array;

    /**
     * 根据退货单据sn查询对应的销售单据
     *
     * @param string $sn
     *
     * @return array
     */
    public function querySellTicketByRefunTicketSn(string $sn): array;

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
     * 获取所有已开通银豹的站点
     *
     * @param string $host
     *
     * @return array
     */
    public function getStationALL(string $host): array;

    /**
     * 获取银豹访问次数可用的站点
     *
     * @param string $host
     *
     * @return array
     */
    public function getUsableStation(string $host): array;

    /**
     * 获取接口访问数
     *
     * @param string $app_id
     * @param string $client_host
     *
     * @return array
     */
    public function getVisitsNumber(string $app_id, string $client_host): array;

    /**
     * 获取访问总次数
     *
     * @param string $client_host
     *
     * @return array
     */
    public function getVisitsNumberByHost(string $client_host): array;

    /**
     * 通知处理
     *
     * @param array  $data
     * @param string $signature
     *
     * @return array
     */
    public function notificationHandle(array $data, string $signature): array;
}