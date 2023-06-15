<?php

/**
 * Created by PhpStorm.
 * User: dk
 * Date: 2023/6/6
 * Time: 16:23
 * Features:
 */
namespace Chbook4\ServiceApi;


/**
 * 消息推送相关
 */
interface MessageRpcServiceInterface
{
    /**
     * 获取客户消息通知列表
     *
     * @param int $client_id
     *
     * @return array
     */
    public function getNotificationList(int $client_id): array;

    /**
     * 获取消息类型下拉
     *
     * @param array $params
     *
     * @return array
     */
    public function getNotificationSelectList(array $params): array;

    /**
     * 获取消息通知详情
     *
     * @param int    $client_id
     * @param string $type
     *
     * @return array
     */
    public function getNotificationInfo(int $client_id, string $type): array;

    /**
     * 保存配置信息
     *
     * @param int    $client_id
     * @param string $type
     * @param array  $params
     *
     * @return array
     */
    public function saveNotificationConfig(int $client_id, string $type, array $params): array;

    /**
     * 获取短信模板列表
     *
     * @param int   $client_id
     * @param array $params
     *
     * @return array
     */
    public function getSmsTemplateList(int $client_id, array $params): array;

    /**
     * 新增/编辑短信模板
     *
     * @param int   $client_id
     * @param array $params
     *
     * @return array
     */
    public function saveSmsTemplate(int $client_id, array $params): array;

    /**
     * 删除短信模板
     *
     * @param int $client_id
     * @param int $id
     *
     * @return array
     */
    public function delSmsTemplate(int $client_id, int $id): array;

    /**
     * 设置签名
     *
     * @param int    $client_id
     * @param string $sign_name
     *
     * @return array
     */
    public function setSign(int $client_id, string $sign_name): array;

    /**
     * 消息推送
     *
     * @param int    $client_id
     * @param string $type
     * @param array  $params
     *
     * @return array
     */
    public function notice(int $client_id, string $type, array $params): array;

    /**
     * 发送模板短信
     *
     * @param int    $client_id
     * @param string $mobile
     * @param string $template_id
     * @param string $template_content
     * @param array  $data
     *
     * @return array
     */
    public function sendSmsTp(int $client_id, string $mobile, string $template_id, string $template_content, array $data = []): array;

    /**
     * 创建短信群发计划
     *
     * @param int    $client_id
     * @param array  $data
     * @param string $o_id
     *
     * @return array
     */
    public function createSmsPlan(int $client_id, array $data, string $o_id): array;

    /**
     * 执行短信群发计划
     *
     * @param int $plan_id
     *
     * @return array
     */
    public function smsPlanHandle(int $plan_id): array;

    /**
     * 获取短信群发计划列表
     *
     * @param int   $client_id
     * @param array $data
     *
     * @return array
     */
    public function getSmsPlanList(int $client_id, array $data): array;

    /**
     * 短信审核处理
     *
     * @param array $data
     *
     * @return array
     */
    public function smsAuditReport(array $data): array;

    /**
     * 短信回执处理
     *
     * @param array $data
     *
     * @return array
     */
    public function smsReport(array $data): array;

    /**
     * 同步小程序订阅消息
     *
     * @param int $client_id
     *
     * @return array
     */
    public function syncSubscribe(int $client_id): array;

    /**
     * 同步公众号模板消息
     *
     * @param int $client_id
     *
     * @return array
     */
    public function syncOfficialTemplate(int $client_id): array;

    /**
     * 获取公众号菜单
     *
     * @return array
     */
    public function getOfficialMenus(): array;

    /**
     * 同步公众号菜单
     *
     * @param array $data
     *
     * @return array
     */
    public function syncOfficialMenus(array $data): array;

    /**
     * 获取公众号配置
     *
     * @return array
     */
    public function getOfficialConfig(): array;

    /**
     * 保存公众号配置
     *
     * @param array $data
     *
     * @return array
     */
    public function saveOfficialConfig(array $data): array;

    /**
     * 获取图文消息列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getNewsList(array $params): array;

    /**
     * 获取图文消息详情
     *
     * @param int $id
     *
     * @return array
     */
    public function getNewsDetail(int $id): array;

    /**
     * 新增/编辑图文消息
     *
     * @param array $data
     *
     * @return array
     */
    public function saveNews(array $data): array;

    /**
     * 删除图文消息
     *
     * @param int $id
     *
     * @return array
     */
    public function delNews(int $id): array;

    /**
     * 获取回复列表
     *
     * @param array $params
     *
     * @return array
     */
    public function getReplyList(array $params): array;

    /**
     * 获取回复详情
     *
     * @param int    $id
     * @param string $key
     *
     * @return array
     */
    public function getReplyDetail(int $id, string $key = ''): array;

    /**
     * 新增/编辑回复
     *
     * @param array $data
     *
     * @return array
     */
    public function saveReply(array $data): array;

    /**
     * 删除回复
     *
     * @param int $id
     *
     * @return array
     */
    public function delReply(int $id): array;

    /**
     * 发送小程序订阅消息
     *
     * @param string $type
     * @param string $template_id
     * @param string $openid
     * @param array  $data
     *
     * @return array
     */
    public function sendSubscribe(string $type, string $template_id, string $openid, array $data): array;

    /**
     * 发送公众号模板消息
     *
     * @param string $type
     * @param string $template_id
     * @param string $openid
     * @param array  $data
     *
     * @return array
     */
    public function sendOfficialTemplate(string $type, string $template_id, string $openid, array $data): array;
}