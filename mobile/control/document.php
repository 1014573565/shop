<?php
/**
 * 前台品牌分类
 *
 *
 * @好商城 (c) 2015-2018 33HAO Inc. (http://www.33hao.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      好商城提供技术支持 授权请购买shopnc授权
 */


defined('In33hao') or exit('Access Invalid!');
class documentControl extends mobileHomeControl {
    public function __construct() {
        parent::__construct();
    }

    public function agreementOp() {
        $doc = Model('document')->getOneByCode('agreement');
        output_data($doc);
    }
}
