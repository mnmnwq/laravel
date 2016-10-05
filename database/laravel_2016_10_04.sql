/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-10-04 19:48:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_article
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `art_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `art_title` varchar(100) DEFAULT '' COMMENT '//文章标题',
  `art_tag` varchar(100) DEFAULT '' COMMENT '//关键词',
  `art_keywords` varchar(255) DEFAULT '' COMMENT '//关键词',
  `art_description` varchar(255) DEFAULT '' COMMENT '//描述',
  `art_thumb` varchar(255) DEFAULT '' COMMENT '//缩略图',
  `art_content` text COMMENT '//文章内容',
  `art_time` int(11) unsigned DEFAULT '0' COMMENT '//发布时间',
  `art_editor` char(50) DEFAULT '' COMMENT '//作者',
  `art_view` int(11) unsigned DEFAULT '0' COMMENT '//查看次数',
  `cate_id` int(11) unsigned DEFAULT '0' COMMENT '//分类id',
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='//文章';

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('3', '重大突破！癌细胞竟被中国医生用这种方法弄死了', '', '癌细胞', '因此，若想有效“饿死”癌细胞，不仅要剥夺葡萄糖，还需同时破坏乳酸阴离子和氢离子的协同作用。在葡萄糖饥饿或缺乏的前提下，只要去除这两个因子中的任何一个，癌细胞就会快速死亡。', 'uploads/20160925065455226.jpg', '<p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: normal; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">两位“帮手”协同作用，使得癌细胞在葡萄糖含量很少时，非常节约地利用葡萄糖；在没有葡萄糖的情况下进入“休眠”状态；当有葡萄糖供应时即刻恢复生长状态。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: normal; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\">因此，<strong>若想有效“饿死”癌细胞，不仅要剥夺葡萄糖，还需同时破坏乳酸阴离子和氢离子的协同作用。在葡萄糖饥饿或缺乏的前提下，只要去除这两个因子中的任何一个，癌细胞就会快速死亡。</strong></p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: normal; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>研究人员用碱如碳酸氢钠（小苏打）来去除肿瘤内的氢离子，就可破坏乳酸根和氢离子的协同作用，从而快速有效地杀死处于葡萄糖饥饿或缺乏的肿瘤细胞。</strong></p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: normal; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>将基础科研成果快速转化成肿瘤临床治疗，让更多患者受益是关键。</strong></p><p><br/></p>', '1474786508', '11', '0', '1');
INSERT INTO `blog_article` VALUES ('4', 'LOL甜心主播Miss晒健康午餐，结果评论全是污段子！', '', 'lol,miss', '女生都爱美，每天都吵着要减肥，电竞圈的女主播也不例外，虽然MISS大小姐的身材还算不错，但是她今天表示，自己还是得减肥啊！', 'uploads/20160925065621657.jpeg', '<p><span style=\"font-family: 宋体; font-size: 14px; line-height: 26px; background-color: rgb(255, 255, 255);\">　从图片来看，她中午的主食确实非常清淡，包括玉米、鸡蛋、金针菇、西兰花，红薯？本来挺正常的一顿餐，结果下面的评论就全歪了！</span></p>', '1474786617', '111', '0', '3');
INSERT INTO `blog_article` VALUES ('5', '当3个美国盗匪遇上1个中国女生，死一个逃两个，全美国惊呆了！', '', '劫匪,中国女生', '　女子发现劫匪后，立刻打电话报警，可是电话里的接线员拖拖拉拉、慢条斯理的，眼看敌人就要闯到她的屋里了，', 'uploads/20160925065732755.jpeg', '<p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; font-size: 14px; color: rgb(51, 51, 51); word-wrap: break-word; font-family: 宋体; line-height: 26px; white-space: normal; background-color: rgb(255, 255, 255);\">所以，身边的朋友都在讨论，这里太不安全了，是不是得在家里准备一把枪啦！</p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; font-size: 14px; color: rgb(51, 51, 51); word-wrap: break-word; font-family: 宋体; line-height: 26px; white-space: normal; background-color: rgb(255, 255, 255);\">　　不过，在美国这种枪支泛滥，缺乏安全感的国度，学会保护自己还是很有必要的。这不，前几天就上演了一出华裔女子穿着睡衣大战盗贼，以一敌三，击退匪徒的大戏。</p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; font-size: 14px; color: rgb(51, 51, 51); word-wrap: break-word; font-family: 宋体; line-height: 26px; white-space: normal; background-color: rgb(255, 255, 255);\">　　根据美国WSBTV的报道，乔治利亚州有一位华裔女子，她在当地经营着一家餐馆，有一天在家里休息的时候，突然有三名黑人持枪闯入，</p><p><br/></p>', '1474786687', '111', '0', '5');
INSERT INTO `blog_article` VALUES ('6', '对于iPhone7， 你肯定不知道的小秘密', '', 'iphone7', '9月份注定是高潮迭起的一个月， 如果说月初的G20已经引起了全世界对杭州的关注， 那么对于“果粉”来说， 没有什么比iPhone 7 发布更令人振奋了。', 'uploads/20160925065933367.jpg', '<p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; font-size: 14px; color: rgb(51, 51, 51); word-wrap: break-word; font-family: 微软雅黑, 宋体; line-height: 26px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">9月份注定是高潮迭起的一个月， 如果说月初的G20已经引起了全世界对杭州的关注， 那么对于“果粉”来说， 没有什么比iPhone 7 发布更令人振奋了。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; font-size: 14px; color: rgb(51, 51, 51); word-wrap: break-word; font-family: 微软雅黑, 宋体; line-height: 26px; white-space: normal; background-color: rgb(255, 255, 255);\">　　就对比前几代iPhone的发布， 我们基本确定发布时间：<span style=\"border: 0px; margin: 0px; padding: 0px;\"><strong style=\"border: 0px; margin: 0px; padding: 0px;\">9月7日</strong></span><span style=\"border: 0px; margin: 0px; padding: 0px;\">,预售时间：<strong style=\"border: 0px; margin: 0px; padding: 0px;\">9月9日</strong>, 正式销售时间：<strong style=\"border: 0px; margin: 0px; padding: 0px;\">9月23日</strong></span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; font-size: 14px; color: rgb(51, 51, 51); word-wrap: break-word; font-family: 微软雅黑, 宋体; line-height: 26px; white-space: normal; background-color: rgb(255, 255, 255);\">　　随着各种谍照的曝光， 我们也可以大致确定iPhone7的真机如下：</p><p>&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/ueditor/php/upload/image/20160925/1474786761940760.jpg\" title=\"1474786761940760.jpg\" alt=\"06766f677b7c4aa58a92bf22ecfe853c.jpg\"/></p>', '1474786786', '1212', '0', '4');
INSERT INTO `blog_article` VALUES ('7', 'Miss直播吃键盘 满满的都是套路', '', 'miss,键盘', '　一开始,miss显然不想接受这个事实，祭出传统看家本领——耍赖!还强词夺理说耍赖是女人的天赋特权，只有纯爷们才需要一言九鼎。 但是几番和水友交涉未果，还是败下阵来，掏出了键盘。难道蜜少已经接受了自己是汉子这个设定吗 ?\r\n\r\n　　结果键盘呈上来之后，水友纷纷表示“这TM都是套路啊”，“城市套路深，我要回农村”，“我走过最长的路就是主播的套路。” 这他喵的明明就是一大块巧克力嘛!', 'uploads/20160925070152423.jpg', '<p style=\"margin-top: 24px; margin-bottom: 24px; padding: 0px; width: auto; overflow: hidden; color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; line-height: 30px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">昨日MISS直播时候立下flag，尾巴都要翘到天上去了，极其嚣张地表示：这把输了就吃键盘。我靠，果然是跟本编待久了，深受本编豪迈之风影响啊，但你哪有本编这种上天入地的本事啊?</p><p style=\"margin-top: 24px; margin-bottom: 24px; padding: 0px; width: auto; overflow: hidden; color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; line-height: 30px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">　　果然flag是不能乱立的，在队友和对手的帮助下，miss成功地在广大网友的注视下——玩砸了。唉，这下小编也救不了你了!让你吹~~~</p><p><br/></p>', '1474786951', '11212', '0', '3');
INSERT INTO `blog_article` VALUES ('8', '放话娶马蓉的导演原来是个大骗子', '', '马融，导演', '好在 “导演陈剑-Hero”一直在微博上和网友拉开骂战，要是在现实中早就被网友挨揍。近日，有一名男子却在大街上挂起了“我爱马蓉”的示爱布条，开直播宣称手上有王宝强的不雅影片，遭到网友群起炮轰，此时路过的几名壮男看不下去，上前狂殴男子揍得满脸鲜血。最后他吓得赶紧逃跑，才让这场闹剧告终。', 'uploads/20160925070341978.jpg', '<p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>离婚事件继续在发酵，半途中杀出一个“妖怪”，网名叫“<a href=\"http://search.xinmin.cn/?q=%E5%AF%BC%E6%BC%94\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">导演</a>陈剑-Hero”的男人，她要娶<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>为妻，力挺<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>，和<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>“决战到底”。8月29日上午，张艺谋妻子陈婷晒出自己举报微博名为“<a href=\"http://search.xinmin.cn/?q=%E5%AF%BC%E6%BC%94\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">导演</a>陈剑-Hero”的用户，称“此人多次冒充我亲戚炒作自己，甚至恶意拼图孩子照片，已造成社会影响。微博文章没有一句真话，统统都是编造，亲查封此账号！”，并呼吁网友支持她帮助一起举报。</p><p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　　据悉，这位名为“<a href=\"http://search.xinmin.cn/?q=%E5%AF%BC%E6%BC%94\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">导演</a>陈剑”的用户张艺谋在“超生门”事件中，自称是张艺谋的大舅子，以发言人身份向外发声。早在今年3月，陈婷就通过微博怒斥，“此人与我家没有一丁点儿血缘关系，纯属莫名其妙！”陈婷还发文抱怨：“为什么现在骗子那么多？大家关注他、骂他甚至媒体都转载报道他，恰恰满足了骗子的虚荣心妄想症和求关注的目的。只有置之不理，骗子才无戏可唱无计可施”。</p><p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　　看看“<a href=\"http://search.xinmin.cn/?q=%E5%AF%BC%E6%BC%94\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">导演</a>陈剑-Hero”最近几天的微博，真实让人可笑之极。他说，<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>没有背叛国家，也不是刑事犯罪分子，<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>都拿不<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>出轨的铁证，请问身为局外人的百里千里之外的网友缘何将一位良家妇女说成荡妇呢？一切都是道听徒说以讹传讹，不觉得莫名其妙吗？</p><p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　　另外陈剑离异单身，跟<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>同一个行业，年龄差距也不大，总好过张艺谋大岳父8岁大岳母11岁吧？30岁的<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>离婚后总得嫁人吧？都被网友造谣说成“马金莲”了，有人敢娶我祝福她，没人敢娶我来娶怎么了？陈剑是在救人，而<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>的网络水军是在把人往绝路上逼！这个世道怎么好人坏人就区分不了呢？</p><p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　　这么喜欢她的人，原来是个骗子，难怪<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>不理他。有网友规劝 “<a href=\"http://search.xinmin.cn/?q=%E5%AF%BC%E6%BC%94\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">导演</a>陈剑-Hero”：“ 兄弟 想火呢就直接发条微博说我想火，何必搞这么麻烦，你说的也对，也许确实有人没搞清事实，也许确实有人以讹传讹，但是我想问的是，难道你就清楚这事情的来龙去脉， 你知道的就比网友们多？这是趟浑水，你就别跟着瞎凑热闹了行不？”</p><p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　　好在 “<a href=\"http://search.xinmin.cn/?q=%E5%AF%BC%E6%BC%94\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">导演</a>陈剑-Hero”一直在微博上和网友拉开骂战，要是在现实中早就被网友挨揍。近日，有一名男子却在大街上挂起了“我爱<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>”的示爱布条，开直播宣称手上有<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>的不雅影片，遭到网友群起炮轰，此时路过的几名壮男看不下去，上前狂殴男子揍得满脸鲜血。最后他吓得赶紧逃跑，才让这场闹剧告终。</p><p style=\"margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; letter-spacing: 1px; line-height: 30px; font-family: &quot;Microsoft YaHei&quot;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal; background-color: rgb(255, 255, 255);\">　　<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>离婚事件，少有智商和良心的人都知道<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>和宋喆两人是多么的无耻，宋喆拿着<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>发给他的不菲工资，私下里还霸占了他老婆，此为不义，而<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>更是无耻，把<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>这几年辛苦打拼的钱全部卷走，买房买车，全在她父母和自己的名下，也就是说，<a href=\"http://search.xinmin.cn/?q=%E9%A9%AC%E8%93%89\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">马蓉</a>和她父母联手把<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>的钱掏空，这样的女人，比潘金莲还毒辣。网友支持<a href=\"http://search.xinmin.cn/?q=%E7%8E%8B%E5%AE%9D%E5%BC%BA\" target=\"_blank\" class=\"keywordsSearch\" style=\"color: rgb(0, 0, 0); text-decoration: none;\">王宝强</a>，就是“正义不能被无情打压，仁义不能被无理抹杀，道德不能被随意践踏”。</p><p><br/></p>', '1474787066', '1212', '0', '3');
INSERT INTO `blog_article` VALUES ('9', '2016年斯诺克上海大师赛 丁俊晖晋级八强', '', '丁俊晖,斯诺克', '首轮对阵小将唐纳森的低迷表现，让外界对丁俊晖当晚与马克·艾伦的一战表示悲观。作为丁俊晖的对手，艾伦此前5：0横扫麦克基尔晋级，自信的他在赛前放话称，“如果以我这一年半以来调整的状态，我觉得自己有可能战胜丁俊晖。”', 'uploads/20160925070506483.jpg', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;; line-height: 30px; text-align: justify;\">中新社上海9月22日电 (马化宇)2016世界斯诺克上海大师赛22日晚结束了第二阶段的全部争夺。中国选手丁俊晖战胜世界排名第6的马克·艾伦，晋级八强。丁俊晖将在下一轮迎战本次比赛的“最大黑马”迈克尔·霍尔特，后者接连淘汰了卫冕冠军威尔逊和“火箭”奥沙利文。</span></p>', '1474787139', '1212', '0', '2');
INSERT INTO `blog_article` VALUES ('10', '江西抚州举办纪念汤显祖逝世400周年活动', '', '江西', '原标题：江西抚州举办共同纪念汤显祖、莎士比亚、塞万提斯逝世400周年活动', 'uploads/20160925070647540.jpg', '<p style=\"margin-top: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); line-height: 30px; text-align: justify; font-family: &quot;Microsoft YaHei&quot;; white-space: normal;\">　　人民网抚州9月24日电（时雨）9月24日—26日，共同纪念汤显祖、莎士比亚、塞万提斯逝世400周年活动在江西省抚州市举行。这是全球第一次共同纪念这三位文学巨匠。<br/></p><p style=\"margin-top: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); line-height: 30px; text-align: justify; font-family: &quot;Microsoft YaHei&quot;; white-space: normal;\">　　汤显祖是抚州具有世界影响的伟大先贤，他的《牡丹亭》《邯郸记》《南柯记》《紫钗记》四部传奇剧作，合称《临川四梦》，代表了“中国古典戏曲创作的高峰”。汤显祖剧作蕴含着鲜明的民族性和鲜活的独创性,体现了对社会的深切关注和对人性的深刻思考，具有积极的启蒙意义，代表了历史进步的方向。汤显祖剧作自问世以来，即超越了时代和地域的限制，以其独特的艺术魅力和深刻的思想内涵，彪炳史册、光耀千古、历演不衰，受到世界人民的热爱。他的剧作和与其同时代的英国莎士比亚、西班牙塞万提斯的剧作，在中国乃至世界戏曲史上具有里程碑式的影响。</p><p><br/></p>', '1474787236', '1212', '0', '1');

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键 分类表',
  `cate_name` char(50) NOT NULL COMMENT '分类名称',
  `cate_title` varchar(255) NOT NULL COMMENT '分类标题',
  `cate_keywords` varchar(255) NOT NULL COMMENT '关键词',
  `cate_description` varchar(255) NOT NULL COMMENT '描述',
  `cate_view` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '查看次数',
  `cate_order` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `cate_pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('1', '新闻', '搜集国内外新闻资讯', '', '', '0', '1', '0');
