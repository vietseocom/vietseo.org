<?php
$lang = (isset($_GET['lang']) ? trim($_GET['lang']) : $lang);
if(trim(@$_GET['mod']) == '' && ($lang == '' || $lang == 'vn')){
	$meta['title'] = $meta['tit'] = $meta['ti'] = $meta['tieude'] = "Các công việc của công ty SEO website chuyên nghiệp";// title
	$meta['description'] = $meta['des'] = $meta['mota'] = $meta['keywork'] = "Danh sách các công việc và lợi ích khi SEO website: 1. Kiểm tra & Tối ưu hóa Trang web. 2. Nghiên cứu phân tích website. 3. Tìm kiếm cơ hội & từ khóa phù hợp. 4. Lợi thế";// description
	define("KEYWORD_1", "Dịch vụ SEO từ khóa của Việt SEO");
	define("KEYWORD_2", "Web công ty Việt SEO");
	define("KEYWORD_3", "Công ty nhận SEO từ khóa cạnh tranh cao");
}elseif($lang == 'en'){
	$meta['title'] = $meta['tit'] = $meta['ti'] = "";// title
	$meta['description'] = $meta['des'] = $meta['mota'] = $meta['keywork'] = "";// description
	define("KEYWORD_1", "");
	define("KEYWORD_2", "");
	define("KEYWORD_3", "");
}elseif($lang == 'fr'){
	$meta['title'] = $meta['tit'] = $meta['ti'] = "";// title
	$meta['description'] = $meta['des'] = $meta['mota'] = $meta['keywork'] = "";// description
	define("KEYWORD_1", "");
	define("KEYWORD_2", "");
	define("KEYWORD_3", "");
	
}


?>