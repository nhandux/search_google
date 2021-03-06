<?php
if (!defined('TTH_SYSTEM')) { die('Please stop!'); }
//-----------------

$breadcrumb_home = '<a href="'. HOME_URL_LANG . '" title="' . $lgTxt_menu_home . '"><i class="fa fa-home"></i></a>';
$breadcrumb_category = $breadcrumb_menu_parent = $breadcrumb_menu = '';
$breadcrumb_category = '<a href="" title="' . $lgTxt_title_search . '">' . $lgTxt_title_search . '</a>';
echo '<div class="breadcrumb"><div class="container">' . $breadcrumb_home . $breadcrumb_category . $breadcrumb_menu_parent . $breadcrumb_menu . '</div></div>';
echo '<section class="container">';
echo '<div class="">';
?>
<div class="wrap-detail">
	<div class="main-content-detail">
		<div id="cse" style="width: 100%;">Loading...</div>
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript">
			function parseQueryFromUrl () {
				var queryParamName = "q";
				var search = window.location.search.substr(1);
				var parts = search.split('&');
				for (var i = 0; i < parts.length; i++) {
					var keyvaluepair = parts[i].split('=');
					if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
						return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
					}
				}
				return '';
			}
			google.load('search', '1', {language : 'vi'});
			google.setOnLoadCallback(function() {
				var customSearchControl = new google.search.CustomSearchControl('000730621577036808558:g3vxqc9yara');
				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
				var options = new google.search.DrawOptions();
				options.enableSearchResultsOnly();
				customSearchControl.draw('cse', options);
				var queryFromUrl = parseQueryFromUrl();
				$("#tim_kiem").val(queryFromUrl);
				if (queryFromUrl) {
					customSearchControl.execute(queryFromUrl);
				}
			}, true);
		</script>
	</div>
</div>
<style type="text/css">
	.main-content-detail {
		font-size: 14px;
		line-height: 20px;
	}
	.gsc-result-info {
		margin: 0 !important;
	}
	.gsc-adBlock{
		display:none;
	}
	.gsc-above-wrapper-area {
		border: none !important;
	}
	.gs-no-results-result .gs-snippet, .gs-error-result .gs-snippet{
		background:none;
		border:none;
		font-size: 14px !important;
	}
	.gsc-control-cse {
		padding-top: 0px !important;
		background:none;
	}
	.gs-title {
		font-size: 16px !important;
		font-weight: 600 !important;
	}
	.gsc-tabHeader.gsc-tabhInactive {
		border-color: #E9E9E9;
		background-color: #E9E9E9;
	}
	.gsc-tabHeader.gsc-tabhActive {
		border-top-color: #dfdfdf;
		border-left-color: #E9E9E9;
		border-right-color: #E9E9E9;
		background-color: #fdfdfd;
	}
	.gsc-tabsArea {
		border-color: #E9E9E9;
	}
	.gsc-webResult.gsc-result {
		background: #fdfdfd;
		line-height: 20px;
		padding: 10px 0 10px 10px;
		margin-bottom: 2px !important;
		border-bottom: 1px solid #dfdfdf;
	}
	.gs-webResult.gs-result a.gs-title:link,
	.gs-webResult.gs-result a.gs-title:link b {
		color: #00579c;
	}
	.gs-webResult.gs-result a.gs-title:visited,
	.gs-webResult.gs-result a.gs-title:visited b {
		color: #2d9c89;
	}
	.gs-webResult.gs-result a.gs-title:hover,
	.gs-webResult.gs-result a.gs-title:hover b {
		color: #2d9c89;
	}
	.gs-webResult.gs-result a.gs-title:active,
	.gs-webResult.gs-result a.gs-title:active b {
		color: #1e9bff;
	}
	.gsc-cursor-page {
		color: #00579c;
	}
	a.gsc-trailing-more-results:link {
		color: #00579c;
	}
	.gs-webResult .gs-snippet {
		color: #7C7C7C;
	}
	.gs-webResult div.gs-visibleUrl {
		color: #1e9bff;
	}
	.gs-webResult div.gs-visibleUrl-short {
		color: #2d9c89;
	}
	.gs-webResult div.gs-visibleUrl-short {
		display: none;
	}
	.gs-webResult div.gs-visibleUrl-long {
		display: block;
	}
	.gsc-cursor-box {
		border-color: #FFFFFF;
	}
	.gsc-results .gsc-cursor-box .gsc-cursor-page {
		border-color: #E9E9E9;
		background: none;

		color: #00579c;
	}
	.gsc-results .gsc-cursor-box .gsc-cursor-current-page {
		border-color: #dfdfdf;
		background: none;
		color: #1e9bff;
	}
	.gs-promotion {
		border-color: #00579c;
		background-color: #fdfdfd;
	}
	.gs-promotion a.gs-title:link,
	.gs-promotion a.gs-title:link *,
	.gs-promotion .gs-snippet a:link {
		color: #00579c;
	}
	.gs-promotion a.gs-title:visited,
	.gs-promotion a.gs-title:visited *,
	.gs-promotion .gs-snippet a:visited {
		color: #00579c;
	}
	.gs-promotion a.gs-title:hover,
	.gs-promotion a.gs-title:hover *,
	.gs-promotion .gs-snippet a:hover {
		color: #00579c;
	}
	.gs-promotion a.gs-title:active,
	.gs-promotion a.gs-title:active *,
	.gs-promotion .gs-snippet a:active {
		color: #00579c;
		text-align:left;
	}
	.gs-result .gs-title, .gs-result .gs-title *{
		text-align:left;
	}
	.gs-promotion .gs-snippet,
	.gs-promotion .gs-title .gs-promotion-title-right,
	.gs-promotion .gs-title .gs-promotion-title-right *  {
		color: #000000;
	}
	.gs-promotion .gs-visibleUrl,
	.gs-promotion .gs-visibleUrl-short {
		color: #2d9c89;
	}
	.gsc-results .gsc-cursor {
		font-size: 15px;
	}
	.gsc-control-cse, .gsc-control-cse .gsc-table-result {
		font-family: 'SVNAvo';
		color: #565656;
		font-size: 14px;
		line-height: 20px;
	}
	.gsc-table-cell-snippet-close, .gs-promotion-text-cell {
		padding-left: 10px;
	}
	.gsc-webResult.gsc-result {
		background-color: transparent;
		border-bottom: 1px solid #efefef;
	}
	.gs-web-image-box, .gs-promotion-image-box {
		width: 120px;
	}
	.gs-web-image-box img.gs-image, .gs-promotion-image-box img.gs-promotion-image {
		max-width: 100%;
	}
	.gs-webResult .gs-snippet {
		text-align: justify;
	}
</style>
<?php
echo '</div>';
echo '</section>';