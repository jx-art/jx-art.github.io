<?php

function optionsframework_options()
{

    $imagepath = get_template_directory_uri() . '/images/options/';

    $options = array();

    $options[] = array(
        'name' => '站点配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '站点Logo',
        'desc' => '不添加显示文字标题，推荐图片尺寸 200px*50px，保存成功则自动显示Logo图片',
        'id' => 'site_logo',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '背景颜色',
        'desc' => '针对整个站点背景颜色控制',
        'id' => 'background_index_color',
        'std' => '#f5f5f5',
		'type' => 'color'
	);

    $options[] = array(
        'name' => '列表布局',
        'desc' => '选择你喜欢的列表布局，默认显示新式列表布局',
        'id' => "list_layout",
        'std' => "new_layout",
        'type' => "images",
        'options' => array(
            'old_layout' => $imagepath . 'old-layout.png',
			'new_layout' => $imagepath . 'new-layout.png')
		);

    $options[] = array(
        'name' => 'Gutenberg 编辑器',
        'desc' => '禁用 Gutenberg 编辑器',
        'id' => 'use_gutenberg',
        'std' => '1',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '密码注册',
        'desc' => '是否允许用户输入密码注册(免邮箱验证)',
        'id' => 'mail_reg',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '侧边栏随动',
        'desc' => '是否启用侧边栏小工具随动功能',
        'id' => 'site_sa',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '分类页面',
        'desc' => '是否启用分类页面的名称以及简介功能',
        'id' => 'show_head_cat',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '标签页面',
        'desc' => '是否启用标签页面的名称以及简介功能',
        'id' => 'show_head_tag',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '站点黑白',
        'desc' => '是否启用站点黑白功能(一般常用于悼念日)',
        'id' => 'site_bw',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '打赏连接',
        'desc' => '输入您的打赏介绍页面的连接，若没开启点赞打赏功能该项无效',
        'id' => 'donate_links',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '简介缩略',
        'desc' => '输入您需要的文章简介文字缩略个数，英文字母算一个字',
        'id' => 'post_trim',
        'std' => '110',
		'type' => 'text'
	);
	
    $options[] = array(
        'name' => '组件配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '特色图片',
        'desc' => '选择你喜欢的默认特色图片（仅针对新式布局）',
        'id' => 'default_image',
        'std' => get_template_directory_uri() . '/images/default.jpg',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '页面伪静态',
        'desc' => '是否启用自定义页面伪静态功能',
        'id' => 'page_html',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '网易云音乐',
        'desc' => '是否启用网易云音乐自动播放功能',
        'id' => 'wy_music',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '访客留言',
        'desc' => '是否启用访客留言按钮功能',
        'id' => 'cd_gb',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '访客留言配置',
        'desc' => '输入您的访客留言页面的连接，若没开启访客留言按钮该项无效',
        'id' => 'guestbook_links',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '微信展示',
        'desc' => '是否启用微信展示按钮功能',
        'id' => 'cd_weixin',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '微信图片',
        'desc' => '上传你的微信二维码图片，图片尺寸要大于150px',
        'id' => 'weixin_image',
        'std' => get_template_directory_uri() . '/images/weixin.png',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => 'SEO配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '关键词',
        'desc' => '每个关键词之间用英文逗号分割',
        'id' => 'site_keywords',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '站点描述',
        'id' => 'site_description',
		'type' => 'textarea'
	);

    $options[] = array(
        'name' => '站点统计',
        'id' => 'site_tongji',
		'type' => 'textarea'
	);

    $options[] = array(
        'name' => '顶部配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '顶部类型',
        'desc' => '选择您喜欢的顶部类型并修改其对应选项',
        'id' => 'background_mode',
        'std' => 'image',
        'type' => 'select',
        'class' => 'mini',
        'options' => array(
            'image' => '图片',
			'color' => '颜色')
		);

    $options[] = array(
        'name' => '图片样式',
        'desc' => '只有在类型中选择“图片”才起作用',
        'id' => 'background_image',
        'std' => get_template_directory_uri() . '/images/background.jpg',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '图片文字-1',
        'id' => 'background_image_text1',
        'desc' => '只有在类型中选择“图片”才起作用',
        'std' => 'Kratos',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '图片文字-2',
        'id' => 'background_image_text2',
        'desc' => '只有在类型中选择“图片”才起作用',
        'std' => 'A responsible theme for WordPress',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '颜色样式',
        'desc' => '只有在类型中选择“颜色”才起作用',
        'id' => 'background_color',
        'std' => '#222831',
		'type' => 'color'
	);

    $options[] = array(
        'name' => '内容页面',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '文章布局',
        'desc' => '选择你喜欢的整体布局（显示左边栏，右边栏）默认显示右边栏',
        'id' => "side_bar",
        'std' => "right_side",
        'type' => "images",
        'options' => array(
            'left_side' => $imagepath . 'col-left.png',
			'right_side' => $imagepath . 'col-right.png')
		);

    $options[] = array(
        'name' => '版权声明',
        'desc' => '是否启用 CC BY-SA 4.0 声明',
        'id' => 'post_cc',
        'std' => '1',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '分享按钮',
        'desc' => '是否启用文章分享功能',
        'id' => 'post_share',
        'std' => '1',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '打赏按钮',
        'desc' => '是否启用文章打赏功能',
        'id' => 'post_like_donate',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '模板页面',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '页面布局',
        'desc' => '选择你喜欢的整体布局（显示左边栏，右边栏）默认显示右边栏',
        'id' => "page_side_bar",
        'std' => "right_side",
        'type' => "images",
        'options' => array(
            'left_side' => $imagepath . 'col-left.png',
			'right_side' => $imagepath . 'col-right.png')
		);

    $options[] = array(
        'name' => '版权声明',
        'desc' => '是否启用 CC BY-SA 4.0 声明',
        'id' => 'page_cc',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '分享按钮',
        'desc' => '是否启用文章分享功能',
        'id' => 'page_share',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '打赏按钮',
        'desc' => '是否启用文章打赏功能',
        'id' => 'page_like_donate',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '主页配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '首屏背景',
        'id' => 'krsort_hm_img',
        'std' => get_template_directory_uri() . '/images/background.jpg',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '首屏大标题',
        'id' => 'krsort_hm_tx1',
        'std' => 'Kratos',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '首屏小标题',
        'id' => 'krsort_hm_tx2',
        'std' => 'A responsible theme for WordPress',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '二屏标题',
        'id' => 'krsort_hm_tx3',
        'std' => '标题内容',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '二屏简介',
        'id' => 'krsort_hm_tx4',
        'std' => '这里是关于版块的简介内容',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '二屏版块',
        'id' => 'krsort_hm_bk1',
        'std' => '15',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '二屏连接',
        'id' => 'krsort_hm_tx5',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '三屏标题',
        'id' => 'krsort_hm_tx6',
        'std' => '标题内容',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '三屏简介',
        'id' => 'krsort_hm_tx7',
        'std' => '这里是关于版块的简介内容',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '三屏版块',
        'id' => 'krsort_hm_bk2',
        'std' => '15',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '三屏连接',
        'id' => 'krsort_hm_tx8',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '四屏标题',
        'id' => 'krsort_hm_tx9',
        'std' => '标题内容',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '四屏简介',
        'id' => 'krsort_hm_tx10',
        'std' => '这里是关于版块的简介内容',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '四屏版块',
        'id' => 'krsort_hm_bk3',
        'std' => '15',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '四屏连接',
        'id' => 'krsort_hm_tx11',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '404页面',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '页面标题',
        'id' => 'error_text1',
        'std' => '这里已经是废墟，什么东西都没有',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '简介说明',
        'id' => 'error_text2',
        'std' => 'That page can not be found',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '页面背景',
        'id' => 'error_image',
        'std' => get_template_directory_uri() . '/images/404.jpg',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '轮播图片',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '是否启用轮播',
        'desc' => '图片宽度建议大于750像素',
        'id' => 'kratos_banner',
        'std' => '0',
        'type' => 'select',
        'class' => 'mini',
        'options' => array(
            '1' => '是',
			'0' => '否')
		);

    $options[] = array(
        'name' => '轮播图片-1',
        'id' => 'kratos_banner1',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '轮播链接-1',
        'desc' => '链接可以留空',
        'id' => 'kratos_banner_url1',
        'std' => '',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '轮播图片-2',
        'id' => 'kratos_banner2',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '链接2',
        'desc' => '链接可以留空',
        'id' => 'kratos_banner_url2',
        'std' => '',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '轮播图片-3',
        'id' => 'kratos_banner3',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '链接3',
        'desc' => '链接可以留空',
        'id' => 'kratos_banner_url3',
        'std' => '',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '轮播图片-4',
        'id' => 'kratos_banner4',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '链接4',
        'desc' => '链接可以留空',
        'id' => 'kratos_banner_url4',
        'std' => '',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '轮播图片-5',
        'id' => 'kratos_banner5',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '链接5',
        'desc' => '链接可以留空',
        'id' => 'kratos_banner_url5',
        'std' => '',
		'type' => 'text'
	);


    $options[] = array(
        'name' => '邮件配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => 'SMTP服务',
        'desc' => '是否启用SMTP服务',
        'id' => 'mail_smtps',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '发信人',
        'desc' => '请填写发件人姓名',
        'id' => 'mail_name',
        'std' => 'Kratos',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '邮件服务器',
        'desc' => '请填写SMTP服务器地址',
        'id' => 'mail_host',
        'std' => 'smtp.vtrois.com',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '服务器端口',
        'desc' => '请填写SMTP服务器端口',
        'id' => 'mail_port',
        'std' => '994',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '邮箱帐号',
        'desc' => '请填写邮箱账号',
        'id' => 'mail_username',
        'std' => 'no_reply@vtrois.com',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '邮箱密码',
        'desc' => '请填写邮箱密码',
        'id' => 'mail_passwd',
        'std' => '123456789',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '启用SMTPAuth服务',
        'desc' => '是否启用SMTPAuth服务',
        'id' => 'mail_smtpauth',
        'std' => '1',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => 'SMTPSecure设置',
        'desc' => '若启用SMTPAuth服务则填写ssl，若不启用则留空',
        'id' => 'mail_smtpsecure',
        'std' => 'ssl',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '页脚配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '工信部备案信息',
        'desc' => '输入您的工信部备案号，针对国际版没有备案信息栏目的功能',
        'id' => 'icp_num',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '公安网备案信息',
        'desc' => '输入您的公安网备案号',
        'id' => 'gov_num',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '公安网备案连接',
        'desc' => '输入您的公安网备案的链接地址',
        'id' => 'gov_link',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '社交组件',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '新浪微博',
        'desc' => '连接前要带有 http:// 或者 https:// ',
        'id' => 'social_weibo',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '腾讯微博',
        'desc' => '连接前要带有 http:// 或者 https:// ',
        'id' => 'social_tweibo',
		'type' => 'text'
	);

    $options[] = array(
        'name' => 'Twitter',
        'desc' => '连接前要带有 http:// 或者 https:// ',
        'id' => 'social_twitter',
		'type' => 'text'
	);

    $options[] = array(
        'name' => 'FaceBook',
        'desc' => '连接前要带有 http:// 或者 https:// ',
        'id' => 'social_facebook',
		'type' => 'text'
	);

    $options[] = array(
        'name' => 'LinkedIn',
        'desc' => '连接前要带有 http:// 或者 https:// ',
        'id' => 'social_linkedin',
		'type' => 'text'
	);

    $options[] = array(
        'name' => 'GitHub',
        'desc' => '连接前要带有 http:// 或者 https:// ',
        'id' => 'social_github',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '广告配置',
		'type' => 'heading'
	);

    $options[] = array(
        'name' => '广告位置',
        'desc' => '文章页面顶部',
        'id' => 'ad_show_1',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '顶部广告图片',
        'desc' => '图片尺寸750x80',
        'std' => get_template_directory_uri() . '/images/ad.png',
        'id' => 'ad_img_1',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '顶部广告连接',
        'desc' => '图片广告指向的地址',
        'id' => 'ad_link_1',
		'type' => 'text'
	);

    $options[] = array(
        'name' => '广告位置',
        'desc' => '文章页面底部',
        'id' => 'ad_show_2',
        'std' => '0',
		'type' => 'checkbox'
	);

    $options[] = array(
        'name' => '底部广告图片',
        'desc' => '图片尺寸750x80',
        'std' => get_template_directory_uri() . '/images/ad.png',
        'id' => 'ad_img_2',
		'type' => 'upload'
	);

    $options[] = array(
        'name' => '底部广告连接',
        'desc' => '图片广告指向的地址',
        'id' => 'ad_link_2',
		'type' => 'text'
	);

    return $options;
}
