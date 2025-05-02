<?php

/*******************************************************************
 * Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
 * and/or its licensors, successors and assigners. All rights reserved.
 *
 * Use of Glype is subject to the terms of the Software License Agreement.
 * http://www.glype.com/license.php
 ********************************************************************
 * This theme configuration file allows easy customization of the
 * theme without editing the HTML templates.
 *******************************************************************
 * Theme: Modern
 * Author: Updated for SEO and Responsiveness
 * Website: http://www.glype.com/
 ******************************************************************/

/*****************************************************************
 * Themes can use "theme replacements". These are HTML tags of the format
 * <!--[tag_name]--> in the template files. To automatically replace
 * these placeholders with other text, use the $themeReplace array.
 *  e.g.
 * <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
 ******************************************************************/

// Website name
$themeReplace['site_name'] = $_SERVER['HTTP_HOST'] . ' Việt Nam Proxy - Fake Ip Viet Nam';

// Meta description
$themeReplace['meta_description'] = <<<OUT
Free web proxy service to browse anonymously online, bypass website blocks, or access blocked websites in Vietnam. Secure, free proxy with encryption.
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT
free proxy, web proxy vietnam, fake ip, vietnamese proxy, anonymous browsing, unblock websites, secure proxy, privacy online, hide ip, bypass blocks
OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
	<p>Duyệt web nặc danh hoặc truy cập các trang web bị chặn thông qua một máy chủ proxy an toàn, bảo mật và miễn phí tại Việt Nam. Trang web ưa thích của bạn bị chặn? Hãy sử dụng proxy miễn phí của chúng tôi! Ẩn IP & mã hóa kết nối để duyệt web ẩn danh và bảo vệ quyền riêng tư trên mạng.</p>
	<p>Dịch vụ <strong>Fake Proxy Hide Ip Việt Nam miễn phí</strong> sẽ giúp bạn duyệt web ẩn danh với proxy ip tới từ Việt Nam và giúp truy cập mạng với tốc độ siêu nhanh nếu như cáp quang AAG đứt.</p>
	<p>Access blocked sites and browse safely with Free Web Proxy VietNam. Browse the web anonymously with free https proxy - all you need for secure browsing.</p>
	<p>Tag : Free Web Proxy, FakeIp, Vào Facebook Không Bị Chặn, web proxy vietnam, free proxy server, free vpn</p>
OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT
<div class="ad-container mb-4">
    <!-- Ad content above form goes here -->
</div>
OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT
<div class="ad-container mt-4">
    <!-- Ad content below form goes here -->
</div>
OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT
<div class="ad-container my-3">
    <!-- Ad content on proxied pages goes here -->
</div>
OUT;

// Additional theme configuration options
$themeReplace['theme_color'] = '#0275d8'; // Primary theme color
$themeReplace['favicon_url'] = '/favicon.ico'; // Path to favicon
$themeReplace['custom_footer'] = 'Copyright © ' . date('Y') . ' ' . $_SERVER['HTTP_HOST'] . ' - All Rights Reserved';
