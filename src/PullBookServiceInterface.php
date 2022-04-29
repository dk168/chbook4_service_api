<?php

namespace Chbook4\ServiceApi;

interface PullBookServiceInterface {
    /**
     * 根据isbn获取商品列表
     *
     * @param string $isbn 商品ISBN
     * @param string $type 渠道 zxt、jd、wx、wx_new、dd、db、kw
     * @param int    $page 页码
     *
     * @return array
     */
    public function getList(string $isbn, string $type = 'zxt', int $page = 1): array;

    /**
     * 根据id获取商品详情
     *
     * @param string $id   列表接口返回的id
     * @param string $type 渠道 zxt、jd、wx、wx_new、dd、db、kw
     *
     * @return array
     */
    public function getDetail(string $id, string $type = 'zxt'): array;
}