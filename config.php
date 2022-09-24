<?php
/**
 * XDING WeChat Public Platform
 * 微信公众号 PHP 版推送信息
 *
 * @copyright  Copyright (c) 2022 XDING  (https://i4coder.com)
 * @page      配置页
 */

/** 开启 Session 配置 */
session_start();
require 'function.php';

/** 微信公众号信息配置 */
$WXconfig=array(
	'app_id' => 'wx1ee6911ee3de471c', //公众号appId
	'app_secret' => 'wx1ee6911ee3de471c', //公众号appSecret
	'template_id' => 'oW5TSLvKJsloVrh_mgjFbC7hCG_s0uV-cLEUojxCuNo', //模板消息id
	'user' => array('ohiCa5oFNcT6lJTtwGN_ULadnmGA') //接收公众号消息的微信号，如果有多个，需要在()里用英文逗号间隔，例如('小明','小丁')
);

/** 微信程序信息配置 */
$INFOconfig=array(
	'region' => '洛阳市', //所在地区，可为城市，区，县，同时支持国外城市，例如伦敦
	'birthday1' => array('name'=>'永慧','birthday'=>'2003-12-21'), //修改名字为对应需要显示的名字，生日为公历哦~ 格式：2022-8-3
	'birthday2' => array('name'=>'孟洋','birthday'=>'2001-11-02'), //同上
	'love_date'=>'2019-12-27', //同上
	"note_ch"=>'早~宝贝，14亿人我就通知了你，所以请在新的一天里开开心心！快快乐乐！顺顺利利哦~ 爱你', // 金句中文，如果设置了，则会显示这里的，如果为空，默认会读取金山的每日金句
	"note_en"=>'I never stopped loving you, I just unshowing it.' //金句英文
);

