/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : eyoucms_develop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-13 14:30:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for #@__weapp_sitecollect
-- ----------------------------
DROP TABLE IF EXISTS `#@__weapp_sitecollect`;
CREATE TABLE `#@__weapp_sitecollect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '' COMMENT '任务名称',
  `typeid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '采集栏目',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  `is_desc` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否倒序采集',
  `is_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '入库状态(1=显示，0=屏蔽(草稿))',
  `is_litpic` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否获取第一张图片为封面',
  `is_filt_repet` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否过滤重复标题',
  `is_local` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '图片是否本地保存',
  `filt_iframe` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否过滤Iframe',
  `filt_js` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `filt_a` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `filt_style` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `filt_object` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `get_style` tinyint(1) unsigned NOT NULL DEFAULT '2' COMMENT '获取方式，1：手工输入，2：批量生成',
  `url_rule` varchar(100) NOT NULL DEFAULT '' COMMENT '网址规则',
  `min_id` int(6) unsigned NOT NULL DEFAULT '1' COMMENT '最小值页码',
  `max_id` int(6) unsigned NOT NULL DEFAULT '1' COMMENT '最大值页码',
  `list_rule` varchar(255) NOT NULL DEFAULT '' COMMENT '列表规则',
  `a_rule` varchar(255) NOT NULL DEFAULT '' COMMENT '页面链接规则',
  `a_involve` varchar(100) NOT NULL DEFAULT '' COMMENT '必须包含',
  `a_exclusive` varchar(100) NOT NULL DEFAULT '' COMMENT '不能包含',
  `is_list_litpic` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '获取列表缩略图',
  `litpic_rule` varchar(255) NOT NULL DEFAULT '' COMMENT '列表缩略图规则',
  `is_page` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否文章分页',
  `page_a_rule` varchar(255) NOT NULL DEFAULT '' COMMENT '页面正则代码',
  `page_list_rule` varchar(255) NOT NULL DEFAULT '' COMMENT '分页正则代码',
  `sort_order` int(6) unsigned NOT NULL DEFAULT '100',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，1：启用，0：锁定',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='文章采集任务列表';

DROP TABLE IF EXISTS `#@__weapp_sitecollet_rule`;
CREATE TABLE `#@__weapp_sitecollet_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `collectid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '采集列表id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '字段名称',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '字段别名（中文）',
  `rule` varchar(255) NOT NULL DEFAULT '' COMMENT '采集规则',
  `origin` varchar(255) NOT NULL DEFAULT '' COMMENT '初始字符串',
  `replace` varchar(255) NOT NULL DEFAULT '' COMMENT '替换字符串',
  `default` varchar(255) NOT NULL DEFAULT '' COMMENT '默认值（不采集）',
  `is_page` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否应用于分页',
  `add_time` int(11) unsigned DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `collectid` (`collectid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='文章采集规则列表';

DROP TABLE IF EXISTS `#@__weapp_sitecollet_urllist`;
CREATE TABLE `#@__weapp_sitecollet_urllist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `collectid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '采集列表id',
  `url` varchar(512) NOT NULL DEFAULT '' COMMENT '文章url',
  `add_time` int(11) unsigned DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `collectid` (`collectid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='文章采集链接列表';


DROP TABLE IF EXISTS `#@__weapp_sitecollet_record`;
CREATE TABLE `#@__weapp_sitecollet_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `collectid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '采集列表id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `url_list` text NOT NULL COMMENT '执行url集合（json格式）',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `collectid` (`collectid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='文章采集记录列表';