INSERT INTO `blog_category` VALUES ('2', '体育', '发展体育事业，增强过敏体质', '', '', '0', '2', '0');
INSERT INTO `blog_category` VALUES ('3', '娱乐', '人人都有自己的娱乐圈', '', '', '0', '3', '0');
INSERT INTO `blog_category` VALUES ('4', '热点新闻', '最新新闻资讯', '热点，咨询', '最新最热新闻资讯', '0', '5', '1');
INSERT INTO `blog_category` VALUES ('5', '军事新闻', '最新最热军事新闻', '', '', '0', '20', '1');
INSERT INTO `blog_category` VALUES ('7', '乐视体育', '专业的体育平台', '', '', '0', '2', '2');
INSERT INTO `blog_category` VALUES ('8', '腾讯体育', '人气最旺的体育门户', '', '', '0', '1', '2');

-- ----------------------------
-- Table structure for blog_config
-- ----------------------------
DROP TABLE IF EXISTS `blog_config`;
CREATE TABLE `blog_config` (
  `conf_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `conf_title` char(50) DEFAULT '' COMMENT '//标题',
  `conf_name` char(50) DEFAULT '' COMMENT '//配置名称',
  `conf_content` text COMMENT '//变量值',
  `conf_order` int(11) unsigned DEFAULT '0' COMMENT '//排序',
  `conf_tips` varchar(255) DEFAULT '' COMMENT '//描述',
  `field_type` char(50) DEFAULT '' COMMENT '//字段类型',
  `field_value` varchar(255) DEFAULT '' COMMENT '//字段值',
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_config
-- ----------------------------
INSERT INTO `blog_config` VALUES ('1', '22', 'web_title', '12121', '1', '网站大众化标题', 'input', '');
INSERT INTO `blog_config` VALUES ('2', '统计代码', 'web_count', 'http://blog.laravel.com', '3', '网站访问的情况统计', 'textarea', '');
INSERT INTO `blog_config` VALUES ('3', '11222', '222', '0', '1', '121212', 'radio', '1|开启,0|关闭');

-- ----------------------------
-- Table structure for blog_links
-- ----------------------------
DROP TABLE IF EXISTS `blog_links`;
CREATE TABLE `blog_links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//名称',
  `link_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//标题',
  `link_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//链接',
  `link_order` int(11) NOT NULL DEFAULT '0' COMMENT '//排序',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of blog_links
-- ----------------------------
INSERT INTO `blog_links` VALUES ('1', '后端网', '剑侠世界2223', 'www.xisahnju.com', '1');
INSERT INTO `blog_links` VALUES ('2', '后端网论坛', '剑侠世界论坛', 'www.bbs.com.cn', '2');

-- ----------------------------
-- Table structure for blog_navs
-- ----------------------------
DROP TABLE IF EXISTS `blog_navs`;
CREATE TABLE `blog_navs` (
  `nav_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '//主键',
  `nav_name` char(50) DEFAULT '' COMMENT '//名称',
  `nav_alias` char(50) DEFAULT '' COMMENT '//别名',
  `nav_url` varchar(255) DEFAULT '' COMMENT '//url',
  `nav_order` int(11) unsigned DEFAULT '0' COMMENT '//排序',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_navs
-- ----------------------------
INSERT INTO `blog_navs` VALUES ('1', '新闻', 'news', 'http://www.xinwen.com', '3');

-- ----------------------------
-- Table structure for blog_user
-- ----------------------------
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id：主键',
  `user_name` char(30) NOT NULL COMMENT '用户名',
  `user_pass` char(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of blog_user
-- ----------------------------
INSERT INTO `blog_user` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112');
INSERT INTO `blog_user` VALUES ('2', 'admin1', '96e79218965eb72c92a549dd5a330112');
