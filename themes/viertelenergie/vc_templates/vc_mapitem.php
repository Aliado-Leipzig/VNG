<?php

/**
 * Map Item
 */
class WPBakeryShortCode_map extends WPBakeryShortCodesContainer {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'test' => false,
						), $atts));
		$output = '<div id="city" class="map-wrap wpb_column vc_column_container vc_col-xs-12">';
		$output .= '<canvas width="2550" height="1150"></canvas>';
		$output .= '<svg id="citymap" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2500 1150">
  <path fill="none" stroke="#878787" stroke-width="40" stroke-miterlimit="10" d="M298.7 318.9s584-65.3 586 157.6"/>
  <path fill="#575756" d="M-105.8-20.3h2749.6l-43.8 1249-2705.8 61.5z"/>
  <g fill-rule="evenodd" clip-rule="evenodd" fill="#575756">
    <path d="M2020.3 373.2c.6 4.4-4 8-4 8L1767 525.7s-7.7 5.7-14.1 6-16.9-7-16.9-7l-215.3-124.6s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6L1777.3 242s3.2-2.1 9.3-2c6 0 9.9 1.6 9.9 1.6l216.8 124s6.4 3.2 7 7.6z"/>
    <path d="M1917 313c.7 4.5-3.9 8.1-3.9 8.1l-249.5 144.5s-7.7 5.7-14 6-16.9-7-16.9-7l-215.2-124.7s-3.9-1.3-4.3-6c-.5-4.4 5.1-6.5 5.1-6.5l255.9-145.5s3.2-2.2 9.2-2c6 0 9.9 1.6 9.9 1.6l216.9 124c-.1 0 6.2 3.1 6.9 7.5z"/>
  </g>
  <g fill="none" stroke="#CBD000" class="strokegreen" stroke-width="6" stroke-miterlimit="10">
    <path d="M1455.7 796.1l137 77.7s6.4 3.2 7 7.5c.5 4.4-3.9 8-3.9 8l-45 25.4m-1.5-496L1432.6 353s-3.5-2-3.8-5.9c-.4-4.2 4.7-6.6 4.7-6.6l65-37.6m17.3-108.3l70.4 40.2s6.5 3.1 7 7.5c.6 5.2-4 8-4 8l-75.5 43.8m175.2 61.9l123 70.4s6.4 3.1 7 7.5c.5 4.4-4 8-4 8l-126.8 73.4m-552.3-219.7l26-15s3.2-2 9.1-2c6 0 9.8 1.7 9.8 1.7l92 52.6m134 166.3L1290 433.7s-3.6-2-4.2-6c-.6-3.7 5.3-6.5 5.3-6.5l48.8-27.5m352.1 264l-116.6-65.6s-3.8-1.3-4.3-6c-.4-4.4 5.2-6.5 5.2-6.5l49.7-27.4M682 918.7L565.3 853s-3.8-1.4-4.2-6c-.5-4.5 5.2-6.6 5.2-6.6l49.6-27.4m2076.9 335L1645.5 550.9s-3.8-1.3-4.2-6c-.5-4.4 5.1-6.5 5.1-6.5l49.7-27.4M769.6 870l-116.7-65.5s-3.7-2-3.9-5.8c-.2-4.2 4.8-6.7 4.8-6.7l67.6-39m775.9-129.5l-691.5 400.4s-7.6 5.8-14 6-16.7-7-16.7-7l-99.8-56"/>
    <path d="M1799 452l-237.3 136.3s-7.6 5.8-14 6c-6.4.2-16.7-7-16.7-7l-99.8-56m466.3 227.3L1660.2 895s-7.6 5.7-14 6c-6.5.1-16.8-7-16.8-7l-99.7-56"/>
    <path d="M1928 776l-237.4 136.4s-7.6 5.8-14 6c-6.4.2-16.7-7-16.7-7l-99.8-56m2 53.8l-382 219.8s-7.6 5.8-14 6c-6.5.2-16.8-7-16.8-7l-99.8-56M847.8 679.7L616.1 813s-8.6 5.4-14.9 5.3a42.4 42.4 0 0 1-15.8-6.1L485.6 756m281.3-350.9L516.3 549.3s-8.6 5.3-14.9 5.2a40.6 40.6 0 0 1-15.8-6.1l-99.8-56m1694.6-201.6L1843.1 427s-7.8 4.2-14.3 4.5-16.4-5.3-16.4-5.3l-99.8-56.1m-145.3-107l-192.2 111s-9.4 5.7-14 5.7c-6.3 0-16.7-6.6-16.7-6.6l-99.8-56.1m9.9 126.8l-192.3 111.5s-7.7 4.3-14.1 4.5c-6.4.2-16.6-5.3-16.6-5.3l-93.8-52.7"/>
    <path d="M1221.4 303.6l123 70.4s6.3 3.2 6.9 7.5c.7 5.1-3.8 8-3.8 8l-45 25.4m105.1 101.9l123 70.4s6.4 3.2 7 7.5-4 8-4 8l-45 25.5m99-54.8l119.4-68.6s3.2-2 9.2-2c6 0 9.8 1.7 9.8 1.7l92 52.6m-357.5 241.7l-124-69.6s-3.7-1.3-4.2-6c-.5-4.5 5.2-6.6 5.2-6.6l47.7-28.1m-356.3-135.3L707 368.8s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l47.7-28.2M680 776.8l590.2-342s3.6-2.3 9.6-2.3 9.4 1.8 9.4 1.8l92 52.6"/>
  </g>
  <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M299.3 470.2l299.5-188.5 125.2-20 309.4-44.5 13 11.5 46.2-20.8 122 69.5 144.6 54.4 321-142.6 347.3 202.7 457.4 89.9 364.8 251.7-15.6-615L2792.4-77 452.9-97 5.5-97.7l-163.5 18-25.4 371z"/>
  <path fill-rule="evenodd" clip-rule="evenodd" fill="#9D9D9C" d="M1216.6 1084c.5 4.5-4 8.1-4 8.1l-251 145.3s-7.6 5.7-14 6c-6.6.1-16.9-7-16.9-7L715 1113s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l257.4-148.1s3.2-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6l217.2 124.8c0-.2 6.5 3 7 7.4zm309.8-178.9c.6 4.5-4 8.1-4 8.1l-249.7 144s-7.6 5.7-14 6c-6.6.1-16.9-7-16.9-7l-215-123s-3.8-1.3-4.3-5.9c-.4-4.5 5.2-6.6 5.2-6.6l255.9-147.4s3.2-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6l216.7 124.7s6.3 3.1 7 7.5zm276.6 159.6c.6 4.4-4 8-4 8l-249.7 144s-7.6 5.8-14 6c-6.6.2-16.9-7-16.9-7l-215-122.9s-3.8-1.3-4.3-6c-.4-4.5 5.2-6.6 5.2-6.6l255.9-147.4s3.2-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6l216.7 124.8c0-.1 6.3 3 7 7.5zm-519.2-338c.6 4.4-4 8-4 8l-844.4 488s-7.6 5.7-14 6c-6.6.1-16.9-7-16.9-7L189 1097.5s-3.8-1.3-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l850.9-489.3s3.2-2.1 9.2-2c6 0 10 1.6 10 1.6l216.8 124.1c0-.2 6.4 3 7 7.4zm1107 279.6c.5 4.4-4 8-4 8l-249.5 144.5s-7.7 5.8-14.1 6c-6.4.1-16.8-7-16.8-7L1405 754.1s-3.9-1.4-4.3-6c-.5-4.5 5.1-6.6 5.1-6.6L1663 594.2s3.1-2.2 9.2-2c6 0 9.9 1.6 9.9 1.6l701.6 405c0-.1 6.4 3 7 7.5zm426.2-352c.7 4.4-3.8 8-3.8 8l-138.4 446.1s-7.7 5.8-14.2 6c-6.4.2-16.8-7-16.8-7l-927-531.7s-3.9-1.3-4.4-6c-.5-4.4 5.2-6.6 5.2-6.6l463.5-267.6s3.2-2.1 9.2-2 10 1.6 10 1.6L2810 646.8s6.3 3 7 7.5z"/>
  <path fill="none" d="M1775.6 843L1655 912.6s-7.6 5.8-14 6c-6.5.2-16.7-7-16.7-7l-210.6-124M1514.9 621l136.1-77.5s3.2-2.2 9.2-2c6 0 9.8 1.6 9.8 1.6l92 52.6"/>
  <path fill-rule="evenodd" clip-rule="evenodd" fill="#9D9D9C" d="M1596.7 545.3c.6 4.4-4 8-4 8L1342 699s-7.7 5.8-14.1 6c-6.6.2-16.8-7-16.8-7l-217-123.8s-4-1.4-4.4-6c-.5-4.5 5.2-6.6 5.2-6.6L1353.7 414s3.2-2.1 9.2-2 10 1.6 10 1.6l216.8 124c-.1 0 6.3 3.3 7 7.7zM557.8 1146c.6 4.4-4 8-4 8l-249.5 144.5s-7.6 5.8-14 6c-6.6.2-16.9-7-16.9-7L55.2 1175s-3.8-1.3-4.3-6c-.5-4.4 5.2-6.6 5.2-6.6l258.8-147.6s3.2-2 9.2-2c6 0 10 1.6 10 1.6l216.8 124.1c-.1 0 6.3 3.2 6.9 7.6zm137.7-399.2c.6 4.4-4 8-4 8L442.2 899.3s-7.7 5.7-14.1 6c-6.6.1-16.9-7-16.9-7L192.8 775.7s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l258.8-147.5s3.2-2.1 9.3-2c6 0 9.9 1.6 9.9 1.6l216.8 124s6.4 3.2 7 7.6zm311.9-179.9c.6 4.4-4 8-4 8L754 719.5s-7.7 5.8-14.1 6c-6.5.1-16.8-7-16.8-7L504.7 595.8s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l258.8-147.5s3.2-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6l216.9 124s6.4 3.2 7 7.6zm898.4-199.4c.5 4.4-4 8-4 8L1652.3 520s-7.7 5.8-14.1 6-16.8-7-16.8-7L1406 394.5s-3.8-1.3-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l255.9-145.5s3.1-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6l216.8 124s6.5 3.2 7 7.6z"/>
  <g fill-rule="evenodd" clip-rule="evenodd">
    <path fill="#FFF" d="M1216.6 1075.4c.5 4.4-4 8-4 8l-251 145.3s-7.6 5.8-14 6c-6.6.2-16.9-7-16.9-7L715 1104.3s-3.8-1.3-4.3-6c-.5-4.4 5.2-6.5 5.2-6.5l257.4-148.1s3.2-2.2 9.2-2c6 0 9.9 1.6 9.9 1.6l217.2 124.7c0-.2 6.5 3 7 7.4zm309.8-178.9c.6 4.4-4 8-4 8l-249.7 144s-7.6 5.8-14 6c-6.6.2-16.9-7-16.9-7l-215-122.9s-3.8-1.3-4.3-6c-.4-4.4 5.2-6.5 5.2-6.5l255.9-147.5s3.2-2 9.2-2c6 0 9.9 1.7 9.9 1.7l216.7 124.6s6.3 3.2 7 7.6zM1803 1056c.6 4.4-4 8-4 8l-249.7 144s-7.6 5.8-14 6c-6.6.2-16.9-6.9-16.9-6.9l-215-123s-3.8-1.3-4.3-5.9c-.4-4.5 5.2-6.6 5.2-6.6l255.9-147.4s3.2-2.2 9.2-2c6 0 9.9 1.6 9.9 1.6l216.7 124.7s6.3 3.1 7 7.5zm1319.4 116.2c.6 4.4-3.9 8-3.9 8l-249.7 144s-7.7 5.8-14.1 6c-6.6.2-16.8-7-16.8-7l-215-122.9s-3.8-1.3-4.3-6c-.5-4.4 5.2-6.6 5.2-6.6l255.8-147.4s3.2-2 9.3-2c6 0 9.9 1.6 9.9 1.6l216.6 124.8c0-.1 6.4 3 7 7.5zM1283.8 718c.6 4.5-4 8.1-4 8.1L473 1192.6s-7.7 5.8-14.1 6c-6.5.1-16.8-7-16.8-7l-215.6-124.1s-3.9-1.4-4.4-6c-.4-4.5 5.2-6.6 5.2-6.6l813.4-468s3.2-2.2 9.2-2c6 0 10 1.6 10 1.6l216.8 124s6.4 3.1 7 7.6zm1107 279.6c.5 4.5-4 8.1-4 8.1l-249.5 144.4s-7.7 5.8-14.1 6-16.8-7-16.8-7L1405 745.5s-3.9-1.3-4.3-6c-.5-4.4 5.1-6.6 5.1-6.6L1663 585.6s3.1-2 9.2-2c6 0 9.9 1.6 9.9 1.6l701.6 405s6.4 3.1 7 7.5z"/>
    <path fill="#FFF" d="M3248.6 894.7c.6 4.4-3.9 8-3.9 8l-454.3 264.7s-7.7 5.7-14.1 6c-6.4.1-16.8-7-16.8-7L1716.7 567.1s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l463.5-267.7s3.2-2 9.2-2 10 1.6 10 1.6l1041.3 600.8s6.4 3 7 7.5zM1596.7 536.6c.6 4.5-4 8.1-4 8.1L1342 690.3s-7.7 5.8-14.1 6c-6.6.1-16.8-7-16.8-7l-217-123.9s-4-1.3-4.4-6c-.5-4.4 5.2-6.5 5.2-6.5l258.8-147.6s3.2-2 9.2-2 10 1.7 10 1.7l216.8 124c-.1 0 6.3 3.2 7 7.6zM557.8 1137.4c.6 4.4-4 8-4 8L304.4 1290s-7.6 5.7-14 6c-6.6.1-16.9-7-16.9-7L55.2 1166.3s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l258.8-147.6s3.2-2.1 9.2-2c6 0 10 1.6 10 1.6l216.8 124c-.1 0 6.3 3.3 6.9 7.7zm137.7-399.3c.6 4.4-4 8.1-4 8.1L442.2 890.6s-7.7 5.8-14.1 6c-6.6.2-16.9-7-16.9-7L192.8 767s-3.8-1.3-4.3-6c-.5-4.4 5.2-6.5 5.2-6.5l258.8-147.6s3.2-2 9.3-2c6 0 9.9 1.6 9.9 1.6l216.8 124.1s6.4 3.1 7 7.5zm311.7-180.2c.6 4.4-4 8-4 8L753.7 710.4s-7.7 5.7-14 6c-6.6.1-16.9-7-16.9-7L504.5 586.8s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l258.8-147.5s3.2-2.1 9.2-2c6 0 10 1.6 10 1.6l216.8 124s6.3 3.1 7 7.6zM1320 377.7c.7 4.4-3.9 8-3.9 8L1066.2 531s-7.6 5.7-14 6c-6.5.1-16.9-7-16.9-7L538.7 245.4s-3.9-1.3-4.3-6c-.5-4.4 5.2-6.5 5.2-6.5L798.5 85.3s3.2-2 9.2-2c6 0 9.9 1.6 9.9 1.6l495.5 285.2c-.1 0 6.3 3.2 7 7.6zm309.2-179c.5 4.4-4 8-4 8l-249.5 144.5s-7.7 5.7-14.1 6-16.8-7-16.8-7l-218.2-122.6s-3.9-1.4-4.4-6c-.4-4.5 5.2-6.6 5.2-6.6l258.9-147.5s3.1-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6L1622 191s6.5 3.1 7 7.6zm276.6 160.2c.5 4.4-4 8-4 8l-249.5 144.5s-7.7 5.7-14.1 6-16.8-7-16.8-7L1406 385.8s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l255.9-145.5s3.1-2.1 9.2-2c6 0 9.9 1.6 9.9 1.6l216.8 124s6.5 3.1 7 7.6z"/>
    <path fill="#FFF" d="M1629.8 197.4c.6 4.4-4 8-4 8L1376.5 350s-7.7 5.8-14.2 6c-6.5.2-16.8-7-16.8-7l-215.3-124.6s-3.8-1.3-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6l255.8-145.6s3.2-2 9.3-2c6 0 9.8 1.6 9.8 1.6l217 124.1s6.3 3.2 7 7.6zm-901 203.4c-.6-4.4-7-7.6-7-7.6L213.5 107.6s-3.8-1.6-9.8-1.7c-6.1 0-9.3 2-9.3 2l-722.6 418.5s-5.6 2.1-5.1 6.6a7 7 0 0 0 4.3 6l387.3 277.9-265.6 214.4s-5.7 2.2-5.2 6.7a7 7 0 0 0 4.3 6l287.2 162.3s10.2 7.1 16.8 7c6.4-.2 14.1-6 14.1-6l470-272.5s4.5-3.6 4-8c-.7-4.5-7-7.6-7-7.5L119.4 771.5s-3.8-1.6-4-4.7c-.1-3.6 9-8.3 9-8.3L724.9 409s4.5-3.7 3.9-8zM950 1562c.6 4.4-4 8-4 8l-249.5 144.5s-7.6 5.8-14 6c-6.6.1-16.9-7-16.9-7L447.3 1591s-3.8-1.4-4.3-6c-.5-4.5 5.2-6.6 5.2-6.6L707 1430.8s3.2-2.1 9.2-2c6 0 10 1.6 10 1.6l216.8 124s6.3 3.3 7 7.6zm912.6-86.7c.6 4.4-4 8-4 8l-249.4 144.5s-7.7 5.8-14.2 6c-6.5.2-16.8-7-16.8-7L1360 1504.3s-3.8-1.3-4.3-6c-.5-4.4 5.2-6.6 5.2-6.6l258.8-147.5s3.2-2 9.2-2c6.1 0 10 1.6 10 1.6l216.8 124.1s6.3 3.1 7 7.5zm1192.9-68.8c-.6-4.5-7-7.6-7-7.6l-217-124.1s-3.7-1.6-9.8-1.6-9.2 2-9.2 2l-316.6 180.3s-6 4.2-11.6 4.4-12.8-5-12.8-5L2227 1316s-3.7-1.6-9.9-1.6c-6 0-9.2 2-9.2 2L1949 1464s-5.7 2.1-5.2 6.6a7 7 0 0 0 4.3 6l327 183.4s10.4 7.2 16.8 7c6.6-.3 14.1-6 14.1-6l97.3-56.4 143.6 80.7s10.4 7.2 16.8 6.9c6.5-.2 14.1-6 14.1-6l473.4-271.9c.2.2 4.7-3.4 4.2-7.8z"/>
    <path fill="#FFF" d="M2081.2 1476.5c-.6-4.5-7-7.6-7-7.6l-217-124.1s-3.7-1.6-9.8-1.6c-6.2 0-9.2 2-9.2 2l-295.3 169.3s-6 4.1-11.6 4.3c-5.6.2-12.8-5-12.8-5l-247.8-140.3s-3.8-1.6-10-1.6c-6 0-9.1 2-9.1 2l-258.9 147.6s-5.6 2.1-5.2 6.6a7 7 0 0 0 4.4 6l327 183.4s10.3 7.2 16.8 7a32 32 0 0 0 14.1-6l97.3-56.4 143.6 80.7s10.3 7.2 16.8 6.9c6.5-.2 14.1-6 14.1-6l455.5-259.4c.1.1 4.6-3.4 4-7.8z"/>
    <path opacity=".3" fill="#878787" d="M2103.2 688l247-128.8-47.1-68z"/>
  </g>
  <path opacity=".3" fill="#878787" d="M2103.8 415l66.2-30.6 76.4-26-69.1-43.2z"/>
  <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
    <path fill="#DADADA" d="M2103.8 297.3l86.1-49.4-37.7-20.8-86.3 49.5z"/>
    <path fill="#DADADA" d="M2105.1 292.2l75.5-43.4-29.8-16.4-75.5 43.4zm-39.1-15.6l37.8 20.7V415l-37.8-20.8z"/>
    <path fill="#B2B2B2" d="M2103.9 415l86.1-49.5V247.9l-86.2 49.4z"/>
  </g>
  <path d="M2114.7 310.2l11.4-6.5v-11l-11.4 6.6zM2142 295l11.3-6.4v-11l-11.3 6.5zm27.1-15.2l11.3-6.4v-10.9l-11.3 6.5zm-54.4 51.9l11.4-6.6v-10.8l-11.4 6.4zm27.3-15.2l11.3-6.4v-11l-11.3 6.6zm27.1-15.2l11.3-6.4V284l-11.3 6.5zm-54.4 52.9l11.4-6.5v-11l-11.4 6.6zM2142 339l11.3-6.6v-10.8L2142 328zm27.1-15.2l11.3-6.4v-10.9l-11.3 6.5zm-54.4 52.8l11.4-6.4v-11l-11.4 6.6zm27.3-15.1l11.3-6.6v-10.7l-11.3 6.4zm27.1-15.1l11.3-6.6V329l-11.3 6.4zm-54.4 51.3l11.4-6.5v-11l-11.4 6.6zm27.3-15.2l11.3-6.4v-11l-11.3 6.5zm27.1-15.2l11.3-6.4v-11l-11.3 6.6zM2077.2 292.9l13.8 7.6-.2 10.3-13.7-7.6zm0 20.1l13.8 7.5-.2 10.5-13.7-7.8zm0 21.5l13.8 7.6-.2 10.3-13.7-7.7zm0 22.5l13.8 7.5-.2 10.4-13.7-7.7zm0 20.4l13.8 7.7-.2 10.4-13.7-7.7z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
  <defs>
    <path id="a" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="b">
    <use xlink:href="#a" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#b)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261v8.8h1.1a7 7 0 0 1-8.8-4.6h5.8v-4.4l-1.2-4.4a7 7 0 0 1 8.9 4.6h-5.8z"/>
  <defs>
    <path id="c" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="d">
    <use xlink:href="#c" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#d)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261v8.5h1a6.8 6.8 0 0 1-8.5-4.5h5.6v-4.2l-1-4.2c3.5-1.2 7.3.8 8.5 4.5h-5.6v-.1z"/>
  <defs>
    <path id="e" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="f">
    <use xlink:href="#e" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#f)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261v8.4h1a6.6 6.6 0 0 1-8.3-4.3h5.4v-4.3l-1-4.1c3.4-1 7.1.8 8.3 4.3h-5.4z"/>
  <defs>
    <path id="g" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="h">
    <use xlink:href="#g" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#h)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261v8.2h1c-3.4 1-7-1-8.1-4.3h5.2v-4.1l-1-4c3.4-1 7 1 8 4.3h-5.1z"/>
  <defs>
    <path id="i" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="j">
    <use xlink:href="#i" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#j)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.2v7.9h1c-3.3 1-6.9-.8-8-4.2h5v-4.1l-.9-3.7c3.3-1.1 6.8.7 7.9 4h-5z"/>
  <defs>
    <path id="k" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="l">
    <use xlink:href="#k" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#l)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.3v7.6h.9a6 6 0 0 1-7.6-4h4.9v-4.1l-.9-3.6a6 6 0 0 1 7.6 4h-5z"/>
  <defs>
    <path id="m" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="n">
    <use xlink:href="#m" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#n)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.3v7.4h.8a6 6 0 0 1-7.4-3.9h4.7v-4l-.8-3.4c3-1 6.4.8 7.4 3.9h-4.7z"/>
  <defs>
    <path id="o" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="p">
    <use xlink:href="#o" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#p)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.4v7.2h.8c-3 1-6.3-.8-7.2-3.8h4.5v-4l-.8-3.2c3-1 6.2.8 7.2 3.8h-4.5z"/>
  <defs>
    <path id="q" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="r">
    <use xlink:href="#q" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#r)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.4v6.9h.7c-3 1-6-.7-7-3.7h4.4v-3.8l-.7-3c2.9-1 6 .6 7 3.6h-4.4z"/>
  <defs>
    <path id="s" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="t">
    <use xlink:href="#s" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#t)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.5v6.7h.7c-2.8.9-5.9-.7-6.8-3.6h4.2v-3.8l-.7-2.9c2.8-.8 5.9.7 6.7 3.6h-4.1z"/>
  <defs>
    <path id="u" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="v">
    <use xlink:href="#u" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#v)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.5v6.4h.6c-2.7.9-5.7-.7-6.5-3.4h4v-3.8l-.6-2.7c2.7-.8 5.7.7 6.4 3.4h-4z"/>
  <defs>
    <path id="w" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="x">
    <use xlink:href="#w" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#x)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.6v6.2h.6a5 5 0 0 1-6.3-3.3h3.9v-3.7l-.6-2.5a5 5 0 0 1 6.2 3.3h-3.8z"/>
  <defs>
    <path id="y" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="z">
    <use xlink:href="#y" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#z)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.7v6h.5c-2.5.8-5.2-.6-6-3.2h3.6v-3.7l-.5-2.3c2.5-.8 5.2.6 6 3.2h-3.6z"/>
  <defs>
    <path id="A" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="B">
    <use xlink:href="#A" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#B)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.7v5.7h.4c-2.4.8-5-.5-5.8-3h3.5v-3.6l-.4-2.1c2.4-.8 5 .6 5.8 3h-3.5z"/>
  <defs>
    <path id="C" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="D">
    <use xlink:href="#C" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#D)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.8v5.5h.4c-2.3.8-4.8-.5-5.6-2.9h3.3v-3.6l-.4-2c2.3-.8 4.8.6 5.6 2.9h-3.3z"/>
  <defs>
    <path id="E" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="F">
    <use xlink:href="#E" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#F)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.8v5.4h.4c-2.3.7-4.7-.5-5.5-2.8h3.2v-3.6l-.4-2c2.3-.6 4.7.7 5.5 3h-3.2z"/>
  <defs>
    <path id="G" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="H">
    <use xlink:href="#G" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#H)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.8v5.3h.3c-2.3.7-4.7-.5-5.4-2.7h3.2v-3.6l-.3-1.8c2.3-.7 4.7.5 5.4 2.8h-3.2z"/>
  <defs>
    <path id="I" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="J">
    <use xlink:href="#I" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#J)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.8v5.2h.3c-2.2.7-4.6-.5-5.3-2.7h3v-3.5l-.2-1.7c2.2-.7 4.6.5 5.3 2.8l-3.1-.1z"/>
  <defs>
    <path id="K" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="L">
    <use xlink:href="#K" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#L)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.9v5.1h.3c-2.2.7-4.5-.5-5.2-2.6h3v-3.6l-.3-1.7c2.2-.7 4.5.5 5.2 2.7h-3z"/>
  <defs>
    <path id="M" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="N">
    <use xlink:href="#M" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#N)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.9v5h.3a4 4 0 0 1-5.1-2.6h3v-3.5l-.3-1.6a4 4 0 0 1 5 2.7h-3z"/>
  <defs>
    <path id="O" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="P">
    <use xlink:href="#O" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#P)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.9v5h.2a4 4 0 0 1-5-2.6h2.9v-3.5l-.2-1.5a4 4 0 0 1 5 2.6h-3z"/>
  <defs>
    <path id="Q" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="R">
    <use xlink:href="#Q" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#R)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 261.9v4.9h.2a4 4 0 0 1-5-2.6h2.9v-3.4l-.2-1.5c2-.7 4.3.4 4.9 2.6h-2.8z"/>
  <defs>
    <path id="S" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="T">
    <use xlink:href="#S" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#T)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.8h.2c-2 .6-4.2-.5-4.8-2.5h2.7v-3.5l-.2-1.4c2-.7 4.2.4 4.8 2.5h-2.7z"/>
  <defs>
    <path id="U" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="V">
    <use xlink:href="#U" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#V)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.8h.2c-2 .6-4.1-.5-4.8-2.5h2.7v-3.5l-.2-1.3c2-.7 4.1.4 4.8 2.5h-2.7z"/>
  <defs>
    <path id="W" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="X">
    <use xlink:href="#W" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#X)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.7h.2a4 4 0 0 1-4.7-2.4h2.6v-3.5l-.2-1.3c1.9-.6 4 .4 4.7 2.4h-2.6z"/>
  <defs>
    <path id="Y" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="Z">
    <use xlink:href="#Y" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#Z)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.6c-1.8.5-3.8-.5-4.5-2.4h2.5v-3.4l-.1-1.2c1.9-.6 4 .4 4.6 2.4h-2.5z"/>
  <defs>
    <path id="aa" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="ab">
    <use xlink:href="#aa" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#ab)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.5c-1.8.5-3.8-.5-4.4-2.3h2.5v-3.4l-.1-1.2c1.9-.5 4 .5 4.5 2.4h-2.5z"/>
  <defs>
    <path id="ac" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="ad">
    <use xlink:href="#ac" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#ad)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.5c-1.7.5-3.8-.5-4.3-2.3h2.4v-3.4l-.1-1c1.8-.6 3.8.4 4.4 2.2h-2.4z"/>
  <defs>
    <path id="ae" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="af">
    <use xlink:href="#ae" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#af)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.4c-1.7.5-3.7-.5-4.2-2.3h2.3v-3.3l-.1-1c1.8-.6 3.7.4 4.3 2.2h-2.3z"/>
  <defs>
    <path id="ag" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="ah">
    <use xlink:href="#ag" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#ah)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.3c-1.7.6-3.6-.5-4.1-2.2h2.3v-3.3l-.1-1c1.8-.5 3.6.5 4.2 2.2h-2.3z"/>
  <defs>
    <path id="ai" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aj">
    <use xlink:href="#ai" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#aj)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4.2c-1.7.6-3.6-.4-4.1-2.2h2.2v-4.1c1.7-.5 3.5.4 4.1 2.2h-2.2z"/>
  <defs>
    <path id="ak" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="al">
    <use xlink:href="#ak" overflow="visible"/>
  </clipPath>
  <path clip-path="url(#al)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.5 262v4a3 3 0 0 1-4-2h2v-4.1c1.8-.5 3.6.4 4.1 2.2h-2.1z"/>
  <defs>
    <path id="am" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="an">
    <use xlink:href="#am" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#an)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="3.2"/>
  <defs>
    <path id="ao" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="ap">
    <use xlink:href="#ao" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#ap)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="3.1"/>
  <defs>
    <path id="aq" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="ar">
    <use xlink:href="#aq" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#ar)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="3"/>
  <defs>
    <path id="as" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="at">
    <use xlink:href="#as" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#at)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="3"/>
  <defs>
    <path id="au" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="av">
    <use xlink:href="#au" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#av)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.9"/>
  <defs>
    <path id="aw" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="ax">
    <use xlink:href="#aw" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#ax)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.8"/>
  <defs>
    <path id="ay" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="az">
    <use xlink:href="#ay" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#az)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.8"/>
  <defs>
    <path id="aA" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aB">
    <use xlink:href="#aA" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aB)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.7"/>
  <defs>
    <path id="aC" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aD">
    <use xlink:href="#aC" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aD)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.6"/>
  <defs>
    <path id="aE" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aF">
    <use xlink:href="#aE" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aF)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.5"/>
  <defs>
    <path id="aG" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aH">
    <use xlink:href="#aG" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aH)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.5"/>
  <defs>
    <path id="aI" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aJ">
    <use xlink:href="#aI" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aJ)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.4"/>
  <defs>
    <path id="aK" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aL">
    <use xlink:href="#aK" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aL)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.3"/>
  <defs>
    <path id="aM" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aN">
    <use xlink:href="#aM" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aN)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.2"/>
  <defs>
    <path id="aO" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aP">
    <use xlink:href="#aO" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aP)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.2"/>
  <defs>
    <path id="aQ" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aR">
    <use xlink:href="#aQ" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aR)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2.1"/>
  <defs>
    <path id="aS" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aT">
    <use xlink:href="#aS" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aT)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2"/>
  <defs>
    <path id="aU" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aV">
    <use xlink:href="#aU" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aV)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="2"/>
  <defs>
    <path id="aW" d="M2107.5 261.8v8.1"/>
  </defs>
  <clipPath id="aX">
    <use xlink:href="#aW" overflow="visible"/>
  </clipPath>
  <circle clip-path="url(#aX)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.9"/>
  <g>
    <defs>
      <path id="aY" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="aZ">
      <use xlink:href="#aY" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#aZ)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.8"/>
  </g>
  <g>
    <defs>
      <path id="ba" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bb">
      <use xlink:href="#ba" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bb)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.7"/>
  </g>
  <g>
    <defs>
      <path id="bc" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bd">
      <use xlink:href="#bc" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bd)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.7"/>
  </g>
  <g>
    <defs>
      <path id="be" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bf">
      <use xlink:href="#be" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bf)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.6"/>
  </g>
  <g>
    <defs>
      <path id="bg" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bh">
      <use xlink:href="#bg" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bh)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.5"/>
  </g>
  <g>
    <defs>
      <path id="bi" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bj">
      <use xlink:href="#bi" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bj)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.4"/>
  </g>
  <g>
    <defs>
      <path id="bk" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bl">
      <use xlink:href="#bk" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bl)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.4"/>
  </g>
  <g>
    <defs>
      <path id="bm" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bn">
      <use xlink:href="#bm" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bn)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.3"/>
  </g>
  <g>
    <defs>
      <path id="bo" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bp">
      <use xlink:href="#bo" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bp)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.2"/>
  </g>
  <g>
    <defs>
      <path id="bq" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="br">
      <use xlink:href="#bq" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#br)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.2"/>
  </g>
  <g>
    <defs>
      <path id="bs" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bt">
      <use xlink:href="#bs" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bt)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.2"/>
  </g>
  <g>
    <defs>
      <path id="bu" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bv">
      <use xlink:href="#bu" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bv)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1.1"/>
  </g>
  <g>
    <defs>
      <path id="bw" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bx">
      <use xlink:href="#bw" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bx)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1"/>
  </g>
  <g>
    <defs>
      <path id="by" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bz">
      <use xlink:href="#by" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bz)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r="1"/>
  </g>
  <g>
    <defs>
      <path id="bA" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bB">
      <use xlink:href="#bA" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bB)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".9"/>
  </g>
  <g>
    <defs>
      <path id="bC" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bD">
      <use xlink:href="#bC" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bD)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".8"/>
  </g>
  <g>
    <defs>
      <path id="bE" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bF">
      <use xlink:href="#bE" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bF)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".7"/>
  </g>
  <g>
    <defs>
      <path id="bG" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bH">
      <use xlink:href="#bG" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bH)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".7"/>
  </g>
  <g>
    <defs>
      <path id="bI" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bJ">
      <use xlink:href="#bI" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bJ)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".6"/>
  </g>
  <g>
    <defs>
      <path id="bK" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bL">
      <use xlink:href="#bK" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bL)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".5"/>
  </g>
  <g>
    <defs>
      <path id="bM" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bN">
      <use xlink:href="#bM" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bN)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".4"/>
  </g>
  <g>
    <defs>
      <path id="bO" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bP">
      <use xlink:href="#bO" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bP)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".4"/>
  </g>
  <g>
    <defs>
      <path id="bQ" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bR">
      <use xlink:href="#bQ" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bR)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".3"/>
  </g>
  <g>
    <defs>
      <path id="bS" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bT">
      <use xlink:href="#bS" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bT)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".2"/>
  </g>
  <g>
    <defs>
      <path id="bU" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bV">
      <use xlink:href="#bU" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bV)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".1"/>
  </g>
  <g>
    <defs>
      <path id="bW" d="M2107.5 261.8v8.1"/>
    </defs>
    <clipPath id="bX">
      <use xlink:href="#bW" overflow="visible"/>
    </clipPath>
    <circle clip-path="url(#bX)" fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" cx="2107.5" cy="263.1" r=".1"/>
  </g>
  <g>
    <path fill="none" stroke="#3C3C3B" stroke-miterlimit="10" d="M2107.5 261.8v8.1"/>
  </g>
  <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2109 271.4s0 1-1.7 1c-1.2 0-1.2-1-1.2-1v-11h2.9v11z"/>
  <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2108.2 251.5a29.4 29.4 0 0 1-6.6-14 15 15 0 0 0-4 15.8 17.3 17.3 0 0 0 20.3 11.6c2-.4 3.8-1.3 5.3-2.4a31.6 31.6 0 0 1-15-11z"/>
  <g>
    <path fill="#DADADA" d="M2116.3 263.3c-7.4-2-15-9.4-17-16.7-2-7.3 2.3-11.8 9.6-10 7.4 2 15 9.5 17 16.8 2 7.3-2.2 11.7-9.6 9.9"/>
    <path fill="none" stroke="#3C3C3B" stroke-miterlimit="10" d="M2116.3 263.3c-7.4-2-15-9.4-17-16.7-2-7.3 2.3-11.8 9.6-10 7.4 2 15 9.5 17 16.8 2 7.3-2.2 11.7-9.6 9.9"/>
  </g>
  <path fill="#DADADA" stroke="#3C3C3B" stroke-width=".8" stroke-linejoin="round" stroke-miterlimit="10" d="M2106.4 257.4l7.8-8.3-9.5 6.2z"/>
  <g>
    <path fill="#DADADA" d="M2115.3 249.6a2 2 0 0 1-1.6-1.7c-.1-.7.4-1.3 1.1-1.2a2 2 0 0 1 1.7 1.6c.2.8-.3 1.4-1.2 1.3"/>
    <defs>
      <path id="bY" d="M2115.3 249.6a2 2 0 0 1-1.6-1.7c-.1-.7.4-1.3 1.1-1.2a2 2 0 0 1 1.7 1.6c.2.8-.3 1.4-1.2 1.3"/>
    </defs>
    <clipPath id="bZ">
      <use xlink:href="#bY" overflow="visible"/>
    </clipPath>
    <g clip-path="url(#bZ)">
      <path fill="#DADADA" d="M2116.6 248.3a2 2 0 0 0-1.7-1.6c-.7-.1-1.3.4-1.1 1.2a2 2 0 0 0 1.6 1.7c.7 0 1.3-.5 1.2-1.3"/>
      <path fill="none" stroke="#3C3C3B" stroke-miterlimit="10" d="M2116.6 248.3a2 2 0 0 0-1.7-1.6c-.7-.1-1.3.4-1.1 1.2a2 2 0 0 0 1.6 1.7c.7 0 1.3-.5 1.2-1.3"/>
    </g>
    <path fill="none" stroke="#3C3C3B" stroke-miterlimit="10" d="M2115.3 249.6a2 2 0 0 1-1.6-1.7c-.1-.7.4-1.3 1.1-1.2a2 2 0 0 1 1.7 1.6c.2.8-.3 1.4-1.2 1.3"/>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M2190.2 462.6l73.6-31 69-25.7-69.1-43.2z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M2190.2 344.8l86.2-49.3-37.8-20.9-86.2 49.6z"/>
      <path fill="#DADADA" d="M2191.6 339.7l75.5-43.4-30-16.4-75.4 43.4zm-39.2-15.5l37.8 20.6.1 117.8-37.8-20.9z"/>
      <path fill="#B2B2B2" d="M2190.3 462.6l86.2-49.6-.1-117.5-86.2 49.3z"/>
    </g>
    <path d="M2201.2 357.7l11.3-6.4v-11l-11.3 6.6zm27.2-15.2l11.4-6.4v-11l-11.4 6.6zm27.1-15.1l11.4-6.5v-11l-11.4 6.6zm-54.3 51.8l11.3-6.5v-10.9l-11.3 6.5zm27.2-15.2l11.4-6.4v-11l-11.4 6.6zm27.1-15.1l11.4-6.5v-10.8l-11.4 6.4zm-54.3 52.8l11.3-6.4v-11l-11.3 6.5zm27.2-15.2l11.4-6.5v-11l-11.4 6.6zm27.1-15.2l11.4-6.4v-10.8l-11.4 6.4zm-54.3 52.9l11.3-6.5v-11l-11.3 6.6zm27.2-15.2l11.4-6.5v-10.8l-11.4 6.4zm27.1-15l11.4-6.6v-10.9l-11.4 6.5zm-54.3 51.2l11.3-6.4v-11l-11.3 6.5zm27.2-15.2l11.4-6.5v-10.9l-11.4 6.6zm27.1-15.1l11.4-6.5v-11l-11.4 6.6zM2163.6 340.4l13.8 7.6-.1 10.4-13.8-7.7zm0 20.1l13.8 7.6-.1 10.4-13.8-7.7zm0 21.5l13.8 7.6-.1 10.4-13.8-7.7zm0 22.5l13.8 7.6-.1 10.3-13.8-7.6zm0 20.5l13.8 7.6-.1 10.4-13.8-7.7z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
  </g>
  <g>
    <path fill="#878787" d="M2135.5 845.9l-20.6-5.6-35.7 3.3 1.4 3 1.7 3.3-3.6-2.2-33 19.3 64.7 48.9 19 21.1 64.6-35.3 3-1.7 3.4.6-61-40.4m-134.2-369l29.6 18.7 94.2-50.4-28-14.8 39.7-29.5 3.2-24.3-30.3 1.4-50 31.7-22.7-13z" opacity=".3"/>
    <path fill="#878787" d="M2048.5 389.3c.4.4 1 .6 1.3.9 10.9 7.8 9.5 19.3-2.8 25.6a45.2 45.2 0 0 1-40.1-1.5c-4.5 2.2-14.2 7.4-15.6 7.8a4 4 0 0 1-3-.6c-.8-.6-1.5-1.4-1-2.3 1.1-.7 11-5.6 15.7-8-8.7-7.7-6.8-18 4.8-24 11.8-6 29.7-5 40.7 2.1z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1992.3 421.4c-.5 1.6-4.6 2.7-6.5-.5v-26l6.5.5s.2 23.6 0 26z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2021.1 368.4a29.7 29.7 0 0 1-31.9 30.3c-17.6-1-31.8-16.3-31.8-34.2s14.3-31.5 31.8-30.4a34.7 34.7 0 0 1 31.9 34.3z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1989.5 335.1a22 22 0 0 0-3.6 0c5.8 7.6 9.2 17 9.2 27.1 0 13.9-6.6 25.8-16.7 33 3.4 1.5 7 2.5 11 2.7a29 29 0 0 0 31-29.4 33.4 33.4 0 0 0-30.9-33.4z"/>
    <path fill="#878787" d="M2118.6 421.9l1.3.8c10.9 7.9 9.5 19.3-2.8 25.7-11.7 5.8-29 5-40.1-1.6-4.5 2.2-14.2 7.4-15.6 8a4 4 0 0 1-3-.8c-.8-.5-1.5-1.3-1-2.3l15.8-8c-8.8-7.6-6.9-18 4.8-23.9 11.7-6 29.6-5 40.6 2z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M2062.3 454c-.5 1.6-4.6 2.6-6.5-.5v-26l6.5.4s.3 23.6 0 26z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2091.2 401a29.7 29.7 0 0 1-31.9 30.3c-17.6-1-31.8-16.4-31.8-34.2s14.3-31.5 31.8-30.5a34.5 34.5 0 0 1 32 34.3z"/>
    <path opacity=".3" fill="#B2B2B2" d="M2059.6 367.7a22 22 0 0 0-3.5 0 45 45 0 0 1 9 27c0 14-6.5 25.8-16.6 33 3.4 1.6 7 2.5 11 2.7a29 29 0 0 0 31-29.4 33.5 33.5 0 0 0-30.9-33.3z"/>
    <path opacity=".3" fill="#878787" d="M1625.1 703l29.6 18.7 94.3-50.5-28-14.8 39.6-29.4 9.3-35-36.4 12-50 31.7-22.7-13zm233.3-189.8l1.4 1c11.9 8.5 10.4 21-3 27.8a49.3 49.3 0 0 1-43.7-1.6c-5 2.5-15.5 8-17 8.5-1 .3-2.4 0-3.4-.6-.9-.7-1.5-1.5-1-2.5 1.2-.7 12-6 17-8.7-9.5-8.3-7.3-19.6 5.3-26 13-6.7 32.6-5.6 44.4 2.1z"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1797.2 548c-.5 1.9-5 3-7-.4-.3-2.6 0-28.4 0-28.4l7 .5s.3 25.8 0 28.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1828.6 490.3a32.4 32.4 0 0 1-34.6 33c-19.2-1-34.7-17.7-34.7-37.2s15.5-34.3 34.7-33.1a37.7 37.7 0 0 1 34.6 37.3z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1794.2 454.1h-3.8a49 49 0 0 1 10 29.5c0 15.1-7.1 28-18.2 35.8 3.8 1.7 7.8 2.7 12 3a31.4 31.4 0 0 0 33.7-32c0-18.8-15-35-33.7-36.3z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1926 396.4v63.1l71.3 41.3v-63z"/>
      <path fill="#DADADA" d="M1926 400.8l71.3 41.2.3-5.3-38.4-31-33.2-6.7z"/>
      <path fill="#DADADA" d="M2019.4 407.5l-22.1 30.2v63.1l44.2-25.5v-63.1z"/>
      <path fill="#DADADA" d="M1945.3 363.8l-23.8 32.6 76.8 44.6 23.9-32.7z"/>
      <path fill="#DADADA" d="M2041.5 412.4l-.7-.4-21.4-4.5-22.1 30.2v4.3l2.6 1.6 23.8-32.8 17.8 3.9z"/>
      <path fill="#DADADA" d="M1969.1 368.8l-23.8-5 76.9 44.5 23.8 5.1z"/>
      <path fill="#4A4A49" d="M1944.6 362l-23.9 32.7 76.9 44.5 23.8-32.6z"/>
      <path fill="#DADADA" d="M1944.6 362l-.6.8 76.9 44.6.5-.8z"/>
      <path fill="#4A4A49" d="M1968.4 367.1l-23.8-5 76.8 44.5 23.8 5z"/>
      <path fill="#DADADA" d="M1998.3 441l-.7-1.8 23.8-32.6 1 2zm46.9-29.3l.8 1.7-23.6-4.8-1-2z"/>
      <path fill="#DADADA" d="M1920.7 394.7l76.9 44.5.7 1.8-76.8-44.6zm75.3 105.4l1.3.7V442l-1.3-.7zm10.7-111.1l26.8-15.4 26.8 15.4-26.8 15.5z"/>
      <path fill="#B2B2B2" d="M2060.3 400.3v95l-26.8 15.6v-95.2z"/>
      <path fill="#DADADA" d="M2033.5 423.1l26.8-15.5v-5l-26.8 13.4zm-26.8-22.8v95l26.8 15.6v-95.2z"/>
      <path fill="#DADADA" d="M2001.7 449.3v49l16.9 9.8V473z"/>
      <path fill="#4A4A49" d="M2067.4 400.4l-7.1-11.4-26.8 15.5V420z"/>
      <path fill="#DADADA" d="M2006.7 407.6l26.8 15.5v-4.3l-26.8-16.6z"/>
      <path fill="#4A4A49" d="M2006.7 389l-7 11.4 33.8 19.6v-15.5z"/>
      <path fill="#DADADA" d="M2054.3 359.5v29.6l-20.8 12v-29.6zm-41.6 0v29.6l20.8 12v-29.6z"/>
      <path fill="#DADADA" d="M2054.3 365v-4.1l-20.8 11.3v4.8z"/>
      <path fill="#4A4A49" d="M2059.8 359.7l-5.5-9-20.8 12.2v12z"/>
      <path fill="#DADADA" d="M2012.7 365v-3.8l20.8 11.7v4.1z"/>
      <path fill="#4A4A49" d="M2012.7 350.8l-5.4 9 26.2 15.1v-12zm41.6 0l-20.8-60.8v72.9zm-41.6 0l20.8-60.8v72.9z"/>
      <g fill="#DADADA">
        <path d="M2022.5 372.1s-4.9 2.9-4.9 8.5V392l9.7 5.7v-11.5c.1-9.6-4.8-14-4.8-14z"/>
        <path d="M2020.5 390.7V380c0-3 1.7-5.3 3-6.6l-1-1.2s-4.9 2.9-4.9 8.5V392l9.7 5.7v-3.1l-6.8-3.9z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2044.5 372.1s5 2.9 5 8.5V392l-9.8 5.7v-11.5c0-9.6 4.8-14 4.8-14z"/>
        <path d="M2046.5 390.6v-10.8c0-3-1.6-5.3-3-6.6l1-1.2s5 2.9 5 8.5v11.4l-9.8 5.7v-3.1l6.8-3.9z"/>
      </g>
      <path fill="#B2B2B2" d="M2047.7 463.3s8.5 5 8.5 14.6v19.8l-17 9.8v-19.8c0-16.6 8.5-24.4 8.5-24.4z"/>
      <path fill="#DADADA" d="M2051.3 495.5v-18.8c0-5.4-3-9.2-5.2-11.5 1-1.4 1.7-2 1.7-2s8.4 5 8.4 14.7v19.7l-16.9 9.8v-5.3l12-6.6zm-112.5-85.1l-.6-.4-.7.3c0 .1-5.2 3.1-5.3 9.4v29.6l11.8 6.8v-30.8c0-10-5.1-14.8-5.2-14.9zm19.8 11.5l-.6-.5-.7.4s-5.3 3-5.4 9.3v29.7l11.9 6.8v-30.9c0-10-5-14.7-5.2-14.8zm19.9 11.5l-.6-.5-.7.4s-5.3 3-5.4 9.3v29.7l11.8 6.8v-30.8c0-10-5-14.8-5.1-15z"/>
      <g fill="#DADADA">
        <path d="M1938.1 411.1s-4.9 2.9-4.9 8.5v29l9.7 5.7v-29c.1-9.7-4.8-14.2-4.8-14.2z"/>
        <path d="M1934 448v-29c0-4.1 2.7-6.7 4.1-7.9 0 0-4.9 2.9-4.9 8.5v29l9.7 5.7v-1.1l-8.8-5.1z"/>
        <path d="M1943 446.4l-4.6-2.7V435l4.6 2.7v-.6l-4.6-2.7V426l4.6 2.7v-.6l-4.6-2.7v-14l-.3-.2-.3.2V425l-4.6-2.7v.6l4.6 2.7v8.6l-4.6-2.7v.5l4.6 2.7v8.6l-4.6-2.7v.6l4.6 2.7v7.3l.5.3v-7.4l4.6 2.7.1-.5zM1957.9 422.6s-4.9 3-4.9 8.5v29l9.7 5.7v-29c.1-9.7-4.8-14.2-4.8-14.2z"/>
        <path d="M1954 459.6v-29c0-4.2 2.6-6.8 4-8 0 0-4.9 3-4.9 8.5v29l9.7 5.7v-1.1l-8.8-5z"/>
        <path d="M1962.8 457.8l-4.6-2.7v-8.6l4.6 2.7v-.5l-4.6-2.7v-8.5l4.6 2.7v-.6l-4.6-2.7V423l-.3-.3-.3.2v13.7l-4.6-2.7v.5l4.6 2.7v8.6l-4.6-2.7v.6l4.6 2.7v8.5l-4.6-2.7v.6l4.6 2.7v7.4l.5.3v-7.3l4.6 2.7.1-.7z"/>
        <g>
          <path d="M1977.7 434s-5 3-5 8.5v29.1l9.8 5.7v-29.1c0-9.5-4.8-14.1-4.8-14.1z"/>
          <path d="M1973.7 471v-29c0-4.2 2.6-6.8 4-8 0 0-4.8 3-4.8 8.5v29.1l9.7 5.7V476l-8.9-5z"/>
          <path d="M1982.6 469.3l-4.6-2.7v-8.5l4.6 2.7v-.6l-4.6-2.7v-8.6l4.6 2.7v-.5l-4.6-2.7v-14l-.3-.2-.3.1v13.8l-4.6-2.7v.6l4.6 2.7v8.5l-4.6-2.7v.6l4.6 2.7v8.5l-4.6-2.7v.6l4.6 2.7v7.4l.5.3v-7.4l4.6 2.7v-.6z"/>
        </g>
      </g>
      <path fill="#DADADA" d="M2024.4 505.5l-5.8 2.6V473l5.8-2zm-5.8-32.6l-16.9-23.6 5-2 17.7 23.6z"/>
    </g>
    <path opacity=".3" fill="#878787" d="M1974.3 651l108.8-58-11.7-45.3-33.8-61.7-48.6-23-15.2-14.6-43.5-23-61.2 87.2zm-135 125l109.6-56.6-12.4-46.7-33.8-61.6-48.7-23.2-15.2-14.6-43.5-23-61.3 87.3zm191.5 109.4l102.5-54.6-11.2-42.6-31.7-58-45.8-21.7-14.3-13.9-40.9-21.6-57.6 82.1z"/>
    <path fill="#B2B2B2" d="M2200.5 953l71-41.2v27.6l-71 41.2z"/>
    <path fill="#3C3C3B" d="M2271 912.6v26.5l-70 40.7v-26.5l70-40.7m1-1.6l-72 41.7v28.7l72-41.7V911z"/>
    <path fill="#DADADA" d="M2155.8 955.4v-28.2l21.7-4.6 22 30.3v27.7z"/>
    <path fill="#3C3C3B" d="M2177.3 923.2L2199 953v26.8l-42.7-24.7v-27.4l21-4.5m.4-1l-22.2 4.7v28.8l44.5 25.8v-28.7l-22.3-30.7z"/>
    <path fill="#DADADA" d="M2160.2 957.9v-22.1l35 20.2v22.1z"/>
    <path fill="#3C3C3B" d="M2160.6 936.6l34 19.7v21l-34-19.7v-21m-1-1.7v23.2l36 20.8v-23.1l-36-20.9z"/>
    <path fill="#DADADA" d="M2160.2 936.5v-.7l35 20.2v.7z"/>
    <path fill="#3C3C3B" d="M2159.7 935v1.7l36 20.9v-1.8z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2252.5 878l24 33-77.6 45-24-33zm-24.1 5.2l24-5.2-77.5 45-24.1 5.1z"/>
    <path fill="#DADADA" d="M2216.3 972v-33.6l86 49.8v33.6z"/>
    <path fill="#3C3C3B" d="M2216.7 939.2l85 49.3v32.5l-85-49.3v-32.5m-1-1.7v34.8l87 50.4V988l-87-50.5z"/>
    <path fill="#B2B2B2" d="M2303.2 988.1l26.6-36.6 26.3 5.7v34l-53 30.6z"/>
    <path fill="#3C3C3B" d="M2330 952.1l25.6 5.5V991l-52 30v-32.7l26.5-36.2m-.5-1l-27 36.8v34.7l54-31.2v-34.7l-27-5.6z"/>
    <path fill="#DADADA" d="M2309.4 994.3l40.4-23.5V990l-40.4 23.5v-19.2zm-34.3 7.3v-19.2l20.6 11.9v19.2l-20.6-12zm-52.9-30.8v-19.2l20.6 12v19.1l-20.6-11.9z"/>
    <path fill="#3C3C3B" d="M2222.7 952.5l19.6 11.3v18l-19.3-11.2-.3-.1v-18m126.7 19.2v18l-39.5 23v-18.1l39.5-22.9m-73.8 11.5l19.6 11.4v18l-19.6-11.3v-18m-53.9-32.4V971l.8.5 20.7 12v-20.3l-21.5-12.4zm128.6 19.2L2309 994v20.2l41.4-23.9v-20.2zm-75.7 11.4v20.3l21.6 12.4V994l-21.6-12.5z"/>
    <path fill="#DADADA" d="M2311 995.1l37.2-21.5v15.6l-37.3 21.6z"/>
    <path fill="#3C3C3B" d="M2347.7 974.4v14.5l-36.3 21v-14.5l36.3-21m1-1.6l-38.2 22.1v16.8l38.2-22.2v-16.7z"/>
    <path fill="#DADADA" d="M2211 937l27.6-38 90.2 52.4-27.6 38z"/>
    <path fill="#3C3C3B" d="M2238.7 899.8l89.4 51.8-27 37.2-89.5-51.9 27.1-37.1m-.3-1.3l-28.2 38.7 91 52.8 28.3-38.7-91-52.8z"/>
    <path fill="#DADADA" d="M2329.6 950.9l-88.5-51.3 25.3 5.4 88.3 51.2z"/>
    <path fill="#3C3C3B" d="M2244 900.6l22.2 4.7 85.7 49.7-22.2-4.7-85.7-49.7m-5.7-2l91 52.7 28.3 6-91-52.7-28.3-6z"/>
    <path fill="#DADADA" d="M2223.8 970v-15.6l17.4 10.1v15.6z"/>
    <path fill="#3C3C3B" d="M2224.3 955.3l16.5 9.6v14.4l-16.5-9.5v-14.5m-1-1.8v16.8l18.5 10.6v-16.7l-18.4-10.7z"/>
    <path fill="#DADADA" d="M2252.2 992.8v-23.3l11.7 6.8v23.3z"/>
    <path fill="#3C3C3B" d="M2252.7 970.4l10.6 6.2v22.2l-10.6-6.3v-22.1m-1-1.7v24.4l12.6 7.3V976l-12.6-7.3z"/>
    <path fill="#DADADA" d="M2252.2 992.8v-23.2l11.6 6.7v.5l-10.8-6.3h-.4c-.2.1-.2.3-.2.4v22h-.2z"/>
    <path fill="#3C3C3B" d="M2251.7 968.7v24.4l1.1.7v-22.9l11.6 6.8V976z"/>
    <path fill="#DADADA" d="M2276.7 1000.6v-15.5l17.4 10v15.6z"/>
    <path fill="#3C3C3B" d="M2277.1 986l16.6 9.4v14.4l-16.6-9.6V986m-1-1.7v16.7l18.5 10.7v-16.8l-18.4-10.6z"/>
    <path fill="#DADADA" d="M2223.8 961v-1l17.4 10v1.1z"/>
    <path fill="#3C3C3B" d="M2223.4 959.1v2.1l18.3 10.7v-2z"/>
    <path fill="#DADADA" d="M2223.8 960.2v-1l17.4 10.1v1z"/>
    <path fill="#3C3C3B" d="M2223.4 958.4v2l18.3 10.7v-2z"/>
    <path fill="#DADADA" d="M2276.7 991.7v-1l17.4 10.1v1z"/>
    <path fill="#3C3C3B" d="M2276.2 989.9v2l18.4 10.7v-2z"/>
    <path fill="#DADADA" d="M2276.7 990.8v-1l17.4 10.2v1z"/>
    <path fill="#3C3C3B" d="M2276.2 989v2.1l18.4 10.7v-2z"/>
    <path fill="#B2B2B2" d="M2274.2 928.8l5-3 5 3-5 2.9z"/>
    <path fill="#3C3C3B" d="M2279.2 926.5l4 2.3-4 2.3-4-2.3 4-2.3m0-1.2l-6 3.5 6 3.4 6-3.4-6-3.5z"/>
    <path fill="#B2B2B2" d="M2279.2 936.8h4l4.6-4.9-4.2-2.2z" opacity=".3"/>
    <path fill="#B2B2B2" d="M2279.6 932.5l4.2-2.3v.6l-4.2 4.8z"/>
    <path fill="#3C3C3B" d="M2282.5 931.5l-2.4 2.7v-1.4l2.4-1.3m1.8-2.2l-5.1 3v4.5l5-6v-1.5z"/>
    <path fill="#DADADA" d="M2279.6 932.7l4.2-2.4v.1z"/>
    <path fill="#3C3C3B" d="M2284.3 929.5l-5.1 3v1l5-2.8z"/>
    <path fill="#DADADA" d="M2274.6 933.7v-3.5l4 2.3v3.6z"/>
    <path fill="#3C3C3B" d="M2275 931l3.2 1.8v2.4l-3.2-1.8V931m-1-1.7v4.7l5.2 2.8v-4.6l-5.1-2.9z"/>
    <path fill="#DADADA" d="M2279 936.8h.2v-3.5h-.1z"/>
    <path fill="#3C3C3B" d="M2279.2 933.3h-.1v3.5z"/>
    <path fill="#DADADA" d="M2274.6 930.4l4 2.3z"/>
    <path fill="#3C3C3B" d="M2274 929.5v1.2l5.2 2.9v-1.2z"/>
    <g>
      <path fill="#DADADA" d="M2279.6 932.5l5-2.9z"/>
      <path fill="#3C3C3B" d="M2285.1 928.8l-6 3.4v1.2l6-3.5z"/>
    </g>
    <g>
      <path fill="#DADADA" d="M2273.7 929.6l5 3z"/>
      <path fill="#3C3C3B" d="M2273.2 928.8v1.1l6 3.5v-1.2z"/>
    </g>
    <g>
      <path fill="#B2B2B2" d="M2282.1 933.5l5-2.9 5 2.9-5 2.9z"/>
      <path fill="#3C3C3B" d="M2287.1 931.2l4 2.3-4 2.3-4-2.3 4-2.3m0-1.2l-6 3.5 6 3.4 6-3.4-6-3.5z"/>
      <path fill="#B2B2B2" d="M2287.1 941.6l4.2-.2 4.6-4.8-4.4-2.2z" opacity=".3"/>
      <path fill="#B2B2B2" d="M2287.6 937.2l4.1-2.3v.6l-4 4.8z"/>
      <path fill="#3C3C3B" d="M2290.5 936.2l-2.4 2.8v-1.5l2.4-1.3m1.7-2.1l-5 2.8v4.6l5-6v-1.4z"/>
      <path fill="#DADADA" d="M2287.6 937.4l4.1-2.4v.1z"/>
      <path fill="#3C3C3B" d="M2292.2 934.2l-5 3v1l5-2.8z"/>
      <path fill="#DADADA" d="M2282.6 938.4v-3.5l4 2.3v3.6z"/>
      <path fill="#3C3C3B" d="M2283.1 935.7l3.2 1.8v2.4l-3.2-1.8v-2.4m-1-1.6v4.6l5.1 2.8V937l-5-2.8z"/>
      <path fill="#DADADA" d="M2287 941.5l.1.1V938z"/>
      <path fill="#3C3C3B" d="M2287.1 938v3.6z"/>
      <path fill="#DADADA" d="M2282.6 935.1l4 2.3v.1z"/>
      <path fill="#3C3C3B" d="M2282.1 934.2v1.2l5 2.9V937z"/>
      <g>
        <path fill="#DADADA" d="M2287.6 937.2l5-2.9v.1l-5 3z"/>
        <path fill="#3C3C3B" d="M2293 933.5l-5.9 3.4v1.2l6-3.5z"/>
      </g>
      <g>
        <path fill="#DADADA" d="M2281.7 934.4l5 2.8v.1z"/>
        <path fill="#3C3C3B" d="M2281.2 933.5v1.1l6 3.5v-1.2z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <g fill="#DADADA">
        <path d="M1830.3 695.9l-42.3 24.4v30l42.3-24.5z"/>
        <path d="M1830.3 695.9l-42.3 24.4-2.2 2.5 2.2 2.6 39.7-22.9z"/>
        <path d="M1745.8 695.9l42.2 24.4v30l-42.2-24.5z"/>
        <path d="M1830.3 695.9l-42.3 24.4-42.2-24.4 42.2-24.3z"/>
        <path d="M1832.8 692.2l-42.2 24.4v5.1l42.2-24.3z"/>
        <path d="M1832.8 692.2l-42.2 24.4-44.8-25.8 42.2-24.4z"/>
        <path d="M1832.8 692.2l-42.2 24.4v5.1l42.2-24.3zm-87-1.4l44.8 25.8v5.1l-44.8-25.8z"/>
        <path d="M1830.3 612.8l-23.9-37.3-18.4 61.7v78l42.3-24.4z"/>
        <path d="M1745.8 612.8l42.2 24.4v78l-42.2-24.4z"/>
      </g>
      <path fill="#9D9D9C" d="M1745.8 612.8l42.2 24.4 18.4-61.6-39.7-17.5z"/>
      <g fill="#DADADA">
        <path d="M1804 650.5l-7 4.2v-15l7-4.1zm3.4.6l-10.8 6.4v-1.1l10.8-6.2z"/>
        <path d="M1805.5 649.1l-10.9 6.1 2 1.2 10.8-6.2z"/>
        <path d="M1804 650.5l-.5-.3v-14.8l.4-.4zm-8 4.6l-.4-.1v-16.6l.5.2z"/>
        <path d="M1796 638.6v16.5l1-.4v-15l7-4v14.8l.8-.5v-16.7zm-1.4 17.6l2 1.3v-1.1l-2-1.2z"/>
        <path d="M1795.6 638.4l.5.2 8.7-5.3h-.5z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1823.4 640.4l-6.9 4v-14.8l7-4.1zm3.5.6l-10.8 6.4v-1.2l10.8-6.1z"/>
        <path d="M1825 639l-10.8 6.2 2 1 10.7-6.1z"/>
        <path d="M1823.4 640.4l-.3-.2v-15l.3-.3zm-7.8 4.6l-.5-.1v-16.6l.5.1z"/>
        <path d="M1815.6 628.4v16.7l1-.6v-14.8l6.8-4.1v14.8l1-.5v-16.6zm-1.4 17.7l2 1.3v-1.2l-2-1z"/>
        <path d="M1815 628.3l.6.1 8.8-5.1-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1813.2 620l-7 4.1v-15l7-4zm3.4.6l-10.7 6.3v-1l10.7-6.3z"/>
        <path d="M1814.7 618.6l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M1813.2 620l-.4-.2v-15l.4-.3zm-7.9 4.6l-.5-.2V608l.5.2z"/>
        <path d="M1805.3 608v16.6l1-.5v-14.9l6.9-4V620l1-.6v-16.6zm-1.3 17.7l1.9 1.2v-1l-2-1.1z"/>
        <path d="M1804.8 607.9l.5.2 8.8-5.3h-.5z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1804 674.7l-7 4.2v-15l7-4.1zm3.4.6l-10.8 6.4v-1.1l10.8-6.2z"/>
        <path d="M1805.5 673.3l-10.9 6.2 2 1.1 10.8-6.2z"/>
        <path d="M1804 674.7l-.5-.2v-15l.4-.2zm-8 4.7l-.4-.2v-16.6l.5.2z"/>
        <path d="M1796 662.8v16.6l1-.5V664l7-4.1v14.7l.8-.4v-16.7zm-1.4 17.7l2 1.2v-1.1l-2-1z"/>
        <path d="M1795.6 662.6l.5.2 8.7-5.2-.5-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1823.4 664.7l-6.9 4v-14.9l7-4.1zm3.5.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M1825 663.2l-10.8 6.2 2 1.1 10.7-6.2z"/>
        <path d="M1823.4 664.7l-.3-.3v-15l.3-.3zm-7.8 4.6l-.5-.2v-16.5l.5.1z"/>
        <path d="M1815.6 652.7v16.6l1-.5v-14.9l6.8-4.1v14.9l1-.6v-16.6zm-1.4 17.6l2 1.3v-1l-2-1.2z"/>
        <path d="M1815 652.6l.6.1 8.8-5.2-.6-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1804.4 698.8l-7 4.2v-15l7-4.1zm3.4.6l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M1805.9 697.4l-10.8 6.2 2 1.1 10.7-6.2z"/>
        <path d="M1804.4 698.8l-.5-.1v-15l.5-.3zm-7.9 4.8l-.4-.3v-16.6l.4.2z"/>
        <path d="M1796.5 687v16.6l1-.6v-14.8l7-4.1v14.7l.8-.5v-16.5zm-1.4 17.6l2 1.2v-1l-2-1.2zm.9-17.9l.5.2 8.8-5.1-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1824 688.8l-7 4V678l7-4.1zm3.4.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M1825.5 687.3l-10.8 6.2 2 1.1 10.7-6.2z"/>
        <path d="M1824 688.8l-.6-.3v-15l.5-.3zm-8 4.6l-.4-.2v-16.5l.4.2z"/>
        <path d="M1816 676.9v16.5l1-.5V678l7-4.1v14.9l.9-.6v-16.6zm-1.3 17.5l2 1.3v-1l-2-1.2z"/>
        <path d="M1815.6 676.7l.4.2 8.9-5.3-.6-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1804 734.4l-7 4.1v-14.9l7-4.1zm3.4.6l-10.8 6.4v-1.2l10.8-6.1z"/>
        <path d="M1805.5 733l-10.9 6.2 2 1 10.8-6.1z"/>
        <path d="M1804 734.4l-.5-.2v-15l.4-.3zm-8 4.6l-.4-.1v-16.6l.5.2z"/>
        <path d="M1796 722.5V739l1-.6v-14.8l7-4.1v14.8l.8-.5v-16.6zm-1.4 17.6l2 1.3v-1.2l-2-1z"/>
        <path d="M1795.6 722.3l.5.2 8.7-5.2-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1823.4 724.3l-6.9 4.1v-15l7-4zm3.5.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M1825 722.9l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M1823.4 724.3l-.3-.2v-15l.3-.3zm-7.8 4.7l-.5-.3v-16.5l.5.2z"/>
        <path d="M1815.6 712.4V729l1-.6v-14.9l6.8-4v14.8l1-.6v-16.5zm-1.4 17.6l2 1.2v-1l-2-1.1z"/>
        <path d="M1815 712.2l.6.2 8.8-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1773.2 650.3l7 4.2v-15l-7-4.1zm-3.4.7l10.7 6.3v-1.1l-10.7-6.2z"/>
        <path d="M1771.7 648.9l10.7 6.2-1.9 1.1-10.7-6.2z"/>
        <path d="M1773.2 650.3l.5-.1v-15l-.5-.3zm7.8 4.7l.6-.2v-16.6l-.5.2z"/>
        <path d="M1781 638.4v16.7l-.8-.6v-14.8l-7-4.1v14.7l-1-.5v-16.5zm1.4 17.7l-1.9 1.2v-1.1l2-1zm-.8-17.9l-.5.2-8.8-5.1.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1753 639.3l7 4.1v-14.9l-7-4zm-3.4.7l10.7 6.3v-1.1l-10.7-6.2z"/>
        <path d="M1751.5 637.9l10.8 6.2-2 1-10.7-6z"/>
        <path d="M1753 639.3l.5-.2v-14.9l-.5-.4zm8 4.7l.4-.2v-16.6l-.5.2z"/>
        <path d="M1761 627.4V644l-1-.5v-14.9l-7-4v14.7l-1-.5v-16.6zm1.3 17.6l-2 1.3v-1.1l2-1.1z"/>
        <path d="M1761.4 627.2l-.5.2-8.8-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1773.2 675.3l7 4.1v-15l-7-4zm-3.4.6l10.7 6.3v-1l-10.7-6.3z"/>
        <path d="M1771.7 673.9l10.7 6.2-1.9 1-10.7-6.2z"/>
        <path d="M1773.2 675.3l.5-.2v-15l-.5-.2zm7.8 4.7l.6-.3v-16.5l-.5.2z"/>
        <path d="M1781 663.4V680l-.8-.6v-14.7l-7-4.3v15l-1-.7v-16.5zm1.4 17.6l-1.9 1.2v-1l2-1zm-.8-17.8l-.5.2-8.8-5.2.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1753 664.3l7 4.1v-14.9l-7-4.1zm-3.4.7l10.7 6.3V670l-10.7-6.1z"/>
        <path d="M1751.5 662.8l10.8 6.3-2 1-10.7-6.1z"/>
        <path d="M1753 664.3l.5-.2v-15l-.5-.3zm8 4.7l.4-.2v-16.6l-.5.2z"/>
        <path d="M1761 652.4V669l-1-.6v-14.8l-7-4.1v14.8l-1-.5v-16.6zm1.3 17.6l-2 1.3V670l2-1z"/>
        <path d="M1761.4 652.2l-.5.2-8.8-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1773.2 699.6l7 4.1v-15l-7-4zm-3.4.6l10.7 6.3v-1l-10.7-6.3z"/>
        <path d="M1771.7 698.2l10.7 6.2-1.9 1-10.7-6.2z"/>
        <path d="M1773.2 699.6l.5-.2v-15l-.5-.2zm7.8 4.7l.6-.3v-16.5l-.5.2z"/>
        <path d="M1781 687.7v16.6l-.8-.6V689l-7-4.2v15l-1-.7v-16.5zm1.4 17.7l-1.9 1.1v-1l2-1zm-.8-17.9l-.5.2-8.8-5.2.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1753 688.6l7 4.1v-14.9l-7-4.1zm-3.4.6l10.7 6.4v-1.2l-10.7-6.1z"/>
        <path d="M1751.5 687.1l10.8 6.3-2 1-10.7-6.1z"/>
        <path d="M1753 688.6l.5-.2v-15l-.5-.3zm8 4.7l.4-.2v-16.6l-.5.2z"/>
        <path d="M1761 676.7v16.6l-1-.6v-14.8l-7-4.1v14.8l-1-.5v-16.6zm1.3 17.6l-2 1.3v-1.2l2-1z"/>
        <path d="M1761.4 676.5l-.5.2-8.8-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1773.2 732.5l7 4v-14.9l-7-4.1zm-3.4.5l10.7 6.4v-1l-10.7-6.3z"/>
        <path d="M1771.7 731l10.7 6.2-1.9 1.1-10.7-6.2z"/>
        <path d="M1773.2 732.5l.5-.3v-15l-.5-.3zm7.8 4.5l.6-.1v-16.5l-.5.2z"/>
        <path d="M1781 720.6V737l-.8-.5v-14.9l-7-4.1v14.9l-1-.6v-16.6zm1.4 17.5l-1.9 1.3v-1l2-1.2z"/>
        <path d="M1781.6 720.4l-.5.2-8.8-5.3.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1753 721.4l7 4.1v-15l-7-4zm-3.4.6l10.7 6.3v-1l-10.7-6.3z"/>
        <path d="M1751.5 720l10.8 6.2-2 1-10.7-6.2z"/>
        <path d="M1753 721.4l.5-.2v-15l-.5-.2zm8 4.7l.4-.3v-16.5l-.5.2z"/>
        <path d="M1761 709.5v16.6l-1-.6v-14.8l-7-4.2v15l-1-.7v-16.5zm1.3 17.7l-2 1.1v-1l2-1z"/>
        <path d="M1761.4 709.3l-.5.2-8.8-5.2.6-.2z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1861.4 646l2.5 1.5 8.5-5-2.6-1.4zm-17.1 9.8l2.6 1.5 8.4-5-2.5-1.4zm-17 9.9l2.5 1.5 8.5-5-2.5-1.5zm-17 9.8l2.5 1.4 8.5-4.8-2.6-1.5zm-17.1 9.8l2.6 1.5 8.4-5-2.5-1.4zm1.5 27.3l43.6 25.1v38.7l-43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1881.8 712.6l-43.5 25.1v38.7l43.5-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1792 708.8l43.6 25.2v5.3L1792 714z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1823.6 729.3l.9.5v-.6l-1.2-.7.3.8zm-1.6-4.3l.2.5 2 1.1-2.2-5.5v3.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1792 708.8l43.6 25.2 46.2-26.7-43.5-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1792 708.8l43.6 25.2v5.3L1792 714zm89.8-1.5l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1794.7 646.6l43.6 25.2v60.7l-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1881.8 646.6l-43.5 25.2v60.7l43.5-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1792 642.9l43.6 25.1 46.2-26.7-43.5-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1794.7 641.3l43.6 25.2 43.5-25.2-43.5-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1794.7 641.3l43.6 25.2 18.4-7.5 25.1-17.7-43.5-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1794.7 641.3l21.8 12.6 21.8 12.6 21.7-48.9 21.8 23.7-21.8-12.6-21.7-12.5-21.8-23.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1876.6 641.3l1.3.8 1.2.8-6.9-13.9-12.2-14-1.2-.8-1.4-.7 6 14.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1876.6 641.3l-38.3 22.1 19.1-50z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1838.3 666.5l21.7-57 21.8 31.8-2.7 1.6-19-27.9-19 50zm-46.3-23.6l43.6 25.1v5.3l-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1881.8 641.3l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1816.5 584.4l-21.8 57 21.8 12.5 21.8 12.6 21.7-57-43.5-25.1"/>
      <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1818.2 598.6l5-2.9v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M1811.3 594.6l6.9 4v17.6l-6.9-4z"/>
        <path fill="#DADADA" d="M1811.3 594.6l6.9 4 5-2.9-6.8-4z"/>
        <path fill="#B2B2B2" d="M1821.7 595.7l-5.3-3-3.6 2 5.4 3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1845.8 614.5l5.1-2.9v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M1839 610.6l6.8 4V632l-6.8-4z"/>
        <path fill="#DADADA" d="M1839 610.6l6.8 4 5.1-3-6.8-3.9z"/>
        <path fill="#B2B2B2" d="M1849.4 611.6l-5.3-3-3.7 2 5.4 3.2z"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1857.2 686v.8l-9 5.2v-.8l1.8-1.8zm0 27.7v1l-9 5.2v-1l1.8-1.6zm17.2-9.9v1l-9 5.2v-1l1.6-1.6zm-27.4-13.4v.9l1.2.7v-.8zm.6-15.4v15l5.4-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1855.4 670.4l-1.2.8-4.8 7v6.4l4.8.2 1.2.8V679z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1847.6 688.7l6.6-3.9v-13.6l-6.6 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 684.3l-5.6 3.2v-5.7l5.6 2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 678.6v5.7l-.3.1h-2.2V683h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.8 678.8v5.4l-5.2 3v-5.4zm.4-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 671.8v6l-.3.1h-.6l-1.4-2.6v-1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.8 672v5.6l-5.2 3v-5.7zm3.2 13.2l1.2.8-5.9 3.3-3 1.9-1.3-.8zm-9 33v1l1.2.7v-1zm.6-15.4v15l5.4-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1855.4 698.3l-1.2.7-4.8 7v6.5l4.8.2 1.2.7V707z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1847.6 716.4l6.6-3.7V699l-6.6 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 712.1l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 706.4v5.7l-.3.2h-2.2v-1.4h.3l.4.1v-3.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.8 706.6v5.4l-5.2 3v-5.4zm.4-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 699.5v6l-.3.3h-.6l-1.4-2.6V702l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.8 699.7v5.7l-5.2 3v-5.6zm3.2 13.3l1.2.7-5.9 3.5-3 1.7-1.3-.7zm-9 47.5v.9l1.2.7v-1zm.6-15.5v15.1l5.4-2.5 2.4-1.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1855.4 740.5l-1.2.7-4.8 7v6.5l4.8.2 1.2.8v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1847.6 758.7l6.6-3.8v-13.7l-6.6 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 754.4l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 748.7v5.7l-.3.2h-2.2V753h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.8 748.9v5.3l-5.2 3V752zm.4-1.1l-5.6 3.3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853.2 741.8v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.8 742v5.6l-5.2 3.1V745zm3.2 13.3l1.2.7-5.9 3.4-3 1.8-1.3-.7zm8.2-4.7v.9l1.2.6v-.8zm.5-15.6v15.2l5.4-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1872.5 730.6l-1.2.7-4.7 7v6.6l4.7.1 1.2.7v-6.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1864.7 748.8l6.6-3.8v-13.7l-6.6 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 744.5l-5.6 3.1V742l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 738.8v5.7l-.3.2h-2.2V743h.4l.3.3v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870 738.9v5.4l-5.3 3V742zm.3-.9l-5.6 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 731.9v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870 732v5.7l-5.3 3.1v-5.7zm3.2 13.4l1.2.7-6 3.5-3 1.7-1.2-.7zm1.2-69.4v1l-9 5.1v-.8l1.6-1.8zm-10.2 4.5v.9l1.2.7v-.8zm.5-15.5v15.1l5.4-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1872.5 660.5l-1.2.8-4.7 7v6.4l4.7.2 1.2.8v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1864.7 678.7l6.6-3.8v-13.6l-6.6 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 674.5l-5.6 3.1V672l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 668.7v5.8h-2.5v-1.4h.4l.3.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870 668.9v5.4l-5.3 3v-5.4zm.3-.9l-5.6 3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 661.9v6l-.3.1h-.6l-1.4-2.6v-1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870 662v5.7l-5.3 3V665zm3.2 13.3l1.2.8-6 3.3-3 1.9-1.2-.8zm-9 33.1v.8l1.2.8v-1zm.5-15.5v15l5.4-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1872.5 688.4l-1.2.7-4.7 7v6.5l4.7.2 1.2.8V697z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1864.7 706.5l6.6-3.7V689l-6.6 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 702.2l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 696.5v5.7l-.3.2h-2.2V701h.4l.3.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870 696.7v5.3l-5.3 3v-5.3zm.3-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.3 689.6v6l-.3.3h-.6l-1.4-2.6V692l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870 689.8v5.7l-5.3 3V693zm3.2 13.4l1.2.6-6 3.5-3 1.7-1.2-.6zm-37.4 43.6l-.7.4v23.3l.7-.5zm-38.5-21.4l23.3 13 14.5 8.8v23.3l-37.8-21.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1814.9 752l5.7-13.6 14.5 8.8v23.3l-30.2-17.3.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1814 734.2l-.7.4 21.8 12.6.7-.4zm1.6 4.4l-1.6 18.8 20.2 11.7v-21.5zm-16.9-11.6v21.5h2.3l-.6-20.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1799.6 728.1v20.6l34.6 19.5v-20.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1800.3 729v20l33.9 19.2v-19.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1799.8 728.8v3.8l6.5 19.8 27.9 15.8v-19.9l-18.6-10.7-15.8-8.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1825.2 760.6l12.6-7.2v-.6l-12.6 7.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1824.7 760.4l12.7-7.3.4-.3-.4-.2-12.7 7.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1838 744.3l-13.5 14.3v2.4l.7-.4v-2l12.7-13.7zm-54.4-9.3l40.9 23.6v2.4l-41-23.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1783.5 735l41 23.6 13.4-14.3-19.5-10.7-3.8-2.9-17.8-10zm21.5 17.4l1.3.1 27.9 15.8v.8l-13-7.5-16.2-9.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1838 744.3l-13.5 14.3v2.4l.7-.4v-2l12.7-13.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1797.6 722l39.8 23 .5-.7-39.8-22.9z"/>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1828.4 715.8l-.3-12.8.5-2.4.6 1.4v14l-.8-.3zm-11-4.8v.8l10.4 6v-.7l-3.3-2.5z"/>
        <path d="M1819 710l-1.6 1 6.4 3.8 4 2.3 1.7-1z"/>
        <path d="M1829.2 716l-1.1-.6v.5zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.7l-4.8-2.2-2.2-1.9z"/>
        <path d="M1820.2 697.9l1.1.6 4.3 6.3v5.8l-3.1.8h-2.3v-5.8z"/>
        <path d="M1825.6 704.8v5.8l-3.1.8h-2.3l1.1-.6z"/>
        <path d="M1827.2 714.1l-5.9-3.3v-12.3l5.9 3.3z"/>
        <path d="M1827.2 714.1l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path d="M1822.5 710.5l4.7 2.7v-11.4l-4.2 8.7z"/>
        <path d="M1822.2 699v11.3l.3.2h.5l1.2-8.3v-1l-.4.2V700z"/>
        <path d="M1822.5 699.1v11l4.7 2.8v-11z"/>
        <path d="M1823 701.7v8.8l4.2 2.4V704z"/>
        <path d="M1819.3 710.9v-15.1l8.8 5V716l-1-.4V702l-7-4v13.5zm9.3 4.8l-.5.2v-15l.5-.3zm-8.7-20.2l-.6.3 8.8 5 .5-.2z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1811 707.2l-1.2-.7v.7zm-12-4.9v.8l10.5 6v-.8l-3.2-2.5z"/>
        <path d="M1800.7 701.3l-1.7 1 6.6 3.8 4 2.2 1.5-1z"/>
        <path d="M1811.1 708.2l-1.6 1v-1l1.6-.9zm-10.1-6.1v-15l8.8 5v15.1l-1-.6v-13.5l-6.9-4v13.6zm9.4 4.7l-.6.4v-15.1l.6-.4zm-8.9-20.2l-.5.4 8.8 5.1.6-.4z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1828.4 692l-.3-12.7.5-2.4.6 1.4v14l-.8-.3zm-11-4.6v.8l10.4 6v-.8l-3.3-2.5z"/>
        <path d="M1819 686.5l-1.6 1 6.4 3.7 4 2.2 1.7-1z"/>
        <path d="M1829.2 692.3l-1.1-.7v.7zm.3 1l-1.7 1v-1l1.7-.9zm-2.3-15.1v13.5l-4.8-2.2-2.2-1.8z"/>
        <path d="M1820.2 674.2l1.1.6 4.3 6.3v5.8l-3.1.8h-2.3V682z"/>
        <path d="M1825.6 681v6l-3.1.7h-2.3l1.1-.6z"/>
        <path d="M1827.2 690.5l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path d="M1827.2 690.5l-4.7-2.8v-11.3l4.7 2.8z"/>
        <path d="M1822.5 686.7l4.7 2.7v-11.2l-4.2 8.5z"/>
        <path d="M1822.2 675.3v11.3l.3.1h.5l1.2-8.1v-1l-.4.1v-1.4z"/>
        <path d="M1822.5 675.5v11l4.7 2.6v-10.9z"/>
        <path d="M1823 678.1v8.6l4.2 2.4v-8.6z"/>
        <path d="M1819.3 687.2v-15l8.8 5v15.1l-1-.6v-13.5l-7-4v13.5zm9.3 4.8l-.5.3v-15.1l.5-.3z"/>
        <path d="M1819.9 671.8l-.6.3 8.8 5.1.5-.3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1810.2 683.3l-.4-12.8.6-2.4.6 1.5v14l-.8-.3zm-11.2-4.7v.8l10.5 6v-.8l-3.2-2.5z"/>
        <path d="M1800.7 677.6l-1.7 1 6.6 3.7 4 2.3 1.5-1z"/>
        <path d="M1811 683.5l-1.2-.6v.6zm.1.9l-1.6 1v-.8l1.6-1zm-2.3-14.9V683l-4.8-2.2-2-1.8z"/>
        <path d="M1802 665.4l1 .6 4.3 6.3v5.8l-3.2.9h-2.2v-6z"/>
        <path d="M1807.3 672.3v5.8l-3.2.9h-2.2l1.2-.7z"/>
        <path d="M1808.8 681.7l-5.7-3.4V666l5.7 3.5z"/>
        <path d="M1808.8 681.7l-4.7-2.7v-11.4l4.7 2.7z"/>
        <path d="M1804.1 678l4.7 2.7v-11.2l-4 8.5z"/>
        <path d="M1803.8 666.6v11.2l.3.2h.6l1.3-8.3v-1l-.5.3v-1.6z"/>
        <path d="M1804.1 666.7v11l4.7 2.7v-11z"/>
        <path d="M1804.7 669.3v8.7l4.1 2.4v-8.7z"/>
        <path d="M1801 678.4v-15l8.8 5v15l-1-.4v-13.5l-6.9-4V679zm9.4 4.8l-.6.3v-15.1l.6-.3zm-8.9-20.2l-.5.3 8.8 5.1.6-.3z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1912 475l2.7 1.4 8.4-4.9-2.5-1.4zm-17 9.9l2.6 1.4 8.5-4.9-2.5-1.5zm-17 9.8l2.6 1.4 8.5-4.9-2.6-1.4zm-17 9.8l2.6 1.5 8.4-5-2.5-1.4zm-17 9.9l2.5 1.4 8.5-5-2.5-1.3zm1.5 27.2l43.5 25.2v38.7l-43.5-25.2zm87.1 0l-43.6 25.2v38.7l43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1842.8 537.8l43.6 25.1v5.3l-43.6-25.1z"/>
      <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M1845.5 541.6l9.3 5.4-4.2-10.8v-1.8l1 1.4 1.6.2v-.2l-2.7-6.9v-.8l.8.5 2.7 6.8.5 1.3 1.3 4.4 13.5 4.2 1.8.8-2.6-6.8v-1l.8.5 7.5 19.4v1.5l12.2 7v5.3l-41-23.7-2.5-6.7zm29 16.7l.8.5v-.6l-1.1-.6.2.7zm-1.7-4.3l.2.5 2 1.1-2.2-5.4v3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1842.8 537.8l43.6 25.1 46.2-26.7-43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1842.8 537.8l43.6 25.1v5.3l-43.6-25.1zm89.8-1.6l-46.2 26.7v5.3l46.2-26.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1845.5 475.6l43.5 25.2v60.7l-43.5-25.3z"/>
      <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M1845.5 475.6l43.5 25.2 3.3 2.7-3.3 2.5-40.9-23.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1932.6 475.6l-43.6 25.2v60.7l43.6-25.3zm-89.8-3.8l43.6 25.2 46.2-26.6-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1845.5 470.4l43.5 25.1 43.6-25.1-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1845.5 470.4l43.5 25.1 18.5-7.5 25.1-17.6-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1845.5 470.4l21.8 12.5 21.7 12.6 21.8-49 21.8 23.9-21.8-12.6-21.8-12.6-21.7-23.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1927.3 470.4l1.3.7 1.4.8-7-13.8-12.2-14-1.3-.8-1.3-.8 6 14.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1927.3 470.4l-38.2 22 19.1-49.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1889 495.5l21.8-57 21.8 31.9-2.6 1.5-19.2-27.9-19 49.9zm-46.2-23.7l43.6 25.2v5.2l-43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1932.6 470.4l-46.2 26.6v5.2l46.2-26.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1867.3 413.4l-21.8 57 21.8 12.5 21.7 12.6 21.8-57-43.5-25"/>
      <path d="M1905.3 452.2l-.1-8-6.8-4-8.7 8.8.1 8.1 6.8 4 8.7-8.9zm-27.7-15.9v-8.1l-7-4-8.5 8.9v8l6.9 4 8.6-8.8z" opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2"/>
      <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1869 427.6l5-3v7.3l-5 13.2z"/>
        <path fill="#DADADA" d="M1862.1 423.7l6.9 4V445l-6.9-4z"/>
        <path fill="#B2B2B2" d="M1862.1 423.7l6.9 4 5-3-6.8-4z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1896.6 443.6l5-3v7.3l-5 13.2z"/>
        <path fill="#DADADA" d="M1889.8 439.6l6.8 4V461l-6.8-3.9z"/>
        <path fill="#B2B2B2" d="M1889.8 439.6l6.8 4 5-3-6.7-4z"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1908 515v.8l-9 5.2v-.9l1.7-1.6zm0 27.8v.8l-9 5.2v-.8l1.7-1.8zm17.2-9.9v.9l-9 5.1v-.8l1.7-1.8zm-27.4-13.5v.9l1.2.7v-.9zm.7-15.5V519l5.3-2.5 2.3-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.1 499.5l-1.1.6-4.8 7v6.6l4.8.2 1.1.6v-6.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.5 517.6l6.5-3.7V500l-6.5 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 513.3l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 507.6v5.7l-.3.2h-2.2v-1.6h.3l.4.3v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1903.6 507.7v5.4l-5.1 3v-5.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 506.8l-5.5 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 500.7v6l-.3.3h-.6l-1.4-2.6v-1.2l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1903.6 500.9v5.7l-5.1 3V504z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.8 514.3l1.3.6-6 3.5-3 1.7-1.3-.7zm-9 32.9v1l1.2.6v-.8zm.7-15.5V547l5.3-2.5 2.3-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.1 527.3l-1.1.7-4.8 7v6.4l4.8.3 1.1.7V536z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.5 545.5l6.5-3.8V528l-6.5 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 541.1l-5.5 3.2v-5.7l5.5 2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 535.4v5.7l-.3.2h-2.2v-1.5h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1903.6 535.6v5.4l-5.1 3v-5.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 534.6l-5.5 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 528.6v6l-.3.1h-.6l-1.4-2.6v-1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1903.6 528.8v5.6l-5.1 3v-5.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.8 542l1.3.8-6 3.3-3 1.9-1.3-.8zm-9 47.5v.8l1.2.8v-.9zm.7-15.5v15l5.3-2.3 2.3-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.1 569.5l-1.1.7-4.8 7v6.5l4.8.2 1.1.8V578z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.5 587.7l6.5-3.8v-13.7l-6.5 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 583.4l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 577.6v5.8l-.3.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1903.6 577.8v5.4l-5.1 3v-5.4zm.4-.9l-5.5 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 570.8v6l-.3.2h-.6l-1.4-2.6v-1l.5.1V572z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1903.6 571v5.7l-5.1 3V574zm3.2 13.3l1.3.7-6 3.4-3 1.8-1.3-.7zm8.2-4.7v.8l1.2.8v-.9zm.5-15.5v15l5.4-2.3 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1923.3 559.6l-1.2.8-4.7 7v6.4l4.7.2 1.2.8v-6.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.5 577.7l6.6-3.7v-13.6l-6.6 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 573.5l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 567.8v5.7l-.3.1h-2.2v-1.4h.4l.3.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1920.8 568v5.3l-5.3 3v-5.4zm.3-1l-5.6 3.2V564z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 561v6h-.8l-1.5-2.5v-1l.5.1V562z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1920.8 561v5.8l-5.3 3V564zm3.2 13.4l1.2.7-6 3.4-3 1.8-1.2-.7zm1.2-69.4v.9l-9 5.2v-.9l1.7-1.6zm-10.2 4.5v1l1.2.6v-.9zm.5-15.5v15.2l5.4-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1923.3 489.6l-1.2.6-4.7 7v6.6l4.7.2 1.2.6v-6.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.5 507.7l6.6-3.7v-13.8l-6.6 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 503.4l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 497.7v5.7l-.3.2h-2.2V502h.4l.3.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1920.8 497.8v5.4l-5.3 3V501z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 496.9l-5.6 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 490.8v6l-.3.3h-.5l-1.5-2.6v-1.2l.5.2V492z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1920.8 491v5.7l-5.3 3V494z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 504.4l1.2.6-6 3.5-3 1.7-1.2-.7zm-9 32.9v1l1.2.6v-.8zm.5-15.5V537l5.4-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1923.3 517.4l-1.2.7-4.7 7v6.4l4.7.3 1.2.7V526z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.5 535.6l6.6-3.8v-13.7l-6.6 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 531.3l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 525.5v5.8h-2.5V530h.4l.3.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1920.8 525.7v5.4l-5.3 3v-5.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 524.7l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.1 518.7v6l-.3.1h-.5l-1.5-2.6v-1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M1920.8 518.9v5.6l-5.3 3v-5.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 532.1l1.2.8-6 3.3-3 1.9-1.2-.8zm-37.4 43.6l-.8.5v23.2l.8-.3zm-38.5-21.4l23.3 13.2 14.4 8.7v23.2l-37.7-21.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1865.7 581l5.7-13.5 14.4 8.7v23.2l-30-17.1.1-.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1864.8 563.1l-.8.5 21.8 12.6.8-.5zm1.5 4.6l-1.5 18.8L1885 598v-21.4zm-16.8-11.7v21.5h2.3l-.6-20.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1850.4 557v20.6l34.6 19.6v-20.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1851.1 558v20l34 19.2v-19.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1850.6 557.9v3.7l6.5 19.9 28 15.7v-19.8l-18.7-10.8-15.8-8.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1875.9 589.6l12.7-7.3v-.4l-12.7 7.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1875.5 589.4l12.7-7.2.4-.3-.4-.3-12.7 7.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1888.8 573.2l-13.5 14.4v2.3l.6-.3v-2l12.9-13.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1834.4 564.1l40.9 23.5v2.3l-41-23.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1834.2 564.1l41.1 23.5 13.5-14.4-19.6-10.6-3.9-2.8-17.7-10zm21.6 17.3h1.4l27.8 15.8v.9l-13-7.6-16.2-9.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1888.8 573.2l-13.5 14.4v2.3l.6-.3v-2l12.9-13.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1848.4 551.1l39.7 22.8.7-.7-40-22.8z"/>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path opacity=".3" fill="#B2B2B2" d="M1879.2 521l-.3-12.7.5-2.4.6 1.4v14.1l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1868.2 516.4v.7l10.4 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1869.8 515.4l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1880 521.3l-1.1-.6v.6zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-2.8l-5.9-3.3v-12.3l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.1 516.2V501l8.8 5v15.2l-1-.5V507l-7-3.9v13.6zm9.3 4.8l-.5.3v-15.1l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.6 500.8l-.5.3 8.8 5 .5-.2z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path opacity=".3" fill="#B2B2B2" d="M1861.6 511.2l-.4-12.8.6-2.4.5 1.4v14.1l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1850.4 506.5v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.2 505.5l-1.8 1 6.6 3.8 3.9 2.2 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1862.3 511.5l-1.1-.7v.7zm.3.8l-1.7 1v-.8l1.7-1zm-2.3-2.7l-5.8-3.3V494l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.4 506.4v-15.2l8.8 5v15.3l-.9-.6v-13.5l-7-4v13.5zm9.4 4.6l-.6.5v-15.2l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853 491l-.6.2 8.8 5 .6-.2z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path opacity=".3" fill="#B2B2B2" d="M1879.2 547.3l-.3-12.8.5-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1868.2 542.7v.8l10.4 6v-.8l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1869.8 541.7l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1880 547.6l-1.1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-2.7l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1870.1 542.5v-15l8.8 5v15l-1-.5v-13.5l-7-4V543zm9.3 4.8l-.5.3v-15.1l.5-.4zm-8.8-20.3l-.5.4 8.8 5.1.5-.4z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path opacity=".3" fill="#B2B2B2" d="M1861.6 537.5l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1850.4 532.8v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.2 531.8l-1.8 1 6.6 3.7 3.9 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1862.3 537.7l-1.1-.6v.6zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-2.7l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1852.4 532.6v-15l8.8 5v15l-.9-.4v-13.5l-7-4v13.5zm9.4 4.8l-.6.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1853 517.2l-.6.3 8.8 5.1.6-.3z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <g fill="#DADADA">
        <path d="M1973.7 575.2l-42.2 24.4v30l42.2-24.4z"/>
        <path d="M1973.7 575.2l-42.2 24.4-2.2 2.5 2.2 2.6 39.7-23z"/>
        <path d="M1889.2 575.2l42.3 24.4v30l-42.3-24.4z"/>
        <path d="M1973.7 575.2l-42.2 24.4-42.3-24.4 42.3-24.4z"/>
        <path d="M1976.2 571.6L1934 596v5l42.2-24.3z"/>
        <path d="M1976.2 571.6L1934 596l-44.8-25.8 42.3-24.4z"/>
        <path d="M1976.2 571.6L1934 596v5l42.2-24.3zm-87-1.4L1934 596v5l-44.8-25.8zm84.5-78l-23.9-37.4-18.3 61.8v77.8l42.2-24.2zm-84.5 0l42.3 24.4v77.8l-42.3-24.2z"/>
      </g>
      <path fill="#9D9D9C" d="M1889.2 492.2l42.3 24.4 18.3-61.6-39.7-17.5z"/>
      <g fill="#DADADA">
        <path d="M1947.4 529.8l-7 4.1v-14.8l7-4.2zm3.4.7l-10.8 6.3v-1.1l10.8-6.2z"/>
        <path d="M1948.9 528.4l-10.8 6.2 2 1 10.7-6z"/>
        <path d="M1947.4 529.8l-.4-.2v-14.9l.4-.4zm-7.9 4.7l-.4-.2v-16.6l.4.2z"/>
        <path d="M1939.5 517.9v16.6l1-.6v-14.7l7-4.2v14.8l.8-.5v-16.6zm-1.4 17.7l2 1.2v-1.1l-2-1z"/>
        <path d="M1939 517.7l.5.2 8.8-5.2-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1967 519.7l-7 4.2v-15l7-4.2zm3.4.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M1968.5 518.3l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M1967 519.7l-.6-.2v-15l.5-.2zm-8 4.7l-.4-.3v-16.5l.5.2z"/>
        <path d="M1959 507.8v16.6l1-.5V509l7-4.2v14.8l.9-.5v-16.6zm-1.3 17.7l2 1.1v-1l-2-1z"/>
        <path d="M1958.6 507.6l.5.2 8.8-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1956.7 499.4l-7 4.1v-15l7-4.1zm3.4.6l-10.7 6.3v-1l10.7-6.3z"/>
        <path d="M1958.2 498l-10.8 6 2 1.2 10.7-6.2z"/>
        <path d="M1956.7 499.4l-.5-.3v-15l.5-.3zm-7.9 4.6l-.5-.2v-16.5h.5z"/>
        <path d="M1948.8 487.4V504l.8-.5v-14.9l7-4.1v14.9l1-.6v-16.6zm-1.4 17.6l2 1.3v-1l-2-1.2z"/>
        <path d="M1948.3 487.3h.5l8.8-5.1-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1947.4 554.1l-7 4.1v-15l7-4zm3.4.6L1940 561v-1l10.8-6.3z"/>
        <path d="M1948.9 552.7l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M1947.4 554.1l-.4-.2v-15l.4-.3zm-7.9 4.7l-.4-.3V542l.4.2z"/>
        <path d="M1939.5 542.2v16.6l1-.6v-14.8l7-4.2v15l.8-.7V537zm-1.4 17.7l2 1.1v-1l-2-1z"/>
        <path d="M1939 542l.5.2 8.8-5.2-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1967 544l-7 4v-14.8l7-4.2zm3.4.6l-10.8 6.3v-1.1l10.8-6.2z"/>
        <path d="M1968.5 542.5l-10.8 6.2 2 1 10.7-6z"/>
        <path d="M1967 544l-.6-.3V529l.5-.4zm-8 4.6l-.4-.2v-16.6l.5.2z"/>
        <path d="M1959 532v16.6l1-.4v-15l7-4v14.7l.9-.4v-16.7zm-1.3 17.7l2 1.2v-1.1l-2-1z"/>
        <path d="M1958.6 531.8l.5.2 8.8-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1947.8 578.2l-6.9 4.1v-15l7-4zm3.5.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M1949.4 576.8l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M1947.8 578.2l-.4-.2v-15l.4-.2zm-7.8 4.8l-.5-.4v-16.5l.4.2z"/>
        <path d="M1940 566.3V583l.9-.6v-14.8l7-4.2v15l.9-.7v-16.5zm-1.4 17.6l2 1.2v-1l-2-1zm.9-17.8l.4.2 8.9-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1967.4 568l-7 4.2v-15l7-4zm3.5.7L1960 575v-1l10.9-6.1z"/>
        <path d="M1969 566.6l-11 6.2 2 1.1 10.9-6.1z"/>
        <path d="M1967.4 568l-.5-.2V553l.5-.4zm-7.9 4.7l-.4-.1v-16.7l.4.2z"/>
        <path d="M1959.5 556.1v16.6l.9-.5v-14.8l7-4.2V568l.9-.4v-16.7zm-1.5 17.7l2 1.2v-1l-2-1zm1-17.8l.5.1 8.8-5.2-.5-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1947.4 613.8l-7 4V603l7-4.1zm3.4.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M1948.9 612.3l-10.8 6.3 2 1 10.7-6.2z"/>
        <path d="M1947.4 613.8l-.4-.2v-15l.4-.3zm-7.9 4.7l-.4-.3v-16.5l.4.1z"/>
        <path d="M1939.5 601.8v16.7l1-.6V603l7-4.1v14.8l.8-.5v-16.6zm-1.4 17.7l2 1.2v-1l-2-1.1z"/>
        <path d="M1939 601.7l.5.1 8.8-5.1-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1967 603.7l-7 4.1v-15l7-4.1zm3.4.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M1968.5 602.2l-10.8 6.2 2 1.1 10.7-6.2z"/>
        <path d="M1967 603.7l-.6-.3v-14.9l.5-.4zm-8 4.6l-.4-.2v-16.5l.5.2z"/>
        <path d="M1959 591.8v16.5l1-.5v-14.9l7-4.1v14.9l.9-.6v-16.6zm-1.3 17.5l2 1.3v-1l-2-1.2z"/>
        <path d="M1958.6 591.6l.5.2 8.8-5.3-.6-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1916.6 529.7l7 4.1v-15l-7-4zm-3.4.6l10.8 6.3v-1l-10.8-6.3z"/>
        <path d="M1915.2 528.3l10.7 6.2-1.9 1-10.8-6.2z"/>
        <path d="M1916.6 529.7l.5-.2v-15l-.5-.2zm8 4.6l.5-.2v-16.5l-.5.2z"/>
        <path d="M1924.6 517.8v16.5l-1-.5V519l-7-4.2v15l-.9-.7v-16.6zm1.4 17.6l-2 1.2v-1l2-1z"/>
        <path d="M1925 517.6l-.4.2-8.9-5.3h.6z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1896.4 518.7l7 4.1v-14.9l-7-4.1zm-3.4.6l10.8 6.3v-1l-10.7-6.3z"/>
        <path d="M1895 517.2l10.8 6.3-2 1-10.7-6.2z"/>
        <path d="M1896.4 518.7l.5-.2v-15l-.5-.3zm8 4.7l.5-.2v-16.6l-.5.2z"/>
        <path d="M1904.4 506.8v16.6l-1-.6V508l-7-4.1v14.8l-.8-.5v-16.6zm1.4 17.6l-2 1.2v-1l2-1.1z"/>
        <path d="M1904.9 506.6l-.5.2-8.8-5.2.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1916.6 554.7l7 4.1v-15l-7-4zm-3.4.6l10.8 6.3v-1l-10.8-6.3z"/>
        <path d="M1915.2 553.2l10.7 6.3-1.9 1-10.8-6.2z"/>
        <path d="M1916.6 554.7l.5-.2v-15l-.5-.3zm8 4.6l.5-.2v-16.5l-.5.2z"/>
        <path d="M1924.6 542.8v16.5l-1-.5V544l-7-4.1v14.9l-.9-.6v-16.6zm1.4 17.6l-2 1.2v-1l2-1.1z"/>
        <path d="M1925 542.6l-.4.2-8.9-5.3.6-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1896.4 543.6l7 4.2v-15l-7-4zm-3.4.6l10.8 6.4v-1.1l-10.7-6.2z"/>
        <path d="M1895 542.2l10.8 6.2-2 1.1-10.7-6.2z"/>
        <path d="M1896.4 543.6l.5-.1v-15l-.5-.3zm8 4.7l.5-.1v-16.7l-.5.2z"/>
        <path d="M1904.4 531.7v16.6l-1-.5V533l-7-4.1v14.7l-.8-.4v-16.7zm1.4 17.7l-2 1.2v-1.1l2-1z"/>
        <path d="M1904.9 531.5l-.5.2-8.8-5.2.5-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1916.6 579l7 4.1v-15l-7-4.1zm-3.4.6l10.8 6.3v-1l-10.8-6.3z"/>
        <path d="M1915.2 577.5l10.7 6.3-1.9 1-10.8-6.2z"/>
        <path d="M1916.6 579l.5-.3v-14.9l-.5-.3zm8 4.6l.5-.2v-16.5l-.5.2z"/>
        <path d="M1924.6 567v16.6l-1-.5v-14.9l-7-4.1V579l-.9-.6v-16.6zm1.4 17.7l-2 1.2v-1l2-1.1z"/>
        <path d="M1925 566.9l-.4.2-8.9-5.3.6-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1896.4 568l7 4v-14.8l-7-4.2zm-3.4.5l10.8 6.4v-1.1l-10.7-6.2z"/>
        <path d="M1895 566.5l10.8 6.2-2 1.1-10.7-6.2z"/>
        <path d="M1896.4 568l.5-.3v-15l-.5-.2zm8 4.6l.5-.1v-16.7l-.5.2z"/>
        <path d="M1904.4 556v16.6l-1-.5v-14.8l-7-4.1v14.7l-.8-.4v-16.7zm1.4 17.7l-2 1.2v-1.1l2-1zm-.9-17.9l-.5.2-8.8-5.2.5-.1z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1916.6 611.7l7 4.2v-15l-7-4zm-3.4.7l10.8 6.3v-1.1l-10.8-6.2z"/>
        <path d="M1915.2 610.3l10.7 6.2-1.9 1.1-10.8-6.2z"/>
        <path d="M1916.6 611.7l.5-.2v-15l-.5-.2zm8 4.7l.5-.1v-16.7l-.5.2z"/>
        <path d="M1924.6 599.8v16.6l-1-.5V601l-7-4.2v14.8l-.9-.4v-16.7zm1.4 17.7l-2 1.2v-1.1l2-1z"/>
        <path d="M1925 599.6l-.4.2-8.9-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M1896.4 600.8l7 4.1v-15l-7-4.1zm-3.4.6l10.8 6.3v-1l-10.7-6.3z"/>
        <path d="M1895 599.3l10.8 6.2-2 1.1-10.7-6.2z"/>
        <path d="M1896.4 600.8l.5-.3v-14.9l-.5-.4zm8 4.6l.5-.2v-16.5l-.5.2z"/>
        <path d="M1904.4 588.9v16.5l-1-.5V590l-7-4.1v14.9l-.8-.6v-16.6zm1.4 17.6l-2 1.2v-1l2-1.2z"/>
        <path d="M1904.9 588.7l-.5.2-8.8-5.3.5-.1z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1996.6 520.9l2.5 1.4 8.6-4.9-2.5-1.4zm-17 9.8l2.5 1.4 8.6-4.9-2.6-1.4zm-17.1 9.9l2.6 1.4 8.5-4.9-2.5-1.5zm-17 9.8l2.5 1.4 8.6-4.9-2.5-1.4zm-17 9.8l2.5 1.5 8.6-5-2.6-1.4zm1.5 27.2l43.6 25.2v38.7l-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2017.2 587.4l-43.6 25.2v38.7l43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1927.4 583.7l43.5 25.2v5.2l-43.5-25.1z"/>
      <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M1930 587.4l9.3 5.4-4.3-10.8v-1.8l1.1 1.4 1.5.2v-.2l-2.7-6.8v-.9l.8.5 2.7 6.8.5 1.3 1.3 4.5 13.5 4 1.8 1-2.6-6.9v-.8l.8.4 7.6 19.4v1.5l12.2 7v5.3l-41-23.6-2.5-6.9zm29 16.7l.8.5v-.5l-1.1-.7.3.7zm-1.8-4.3l.2.5 2 1.2-2.2-5.5v3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1927.4 583.7l43.5 25.2 46.3-26.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1927.4 583.7l43.5 25.2v5.2l-43.5-25.1zm89.8-1.5l-46.3 26.7v5.2l46.3-26.7zm-87.2-60.7l43.6 25.1v60.7l-43.6-25.1z"/>
      <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M1930 521.5l43.6 25.1 3.1 2.8-3.1 2.5-41-23.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2017.2 521.5l-43.6 25.1v60.7l43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1927.4 517.7l43.5 25.2 46.3-26.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1930 516.2l43.6 25.1 43.6-25.1-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1930 516.2l43.6 25.1 18.3-7.4 25.3-17.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1930 516.2l21.8 12.6 21.8 12.5 21.8-48.8 21.8 23.7-21.8-12.6-21.8-12.6-21.8-23.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2011.8 516.2l1.3.7 1.4.8-7-13.8-12.1-14-1.4-.8-1.3-.8 6 14.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2011.8 516.2l-38.2 22 19-49.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1973.6 541.3l21.8-57 21.8 31.9-2.7 1.5-19.1-27.8-19.2 49.9zm-46.2-23.6l43.5 25.2v5.3l-43.5-25.2zm89.8-1.5l-46.3 26.7v5.3l46.3-26.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1951.8 459.2l-21.8 57 21.8 12.6 21.8 12.5 21.8-57-43.6-25"/>
      <path opacity=".3" d="M1989.8 498.1l-.1-8-6.8-4-8.7 8.8.1 8.1 6.8 4 8.7-8.9zm-27.7-15.9v-8l-6.9-4-8.6 8.8v8l6.9 4 8.6-8.8z" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2"/>
      <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1953.4 473.4l5-2.8v7.2l-5 13.2z"/>
        <path fill="#DADADA" d="M1946.6 469.5l6.8 4V491l-6.8-4z"/>
        <path fill="#B2B2B2" d="M1946.6 469.5l6.8 4 5-3-6.7-3.9z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1981 489.5l5.1-3v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M1974.2 485.5l6.8 4V507l-6.8-4z"/>
        <path fill="#B2B2B2" d="M1974.2 485.5l6.8 4 5.1-3-6.8-4z"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1992.5 560.8v.9l-9 5.2v-.9l1.7-1.7zm0 27.8v1l-9 5.1v-1l1.7-1.6zm17.2-9.9v1l-9 5.1v-1l1.6-1.5zm-27.4-13.4v1l1.2.6v-.9zm.6-15.5V565l5.3-2.5 2.5-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1990.7 545.4l-1.3.6-4.8 7v6.5l4.8.3 1.3.7V554z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1982.9 563.5l6.5-3.7V546l-6.5 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 559.2l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 553.4v5.8l-.2.2h-2.3v-1.5h.3l.4.1v-3.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.2 553.6v5.4l-5.3 3v-5.3zm.2-.9l-5.5 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 546.6v6l-.2.2h-.6l-1.5-2.6v-1l.5.1v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.2 546.8v5.7l-5.3 3v-5.7zm3 13.2l1.3.8-5.9 3.4-3 1.8-1.3-.7zm-8.9 33.1v.9l1.2.7v-1zm.6-15.5v15.1l5.3-2.5 2.5-1.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1990.7 573.1l-1.3.8-4.8 7v6.4l4.8.2 1.3.8v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1982.9 591.3l6.5-3.8V574l-6.5 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 587l-5.5 3.1v-5.7l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 581.3v5.7l-.2.1h-2.3v-1.4h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.2 581.5v5.4l-5.3 3v-5.4zm.2-1.1l-5.5 3.3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 574.4v6l-.2.2h-.6l-1.5-2.6v-1l.5.2v-1.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.2 574.6v5.7l-5.3 3v-5.7zm3 13.4l1.3.6-5.9 3.4-3 1.8-1.3-.7zm-8.3 31.9v15l5.3-2.4 2.5-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1990.7 615.4l-1.3.8-4.8 7v6.4l4.8.2 1.3.8V624z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1982.9 633.5l6.5-3.7v-13.6l-6.5 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 629.2l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 623.5v5.7l-.2.2h-2.3V628h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.2 623.7v5.4l-5.3 3v-5.4zm.2-1l-5.5 3.3v-6.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.4 616.6v6l-.2.3h-.6l-1.5-2.6V619l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.2 616.8v5.7l-5.3 3V620zm3 13.4l1.3.6-5.9 3.5-3 1.7-1.3-.6zm8.8-20.2v15l5.3-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2007.7 605.5l-1.2.8-4.7 6.9v6.5l4.7.2 1.2.8V614z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2000 623.6l6.5-3.7v-13.6l-6.4 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 619.3l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 613.7v5.6l-.2.2h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.3 613.9v5.2l-5.2 3.1v-5.4zm.2-1.1l-5.4 3.3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 606.7v6l-.2.3h-.6l-1.4-2.6v-1.2l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.3 607v5.6l-5.2 3V610zm3.1 13.3l1.3.7-6 3.4-3 1.7-1.3-.6zm1.3-69.3v.8l-9 5.2v-.9l1.6-1.7zm-10.3 4.4v1l1.2.6v-.9zm.6-15.5v15.2l5.3-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2007.7 535.5l-1.2.7-4.7 7v6.4l4.7.3 1.2.7V544z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2000 553.6l6.5-3.7v-13.7l-6.4 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 549.3l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 543.5v5.8l-.2.1h-2.2V548h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.3 543.7v5.4l-5.2 3v-5.4zm.2-.9l-5.4 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 536.7v6l-.2.2h-.6l-1.4-2.6v-1l.5.1v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.3 537v5.6l-5.2 3v-5.7zm3.1 13.2l1.3.7-6 3.4-3 1.8-1.3-.7zm-9 33v.9l1.2.7v-1zm.6-15.4v15l5.3-2.5 2.4-1.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2007.7 563.2l-1.2.8-4.7 7v6.5l4.7.1 1.2.8V572z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2000 581.4l6.5-3.8V564l-6.4 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 577l-5.5 3.2v-5.7l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 571.4v5.7l-.2.2h-2.2v-1.5h.3l.4.2v-3.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.3 571.6v5.4l-5.2 3v-5.4zm.2-1.1l-5.4 3.3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.5 564.5v6l-.2.2h-.6l-1.4-2.6V567l.5.3v-1.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2005.3 564.7v5.6l-5.2 3.1v-5.6zm3.1 13.3l1.3.7-6 3.5-3 1.7-1.3-.7zm-37.4 43.6l-.7.5v23.3l.8-.5zm-38.4-21.4l23.2 13 14.5 9v23.2l-37.7-22z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1950.2 627l5.6-13.7 14.5 8.8v23.3l-30-17.3v-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1949.3 609l-.8.5 21.8 12.6.8-.5zm1.5 4.5l-1.5 18.8 20.2 11.7v-21.5zm-16.9-11.7v21.6h2.4l-.7-20.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1934.9 603v20.5l34.6 19.5v-20.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1935.5 603.8l.1 20 34 19.2v-19.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1935 603.7v3.7c2.3 6.6 4.4 13.3 6.5 19.9l28 15.7v-19.8l-18.7-10.8-15.8-8.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1960.4 635.5l12.6-7.2v-.6l-12.6 7.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1960 635.3l12.6-7.3.4-.3-.4-.2-12.6 7.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1973.2 619.1l-13.5 14.3v2.4l.7-.3v-2l12.8-13.7zM1919 610l40.7 23.4v2.4l-40.8-23.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1918.7 610l41 23.4 13.5-14.3-19.6-10.6-3.8-2.8-17.6-10.1zm21.5 17.3h1.4l27.8 15.8v1l-13-7.7-16.2-9.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1973.2 619.1l-13.5 14.3v2.4l.7-.3v-2l12.8-13.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1932.8 597l39.8 22.8.6-.7-39.9-22.8z"/>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M1963.8 590.6l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1952.6 585.9v.9l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1954.3 585l-1.7.9 6.6 3.7 3.9 2.4 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1964.4 590.8l-1-.6v.6zm.3 1l-1.6 1v-.8l1.6-1zm-2.3-15v13.5l-4.8-2.2-2.1-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1955.5 572.7l1 .7 4.4 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1960.9 579.7v5.8l-3.2.8h-2.2l1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1962.4 589l-5.8-3.4v-12.2l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1962.4 589l-4.7-2.7V575l4.7 2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1957.7 585.3l4.7 2.7v-11.2l-4.1 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1957.4 573.9v11.2l.3.2h.6l1.2-8.2v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1957.7 574v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1958.3 576.6v8.7l4.1 2.4V579z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1954.5 585.7v-15l8.9 5v15.1l-1-.5v-13.5l-6.9-4v13.5zm9.5 4.8l-.6.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1955.1 570.3l-.6.3 8.9 5.1.6-.3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M1945.4 581.8l-.4-12.8.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1934.3 577.2v.7l10.4 6v-.7l-3.2-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1936 576.2l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1946.2 582l-1.2-.6v.7zm.3 1l-1.8 1v-.8l1.8-1zm-2.5-15v13.5l-4.6-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1937.2 564l1.1.6 4.2 6.2v5.9l-3.1.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1942.5 570.8v5.9l-3.1.8h-2.2l1.1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1944 580.2l-5.7-3.3v-12.3l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1944 580.2l-4.6-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1939.4 576.5l4.7 2.8v-11.4l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1939.2 565v11.4h.7l1.3-8v-1h-.4V566z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1939.5 565.3v10.9l4.6 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1940 567.8v8.7l4 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1936.2 577v-15.1l8.8 5v15.2l-1-.6v-13.6l-6.8-4v13.6zm9.4 4.8l-.6.3V567l.6-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1936.8 561.5l-.6.4 8.8 5 .6-.3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M1963.8 566.9l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1952.6 562.3v.7l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1954.3 561.3l-1.7 1 6.6 3.7 3.9 2.2 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1964.4 567.2l-1-.7v.7zm.3.9l-1.6 1v-.9l1.6-1zm-2.3-15.1v13.6l-4.8-2.2-2.1-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1955.5 549l1 .7 4.4 6.2v5.9l-3.2.9h-2.2v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1960.9 556v5.8l-3.2.9h-2.2l1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1962.4 565.3l-5.8-3.3v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1962.4 565.3l-4.7-2.6v-11.4l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1957.7 561.6l4.7 2.8V553l-4.1 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1957.4 550.2v11.3l.3.1h.6l1.2-8.2v-1l-.4.2V551z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1957.7 550.4v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1958.3 553v8.6l4.1 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1954.5 562v-15l8.9 5.1v15l-1-.5v-13.5l-6.9-4v13.6zm9.5 4.9l-.6.3V552l.6-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1955.1 546.6l-.6.4 8.9 5.1.6-.4z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M1945.4 558.1l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1934.3 553.4v.9l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1936 552.5l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1946.2 558.3l-1.2-.5v.5zm.3 1l-1.8 1v-.8l1.8-1zm-2.5-15V558l-4.6-2.3-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1937.2 540.3l1.1.7 4.2 6.2v5.9l-3.1.7h-2.2v-5.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1942.5 547.2v5.9l-3.1.7h-2.2l1.1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1944 556.5l-5.7-3.3V541l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1944 556.5l-4.6-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1939.4 552.9l4.7 2.7v-11.3l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1939.2 541.4v11.3l.2.2h.5l1.3-8.3v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1939.5 541.5v11l4.6 2.8v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1940 544.1v8.8l4 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1936.2 553.2v-15l8.8 5v15.1l-1-.4v-13.6l-6.8-4v13.5zm9.4 4.8l-.6.3v-15l.6-.3zm-8.8-20.1l-.6.3 8.8 5 .6-.2z"/>
      </g>
    </g>
    <g>
      <path d="M1552 655l115.5-66.8-13.5 5.3-115.5 66.7zm146.4-49l-71.8 41.6 13.3 20.8 72-41.6z" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1614 587.7l28 16.2V733l-28-16.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1618.6 678.8l6.6-3.8 56-32.3 2-1.2 26-15v64.7l-112 64.6v-64.6z"/>
      <path fill="#B2B2B2" d="M1691 663l12.1-6.8v-12.4c0-3.2-2.4-4.6-5.3-3l-1.6 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1704 656l-13.1 7.5-.9-.5 13.2-7.5z"/>
        <path d="M1690.1 652.7v11.4l1.2-.7v-11.3l5.6-3.3v11.3l.5-.2v-11.4l5.6-3.2v11.3l1.2-.7v-11.3c0-4.4-3.2-6.3-7-4-3.9 2.2-7 7.6-7 12.1zm1-1.3a13 13 0 0 1 6-9.5c3-1.7 5.5-.5 5.8 2.8l-11.7 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1674.1 672.5l12.1-6.8v-12.4c0-3.2-2.4-4.6-5.3-3l-1.6 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1687 665.4l-13 7.6-.9-.5 13.2-7.6z"/>
        <path d="M1673.1 662.2v11.3l1.2-.7v-11.3l5.6-3.3v11.4l.5-.3v-11.4l5.6-3.2V666l1.2-.7V654c0-4.4-3.2-6.2-7-4-4 2.3-7 7.6-7 12.2zm1.2-1.4a13 13 0 0 1 5.8-9.5c3.1-1.7 5.6-.5 6 2.8l-11.8 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1691 687l12.1-6.8v-12.4c0-3.2-2.4-4.6-5.3-3l-1.6 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1704 680l-13.1 7.5-.9-.5 13.2-7.5z"/>
        <path d="M1690.1 676.8V688l1.2-.7V676l5.6-3.3v11.4l.5-.3v-11.4l5.6-3.2v11.3l1.2-.7v-11.3c0-4.4-3.2-6.2-7-4s-7 7.6-7 12.2zm1-1.4a13 13 0 0 1 6-9.5c3-1.7 5.5-.5 5.8 2.8l-11.7 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1674.1 696.5l12.1-6.8v-12.4c0-3.2-2.4-4.6-5.3-3l-1.6 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1687 689.4l-13 7.6-.9-.5 13.2-7.5z"/>
        <path d="M1673.1 686.2v11.3l1.2-.7v-11.3l5.6-3.3v11.4l.5-.3v-11.4l5.6-3.2V690l1.2-.7V678c0-4.4-3.2-6.2-7-4-4 2.3-7 7.7-7 12.2zm1.2-1.4a13 13 0 0 1 5.8-9.5c3.1-1.7 5.6-.5 6 2.8l-11.8 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1622.2 726.3l12.1-6.8v-12.4c0-3.3-2.4-4.6-5.2-3l-1.7 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1635.2 719.2l-13.2 7.6-.7-.5 13.1-7.6z"/>
        <path d="M1621.3 716v11.3l1.1-.7v-11.3l5.6-3.3v11.3l.6-.2v-11.4l5.5-3.2v11.3l1.2-.7v-11.3c0-4.4-3.2-6.3-7-4-4 2.3-7 7.6-7 12.1zm1.1-1.4c.3-3.7 2.8-7.8 5.9-9.5s5.6-.5 5.8 2.8l-11.7 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1605.2 735.7l12.1-6.8v-12.4c0-3.2-2.4-4.6-5.2-3l-1.7 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1618.3 728.6l-13.2 7.6-.8-.5 13.1-7.6z"/>
        <path d="M1604.3 725.4v11.3l1.1-.7v-11.3l5.6-3.3v11.4l.6-.3V721l5.5-3.2v11.3l1.2-.7v-11.3c0-4.4-3.2-6.3-7-4-3.9 2.2-7 7.7-7 12.2zm1.1-1.3a13 13 0 0 1 5.9-9.5c3-1.7 5.6-.5 5.8 2.8l-11.7 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1622.2 701.8l12.1-6.8v-12.4c0-3.2-2.4-4.6-5.2-3l-1.7 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1635.2 694.7l-13.2 7.6-.7-.5 13.1-7.6z"/>
        <path d="M1621.3 691.5v11.3l1.1-.7v-11.3l5.6-3.3v11.3l.6-.2v-11.4l5.5-3.2v11.3l1.2-.7v-11.2c0-4.4-3.2-6.3-7-4-4 2.2-7 7.5-7 12zm1.1-1.4c.3-3.6 2.8-7.8 5.9-9.5s5.6-.5 5.8 2.8l-11.7 6.7z"/>
      </g>
      <path fill="#B2B2B2" d="M1605.2 711.2l12.1-6.8V692c0-3.2-2.4-4.6-5.2-3l-1.7 1a11.5 11.5 0 0 0-5.3 9l.1 12.2z"/>
      <g fill="#3C3C3B">
        <path d="M1618.3 704.1l-13.2 7.6-.8-.5 13.1-7.6z"/>
        <path d="M1604.3 700.9v11.3l1.1-.7v-11.3l5.6-3.3v11.5l.6-.3v-11.4l5.5-3.2v11.3l1.2-.7v-11.3c0-4.4-3.2-6.2-7-4-3.9 2.2-7 7.6-7 12zm1.1-1.3a13 13 0 0 1 5.9-9.5c3-1.7 5.6-.5 5.8 2.8l-11.7 6.7z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1622.1 610.8c0-3.8 2.6-5.3 5.9-3.4a13 13 0 0 1 5.9 10.2c0 3.7-2.6 5.3-5.9 3.4a13 13 0 0 1-5.9-10.2z"/>
        <path d="M1625.7 616.2l2.1-1.4.2.2c.4.2.7 0 .7-.4s-.2-.8-.5-1l-.3-5.5-.3 5.2c-.3 0-.5.2-.5.5l.1.3v.1l-1.5 2z"/>
        <path d="M1625.1 616.4l2.2-2.2.3-.3v-.5l-.2-5 .6-.2.3 5.5c.3.2.5.6.5 1l-.2.5-.6.4-.5-.3.1-.1-1.8 1.1-.7.1z"/>
        <path d="M1625.1 616.4l1.7-1.8v-.5c0-.3.1-.4.4-.4l.3-5.2.3 5.4c.3.3.5.7.5 1.1 0 .5-.3.7-.7.4a.2.2 0 0 1-.2-.2l-2.3 1.2z"/>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1554.2 653.7l30 17.4 13 20v64.7l-56-32.4v-64.6z"/>
      <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1698.4 606l-49.3 28.6 13.5 20.7 49.2-28.5z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1670 589.7l28.4 16.4-28.3 16.4z"/>
      <path fill="#B2B2B2" d="M1681.2 641.2l-7.3 4.2 3.7-7.3z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1673.4 645.7l-9.7-16.4 13.8 8.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1673.4 645.7h.3l3.8-7.7 3.8 3.1h.3l-4.1-3.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1680.3 641.3l.4.2-6.4 3.8-.3-.2z"/>
      <path fill="#B2B2B2" d="M1700.2 629.6l-7.3 4.2 3.7-7.4z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1692.4 634.1l-9.7-16.5 13.9 8.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1692.4 634.1l.3-.2 3.9-7.6 3.8 3.2h.2l-4-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1699.5 629.6l.2.2-6.4 3.7-.3-.2z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1642 604l28-16.3V717l-28 16.1z"/>
        <path fill="#DADADA" d="M1650.4 728.3l11.2-6.4v-18.3c0-3.1-2.2-4.4-4.8-2.8l-1.5.8a10.6 10.6 0 0 0-4.8 8.4l-.1 18.3z"/>
        <path fill="#DADADA" d="M1649 711.3v17.8l1.4-.8V711c0-3.6 2.5-8 5.5-9.7 2.4-1.4 4.4-1 5.1 1 .3.5.5 1.3.5 2.2v17.4l.6-.3.9-.5v-17.7c0-4.5-3.2-6.3-7-4a15 15 0 0 0-7 12z"/>
        <path fill="#DADADA" d="M1649 711.1l.5.4v17.9l-.6-.3m12.1-27.8v.7c.3.6.5 1.4.5 2.3v17.5l.6.3v-20.8h-1z"/>
        <path fill="#B2B2B2" d="M1650.4 728.3l11.2-6.4v-18.3c0-3.1-2.2-4.4-4.8-2.8l-1.5.8a10.6 10.6 0 0 0-4.8 8.4v18.3h-.1z"/>
        <path fill="#DADADA" d="M1656.5 699.5c3.9-2.2 7-.4 7 4v17.8l-1.4.8v-17.5c0-3.5-2.5-5-5.6-3.3s-5.5 6.2-5.5 9.7v17.5l-1.5.8v-17.8c0-4.3 3.2-9.8 7-12z"/>
        <path fill="none" d="M1650 617.6c0 3.7 2.7 5.3 6 3.4a13 13 0 0 0 5.8-10.2c0-3.8-2.6-5.3-5.9-3.4a13 13 0 0 0-5.8 10.2z"/>
        <path fill="#DADADA" d="M1653.6 618.8l2-3.6.3-.1c.4-.3.7-.8.7-1.2s-.2-.5-.5-.4l-.2-5.2-.3 5.5c-.3.2-.5.6-.5 1v.3l-1.5 3.7z"/>
        <path fill="#DADADA" d="M1656.5 608.5l-.6-.3-.1 5.5.4.2zm-.5 6.8l-.6-.3-1.8 3.8.6.3z"/>
        <path fill="#DADADA" d="M1655.3 614.6v.4l.4.2h.1l.1-.2.3-1-.5-.3c-.2.1-.4.6-.4 1z"/>
        <path fill="#DADADA" d="M1654.2 619.1l1.7-3.8v-.4c0-.4.1-.8.4-1l.3-5.5.3 5.2c.3 0 .5 0 .5.4 0 .5-.3 1-.7 1.3h-.2l-2.3 3.8zM1642 733.1l-2.6-1.7V602.5l2.5 1.5z"/>
      </g>
      <g>
        <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1640.4 668.1l-44.1 25.5-13.4-20.8 44-25.4z"/>
        <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1552 655l-13.5 5.2 75.5-43.6v2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1596.3 693.6l-.7.3-13.2-20.5-30.5-17.8-13.2 5-.2-.4 13.4-5.2 31 17.8z"/>
        <path fill="#B2B2B2" d="M1612.7 680l-7.4 4.2 3.8-7.3z"/>
        <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1604.9 684.5l-9.7-16.5 13.8 8.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1604.9 684.5l.3-.2 3.8-7.5 3.8 3.1h.2l-4-3.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1611.9 680l.3.2-6.4 3.8-.4-.2z"/>
        <path fill="#B2B2B2" d="M1631 669.6l-7.2 4.2 3.6-7.3z"/>
        <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1623.3 674l-9.7-16.4 13.8 8.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1623.3 674h.3l3.8-7.7 3.9 3.2.2-.1-4-3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1630.3 669.6l.3.2-6.4 3.8-.3-.2z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M1611.6 586.4l30.3 17.5 30.5-17.5-30.5-17.6z"/>
        <path fill="#4A4A49" d="M1642 527.1V604l30.4-17.5z"/>
        <path fill="#9D9D9C" d="M1611.6 586.4l30.3-59.3V604z"/>
        <path fill="#CBD000" class="fillgreen" d="M1634.1 503.3l-3.2-5.2 10.4 6 .6.4.6.2V528l-.2.2a1 1 0 0 1-.8 0l-.2-.2v-17.3l-10.4-6 3.2-1.4z"/>
      </g>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M1614 619.2l-.1 17.1 12.8 10.8-44.4 25.7-30.4-17.8z"/>
      <g>
        <path fill="#B2B2B2" d="M1649.6 691.4l12.1-6.9v-12.4c0-3.2-2.4-4.6-5.3-3l-1.6 1a11.5 11.5 0 0 0-5.3 9l.1 12.3z"/>
        <g fill="#3C3C3B">
          <path d="M1662.6 684.3l-13.2 7.5-.8-.4 13.2-7.5z"/>
          <path d="M1648.6 681v11.4l1.2-.7v-11.3l5.6-3.3v11.4l.5-.3v-11.3l5.6-3.3v11.3l1.2-.7V673c0-4.4-3.2-6.2-7-4-4 2.3-7 7.7-7 12.2zm1.2-1.3a13 13 0 0 1 5.9-9.5c3-1.7 5.5-.5 5.8 2.8l-11.7 6.7z"/>
        </g>
      </g>
      <g>
        <path fill="#B2B2B2" d="M1649 664l12-6.8v-12.4c0-3.3-2.4-4.6-5.2-3l-1.7 1a11.5 11.5 0 0 0-5.3 8.9l.1 12.3z"/>
        <g fill="#3C3C3B">
          <path d="M1662 657l-13.2 7.5-.8-.5 13.1-7.5z"/>
          <path d="M1648 653.7V665l1.1-.6V653l5.6-3.2V661l.6-.3v-11.3l5.5-3.3v11.3l1.2-.6v-11.4c0-4.4-3.2-6.2-7-4-3.9 2.2-7 7.7-7 12.2zm1.1-1.3a13 13 0 0 1 5.9-9.5c3-1.8 5.6-.5 5.8 2.7l-11.7 6.8z"/>
        </g>
      </g>
      <g>
        <path fill="#B2B2B2" d="M1583.4 707.1l-12-6.8v-12.4c0-3.3 2.3-4.6 5.2-3l1.6 1a11 11 0 0 1 5.3 9V707z"/>
        <g fill="#3C3C3B">
          <path d="M1570.4 700l13.1 7.6.9-.5-13.2-7.6z"/>
          <path d="M1577.4 684.6c-3.9-2.2-7-.4-7 4V700l1.1.7v-11.4l5.6 3.3v11.3l.6.3V693l5.5 3.3v11.2l1.2.7v-11.4c-.1-4.5-3.2-9.9-7-12zm-5.9 4c.3-3.2 2.8-4.4 5.9-2.7 3 1.7 5.6 6 5.8 9.5l-11.7-6.7z"/>
        </g>
      </g>
      <g>
        <path fill="#B2B2B2" d="M1563.8 695.6l-12-6.8v-12.4c0-3.3 2.3-4.6 5.2-3l1.7 1c2.8 1.6 5.2 5.6 5.2 8.9v12.3z"/>
        <g fill="#3C3C3B">
          <path d="M1550.9 688.5l13 7.6.9-.5-13.2-7.6z"/>
          <path d="M1557.8 673.1c-3.9-2.2-7-.4-7 4v11.4l1.1.6v-11.3l5.6 3.3v11.3l.6.3v-11.3l5.5 3.2V696l1.2.6v-11.3c0-4.5-3.2-9.9-7-12zm-5.9 4c.3-3.2 2.8-4.5 5.9-2.7 3 1.7 5.6 6 5.8 9.5L1552 677z"/>
        </g>
      </g>
      <g>
        <path fill="#B2B2B2" d="M1582.6 732.2l-12.1-6.8V713c0-3.3 2.4-4.6 5.3-3l1.6 1c2.9 1.6 5.3 5.6 5.3 8.9l-.1 12.3z"/>
        <g fill="#3C3C3B">
          <path d="M1569.6 725.2l13 7.5 1-.5-13.2-7.5z"/>
          <path d="M1576.5 709.7c-3.8-2.2-7-.4-7 4v11.4l1.2.6v-11.3l5.5 3.3V729l.6.3V718l5.6 3.2v11.4l1.1.6V722c0-4.5-3.1-9.9-7-12.2zm-5.8 4.1c.2-3.2 2.7-4.5 5.8-2.8 3 1.8 5.6 6 5.9 9.6l-11.7-6.8z"/>
        </g>
      </g>
      <g>
        <path fill="#B2B2B2" d="M1563 720.6l-12-6.8v-12.4c0-3.2 2.4-4.6 5.3-3l1.6 1c2.9 1.7 5.3 5.7 5.3 9l-.1 12.2z"/>
        <g fill="#3C3C3B">
          <path d="M1550 713.6l13.2 7.5.8-.5-13.1-7.4z"/>
          <path d="M1557 698.2c-3.8-2.2-7-.4-7 4v11.3l1.2.7V703l5.5 3.2v11.4l.6.3v-11.4l5.6 3.3V721l1.1.7v-11.3c0-4.5-3.1-10-7-12.2zm-5.8 4.1c.3-3.3 2.7-4.5 5.8-2.8s5.6 6 5.9 9.5l-11.7-6.7z"/>
        </g>
      </g>
    </g>
    <g stroke-miterlimit="10">
      <path opacity=".3" fill="#878787" stroke="#878787" d="M2217.4 1011.6h-2.8c-6.1 1-14.3 5-15.6 6l-1.5.5c-4.5 2.2-6.8 4-9.4 5.8l-.5.3-.2-.3c0-.2-.2-.4-.4-.5-.5-.3-1-.6-1.8-.6a23 23 0 0 0-8.3 2.2l-.2.1h-2.2l-.6.1c-2.3.3-8.5 1.2-12.9 2.5a16 16 0 0 0-7.7 4.4c-.5.7-1 1.6 0 2.3.6.6 1.6.9 2.8 1l2.8-.1c6-.9 14.2-5 15.5-5.9a15 15 0 0 0 2.9-3.2v-.1l.2-.2.1-.1c4-1.6 5.4-1.9 6.4-1.8.5 0 1.2.4 1 .8-.2.4-2 1.3-3 1.7l-63 38-.3 1c0 .3.4.4.6.6.3.2 1 .2 1.2.1l.9-.5 63.4-38.1 11.6-7.7.5-.2v.3c0 .9 1.2 1.5 2.5 1.6h1.4c10.5-1.5 17.6-3.6 19.7-5.8.7-.8.8-1.6.3-2.5l-.1-.1-.6-.7c-.5-.5-1.4-.8-2.7-1"/>
      <g stroke="#3C3C3B">
        <path fill="#FC0" d="M2149.5 943.8c-.8-.5-21.9 7.3-22.9 9-2.5 4.3 2.8 7 6.3 6 3.3-1.1 25.2-7.7 16.6-15z"/>
        <path fill="#B2B2B2" d="M2118 1065.3c0 .3.1.6.4.8.7.5 1.7.5 2.4 0 .3-.2.5-.5.5-.8v-97.7h-3.5l.1 97.7z"/>
        <path fill="#EDEDED" d="M2120.9 966.7c-.7-.5-1.7-.5-2.4 0s-.7 1.2 0 1.6c.7.5 1.7.5 2.4 0 .7-.4.7-1.2 0-1.6z"/>
        <path fill="#B2B2B2" d="M2119.3 962.6l-1.1-.8c-3-1.4-5.5-.9-11.6 4l1.7 2.3c7-5.6 7.8-4.2 8.6-3.7 1.2.6 1.1 2.4 1.1 3.5 0 0 .1.4.8.6l.8.1c1.5 0 1.8-1 1.8-1 0-2.2-1.2-9.4 11-13.8l-1-2.6c-8.8 3.1-10.7 7.4-12.2 11.4z"/>
        <path fill="#FC0" d="M2091 970.7c-4.8 2.2-8 8.8-3.6 11.3 8.5 4.9 20.1-7.7 21.2-9.6 1-2 .9-5.4.9-5.4s-13.7 1.5-18.5 3.7z"/>
        <path fill="#DADADA" d="M2148.3 942.7c-8.7-5-20.4 7.8-21.5 9.6-1 2 1.8 3.4 5 2.4 3.2-.9 25-7 16.5-12zm-43.6 22.9c-3 .8-23.2 6.5-15.2 11.1s18.8-7.2 19.8-9c1-1.7-1.6-3.1-4.6-2.1z"/>
      </g>
    </g>
    <g stroke-miterlimit="10">
      <path opacity=".3" fill="#878787" stroke="#878787" d="M1840.6 794.4l-2.8.1c-6.1.9-14.3 5-15.6 6l-1.4.4c-4.6 2.2-6.9 4-9.5 5.8l-.4.5-.2-.4-.5-.5c-.5-.3-1-.6-1.7-.6a23 23 0 0 0-8.4 2.3h-2.4l-.6.1c-2.3.3-8.5 1.3-12.8 2.5a16 16 0 0 0-7.8 4.5c-.5.6-.9 1.6 0 2.3.6.5 1.6.8 2.9 1 .7 0 1.7 0 2.7-.2 6.1-.8 14.3-5 15.5-5.8 1.4-1 2.6-2.7 2.9-3.3l.2-.3h.2c4-1.6 5.3-2 6.3-1.8.5 0 1.3.4 1 .8-.1.3-2 1.2-3 1.7l-63 38-.3 1c.1.3.4.4.7.6s.8.1 1.1 0l.9-.4 63.4-38.2s6.5-4.4 11.6-7.6l.5-.2v.3c0 .8 1.2 1.5 2.6 1.6h1.3c10.5-1.5 17.6-3.7 19.7-5.9.8-.7.9-1.6.3-2.5h-.1c-.1-.3-.3-.5-.6-.7-.5-.6-1.4-1-2.7-1"/>
      <g stroke="#3C3C3B">
        <path fill="#FC0" d="M1772.8 726.6c-.7-.5-21.9 7.3-22.8 9.1-2.6 4.3 2.8 7 6.2 5.9 3.4-1 25.2-7.7 16.6-15z"/>
        <path fill="#B2B2B2" d="M1741.2 848.2c0 .3.2.6.5.8.7.4 1.7.4 2.4 0 .3-.2.5-.5.5-.8v-97.8h-3.5l.1 97.8z"/>
        <path fill="#EDEDED" d="M1744.1 749.6c-.7-.5-1.7-.5-2.4 0s-.7 1.1 0 1.6 1.7.5 2.4 0 .7-1.3 0-1.6z"/>
        <path fill="#B2B2B2" d="M1742.5 745.4l-1-.7c-3-1.5-5.6-1-11.7 4l1.7 2.2c7-5.6 7.8-4.1 8.7-3.6 1.1.5 1 2.4 1 3.4 0 0 .1.5.8.7h.9c1.4 0 1.7-.9 1.7-.9 0-2.3-1.2-9.5 11-13.8l-1-2.6c-8.8 3-10.6 7.4-12.1 11.3z"/>
        <path fill="#FC0" d="M1714.3 753.6c-4.8 2.2-8 8.7-3.6 11.2 8.5 5 20.2-7.7 21.2-9.6s.9-5.4.9-5.4-13.8 1.6-18.5 3.8z"/>
        <path fill="#DADADA" d="M1771.5 725.6c-8.7-5-20.4 7.8-21.4 9.6-1 2 1.7 3.4 4.9 2.4s25.1-7 16.5-12zm-43.5 22.8c-3 .9-23.3 6.5-15.3 11.1 8 4.7 18.8-7.2 19.8-8.9 1-1.7-1.5-3.2-4.5-2.2z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M1892.8 771.6L1935 796v30l-42.2-24.4z"/>
        <path fill="#B2B2B2" d="M1977.2 771.6L1935 796v30l42.2-24.4z"/>
        <path fill="#DADADA" d="M1892.8 771.6L1935 796l42.2-24.4-42.2-24.3z"/>
        <path fill="#DADADA" d="M1890.3 768l42.2 24.4v5l-42.2-24.3z"/>
        <path fill="#DADADA" d="M1890.3 768l42.2 24.4 44.7-25.8-42.2-24.4z"/>
        <path fill="#DADADA" d="M1890.3 768l42.2 24.4v5l-42.2-24.3z"/>
        <path fill="#B2B2B2" d="M1977.2 766.6l-44.8 25.8v5l44.8-25.8z"/>
        <path fill="#DADADA" d="M1892.8 688.6l23.8-37.3L1935 713v78l-42.2-24.4z"/>
        <path fill="#B2B2B2" d="M1977.2 688.6L1935 713v78l42.2-24.4z"/>
        <path fill="#4A4A49" d="M1977.2 688.6L1935 713l-18.4-61.6 39.8-17.5z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.9 769l-.4-12.7.6-2.4.6 1.4v14l-.8-.2zm-11.1-4.6v.8l10.4 6v-.7l-3.2-2.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.5 763.5l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1907.7 769.3l-1.2-.6v.6zm.3 1l-1.8 1v-.8l1.8-1zm-2.3-15.1v13.6l-4.8-2.2-2.3-1.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.6 751.2l1.2.7 4.2 6.3v5.8l-3.1.8h-2.3V759z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 758.2v5.8l-3.1.8h-2.3l1.2-.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905.7 767.5l-5.9-3.3v-12.3l5.9 3.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905.7 767.5l-4.8-2.7v-11.3l4.8 2.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.9 763.8l4.8 2.8v-11.4l-4.3 8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.7 752.3v11.4h.7l1.3-8v-1h-.4v-1.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1901 752.5v11l4.7 2.7v-11z"/>
        <path d="M1901.4 755.1v8.7l4.3 2.4v-8.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.8 764.3v-15.1l8.7 5v15.1l-.8-.5v-13.6l-7-4v13.6zm9.3 4.7l-.6.3v-15l.6-.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.3 748.8l-.5.4 8.7 5 .6-.3z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1925.2 780l-.3-12.8.5-2.4.6 1.5v14l-.8-.3zm-11-4.7v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.8 774.3l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1926 780.2l-1-.6v.6zm.3 1l-1.6 1v-.9l1.6-1zm-2.3-15v13.5l-4.8-2.2-2.1-1.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1917 762.1l1.1.7 4.4 6.3v5.7l-3.2.9h-2.2v-5.9z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1922.5 769v5.8l-3.2.9h-2.2l1-.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 778.4l-5.9-3.4v-12.2l5.9 3.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 778.4l-4.7-2.7v-11.4l4.7 2.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919.3 774.7l4.7 2.7v-11.2l-4.1 8.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919 763.3v11.2l.3.2h.6l1.2-8.2v-1l-.5.2v-1.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919.3 763.4v11l4.7 2.7v-11z"/>
        <path d="M1919.9 766v8.7l4.1 2.4v-8.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.1 775.1v-15l8.9 5v15l-1-.4v-13.5l-7-4v13.5zm9.3 4.9l-.4.2V765l.4-.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.7 759.7l-.6.3 8.9 5.1.4-.3z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.4 800.7l-.4-12.7.6-2.4.6 1.4v14l-.8-.2zm-11.1-4.7v.9l10.5 6v-.8l-3.3-2.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897 795l-1.7 1 6.5 3.9 4 2.2 1.6-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1907.2 801l-1.2-.6v.6zm.2.9l-1.6 1v-.8l1.6-1zM1905 787v13.5l-4.7-2.3-2.1-1.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.2 782.9l1.1.7 4.2 6.2v5.9l-3.1.7h-2.2v-5.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1903.5 789.8v5.9l-3.1.7h-2.2l1.1-.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905 799.2l-5.7-3.4v-12.2l5.8 3.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905 799.2l-4.6-2.8v-11.3l4.7 2.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.4 795.5l4.7 2.7v-11.3l-4.2 8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.2 784v11.3l.2.2h.5l1.3-8.2v-1l-.5.1V785z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.5 784.2v11l4.6 2.7v-11z"/>
        <path d="M1901 786.8v8.7l4 2.4v-8.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.2 796v-15.2l8.8 5V801l-1-.5v-13.6l-6.8-4v13.5zm9.4 4.7l-.6.3v-15l.6-.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.8 780.5l-.6.3 8.8 5 .6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924.8 811.6l-.4-12.8.6-2.4.5 1.5v14l-.7-.3zm-11.1-4.6v.8l10.4 6v-.8l-3.3-2.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.4 806l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1925.5 811.9l-1.1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15v13.5l-4.8-2.2-2.2-1.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.5 793.7l1.2.7 4.2 6.3v5.8l-3 .9h-2.4v-5.9z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1921.9 800.7v5.8l-3 .9h-2.4l1.2-.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1923.5 810l-5.8-3.3v-12.3l5.8 3.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1923.5 810l-4.7-2.6V796l4.7 2.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1918.8 806.3l4.7 2.8v-11.3l-4.2 8.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1918.5 794.9v11.3l.3.1h.5l1.2-8.1v-1l-.3.2v-1.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1918.8 795v11l4.7 2.7v-11z"/>
        <path d="M1919.3 797.7v8.6l4.2 2.4v-8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.6 806.8v-15l8.8 5v15l-.9-.5v-13.5l-7-4v13.6zm9.4 4.8l-.6.3v-15.1l.6-.4zm-8.9-20.3l-.5.4 8.8 5.1.6-.4z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.9 743l-.4-12.8.6-2.4.6 1.4v14l-.8-.3zm-11.1-4.7v.8l10.4 6v-.7l-3.2-2.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.5 737.4l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1907.7 743.2l-1.2-.7v.7zm.3 1l-1.8 1v-.8l1.8-1zm-2.3-15.1v13.5l-4.8-2.2-2.3-1.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.6 725l1.2.7 4.2 6.4v5.7l-3.1.9h-2.3v-5.9z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 732v5.8l-3.1.9h-2.3l1.2-.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905.7 741.4l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905.7 741.4l-4.8-2.7v-11.3l4.8 2.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.9 737.6l4.8 2.8v-11.3l-4.3 8.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.7 726.2v11.4h.7l1.3-8.1v-1l-.4.2v-1.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1901 726.4v11l4.7 2.6v-10.9z"/>
        <path d="M1901.4 729v8.6l4.3 2.4v-8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.8 738.1v-15l8.7 5v15.1l-.8-.6v-13.5l-7-4v13.6zm9.3 4.9l-.6.2v-15.1l.6-.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.3 722.7l-.5.3 8.7 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1925.2 753.9l-.3-12.8.5-2.4.6 1.4v14.1l-.8-.3zm-11-4.7v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.8 748.2l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1926 754l-1-.5v.6zm.3 1l-1.6 1v-.8l1.6-1zm-2.3-15v13.6l-4.8-2.2-2.1-1.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1917 736l1.1.7 4.4 6.2v5.9l-3.2.8h-2.2v-5.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1922.5 743v5.8l-3.2.8h-2.2l1-.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 752.2l-5.9-3.3v-12.2l5.9 3.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 752.2l-4.7-2.6v-11.4l4.7 2.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919.3 748.6l4.7 2.7V740l-4.1 8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919 737.2v11.2l.3.2h.6l1.2-8.3v-1l-.5.3V738z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919.3 737.3v11l4.7 2.7v-11z"/>
        <path d="M1919.9 739.9v8.7l4.1 2.4v-8.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.1 749v-15.1l8.9 5v15.2l-1-.5V740l-7-4v13.6zm9.3 4.8l-.4.3V739l.4-.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.7 733.6l-.6.3 8.9 5 .4-.2z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1906.9 716l-.4-12.8.6-2.4.6 1.4v14l-.8-.3zm-11.1-4.7v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.5 710.4l-1.7 1 6.5 3.7 4 2.2 1.7-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1907.7 716.2l-1.2-.6v.6zm.3 1l-1.8 1v-1l1.8-.9zm-2.3-15.1v13.6l-4.8-2.3-2.3-1.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.6 698l1.2.8 4.2 6.2v5.9l-3.1.7h-2.3V706z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1904 705v5.9l-3.1.7h-2.3l1.2-.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905.7 714.4l-5.9-3.4v-12.2l5.9 3.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1905.7 714.4l-4.8-2.8v-11.3l4.8 2.8z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.9 710.7l4.8 2.6v-11.2l-4.3 8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1900.7 699.2v11.4h.7l1.3-8.1v-1l-.4.1v-1.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1901 699.4v11l4.7 2.7v-11z"/>
        <path d="M1901.4 702v8.7l4.3 2.4v-8.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1897.8 711.1V696l8.7 5v15.2l-.8-.5V702l-7-4v13.5zm9.3 4.7l-.6.4v-15.1l.6-.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1898.3 695.7l-.5.3 8.7 5 .6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1925.2 726.9l-.3-12.8.5-2.4.6 1.5v14l-.8-.3zm-11-4.7v.8l10.5 6v-.8l-3.3-2.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1915.8 721.2l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1926 727l-1-.6v.7zm.3 1l-1.6 1v-.8l1.6-1zm-2.3-15v13.6l-4.8-2.3-2.1-1.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1917 709l1.1.6 4.4 6.3v5.8l-3.2.9h-2.2v-5.9z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1922.5 716v5.7l-3.2.9h-2.2l1-.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 725.3l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1924 725.3l-4.7-2.7v-11.4l4.7 2.7z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919.3 721.5l4.7 2.8V713l-4.1 8.5z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919 710v11.4l.3.1h.6l1.2-8.2v-1l-.5.3V711z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1919.3 710.3v11l4.7 2.6v-11z"/>
        <path d="M1919.9 712.9v8.6l4.1 2.4v-8.6z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.1 722v-15l8.9 5v15l-1-.4V713l-7-4v13.6zm9.3 4.8l-.4.3V712l.4-.3z"/>
        <path stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1916.7 706.6l-.6.3 8.9 5.1.4-.3z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1918.1 694l-.3-12.8.5-2.4.6 1.4v14l-.8-.3zm-11.1-4.8v.8l10.5 6v-.7l-3.3-2.6z"/>
        <path d="M1908.7 688.3l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path d="M1919 694.1l-1.2-.5v.5zm.2 1l-1.7 1v-.8l1.7-1zm-2.4-15.1v13.7l-4.7-2.3-2.2-1.8z"/>
        <path d="M1909.9 676l1.1.7 4.3 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path d="M1915.3 683v5.8l-3.2.8h-2.2l1.1-.6z"/>
        <path d="M1916.8 692.3l-5.8-3.3v-12.3l5.8 3.3z"/>
        <path d="M1916.8 692.3l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path d="M1912 688.7l4.8 2.7V680l-4.1 8.7z"/>
        <path d="M1911.9 677.2v11.3l.2.2h.6l1.2-8.3v-1l-.4.2v-1.5z"/>
        <path d="M1912.2 677.3v11l4.6 2.8v-11z"/>
        <path d="M1912.7 680v8.7l4.1 2.4v-8.8z"/>
        <path d="M1909 689v-15l8.8 5v15.1l-1-.4V680l-7-4v13.6zm9.3 4.9l-.5.2v-15l.5-.3z"/>
        <path d="M1909.5 673.7l-.6.3 8.9 5 .5-.2z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2006.7 724.1l2.5 1.4 8.5-4.9-2.5-1.4zm-17 9.8l2.5 1.4 8.5-4.9-2.6-1.4zm-17.1 9.8l2.6 1.5 8.4-5-2.5-1.4zm-17 9.9l2.5 1.4 8.5-4.9-2.5-1.4zm-17 9.8l2.5 1.4 8.5-4.9-2.6-1.4zm1.4 27.3l43.6 25.1v38.7l-43.6-25.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2027.2 790.7l-43.6 25.1v38.7l43.6-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1937.4 787l43.6 25v5.4l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1969 807.4l1 .5v-.6l-1.2-.7.2.8zm-1.7-4.3l.2.4 2 1.2-2.2-5.5v3.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1937.4 787l43.6 25 46.2-26.6-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1937.4 787l43.6 25v5.4l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2027.2 785.4L1981 812v5.3l46.2-26.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1940 724.7l43.6 25.1v60.7l-43.6-25.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2027.2 724.7l-43.6 25.1v60.7l43.6-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1937.4 721l43.6 25 46.2-26.7-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1940 719.4l43.6 25.2 43.6-25.2-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1940 719.4l43.6 25.2 18.5-7.5 25.1-17.7-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1940 719.4l21.8 12.6 21.8 12.6 21.8-49 21.8 23.8-21.8-12.6-21.8-12.6-21.8-23.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2021.9 719.4l1.3.8 1.4.7-7-13.8-12.2-14-1.3-.8-1.3-.8 6 14.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2021.9 719.4l-38.3 22 19.2-49.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1983.6 744.6l21.8-57 21.8 31.8-2.6 1.5-19.2-27.8-19 50zm-46.2-23.6l43.6 25v5.3l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2027.2 719.4l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1961.8 662.4l-21.8 57 21.8 12.6 21.8 12.6 21.8-57-43.6-25.2"/>
      <path d="M1999.9 701.3l-.1-8-6.8-4-8.7 8.9.1 8 6.8 4 8.7-8.9zm-27.7-15.9v-8l-6.9-4-8.6 8.8v8.1l6.9 4 8.6-8.9z" opacity=".3" fill="#B2B2B2"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1963.5 676.7l5-3v7.3l-5 13.2z"/>
        <path fill="#DADADA" d="M1956.7 672.7l6.8 4v17.5l-6.8-3.9z"/>
        <path fill="#DADADA" d="M1956.7 672.7l6.8 4 5-3-6.8-3.9z"/>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1967.1 673.8l-5.4-3-3.5 2 5.3 3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1963.8 675.7l-2-5-3.6 2 5.3 3.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1991.1 692.6l5.1-2.9v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M1984.3 688.7l6.8 3.9v17.6l-6.8-4z"/>
        <path fill="#DADADA" d="M1984.3 688.7l6.8 3.9 5.1-2.9-6.8-4z"/>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1994.8 689.7l-5.4-3-3.6 2 5.3 3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1991.3 691.6l-1.9-5-3.6 2 5.3 3.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2002.6 764v1l-9 5.1v-.9l1.7-1.7zm0 27.8v.9l-9 5.2v-.9l1.7-1.6zm17.2-9.8v.8l-9 5.2v-.9l1.7-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1992.4 768.5v.8l1.2.8v-.9zm.6-15.5v15l5.3-2.3 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2000.7 748.5l-1.2.8-4.7 7v6.4l4.7.2 1.2.8V757z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1993 766.7l6.5-3.8v-13.6l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 762.4l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 756.7v5.7l-.3.1h-2.2v-1.4h.4l.3.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.2 756.9v5.3l-5.2 3v-5.4zm.3-1l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 749.8v6.1h-.8l-1.5-2.5v-1l.5.1v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.2 750v5.7l-5.2 3V753zm3.2 13.3l1.2.8-5.9 3.3-3 1.8-1.3-.7zm-9 33v.9l1.2.7v-.9zm.6-15.4v15l5.3-2.5 2.4-1.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2000.7 776.4l-1.2.6-4.7 7v6.6l4.7.2 1.2.7V785z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1993 794.5l6.5-3.7V777l-6.5 3.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 790.2l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 784.5v5.7l-.3.2h-2.2v-1.5h.4l.3.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.2 784.7v5.3l-5.2 3v-5.3zm.3-1l-5.5 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 777.6v6l-.3.2h-.5l-1.5-2.5V780l.5.2v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.2 777.8v5.7l-5.2 3V781zm3.2 13.3l1.2.7-5.9 3.5-3 1.7-1.3-.7zm-9 47.5v.9l1.2.6v-.8zm.6-15.6v15.2l5.3-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2000.7 818.6l-1.2.7-4.7 7v6.5l4.7.2 1.2.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1993 836.8l6.5-3.8v-13.7l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 832.4l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 826.8v5.6l-.3.2h-2.2v-1.5h.4l.3.3v-3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.2 826.9v5.3l-5.2 3.1V830zm.3-.9l-5.5 3v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.5 819.9v6l-.3.2h-.5l-1.5-2.6v-1.1l.5.1V821z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1998.2 820v5.7l-5.2 3V823zm3.2 13.4l1.2.7-5.9 3.4-3 1.8-1.3-.7zm8.1-4.7v.9l1.2.6v-.8zm.6-15.6v15.2l5.4-2.5 2.3-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2017.8 808.7l-1.1.7-4.8 7v6.5l4.8.2 1.1.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2010.1 826.9l6.6-3.8v-13.7l-6.6 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 822.5l-5.6 3.2V820l5.6 2.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 816.9v5.6l-.3.2h-2.2v-1.5h.3l.4.3v-3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.3 817v5.4l-5.2 3v-5.3zm.4-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 810v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.2V811z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.3 810.2v5.6l-5.2 3.1v-5.8zm3.2 13.3l1.3.7-6 3.4-3 1.8-1.3-.7zm1.3-69.5v1l-9 5.2v-.8l1.7-1.8zm-10.3 4.6v.8l1.2.8v-.8zm.6-15.5v15.1l5.4-2.5 2.3-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2017.8 738.6l-1.1.8-4.8 7v6.4l4.8.2 1.1.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2010.1 756.8l6.6-3.8v-13.6l-6.6 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 752.5l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 746.8v5.7l-.3.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.3 747v5.3l-5.2 3V750zm.4-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 740v6l-.3.1h-.6l-1.4-2.6v-1l.5.1V741z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.3 740v5.8l-5.2 3V743zm3.2 13.4l1.3.7-6 3.4-3 1.9-1.3-.8zm-9 33v.9l1.2.7v-.9zm.6-15.5V786l5.4-2.5 2.3-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2017.8 766.5l-1.1.6-4.8 7v6.6l4.8.2 1.1.6v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2010.1 784.6l6.6-3.7V767l-6.6 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 780.3l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 774.6v5.7l-.3.2h-2.2v-1.6h.3l.4.3v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.3 774.7v5.4l-5.2 3v-5.3zm.4-.9l-5.6 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.7 767.7v6l-.3.3h-.6l-1.4-2.6v-1.2l.5.2v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.3 767.9v5.7l-5.2 3V771zm3.2 13.4l1.3.6-6 3.5-3 1.7-1.3-.7z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1981.1 824.9l-.7.3v23.4l.7-.5z"/>
        <path d="M1942.7 803.4l23.3 13.1 14.4 8.7v23.4l-37.7-22z"/>
        <path d="M1943.6 805v20.6l36 20.7v-20.6z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1973.8 793.8l-.3-12.7.5-2.4.6 1.4v14l-.8-.3zm-11.1-4.7v.8l10.5 6v-.7l-3.3-2.6z"/>
        <path d="M1964.3 788.2l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path d="M1974.6 794l-1.1-.6v.6zm.2 1l-1.6 1v-.8l1.6-1zm-2.3-15v13.5l-4.8-2.3-2.1-1.7z"/>
        <path d="M1965.6 776l1 .5 4.4 6.4v5.7l-3.2 1h-2.2v-6z"/>
        <path d="M1971 782.9v5.7l-3.2 1h-2.2l1-.8z"/>
        <path d="M1972.5 792.2l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path d="M1972.5 792.2l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path d="M1967.8 788.5l4.7 2.7V780l-4.1 8.6z"/>
        <path d="M1967.5 777.1v11.3l.3.1h.6l1.2-8.2v-1l-.5.2V778z"/>
        <path d="M1967.8 777.2v11l4.7 2.8v-11z"/>
        <path d="M1968.4 779.8v8.8l4.1 2.4v-8.8z"/>
        <path d="M1964.6 789v-15.1l8.9 5V794l-1-.5V780l-7-4v13.6zm9.4 4.7l-.5.3v-15l.5-.2zm-8.8-20.1l-.6.3 8.9 5 .5-.2z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1955.5 785l-.4-12.8.6-2.4.6 1.5v14l-.8-.3zm-11-4.6v.8l10.3 6v-.9l-3.2-2.5z"/>
        <path d="M1946 779.4l-1.5 1 6.4 3.7 4 2.2 1.7-1z"/>
        <path d="M1956.3 785.3l-1.2-.7v.7zm.3.9l-1.8 1v-.9l1.8-1zm-2.3-15v13.5l-4.8-2.2-2.3-1.8z"/>
        <path d="M1947.2 767.1l1.2.7 4.2 6.2v6l-3 .7h-2.4v-5.8z"/>
        <path d="M1952.6 774v6l-3 .7h-2.4l1.2-.6z"/>
        <path d="M1954.3 783.5l-6-3.4v-12.3l6 3.4z"/>
        <path d="M1954.3 783.5l-4.8-2.8v-11.4l4.8 2.8z"/>
        <path d="M1949.5 779.7l4.8 2.7v-11.2l-4.3 8.5z"/>
        <path d="M1949.3 768.3v11.3l.2.1h.5l1.3-8.2v-1l-.4.2v-1.5z"/>
        <path d="M1949.5 768.5v11l4.8 2.6v-11z"/>
        <path d="M1950 771v8.7l4.3 2.4v-8.6z"/>
        <path d="M1946.4 780.2V765l8.7 5.1v15.2l-.8-.6v-13.5l-7-4v13.5zm9.3 4.7l-.6.4V770l.6-.3z"/>
        <path d="M1946.9 764.7l-.5.3 8.7 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1973.8 770.1l-.3-12.8.5-2.4.6 1.5v14l-.8-.3zm-11.1-4.6v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path d="M1964.3 764.4l-1.6 1.1 6.5 3.7 4 2.3 1.6-1z"/>
        <path d="M1974.6 770.4l-1.1-.7v.7zm.2 1l-1.6 1v-1l1.6-.9zm-2.3-15.1v13.5l-4.8-2.2-2.1-1.8z"/>
        <path d="M1965.6 752.2l1 .7 4.4 6.3v5.8l-3.2.8h-2.2V760z"/>
        <path d="M1971 759.2v5.8l-3.2.8h-2.2l1-.6z"/>
        <path d="M1972.5 768.6l-5.9-3.4V753l5.9 3.4z"/>
        <path d="M1972.5 768.6l-4.7-2.8v-11.3l4.7 2.7z"/>
        <path d="M1967.8 764.8l4.7 2.7v-11.2l-4.1 8.5z"/>
        <path d="M1967.5 753.4v11.2l.3.2h.6l1.2-8.1v-1l-.5.1v-1.4z"/>
        <path d="M1967.8 753.6v11l4.7 2.6v-11z"/>
        <path d="M1968.4 756.2v8.6l4.1 2.4v-8.6z"/>
        <path d="M1964.6 765.3v-15.2l8.9 5.1v15.2l-1-.6v-13.5l-7-4v13.5zm9.4 4.7l-.5.4v-15.2l.5-.3z"/>
        <path d="M1965.2 749.8l-.6.3 8.9 5.1.5-.3z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1955.5 761.4l-.4-12.8.6-2.4.6 1.4v14l-.8-.2zm-11-4.7v.7l10.3 6v-.7l-3.2-2.6z"/>
        <path d="M1946 755.7l-1.5 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path d="M1956.3 761.6l-1.2-.6v.6zm.3.9l-1.8 1v-.8l1.8-1zm-2.3-15.1v13.7l-4.8-2.3-2.3-1.8z"/>
        <path d="M1947.2 743.5l1.2.6 4.2 6.3v5.8l-3 .8h-2.4v-5.8z"/>
        <path d="M1952.6 750.4v5.8l-3 .8h-2.4l1.2-.6z"/>
        <path d="M1954.3 759.7l-6-3.3V744l6 3.3z"/>
        <path d="M1954.3 759.7l-4.8-2.7v-11.3l4.8 2.7z"/>
        <path d="M1949.5 756l4.8 2.8v-11.4l-4.3 8.7z"/>
        <path d="M1949.3 744.7v11.2l.2.2h.5l1.3-8.3v-1l-.4.3v-1.6z"/>
        <path d="M1949.5 744.8v10.9l4.8 2.8v-11z"/>
        <path d="M1950 747.3v8.8l4.3 2.4v-8.8z"/>
        <path d="M1946.4 756.5v-15.1l8.7 5v15.2l-.8-.5v-13.7l-7-3.9V757zm9.3 4.8l-.6.3v-15.1l.6-.3z"/>
        <path d="M1946.9 741.1l-.5.3 8.7 5 .6-.2z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M2002.5 785.2l8.5-5 2.5 1.5-8.5 5zm-15.5 37.1l43.5 25.1v38.7L1987 861z"/>
        <path fill="#B2B2B2" d="M2074.1 822.3l-43.6 25.1v38.7l43.6-25.1z"/>
        <path fill="#DADADA" d="M1984.3 818.5l43.6 25.2v5.3l-43.6-25.2z"/>
        <path fill="#DADADA" d="M2016 839l.8.5v-.5l-1.2-.7.3.7zm-1.8-4.4l.2.5 1.9 1.2-2.1-5.5v3.9z"/>
        <path fill="#DADADA" d="M1984.3 818.5l43.6 25.2 46.2-26.7-43.6-25.2z"/>
        <path fill="#DADADA" d="M1984.3 818.5l43.6 25.2v5.3l-43.6-25.2z"/>
        <path fill="#B2B2B2" d="M2074.1 817l-46.2 26.7v5.3l46.2-26.7z"/>
        <path fill="#DADADA" d="M1987 756.3l43.5 25.1v60.7L1987 817z"/>
        <path fill="#B2B2B2" d="M2074.1 756.3l-43.6 25.1v60.7l43.6-25.1z"/>
        <path fill="#DADADA" d="M2049.4 865.7v.8l-8.9 5.3v-1l1.6-1.6zm-10.2 4.5v.8l1.3.8v-1zm.6-15.5v15.1l5.4-2.5 2.4-2z"/>
        <path fill="#DADADA" d="M2047.6 850.2l-1.2.7-4.8 7v6.5l4.8.2 1.2.8v-6.5z"/>
        <path fill="#DADADA" d="M2039.8 868.4l6.6-3.8V851l-6.6 3.8z"/>
        <path fill="#DADADA" d="M2045.4 864l-5.6 3.2v-5.8l5.6 2.6z"/>
        <path fill="#DADADA" d="M2045.4 858.4v5.6l-.3.2h-2.2v-1.4h.3l.4.2v-3.6z"/>
        <path fill="#DADADA" d="M2045.1 858.6v5.2l-5.3 3.1v-5.4zm.3-1.1l-5.6 3.3v-6z"/>
        <path fill="#DADADA" d="M2045.4 851.5v6l-.3.2h-.6l-1.4-2.6V854l.5.1v-1.6z"/>
        <path fill="#DADADA" d="M2045.1 851.6v5.7l-5.3 3v-5.6zm3.1 13.4l1.2.7-5.8 3.4-3.1 1.8-1.3-.7zm18.4-9.2v.8l-9 5.2v-.8l1.6-1.7z"/>
        <path fill="#DADADA" d="M2056.3 860.3v.9l1.3.6v-.8zm.7-15.6V860l5.3-2.5 2.4-2z"/>
        <path fill="#DADADA" d="M2064.7 840.3l-1.3.7-4.7 7v6.5l4.8.2 1.2.7V849z"/>
        <path fill="#DADADA" d="M2057 858.5l6.4-3.8V841l-6.4 3.7z"/>
        <path fill="#DADADA" d="M2062.5 854.1l-5.6 3.2v-5.7l5.6 2.5z"/>
        <path fill="#DADADA" d="M2062.5 848.5v5.6l-.2.2h-2.2v-1.5h.3l.4.3v-3.7z"/>
        <path fill="#DADADA" d="M2062.2 848.6v5.4l-5.2 3v-5.4zm.3-1l-5.5 3.2v-6z"/>
        <path fill="#DADADA" d="M2062.5 841.6v6l-.2.2h-.7l-1.3-2.6v-1.1l.5.2v-1.7z"/>
        <path fill="#DADADA" d="M2062.2 841.8v5.6l-5.2 3.1v-5.8zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.3-.7z"/>
        <g fill="#DADADA">
          <path d="M2002.7 775.6l-.6 2.5.4 13.2.7.2v-14.4m-12.2 9.3v.9l10.8 6.2v-.8l-3.4-2.6z"/>
          <path d="M1992.8 785.5l-1.8 1 6.8 3.9 4 2.3 1.7-1z"/>
          <path d="M2003.2 791.5l-1.1-.6v.6zm.3 1l-1.7 1v-.8l1.7-1zm-2.4-15.5v14l-4.9-2.3-2.2-1.9 7.1-9.8"/>
          <path d="M1995.2 773.5l4.4 6.5v6l-3.3.8h-2.3V773"/>
          <path d="M1999.6 780v6l-3.3.8h-2.3l1.2-.7z"/>
          <path d="M2001.1 777v12.7l-6-3.6v-12.6"/>
          <path d="M2001.1 778v11.7l-4.8-2.9v-11.7"/>
          <path d="M2001.1 777l-4.2 8.9h-.6l4.8 2.7V777"/>
          <path d="M1996 774v11.7l.3.2h.6l1.2-8.5"/>
          <path d="M1996.3 774.2v11.3l4.8 2.9V777"/>
          <path d="M1996.9 776.8v9l4.2 2.6v-9l-4.2-2.6m5.8-1.2v15.6l-.6.3V776m19.1 26l-.4-13 .6-2.6.6 1.5v14.4l-.8-.2zm-11.4-4.7v.9l10.7 6.1v-.8l-3.3-2.6z"/>
          <path d="M2011.5 796.3l-1.7 1 6.7 4 4 2.2 1.7-1z"/>
          <path d="M2022 802.4l-1.1-.7v.7zm.2.9l-1.7 1v-.8l1.7-1zm-2.2-15.5v14l-5-2.3-2.3-1.8z"/>
          <path d="M2012.7 783.7l1.2.6 4.4 6.6v6l-3.3.8h-2.3v-6z"/>
          <path d="M2018.3 790.9v6l-3.3.8h-2.3l1.2-.7z"/>
          <path d="M2020 800.5l-6.1-3.5v-12.7l6 3.5z"/>
          <path d="M2020 800.5l-5-2.8V786l5 2.7z"/>
          <path d="M2015 796.6l5 2.9v-11.7l-4.4 8.8z"/>
          <path d="M2014.8 784.8v11.7l.2.1h.6l1.3-8.4v-1l-.4.2v-1.5z"/>
          <path d="M2015 785v11.3l5 2.8v-11.3z"/>
          <path d="M2015.6 787.7v9l4.3 2.4v-9z"/>
          <path d="M2011.8 797.1v-15.6l9.1 5.3v15.6l-1-.6v-14l-7.2-4.1v14zm9.7 4.9l-.6.4v-15.6l.6-.4z"/>
          <path d="M2012.4 781.2l-.6.3 9.1 5.3.6-.4zm-18.9-10.8l-.5.3 9 5.3.7-.4zm9 46.5l-.4-13.2.6-2.5.5 1.5V817l-.7-.2zM1991 812v.8l10.8 6.3v-.8l-3.4-2.7z"/>
          <path d="M1992.8 811l-1.8 1 6.8 4 4 2.3 1.7-1z"/>
          <path d="M2003.2 817.2l-1.1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.4-15.5v14l-4.9-2.3-2.2-1.8z"/>
          <path d="M1994 798.4l1.2.7 4.4 6.4v6.1l-3.3.9h-2.3v-6z"/>
          <path d="M1999.6 805.5v6.1l-3.3.9h-2.3l1.2-.7z"/>
          <path d="M2001.1 815.2l-6-3.4V799l6 3.5z"/>
          <path d="M2001.1 815.2l-4.8-2.7v-11.8l4.8 2.8z"/>
          <path d="M1996.3 811.4l4.8 2.8v-11.6l-4.2 8.8z"/>
          <path d="M1996 799.6v11.7l.3.1h.6l1.2-8.4v-1.1l-.4.2v-1.5z"/>
          <path d="M1996.3 799.8V811l4.8 2.8v-11.3z"/>
          <path d="M1996.9 802.5v9l4.2 2.4v-9z"/>
          <path d="M1993 811.9v-15.6l9 5.2v15.7l-.9-.6v-14l-7-4.2v14zm9.7 4.9l-.6.4v-15.7l.6-.3z"/>
          <path d="M1993.6 796l-.5.3 9 5.2.6-.3zm28.4 32v-14.5l-.5-1.5-.6 2.5.3 13.2zm-1.5 2v-1l-3.3-2.5-7.4-3.6v.8l10.7 6.2"/>
          <path d="M2011.5 821.9l-1.7 1 6.7 3.9 4 2.3 1.7-1z"/>
          <path d="M2022 828l-1.1-.7v.6zm-1.5 2v-1l1.7-.9v.9l-1.7 1m-.5-16.6v14l-5-2.3-2.3-1.9z"/>
          <path d="M2012.7 809.3l1.2.7 4.4 6.4v6l-3.3.8h-2.3v-6z"/>
          <path d="M2018.3 816.4v6l-3.3.8h-2.3l1.2-.6z"/>
          <path d="M2020 826.1l-6.1-3.5V810l6 3.4z"/>
          <path d="M2020 826.1l-5-2.9v-11.6l5 2.8z"/>
          <path d="M2015 822.3l5 2.7v-11.6l-4.4 8.9z"/>
          <path d="M2014.8 810.4v11.7l.2.2h.6l1.3-8.5v-1l-.4.1v-1.5z"/>
          <path d="M2015 810.6V822l5 2.9v-11.4z"/>
          <path d="M2015.6 813.2v9l4.3 2.6v-9z"/>
          <path d="M2011.8 822.7v-15.6l9.1 5.3v15.5l-1-.5v-14l-7.2-4.1v14zm9.7 4.9l-.6.3v-15.5l.6-.4zm-9.1-20.8l-.6.3 9.1 5.3.6-.4zm-19.3-20.5v-15.6l9.2 5.3v15.5l-1-.5v-14l-7.2-4.1v14z"/>
        </g>
        <g fill="#DADADA">
          <path d="M2020.3 852.1l-.7.4V876l.7-.5z"/>
          <path d="M1997.8 840l7.4 3.8 14.4 8.7V876l-21.8-12.6z"/>
          <path d="M2005.3 867.5l-.7-.3-6.6-16.9V849zm-7.5-27.5l7.4 3.8 14.4 8.7v23.3L2006 868l-8.2-25.4V840z"/>
          <path d="M1998.5 839.5l-.7.4 21.8 12.6.7-.4zm1.5 4.5l-1.4 18.8 20.2 11.6V853z"/>
          <path d="M1998.6 841.4v21.4h2.3l-.6-20.5z"/>
          <path d="M1999.4 841.8v20.5l19.4 11.2V853z"/>
          <path d="M2000.2 843v19.8l18.6 10.7v-19.8z"/>
          <path d="M2000.2 843v3.7l6.4 19.8 12.2 7v-19.8l-18.6-10.8zm.2 9.6l5.1 13.4-.6-.4-4.5-11.6v-1.4z"/>
          <path d="M2009.7 866l12.6-7.3v-.5l-12.6 7.3z"/>
          <path d="M2009.3 865.8l12.7-7.3.3-.3-.3-.3-12.7 7.3z"/>
          <path d="M2022.5 849.6l-13.4 14.3v2.4l.6-.3v-2.2l12.8-13.6zm-39.5-.7l26 15v2.4l-26-15z"/>
          <path d="M1983 848.9l26 15 13.5-14.3-19.7-10.6-3.7-3-2.7-1.4z"/>
          <path d="M2005.3 861.7l3.8 2.2v2.4l-3.8-2.2zm-5.6-3.2l3.8 2.2v2.4l-3.8-2.2v-2.4zm-5.6-3.2l3.9 2.2v2.4l-3.9-2.2v-2.4zm-5.6-3.3l3.9 2.2v2.4l-3.9-2.2V852zm-5.5-3.1l3.8 2.2v2.4l-3.8-2.2zm22.7 18.1l1-.5 12.2 7v1l-13.2-7.6zm-1.6-1l.8-.5.6.4-.7.4-.7-.3zm18.4-16.4l-13.4 14.3v2.4l.6-.3v-2.2l12.8-13.6z"/>
          <path d="M1983 848.9l3.8 2.2 13.5-14.3-3.9-2.2-13.4 14.3zm22.3 12.8l3.8 2.2 13.4-14.3-3.8-2.2-13.5 14.3zm-5.6-3.2l13.4-14.3 3.9 2.2-13.5 14.3-3.8-2.2zm-5.6-3.2l13.5-14.3 3.8 2.2-13.4 14.3-3.9-2.2zm-5.6-3.3l13.5-14.3 3.8 2.2-13.4 14.3-3.9-2.2z"/>
          <path d="M1999.6 837.4l22.3 12.9.6-.7-22.4-13z"/>
          <path d="M1999.6 837.4l.6-.6-.2-.1-.4.7zm1.7 1l3.9 2.2.5-.7-3.8-2.2-.6.7zm5.6 3.3l3.8 2.2.6-.7-3.8-2.2-.6.7zm5.6 3.1l3.8 2.2.6-.6-3.9-2.2-.5.6zm5.5 3.3l3.9 2.2.5-.7-3.8-2.2-.6.7z"/>
        </g>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2054.9 755.2l2.5 1.6 8.5-5-2.5-1.5zm-17.1 9.9l2.6 1.5 8.5-5-2.5-1.4zm-17 9.9l2.5 1.4 8.6-5-2.5-1.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1985.6 752.1l43.6 25.2 46.2-26.7-43.5-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.3 750.6l43.6 25.2 43.5-25.2-43.5-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.3 750.6l43.6 25.2 18.3-7.5 25.2-17.7-43.5-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1988.3 750.6l21.8 12.6 21.8 12.6 21.8-49 21.7 23.8-21.7-12.6-21.8-12.5-21.8-23.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2070 750.6l1.4.8 1.3.8-7-13.9-12-14-1.4-.8-1.3-.7 6 14.3z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2070 750.6l-38.1 22.1 19-50z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2031.9 775.8l21.8-57 21.7 31.8-2.7 1.5-19-27.8-19.2 50zm-46.3-23.7l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2075.4 750.6l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2010 693.7l-21.8 57 21.9 12.5 21.8 12.6 21.8-57-43.6-25.1"/>
      <path d="M2048 732.6l-.1-8.1-6.8-4-8.7 8.9.1 8 6.8 4 8.7-8.8zm-27.7-16.1v-8l-6.9-4-8.6 8.8v8.1l6.9 4a743 743 0 0 0 8.6-8.9z" opacity=".3" fill="#B2B2B2"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2011.7 707.9l5-3v7.3l-5 13.2z"/>
        <path fill="#DADADA" d="M2004.9 704l6.8 3.9v17.5l-6.8-3.9z"/>
        <path fill="#DADADA" d="M2004.9 704l6.8 3.9 5-3-6.7-4z"/>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2015.2 704.9l-5.2-3-3.7 2 5.4 3.1z"/>
      <path opacity=".3" fill="#B2B2B2" d="M2011.9 707l-2-5.2-3.6 2.1 5.4 3.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2039.3 723.8l5.1-2.9v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M2032.5 719.9l6.8 4v17.5l-6.8-4z"/>
        <path fill="#DADADA" d="M2032.5 719.9l6.8 4 5.1-3-6.8-3.9z"/>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2042.9 721l-5.3-3.1-3.6 2 5.3 3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M2039.5 722.9l-1.9-5-3.6 2 5.3 3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2039.2 826.5v.9l1.3.7v-1zm.6-15.5v15.1l5.4-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2047.6 806.5l-1.2.7-4.8 7v6.5l4.8.2 1.2.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2039.8 824.7l6.6-3.8v-13.7l-6.6 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2045.4 820.3l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2045.4 814.7v5.6l-.3.2h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2045.1 814.9v5.2l-5.3 3.1v-5.4zm.3-1.1l-5.6 3.3v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2045.4 807.8v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.1v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2045.1 808v5.6l-5.3 3V811zm4.3 14v.8l-8.9 5.3v-1l1.6-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2048.2 821.3l1.2.7-5.8 3.4-3.1 1.8-1.3-.7z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2039.2 803.7v.9l1.3.8v-1zm.6-15.4v15l5.4-2.5 2.4-1.9z"/>
        <path d="M2047.6 783.7l-1.2.8-4.8 7v6.5l4.8.2 1.2.7v-6.5z"/>
        <path d="M2039.8 801.9l6.6-3.7v-13.7l-6.6 3.8z"/>
        <path d="M2045.4 797.6l-5.6 3.1V795l5.6 2.6z"/>
        <path d="M2045.4 792v5.6l-.3.2h-2.2v-1.5h.3l.4.2V793z"/>
        <path d="M2045.1 792.1v5.3l-5.3 3v-5.3zm.3-1.1l-5.6 3.3v-6z"/>
        <path d="M2045.4 785v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.2V786z"/>
        <path d="M2045.1 785.2v5.7l-5.3 3v-5.6zm4.3 14v.9l-8.9 5.3v-1l1.6-1.6z"/>
        <path d="M2048.2 798.5l1.2.7-5.8 3.5-3.1 1.7-1.3-.7z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2056.2 816.3v1l1.3.6v-.8zm.8-15.5V816l5.2-2.5 2.4-2z"/>
        <path d="M2064.6 796.4l-1.2.7-4.8 7v6.5l4.8.2 1.2.7v-6.4z"/>
        <path d="M2057 814.6l6.4-3.8v-13.7l-6.5 3.7z"/>
        <path d="M2062.4 810.3l-5.6 3.1v-5.7l5.6 2.6z"/>
        <path d="M2062.4 804.5v5.8l-.2.1h-2.2V809h.3l.4.2v-3.6z"/>
        <path d="M2062.1 804.7v5.4l-5.2 3v-5.3zm.3-1l-5.5 3.2v-6z"/>
        <path d="M2062.4 797.7v6l-.2.1h-.7l-1.3-2.6v-1l.5.2v-1.7z"/>
        <path d="M2062.1 797.9v5.6l-5.2 3v-5.7zm4.4 14v.9l-9 5.1v-.8l1.6-1.8z"/>
        <path d="M2065.3 811.1l1.2.8-6 3.3-3 1.9-1.3-.8z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2056.2 793.5v1l1.3.7v-.9zm.8-15.5v15.3l5.2-2.5 2.4-2z"/>
        <path d="M2064.6 773.7l-1.2.6-4.8 7v6.6l4.8.2 1.2.6v-6.4z"/>
        <path d="M2057 791.8l6.4-3.7v-13.8l-6.5 3.8z"/>
        <path d="M2062.4 787.5l-5.6 3.2v-5.8l5.6 2.6z"/>
        <path d="M2062.4 781.7v5.8l-.2.2h-2.2V786h.3l.4.2v-3.5z"/>
        <path d="M2062.1 782v5.3l-5.2 3V785zm.3-1l-5.5 3.1v-6z"/>
        <path d="M2062.4 775v6l-.2.2h-.7l-1.3-2.7v-1l.5.1V776z"/>
        <path d="M2062.1 775.1v5.7l-5.2 3V778zm4.4 14v.9l-9 5.2v-.9l1.6-1.7z"/>
        <path d="M2065.3 788.4l1.2.7-6 3.4-3 1.8-1.3-.8z"/>
      </g>
    </g>
    <g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2043.5 855.1v33.2l83.3 48.3v-33.2z"/>
      <path opacity=".3" fill="#B2B2B2" d="M2125 910v15l-6.6-1.7-3.2-10.7zm-49-28.9v15l-6.8-1.6-3-10.8z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2152.6 868l-25.8 35.4v33.2l51.6-29.8v-33.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2049.2 887.3l.8.5 19.9 11.5v-19.5l-20.7-12zm50.8 29.4l20.5 12v-19.5l-20.6-12z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2050.7 886.4l17.6 10.3v-16l-17.6-10.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2078 908.3l12 7V892l-12-7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2079 887l11 6.5V892l-12-7v23.3l1 .7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2101.4 899.9v15.9l17.7 10.3v-16z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2050.7 875.9v1.9l17.6 10.2v-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2050.7 875v2.1l17.6 10.2v-2zm50.7 29.5v2l17.7 10.2v-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2043.5 860.3l83.3 48.2v-5l-83.3-48.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" d="M2125.3 935.8l1.5.8v-28.2l-1.5-.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183 872.9l-90-51.9-57.1 33 92 53.2 57.2-33v-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2036 852l57.1-33 92.1 53.1-57.1 33.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2093.1 830.6L2056 852l72 41.6 37.2-21.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2093.1 835l68.2 39.4 3.9-2.2-72-41.6L2056 852l3.8 2.2z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2076 881.1l-.3-.7-.6.3-25.7-14.8c-6.8 3.9-10.2 8.5-8.5 11.5l24.9 14.3c.3.8.7 1 .7 1l.6-.2c-1.2-2.5 2-7.4 8.8-11.4z"/>
        <path d="M2066.5 892.8c-1.7-3 2.4-8.6 9.2-12.5l-26.4-15.3c-6.8 4-10.8 9.5-9.2 12.5l26.4 15.3z"/>
        <path d="M2047.2 881.6c-1.7-3 2.4-8.5 9.2-12.5l-4.7-2.7c-6.8 4-10.8 9.5-9.2 12.5l4.7 2.7zm8.7 5c-1.8-3 2.4-8.5 9.2-12.5l-4.7-2.7c-6.8 4-10.9 9.5-9.2 12.5l4.7 2.7zm9.3 5.4c-1.7-3 2.4-8.6 9.2-12.5l-4.7-2.7c-6.8 4-10.9 9.5-9.2 12.5l4.7 2.7z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2125 910l-.2-.8-.7.3-25.6-14.8c-6.8 4-10.2 8.5-8.5 11.5l24.8 14.3c.4.8.8 1 .8 1l.6-.2c-1.3-2.5 2-7.4 8.8-11.4z"/>
        <path d="M2115.7 921.7c-1.7-3 2.4-8.6 9.2-12.5l-26.4-15.3c-6.8 4-10.8 9.5-9.2 12.5l26.4 15.3z"/>
        <path d="M2096.4 910.4c-1.7-3 2.4-8.5 9.2-12.4l-4.7-2.7c-6.8 4-10.8 9.6-9.2 12.5l4.7 2.6zm8.6 5c-1.8-3 2.3-8.5 9.2-12.5l-4.7-2.7c-6.9 4-10.9 9.6-9.3 12.5l4.7 2.7zm9.3 5.4c-1.8-3 2.4-8.5 9.2-12.5l-4.7-2.7c-6.8 4-10.9 9.5-9.2 12.5l4.7 2.7z"/>
      </g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2128 905.2v2l-92-53.2v-2zm-72-53.2l3.8 2.2 33.3-19.3v-4.3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M2071.1 858.2h6.9l8-4-6-2.5-5.4 2.2z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2065.5 850.4l5.6-3.3 5.8 3.3-5.8 3.3z"/>
        <path d="M2066.8 850.4l4.3 2.5 4.4-2.5-4.4-2.5zm4.3 7.8v-4.4l5-2.8v4.4z"/>
        <path d="M2071.1 855l5-2.8v-1.1l-5 2.8z"/>
        <path stroke-miterlimit="10" d="M2066.3 851v4.4l4.8 2.8v-4.4z"/>
        <path d="M2071 858l.1.2v-3.6z"/>
        <path d="M2066.3 852.2l4.8 2.8v-1l-4.8-2.8z"/>
        <path d="M2071.1 854.8v-1.1l5.8-3.3v1.2zm-5.6-4.4v1.2l5.6 3.2v-1.1zm5.6-2.5v5l-4.3-2.5z"/>
      </g>
      <path opacity=".3" fill="#B2B2B2" d="M2084.1 865.6h6.8l7.9-4-5.9-2.5-5.3 2.2z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2078.3 857.9l5.7-3.4 5.8 3.4-5.8 3.3z"/>
        <path d="M2079.7 857.9l4.3 2.5 4.3-2.5-4.3-2.5zm4.4 7.7v-4.4l4.8-2.8v4.4z"/>
        <path d="M2084.1 862.4l4.8-2.8v-1l-4.8 2.7z"/>
        <path stroke-miterlimit="10" d="M2079.2 858.4v4.4l4.9 2.8v-4.4z"/>
        <path d="M2084 865.6h.1V862h-.2z"/>
        <path d="M2079.2 859.6l4.8 2.9v-1.2l-4.8-2.7zm4.8 2.7v-1.1l5.8-3.3v1z"/>
        <path d="M2078.3 857.9v1l5.7 3.4v-1.1zm5.7-2.5v5l-4.3-2.5z"/>
      </g>
    </g>
    <g stroke-miterlimit="10">
      <path opacity=".3" fill="#878787" stroke="#878787" d="M2017.7 895.2h-2.8c-6.1 1-14.3 5-15.6 6l-1.4.5c-4.6 2.2-6.9 4-9.5 5.7l-.4.5-.2-.4-.5-.4c-.5-.3-1-.6-1.7-.6a23 23 0 0 0-8.4 2.2h-2.4l-.6.2c-2.3.3-8.5 1.2-12.8 2.5a16 16 0 0 0-7.8 4.4c-.5.7-.9 1.6 0 2.3.6.6 1.6.9 2.9 1l2.7-.1c6-.9 14.3-5 15.5-5.9 1.4-1 2.6-2.7 2.9-3.2v-.1l.2-.2.2-.1c4-1.6 5.3-1.9 6.3-1.8.5 0 1.3.4 1 .8-.2.4-2 1.3-3 1.7l-63 38-.3 1c.1.3.4.4.7.6s.8.2 1.1.1l.9-.5 63.4-38.1 11.6-7.7.5-.2v.3c0 .9 1.2 1.5 2.6 1.6h1.3c10.5-1.5 17.6-3.6 19.7-5.8.8-.8.9-1.7.3-2.5l-.1-.1-.6-.7c-.5-.6-1.4-1-2.7-1"/>
      <g stroke="#3C3C3B">
        <path fill="#FC0" d="M1950 827.4c-.8-.5-22 7.3-23 9-2.5 4.3 2.9 7 6.3 6 3.4-1.1 25.2-7.8 16.6-15z"/>
        <path fill="#B2B2B2" d="M1918.3 949c0 .2.2.5.5.7.7.5 1.7.5 2.4 0 .3-.2.5-.5.5-.8v-97.7h-3.5l.1 97.7z"/>
        <path fill="#EDEDED" d="M1921.2 850.3c-.7-.5-1.7-.5-2.4 0s-.7 1.2 0 1.6 1.7.5 2.4 0 .7-1.2 0-1.6z"/>
        <path fill="#B2B2B2" d="M1919.6 846.2l-1-.8c-3-1.4-5.5-.9-11.7 4l1.7 2.2c7-5.5 7.8-4 8.7-3.6 1.1.6 1 2.4 1 3.5 0 0 .1.4.8.6l.9.1c1.4 0 1.7-1 1.7-1 0-2.2-1.2-9.4 11-13.8l-1-2.6c-8.8 3.1-10.6 7.4-12.1 11.4z"/>
        <path fill="#FC0" d="M1891.4 854.3c-4.8 2.2-8 8.8-3.6 11.3 8.5 4.9 20.2-7.7 21.2-9.6s.9-5.4.9-5.4-13.8 1.5-18.5 3.7z"/>
        <path fill="#DADADA" d="M1948.6 826.4c-8.7-5-20.4 7.8-21.4 9.6-1 2 1.7 3.4 4.9 2.4s25.1-7.1 16.5-12zm-43.6 22.8c-2.9.8-23.2 6.5-15.2 11s18.8-7.1 19.8-8.8c1-1.9-1.5-3.2-4.5-2.2z"/>
      </g>
    </g>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M1714 397.3l49.6-25v-23.8l-19.2-11.6-42.5 25.8z"/>
    <path fill="#DADADA" d="M1702.1 255.1a6 6 0 0 0 6.5 6 7 7 0 0 0 6.4-6.8 6 6 0 0 0-6.4-6.2 7.2 7.2 0 0 0-6.5 7z"/>
    <path opacity=".5" fill="#DADADA" d="M1703.2 284c-2-1.6-3-4-3-6.7 0-4.9 3.9-9.2 8.8-9.5 3.7-.2 6.9 2 8.1 5.2 3.7.9 6.4 4.1 6.4 8.3 0 4.3-3 8-7 9v.7c0 4.9-3.9 9.2-8.8 9.5s-8.8-3.5-8.8-8.5a9.5 9.5 0 0 1 4.3-8z"/>
    <path fill="#FFF" d="M1696.7 279.6c0 4.7 3.7 8.3 8.3 8 4.6-.3 8.4-4.3 8.4-9s-3.8-8.3-8.4-8a9.1 9.1 0 0 0-8.3 9z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1710.1 307.4v55.5c0 .5-.4 1-1.1 1.4-1.6.8-3.8.7-5 0-.6-.4-.9-.8-.9-1.3v-55.5c0 .5.3.8.9 1.2 1.2.8 3.5.9 5 .1.6-.4 1.1-.8 1.1-1.4z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1708.9 308.8c-1.6.7-3.8.7-5 0-1.4-.8-1.2-2 .3-2.8 1.4-.7 3.7-.6 5 .1 1.3.8 1.1 2-.3 2.7z"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1708.9 316.7c-1.5.7-3.8.6-5-.3-.5-.3-.8-.7-.9-1.1v-3.7c0 .5.3.9.9 1.3a6 6 0 0 0 5 .2c.7-.3 1.1-.8 1.1-1.4v3.7c0 .5-.4 1-1.1 1.3zm0 7.9c-1.5.6-3.8.5-5-.3a2 2 0 0 1-.9-1.2v-3.6c0 .4.3.8.9 1.2a6 6 0 0 0 5 .3c.7-.4 1.1-.8 1.1-1.4v3.6c0 .5-.4 1-1.1 1.4z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1755.8 350v23.7l-42 24.3.3-24.3z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1713.9 398l-20.9-12 .2-24 20.9 11.7z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1755.8 350l-20.3-12-42.3 24 20.9 11.7z"/>
    <path opacity=".3" fill="#878787" d="M1555.9 305l50-27.9 96.8 61.8s0 8.8.2 12.3 5 2.5 5 2.5l7.7 4.6-.4 38.8 9.4-5 .2 3.2-123.2 69.7-45.7-160z"/>
    <path fill="#3C3C3B" d="M1728.2 345.8c-3.9 2-4 5.6-.4 7.9s9.8 2.6 13.6.5 4-5.5.4-7.8a15.2 15.2 0 0 0-13.6-.6"/>
    <path fill="#9D9D9C" d="M1728.8 346.4l3.7 3.1-6.2-.5.7 3 6.6-.7-3 3.1 5.3.7V351l4.8 3 2.5-2.7-6.5-2 5.9-1.1-3.7-2.3-4.3 3.2-1-3.9-4.8 1.2"/>
    <path fill="#3C3C3B" d="M1709.8 355.2c-3.8 2-4 5.6-.4 7.9s9.8 2.6 13.7.6c3.8-2 4-5.6.4-8a15.5 15.5 0 0 0-13.7-.5"/>
    <path fill="#9D9D9C" d="M1710.5 355.8l3.6 3.2-6.2-.5.7 3 6.6-.8-3 3.2 5.3.6.1-4 4.7 2.9 2.5-2.7-6.5-1.8 5.8-1.3-3.6-2.3-4.3 3.2-.9-3.9-4.8 1.2"/>
    <path d="M1754.6 358.9l-12 6.9m12-9.4l-12 6.8m12-9.2l-12 6.8M1741.1 366.8l-12 6.9m12-9.4l-12 6.9m12-9.3l-12 6.9M1727.5 374.6l-12 6.9m12-9.4l-12 6.9m12-9.3l-12 6.8" fill="none" stroke="#3C3C3B" stroke-linecap="round" stroke-miterlimit="10"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1586.8 314.5l-33.8 20v45l33.8-21.9z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1587 314.8l49 27.2v44.9l-48.8-29z"/>
    <path d="M1583 324.7v10.8l-11.9 7v-11zm-14.4 7.7v10.8l-11.9 7v-11zm-14.4 8.3v10.9l-11.9 6.9v-10.9zm28.8 2.6v10.8l-11.9 6.9v-10.8zm-14.4 7.7v10.7l-11.9 7v-10.8zm-14.4 8.2v10.9l-11.9 7v-11z" fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1527.6 349.2v44.5l49.1 28.6v-45z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1558.7 275L1455 334.7v45l103.7-61.8z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1454.8 335v44.5l49.1 28.6v-45z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1596.4 459.5l-9.9-5.8.1-24.8 9.9 5.5zM1528 349l-24 14.2v45l24-16zm48.6 28.7l-24 14.1v45l24-16z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1713.9 398l-20.9-12 .2-24 20.9 11.7z"/>
    <path d="M1590.8 322.7v10.9l12 7v-11zm14.4 7.7v10.9l12 6.9v-10.9zm14.4 8.4v10.8l12 7v-10.9zm-28.8 2.6V352l12 7v-10.8zm14.4 7.6v10.8l12 7V356zm14.4 8.3v10.9l12 6.9v-10.9z" fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1705.2 360.4l-103.6 60v45l103.6-61.8z"/>
    <path d="M1458.8 342.4v10.9l11.9 6.9v-10.8zm14.2 7.9v10.9l11.9 6.9v-10.8zm14.3 8V369l12 7v-10.9zM1458.8 359v11l11.9 7v-11zm14.2 8v10.8l11.9 6.9v-10.9zm14.3 7.8v10.9l12 6.9v-10.8zM1532.2 359.5v10.9l12 6.9v-10.8zm14.2 8v10.8l12 6.9v-10.8zm14.3 7.9v10.8l12 7v-11zM1532.2 376.1V387l12 7v-11zm14.2 7.9v11l12 6.9V391zm14.3 8v10.8l12 6.9v-10.8z" fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1552.5 391.8v44.5l49 28.6v-45z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1558.7 275l-103.9 60 49.1 28.2L1528 349l48.6 28.6-24 14.1 49 28.6 103.6-60-146.5-85.5zm-5.6 59l33.4-19.7 49.3 27.8-33 19.6-49.7-27.6z"/>
    <path d="M1555.9 400v10.7l12 7V407zm14.1 7.8v10.9l12 7v-11zm14.4 7.9v10.9l11.9 6.9v-10.9zM1555.9 416.5v10.8l12 7v-10.8zm14.1 8v10.7l12 7v-10.8zm14.4 7.8v10.9l11.9 6.9v-10.9zM1654.4 395.6v10.9l-11.9 7v-11zm-14.2 7.9v10.9l-12 6.9v-10.9zm-14.3 8v10.7l-12 7v-10.8zM1654.4 412.3V423l-11.9 7v-11zm-14.2 7.8V431l-12 6.9V427zm-14.3 7.9v11l-12 6.9V435zM1697.2 371.4v10.9l-11.9 7v-11zm-14.1 7.9v10.9l-12 6.9v-10.8zm-14.3 8V398l-12 7v-10.8zM1697.2 388v11l-11.9 6.8V395zm-14.1 8v10.8l-12 6.9v-10.9zm-14.3 7.8v10.9l-12 6.9v-10.8z" fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#B2B2B2" d="M1755.8 350v23.7l-42 24.3.3-24.3z"/>
  </g>
  <g>
    <g stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#FC0" d="M1398.2 321.2c-.8-.5-22 7.3-22.9 9.1-2.6 4.3 2.8 7 6.3 5.9 3.3-1 25.1-7.6 16.6-15z"/>
      <path fill="#DADADA" d="M1367.6 338.2c1.6-4 3.6-6.3 12.4-9.5l1 2.6c-12 4.2-11 11.2-11 13.6v97.8c0 .3-.2.6-.5.8-.6.5-1.7.5-2.4 0-.2-.2-.4-.5-.4-.8v-93c0-1-.5-7.6 1-11.5z"/>
      <path fill="#DADADA" d="M1396.8 320.3c-8.6-5-20.3 7.7-21.4 9.6-1 1.9 1.7 3.3 5 2.4 3.2-1 25-7 16.4-12z"/>
    </g>
    <path opacity=".3" fill="#878787" stroke="#878787" stroke-miterlimit="10" d="M1466.7 380.3v-.1l-.6-.7c-.7-.6-1.7-.9-3-1l-2.7.1c-6.1 1-14.3 5-15.7 6l-1.4.5c-4.5 2.2-14.4 8-15.3 8.5l-63 38c-.2.2-.3 1-.3 1 0 .3.3.4.6.6s.9.2 1.2 0l.8-.4 63.4-38.1 11.6-7.7.5-.2v.3c.1.9 1.3 1.5 2.6 1.6h1.4c10.4-1.5 17.5-3.6 19.7-5.8.6-.9.8-1.8.2-2.6z"/>
    <path opacity=".3" fill="#878787" d="M1461.7 585.2l11.4-1.2 84.4-48.1-165.2-96.5-39.7-1.6zm-16.2 34.3c-.7-.3-1.4-.6-2.3-.7-3-.4-4.7.3-6.3 1.3l-71.7 40.3c-.2.1-.3.3-.3.5l.6.6c.3.2.7.3 1 .3s.7 0 1-.2l71.7-40.4c.7-.4 1.9-1.1 3-1 .4.2.8 0 1.3.4.7.4 1.3 1.2 1.7 3.4v.1a10 10 0 0 0-3.2 2.4c-.6 1-1.7 7.7 3.5 10.5 1 .6 2.2 1 3.8 1 4.7.5 7.3-3.2 5.7-5.9-1.1-2.7-4.7-6.2-5.4-7l-1.1-.8-.5-.2c-.4-2.5-1-3.8-2.5-4.6"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1232 524l-59 34.8 149 86.2 59.2-34.3z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-miterlimit="10" d="M1232 524l-59 34.8 149 86.2 59.2-34.3z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-miterlimit="10" d="M1232 538.8l-45.2 27.7L1322 645l45.3-27.1z"/>
    <g fill="none" stroke="#3C3C3B" stroke-width="2" stroke-miterlimit="10">
      <path d="M1236.4 552.7l104 60.8"/>
      <path stroke-linecap="round" d="M1239.4 551.4l-4.8 2.7m108 57.8l-4.8 2.7"/>
    </g>
    <g fill="none" stroke="#3C3C3B" stroke-width="2" stroke-miterlimit="10">
      <path d="M1224.7 560.7l103.9 60.8"/>
      <path stroke-linecap="round" d="M1227.6 559.4l-4.7 2.7m107.9 57.8l-4.8 2.7"/>
    </g>
    <g fill="none" stroke="#3C3C3B" stroke-width="2" stroke-miterlimit="10">
      <path d="M1213 568.7l103.9 60.8"/>
      <path stroke-linecap="round" d="M1215.9 567.4l-4.8 2.8m108 57.7l-4.8 2.8"/>
    </g>
    <path fill="none" stroke="#3C3C3B" stroke-miterlimit="10" d="M1232 538.8V524"/>
    <path opacity=".6" fill="#039AD7" d="M1231.5 530.6l-53 31.5L1322 645l53.1-31z"/>
    <path fill="#FFF" d="M1238.8 555.6c0 3.5-2.7 6.2-6.1 6a6.7 6.7 0 0 1-6.2-6.7c0-3.5 2.8-6.2 6.2-5.9 3.4.2 6.1 3.2 6.1 6.6z" opacity=".6"/>
    <path fill="#FFF" d="M1240.8 550.4c0 1.8-1.5 3.2-3.3 3.1s-3.3-1.7-3.3-3.5 1.5-3.3 3.3-3.2c1.7.1 3.3 1.7 3.3 3.6zm.5 7.7c0 1.9-1.4 3.3-3.2 3.2-1.9 0-3.3-1.7-3.3-3.5s1.4-3.3 3.3-3.2c1.8.2 3.2 1.7 3.2 3.5zm-7-1.7c0 1.8-1.4 3.3-3.2 3.2-1.9-.1-3.3-1.7-3.3-3.6s1.4-3.2 3.3-3.1c1.8.2 3.2 1.7 3.2 3.5z" opacity=".6"/>
    <path fill="#FFF" d="M1240 561.4c0 1.8-1.4 3.3-3.2 3.2s-3.2-1.7-3.2-3.6 1.4-3.2 3.2-3.1 3.3 1.7 3.3 3.5zM1244.7 568.6c0 1.8-1.4 3.3-3.3 3.2-1.8-.1-3.2-1.7-3.2-3.6s1.4-3.2 3.2-3.1 3.3 1.7 3.3 3.5zM1256.1 573.5c0 1.8-1.4 3.3-3.2 3.2s-3.3-1.7-3.3-3.6 1.4-3.2 3.3-3.1c1.7.2 3.2 1.7 3.2 3.5zM1229.9 566.4c0 1.8-1.4 3.3-3.3 3.2s-3.2-1.8-3.2-3.6 1.4-3.2 3.2-3.1c1.9.1 3.3 1.7 3.3 3.5z" opacity=".6"/>
    <path fill="#FFF" d="M1255.4 569.8c0 1.8-1.5 3.2-3.3 3.1s-3.3-1.7-3.3-3.5 1.5-3.3 3.3-3.2c1.8.2 3.3 1.7 3.3 3.6zM1248.8 566c0 1.7-1.4 3.2-3.2 3s-3.3-1.6-3.3-3.5 1.4-3.2 3.3-3.1c1.8.2 3.2 1.7 3.2 3.5zM1270 586c0 2-1.5 3.4-3.3 3.3-1.8-.1-3.3-1.8-3.3-3.6s1.5-3.3 3.3-3.2c1.8.2 3.3 1.8 3.3 3.6z" opacity=".6"/>
    <path opacity=".3" fill="#878787" d="M1347.7 520l-29.2 22.1 51.2 30 34.6-19.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1295.3 489.6l165.5 95.8 59.2-34.2-162.3-97.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1295.3 489.6v-23.8l42 29.7-15.9 9.2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1295.3 489.6l2.3 1.3v-22.3h-2.3v21zm16.8 9.8l2.4 1.4v-21.3l-2.4-1.7v21.6zm17.1-9.5h-.3v10.5l2.4-1.4v-7.7l-2-1.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1291.8 457.2v12l55.9 32.3v-12z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1523.2 519l-169-97.8-62.4 36 55.9 32.4-35.9 20.6 56.7 32.9 35.8-20.7 56.5 32.8z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1404.3 516.7l56.5 32.7 52.5-30.3-159.1-92.2-52.6 30.3 56 32.4-35.9 20.7 46.8 27.1z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1368.5 537.4l35.8-20.7 56.5 32.7 46.5-26.9-153.1-88.7-46.5 26.9 49.8 28.9-6 3.4 6 3.5-29.8 17.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1354.6 468v-9.2l10.1-6v9.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1354.6 462.4l10.1-5.9v-2.4l-10.1 6z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1344.4 452.9v9.3l10.2 5.9v-9.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1344.4 456.5l10 5.9V460l-10-5.9zm10.1 5.5v-2.3l12-7v2.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1342.6 452.8v2.3l11.9 7v-2.4z"/>
    <path fill="#DADADA" d="M1354.6 448v11.7l-12-7z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1366.5 452.8l-12-4.7v11.6z"/>
    <path fill="#B2B2B2" d="M1354.6 446v2l11.9 4.8z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1342.7 452.8l11.9-4.7V446z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1354.6 446l-12 6.9 12 6.9 11.9-7-12-6.8zm.2.4l8.5 5-8.5-3.4v-1.6zm-.5 13l-11-6.5 11-4.4v10.8zm.5 0v-11l11.1 4.5-11.1 6.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1345.3 457.7v1.7l8.4 4.8v-1.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1345.3 457.2l-.4 1.7 8.3 4.8.5-1.7z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1353.7 463.7h-.5l.5-1.7zm-8.4-3.5v1.7l8.4 4.8V465z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1345.3 459.7l-.4 1.7 8.3 4.8.5-1.7z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1353.7 466.2h-.5l.5-1.7zm.6 1.8h.3v-5.6h-.3z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1452.4 525v-9.3l10.2-6v9.4z"/>
      <path fill="#B2B2B2" d="M1452.4 519.2l10.2-5.8V511l-10.2 6zm-10.1-9.5v9.4l10.1 5.8v-9.2z"/>
      <path fill="#B2B2B2" d="M1442.3 513.4l10.1 5.8V517l-10.1-5.8zm10.1 5.5v-2.3l12-7v2.3z"/>
      <path fill="#DADADA" d="M1440.4 509.6v2.3l12 7v-2.3zm12-4.6v11.6l-11.9-7z"/>
      <path fill="#B2B2B2" d="M1464.3 509.6l-11.9-4.7v11.7zm-11.9-6.8v2.1l12 4.7z"/>
      <path fill="#B2B2B2" d="M1440.5 509.6l12-4.7v-2z"/>
      <path fill="#B2B2B2" d="M1452.4 502.8l-11.9 7 12 6.9 11.8-7-11.9-6.9zm.3.4l8.6 5-8.6-3.4v-1.6zm-.5 0v1.5l-8.5 3.4 8.5-4.9zm0 13l-11-6.5 11-4.4v10.9zm.5 0v-10.9l11.2 4.4-11.2 6.5zm-9.4-1.7v1.8l8.4 4.8v-1.8z"/>
      <path fill="#DADADA" d="M1443.3 514l-.5 1.8 8.3 4.8.6-1.7z"/>
      <path fill="#B2B2B2" d="M1451.7 520.6h-.6l.6-1.7zm-8.4-3.6v1.8l8.4 4.8v-1.8z"/>
      <path fill="#DADADA" d="M1443.3 516.6l-.5 1.7 8.3 4.8.6-1.7z"/>
      <path fill="#B2B2B2" d="M1451.7 523h-.6l.6-1.6zm.4 1.8l.3.1v-5.7h-.3z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1388.8 483.4l6.4-3.6 6.3 3.6-6.3 3.7z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1395.2 479l4.2.2-6.4-3.7a.7.7 0 0 0-.4-.1c-1.8-1-3.8 0-3.8 0v8.2l6.3-3.6-.2-.9h.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1388.8 475.3l6.4 3.7v8l-6.4-3.6zm6.4 11.7v-8s5.4-2.7 6.3 4.3l-6.3 3.8z"/>
    <path fill="#DADADA" d="M1389.3 483.1l5.3-2.7v5.8z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1398.7 489l6.3-3.7 6.3 3.8-6.3 3.6z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1405 484.6l4.2.2-6.4-3.8a.7.7 0 0 0-.4-.2c-1.8-.8-3.8.1-3.8.1v8.2l6.3-3.7-.2-.8h.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1405 492.7v-8.1s5.4-2.6 6.3 4.4l-6.3 3.7zm-6.3-11.7l6.3 3.6v8.1l-6.3-3.6z"/>
    <path fill="#B2B2B2" d="M1399.1 481.9v6.9l5.4 3V485z"/>
    <path fill="#DADADA" d="M1399.1 488.8l5.4-2.8v5.9z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1409 495l6.4-3.6 6.4 3.6-6.4 3.8z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1415.4 490.6l4.2.2-6.4-3.6a.7.7 0 0 0-.4-.2c-1.9-.9-3.9 0-3.9 0v8.2l6.4-3.6-.2-.9h.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1409 487l6.4 3.6v8.2l-6.4-3.8zm6.4 11.8v-8.2s5.3-2.6 6.3 4.4l-6.3 3.8z"/>
    <path fill="#DADADA" d="M1409.6 494.9l5.3-2.8v5.8z"/>
    <g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#EDEDED" d="M1311.8 540.6l7.7-4.4 7.7 4.4-7.7 4.5z"/>
        <path fill="#DADADA" d="M1319.5 524v19.7l6.6-3.7v-19.8zm-6.6 16l6.6 3.7V524l-6.6-3.8z"/>
        <path fill="#DADADA" d="M1327.2 537.3v3.3l-7.7 4.5v-3.4zm-15.4 0v3.3l7.7 4.5v-3.4z"/>
      </g>
    </g>
    <g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#EDEDED" d="M1335.2 554.1l7.6-4.4 7.7 4.4-7.7 4.4z"/>
        <path fill="#DADADA" d="M1342.8 537.5v19.8l6.7-3.9v-19.7zm-6.6 15.9l6.6 3.9v-19.8l-6.6-3.8z"/>
        <path fill="#DADADA" d="M1350.5 550.8v3.3l-7.7 4.4v-3.2zm-15.3 0v3.3l7.6 4.4v-3.2z"/>
      </g>
    </g>
    <g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#EDEDED" d="M1360.8 569l7.7-4.4 7.8 4.4-7.8 4.4z"/>
        <path fill="#B2B2B2" d="M1368.5 552.4v19.8l6.6-3.9v-19.8z"/>
        <path fill="#DADADA" d="M1362 568.3l6.5 3.9v-19.8l-6.5-3.9z"/>
        <path fill="#B2B2B2" d="M1376.3 565.6v3.4l-7.8 4.4v-3.2z"/>
        <path fill="#DADADA" d="M1360.8 565.6v3.4l7.7 4.4v-3.2z"/>
      </g>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1520 551.2v-21.9l-59.2 37.8v18.3z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1404.3 552.8v-21.4l56.5 32v22z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1368.5 543v12l35.8-20.7v-11.9zm53.9 20.1l2.4 1.5V543l-2.4-1.4v21.5zm18-11.2v21.7l2.4 1.5v-21.9l-2.3-1.3zm18 10v22.2l2.4 1.4v-22l-2.4-1.5zm-54-29.3v20.2l2.3 1.4V533l-.3-.2-2-.1z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1460.8 555.2V567l-56.5-32.8v-11.9z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1479.8 574.5l2.4-1.4v-19.7l-2.4 1.6v19.5zm19-31.5v20.6l2.3-1.3v-20.8l-2.4 1.5zm18.8-10.4v20l2.4-1.5v-18.5h-2.4zm-56.8 52.8l2.4-1.4v-18.6l-2.4 1.6v18.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1311.8 510.2v12l56.7 32.9v-12z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1523.2 519v12l-62.4 36v-11.8zm-165.7-29.4v6.9l-29.8 17.3-6-3.5z"/>
    <path fill="#B2B2B2" d="M1302.7 457l5 2.9 46.5-26.8-.1-5.8z"/>
    <g>
      <g stroke="#3C3C3B" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1368.6 558.1c-2.9 1.4-3.2 3.5-3.2 5.8v97.8c0 .3.1.6.4.7.7.5 1.7.5 2.4 0 .3-.1.5-.4.5-.7v-97.8c0-1 0-2.7 1-3.2.9-.3 1.7-1.9 8.7 3.7l1.7-2.2c-6-5-8.5-5.4-11.5-4z"/>
        <path fill="#FC0" d="M1395.7 567c4.8 2.3 8 8.8 3.6 11.3-8.5 5-20.1-7.7-21.2-9.6s-.9-5.4-.9-5.4 13.8 1.6 18.5 3.8z"/>
        <path fill="#DADADA" d="M1382 561.9c3 .9 23.3 6.5 15.3 11.1s-18.8-7.2-19.8-8.9c-1-1.7 1.6-3 4.5-2.2z"/>
      </g>
    </g>
    <g opacity=".3">
      <path fill="#878787" d="M1224 429.4a7 7 0 0 0-2.3-.7c-3-.5-4.7.3-6.3 1.2l-71.6 40.4c-.2 0-.3.3-.3.4 0 .2.3.4.5.6s.7.3 1.1.3c.4 0 .7 0 1-.2l71.6-40.3c.8-.5 2-1.2 3-1 .5.1.8 0 1.3.3.7.4 1.4 1.3 1.8 3.5h-.1c-.6.4-2.6 1.5-3.2 2.5-.6 1-1.6 7.6 3.5 10.4 1.1.6 2.3 1 3.8 1 4.7.6 7.3-3.2 5.8-5.9-1.2-2.7-4.8-6.2-5.5-7l-1-.7-.6-.2c-.3-2.6-1.1-4-2.5-4.6"/>
    </g>
    <g>
      <g stroke="#3C3C3B" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1147 368c-2.9 1.3-3.1 3.4-3.1 5.7v97.8c0 .3.1.6.4.8.7.5 1.8.5 2.4 0 .3-.2.5-.5.5-.8v-97.9c0-1 0-2.6 1-3.1 1-.4 1.7-2 8.7 3.6l1.7-2.2c-6.1-4.9-8.6-5.4-11.6-4z"/>
        <path fill="#FC0" d="M1174.2 377c4.8 2.1 8 8.7 3.6 11.2-8.5 4.9-20.1-7.7-21.2-9.7-1-1.9-.8-5.3-.8-5.3s13.6 1.4 18.4 3.7z"/>
        <path fill="#DADADA" d="M1160.5 371.6c3 .9 23.2 6.6 15.2 11.2s-18.8-7.2-19.7-9c-1-1.7 1.5-3 4.5-2.2z"/>
      </g>
    </g>
    <g>
      <path fill="#878787" d="M1191.7 550.6l1.1.7c9.3 6.8 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.6-1.2-4 1.9-12.3 6.3-13.5 6.8-.8.2-1.8 0-2.7-.6-.6-.5-1.2-1.1-.8-2 1-.6 9.6-4.8 13.6-7-7.5-6.5-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1143 578.2c-.3 1.5-4 2.3-5.5-.4v-22.4l5.6.3s.3 20.5 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1168 532.4a25.7 25.7 0 0 1-27.5 26.2c-15.2-.8-27.5-14-27.5-29.6s12.4-27.1 27.5-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1140.7 503.7h-3a39 39 0 0 1 7.8 23.3c0 12-5.7 22.3-14.4 28.5 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M1260 601.3c.3.3.7.4 1 .5 7.6 5.6 6.7 13.6-1.9 18.1a32 32 0 0 1-28.2-1c-3.2 1.6-10 5.1-11 5.4-.7.2-1.5 0-2.2-.5-.6-.3-1-1-.7-1.6l11-5.6c-6-5.3-4.7-12.6 3.4-16.8 8.4-4.2 21-3.4 28.7 1.5z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1220.5 623.8c-.3 1.2-3.3 1.9-4.6-.2v-18.4l4.6.3s.2 16.7 0 18.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1240.9 586.6a21 21 0 0 1-22.4 21.3c-12.3-.8-22.4-11.5-22.4-24.1s10-22.2 22.4-21.4a24.4 24.4 0 0 1 22.4 24.2z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1218.6 563.1h-2.5a32 32 0 0 1 6.4 19 28 28 0 0 1-11.7 23.2 20.4 20.4 0 0 0 29.5-18.8 23.5 23.5 0 0 0-21.7-23.4z"/>
    </g>
    <g>
      <path fill="#878787" d="M1354 634.9l1.4.8c10.9 8 9.5 19.4-2.8 25.7-11.7 5.8-29 5-40.1-1.5-4.5 2.2-14.2 7.3-15.6 7.8a4 4 0 0 1-3-.6c-.8-.6-1.5-1.4-1-2.3l15.8-8c-8.8-7.7-6.9-18 4.8-24a44 44 0 0 1 40.6 2z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1297.9 666.9c-.5 1.6-4.6 2.7-6.5-.5v-26l6.5.4s.3 23.7 0 26z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1326.8 613.9a29.7 29.7 0 0 1-31.9 30.3 34.4 34.4 0 0 1-31.8-34.2 29.9 29.9 0 0 1 31.8-30.4 34.7 34.7 0 0 1 32 34.3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1295.1 580.6a22 22 0 0 0-3.5 0 45 45 0 0 1 9 27.1 40 40 0 0 1-16.6 33c3.4 1.5 7 2.4 11 2.6a29 29 0 0 0 31-29.4 33.5 33.5 0 0 0-30.9-33.3z"/>
    </g>
    <g>
      <path fill="#878787" d="M1695.7 808.7l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.5 6.8-.7.2-1.8 0-2.6-.5-.7-.5-1.3-1.2-1-2 1.1-.6 9.7-4.8 13.7-7-7.5-6.6-5.8-15.5 4.2-20.6a38.2 38.2 0 0 1 35.1 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1647.2 836.4c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4s.2 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1672 790.6a25.7 25.7 0 0 1-27.5 26.2c-15.2-.9-27.5-14.1-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1644.8 761.9h-3c5 6.6 7.8 14.6 7.8 23.3 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.8z"/>
    </g>
    <g>
      <path fill="#878787" d="M1858.2 893l1.4.8c10.8 7.9 9.5 19.3-2.8 25.7-11.7 5.8-29 5-40.2-1.6-4.5 2.2-14.2 7.4-15.5 7.9a4 4 0 0 1-3.1-.7c-.8-.6-1.4-1.3-1-2.3l15.8-8c-8.8-7.6-6.8-18 4.8-23.9 11.8-6 29.7-5 40.6 2z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1802 925c-.5 1.7-4.6 2.7-6.5-.5v-26l6.5.5s.3 23.6 0 26z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1830.8 872a29.7 29.7 0 0 1-31.8 30.4c-17.6-1.1-31.8-16.4-31.8-34.2s14.3-31.5 31.8-30.5a34.7 34.7 0 0 1 31.8 34.3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1799.2 838.8a22 22 0 0 0-3.5 0 45 45 0 0 1 9.1 27c0 13.9-6.5 25.8-16.7 33 3.5 1.5 7.1 2.5 11 2.7a29 29 0 0 0 31-29.4 33.5 33.5 0 0 0-30.9-33.3z"/>
    </g>
    <g>
      <path fill="#878787" d="M2039.3 1001.9l1.4.8c10.8 7.9 9.5 19.3-2.8 25.7-11.7 5.8-29 5-40.1-1.6-4.6 2.2-14.3 7.4-15.6 7.9a4 4 0 0 1-3-.7c-.8-.5-1.5-1.3-1-2.3l15.7-8c-8.7-7.6-6.8-18 4.8-23.9 11.8-6 29.8-5 40.6 2z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1983.2 1034c-.5 1.6-4.6 2.6-6.6-.5v-26l6.6.4s.2 23.6 0 26z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2012 981a29.7 29.7 0 0 1-32 30.3 34.4 34.4 0 0 1-31.7-34.2 29.9 29.9 0 0 1 31.8-30.5A34.6 34.6 0 0 1 2012 981z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1980.4 947.7a22 22 0 0 0-3.6 0c5.8 7.6 9.1 17 9.1 27 0 13.9-6.5 25.8-16.7 33 3.5 1.6 7.1 2.5 11 2.7a29 29 0 0 0 31-29.4 33.4 33.4 0 0 0-30.8-33.3z"/>
    </g>
    <g>
      <path fill="#878787" d="M2178.3 751.2l1.4.9c10.8 7.8 9.5 19.3-2.8 25.6-11.7 5.9-29 5-40.2-1.5-4.5 2.2-14.2 7.4-15.5 7.8a4 4 0 0 1-3.1-.6c-.8-.6-1.4-1.4-1-2.3l15.8-8c-8.8-7.7-6.8-18 4.8-24 11.7-6 29.7-5 40.6 2z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M2122.1 783.3c-.4 1.6-4.6 2.7-6.5-.5v-26l6.5.4s.2 23.7 0 26z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2151 730.3a29.7 29.7 0 0 1-32 30.3 34.4 34.4 0 0 1-31.7-34.2A29.9 29.9 0 0 1 2119 696a34.7 34.7 0 0 1 31.8 34.3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M2119.3 697a22 22 0 0 0-3.5 0c5.8 7.6 9.1 17 9.1 27.1 0 13.8-6.5 25.7-16.7 33 3.5 1.5 7.1 2.4 11 2.6a29 29 0 0 0 31-29.4 33.6 33.6 0 0 0-30.9-33.3z"/>
    </g>
    <g>
      <path fill="#878787" d="M2162.7 490.2c.4.4 1 .6 1.3 1 10.9 7.8 9.5 19.2-2.8 25.6-11.7 5.8-29 5-40.1-1.6-4.5 2.2-14.2 7.4-15.6 7.9a4 4 0 0 1-3-.7c-.8-.6-1.5-1.3-1-2.3 1.1-.7 11-5.6 15.7-8-8.7-7.6-6.8-18 4.8-23.9a45 45 0 0 1 40.7 2z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M2106.5 522.3c-.5 1.7-4.6 2.7-6.6-.5v-26l6.6.5s.3 23.6 0 26z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M2135.3 469.3a29.7 29.7 0 0 1-31.9 30.4c-17.6-1.1-31.8-16.4-31.8-34.2s14.3-31.5 31.8-30.5a34.7 34.7 0 0 1 31.9 34.3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M2103.7 436a22 22 0 0 0-3.6 0c5.8 7.7 9.2 17 9.2 27.2a40 40 0 0 1-16.7 32.9c3.4 1.5 7 2.5 11 2.7a29 29 0 0 0 31-29.4 33.5 33.5 0 0 0-31-33.3z"/>
    </g>
  </g>
  <g>
    <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#878787" d="M1669 892.5l30.5-14.3-10-6-20.5 10.3-8 5z"/>
    <path opacity=".3" fill="#878787" d="M1581.9 887.2l24.4 13.4 17.9 1 19-11.5L1611 865z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1669.1 892.3l8-5v-29h-16z"/>
    <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M1669.1 892.3l8-5v-29h-16z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1669.1 863.2l8-5-8-5-8 5 3.1 4.7z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1669.1 863.2v29l-8-4.8v-29.1z"/>
    <path opacity=".3" fill="#878787" d="M1082.8 858.3l-4.6 18.7 18.7-9.2 31.1-17.1-24-13.3z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M1066.8 841.5l17.2 9.4v19l-17.3-9.4z"/>
      <path d="M1061.2 853l-2.4 8.5 13.6 7.4 1.6-8.8zm22.8-2.1v19l27-14.7v-19z"/>
      <path d="M1066.8 841.5l17.2 9.4 27-14.7-17.2-9.5zm-5.6 11.5l12.8 7.1 7.4-4.1-12.8-7z"/>
      <path d="M1074 860.1l-1.6 8.8v7.4l9-4.9V856zm-12.6-6l-2 6.9 12.5 6.9 1.4-7.2z"/>
      <path d="M1072.4 877.3v-8.4l-13.6-7.4v8.2zm0-1.8v1.8l2.4-1.4v-1.8zm3.2-2c.2-3.3 2-6.5 4.2-7 2-.5 3.5 1 3.8 3.5l-7.8 5.7-.2-2.2z"/>
      <path d="M1075 872.9c.2-3.2 2-6 4.3-6.7h1.5l-1 .1c-2.2.6-4.1 3.6-4.1 7-.1.8 0 1.6.2 2.4l-.7-.5c-.2-.8-.2-1.5-.2-2.3z"/>
      <path d="M1076.4 873.3c0 2.6 1.4 4.4 3.1 4 1.7-.4 3.3-3 3.4-5.6 0-2.7-1.3-4.4-3.1-4-1.8.5-3.3 3-3.4 5.6z"/>
      <path d="M1077.9 872.9c-.1 1.4.6 2.5 1.6 2.3 1-.2 2-1.7 2-3.2.1-1.5-.7-2.4-1.7-2.3-1 .3-2 1.7-2 3.2zm.1 4.1l-2.1-1.4.7-.6a6 6 0 0 0 1.5 2zm-3-16.6l-1.3 6.9 6.3-3.3v-6zm23.7-.1c.1-3.4 2-6.5 4.2-7.1 2-.4 3.5 1 3.9 3.6l-7.9 5.7-.2-2.2z"/>
      <path d="M1098.2 859.6c.1-3.1 2-6 4.3-6.6h1.5-1c-2.3.7-4.2 3.6-4.2 7.1l.2 2.3-.7-.5a6 6 0 0 1 0-2.3z"/>
      <path d="M1099.6 860.1c-.1 2.7 1.3 4.4 3 4 1.8-.3 3.3-2.8 3.4-5.5.1-2.6-1.2-4.5-3-4-1.8.3-3.3 3-3.4 5.5z"/>
      <path d="M1101 859.6c0 1.6.7 2.6 1.7 2.3 1-.2 1.9-1.6 2-3.1 0-1.5-.8-2.5-1.8-2.3-1 .3-1.9 1.8-1.9 3.1zm.2 4.2l-2.2-1.4.9-.6c0 .1.4 1.3 1.3 2z"/>
    </g>
    <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#878787" d="M1698.8 912.4l30.5-14.3-10-6-20.5 10.5-8 4.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1698.9 912.3l8-5v-29h-16z"/>
    <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M1698.9 912.3l8-5v-29h-16z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1698.9 883.2l8-5-8-5-8 5 3.2 4.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1698.9 883.2v29.1l-8-5v-29z"/>
    <ellipse transform="rotate(-89.5 1664.7 867.6)" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="1664.7" cy="867.7" rx="6.1" ry="2.3"/>
    <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#DADADA" stroke-linecap="round" stroke-linejoin="round" d="M1279.6 334l18.7-10.8-9.8-3.4-18.7 10.8 3.4 2.9zm29.6 18.5l18.5-10.3-7.5-6.7-18.7 10.9 3.5 4.5z"/>
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1300.2 334.8l17-9.5 3 10.2L1301 347z"/>
      <path fill="#B2B2B2" d="M1300.4 351.5c2.1 1.2 4 4.2 4 6.7s-1.8 3.4-4 2.2a8.7 8.7 0 0 1-4-6.7c.2-2.4 1.9-3.5 4-2.2z"/>
      <path fill="#DADADA" d="M1300.5 354.7c.6.3 1 1.2 1 1.9 0 .6-.4 1-1 .5-.6-.3-1-1.1-1-1.8 0-.6.4-.9 1-.6z"/>
      <path fill="#DADADA" stroke-linecap="round" stroke-linejoin="round" d="M1301.3 346.8l-.4-.2-1-11.7-14.7-8.4-1 .7-5.5 6.9-9-3.2v5.6l-.5-.3v2.3l.6.3v1.2l2.6 1.5v-2.6c0-2.8 1.9-4 4.4-2.5a9.9 9.9 0 0 1 4.4 7.6v2.6l15 8.6v-2.6c0-2.8 1.9-4 4.4-2.5a9.9 9.9 0 0 1 4.4 7.6v2.6l4.1 2.4v-9.8l-7.8-6.1z"/>
      <path fill="#DADADA" stroke-linecap="round" stroke-linejoin="round" d="M1300.1 335.2l17.1-9.9-15.6-8.5-16.9 9.8 12 6.5z"/>
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1309 353l18.7-10.8v9.6l-18.7 10.8z"/>
      <path fill="#B2B2B2" d="M1285 328.9l13 6.8 1 9.6-18.6-10.2zm-8 8.5c2.2 1.3 4 4.3 4 6.8s-1.7 3.4-4 2.2a8.7 8.7 0 0 1-3.9-6.7c0-2.5 1.8-3.5 4-2.3z"/>
      <path fill="#DADADA" d="M1276.9 340.5c.5.3 1 1.2 1 1.8 0 .7-.5 1-1 .6-.6-.3-1-1.1-1-1.8 0-.6.4-.9 1-.6z"/>
    </g>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1630.5 888.8s11.6 4.1 20.5-.5c6.4-3.3 4.8-11 5.6-16.6.8-5.6 7.1-4.2 7.1-4.2"/>
    <ellipse transform="rotate(-89.5 1694.8 888.2)" fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="1694.8" cy="888.2" rx="6.1" ry="2.3"/>
    <ellipse transform="rotate(-89.5 1693.7 888)" fill="#CBD000" class="fillgreen" cx="1693.7" cy="888.1" rx="1.5" ry=".6"/>
    <ellipse transform="rotate(-89.5 1695.4 889)" fill="#CBD000" class="fillgreen" cx="1695.4" cy="889" rx="1.5" ry=".6"/>
    <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#DADADA" stroke-linecap="round" stroke-linejoin="round" d="M1584.1 875.9l18.7-10.9-9.9-3.5-18.7 10.9 3.6 2.9zm29.7 18.4l18.4-10.3-7.5-6.7L1606 888l3.6 4.6z"/>
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1604.8 876.6l17-9.4 3 10-19.2 11.5z"/>
      <path fill="#B2B2B2" d="M1605 893.2c2 1.3 3.9 4.3 3.9 6.8s-1.7 3.4-4 2.2a8.7 8.7 0 0 1-3.9-6.8c0-2.4 1.8-3.4 4-2.2z"/>
      <path fill="#DADADA" d="M1605 896.6c.6.3 1.1 1.1 1.1 1.8s-.5 1-1 .6a2.3 2.3 0 0 1-1.1-1.8c0-.7.5-1 1-.6z"/>
      <path fill="#DADADA" stroke-linecap="round" stroke-linejoin="round" d="M1605.8 888.5l-.4-.2-1-11.6-14.6-8.4-1 .6-5.6 7-8.9-3.2v5.6l-.6-.3v2.3l.6.3v1.2l2.6 1.4v-2.5c0-2.8 2-4 4.4-2.5a9.9 9.9 0 0 1 4.4 7.5v2.6l15 8.7v-2.6c0-2.8 2-4 4.4-2.5a9.9 9.9 0 0 1 4.5 7.6v2.6l4 2.4v-9.8l-7.8-6.2z"/>
      <path fill="#DADADA" stroke-linecap="round" stroke-linejoin="round" d="M1604.7 877l17-9.8-15.5-8.6-17 9.8 12 6.5z"/>
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1613.5 894.9l18.7-10.9v9.6l-18.7 10.8z"/>
      <path fill="#B2B2B2" d="M1589.6 870.7l13 6.8.8 9.6-18.5-10.2zm-8.1 8.6c2.1 1.3 4 4.2 4 6.7s-1.8 3.5-4 2.2a8.7 8.7 0 0 1-4-6.7c.2-2.5 1.9-3.4 4-2.2z"/>
      <path fill="#DADADA" d="M1581.3 882.4c.6.3 1 1.1 1 1.8s-.4 1-1 .6c-.6-.3-1-1.2-1-1.8 0-.7.4-1 1-.6z"/>
    </g>
  </g>
  <g>
    <g opacity=".3" fill="#878787">
      <path d="M668.2 616.7l124.2-73.3 31-16.4 47.6 25.1-120 75.1-44.4 11.6z"/>
      <path d="M851.3 557.8l18.5 9.7s3.8 3.3-.1 6.6C867.4 576 840 592 840 592l-1.3-3 24.7-14.8c1.7-1 4.4-3 2.7-4.1-2-1.3-5.9-3.2-5.9-3.2l-13.2-6.4 4.2-2.7z"/>
      <path d="M834.6 567.8l18.5 9.7s3.8 3.3-.2 6.6a804.1 804.1 0 0 1-29.5 17.8l-1.3-2.8 24.7-15c1.7-1 4.4-2.9 2.7-4-2-1.3-5.9-3.2-5.9-3.2l-13.3-6.5 4.3-2.6z"/>
      <path d="M820.7 577.2l18.5 9.7s3.8 3.3-.2 6.6c-2.2 2-29.6 17.9-29.6 17.9l-1.2-3 24.7-14.8c1.7-1 4.4-3 2.7-4.1-2-1.3-5.9-3.2-5.9-3.2l-13.4-6.4 4.4-2.7z"/>
      <path d="M805.4 585.7l18.5 9.7s3.8 3.4-.2 6.6c-2.2 2-29.5 17.9-29.5 17.9l-1.3-2.9 24.7-14.9c1.7-1 4.4-3 2.7-4.1-2-1.2-5.9-3.2-5.9-3.2l-13.3-6.4 4.3-2.7z"/>
      <path d="M789 595.9l18.5 9.7s3.8 3.4-.2 6.6c-2.2 2-60.6 33.5-60.6 33.5l-1.2-2.8 55.8-30.6c1.8-1 4.4-3 2.7-4.1-2-1.3-5.9-3.2-5.9-3.2l-13.4-6.4 4.3-2.7z"/>
    </g>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M859 578.5c-.3.2-.8.4-1.4.4-.6 0-1.3-.1-1.8-.4-.4-.2-.6-.5-.7-.9v4.6c0 .2.3.6.7.8.5.3 1 .4 1.7.4.5 0 1-.2 1.4-.4.6-.4.8-.7.8-.8v-4.4c0 .1-.2.4-.6.7z"/>
      <path d="M799 609.3c.4.2.8.6 1.1 1 .4.7.6 1.3.6 2 0 .3-.1.7-.4.9l59-34.9c.3-.2.4-.6.4-1a3.7 3.7 0 0 0-1.7-2.8c-.5-.3-.8-.2-1.1-.1L798 609c.3 0 .6 0 1 .2z"/>
    </g>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M752.7 640.8V640.2l-.1-.2v-.2l-.1-.1v-.1l-.1-.2-.1-.1-.2-.2v-.2h-.1l-.1-.2-.2-.2-.2-.2H750.1l-3.4 2c-.7.3-1 1-1 1.8l-.1 4.7c0 .3.3.6.6.9.5.2 1.2.4 1.9.3.5 0 1 0 1.4-.3.8-.5.7-1 .7-1v-3.1c.2 0 .3-.2.4-.3l1.7-1 .2-.1v-.1l.2-.3v-1.1c0 .1 0 .1 0 0 0 .1 0 .1 0 0zm-7.2 5.4zm0 0s0-.2 0 0c0-.2 0-.2 0 0 0-.2 0-.2 0 0 0-.2 0-.2 0 0zm0-.3z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M750.8 638.4l1 1c.4.7.6 1.3.6 2 0 .3-.1.7-.4.9l48.5-29.2c.3-.2.4-.6.4-1a3.7 3.7 0 0 0-1.6-2.9c-.6-.2-1-.2-1.2 0l-48.3 29c.2 0 .6 0 1 .2z"/>
    <path fill="#B2B2B2" d="M726.8 548.6l.2-.2-.2.1m2-7.3l.2.1h-.2m-.3-.3l-.3-.1.3.1m.5.3l.2.1h-.2m-.8-.5l-.2-.1-.1-.1s.2 0 .3.2m1.2.6l.3.2s-.2 0-.3-.2c0 .1 0 .1 0 0m.5.3l1 .4h-.2l-.3-.2c-.2 0-.3 0-.5-.2m-2.3-1.3l-.3-.2-.3-.2-.2-.2.8.6m-1-.9l-.3-.5c0 .2.2.4.3.5m4.8 2.8c.2 0 .4 0 .6.2h-.2l-.2-.1-.2-.1m1 .3h.4-.4m.7 0s0 .2 0 0c0 .2 0 0 0 0m-7.2-4l-.2-.2.2.2m8.4 4.3h.2-.2m.6 0h.3-.3m.6 0h.2-.2m.5 0h.2-.2m.4 0h.2-.2m.4-.1l.2-.1h-.2m-1.8-5.3c-1.4-.9-3.2-1.4-4.9-1.7s-3-.1-3.8.4L640 585.9c-.9.5-1.1 1.2-.7 2.3l.2.4h.1l.1.3.4.5h.1l.3.3v.1l.2.1.3.2v.1l.2.1.3.2v.1l.1.1.3.2h.1l.1.2c.1 0 .2 0 .3.2h.2l.1.2s.3 0 .4.2h.2l.7.3.2.1.4.1.3.1.4.1h.2l.6.2.2.1.7.2h3.2l.3-.2h.3v-.2h.2l86.1-49.8h-.2c1-.4 1.4-1.2.8-2.3-.1-1.2-1.3-2.1-2.7-3" opacity=".3"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M690.4 440.7c3.1 1.7 3.1 4.6 0 6.4-3 1.7-8 1.7-11 0s-3-4.6 0-6.4c3-1.8 8-1.8 11 0z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M692.7 443.9v.6c0 .1 0 .2-.2.2v.2l-.1.3-.1.2-.2.3-.2.3h-.1l-.3.4-.3.1-.2.2-.3.2-.3.2-.7.4-.2.1-.6.2h-.2l-.4.2h-.3l-.4.2h-.3c-.3.2-.6.2-.9.2H683.2l-.3-.1-.4-.1-.3-.1-.5-.1-.3-.1-.9-.3-.3-.2h-.2l-.6-.4c-1.5-.8-2.3-2-2.3-3.2l-.3 122c0 1 .8 2.2 2.3 3.2l.6.3h.2c0 .2.2.2.4.3l.8.3h.3l.5.2h5l.3-.1.5-.1.2-.1.4-.1h.1l.1-.1.6-.2.2-.1.8-.4.2-.2c.1 0 .2 0 .3-.2l.2-.2c.1 0 .2 0 .3-.2h.1l.3-.3.3-.2v-.1l.3-.3v-.2l.2-.3v-.2c0-.1 0-.2.2-.2v-.7l.2-121.7zm0 14.8v-.1.1zm0 .3z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M690.4 440.7c3.1 1.7 3.1 4.6 0 6.4-3 1.7-8 1.7-11 0s-3-4.6 0-6.4c3-1.8 8-1.8 11 0z"/>
    <path opacity=".3" fill="#B2B2B2" d="M692.7 444.1v.5c0 .1 0 .2-.2.2v.2l-.1.3-.1.2-.2.3-.2.3h-.1l-.3.3-.3.2-.2.2-.3.2-.3.2-.7.4-.2.1-.6.2h-.2l-.4.2h-.3l-.4.2h-.3c-.3.2-.6.2-.9.2h-1.6v122h1.2l.9-.2h.3l.5-.2h.2l.4-.1h.1l.1-.1.6-.2.2-.1.8-.4v-.1l.2-.1.3-.2c.1 0 .2 0 .2-.2.1 0 .2 0 .3-.2h.1l.3-.3.3-.3.3-.3v-.2l.2-.3v-.2c0-.1 0-.2.2-.2v-.7l.2-122v.2zm0 15zm0-.5z"/>
    <path opacity=".3" fill="#B2B2B2" d="M685.7 448.3c-3-1.8-3-4.6 0-6.5a13 13 0 0 1 5.3-1.3 12 12 0 0 0-11 0c-3 1.8-3 4.7 0 6.5 1.7 1 3.7 1.4 5.8 1.4v-.1z"/>
    <path fill="#878787" d="M850 431.4l1.1.7c9.3 6.9 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.7-1.2l-13.4 6.8c-.8.2-1.8 0-2.7-.6-.7-.5-1.2-1.1-.9-2l13.7-7c-7.5-6.5-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M801.5 459c-.4 1.5-4 2.3-5.6-.4v-22.4l5.6.4s.2 20.4 0 22.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M826.3 413.3a25.7 25.7 0 0 1-27.5 26.2 29.7 29.7 0 0 1-27.5-29.5 25.9 25.9 0 0 1 27.5-26.4 30 30 0 0 1 27.5 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M799 384.6h-3c5 6.6 7.9 14.7 7.9 23.3 0 12-5.7 22.3-14.4 28.5 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5c0-15-11.9-27.8-26.6-28.7z"/>
    <path fill="#878787" d="M810 459c.3.2.8.4 1 .7 9.4 6.8 8.3 16.7-2.3 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.5 6.9-.7.2-1.8 0-2.6-.6-.7-.5-1.3-1.2-.9-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M761.4 486.6c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4s.2 20.5 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M786.3 440.8a25.7 25.7 0 0 1-27.6 26.2 29.7 29.7 0 0 1-27.4-29.6 25.9 25.9 0 0 1 27.4-26.3 30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M759 412h-3a39 39 0 0 1 7.8 23.4c0 12-5.7 22.3-14.4 28.4 3 1.4 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4A28.9 28.9 0 0 0 759 412z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M653 462c3 1.6 3 4.5 0 6.3-3 1.8-8 1.8-11 0-3.1-1.7-3.1-4.6 0-6.4 3-1.8 8-1.8 11 0z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M655.3 465v.6l-.1.2-.1.1-.1.2-.1.3v.2l-.3.3c0 .1 0 .2-.2.3l-.4.4s-.2 0-.3.2l-.1.2c-.1 0-.2 0-.3.2l-.3.1-.8.4-.2.1-.6.2-.1.1-.4.1-.3.1-.5.1-.3.1h-4.4l-.4-.1h-.3l-.5-.2h-.2l-1-.4s-.2 0-.3-.2h-.2l-.6-.4c-1.5-.8-2.3-2-2.3-3.2l-.3 122c0 1.1.8 2.3 2.4 3.2l.5.3.2.1.4.2.9.3h.3l.4.2h5.1l.2-.1.5-.1.3-.1.4-.1.2-.1.5-.2h.2l.8-.5c.2 0 .2-.2.3-.2 0 0 .2 0 .3-.2l.2-.1.3-.2.3-.3.1-.1.2-.2.1-.1.2-.3.1-.1.1-.4h.1v-.2l.1-.2V586.8l.3-121.7zm-.1 15v-.2.2zm0 .3z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M707 594l-.4 44.8 126-76v-41.6z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M706.6 638.8l-38.4-22 .3-44.4L707 594zM832.7 521l-37.4-22-126.8 73.4L707 594z"/>
    <path opacity=".3" fill="#B2B2B2" d="M707 594l-.4 44.8 126-76v-41.6z"/>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M810 569v1.1l.1.5.2.3v.1l.3.2.2.1 3.7 2.2.7.7c0 .3.2.6.3.8v6.1c0-.1-.1 1 1.5 2.1a7.5 7.5 0 0 0 7.2 0c.8-.5 1.4-1.1 1.5-1.8V571c0-1.7-1-3.3-2.3-4l-7.3-4.3-.3-.1-.3-.1h-1.4c-.2 0-.2 0-.2.2h-.2l-.2.2h-.1l-.3.2-.2.1-.1.1-.1.1-.2.2-.2.2v.1l-.3.2-.2.2v.2h-.2v.2c0 .2-.1 0-.2.2l-.1.2h-.1c0 .2-.3.4-.3.5l-.1.2-.1.1-.2.3-.1.2-.1.3-.1.3v.2l-.2.5v1.3c0-.1 0 0 0 0zm15.8 11.7zm-.1-.4c0 .1 0 .1 0 0 0 .1 0 .1 0 0zm-.2-.3c0 .1 0 .1 0 0z"/>
      <path d="M818.5 564c-.8-.6-1.7-.5-2.7.1-.9.5-1.7 1.2-2.3 2.3a7.5 7.5 0 0 0-1.3 4c0 .9.3 1.7.9 2.2"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M845.6 549.2a2 2 0 0 0-1.1-1.8l-24.6-12.6c-1.2-.6-2.3.5-2.3 1.7l-.1 31.3c0 .3.2.6.7 1h.4l.2.1h2.7l.2-.2h.2l.1-.2h.1l.1-.2.1-.2v-.5l.1-26.7 18.2 9.4.3.3.1.3.1 10.6v.2h.1l.2.3h.1l.1.2h.4v.2h2.9v-.1h.6l.1-.1.1-.1v-13z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M821.7 545.7c-.4.2-.8.2-1.4.3-.7 0-1.4-.1-1.8-.4-.4-.2-.6-.5-.7-.9l-.1 23.2c0 .3.3.7.7 1 .4.2 1.1.4 1.8.4.6 0 1-.1 1.4-.4.6-.3.7-.7.7-1v-23c0 .3-.2.6-.6.8zm23.3 11.2a4 4 0 0 1-1.4.4c-.6 0-1.3-.2-1.8-.5-.4-.2-.6-.5-.7-.9v29.4c0 .3.2.7.6.9.5.3 1.2.5 1.8.5.6 0 1-.1 1.5-.4.5-.3.6-.7.6-1v-29.2c0 .2-.2.5-.5.8z"/>
    </g>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M793.7 577.7v1.1l.2.6.2.3.3.2.1.1 3.8 2.3.7.6.3.9v6s-.1 1 1.5 2.2c.8.4 2 .7 3.2.8 1.5.1 3-.3 4-.8.8-.5 1.3-1.2 1.4-1.9v-10.3c0-1.8-1-3.3-2.3-4l-7.3-4.4-.3-.1H798l-.3.1h-.2c-.2 0 0 .2-.2.2s-.3.2-.3.3h-.2l-.1.2h-.1l-.2.3s-.2 0-.2.2h-.1l-.2.2-.1.1-.1.1v.2l-.2.1v.1l-.3.2v.2h-.2l-.3.6v.2h-.1l-.2.4-.1.1-.1.3-.1.3-.1.2v.1l-.1.5v1.2c-.1-.2-.1 0-.1 0zm15.8 11.7zm0-.3zm-.3-.3h.1z"/>
      <path d="M802.2 572.6c-.7-.5-1.6-.4-2.7.1-.8.5-1.6 1.3-2.3 2.3a7.5 7.5 0 0 0-1.2 4c0 1 .3 1.7.9 2.2"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M829.4 557.9a2 2 0 0 0-1.1-1.9l-24.6-12.5c-1.3-.6-2.3.4-2.3 1.7l-.1 31.2c0 .4.2.7.6 1h.4l.3.1h2.7l.2-.1.2-.1v-.1l.2-.1v-.2l.2-.1V549.7l18.3 9.3.3.3.1.4v10.7l.2.1.2.2v.1l.2.1h.2v.1h.2v.1h.4l.2.1h2.1l.1-.2h.7l.1-.2v-12.9z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M805.4 554.4l-1.4.4c-.7 0-1.4-.2-1.9-.5-.4-.2-.5-.5-.6-.9l-.1 23.3c0 .3.3.7.6.8.5.3 1.2.5 1.9.5.5 0 1 0 1.4-.4.6-.2.7-.6.7-1v-23c0 .2-.2.5-.6.8zm23.4 11.8l-1.4.4c-.7 0-1.4-.2-1.8-.5-.4-.2-.6-.5-.7-.8l-.1 29.3c0 .3.3.7.7 1 .5.2 1.1.4 1.8.4.6 0 1-.1 1.4-.4.6-.3.7-.7.7-1v-29.2c0 .2-.2.5-.6.8z"/>
    </g>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M777.5 586.9v1l.2.6.2.3h.1l.2.3h.2l3.8 2.3.6.6.3 1v6c0-.1 0 1 1.6 2 .7.6 1.9.8 3.1 1a7 7 0 0 0 4-1c.8-.4 1.4-1 1.5-1.7v-10.4c0-1.8-1-3.3-2.3-4l-7.3-4.4h-.3l-.3-.2h-1.3l-.1.1-.2.1-.2.1-.2.1v.1l-.4.2-.2.1s-.2 0-.2.2l-.2.2-.1.2h-.1l-.2.3h-.1l-.1.2-.1.1-.1.1-.1.1-.2.2-.1.2-.1.1-.3.5v.2h-.2l-.2.4v.2c0 .2-.2.3-.2.3v.2l-.2.2v1.9c-.2-.1-.2 0-.2 0zm15.9 11.6zm-.1-.3zm-.1-.3s0 .1 0 0l.1.1v.1l-.1-.2z"/>
      <path d="M786.2 581.8c-.8-.6-1.6-.5-2.7 0-.9.5-1.6 1.3-2.3 2.4a7.5 7.5 0 0 0-1.3 4c0 .9.3 1.6 1 2.1"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M813.4 567a2 2 0 0 0-1.2-1.8l-24.6-12.6c-1.2-.6-2.3.5-2.3 1.7v31.2c0 .4.1.7.6 1h.4l.3.2h2.4l.2-.1.3-.1.1-.1.1-.1.1-.1.1-.1v-.1l.1-.1v-.4l.1-26.7 18.3 9.3.3.3v.4l.2 10.6v.2l.2.3h.1l.1.1h.2l.1.1h.1l.1.1h.4l.2.1h2.2l.1-.2h.6l.2-.2V567z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M789.4 563.5l-1.5.4c-.7 0-1.3-.2-1.8-.5-.4-.2-.6-.5-.7-.8v23.2c0 .3.2.7.6.9.5.3 1.2.4 1.8.4.6 0 1 0 1.5-.3s.6-.7.6-1v-23c0 .2-.2.4-.5.7zm23.3 11.8l-1.4.4c-.7 0-1.4-.2-1.9-.5-.4-.2-.5-.4-.6-.8l-.1 29.4c0 .3.3.6.6.8.5.3 1.2.5 1.9.5.5 0 1 0 1.4-.4.6-.3.7-.6.7-1v-29.1c0 .3-.1.4-.6.7z"/>
    </g>
    <path fill="#FFF" d="M638 353.5a11 11 0 0 0-10.3-11 9.6 9.6 0 0 0-10.2 10.9c-8.2.2-14.7 6.9-14.7 15.5 0 9.2 7.3 17 16.2 17.5a15 15 0 0 0 16.2-15.4c0-3.2-.8-6-2.4-8.7a10 10 0 0 0 5.2-8.8z" opacity=".7"/>
    <path fill="#FFF" d="M695 371.2a5 5 0 0 1-5.3 5c-3-.2-5.3-2.7-5.3-5.7s2.4-5.2 5.3-5.1c3 .3 5.3 2.8 5.3 5.8z" opacity=".3"/>
    <path opacity=".5" fill="#DADADA" d="M653 430.8c4-3 6.4-8 6.4-13.6 0-10.1-8-18.9-18-19.5a16.7 16.7 0 0 0-16.8 10.5 17 17 0 0 0-13 16.8c0 8.9 6.1 16.6 14.2 18.8v1c0 10.1 8 18.8 18 19.4 10 .7 18.1-7 18.1-17.2 0-6.6-3.5-12.7-9-16.2z"/>
    <path fill="#FFF" d="M666.3 422a16 16 0 0 1-17.2 16.4c-9.4-.6-17-8.9-17-18.5s7.6-17 17-16.4c9.5.7 17.2 9 17.2 18.6z" opacity=".6"/>
    <path fill="#DADADA" d="M694.2 393.8c0 5-3.9 8.6-8.8 8.3-4.8-.3-8.6-4.4-8.6-9.3s4-8.6 8.6-8.3c5 .3 8.8 4.4 8.8 9.3z" opacity=".3"/>
    <path opacity=".5" fill="#DADADA" d="M659 411.1a17 17 0 0 0 17.1 18.3h1.3a9 9 0 0 0 8.5 12.7c5.5 0 10.2-4.3 10.6-9.7a9 9 0 0 0-6-9.2c3-3.2 5-7.2 5.2-11.6.8-10-6.9-18.2-17-18.3-10-.2-18.9 7.8-19.7 17.8z"/>
    <path fill="#FFF" d="M689.8 418c0 7.7-6.2 13.6-13.8 13-7.6-.4-13.7-7-13.7-14.7s6.1-13.6 13.7-13.2c7.6.6 13.8 7.2 13.8 15z" opacity=".5"/>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M760.7 596.6v1l.2.6.2.3h.1l.2.3h.2l3.8 2.3.6.6.3 1v6c0-.1 0 1 1.5 2 .8.6 2 .8 3.2 1a7 7 0 0 0 4-1c.8-.4 1.4-1 1.5-1.7v-10.4c0-1.8-1-3.3-2.3-4l-7.3-4.4h-.3l-.3-.2H765l-.1.1-.2.1-.2.1-.2.1-.1.1-.3.2-.2.1s-.2 0-.2.2l-.2.2s-.2 0-.2.2l-.2.3h-.1l-.1.2-.1.1-.1.1-.1.1-.2.2-.1.2-.1.1-.3.5v.2h-.2l-.2.4v.2c0 .2-.2.3-.2.3v.2l-.2.2v1.9c-.2-.1-.2 0-.2 0zm15.9 11.6zm-.1-.3zm-.1-.3s0 .1 0 0z"/>
      <path d="M769.4 591.5c-.8-.6-1.6-.5-2.7 0-.9.5-1.6 1.3-2.3 2.4a7.5 7.5 0 0 0-1.3 4c0 .9.3 1.6.9 2.1"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M796.6 576.7a2 2 0 0 0-1.2-1.8l-24.6-12.6c-1.2-.6-2.3.5-2.3 1.7v31.2c0 .4.1.7.6 1h.4l.3.2h2.5l.2-.1.2-.1h.1l.1-.1.1-.1.1-.1.1-.1v-.1l.1-.1v-.4l.1-26.7 18.3 9.3.3.3v.4l.1 10.6v.2h.1l.2.3h.1l.1.1h.2l.1.1h.1l.1.1h.4l.2.1h2l.2-.2h.6l.2-.2v-12.9z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M772.6 573.2l-1.5.4c-.7 0-1.3-.2-1.8-.5-.4-.2-.6-.5-.7-.8v23.2c0 .3.2.7.6.9.5.3 1.1.5 1.8.5.6 0 1-.1 1.5-.4.5-.3.6-.7.6-1v-23c0 .2-.2.4-.5.7zM796 585l-1.5.4c-.6 0-1.3-.2-1.8-.5-.4-.2-.6-.4-.7-.8v29.4c0 .3.2.6.6.8.5.3 1.2.5 1.8.5.6 0 1.1 0 1.5-.4.6-.3.7-.6.7-1v-29.1c0 .3-.2.4-.6.7z"/>
    </g>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M744.5 605.2v1.1l.2.5.2.3v.1l.3.2.2.1 3.7 2.2.7.7.3.9v6s-.1 1 1.5 2.1a7.5 7.5 0 0 0 7.2 0c.8-.5 1.4-1.1 1.5-1.8v-10.4c0-1.7-1-3.2-2.3-4l-7.3-4.3-.3-.1-.3-.1h-1.4c-.2 0-.2 0-.3.2h-.1l-.2.2h-.1l-.3.2-.2.1-.1.1-.1.1-.2.2-.2.2v.1l-.3.2v.1l-.2.1v.2h-.2v.2c0 .2-.2 0-.2.2l-.1.2h-.1c0 .2-.3.4-.3.5l-.1.2-.1.1-.2.3-.1.2-.1.3-.1.3-.1.2v1.9h-.2zm15.9 11.7zm-.1-.4s0 .1 0 0c0 .1 0 .1 0 0zm-.2-.2z"/>
      <path d="M753 600.1c-.7-.6-1.6-.5-2.6.1-.9.5-1.7 1.3-2.3 2.3a7.5 7.5 0 0 0-1.3 4c0 1 .3 1.7.9 2.2"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M780.3 585.4a2 2 0 0 0-1.1-1.8L754.6 571c-1.3-.6-2.3.5-2.3 1.7l-.1 31.3c0 .3.2.6.7 1h.3l.3.1h2.7l.2-.2h.2l.1-.2h.1l.1-.2v-.6l.2-26.6 18.2 9.3.3.3.1.3.1 10.6v.2l.1.1.2.2h.1l.1.2h.4v.2h2.9v-.1h.6l.1-.1.1-.1v-13z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M756.3 581.9l-1.4.4c-.7 0-1.4-.2-1.8-.5-.4-.2-.6-.5-.7-.9l-.1 23.3c0 .2.3.6.7.8.4.3 1.1.5 1.8.5.6 0 1-.1 1.4-.4.6-.3.7-.7.7-1v-23c0 .3-.2.6-.6.8zm23.4 12.5l-1.5.4c-.7 0-1.3-.2-1.8-.4-.4-.2-.6-.5-.7-1V623c0 .3.2.6.6.8.5.3 1.2.5 1.8.5.6 0 1 0 1.5-.4.5-.2.6-.6.6-1v-29.1c0 .2 0 .5-.5.7z"/>
    </g>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M728.5 614.4v1.1l.2.6.2.2v.1l.2.2.2.1 3.8 2.2.7.7.2.9v6s0 1 1.6 2.1a7.6 7.6 0 0 0 7.2 0c.7-.4 1.3-1.1 1.4-1.8v-10.4c0-1.7-1-3.2-2.3-4l-7.3-4.3-.3-.1-.3-.1H732.6l-.2.2h-.2c-.2 0 0 .2-.2.2s-.3.2-.4.3h-.2v.2h-.1l-.2.2-.2.2-.1.1-.2.2-.1.1-.1.1-.1.2-.1.1-.1.1-.2.2v.2h-.2l-.3.6v.2h-.2l-.2.3v.2l-.1.3-.1.3-.1.2-.1.6v1.2h-.1zm15.8 11.6zm0-.2zm-.3-.3s.1 0 0 0h.1z"/>
      <path d="M737 609.3c-.7-.5-1.6-.4-2.7.1-.8.5-1.6 1.3-2.3 2.3a7.5 7.5 0 0 0-1.2 4c0 1 .3 1.7.8 2.2"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M764.2 594.5a2 2 0 0 0-1.2-1.8l-24.5-12.6c-1.3-.5-2.3.5-2.3 1.8L736 613c0 .4.1.7.6 1h.4l.3.1h2.7l.3-.2h.2v-.2h.2v-.2l.2-.1v-27l18.3 9.3.3.3v.4l.2 10.5v.3l.3.2v.1l.2.1h.2v.1h.1l.1.1h.4l.2.1h1.8l.1-.1h.2l.1-.1h.7v-.7l.1-12.6z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M740.2 591c-.4.3-.9.4-1.5.5-.6 0-1.3-.2-1.8-.5-.4-.2-.6-.5-.7-.9v23.3c0 .3.2.6.6.8.5.3 1.2.5 1.8.5.6 0 1.1 0 1.5-.4.6-.3.7-.6.7-1v-23c0 .2-.1.5-.6.8zm23.4 12.7l-1.4.4c-.7 0-1.4-.2-1.8-.5-.4-.2-.6-.5-.7-.9l-.1 29.4c0 .3.3.7.7.9.4.2 1.1.4 1.8.4.6 0 1 0 1.4-.3.6-.3.7-.7.7-1v-29.2c0 .3-.2.6-.6.8z"/>
    </g>
    <path opacity=".3" fill="#B2B2B2" d="M655.3 465.4v.3l-.1.1-.1.2-.1.2-.1.3v.2l-.3.3c0 .1 0 .2-.2.3l-.4.4s-.2 0-.3.2l-.1.2-.3.1-.3.2-.8.4-.2.1-.6.2-.1.1-.4.1-.3.1-.5.1h-.3c-.3.2-.6.2-.9.2h-2.5v122h3.2l.2-.1.5-.1.3-.1.4-.1.2-.1.5-.2.2-.1.8-.4c.2 0 .2-.2.3-.2 0 0 .2 0 .3-.2l.2-.2s.2 0 .2-.2h.1l.3-.2.1-.1.2-.2.1-.1.2-.3.1-.1v-.1l.1-.3h.1v-1.1l.4-122-.1.2zm-.1 14.9zm0-.4c0-.1 0-.1 0 0z"/>
    <path opacity=".3" fill="#B2B2B2" d="M647.6 469.5c-3-1.7-3-4.6 0-6.4 1.4-.9 3.4-1.3 5.3-1.4a12 12 0 0 0-11 .1c-3 1.7-3 4.6 0 6.4 1.7 1 3.7 1.4 5.8 1.4l-.1-.1zm198 79.7a2 2 0 0 0-1.1-1.8l-24.6-12.6c-1.2-.6-2.3.5-2.3 1.7l-.1 14h-.2l-4.1-2.1-3.4-1.8s-.3 0-.4-.2l-1.4-.7-2.1-1.1-.5-.2h-.1c-.2 0-.4-.2-.5-.3h-.2c0-.2-.2-.2-.3-.3-.2 0-.4-.2-.5-.3h-.2c-1.3-.6-2.3.4-2.3 1.7l-.1 14.4-13.7-7c-1.2-.6-2.3.5-2.3 1.7v15.4l-14.5-7.4c-1.2-.6-2.3.5-2.3 1.7v14l-13.9-7c-1.3-.7-2.3.4-2.3 1.7L752 587l-13.6-7c-1.3-.6-2.3.4-2.3 1.7l-.1 26.9-1.5-.9h-.3l-.3-.2h-1.3l-.1.1-.2.1-.2.1-.2.1c-.2 0-.3.2-.4.3h-.2v.2h-.1l-.2.3s-.2 0-.2.2h-.1l-.2.2-.1.1-.1.1-.1.2-.1.1-.1.1-.2.2v.2l-.2.1-.3.5v.2h-.2l-.2.4v.1l-.1.3-.1.3-.1.2v.1l-.1.5v2.5l.2.6.2.3.2.2.2.1 3.8 2.2.7.7.2.9v6s0 1 1.6 2.1a8 8 0 0 0 3.1 1c1.6 0 3-.4 4-1 .8-.4 1.4-1.1 1.5-1.8v-10.3c0-1.8-1-3.3-2.3-4l-1-.7v-25l11.3 5.7v7.3l-1.4-.8-.3-.1-.3-.1h-1.4c-.2 0-.2 0-.3.2h-.1l-.2.2h-.1l-.3.3h-.2l-.1.1-.1.1-.2.2-.2.2v.1l-.3.2v.1l-.2.1v.2h-.2v.2c0 .2-.2 0-.3.2v.2h-.1c0 .2-.3.5-.3.5l-.1.2-.1.1-.2.3-.1.2-.1.3-.1.3-.1.2-.1.6v2.4l.2.5.2.3v.1l.3.2.2.1 3.7 2.2.7.7.3.9v6s-.1 1 1.5 2.1a7.5 7.5 0 0 0 7.2 0c.8-.5 1.4-1.1 1.5-1.8v-9.4h.6l.2.2h1.9l.1-.1h.2l.1-.1h.6l.1-.1v-7.3l1.2.8.7.6.3.9v6s0 1.1 1.5 2.2c.8.4 2 .7 3.2.8 1.5.1 3-.3 4-.8.8-.5 1.4-1.2 1.5-1.9v-9.8h.4l.3.1h2.2v-.2h.7l.1-.2v-8.1l2 1.1.6.7.3.9v6s0 1 1.6 2.1a7.6 7.6 0 0 0 7.2 0c.7-.4 1.3-1.1 1.4-1.8v-8.5h1.9l.1-.1h.2l.1-.1h.7v-.1l.2-.1v-.5l-.1-8 1.8 1 .7.7.3.8v6s-.1 1.1 1.5 2.2c.8.5 2 .8 3.2.8 1.5.1 3-.2 4-.8.8-.5 1.3-1.2 1.4-1.8v-9.5h.2l.1.1h.4l.2.1h2l.1-.2h.7v-7.3l1.2.7.7.7.3.9v6s-.1 1 1.5 2.1a7.5 7.5 0 0 0 7.2 0c.8-.5 1.4-1.1 1.5-1.8v-9.8h.4l.2.1h1.9v-.1h.9l.1-.2h.1v-13a2 2 0 0 0-1.2-1.9l-.3-.2c-.3 0-.8-.3-1.4-.6l-3.1-1.7c-.3 0-.6-.3-.9-.5h-.2v-11.9l18.3 9.4.2.2.1.4.1 10.6v.2h.1l.2.3h.1l.1.2h.4l.1.2h2.7v-.1h.7l.2-.1V564.4l.3-15.2zm-101.3 77c0-.2 0-.2 0 0zm0-.4zm-.2-.2s0-.1 0 0c0-.1 0-.1 0 0zm14-22.5l-1.1-.6v-7.7l2.3 1.2.3.3v8.5a4 4 0 0 0-1.6-1.7zm2 13.2zm.2.2s0 .1 0 0c0 .1 0 .1 0 0zm0 .4v.1zM767 590h-.3l-.3-.2h-1.3l-.1.1-.2.1-.2.1-.2.1-.1.1-.3.2-.2.1v.1l-.2.1-.2.2s-.2 0-.2.2l-.3.3-.1.2-.1.2h-.1l-.1.1-.2.2-.1.1-5.3-2.7v-12.1l11.4 5.8v7.8l-1.3-1zm7.3 4.4l-1-.5v-8.2l2 1 .3.4.1.3v8.5a3 3 0 0 0-1.4-1.5zm2 13.2s0 .1 0 0l.2.1v.1l-.1-.2zm.2.3zm.2.4c-.1 0 0 0 0 0zm7-28h-.2l-.3-.2H782l-.1.1-.2.1-.2.1-.2.1-.1.1-.3.2-.2.1v.1l-.2.1-.2.2s-.2 0-.2.2l-.2.3h-.1l-.1.2-.1.2h-.1l-.1.1-.2.2-.1.2-.1.1-.3.5-5.4-2.8v-11.8l12 6.2v6.4l-1.4-1zm7.4 4.4l-1-.5v-6.8l1.5.7.3.3v7.1c-.1-.3-.4-.6-.8-.8zm2.1 13.2s0 .1 0 0l.1.1v.1l-.1-.2zm.1.3zm.2.5v-.2c-.1 0-.1.2 0 .2zm6.3-27.5h-.3l-.2-.2h-1.4v.1l-.3.1-.2.1-.2.1v.1c-.2 0-.3 0-.3.2h-.2l-.1.2h-.1l-.2.3s-.2 0-.2.2h-.1l-.2.2-.1.1-.1.1v.2l-.2.1v.1l-.3.2v.2l-.2.1-.3.5v.2h-.1l-4.5-2.2V559l11.3 5.8v7.3l-1.5-.9zm7.3 4.3l-1-.5v-7.7l2.3 1.1.3.3v8.6c-.2-.7-.8-1.4-1.6-1.8zm2.1 13.3h.1zm.2.3l.1.2v-.2zm.1.3zm6.6-26.8l-.3-.1-.3-.1h-1.4c-.2 0-.2 0-.2.2h-.2l-.2.2h-.1l-.3.2-.2.1-.1.1-.1.1-.2.2-.2.2v.1l-.3.2v.1l-.2.1v.2h-.2v.2c0 .2-.1 0-.2.2h-.1l-5.3-2.6V550l11.4 5.8v7.8l-1.3-1zm7.4 4.3l-1.1-.6v-8.2l2.1 1.1.3.3.1.4v8.4l-1.4-1.4zm2 13.1c0 .1 0 .1 0 0zm.2.3c0 .1 0 .1 0 0 0 .1 0 .1 0 0zm0 .5v-.2.2z"/>
    <g stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#FC0" d="M908.2 390.6c-.8-.5-22 7.3-22.9 9-2.6 4.3 2.8 7 6.2 6 3.4-1 25.2-7.7 16.7-15z"/>
      <path fill="#DADADA" d="M877.6 407.6c1.6-4 3.6-6.4 12.4-9.6l1 2.6c-12 4.3-11 11.3-11 13.7V512c0 .3-.2.6-.5.8-.6.5-1.7.5-2.4 0-.2-.2-.4-.5-.4-.8v-93c-.1-1-.6-7.5 1-11.4z"/>
      <path fill="#DADADA" d="M906.8 389.6c-8.6-5-20.3 7.8-21.4 9.6-1 2 1.7 3.4 4.9 2.4s25.2-7 16.5-12z"/>
    </g>
    <path opacity=".3" fill="#878787" stroke="#878787" stroke-miterlimit="10" d="M978.7 457.7l-.1-.1-.6-.7c-.7-.6-1.6-.8-2.9-1-.8 0-1.7 0-2.8.2-6.1.8-14.3 5-15.6 6l-1.5.4c-4.5 2.2-14.4 8-15.2 8.5l-63.1 38-.3 1c0 .3.4.4.6.6s.9.2 1.2.1l.9-.5 63.3-38.1 11.7-7.7.4-.2v.3c.1.9 1.3 1.5 2.6 1.6h1.4c10.5-1.5 17.6-3.6 19.7-5.8.7-.9.8-1.7.3-2.6z"/>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M1298 269.5l107.8-53.5-9.5-23.1-30.6-2.8.7-11-31-.9v-10.4l-40.4-3-9.4 4.3-67-32.2-22.8 11.5-3.7 17.9z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1153.4 152.8l28.4-16.7 59.2 33.6-29.2 16.5z"/>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M1299.5 188.7l-58.3 33.9v-33.7l58.4-33.8zm-29.2-41.3l-58.4 34 29.3 7.5 58.4-33.8z"/>
      <path d="M1298.4 162.5l-54 31.5v-4.6l54-31.4zm30.2 42.8l-58.4 33.9v-33.7l58.5-33.8z"/>
      <path d="M1327.4 179l-54 31.6V206l54-31.4zm30.2 57.8l-58.4 33.9v-48.3l58.5-33.8z"/>
      <path d="M1356.4 196l-54 31.4V223l54-31.4z"/>
    </g>
    <path opacity=".3" fill="#B2B2B2" d="M1328.6 205.3l-58.4 33.9v-33.7l58.5-33.8z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1176.7 148.6c0 .1 0 .1 0 0v.7h.2v.3s0 .2.2.2c0 0 0 .2.2.2s0 .2 0 .3l.3.2.2.2.1.1.2.2.2.1h.1l.6.3.2.1.5.2h.5l.2.2h.6l.8.2h3l.4-.1h.2l.4-.1h.3l.7-.2.3-.1.2-.1.4-.3c1.3-.8 2-1.7 2-2.7l-.2-72.1c0 1-.7 2-2 2.7l-.4.3h-.2c-.1.2-.2.2-.3.2l-.7.2h-.2l-.4.2h-.3l-.3.1H1181.1l-.3-.1-.4-.1-.2-.1-.3-.1-.2-.1-.5-.2-.2-.1-.6-.3-.3-.2-.2-.2-.1-.2-.2-.2-.3-.3-.2-.3-.2-.1-.1-.2-.1-.2-.1-.2-.1-.2V76.1l.2 72.5zm-.1-59.8zm.1.4c0-.1 0-.1 0 0 0-.1 0 0 0 0z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1178.4 73.8c-2.6 1.4-2.6 3.8 0 5.4 2.5 1.4 6.7 1.4 9.2 0s2.6-3.9 0-5.4a10.4 10.4 0 0 0-9.2 0z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1299.5 188.7l-58.3 33.9v-33.7l58.4-33.8zm58.1 48.1l-58.4 33.9v-48.3l58.5-33.8z"/>
    <path fill="#878787" d="M1461.8 155c.4.2 1 .4 1.2.7 9.3 6.8 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.7-1.2-4 1.9-12.3 6.3-13.4 6.8-.8.2-1.8 0-2.7-.6-.7-.5-1.3-1.1-.9-2l13.7-7c-7.5-6.5-5.9-15.5 4-20.6a38.2 38.2 0 0 1 35.2 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1413.3 182.6c-.3 1.5-4 2.3-5.5-.4v-22.4l5.5.3s.2 20.4 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1438.2 136.8a25.7 25.7 0 0 1-27.5 26.2c-15.2-.8-27.5-14-27.5-29.6s12.4-27.1 27.5-26.3a30 30 0 0 1 27.5 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1411 108h-3.1a39 39 0 0 1 7.8 23.4c0 12-5.6 22.3-14.4 28.5 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1270.1 214.9v-9.4l-29-7.5v-9.1l-29.2-7.5v4.8l-58.5-33.4v33.4l58.6 34 87.2 50.5v-48.3z"/>
    <g>
      <path fill="#878787" d="M1365.5 279.4l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2l-13.4 6.9c-.8.2-1.9 0-2.7-.6-.7-.5-1.3-1.2-.9-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1317 307.2c-.5 1.4-4.1 2.3-5.7-.4v-22.5l5.6.4s.3 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1341.9 261.4a25.7 25.7 0 0 1-27.6 26.2c-15.2-.9-27.4-14.1-27.4-29.6s12.3-27.2 27.4-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1314.5 232.7h-3c5 6.6 7.8 14.7 7.8 23.3a34 34 0 0 1-14.4 28.4c3 1.4 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.8 28.8 0 0 0-26.6-28.7z"/>
    </g>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1299.3 164l-58.4 34 29.3 7.5 58.5-33.8zm29.1 16.9l-58.4 33.9 29.2 7.6 58.5-33.8z"/>
  </g>
  <g>
    <path fill="#878787" d="M1052.7 184.2c.4.2.9.4 1.2.7 9.3 6.8 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.5 6.8-.7.2-1.8 0-2.6-.6-.7-.5-1.3-1.1-1-2 1.1-.6 9.7-4.8 13.7-7-7.5-6.5-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1004.2 212c-.4 1.4-4 2.2-5.6-.5v-22.4l5.6.3s.2 20.4 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1029 166.1a25.7 25.7 0 0 1-27.5 26.2c-15.2-.8-27.5-14.1-27.5-29.6s12.4-27.1 27.5-26.3a30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1001.8 137.4h-3c5 6.6 7.8 14.7 7.8 23.3 0 12-5.7 22.3-14.4 28.5 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    <path fill="#878787" d="M1123.1 224c.4.2.9.4 1.2.7 9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.5 6.8-.7.2-1.8 0-2.6-.5-.7-.5-1.3-1.2-1-2 1.1-.6 9.7-4.8 13.7-7-7.5-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1074.6 251.6c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4s.2 20.5 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1099.5 205.9a25.7 25.7 0 0 1-27.6 26.2c-15.2-.9-27.5-14.1-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1072.2 177.1h-3c5 6.7 7.8 14.7 7.8 23.4 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4c.1-15-11.8-27.9-26.6-28.8z"/>
    <path fill="#878787" d="M1067.1 246.8l1.2.7c9.3 6.9 8.2 16.8-2.4 22.1a39.2 39.2 0 0 1-34.7-1.2l-13.5 6.8c-.7.2-1.8 0-2.6-.6-.7-.5-1.3-1.1-1-2l13.7-6.9c-7.5-6.6-5.8-15.6 4.2-20.7a38.5 38.5 0 0 1 35.1 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1018.6 274.4c-.4 1.5-4 2.3-5.6-.3v-22.5l5.6.4s.2 20.4 0 22.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1043.5 228.6a25.7 25.7 0 0 1-27.6 26.2c-15.2-.8-27.4-14-27.4-29.5s12.3-27.2 27.4-26.4a30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1016.2 200c-1-.2-2-.2-3 0a38 38 0 0 1 7.8 23.2c0 12-5.7 22.3-14.4 28.5 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    <defs>
      <path id="ca" d="M818.6 281.5l42.3-24.5 44.1 25.4-42.4 24.6z"/>
    </defs>
    <clipPath id="cb">
      <use xlink:href="#ca" overflow="visible"/>
    </clipPath>
    <g clip-path="url(#cb)">
      <path opacity=".3" fill="#878787" d="M852.6 288.4l-2-4.2 2 4.2 5 .2-5-.2m26 1l13 .6-13-.6m3.3-20.3l-39-1.7-.4.6 6.1 13.4-2 1.2-3.7-.6-1.8 1 1.8 3.7 5.8.9 1.7-1-.7-1.8.5-.3 2 4.3 5.7.2.8 1.7-6.6 3.8-3.6-.6-1.7 1 1.7 3.7 5.9 1 1.7-1.2-.9-1.7 9.7-5.6 11.7.4 1.7-1.8 12.9.6.4-.5-9.7-20.7"/>
    </g>
    <path fill="#B2B2B2" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M853.1 281.4l8.9-7.6-1.5-5-30.1-17.4-13.5 11.6 1.5 5 11 6.3v9.5l-3.4 1.8v2.5l6 3.3 5-3v-2.5l-2.5-1.6v-7l13.5 7.9v9.4l-3.1 1.8v2.5l5.7 3.3 5.2-3v-2.5l-2.7-1.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M838 241.2l-30.6 26.5 33.4 19.4 30.6-26.4z"/>
    <path d="M821.4 262.7c0 .1 0 .3-.2.4l-2 1.7-.5.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.2 1.3c.1 0 .2.1.2.3zm4.3-3.7l-.2.5-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8.6-.2.4.1 2.2 1.3c.2 0 .2.2.2.3zm-2.7 8.5h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm-10.8-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3zm6.5.7l.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.3-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8zm9 2.7h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm0-6.2l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2zm4.3 2.6l-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8-.6.2zM836.8 249.8s0 .2-.2.3l-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3c.1 0 .2 0 .2.3zm4.2-3.7c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.3l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.5-.2h.4l2.2 1.3c.2.1.2.2.2.3zm-2.7 8.5l-.3-.1-2.3-1.3-.1-.3.1-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8a1 1 0 0 1-.6.2zm-.3 2.4l.5-.1h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.2-.2-.3.2-.4 2-1.7zm-10.8-3.3l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4zm6.4.8l.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm9.1 2.6h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.3.1 2.3 1.3.1.2-.1.4-2 1.8-.6.1zm0-6.1c-.2 0-.3 0-.4-.2l-2.2-1.2-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.3 1.3.1.3-.1.4-2 1.7-.6.2zm4.3 2.5h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zM838 272.2l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3c.2.1.2.2.2.3zm4.3-3.6l-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.2.4.1 2.2 1.3.2.3zm-2.7 8.4h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8zm-10.8-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.3-.1-2.3-1.3-.1-.2.1-.4zm6.4.8l.6-.3.3.1 2.3 1.3.1.3-.1.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8zm9.2 2.6h-.5l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.2-6.2l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7c-.1.2-.4.2-.6.2zm4.3 2.6l-.3-.1-2.3-1.3-.1-.3.1-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7c0 .2-.3.2-.6.2zM853.3 259.3s0 .3-.2.3l-2 1.8-.6.2-.3-.1-2.3-1.3-.1-.3.1-.3 2-1.8.6-.2.4.1 2.2 1.3c.2 0 .2.2.2.3zm4.3-3.7l-.1.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.3 1.3.1.3zM855 264h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.3.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8-.5.2zm-.4 2.6l.5-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.3l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7zm-10.8-3.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4zm6.4.8l.5-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm9.1 2.7l-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2zm-.1-6.3h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7c-.1.2-.4.2-.6.2zm4.3 2.6h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7c-.1.2-.3.2-.6.2z" fill="#4A4A49"/>
    <defs>
      <path id="cc" d="M759.5 299.3l42.3-24.6 44.1 25.5-42.3 24.6z"/>
    </defs>
    <clipPath id="cd">
      <use xlink:href="#cc" overflow="visible"/>
    </clipPath>
    <g opacity=".3" clip-path="url(#cd)">
      <path fill="#878787" d="M793.4 306.1l-2-4.1 2 4.1 5 .2-5-.2m26.1 1l12.9.7-12.9-.6m3.3-20.4l-39-1.6-.5.6 6.2 13.3-2.2 1.3-3.6-.6-1.7 1 1.7 3.7 5.9.9 1.7-1-.8-1.8.5-.3 2 4.3 5.8.2.7 1.6-6.6 3.9-3.5-.6-1.8 1 1.8 3.7 5.8.9 1.7-1-.8-1.8 9.7-5.7 11.6.5 1.7-1.8 12.9.6.5-.5-9.7-20.8"/>
    </g>
    <path fill="#B2B2B2" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M794 299.1l8.8-7.6-1.4-4.9-30.1-17.4-13.5 11.6 1.5 5 11 6.3v9.4l-3.3 1.8v2.5l5.7 3.4 5.3-3v-2.6l-2.7-1.4V295l13.7 8v9.4l-3.3 1.8v2.5l5.9 3.3 5.2-3v-2.5L794 313z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M778.9 259l-30.5 26.5 33.3 19.5 30.6-26.5z"/>
    <path d="M762.4 280.5l-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.1h.4l2.2 1.3.2.3zm4.2-3.7l-.2.4-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2zm-2.6 8.5l-.5-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.1h.4l2.2 1.3.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zm-.5 2.5l.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.7-3.4l2-1.7.6-.2.3.1 2.3 1.2.1.3-.1.4-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3c0-.2 0-.3.2-.4zm6.4.8l.6-.2.4.1 2.2 1.2.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm9 2.7l-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7a1 1 0 0 1-.6.2zm-.1-6.3h-.3l-2.3-1.3-.1-.3.1-.4 2-1.7.6-.2.4.1 2.2 1.2.2.3c0 .1 0 .3-.2.4l-2 1.7c0 .2-.3.2-.6.2zm4.4 2.6h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7c0 .2-.3.2-.5.2zM777.7 267.5c0 .1 0 .3-.2.4l-2 1.7-.5.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.2 1.3.2.3zm4.3-3.6l-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8.6-.2.4.1 2.2 1.3.2.3zm-2.7 8.4h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.3l2-1.8zm-10.8-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3zm6.5.7l.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.3-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8zm9 2.8c-.2 0-.3 0-.4-.2l-2.2-1.2-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zm-.1-6.3l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7c-.1.2-.3.2-.6.2zm4.3 2.6l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.3l-2 1.8c-.1.2-.3.2-.6.2zM778.9 290l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm4.3-3.7c0 .1 0 .3-.2.4l-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2zm-2.8 8.5l-.4-.1-2.2-1.2-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.2.2.3c0 .1 0 .3-.2.4l-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.6-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.2-.2.4-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4zm6.3.7l.6-.2.4.1 2.2 1.3.2.2-.2.4-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm9.1 2.7l-.4-.1-2.2-1.3-.2-.2c0-.1 0-.3.2-.4l2-1.8.6-.1h.3l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.5.2zm0-6.2h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.3.1 2.2 1.3.2.2c0 .1 0 .3-.2.4l-2 1.8-.5.1zm4.2 2.6h-.3l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2.4.1 2.2 1.2.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zM794.3 277l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3zm4.3-3.6l-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.2.4.1 2.2 1.3.2.3zm-2.8 8.4h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8zm-10.6-3.3l2-1.8.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.3-.1-2.3-1.3-.1-.2.1-.4zm6.2.7l.7-.2.3.1 2.3 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2s0-.3.2-.4l2-1.8zm9.1 2.7h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2zm0-6.1l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2zm4.3 2.6l-.3-.1-2.3-1.3-.1-.3.1-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7a1 1 0 0 1-.6.2z" fill="#4A4A49"/>
    <defs>
      <path id="ce" d="M861.9 308.8l42.3-24.6 44.1 25.5-42.3 24.6z"/>
    </defs>
    <clipPath id="cf">
      <use xlink:href="#ce" overflow="visible"/>
    </clipPath>
    <g opacity=".3" clip-path="url(#cf)">
      <path fill="#878787" d="M895.8 315.5l-2-4 2 4 5 .2-5-.2m26.1 1.2l12.9.6-12.9-.6m3.3-20.4l-39-1.6-.5.6 6.1 13.3-2 1.3-3.7-.6-1.8 1 1.8 3.7 5.8.9 1.8-1-.8-1.8.5-.3 2 4.3 5.8.2.7 1.6-6.6 3.9-3.6-.6-1.7 1 1.7 3.7 5.9.9 1.7-1-.8-1.8 9.7-5.7 11.6.5 1.7-1.8 12.9.6.5-.5-9.7-20.8"/>
    </g>
    <path fill="#B2B2B2" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M896.4 308.6l8.8-7.6-1.5-4.9-30.1-17.4-13.5 11.6 1.6 4.9 11 6.4v9.4l-3.3 1.9v2.5l5.7 3.3 5.3-3V313l-2.7-1.5v-7l13.6 7.9v9.4l-3.2 1.8v2.5l5.8 3.3 5.2-3V324l-2.7-1.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M881.3 268.5L850.7 295l33.4 19.4 30.6-26.4z"/>
    <path d="M864.8 290l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3zm4.2-3.7l-.2.4-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2zm-2.7 8.5l-.4-.1-2.2-1.2-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.3 2.5l.5-.2.4.1 2.2 1.2.2.3-.2.4-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm-10.9-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.2s0 .3-.2.4l-2 1.8-.6.2-.3-.1-2.3-1.3-.1-.3.1-.4zm6.5.7l.6-.2.3.1 2.3 1.3.1.2-.1.4-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm9 2.7l-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.1h.4l2.2 1.3.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zm-.1-6.3h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2c0 .1 0 .3-.2.4l-2 1.8-.6.1zm4.3 2.6h-.3l-2.3-1.3-.1-.3.1-.4 2-1.7.6-.2.4.1 2.2 1.2.2.3c0 .1 0 .3-.2.4l-2 1.8-.6.1zM880.1 277c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.3l-2.3-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm4.2-3.6l-.1.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2s0-.3.2-.4l2-1.8.6-.2.3.1 2.3 1.3.1.3zm-2.6 8.4h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.5.2zm-.4 2.5l.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.3-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8zm-10.8-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2.2-.4zm6.5.7l.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8zm9 2.7h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zm-.1-6.2l-.4-.1-2.2-1.3-.2-.2s0-.3.2-.4l2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2zm4.3 2.6l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2zM881.3 299.5l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm4.3-3.6l-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3zm-2.8 8.4h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.2-.2.4-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.6-3.4l2-1.7.6-.2.3.1 2.3 1.3.1.3-.1.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3c0-.2 0-.3.2-.4zm6.3.8l.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm9 2.7l-.4-.1-2.2-1.2-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2zm0-6.2l-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8c-.2.2-.4.2-.6.2zm4.4 2.6l-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.3.1 2.2 1.3.2.2c0 .1 0 .3-.2.4l-2 1.8-.5.1zM896.6 286.5c0 .1 0 .3-.2.4l-2 1.8-.5.1h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.3.1 2.2 1.3.2.2zm4.4-3.6l-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2c0-.1 0-.3.2-.4l2-1.8.6-.1h.4l2.2 1.3c0 .1 0 .2.2.3zm-2.8 8.4h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.4.1 2.2 1.2.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2s0-.3.2-.4l2-1.8zm-10.7-3.3l2-1.8.6-.1h.4l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.2c0-.2 0-.3.2-.4zm6.4.7l.5-.1h.4l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.3-.1-2.2-1.3-.2-.2c0-.1 0-.3.2-.4l2-1.8zm9 2.8c-.2 0-.3 0-.4-.2l-2.2-1.2-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm0-6.3l-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.1h.4l2.2 1.3.2.3-.2.4-2 1.7c-.2.2-.4.2-.6.2zm4.3 2.6l-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7c-.2.2-.4.2-.6.2z" fill="#4A4A49"/>
    <defs>
      <path id="cg" d="M802.7 326.6l42.5-24.6 44 25.5L847 352z"/>
    </defs>
    <clipPath id="ch">
      <use xlink:href="#cg" overflow="visible"/>
    </clipPath>
    <g opacity=".3" clip-path="url(#ch)">
      <path fill="#878787" d="M836.7 333.4l-2-4.1 2 4.1 5.1.2-5-.2m26 1l12.9.6-12.9-.5m3.3-20.4l-39-1.6-.5.5 6.2 13.4-2.1 1.2-3.7-.5-1.7 1 1.7 3.7 5.9.8 1.7-1-.8-1.7.5-.3 2 4.3 5.8.2.8 1.6-6.7 3.9-3.5-.6-1.8 1 1.8 3.7 5.8.8 1.8-1-.9-1.7 9.7-5.7 11.6.5 1.7-1.8 13 .5.4-.5-9.7-20.7"/>
    </g>
    <path fill="#B2B2B2" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M837.3 326.4l8.8-7.6-1.4-4.9-30.2-17.5-13.4 11.7 1.4 4.9 11 6.4v9.4l-3.2 1.8v2.5l5.8 3.4 5.1-3v-2.6l-2.5-1.5v-7l13.5 7.8v9.4l-3.2 1.9v2.5l5.8 3.2 5.3-3v-2.4l-2.8-1.6z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M822.2 286.3l-30.6 26.5 33.4 19.5 30.6-26.6z"/>
    <path d="M805.6 307.8l-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3zm4.4-3.7l-.3.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm-2.9 8.5l-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8-.6.2zm-.4 2.4l.6-.1h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.7-3.3l2.1-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.2 0-.3.2-.4zm6.4.8l.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm9 2.7l-.3-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.5-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8-.6.2zm0-6.2c-.1 0-.2 0-.3-.2l-2.2-1.2-.2-.3c0-.1 0-.3.2-.4l2-1.7.5-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7c0 .2-.4.2-.6.2zm4.4 2.5h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7c-.1.2-.4.2-.6.2zM821 294.8l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3zm4.3-3.7l-.2.4-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2zm-2.8 8.5l-.4-.1-2.2-1.2-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.2-.2.4-2 1.8-.6.1h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.7-3.4l2-1.7.6-.2.4.1 2.2 1.3.2.2s0 .3-.2.4l-2 1.8-.6.2-.3-.1-2.3-1.3-.1-.3.1-.4zm6.4.8l.6-.2.3.1 2.3 1.3.1.2-.1.4-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm9 2.7l-.4-.1-2.2-1.3-.2-.2.2-.4 2-1.8.6-.1h.4l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2zm0-6.2l-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2s0 .3-.2.4l-2 1.8c-.1.2-.4.2-.6.2zm4.3 2.5h-.3l-2.3-1.3-.1-.3.1-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2c0 .1 0 .3-.2.4l-2 1.8-.6.1zM822.2 317.3s0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3zm4.2-3.7c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.3l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.5-.2h.4l2.2 1.3.2.3zm-2.7 8.4h-.3l-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7a1 1 0 0 1-.6.2zm-.3 2.6l.5-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.3l-2.3-1.3-.1-.3.1-.4 2-1.7zm-10.8-3.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4zm6.4.8l.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm9 2.7l-.3-.1-2.2-1.3-.2-.3s0-.3.2-.3l2-1.8.6-.2.3.1 2.3 1.3.2.3-.2.3-2 1.8a1 1 0 0 1-.6.2zm0-6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm4.3 2.6h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zM837.6 304.3l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm4.2-3.6l-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3zm-2.7 8.4h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.2-.2.4-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.7-3.4l2-1.7.6-.2.3.1 2.3 1.3.1.3-.1.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4zm6.4.8l.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7zm9 2.7h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7a1 1 0 0 1-.6.2zm-.1-6.1l-.3-.1-2.3-1.3-.1-.3.1-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2s0 .3-.2.4l-2 1.8-.6.2zm4.4 2.5h-.4l-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.3.1 2.3 1.3.1.2-.1.4-2 1.8-.6.1z" fill="#4A4A49"/>
    <defs>
      <path id="ci" d="M846.3 352l42.4-24.6 44 25.4-42.3 24.7z"/>
    </defs>
    <clipPath id="cj">
      <use xlink:href="#ci" overflow="visible"/>
    </clipPath>
    <g opacity=".3" clip-path="url(#cj)">
      <path fill="#878787" d="M880.3 358.8l-2-4.2 2 4.2 5.1.2-5-.2m26 1.1l12.9.6-12.9-.6m3.3-20.4l-39-1.7-.5.6 6.2 13.4-2.1 1.2-3.7-.6-1.7 1 1.7 3.7 5.9.9 1.7-1-.8-1.8.5-.3 2 4.3 5.8.2.8 1.7-6.7 3.8-3.5-.6-1.7 1 1.7 3.7 5.8.9 1.8-1-.9-1.8 9.7-5.6 11.6.4 1.8-1.8 12.8.6.5-.5-9.7-20.7"/>
    </g>
    <path fill="#B2B2B2" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M880.9 351.8l8.8-7.5-1.5-5-30-17.4-13.5 11.6 1.4 4.9 11 6.3v9.5l-3.3 1.9v2.5l5.8 3.2 5.2-3v-2.4l-2.6-1.6v-7l13.6 7.8v9.5l-3.2 1.8v2.4l5.8 3.4 5.2-3v-2.5l-2.7-1.6z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M865.8 311.7l-30.6 26.5 33.3 19.4 30.6-26.5z"/>
    <path d="M849.2 333.1l-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm4.2-3.5s0 .3-.2.3l-2 1.8-.6.2-.3-.1-2.3-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3c.1 0 .2 0 .2.3zm-2.7 8.4h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7a1 1 0 0 1-.6.2zm-.4 2.5l.6-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.7-3.5l2-1.7.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3zm6.4 1l.6-.3.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8zm9 2.6h-.3l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.5.2zm0-6.2l-.4-.1-2.2-1.3-.2-.3s0-.3.2-.3l2-1.8.6-.2.3.1 2.2 1.3.2.3s0 .3-.2.3l-2 1.8-.5.2zm4.4 2.6l-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2zM864.6 320.2l-.2.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3s0-.3.2-.4l2-1.7.6-.2.4.1 2.2 1.3.2.3zm4.2-3.6l-.2.4-2 1.7-.6.2h-.4l-2.2-1.4-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.4zm-2.7 8.4h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2-.2.4-2 1.8a1 1 0 0 1-.6.2zm-.4 2.5l.6-.1h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.2-.2-.3.2-.4 2-1.8zM855 324l2-1.6.5-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.3l-2.2-1.3-.2-.3.2-.4zm6.4 1l.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7zm9 2.6h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2c0 .1 0 .3-.2.4l-2 1.8a1 1 0 0 1-.6.1zm-.1-6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.6.2zm4.4 2.6l-.3-.1-2.3-1.2-.1-.3.1-.4 2-1.8.6-.1h.4l2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2zM865.7 342.7c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3c.1 0 .2.1.2.3zm4.3-3.7c0 .2 0 .4-.2.5l-2 1.7-.6.2-.3-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8.5-.2.4.1 2.2 1.3.2.3zm-2.7 8.5h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7-.5.2zm-.4 2.5l.5-.2.4.1 2.2 1.3.2.3s0 .3-.2.3l-2 1.8-.6.2-.3-.1-2.3-1.3-.1-.3.1-.3 2-1.8zm-10.7-3.3l2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3c0-.1 0-.2.2-.3zm6.3.7l.6-.2.4.1 2.2 1.3.2.3s0 .3-.2.4l-2 1.7-.6.2-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8zm9.2 2.7h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2zm-.1-6.2l-.4-.1-2.2-1.3-.2-.3s0-.2.2-.3l2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.4-2 1.7a1 1 0 0 1-.6.2zm4.3 2.6l-.4-.1-2.2-1.3-.2-.3.2-.3 2-1.8.6-.2.4.1 2.2 1.3.2.3-.2.3-2 1.8-.6.2zM881 329.8l-.1.3-2 1.8-.6.2-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3s.2 0 .2.3zm4.4-3.7c0 .1 0 .3-.2.4l-2 1.7-.6.2h-.4L880 327l-.2-.3.2-.4 2-1.7.6-.2h.4l2.2 1.3.2.3zm-2.8 8.5l-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.3s0 .2-.2.3l-2 1.8-.6.2zm-.4 2.4l.6-.1h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm-10.6-3.3l2-1.7.6-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3c0-.2 0-.3.2-.4zm6.4.8l.5-.2h.4l2.2 1.3.2.3-.2.4-2 1.7-.6.2h-.4l-2.2-1.3-.2-.3.2-.4 2-1.7zm9 2.7l-.4-.1-2.2-1.3-.2-.3.2-.4 2-1.7.6-.2.4.1 2.2 1.3.2.2s0 .3-.2.4l-2 1.8-.6.2zm0-6.2c-.3 0-.4 0-.4-.2l-2.3-1.2-.1-.3.1-.4 2-1.7.6-.2h.4l2.2 1.3.2.3c0 .1 0 .3-.2.4l-2 1.7a1 1 0 0 1-.6.2zm4.3 2.5h-.4l-2.2-1.3-.2-.3c0-.1 0-.3.2-.4l2-1.7.6-.2h.3l2.3 1.3.1.3-.1.4-2 1.7a1 1 0 0 1-.6.2z" fill="#4A4A49"/>
    <path fill="#878787" d="M617.2 274.3l1.1.8c9.3 6.8 8.3 16.7-2.4 22.1-10 5-25 4.4-34.7-1.2l-13.4 6.8c-.8.2-1.8 0-2.7-.6-.7-.5-1.2-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.2 38.2 0 0 1 35.2 1.7z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M568.7 302c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4V302z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M593.5 256.2a25.7 25.7 0 0 1-27.5 26.2c-15.2-.9-27.5-14.1-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.5 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M566.3 227.5h-3.1c5 6.6 7.9 14.7 7.9 23.3 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.7z"/>
    <g>
      <path fill="#878787" d="M454.5 363.2l1.1.7c9.3 6.9 8.3 16.8-2.4 22.1-10 5.1-25 4.5-34.7-1.2l-13.4 6.8c-.8.2-1.8 0-2.7-.6-.7-.4-1.2-1.1-.9-2l13.7-6.9c-7.5-6.6-5.9-15.6 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M406 390.8c-.4 1.5-4 2.3-5.6-.3V368l5.6.4s.2 20.4 0 22.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M430.8 345a25.7 25.7 0 0 1-27.5 26.2 29.7 29.7 0 0 1-27.5-29.5 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.5 29.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M403.6 316.3h-3.1c5 6.6 7.9 14.7 7.9 23.4 0 12-5.7 22.2-14.4 28.4 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M332.6 388.4l1.1.8c9.4 6.8 8.3 16.7-2.4 22.1-10 5-25 4.4-34.6-1.3-4 2-12.3 6.4-13.5 6.9-.7.2-1.8 0-2.7-.6-.6-.5-1.2-1.2-.8-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M284 416.2c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4s.2 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M309 370.4a25.7 25.7 0 0 1-27.6 26.2 29.7 29.7 0 0 1-27.5-29.6 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M281.6 341.7h-3c5 6.6 7.8 14.7 7.8 23.3 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M158.2 796.2c.4.2.9.4 1.2.7 9.3 6.8 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.4 6.8-.8.2-1.9 0-2.7-.6-.7-.5-1.3-1.1-.9-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M109.6 824c-.4 1.3-4 2.2-5.5-.5V801l5.5.4s.2 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M134.6 778.1a25.7 25.7 0 0 1-27.6 26.2c-15.1-.8-27.4-14.1-27.4-29.6S92 747.6 107 748.4a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M107.2 749.4h-3c5 6.6 7.8 14.7 7.8 23.3a34 34 0 0 1-14.4 28.4c3 1.4 6.2 2.3 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M181 588.2l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.4 6.8-.8.2-1.9 0-2.7-.5-.7-.5-1.3-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M132.4 616c-.3 1.4-4 2.3-5.5-.4V593l5.5.4s.2 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M157.4 570.2a25.7 25.7 0 0 1-27.6 26.2c-15.1-.9-27.4-14.1-27.4-29.6s12.4-27.2 27.4-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M130 541.4h-3c5 6.7 7.8 14.7 7.8 23.4a34 34 0 0 1-14.4 28.4c3 1.4 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.8z"/>
    </g>
    <g>
      <path fill="#878787" d="M138 856.5l1.1.7c9.3 6.9 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.7-1.2l-13.4 6.8c-.8.2-1.8 0-2.7-.6-.7-.5-1.2-1.1-.9-2l13.7-7c-7.5-6.5-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M89.4 884.2c-.4 1.5-4 2.3-5.6-.4v-22.4l5.6.3s.2 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M114.3 838.4a25.7 25.7 0 0 1-27.5 26.2A29.7 29.7 0 0 1 59.3 835a25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.5 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M87 809.7h-3.1c5 6.6 7.9 14.7 7.9 23.3 0 12-5.7 22.3-14.4 28.5 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5A28.9 28.9 0 0 0 87 809.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M522.7 316.2l1.1.8c9.3 6.8 8.3 16.7-2.4 22-10 5.2-25 4.5-34.7-1.2-3.9 2-12.3 6.4-13.4 6.8-.8.2-1.8 0-2.7-.5-.7-.5-1.2-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M474.2 343.9c-.4 1.4-4 2.3-5.6-.4V321l5.6.4v22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M499 298.2a25.7 25.7 0 0 1-27.5 26.2 29.7 29.7 0 0 1-27.5-29.6 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.5 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M471.8 269.4h-3.1c5 6.7 7.9 14.7 7.9 23.4 0 12-5.7 22.3-14.5 28.4 3 1.4 6.2 2.2 9.6 2.4a25 25 0 0 0 26.7-25.4 28.8 28.8 0 0 0-26.6-28.8z"/>
    </g>
    <g>
      <path fill="#878787" d="M577.1 351.3l1.2.7c9.3 6.9 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.5 6.8-.7.2-1.8 0-2.6-.6-.7-.5-1.3-1.1-1-2 1.1-.6 9.7-4.8 13.7-7-7.5-6.5-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M528.6 379c-.4 1.4-4 2.2-5.6-.5v-22.4l5.6.4s.2 20.4 0 22.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M553.5 333.2a25.7 25.7 0 0 1-27.6 26.2 29.7 29.7 0 0 1-27.4-29.5 25.9 25.9 0 0 1 27.4-26.4 30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M526.2 304.5h-3c5 6.6 7.8 14.7 7.8 23.3 0 12-5.7 22.3-14.4 28.5 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5c.1-15-11.8-27.8-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M537 378.8c.4.3 1 .5 1.2.8 9.3 6.8 8.3 16.7-2.4 22-10 5.2-25 4.5-34.7-1.2l-13.4 6.9c-.8.2-1.8 0-2.7-.6-.7-.5-1.2-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M488.6 406.5c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4v22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M513.4 360.7a25.7 25.7 0 0 1-27.5 26.2 29.7 29.7 0 0 1-27.5-29.6 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.5 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M486.2 332H483c5 6.6 7.9 14.7 7.9 23.3 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M632.8 316.9l1.2.8c9.3 6.8 8.2 16.7-2.4 22a39.2 39.2 0 0 1-34.7-1.2l-13.5 6.8c-.7.2-1.8 0-2.6-.6-.7-.4-1.3-1.1-1-2l13.7-6.9c-7.5-6.6-5.8-15.6 4.2-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M584.3 344.5c-.4 1.5-4 2.4-5.6-.3v-22.5l5.6.4s.2 20.4 0 22.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M609.2 298.7a25.7 25.7 0 0 1-27.6 26.3 29.7 29.7 0 0 1-27.4-29.6 25.9 25.9 0 0 1 27.4-26.3 30 30 0 0 1 27.6 29.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M582 270h-3.2c5 6.6 8 14.7 8 23.4 0 12-5.8 22.2-14.5 28.4 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5A28.9 28.9 0 0 0 582 270z"/>
    </g>
    <g>
      <path fill="#878787" d="M679.8 352l1.1.7c9.3 6.8 8.3 16.7-2.4 22.1-10 5-25 4.4-34.6-1.2-4 1.9-12.3 6.3-13.5 6.8-.8.2-1.8 0-2.7-.6-.7-.5-1.2-1.2-.8-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.9-15.5 4.1-20.6a38.2 38.2 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M631.2 379.6c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4s.3 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M656.2 333.8a25.7 25.7 0 0 1-27.6 26.2c-15.2-.9-27.5-14.1-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M628.8 305h-3a39.6 39.6 0 0 1 7.8 23.4c0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M639.7 379.4l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.4 6.8-.8.2-1.9 0-2.7-.5-.7-.5-1.3-1.2-.9-2l13.6-7c-7.4-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M591.1 407.2c-.4 1.4-4 2.3-5.5-.4v-22.5l5.5.4c0-.1.3 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M616.1 361.4a25.7 25.7 0 0 1-27.6 26.2 29.7 29.7 0 0 1-27.4-29.6 25.9 25.9 0 0 1 27.4-26.3 30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M588.7 332.6h-3c5 6.7 7.8 14.7 7.8 23.4a34 34 0 0 1-14.4 28.4c3 1.4 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.8z"/>
    </g>
    <g>
      <path fill="#878787" d="M607.4 558l1.1.8c9.3 6.8 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.7-1.2l-13.4 6.8c-.8.2-1.8 0-2.7-.6-.7-.5-1.2-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M558.8 585.7c-.4 1.4-4 2.3-5.6-.4V563l5.6.3s.3 20.5 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M583.7 539.9a25.7 25.7 0 0 1-27.5 26.2c-15.2-.8-27.5-14.1-27.5-29.6s12.4-27.1 27.5-26.3a30 30 0 0 1 27.5 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M556.4 511.2h-3.1c5 6.6 7.9 14.7 7.9 23.3 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.3 9.5 2.4A25 25 0 0 0 583 540a28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M656.2 603c.3.4.8.6 1.1.9 9.3 6.8 8.3 16.7-2.4 22-10 5.1-25 4.5-34.7-1.2l-13.4 6.8c-.8.2-1.8 0-2.7-.6-.7-.4-1.3-1.1-.9-2L617 622c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M607.6 630.8c-.3 1.4-4 2.3-5.5-.4v-22.5l5.5.4s.2 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M632.5 585a25.7 25.7 0 0 1-27.5 26.2c-15.2-.9-27.5-14.2-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.5 29.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M605.2 556.2h-3c5 6.7 7.9 14.7 7.9 23.4 0 12-5.7 22.2-14.5 28.4 3 1.3 6.2 2.2 9.6 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.7-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M433.2 646.7l1.2.8c9.3 6.8 8.3 16.7-2.4 22a39.2 39.2 0 0 1-34.7-1.2l-13.4 6.8c-.8.2-1.9 0-2.7-.6-.7-.4-1.3-1.1-.9-2l13.7-6.9c-7.5-6.6-5.9-15.5 4-20.6a38.2 38.2 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M384.6 674.4c-.3 1.4-4 2.3-5.5-.4v-22.5l5.5.4c0-.1.2 20.3 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M409.5 628.5a25.7 25.7 0 0 1-27.5 26.3c-15.2-.9-27.5-14.2-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.5 29.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M382.2 599.8h-3c5 6.7 7.8 14.7 7.8 23.4 0 12-5.6 22.2-14.4 28.4 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M428.8 713c.4.3.9.4 1.2.7 9.3 6.9 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.4 6.8-.8.2-1.9 0-2.7-.6-.7-.5-1.3-1.1-.9-2 1-.6 9.6-4.8 13.6-7-7.5-6.5-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M380.2 740.7c-.4 1.5-4 2.3-5.5-.4V718l5.5.3s.3 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M405.2 695a25.7 25.7 0 0 1-27.6 26.1c-15.1-.8-27.4-14-27.4-29.6s12.4-27.1 27.4-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M377.8 666.2h-3c5 6.6 7.8 14.7 7.8 23.3 0 12-5.6 22.3-14.4 28.5 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.7 28.7 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path opacity=".3" fill="#878787" d="M1117.5 282c0-.2-.2-.2-.3-.3l-.4-.2h-.6l-1-.1h-.6l-.6.1-27.2 16V296l-2.5-5c-.3-.7-.9-1.3-1.5-1.7-.5-.3-1-.5-1.8-.6l-6.6-1h-2.3l-2.3 1-.6.2c-.6.4-1.1 1-1.3 1.5a2 2 0 0 0-.1 1.6l2 4.2a394 394 0 0 1-8.7 4.8l-39 4.6a1 1 0 0 0-.6.2c-.2.1-.4.3-.4.5v.6l.3.4s.3 0 .4.2h.3l32.2-2.7-93.6 51.8h-.1c-.8.4-1 1.1-.7 1.9.4.8 1.3 1.6 2.4 2.3 1 .6 2.4 1.1 3.8 1.3.7.1 1.3.2 2 .1.6 0 1.1-.2 1.5-.5l96-58 11-1 .1.4.5 1c.1.1.4.6 1 1a9 9 0 0 0 2 .6l1 .1.1 1.6c.1.3.3.6.6.6l.2.1 22 10.4.3.1h.7l1.2-.3c.4 0 .8-.2 1-.4 0 0 .2 0 .2-.2 0 0 .1 0 0-.1v-.2l-.1-.1-22.2-13.9-.1-.6-.4-.9-.5-1.1 10.3-3.2 1.2-.6c.1 0 .2 0 .3-.2l21-14.8h.5zm-44.6 19l3.1.4.1.2-5.5-.4 1.2-.7.3.2.8.2z"/>
      <g fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M969 188.8c0-.4-.3-.8-.8-1.2-1-.7-2.9-.7-4 0-.6.3-1 .8-1 1.2l-4.1 170.4c0 1 .5 2 1.8 2.7a10 10 0 0 0 9.2.1c1.4-.7 2-1.7 2-2.8L969 188.8z"/>
        <path d="M968.2 187.6c-1-.7-2.9-.7-4 0s-1.2 1.6-.1 2.3 2.8.7 4 0c1.1-.6 1.1-1.6 0-2.3zM966.5 171.1c-2-1.2-3.8-1.3-5-.5l-6.8 4c1.3-.8 3.1-.7 5 .4l9 5.1 6.7-4-9-5zm8.9 5.2l-6.7 4a7 7 0 0 1 3.1 5.4v5.3c0 .8-.2 1.5-.8 1.8l6.7-4c.5-.2.9-.9.9-1.8v-5.2a7 7 0 0 0-3.2-5.5z"/>
        <path opacity=".6" d="M975.4 176.3l-6.7 4a7 7 0 0 1 3.1 5.4l6.8-4a7 7 0 0 0-3.2-5.4z"/>
        <path d="M968.7 180.1l-9-5c-3.8-2.3-7-.5-7 4v.8a6 6 0 0 0 3 5l13.3 7.6c1.5.9 2.8.2 2.8-1.6v-5.3c0-2-1.4-4.4-3.1-5.5zm4 8.5c0 1.9 1.3 2.6 3 1.7 1.6-1 3-3.2 3-5s-1.4-2.7-3-1.8c-1.7 1-3 3.3-3 5zm49.1.8h-.1l-39.9-1.7-.6 2 6.5 5.5.2.2-.1-.1c.4.3.8.4 1.2.4l31.8-3.2c.6-.4 1.6-3 1-3z"/>
        <path d="M982.1 186s.1 0 0 0l-4.3-2.5c-.5-.3-1.3-.3-2 .2a6.5 6.5 0 0 0-2.8 4.9c0 .8.3 1.5.9 1.8l4.3 2.5 1.7 1c-.5-.3-.9-1-.9-1.9 0-1.8 1.3-4 2.8-4.9.8-.4 1.6-.4 2-.2l-1.7-1z"/>
        <path d="M983.8 187c-.4-.2-1.2-.2-2 .2a6.5 6.5 0 0 0-2.8 5c0 .8.3 1.5 1 1.8.3.1 1 .5 2 .5.7 0 1.4-.2 2-.5 1.5-1 2-2.4 1.9-3.5-.1-1-.4-2.5-2-3.5zm.4-17.2l-3.5-37.2-.1-.2-.1-.1c-.2-.1-.6 0-1 .3-.6.4-1.3 1-1.3 1.3l.2 51.8 1.5-.8 4-13.3a6 6 0 0 0 .3-1.8zm-7.8 21.4l-10.2 8c-.6.4-1 1-1.5 1.7L938.2 241c-.3.5.1 1.3.6 1.6.2.2.5.2.7.1h.2l37.6-50.4-.8-1-.1-.1z"/>
        <path opacity=".6" d="M984.9 188.6c.5.8.3 1.8-.5 2.2-.7.4-1.6 0-2-.8-.6-.8-.4-1.8.4-2.2s1.7 0 2.1.8z"/>
      </g>
    </g>
    <g>
      <path opacity=".3" fill="#878787" d="M1184.8 268.3l-.3-.3c-.2 0-.3 0-.5-.2h-.6c-.4-.2-.7-.2-1-.2h-.6l-.6.2-27.2 16v-1.4l-2.5-5c-.3-.8-.8-1.3-1.5-1.7-.5-.3-1-.5-1.7-.6l-6.7-1h-2.3a9 9 0 0 0-2.3 1l-.5.2c-.7.4-1.2 1-1.4 1.4a2 2 0 0 0 0 1.7l2 4.2a394 394 0 0 1-8.8 4.8l-39 4.6a1 1 0 0 0-.6.2c-.2.1-.4.3-.4.5v.7c.1 0 .1.2.3.2l.4.2h.4l32.2-2.7-93.7 51.8c-.8.5-1 1.2-.7 2 .3.8 1.2 1.6 2.4 2.2 1 .7 2.4 1.2 3.7 1.4.7 0 1.4.2 2 0 .6 0 1.2-.1 1.6-.4l96-58 11-1v.3l.5 1c.1.2.4.7 1 1a9 9 0 0 0 2 .7l1 .1.2 1.5v.1c0 .2.2.5.5.6l.2.1 22.1 10.4h1l1.1-.2c.4-.1.8-.2 1-.4 0 0 .2 0 .3-.2v-.2l-.1-.2h-.1l-22.2-13.9-.1-.7-.4-.8v-.1l-.5-1 10.3-3.3 1.3-.5.3-.2 21-14.8v-.1c.6.2.6 0 .5 0zm-44.6 19h.1l3 .4.2.2-5.6-.4 1.2-.8.3.2.8.3z"/>
      <g fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1036.3 175c0-.3-.3-.7-.8-1.1-1-.7-2.9-.7-4 0-.6.3-.9.8-.9 1.1l-4.2 170.5c0 1 .6 2 1.8 2.7a10 10 0 0 0 9.2 0c1.4-.7 2-1.6 2-2.7l-3.1-170.5z"/>
        <path d="M1035.4 173.9c-1-.7-2.9-.7-4 0-1.2.7-1.2 1.6-.1 2.3s2.9.7 4 0c1.2-.6 1.3-1.6.1-2.3zM1033.8 157.4c-2-1.2-3.8-1.3-5-.5l-6.7 4c1.2-.8 3-.8 5 .4l8.9 5 6.7-3.8-9-5.1z"/>
        <path d="M1042.6 162.5l-6.7 3.9a7 7 0 0 1 3.2 5.5v5.2c0 1-.3 1.6-.9 1.9l6.7-4c.5-.3.9-1 .9-1.8V168c0-2-1.4-4.4-3.2-5.4z"/>
        <path opacity=".6" d="M1042.6 162.5l-6.7 3.9a7 7 0 0 1 3.2 5.5l6.7-4c0-2-1.4-4.4-3.2-5.4z"/>
        <path d="M1036 166.4l-9-5.1c-3.8-2.2-7-.5-7 4v.9a6 6 0 0 0 3 4.9l13.3 7.7c1.5.8 2.9.2 2.9-1.7V172a7 7 0 0 0-3.2-5.5zm4 8.4c0 2 1.3 2.6 3 1.8 1.5-1 2.9-3.2 2.9-5.1s-1.4-2.6-3-1.7c-1.6 1-3 3.2-3 5zm49.1.8l-40-1.7-.6 1.9 6.5 5.6c.1 0 .2 0 .2.2h.1a.2.2 0 0 1-.2-.1c.4.3.8.4 1.3.4l31.7-3.2c.6-.4 1.5-3 1-3z"/>
        <path d="M1049.4 172.2l-4.3-2.4c-.5-.3-1.2-.3-2 .1a6.5 6.5 0 0 0-2.8 5c0 .8.3 1.5.9 1.8l4.3 2.5 1.7 1c-.4-.4-.8-1-.8-1.9 0-1.8 1.2-4 2.8-4.9.7-.5 1.5-.5 2-.2l-1.8-1z"/>
        <path d="M1051 173.2c-.4-.3-1.2-.3-2 .2a6.5 6.5 0 0 0-2.7 4.9c0 .9.3 1.5.8 1.8.4.2 1 .6 2 .6.8 0 1.5-.2 2-.6 1.6-.8 2-2.4 2-3.4a4 4 0 0 0-2-3.5zm.5-17.2l-3.6-37.2v-.1l-.2-.1c-.2-.1-.6 0-1 .3-.6.3-1.3 1-1.3 1.3l.2 51.8h.1l1.4-.8 4-13.4c.4-.6.5-1.3.4-1.9zm-7.9 21.4l-10.2 8.1c-.6.4-1 1-1.4 1.6l-26.5 40c-.3.6 0 1.3.5 1.6l.1.1c.1.2.4.2.6.1h.2l37.6-50.4-.7-1h-.2z"/>
        <path opacity=".6" d="M1052.2 174.7c.5 1 .3 1.9-.5 2.3-.6.3-1.6 0-2-.8-.5-.9-.4-1.8.4-2.2.7-.4 1.6 0 2.1.7z"/>
      </g>
    </g>
    <g>
      <path opacity=".3" fill="#878787" d="M1272.7 272c0-.2-.2-.2-.2-.3l-.5-.1-.6-.1-1-.1h-.6c-.2 0-.4 0-.6.2l-27.2 15.9v-1.3l-2.5-5.1c-.3-.7-.9-1.3-1.5-1.7-.5-.3-1-.4-1.8-.5l-6.6-1.1a6 6 0 0 0-2.3.1c-.8.2-1.5.5-2.3.9l-.6.2c-.6.4-1.1 1-1.3 1.5a2 2 0 0 0-.1 1.6l2 4.2a394 394 0 0 1-8.7 4.8l-39 4.7a1 1 0 0 0-.6.2c-.2 0-.4.2-.4.4v.7l.3.3c.1 0 .3 0 .4.2h.3l32.2-2.7-93.6 51.8c-.9.4-1 1.1-.8 1.9.4.8 1.3 1.6 2.4 2.3a9 9 0 0 0 3.8 1.3c.7.1 1.3.2 2 .1.6 0 1.2-.2 1.5-.5 32-19.3 64.1-38.6 96-58l11-1 .1.4.5 1c.1.1.4.6 1 1a9 9 0 0 0 2 .7h1l.1 1.6c.1.3.3.6.6.7h.2l22 10.4.3.1h.7l1.2-.3c.4 0 .8-.2 1-.3l.2-.2c0-.1.1-.1 0-.2v-.2l-.1-.1-22.2-13.8-.1-.7-.4-.9-.5-1.1 10.3-3.2 1.2-.6c.1 0 .2 0 .3-.2l21-14.8h.5zm-44.6 19l3.1.4.1.2-5.5-.4 1.2-.7.3.2c.3 0 .5.2.8.3z"/>
      <g fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1124.2 178.8c0-.4-.3-.8-.8-1.2-1-.6-2.9-.6-4 0-.6.3-1 .8-1 1.2l-4.1 170.5c0 1 .5 1.9 1.8 2.6a10 10 0 0 0 9.2.1c1.4-.7 2-1.7 2-2.7l-3.1-170.5z"/>
        <path d="M1123.4 177.6c-1-.6-2.9-.6-4 0-1.2.7-1.2 1.7-.1 2.3 1 .7 2.8.7 4 0 1.2-.5 1.2-1.6 0-2.3zM1121.7 161.1c-2-1.1-3.8-1.2-5-.5l-6.8 4c1.3-.8 3.1-.7 5 .4l9 5.1 6.7-3.9-9-5z"/>
        <path d="M1130.6 166.2l-6.7 4a7 7 0 0 1 3.1 5.4v5.3c0 .9-.2 1.5-.8 1.8l6.7-4c.5-.2.9-.9.9-1.7v-5.3c0-2-1.5-4.4-3.2-5.5z"/>
        <path opacity=".6" d="M1130.6 166.2l-6.7 4a7 7 0 0 1 3.1 5.4l6.8-4c0-1.8-1.5-4.3-3.2-5.4z"/>
        <path d="M1123.9 170.1l-9-5c-3.8-2.3-7-.5-7 4v.8a6 6 0 0 0 3 5l13.3 7.6c1.5.9 2.8.2 2.8-1.6v-5.3c0-2-1.4-4.4-3.1-5.5zm4.1 8.5c0 2 1.3 2.6 2.9 1.7 1.6-1 3-3.2 3-5s-1.4-2.7-3-1.8-3 3.3-3 5zm49 .8l-.1-.1-39.9-1.7-.6 2 6.5 5.5.2.2v.1l-.1-.2c.4.3.8.4 1.2.4l31.8-3.2c.6-.4 1.6-3 1-3z"/>
        <path d="M1137.3 176s.1 0 0 0l-4.3-2.5c-.5-.3-1.2-.3-2 .2a6.5 6.5 0 0 0-2.8 4.9c0 .9.3 1.5.9 1.8l4.3 2.5 1.7 1c-.5-.3-.9-.9-.9-1.9 0-1.8 1.3-4 2.8-4.9.8-.4 1.6-.4 2-.1l-1.7-1z"/>
        <path d="M1139 177c-.4-.3-1.2-.3-2 .1a6.5 6.5 0 0 0-2.8 5c0 .8.3 1.5 1 1.8.3.2 1 .5 2 .5.7 0 1.4-.1 2-.5 1.5-.9 2-2.4 1.9-3.5-.1-.9-.4-2.4-2-3.4zm.3-17.3l-3.5-37.1-.1-.2h-.1c-.2-.2-.6 0-1 .2-.6.4-1.3 1-1.3 1.3l.2 51.8v.1l1.5-.9 4-13.3c.3-.6.4-1.3.3-2zm-7.7 21.5l-10.2 8c-.6.4-1 1-1.5 1.7l-26.5 40.1c-.3.5.1 1.3.6 1.6.2.3.5.3.7.2l.2-.1 37.6-50.4-.8-1-.1-.1z"/>
        <path opacity=".6" d="M1140.1 178.5c.5.9.3 1.8-.5 2.2-.6.4-1.6 0-2-.8-.6-.8-.4-1.8.4-2.2.8-.4 1.6 0 2.1.8z"/>
      </g>
    </g>
    <g>
      <path opacity=".3" fill="#878787" d="M1220.2 332.2c0-.2-.2-.2-.3-.3l-.5-.2-.5-.1-1.1-.1h-.6c-.2 0-.4 0-.6.2l-27.1 16-.1-1.4-2.4-5.1c-.3-.7-.9-1.3-1.6-1.6-.4-.3-1-.5-1.7-.6l-6.6-1c-.8-.2-1.6-.2-2.3 0-.8.2-1.6.5-2.3.9l-.6.3c-.7.4-1.2 1-1.4 1.4a2 2 0 0 0 0 1.6l2 4.3a394 394 0 0 1-8.8 4.8l-39 4.6a1 1 0 0 0-.5.2c-.2 0-.4.3-.4.5-.1.1-.1.3 0 .4v.2c0 .1 0 .2.3.3l.3.2h.4l32.2-2.7-93.6 51.8h-.1c-.8.5-1 1.1-.7 1.9.4.9 1.2 1.6 2.4 2.3 1 .7 2.4 1.2 3.7 1.4h2c.6 0 1.2-.1 1.6-.4l96-58 11-1v.3l.6 1c0 .1.3.6 1 1a9 9 0 0 0 2 .7h.9l.2 1.6v.1c0 .2.3.5.6.6h.2l22 10.5h1l1.2-.2 1-.4.2-.2c0-.1.1-.1 0-.2v-.2l-.2-.1-22.2-13.8v-.7l-.4-.9-.5-1.1 10.3-3.2 1.2-.6c.1 0 .2 0 .3-.2l21-14.7.1-.1h.4zm-44.7 18.8h.1l3.1.5.1.2-5.6-.4 1.3-.8.3.2.7.3z"/>
      <g fill="#CBD000" class="fillgreen" stroke="#4A4A49" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1071.6 238.8c0-.4-.3-.8-.7-1.1-1.1-.7-3-.7-4 0-.7.2-1 .7-1 1.1l-4.2 170.5c0 1 .6 1.9 1.9 2.7a10 10 0 0 0 9.2 0c1.3-.7 2-1.7 2-2.7l-3.2-170.5z"/>
        <path d="M1070.9 237.8c-1.1-.7-3-.7-4 0-1.2.6-1.2 1.6-.2 2.3s3 .6 4 0c1.2-.7 1.2-1.8.2-2.3zM1069.1 221.2c-1.9-1.1-3.7-1.2-5-.4l-6.7 3.9c1.3-.8 3-.7 5 .5l9 5 6.7-3.9-9-5z"/>
        <path d="M1078 226.3l-6.7 4c1.8 1 3.2 3.4 3.2 5.4v5.3c0 .9-.3 1.6-.9 1.8l6.8-3.9c.4-.3.8-1 .8-1.8v-5.3a7 7 0 0 0-3.1-5.5z"/>
        <path opacity=".6" d="M1078 226.3l-6.7 4c1.8 1 3.2 3.4 3.2 5.4l6.7-4a7 7 0 0 0-3.1-5.4z"/>
        <path d="M1071.3 230.3l-8.9-5.1c-3.8-2.2-7-.5-7 4v.9a6 6 0 0 0 2.9 4.9l13.3 7.6c1.6 1 3 .2 3-1.6v-5.3a7 7 0 0 0-3.3-5.4zm4 8.4c0 2 1.3 2.6 3 1.7 1.6-1 3-3.1 3-5 0-2-1.4-2.6-3-1.8-1.7.9-3 3.2-3 5.1zm49.2.8l-.1-.1-39.9-1.6-.7 1.9 6.6 5.5.1.2.1.1a.2.2 0 0 1-.1-.2c.3.3.7.4 1.2.4l31.8-3.1c.6-.4 1.4-3.1 1-3.1z"/>
        <path d="M1084.8 236.1l-4.3-2.5c-.5-.3-1.3-.3-2 .2a6.5 6.5 0 0 0-2.8 5c0 .8.2 1.4.8 1.7l4.3 2.5 1.8 1c-.5-.3-.9-.9-.9-1.8 0-1.9 1.3-4 2.8-5 .8-.4 1.5-.4 2-.1l-1.7-1z"/>
        <path d="M1086.4 237c-.5-.2-1.2-.2-2 .3a6.5 6.5 0 0 0-2.8 4.9c0 .8.3 1.5.9 1.8.4.2 1 .6 2 .6.8 0 1.4-.2 2-.6a4 4 0 0 0 2-3.5c0-1-.4-2.5-2-3.4zm.4-17.2l-3.6-37v-.3h-.1c-.2-.2-.6 0-1.1.2-.6.4-1.2 1-1.2 1.4l.1 51.7.1.1 1.5-.8 4-13.4c.3-.7.4-1.3.3-2zm-7.8 21.4l-10.2 8c-.5.5-1 1-1.4 1.7l-26.5 40.2c-.3.4 0 1.2.6 1.5.2.3.4.3.6.2l.2-.1 37.7-50.3-.8-1-.2-.2z"/>
        <path opacity=".6" d="M1087.6 238.6c.5.9.3 1.8-.5 2.2-.7.4-1.6 0-2.1-.7s-.3-1.9.5-2.3c.6-.4 1.6 0 2 .8z"/>
      </g>
    </g>
    <g>
      <path fill="#878787" d="M1045.2 386.9l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.5 6.8-.7.2-1.8 0-2.6-.5-.7-.5-1.3-1.2-.9-2l13.6-7c-7.5-6.6-5.8-15.5 4.2-20.6a38.8 38.8 0 0 1 35.1 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M996.6 414.7c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4c0-.1.3 20.3 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1021.6 368.8a25.7 25.7 0 0 1-27.6 26.3 29.7 29.7 0 0 1-27.4-29.6 25.9 25.9 0 0 1 27.4-26.3 30 30 0 0 1 27.6 29.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M994.2 340.1h-3c5 6.7 7.8 14.7 7.8 23.4a34 34 0 0 1-14.4 28.4c3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.7 28.7 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M1100.6 425.9c.4.3.8.4 1 .7 8.2 6 7.2 14.4-2 19.2a33.8 33.8 0 0 1-30-1.2c-3.4 1.8-10.7 5.5-11.8 5.9a3 3 0 0 1-2.3-.5c-.6-.5-1-1-.7-1.7l11.8-6c-6.5-5.7-5-13.5 3.7-17.8a32.6 32.6 0 0 1 30.3 1.4z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1058.6 450c-.4 1.2-3.5 2-5-.5V430l5 .4s.2 17.7 0 19.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1080.2 410.1a22.4 22.4 0 0 1-23.8 22.8 25.8 25.8 0 0 1-23.9-25.6 22.3 22.3 0 0 1 23.9-22.8 26 26 0 0 1 23.8 25.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1056.5 385.3h-2.7a33.3 33.3 0 0 1 6.9 20.2 30 30 0 0 1-12.5 24.7c2.6 1.2 5.4 2 8.3 2 12.8.9 23.1-9 23.1-22s-10.3-24-23.1-25z"/>
    </g>
    <g>
      <path fill="#878787" d="M1066.2 443.9l1.1.7c9.3 6.8 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.7-1.2-4 1.9-12.3 6.3-13.4 6.8-.8.2-1.8 0-2.7-.6-.7-.5-1.3-1.1-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1017.7 471.6c-.4 1.5-4 2.3-5.6-.4v-22.4l5.6.3v22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1042.5 425.8A25.7 25.7 0 0 1 1015 452a29.7 29.7 0 0 1-27.5-29.6 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.5 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1015.3 397h-3.1a39 39 0 0 1 7.9 23.4c0 12-5.7 22.3-14.5 28.4 3 1.4 6.2 2.3 9.6 2.5a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.7-28.7z"/>
    </g>
  </g>
  <g>
    <path fill="#878787" d="M1723.4 212.7l1.1.8c9.3 6.8 8.3 16.7-2.4 22-10 5.1-25 4.5-34.7-1.2L1674 241c-.8.2-1.8 0-2.7-.6-.7-.4-1.2-1.1-.9-2l13.7-6.9c-7.5-6.6-5.9-15.6 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1674.8 240.3c-.4 1.5-4 2.3-5.6-.3v-22.5l5.6.4s.3 20.4 0 22.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1699.7 194.5a25.7 25.7 0 0 1-27.5 26.3c-15.2-1-27.5-14.2-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.5 29.6z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1672.4 165.8h-3.1c5 6.6 7.9 14.7 7.9 23.4 0 12-5.7 22.2-14.4 28.4 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    <path fill="#878787" d="M1683.3 240.2c.4.2.9.4 1.2.7 9.3 6.8 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.4 6.8-.8.2-1.9 0-2.7-.6-.7-.5-1.3-1.1-.9-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.8-15.5 4.2-20.6a38.8 38.8 0 0 1 35.1 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1634.7 268c-.4 1.3-4 2.2-5.6-.5V245l5.6.4s.3 20.4 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1659.7 222a25.7 25.7 0 0 1-27.6 26.3c-15.1-.9-27.4-14.1-27.4-29.6s12.3-27.1 27.4-26.3a30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1632.3 193.4h-3c5 6.6 7.8 14.7 7.8 23.3a34 34 0 0 1-14.4 28.4c3 1.4 6.2 2.3 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.7z"/>
    <g>
      <path fill="#878787" d="M1698.3 286.2c.4.2.9.4 1.2.7 9.3 6.8 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.5 6.8-.7.2-1.8 0-2.7-.6-.6-.5-1.2-1.1-.8-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.8-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1649.7 314c-.4 1.4-4 2.2-5.6-.5v-22.4l5.6.3s.3 20.4 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1674.7 268.1a25.7 25.7 0 0 1-27.6 26.2c-15.2-.8-27.5-14.1-27.5-29.6s12.4-27.1 27.5-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1647.3 239.4h-3c5 6.6 7.8 14.7 7.8 23.3 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.3 9.5 2.4a25 25 0 0 0 26.7-25.4 28.7 28.7 0 0 0-26.6-28.7z"/>
    </g>
    <g>
      <path fill="#878787" d="M1884.2 331.5l1.2.8c9.3 6.8 8.2 16.7-2.4 22a39.2 39.2 0 0 1-34.7-1.2l-13.4 6.8c-.8.2-1.9 0-2.7-.6-.7-.4-1.3-1.1-.9-2l13.7-6.9c-7.5-6.6-5.9-15.6 4-20.6a38.8 38.8 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1835.7 359.2c-.3 1.5-4 2.3-5.5-.3v-22.5l5.5.4c0-.1.2 20.3 0 22.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1860.6 313.4a25.7 25.7 0 0 1-27.6 26.3c-15.1-1-27.4-14.2-27.4-29.6s12.4-27.2 27.4-26.3a30 30 0 0 1 27.6 29.6z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1833.3 284.7h-3c5 6.6 7.8 14.7 7.8 23.4 0 12-5.6 22.2-14.4 28.4 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
    </g>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M934.1 709l60.1-27.7 82.4-29-69.1-43.3z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M934 591.2l86.2-49.5-37.7-20.7-86.2 49.5z"/>
      <path fill="#DADADA" d="M935.4 586l75.4-43.4-29.7-16.3-75.6 43.4zm-39.1-15.5l37.7 20.7.1 117.6-37.8-20.7z"/>
      <path fill="#B2B2B2" d="M934.1 708.8l86.2-49.4V541.7L934 591.2z"/>
    </g>
    <path d="M945 604l11.3-6.5v-10.8l-11.4 6.5zm27.3-15.1l11.4-6.6v-10.8l-11.4 6.5zm27.1-15.2l11.2-6.4v-11l-11.2 6.6zM945 625.6l11.3-6.6v-10.8l-11.4 6.4zm27.3-15.2l11.4-6.4v-11l-11.4 6.4zm27.1-15.2l11.2-6.4v-10.9l-11.2 6.5zM945 648l11.3-6.5v-10.8l-11.4 6.5zm27.3-15.1l11.4-6.6v-10.8l-11.4 6.4zm27.1-15.2l11.2-6.4v-11l-11.2 6.5zM945 670.5l11.3-6.4v-11l-11.4 6.6zm27.3-15.2l11.4-6.5V638l-11.4 6.5zm27.1-15.1l11.2-6.5V623l-11.2 6.4zM945 691.5l11.3-6.4v-11l-11.4 6.6zm27.3-15.1l11.4-6.6V659l-11.4 6.5zm27.1-15.2l11.2-6.5v-10.9l-11.2 6.5zM907.5 586.8l13.7 7.6v10.3l-13.9-7.7zm0 20l13.7 7.6v10.4l-13.9-7.7zm0 21.6l13.7 7.5v10.4l-13.9-7.7zm0 22.4l13.7 7.6v10.4l-13.9-7.7zm0 20.5l13.7 7.7v10.3l-13.9-7.7z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#878787" d="M1004.7 753.6l54.2-21.8 88.3-34.9-69.1-43.2z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1004.6 635.8l86.2-49.4-37.7-20.8-86.3 49.6z"/>
      <path fill="#DADADA" d="M1006 630.7l75.4-43.5-29.7-16.3-75.6 43.4zm-39.2-15.5l37.8 20.6v117.7L967 732.7z"/>
      <path fill="#B2B2B2" d="M1004.7 753.5l86.2-49.5V586.4l-86.3 49.4z"/>
    </g>
    <path d="M1015.5 648.7l11.4-6.5v-10.9l-11.4 6.6zm27.5-15.2l11.2-6.5v-10.8l-11.3 6.5zm26.9-15.1l11.3-6.5v-11l-11.3 6.6zm-54.4 51.8l11.4-6.5v-10.9l-11.4 6.5zM1043 655l11.2-6.4v-11l-11.3 6.5zm26.9-15.1l11.3-6.5v-10.8L1070 629zm-54.4 52.8l11.4-6.5v-10.9l-11.4 6.5zm27.5-15.2l11.2-6.5v-10.9l-11.3 6.5zm26.9-15.1l11.3-6.5v-11l-11.3 6.6zm-54.4 52.8l11.4-6.6v-10.8l-11.4 6.5zM1043 700l11.2-6.5v-10.9l-11.3 6.5zm26.9-15.2l11.3-6.4v-11L1070 674zm-54.4 51.4l11.4-6.4v-11l-11.4 6.6zM1043 721l11.2-6.5v-10.9l-11.3 6.6zm26.9-15.1l11.3-6.6v-10.8L1070 695zM978 631.4l13.8 7.6v10.4l-14-7.7zm0 20.1l13.8 7.6v10.4l-14-7.7zm0 21.5l13.8 7.6V691l-14-7.7zm0 22.5l13.8 7.6v10.3l-14-7.6zm0 20.5l13.8 7.6V734l-14-7.8z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#878787" d="M1079.6 799.7l50.6-21.3 78.9-45.8-56.1-32.8z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1079.5 682l86.2-49.5-37.7-20.8-86.2 49.6z"/>
      <path fill="#DADADA" d="M1081 676.8l75.3-43.5-29.7-16.3-75.6 43.4zm-39.2-15.5l37.7 20.6.1 117.7-37.7-20.8z"/>
      <path fill="#B2B2B2" d="M1079.6 799.6l86.2-49.5V632.5l-86.3 49.4z"/>
    </g>
    <path d="M1090.5 694.8l11.3-6.5v-10.9l-11.3 6.6zm27.3-15.2l11.4-6.5v-10.8l-11.4 6.5zm27-15.1l11.3-6.5v-11l-11.3 6.6zm-54.3 51.8l11.3-6.5v-10.9l-11.3 6.5zm27.3-15.1l11.4-6.5v-11l-11.4 6.5zm27-15.2l11.3-6.5v-10.8l-11.3 6.4zm-54.3 52.8l11.3-6.5v-10.9l-11.3 6.5zm27.3-15.2l11.4-6.5v-10.9l-11.4 6.5zm27-15.1l11.3-6.5v-11l-11.3 6.6zm-54.3 52.8l11.3-6.6V744l-11.3 6.5zm27.3-15.2l11.4-6.5v-10.9l-11.4 6.5zm27-15.1l11.3-6.5v-11l-11.3 6.6zm-54.3 51.3l11.3-6.4v-11l-11.3 6.6zm27.3-15.2l11.4-6.5v-10.9l-11.4 6.6zm27-15.1l11.3-6.6v-10.8l-11.3 6.5zM1052.9 677.5l13.8 7.6v10.4l-13.9-7.7zm0 20.1l13.8 7.6v10.4l-13.9-7.7zm0 21.4l13.8 7.7v10.4l-13.9-7.7zm0 22.6l13.8 7.6v10.3l-13.9-7.6zm0 20.4l13.8 7.7v10.4l-13.9-7.8z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#878787" d="M452.7 759.8L507 738l88.4-34.8L526 660z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M452.6 642l86.3-49.3L501 572l-86 49.4z"/>
      <path fill="#DADADA" d="M454 637l75.5-43.4-29.8-16.4-75.6 43.4zm-39.1-15.6l37.7 20.7.1 117.7L415 739z"/>
      <path fill="#B2B2B2" d="M452.7 759.8l86.3-49.5-.1-117.6-86.3 49.4z"/>
    </g>
    <path d="M463.6 655l11.3-6.5.1-11-11.4 6.6zm27.4-15.2l11.3-6.5v-10.9l-11.3 6.5zm27-15.2l11.3-6.4v-11l-11.3 6.6zm-54.4 51.9l11.3-6.6.1-10.8-11.4 6.4zm27.4-15.2l11.3-6.4v-11l-11.3 6.5zm27-15.2l11.3-6.4v-10.9l-11.3 6.5zM463.6 699l11.3-6.5.1-11-11.4 6.6zm27.4-15.2l11.3-6.6v-10.8l-11.3 6.5zm27-15.2l11.3-6.4v-10.9l-11.3 6.4zm-54.4 52.8l11.3-6.4.1-11-11.4 6.6zm27.4-15.2l11.3-6.5V689l-11.3 6.4zm27-15l11.3-6.6v-10.8l-11.3 6.4zm-54.4 51.3l11.3-6.5.1-11-11.4 6.6zm27.4-15.2l11.3-6.5v-11l-11.3 6.6zm27-15.2l11.3-6.4v-11l-11.3 6.5zM426.1 637.7l13.8 7.6-.1 10.3-13.9-7.7zm0 20l13.8 7.6-.1 10.4-13.9-7.7zm0 21.6l13.8 7.5-.1 10.4-13.9-7.7zm0 22.4l13.8 7.6-.1 10.4-13.9-7.7zm0 20.5l13.8 7.7-.1 10.3-13.9-7.6z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <g>
      <path opacity=".3" fill="#878787" d="M530.1 811l50.8-21.4 78.7-45.7-56-32.9z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M530 693.2l86.3-49.4-37.8-20.8-86.2 49.5z"/>
        <path fill="#DADADA" d="M531.5 688l75.4-43.3-29.8-16.4-75.5 43.4zm-39.2-15.5l37.7 20.7.1 117.7-37.7-20.8z"/>
        <path fill="#B2B2B2" d="M530.1 811l86.3-49.6-.1-117.6-86.3 49.4z"/>
      </g>
      <path d="M541 706l11.3-6.4.1-11-11.4 6.6zm27.4-15l11.3-6.6v-11l-11.3 6.6zm27.1-15.3l11.2-6.4v-10.9l-11.2 6.4zM541 727.6l11.3-6.6.1-10.8-11.4 6.5zm27.4-15.2l11.3-6.4v-11l-11.3 6.5zm27.1-15.2l11.2-6.4v-10.9l-11.2 6.5zM541 750l11.3-6.4.1-11-11.4 6.6zm27.4-15.1l11.3-6.6v-10.7l-11.3 6.4zm27.1-15.2l11.2-6.4v-10.9l-11.2 6.4zM541 772.5l11.3-6.4.1-11-11.4 6.6zm27.4-15.2l11.3-6.5V740l-11.3 6.5zm27.1-15l11.2-6.6V725l-11.2 6.4zM541 793.5l11.3-6.4.1-11-11.4 6.6zm27.4-15.1l11.3-6.5v-11l-11.3 6.6zm27.1-15.2l11.2-6.4v-11l-11.2 6.5zM503.5 688.8l13.8 7.6-.1 10.3-13.9-7.6zm0 20l13.8 7.6-.1 10.5-13.9-7.7zm0 21.5l13.8 7.6-.1 10.4-13.9-7.7zm0 22.5l13.8 7.6-.1 10.4-13.9-7.7zm0 20.6l13.8 7.7-.1 10.2-13.9-7.6z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    </g>
    <g>
      <g stroke="#3C3C3B" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1179.5 671c-2.9 1.4-3.2 3.5-3.2 5.9v97.7c0 .3.1.6.4.8.7.5 1.7.5 2.4 0 .3-.2.5-.5.5-.8V677c0-1.1 0-2.7 1-3.2.9-.4 1.7-2 8.7 3.6l1.7-2.2c-6-4.9-8.5-5.5-11.5-4z"/>
        <path fill="#FC0" d="M1206.7 680c4.8 2.2 8 8.8 3.6 11.3-8.5 4.9-20.2-7.7-21.2-9.6-1-2-.9-5.4-.9-5.4s13.7 1.5 18.5 3.7z"/>
        <path fill="#DADADA" d="M1193 674.8c2.9.9 23.2 6.6 15.2 11.2s-18.8-7.2-19.8-9c-1-1.7 1.6-3.1 4.5-2.2z"/>
      </g>
      <defs>
        <path id="ck" d="M1175.7 775.3l76.9-43.8 24.4 12.7-77 43.9z"/>
      </defs>
      <clipPath id="cl">
        <use xlink:href="#ck" overflow="visible"/>
      </clipPath>
      <g clip-path="url(#cl)">
        <path opacity=".3" fill="#878787" d="M1256.6 733.6c-.7-.3-1.4-.6-2.3-.7-3-.4-4.7.3-6.3 1.3l-71.5 40.6c-.2.1-.3.3-.3.5l.6.6c.3.2.7.3 1 .3s.7 0 1-.2l71.5-40.8c.7-.4 1.9-1.1 3-1 .4.2.8 0 1.3.4.7.4 1.3 1.2 1.7 3.4v.1c-.7.3-2.7 1.5-3.2 2.5-.6 1-1.7 7.7 3.6 10.5 1 .5 2.2.9 3.7 1 4.8.5 7.3-3.3 5.7-5.9-1.1-2.7-4.7-6.2-5.5-7-.2-.3-.6-.6-1-.8l-.5-.2c-.4-2.6-1-4-2.5-4.6"/>
      </g>
    </g>
    <g>
      <g stroke="#3C3C3B" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1651.7 379.2c-2.9 1.4-3.1 3.5-3.1 5.8h-.1v97.7c0 .2.1.5.4.7.7.5 1.8.5 2.4 0 .3-.2.5-.5.5-.7v-97.8c0-1 0-2.7 1-3.2 1-.4 1.7-1.9 8.7 3.7l1.7-2.2c-6-5-8.6-5.4-11.5-4z"/>
        <path fill="#FC0" d="M1678.8 388.2c4.8 2.2 8 8.7 3.7 11.2-8.6 4.9-20.2-7.7-21.3-9.6s-.8-5.4-.8-5.4 13.6 1.4 18.4 3.8z"/>
        <path fill="#DADADA" d="M1665 382.9c3 .8 23.3 6.5 15.3 11.1s-18.8-7.2-19.7-9c-1-1.7 1.5-3 4.5-2.1z"/>
      </g>
      <defs>
        <path id="cm" d="M1647.9 483.4l77-43.9 24.2 12.8-77 43.8z"/>
      </defs>
      <clipPath id="cn">
        <use xlink:href="#cm" overflow="visible"/>
      </clipPath>
      <g clip-path="url(#cn)">
        <path opacity=".3" fill="#878787" d="M1728.8 441.6c-.6-.2-1.4-.5-2.3-.6-3-.5-4.7.3-6.3 1.2l-71.5 40.7-.2.5c0 .2.2.4.5.6.3.2.7.3 1 .3s.8 0 1-.2l71.5-40.7c.8-.5 2-1.2 3-1 .5.1.8 0 1.3.3.7.4 1.4 1.3 1.8 3.5h-.1c-.6.3-2.6 1.5-3.2 2.6-.6 1-1.6 7.6 3.6 10.4 1 .5 2.2.9 3.8 1 4.7.6 7.3-3.3 5.7-5.9-1.2-2.7-4.8-6.1-5.5-7l-1-.8-.6-.1c-.3-2.7-1.1-4-2.5-4.8"/>
      </g>
    </g>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M1118 961.7l91-48 11.5 7.3 64.5-33.8 2.5-23.2-65.8-38.8-110 72.4zm364.8 39.3l-25-6.8-43.5 4 1.7 3.7-1 .5-1.3.8-40.3 23.4 22.4 87.1 2.8.6 73.8-41.9 14.7 10.3-31.7 19.7 2.9 1.2 31-19.6 2 .6 7-4-19-12 22.7-13.4 3.5-2.2 4.4 1-27.1-53"/>
    <g opacity=".3">
      <defs>
        <path id="co" d="M1234 796.9l88-51 76.6 44-88 51.3z"/>
      </defs>
      <clipPath id="cp">
        <use xlink:href="#co" overflow="visible"/>
      </clipPath>
      <g clip-path="url(#cp)">
        <path fill="#878787" d="M1383 781h-.3l-16.8-8-71.6-11h-.1l1.3 1.4 1.2.6-42.2 24.5.5-.3-1.4-.4-1.7 1 11.6 25 73.6 10.9 1.7-1-.2-.8 38.2-22.2 2.4.4 3.9-20"/>
      </g>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1274.6 862l-.2-61.7 64.3-36.6v59.1z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1274.6 860l-37.4-22.6v-62.9l19-2 18.4 27.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1274.6 859.5v2.6l-38.8-22.5v-2.4zm0 0v2.6l65.2-38.7V821z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1338.7 821.1v-.9l1 .8-65.1 38.5v-.6zm-101.5 15.7v.5l37.4 21.6v.6l-38.8-22.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1251.8 807.5l.2-14.7-11.8-6.7-.1 14.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1241.7 799.4l.1-12-1.6-1-.1 14.3 11.6 6.7v-2.1z"/>
    <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1297.1 739.7l-64 37.2 22-1.9 64.2-37.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1254.7 775l21.7 26.9 64.5-37-21.8-27.6z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M1321.1 750.7v-5l-4 .9v6.4zm-4.1 2.3l-3.4-4.4v-2.7l3.4.7z"/>
      <path d="M1313.6 746l4-2.5 3.5 2.1-4 2.3z"/>
      <path d="M1317.6 744v3.3l3.4-1.7z"/>
    </g>
    <g stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1319.9 832.5l9.7-6v-22.1l-10.4 6.2v22z"/>
      <path fill="#DADADA" d="M1328.3 827.2v-20l-7.7 4.6v19.9z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1325.7 810.6c-.4 0-.7 0-1.2.2-1 .7-2 2.1-2 3.4v.4l4.1-2.4v-.1c0-.9-.4-1.4-1-1.5z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M1326.2 814.1l-3.6 2.2-.1 11.7v.6l4.1-2.4.1-12.4z"/>
    <path fill="#3C3C3B" d="M1328 818.4c0 .3-.1.5-.4.5-.2 0-.5-.2-.5-.5 0-.2.3-.4.5-.4s.5.2.5.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1269.5 817.2v-14.7l-11.7-6.7-.1 14.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1259.3 809.1v-12l-1.5-1-.1 14.3 11.6 6.8V815z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1251.8 834.6l.2-14.7-11.8-6.7-.1 14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1241.7 826.6l.1-12.1-1.6-1-.1 14.3 11.6 6.8v-2.2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1269.5 844.4v-14.7l-11.7-6.8-.1 14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1259.3 836.3v-12.1l-1.5-1-.1 14.3 11.6 6.8V842z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1284 818.9l-.1-14.7 11.8-6.6v14.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1294.2 811l-.1-12.2 1.6-1v14.4l-11.5 6.7v-2.1z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1284.4 845.7l-.1-14.7 11.8-6.6V839z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1294.5 837.6v-12l1.6-1V839l-11.6 6.7v-2.1z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1301.2 810l-.1-14.6 11.8-6.8v14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1311.3 802v-12l1.6-1v14.2l-11.6 6.8v-2.1z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1317.9 801.8l-.1-14.8 11.8-6.6V795z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1328 793.7v-12l1.6-1V795l-11.6 6.7v-2.1z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1301.6 836.9l-.1-14.8 11.8-6.7v14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1311.6 828.8v-12.1l1.7-1V830l-11.7 6.8v-2.1z"/>
    <g opacity=".3">
      <defs>
        <path id="cq" d="M894.3 1002.6l88-51.1 76.5 44.2-88 51.2z"/>
      </defs>
      <clipPath id="cr">
        <use xlink:href="#cq" overflow="visible"/>
      </clipPath>
      <g clip-path="url(#cr)">
        <path fill="#878787" d="M1043.3 986.7h-.3l-16.8-8-71.7-11 1.3 1.4 1.1.5-42.2 24.5.5-.3-1.3-.3-1.7 1 11.6 25 73.5 10.8 1.8-1-.2-.7 38.1-22.2 2.4.4 4-20"/>
      </g>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M934.8 1067.7l-.2-61.8 64.4-36.6v59.2z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M934.8 1065.6l-37.3-22.5v-62.9l18.9-2.1 18.4 27.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M934.8 1065.2v2.6l-38.8-22.5v-2.4zm0 0v2.6l65.2-38.7v-2.4zm64.2-38.4v-.9l1 .8-65.2 38.5v-.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M897.5 1042.4v.6l37.3 21.5v.7l-38.8-22.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M912 1013.1l.2-14.7-11.8-6.7v14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M902 1005v-12l-1.6-1v14.3l11.6 6.7v-2z"/>
    <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M957.4 945.3l-64 37.3 22-2 64.2-37.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M915 980.6l21.6 27 64.6-37-21.8-27.7z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M981.4 956.4v-5.1l-4.1 1v6.4zm-4.1 2.3l-3.5-4.4v-2.7l3.5.7z"/>
      <path d="M973.8 951.6l4.1-2.4 3.5 2-4.1 2.4z"/>
      <path d="M977.8 949.7v3.3l3.4-1.7z"/>
    </g>
    <g stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M980.1 1038.2l9.7-6v-22.1l-10.3 6.2-.1 22z"/>
      <path fill="#DADADA" d="M988.6 1032.8l-.1-19.8-7.7 4.5v19.8z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M986 1016.3c-.5 0-.8 0-1.2.2-1.1.7-2 2.1-2 3.4v.4l4-2.4v-.1c0-1-.3-1.4-.9-1.5z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M986.5 1019.8l-3.7 2.2v12.3l4-2.4.2-12.4z"/>
    <path fill="#3C3C3B" d="M988.3 1024c0 .4-.2.6-.5.6-.2 0-.5-.2-.5-.5 0-.2.3-.4.5-.4s.5.2.5.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M929.7 1022.8l.1-14.6-11.8-6.7v14.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M919.5 1014.8l.1-12-1.6-1v14.3l11.5 6.7v-2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M912 1040.3l.2-14.8-11.8-6.6v14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M902 1032.3v-12.1l-1.6-1v14.3l11.6 6.7v-2z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M929.7 1050l.1-14.7-11.8-6.7v14.7z"/>
      <path fill="#DADADA" d="M919.5 1042l.1-12.1-1.6-1v14.3l11.5 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M944.3 1024.6l-.2-14.7 11.8-6.6.1 14.6z"/>
      <path fill="#DADADA" d="M954.4 1016.6v-12.1l1.5-1 .1 14.4-11.6 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M944.6 1051.4v-14.7l11.7-6.7.1 14.6z"/>
      <path fill="#DADADA" d="M954.8 1043.3l-.1-12 1.6-1 .1 14.3-11.7 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M961.4 1015.7V1001l11.7-6.7.1 14.7z"/>
      <path fill="#DADADA" d="M971.6 1007.7l-.1-12 1.6-1 .1 14.2-11.7 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M978.1 1007.5v-14.8l11.7-6.6.1 14.7z"/>
      <path fill="#DADADA" d="M988.2 999.4v-12l1.6-1v14.3l-11.6 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M961.8 1042.5v-14.8l11.7-6.6.1 14.7z"/>
      <path fill="#DADADA" d="M971.9 1034.5v-12.1l1.6-1v14.3l-11.6 6.7v-2z"/>
    </g>
    <g opacity=".3">
      <defs>
        <path id="cs" d="M982.3 1063l88-51.2 76.5 44.2-88 51.2z"/>
      </defs>
      <clipPath id="ct">
        <use xlink:href="#cs" overflow="visible"/>
      </clipPath>
      <g clip-path="url(#ct)">
        <path fill="#878787" d="M1131.3 1047h-.4l-16.8-8-71.6-11h-.1l1.3 1.4 1.2.6-42.2 24.5.5-.3-1.3-.4-1.8 1 11.6 25 73.6 10.9 1.7-1-.1-.7 38-22.2 2.5.4 4-20.1"/>
      </g>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1022.8 1128l-.2-61.7 64.3-36.6v59.2z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1022.8 1126l-37.4-22.5v-63l19-2 18.4 27.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1022.8 1125.6v2.6l-38.8-22.5v-2.4zm0 0v2.6l65.2-38.8v-2.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1087 1087.1v-.8l1 .7-65.2 38.6v-.7zm-101.6 15.7v.6l37.4 21.5v.7l-38.8-22.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1000 1073.5l.2-14.7-11.8-6.7v14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M990 1065.4v-12l-1.6-1v14.3l11.5 6.7v-2.1z"/>
    <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1045.4 1005.7l-64.1 37.3 22-2 64.2-37.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1003 1041l21.6 27 64.6-37-21.8-27.7z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M1069.4 1016.7v-5l-4.2 1v6.3zm-4.2 2.3l-3.4-4.4v-2.7l3.4.7z"/>
      <path d="M1061.8 1012l4.1-2.5 3.5 2.2-4.2 2.3z"/>
      <path d="M1065.8 1010v3.4l3.4-1.7z"/>
    </g>
    <g stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1068.1 1098.6l9.7-6v-22.2l-10.4 6.3v21.9z"/>
      <path fill="#DADADA" d="M1076.6 1093.2l-.1-19.9-7.7 4.5v20z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1073.9 1076.7c-.4 0-.7 0-1.2.2-1 .6-2 2-2 3.3v.4l4.1-2.4c0-1-.3-1.4-1-1.5z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M1074.5 1080.1l-3.7 2.2v12.3l4-2.4.1-12.4z"/>
    <path fill="#3C3C3B" d="M1076.3 1084.5c0 .2-.2.4-.5.4-.2 0-.5-.2-.5-.4s.3-.4.5-.4.5.2.5.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1017.7 1083.2v-14.7l-11.7-6.6-.1 14.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1007.5 1075.1l.1-12-1.6-1-.1 14.4 11.6 6.7v-2.1z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1000 1100.7l.2-14.8-11.8-6.6v14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M990 1092.6v-12l-1.6-1v14.3l11.5 6.7v-2.1z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1017.7 1110.4v-14.7l-11.7-6.7-.1 14.7z"/>
      <path fill="#DADADA" d="M1007.5 1102.3l.1-12-1.6-1-.1 14.3 11.6 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1032.3 1085l-.2-14.8 11.8-6.6.1 14.6z"/>
      <path fill="#DADADA" d="M1042.4 1077l-.1-12.1 1.6-1 .1 14.3-11.6 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1032.6 1111.7l-.1-14.7 11.8-6.6.1 14.6z"/>
      <path fill="#DADADA" d="M1042.8 1103.7l-.1-12 1.6-1 .1 14.2-11.7 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1049.4 1076.1l-.1-14.7 11.8-6.7.1 14.7z"/>
      <path fill="#DADADA" d="M1059.6 1068l-.1-12 1.6-1 .1 14.3-11.7 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1066.1 1067.8V1053l11.7-6.6.1 14.7z"/>
      <path fill="#DADADA" d="M1076.2 1059.8v-12.1l1.6-1v14.3l-11.6 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1049.8 1102.9l-.1-14.8 11.8-6.6v14.7z"/>
      <path fill="#DADADA" d="M1059.9 1094.8v-12l1.6-1v14.3l-11.6 6.7v-2.1z"/>
    </g>
    <g opacity=".3">
      <defs>
        <path id="cu" d="M1305.1 837.2l88-51 76.5 44.1-88 51.2z"/>
      </defs>
      <clipPath id="cv">
        <use xlink:href="#cu" overflow="visible"/>
      </clipPath>
      <g clip-path="url(#cv)">
        <path fill="#878787" d="M1454.2 821.4l-.4-.1-16.8-8-71.7-11 1.3 1.4 1.1.6-42.1 24.5.4-.3-1.3-.4-1.7 1 11.6 25 73.6 10.9 1.7-1-.2-.7 38.1-22.2 2.4.4 4-20.1"/>
      </g>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1345.6 902.4l-.2-61.8 64.4-36.6v59.2z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1345.6 900.2l-37.3-22.4v-63l18.9-2 18.4 27.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1345.6 899.9v2.6l-38.8-22.5v-2.4zm0 0v2.6l65.2-38.8v-2.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1409.8 861.4v-.8l1 .7-65.2 38.6v-.7zm-101.5 15.7v.6l37.3 21.5v.7l-38.8-22.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1322.9 847.8l.2-14.7-11.8-6.7-.1 14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1312.8 839.7v-12l-1.5-1-.1 14.3 11.6 6.7v-2.1z"/>
    <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1368.2 780l-64 37.3 22-2 64.2-37.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1325.8 815.2l21.7 27 64.5-37-21.8-27.6z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M1392.2 791v-5l-4.1 1v6.4zm-4.2 2.4l-3.4-4.5v-2.7l3.5.7z"/>
      <path d="M1384.6 786.2l4.2-2.4 3.4 2.2-4.1 2.3z"/>
      <path d="M1388.7 784.3v3.4l3.3-1.7z"/>
    </g>
    <g stroke="#3C3C3B" stroke-miterlimit="10">
      <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1391 872.9l9.7-6v-22.2l-10.4 6.3-.1 21.9z"/>
      <path fill="#DADADA" d="M1399.4 867.5v-19.9l-7.8 4.5v20z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1396.7 851c-.4 0-.6 0-1.1.2-1 .6-2 2-2 3.3v.4l4-2.4c0-1-.3-1.4-.9-1.5z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M1397.3 854.4l-3.6 2.2-.1 11.8v.5l4-2.4.2-12.4z"/>
    <path fill="#3C3C3B" d="M1399.1 858.8c0 .2-.2.4-.4.4s-.5-.2-.5-.4.3-.4.5-.4c.1 0 .4.2.4.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1340.5 857.5l.1-14.7-11.8-6.6v14.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1330.4 849.4v-12l-1.6-1v14.4l11.6 6.7v-2.1z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1322.9 875l.2-14.8-11.8-6.6-.1 14.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1312.8 867v-12.2l-1.5-1-.1 14.4 11.6 6.7v-2.1z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1340.5 884.7l.1-14.7-11.8-6.7V878z"/>
      <path fill="#DADADA" d="M1330.4 876.6v-12l-1.6-1v14.3l11.6 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1355.1 859.2l-.1-14.7 11.8-6.6v14.6z"/>
      <path fill="#DADADA" d="M1365.2 851.3v-12.1l1.6-1v14.3l-11.6 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1355.4 886v-14.7l11.7-6.6.1 14.6z"/>
      <path fill="#DADADA" d="M1365.6 878v-12l1.5-1 .1 14.2-11.7 6.7v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1372.2 850.4v-14.7l11.8-6.7v14.7z"/>
      <path fill="#DADADA" d="M1382.4 842.3v-12l1.6-1v14.3l-11.7 6.7v-2.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1389 842.1l-.1-14.7 11.8-6.7v14.7z"/>
      <path fill="#DADADA" d="M1399 834v-12l1.7-1v14.3L1389 842v-2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M1372.6 877.2v-14.8l11.7-6.6.1 14.7z"/>
      <path fill="#DADADA" d="M1382.7 869.1v-12l1.6-1v14.3l-11.6 6.7V875z"/>
    </g>
    <g>
      <path fill="#B2B2B2" d="M1530.6 862.2h-.4l-16.8-8-71.6-11-.1-.1 1.3 1.4 1.2.6-42.2 24.5.5-.3-1.4-.4-1.7 1 11.6 25 4.5 48.5 1.7-1-.2-.8 107.3-59.7 2.4.4 4-20h.1-.2" opacity=".3"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1415.3 943.2l-.2-61.8 64.3-36.6V904z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1415.3 941l-37.4-22.4v-63l19-2 18.4 27.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1415.3 940.7v2.6l-38.8-22.5v-2.4zm0 0v2.6l65.2-38.7v-2.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1479.4 902.3v-.9l1 .8-65.1 38.5v-.7zM1377.9 918v.5l37.4 21.5v.7l-38.8-22.3z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1392.5 888.6l.2-14.7-11.8-6.7-.1 14.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1382.4 880.6l.1-12-1.6-1.1-.1 14.3 11.6 6.7v-2z"/>
      <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1437.8 820.8l-64 37.3 22-2 64.2-37.5z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1395.4 856l21.7 27 64.5-37-21.8-27.6z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M1461.8 831.9v-5.1l-4 1v6.4zm-4.1 2.3l-3.4-4.4V827l3.4.6z"/>
        <path d="M1454.3 827l4-2.3 3.5 2-4 2.4z"/>
        <path d="M1458.3 825.1v3.4l3.4-1.7z"/>
      </g>
      <g stroke="#3C3C3B" stroke-miterlimit="10">
        <path fill="#B2B2B2" stroke-linecap="round" stroke-linejoin="round" d="M1460.6 913.7l9.7-6v-22.1l-10.4 6.2v21.9z"/>
        <path fill="#DADADA" d="M1469 908.3v-19.9l-7.7 4.5v20z"/>
      </g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1466.4 891.8c-.4 0-.7 0-1.2.2-1 .7-2 2.1-2 3.3v.4l4.1-2.4c0-1-.4-1.4-1-1.5z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M1467 895.3l-3.7 2.2-.1 11.7v.6l4.1-2.4.1-12.4z"/>
      <path fill="#3C3C3B" d="M1468.8 899.6c0 .3-.2.5-.5.5-.2 0-.5-.2-.5-.5 0-.2.3-.4.5-.4s.5.2.5.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1410.2 898.3v-14.7l-11.7-6.6-.1 14.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1400 890.3v-12l-1.5-1-.1 14.3 11.6 6.7v-2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1392.5 915.8l.2-14.8-11.8-6.6-.1 14.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1382.4 907.7l.1-12-1.6-1-.1 14.3 11.6 6.7v-2.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1410.2 925.5v-14.7l-11.7-6.7-.1 14.7z"/>
        <path fill="#DADADA" d="M1400 917.4v-12l-1.5-1-.1 14.3 11.6 6.7v-2.1z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1424.8 900l-.2-14.6 11.8-6.7v14.6z"/>
        <path fill="#DADADA" d="M1434.9 892l-.1-12 1.6-1v14.3l-11.5 6.8v-2.2z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1425 926.9v-14.7l11.8-6.7v14.6z"/>
        <path fill="#DADADA" d="M1435.2 918.8v-12l1.6-1V920l-11.6 6.8v-2.2z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1441.9 891.2l-.1-14.7 11.8-6.7v14.7z"/>
        <path fill="#DADADA" d="M1452 883.2v-12l1.6-1.1v14.3l-11.6 6.7v-2z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1458.6 883l-.1-14.8 11.8-6.7v14.7z"/>
        <path fill="#DADADA" d="M1468.7 874.9v-12.1l1.6-1v14.3l-11.6 6.8v-2.1z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M1442.3 918l-.1-14.8 11.8-6.6v14.7z"/>
        <path fill="#DADADA" d="M1452.3 910v-12.2l1.7-1v14.4l-11.7 6.7v-2.1z"/>
      </g>
    </g>
    <g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1478 1015.3v50.6l-82.3 47.8v-49.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1370.1 1028l25.6 36.3v49.4l-51.1-29.5v-50.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1455.8 977.6l27.6 37.7-89 51.6-27.5-37.9zm-27.6 5.8l27.6-5.8-89 51.4-27.5 6z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1456.7 975.5l27.5 37.8-89 51.6-27.5-37.8z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1429.1 981.4l27.6-5.9-89 51.6-27.4 5.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1394.4 1066.9l.9-2-27.6-37.8-1.1 2.3zm-54.1-33.9l-1 2 27.3-5.6 1.1-2.3z"/>
      <path fill="#B2B2B2" d="M1484.2 1013.3l-89 51.6-.8 2 89-51.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1448.9 1082.8l-10.6 6.2v-20.5l10.6-6.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M1474.1 1094l-2-1.2v-16.2l2-.3z"/>
        <path fill="#B2B2B2" d="M1476.3 1092.8l-2.2 1.3v-17.9l2.2.4zm-18.3-7.2v17.8l-2.2 1.2v-16.1zm-20.2-11.6v17.8l-2 1.2v-16.1zm-2.1 19l-2.2-1.2v-16.2l2.2 1.3z"/>
        <path fill="#DADADA" d="M1455.8 1104.6l-2.1-1.2v-16.2l2.1 1.3zm.5-14.6l-.4-.7 11.1-15.3.5 1zm21.7-13.6l.5.8-11-2.3-.5-1z"/>
        <path fill="#DADADA" d="M1431 1074.8l24.9 14.5.4.7-24.9-14.4z"/>
      </g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1471.6 1027.5v13.2l-14.5 8.4V1036z"/>
      <path fill="#3C3C3B" d="M1471.6 1031.3v1.7l-14.5 8.4v-1.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1447.8 1041v13.1l-14.5 8.5v-13.2z"/>
      <path fill="#3C3C3B" d="M1447.8 1044.8v1.6l-14.5 8.5v-1.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1418.5 1058v13.1l-14.5 8.5v-13.2z"/>
      <path fill="#3C3C3B" d="M1418.5 1061.8v1.6l-14.5 8.4v-1.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1471.8 1046v13.1l-14.5 8.5v-13.2z"/>
      <path fill="#3C3C3B" d="M1471.8 1049.8v1.6l-14.5 8.4v-1.7z"/>
      <g>
        <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1418.6 1076.4v13.1l-14.5 8.4v-13.2z"/>
        <path fill="#3C3C3B" d="M1418.6 1080.1v1.7l-14.5 8.4v-1.6z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M1442.3 1059.6l-11 15.2 24.8 14.5 11-15.3z"/>
        <path fill="#B2B2B2" d="M1453.3 1062l-11-2.4 24.8 14.4 11 2.4z"/>
      </g>
      <g>
        <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1361.4 1067.4v13.1l14.5 8.5v-13.2z"/>
        <path fill="#3C3C3B" d="M1361.4 1071.2v1.6l14.5 8.5v-1.6z"/>
      </g>
      <g>
        <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1361.6 1049v13.2l14.5 8.3v-13.1z"/>
        <path fill="#3C3C3B" d="M1361.6 1052.8v1.6l14.5 8.4v-1.6z"/>
      </g>
    </g>
    <g>
      <path fill="#878787" d="M1645.8 946l-25-6.9-43.5 4 1.8 3.7-1 .6-1.4.8-40.2 23.4 23.3 50.1 23 25.7 84.9-44.1 3.5-2.1 4.3 1-29.7-56.2" opacity=".3"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1606.6 952l-24 33v62l48-27.9v-79.6z"/>
      <path fill="#3C3C3B" d="M1588.1 1021.5v18l37-21.3V1000z"/>
      <path fill="#B2B2B2" d="M1589.5 1022.2v15l34.2-19.9v-14.9z"/>
      <path fill="#3C3C3B" d="M1600.7 1030.9l-1.5 1v-15.3l1.5-1zm16.4-9.5l-1.6 1v-15.5l1.6-.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1505 940v62l77.6 45v-62z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1505 944.8l77.6 44.9.3-5.9-41.8-33.6-36-7.3z"/>
      <path fill="#3C3C3B" d="M1588.1 990.4v18l37-21.2v-18z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1589.5 991.2v14.9l34.2-19.7v-14.9z"/>
      <path fill="#B2B2B2" d="M1630.6 939.8l-.8-.5-23.2 12.7-24 33v4.7l2.8 1.6 26-35.5 19.2-9.7z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1525.1 902.6l-25.9 35.6 83.7 48.5 25.9-35.6z"/>
      <path fill="#4A4A49" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1551 893.3l-25.9 9.3 83.7 48.5 26-12z"/>
      <path fill="#3C3C3B" d="M1509.4 970.6l.8.4 18.4 10.8v-18.2l-19.2-11.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1510.8 969.8l16.5 9.5v-14.8l-16.5-9.6z"/>
      <path fill="#3C3C3B" d="M1510.8 959.2v2l16.5 9.4v-1.9zm22 25.2l.7.4 18.5 10.7v-18l-19.2-11.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1534.2 983.6l16.4 9.5v-14.9l-16.4-9.5z"/>
      <path fill="#3C3C3B" d="M1534.2 973v1.9l16.4 9.5v-1.8zm22.6 25.5l.7.4 18.5 10.7v-18.1l-19.2-11.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1558.2 997.6l16.4 9.5v-14.8l-16.4-9.6z"/>
      <path fill="#3C3C3B" d="M1558.2 987v2l16.4 9.5v-2zm-48.6 11l.7.4 18.5 10.8V991l-19.2-11.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1511 997.2l16.4 9.5v-14.8l-16.4-9.6z"/>
      <path fill="#3C3C3B" d="M1511 986.6v2l16.4 9.4v-1.9zM1533 1011.8l.7.3 18.4 10.8v-18l-19.2-11.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1534.4 1011l16.4 9.5v-14.9l-16.4-9.5z"/>
      <path fill="#3C3C3B" d="M1534.4 1000.3v2l16.4 9.5v-1.9zM1557 1025.9l.7.4 18.4 10.7v-18l-19.2-11.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1558.4 1025l16.4 9.5v-14.8l-16.4-9.6z"/>
      <path fill="#3C3C3B" d="M1558.4 1014.4v2l16.4 9.5v-2zM1600.7 1000l-1.5.8v-15.3l1.5-1zm16.4-9.6l-1.6.9V976l1.6-1z"/>
      <g>
        <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1521.2 909.7l5.4-3.1 5.3 3-5.3 3.1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1522.5 909.7l4 2.3 4.1-2.3-4-2.3z"/>
        <path fill="#B2B2B2" d="M1526.6 917.2l3.6-.1 4.2-4.4-3.9-1.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1526.6 916.9v-4.2l4.5-2.6v1.5zm-4.6-6.8v4.2l4.6 2.6v-4.2z"/>
        <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1526.6 907.4v4.6l-4-2.3z"/>
      </g>
      <g fill="#4A4A49">
        <path d="M1586.6 972.6l-4.6-2.7c-1-.6-2.4-.3-3.2.6l-3.1 4.3c-.7 1.1-.4 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.6-2.7-.7-3.4zm-10.9-6.4l-4.7-2.7c-1-.5-2.4-.2-3.1.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .7 2.4.4 3.1-.7l3.1-4.2c.8-1.2.5-2.8-.7-3.5zm-10.8-6.8l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1 .6 2.4.3 3.2-.7l3-4.2c.8-1.2.5-2.8-.7-3.5zm28.9 2.8l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.2-.6l3-4.3c.8-1.1.6-2.6-.7-3.4zm-10.9-6.3l-4.7-2.7c-1-.6-2.4-.3-3.1.6l-3.2 4.3h.1c-.8 1.1-.5 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.4-2.8-.7-3.4zM1572 949l-4.6-2.7c-1-.5-2.4-.2-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c1-1.2.6-2.8-.7-3.5zm29 3l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1 .6 2.4.4 3.2-.7l3-4.2c.8-1.2.5-2.7-.7-3.5zm-11-6.3l-4.6-2.7a2.5 2.5 0 0 0-3.2.7l-3.2 4.2h.1c-.8 1.1-.5 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.6l3-4.3c.9-1.1.5-2.8-.7-3.4zm-10.8-6.8l-4.6-2.7c-1-.6-2.4-.3-3.2.6l-3.1 4.3c-.7 1.1-.4 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.6-2.8-.7-3.4z"/>
      </g>
      <g fill="#4A4A49">
        <path d="M1548.9 951l-4.7-2.7c-1-.6-2.4-.3-3.1.6l-3.2 4.3h.1c-.8 1.1-.5 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.4-2.7-.7-3.4zm-11.1-6.4l-4.6-2.7c-1-.5-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1.1.6 2.4.4 3.2-.7l3-4.2c1-1.2.6-2.8-.7-3.5zm-10.8-6.8l-4.6-2.7c-1-.6-2.4-.3-3.1.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .6 2.4.3 3.2-.7l3-4.2c.9-1.2.5-2.8-.7-3.5zm29 2.8l-4.5-2.7a2.5 2.5 0 0 0-3.2.7l-3.2 4.2h.1c-.8 1.1-.5 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.2-.6l3-4.3c.8-1.1.4-2.6-.7-3.4zm-11-6.4l-4.6-2.6c-1-.6-2.4-.3-3.2.6l-3.1 4.3c-.7 1.1-.4 2.6.8 3.3l4.6 2.8c1.1.7 2.4.4 3.2-.7l3-4.2c1-1.2.6-2.8-.7-3.5zm-10.7-6.8l-4.6-2.7c-1.1-.5-2.5-.3-3.2.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.2.5-2.8-.7-3.5zm28.9 3l-4.6-2.7a2.5 2.5 0 0 0-3.2.7l-3.2 4.2h.1c-.7 1.2-.5 2.7.8 3.4l4.6 2.8c1 .6 2.4.3 3.2-.7l3-4.2c.9-1.2.5-2.7-.7-3.5zm-11-6.4l-4.6-2.6c-1-.6-2.4-.3-3.2.6l-3.1 4.3c-.7 1.1-.4 2.7.8 3.3l4.6 2.8c1.1.7 2.4.4 3.2-.7l3-4.2c.9-1.1.6-2.8-.7-3.4zm-10.7-6.8l-4.6-2.6a2.6 2.6 0 0 0-3.2.6l-3.2 4.3h.1c-.8 1.1-.5 2.6.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.5-2.8-.7-3.5z"/>
      </g>
    </g>
    <g>
      <path fill="#878787" d="M1755 1015.1l-25-6.8-43.5 4 1.8 3.7-1 .6-1.4.7-40.2 23.5 23.3 50 23 25.7 84.9-44 3.5-2.2 4.3 1-29.7-56.2" opacity=".3"/>
      <path fill="#B2B2B2" d="M1715.9 1021.5l-24 33v62l48-27.8V1009z"/>
      <path fill="#3C3C3B" d="M1691.9 1117c-.1 0-.2 0-.2-.2-.2 0-.2-.3-.2-.4v-62.2l24-33h.3l24-12.5h.5l.2.4v79.6l-.2.4-48 27.8h-.4zm.4-62.3v61l47.1-27.3v-78.6l-23.2 12.1-23.9 32.8z"/>
      <path fill="#3C3C3B" d="M1697.4 1090.9v18.1l37-21.4v-18z"/>
      <path fill="#B2B2B2" d="M1698.9 1091.7v14.8l34-19.6v-15z"/>
      <path fill="#3C3C3B" d="M1710 1100.4l-1.5 1V1086l1.5-.9zm16.4-9.5l-1.6.9v-15.3l1.6-1z"/>
      <path fill="#DADADA" d="M1614.4 1009.5v62l77.5 45v-62z"/>
      <path fill="#3C3C3B" d="M1691.9 1117c-.1 0-.2 0-.3-.2l-77.5-45c-.2 0-.2-.2-.2-.3v-62c0-.2 0-.2.2-.3h.5l77.5 45 .1.3v62l-.1.3-.2.1zm-77-45.8l76.5 44.4v-61l-76.6-44.3v60.9z"/>
      <path fill="#B2B2B2" d="M1614.4 1014.3l77.5 44.9.3-5.9-41.8-33.7-36-7.2z"/>
      <path fill="#3C3C3B" d="M1697.4 1060v18l37-21.3v-18.2z"/>
      <path fill="#B2B2B2" d="M1698.9 1060.7v15l34-19.9V1041z"/>
      <path fill="#3C3C3B" d="M1698.9 1076.1l-.2-.1c-.2 0-.2-.3-.2-.4v-14.9c0-.2 0-.3.2-.4l34-19.7h.6c.2 0 .2.3.2.3v15l-.2.3-34.1 19.8-.3.1zm.5-15v13.7l33-19.3v-13.7l-33 19.2z"/>
      <path fill="#B2B2B2" d="M1740 1009.4l-.8-.5-23.3 12.6-24 33v4.7l2.8 1.6 26-35.5 19.3-9.8z"/>
      <path fill="#CBD000" class="fillgreen" d="M1634.4 972l-25.9 35.7 83.8 48.5 25.8-35.6z"/>
      <path fill="#3C3C3B" d="M1692.3 1056.8l-.3-.2-84.2-48.8 26.5-36.3.4.2 84.2 48.8-26.6 36.3zm-83-49.3l82.8 48 25.3-34.7-82.8-48-25.3 34.7z"/>
      <path fill="#4A4A49" d="M1660.4 962.8l-26 9.3 83.7 48.5 26-12.1z"/>
      <path fill="#3C3C3B" d="M1718 1021h-.2l-83.7-48.5c-.1-.1-.2-.3-.1-.5 0-.2 0-.4.2-.4l26-9.3h.4l83.6 45.7c.2.1.3.3.3.5s-.1.4-.3.4l-26 12-.1.2zm-82.4-48.8l82.5 47.8 24.9-11.6-82.6-45.1-24.8 8.9zm-16.9 67.8l.8.5 18.4 10.7v-18l-19.2-11.2z"/>
      <path fill="#B2B2B2" d="M1620.1 1039.3l16.4 9.5V1034l-16.4-9.5z"/>
      <path fill="#3C3C3B" d="M1636.5 1049.3h-.2l-16.5-9.6c-.2-.1-.2-.3-.2-.4v-14.9l.2-.4h.5l16.4 9.6c.2 0 .2.2.2.3v15c0 .1 0 .2-.2.3l-.2.1zm-15.9-10.3l15.5 9v-13.8l-15.5-9v13.8z"/>
      <path fill="#3C3C3B" d="M1620.1 1028.8v1.8l16.4 9.5v-1.8zm22 25.2l.7.3 18.5 10.8v-18.2l-19.2-11.1z"/>
      <path fill="#B2B2B2" d="M1643.5 1053l16.4 9.6v-14.8l-16.4-9.6z"/>
      <path fill="#3C3C3B" d="M1659.9 1063h-.3l-16.4-9.6c-.2 0-.2-.3-.2-.4v-14.8c0-.2 0-.3.2-.4h.5l16.4 9.5c.2 0 .2.3.2.4v14.9l-.2.3-.2.1zm-16-10.2l15.5 8.9V1048l-15.5-9v13.8z"/>
      <path fill="#3C3C3B" d="M1643.5 1042.5v1.8l16.4 9.6v-2zM1666.1 1068l.7.3 18.5 10.8v-18l-19.2-11.2z"/>
      <path fill="#B2B2B2" d="M1667.5 1067.2l16.4 9.5v-15l-16.4-9.4z"/>
      <path fill="#3C3C3B" d="M1683.9 1077.2l-.3-.1-16.4-9.5c-.2-.1-.2-.3-.2-.4v-15c0-.1 0-.2.2-.3h.5l16.4 9.5c.2.1.2.3.2.4v14.9l-.2.4h-.2zm-16-10.3l15.5 9V1062l-15.4-9v13.8z"/>
      <path fill="#3C3C3B" d="M1667.5 1056.6v1.8l16.4 9.5v-1.8zM1618.9 1067.5l.6.3 18.6 10.8v-18l-19.2-11.2z"/>
      <path fill="#B2B2B2" d="M1620.3 1066.7l16.4 9.5v-14.9l-16.4-9.5z"/>
      <path fill="#3C3C3B" d="M1636.7 1076.7l-.2-.1-16.5-9.5c-.2-.1-.2-.3-.2-.4v-14.9l.2-.4h.5l16.4 9.5c.2.1.2.3.2.4v14.9c0 .2 0 .3-.2.4h-.2zm-15.9-10.3l15.5 9v-13.8l-15.5-9v13.8z"/>
      <path fill="#3C3C3B" d="M1620.3 1056.1v1.8l16.4 9.6v-1.9zM1642.2 1081.3l.8.4 18.4 10.7v-18.1l-19.2-11.2z"/>
      <path fill="#B2B2B2" d="M1643.7 1080.4l16.4 9.5v-14.8l-16.4-9.6z"/>
      <path fill="#3C3C3B" d="M1660 1090.4h-.2l-16.4-9.6c-.2 0-.2-.3-.2-.4v-14.9c0-.2 0-.3.2-.3.2-.1.3-.1.4 0l16.5 9.5c.2 0 .2.2.2.3v15l-.2.3-.2.1zm-15.9-10.3l15.5 9v-13.8l-15.5-8.9v13.7z"/>
      <path fill="#3C3C3B" d="M1643.7 1069.9v1.8l16.4 9.6v-2z"/>
      <g>
        <path fill="#3C3C3B" d="M1666.2 1095.3l.8.4 18.4 10.7v-18l-19.2-11.1z"/>
        <path fill="#B2B2B2" d="M1667.7 1094.5l16.4 9.5v-14.8l-16.4-9.5z"/>
        <path fill="#3C3C3B" d="M1684 1104.5h-.2l-16.4-9.6c-.2 0-.2-.3-.2-.4v-14.8c0-.2 0-.3.2-.4h.5l16.4 9.5c.2 0 .2.3.2.4v14.8l-.2.4-.2.1zm-15.9-10.2l15.5 8.9v-13.8l-15.5-8.9v13.8z"/>
        <path fill="#3C3C3B" d="M1667.7 1084v1.8l16.4 9.5v-1.8z"/>
      </g>
      <g>
        <path fill="#3C3C3B" d="M1710 1069.4l-1.5 1V1055l1.5-1z"/>
      </g>
      <g>
        <path fill="#3C3C3B" d="M1726.4 1059.9l-1.6 1v-15.4l1.6-.9z"/>
      </g>
      <g>
        <path fill="#EDEDED" d="M1630.5 979.1l5.4-3 5.3 3-5.3 3z"/>
        <path fill="#3C3C3B" d="M1635.9 982.6h-.3l-5.3-3.1c-.2-.1-.2-.3-.2-.4l.2-.4 5.3-3c.2-.2.3-.2.5 0l5.2 3c.2.1.3.3.3.4l-.2.4-5.2 3-.3.1zm-4.4-3.5l4.3 2.5 4.3-2.5-4.3-2.5-4.3 2.5z"/>
        <path fill="#DADADA" d="M1631.8 979.1l4 2.4 4.1-2.4-4-2.3z"/>
        <path fill="#3C3C3B" d="M1635.9 982l-.3-.1-4-2.3c-.2-.1-.2-.3-.2-.4l.2-.4 4-2.3h.5l4 2.3c.2.1.2.3.2.4l-.2.4-4 2.3h-.2zm-3.1-2.9l3 1.8 3.1-1.8-3-1.7-3.1 1.7z"/>
        <path fill="#B2B2B2" d="M1635.9 986.7l3.6-.1 4.2-4.3-3.9-2z"/>
        <path fill="#DADADA" d="M1635.9 986.3v-4l4.5-2.7v1.4z"/>
        <path fill="#3C3C3B" d="M1635.9 986.8h-.2a.5.5 0 0 1-.3-.5v-4.1c0-.2 0-.3.2-.4l4.5-2.6h.5c.2 0 .2.3.2.4v1.4l-.1.3-4.5 5.3c0 .2-.2.2-.3.2zm.5-4.3v2.5l3.5-4.3v-.4l-3.5 2.2z"/>
        <path fill="#DADADA" d="M1631.4 979.6v4.1l4.5 2.6v-4z"/>
        <path fill="#3C3C3B" d="M1635.9 986.8l-.2-.1-4.5-2.6c-.2-.1-.2-.3-.2-.4v-4.1c0-.2 0-.3.2-.4.2-.1.3-.1.4 0l4.6 2.6c.2 0 .2.3.2.4v4.1l-.2.4h-.3zm-4-3.4l3.5 2v-3l-3.6-2v3z"/>
        <g>
          <path fill="#EDEDED" d="M1635.9 976.8v4.7l-4-2.4z"/>
          <path fill="#3C3C3B" d="M1635.9 982l-.3-.1-4-2.3c-.2-.1-.2-.3-.2-.4l.2-.4 4-2.3h.5c.2 0 .2.3.2.4v4.7l-.2.4c-.1-.1-.2 0-.2 0zm-3.1-2.9l2.6 1.5v-3l-2.6 1.5z"/>
        </g>
      </g>
      <g>
        <path fill="#4A4A49" d="M1695.9 1042.1l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1 .6 2.4.3 3.2-.7l3-4.2c.8-1.2.5-2.8-.7-3.5zm-10.9-6.4l-4.7-2.7c-1-.6-2.4-.3-3.1.6l-3.2 4.3h.1c-.8 1.1-.5 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.1-.7l3.1-4.2c.8-1.1.5-2.7-.7-3.4zm-10.8-6.7l-4.6-2.7c-1-.6-2.4-.3-3.2.6l-3.2 4.3h.1c-.7 1.1-.4 2.6.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.2.4-2.8-.7-3.5zm28.9 2.7l-4.6-2.7c-1-.5-2.4-.2-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.2.6-2.8-.7-3.5zm-10.9-6.4l-4.7-2.7c-1-.6-2.4-.3-3.1.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.1-.6l3.1-4.2c.8-1.2.4-2.7-.7-3.5zm-10.8-6.7l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.2 4.2h.1c-.7 1.1-.4 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.6l3-4.3c.8-1.1.5-2.8-.7-3.4zm28.9 2.9l-4.6-2.6c-1-.6-2.4-.3-3.2.6l-3.1 4.3c-.7 1.1-.4 2.6.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.5-2.8-.7-3.5zm-11-6.4l-4.6-2.7a2.5 2.5 0 0 0-3.2.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .6 2.4.4 3.2-.7l3-4.2c.9-1.2.5-2.7-.7-3.5zm-10.8-6.7l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.2-.6l3-4.3c1-1.1.6-2.7-.7-3.4z"/>
      </g>
      <g>
        <path fill="#4A4A49" d="M1658.2 1020.5l-4.7-2.7c-1-.6-2.4-.3-3.1.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.1-.6l3.1-4.3c.8-1.1.5-2.7-.7-3.4zm-11-6.5l-4.6-2.6c-1-.6-2.4-.3-3.2.6l-3.1 4.3c-.7 1.1-.4 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.5-2.7-.7-3.4zm-10.8-6.7l-4.7-2.7c-1-.5-2.4-.2-3.1.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .7 2.4.4 3.1-.7l3.1-4.2c.9-1.2.5-2.8-.7-3.5zm29 2.8l-4.7-2.7c-1-.5-2.4-.3-3.1.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .6 2.4.4 3.2-.7l3-4.2c.8-1.2.4-2.8-.7-3.5zm-11.1-6.4l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.1-.4 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.2-.6l3-4.3c1-1.1.6-2.6-.7-3.4zm-10.7-6.7l-4.7-2.7c-1-.6-2.4-.3-3.1.6l-3.2 4.3h.1c-.8 1.1-.5 2.7.8 3.3l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.8-1.1.5-2.8-.7-3.4zm28.9 3l-4.6-2.8a2.8 2.8 0 0 0-3.2.7l-3.2 4.2h.1c-.8 1.2-.5 2.7.8 3.4l4.6 2.8c1 .7 2.4.4 3.2-.7l3-4.2c.9-1.2.5-2.8-.7-3.5zm-11-6.5l-4.6-2.7c-1-.6-2.4-.3-3.2.7l-3.1 4.2c-.7 1.2-.4 2.7.8 3.4l4.6 2.8c1.1.6 2.4.3 3.2-.7l3-4.2c.9-1.2.6-2.7-.7-3.5zm-10.7-6.7l-4.6-2.7a2.5 2.5 0 0 0-3.2.7l-3.2 4.2h.1c-.8 1.1-.5 2.7.8 3.4l4.6 2.7c1 .7 2.4.4 3.2-.6l3-4.3c.8-1.1.5-2.7-.7-3.4z"/>
      </g>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1403.4 1019.5l20 27.6-28 16.1-20-27.5z"/>
      <path d="M1392.6 1052.3l3.6-2.1c1-.5 2-.3 2.4.4l2.5 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.5-4.9l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm8.4-5.3l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.4l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm-22.5 2.2l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6.9.4 2.2-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.4l-2.4-3.3c-.8-.9-.5-2.1.4-2.6zm8.6-5l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.5 2.6l-3.6 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.4-5.3l3.6-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .4-2.6zm-22.5 2.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.5-4.9l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.3 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.5-2 .5-2.6zm8.4-5.2l3.6-2.2c.9-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1434 1002.4l20 27.6-27.9 16.1-20-27.5z"/>
      <path d="M1423.2 1035.2l3.7-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm8.6-4.9l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.9-.5-2.1.5-2.6zm8.3-5.3l3.7-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.2-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm-22.4 2.1l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.5-4.9l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.4 2-.6 2.5l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm8.4-5.2l3.6-2.2c.9-.5 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm-22.5 2.2l3.6-2c1-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.5-4.9l3.7-2c.9-.5 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm8.4-5.3l3.6-2c1-.5 2-.3 2.5.4l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1462.6 985.5l20 27.6-27.9 16.1-20-27.5z"/>
      <path d="M1451.9 1018.3l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.5-4.9l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.9-.5-2.1.5-2.6zm8.4-5.3l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm-22.5 2.1l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.5 2.6l-3.6 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm8.5-4.9l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-1 .4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm8.4-5.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm-22.5 2.3l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.4 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.6-.7-.4-2 .5-2.6zm8.6-4.9l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.3-5.2l3.7-2.2c.8-.4 1.9-.2 2.4.5l2.4 3.3c.5.9.4 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g opacity=".3">
      <path fill="#878787" d="M1605.8 1070.7l-25-6.8-43.5 4 1.9 3.7-1 .6-1.3.7-40.4 23.5 22.3 87 2.9.6 73.7-42 14.8 10.5-31.7 19.5 3 1.3 30.8-19.6 2.2.6 7-4-19.1-12.2 22.6-13.2 3.7-2.1 4.2.8-27-52.9"/>
    </g>
    <g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1602 1085.8v50.6l-82.4 47.8v-49.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1494 1098.6l25.6 36.2v49.4l-51.1-29.5V1104z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1602 1090.9l-82.4 47.6-.4-6.2 43.1-21.3 39.7-22.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1579.7 1048l27.6 37.8-89 51.6-27.5-37.8z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1468.5 1104.3l.8-.4 24.7-5.3 25.6 35v5l-3 1.8-27.6-37.9-20.5 4.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1552.1 1054l27.6-6-89 51.6-27.5 5.9z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1580.6 1046l27.5 37.9-89 51.5-27.4-37.8z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1553 1051.9l27.6-5.9-88.9 51.6-27.5 5.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1518.3 1137.4l.9-2-27.5-37.8-1.2 2.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1464.2 1103.5l-1 2 27.3-5.6 1.2-2.3z"/>
      <path fill="#B2B2B2" d="M1608.1 1083.9l-89 51.5-.8 2 89-51.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1572.8 1153.3l-10.6 6.2V1139l10.6-6.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M1598 1164.6l-2-1.3v-16.2l2-.3z"/>
        <path fill="#B2B2B2" d="M1600.2 1163.3l-2.2 1.3v-18l2.2.5zm-18.4-7.2h.1v17.8l-2.2 1.2V1159zm-20.1-11.6v17.7l-2 1.3v-16.1zm-2.1 19l-2.2-1.3v-16l2.2 1.2z"/>
        <path fill="#DADADA" d="M1579.7 1175.1l-2.1-1.2v-16.2l2 1.3zm.5-14.6l-.3-.7 11-15.2.5.8z"/>
        <path fill="#DADADA" d="M1602 1146.9l.4.8-11-2.3-.5-.8zm-47-1.7l24.9 14.6.3.7-25-14.4z"/>
      </g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1595.5 1098v13.2l-14.5 8.4v-13.2z"/>
      <path fill="#3C3C3B" d="M1595.5 1101.8v1.7l-14.5 8.4v-1.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1571.7 1111.5v13.1l-14.5 8.5v-13.2z"/>
      <path fill="#3C3C3B" d="M1571.7 1115.3v1.6l-14.5 8.5v-1.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1542.4 1128.4v13.2l-14.5 8.5v-13.2z"/>
      <path fill="#3C3C3B" d="M1542.4 1132.3v1.6l-14.5 8.5v-1.8z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1595.7 1116.4v13.2l-14.5 8.4v-13z"/>
      <path fill="#3C3C3B" d="M1595.7 1120.3v1.6l-14.5 8.5v-1.8z"/>
      <g>
        <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1542.6 1146.9v13.1l-14.6 8.4v-13.2z"/>
        <path fill="#3C3C3B" d="M1542.6 1150.6v1.8l-14.6 8.3v-1.6z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M1566.1 1130l-11 15.2 24.9 14.6 11-15.2z"/>
        <path fill="#B2B2B2" d="M1577.2 1132.5l-11-2.4 24.8 14.5 11.2 2.3z"/>
      </g>
      <g>
        <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1485.3 1138v13l14.6 8.5v-13.2z"/>
        <path fill="#3C3C3B" d="M1485.3 1141.7v1.6l14.6 8.5v-1.7z"/>
      </g>
      <g>
        <path fill="#B2B2B2" stroke="#3C3C3B" stroke-miterlimit="10" d="M1485.5 1119.5v13.2l14.5 8.3v-13z"/>
        <path fill="#3C3C3B" d="M1485.5 1123.3v1.7l14.5 8.3v-1.6z"/>
      </g>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1526 1087.5l20 27.6-27.9 16.1-20-27.5z"/>
      <path d="M1515.2 1120.3l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm8.6-4.9l3.6-2.1c1-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.8.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6zm8.3-5.3l3.7-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm-22.4 2.2l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.2-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.9-.5-2.1.5-2.6zm8.5-5l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm8.4-5.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.9.5-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm-22.5 2.3l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.3 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.5-2 .5-2.6zm8.6-4.9l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.3-5.2l3.7-2.2c.8-.4 1.9-.2 2.4.5l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.5-2 .5-2.5z" fill="#4A4A49"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1553.7 1070.4l20.1 27.6-28 16.1-20-27.5z"/>
      <path d="M1543 1103.2l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.5-4.9l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.5-2.6zm8.3-5.3l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.4l-2.4-3.3c-.6-.8-.4-2 .5-2.6zm-22.4 2.1l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-1 .4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm8.5-4.9l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.5 2.5l-3.6 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm8.3-5.2l3.7-2.2c.9-.5 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .4-2.6zm-22.3 2.2l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.4-4.9l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.3 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.6-.8-.4-2 .5-2.6zm8.4-5.3l3.6-2c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1582.4 1053.5l20 27.6-27.9 16.1-20.2-27.5z"/>
      <path d="M1571.6 1086.3l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.4 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6zm8.4-4.9l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.5-2.6zm8.4-5.3l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.4l-2.4-3.3c-.7-.8-.4-2 .4-2.6zm-22.4 2.1l3.7-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.5-4.9l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5 1 .3 2.2-.6 2.6l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm8.4-5.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.6zm-22.4 2.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.5-4.9l3.6-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4l-2.4-3.3c-.7-.8-.4-2 .4-2.6zm8.3-5.2l3.6-2.2c.9-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.2c-.7-.8-.4-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1423.8 840.2l20 27.6-27.9 16.1-20-27.5z"/>
    <g fill="#4A4A49">
      <path d="M1413 873l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6zm8.6-5l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.4-5.2l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.9-.5-2.1.5-2.6zm-22.5 2.1l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm8.5-4.9l3.7-2.1c.8-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.4l-2.4-3.3c-.8-.9-.5-2.1.4-2.6zm8.4-5.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.5l-3.6 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .5-2.6zM1402 857l3.6-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.4 2-.6 2.6l-3.6 2c-.8.5-1.9.4-2.4-.4l-2.4-3.3c-.6-.7-.3-2 .5-2.6zm8.5-4.9l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.5-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.3-5.3l3.7-2c.8-.5 1.9-.4 2.4.4l2.4 3.3c.5.8.4 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.6z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1460.8 818l20.2 27.5-28 16.2-20.2-27.5z"/>
      <path d="M1450 850.8l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .4-2.6zm8.6-5l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6zm8.4-5.3l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.2-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm-22.5 2.2l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm8.5-5l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.3 2-.6 2.5l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm8.4-5.2l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm-22.5 2.3l3.6-2c1-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.6zm8.5-5l3.7-2c.9-.5 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .4-2.6zm8.4-5.1l3.6-2.2c1-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.8-1-.5-2.2.5-2.6z" fill="#4A4A49"/>
    </g>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1354 799.3l20.2 27.7-28 16.1-20.2-27.6z"/>
    <g fill="#4A4A49">
      <path d="M1343.3 832.2l3.7-2.2c.8-.4 1.9-.2 2.4.5l2.4 3.3c.6.8.4 2.1-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .4-2.5zm8.5-5l3.6-2.2c.9-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6zm8.3-5.2l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.4-2.6zm-22.3 2l3.6-2c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6zm8.4-4.8l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.6-.9-.4-2.1.5-2.6zm8.4-5.3l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.7-.8-.4-2 .5-2.6zm-22.4 2.3l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.4-5l3.7-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.7-.8-.4-2 .4-2.6zm8.4-5.2l3.6-2c1-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.8.5-1.9.4-2.4-.4l-2.4-3.3c-.7-.8-.4-2 .5-2.6z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1391 777.1l20.1 27.6-28 16.2-20-27.6z"/>
      <path d="M1380.3 810l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.9-.5-2.2.5-2.6zm8.6-5l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6zm8.3-5.3l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm-22.5 2.2l3.7-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm8.6-5l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.3-5.2l3.7-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.5l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.9-.5-2.1.4-2.6zm-22.4 2.3l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.5l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2.1.5-2.6zm8.5-5l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.3 2-.6 2.6l-3.6 2c-.8.5-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.6zm8.3-5.3l3.7-2c.9-.5 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1283 759.3l20 27.6-27.9 16.2-20-27.6z"/>
    <g fill="#4A4A49">
      <path d="M1272.3 792.1l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm8.5-5l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5.9.3 2.2-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.4l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm8.4-5.1l3.6-2.2c.9-.5 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.6 2.5l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2.1.5-2.6zm-22.5 2l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.5-2 .5-2.6zm8.5-4.9l3.7-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .4-2.6zm8.4-5.2l3.6-2.2c1-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2c-.8.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.5zm-22.5 2.3l3.7-2.2c.8-.4 1.9-.2 2.4.5l2.4 3.3c.5.9.4 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.6-.8-.4-2 .5-2.6zm8.6-5l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6zm8.3-5.2l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.4 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.5-2.6z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1320 737l20 27.6-27.9 16.3-20-27.7z"/>
      <path d="M1309.2 770l3.7-2.2c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6 1 .4 2.2-.6 2.6l-3.5 2.2c-1 .4-2 .2-2.4-.5l-2.4-3.3c-.7-.9-.4-2.1.4-2.6zm8.6-5l3.6-2.2c.9-.5 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.5 2.5l-3.6 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.3-5.4l3.7-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .4-2.6zm-22.4 2.3l3.6-2.2c.9-.4 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.5zm8.5-5l3.7-2.2c.8-.4 1.9-.2 2.4.5l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.5zm8.4-5.2l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.9-.5-2.1.5-2.6zM1298 754l3.7-2.1c1-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.5-2.6zm8.6-5l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm8.4-5.3l3.6-2.1c1-.5 2-.3 2.4.5l2.5 3.2c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g fill="#4A4A49">
      <path d="M934 998.4l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5 1 .3 2.2-.6 2.6l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.6-.8-.5-2 .5-2.6zm8.6-5l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.5l-3.5 2.2c-.9.4-2 .2-2.4-.5L942 996c-.8-.8-.5-2 .5-2.6zm8.4-5.2l3.6-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.3 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm-22.6 2.2l3.7-2.2c.8-.4 2-.3 2.4.5l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4L928 993c-.7-.7-.5-2 .4-2.5zm8.6-4.9l3.6-2.2c.9-.4 2-.2 2.4.5l2.4 3.3c.6.8.4 2.1-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.5zm8.3-5.3l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm-22.4 2.3l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.5-5l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6zm8.4-5.2l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.9-.5-2.1.5-2.6z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M980.5 943.2l20 27.5-27.9 16.3-20-27.7z"/>
      <path d="M969.7 976l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.5l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.6-.8-.3-2.1.5-2.6zm8.6-5l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.5-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.3-5.3l3.7-2c.8-.5 1.9-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4l-2.5-3.3c-.7-.7-.4-2 .5-2.6zm-22.4 2.3l3.6-2.2c.9-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.5zm8.5-5l3.7-2.2c.8-.4 1.9-.2 2.4.5l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.3-5.2l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.9-.5-2.1.5-2.6zm-22.4 2.2l3.6-2c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.5-2.6zm8.5-5l3.7-2c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm8.4-5.2l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g fill="#4A4A49">
      <path d="M1021.4 1059.1l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.5 1 .3 2.2-.6 2.6l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.6-.8-.5-2 .5-2.6zm8.6-5l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.5l-3.5 2.2c-.9.4-2 .2-2.4-.5l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.3-5.1l3.7-2.2c.8-.5 1.9-.3 2.4.5l2.4 3.3c.5.8.3 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.8-.5-2 .5-2.6zm-22.5 2l3.7-2c.8-.5 1.9-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-1 .6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.5-2 .4-2.6zm8.6-4.9l3.6-2c.9-.5 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.5 2.6l-3.6 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6zm8.3-5.2l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .4-2.6zm-22.4 2.3l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.5-5l3.7-2.1c.8-.5 1.9-.3 2.4.4l2.4 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.7-.8-.5-2 .5-2.6zm8.4-5.2l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.9-.5-2.1.5-2.6z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10" d="M1068 1003.9l20 27.5-27.9 16.3-20-27.7z"/>
      <path d="M1057.2 1036.7l3.7-2c.8-.6 1.9-.4 2.4.4l2.4 3.3c.5.8.4 2-.6 2.5l-3.6 2.2c-.8.4-1.9.2-2.4-.5l-2.4-3.3c-.6-.8-.3-2.1.5-2.6zm8.6-5l3.6-2c.9-.6 2-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.5 2c-.9.5-2 .4-2.4-.4l-2.4-3.3c-.8-.7-.5-2 .5-2.6zm8.3-5.3l3.7-2c.8-.5 1.9-.4 2.4.4l2.4 3.3c.6.8.4 2-.6 2.6l-3.6 2c-.8.6-1.9.4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.6zm-22.4 2.3l3.6-2.2c.9-.4 2-.2 2.4.5l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2c-.9.6-2 .4-2.4-.4l-2.4-3.3c-.7-.7-.4-2 .5-2.5zm8.5-5l3.6-2.2c1-.4 2-.2 2.4.5l2.5 3.3c.5.9.3 2.1-.6 2.6l-3.6 2.1c-.8.5-1.9.3-2.4-.5l-2.4-3.2c-.8-.8-.5-2 .5-2.6zm8.4-5.2l3.6-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.6 2.6l-3.5 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.8-.9-.5-2.1.5-2.6zm-22.6 2.3l3.7-2.1c.9-.5 2-.3 2.4.4l2.4 3.3c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.5l-2.4-3.2c-.7-.9-.4-2.1.5-2.6zm8.6-5l3.7-2.1c.8-.5 1.9-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.6 2.6l-3.5 2.1c-1 .5-2 .3-2.5-.5l-2.4-3.2c-.7-.8-.4-2 .5-2.6zm8.4-5.3l3.6-2.1c.9-.5 2-.3 2.4.5l2.4 3.2c.6.9.4 2.1-.5 2.6l-3.6 2.1c-.9.5-2 .3-2.4-.4l-2.4-3.3c-.8-.8-.5-2 .5-2.6z" fill="#4A4A49"/>
    </g>
    <g>
      <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1144.3 923.8v16.6L1126 951v-16.7z"/>
      <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1144.3 929.3v2.2L1126 942v-2z"/>
      <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1144.3 928.6v2l-18.3 10.8v-2.2zm-46.8 15.5l1.8 1V928l-1.8-1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1148.6 850.5v28.7l72 41.8v-28.8z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1242.9 861.6l22.3 4.7v28.9l-44.6 25.8v-28.8z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1260.8 874.4v23.3l-35.9 20.7v-23.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1260.8 874.4v2L1225 897v-1.8z"/>
      <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1168 817.5l-24 33 77.6 45 24-33zm24.2 5.1l-24.1-5.1 77.6 45 24 5z"/>
      <path fill="#9D9D9C" d="M1167.3 815.4l-24 33 77.6 45 24-33z"/>
      <path fill="#4A4A49" d="M1191.4 820.5l-24.1-5 77.6 45 24 5z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1204.7 877.1v34.7l-86.9 50.4v-34.8z"/>
      <path fill="#B2B2B2" d="M1204.7 882.4l-86.9 50.3-.3-6.6 46.9-37.7 40.3-8.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1091 890.5l26.8 37v34.7L1064 931v-34.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1070.3 909.6v20.2l41.4 24v-20.3l-41.4-24zm128.5-19.2l-21.5 12.4v20.3l20.7-12 .8-.5v-20.2zM1146 921l-21.5 12.5v20.2l21.5-12.4V921z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1110 934.4v16.7l-38.2-22.1v-16.7z"/>
      <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1181.2 837.2l29.1 39.9-93.7 54.4-29.1-39.9zm-29 6.2l29-6.2-93.7 54.4-29 6.1z"/>
      <path fill="#CBD000" class="fillgreen" d="M1182.2 835.1l29 39.9-93.7 54.3-29-39.8z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1153.2 841.4l29-6.3-93.8 54.4-29 6.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1197.3 909.8l-18.5 10.6v-16.6l18.5-10.8zm-28.5 22.8l-12.6 7.3v-24.4l12.6-7.3z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1167.8 910.4l-11.6 6.8v-1.7l12.6-7.3v24.4l-1 .7zm29.5-11.7v2l-18.5 10.8v-2.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1116.6 931.5l1-2.2-29.2-39.8-1.2 2.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1059.4 895.7l-1 2 28.8-5.8 1.2-2.4zm151.9-20.7l-93.8 54.3-1 2.2 93.8-54.4zm33.6-14.5l-24 33 .7 2 24-33 24.2 5-.8-2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1220.9 893.4l-16.2-9.3v1.6l17 9.7zm-141.8 40.1l1.8 1v-17.2l-1.8-1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#3C3C3B" d="M1140 868.5l-6-3.5-5.9 3.5 6 3.4z"/>
        <path fill="#B2B2B2" d="M1138.6 868.5l-4.5 2.5-4.6-2.5 4.6-2.6z"/>
        <path fill="#DADADA" d="M1134 876.5V872l-5-2.9v1.6z"/>
        <path fill="#B2B2B2" d="M1139 869v4.6l-5 3v-4.7z"/>
        <path fill="#DADADA" d="M1134 865.9v5.1l4.6-2.5z"/>
      </g>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#3C3C3B" d="M1132 873.2l-6-3.5-5.9 3.5 6 3.4z"/>
        <path fill="#B2B2B2" d="M1130.6 873.2l-4.5 2.7-4.5-2.7 4.5-2.6z"/>
        <path fill="#DADADA" d="M1126 881.2v-4.6l-5-2.9v1.6zm0-10.6v5.3l4.6-2.7z"/>
        <path fill="#B2B2B2" d="M1131 873.7v4.6l-5 3v-4.7z"/>
      </g>
      <path fill="none" stroke="#3C3C3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1110.2 917.9l93.5-53.2m-102.8 40.7l93.5-53.2m-86.3 31.2l25.3 36.1m-5-38.9l20.8 29.7m-9.7-45.1l25.8 35.7m-10.4-45.1l26.2 36m-9.9-43.7l25.8 34.8"/>
    </g>
    <g stroke-miterlimit="10">
      <path opacity=".3" fill="#878787" stroke="#878787" d="M1367 969l-2.8.1c-6.2.9-14.3 5-15.7 6l-1.4.4c-4.5 2.3-6.8 4-9.4 5.8l-.5.4-.2-.4-.5-.5c-.5-.3-1-.5-1.7-.5a23 23 0 0 0-8.4 2.2h-2.4l-.6.2c-2.3.2-8.5 1.2-12.8 2.4a16 16 0 0 0-7.8 4.5c-.5.6-.9 1.6 0 2.3.7.5 1.6.8 2.9 1 .7 0 1.7 0 2.8-.2 6-.8 14.2-5 15.4-5.8 1.4-1 2.6-2.7 3-3.3l.1-.3h.2c4-1.6 5.4-1.9 6.3-1.8.5 0 1.3.4 1 .8-.1.3-2 1.2-2.9 1.7l-63 38c-.2.1-.4.9-.4 1 .1.3.4.4.7.6s.9.2 1.1 0l1-.4 63.3-38.1s6.5-4.5 11.6-7.7l.5-.2v.3c.1.8 1.3 1.5 2.6 1.6h1.3c10.5-1.5 17.6-3.7 19.7-5.9.8-.7.9-1.6.3-2.5l-.7-.7c-.4-.5-1.4-.9-2.6-1"/>
      <g stroke="#3C3C3B">
        <path fill="#FC0" d="M1299 901.2c-.7-.5-21.8 7.3-22.8 9.1-2.6 4.3 2.8 7 6.2 5.9 3.4-1 25.2-7.7 16.7-15z"/>
        <path fill="#B2B2B2" d="M1267.5 1022.8c0 .3.1.6.4.8.7.4 1.8.4 2.4 0 .3-.2.5-.5.5-.8v-97.9h-3.4v97.9z"/>
        <path fill="#EDEDED" d="M1270.4 924.2c-.6-.5-1.7-.5-2.4 0s-.6 1.1 0 1.6 1.8.5 2.4 0c.7-.5.7-1.3 0-1.6z"/>
        <path fill="#B2B2B2" d="M1268.8 920l-1-.7c-3-1.5-5.5-.9-11.7 4l1.8 2.2c7-5.6 7.7-4.1 8.6-3.6 1.1.5 1 2.4 1 3.4 0 0 .1.5.8.7h.9c1.4 0 1.7-.9 1.7-.9 0-2.3-1.1-9.5 11-13.8l-.9-2.6c-8.8 3-10.8 7.4-12.2 11.3z"/>
        <path fill="#FC0" d="M1240.6 928.2c-4.8 2.2-8 8.7-3.7 11.2 8.6 5 20.2-7.7 21.2-9.6s.9-5.4.9-5.4-13.6 1.6-18.4 3.8z"/>
        <path fill="#DADADA" d="M1297.8 900.1c-8.6-5-20.4 7.8-21.4 9.7-1 1.9 1.7 3.3 4.9 2.4 3.3-1 25-7 16.5-12zm-43.5 22.9c-3 .9-23.2 6.5-15.3 11.1 8 4.7 18.9-7.2 19.8-8.9 1-1.8-1.5-3.2-4.5-2.2z"/>
      </g>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1420.2 1005.2l-5.7-3.2-5.7 3.2 5.7 3.3z"/>
      <path fill="#B2B2B2" d="M1418.7 1005.2l-4.2 2.5-4.3-2.5 4.3-2.5z"/>
      <path fill="#DADADA" d="M1414.5 1012.9v-4.4l-4.8-2.8v1.5z"/>
      <path fill="#B2B2B2" d="M1419.2 1005.7v4.4l-4.7 2.8v-4.4z"/>
      <path fill="#DADADA" d="M1414.5 1002.7v5l4.2-2.5z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1409.5 1011.3l-5.7-3.2-5.6 3.2 5.6 3.3z"/>
      <path fill="#B2B2B2" d="M1408.2 1011.4l-4.4 2.4-4.3-2.4 4.3-2.5z"/>
      <path fill="#DADADA" d="M1403.8 1019v-4.4l-4.8-2.8v1.6z"/>
      <path fill="#B2B2B2" d="M1408.6 1011.8v4.5l-4.8 2.7v-4.4z"/>
      <path fill="#DADADA" d="M1403.8 1008.9v4.9l4.4-2.4z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1540.3 1075.7l-5.7-3.3-5.6 3.3 5.6 3.3z"/>
      <path fill="#B2B2B2" d="M1539 1075.7l-4.4 2.5-4.3-2.5 4.3-2.5z"/>
      <path fill="#DADADA" d="M1534.6 1083.4v-4.4l-4.8-2.7v1.4z"/>
      <path fill="#B2B2B2" d="M1539.4 1076.3v4.3l-4.8 2.8v-4.4z"/>
      <path fill="#DADADA" d="M1534.6 1073.2v5l4.4-2.5z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M1529.7 1081.9l-5.7-3.3-5.7 3.3 5.7 3.2z"/>
      <path fill="#B2B2B2" d="M1528.3 1081.9l-4.3 2.5-4.3-2.5 4.3-2.5z"/>
      <path fill="#DADADA" d="M1524 1089.5v-4.4l-4.8-2.8v1.6z"/>
      <path fill="#B2B2B2" d="M1528.8 1082.3v4.5l-4.8 2.7v-4.4z"/>
      <path fill="#DADADA" d="M1524 1079.4v5l4.3-2.5z"/>
    </g>
  </g>
  <g>
    <path opacity=".4" fill="#878787" d="M708.4 952.8l.4-4.2-5.1-3.5-2 .9.2-2.2-5-3.6-2 1 .1-2.2-5-3.6-3.8 1.8-7.6-5.4-1.8 1-1.3-1-6-.1-4.4 2-6.6 6-.2 1.6-3 1.4-1.8 21.7 18.5 13.8 36.3-16.2.5-9z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M670.3 949.8l5.7-3.5v-16.2l-5.8 3.5z"/>
      <path d="M670.2 933.6l5.8-3.5-5.3-3-5.8 3.4zm-5.3-3.1v16.2l5.4 3.1-.1-16.2zM677.5 954l5.8-3.4v-16.3l-5.8 3.4zm0-16.3l5.7-3.4-5.2-3-6 3.3z"/>
      <path d="M672 934.6l.2 16.3 5.3 3.1v-16.3z"/>
      <g>
        <path d="M684.8 958.2l5.7-3.4v-16.2l-5.8 3.3z"/>
        <path d="M684.7 942l5.8-3.4-5.2-3.1-6 3.4z"/>
        <path d="M679.4 938.9V955l5.4 3-.1-16.2z"/>
      </g>
    </g>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M668.7 977.6l22.3-12.8V943l-22.3 12.9z"/>
      <path d="M636.8 959.1l32 18.5v-21.7l-32-18.5z"/>
      <path d="M668.7 955.9l22.3-13-32-18.4-22.2 13z"/>
    </g>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M645.7 927.6l-6 6.5v1.6l16.3-9.4v-1.6l-6 .4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M688 943.3l-32-18.5-6 .4 31.8 18.6zm-6.2.5l-31.9-18.6-4.2 2.5 31.9 18.5zm-10.2 8.9l-32-18.5v1.6l32 18.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M677.6 946.2l-32-18.5-6 6.5 32 18.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M677.6 946.2l-6 6.5v1.5l16.3-9.4v-1.5l-6.1.5z"/>
    <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path opacity=".4" d="M681.2 953.4l7.9-4.7v-.5l-7.9 4.5zm0 .9l7.9-4.5v-.7l-7.9 4.6zm0 1.1l7.9-4.6v-.6l-7.9 4.5zm0 .9l7.9-4.5v-.7l-7.9 4.7zm0 1.1l7.9-4.6v-.6l-7.9 4.5zm0 1l7.9-4.6v-.6l-7.9 4.6zm0 .9l7.9-4.5v-.6l-7.9 4.5zm0 1.1l7.9-4.6v-.6l-7.9 4.5zM670.7 959.4l8-4.6v-.6l-8 4.5zm0 1l8-4.5v-.7l-8 4.6zm0 1l8-4.6v-.6l-8 4.6zm0 1l8-4.5v-.7l-8 4.6zm0 .9l8-4.5v-.5l-8 4.5zm0 1.1l8-4.6v-.6l-8 4.5zm0 1l8-4.6v-.6l-8 4.6zm0 1l8-4.6v-.6l-8 4.5z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M642 966.1l5.8-3.4v-16.3l-5.9 3.5z"/>
      <path d="M642 949.9l5.8-3.5-5.4-3-5.8 3.4zm-5.4-3.1v16.3l5.3 3V950zM649.2 970.3l5.8-3.4v-16.2l-5.9 3.3z"/>
      <path d="M649.1 954l5.9-3.3-5.3-3.1-5.8 3.4z"/>
      <path d="M643.9 951v16.2l5.3 3V954z"/>
      <g>
        <path d="M656.4 974.5l5.9-3.4V955l-5.9 3.4zm0-16.2l5.9-3.4-5.4-3-5.7 3.3z"/>
        <path d="M651.2 955.2v16.2l5.2 3v-16.1z"/>
      </g>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M658.3 932.4l3-1.8v2l-3 1.7zm-9.5-3.6l9.5 5.5v-1.9l-9.5-5.5z"/>
      <path d="M658.3 932.4l3-1.8-9.6-5.5-3 1.8z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M653.8 926.5l-.1-.2c0-.2.1-.5 0-.8v-.2c0-.2.1-.5 0-.8v-.1c0-.2.1-.5 0-.8v-.2c0-.2.1-.5 0-.8V921.5c0-.2.1-.5 0-.8v-.2c0-.2.1-.5 0-.8v-.1c0-.2.1-.5 0-.8v-.2c0-.2.1-.5 0-.8V916.7c0-.2.1-.5 0-.8v-1l-.2-.4-.2-.2-.1-.1h-.1l-.6-.2H651c-.2 0-.5 0-.6.3-.3.2-.7.5-.6 1l.1.5V927c0 .5.4.8.6 1 1.4.7 3.7 0 3.3-1.4zm-3-11.8l.2.2-.2-.2zm-1 1.1c0 .2 0 .5.2.7-.2-.2-.2-.5-.2-.7zm10 14.2l-.1-.2c.1-.2.2-.5.1-.7l-.1-.2c.1-.2.2-.5.1-.8l-.1-.2c.1-.2.2-.5.1-.8l-.1-.2c.1-.1.2-.4.1-.7l-.1-.2c.1-.2.2-.5.1-.8l-.1-.2c.1-.2.2-.5.1-.7l-.1-.2c.1-.2.2-.5.1-.8l-.1-.2c.1-.2.2-.5.1-.8l-.1-.2c.1-.1.2-.4.1-.7l-.1-.2c.1-.2.2-.5.1-.8l-.1-.2c.1-.2.2-.5.1-.7l-.1-.1c.2-.4.1-.8.1-.9l-.3-.5-.2-.2h-.2l-.5-.3H657c-.3.1-.6.1-.7.3-.3.2-.6.5-.5 1v11.7c0 .6.4.9.6 1 1.5.7 3.8 0 3.3-1.4z"/>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M675.5 942.3l3-1.8v2l-3 1.7zm-9.6-3.6l9.6 5.5v-1.9l-9.6-5.6z"/>
      <path d="M675.5 942.3l3-1.8-9.6-5.5-3 1.7z"/>
    </g>
    <path d="M670.8 936.3c.1-.2.2-.5.1-.8v-.2c0-.2.1-.5 0-.8V933.4c0-.2.1-.5 0-.8V931.5c0-.2.1-.5 0-.8v-.2c0-.2.1-.5 0-.8V928.6c0-.2.1-.5 0-.8V926.7c0-.2.1-.5 0-.8v-1l-.2-.4-.2-.2-.1-.1h-.1l-.6-.2h-1.5c-.2 0-.5 0-.6.3-.3.2-.7.4-.6 1l.1.5-.1.5.1.5-.1.4.1.5-.1.5.1.5-.1.5.1.4-.1.5.1.5-.1.5.1.5-.1.4.1.5-.1.5.1.5-.1.5.1.4-.1.5.1.5-.1.5.1.5-.1.4c0 .6.5.9.7 1 1.4.9 3.7.2 3.3-1.3l-.2-.2zm-.1-5.1l.1-.3-.1.3zm6.3 8.8l-.1-.3c0-.2.2-.5 0-.7v-.2c0-.2.2-.5 0-.8v-.2c0-.2.2-.5 0-.8v-.2c0-.2.2-.4 0-.7v-.2c0-.2.2-.5 0-.8v-.2c0-.2.2-.5 0-.7v-.2c0-.2.2-.5 0-.8v-.2c0-.2.2-.5 0-.8v-.2c0-.2.2-.4 0-.7v-.2c0-.2.2-.5 0-.8v-.2c0-.2.2-.5 0-.7v-.1c.2-.4 0-.8 0-1l-.2-.4-.2-.2h-.2l-.6-.3h-1.4c-.3.1-.6.1-.7.3-.3.2-.6.5-.5 1v11.7c0 .6.4.9.6 1 1.4.7 3.7 0 3.3-1.4z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M675.5 976.1l16-9.3v-7.1l-16 9.2z"/>
      <path d="M675.5 969l16-9.3-3.3-2-16 9.4z"/>
      <path d="M672.2 967v7.2l3.3 2v-7.3z"/>
    </g>
    <path fill="#878787" d="M501 1027l1.1.7c9.3 6.8 8.3 16.7-2.4 22-10 5.2-25 4.5-34.7-1.2l-13.4 6.9a4 4 0 0 1-2.7-.6c-.7-.5-1.3-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M452.4 1054.6c-.4 1.4-4 2.3-5.6-.4v-22.5l5.6.4s.2 20.5 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M477.3 1008.8a25.7 25.7 0 0 1-27.5 26.2 29.7 29.7 0 0 1-27.5-29.6 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.5 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M450 980h-3.1a39 39 0 0 1 7.9 23.4c0 12-5.7 22.3-14.5 28.4 3 1.4 6.2 2.2 9.6 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.7-28.7z"/>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M498.4 951s14 6.4 73.7 1.7c35.2-2.8 95.6-28.3 95.6-28.3l3.7-.1"/>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M465.2 934.1S505 951 564.6 946c41.8-3.5 108.8-17.9 108.8-17.9h3.8"/>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M464.5 934.7s38 18 98 15.8c23-.9 110.6-22.8 110.6-22.8h3.7"/>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M465.2 934.7s39.6 6.7 77.3 5.3c46.8-1.6 125-15.5 125-15.5l3.7.1"/>
    <g fill="#EDEDED" stroke="#3C3C3B" stroke-miterlimit="10">
      <path d="M387.3 968.8l3.5-2v-3.4l-3.5 2zm-3.8-2.2l3.8 2.2v-3.3l-3.8-2.3z"/>
      <path d="M387.3 965.5l3.5-2-3.9-2.3-3.4 2zm28.2 19.5l3.4-2v-3.3l-3.4 2zm-3.9-2.2l3.9 2.3v-3.4l-3.9-2.2z"/>
      <path d="M415.5 981.7l3.4-2-3.8-2.2-3.5 2zM417 952.9l3.5-2v-3.4l-3.5 2zm-3.8-2.2l3.8 2.2v-3.4l-3.8-2.2z"/>
      <path d="M417 949.5l3.5-2-3.9-2.1-3.4 2z"/>
      <g>
        <path d="M443.7 968.7l3.5-2v-3.4l-3.5 2zm-3.8-2.2l3.8 2.2v-3.3l-3.8-2.2z"/>
        <path d="M443.7 965.4l3.5-2-3.9-2.3-3.4 2z"/>
      </g>
    </g>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M323.8 852.1s92 43.7 158.6 53.7c70.2 10.6 173.8 12.8 173.8 12.8l3.8-.2"/>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M373.2 816.5s60.5 63.4 141 78c61.8 11.4 136 20 136 20l3.7-.1M357 872.2s76.2 33.6 146.7 45.3c63 10.6 153 .7 153 .7h3.5"/>
    <path fill="none" stroke="#CBD000" class="strokegreen" stroke-linecap="round" stroke-miterlimit="10" d="M352.6 805.8s81.8 77.2 144 93.8C560.1 916.6 650 915 650 915l3.8-.4"/>
    <path d="M499.6 953.7V945.6c0-.1 0-.2-.2-.3v-.1h-.2v-.1c-.2 0-.4 0-.5-.2h-.2v-6.1l-30-24.8v-.1L424 877l-3.3-35.5 21.7 11v6.7c0 .5.3.7.4.8 1.2.6 3 .1 2.6-1v-4.3l17.4 8.9h.2l.2-.1.1.4-.1.4.1.4-.1.4.1.4-.1.4.1.3-.1.4.1.4-.1.4.1.4-.1.4.1.4-.1.3.1.4-.1.4.1.4-.1.4.1.4-.1.3.1.4-.1.4c0 .5.4.7.5.8 1.1.6 2.9 0 2.6-1l-.1-.2V863.6l-.1-.3-.1-.1-.1-.1.4-.2V856.2l-19.1-15.9h-.1l-28.6-23.7-5.6-60.5c0-.5-.4-.8-.9-.7-.4 0-.6.3-.7.7l-2.5-1.4v-.6c0-.5-.3-.8-.7-.8-.5 0-.8.4-.8.8v.6l-3 1.7c0-.3-.4-.6-.6-.6-.5 0-1 .3-1 .7l-4.6 50.8L355 792h-.1l-3 1.7-.1.1v4l.3.2v8.2c0 .5.4.7.5.8 1.1.6 2.8 0 2.6-1l-.1-.2v-5.1l17.8 11.8v6.4c0 .5.3.7.4.8 1.2.5 2.9 0 2.6-1v-3.6l20.5 13.5-3.3 34.6-68.3-24.1h-.4l-4.8 2.8v6.1h-.3c-.3 0-.4.1-.5.2a1 1 0 0 0-.5.8v9.2c0 .5.4.6.5.7 1.1.6 2.8.1 2.6-1l-.1-.1V850.8l1.7 1.1v4.5c0 .4.4.6.5.7 1.1.6 2.8.1 2.6-1l-.1-.1V854.2l25 16.5v7.6c0 .5.3.7.4.8 1.2.6 2.9.1 2.6-1V873.4l1.6 1.1.1.4v1.1c0 .5.3.7.4.8.9.5 2 .3 2.5-.3l31.3 20.8-17.8 191.4c0 .5.2.8.6.8h.1c.4 0 .8-.2.8-.6l.8-8.1 17-5.8 15.6 25.3v9.2c0 .5.4.8.8.8.5 0 .8-.4.8-.8v-9.2l15.6-25.3 17 5.8.8 8c0 .5.4.7.7.7h.1c.5 0 .8-.3.7-.8l-16-170.9 31.6 16v8.1c0 .5.4.7.4.8 1.2.6 3 .1 2.6-1v-5.3l1.8.8v2.5c0 .5.4.7.5.8 1.1.6 2.8 0 2.5-1v-.7l25.4 12.8h-.1a1 1 0 0 0-.5.8l.1.4v8.8c0 .5.3.7.4.8 1.2.6 2.9 0 2.6-1l-.1-.2.1-.5-.1-.1.1-.6-.1-.1.1-.6h-.1l.1-.7h-.1l.1-.6-.1-.1.1-.6-.1-.1.1-.6h-.1l.1-.6-.1-.1.1-.6-.1-.1.1-.6h-.1l.1-.7h-.1l.1-.7-.2-.3v-.1l-.2-.1 2.2-1.3v.1l.1.4v8.1c0 .5.3.7.4.8 1-5.4 2.8-6 2.4-7zm-33.5-86.2zm.2 1.8l-.1.4v-.4zm-.1-1.6zm-.1-.2c0-.2.2-.4 0-.6.2.2.2.4 0 .6zm0-.8c0-.2.2-.4 0-.5.2.2.2.4 0 .5zm0-4.1c.2.2 0 .4 0 .6.2-.3.2-.5 0-.6zm0 4.1zM351.8 805v-.2.2zm0 .7v-.2.2zm-33.6 42.5zm0 5.2v-.2.2zm0 2.2v-.2.2zm0 .5zm0-8.3c-.1-.3-.1-.6.2-.9-.3.3-.3.6-.1 1zm.7 1.2zm0 .6zm0 3.8zm0 2zm.1-8s-.1-.3 0-.4c-.1.1-.1.3 0 .4zm1-5.6l3 2.6-.2.2-2.8 1.7v-4.5zm.3 7.2zm.7-.4v-.2.2zm.2 6.9v-.2c-.1.1 0 .2 0 .2zm0-1.5l-.1.4v-.4zm0-.7l-.1.4v-.4zm-.1-2.9l-.1.4v-.4zm0-1.5l-.1.3v-.3zm-.1-1.9h-.2l-.1-.2h-.1l2.2-1.2v2.1l-1.8-.7zm1.9-1l-.1.3v-.2zm-.1 2.6l-1.2-.8 1.3.4-.1.4zm0-.2v-.2.2zm0 1.5v-.2.2zm0 .7v-.2.2zm0-3zm0-3l.3-.2-.2.2zm.9 6.8zm0 .6zm.3-8.1h-.5l-2.6-2.1 3.1 1.5v.6zm0-1.4l-1.5-.7 1.5.3v.4zm0-1l-3.5-.8 3.5-2v2.9zm80.1-84.8l3-1.6-1.7 2.4-1.4-.6.1-.2zm.9 1.4l-.4.5-.6-1 1 .5zm-1 .4l.4.7-.5.7.1-1.4zm-.2 2.5l.8-1.4.4.8-1.3.7v-.1zm-.1 1l1.8-1 .5.8-.7 1-1.6-.8zm2.5.4l.7 1.4-1.2-.6.5-.8zm-1.5 1.3l-.4.6-.6-1.2 1 .6zm-1.1 0l.4 1-.6 1 .2-2zm-.3 3.1l1-1.6.5 1-1.6.8v-.2zm-.1 1l2-1.1.6 1-.8 1.2-1.8-.9v-.3zm2.9.5l.8 1.6-1.4-.7.6-1zm-3 .3l1.4.8-.6.9-.8-1.7zm-.1 1l.7 1.3-1 1.3.3-2.6zm-.4 3.7l1.3-2 .6 1.1-1.9 1v-.1zm2.3-.2l.6 1-.9 1.3-2-1 2.3-1.3zm.5-.3l1.5-.9-1.1 1.7-.4-.8zm1.3 3.6l-1.6-.8.7-1 1 1.8zm-2.5 7l2.7 1.6-2.2 1.1-.4.2-1-1.7 1-1.2zm-1.1.7l-1.2-2 1.9 1-.7 1zm1.9-4.6l2-1-1.3 2-.7-1zm1.5 3.9l-1.7-.8.7-1 1 1.8zm-1.8-4.5l-.9-1.4.7-1 2.2 1.4-2 1zm-1.1-2l-.9-1.5 1.3.8-.4.7zm-1.2-1l.9 1.5-1.2 1.7.3-3.2zm-.4 4.3l1.6-2.2.6 1.2-1.5.8-.7.4v-.2zm0 .9l1-.6 1.5-.8.8 1.4-1 1.2-2.5-1.1.1-.1zm-.3 1.6l1 1.8-1.3 2 .3-3.8zm-.4 5l1.8-2.6.8 1.4-2.5 1.3-.1-.1zm-.1 1l3-1.7.8 1.5-1 1.6-2.8-1.4zm4.2.4l1.2 2.3-2-1 .8-1.3zm-2 1.9l-.8 1.2-1.4-2.6 2.3 1.4zm-2.3-.5l1.2 2.2-1.6 2.4.4-4.6zm-.6 5.6l2.1-3 1 1.8-3.1 1.4v-.2zm-.1 1l3.4-1.7 1 1.7-1.2 1.7-3.2-1.4v-.2zm4.7.5l1.4 2.5-2.4-1 1-1.5zm1.4 13.9l-3.5 2-.1-.3 3.4-1.8.2.1zm0-.7h.2l-.2.1zm-3.1 3.3l3.1-1.4-2.2 3.1-1-1.7zm2.6 5.5l-2.7-1.2 1.1-1.6 1.6 2.8zm-1-9h-3l.9-1.2 2 1.1zm-1.7-1.7l1.1.4-1.1-.4zm-.5-.2l-.6-.3.6.3zm-.3.4l-1 1.4-1.4-2.3 2.4.9zm-.3 4l-3 1.6 2.2-3 .8 1.4zm-.5-1.9l.2-.3h3.6l.6.3-3.4 1.7-1-1.7zm4.2-.7l-.6-.3 1 .3h-.4zm-2.2-2l1-1.6 1.5 2.7-2.5-1.2zm.1-4.3l3.1-1.4-2 3-1-1.6zm-.2-.6l-1.3-2 1.2-1.7 3.3 2-3.2 1.7zm-.6-4l-1 1.4-1.6-2.8 2.6 1.5zm-2.8-.7l1.4 2.6-2 2.9.6-5.5zm-.6 6.6l2.4-3.5 1 2-.8.4-2.6 1.2v-.1zm0 1l2.8-1.6 1-.4 1 2-1.2 1.7-3.7-1.6v-.2zm1 1.5l-.9-.3-.2-.3 1 .6zm-1.3.1l1.5 2.5H399l.2-2.5zm-.2 2.8h1.9v.2l-2.2 3.3.3-3.5zm-.4 4.6l.2-.3 3.5-1.8.1.2-3.8 2zm0 .8h.2l4-2 1.2 2-1.3 2-4.1-1.8v-.2zm8.2 125.5l-2 .7 1-1.2 1 .5zm-.7-1l.1-.2.5.8-.6-.5zm-1 67l-1.8-1.1 1.6-.9.8 1.2-.5.8zm1-.3l.7 1.3-1.1-.7.4-.6zm-13.1 34l9-3-6 8-3-5zm7.7 13.4l-8.2-2.7 3.6-4.7 4.6 7.4zm-7.9-13.8l-1.2-1.9 10.6-5.6 2.5 1.5-2 2.7-9.9 3.3zm0-40.1l9.4 5.6-9.6 5-3.5-5.7 3.7-4.9zm-.1-.7l-9.1-5.5 10.5 3.6-1.4 2zm.8 13.9l-11.3 3.8 10.3-5.5 1 1.7zm.3.3l2.8 4.7-3.3 4.6-13.5-4.5 14-4.8zm-.8 9.6l-1.7 2.3-11.2-6.6 12.9 4.3zm-2.1 2.8l-3.8 5.1-7.2-11.5 11 6.4zm.5.3l10.2 6-10.2 5.5-4-6.3 4-5.2zm.8 14l-12.3 4.2 11.2-6 1.1 1.8zm12.9-5.8l1.6 1-3.2 1 1.6-2zm-.1-.7l-2.3-1.3 2-1.1 1 1.5-.7.9zm-2.9-1.7l-10.5-6.3 1.9-2.4 8 2.7 3 4.8-2.4 1.2zm-8.3-9l3.1-4.3 4.2 6.6-7.3-2.4zm.4-9.7l8.1-2.6-5.3 7-2.8-4.4zm-.2-.3l-1.1-1.8 9.9-5.3 2.1 1.3-2 2.7-9 3zm8.8-7.6l-9.7-5.8 1.5-2 7.4 2.5 2.7 4.2-2 1zM395 998l2.9-3.8 3.7 6-6.6-2.2zm.4-8.7l7.4-2.5-5 6.5-2.4-4zm-.3-.5l-1-1.6 8.6-4.6 2.2 1.3-1.6 2.2-8.2 2.7zm-2.7-107.7l3.6 5.9-4.7 6.4 1.1-12.3zm-.7-8.8l-1-4.3h1.4l-.4 4.3zm7 18.1l-2-3.3 2-2.9 5.6 3.3-5.5 3zm.3 1.5l-5.1 1.8 4.8-2.6.3.8zm-2.6-5.3l-3.8-6 5.7 3.3-2 2.7zm2.3-3.2l-4.8-2.8 5.4 1.9-.6 1zm-2.4-5.8l3.1-1.8.3.4-3.4 1.4zm3.7-.9l1.6 2.7-1.6 2.2-5.6-2.8 5.6-2zm-.4-1.5l-1.5-2.6 4-2.1 2.9 1.7-5.4 3zm.5-6.6l.5-.6 3.1 1.1-1.5.8-2.1-1.3zm1.5 1.7l-3.8 1.9-.2-.3 2-2.8 2 1.2zm-2-1.8l-1-.6h1.4l-.4.6zm-1.8-1.2l-1.7-1 2.7 1h-1zm1.5 1.5l-1.9 2.6-2.1-3.5h2.4l1.6 1zm-2 3.6zm.3.5l1.5 2.6-5.5 3-.5-.3 3.4-4.8 1.1-.5zm-4.1 6.3l4.6 2.3-5.4-2h.1l.7-.3zm2.9 8.4l1.9 3.1-7.1 3.8v-.1l5.2-6.8zm3 4.7l1.7 2.9-2 2.7-8-2.6 8.2-3zm-11 37.4l9.4-3.1 2 3-2.3 3-9-2.9zm8.7 3.5l-1.1 1.5-7.4-4.4 8.5 2.9zm-7.7-4.3l7.3-4 .8 1.2-8 2.8zm5.1-8.5l2.5-3.4 6.4 3.8-6.5 3.5-2.4-3.9zm2.4-4l-6.3-3.8 7.4 2.4-1 1.4zm-6.9-4.5l8.5-3 1.7 3-2.1 2.7-8-2.7zm1-.9l6.6-3.6.7 1.1-7.3 2.5zm-1.2 0l5.5-7.3 2 3.3-7.5 4zm5.8-7.7l2.4-3.2 5.7 3.5-6 3.3-2.1-3.6zm2.3-3.8l-5-3 5.8 2-.8 1zm-.4.4l-2.2 3-4.2-6.9 6.4 3.9zm-2.5 3.4l-5.2 7 1.3-13.3 4 6.3zm1.5 13.6l-2.3 3.1-4.5-7.2 6.8 4zm0 7.6l-8.3 4.5 6-8.1 2.2 3.6zm-1 10.6l-2.5 3.5-5-7.8 7.6 4.3zm.6.3l7 4.1-7 3.8-2.7-4.4 2.7-3.5zm.4 9.8l-8.4 2.9 7.7-4 .7 1zm.3.5l2.2 3.5-2.5 3.5-10.2-3.4 10.5-3.6zm-.6 7.4l-1.3 1.6-7.8-4.6 9 3zm-1.6 2l-2.9 4-5.4-9 8.3 5zm.5.3l7.7 4.6-7.9 4.2-2.9-4.7 3.1-4.1zm.5 11l-9.7 3.2 8.7-4.7 1 1.4zm.3.3l2.3 3.7-2.8 3.7-10.9-3.7 11.4-3.7zm-.7 7.9l-1.4 1.9-9.3-5.5 10.7 3.6zm-1.8 2.4l-3.1 4.1-5.9-9.4 9 5.3zm.5.3l8.3 5-8.4 4.5-3.2-5.1 3.3-4.4zm.7 11.7l-11 3.7 10-5.3 1 1.6zm10.8-5l1.3.9-2.5.8 1.2-1.6zm.4-.3l.4-.5.7 1.2-1.1-.7zm-.5-.3l-2-1.1 1.7-.9.9 1.3-.6.7zm-2.5-1.5l-8.6-5.1 1.6-2 6.5 2.2 2.4 4-2 .9zm-6.7-7.5l2.5-3.4 3.2 5.3-5.7-2zm.3-7.8l6.5-2.2-4.2 5.7-2.3-3.5zm-.2-.5l-1-1.5 8-4.3 1.9 1-1.7 2.3-7.2 2.5zm7.6-6.1l1.5-.8.7 1-.5.7-1.7-1zm-.4-.3l-8-4.7 1.2-1.7 6.2 2 2.2 3.4-1.6 1zM397 953l2.3-3.2 3.1 4.9-5.4-1.7zm.4-7.4l6-2-4 5.2-2-3.2zm-.3-.4l-.7-1.4 7.3-3.9 1.7 1-1.4 1.9-6.9 2.4zm8.6-4.6l-1.6-.9 1.3-.7.7 1.1-.4.5zm-2.1-1.3l-7.2-4.3 1.2-1.6 5.5 1.8 2 3.4-1.5.7zM398 933l2-2.7 2.7 4.2-4.7-1.5zm.4-6.4l5.2-1.8-3.5 4.6-1.7-2.8zm-.3-.5l-.8-1.3 6.7-3.5 1.6.8-1.5 2-6 2zm6.4-5.1l1.2-.6.5.9-.3.5-1.4-.8zm-.6-.4l-6.5-3.8 1-1.5 5 1.7 1.9 3-1.4.6zm-5-5.8l1.8-2.5 2.4 3.9-4.2-1.4zm.2-5.8l4.7-1.6-3 4-1.7-2.4zm-.2-.5l-.7-1.1 6.3-3.4 1.4.8-1.4 1.8-5.6 2zm6.1-4.8l1-.6.4.8-.3.5-1.1-.7zm-.6-.3l-6-3.5.8-1.2 5 1.6 1.4 2.4-1.2.7zm-4.8-5.2l1.8-2.4 2.4 3.9-4.2-1.5zm.3-6l5-1.7-3.4 4.4-1.6-2.6zm-.3-.4l-.5-.8 5.9-3.1 1.2.6-1 1.2-5.6 2zm6-4.2l.7-.4.4.7-.2.2-1-.5zm-.6-.3l-5.8-3.5.8-1 1.8.6 3.3 1.7 1 1.6-1.1.6zm-1.2-3.7l-3.2-1.6 1.4-2 2.2 3.8-.4-.2zm-3.2-7l4.6-1.7-3 4.2-1.6-2.5zm-.3-.4l-.3-.4 5.7-3.1.7.5-.7 1-5.4 2zm6-3.8l.3-.2.3.4-.6-.2zm-.5-.3l-3-1.7 1.8-.9.7.3 1.1 2-.6.3zm-.6-3.5l-.5-.7h2l-1.5.7zm-.8-1.3l-.5-.8 2.2.8h-1.7zm-.3.6l.6 1h-.2l-2.9-1h2.5zm-3-.5l1.1-1.4.9.2.7 1.1-2.6.1zm-2.3-9.6l1.8-2.5 4.9 2.9-5 2.6-1.7-3zm1.7 4l-2.6 1 2.4-1.3.2.3zm-.1-7.2l-3.6-2 4 1.4-.4.6zm-.4.5l-1.6 2.3-3-5 4.6 2.7zm0 6l-3.6 2-1.2-.4 3.2-4.3 1.6 2.7zm.8 1.2l1.5 2.6-.2.2-4.5-1.6 3.2-1.2zm.5-.2l4.4-1.7-3 4.1-1.4-2.4zm-.3-.5l-.2-.3 5-2.6.8.4-.4.6-5.2 2zm-.2-6.7l.5-.7 4.2 1.7 1 1.7-.7.3-5-3zm.8-1l1.5-2 2 3.4-3.5-1.4zm.2-5.2l4-1.7-2.7 3.9-1.3-2.2zm-.3-.5v-.1l4.8-2.6.5.3-.3.4-5 2zm-2-3.5l1.7-2.3 4.6 2.7-4.6 2.5-1.7-2.9zm1.6 3.7l-.8.3.8-.3zm-3.7-19.6l2.3 3.8-3 4.3.7-8.1zm0-15.2l-.7-2.6h1l-.4 2.6zm4.6 5.6l-3-1.4-.4-.5 3.4 1.9zm-1-1.2l1.4.7v.2l-1.4-.9zm.6 1.8l-.8 1.2-1.4-2.3 2.2 1zm.4 4.3l-3.7 2-.6.3v-.2l3-4.3 1.3 2.2zm-3.5 2.5l4-1.7 1.2 2-1.5 2.2-4.6-2 .9-.5zm3.3 4l4.3 2.4-4.3 2.2-1.5-2.6 1.5-2zm-1.8 1.6l-2.4-4.2 3.8 2.2-1.4 2zm1.7-2.4l-2-1.2 2.2 1-.2.2zm-1.7 3.3l1.4 2.4-4.8 2.6v-.2l3.4-4.8zm-3.3 5.5l5.2-2.2 1.4 2.3-1.7 2.2-5.1-2.1v-.1l.2-.1zm4.7 2.8l-.3.4-2.7-1.6 3 1.2zm-.6.7l-1.6 2.2-2.6-4.7 4.2 2.5zm5.5 2.7l-4.8-2.8.3-.5 4 1.6 1 1.5-.5.2zm-4-3.7l1.3-2 1.9 3.3-3.3-1.3zm.1-5l3.9-1.5-2.6 3.6-1.3-2zm-.3-.4l4.4-2.4.4.2v.2l-4.8 2zm4.5-3l-4.4-2.6.3-.3 3.8 1.5.6 1.2-.3.2zm-3.9-3.4l1.2-1.9 1.8 3.1-3-1.2zm.2-4.6l3.5-1.6-2.4 3.5-1.1-2zm1.5-1.3l2.2-1.1h.2l-2.4 1.1zm-1.9.5l-1.4-2.4 1-1.4 4 2-3.6 1.8zm0-4.3l1 .5-1-.5zm-4-1.5v.1l2 3.3-2.7 3.7.7-7zm-2.8-11.4l2.2.8-.3 3.1h-1l-1-3.9zm0 1.4l.6 2.5h-.6v-2.5zm0 3h.7l.8 3.5v1l-1.5-.7V811zm0 5v-.8l1.4.7v.8l-1.4-.7zm1.2 1.3l-5 1.7-.2-.5 3.6-2.1 1.6.9zm-5.5.8l-3-5 6.3 3.1-3.3 2zm.2 1l-2.5.9 2.3-1.4.2.5zm-4.3-7.9l7.8 3.8v.7l-7.2-3.6-.6-.9zm.1.7v-.2.2zm.7-.9h7.1v3.5l-7.1-3.5zm7.1-.4l-7.1.1 7.1-4v4zm-1.6-4.7l-12.7-1.8-3.8-4 16.5 5.8zm-16.8-5.6l3.5 3.7-3.5-.5v-3.2zm0 3.4l3.9.6 5.6 5.9-9.5-4.7v-1.8zm0 2.4l9.7 4.7H385l-8.2-4.2v-.5zm0 1l7 3.5-6-.2-2.3-2.5 1.3-.8c-.1 0 0 0 0 0zm-.5-1.3v.5l-4-2-.7-.8 4.7 2.3zm-4.8-2.8l4.8.7v1.7l-4.8-2.4zm4.8 3.9l-1.2.7-2-2.2 3.2 1.5zm0-3.6l-4.3-.6 4.3-2.4v3zm-2.7-4.5l-12.8-3.1-4.5-3 17.3 6.1zm-18.6-6.5l4.8 3.2-4.8-1.2v-2zm0 2.3l5.6 1.3 9.8 6.6L355 795v-.4zm0 .9l15 7.4-1.9-.6-13.2-6.6v-.2zm-.2.5l10.8 5.5-7-2.1-3.8-3.4zm0 1.5l-.1-.1v-.7l3 2.5-3-.9v-.1c0-.3.2-.5 0-.7zm-.9-1.5a2 2 0 0 0-1.1 0h-.1l-.5.2-.2.2.2-.2c.2-.2.3 0 .5-.2l-.5.2-.2.2v-2l2 1.6zm.1 8.1zm.5-8.4h-.2l-1.7-1.4 2 1v.4h-.1zm0-1l-1-.5 1 .2v.3zm0-.6l-2.2-.6 2.2-1.2v1.8zm0 3.8c.2-.1.2-.2.2-.4l-.1.4zm0 5.1zm0 .7c.2-.2.3-.4.2-.6l-.1.6zm0-.7c.2-.1.3-.3.2-.5l-.1.5zm.3-3.7v-.4h-.1v-.3l3.6 1 10.3 8.8-13.8-9.1zm16.1 10.7L359.1 800l8.2 2.4 3.6 1.8v5.9zm0-6.4l-1-.5 1 .3v.2zm-9.3-7.4l14.6 3.6-5 2.8-9.6-6.4zm11 13.9v.2h-1.1l1-.6.1.4zm0-1.3v-.3.3zm0 2.2l-.7-.5h.6l.1.2v.3zm0 0v-.2.2zm0 4.4v-.2.2zm0 1.5v-.2.2zm.8 0zm1.3-5.9zm-.2-3h-.4.4-1l-.5.2-.3.3.3-.3a1 1 0 0 0-.5.8v.1l-1 .6v-5.2l.8.5 2.5 2.8-.3.1zm.6.1h.1l2.2 2.3h-1.7v-1.7s0-.2-.2-.3l.2.2s0-.2-.2-.2l-.4-.3zm.4 2.7zm0 .8zm0-2.2zm0 8.1c0 .2 0 .4-.4.6.3 0 .4-.3.4-.6zm0-.6v-.2.2zm0-4l.1-.5v-1.6l2 .1 8.2 9-10.3-7zm11.3 7.4L378 811l6.4.3 2.3 1v8.2zm0-8.7l-1.1-.5h1v.5zm.3-1l-5.8-6.1 13.5 2-7.7 4.1zm.1 1.8l.6.3 3.3 5.5-3.8 2.2v-8zm.2 8.5l4.3-1.4 4 7-8.3-5.6zm4.6-1.6l4.8-1.7-.7 8.6-4-7zm4.4 21l2.6 4.3-3.5 4.8.9-9zm-1 10.1l3.8-5.3 1.6 2.6-5.2 2.8h-.2v-.1zm-.1.9l.4-.2 5.6-2.3 1.4 2.4-1.7 2.4-5.7-2.3zm-.1 1.6l2.9 4.8-3.4 4.7h-.4l.9-9.5zm-1 11.1l.5-.8.7.3-1.3.6zm-.1.8l2.4-1 5.2 1.9-1.1 1.6h-.2l-6.3-2.3v-.2zm0 .9l2.8 1.7h-1.8l-1-1.7zm-.1.8l.4.9h-.5v-.9zm-.2 1.5h1l2.3 4-.7 1-3.2 1.7.6-6.7zm-.7 7.3l2.6-1.3-2.8 3.9.2-2.6zm-.3 3.5zm0-16.3l-.6 4.9h-1.6l-1.4-6.2 3.5 1.3zm-3.6 1l1 4h-1v-4zm0 4.5h1l1.5 6-.1 1.2-2.4-1.2v-6zm0 8V875l2.3 1.1-.1 1.3-2.2-1.2c0 .1 0 .1 0 0zm2 2l-8 2.8-.5-.7 5.8-3.4 2.7 1.4zm-8.9 1.3l-4.7-8 10.1 5-5.4 3zm.4 1.6l-4 1.5 3.6-2.1.4.6zm-6.6-12.4l12.3 6v1.3L377 870l-1-1.5zm0 1.1h-.2v-.3l.2.3zm1-1.4l11.3-.2v5.6l-11.3-5.4zm11.3-.7l-11.3.2 11.3-6.3v6zm-2.6-7.4l-20-3-6-6.2 26 9.2zm-26.5-9l5.7 5.8-5.7-.8v-5zm0 5.6l6.2 1 8.9 9.2-15.1-7.3v-2.9zm0 3.7l15.4 7.5-2.4-.1-13-6.6v-.8zm-8.3-5l7.6 1.1v2.6l-7.6-3.6zm7.5 4.6v.8l-6.4-3.3-1-1.1 7.4 3.6zm-6.7-5l6.8-3.8v4.9l-6.8-1zm2.4-6.1l-20.3-5-7.2-4.7 27.5 9.7zm-29.4-10.4l7.7 5-7.7-1.7v-3.3zm0 3.7l9 2.2 15.5 10.3-24.5-11.9v-.6zm.6 1.8l-.5-.2h-.2v-.2l24 11.6-3-.9-20-10v-.1l-.1-.1-.2-.1zm.3 3.2v-.4c.2.1 0 .2 0 .4zm0 .9v.2c.2-.1 0-.1 0-.2zm0 0c.2-.2.2-.4.2-.6h-.1v-.7l3.2 2.7-3.1-1v-.1l-.1-.3zm0-2.2c.2-.2.2-.4.2-.6l15.7 7.8-11.2-3.4-4.6-3.8zm0-.2v-.4c.2.2 0 .3 0 .4zm.2 7.8c0 .2-.1.5-.4.5.2-.1.4-.3.4-.5zm0-3l-.1-.2v-1.2l4.3 1.2 16.2 13.8-20.4-13.6zm24.2 16l-18.8-16 13 4 5.8 3v9zm0-10l-1.7-.7 1.7.5v.2zm.4-1.6l-15.2-10 23 5.6-7.8 4.4zm.3 14.3v-.2.2zm0 2.2l.1-.2v.2zm0 1.5v-.2.2zm0 .7v-.2.2zm.2 1v-.3c-.2.1 0 .3 0 .4zm0-6.6zm0 0zm2 7c-.4.3-1 .3-1.4 0 .5.2 1 .2 1.4 0zm.3-9.4l-.2-.1h.2l2.2-1.4v.2l.1.4v2.4H354v-1l-.2-.2c.2.2.3.5 0 .7.2-.3.2-.5 0-.7v-.1l-.4-.2c.1 0 .1 0 0 0zm2.4-1zm0 1v.2c-.2-.1-.2-.2 0-.2zm0 3.6v.2c-.2 0 0 0 0-.2zm0-.7v.1c-.2 0 0 0 0-.1zm-.2-4.3zm-1.7 2.6zm0 4.4zm-.2-4.6zm.2 8.5c0 .2 0 .5-.4.6.3-.2.4-.4.4-.6zm0-1.6zm0-4.6l.1-.5V867.7h1.6v2.7l-1.7-1.4zm1.8 3.3zm0-9l-3.6 2.2H351.7c-.2 0-.3 0-.5.2l-.4.4v-8.3l1.5.7 4 4.3h-.3l-.5.6zm.1 1.4zm1-2l-3.2-3.5 5 2.5-1.8 1zm.4 9.9l.5-.1h-.5zm.6-7.5zm.5-2s0-.1 0 0v-.1h-.2l1-.7h.2l11.2 5.6-9.6-.4-2.4-2.7v-1.2c0-.1 0-.2-.2-.3.1-.1 0-.2 0-.2zm.4 3.3v-.8l1.6 1.8-1.6-.1V866.4zm-.2-2.5l.2-.3c0 .1 0 .2-.2.3zm0 3zm0-1.5zm0 .8l.1-.4v.4zm0 .7l.1-.4v.4zm.1.2zm0 1.5zm0 2.2zm0 1.4l.1-.6V868.2h2.1l13 14.4-15.2-10.4zm16.6 10.9L361.4 868l10.2.4 3.4 1.7v13h.1zm0-13.9l-1.6-.7h1.6v.7zm.6-1.6l-9.3-9.8 21.3 3.2-12 6.6zm.2 2.9l.9.5 5 8.8-5.9 3.4v-12.7zm.3 13.4l6.7-2.4 6.4 11-13.1-8.6zm7.3-2.6l7.8-2.7-1.3 13.9-6.5-11.2zm6 32.1l4.5 7.1-5.8 7.8 1.3-14.9zm-1.6 17.8l4.9 7.8-6.4 8.6 1.5-16.4zm5.2 8.3l2.5 4.2-9.3 5 6.8-9.2zm-7 11.4l5.4 8.7-7.1 9.5L386 951zm5.6 9.2l2.8 4.5-10.2 5.5 7.4-10zm-7.6 11.9l6 9.6-8 10.5 2-20.1zm6.3 10.2l3 4.9-11.2 6 8.2-11zm4.6 7.4l2.7 4.3-3 4.1-12.5-4.1 12.8-4.3zm-2.6 11.2l-3.5 4.8-6.9-11 10.4 6.2zm-10.4-5.4l6.6 10.7-8.7 11.6 2-22.3zm-2.3 23.2l9-12.1 3.5 5.5-12.5 6.8v-.2zm-.2 2l7.3 11.8-9.6 12.8 2.3-24.5zm-2.4 25.6l10-13.2 3.9 6.1-13.8 7.4v-.3zm0 .8l15.6-5.3 3.3 5.2-3.8 5-15-4.9zm1 .9l13.6 4.5-1.8 2.5-11.8-7zm11.5 7.5l-4.2 5.6-8-13 12.2 7.4zm-12.6-6.9l8 13-10.5 14 2.5-27zm-2.6 28.3v-.2l11-14.6 5.6 9.1-16.6 5.7zm32.6 19l-15.2-24.4 15.2-5.2v29.6zm0-30.2l-15.4 5.3-5.9-9.4 4.4-5.9 17 10zm0-.5l-16.6-10 2-2.5 8.9 3 5.7 9.2v.3zm0-1.3l-5-8 5 1.7v6.3zm0-7l-5.4-1.7-5-8.2 6.6-8.7 4-1.4-.2 20zm0-21l-1.4-.9.6-.8.8 1.5v.2zm0-1.1l-.6-1 .6-.7v1.7zm0-2.6l-.8 1.2-1-1.4 1.8-.8v1zm0-1.6l-1.9 1-2.7-4.2 4.6 1.5v1.7zm0-2.2l-5-1.7-4.5-7.3 6-7.8 3.6-1.3v18zm0-18.8l-3.2 1.1 1.7-2.1 1.5.8v.2zm0-1.7l-.5-.8.5-.6v1.4zm0-2.2l-.8 1-.6-1 1.4-.8v.8zm0-1.4l-1.7 1-2.3-3.8 4 1.3v1.5zm0-2.1l-4.5-1.5-4.2-6.7 5.5-7.3 3.2-1v16.5zm0-18.7l-.4-.7.4-.5v1.2zm0-2l-.7 1-.7-1.2 1.4-.8v1zm0-1.6l-1.7 1-2.1-3.4 3.8 1.2v1.2zm0-1.8l-4.2-1.4-3.8-6 4.8-6.4 3.2-1V978zm0-15.4l-2.6.8 1.3-1.7 1.3.9zm0-.7l-1-.6.4-.5.6 1.1zm0-1l-.3-.5.3-.4v.8zm0-1.8l-.6.8-.4-.9 1.1-.6v.7zm0-1.2l-1.4.7-1.8-3 3.2 1.1v1.2zm0-1.8l-3.6-1.2-3.5-5.7 4.5-6 2.6-.9v13.8zm0-15.7l-.2-.4.2-.3v.7zm0-1.5l-.5.6-.4-.8 1-.6v.8zm0-1.3l-1.3.7-1.8-2.8 3.1 1v1.1zm0-1.6l-3.4-1.2-3.1-5 4-5.4 2.6-.8V936zm0-13l-2 .7 1-1.4 1 .7zm-.8-1l.2-.3.4.5-.6-.2zm.8-.4l-.2-.3.2-.2v.5zm0-1.5l-.5.7-.3-.7.8-.5v.5zm0-1l-1.1.6-1.6-2.4 2.7 1v.8zm0-1.6l-3-1-3-4.6 3.7-5 2.3-.7v11.3zm0-11.8l-1.7.6 1-1.3.7.5v.2zm0-.8l-.5-.3.2-.2.3.5zm0-1.8l-.2.3-.3-.6.6-.2v.5zm0-1l-.8.5-1.2-2 2 .7v.8zm0-1.5l-2.4-.7-2.8-4.6 3.9-5.1 1.3-.5v11zm0-11.5l-.8.3.4-.6.4.3zm0-.7zm0-1.2l-.2-.3.2-.1v.4zm0-1l-.5.3-.5-1 1 .5v.2zm0-1.5l-1.9-.7-2.7-4.4 3.8-5 .8-.3v10.4zm0-11l-.3.1.3-.3v.2zm0-3v.7l-1-1.4 1 .4v.4zm0-.8l-1.3-.5-.2-.3 1.5-.7v1.5zm0-3l-3.6-1.4-.4-.6 3.6-5 .4-.2v7.1zm0-8.3l-.6-.3.4-.2.2.3v.2zm0-1.3l-.7-1 .7.2v.8zm0-1.4l-1-.4-2.5-4.1 3.4-4.7.1-.1v9.3zm0-10.7zm0-1.2l-.3-.5h.3v.5zm0-1l-.8-.3-2.4-4 3.1-4.3.1 8.6zm0-11.9l-.4-.2-2.2-3.8 2.7-3.8v7.8zm0-9.6l-4.2-2.4.2-.2 3.4 1.5.6 1zm0-1.4l-.2-.1-2-3.7 2.2-3.3v7zm0-8.2l-1.3.6 1.3-.7zm0-.8zm0-1.4l-1.9-3.4 2-2.7v6zm0-8.3l-3.2-1.9 3.1 1.4.1.1v.4zm0-1.5l-1.6-2.8 1.6-2.3v5zm0-6l-1.9 2.7-.9-1.5 2.8-1.2zm0-.8l-2.9 1.5-1.2-2 1-1.4 3.1 1.9zm0-.7l-2.2-1.3 2.2 1.1v.2zm0-1.4l-1.3-2.4 1.3-1.9v4.3zm0-5.1l-1.6 2.3-.8-1.4.4-.2 2-1v.3zm0-1.6l-2-1.1 2 1v.1zm0-1.2l-1.1-2 1.1-1.7v3.7zm0-5.8l-2.2-1.2 2.1 1v.2h.1zm0-1.5l-.8-1.6.8-1.2v2.8zm0-4.5l-2 1-.8-1.4.8-1 2 1v.4zm0-2.3l-.7-1.2.7-1v2.2zm0-3.1l-1 1.3-.4-.8 1.4-.8v.3zm0-.9l-1.7.9-.7-1.2.6-.7 1.8 1zm0-2.2l-.5-.9.5-.6v1.5zm0-2.5l-.8 1-.2-.5 1-.5zm0-.9l-1.4.8-.6-1 .5-.8 1.4.9v.1h.1zm.2-1l-1.2-.6 1.2-1.8v2.4zm87.5 197.8zm.2.3v-.2c-.1.1 0 .2 0 .2zm0-2.2l-.1.4.1-.4zm-.1-1.4v-.2.2zm0-2.9v-.2.2zm.1-2.2l-.1-.2.1.2zm-.1 2.9l-.1.4.1-.4zm.9-14l-11-5.6-13-14.3 24 20zm1.8 1.6l-4.1 2.4-.2-.1-7.6-8.4 11.9 6zm-28.8-24l14.6 16.1-14.6-7.5v-8.5zm0 9.2l15.6 8 7.2 8-18-11.8-4.8-3.3v-1zm3.8 4.4l18.6 12.3-9.5-3.2-14.2-11.7.6-.3 4.5 3zm-5.7 5.2v-.4.4zm0 .3c0-.1 0-.1 0 0 0-.1 0-.1 0 0 0-.1 0-.1 0 0zm0-5.4v-.4.4zm0 5zm-3.3-11l3.8 2.5-.4.3-3.4-2.8zm3.3 6zm-4.7-7.9l5.7 3v.9l-5.7-3.9zm4.7 5.7zm0 1zm0 1.4zm0 1.6zm0 2l.1-.5V926.2l.2-.2 13.3 11-13.4-4.5v-.2l-.1-.5zm0-.1v-.4.4zm1.1-9.2l-7.7-4 7.7-4.3v8.3zm-1.4-10l-14.4-5.4-9.2-14 23.6 19.4zM442.3 893l8.9 13.9-9-3.5V893zm0 11l9.5 3.6 6.5 10.1-16-10.6V904zm15.4 14.4l-11.1-1.5-7.4-7.6 2.4-1.4 16.1 10.5zm-16.8-11l-2.2 1.2-7.3-7.5 9.5 6.3zm-9.5-7.6l10.2 3.8v2.9l-10.2-6.7zm10.2 3.3l-11.2-4.3 11.2-6.2V903zm-.6-11.6l-14-2.7-2.9-11.2v-.1l17 14zm-13.7 36.7l-5.8-7.8 4.3-7h.1l1.4 14.8zm-1.3-30.5l2.1 1.3-1.9.5-.2-1.8zm-.4 157.4l-1.6-2.1 11.5-3.9-10 6zm12.2-6.8h.3l-8 13-4.4-5.8 12.1-7.2zm-12.7 7l-14.7 8.7v-2l3.5-5.7 9.5-3.1 1.7 2zm-16.4-295.8v-.4l1.5-.8.4.5-.7 1.2-1.2-.5zm.8 1.3l-.2.4-.5-.7.7.3zm-.5.9l-.3.4v-.8l.3.4zm.4.4l.8 1.2-.7.4-.7.4v-.8l.6-1.2zm.3 2l.8-.4.5.7-.8 1.3-1.4-.7v-.4l1-.5zm.2 2.2l-.4.6-.7-1v-.2l1.1.6zm-.7 1.1l-.4.7v-1.3l.4.6zm.3.5l.8 1.2-1.5.8v-.7l.7-1.3zm1.3 1.8l.5.9-.8 1.5-1.7-.7v-.6l2-1zm.4-.3l1-.4-.6 1-.4-.6zm-1.1 3.3l-.3.6-.9-1.3 1.2.7zm-.7 1.2l-.6 1v-2l.6 1zm.4.4l1 1.4-1.9.8v-.6l.9-1.6zm1.3 2l.5.8-1 1.8-1.9-1.1v-.3l2.4-1.2zm.4-.3l.9-.5.4-.2-.8 1.3-.5-.6zm-1 3.3l-.5.9-1.2-1.6v-.1l1.7.8zm-.8 1.5l-.9 1.4v-2.7l1 1.3zm.4.5l1 1.4-2.2 1v-.3l1.2-2.1zm1.2 1.9l.8 1.1-1 2-2.2-1.1v-.6l2.4-1.4zm.5-.3l1.6-.8-1 1.7-.6-1zm-1 3.8l-.7 1.2-1.3-1.8v-.3l2 1zm-.9 1.7l-1 1.6v-3l1 1.4zm.3.4l1.1 1.8-2.4 1.1v-.6l1.3-2.3zm1.5 2.2l1 1.4-1.2 2.1-1.6-.8-.9-.4v-.7l2.7-1.6zm.5-.2l2-.9-1.2 2-.8-1.1zm-2.6 3.4l1.5.9-.7 1.3-1.5-2v-.4l.7.2zm.6 2.6l-1.2 2V795l1.2 1.7zm.3.5l1.2 1.8-2.8 1.3v-.5l1.6-2.6zm1.6 2.4l1 1.5-1.3 2.3-2.9-1.5v-.5l3.2-1.8zm.5-.2l.6-.3 1.7-.8-1.4 2.4-1-1.3zm-1 4.5l-.8 1.6-1.8-2.5v-.3l2.5 1.2zm-1.1 2.1l-1.5 2.5V804l1.5 2.1zm.3.5l1.3 2-3.2 1.5v-.3l1.9-3.2zm-.7 3.5l-1 .6v-.2l1-.4zm2.5-.9l1.2 1.7-1.3 2.4-3.4-1.8v-.2l3.5-2.1zm.5-.3l1.1-.7 1.6-.6-1.7 2.9-1-1.6zm-2 6.6l-2-3 3 1.4-1 1.6zm.1 1.1l1.5 2-3.5 1.5 2-3.5zm-.3-.5l-1.9 3v-5.6l1.9 2.6zm.8 3.5l-2.6 1.5v-.4l2.6-1.1zm1.5-.3v.2l-4 2.4v-.1l4-2.5zm1.6 1.4l-.9-1.2 2.4-1.4-1.5 2.6zm0 1l1.5 2.1-2.4-.5.9-1.6zm-1-2.5l-.2-.2 2-1.2 1.2-.4-3 1.8zm.7 2l-1.1 2-2.4-.5-1.5-.7 4-2.3 1 1.5zm5.5 28l-3.4-4.7 2.5-4.2.9 9zm-.2-19l1.4.9-1.3.3-.1-1.3zm-5 30.7L410 858l5-3 1.8 2.5-2 3.2zm.3.6l1.3.7-1.4-.6zm-.1-7.2l1.5-.5-1.3.7-.2-.2zm.5.6l4-2.4.5-.2-2.9 4.8-1.6-2.2zm3.7-2.8l-4.5 1.8-2-2.8 1.4-2.4 4.3 1.8 1.7.9v.2l-.9.5zm-6.8-.4l1.7 2.4-4.2 1.7 2.5-4.1zm0-1l-2.7-3.8 4 1.7-1.3 2zm6.1-11.5l-5-2.6.1-.3 4 1.6 1.5.8v.2l-.6.3zm.2.6l-2.5 4.3-1.4-2.1 3-1.9 1-.3zm-5.2-4.6l-2.4-1.3 3.8-1-1.4 2.3zm-3-1.5l-1.2-.7 4.4-2.6 1.5 2.1-.1.1-4.5 1zm-.2.4l2.1 1.1-2.4-1 .3-.1zm2.8 2l-.2.3-3.5-1.7v-.1l3.7 1.5zm-.4.7l-.8 1.2-1.8-2.6 2.6 1.4zm-.7 2.2l1.6 2.3-3.9 1.6 2.3-4zm.3-.5l.9-1.4 4.9 2.5-.4.1-3.5 1.5-1.9-2.7zm2.4 3h-.2.2zm-.4.8l1.7 2.3-1.9 3.1-4.6-2.5 4.8-2.9zm4.4 7.7l-4-2.2 1.6-2.8 3.8 5.3v.3l-1.4-.6zm0-31.1l1.5 5.7-1-.2-.5-5.5zm.2 19.1l-1.1-.5-3.8-2 1.6-2.6 3.3 4.7v.4zm-3.4-6l-1.5-2 2.6-1.5h.3l.4.1-2 3.3zm-1.9-2.7l-1.7-2.5.8-1.4 4 2.6-3 1.3zm-1.4-4l-.7 1-2-2.8 2.7 1.7zm-1.2-1.4l1.5.7-.1.3-1.4-1zm.5 3.5l1.6 2.2-3.8 1.5 2.2-3.7zm.4-4l1.2.1-.2.3-1-.5zm-2.7-1zm2 4.5l-2 3.5v-6.5l2 3zm2 3.1l-4 2.5v-.7l4-1.8zm-3.4 3.9h-.6v-.4l.6.4zm1.8 4.6l-2.4 4.1V835l2.4 3.5zm-2.4 5.2l4.7-2 .1.2-4.8 2.8v-1zm4.7 4.4l-4.7-2v-.5l4.7 2.5zm-1.8 3l-2.8 4.9v-9l2.8 4zm-2.5 5.4l5-2 .1.3-5.3 3.2v-1.1l.2-.4zm-.2 2l5.2 2.9v.1l-5.3-2v-.7l.1-.2zm3.5 5.8l-3-4 4.3 1.7-1.3 2.3zm0 1l1.9 2.6-4.5 1.6 2.6-4.2zm-.3-.5l-3 5-.2.1v-9.6l3.2 4.5zm-2.7 5.5l5.2-2 .3.4-5.8 3.4h-.2v-.9l.5-1zm6.8 13.1l-.4-.5 3.3-1.2-2.9 1.7zm5.5-2.5l.5-.2-3.6 5.8-2-2.7 5-3zm-5.6 3.3l2.1 2.9v.2l-5.5-1 3.4-2zm3.9 18l-.6-.7 1.1-.3-.5 1zm0 1l3.1 4.4-3.2-4.3zM419 935l-7.4 4.4-1.4-.7 1.8-3 6-2 1 1.3zm-.4-1.4l6.6-2.1-5.7 3.3-.9-1.2zm-6.2 1.5l3-4.8 2.3 3-5.3 1.8zm3-5.7l-3.5-4.7 5.2 1.8-1.7 2.9zm-4-5.4l-1.4-2 1.3-.7 6.9 3.6-.7 1-6-2zm-1.1-36l4.6 2.5 1.2.8-.2.5-4-1.4-1.6-2.4zm-.5-1.9l2 .4-.8.5-1.2-.9zm4.7 7.8l-2.1-2.9 3.2 1.2-1 1.7zm0 1l2.4 3.3-.3.1-2.3-3.1.2-.3zm-.3-.5l-.2.3-3.2-4.3.7.2 2.7 3.8zm-.2 1.3l2.1 2.8-4.8 1.7 2.7-4.5zm2.5 3.3l.6.8-5.5 3.2-1.1.3-.8-.5 1.3-2 5.5-1.8zm1.3-.5l3-1-2.6 1.6-.4-.6zm1.2 2.7h-.2l-1-1.3.3-.1 1 1.4zm-.6.2l-5 1.2 4-2.4 1 1.2zm-.8-2l-.5-.6h.2l.5.6h-.2zm-6.7 4.6l6.3 3.5-.4.5-6.9-3.4 1-.6zm3.5 3.6l-3.3-1.1-.7-.9 4 2zm2 1.3l-1.7 2.6-3-4.1 4.6 1.5zm-1.6 3.5l2.1 2.7-4.9 1.8 2.8-4.5zm2.5 3.2l.8 1-6.8 4.1-1.2-.7 1.5-2.5 5.7-1.9zm.5-.2l5.4-1.7-4.7 2.8-.7-1zm.7 9.8l6.3 3.4-6.8-2.3.5-1zm-.1-.7l-6.6-3.5 6.6-3.8 2.4 3.3-2.4 4zm.4-7.6l6.4-3.8.3.1-4.3 6.7-2.4-3zm-1.3-1.9l-2.3-3.1 1.7-2.8.9.3 6.6 3.3-7 2.3zm-.1-6.7l.4-.6 5.6 3-3.8-1.2-2.2-1.2zm.2-1.3l-6.2-3.3.4-.3 6.8-1.6 1.2 1.5-2.2 3.7zm1.6-5.3h.2l.8 1-.1.1-.9-1.1zm.4-.7l-1.2-1.5 4.7-2.8 1-.3-2.7 4.1-1.8.5zm4.8-4l.3 2.9-2.4.5 2.1-3.4zm-.2-1.5l-1-.6.5.2.6.3v.1zm-.8.4l-.5.3-5.4 1.8-2.6-3.6 1.2-2 4 1.4 3.3 2.1zm-7-4l.2-.4 1.7 1-1.9-.6zm.2-1.3l-5-3.4 1-.6 5.8 1.2-1.8 2.8zm-4.2-4.6l-2.3-.4.4-.6 5.4-2 .4.7-3.9 2.3zm-1.5-1.7l4-2.4.6.8-4.6 1.6zm2.6-4.3l1.1 1.5-3.2 1.8 2-3.3zm0-1l-3.1-4.1 4.5 1.7-1.4 2.4zm.2.5l1.7-2.7 4.4 1.6-4.8 2.8-1.3-1.7zm2-3.2l.2-.3 2 1.2-2.2-.9zm.4-.7l2-3.3 3.6 5-1.1.7-4.5-2.4zm2-4.2l-2-2.6 3.9-2.3 1.2-.4-3.1 5.3zm-2.2-3l-.2-.3 1.6-.6-1.4.9zm-.2.7l2 2.8-2.1 3.5-5.5-3 5.6-3.3zm-6 3.6l5.7 3-.2.3-5.4-2-.4-.5v-.7l.2-.1zm-.2 1.8l3.7 5-2.6 4.3-1 .6v-9.9zm.1 10.8v.2h-.2v-.1l.2-.1zm.3 1.8l-.4-.2.4.2zm-.4.7zm.3.4l1.3 1.8-.8-.3-.8-1v-.3l.3-.2zm.1 2l3.8 5-3.1 5.2-1 .4-.2-10.7h.5zm.3 11l-.7 1v-.8l.7-.3zm-.5 2.2l-.2.1v-.2l.2.1zm.4.5l-.6.4v-.2l.6-.2zm.2 2.4l-.7-.2v-.7l.7.9zm.5.7l3.6 4.9-3.2 5.2-1.6.5v-11l1.2.4zm0 10.7l-1.2 2V918l1.3-.4zm-1 2.8l1 .6-1 .7v-1.3zm.8 3.2l-.9-.3v-.9l.9 1.2zm.5.8l4 5.3-3.5 5.6-1.9.7v-12l1.4.4zm.1 11.6l-1.5 2.4v-2l1.5-.4zm-1.3 3l1.2.6-1.4.8v-1l.2-.4zm.7 3.4l-.9-.3v-.8l.9 1.1zm.5.8l4.7 6.1-3.9 6.3-2 .6-.1-13.4 1.3.4zm.3 13l-1.5 2.5v-2l1.5-.6zm-1.4 3.2l1.3.7-1.3.8-.1-.1v-1.2l.1-.2zm1 4l-1.2-.4v-1.3l1.3 1.6zm.6.6l5 6.5-4.1 6.6-2.5.8-.1-14.5 1.7.6zm.4 13.8l-1.8 3h-.2v-2.3l2-.7zm-1.7 3.7l1.5.9-1.8 1-.1-.2v-1.1l.4-.6zm.8 4.2l-1.1-.4v-1.1l1.1 1.5zm.5.8l5.5 7.4-4.5 7.3-2.6.8-.1-16 1.7.5zm.6 15.4l-2.1 3.3v-2.6l2.1-.7zm-2 4l1.6.9-1.7 1h-.1v-1.5l.3-.4zm1.3 4.6l-1.4-.5v-1.4l1.4 1.9zm.6.8l6 8-5 7.8-3 1v-17.6l2 .8zm.7 16.5l-2.4 3.8h-.2v-3l2.6-.8zm-2.2 4.6l1.9 1-2.1 1.3-.2-.2v-1.5l.4-.6zm-.4 3l1.4 1.9-1.4-.5v-1.4zm2.1 2.7l6.7 8.9-5.4 8.7-3.2 1-.1-19.3 2 .7zm.9 18.3l-2.8 4.4v-3.5l2.8-.9zm1.1-1l5-8 3.9 5.2-8.9 2.9zm5-8.9l-6.2-8.1 9.2 3.1-3 5zm-6.7-9l-2-2.4 2.4-1.4 10.6 5.7-1 1.6-10-3.4zm11.5 2.2l9.6 5-10.5-3.5 1-1.5zm-.2-.8l-10.4-5.5 10.5-6.3 4 5.3-4 6.5zm.6-12l11-6.5-7.2 11.6-3.8-5zm-.4-.4l-1.4-1.9 10.8-3.5-9.4 5.4zm-.4.2l-10.6 6.4-2.2-1.2 2.6-4.4 8.7-2.9 1.5 2.1zm-9.8.1l4.5-7 3.3 4.4-7.8 2.6zm4.5-8l-5.4-7.2 8.1 2.7-2.7 4.5zm-6-8l-2-2.6 2-1.2 10 5.4-1 1.6-9-3.2zm10.5 1.8l8.7 4.7-9.7-3.2 1-1.5zm-.2-.7l-9.7-5.1 9.6-5.8 3.7 5-3.6 6zm.3-11.2l9.4-5.6.7-.3-6.6 10.7-3.5-4.8zm-.3-.4l-1.2-1.5 8.6-2.9-7.4 4.4zm-.5.3l-9.9 5.9-1.8-1 2.4-3.8 8-2.7c.5.5 1 1 1.3 1.6zm-8.7.3l4-6.6 3.3 4.2-7.3 2.4zm4-7.6l-5-6.6 7.6 2.5-2.6 4.1zM412 986l-1.6-2.1 2-1.3 8.8 4.8-.8 1.4-8.4-2.8zm9.7 1.6l8.6 4.7-9.5-3.2 1-1.5zm-.2-.7l-8.5-4.6 8.5-5.1 3.3 4.3-3.3 5.4zm.4-10l9-5.3-6 9.5-3-4.1zm-.3-.3l-1.1-1.5 8.6-3-7.5 4.5zm-.5.3l-8.7 5.2-1.8-1 2.2-3.5 7.2-2.4 1.1 1.7zm-8 0l3.7-5.9 2.8 3.8-6.4 2zm3.7-6.8l-4.3-5.8 6.5 2.2-2.2 3.6zm-4.9-6.5l-1.6-2.2 1.6-1 8.2 4.5-.8 1.2-7.4-2.5zm8.7 1.5l7.5 4-8.3-2.8.8-1.2zm-.2-.7l-8-4.2 7.9-4.7 3 4.1-3 4.8zm.4-9.2l8-4.7.2-.1-5.5 8.7-2.7-4zm-.3-.5l-1-1.2 7-2.4-6 3.6zm-.5.3l-8.2 4.8-1.5-.9 1.9-3 6.8-2.3 1 1.4zm-7.4.2l3.3-5.5 2.6 3.5-6 2zm3.3-6.5l-3.9-5.2 6 2-2 3.2zm-4.5-6l-1.3-1.8 1.5-1 7.4 4-.6 1.1-7-2.3zm8.1 1.4l6.5 3.5-7.2-2.4.7-1zm-.2-.6l-7-3.9 7.1-4.2 2.7 3.6-2.8 4.5zm.5-8.4l7.4-4.4-5 7.9-2.4-3.5zm7.4-5l-9 3-2.4-3.4 1.9-3 9.8 3.3-.3.1zm-8.4-5.5l2.4-3.8 6.2 8.3-8.6-4.5zm6.6-12.3l-2.5-1.3 3 1-.5.3zm-7.4-5.1l2-3.5 5.6 7.5-7.6-4zm2.8-4.6l1.1-1.6 2.9-.7.8 9-4.8-6.7zm3.7-21.8l2 7.8-1.3-.3-.7-7.5zm-.3 13.8l-.3-.1-6.3-3.4-.6-.4 1.8-3 .5.2 4.8 6.5.1.2zm0-1.3l-4-5.3 3.5.6.4 4.7zm-.6-5.3l-3.9-.7-.3-.4 3.6-5.9.6 7zm-.8-8.2l-.9.5-6 2-.5-.8 5-3 1.1.4 1.3.7v.2zm0-1l-1-.4-.6-.2.9-.5.7 1v.1zm-.2-1.2l-.1-.2v-.1.3zm0-.8l-.4.2-3.8-5.2 3.1-5.3 1 10.3zm-1.2-11.8l-1.6 1-4.4 1.6-2.1-3 1.5-2.6 5.7 2.2 1 .5v.3zm0-.9l-.7-.3-5.3-2.7 1.8-3 4.1 5.7v.3zm-.2-1.3l-3.7-5.3 2.9-4.8.8 10zm-.4-22.6v-.4l.4.7-.4-.3zm.8.3l-1-1.4-.7-7.5 1.6-.4v9.3h.1zm-1.8-11.3h-.1l-.4-4.5 1 .2 1.4 5.6-2-1.3zm.9-4.3l8.8 1.6-7.3 4-1.5-5.6zm1.4 6.8l5.6 5.7-5.6 3.2v-9zm1.1-.2l6.6 2.5v1.8l-6.6-4.3zm6.2 4.9l-1.4.8-4.8-4.8 6.2 4zm-1.3 1.3l4.5 4.6-10-1.4 5.5-3.2zm-5.1 3.7l9.9 1.3 7 7.2-17-8.5zm17.7 8.9l-7.3-7.5 7.3 1v6.5zm1.8.6v.2l-1-.3.9-.5v.6zm0 2.1v-.2.2zm0 2.1l.1-.2v.2zm0 .6zm0 1v-.2.1zm0 .6v-.2.2zm.1-1zm0 0zm.7-7.1v-.3.3zm1.2-.7a2 2 0 0 0-1 0h-.2c-.2 0-.3 0-.5.2l-.3.5c0-.1 0-.4.3-.5l.5-.2c-.2 0-.3 0-.5.2a1 1 0 0 0-.4.7v.2l-1.3.7v-6.2h.1l4.3 3.6-1 .8zm1 2.8zm0 0V849.2l-.2-.2v-.1l.9-.6 8.6 7-9.2-3V851.4zm0-1.5v.1zm-.2 2.7h.1zm0 .1zm.7-5l-2.1-1.8 2.5 1.6-.4.2zm-3-3l3.7 2v.5l-3.7-2.5zm1.7 6.9zm0 3.6zm.7 3c0 .2 0 .5-.3.6l.3-.6zm0-3v-.2.2zm0-2.3l.1-.3 9.8 3.3 6.4 5.3-16.3-8.3zm17.3 8.6l-6.5-5.3 6.3 2 .1.2v3.1h.1zm.6 1.2zm0 .7zm0 1.7v-.2.2zm0-1.2zm0-.7zm.2 0zm.6 7h.7-.7zm1-9.7h-.6.5zm.4 6.7zm0 .8zm-.4-7.5h-.8c-.2 0-.4 0-.5.2a1 1 0 0 0-.5.7v-2.8l2.3 1.5-.5.4zm.7-.7l-2.4-1.6 2.4-1.5v3.1zm-2.9-2v-.1l-5-5.4 7.6 4-2.6 1.5zm1.5-2.5l-7-3.6-8.3-9.2 15.3 12.8zm-17.2-14.3l9.4 10.3-9.4-4.8v-5.5zm0 5.9l10 5.1 4.6 5.1-11.6-7.5-3-2v-.7zm3 3.2l11.3 7.5-6-2-9.2-7.5.4-.2 3.5 2.2zm-3.6-4l-5-2.4 5-2.8v5.3zm-5.4-2.7l-4.3-6.6 9.5 3.6-5.2 3zm4.5-3.6l-9.2-3.5-5.9-9 15.1 12.5zm-15.4-12.5l5.7 8.8-5.7-2.2v-6.6zm0 7l6 2.3 4.2 6.4-10.2-6.8v-2zm9.9 9.2l-7.2-1-4.7-4.8 1.6-.8 10.3 6.6zm-10.4-9.8l-7.2-2.8 7.2-4v6.8zm-.3-7.4l-9-1.7-1.9-7.3 10.9 9zm-10.8 10.3l-2.7-3.9 2.3-.5.4 4.4zm-.3-4.8l-2.5.5 2-3.4h.2l.3 2.9zm-.8-3.6zm.3-1l-.9.5-4.1-2.7.2-.2 2.7 1.1 2.2 1.2-.1.2zm-.1-.9l-2-.9-2.4-1.3.2-.5 3 .6 1 1.7.2.4zm-.1-1.4l-.4-.5h.3v.5zm-.1-.8l-.6-.1-2-2.8 2-3.4.6 6.3zm-.7-7.6l-1.6 1-2.1.8-1.7-2.3 1-1.8 2.8 1.2 1.6 1v.1zm0-1l-1.3-.5-2.6-1.5 1.2-2 2.6 3.7v.3zm-.2-1.4l-2.2-3.2 1.6-2.8.6 6zm-.8-7.5l-2 1.2-1.3.5-1.6-2.3 1-1.7 3.8 2.1.1.2zm0-1.1l-3.5-1.7 1.1-2 2.4 3.2v.5zm-.1-1.5l-2-2.7 1.5-2.5.5 5.2zm-.7-6.6l-2.2 1.3-.7.3-1.4-2 .8-1.6 3.5 1.8v.2zm-.1-1.3l-3-1.4 1-1.8 1.9 2.9v.3zm-.1-1.4l-1.5-2.3 1.1-2.1.4 4.4zm-.6-5.9l-2.5 1.5-1.3-2 .7-1.3 3.1 1.6v.2zm0-1.1l-2.7-1.3 1-1.6 1.6 2.4v.5zm-.3-1.5l-1.2-2 1-1.7.2 3.7zm-.4-5l-2 1.2-1.2-1.7.7-1.2 2.5 1.5v.2zm0-1l-2.4-1.2.8-1.4 1.5 2.1v.5zm-.2-1.5l-1.1-1.6.8-1.3.3 2.9zm-.4-4.2l-.9.5-1 .5-1.1-1.6.5-1 2.4 1.4v.2zm-.1-1.2l-2-1 .7-1.2 1.2 1.7v.5zm-.2-1.7l-.8-1.1.6-1 .2 2.1zm-.3-3.7l-1.6 1-1-1.4.5-.8 2 1 .1.2zm-.1-1.1l-1.6-1 .5-1 1 1.5.1.5zm-1.3-3.3l.6-.3-.4.8-.2-.5zm1.1 1.7l-.6-.8.4-.8.2 1.6zm-.3-3l-1.2.8-1-1.3.3-.6 1.8 1 .1.1zm0-1.2l-1.4-.7.5-1 .7 1.2.1.5zm-1.1-2.9l.4-.2-.3.5-.1-.3zm.8 1.3l-.4-.6.3-.5.1 1zm-.2-2.8v.3l-1 .5-1.6-2.2 2.6 1.4zm-1.5 1.1l-1 .7v-2.2l1 1.5zm-1.2 261.5v9.6-9.6zm0 10.2v.3-.3zm0 1.6zm0 .4v1.2-1.2zm0 1.9v1.5-1.4zm0 2.4v-.1.3-.2zm0 1.2l.1 20.7-.1-.1v-20.6zm0 21.1l.1.1v5.4l-.1.4v-5.9zm0 6.9l.1-.4v.5h-.1v-.1zm0 .8h.2v.1h-.2zm0 30.2v-29.6l15.1 5.2-15.1 24.4zm15.4-24.9l-14-4.7c.3-.2.4-.4.4-.6v-1l15-9 4.4 6-5.8 9.3zm.5.2l5.7-9 11 14.7-16.7-5.7zm16.6 4.7l-10.6-14.2 8-13 2.6 27.2zm-3.4-28l-14 4.6-4.1-5.4 3.3-5.3 13.7 4.6 1.8 1-.7.5zm-1-2l-12.3-6.6 4-6.2 10 13.4-1.6-.6zm1.5-.4l-9.6-13 7.3-11.7 2.3 24.7zm-2.6-25.7l-13.2 4.4-3.7-4.9 3-4.7 12.8 4.4 1.3.7-.2.1zm.1-1l-1.1-.3-11.5-6.2 3.5-5.6c3 3.9 6.2 8 9.1 12.2zm0-1c-3-4-6-7.8-8.8-11.7l6.6-10.7 2.1 22.4zm-3.5-23l-11 3.6-3.3-4.5 2.7-4.3 12.5 4.2.4.2-1.3.8zm1.2-1.4l-11.4-6 3.2-5.1 8.2 11.1zm0-1.1l-8-10.6 6.1-9.7 1.8 20.3zm-2-21.4l-.2.1-11 3.7-3-4 2.4-3.9 11.4 3.8.3.3zm-.2-.6l-10.4-5.5 3-4.6 7.4 10zm0-1.2l-7.2-9.5 5.5-8.7L431 969zm-1.9-19.6l-.8.5-9.3 3-2.9-3.8 2.2-3.5 10.3 3.4.5.4zm-.1-.7h-.2l-9.3-5 2.7-4.3 6.8 9.2v.1zm0-1.1l-6.5-8.6 4.9-8 1.5 16.6zm-1.6-34.2v-.5l.5.7-.5-.2zm1.2.4l-1.4-2-1.2-12 2.5-.5h.1v14.5zM426 896l-.6-7 1.4.2 2.3 8.8-3-2zm1.3-6.8l13.7 2.6-11.4 6.3-2.3-8.9zm2.4 10.7l8.7 8.9-8.7 5v-14zm9.2 9.5l7 7.2-15.6-2.2 8.6-5zm-8 5.5l15.6 2.2 11 11.3-26.6-13.5zm27.9 14.2l-11.4-11.9 11.4 1.7v10.2zm.5 1.2zm0 .5zm0 4.4zm0-3.5v-.1.1zm0 .8v-.2.2zm0 1.3zm0 2.4v-.2.2zm.2-2zm0 .1zm-.1-16.4l-6.7-10.3 15 5.7-8.2 4.6h-.1zm.7 10.8v-.3.3zm1.4 6zm.7-5.5v-.7.7zm0 7v-.2.2zm0-3.8v-.2.2zm0-2.2v-1.7l1.9-1-.1.3v3.5l-1.7-.6v-.5zm1.9-2.1v.2c-.1-.1-.1-.1 0-.2zm0 3.6l-1-.5 1 .4c-.1 0-.1 0 0 .1zm.6-4.2zm1.5.8zm-.1-3s-.1 0 0 0h-1.2c-.3 0-.3.1-.5.2-.3.2-.4.4-.4.6 0-.2 0-.5.4-.6l.4-.2-.4.2a1 1 0 0 0-.5.8v.2l-2.6 1.5h-.1a2 2 0 0 0-1 0h-.2c-.2 0-.3 0-.4.2h-.1v-8.8l6.9 5.7-.3.2zm.9 9.5c0 .2-.1.5-.4.6.3-.1.4-.3.4-.6zm0-1.5s0-.1 0 0v-.7l14.5 5 10 8.2-24.5-12.5zm25.1 22v-.1.2zm0-2.5v-.2.2zm0 3.7v-.2.2zm0-.4zm.3-9c-.3.1-.4.3-.4.5 0-.1.1-.4.4-.6zm-9.5-9.2l10 3.4h.2v5l-10.2-8.4zm9.9 17.9zm1.4.7c-.5.2-1 .2-1.4 0h1.4zm0-.7zm2.6-3.9v-.2.2zm0-.8zm0-.4zm0 2v-.2.2zm.3-8.4l-.5.5-2.8 1.6V942l3.5 2.3-.2.1zm.8-.6l-3.9-2.6 3.9-2.2v4.8zm1.7 1.4zm0 5.4zm0-3.8v-.4c.1.2 0 .3 0 .4zm0 1.6v-.4c.1 0 0 .2 0 .4zm0 2.2v-.6.6zm0 .6v-.5.5zm0 .8v-.4c.1.1 0 .3 0 .4zm0 1.5v-.4c.1.2 0 .3 0 .4zm-38.4-25.3l-.5-.1.5.1z" fill="#3C3C3B"/>
    <g fill="none" stroke="#CBD000" class="strokegreen" stroke-miterlimit="10">
      <path d="M319 851.7s-88.8 27-172.8 44.2c-77.8 16-306.1 7.2-306.1 7.2m516.4-34.5S230.8 939.2 163.3 952C118 960.4-128 990.2-128 990.2m481-190s-143.8 34.4-196.5 43c-50.9 4.3-201.7 16-201.7 16"/>
      <path d="M352.3 872.2S212 923.6 162.6 933.7c-49.4 10-304.3 52.2-304.3 52.2m515.1-172.6s-74.7 25.2-172.2 48.7c-97.5 23.6-238.7 25.4-238.7 25.4M320 854s-131.5 57.6-205.8 71.3C31 939-115.2 941.6-115.2 941.6"/>
      <path d="M443.2 855.2S275.5 944.5 168 970.4c-108 25.9-299.2 40.8-299.2 40.8"/>
      <path d="M465 866.2s-160.8 103-276.5 125a7898.6 7898.6 0 0 1-294.3 47.4"/>
      <path d="M460.5 933.4s-146.7 92.5-272 117c-125.3 24.4-330.2 2.6-330.2 2.6"/>
      <path d="M493.2 953.8S283.8 1067.3 200.4 1088c-70.5 17.5-337.5 56-337.5 56"/>
    </g>
    <g opacity=".3" fill="#878787">
      <path d="M539.3 1049.5c-.1 0-.1 0 0 0-.1 0-.1 0 0 0m0-.5a1 1 0 0 0-.5.6l-.2.8c0 .3 0 .5.2.7 0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c0-.5.2-1 .4-1.3m.3.7"/>
      <path d="M539.4 1051l-.2.2c-.3.2-.4 0-.5 0l-.2-.7c0-.7.3-1.5.8-1.6l-.4.5-.2.8c0 .4 0 .5.2.7s.2.2.4.1c0 .1 0 0 0 0"/>
      <path d="M539.7 1048.7a1 1 0 0 0-.4.6l-.1.2v.7c0 .4 0 .5.2.7 0 .2.2.2.3.1h.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .2-1.3m.3.8"/>
      <path d="M539.7 1048.7v.1l-.4.5-.1.2v.7c0 .4 0 .5.2.7 0 .2.2.2.3.1h.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3 0-.2 0-.3.2-.3"/>
      <path d="M540.2 1048.4a1 1 0 0 0-.5.6l-.1.7v.2l.1.7c.1.2.2.1.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.3m.3.4"/>
      <path d="M540.2 1048.4v.1l-.5.5-.1.7v.2l.1.7c.1.2.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.1-.2l-.2-.6c0-.5 0-1 .3-1.3 0-.2.2-.3.4-.3"/>
      <path d="M540.6 1048.2a1 1 0 0 0-.5.5l-.2.8.2.8c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.2-.9.4-1.2m.4.3v.1"/>
      <path d="M540.6 1048.2c-.2 0-.4 0-.5.2-.2.3-.4.8-.4 1.3l.2.7.2.2.2-.1.2-.2c-.2.2-.4 0-.5 0l-.2-.7v-.1l.2-.8c.1-.3.2-.5.4-.5h.2m.4.1v.1m0-.4a1 1 0 0 0-.4.5v.9l.1.7c.1.2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.5 0-1 .3-1.2"/>
      <path d="M541 1047.9l-.4.5v.9l.1.7c.1.2.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3l.3-.2"/>
      <path d="M541.6 1047.7c-.1 0-.1 0 0 0a1 1 0 0 0-.5.5l-.1.2v.7c0 .3 0 .5.2.7 0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.5 0-1 .3-1.2m.2.3"/>
      <path d="M541.6 1047.7h-.1l-.4.5-.1.2v.7c0 .3 0 .5.2.7 0 .2.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2-.1-.2 0-.3.3-.3-.1 0-.1 0 0 0"/>
      <path d="M542 1047.7l-.1.3v-.3m0-.3a1 1 0 0 0-.4.6l-.2.8c0 .3 0 .5.2.7s.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.4.2-1 .4-1.2m.3.4"/>
      <path d="M542 1047.4h-.1l-.4.6-.2.8c0 .3 0 .5.2.7s.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.2 0-.2.2-.3.4-.3"/>
      <path d="M542.4 1049.2a.2.2 0 0 1-.2-.2l-.1-.7c0-.3 0-.8.2-1.1l-.3.5-.1.3v.5c0 .3 0 .5.2.7 0 .2.1.2.3.1m.3-1.6"/>
      <path d="M542.4 1049.2l-.2.2-.1.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4 0-1 .4-1.2l.2-.2-.3.5-.1.3v.5c0 .3 0 .5.2.7s.1.2.3.1"/>
      <path d="M543 1049h-.2c0 .1-.3.1-.4 0l-.2-.8v-.5l.1-.3.1-.1.1.2v.7l.1.6.3.1"/>
      <path d="M543 1049l-.3.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.3.1-.8.3-1.1h.1v.2l-.2.3v.5l.2.7c.1.2.2.2.4.1"/>
      <path d="M543.3 1048.7a.2.2 0 0 1-.2-.2l-.2-.6-.2-.3v.4l.2.6c.1.2.2.2.4.1m0-2l-.4.2.1.1.3-.4m.3.4"/>
      <path d="M543.4 1048.7c-.1 0-.1 0 0 0l-.1.1c0 .1-.3 0-.4 0l-.2-.7v-.6c-.2.2-.2.5-.2.7l.2.6.2.2h.2l.3-.3m-.1-2c-.2 0-.3 0-.5.2l.1.1.3-.3h.1m.2 1.8l-.3-.3.1.1.2.2m.3-1.9l-.1.3v-.3m0-.3c0 .1 0 .1 0 0a1 1 0 0 0-.4.6l-.1.3.2.2c0-.4.2-.8.4-1"/>
      <path d="M543.6 1048.6c-.1 0-.2 0-.3-.2v-.2l-.4-.2.2.6.2.2.3-.2m.2-2.3s-.1 0 0 0l-.4.2-.2.5.1.2.1-.3c0-.3 0-.4.4-.6-.1.1-.1 0 0 0m0 1.7l-.1-1.4v.1l-.1.3v.8l.2.2m.4-1.6l-.1.3v-.3m0-.3"/>
      <path d="M543.8 1046.6v-.2l-.4 1 .2.3v-.8s0-.2.2-.3m.5-.6c-.1 0-.1 0 0 0h-.2v.1h.2c-.1 0-.1 0 0 0m.5.2l-.3.9V1046.6l.2-.3h.1"/>
      <path d="M544.5 1047.2l-.3.5v.2l.3-.7m.4-1.2c0-.2-.3-.2-.4-.2l-.3.5-.1.3v.8l.4-.3v-.5l.2-.3h.1l.1-.3m.2.8l-.4 1 .3-.3.1-.3v-.4"/>
      <path d="M544.3 1048s-.1 0 0 0l-.1-.1v.2-.1m.7-2c0-.2-.2-.2-.4-.2l-.3.3-.1.2v.1l.4-.5c.1-.2.3 0 .4.1m.2.8v.3l-.2.3c0 .2-.2.3-.3.4l.3-.4.2-.6m-.6.4l-.3.6v-.4l.3-.3m-3.6-.4l-.1.1c0 .1-.3 0-.4 0l-.2-.8c0-.3 0-.5.2-.8l.1-.1.1.2v.6l.1.7.2.1"/>
      <path d="M541 1046.7l-.2.2c-.3.2-.4 0-.5 0l-.2-.8c0-.3.1-.8.3-1.1h.1v.2c-.2.3-.3.5-.3.8l.2.7c.1.2.2.2.4.1h.2c-.1 0 0 0 0 0m.4-2.1l-.1.3v-.3m0 1.7a.2.2 0 0 1-.1-.2l-.2-.6-.2-.2v.4l.2.7c0 .2.2.2.4.1-.1 0 0 0 0-.2m0-2c-.1 0-.1 0 0 0l-.4.3c.2 0 .3-.2.4-.3m.3.3"/>
      <path d="M541.4 1046.4l-.1.1c-.1.1-.3 0-.4 0l-.2-.7V1045c-.2.2-.2.5-.2.7l.2.6.2.2h.2c.2 0 .3 0 .3-.2m0-2c-.2 0-.3.1-.4.3l.4-.2c-.1-.1-.1-.1 0-.1"/>
      <path d="M541.6 1046.3l-.3-.4v.3l.3.1m.2-1.7c-.1 0 0 0 0 0m0-.5a1 1 0 0 0-.5.6l-.1.3.2.2c0-.4.2-.8.4-1m.3.3"/>
      <path d="M541.7 1046.4c-.1 0-.2 0-.3-.2l-.1-.3-.3-.2c0 .2 0 .4.2.6l.2.2h.3m.2-2.4c-.1 0-.1 0 0 0-.2 0-.4.1-.5.3l-.2.4v.2l.2-.3c0-.3.2-.5.4-.5m.4-.3a1 1 0 0 0-.4.6l-.1.2v1l.4.5h.1a.2.2 0 0 1-.1-.3l-.2-.6c0-.5.2-1 .3-1.3m.4.2"/>
      <path d="M542.3 1043.8c-.2 0-.4.1-.5.3l-.4 1 .2.3v-1.1c.2-.3.3-.5.5-.5 0 .1.1.1.1 0m.5.2v-.2m0-.3a1 1 0 0 0-.5.6v.3l-.1.6.1.6c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.3"/>
      <path d="M542.7 1043.5c0 .1 0 .1 0 0v.1l-.5.5v.3l-.1.6.1.7c.1.2.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.1-.2l-.2-.6c0-.5 0-1 .3-1.3l.4-.3"/>
      <path d="M543.1 1043.3a1 1 0 0 0-.5.6v.8l.1.8c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .3-1.3m.3.3v.1"/>
      <path d="M543.2 1043.3v.1l-.5.5v.8l.1.8c.1.2.2.2.4 0h.1l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3 0-.2 0-.3.3-.3"/>
      <path d="M543.5 1043.5v.1m0-.5a1 1 0 0 0-.4.5l-.2.9.2.7c.1.2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.4.2-.9.4-1.2"/>
      <path d="M543.6 1045.2l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3l.4-.2-.4.4-.2.9.2.7c.1.2.2.2.4 0-.1 0 0 0 0 0"/>
      <path d="M543.7 1045l-.1-1.7-.1.2v.7c0 .3 0 .5.2.7-.1 0 0 0 0 0m.7-1.3s0 .1 0 0c0 .1 0 0 0 0"/>
      <path d="M543.7 1045.2v-.2l-.1-.1-.2-.7v-1.1a3 3 0 0 0-.3 1.2l.2.7.4.2c-.1 0-.1 0 0 0m.4-2.4s-.1 0 0 0h-.1M544.5 1042.6a1 1 0 0 0-.5.6l-.1.1v1.4c.2.2.3.2.5 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.5.2-1 .4-1.2m.2.7c0 .1 0 .1 0 0 0 .1 0 .1 0 0m.1-.4"/>
      <path d="M544.5 1044.6c-.1.2-.3 0-.4 0v.3l.2-.1.2-.2m0-2c-.1 0-.3 0-.4.3l-.1.2v.1c.2-.3.3-.5.5-.5v-.1m.5 0l-.2.3.1-.3m0-.3c-.2 0-.4.3-.4.6l-.2.7v.1c0 .3 0 .5.2.7 0 .2.1.2.3.1l.1-.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.3.1-1 .4-1.2m.3.8"/>
      <path d="M544.9 1042.3c-.2 0-.4 0-.4.3-.2.3-.4.7-.4 1.2 0 .3 0 .5.2.7l.2.2.1-.1.2-.2v.1c-.2.1-.3 0-.4-.1l-.2-.7c0-.4 0-.6.2-.8 0-.3.1-.5.3-.5l.2-.1"/>
      <path d="M545.4 1044.1v.1h-.5l-.2-.8v-.5l.1-.3.2-.3h.1l-.2 1 .2.7.3.1"/>
      <path d="M545.4 1044.1l-.2.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2l.1-.1h.1s0 .2-.2.3v.8l.1.7c.1.2.2.2.4.1-.2 0-.2 0 0 0"/>
      <path d="M545.8 1043.8h-.2l-.2-.7.1-.6-.2-.1v.7l.1.7c.1.1.2.2.4 0-.1.1 0 .1 0 0m0-2l-.3.2.1.1.2-.3"/>
      <path d="M545.8 1044s-.1 0 0 0c-.2 0-.3 0-.4-.2l-.2-.6v-.1l.1-.7v-.1a2 2 0 0 0-.3 1l.2.6.2.2h.2l.2-.2m0-2.2s0 .1 0 0l-.4.2h.1l.2-.2c.1.1.1.1.1 0 0 .1 0 .1 0 0m.4 1.1c-.1 0-.1 0 0 0h-.1m.4-.8h-.1l-.2.3h.2v-.3m-.4.8l-.3-.3v.7l.4-.4m0 0l-.3.6v.2l.4-.7m.4-1.2l-.1-.2h-.3l-.4.5.4.2c0-.1 0-.2.2-.3l.2-.2m0 1.3l-.3.5.3-.3v-.2"/>
      <path d="M545.9 1043.6c-.1 0-.1 0 0 0l-.1-.2-.1-.2v-.7l-.2-.1v.6l.1.6.2.1h.1m.6-2.2h-.3l-.4.2-.2.3.1.1c.1-.3.2-.5.4-.5h.4m0 .1v-.2.2m0 1.3v.2l-.3.3.3-.3v-.2"/>
      <path d="M546.2 1042.9l-.4.5-.1-.2.4-.4m4.9 22.5a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.3 0-.9.3-1.2m.3 1"/>
      <path d="M551 1067.5l-.1.1c-.3.2-.4 0-.5 0l-.2-.7c0-.7.3-1.5.8-1.6l-.4.5-.1.4v.4l.2.7c0 .2.2.2.4 0-.1.2-.1.2 0 .2"/>
      <path d="M551.5 1065.2s-.1 0 0 0a1 1 0 0 0-.5.5l-.2.7v.2c0 .3 0 .5.2.7 0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.5.2-1 .4-1.3m.3.8"/>
      <path d="M551.5 1065l-.1.2-.4.4-.2.7v.2c0 .3 0 .5.2.7 0 .2.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.3l.4-.2"/>
      <path d="M552 1064.9c-.2 0-.2 0 0 0a1 1 0 0 0-.5.5l-.2.8v.1c0 .3 0 .5.2.7s.2.2.3 0h.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.5 0-1 .3-1.2m.3.3"/>
      <path d="M552 1064.9h-.2c0 .2-.2.3-.3.5l-.2.8v.1c0 .3 0 .5.2.7s.2.2.3 0h.1l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.3l.3-.2"/>
      <path d="M552.3 1065c0 .2 0 .2 0 0 0 .2 0 .2 0 0m0-.4a1 1 0 0 0-.4.6l-.2.7v.1l.1.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.2-1 .4-1.2m.3.7"/>
      <path d="M552.4 1064.6l-.5.6-.1.7v.1l.1.7c.1.2.2.2.4 0h.1l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.1-.7c0-.5 0-1 .3-1.2 0-.2.1-.3.4-.3"/>
      <path d="M552.8 1064.3c-.2.3-.4.8-.4 1.2l.2.7.2.2v.1l-.5-.1-.2-.7.1-.5v-.1l.1-.2c.1-.3.3-.4.5-.6"/>
      <path d="M552.8 1066.4l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2l.4-.3h.1c-.2 0-.4.3-.5.5v.2l-.2.6.2.7c.1.2.2.2.4.1"/>
      <path d="M553.3 1064c-.1 0-.1 0 0 0a1 1 0 0 0-.5.7c0 .2 0 .5-.2.6v.2l.2.7c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.7c0-.4.1-1 .4-1.2m.3.8"/>
      <path d="M553.3 1064h-.1l-.4.6c0 .2 0 .5-.2.6v.2l.2.7c.1.2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2l.4-.3c-.1 0 0 0 0 0"/>
      <path d="M553.7 1063.8a1 1 0 0 0-.5.6l-.2.8.2.7c0 .2.2.2.4.1l-.1-.2-.2-.6c0-.6.2-1.1.4-1.4m.3.8"/>
      <path d="M553.7 1063.8l-.1.1-.4.5-.2.8.2.7c0 .2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.2.2-.3.4-.3"/>
      <path d="M554.2 1063.5s-.1 0 0 0a1 1 0 0 0-.5.6l-.2.8c0 .3 0 .5.2.7s.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c0-.4 0-1 .4-1.3m.2.8"/>
      <path d="M554.2 1063.5l-.1.1-.4.5-.2.8c0 .3 0 .5.2.7s.2.2.4.1l-.1.1-.2.1h-.2l-.2-.8c0-.4 0-1 .4-1.2 0-.3.2-.4.4-.4"/>
      <path d="M554.6 1063.2c0 .1 0 .1 0 0a1 1 0 0 0-.4.6l-.2.8c0 .4 0 .5.2.7 0 .2.1.2.3.1h.1a.2.2 0 0 1-.2-.3l-.1-.6c0-.4 0-.9.3-1.3m.2.9"/>
      <path d="M554.6 1065.3l-.2.2-.1.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3l.3-.3h.1c-.2.1-.4.3-.4.5l-.2.8c0 .4 0 .6.2.7 0 .2.1.2.3.1 0 .1 0 0 0 0"/>
      <path d="M555 1063a1 1 0 0 0-.5.6c0 .2 0 .5-.2.7v.2l.2.6c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.2-1 .4-1.3m.3.8c0 .1 0 .1 0 0 0 .1 0 .1 0 0"/>
      <path d="M555 1063l-.5.5c0 .2 0 .5-.2.7v.2l.2.7c.1.2.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.1-.6c0-.5 0-1 .3-1.3l.4-.3"/>
      <path d="M555.5 1062.7s-.1 0 0 0a1 1 0 0 0-.5.6l-.2.8.2.8c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.3m.3 1.3"/>
      <path d="M555.5 1062.7l-.1.1-.4.5-.2.8.2.8c.1.2.2.2.4 0h.1l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3.1-.2.2-.3.4-.3"/>
      <path d="M555.9 1064.3l-.1-.1m.2.4a.2.2 0 0 1-.2-.2l-.2-.7v-.7c0-.2.2-.2.3-.3l-.1-.1-.3.4-.2.8v.1l.2.7h.5c-.1 0-.1 0 0 0m.2-1.1v-.2.2m.1.2"/>
      <path d="M556 1064.6l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3l.2-.1-.3.4-.2.8v.1l.2.7c.1.2.2.2.4 0m.8-1.3v.1l-.2.3h-.2v-.5l.2.1v.1h.2c-.1 0-.1 0 0 0-.1 0-.1 0 0 0"/>
      <path d="M556.3 1063.1l-.3-.4c-.1.3-.2.6-.1 1v.2l.4-.4v-.2c-.1 0-.1 0 0-.2-.1.1-.1.1 0 0-.1 0-.1 0 0 0-.1 0 0 0 0 0m.4-.7l-.2-.2v.3l.2-.1m.1.8v.2l-.2.3h-.2v-.2l-.4.6c.2.3.3.3.5.2l.3-.5.1-.3c-.2 0-.2-.2 0-.3"/>
      <path d="M556.7 1062.4l-.2-.2s.2 0 .2.2m.1.8v.6c-.1.3-.2.5-.4.5l-.4-.1-.1-.2v-1.4l-.2.3-.1.7c0 .2 0 .5.2.7l.2.2.2-.1c.3-.2.4-.4.5-.7l.1-.5"/>
      <path d="M556.3 1063.6l-.4.6v-.2l.4-.4M552.6 1061a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.6c0-.4.1-.9.3-1.3m.4.4v.1-.1"/>
      <path d="M552.6 1061v.1l-.5.5v.8l.1.7c.1.2.2.2.4.1h.1l-.2.1c-.3.2-.4 0-.5 0l-.2-.7c0-.7.3-1.5.8-1.6"/>
      <path d="M553 1061.2v.1m.1-.5s-.1 0 0 0a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c0-.5 0-1 .3-1.3m.3.3l-.1.6v-.6"/>
      <path d="M553.1 1060.7l-.1.1-.4.5v.8l.1.7c.1.1.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3l.3-.3"/>
      <path d="M553.5 1060.8l-.1.3v-.3m.2-.3c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6l-.1.2v.7l.2.8c0 .1.2.1.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.5 0-1 .3-1.3m.2.8c0 .1 0 .1 0 0 0 .1 0 .1 0 0m0-.5s0 .1 0 0c0 .1 0 0 0 0"/>
      <path d="M553.6 1060.5l-.1.1-.4.5-.1.2v.7l.2.8c0 .1.2.1.4 0l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3-.1-.2 0-.3.3-.3-.1 0-.1 0 0 0"/>
      <path d="M554 1060.5l-.1.3v-.3m0 1.9a.2.2 0 0 1-.1-.2l-.2-.7c0-.4 0-.8.3-1l-.1-.2-.3.5-.1.3-.1.6c0 .3 0 .5.2.7 0 .2.2.2.4 0m.4-1.3"/>
      <path d="M554 1062.4l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.3l.2-.2v.1l-.3.5-.1.3-.1.6c0 .3 0 .5.2.7 0 .2.2.2.4 0v-.1"/>
      <path d="M554.4 1062a.2.2 0 0 1-.1-.1l-.2-.7v-.5l-.1-.2-.1.3v.6c0 .3 0 .5.2.7s.2.2.3 0m0-2.1"/>
      <path d="M554.4 1062v.2l-.4-.1-.2-.7v-.9a2 2 0 0 0-.3 1c0 .3 0 .5.2.7l.2.2.2-.1.3-.2M555 1061.8a.2.2 0 0 1-.3-.2v-.5l-.4-.3v.3l.2.7c.1.2.2.2.4 0m0-2c-.3 0-.4.2-.5.4l.1.1.3-.5m.4.3"/>
      <path d="M555 1061.8h-.2c0 .2-.3 0-.4 0l-.1-.7v-.3l-.2-.2-.1.5c0 .3 0 .5.2.7l.1.2.2-.1.4-.1m0-2.1c-.2 0-.4 0-.5.3l.1.2.3-.4.1-.1m.4-.2c-.2 0-.3.2-.4.5v.4l.1.3c0-.4 0-.8.3-1.2m0 .3"/>
      <path d="M555 1061.8l-.5-.6.1.5.2.2.2-.1m.3-2.3c-.2 0-.3 0-.4.2l-.3.6.1.1.1-.4.5-.5m.5 0c-.1 0-.1 0 0 0m0 1.8a.2.2 0 0 1-.2-.2l-.2-.7v-.7l-.2.4v.9l.3.4h.3m0-2.2c-.1 0-.1 0 0 0h-.2v.2l.2-.2m.3.4"/>
      <path d="M555.3 1059.7v-.2c-.3.3-.4.8-.4 1.1l.3.3v-.9l.1-.3m.5 1.6l-.1.1h-.1v.1l.2-.2m0-2.1s-.1 0 0 0h-.2v.1l.2-.1m-.1 1.8l-.1-.4v.3m.6-1.6l-.1.3v-.3m.2 1.7c-.1 0-.1 0 0 0-.1 0-.1 0 0 0m-.1-2a1 1 0 0 0-.5.6v.6c.2-.5.3-1 .5-1.2m.4.3l-.1.6v-.6"/>
      <path d="M555.8 1061.3l-.1-.3-.1-.3-.2-.5v.4l.2.7h.2m.5-.3c-.1 0-.1 0 0 0-.1.1 0 0 0 0m0-2c-.1 0-.1 0 0 0-.2 0-.4 0-.5.2l-.1.2v.2-.1c.2-.3.3-.5.5-.5m.4.1l-.1.2v-.2m.2-.4s-.1 0 0 0a1 1 0 0 0-.5.6l-.1.3v.5c0 .3 0 .5.2.7 0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .3-1.3m.3.3"/>
      <path d="M556.7 1058.7l-.1.1-.4.5-.1.3v.5c0 .3 0 .5.2.7 0 .2.2.2.4.1l-.1.1-.2.1h-.1l-.3-1c0-.3.2-.8.4-1.1 0-.2 0-.3.3-.3"/>
      <path d="M557.1 1060.4a.2.2 0 0 1-.2-.1l-.2-.7.2-.9-.2.2v.3l-.1.6.1.6c.1.2.2.2.4.1m.3-.7V1059.2v.6"/>
      <path d="M557.1 1060.4v.1c-.2.1-.4 0-.4 0l-.2-.7v-.6l.2-.2v-.4c-.2.2-.4.7-.4 1.2 0 .3 0 .5.2.6l.2.2h.1c.2 0 .2 0 .3-.2m0-2"/>
      <path d="M557.5 1060.3l-.2-.1-.2-.7v-.4l-.2-.1v.7l.1.6h.5m0-.3c0-.1 0 0 0 0M557.5 1058.1s0 .1 0 0l-.3.3.1.1.2-.4m.4.6v.3-.3"/>
      <path d="M557.4 1060.3c0 .1-.3 0-.4 0l-.2-.7.1-.6v-.2c-.2.3-.2.6-.2.9l.1.6.2.2h.2c.2 0 .2 0 .2-.2m.1-2.2l-.4.2.1.1.3-.3c0 .1 0 0 0 0m.5.9h-.2v-.4l.2.3"/>
      <path d="M557.6 1059.4l-.2-.2v.5l.2-.2m.2 0l-.3.5.3-.4m.1-.8l-.3-.5v.2l-.2.2.4.3.1-.2m.3 1l-.2.3.2-.2m.2-1.4l-.1-.2-.1-.2h-.2l.4.4m0 .5l-.2.4c.2-.1.2-.2.2-.4"/>
      <path d="M557.5 1060v-.2l-.2-.5v-.1l-.2-.2v.4c0 .2 0 .5.2.7h.2v-.1m.1-1.8c-.2 0-.3.1-.3.3l.1.1.1-.2.1-.2m.6 1.6l-.2.2.2-.2m.2-1.4l-.3-.5.2.1v.4m0 .5"/>
      <path d="M557.7 1059.5l-.3.4V1059.6l.2-.2h.1m-1.3 3.7l-.4-1-.5-.6-.1-.1-.3-.4-.3-.3-.2-.3v-.1l-.2-.2v-.1l-8.4-9.6-2-1.6v-.8l-.2-.3-.2-.2-.2-.2-.1-.2-.1-.1v-.1l-.8-.8-.4-.5-.2-.2-.2-.2-.1-.2-.1-.1-.1-.1-6.3-7.1-1-.5h-.1v-.3l.2-.5-5.4-6.2h-.5l-.3.2 13 14.8.1.3v.2l.3.1.3.3.3.4v.1l.7.8h.1l.1.3.1.2.2.3.3.2.3.4v.1l10.3 11.7v.2l.2.1.1.2.2.2.3.3.5.6.7.7v.1l.2.1.3.4.1.2-.2-.6M533 1015.9l-.4-.9-.4.3.2.6h.5m.9 2.2l-.7-1.7h-.4l1 1.7m1 .3l-1-1.8.8 2 .2-.2m1.9 3.1l-1.8-3-.2.5.3 1 1.5 2.3.2-.8m.4.8l-.2-.3-.3.8.5-.5m1.2 2.1l-.7-1.1-.3.3.8 1.5.2-.4v-.3m3.9 6.5l-3.6-6h-.1l-.3.6 3.2 5.3h.8m.2.6l-.7-.2.3.5.4-.3m1 2.5l-.2-1.2-.5-.9-.5.3 1.1 1.8m4.3 6.3l-4.1-7v1.3l3.6 6 .1-.1.4-.2m2.3 3.7l-2-3.3-.5.3 1.6 2.6 1 .4m.3.8l-1-.5.5.8.5-.3m1.6 3.7l-.8-2.5-.5-.8-.5.3 1.8 3m6.6 10l-.3-.5-6.3-10.5.8 2.5 5 8.2v.1l.3.5.1.2v-.2l.3-.3m-18.7-34.7l-.8-1.3-.5.4.7 1.2.6-.3m3.5 6.4l-3.4-6-.4.3 3.7 6.7h.1l.1-.2v-.8m5.4 9.5l-4.5-8-.6-.4v.4l4.6 8.2.5-.2m2.5 4.4l-2.3-4-.5.3 2.3 4 .1.1.4-.2v-.2m8 14l-7.4-13-.3-.4h-.1l-.2.2.3.8 7.3 12.7.4-.3m1 2.7l-.4-1.4-.5-.8-.4.3 1 1.6.3.3m-15.5-50.1l-.8-2.1-.3.2v.6l.5 1.3h.6m.1.4l-.4-.1.2.6.2-.5m1.2 2.9l-1-2.7-.4.6 1.1 3 .3-1m.6 1.5l-.3-.7-.3.9.2.4.4-.6m.2.5l-.1-.2-.4.6.5-.4m15.4 40.5l-15.2-39.7-.4.3.7 2.2.3-.2c.1-.1.2 0 .2 0v.4l.3 1.8 5.8 15 .4.2v.1l.8 3 6.2 16 .7 1h.2"/>
      <path d="M559.4 1058.3v-.4l-.3.1-.5.3-.1.1-.1.1-.2.3-.1.2-.1.1.3.3v-.4l.4-.2.4-.3.3-.2m2.8-1.9c0-.2 0-.2-.2 0h.2c0 .1 0 .2-.2.3h-.2l-.2-.2-1.9 1.2.1.4 1.7-1-1.2 3.2.1.5v.1l-.1.2-.1.1-.2.1-.3-.2-2.7 1.6 1-2.5v-.3l-.2-.3-.2.5v.3l-.9 2v1c0 .1-.2.1-.2 0l-.1-.2v.4h.2l3.6-2.2.2-.3 1.6-4.3.2-.4m-11.8-17.4v-.5l-1.8 1.1-.5.3-.5.3-.4.2-.2.3-.3 1-.1.3-.1.4.4.2.5-1.7.5-.3.5-.3.5-.3 1.5-1m.3 5.9l-.5-.3-.5.3-5 3 .4-1.1 1.3-3.3.2-.6-.4-.2h-.1l-.3.8-.1.2v.2l-.8 2.1v.3l-.4.9-.3.8-.1.2v.2l.2.2 5.4-3.2.5-.3.5-.2m.6-.3l-.1-.1v-.1l-.1-.4-.1.1-.4.2.2.1v.3l.5-.1c-.1 0 0 0 0 0m2.8-7.6l-.1-.3-.3-.2-3.1 1.9.1.4 3-1.7-2.3 6.2v.7l2.7-7m-20.3 0h-.1l-.1-.2.1-.7-.2.5v.4c.1.2.2.2.3.1m9.3-5.5v-.2h-.6l-.5.3-7.7 4.5 2-5.4h-.4l-1.2 3.2-.6 2.6.3.2 7.8-4.6.5-.3.4-.3m0-.7v.2-.2m.1-9.3l-3.6 2.2-.5.2-.8.5-.2.2-.2.4-1.9 5.3h.4l1.8-5 .3-.6h.1l.8-.5.4-.3 3.5-2v-.4m4.1-1.6v-.5l-1.6.5-2.4 1.5v.5l3.6-2.2-3.7 10.2v.9l4.1-10.9m.3-.9c0-.1 0-.1-.2 0l-.3.1h.3c.1-.1.1-.1.2 0v-.1"/>
      <path d="M535.2 1030.3l-6.8-.6-.6.4h.5l6.8.6.1-.4m8.7 11l-.3-6.7-.1-1.2-.1-1.6v-.4l-.2-.2h-.2l-1-.1-.8-.1-5-.5h-.9v.4h.7l5.4.4.7.1h.2l.6.1v.2l.1 1.2.1 1.2.3 7.1h.5m10.5 15.7l-.1-.8-9.8-7.5-.2-.2v-2.3l-.1-1.1v-.3l-.1-1.3v-.4l-.1-1.2-.4-.2v1.8l.2 1.7v1.5l.2 1.4v.8l2 1.6 8.4 6.5m5.8 4.2l-.2-.4-.4-.3-1.3-1-.1-.1-.3-.3h-.1l-.4-.4-.2-.2-2.5-1.9.2.8 1.8 1.3v.1l.1.1.1.1.2.1.2.2.2.2h.1l.3.4h.1l1.5 1.3.3.2c.3 0 .4 0 .4-.2"/>
      <path d="M556.7 1063v.3c0 .1-.2.1-.2 0l-.1-.2-.4-1-.2-.8-.1-.3-.1-.3-.2-.5v-.3l-.2-.2-.8-2.5-.1-.8-2.5-7.8-.7-2.5-.3-1-.4-.2-1-.5-2.6-1.2h-.1l-.4-.2h-.1l-.4-.2-.2-.1-.2-.1v-.1l-.2-.1-1.2-.5-.4-.2-8.7-4-1-.5h-.1l-.1-.2.1-.7 1.3-5.5.1-.4 1.6-6.4.4-.3-1.7 6.7v.4l-.8 3.3-.6 2.6.3.2 9.2 4.3.4.2 1.6.8h.2l.1.2.4.2h.2l.4.3 2 1 1 .4.8.4h.1l.2.2v.3l.4.7.5 1.9.8 2.5 2.1 6.7.2.8.6 1.9v.4l.2.4.3 1v.1l.4 1.1v.3h.2m-16.6-44.8l-.5.8-.8 2.4.4-.3 1-3m.2-.9h-.3l-.3 1 .6-1m1.3-3.8l-.2-.3-1.3 3.6h.3l1.2-3.3m.6-2l-.2-.3-.4 1.5.2.3.4-1.4m.3-.7v.2-.2m.9 6.7h-.3v.7l.3-.2v-.5m0-1.7l-.3-.4v1.7h.3v-1.3m0-1.5l-.3-.7v1l.3.3v-.6m0-1.1v.2-.2m0-2.3h-.3v1.7l.2.4.2-.2-.1-2m0-2.2l-.6.4-.5 1.3h.3l.5-1.4v1.4h.3v-1.7m0 22.3v-10.3l2.4-.8 1.5-.5.1.5 2.1 14-6-3m7.9 13.3l-.1-.8-.7-4.4-.1-.4-.6-3.7 3.7 2 .3.1v.3l3.7 14.3-6.2-7.4m10.6 12.4v-.2l-.8-1-3-3.3-3.2-12.6-.8-3-.4-.3-3.9-2-1.9-13.1-.3-1.8v-.2h-.4l-3.7 1.2v-1.1l-.3.1v1.1l-2.7.9-1 .6 3.7-1.1v10.3l.3.2.6.2 5.6 3 .6 4.1.1.5.8 5v.4l.2.1.2.4 6.4 7.3 1.4 5.6.1.4.2 1 .4 1.4.1.4v.1h.2v-.8l-.6-2.3v-.4l-1.3-4.7 3.1 3.6.2.3.2-.1v-.2m11.8-43.4a1 1 0 0 0-.5.6l-.1.8c0 .3 0 .5.2.7 0 .2.1.2.3.1h.1a.2.2 0 0 1-.2-.3l-.1-.7c-.1-.4 0-1 .2-1.2m.4.3"/>
      <path d="M574 1015.1l-.2.2c-.2.2-.3 0-.4 0l-.2-.8c0-.6.3-1.4.7-1.5h.1c-.2 0-.4.3-.4.5l-.1.8.1.7c.1.2.2.2.4.1 0 .1 0 0 0 0"/>
      <path d="M574.4 1014.8000000000001a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3l-.5.5v.8l.1.6c.1.2.2.2.4.1v.1m.3-1.7"/>
      <path d="M574.4 1012.8v.1l-.5.5v.8l.1.6c.1.2.2.2.4.1h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.1.1-.2.3-.2"/>
      <path d="M574.8 1013c0 .1 0 .1 0 0 0 .1 0 .1 0 0m.1-.5c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1l-.1-.2-.2-.6c0-.5 0-1 .3-1.4m.2.9"/>
      <path d="M574.9 1012.5l-.1.1-.4.5v.8l.1.7c.1.2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3 0-.2 0-.3.3-.3-.1 0-.1 0 0 0"/>
      <path d="M575.3 1012.2c0 .1 0 .1 0 0a1 1 0 0 0-.5.6v.3l-.2.6.2.6c.1.1.2.2.4.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.4.2-.9.4-1.3m.3.5"/>
      <path d="M575.3 1012.2l-.1.1-.4.5v.3l-.2.6.2.6c.1.1.2.2.4.1l-.1.1-.2.1h-.2l-.2-.7c0-.5.1-1 .4-1.3l.4-.4"/>
      <path d="M575.8 1012c-.2.3-.4.8-.4 1.3 0 .3 0 .5.2.7l.2.2h-.1c-.1.1-.3 0-.4 0l-.2-.7v-.1c0-.3 0-.6.2-.8 0-.3.2-.5.5-.6-.1 0-.1 0 0 0"/>
      <path d="M575.8 1014l-.2.2-.2.1a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.3l.4-.3-.4.5-.2.8c0 .4 0 .6.2.8 0 .2.2.2.4 0-.1.2 0 .2 0 0"/>
      <path d="M576.1 1011.8a1 1 0 0 0-.4.5l-.1.4v.4c0 .3 0 .5.2.7s.2.2.3 0h.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.4 0-.9.2-1.1m.3.8"/>
      <path d="M576.2 1011.8l-.4.5-.1.4v.4c0 .3 0 .5.2.7s.2.2.3 0h.1l-.2.2h-.1a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.3l.2-.1"/>
      <path d="M576.6 1013.6c-.2.2-.4 0-.5 0l-.1-.7.1-.9.2-.2h.1l-.2 1 .2.6.2.2"/>
      <path d="M576.7 1013.6l-.2.2c-.2.2-.2 0-.2 0a.2.2 0 0 1-.2-.1l-.1-.7c0-.5 0-1 .3-1.2l.1-.1h.1c0 .1 0 .2-.2.3l-.2.9.2.7c.1.2.2.2.4 0"/>
      <path d="M577.1 1013.3a.2.2 0 0 1-.2-.2l-.2-.7v-.3l-.2-.2v.7l.1.7c.1.2.2.2.4 0h.1m0-2c-.2 0-.3.2-.4.3h.1l.3-.3m.3.7s0 .1 0 0c0 .1 0 0 0 0m0-.4"/>
      <path d="M577.1 1013.3c-.2.2-.4 0-.5 0l-.2-.7.1-.7c-.2.2-.3.5-.3.8l.2.7h.4l.3-.1m0-2.1c-.2 0-.3 0-.5.3h.1l.3-.2.1-.1"/>
      <path d="M577.5 1011.5c-.1 0-.1 0 0 0-.1 0-.1 0 0 0m0 1.6l-.2-.2h-.1l-.4-.5.2.7h.5m0-2.1a1 1 0 0 0-.5.6v.2l.1.2.4-1m.3.8"/>
      <path d="M577.5 1013.1l-.5-.1-.2-.7-.2-.2v.3l.2.7.2.2.2-.1.3-.1m0-2.1c-.1 0-.3 0-.4.3l-.2.5.1.1.1-.2c.1-.3.2-.5.4-.5v-.2"/>
      <path d="M578 1010.7c-.2.3-.4.8-.4 1.2 0 .3 0 .5.2.7l.2.2-.1.1-.5-.6v-1l.6-.6c-.1 0 0 0 0 0"/>
      <path d="M577.5 1013l-.2-.2.1.1c-.1 0 0 .1 0 .1m.6-.2l-.1.1m0-2.2c-.1 0-.3 0-.4.3l-.4 1 .2.2v-.8l.1-.2c0-.3.2-.5.4-.5h.2m.2 1.9v-.5l-.1-.4v-.9l-.1.2-.2.8c0 .3 0 .5.2.7l.2.1m.3 0h-.1m0-2.2s0 .1 0 0l-.1.1v.2c0-.1 0-.2.2-.3m.2 1.4c0-.1 0-.1 0 0 0-.1 0-.1 0 0m0 0"/>
      <path d="M578.2 1012.7l-.2-.2-.2-.7c0-.3 0-.6.2-.8v-.4c-.2.4-.4.9-.4 1.3 0 .3 0 .5.2.7l.2.2h.2m.3-.3l-.1.1m0-2.2l-.1.1h.2m.3 1.5v-.2.1m0-1.7a1 1 0 0 0-.4.6l-.1.5v.9c.2.1.2.2.4.1 0 0 0-.2-.2-.2l-.1-.6v-.7l.4-.6m.3 1v-.3.3"/>
      <path d="M578 1012.1v-.8.8m.7.2h-.3l-.1-.3v.5h.2c.2 0 .2 0 .2-.2m.1-2.2c-.2 0-.3.1-.4.3l-.2.3.4-.5h.2m.7.2c-.2 0-.2.1-.3.3v.6l.3-.9m.1.4c0-.1 0-.1 0 0l-.3.7.2-.3.1-.4"/>
      <path d="M579.1 1011.5l-.3.3.1.1.2-.4m.5-1.4c0-.2-.3-.2-.4 0l-.4.4-.2.9v.3l.4-.4v-.2l.1-.3.2-.3h.1l.2-.4m.2.6v-.3l-.1.3-.1.5s0 .2-.2.3l-.3.6h.1l.4-.4.1-.3.1-.7"/>
      <path d="M579.6 1010l-.4-.2-.4.3-.2.6-.1.7.1.6.2.1.1-.2V1011.3l.1-.9c.1-.3.2-.5.4-.5l.2.1m.2.7l-.1.6-.1.3c0 .2-.2.4-.4.4v.1l.4-.5.2-1"/>
      <path d="M579.1 1011.3v.2l-.4.3v-.1l.4-.4m2.3 12.2a1 1 0 0 0-.5.5l-.1.8v.1l.1.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.2m.3.4"/>
      <path d="M581.4 1023.5l-.5.5-.1.8v.1l.1.7c.1.2.2.2.4 0h.1l-.2.2c-.3.2-.3 0-.4-.1l-.2-.7c0-.7.3-1.4.8-1.5"/>
      <path d="M581.8 1023.2a1 1 0 0 0-.5.6l-.2.7v.1l.2.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7.4-1.2m.3.8"/>
      <path d="M582 1025.3c-.2 0-.2 0-.3.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2l.4-.3h.1c-.2 0-.4.3-.5.5l-.2.7v.1l.2.7c.1.2.2.2.4 0"/>
      <path d="M582.3 1023a1 1 0 0 0-.5.6v.7l.1.7c.1.2.2.2.4.1v-.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.3.1-.8.3-1.1m.3.8"/>
      <path d="M582.4 1025l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2l.4-.3-.4.5v.7l.1.7c.1.2.2.2.4.1l-.1.1c-.1 0 0 0 0 0"/>
      <path d="M582.8 1022.7c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6l-.2.7v.1l.2.7c0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.7c0-.4 0-1 .4-1.2m.3.9"/>
      <path d="M582.8 1022.7l-.1.1-.4.5-.2.7v.1l.2.7c0 .2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.2.2-.3.4-.3"/>
      <path d="M583.2 1022.4c-.2.3-.4.8-.4 1.3 0 .2 0 .4.2.6l.2.2-.1.1c-.1.1-.3 0-.4 0l-.2-.7v-.1c0-.3 0-.6.2-.8l.5-.6"/>
      <path d="M583.3 1022.4c-.1 0-.1 0 0 0-.2 0-.4.1-.5.3-.2.3-.4.8-.4 1.2 0 .3 0 .5.2.7l.2.2h.2c0-.2.2-.2.2-.3l-.1.1c-.1.1-.3 0-.4 0l-.2-.7v-.1c0-.3 0-.6.2-.8 0-.3.2-.5.4-.5h.2"/>
      <path d="M583.6 1022.2a1 1 0 0 0-.4.6l-.2.8c0 .3 0 .5.2.7s.1.2.3.1h.1a.2.2 0 0 1-.2-.3l-.1-.6c0-.5.1-1 .3-1.3m.3.7"/>
      <path d="M583.7 1024.2l-.2.2-.1.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3l.3-.3h.1c-.2.1-.4.3-.4.5l-.2.8.1.7c.1.2.2.2.4.1 0 .1 0 0 0 0"/>
      <path d="M584.1 1022a1 1 0 0 0-.5.5l-.2.9.2.6c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.3m.3.8c0 .1 0 .1 0 0 0 .1 0 .1 0 0"/>
      <path d="M584.1 1024l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.1-.6c0-.5 0-1 .3-1.3l.4-.3h.1l-.5.5-.2.9.2.7c.1.1.2.1.4 0 0 .1 0 .1 0 0"/>
      <path d="M584.5 1021.6a1 1 0 0 0-.5.6c0 .2 0 .5-.2.7v.2l.2.7c.1.2.2.1.4 0h.1l-.2-.1-.2-.7c0-.6.2-1 .4-1.4m.3 1"/>
      <path d="M584.6 1021.6s-.1 0 0 0l-.1.1-.4.5c0 .2 0 .5-.2.7v.2l.2.7c.1.2.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3 0-.2.1-.3.4-.3-.1 0-.1 0 0 0"/>
      <path d="M585 1023.5a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-.8.3-1l-.1-.1-.3.4-.2.8.2.8c.1.2.2.2.4 0m.4-1.3"/>
      <path d="M585 1023.5l-.2.2h-.4l-.2-.7c0-.5.1-1 .4-1.3l.2-.2-.3.5-.2.8.2.8c.1.2.2.2.4 0v-.1"/>
      <path d="M585.5 1023.2a.2.2 0 0 1-.2-.2l-.2-.7v-.8l-.2.8v.1c0 .3 0 .5.2.7 0 .2.2.2.4 0-.1.2-.1 0 0 0m0-2c-.1 0-.1 0 0 0l-.2.3c0-.1 0-.2.2-.2m.3.6"/>
      <path d="M585.5 1021s-.1 0 0 0c-.2 0-.2.2-.3.2h.2v-.1m0 2v.2l-.4-.1-.2-.7c0-.4 0-.7.2-.9h-.1a2 2 0 0 0-.3 1l.2.7.2.2.2-.1c.2 0 .2-.1.3-.2"/>
      <path d="M585.7 1021.3l-.1-.2-.2.3.2.2v-.3m.2 1.6a.2.2 0 0 1-.1-.2l-.2-.5-.2-.3v.3c0 .3 0 .5.2.7s.2.2.3 0m.4-1.7v.5a.6.6 0 0 1 0-.5"/>
      <path d="M585.6 1021h-.1l-.2.4.3-.3m.3 1.8c-.1.2-.3 0-.4 0l-.2-.7v-.3l-.2-.2-.1.6c0 .3 0 .5.2.7l.2.2.2-.1c.2 0 .2-.1.3-.2m-.1-.8l-.1-.5v.2l.1.3m.5-1.5a1 1 0 0 0-.5.6l.1.3.1-.3.3-.6m.3.6"/>
      <path d="M585.8 1021.6l-.1-.2-.1.3.2.2v-.3m.2 1.3l-.5-.6c0 .2 0 .4.2.5l.1.2.2-.1m.3-2.3c-.2 0-.4 0-.5.3v.3c.1-.3.2-.5.4-.5l.1-.1m.5.2l-.2.3v.4l.2-.7m.3.4v-.2l-.3.8h.1l.2-.3v-.3"/>
      <path d="M586.3 1022.1v.2-.2m.7-1.6l-.2-.2-.5.5v.3l-.2.5v.4l.4-.4.1-.1v-.4l.2-.3.2-.3m.2.7v-.1l-.1-.3-.1.3v.2l-.1.3c0 .1 0 .2-.2.3l-.3.7.5-.3.1-.2.1-.3v-.6"/>
      <path d="M586.7 1020.3l-.4.3-.3.6v.3l.2 1v-1.2l.1-.3c.1-.4.2-.6.4-.7m.5.9l-.1-.4v.9l-.1.3-.1.2.1-.2c.2-.3.2-.6.2-.8"/>
      <path d="M586.5 1021.6l-.2.4v.2-.2l.2-.4m-.3 1.4v-.2l-.3-.7-.1-.2-.2-.2-.2-.2h-.1l-.1-.1-.1-.1-5.7-6.5-1.3-1v-.5l-.3-.3-.5-.6-.2-.2-.2-.2v-.2h-.2v-.1l-4.3-5-.6-.2v-.5l-3.4-4h-.2l-.2.1 8.3 9.7h.1l.1.1.1.1.2.2.2.2.4.4.2.2v.1l7.3 8.4.2.1v.2l.3.2.2.3.5.6h.1M571 992.5h-.1v.2-.2m1.6 2.3l-.3-.6-1-1.5-.1.3 1.2 2.1.2-.3m1 2.2h-.1m.2-.4l-1-1.6-.3.4.7 1.2h.6m1 1.7l-.4-.7-.3.2.5.9.1-.3.1-.1m2.4 4.1l-2.3-3.8-.2.4 2 3.3.5.1m.2.3h-.5l.2.2.3-.2m.6 1.7v-1l-.3-.5-.3.2.6 1.3m2.8 3.9l-2.6-4.3v.8l2.2 3.8v-.1l.4-.2m1.3 2.4l-1.2-2.1-.3.2 1 1.6.5.3m.3.4l-.6-.3.3.5.3-.2m1 2.4l-.5-1.7-.3-.5-.3.2 1 2m4.3 6.3l-4.1-7 .4 1.6 3.4 5.7.3-.3"/>
      <path d="M575.5 997.8l-.5-.7-.3.1.4.8.4-.2m2.3 4l-2.1-3.7-.3.2 2.4 4.1v-.5m3.2 6l-2.8-5-.4-.3v.3l3 5.2.2-.2m1.7 2.8l-1.5-2.6-.3.2 1.5 2.5.3-.1m5 8.8l-4.7-8.2-.2-.2h-.1l-.1.2.2.5 4.6 8 .3-.3m.6 1.8l-.2-1-.2-.5-.3.2.5 1 .2.3m.3 0v.1m-9.6-31.1l-.4-.6-.5-1.3h-.1v.4l.2.6.7 1m.9 2l-.2-.4-.7-1 .6 1.4h.3m10 26.2l-9.6-25.1-.3.2.5 1.2h.2v.1l.3 1.2 3.6 9.5.3.2.5 2 3.8 10 .6.6v.2-.1"/>
      <path d="M588 1019.7v-.3l-.2.1-.3.2-.1.1-.1.1-.1.2v.2l.2.2v-.2l.3-.1.3-.2v-.3m1.8-1.2l-.1.2h-.1l-.1-.2-1.3.6.1.3 1.2-.6-.8 2 .1.3v.2h-.5l-1.2.7-.5.3.2-.7.3-.8v-.3l-.1-.2-.1.3-.3.7v.2l-.3.3v.8c-.2.1-.2 0-.2 0v.1h.1l2.3-1.3.1-.2 1-2.7h.2m-7.5-10.9v-.3l-1 .7-.4.2-.2.2-.3.2h-.1l-.1.2-.4 1 .2.1.4-1 .3-.2.2-.2.3-.2 1-.7m.3 3.7l-.3-.2-.3.2-3.2 1.8.4-1 .3-.7.3-.8.1-.3.2-.4h-.2l-.1.3-.3.9v.2l-.3.5v.4l-.5 1v.2h.2l3.5-2 .3-.1h-.1m.4-.2l-.1-.1v-.3l-.2.2v.2h.3m1.8-4.8v-.2l-.2-.1-2 1.1v.3l2-1-1.5 4v.4l1.7-4.5m-12.9 0v-.4.5-.1m5.9-3.5h-.5l-.3.1-4.9 2.9 1.4-3.5h-.3l-.8 2.2-.4 1.6h.2l5-2.8.3-.2.3-.3m0-.5v.1m0-6l-2.2 1.4-.3.2-.5.3v.1l-.2.3-1.2 3.4h.3l1.1-3.1.2-.4.5-.3.3-.2 2-1.2v-.4m2.9-.9l-.1-.4-1 .3-1.5.9v.4l2.3-1.4-2.3 6.5v.5l2.6-6.9m.2-.7h-.1l-.2.1h.2v.1-.2"/>
      <path d="M572.7 1002l-4.2-.3-.4.2h.2l4.3.3v-.1m5.6 6.9l-.2-4.3v-2.1h-.1v-.2h-1.2l-3.1-.3h-.6l-.1.2h.6l3.3.3h1v1.7l.2 4.5.2.2m6.7 9.9l-.2-.5-6.2-4.7-.1-.1v-3.1l-.1-1.2-.2-.1v4.5l1.4 1 5.4 4.2m3.6 2.6v-.2l-.3-.2-1-.7-.1-.2-2-1.5.2.4 1.5 1.2.2.2.2.2 1 .7.2.1h.1"/>
      <path d="M586.3 1022.7v.2h-.2v-.1l-.2-.7-.1-.5-.1-.2-.1-.2v-.1l-.7-2.1-.2-.5-1.5-5-.5-1.6-.2-.5v-.1l-.3-.1-.6-.3-1.7-.8h-.2l-1.4-.7-.2-.1-5.6-2.6-.6-.3v-.4l.9-3.6v-.3l1-4 .2-.2-1 4.2-.1.2-.5 2.2-.4 1.6h.2l5.9 2.8h.2l1.5.8.2.1 1.3.7.6.3.5.2h.2v.2l.2.5.4 1.1.4 1.6 1.4 4.3.2.4.6 1.8v.3l.1.3.3 1 .1.2"/>
      <path d="M576.4 992.5h-.2l-1 3.1.4-.5.8-2.6m1.2-3.3l-.1-.2-1 3h.1l1-2.8m.4 3.5h-.2v1.4l.2-.1v-1.3m0-2.9l-.2-.3v2.5l.2-.3v-2m0-1.3h-.2l-.2.1v.3l.2-.2v.2l.2.3v-.7m0 14l-.1-.6v-5.9l1.5-.5 1-.3v.3l1.4 8.9-3.8-2m5 8.5l-.1-.5-.4-2.8v-.3l-.4-2.3 2.3 1.2h.2v.3l2.3 9-4-4.6m6.8 7.8l-.6-.7-1.8-2.1-2-7.9-.5-2-.3-.1-2.4-1.3-1.2-8.2-.2-1.2-.1-.2-.2.1-2.4.8v-.7l-.2.1v.6l-1.6.5-.5.4 2.2-.7v6.7l.5.2 3.5 1.8.4 2.6v.3l.5 3v.4l.3.3 4 4.6.9 3.5v.3l.2.6.2 1 .1.1h.1l.1-.1v-.3l-.5-1.4v-.3l-.8-3 2 2.4.1.2.2-.3m-68.1-6.6l-2.8-.8-1.6-.4-.5.3 4.6 1.2.3-.4m1 .3l-.7-.2-.3.4 1 .3v-.5m1.1.3l-.9-.2v.5l.7.2.2-.5m.7.2h-.4l-.2.3.5.1v-.4m2.3.6l-2-.6v.4l1.7.5.3-.3m3 1.3l-.1-.4-2.7-.8-.3.4 3.2.8m1-.2l-.7-.2.1.5.5-.3"/>
      <path d="M523.5 1017.8l-.4.6v.5l.2-.2.2-.9m1.2-5.2h-.3v.1l-.1.4-1 4.6.3-.6 1-4v-.4m1.2-5l-.7 1.8-.6 2.5.3.1 1-4.5m0-.7l-.3.8.3-.8m.8-.2l-.1-.3h-.1l.2.3m2.4 3l-2.1-3.3.6 1.4 1.5 1.8m2.2 3.6l-1.6-2 1.5 2.5.1-.5m.5.6l-.2-.2-.1-.2-.1.3h.4m-20.5 3.6l-4.8-1.3-.6.3 5.1 1.4.3-.4m2.2.6l-1.9-.6-.3.4 2 .6.2-.4m.9.3l-.6-.2-.2.4.7.2.1-.4m2.1.6l-2-.6v.5l1.7.4.3-.3m3 1.2l-.1-.5-2.5-.6-.3.3 3 .8m1 .3l-.2-.5-.6-.2.2.5.6.2"/>
      <path d="M513.3 1023.3l-.3.6-.2 1 .3-.2.2-1.4m2.5-10.8l-.5 1.3-1.1 4.4-.1.5-1 4.7.3-.6 1-4v-.5l1.4-5.8m3.5 2.5l-2.6-4h-.1l.5 1.4 1.8 2.9.4-.3m2.1 3.5l-2-3.2-.3.4 2.1 3.3.2-.5m.6.8l-.3-.3-.1.5v.1h.2l.2-.3m-22.1 3.7l-5.3-1.4-.6.3 5.6 1.6.3-.4m2.4.7l-2.1-.6-.3.4 2.2.5.2-.3m1 .2l-.8-.1-.2.3.8.2.2-.4m2.4.7l-2.2-.6v.4l1.9.6.3-.4m3.2 1.4l-.2-.5-2.8-.8-.2.4 3.2.9m1.4 0l-1.2-.3.2.5.8.1.2-.3m.3 0"/>
      <path d="M502.3 1029.6l-.4.6-.3 1.2.3-.2.4-1.6m3-12.9l-.8 2-1.2 5.3-.1.4-1.2 5 .4-.6 1-4.4.1-.4 1.8-7.3m3.3 4l-2.9-4.4.5 1.5 2.1 3.2.3-.3m2.3 3.6l-2.2-3.3-.3.4 2.3 3.4.2-.5m.7.9l-.4-.7-.2.5.4.5.2-.3m-24.2 4.3l-5.9-1.6-.5.3 6.1 1.7.3-.4m2.7.8l-2.4-.7-.3.4 2.5.7.2-.4m1 .3l-.7-.2-.2.4.9.2v-.4m2.6.6l-2.3-.6v.5l2 .5.3-.4m3.8 1.6l-.2-.5-3.3-1-.3.4 3.8 1m1.3 0l-1.1-.3.2.5.6.2.1-.1.2-.3m.3 0"/>
      <path d="M490 1036.7l-.4.6-.3 1.3.3-.1.4-1.8m3-14.2v.1l-.1.3.2-.4m0 .4l-.7 2-1.3 5.6-.1.5-1.4 5.5.4-.5 1.2-5v-.5l2-7.6m.4-.5v-.3h-.1l.1.3m3.5 4.4l-3-4.8.6 1.9 2.2 3.3.2-.4m2.5 4l-2.4-3.7-.3.4 2.5 3.8.2-.5m.7 1l-.5-.7-.2.4.4.6.3-.3M474 1036.4l-6.4-1.8-.6.3 6.9 2 .2-.5m2.7.8l-2.6-.7-.2.4 2.6.8.2-.5m1.3.4l-1-.3-.2.4 1 .3.2-.4m2.7.8l-2.5-.7-.1.5 2.3.6.3-.4m4 1.5l-.2-.5-3.5-1-.3.4 4 1m1.6 0l-1.3-.3.2.5 1 .3.1-.4m.3 0v.2-.1"/>
      <path d="M476.8 1044l-.3.6-.4 1.7.3-.2.4-2m3.7-15.6l-.8 1.9-1.6 7-.1.6-1.4 6 .4-.7 1.3-5.2v-.5l2.2-9.1m.2.2l-.1-.3h-.1l.2.3m3.6 5l-3.4-5.4.6 1.8 2.5 3.8.3-.3m3 4.4l-2.8-4.2-.3.4 2.7 4.2.3-.4m.7 1l-.5-.7-.2.4.5.7.2-.4m-28.7 5l-7.2-2-.6.3 7.5 2.1.3-.4m3.2 1l-3-.9-.2.4 3 .9.2-.4m1.3.3l-1-.3-.2.4 1 .3.2-.4m3 .8l-2.8-.7-.1.3 2.6.8.3-.4m4.5 1.8l-.2-.5-4-1.2-.3.4 4.5 1.3m1.6 0l-1.3-.4.2.5 1 .2.1-.3m.3 0l-.1.2.1-.1"/>
      <path d="M462.2 1052.5l-.3.5-.4 1.8.4-.2.3-2.1m3.9-16.2l-.8 2-1.6 7-.1.4-1.5 6.7.3-.6 1.5-6v-.3l2.2-9.2m0-1l-.2.4-.2.6.4-1m.5 0l-.1-.2v.2m4.2 5.6l-3.8-6 .7 2 2.9 4.3.2-.3m3 4.7l-3-4.5-.2.4 2.9 4.5.3-.4m.7 1.1l-.5-1-.2.5.5.8.2-.3m.2.4h-.2.2m-31.5 5.3l-7.8-2.2-.6.3 8.2 2.3.2-.4m3.5 1l-3.2-1-.3.5 3.3.8.2-.4m1.4.4l-1.1-.3-.2.4 1.2.4.1-.5m3.3.9l-3-.9v.4l2.7.8.3-.3m4.9 1.8l-.2-.5-4.4-1.2-.3.4 4.9 1.3m1.8.1l-1.6-.5.2.5 1.1.3.1-.1.2-.2m.3.1"/>
      <path d="M446.5 1061.3l-.4.6-.5 2.1.3-.2.6-2.5m4.3-18.4l-.8 1.9-2 9-.2.3-1.6 7.1.4-.6 1.5-6.4.1-.4 2.6-11m.6.5l-.3-.7h-.2l.5.7m4.1 5.7l-3.8-6 .7 1.8 2.8 4.5.3-.3m3.4 5.2l-3.3-5-.3.4 3.4 5.2.2-.6m.7 1.3l-.5-1-.2.5.5.7.2-.3M425.5 1061.4l-8.8-2.4-.6.3 9 2.5.4-.4m3.8 1l-3.6-.9-.2.4 3.6 1 .2-.4m1.5.4l-1.2-.3-.2.3 1.3.4.1-.4m3.6 1l-3.3-1v.4l3 .9.3-.3m5.5 2l-.2-.5-5-1.4-.3.4 5.5 1.5m1.8.1l-1.5-.5.1.5 1.3.4v-.4m.5.1h-.1l-.1.1h.2m1.2.3l-.5.3h.1l.4-.3"/>
      <path d="M429.2 1071.3l-.4.6-.6 2.3.3-.2.7-2.7m4.4-20.3v.1c0 .1 0 .2-.2.3l.2-.4m.2.4l-.8 2-2.2 9.4v.4l-1.9 7.9.4-.6 1.7-7.2.1-.4 2.7-11.5m.9.3l-.4-1h-.2v.1l.6.9m4.4 6l-4.1-6.4.6 1.8 3.2 5 .3-.3m3.6 5.5l-3.4-5.4-.3.4 3.6 5.5.1-.5m1 1.5l-.9-1.2-.1.5.6 1 .3-.3m.2.3h-.2.2m.5.8l-.3.2.3-.2m86.7-58.8v-.4l-3.4-.9-.5.3 4 1m.4-.2l-.3-.1.1.2.2-.1m2 .4l-1.7-.4-.3.3 1.7.5.2-.4m.6.2h-.4l-.2.3.4.1.2-.4m.8.2h-.5l-.1.3.5.1v-.4m1.4.4l-1-.3-.2.4 1 .3.2-.4m3 1.3l-.1-.5-2.5-.7-.3.4 3 .8m.5-.3l-.3-.1v.3l.3-.2"/>
      <path d="M533 1012.7l-.4.4v.2l.2-.1.1-.5m2.5-10.6v.1l-.2.4.2-.5m.1.5l-.7 2.1-.7 2.8-.1.4-1 4.5.3-.6 1-3.8v-.4l1.2-5m.8-.2l-.3-.6.3.6m.5 0l-.2-.3.2.3m1.7 2.6l-1.5-2.3-.1.2.5 1.4.8 1.1.3-.4m2 3.1l-2-2.9-.2.4 2 3 .1-.5m.3.5v-.1l-.2.2.2-.1m-3.4-7.3h-.1l-.6.3.6.2v-.5m3.5.8l-3.2-.8-.2.4 3.1.7.3-.3m1.8.5l-1.5-.4-.3.4 1.7.5.1-.5m.5.1h-.2l-.2.4.2.1.2-.5m2 .6l-1.8-.5v.4l1.5.4.3-.3m3 1l-.3-.3-2.5-.7-.3.4 2.7.7h.3m.4-.3"/>
      <path d="M541.4 1009.8l-.2.1h.2m.6-2.3l-.2.3h.2v-.3m2.2-8.5l-.9 2.3-.4 1.3v.4l-1.2 4.4.4-.6 1-3.7v-.4l1-3.7m.4-1.4l-.3.3-.3 1 .6-1.3m.7.3l-.3-.6.3.6m2 2.4l-1.7-2.8 1 2.4.5.7.2-.3m1.9 2.8l-1.7-2.6-.3.4 1.8 2.7.2-.5M549.4 997.7l-3.2-.7-.7.2 3.6 1 .3-.5m1.6.4l-1.4-.4-.2.4 1.5.4v-.4m.5.1h-.1l-.2.4h.2v-.4m2 .5l-1.6-.4-.1.4 1.5.4.3-.4m2.7 1l-.1-.3-2.3-.6-.3.4 2.4.5h.3"/>
      <path d="M552.6 993.9l-.2.5.2-.5m.1.6l-1 2.5-.3 1.2-.1.4-1.2 4.1.5-.6 1-3.5v-.4l1.1-3.7m1 0l-.5-1-.1.1.6.9m1.6 1.7L554 994l1.1 2.4.2-.3m1.7 2.7l-1.5-2.4-.3.4 1.5 2.4.2-.1.1-.3m.3-5.2l-2.9-.7-.6.3 3.1.8.4-.4m1.6.4l-1.3-.3-.3.4 1.5.4v-.5m.3 0l-.1.5.1-.4m1.9.5l-1.7-.4v.4l1.4.3.3-.3m2.2.8l-.3-.5-1.5-.3-.3.3 2 .5m.4-.2h-.1"/>
      <path d="M560.2 990.5l-.2.7.2-.7m0 .6l-1 2.8-.1.2-.1.4-1.2 4 .5-.6 1-3.3v-.4l1-3.1m1-.5l-.4-.7h-.1l.5.7m1.5 1.7l-1.3-2 1.1 2.2.2-.2m1 1.5l-1-1.4-.1.3.3.6.7 1v-.5m.6.9l-.3-.7-.1.6.1.2.3-.1m.1-4.6l-2.8-.6h-.1l3 .6m0-.3l-2.4-.6 2.4.6m1.5.7l-1.3-.3v.1l1.3.2m0-.4l-1-.2 1 .2m1.9.8l-1.4-.3v.1l1.4.2m.2-.3l-1.6-.4v.1l1.6.3m1.9.9l-1.8-.5-.1.1 1.9.4m.3-.3l-.1-.1-1.8-.4-.1.1 2 .4"/>
      <path d="M566.4 990.6h-.2l-.1.1-1 3.6.1-.1.2-.3 1-3.3m.7-3v.1-.2m.2.3l-1 2.5.2.1.8-2.6m.1-1v.4-.4m1.2.8l-.6-1.2h-.1l.7 1.2m1.1 1l-.9-1.2.7 1.4.2-.2m.7 1.7l-.2-1-.3-.4v.2l.5 1.2m.7.2l-.5-.7.2 1.1v.1l.3-.5M569.6 986.4v-.5h-.4l-.6.2 1 .3m1.8-.1l-1.7-.4.1.5 1.4.3.2-.4m1.1.3l-.8-.2-.3.4.9.2.2-.4m.3 0h-.1l-.2.4.3-.4m1.8.5l-1.4-.3-.1.4 1.2.3.3-.4m2.1.4l-1.8-.3-.3.3 1.5.4.6-.4m-3-2.6l-1.2 3.2-.7 2.2.3-.2h.1l.9-3v-.4l.6-1.8m.2-1.3l-.2.2-.2 1 .4-1.2m1.1.6l-.5-.9.5.9m1.1 1l-.8-1.4.8 1.5v-.2m1.3 2l-1.2-1.7v.2l1 1.9.2-.3m.3-4.1l-2-.5-.6.3 2.3.5.3-.3m1.2.3l-1-.2-.2.4 1 .2.2-.4m1.8.4l-1.5-.3v.4l1.2.3.3-.4m1.8.4l-1.6-.4-.2.4 1.2.3.6-.3"/>
      <path d="M579.6 982.4l-1.3 3.5-.3 1 .4-.2.8-2.7.1-.4.3-1.2m.4-1.7l-.2.3-.4 1.4.6-1.7m1.7 1.7l-1-2.2-.2.1 1.2 2m1.5 1.5l-1-1.4.8 1.5.2-.1m.3-3.8l-1.6-.3-.7.3 2 .4.3-.3m1.2.2l-.8-.1-.3.3 1 .2.1-.4m1.6.3l-1.3-.3-.1.4 1.1.3.3-.4m1.6.4l-1.4-.3-.3.4 1 .2.7-.3"/>
      <path d="M585.2 979.9l-1.4 3.5.3-.2.8-2.4v-.4l.3-.5m.4-1.9l-.2.3-.5 1.6.7-1.9m1.7 1.5l-1-1.8h-.2l1.2 1.8m.6 1l-.5-.8.5.8m.5.2l-.2-.5.2.5m.6-3.4l-1.5-.3-.7.3 1.7.4.4-.4m1 .3l-.6-.2-.3.4.9.1v-.3m1.5.2l-1.1-.2-.1.2v.1l1 .2.2-.3m1.5.3l-1.1-.2-.3.4.9.2.5-.4"/>
      <path d="M590.2 977.8l-.9 2.4h.2l.7-2.2v-.2m.5-2.4l-.2.3-.6 1.8-.1.3 1-2.4m1.5 1.3l-.9-1.5h-.2l1 1.5m.8 1.3l-.5-1h-.1l.6 1m1-3.2l-1.2-.2-.7.3 1.5.3.3-.4m.9.2l-.6-.1-.3.4.8.1v-.4m1.3.3l-1-.2-.1.3.8.2.3-.3m1.4.2l-1-.1-.3.3.8.2.5-.4"/>
      <path d="M595 975l-.9 2.5.2-.1.6-1.9v-.4m.5-1.8l-.2.2-.5 1.4.7-1.6m1.4 1l-.8-1.3.8 1.4m1 .9l-.6-1 .7 1m.3-2.7l-1-.2-.6.3 1.3.2.3-.3m.7 0h-.4l-.3.4h.6l.1-.3m1.4.3l-1.1-.2-.1.3.9.2.3-.3m1 .2l-.8-.2-.2.4.5.1.5-.3"/>
      <path d="M599.4 971.5l-.1.3v-.3m.2.5l-1.2 3 .2-.1.6-1.7.1-.3.3-1m1.4.3l-.6-1.2-.3.1.7 1.3.2-.2m.6 1l-.4-.7v.2l.3.5h.1m.8-2.7l-.8-.2-.7.2 1 .2.5-.2m.5 0h-.3l-.3.3.5.1.1-.4m1.3.3l-.9-.2-.2.4.7.1.4-.3m1 .2h-.6l-.3.3.4.1.5-.4m-1.6-1.6l-.3.4-.3.8v.4l-.6 1.7 1.2-3.3m1.3.7l-.6-1h-.1l.7 1m.4.8l-.3-.5h-.1l.4.5m.8-2.4h-.5l-.6.2.8.2.3-.4m.5.1h-.3l-.3.3.4.1.2-.4m1.1.2l-.8-.2-.2.4.7.1.3-.3m.8.2h-.5l-.3.3h.2l.6-.3"/>
      <path d="M606.5 969.7l-.3.7.3-.7m.4-1.8l-.2.2-.2.5-.1.4-.2.6.7-1.7m1.3.3l-.5-.8h-.2l.5 1 .2-.2m.4.7l-.3-.5-.2.2.2.4h.3m.8-2.2h-.4l-.7.2h.7l.4-.2m.4.1h-.2l-.3.4h.3l.2-.4m1.8.3l-1.4-.3-.2.4 1 .2.6-.3"/>
      <path d="M610.1 966.2l-.2.3-.1.4-.1.4-.5 1.2 1-2.3m1.7.8l-.9-1.3-.3.1.9 1.4.3-.2m-90.2 62.9h-.3l-4.3 6.4-.1.2.5-.4 4.2-6.2m2.1-3l-.2-.3-2 3h.4l1.8-2.8m.9-1.2l-.1-.3-.7 1 .2.2.6-1m1.9-2.8h-.3l-1.4 2.2v.3l1.7-2.5m3-5l-3 4.6h.3l2.6-3.8.2-.8m1-1l-.3-.1-.4.4-.1.8.7-1m.5-.7h-.3l.1.3.2-.3"/>
      <path d="M523.8 1022l-.5-1.5-.3.2.4 1.1.4.1m2.8 8l-1.6-4.7-.1-.3-.9-2.5h-.4l1 2.8.2.3 1.2 3.3.6 1m2.7-6.7h-.3l-1.5 4.3-.6 2.2 2.4-6.5m1.9-5.5l-.2-.3-1.8 5.3h.3l1.7-5m.6-1.4h-.3l-.3.6.2.3.4-1m.3-.7l-.4.2-.1.2h.3l.2-.4m-20.8 21.4h-.3l-4.8 7.2v.1l.5-.4 4.6-6.9m2.2-3.2l-.2-.1-2 3h.3l2-2.9m1-1.5l-.1-.3-.9 1.3.2.2.8-1.2m1.9-2.9h-.3l-1.4 2.2v.3l1.7-2.5m2.9-4.8l-3 4.4h.3l2.5-3.6.2-.8m1.4-1.5l-.2-.2-.7 1.2-.2.7 1.1-1.7m.5-.8h-.3v.2l.1.2.2-.4m.5-.6l-.4.1h.2l.2-.1"/>
      <path d="M513.6 1028.4l-.6-1.9-.3.2.5 1.6h.4m2.9 8.2l-1.7-4.8-.1-.3-.9-2.5h-.4l1 3 .2.2 1.5 4.3.4.5v-.4m2.9-6.9h-.3l-2.1 6-.3 1.1.2-.2v-.2l2.5-6.7m2.1-5.8l-.2-.3-2 5.6h.3l1.9-5.3m.6-1.7h-.3l-.3.9.2.3.4-1.2m.4-1.1l-.4.2-.2.4h.3l.3-.6m-22.5 23.3h-.2l-5.5 8 .6-.3 5.2-7.7m2.3-3.4l-.2-.2-2.2 3.1h.3l2-3m1.3-1.7v-.3l-1 1.5.2.2.8-1.4m2-3h-.2l-1.7 2.4.1.2 1.9-2.7m3.1-5.1l-3.2 4.8h.2l2.8-4 .2-.8m1.5-1.7l-.2-.2-.8 1.2-.2.8 1.2-1.8m.5-.7h-.2l-.2.2.2.1.2-.3m.6-1l-.6.3v.2h.2l.4-.5"/>
      <path d="M502.6 1035.2l-.8-2-.4.2.7 1.8h.5m3.1 8.8l-1.9-5.3v-.2l-1-2.8-.4-.1 1.1 3.1.1.3 1.9 5 .2.3v-.3m3.1-7.6h-.3l-2.3 6.6-.3 1.1h.2v-.2l2.7-7.5m2.2-6.1l-.2-.3-2 6h.2l2-5.7m.6-1.7h-.3l-.4 1 .2.2.5-1.2m.5-1.5l-.4.2-.3.8h.3l.4-1m-24.4 25.5h-.3l-6 8.8.6-.4 5.7-8.4m2.6-3.9l-.2-.2-2.4 3.7h.3l2.3-3.5m1.2-1.8v-.3l-1.1 1.6.2.1 1-1.4m2.2-3.5h-.2l-2 2.8.1.3 2.1-3m3.7-6l-3.7 5.5h.3l3.2-4.7.2-.7m1.3-1.6l-.2-.1-.7 1.1-.2.8 1.1-1.8m.6-.8h-.3l-.2.3.2.2.3-.5m.7-1l-.6.3-.2.3h.3l.5-.6"/>
      <path d="M490.4 1042.6l-.8-2.2-.4.2.7 1.9h.5m3.5 10l-2-6-.2-.4-1.1-3.1-.4-.1 1.2 3.6.1.3 2 5.3.3.6.1-.1v-.1m3.4-8.6h-.3l-2.4 7-.4 1.6.1-.1 3-8.5m2.4-6.7l-.2-.3-2.3 6.5h.3l2.2-6.2m.6-1.8h-.3l-.4 1.1.2.3.5-1.4m.6-1.7l-.4.2-.3 1h.3l.4-1.2m-26.7 27.7h-.2l-6.6 9.7v.1l.6-.4 6.2-9.4m2.8-4l-.2-.2-2.6 3.8h.3l2.5-3.6m1.5-2.1l-.1-.3-1.3 1.8.2.2 1.2-1.7m2.4-3.7h-.3l-2 3v.3l2.3-3.3m4-6.1l-4 5.7h.4l3.3-5 .2-.7m1.6-2l-.1-.2-1.1 1.6-.2.8 1.4-2.2m.6-1h-.3l-.3.5.2.2.4-.6m.8-1.2l-.6.3-.3.4h.3l.6-.7"/>
      <path d="M477.2 1050.7l-.8-2.5-.3.2.7 2.2.4.1m3.8 10.6l-2.3-6.4-.1-.3-1.3-3.5h-.4l1.4 3.8v.3l2.3 6.3v.2h.2l.2-.4m3.6-9.1h-.3l-2.8 7.9-.3 1.4.2-.1 3.2-9.2m2.7-7.5l-.2-.3-2.6 7.3h.3l2.5-7m.7-2h-.3l-.5 1.2.2.3.6-1.5m.6-1.8l-.4.2-.4 1h.3l.5-1.2m-29 30.3h-.3L452 1082l.5-.4 7-10.4m3.1-4.6l-.2-.2-3 4.4h.3l3-4.2m1.4-2.1l-.1-.3-1.3 1.8.2.2 1.2-1.7m2.8-4h-.3l-2.3 3.4v.3l2.6-3.8m4.3-6.9l-4.4 6.5h.2l4-5.8.2-.7m1.6-1.9l-.2-.2-1 1.5-.1.7 1.3-2m.7-1h-.3l-.3.5.2.2.4-.7m.8-1.2l-.5.3-.3.5h.3l.5-.8"/>
      <path d="M462.7 1059.5l-1-2.7-.2.2.8 2.4h.4m4.2 12l-2.5-7.3-.1-.3-1.4-4h-.4l1.6 4.3v.3l2.3 6.2.5.8m4-10.4h-.2l-3.2 9-.3 1.3.2-.1v-.1l3.6-10m2.8-8l-.2-.3-2.7 7.7h.3l2.6-7.5m.8-2.3h-.3l-.5 1.6.2.3.6-1.9m.7-1.9l-.4.2-.5 1.3h.3l.6-1.5m-31.8 33.1h-.3l-8 11.8.6-.4 7.7-11.4m3.3-5l-.2-.1-3.2 4.7h.3l3-4.5m1.8-2.4v-.3l-1.5 2 .2.3 1.3-2m3-4.5h-.3l-2.5 3.8.1.3 2.7-4m4.7-7.5l-4.7 7h.3l4.2-6.3.2-.7m1.8-2.4l-.2-.1-1.2 1.9-.2.7 1.6-2.5m.8-1h-.3l-.3.6.2.2.4-.7m.8-1.4l-.5.3-.4.6h.3l.6-.9"/>
      <path d="M445.5 1065.2l-.4.2.4-.2m1.5 3.9l-1-3-.4.2 1 2.7h.4m4.6 13l-2.8-7.8-.1-.3-1.5-4.3-.4-.1 1.6 4.7.1.3 2.7 7.6.2.1h.2v-.1m4.3-11.4h-.3l-3.2 9.2-.5 2.2 4-11.4m3.2-9l-.2-.3-3 8.8h.2l3-8.5m.7-2.2h-.2l-.5 1.5.2.3.5-1.8m.7-2l-.4.3-.5 1.2h.3l.6-1.4m-34.5 36h-.3l-8.8 13 .6-.4 8.4-12.6m3.7-5.5l-.2-.2-3.6 5.2h.3l3.5-5m1.7-2.6v-.3l-1.6 2.3.2.2 1.4-2.2m3.4-4.8h-.3l-2.9 4.2.1.3 3-4.5m5.3-8.3l-5.3 7.8h.3l4.8-7 .2-.8m1.9-2.3l-.2-.1-1.3 1.8-.1.7 1.6-2.4m.8-1.1h-.3l-.5.7.2.2.6-1m1-1.3l-.6.2-.4.7h.2l.7-1m1.2-1.8l-.4.2-.1.1.5-.3"/>
      <path d="M428.1 1075.4l-.3.1v.1l.3-.2m1.5 4.2l-1.2-3.2-.3.2 1 2.9h.5m5.2 14.5l-3.2-8.9v-.3l-1.8-4.8h-.4l1.8 5.2.1.3 2.9 8 .4.6.2-.1m4.7-12.6h-.3l-3.6 10-.5 2.4 4.4-12.4m3.3-9.7l-.2-.3-3.3 9.5h.3l3.2-9.2m1-2.6h-.3l-.7 1.8.2.3.8-2.1m.8-2.1l-.4.2-.6 1.5h.3l.7-1.7m.5-1.6l-.4.2v.1l.4-.3m86.5-42h-.3l-4.1 6.1.5-.4 3.9-5.7m1.8-2.8l-.2-.2-1.7 2.6h.3l1.6-2.4m.9-1.2l-.1-.3-.6 1 .2.1.5-.8m1.8-2.8h-.3l-1.1 1.8-.2.4v.3l.4-.4 1.2-2m3-4.9l-3 4.5h.3l2.5-3.8.2-.7m.8-.7l-.2-.2-.1.4-.2.7.5-1m.4-.5h-.2l.1.1.1-.1"/>
      <path d="M533.4 1016l-.4-1.2-.3.2.3.9h.4m2.7 7.3l-1.2-3.2-.3-1-.1-.2-.8-2-.1-.3-.4-.1.7 1.7.4 1v.3l1.3 3.2.5.7v-.1m2.5-6.2h-.3l-1 2.8-.8 3v-.1l.3-.8 1.8-5m1.8-5.2l-.2-.3-1.8 5h.3l1.7-4.7m.4-1.1h-.3v.4l.1.3.2-.7m.2-.5l-.2.1h.2m-.3 7h-.3v.1l-.7.9-2.8 4.2-.4.5.6-.4 2.3-3.4.5-.8.8-1m2-2.8l-.3-.2-1.7 2.5h.3l1.6-2.3m.6-.8v-.3l-.5.6.2.2.3-.5m1.8-2.6h-.3l-.2.5-1 1.2-.1.2v.3-.1l1-1.5.4-.5.2-.1m3-4.8l-3 4.3h.3l2.5-3.7.2-.6m.6-.4l-.1-.2-.2.6.3-.4m.2-.4"/>
      <path d="M542.2 1010.3l-.2-.8-.4.2.2.6h.4m2.7 6.6l-1.4-3.5v-.1l-.1-.3-.2-.4-.7-1.6v-.2h-.5l.1.4.2.4.8 1.8.1.3.3.7.7 1.6.7 1m2.4-5.7h-.3l-.7 2.2-.9 3.1.4-1.1.3-.9 1.2-3.3m1.8-4.8l-.2-.3-1.7 4.6h.3l1.6-4.3m.3-1h-.3l-.1.2.2.3.2-.6m0 6.1h-.3l-2.6 3.7-.4.6-.5.7.6-.4.4-.6 2.8-4m1.6-2.3l-.2-.2-1.4 2h.2l1.4-1.8m.6-1l-.1-.2-.4.6.2.2.3-.5m1.7-2.5h-.3l-1.2 1.8v.3l1.5-2.1m2.8-4.5l-3 4.1h.4l2.3-3.3.3-.8m.5-.3h-.1l-.1.4.2-.4"/>
      <path d="M550.7 1005.1l-.3-.6-.4.2.2.4h.5m2.6 6l-1.5-3.2v-.3l-1-2h-.4l1 2.4.2.3 1 2.3.5.7.2-.1m0-.5l-.1.4.2-.4m2-4.7h-.3l-.2.7-1.1 4 1.6-4.7m1.5-4.5l-.2-.3-1.5 4.3h.3l1.4-4m.3-.8h-.2v.1l.1.3.1-.4m0 5.5h-.3l-3.1 4.6.6-.5 2.8-4.1m1.7-2.2l-.2-.2-1.5 2h.3l1.4-1.8m.4-.7v-.3l-.3.4.1.2.2-.3m1.6-2.3h-.3l-1.2 1.6.1.3 1.4-1.9m2.7-4.2h-.1l-2.6 3.8h.3l2.2-3.2.2-.6m.4-.2l-.1.2v-.2"/>
      <path d="M558.4 1000.3l-.2-.4-.4.2.1.2h.5m2.5 5.5l-1.4-2.9v-.3l-1-1.8h-.4l1 2.3.1.3.8 1.6.7 1 .2-.2m0-.2v.1-.1m2-4.4h-.3l-1.2 4.3 1.5-4.3m1.4-4.2l-.2-.3-1.4 4h.3l1.3-3.7m.3-.8h-.3l.2.3.1-.3m0 5.2h-.3l-2.8 4.1.6-.5 2.5-3.6m1.5-2.1l-.2-.2-1.3 1.8h.3l1.2-1.6m.3-.6v-.3l-.2.3.2.2v-.2m1.6-2.2h-.3l-1 1.5v.3l1.3-1.8m2.5-3.8l-.3.1-2.3 3.3h.3l2-3 .3-.4"/>
      <path d="M565.6 995.9l-.1-.2-.4.2h.5m2.4 5l-1.3-2.6v-.3l-.8-1.7h-.5l1 2.1v.3l.6 1.2.8 1h.2m.3-.8l-.3.8.3-.8m1.4-3.4h-.2l-1 3.3 1.2-3.3m1.5-4l-.2-.3-.1.2-.7 2-.5 1.5h.2l1.2-3.3M571.4 996.9h-.2l-2.6 3.6.6-.5 2.2-3.1m1.3-2l-.2-.1-.3.4-.9 1.3h.3l.8-1 .3-.6m.4-.4l-.1-.3-.1.2.2.2v-.1m1.4-2h-.3l-1 1.3.2.3 1.1-1.7m2.2-3.4l-.3.2-2 2.8h.3l2-2.7v-.3"/>
      <path d="M572.3 991.9v-.1h-.3.3m2.1 4.5l-1.1-2.3-.1-.3-.8-1.5h-.5l1 1.9v.3l.5.7.8 1.2h.2m1.7-3.8h-.1l-1.1 3.5 1.2-3.5m1.3-3.5l-.2-.3-.4 1.3-.7 2.2h.2l1.1-3.2"/>
      <path d="M577.6 992.6h-.3l-1.8 2.5-.4.5-.2.3.7-.5 2-2.8m1.2-1.7l-.2-.2-.6 1-.2.4-.2.2h.3v-.1l1-1.3m.2-.4v-.3l-.2.1.2.2m1.5-1.9h-.3l-1 1.3.1.3 1.2-1.6m2-3l-.5.2-1.6 2.3h.3l1.9-2.6"/>
      <path d="M580.4 992.2l-1-2-.2-.3-.7-1.5h-.5l.5 1.3.3.6.1.3.2.3 1 1.4.3-.1m1-2.7l-1 2.7.2-.1.8-2.6m.6-.8l-.3.9.3-.9m1.2-3.4h-.2l-1 3h.1l1-3m.3 3.5h-.2l-2 2.9.6-.5 1.6-2.4m1.2-1.5l-.2-.2-1 1.3h.3l.9-1.1m.2-.5l-.1-.2v.2m1.4-1.7h-.3l-.8 1.2v.3l1.1-1.5m2-2.7l-.6.2-1.4 2h.3l1.7-2.2"/>
      <path d="M586 988.2l-1-1.7v-.3l-.7-1.3h-.5l.9 1.7v.2l1.2 1.5h.1m1.2-3.2l-1 3.1h.1l.9-3m1.3-3.1l-1 2.7 1-2.7m.3 3.1h-.3l-1.8 2.5.7-.4 1.4-2m1-1.5l-.1-.2-.9 1.3h.3l.8-1.1m1.3-2h-.3l-.7 1v.3l1-1.3m1.8-2.3l-.6.3-1.2 1.6h.3l1.5-2"/>
      <path d="M591.1 984.7l-.8-1.6-.1-.3-.6-1.1h-.4l.6 1.1 1.3 1.9m1.2-2.8l-1 2.7.1-.1.9-2.6m.2-.9l-.2.4.2-.4m1-1.8l-.7 2 .6-2m.3 2.8h-.3l-1.5 2.2.7-.5 1.1-1.7m.9-1.3l-.2-.2-.8 1h.3l.7-.8m1.2-1.7h-.3l-.5.9v.3l.8-1.2m1.6-2.2l-.6.3-1 1.4h.3l1.3-1.7"/>
      <path d="M595.8 981.4l-.7-1.3-.1-.3-.5-.9h-.5l.6 1 1.1 1.6.1-.1m.4-1l-.3 1 .3-1m.8-1.3l-.5 1.2.5-1.2m.8-2.3l-.7 2 .7-2m.2 2.3h-.2l-1.4 2 .7-.6 1-1.4m.7-1l-.2-.2-.6 1h.3l.5-.8m.2-.3v-.3.3m1-1.5h-.2l-.6.8v.3l.9-1m1.2-2l-.6.4-.7 1h.3l1-1.3"/>
      <path d="M600.8 976.4l-.8 2.1-.7-1.1-.1-.3-.5-.9h-.3l-.2.1.7 1.2.1.3.7 1 .4-.4.7-2m.6-2v.2l-.6 1.4h.1l.5-1.5m.6 2h-.2l-1.2 1.6.7-.4.8-1.2m.7-1.1l-.1-.2-.7.8h.3l.5-.6m1.1-1.5h-.3l-.5.8.2.3.6-1m1.2-1.6l-.6.3-.6.7h.3l.9-1"/>
      <path d="M603.8 975.8l-.6-1-.2-.2-.4-.8h-.1l-.2.1 1.5 2m.9-2l-.7 1.8h.1l.6-1.8m.5-1.6l-.5 1.2.5-1.2m.6 1.7h-.3l-1 1.4.7-.5.6-.9m.6-.9l-.2-.1-.5.6h.3l.4-.5m1-1.4h-.2l-.5.6.2.3.6-.9m1-1.3l-.7.3-.3.6h.2l.7-1"/>
      <path d="M607.4 973.3l-.5-.8-.2-.3-.4-.7-.4.2 1.3 1.6h.2m.6-1.6l-.6 1.6h.2l.4-1.6m.6-1.4l-.4 1h.1l.3-1m.6 1.5h-.3l-.8 1 .7-.4.4-.6m.6-.9l-.2-.2-.5.7h.3l.4-.5m1.8-2.6l-.5.3-1.1 1.6.1.3 1.5-2.2"/>
      <path d="M610.5 971.1l-.4-.6-.1-.3-.4-.7-.2.2 1.1 1.4m1.5-3l-.4.2v.1l-1 2.6h.2l.2-.2 1-2.7"/>
      <path d="M423.8 1076.7l-.6.4-.4.3.3.8h.1l.6-1.5m1.7-.9l-1.3.8-.6 1.4.3-.2 1.6-2m15.1-7.8l-.4-1-11.8 6.9-.3.2-2 1.2-1.6 2 3.3-1.9.3-.2 12.5-7.2m.9-1.6l-.9.5.3 1 .6-1.5m1.5-.9l-1 .6-.1.1-.6 1.4h.1l1.6-2m13.9-7l-.3-1-10.7 6.3-.4.2-1.8 1-.2.1-1.5 2 .7-.4.5-.3.7-.4.3-.2.5-.2.3-.2h.2l.3-.3 5.8-3.3 5.6-3.4m1-1.6l-1 .6.3.8h.1l.6-1.4m1.3-.8l-.9.5-.6 1.3 1.5-1.8m12.6-6.4l-.2-.9-9.8 5.7-.4.2-1.7 1-1.5 1.9 13.6-8m.8-1.4l-.8.4.3.8.5-1.2m1.3-.6l-.7.4h-.1l-.5 1.3 1.3-1.7m11.5-5.9l-.3-.8-8.8 5.1-.3.2-1.4.8h-.2l-1.3 1.8 12.3-7m.9-1.5l-.8.5.3.7.5-1.2m1.1-.7l-.7.4-.5 1.2 1.2-1.6m10.6-5.3l-.3-.7-8.2 4.9-.3.1-1.2.7-1.3 1.6 11.3-6.6m.7-1.3l-.5.4.2.6.3-1m1.1-.6l-.7.4-.4 1 1.1-1.4m9.6-4.8l-.2-.7-7.3 4.3-.3.1-1.1.7-1.2 1.6 10.1-6m.8-1.3l-.1.1-.6.3.2.7.5-1m1-.6l-.6.3h-.1l-.4.8 1-1.1m8.9-4.4l-.2-.6-6.8 4-.3.1-1 .6-1 1.3 9.3-5.4m.6-1v-.1l-.2.1-.3.3.2.6.1-.1.2-.7m.7-.6v.4-.4m.6-.4l-.1.1-.1.1v.2l.2-.4m8.1-4.1l-.1-.5-6.6 3.9-.3.2-.4.2-1 1.3 8.4-5.1m.7-1h-.2l-.5.3.2.5h.1l.4-.9m.8 0l-.3-.1-.3.8h.1l.5-.8m.3.1h-.1l-.2.3.4-.3m.8-1.1h-.2v.5l.2-.5m6.7-3.3l-.2-.5-6 3.6-.4.8 6.6-3.9m.8-1l-.4.2-.2.2.1.4h.2l.3-.8m1-.6l-.5.3h-.2l-.3.8h.1l.9-1.1m6.9-3.6l-.2-.3h-.2l-5.8 3.4-.2.1-.8 1 7.2-4.2m.7-1l-.5.4.2.4.3-.7m1-.6l-.5.3h-.1l-.3.8.2-.1.7-1m6.4-3.2l-.2-.4-.3.2-5.3 3.1-.8 1 6.6-3.9m.7-1l-.2.2-.3.2.2.3.3-.6m1-.6l-.6.4-.2.6.2-.1.6-.9m5.5-2.7l-.2-.3h-.1l-4.6 2.7-.7.9 5.6-3.3m.9-1l-.3.1-.1.1.1.4h.1l.2-.6m1-.6h-.2l-.5.4-.2.5h.2l.7-1m5.2-2.5l-.5-.1-4 2.4-.6.8 5-3.1m.5-.7l-.1.1v.2-.3m.5-.2l-.1.1-.2.5v-.1l.3-.5m.8-.5l-.3.2-.3.2-.2.5.2-.1.6-.8m4.7-2.4v-.3l-.7.3-3.4 2-.6.7 4.7-2.7m.7-.7h-.1l-.3.3.1.2h.1l.2-.5m1-.6h-.1l-.4.3h-.1l-.2.6.3-.2.5-.7m4.3-2.1l-.1-.3h-.2l-.6.4-2.8 1.6-.5.7 4.2-2.4m.6-.8l-.2.2-.1.1v.3l.2-.1.1-.5m1-.6l-.3.2-.3.2-.2.4.3-.2.5-.6m3.8-1.9v-.2l-.2.1-.6.3-2.3 1.4-.5.5 3.6-2m.6-.8l-.4.2.1.2h.2l.1-.4m1-.4l-.4.2h-.2v.4l.2-.2.4-.4m3.3-1.8v-.2l-.2.1-.6.3-1.8 1-.4.6 3-1.8m.6-.5l-.4.1.1.2h.1l.2-.3m.8-.5h-.2l-.2.2v.3l.1-.1.3-.4m3-1.6l-.1-.2-.6.3-1.6 1-.4.5 2.7-1.6m.5-.4h-.3v.2l.3-.2m1-.6l-.5.2h-.2v.4l.3-.2.3-.4m2.7-1.4l-.1-.2-.2.1-.6.3-1.1.7-.3.4 2.3-1.3m.7-.5l-.4.2v.1h.3v-.3m.8-.5l-.4.3-.1.3.2-.1.3-.5m2.3-1.2h-.2l-.6.3-.8.5-.3.4 2-1.2m.4-.5l-.3.2.1.1h.1l.1-.3m1-.4l-.5.3v.1l.3-.1.2-.3m2-1l-.2-.2-.2.1-.6.3-.4.3-.3.3 1.6-.9m.6-.5l-.3.2v.1h.3v-.3m3.5-1.4c0-.3-.2-.4-.4-.3l-.4.3-.4.2-.6.3-1.3.7-.1.3s.2.1.2.4l-.2.5 1.4-.9.5-.3.4-.2.4-.1c.3-.2.5-.6.5-1"/>
      <path d="M518.2 1016.8v-.2l-1.8 2.2-.3.3-2.7 3.6-.4.6-1.5 2-.3.4v.2l-1 1.2v.1l.5-.3 1.1-1.3 1.2-1.6.3-.5 3.1-4.2.3-.3 1.5-2.2m3.8-4.9h-.4l-.3.4-2.1 2.8-.3.4-.4.5.2.3.4-.5.3-.4 2.2-2.9.3-.4v-.2m1-1.8l-1 1.4h.4l.5-.8.1-.6m3-3.2l-.2-.1h-.2l-2 2.8-.2.6 2.5-3.3"/>
      <path d="M518 1014.7l-1-2.2-.4-1.4-.4.2.7 1.7 1 1.7m2.4 6.5l-.2-.6-.2-.4-.2-.5-.7-1.9-1-1.7.1.5.1.2 1 2.8.2.5.3.8.2.6.4-.3m.5-.4l-.2-.3-.2.6.4-.3m.8-2.7l-.2.4-.2.5-.3.8.2.3.2-.6.3-1.4m2.4-5.7h-.3v.1l-.3.4-1.4 3.7-.2 1.4 2-5 .1-.4.1-.2m2-5.3l-.2-.2-.3.8-1.6 4.2.3.1.9-2.4.7-1.9.2-.6M507.6 1022.5l-.1-.3-1.8 2.5-.3.4-3 3.8-.3.6-1.7 2.3-.3.4-.2.3-1 1.4v.1l.5-.3 1.2-1.5 1.4-2 .4-.5 3.4-4.4.2-.4 1.6-2.4m8-10.6l-.2-.2-4.3 5.5-.3.4-2.3 3-.3.5-.5.7v.3l.7-.8.3-.4 2.4-3.2.3-.4 4.1-5.4"/>
      <path d="M509.8 1027.4l-.2-.7-.2-.4-.2-.5-1.2-3.6-.1-.3-1.5-4-.6-1.5-.3.2 2 5.7.2.3 1.1 3 .2.6.3.8.2.7.3-.3m6-15l-.2-.3-2.2 5.8-.2.4-2.3 6-.2.4-.4 1.3-.1.4-.4 1 .4-.3.4-1 .3-1 .2-.6 2.4-6.2.2-.4 1.7-4.2.4-1.3m.4-1.1l-.3.2.2.3.1-.5m-20.2 17.5l-.1-.3-2.2 2.8-.2.4-3.3 4.4-.4.6-1.8 2.5-.3.4-.2.2-1.2 1.6.5-.4 1.3-1.6 1.5-2 .4-.6 3.7-4.9.3-.4 2-2.8m9-12l-.4.1-4.7 6.3-.3.4-2.6 3.3-.3.4-.7.9.1.3.7-.9.3-.4 2.7-3.5.3-.4 4.7-6.3.2-.3"/>
      <path d="M505.4 1016.5l-.1.2-.8 2-2 5.2-.1.3-2.6 6.9-.2.4-.5 1.3-.4 1-.7.5-.2-.7-.3-.8-.2-.5-1.3-3.5-.1-.3-2.3-6v-.4l.3-.2v.1l.7 1.9 1.5 4.2.1.3 1.6 4 .2.5v.5l.4.6.3-1 .1-.3.6-1.5.2-.4 2.5-6.7.2-.3 2.6-6.9v-.3l.5-.1m-22.2 19.1l-.1-.3-2.3 3-.3.4-3.6 4.6-.3.6-2.2 2.8-.2.4-.4.5-1.4 1.7.6-.4 1.3-1.7.2-.2 1.9-2.4.3-.6 4-5.2.3-.3 2.2-3m10-13.2l-.4.2-5.3 7-.3.4-2.8 3.7-.3.4-.7 1v.3l.8-1 .3-.5 3-3.8.2-.4 5.3-7 .2-.3"/>
      <path d="M485.8 1041.5l-.3-.7-.3-.7-.2-.5-1.5-4.3-.1-.3-1.8-4.9-.6-1.8v-.1l-.4.2v.3l2.5 6.6v.3l1.4 3.8.2.5.4 1 .3.8.4-.2m7.7-19.4l-.4.2-.1.2-.2.4-2.8 7.4-.2.4-2.8 7.3-.2.4-.5 1.5-.2.4-.5 1.1.4-.2.4-1.1v-.1l.5-1.3.2-.4 2.9-7.5.2-.4 2.1-5.5.8-2 .4-.8m-24.1 20.9v-.3l-2.6 3.4-.3.4-4 5.3-.4.6-2.3 3-.2.4-.2.3-1.5 2 .6-.4 1.4-2 2-2.7.4-.6 4.5-5.9.2-.4 2.4-3.1m10.7-14.4l-.3.2-5.8 7.6-.3.4-3.1 4-.3.4-.9 1.2.1.3 1-1.2.2-.4 3.2-4.2.3-.4 5.7-7.6.2-.3"/>
      <path d="M480.5 1028.4l-.8 2-2.6 6.9-.2.4-3 8-.2.5-.7 1.8-.5 1.3-.7.4-.2-.8-.4-1-.2-.5-1.6-4.4v-.3l-2.8-7.4v-.2l.3-.2.6 2 2 5.4.2.3 1.8 4.9.2.6.2.6.2.7.5-1.2.2-.3.7-1.9.2-.4 3-8 .1-.4 3.2-8.3.1-.3.4-.2m-26.3 22.7l-.1-.3-2.9 3.8-.3.4-4.3 5.6-.4.6-2.6 3.5-.3.4-.3.3-1.5 2-.1.2.6-.4v-.1l1.6-2 .2-.2 2.3-3.1.4-.6 4.7-6.2.3-.4 2.7-3.5m12-15.8l-.5.2-6.4 8.5-.3.4-3.5 4.5-.3.4-.8 1.2v.2l1-1.1.2-.4 3.6-4.7.3-.4 6.4-8.5.3-.3"/>
      <path d="M457.2 1058.3l-.2-.8-.3-.9-.2-.5-2-5.3v-.2l-2.2-5.7-.6-1.7-.2-.7-.4.2.3.7 2.8 7.5v.3l1.8 4.8.2.5.4 1.2.3.8.3-.2m9.3-23.2l-.4.2-.4 1-3.3 8.7-.2.4-3.3 8.8-.2.5-.7 1.8v.3l-.7 1.4.4-.2.5-1.3.6-1.5.2-.5 3.4-9 .2-.4 2.6-6.8.8-2 .5-1.4m-28.7 24.9l-.1-.3-3.2 4.2-.3.4-4.8 6.3-.4.6-3.4 4.5-1.6 2-.2.3.6-.4.2-.3 1.5-2 2.7-3.5.4-.6 5.2-7 .3-.3 3-4m12.8-17.1l-.3.2-7 9.4-.4.4-3.7 5-.3.3-1 1.3.1.3 1-1.3.3-.4 4-5.1.2-.4 7-9.3.1-.4"/>
      <path d="M451 1042.6l-.2.3-.8 1.9-3.2 8.5-.1.5-3.9 9.8-.2.5-.6 2-.1.1-.6 1.4v.1l-.7.4-.3-1-.4-1.2-.2-.5-2-5.4-.1-.3-3-8-.3-1.1.3-.1.4.8.6 1.8 2.2 6.2.1.3 2.3 6 .1.4.3.9.4 1 .5-1.5.2-.4.9-2.2.1-.5 3.7-9.6.2-.4 3.8-10.1.1-.4.4-.2m-31.3 27.1l-.1-.3-15.2 20.1.6-.3 14.7-19.5m14.1-18.9l-.4.2-7.8 10.4-.3.4-5.5 7.2v.3l5.7-7.4.2-.4 7.8-10.4h.1l.2-.3"/>
      <path d="M423.2 1078.4l-.1-.2-.3-.8-3-8.1-.1-.3-3.6-9.7-.3.2 3.6 10 .1.3 3.3 8.9.4-.3m10.9-27.8l-.4.2v.2l-.3.4-4.2 11-.2.4-5.3 13.9-.5 1.4-.1.2.3-.2.1-.2.6-1.4 5.2-13.6.2-.3 3.5-9.3.8-1.9.3-.8m92.9-37.5l-.2-.1-.2.3-.3.4-2.7 3.5-.4.6-1.2 1.5-.2.2-.3.4-.1.6 1-1.3.5-.7.4-.6 3.1-4 .3-.4.4-.4m1.3-1.7v-.3l-1.3 1.6.3.1 1-1.4m.6-.8l-.2-.2-.2.3.1.3.3-.4m2.1-2.8v-.4l-2 2.4.3.2 1.7-2.2m4.3-5.7l-.5.1-3.5 4.7-.2.2v.4h.2l.3-.5 3.5-4.6h.1l.1-.3"/>
      <path d="M527.5 1007.8l-.6-1.4-.1-.2-.4.2.1.3v.2l1 1m2 5.4l-.8-2.3v-.3l-.5-1-.7-1 .8 2.4.1.3.7 1.8h.5m.7 2l-.2-.5-.1-.5-.2-.4-.5-.1.2.5.2.4v.3l.3.5.3-.2m.8-1l-.3-.1v.2l-.4 1 .4-.3.3-.8m.3-.8l-.2-.2-.2.4.3.2v-.4m.6-1.4l-.1-.4-.4 1 .2.1.3-.7m4-10.1l-.5.1v.1l-.3.5-1.8 4.7-.2.4-1.1 3.2v.5l1.4-3.6.2-.4 1-2.7.8-2 .4-.8m-4 12.3h-.3l-.5.6.6-.4.2-.2m1.4-2.4l-.5.6-.3.5v.4l.1-.2.3-.4.4-.9m4.6-5.5v-.3l-1.7 2.1-.3.4-2 2.6-.3.8 2.6-3.4.3-.4 1.4-1.8m6.7-8.6l-.5.3-3.2 4.1-.3.4-2 2.5-.2.4-.2.2.1.3.2-.3.3-.4 2.1-2.7.3-.4 3.2-4.2.2-.2"/>
      <path d="M536.8 1002.5l-.2-.4-.2-.5-.4.2.3.6.3.7.2-.6m3 7.2l-.2-.4-.1-.3-1.3-3.1v-.3l-.7-1.3-.5-1.4-.2.6 1 2.5.1.3 1 2.6.3.4v.1l.2.5.3-.2m5.1-12.2l-.3.2-.5 1.4-1.4 3.5-.2.4-1.9 5.1-.2.5v.2l-.4.7.4-.2.3-.7.1-.2 2-5.3.2-.4.5-1.3.9-2.3.5-1.6m2 4l-.1-.3-1.6 2-.3.4-2.6 3.3-.3.6-.6.7-.9 1 .6-.3.8-1 .2-.4 3-4 .3-.3 1.5-1.7m5.8-7.7l-.5.2-2.8 3.7-.3.4-1.9 2.3-.2.4-.1.1v.3l.2-.2.2-.4 2-2.5.2-.4 3-3.7v-.1l.2-.1"/>
      <path d="M548.5 1004.5l-.2-.3-1.3-3v-.3l-.4-.8-1-2.4-.3-.4-.4.2.3.6 1.5 3.2v.3l1.1 2.5.2.4.2.3.3-.3m4.5-10.9l-.4.2v.2l-.3.5-1.4 3.6-.2.4-1.8 4.7-.2.5h-.1l-.3.8.4-.2.3-.7v-.1l1.8-5 .2-.3.5-1.2 1-2.5.5-.9m2 3.6l-.2-.3-1.4 1.8-.3.4-2.5 3.1-.5.6-.3.4-.7 1 .5-.4.8-1 2.9-3.6.3-.4 1.3-1.6m5.2-6.8v-.2l-.3.1-2.6 3.3-.3.4-1.7 2.2-.3.3.1.3.3-.4 1.8-2.4.3-.4 2.7-3.2"/>
      <path d="M556.6 999.7l-.2-.3-1.2-2.6v-.3L554 994l-.4-.8-.4.2.5 1 1.1 2.4.1.3 1 2.2.2.2.2.4.3-.3m3.8-8.9l-.2-.3-.2.7-1 2.9-.2.4-1.8 4.4v.3l-.3.5.4-.1.2-.6 1.8-4.4.1-.4.1-.2 1.1-2.8v-.4m.3-.9l-.3.2.2.3v-.5"/>
      <path d="M562 993.6l-.2-.3-.8 1.2-.3.3-2.4 3-.5.6v.1l-.7.9.7-.4.7-.9 2.5-3.2.3-.3.7-1m.4-.5v-.3l-.3.2.2.3.1-.2m2-3l-1.6 2.2-.2.2.1.3.2-.3 1.3-1.7.2-.7m.3.1v.2-.2m2.2-2.8l-.2-.2-2 2.7.2.1 2-2.6m.5-.7l-.4.2.1.2.1-.2.2-.2"/>
      <path d="M563.7 994.7l-.7-1.4-.3-.6v-.3l-1.2-2.2-.2-.6-.4.2.4.7 1 2.2.1.3 1 2v.2l.3-.5m.3.7l-.1-.4h-.1l-.1.6.3-.2m2.3-4.9h-.3l-1.6 4v.2l-.3.5.4-.2.2-.5 1.5-3.8v-.2m1.1-2.8l-.2-.2v.2l-1 2.4v.1l.3.1 1-2.6m.4-1.2l-.4.2v.4l.1.2.3-.8m.4 4.5h-.4l-2.3 2.9-.2.3-.7.7.7-.3.6-.8 2.3-2.8m.8-1.1l-.2-.2-.7 1v.1l.3.1.6-1m.4-.5v-.3l-.3.3.2.2.1-.2m.7-.8l-.1-.4-.3.4v.5l.1-.2.3-.3m3.5-4.9l-.1.1-2 2.6-.3.4-1 1.2v.4l1.3-1.5.3-.4 1.6-2 .2-.8m.3-.2l-.2.1v.4-.1l.2-.4"/>
      <path d="M570.5 991l-.1-.8-.7-1.3v-.3l-.8-1.4-.4-1-.4.1.6 1.2.7 1.5.1.3.4.8.6.8m3.8-7.5l-.4.2v.1l-.4 1.4-.7 1.7-.2.4-1.4 3.7-.2.5.3-.2.2-.5.9-2.3 1.3-3.3.6-1.7m1.6 2.6l-.1-.4-1.2 1.5-.3.4-2 2.6-.2.1-.6.8.7-.4.6-.7 1.8-2.4.3-.3 1-1.3m4-5.3l-.4.3-1.7 2.2-.3.4-1.4 1.6v.4l.1-.2 1.5-1.8.3-.4 1.7-2.2.3-.3"/>
      <path d="M577.2 987.6v-.2l-1-1.9-.1-.3-.8-1.5-.4-.7-.4.2.5.9.8 1.4v.3l1 1.7v.2h.4m3-7.2l-.3.2v.1l-.6 1.7-.4 1-.2.4-1.2 3.3-.2.4.4-.1.2-.5.4-1 1.3-3.5.7-2m1.7 2.1l-.2-.2-1 1.3-.3.4-1.9 2.3-.4.7.6-.4.5-.7 1.6-2 .2-.3.8-1m3.7-4.8l-.5.3-1.5 2-.2.3-1.3 1.6.1.3 1.4-1.9.3-.3 1.5-1.9.2-.4"/>
      <path d="M583.2 984l-.1-.2-.8-1.5v-.1l-.1-.3-1-2-.4.3 1 2 .1.4.8 1.3v.3l.5-.1m2.7-6.3l-.3.1-.7 1.9-.2.5-.2.4-1 3-.2.3.3-.2.2-.4 1.4-3.5.7-2.1m1.5 1.9l-.1-.3h-.1l-1 1.2-.3.4-1.6 2-.5.6.7-.4.5-.5 1.2-1.6.3-.4.9-1m3.3-4.3l-.5.3-1.3 1.6-.3.4-1.1 1.4v.3l1.3-1.6.3-.4 1.3-1.6.3-.4"/>
      <path d="M588.5 981v-.3l-.3-.5-.5-.8-.1-.3-.9-1.6-.4.2 1 1.8v.3l.6.8.2.4v.2l.4-.3m2.6-5.5l-.4.1-.8 2.3-.1.1-1 2.5v.4l.3-.2.1-.4.9-2.4v-.2l1-2.2m1.4 1.6l-.1-.3h-.1l-.8 1.1-.3.4-1.3 1.8-.4.4.7-.3.4-.5 1-1.3.2-.4.7-1m3-3.7l-.5.2-1 1.3-.4.4-1 1.2.2.3 1.1-1.4.3-.4 1-1.3.3-.3"/>
      <path d="M593.5 978v-.2l-.7-1.1-.1-.3-.8-1.4-.4.2.9 1.5v.3l.7 1v.2l.4-.2m2.2-5l-.3.2v.1l-.7 1.8-.1.3-.9 2.2v.2l.3-.1.1-.3.9-2.4.7-2m1.2 1.6l-.1-.3-.7.9-.3.3-1.2 1.6-.4.5.7-.4.4-.5.8-1 .3-.4.5-.7m2.6-3.3l-.4.2-.9 1-.3.5-.8 1v.3l1.1-1.3.3-.3.8-1v-.1l.2-.3"/>
      <path d="M597.9 975.4l-.1-.1-.6-1-.1-.3-.7-1.2-.4.1.8 1.4v.3l.6.8v.2l.5-.2m1.9-4.3l-.4.2-.1.3-.1.3-.3.9-.2.3-.8 2v.3l.3-.1.1-.3 1.2-3 .3-.9m1.2 1.3l-.2-.3-.2.2-.4.6-.3.3-1 1.3-.4.4.7-.4.3-.4.7-.8.2-.3.4-.5.2-.1m2.4-3l-.6.3-.6.8-.3.3-.8 1 .2.3.9-1.2.3-.4.5-.7.4-.4"/>
      <path d="M601.9 973l-.1-.1-.5-1-.2-.2-.6-1-.3.1.6 1.2.2.3.4.7.1.1h.4m2-3.9l-.5.2-1.2 3.3-.1.2.4-.1v-.3l.5-1.4.2-.4.6-1.5m1.1 1.2l-.2-.3h-.1l-.5.7-.3.4-.8 1-.2.4.6-.4.3-.4.4-.5.3-.4.5-.5m2-2.6l-.5.2-.5.5-.3.4-.6.9.2.3.7-1 .3-.4.5-.6.2-.1v-.2"/>
      <path d="M605.6 970.8l-.4-.7-.2-.3-.5-.9-.4.2.6 1 .2.4.3.5.1.1.3-.3m1.7-3.2l-.4.2h-.1l-.7 1.9-.4.8v.2l.3-.2.1-.1.3-.7.2-.6.2-.4.5-1.1m1 .8l-.2-.3-.2.2-.3.5-.3.4-.7.8-.3.3.7-.4.3-.3.3-.3.2-.4.2-.3.3-.2m2-2.3l-.6.3-.3.4-.3.4-.6.7.2.2.8-.8.3-.4.2-.4.2-.4"/>
      <path d="M609 968.8l-.4-.7-.2-.2-.4-.7-.4.2.5.8.2.3.3.5.1.1.4-.3m1.4-2.9l-.4.2-.8 2.4-.1.2h.4v-.4l.5-1 .1-.3.3-1"/>
      <path d="M515.4 1011.7l-.5-1-103.8 50c-.3 0-.5.4-.5.7v.1c0 .3.2.4.5.3l4.9-2.3.3-.2.6-.3 16.6-8 .4-.2.4-.2h.2l.4-.2.5-.3 15-7.2.3-.2.4-.2.2-.1.4-.2.6-.3 13.6-6.5.5-.2.4-.2.3-.2h.1l.6-.3 12.3-5.8.3-.2.4-.2.5-.2.6-.3 11.2-5.4.4-.2.3-.2h.1l.4-.2h.1l.6-.3 10-4.8.4-.2.3-.2.4-.2h.2l.6-.3 8.5-4.1m1.9-1l-1.6-.3-.3.1.5.9.3-.2.4-.2h.1l.6-.2m6.3-4.2l-7.3 3.4 1.6.4 5.4-2.6.3-1.2m2.1.2l-.6-.8-1.1.6-.2 1.2 1.7-.8.2-.2m4.7-2.3l-.2-1.1-4.3 2.1v.4l.4.5h.3l.4-.2.2-.1.5-.3 2.7-1.3m6.9-4.5h-.1m.3.3l-2.4.7-4.6 2.2.2 1 4.2-2 .5-.2.4-.1h.1l.1-.1.4-.2.2-.1.6-.3v-.1l.3-.8m22.5-10l-.5-1-21.6 10.4.1.1.1.2v.3l-.2.1-.3.7 6.3-3 .5-.3.3-.2h.2l.4-.2h.2l.7-.3 6-3 .5-.1.4-.2.2-.1.4-.2h.2l.6-.4 5.5-2.6v-.3m1.6-.7l-1.5-.4h-.3l.5 1 .3-.2v-.1h.2l.4-.2.2-.1h.2m3.4-2.8l-4.5 2.2 1.5.4h.1l2.7-1.3.2-1.3m1.6.4l-.6-.8-.8.4-.2 1.2 1.6-.8m3-1.4l-.3-1-2.8 1.3v.2l.5.7.4-.2.4-.2v-.1l.2-.1.4-.2h.2l.6-.4h.3m4.5-3l-1.1.3-3.3 1.6.2 1 3.8-1.8.4-1.1m37.5-17.7c0-.3-.2-.5-.5-.3l-36.8 17.7v.2l-.2.1-.4 1.1h.2l.4-.3h.2l.4-.3h.2l.7-.4 3.6-1.7.5-.3.4-.2.3-.2.4-.2h.2l.7-.3 3.2-1.6.5-.3.3-.2h.1l.2-.1.4-.2.3-.1.7-.3 2.7-1.3.5-.3.4-.1.1-.1.2-.1.4-.2.3-.1.7-.3 2.2-1 .4-.3.4-.2h.2l.4-.2.3-.1.7-.3 1.7-.9.4-.2.4-.2.3-.2.4-.2h.3l.7-.3 1.3-.7.6-.3.4-.2h.2v-.2l.5-.2h.3l.6-.4 1-.4.5-.2.4-.2.1-.1.3-.1.4-.2.3-.2.7-.3.6-.3.6-.3.4-.2h.2l.2-.2.3-.8m-93.2 64l-1.5-.2h-.3l-2.8-.3-.4-.1-1.4-.2h-.3l-.4-.1h-.5l-.4.3.3.2h1.2l1.8.3.4.1 2.4.3h.3l1.7.2v-.5m7.8 1.1l-4.1-.6h-.3l-2.1-.3h-1v.3l.6.1h.3l2 .3h.3l4 .6.3-.4"/>
      <path d="M520.3 1022.3l-.3.2-.5 1.8-.2.8-1 4v.3l-1.7 7v.4l.3-.3.3-1.1 1.4-6 .1-.5 1-4.6.3-.7.3-1.3m6.2 7.5l-.7-.9-1.8-2.5-.2-.1-2.2-3-.2-.3-.4-.6-.2-.2-.2-.2-.3.2.2.4.2.2.5.7.2.3 2.1 2.8.2.2 2.4 3.2.4-.2m-18.8 6.1l-1.8-.2h-.2l-3.1-.4-.4-.1-1.7-.2h-.3l-.5-.1h-.5l-.6.3.5.2h1.3l2 .4h.4l2.6.4h.3l1.9.3v-.6m8.5 1.2l-4.5-.7h-.3l-2.3-.3h-1l-.1.3.7.1h.3l2.2.3h.3l4.3.6.4-.3"/>
      <path d="M509.7 1028.6l-.3.2-.5 2-.2.8-1 4.4-.1.3-1.9 7.7v.5l.3-.3.3-1.1 1.7-6.7v-.4l1.2-5 .2-.7.3-1.7m6.7 8.3l-.4-.5-2.3-3.1-.2-.2-2.4-3.3-.2-.3-.4-.7-.2-.1-.2-.3v-.1l-.4.2.4.4.2.2.5.8.2.3 2.3 3.2.2.2 2.5 3.3.1.1h.3m-20.4 6.3l-2-.2h-.3l-3.4-.5-.4-.1-1.8-.3h-.3l-.5-.1h-.6l-.5.4h.8l.7.2h.3l2 .3h.5l3 .4h.2l2.2.3v-.4m9.3 1.4l-.1-.2-4.8-.7h-.3l-2.6-.4h-1.1v.3l.7.1h.3l2.5.4h.3l4.8.7.3-.2"/>
      <path d="M505.7 1044.5l-.4.2-.1-.2-2.8-3.6-.1-.2-2.6-3.5-.2-.3-.7-.9-.2-.1-.3-.6-.4 1.7-.2.7-1.4 5.6v.5l-1.7 7-.4 1.6-.4.3.1-.2 2-8.8.1-.4 1.3-5 .2-.7.5-2.1.6-.4.3.4.2.2.5.7.2.3 2.7 3.6.2.2 2.7 3.6.3.4m-22.3 7l-2.1-.3h-.3l-3.7-.5h-.4l-2-.3h-.4l-.6-.1h-.3l-.4-.1-.6.4h1l.8.1h.3l2.4.3.4.1 3.3.5h.3l2.3.3v-.4m10 1.5l-5.4-1h-.3l-2.9-.3h-1.1l-.1.3h1.1l2.8.5h.3l5.3.7.4-.2"/>
      <path d="M485.8 1042.7l-.3.2-.6 2.6-.2.7-1.2 5.3-.1.4-2.2 9.3-.1.5.4-.3.3-1.4 2-8.1v-.4l1.5-6 .2-.8.3-2m8 10l-.4-.5-3-3.9-.1-.1-2.9-4-.2-.3-.6-.7-.2-.2-.3-.5-.4.2.5.6.2.2.6.9.2.3 2.9 3.8.2.2 3 4.2h.2l.2-.1m-24.2 7.5l-2.5-.2h-.2l-4.2-.6-.4-.1-2.3-.3h-.3l-.6-.1h-.8l-.6.2h1.1l.8.2h.2l2.6.4h.4l3.8.5h.3l2.5.4.2-.4m11 1.7l-.2-.2-5.8-.8h-.3l-3.1-.4h-1.3l-.2.3 1 .1h.3l3 .4h.3l5.8.8.5-.2"/>
      <path d="M480.9 1061.8l-.4.2-.2-.2-3.3-4.4-.2-.2-3-4.2-.2-.2-.8-1.2-.2-.2-.5-.7-.4 2.2-.2.7-1.7 6.8v.4l-2.2 9-.4 1.5-.3.2v-.1l2.5-10.6.1-.5 1.5-6 .2-.8.6-2.7.6-.3.5.5.1.2.8 1 .2.4 3.1 4.2.2.2 3.4 4.6.2.2m-26.5 8.3l-2.7-.3h-.3l-4.5-.6-.4-.1-2.6-.4h-1.3l-.6-.2-.6.4h1.2l1 .2h.2l2.9.4h.4l4 .6h.3l2.9.4v-.4m12.3 1.7l-6.8-1h-.2l-3.6-.5h-1.3l-.1.3 1 .1h.3l3.4.5h.3l6.5.9.5-.3"/>
      <path d="M457.2 1059.5l-.2.2-.8 3-.2.8-1.6 6.6-.1.4-2.8 11.6-.1.1.4-.2.5-2.2 2.2-9.3v-.4l1.8-7.4.2-.7.7-2.5m9.7 12l-.6-.7-3.4-4.5-.2-.2-3.5-4.8-.2-.3-.7-1-.2-.1-.4-.6-.4.2.6.8.2.1.8 1.1.2.3 3.4 4.7.2.2 3.9 5.2.3-.3m-28.9 9.1l-3-.4h-.3l-5-.6-.4-.1-4.9-.7-.6.4 5.7.7.4.1 4.5.6h.3l3.1.4.1-.4m13.1 2v-.3l-7.2-1h-.3l-3.8-.4h-.3l-1.2-.2v.4l1 .2h.3l3.7.5h.3l7.2 1 .3-.3"/>
      <path d="M451.4 1082.3l-.4.3-.2-.2-4-5.4-.1-.2-3.9-5.1-.2-.3-.8-1.3-.2-.1-.7-1-.6 2.8-.1.7-2 8.2v.5l-2.6 10.2-.4 2.4-.4.2v-.1l3-12.8.1-.4 1.8-7.5.2-.8.7-3.2.7-.4.6.8v.2l1 1.1.1.3 3.9 5.2.2.2 4.1 5.5.2.2m-31.5 10l-15-2-.6.4 15.5 2.1v-.5m14.4 2h-.1l-8-1.1h-.3l-5.7-.8-.1.4 5.6.8h.2l8 1 .4-.3"/>
      <path d="M423.2 1079.6l-.4.1-3 12.6-.1.4-3.4 14.1.4-.3 3.3-13.8v-.4l3.2-12.7m11.4 14.6l-.4-.5-4.3-5.9-.2-.2-6.2-8.2-.3.2 6.2 8.3.2.2 4.5 6.2h.1l.4-.1m93.8-71.7l-1.6-.2h-.3l-2.8-.4h-.4l-1.1-.3h-.8l-.6.4h.6l.5.1h.3l1.4.2.4.1 2.3.3h.3l1.7.2.1-.4m7.2 1l-3.7-.6h-.3l-2.1-.3h-.8v.3h.6l1.9.4h.3l3.5.5.6-.3"/>
      <path d="M530.2 1016.4l-.3.2-.3 1.1-.2.8-1 4-.2.4-1.7 6.8.4-.3.6-2.2 1-4.3.1-.4 1.2-4.8.2-.8.2-.5m5.8 6.9l-.5-.7-1.7-2.4-.2-.2-2.1-2.9-.2-.3-.4-.4-.2-.2-.4.2.1.2.2.1.4.6.2.3 2 2.8.2.2 2.1 2.8h.1l.4-.1m2-6.8l-1.6-.2h-.3l-2.7-.3-.4-.1-.5-.1-.5-.1h-.5l-.6.4h2.3l.4.2 2.3.3h.3l1.6.1.1-.2m6.6.7h-1.3l-2.1-.4h-.8l-1.5-.2h-.6v.4h.5l1.5.2h.6l2.4.3h.3l.5.1.5-.4"/>
      <path d="M539.7 1010.9l-.4.2-.2.7-.2.8-1 3.9-.2.3-1.2 4.7-.2 1-.2.5.4-.2.7-3 .8-2.9.1-.3 1.2-4.7.2-.7.2-.3m5.2 6l-.7-1-.7-.9-.3-.4-.4-.4-.2-.2-.7-1-.2-.4-1-1.4-.3-.3-.2-.3v-.1l-.5.2.2.2.3.4.2.3 1 1.4.3.3.6 1 .2.1.6.8.3.4 1 1.4h.5"/>
      <path d="M546.8 1010.8l-1.5-.2h-.7l-.6-.1h-.8l-.5-.2h-1.9l-.6.3h2.4l.6.2h1l.4.2h.3l1.7.2.2-.4m6 .7l-3.2-.4h-.2l-1.9-.2h-.5v.4h.4l1.8.2h.2l3 .3.3-.3"/>
      <path d="M548.4 1005.7l-.4.2v.3l-.3.7-1 3.8-.1.4-.8 2.7-.3 1-.6 2 .4-.2.9-3.2.6-2.2v-.4l1.3-4.5.3-.6m4.7 5.6l-.6-.7-1.3-1.8-.2-.2-2-2.5-.1-.3-.2-.3-.4.2v.2l.4.4.2.3 1.8 2.4.2.2 1.7 2.3h.1l.4-.2m1.9-5.8h-1.7l-2.6-.4h-1.2l-.5.3h.4l1.1.1h.5l2.1.2h.3l1.5.2v-.4m5.5.7l-2.9-.3h-.3l-1.7-.2h-.3l-.2.4h.3l1.6.2h.3l2.7.3.5-.4"/>
      <path d="M556.5 1001l-.4.2-.2.9-1 3.4v.4l-1.4 4.7-.1.4.4-.3v-.1l1.1-4.1.2-.7.1-.4 1.2-4.2v-.2m4.4 4.9l-.7-1-1-1.3-.1-.2-1.9-2.4-.2-.3-.3.2.2.3.2.3 1.8 2.3.2.2 1.5 2 .3-.1m1.6-5.2H561l-2.5-.3h-.8l-.7.4h.2l1 .1h.5l2 .2h1.7l.1-.4m5 .5l-2.6-.3h-.3l-1.6-.2h-.3v.4h1.9l2.4.3.5-.2"/>
      <path d="M564 996.6l-.4.2-.2.6-1 3.3v.4l-1.4 4.5v.1l.4-.3 1.2-4.3.1-.4 1.2-4v-.1m3.9 4.4l-.8-1-.7-1-.2-.2-1.7-2.2-.2-.2-.3.2v.2l.2.3 1.6 2 .2.3 1.3 1.8.6-.2m1.6-4.8l-1.1-.1h-.3l-2.4-.2h-.5l-.7.4h1.4l1.8.3h1.6l.2-.4m4.6.5l-.4-.1h-.4l-1.5-.1h-.3l-1.5-.1h-.2v.4h1.7l2 .3h.2l.4-.4"/>
      <path d="M570.8 992.5l-.4.2-.1.5-.9 3v.5l-1.1 3.4-.2.8.4-.3.2-.5 1-3.3v-.4l.5-1.5.6-2.4m3.5 3.9l-.8-1.2-.5-.6-.2-.2-1.6-2-.3.1v.1l.2.3 1 1.5.4.4.2.2 1.2 1.7.4-.3m1.5-4.4h-1.4l-2.2-.2h-.3l-.6.4h1.1l1.7.1h.3l1.2.1.2-.3m4.2.3h-2.3l-1-.1h-.6v.3h.4l.9.1h.6l1.5.1.5-.4"/>
      <path d="M577.1 988.8l-.4.2v.4l-1 2.8v.3l-1 3.7.3-.2 1-3.5.1-.3.7-2.3.3-1.1m3.2 3.5l-1-1.4-.3-.3-.2-.2-.7-1-.2-.2-.2-.3-.1-.1-.1-.2-.4.2.2.3h.1v.3l.3.3.2.2.6 1 .2.2.7 1 .4.4.5-.2m1.5-4.1h-1.3l-2-.3-.7.4h.7l1.7.1h.3l1.1.1.2-.3m3.8.4l-1.9-.2h-1.6l-.2.3 1.2.1h1.8l.7-.2"/>
      <path d="M583 985.3l-.3.2-.9 2.7v.4l-.3.8-.7 2.6.3-.3.7-2.2.3-.9.1-.4.9-2.9m2.8 3l-1.1-1.5-.1-.2-1.2-1.6-.3.1v.1l1.3 1.7.2.2 1 1.2h.2m1.4-3.6l-1-.1h-.3l-1.7-.1-.7.4h2.4l1.1.2.2-.4m3.4.3l-1.6-.1h-.3l-1.2-.1-.1.3 1 .1h.3l1.4.1.5-.3"/>
      <path d="M588.4 982l-.3.3-.8 2.4-.1.4-1 3 .4-.4.9-2.6v-.4l1-2.6m2.5 2.6l-1.3-1.9-.8-1-.4.2 1.2 1.5.2.2.8 1.2.3-.2m1.4-3.2l-.9-.1h-1.7l-.7.3h2l1 .2.3-.4m3 .2l-1.4-.1h-.3l-1-.1-.1.4h1.1l1.2.2.5-.4"/>
      <path d="M593.4 979.2l-.3.2-.6 1.6-.1.4-.1.4-.9 2.6.4-.3.8-2.3v-.4l.2-.4.6-1.8m2.3 2.3l-1.1-1.5-.8-1-.4.2 1 1.3.2.2.7 1 .4-.2m1.1-2.9h-2.2l-.7.3h.5l1.1.1h.3l.8.1.2-.5m2.6.3h-.1l-1-.2h-1.1l-.1.3h1l1 .1.3-.2"/>
      <path d="M599.8 978.6l-.4.3h-.1l-.5-.8-.2-.3-.8-1v-.1l-.7 2-.1.4-.5 1.2-.2.7-.4.3.3-.9.5-1.4.1-.4.6-1.7v-.1l.6-.4 1 1v.4l.8.8m1.2-2.6h-1l-1-.2-.7.4h.3l1 .1h1.1l.1-.4m2.5.2H602l-.9-.2v.4h1.6l.6-.2"/>
      <path d="M601.8 974.2l-.4.2-.5 1.5v.4l-.7 2 .3-.3.6-1.7.1-.4.6-1.7m2 1.6l-1.4-1.9-.4.2.7 1 .2.2.6.7.3-.2m1-2.3h-1.6l-.6.4 1 .1h1l.2-.5m2 .2H605l-.1.3h1.4l.5-.3"/>
      <path d="M605.5 972l-.3.2-.4 1.2-.1.4-.6 1.7.4-.2.5-1.5v-.4l.5-1.4m1.7 1.4l-1.3-1.6-.4.2.7.9.2.1.4.5v.1l.4-.2m1-2.1H607l-.7.4h1.8l.1-.4m1.8.1h-1.6v.3h1.1l.5-.3"/>
      <path d="M608.9 970l-.4.3-.4 1v.4l-.5 1.4.3-.2.4-1.2.1-.4.5-1.2m1.5 1l-1-1.4h-.1l-.3.3.6.7.2.2.3.5.3-.3"/>
      <path d="M611.4 971.1c0 .3-.2.7-.4.8l-30.7 21.5-.3.2-2 1.3-.1.1-1.6 1.2-.5.4-.6.4-.3.2-.5.3-.3.2-.2.2-5.1 3.7-.4.2h-.2l-21 14.7-.4.2-3 2.2-.3.1-2.7 1.9-1 .6-.7.5-.5.4-.8.6-.4.3-.3.3-8.4 5.8-.6.4-.3.2-115.9 81c-.3.2-.5.2-.6-.1v-.1c0-.3.2-.7.4-.8l5-3.4.3-.2.1-.1.6-.4 16.3-11.5.4-.2.4-.3.2-.1.4-.3v-.1l.6-.4 15-10.4.2-.2.4-.3h.2l.4-.3h.2l.5-.4 13.5-9.4.5-.4.3-.3.4-.3h.2l.6-.5 12.2-8.5.3-.2.4-.3.4-.3h.2l.6-.5 11-7.7.4-.2.4-.3.1-.1.4-.3.1-.1.6-.4 10-7 .3-.3.4-.3.4-.3h.2l.5-.4 9-6.3.4-.3.4-.3.4-.3.2-.1.4-.4 8.1-5.7.5-.4.4-.3h.2l.3-.4h.1l.6-.4 7.4-5.2.5-.3.4-.3.5-.4.6-.4 1.6-1 .3-.3 4-2.8.4-.2.5-.4.5-.4.4-.2h.1l.1-.1.4-.3h.2l.6-.4.4-.3 5.7-4 .5-.2.4-.3.2-.1.3-.3h.1l.7-.6 5.5-3.8.5-.4.3-.3h.1l.1-.2.4-.3h.1l.7-.5 4.9-3.5.5-.3.4-.3h.2l.4-.4h.1l.7-.5 4.3-3 .1-.1.5-.4.4-.3.2-.2.4-.3.7-.5 2.1-1.5h.2l1.6-1.1.4-.4.4-.3h.1l.1-.2h.1l.4-.4.8-.6 3.2-2.3.5-.3.4-.3v-.1l.2-.1.2-.1.4-.3v-.1l.7-.5 2.8-1.9.6-.4.4-.3.2-.2.4-.3.1-.1.7-.5 2.4-1.7.5-.3.4-.3v-.1h.2l.4-.3v-.1l.7-.5 2-1.3.3-.3.4-.3.4-.3.4-.3.7-.6 1.6-1 .6-.4.3-.3h.2l.1-.2.4-.3h.1l.7-.5 1.1-1 .5-.2.4-.3h.2l.2-.2.4-.3.7-.5.9-.6.6-.4.4-.3.2-.2h.1l.2-.2c-1.1 1.7-.9 1.8-.9 2.1m-1.6-2.1l-.2.5-.2.3h-.1l-.3.3h-.1l-.4.3-.7.4-1 .6-.6.4-.3.2-.4.2-.3.2h-.2l-.6.4-1.3.7-.6.4-.2.1-.4.2h-.2l-.4.3-.7.4-1.7 1-.7.4-.2.1-.1.1-.7.4-.6.3-2.2 1.3-.7.4v.1l-.5.2-.4.2h-.1l-.6.4-2.6 1.5-.7.4h-.3l-.3.3h-.1l-.4.3h-.1l-.6.3-3 1.8-.7.4-.3.2-.4.1-.1.1-.4.2-.6.3-3.6 2.2-.7.4-.2.1-.4.2-.4.2-.3.2-4.3 2.5h-.2l-.6.5h-.1l-.4.2h-.1l-.4.2-.3.1-4.7 2.8-.4.2-.6.4h-.2l-.4.3h-.1l-.4.2-5.4 3.1-.4.2-.2.1-.7.4h-.2l-.4.2-.5.2-5.6 3.4-.4.2-.5.2-.6.4v.1l-.5.2-.3.2-4.3 2.5-.3.2-.5.4-1 .6-.4.1-.2.1-.2.1-.1.1-.2.1-.6.4-.1.1-.4.2-.2.1-.4.2-6.3 3.7-.3.2-.5.3v.1l-.5.2-.1.1-.6.4h-.1l-.4.3h-.1l-.4.2-6.6 4-.3.1-.5.3-.4.2-.3.2-.3.2-.6.3-.4.2v.1l-.4.2-6.8 4-.3.3-.6.2-.3.2-.3.2-.6.3-.3.2-.5.3-.4.2-.3.2-7.4 4.4-.4.2-.7.4-.4.2-.5.2-.5.3-.4.2-.6.3-.7.4-8.3 4.9-.4.2-.7.4-.4.2-.4.2-.5.2-.6.3-.6.4-.4.2-.3.2-9 5.4-.3.2-.7.5-.4.1-.6.4-.6.3-.7.4-.6.4-.7.4-10 6-.4.1-1 .6-.3.2-.5.3-.6.3-.8.4-.6.3-.4.2v.1l-.4.2-11 6.4-.2.2-1 .6-.4.2-.7.4-.5.3-1 .6-.6.3-.1.1-.7.4-12.2 7.2-.4.2-3.8 2.3-.6.4-.5.3-.4.2-18 10.5-.5.4-5.6 3.3c-.3.2-.4 0-.4-.3s.1-.7.4-.9l5.6-3.2.6-.4 18-10.6.2-.2.4-.2h.1l.6-.4 3.4-2.2.4-.1 12.5-7.4.7-.4v-.1l.7-.4.8-.5.4-.2.7-.4.3-.1.3-.2.4-.2.2-.1.3-.2 5.9-3.5 5.5-3.2.3-.2.1-.1.4-.2.6-.4 13.5-8 .7-.4.6-.3 12.3-7.3.3-.2.4-.2.6-.4 11.2-6.6.7-.4.6-.3 10.2-6 .4-.2.3-.2.6-.2 9.2-5.5.3-.2.2-.1.4-.2h.1l.2.3.3-.1v-.5l8.6-5 .4-.2h.1l.4-.2.7-.4.3-.2h.3l.1.2.3-.1.1-.3v-.1l.1-.2 6.5-3.9.4-.1.2-.1.4-.2.1-.1.6-.4 7-4.2.5-.2.4-.2.2-.1.6-.4 6.5-3.8.4-.2.1-.1.4-.2.2-.1.7-.4 5.5-3.3.1.1c0 .1.1.1.2 0l.1-.2.3-.3h.1l.4-.2.2-.1.7-.4 5.1-3.1h.1l.1.1.2-.1.1-.2.1-.2.4-.2h.2l.7-.5 4.7-2.7.4-.2v-.1l.4-.2.3-.2.7-.4 4.1-2.4.4-.2h.1l.4-.3.3-.2.7-.4 3.6-2 .4-.3h.2l.4-.2.2-.2.7-.4 3.2-1.8.4-.2v-.1l.5-.2.1-.1.7-.4 2.7-1.6.4-.2.4-.2.4-.2.6-.4 2.3-1.3.4-.2.2-.1.4-.2.2-.1.7-.4 1.9-1.2.4-.1v-.1l.4-.2.4-.2.7-.4 1.5-1 .4-.2h.4c.1-.2.2-.2.3-.2.5.6.6.8.6 1m-109.4 26l-.1.2v-.3m0-.2a1 1 0 0 0-.4.5l-.1.4v.5c0 .3 0 .5.2.7 0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.4 0-.9.3-1.2M500.8 995l-.1.4v-.4"/>
      <path d="M500.5 994.7h-.1l-.4.5-.1.4v.5c0 .3 0 .5.2.7 0 .2.2.2.4 0l-.1.2c-.3.2-.4 0-.5-.1l-.2-.7c-.1-.7.2-1.4.8-1.5"/>
      <path d="M500.9 994.8l-.1.2v-.2m0-.3a1 1 0 0 0-.4.5l-.1.3-.1.4v.3c0 .3 0 .5.2.7 0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.6.2-1 .4-1.3m.2.7s0 .1 0 0c0 .1 0 0 0 0m.1-.4"/>
      <path d="M501 994.4h-.1l-.4.5-.1.3-.1.4v.4c0 .3 0 .5.2.7s.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.2 0-.2 0-.3.3-.4"/>
      <path d="M501.3 994.2a1 1 0 0 0-.4.6l-.1.2-.1.4v.3c0 .3 0 .5.2.7 0 .2.1.2.3 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.6.2-1 .4-1.3m.4.3"/>
      <path d="M501.3 994.2c-.2.2-.4.4-.4.6l-.1.2-.1.4v.3c0 .3 0 .5.2.7 0 .2.1.2.3 0h.1l-.2.2c-.2.2-.2 0-.2 0a.2.2 0 0 1-.1-.1l-.2-.7c0-.5 0-1 .3-1.2.1-.3.2-.4.4-.4"/>
      <path d="M501.8 993.9000000000001a1 1 0 0 0-.5.6v.3l-.2.2v.3l.2.7c.1.2.2.2.4.1l.1-.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.3.1-1 .4-1.2m.3.4l-.1.4.1-.4"/>
      <path d="M501.8 993.9l-.5.6v.3l-.2.2v.3l.2.7c.1.2.2.2.4.1l.1-.1-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2 0-.2.2-.3.4-.3"/>
      <path d="M502.2 993.9l-.1.3.1-.3m0-.2a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.7c0-.4.1-1 .3-1.2"/>
      <path d="M502.3 993.6s-.1 0 0 0l-.1.1-.4.5v.8l.1.7c.1.2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.1 0-.2.3-.3-.1 0-.1 0 0 0"/>
      <path d="M502.7 993.4s-.1 0 0 0a1 1 0 0 0-.5.6l-.1.3-.1.4v.2l.2.7c0 .2.2.2.4.1l-.1-.2-.2-.7c0-.6.2-1.1.4-1.4m.3.3"/>
      <path d="M502.7 993.3c0 .1 0 .1 0 0l-.1.1-.4.5-.1.3-.1.4v.2l.2.7c0 .2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.2.2-.3.4-.4"/>
      <path d="M503.2 993.1c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6l-.2.9c0 .3 0 .4.2.6 0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c0-.5 0-1 .4-1.3M503.4 993.4v.1"/>
      <path d="M503.2 993.1l-.1.1-.4.5-.2.9c0 .3 0 .4.2.6 0 .2.2.2.4.1l-.1.1-.2.1h-.2l-.2-.7c0-.5 0-1 .4-1.3 0-.3.2-.4.4-.4-.1 0 0 0 0 0"/>
      <path d="M503.5 992.8000000000001s0 .1 0 0a1 1 0 0 0-.4.6v.1l-.1.2v.5c0 .4 0 .6.2.7 0 .2.1.2.3.1h.1a.2.2 0 0 1-.2-.2l-.1-.7a2 2 0 0 1 .2-1.3m.4.4"/>
      <path d="M503.6 992.8v.1l-.4.5v.1l-.1.2-.1.3v.2c0 .4 0 .6.2.7 0 .2.1.2.3.1h.1l-.2.1-.1.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3 0-.2 0-.3.3-.3"/>
      <path d="M504 993v-.2m0 1.8a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-.9.3-1.2l-.4.4v1.1l.1.7c.1.2.2.2.4 0 0 .2 0 0 0 0m.3-1.3"/>
      <path d="M504 994.7l-.2.1-.2.1a.2.2 0 0 1-.2-.1l-.1-.7c0-.5 0-1 .3-1.3l.3-.2-.4.5v.9l.1.7c.1.1.2.1.4 0"/>
      <path d="M504.5 994.4h-.1c0 .2-.3 0-.4 0l-.2-.7v-.2l.1-.5.1-.3.1.1v.6l.1.7.3.3"/>
      <path d="M504.5 994.4l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.4.1-.9.3-1.2l.1.1v.4l-.2.4v.3l.2.7c.1.2.2.2.4 0-.1 0-.1 0 0-.1m.4-.2l-.1-.1-.1-.1-.1-.2-.3-.5v.2l.2.7h.4c-.1 0 0 0 0 0m0-1.9l-.1.2v-.1m0-.3h-.1v.2l.2-.2m.4.3l-.1.6v-.6"/>
      <path d="M504.9 994.2s-.1 0 0 0l-.4-.1-.2-.7v-.2l-.2-.3v.6l.1.7.2.2.2-.1.3-.1m0-2.1h-.2v.2-.1l.2-.1m.4.1l-.1.1v-.1m.2-.4c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6l-.1.1v.4l.2-.5.4-.6"/>
      <path d="M504.8 994l-.2-.2v.2h.2m.6-2.2c-.2 0-.3 0-.5.3l-.2.2v.1l.2-.1c0-.3.2-.5.4-.5m.8.6v.3l-.3.3.2-.8.1.1"/>
      <path d="M506 991.6h-.3l-.3.5-.1.2-.1.6v.4-.2l.7-1.5m.3.8v-.4.4c0 .1 0 .3-.2.4s0 .2-.2.3l-.2.5.4-.3c.2-.4.2-.7.2-1"/>
      <path d="M506 991.6h-.3l-.3.3-.3.5-.1.5.2.6v-1.1l.2-.1v-.1c0-.3.2-.5.3-.5 0-.2.1-.2.2-.1m.1 1.6s0 .1 0 0c0 .1 0 0 0 0m.2-.9v-.3.4c0 .2 0 .5-.2.8.2-.3.2-.6.2-.9"/>
      <path d="M505.4 993.1l-.1.3v-.3m-3.3-2.3v.1m.1-.6c-.1 0-.1.1 0 0a1 1 0 0 0-.5.6v.9l.1.6c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4 0-.9.3-1.3m.3.5"/>
      <path d="M502.1 992.4l-.2.2c-.3.2-.4 0-.5 0l-.2-.7c0-.7.3-1.5.8-1.6h.1-.1l-.4.5v.9l.1.6c.1.2.2.2.4.1-.1 0-.1 0 0 0"/>
      <path d="M502.5 992.2a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-.9.3-1.2l-.4.5v.4l-.2.6.2.7c.1.1.2.1.4 0m.4-1.4"/>
      <path d="M502.6 992.2l-.2.1-.2.1a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3l.3-.2-.4.5-.1.2v.7l.1.7c.1.2.2.1.4 0"/>
      <path d="M503 991.9a.2.2 0 0 1-.2-.2l-.2-.7v-.8.1l-.1.4v.4c0 .3 0 .5.2.7 0 .2.2.2.4 0-.2.2-.1.2-.1 0m.3-1.7c0 .1 0 .1 0 0 0 .1 0 .1 0 0"/>
      <path d="M503 991.9h-.1c-.1.2-.3 0-.4 0l-.2-.7v-1c-.2.3-.3.8-.3 1.2l.2.7.2.2.2-.1.4-.3M503.3 991.7l-.1-.2-.1-.3-.3-.5v.2c0 .3 0 .5.2.7s.2.2.3 0m0-2l-.3.4v.2l.3-.5m0 .2"/>
      <path d="M503.3 991.7l-.3-.1-.2-.7v-.2l-.2-.3-.1.6c0 .3 0 .5.2.7l.2.2.2-.1.2-.1m0-2.1c-.1 0-.2 0-.3.2l.3-.2m.2.4v-.2l-.2.3v.2l.2.4v-.7m.3-.6"/>
      <path d="M503.3 991.6l-.1-.4v.3h.1m.1-1.7v-.2l-.3.4v.2-.2l.2-.2h.1m.4-.5h-.2v.2h.1l.1-.2m.2 1.9l-.4-.8.2.7.1.1m.4-2.1a1 1 0 0 0-.5.6l.1.4c.1-.4.2-.8.4-1m.3.3"/>
      <path d="M504 991.4v-.2l-.2-.1-.2-.7-.2-.4v.7l.3.7h.3m.3-2.3c-.2 0-.4 0-.5.3v.4-.1c.1-.3.2-.5.4-.5l.1-.1M504.7 989l-.1.4v-.3m0-.3a1 1 0 0 0-.4.6l-.2.8.2.7c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.7c.1-.4.2-1 .4-1.2m.4.6v.3-.3m0-.3"/>
      <path d="M504.8 988.8h-.1l-.4.6-.2.8.2.7c.1.2.2.2.4.1l-.1.1-.2.1-.4-1c0-.4.2-.8.4-1 0-.3.1-.4.4-.4-.1 0-.1 0 0 0"/>
      <path d="M505.2 988.8l-.1.3v-.3m0-.3s0 .1 0 0a1 1 0 0 0-.4.6l-.1.3v.5c0 .3 0 .5.2.7 0 .2.2.2.4.1l-.1-.2-.2-.6c-.1-.5 0-1 .3-1.4m.3.7"/>
      <path d="M505.2 988.5l-.1.1-.4.5-.1.3v.5c0 .3 0 .5.2.7 0 .2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.2 0-.2.3-.3"/>
      <path d="M505.7 988.3c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6l-.1.3v.6c0 .2 0 .4.2.6 0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .3-1.3m.2.5"/>
      <path d="M505.7 988.2s0 .1 0 0l-.1.1-.4.5-.1.3v.6c0 .2 0 .4.2.6 0 .2.2.2.4.1l-.1.1-.2.1h-.2l-.2-.7c0-.5 0-1 .4-1.3-.1-.2 0-.3.3-.4-.1 0 0 0 0 0"/>
      <path d="M506 988a1 1 0 0 0-.4.6l-.2.7v.2c0 .3 0 .4.2.6 0 .2.1.2.3.1h.1a.2.2 0 0 1-.2-.3l-.1-.6c0-.5.1-1 .3-1.3m.4.3c0 .1 0 .1 0 0 0 .1 0 .1 0 0"/>
      <path d="M506.1 990l-.2.2-.1.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3l.3-.3h.1c-.2.1-.4.3-.4.5l-.2.7v.2l.1.6c.1.2.2.2.4.1 0 .1 0 .1 0 0"/>
      <path d="M506.5 987.7a1 1 0 0 0-.5.6v.9l.1.7c.1.1.2.1.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .3-1.3m.4.4v1-1"/>
      <path d="M506.5 987.7v.1l-.5.5v.9l.1.7c.1.1.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3 0-.2.1-.3.3-.3"/>
      <path d="M507 987.7l-.1.3.1-.3m0-.2c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6v.9l.1.7h.1l.1-.2V988.2c0-.4.1-.6.2-.7"/>
      <path d="M507 987.5h-.1l-.4.5v1l.1.7h.1v.3a.2.2 0 0 1-.3-.2l-.2-.7c0-.5.1-1 .4-1.3l.4-.2c-.1 0 0 0 0 0m.8.4l-.1.4-.2.3h-.1l.3-.9v.2"/>
      <path d="M507.6 987.3h-.2l-.4.4-.1.3v1-.1l.7-1.5m.3.7v-.4l-.1.3v.2l-.1.4-.2.3h-.1l-.3.7h.2l.4-.5v-.3c.2-.3.2-.5.2-.7"/>
      <path d="M507.6 987.3h-.2l-.4.2-.3.6v1.3l.1-.4v-1l.1-.3c.1-.2.2-.4.4-.4h.3m.3.7l-.1-.4v1l-.1.3c-.1.3-.2.5-.4.5h-.3c.4-.2.5-.4.6-.6.2-.2.3-.5.3-.8m-1 .8v.3-.3m-18.1-10.2l-.1.3v-.3m0-.3a1 1 0 0 0-.4.6l-.1.7v.2c0 .3 0 .4.2.6 0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .3-1.3M489 978.6"/>
      <path d="M488.8 978.2c0 .1 0 .1 0 0l-.1.1-.4.5-.1.7v.2c0 .3 0 .5.2.6 0 .2.2.2.4.1l-.1.1c-.3.2-.4 0-.5 0l-.2-.7c-.1-.6.2-1.4.8-1.6-.1 0 0 0 0 0"/>
      <path d="M489.1 978a1 1 0 0 0-.4.6l-.1.3v.6l.1.7c.1.1.2.1.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .3-1.3M489.5 978.3"/>
      <path d="M489.2 978v.1c-.2.1-.4.3-.4.5l-.1.3v.6l.1.7c.1.1.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.1-.2l-.2-.6c0-.5 0-1 .3-1.3 0-.2 0-.3.3-.3"/>
      <path d="M489.6 977.8a1 1 0 0 0-.5.5v.3l-.2.4v.3l.2.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.2-1 .4-1.3m.3.7"/>
      <path d="M489.6 977.8l-.5.5v.3l-.2.4v.3l.2.7c.1.2.2.2.4 0h.1l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3.1-.3.2-.3.4-.3"/>
      <path d="M490.1 977.6c-.1 0-.1 0 0 0a1 1 0 0 0-.5.5v.3l-.2.4v.3l.2.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.6.1-1 .4-1.3M490.4 977.8v.1"/>
      <path d="M490.1 977.5h-.1l-.4.5v.3l-.2.4v.3l.2.7c.1.2.2.2.4 0h.1l-.2.2c-.1.2-.2 0-.2 0a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3l.4-.3c-.1 0 0 0 0 0"/>
      <path d="M490.5 977.6l-.1.2v-.2m0-.3a1 1 0 0 0-.4.5l-.1.7v.2l.2.7c0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.5 0-1 .3-1.2"/>
      <path d="M490.5 977.3h-.1l-.4.5-.1.7v.2l.2.7c0 .2.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2 0-.2 0-.3.3-.3"/>
      <path d="M491 977s-.1 0 0 0a1 1 0 0 0-.5.6l-.1.2v.6c0 .3 0 .5.2.7s.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.4 0-1 .3-1.2M491.3 977.3"/>
      <path d="M491 977h-.1l-.4.6-.1.2v.6c0 .3 0 .5.2.7s.2.2.4 0l-.1.2c-.1.2-.2 0-.2 0a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.2 0-.2 0-.3.3-.3"/>
      <path d="M491.40000000000003 976.7a1 1 0 0 0-.4.6l-.2.8c0 .3 0 .5.2.7 0 .2.2.2.3.1h.1l-.2-.2-.1-.7c0-.4 0-1 .3-1.3m.3.7"/>
      <path d="M491.4 976.7l-.4.6-.2.8c0 .3 0 .5.2.7 0 .2.2.2.3.1h.1l-.2.1-.1.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4 0-1 .4-1.2l.3-.3"/>
      <path d="M491.8 976.5a1 1 0 0 0-.5.6v.3l-.1.4v.2l.1.7c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.7c0-.5.2-1 .4-1.3m.3.7"/>
      <path d="M492 978.5l-.3.2-.2.1h-.2l-.1-.8c0-.4 0-1 .3-1.2l.4-.3h.1l-.5.5v.3l-.2.4v.2l.2.7c.1.2.2.2.4.1v-.2"/>
      <path d="M492.3 976.2a1 1 0 0 0-.5.6v.9l.1.6c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.6c0-.5 0-1 .3-1.3M492.6 976.5l-.1.4v-.4"/>
      <path d="M492.3 978.2l-.2.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3l.4-.3h.1-.1l-.4.5v.9l.1.6c.1.2.2.2.4.1-.2.1-.1.1-.1 0"/>
      <path d="M492.7 976.2l-.1.3v-.3m0-.3a1 1 0 0 0-.4.6c0 .2 0 .5-.2.7v.2l.2.6c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c.1-.4.2-1 .4-1.3m.3.4"/>
      <path d="M492.8 976h-.1l-.4.5c0 .2 0 .5-.2.7v.2l.2.6c.1.2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3 0-.2.1-.3.4-.3-.1 0-.1 0 0 0"/>
      <path d="M493 976.1v.1m.2-.5s-.1 0 0 0a1 1 0 0 0-.5.6l-.1.3-.1.4v.3c0 .3 0 .5.2.6 0 .2.2.2.4.1l-.1-.2-.2-.6c0-.7.2-1.2.4-1.5"/>
      <path d="M493.2 975.6l-.1.1-.4.5-.1.3-.1.4v.3c0 .3 0 .5.2.6 0 .2.2.2.4.1l-.1.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3 0-.2.2-.3.4-.4"/>
      <path d="M493.6 977.2v-.1m0-1.7a1 1 0 0 0-.4.6l-.1.2v.6c0 .4 0 .6.2.8 0 .2.2.2.3 0h.1a.2.2 0 0 1-.1-.2l-.2-.7v-.7l.2-.6m.3.5"/>
      <path d="M493.6 975.4v.1l-.4.5-.1.2v.6c0 .4 0 .6.2.8 0 .2.2.2.3 0h.1l-.1.2h-.4l-.2-.7c0-.5 0-1 .4-1.3-.1-.3 0-.4.2-.4m.6.2v.4l-.2.2v.1l.2.3v.1l-.3-.1v-.3l.1-.4.2-.3"/>
      <path d="M494.4 976.8v-.2l-.2.1-.2-.1v-.1l-.4.6h.1c.1.3.2.3.4.2l.3-.5m0-1.4s0-.1 0 0c0-.2-.3-.2-.4-.1l-.4.4-.1.9v.3l.3-.4.1-.5.2-.3h.1l.2-.3"/>
      <path d="M494.4 975.4s0-.1 0 0c0-.2-.3-.2-.4-.1l-.4.4-.1.9v.6h.1c.1.3.2.3.4.2l.4-.5c0 .2-.2.5-.5.7h-.2a.2.2 0 0 1-.1-.1l-.2-.7v-.7l.3-.6.4-.2c0-.2.2-.1.3 0"/>
      <path d="M494 976.6l-.4.6-.1-.3.3-.4.1.1m-3.6-2.3l-.1.3v-.3m.2-.3c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6v.8l.1.7c0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .3-1.3m.3.3l-.1.6v-.6"/>
      <path d="M490.4 974l-.1.1-.4.5v.8l.1.7c0 .2.2.2.4.1l-.1.1c-.3.2-.4 0-.5 0l-.2-.8c0-.6.2-1.4.8-1.5-.1 0-.1 0 0 0"/>
      <path d="M490.8 974.2c-.1 0-.1 0 0 0m0-.5a1 1 0 0 0-.5.6l-.1.3v.6c0 .2 0 .4.2.6 0 .2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .3-1.3m.3.5"/>
      <path d="M490.9 975.7l-.2.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3l.4-.3-.4.5-.1.3v.6c0 .3 0 .4.2.6 0 .2.2.2.4.1-.2.1-.2.1-.1 0-.1 0 0 0 0 0"/>
      <path d="M491.2 973.4000000000001s0 .1 0 0a1 1 0 0 0-.4.6l-.1.2-.1.7c0 .3 0 .5.2.6 0 .2.2.2.4.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.4 0-.9.3-1.3M491.5 973.8"/>
      <path d="M491.2 975.5l-.1.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3l.3-.3h.1l-.4.5-.1.2v.1l-.1.6c0 .3 0 .5.2.6 0 .2.2.2.3.1"/>
      <path d="M491.6 973.2a1 1 0 0 0-.4.6l-.1.3v.6l.1.7c.1.1.2.1.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .3-1.3m.4.3"/>
      <path d="M491.7 973.1s0 .1 0 0v.1l-.5.5v.9l.1.7c.1.1.2.1.4 0h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.1l-.1-.7c0-.5 0-1 .3-1.3 0 0 0-.2.3-.3"/>
      <path d="M492.1 973a1 1 0 0 0-.5.5v.9l.1.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .3-1.2"/>
      <path d="M492.1 973c-.2 0-.4 0-.5.2-.2.3-.4.8-.4 1.3l.2.7.2.2.2-.1.2-.2c-.2.2-.4 0-.5 0l-.2-.7v-.5l.1-.4c.1-.3.2-.5.4-.5h.3m.5-.3c-.1 0-.1 0 0 0a1 1 0 0 0-.5.5v.9l.1.7c.1.2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.4 0-1 .3-1.2m.3.4"/>
      <path d="M492.6 974.8l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.3l.4-.2-.4.4v.9l.1.7c.1.2.2.2.4 0h-.1"/>
      <path d="M493 972.7l-.1.2v-.2m0-.3a1 1 0 0 0-.4.6l-.2.8.2.7c0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.4.2-.8.4-1.2m.4.6v.2c-.1 0-.1-.2 0-.2m0-.2"/>
      <path d="M493 972.4l-.4.6-.2.8.2.7c0 .2.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2 0-.1 0-.2.4-.3-.1 0-.1 0 0 0"/>
      <path d="M493.5 972.5l-.1.3v-.3m0-.3a1 1 0 0 0-.4.6l-.1.2v.6c0 .3 0 .5.2.7s.2.2.4 0l-.1-.1-.2-.7c-.1-.5 0-1 .3-1.3M493.8 972.5"/>
      <path d="M493.5 972c0 .2 0 .2 0 0l-.1.2-.4.5-.1.2v.6c0 .3 0 .5.2.7 0 .2.2.2.4 0l-.1.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.2 0-.1 0-.2.3-.3"/>
      <path d="M493.90000000000003 971.9000000000001a1 1 0 0 0-.4.6l-.1.3v.5c0 .3 0 .5.2.7 0 .2.1.2.3.1h.1a.2.2 0 0 1-.2-.3l-.2-.7c0-.4 0-1 .3-1.2m.3.7"/>
      <path d="M494 971.9h-.2l-.3.6-.1.3v.5c0 .3 0 .5.2.7 0 .2.1.2.3.1h.1l-.2.1H493.5l-.2-.7c0-.5 0-1 .3-1.2 0-.3.1-.4.3-.4"/>
      <path d="M494.3 971.6s0 .1 0 0a1 1 0 0 0-.5.6v.3l-.2.4v.2l.2.7c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.7c0-.4.2-1 .4-1.3m.4.4"/>
      <path d="M494.4 971.6v.1l-.5.5v.3l-.2.4v.2l.2.7c.1.2.2.2.4.1h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-1 .4-1.2 0-.3.1-.4.4-.4"/>
      <path d="M494.8 971.7l-.1.3.1-.3m0-.3s-.1 0 0 0a1 1 0 0 0-.5.6c0 .2 0 .4-.2.7v.2l.2.6c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.6c0-.5.1-1 .4-1.3m.4 1.3c-.1 0-.1 0 0 0-.1 0-.1 0 0 0m-.1-1l-.1.6v.4-1"/>
      <path d="M494.8 971.3s0 .1 0 0l-.1.1-.4.5c0 .2 0 .4-.2.7v.2l.2.6c.1.2.2.2.4.1h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3l.4-.3"/>
      <path d="M495.2 972.9l-.1-.1m0-1.7a1 1 0 0 0-.4.6v.9l.1.6c.1.1.2.2.4.1l-.2-.2-.2-.6.1-.7c0-.4.2-.6.3-.7"/>
      <path d="M495.3 971.1l-.1.1-.4.5-.1.3v.7l.2.6c0 .1.2.2.4.1v.1h-.1l-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3-.1-.2 0-.3.3-.3-.1 0 0 0 0 0m.7.2l-.2.2-.1.1-.2.5V971.6c.2 0 .2-.2.3-.3l.2.1"/>
      <path d="M495.5 972.4l-.3.4.3-.4m.5-.1v-.1l-.3.8.2-.3v-.2l.1-.2m.1-1v-.4c-.1-.2-.2-.2-.4 0l-.4.4-.1.3-.1.6v.3l.4-.4v-.5c.2 0 .2-.2.3-.3l.2.1h.1"/>
      <path d="M495.9 972.7l-.2.2.2-.2m.1-.4v.2l-.1.2v-.2l.1-.2m.1-1c0-.3-.1-.6-.4-.5l-.4.3-.3.6-.1.7c0 .2 0 .5.2.6l.2.1V972.8l-.1-.4v-.6l.2-.3c0-.3.2-.5.4-.5l.3.1v.2"/>
      <path d="M495.6 972.2l-.1.2-.3.4v-.2l.4-.4m25.9 48.5l-.1.3c-.1 0-.3.2-.3 0l-.2-.2v-.1l-.2-.3v-.2l-.4-.5-1.2-2-1-1.8-2.2-3.5-.3-.4-.2-.3v-.1l-.5-.9-10-16.6-.1-.1-.2-.3-.3-.5-.2-.3v-.2h-.2v-.2l-.6-.8v-.1l-.2-.4-.3-.5-.2-.3-.1-.2h-.1l-8-13.4-.2-.2-.2-.3.1-.3v.4c0 .1.1.1.2 0h.1l.8.7L503 990l.2.2v.2l.2.4.4.7.4.6.8 2v.3s0 .2 0 0l1 .5 8.3 14v1.1h.2v.1l.8.2.1.3.5.9.2.2.8 1.4 1 1.7.7 1.2.2.3 2.2 3.6.2.3.1.2v.7l.2-.5v-.1m-25.7-48.9l-.1.1v-.1m2.2 2.8v-.1m0-.8l-1.5-1.8-.3.2v.3l1.5 1.7.4-.3m8.2 10.4l-7.7-9.1v.4l7.7 8.7m2.1 1.4l-2-2.3 2 2.3m3 3.5l-.3-.5-2.4-2.7 2.7 3.2m7.9 9l-6.6-7.7h-.2l6.5 7.7h.3m4.8 5.9l-.4-.9-4.2-4.8-.2.1 4.8 5.6m2 1.8l-1.3-1.5h-.3l1.4 1.8.1-.3"/>
      <path d="M508.4 985.4l-2-2.3-7.3-8.5-.8-.4.2.6 7.7 9.1 1.8 2v-.4h.3m3.5 4.3l-.6-1-2.7-3-.2.1-.1.5 1.5 1.8 2.1 1.6m7.2 8.1l-6.5-7.7h-.3v.6l6.6 7.6.2-.4c-.2 0 0 0 0 0m5.1 5.8l-4.8-5.6-.1.1-.2.6 3.8 4.5 1.2.6v-.2m8.3 10l-.1-.6-.5-.6-.2-.2-2.1-2.4-.2-.2-.2-.3-1.5-1.7-.8-.9-.4-.4-.5-.5-1.4-1.7-.1.1-.1.6.9 1 .6.8h.1l.1.1.2.2 1.4 1.6.7.8.7.8.2.2.6.6 1.6 1.9.2.2v.2l.3.2.5.3m.4 0v.2l-.2.2h-.2v.1h.3l.1-.4m-17.6-32.5l-15.3-12.2h-.2.2v.1l.8 1.3 12.3 9.8 2 1c.2 0 .2-.1.2 0m23 18.4l-.2-.2-22.8-18.3v.1l.3 1 12 9.7h1v.2l.1.4 8.7 7 .5-.2.3.3v.2l-.2.2h.1l.1-.4"/>
      <path d="M505 994.4v-.3.2m4.2-8.9l-.3-.3-.6.3-.1.3-.1.4-.2.5.3.3.1-.5.2-.5h.2l.5-.5m2.6 5v-.2l-.3-.2-5.5 3.2-.4.3.1-.5.3-.8.1-.3.9-2.4v-.1l.4-.7.3-.9v-.3l.2-.3-.3-.3-.1.3-.6 1.5v.3l-.2.4v.3l-.2.2-.7 1.7-.5 1.5-.1.3-.1.1.2.5h.2l6.3-3.6m3.2-8.1l-.2-.4-.4-.2-5.2 3 .3.4 5-3-2.5 7 .3.5 2.7-7.3m.2-.7v-.1h-.2.2v.1m-.7 28.5l-.1-.3v.3m6.8-13l-.2-.4-1.8 1-.1.1h-.1l-.2.2-.2.4-.8 2.2.3.2.8-2 .2-.6.3-.2 1.8-.8m2.7 7.3l-.4-.2-8.4 5 3-8-.4-.2-3 8v.6l.4.1 8.7-5.2.1-.1m.2-.4l-.1-.2-.1.2h.2m.3 0l-.1.3v-.2m4-10.9v-.5h-.6l-6.3 3.7.2.5 6.3-3.8-3.6 10.2.2.5 3.8-10.6m.3-.8c0-.1 0-.1-.2 0h.2m-30.6-19l-.1.2-.4.3-2.8 1.6 1-2.6.3-.7v-.3l.3-.2 3-1.7-1.3 3.4m1.9-4.1v-.1c0-.1-.1-.1-.2 0l-3.6 2.1v.1l-.2.2-.1.1-.2.5-.1.2-.2.5-.1.2v.2l-.8 2v.3l-.2.4v.4c0 .1.1.1.2 0h.1l.1-.3c.1 0 .2-.2.2 0l.2.1 3-1.7-.1-.2v-.4h.2c0-.2 0-.2.2-.2l.2.1 1.4-3.7-.2-.3v-.1l.1-.2c-.1-.3 0-.3 0-.2"/>
      <path d="M512.3 989.7l-.3-.4-2.5-4-.3-.4-4.7-7.7 9.8 4.6.5.2.2.4 3.5 8.5-6.2-1.2m12.2 14l-.3-.4-2.7-6.4-.2-.5-2.1-5.1 8.4 1.4.5.1.1.5 1.8 8.8-5.5 1.6m12.8-2.5l-.2.5-.3.7v.1l-.2.6-1.8 4.7-.1.4-1.4 3.6-.3 1-.2.4-.2.5v-.3l-.2-.4-.2-1.5-.1-.5-.7-3.5-.1-.4-.1-.2-.5-2.5-.2-1.1-.2-.9 4.7-1.3 2.4-.7-.1.8m.7-1.3l-.7.2-6.9 2-1.7-9v-.6h-.4l-.7-.1-8.5-1.5-3.5-8.2-.3-1-.1-.1-.1-.1-2-1-8.8-4-3.5-5.8-.8-1.2-.1-.1c0-.1-.1-.1-.2 0l-.1.2.2.4 3.8 6.1-5-2.4H498v.1l.3.4.8.4 4.8 2.2 5 8.2.3.3 1.8 3 .3.5.6.9.2.2v.1l.3.1h.2l6.1 1.1 2.3 5.4.2.5 2.4 5.7.4.9v.2h.2c.2 0 0 0 0 0h.5l5.3-1.6.2.9.2 1 .5 2.3.1.4.1.3v.4l.9 3.8v.4l.3 1.3.1.7h.3l.1.2.1-.2.1-.2.3-.8.4-1 .3-.8 1-2.9.2-.4 1.7-4.4.2-.6v-.2l.4-1 .2-.4.1-.3.3-.7.1-.2h-.3m-15.2 11.8l-.4-.1-.3-.1-4.1-1-1.6-.4-1.2-.3h-.3l-.1.3h-.1l.7.2.4.1 1.6.4 1.6.4 2.8.6.3.1.7.2v-.4m10 2.5l-.2-.1-.2-.1-.6-.1h-.1l-.4-.1-.3-.1-1.4-.4-.5-.1-1.8-.4h-.3l-2.3-.7h-.3l-.4-.2h-.3l-1-.2v.4l.8.2.3.1.4.1.3.1 2 .5h.4l2.3.7h.5l1 .4h.3l.3.1.3.1h.2l.3.1h.4l.2-.3"/>
      <path d="M524.3 1004c0 .2 0 .2 0 0v.4l-.1.5-.3 1.6-.2 1.2-.3 2v.5l-.4 1.6v.6l-.2.5-.6 4-.2 1.3-.2.9-.1.5v.4l-.1.6v.3l-.2.3v-.8l.1-.4.1-.5.2-1.3 1-5.4v-.5l.1-.5.2-1 .1-.6.4-2.3.2-1.2.4-2v-.2h.2v-.2l-.1-.1v-.1"/>
      <path d="M500.6 980.6l-2-5.5-.2-.4-.1-.6-.2-.4h-.2l-.1.3v.3l2.2 6 .6.3m12.3 18l-.1-.6-7.2-4h-.2l-.2-.5-.2-.6-.1-.4-.1-.1v-.2l-.4-1-.4-1v-.4l-.2-.2v-.2l-2.9-7.9-.5-.5 3 8.6.1.2.1.2.2.4.3.8.1.2.2.6.8 2v.4l1 .5 6.7 3.7m11.3 5.6l-.1-.1h-.1l-1.2-.6-4.6-2.5-.4-.2-4.6-2.5.1.6 4.5 2.4.3.2 5.5 3 .4.1h.2v-.4"/>
      <path d="M514.9 1009.8l-.1.3h-.2v-.4l-.1-1-1.5-10.1v-.6l-1.1-7.5v-.2l-.3-.2-3.5-2.7-.2-.3-6.9-5.5-.5-.5-5.1-4.1-.8-.7.1-.3c.1 0 .2-.2.2 0l.2.1 5.2 4.2.6.4 7.2 5.9.2.3 1.8 1.4 1.9 1.6.2.2v.9l1.1 7.3.1.6 1.5 10.3v.6m26.5-41.8v.1m0-.5a1 1 0 0 0-.4.5l-.1.7v.3l.2.7c0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.5 0-1 .3-1.3m.3.7"/>
      <path d="M541.5 967.6h-.1l-.4.5-.1.7v.3l.2.7c0 .2.2.2.4 0l-.1.2c-.3.2-.4 0-.5-.1l-.2-.7c0-.8.2-1.5.8-1.6-.1 0-.1 0 0 0"/>
      <path d="M541.9 967.4a1 1 0 0 0-.5.6l-.1.1v.7c0 .3 0 .5.2.7 0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c-.1-.5 0-1 .3-1.2M542.2 967.7"/>
      <path d="M542 969.4l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.2l.4-.3-.4.5-.1.2v.6c0 .3 0 .5.2.7 0 .2.2.2.4.1h-.1c-.1 0 0 0 0 0"/>
      <path d="M542.3 967.1a1 1 0 0 0-.4.6l-.1.6v.2c0 .3 0 .5.2.7s.1.2.3.1l.1-.1a.2.2 0 0 1-.2-.2l-.1-.7c-.1-.4 0-1 .2-1.2m.3.3"/>
      <path d="M542.3 967v.2c-.2 0-.3.3-.4.5l-.1.6v.2c0 .3 0 .5.2.7s.1.2.3.1l.1-.1-.2.2h-.1a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.2-.1-.2 0-.3.2-.3"/>
      <path d="M542.7 966.8a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.6c0-.4.1-1 .3-1.3m.4.4"/>
      <path d="M542.8 966.8v.1l-.5.5v.8l.1.7c.1.2.2.2.4.1h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.1-.7c0-.4 0-1 .3-1.2 0-.2 0-.3.3-.3"/>
      <path d="M543.2 966.5c0 .1 0 .1 0 0a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1h.1a.2.2 0 0 1-.2-.3l-.2-.6c0-.4.1-.9.3-1.3"/>
      <path d="M543.2 966.5v.1l-.5.5v.8l.1.7c.1.2.2.2.4.1h.1l-.2.1-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3l.3-.3"/>
      <path d="M543.7 966.3c-.1 0-.1 0 0 0a1 1 0 0 0-.5.6v.8l.1.7c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c-.1-.5 0-1 .3-1.3m.3.4"/>
      <path d="M543.7 968.3l-.2.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5.1-1 .4-1.3l.4-.3-.4.5-.1.2v.6c0 .4.1.6.2.7 0 .2.2.2.4.1-.2.1-.1 0-.1 0"/>
      <path d="M544 966a1 1 0 0 0-.4.6l-.2.9c0 .3 0 .5.2.6 0 .2.2.2.4.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.5.2-1 .4-1.3m.3.9"/>
      <path d="M544.2 968l-.2.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.6c0-.5 0-1 .4-1.3l.4-.3-.4.5-.2.9c0 .3 0 .5.2.7 0 .1.2.1.4 0-.1.1-.1.1 0 0"/>
      <path d="M544.5 965.7a1 1 0 0 0-.4.6l-.1.4v.4c0 .3 0 .5.2.7 0 .2.2.2.3 0h.1l-.1-.1-.2-.7a2 2 0 0 1 .2-1.3m.3 1"/>
      <path d="M544.5 965.7v.1l-.4.5-.1.4v.4c0 .3 0 .5.2.7 0 .2.2.2.3 0h.1l-.1.2c-.1.2-.2 0-.2 0a.2.2 0 0 1-.2-.1l-.2-.7c0-.5 0-1 .4-1.3 0 0 0-.2.2-.2"/>
      <path d="M545 965.6a1 1 0 0 0-.4.5l-.2.8v.1c0 .3 0 .5.2.7 0 .2.1.2.3 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.2m.3.7v.1"/>
      <path d="M545 965.5c-.2.2-.4.3-.4.5l-.2.8v.1c0 .3 0 .5.2.7 0 .2.1.2.3 0h.1l-.2.2c-.2.2-.2 0-.2 0h-.1l-.2-.7c0-.5 0-1 .3-1.3l.4-.3"/>
      <path d="M545.4 965.3a1 1 0 0 0-.5.5l-.2.8v.1l.2.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.2-1 .4-1.2m.4.4v.4c-.1 0-.1-.3 0-.4"/>
      <path d="M545.5 967.3l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2l.4-.3h.1c-.2 0-.4.3-.5.4l-.2.8v.1l.2.7c.1.2.2.2.4 0 0 .2 0 .2 0 0"/>
      <path d="M545.9 965c-.2.3-.4.7-.4 1.2l.2.7.2.2h-.1c-.1.2-.3 0-.4 0l-.2-.7.2-.8c.1-.3.3-.5.5-.6-.1 0 0 0 0 0"/>
      <path d="M545.9 967l-.2.3h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2l.4-.3-.4.5c0 .1 0 .4-.2.7v.1l.2.7c.1.2.2.2.4 0-.1 0 0 0 0 0"/>
      <path d="M546.3 964.7a1 1 0 0 0-.5.6l-.1.4v.3l.2.7c0 .2.2.2.4.1l-.2-.2-.2-.7v-.6c0-.2.3-.4.4-.6m.4.7v.2c-.1 0 0-.1 0-.2m0-.1"/>
      <path d="M546.4 964.7h-.1l-.4.6-.1.4v.3l.2.7c0 .2.2.2.4.1v.1h-.1l-.2.2a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.2-.1-.1 0-.2.3-.3-.1 0-.1 0 0 0m.6.3h-.1l-.2.3v.6l.3-1m.1.4l-.2.6.1-.2.1-.4"/>
      <path d="M546.6 966l-.3.4v.2l.3-.7m.4-1.3c0-.2-.2-.2-.3-.1l-.4.5-.2.8v.3l.4-.4v-.4c0-.1 0-.2.2-.3l.3-.4m.2.7v-.2.3s0 .2-.2.3l-.1.3-.3.7c.2 0 .4-.3.4-.5l.2-1"/>
      <path d="M547 964.6c0-.1-.1-.2-.3-.2l-.4.3-.3.6-.1.6c0 .2 0 .5.2.7l.2.1v-1c0-.2 0-.5.2-.8 0-.3.2-.5.4-.5l.1.2m.2.7v-.2.2c0 .3 0 .5-.2.8s-.1.5-.3.5h-.1v.1c.3-.2.4-.4.4-.6l.2-.8"/>
      <path d="M546.7 965.8v.1l-.3.5-.1-.3.4-.3m2.1 12.7s0 .1 0 0c0 .1 0 0 0 0m0-.5a1 1 0 0 0-.4.6l-.2.9.2.7c0 .1.2.1.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.5.2-1 .4-1.3m.3.8c0 .1 0 .1 0 0 0 .1 0 .1 0 0m0-.5s0 .1 0 0c0 .1 0 0 0 0"/>
      <path d="M548.9 978l-.1.1-.4.5-.2.9.2.7c0 .1.2.1.4 0l-.1.1c-.3.2-.4 0-.5 0l-.2-.7c.1-.7.4-1.5.9-1.6"/>
      <path d="M549.4 978l-.1.3v-.3m0-.2a1 1 0 0 0-.4.5l-.1.2v.1l-.1.6c0 .3 0 .5.2.7 0 .2.2.2.4 0a.2.2 0 0 1-.1-.2l-.2-.7c0-.5 0-1 .4-1.2m.2.3"/>
      <path d="M549.4 977.8s-.1 0 0 0c-.2 0-.4 0-.5.2-.2.3-.4.8-.4 1.3 0 .3 0 .5.2.7l.2.2.2-.1.2-.2h-.1c-.1.2-.3 0-.4 0l-.2-.7v-.6c0-.2 0-.2.2-.3 0-.3.2-.4.4-.4l.2-.1"/>
      <path d="M549.7 977.5a1 1 0 0 0-.4.5l-.1.3v.6c0 .3 0 .5.2.7s.1.2.3 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4.1-.9.3-1.2m.3.7v.1m.1-.5"/>
      <path d="M549.8 979.6l-.2.2h-.2a.2.2 0 0 1-.1-.1l-.2-.7c0-.5 0-1 .3-1.2l.4-.3h.1c-.2 0-.4.3-.5.4v.9l.1.7c.1.2.2.2.4 0-.2 0-.2 0 0 0"/>
      <path d="M550.2 977.3a1 1 0 0 0-.5.5v.9l.1.7c.1.2.2.2.4 0h.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .3-1.2m.3.7s0 .1 0 0c0 .1 0 0 0 0"/>
      <path d="M550.3 979.3l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2l.4-.3h.1c-.2 0-.4.3-.5.5v.8l.1.7c.1.2.2.2.4 0-.2.2-.2 0 0 0-.2 0-.2 0 0 0"/>
      <path d="M550.7 977c-.2.3-.4.8-.4 1.2l.2.7.2.2h-.1c-.1.2-.3 0-.4 0l-.2-.7v-.2l.1-.4.1-.2c.1-.3.2-.5.5-.6-.1 0-.1 0 0 0"/>
      <path d="M550.7 977h-.1l-.4.6v.2l-.2.4v.2l.2.7c.1.2.2.2.4 0h.1l-.2.2h-.2a.2.2 0 0 1-.2-.1l-.2-.7c0-.5.1-1 .4-1.2 0-.2.2-.3.4-.3-.1 0 0 0 0 0"/>
      <path d="M551 976.7a1 1 0 0 0-.4.6l-.2.7v.1l.2.7c.1.2.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.7c0-.3.2-1 .4-1.2m.4.4l-.1.6v-.6"/>
      <path d="M551.2 976.7c-.1 0-.1 0 0 0-.2 0-.4 0-.5.3-.2.3-.4.8-.4 1.2l.2.7.2.2.2-.1s.2 0 .2-.2l-.1.1c-.1.1-.3 0-.4 0l-.2-.8.2-.8c.1-.3.2-.5.4-.5l.2-.1c-.1 0 0 0 0 0"/>
      <path d="M551.5 976.5a1 1 0 0 0-.4.6l-.2.8c0 .2 0 .5.2.7s.2.2.4.1a.2.2 0 0 1-.1-.3l-.2-.6c0-.5.2-1 .4-1.3m.2.8"/>
      <path d="M551.6 978.5l-.2.2-.2.1a.2.2 0 0 1-.2-.2l-.2-.7c0-.4 0-1 .4-1.2l.4-.3-.4.5-.2.9c0 .3 0 .4.2.6 0 .2.2.2.4.1-.1.1 0 0 0 0"/>
      <path d="M552 978.2v.1c-.1.1-.3 0-.4 0l-.2-.7v-.7l.2-.2c0-.1 0-.2.2-.3v.2l-.1.9.1.6.2.1"/>
      <path d="M552 978.2v.1c-.1.1-.3 0-.4 0l-.2-.7v-.7l.2-.2c0-.1 0-.2.2-.3h-.2c-.2.3-.4.8-.4 1.3 0 .2 0 .4.2.6l.2.2h.2l.2-.3m.2-2v-.2l-.3.2.1.2c.2 0 .2 0 .2-.2m.3 1.7a.2.2 0 0 1-.2-.1l-.2-.7v-.1l-.2-.3v.5l.1.7c.1.2.2.2.4.1h.1m.2-1.2"/>
      <path d="M552.2 976.1l-.2.1.1.1.1-.2m.3 1.8v.1h-.5l-.2-.7v-.1l.1-.5v-.2l-.2.9.1.6.2.2h.2l.3-.3M552.5 977.8l-.2-.3.2.3m0-.7v-.1l-.2-.5v.2l.2.4m.4-1.5s0 .1 0 0c-.2.1-.3.2-.4.5l.1.3c0-.3.1-.6.3-.8m.4.4l-.1.6v-.6"/>
      <path d="M552.3 976.5v-.2l-.2.3.1.2.1-.3m.3 1.4v-.1l-.2-.1v-.2l-.4-.5.2.8.2.1h.2m.3-2.3c-.2 0-.4.1-.5.3l.1.2.3-.4h.1m.4-.3a1 1 0 0 0-.4.6l-.2.8.3.8h.3v-.1a.2.2 0 0 1-.1-.2l-.2-.7c0-.4.1-.9.4-1.2m.3 1.3"/>
      <path d="M552.6 977.3v-.3.3m.8.2h-.1c-.1 0-.2.2-.3 0l.1.2.3-.2m0-2.1s-.1 0 0 0c-.2 0-.4 0-.5.2l-.3.7.2.4.2-.8c.1-.3.2-.5.4-.5-.1 0-.1 0 0 0m.4 1.5l-.1-.1m0-1.6a1 1 0 0 0-.4.5l-.1.2v.1l-.1.6c0 .3 0 .5.2.7 0 0 .2.2.3 0v-.2l-.2-.7v-.7l.4-.5m.3.6"/>
      <path d="M553.8 975.2h-.1l-.4.5-.1.2v.1l-.1.6c0 .3 0 .5.2.7 0 0 .2.2.3 0v.2h-.2a.2.2 0 0 1-.2-.2l-.2-.7c0-.5.1-1 .4-1.2l.4-.2m.5.2l-.1.2-.1.2v.3l.2-.7m.2.3v-.2l-.2 1 .2-.4v-.4"/>
      <path d="M553.9 976.6l-.2.2.2-.2m.5-1.6l-.3-.1-.4.5-.2.8v.3l.4-.4V975.5c0-.2.2-.1.3-.2l.2-.3m.2.6v-.3.3c0 .1 0 .3-.2.4s0 .2-.1.3h-.1l-.3.7h.2l.3-.5.1-.3.1-.6"/>
      <path d="M554.4 975l-.2-.1c-.1 0-.2 0-.4.3l-.3.5-.1.7c0 .2 0 .5.2.7l.2-.2-.1-.1v-.4c0-.3 0-.6.2-.9 0-.2.2-.4.4-.4 0-.2 0-.2.1-.1m.2.6v-.3.9l-.2.3c0 .3-.1.5-.3.5h-.2c.4-.2.4-.4.5-.6.2-.2.3-.5.2-.8"/>
      <path d="M554 976.2l-.1.4-.2.2v-.1l.4-.5m-7.9-9.2v.2-.2m17.5 28.6l-.2.2h-.1v-1l-1-1.8-.3-.3-1.6-2.7-.2-.2-.5-1v-.1l-.5-.1v-.2l-.2-.7-5.3-8.9-.5-.3h-.1v-.2l-.5-1.3v-.2l-.3-.4v-.2l-.2-.2-5.2-8.6-.4-.4h-.1l5.4 9.1.1.1.1.2.1.2.2.3.3.5.2.3.1.1 6.8 11.5.5.8.1.2v.1l.2.3 1.5 2.6.2.3.8 1.3.3.5.2.3v.1h.3c-.2 0-.2-.2-.2-.3m-15.1-30l-1-1.2-.2.1v.2l.9 1 .3-.1m5.3 6.6l-5-5.8v.2l5 5.6m1.4 1l-1.3-1.6 1.3 1.5m1.8 2.3l-.2-.3-1.5-1.8 1.7 2m5.1 5.8l-4.2-4.8h-.1l4.2 5 .1-.2m3 3.9l-.2-.6-2.7-3 3 3.6m1.2 1.1l-.8-1-.2.1 1 1.2v-.3"/>
      <path d="M555.3 973l-1.3-1.5-4.6-5.4-.6-.3.2.4 5 5.8 1.1 1.3.1-.2h.1m2.2 2.7l-.4-.5-1.7-2-.2.3 1 1.2 1.3 1m4.6 5.2l-4.2-4.9h-.2l.1.5 4.1 4.9.1-.3.1-.2m3.2 3.9l-3-3.6h-.2v.4l2.4 2.9.8.4v-.1m5.3 6.4l-.1-.4-.7-.8-.6-.6-.2-.2-1.7-2-.2-.2v-.3l-.7-.7-1-1.1-.1.4.6.7.6.8h.1l.2.3.1.2.2.1 1.7 1.9.1.2 1.1 1.2.1.1.5.4m.3 0l-.1.2h-.2v.2l.3-.1v-.2m-11.3-20.9l-9.8-7.7.5.8 7.9 6.4 1.3.5h.1m14.7 11.9s0-.1 0 0l-14.6-11.9v.2l.3.6 7.7 6.2h.5v.3l.2.2 5.5 4.5.4-.1-.2.2.1-.1.1-.1"/>
      <path d="M553.2 978.8l-.1-.2v.2m2.7-5.7l-.2-.2-.4.1v.2l-.2.2v.3l.1.2.1-.3.1-.3h.1l.4-.2m1.7 3.2l-.2-.2-3.7 2.2.4-1v-.1l.2-.7.3-.9.1-.2.4-1-.2-.2-.3.9-.2.3-.2.8v.1l-.2.4-.1.3-.1.3-.1.2-.3 1v.2l.2.1 4-2.5m2-5.2v-.3h-.3l-3.2 1.9.2.2 3.2-1.9-1.6 4.5.2.3 1.5-4.8m.1-.3v-.2.2m-.4 18.2s0-.1 0 0v-.2.1m4.4-8.3l-.1-.3-1.2.7v.1l-.2.1v.3l-.6 1.4.2.1.5-1.3.1-.4h.2l1-.7m1.8 4.7h-.3l-5.4 3.1 2-5-.2-.2-2 5.1.1.4h.2l5.6-3.3m0-.3v-.1m.2.2h-.1m2.7-7l-.1-.3h-.3l-4 2.4v.2l4-2.4-2.3 6.6v.3h.2l2.5-6.8m0-.3v-.2.2m-19.5-12.3l-.3.2-1.7 1.1.3-.8.2-.6.1-.3.2-.4.1-.2.2-.1 1.8-1-1 2m1.3-2.6l-2.5 1.4v.2l-.2.3v.3l-.3.8v.1l-.2.6-.1.2v.4-.1l.2-.1 2-1v-.4s.2-.1.2 0v-.1h.2l.8-2.4v-.4.2-.1"/>
      <path d="M557.8 975.8l-.2-.3-1.5-2.5-.2-.3-3-5 6.2 3h.3l.1.2 2.3 5.5-4-.6m7.9 9l-.2-.3-1.7-4.2-.1-.2-1.4-3.3 5.4.9h.3v.3l1.1 5.7-3.4 1m7.9-1l-.3.7-.8 2-.2.5-1.3 3.5-.2.4-.1.2v-.2l-.2-1.2-.3-1.6-.1-.4-.3-1.5v-.5l-.2-.4-.2-1v-.6l3.4-1 1.1-.3-.3 1.4m.6-1.3h-.5l-4.4 1.3-1.1-5.8-.1-.2v-.2h-.1l-.5-.1-5.5-1-2.2-5.3-.3-.6-1.4-.6-5.6-2.6-2.3-3.7-.5-.7v-.1.4l2.4 3.9-3.2-1.5h-.3v.3l.7.3 3 1.5 3.2 5.3.2.2 1.1 2 .2.2.4.6.1.1v.1h.3l4 .7 1.4 3.4v.3l1.6 3.8.3.6.1.1h.3l3.4-1 .1.7.2 1v.2l.1.5.4 1.8.1.4.2.8.2 1v.6l.2.4h.2v.3-.2l.3-.5 1.4-3.8.2-.4 1-2.7v-.4l.4-1 .1-.1.2-.3"/>
      <path d="M564.4 989.9l-2.4-.6-1.5-.4-.9-.2h-.2v.2h-.2.4l.4.2 1.5.4 2.8.6.1-.2m6.5 1.6v-.2l-.2-.1-.4-.1-2-.5h-.2l-1.6-.5h-.1l-.3-.2-1.2-.2-.3-.1v.3l1.3.2.3.1.2.1 1.4.3.3.1 1.8.5h.7l.3.3"/>
      <path d="M565.5 985v.2l-.1.4-.2 1-.2 1.3-.4 2v.6l-.6 3.6-.1.6-.1.2-.1.7v.2l-.1.2-.1-.1v-.5l.2-.6v-.9l.6-3 .1-.7.1-.3.3-1.9.2-1.2.2-1.4v-.4h.3c0-.1 0-.1 0 0"/>
      <path d="M550.3 970l-1.2-3.5-.1-.2-.2-.4-.1-.2h-.1l-.1.1v.2l1.3 3.8.5.3m7.9 11.4l-.1-.4-4.6-2.5h-.1l-.1-.4-.2-.5-.1-.1-.3-.8-.2-.4v-.3l-.2-.2-1.9-5.3-.4-.3 2.1 5.7v.1l.1.2.1.2.2.5.1.3.5 1.3v.2l.6.3 4.5 2.4m7.2 3.6l-.9-.5-3-1.7h-.1l-3-1.7v.4l2.9 1.5.2.1 3.5 2h.3v-.1"/>
      <path d="M559.4 988.7v.2h-.2v-.2l-.1-.7-1-6.5-.1-.4-.7-4.8-.2-.2-2.3-1.8-.2-.2-4.3-3.5-.4-.2-3.2-2.6-.5-.4v-.4h.2l3.2 2.8.4.3 4.6 3.7.2.2 1.2.9 1.2 1 .1.1v.1l.1.5.7 4.7v.4l1 6.6.3.3"/>
    </g>
    <path fill="#878787" d="M472.5 1102.7c.4.4 1 .5 1.3.8 10.1 7.4 9 18.1-2.6 24a42.4 42.4 0 0 1-37.8-1.4c-4.2 2.1-13.4 7-14.7 7.4-.8.2-2 0-3-.5-.7-.6-1.3-1.3-.8-2.2 1-.5 10.5-5.2 14.8-7.5-8.2-7.2-6.4-17 4.5-22.4 11.2-5.9 28-4.8 38.3 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M419.6 1132.9c-.4 1.5-4.4 2.5-6.1-.4V1108l6.1.4c0-.1.3 22.2 0 24.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M446.8 1083a28 28 0 0 1-30 28.4c-16.5-1-30-15.3-30-32.1s13.5-29.7 30-28.7a32.7 32.7 0 0 1 30 32.3z"/>
    <path opacity=".3" fill="#B2B2B2" d="M417 1051.7h-3.4c5.4 7.2 8.7 16 8.7 25.5 0 13-6.2 24.3-15.7 30.9 3.3 1.4 6.8 2.4 10.4 2.6a27.2 27.2 0 0 0 29.1-27.7c0-16.3-13-30.3-29-31.3z"/>
    <g>
      <path fill="#878787" d="M425.4 1137c.3.4 1 .5 1.2.8 10.2 7.4 9 18.1-2.6 24a42.4 42.4 0 0 1-37.7-1.4c-4.3 2.1-13.5 7-14.7 7.4-.9.2-2 0-3-.6-.8-.5-1.3-1.2-.9-2l14.8-7.6c-8.1-7.2-6.4-17 4.5-22.4 11.2-5.9 28-4.8 38.4 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M372.4 1167.1c-.3 1.6-4.4 2.5-6.1-.3v-24.5l6.1.4s.3 22.1 0 24.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M399.6 1117.2a28 28 0 0 1-30 28.5c-16.5-1-30-15.3-30-32.1s13.5-29.7 30-28.7c16.7 1 30 15.6 30 32.3z"/>
      <path opacity=".3" fill="#B2B2B2" d="M369.9 1086h-3.4c5.4 7.2 8.6 16 8.6 25.4 0 13.1-6.1 24.3-15.6 31a30 30 0 0 0 10.4 2.6 27.2 27.2 0 0 0 29-27.7c0-16.3-13-30.3-29-31.3z"/>
    </g>
    <g>
      <path fill="#878787" d="M519.7 1136.4l1.1.8c9.3 6.8 8.3 16.7-2.4 22-10 5.2-25 4.5-34.6-1.2-4 2-12.3 6.4-13.5 6.8-.8.2-1.8 0-2.7-.5-.7-.5-1.2-1.2-.8-2l13.6-7c-7.5-6.6-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M471.2 1164c-.4 1.5-4 2.4-5.6-.3v-22.5l5.6.4s.2 20.5 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M496 1118.4a25.7 25.7 0 0 1-27.5 26.2c-15.2-.9-27.5-14.1-27.5-29.6s12.4-27.2 27.5-26.3a30 30 0 0 1 27.5 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M468.8 1089.6h-3.1c5 6.7 7.9 14.7 7.9 23.4 0 12-5.7 22.3-14.4 28.4 3 1.4 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.8 28.8 0 0 0-26.6-28.8z"/>
    </g>
    <g>
      <path fill="#878787" d="M588.5 1099.5l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2l-13.4 6.9c-.8.2-1.9 0-2.7-.6-.7-.5-1.3-1.2-.9-2l13.7-7c-7.5-6.6-5.9-15.5 4-20.6a38.5 38.5 0 0 1 35.2 1.7z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M540 1127.2c-.4 1.4-4 2.3-5.6-.4v-22.5l5.5.4s.3 20.5 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M565 1081.4a25.7 25.7 0 0 1-27.7 26.2c-15.1-.9-27.4-14.1-27.4-29.6s12.4-27.2 27.4-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M537.5 1052.7h-3c5 6.6 7.8 14.7 7.8 23.3a34 34 0 0 1-14.4 28.4c3 1.4 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.8 28.8 0 0 0-26.6-28.7z"/>
    </g>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M811.5 969.1l160.2-194.8 88.3 56.3-212.6 123z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M919.2 890.4l81.7-46.2-64.3-35.9-81.5 46.8z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873 862l64.2 35.3v-17.4l-64-35.3zm64.2 35.3l63.7-35.8v-17.3l-63.6 35.7z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M874.2 845.6l8 4.4v17l-8.1-4.5zm9 5l8 4.4v17l-8-4.4zm9.2 5l8 4.4v17l-8-4.5zm9.1 5.1l8 4.3v16.9l-8-4.4zm9.1 5l8 4.4v16.8l-8-4.4zm9.1 5l8 4.3v16.9l-8.1-4.3zm9.1 5l8 4.3v17l-8-4.5zM1000.4 844.7l-8.1 4.5v17l8-4.6zm-9.2 5.1l-8 4.5-.1 17 8-4.6zm-9.1 5.2l-8 4.6-.1 16.8 8-4.5zm-9.1 5.2l-8 4.5-.2 17 8.1-4.6zm-9.2 5.1l-8.1 4.6v16.9l8-4.5zm-9.2 5.2l-8 4.6-.1 16.8 8-4.5zm-9.1 5.2l-8 4.6V897l8-4.5zM937.3 860.3l63.6-35.6-64.3-36L873 825z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873 842.3l64.2 35.4v-17.4l-64-35.3zm64.2 35.4l63.7-35.8v-17.2l-63.6 35.6z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M874.2 826l8 4.4v17l-8.1-4.5zm9 5l8 4.5v16.8l-8-4.4zm9.2 5l8 4.5v16.8l-8-4.3zm9.1 5l8 4.4v17l-8-4.5zm9.1 5l8 4.4v17l-8-4.5zm9.1 5l8 4.4v17l-8.1-4.5zm9.1 5l8 4.5v16.8l-8-4.3zM1000.4 825.1l-8.1 4.6v16.9l8-4.6zm-9.2 5.1l-8 4.6-.1 17 8-4.7zm-9.1 5.3l-8 4.4-.1 17 8-4.6zm-9.1 5.1l-8 4.5-.2 17 8.1-4.6zm-9.2 5.2l-8.1 4.5v17l8-4.6zm-9.2 5.1l-8 4.6-.1 16.9 8-4.6zm-9.1 5.1l-8 4.7v16.8l8-4.5zM937.3 840.4l63.6-35.7-64.3-35.7-63.5 36.2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873 822.5l64.2 35.3v-17.4l-64-35.2zm64.2 35.3l63.7-35.7v-17.4l-63.6 35.7z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M874.2 806.1l8 4.4v17L874 823zm9 5l8 4.5v16.8l-8-4.4zm9.2 5.1l8 4.3v17l-8-4.5zm9.1 4.9l8 4.4v17l-8-4.5zm9.1 5.1l8 4.3v17l-8-4.5zm9.1 5l8 4.3v17l-8.1-4.4zm9.1 4.8l8 4.5v17l-8-4.4zM1000.4 805.3l-8.1 4.5v16.9l8-4.5zm-9.2 5.1l-8 4.6-.1 16.8 8-4.5zm-9.1 5.2l-8 4.5-.1 17 8-4.6zm-9.1 5.1l-8 4.5-.2 17 8.1-4.6zm-9.2 5.1l-8.1 4.6v17l8-4.6zm-9.2 5.2l-8 4.5-.1 17 8-4.6zm-9.1 5.2l-8 4.5v16.9l8-4.5zM937.3 820.5l63.6-35.6-64.3-36-63.5 36.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873 802.6l64.2 35.2v-17.3l-64-35.2zm64.2 35.2l63.7-35.6v-17.3l-63.6 35.6z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M874.2 786.2l8 4.5v16.9L874 803zm9 5l8 4.5v16.9l-8-4.5zm9.2 5l8 4.5v16.9l-8-4.5zm9.1 5l8 4.4v17l-8-4.5zm9.1 5l8 4.4v17l-8-4.5zm9.1 5l8 4.4v17l-8.1-4.4zm9.1 5l8 4.4v17l-8-4.5zM1000.4 785.4l-8.1 4.5v16.9l8-4.5zm-9.2 5.1l-8 4.6-.1 16.9 8-4.5zm-9.1 5.2l-8 4.5-.1 16.9 8-4.5zm-9.1 5.1l-8 4.6-.2 16.9 8.1-4.6zm-9.2 5.2l-8.1 4.5v17l8-4.7zm-9.2 5.1l-8 4.5-.1 17 8-4.6zm-9.1 5.2l-8 4.5v17l8-4.6zM937.5 800.7l63.6-35.6-64.2-35.9-63.2 37z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873.7 783.6l63.8 34.5v-17.4l-63.8-34.5zm63.8 34.5l63.6-35.6v-17.4l-63.6 35.6z"/>
    <path d="M874.4 766.8l8 4.5v16.9l-8.1-4.5zm9.1 5l8 4.5v16.9l-8.1-4.5zm9.1 5l8 4.5v17l-8-4.6zm9.1 5l8 4.4v17l-8-4.4zm9.2 5l8 4.4v17l-8.1-4.5zm9.1 5.2l8 4.3-.1 17-8-4.5zm9 4.8l8 4.4v17l-8-4.4zM1001.1 765.5l-8 4.4v17l8-4.6zm-9.1 5.1l-8 4.5v17l8-4.6zm-9.1 5.2l-8 4.5v16.9l7.9-4.5zm-9.1 5.1l-8.1 4.5-.1 17 8-4.5zm-9.3 5.1l-8 4.7v16.8l8-4.5zm-9.1 5.1l-8 4.7-.1 16.9 8-4.6zm-9.1 5.3l-8 4.5v17l7.9-4.6zM873.7 763.8l63.8 35v-17.4l-63.8-34.8zM937.5 798.8l63.6-35.7.1-17.3-63.6 35.6z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M874.3 747.2l8 4.4v16.9l-8.1-4.4zm9 4.9l8 4.5v16.9l-8-4.4zm9.1 5l8 4.5v16.9l-8-4.5zm9.1 5l8.1 4.5v16.9l-8-4.4zm9.2 5l8 4.5v17l-8.1-4.5zm9.1 5.1l8 4.3v17l-8-4.4zm9.2 5l7.9 4.4v16.8l-8-4.4zM1000.8 746.2l-8 4.6-.1 17 8-4.6zm-9.2 5.2l-8 4.6v16.8l8-4.5zm-9.1 5.2l-8 4.5V778l8-4.5zm-9.1 5.2l-8 4.5v16.9l8-4.5zm-9.1 5l-8.1 4.7v16.9l8-4.7zm-9.2 5.2l-8 4.5-.1 17 8-4.6zm-9.1 5.2l-8 4.5v17l8-4.6z"/>
    </g>
    <path opacity=".4" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873.8 934.6l-49.6 4-78.6-45.7 79.1-44.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M919.5 890.5l17.9-9.8L873 845l-17.7 10.4zm-110.1 8l64.2 35.4v-17.4l-64-35.3zm110.1 9.5l17.9-9.9v-17.4l-17.8 10z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.6 882.2l8 4.4v17l-8.1-4.5zm9 5l8 4.4v17l-8-4.4zm9.2 5l8 4.4v16.9l-8-4.4zm9.2 5.1l8 4.3v16.9l-8.1-4.4zm9 5l8 4.3v16.9l-8-4.4zm9.1 5l8 4.3v16.9l-8-4.3zm9.1 5l8.1 4.3-.1 17-8-4.5zM919.5 908l-40.8-23.5v-57.1l40.8 13.2zm17.3-26.7l-8 4.5v17l8-4.6zm-9.1 5.1l-8.1 4.5v17l8-4.6zM891 907l-8 4.6v16.9l8-4.5zm-9 5.3l-8.1 4.5v16.9l8-4.5z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873.7 896.9l63.7-35.6-64.4-36-63.5 36.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M809.4 879l64.2 35.3v-17.4l-64-35.3zM919.5 888.6l17.9-10v-17.3l-17.8 10z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.6 862.6l8 4.4v17l-8.1-4.5zm9 5l8 4.4v17l-8-4.5zm9.2 5l8 4.4v17l-8-4.5zm9.2 5l8 4.4v16.9l-8.1-4.4zm9 5.1l8 4.3v17l-8-4.5zm9.1 5l8 4.3v17l-8-4.5zm9.1 5l8.1 4.3-.1 16.9-8-4.3zM936.8 861.7l-8 4.5v17l8-4.6zm-9.1 5.1l-8.1 4.6v17l8-4.7zM873.7 877l63.7-35.7-64.4-35.8-63.5 36.3z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M809.4 859.1l64.2 35.3V877l-64-35.2zm64.2 35.3l63.8-35.7v-17.4L873.7 877z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.6 842.7l8 4.4v17l-8.1-4.5zm9 5l8 4.4v17l-8-4.5zm9.2 5.1l8 4.3v17l-8-4.5zm9.2 4.9l8 4.4v17l-8.1-4.5zm9 5.1l8 4.3v17l-8-4.5zm9.1 5l8 4.3v17l-8-4.4zm9.1 4.9l8.1 4.4-.1 16.9-8-4.3zM936.8 841.9l-8 4.4v17l8-4.5zm-9.1 5.1l-8.1 4.5v16.9l8-4.6zm-9.2 5.1l-8 4.5-.1 17 8-4.6zm-9.1 5.2l-8 4.5-.1 17 8-4.6zm-9.1 5.1L892 867v17l8-4.6zm-9.3 5.2l-8 4.5v17l8-4.6zm-9 5.2l-8.1 4.5v16.9l8-4.5zM873.7 857.1l63.7-35.6-64.4-36-63.5 36.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M809.4 839.2l64.2 35.2v-17.3l-64-35.2zm64.2 35.2l63.8-35.6v-17.3L873.7 857z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.6 822.8l8 4.5v16.9l-8.1-4.5zm9 5l8 4.4v17l-8-4.5zm9.2 5l8 4.4v17l-8-4.5zm9.2 5l8 4.4v17l-8.1-4.5zm9 5l8 4.4v17l-8-4.5zm9.1 5l8 4.4v17l-8-4.4zm9.1 5l8.1 4.4-.1 17-8-4.5zM936.8 821.9l-8 4.6v16.9l8-4.5zm-9.1 5.1l-8.1 4.6v17l8-4.6zm-9.2 5.2l-8 4.6-.1 16.9 8-4.5zm-9.1 5.1l-8 4.6-.1 17 8-4.7zm-9.1 5.2l-8.2 4.6v17l8-4.7zm-9.3 5.2l-8 4.5v17l8-4.6zm-9 5.2l-8.1 4.5v17l8-4.6zM873.8 836.6l63.7-35.7L873 765l-63 37zM810 819.3l63.7 34.7v-17.4L810 802zm63.7 34.7l63.7-35.8V801l-63.6 35.7z"/>
    <path d="M810.7 802.7l8 4.4V824l-8.1-4.4zm9 5l8 4.4V829l-8-4.4zm9.1 5l8.1 4.4V834l-8-4.4zm9.2 4.9l8 4.5V839l-8-4.4zm9 5l8 4.5V844l-8-4.5zm9.2 5l8 4.5V849l-8-4.5zm9.1 5l8 4.5V854l-8-4.4zM937.4 801.2l-8 4.5-.1 17 8-4.6zm-9.2 5.1l-8 4.6v17l8-4.7zm-9.1 5.3l-8 4.5v17l8-4.7zm-9.1 5.1l-8 4.5v17l8-4.6zm-9.1 5.2l-8.1 4.5v16.9l8-4.5zm-9.2 5.1l-8.1 4.6v16.9l8-4.6zm-9.2 5.2l-8 4.5v16.9l8-4.4z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M873.8 817.2l127.8-71.2-64.2-36L810 782.4z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810 799.6l63.8 35v-17.4L810 782.3zm63.8 35l63.7-35.7v-17.4l-63.7 35.7z"/>
    <path d="M810.5 783l8 4.3v16.9l-8-4.3zm9.1 5l8 4.3v16.9l-8-4.3zm9.1 5l8.1 4.4v16.9l-8.2-4.4zm9.2 5l8 4.4v16.8l-8.1-4.3zm9.1 5l8 4.4v16.9l-8.1-4.4zm9 5l8 4.3v16.9l-8-4.3zm9.2 5l8 4.4v16.9l-8-4.5zM937 782l-8 4.6v17l8-4.7zm-9 5.2l-8.1 4.5v17l8-4.6zm-9.2 5.1l-8 4.6v17l8-4.7zm-9.1 5.2l-8 4.5-.2 17 8.1-4.5zm-9.2 5.2l-8 4.5v17l8-4.6zm-9.1 5.2l-8 4.4-.1 17 8-4.5zm-9.2 5.1l-8 4.6v16.9l8-4.7z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M874.2 812.7l118.5-67.2-55-30.5-118.5 67.2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.3 952.1l80.9-45.1-64.4-36-80.7 45.9z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M746 934.1l64.2 35.4.1-17.4-64.2-35.2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.2 969.5l63.8-35.8v-17.3L810.3 952z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M747.2 917.7l8 4.5v17l-8.1-4.5zm9 5.1l8.2 4.4-.1 16.8-8-4.3zm9.2 5l8.1 4.4v17l-8.2-4.5zm9.2 5l8 4.4v17l-8.1-4.5zm9.1 5l8 4.4v17l-8.1-4.5zm9 5l8 4.4v17l-8-4.4zm9.1 5l8.1 4.4v17l-8-4.5z"/>
    <path d="M873.4 916.9l-8 4.5v17l8-4.6zm-9.1 5.1l-8 4.6v16.9l8-4.5zm-9.2 5.2l-8 4.5-.1 17 8-4.7zm-9.1 5.2l-8 4.5-.1 17 8-4.7zm-9.1 5.1l-8.2 4.5v17l8.1-4.6zm-9.2 5.2l-8 4.5v17l8-4.6zm-9.1 5.2l-8.1 4.5v16.9l8-4.6zM810.3 932.5L874 897l-64.4-36-63.5 36.4z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M746 914.6l64.2 35.3.1-17.4-64.2-35.2z"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.2 949.9l63.8-35.7v-17.3l-63.7 35.6z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M747.2 898.2l8 4.4v17L747 915zm9 5l8.2 4.4-.1 17-8-4.5zm9.2 5l8.1 4.4v17l-8.2-4.5zm9.2 5l8 4.4v17l-8.1-4.5zm9.1 5.1l8 4.3v17l-8.1-4.5zm9 4.9l8 4.4v17l-8-4.5zm9.1 5l8.1 4.4v17l-8-4.4z"/>
    <path d="M873.4 897.3l-8 4.5v16.9l8-4.4zm-9.1 5.2l-8 4.6v16.8l8-4.5zm-9.2 5.1l-8 4.6-.1 16.9 8-4.6zm-9.1 5.1l-8 4.6-.1 17 8-4.7zm-9.1 5.3l-8.2 4.4v17l8.1-4.6zm-9.2 5.1l-8 4.6v17l8-4.7zm-9.1 5.2l-8.1 4.5v17l8-4.6z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.3 912.6L874 877l-64.4-35.8-63.5 36.3z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M746 894.7l64.2 35.3.1-17.4-64.2-35.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.2 930l63.8-35.7v-17.4l-63.7 35.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M747.2 878.3l8 4.5v16.9l-8.1-4.4zm9 5l8.2 4.5-.1 16.9-8-4.5zm9.2 5l8.1 4.5v16.9l-8.2-4.5zm9.2 5l8 4.4v17l-8.1-4.5zm9.1 5.1l8 4.3v17l-8.1-4.5zm9 4.9l8 4.4v17l-8-4.5zm9.1 5l8.1 4.4v17l-8-4.5z"/>
      <path d="M873.4 877.5l-8 4.4v17l8-4.5zm-9.1 5.1l-8 4.5V904l8-4.5zm-9.2 5.2l-8 4.5-.1 16.9 8-4.5zm-9.1 5.1l-8 4.6-.1 16.9 8-4.5zm-9.1 5.1l-8.2 4.6v17l8.1-4.7zm-9.2 5.2l-8 4.5v17l8-4.6zm-9.1 5.2l-8.1 4.5v17l8-4.6z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    </g>
    <g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.3 892.8L874 857l-64.4-35.8-63.5 36.3z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M746 874.8l64.2 35.2.1-17.2-64.2-35.3z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.2 910l63.8-35.6V857l-63.7 35.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M747.2 858.5l8 4.4v16.9l-8.1-4.4zm9 5l8.2 4.4-.1 16.9-8-4.4zm9.2 5l8.1 4.4v16.9l-8.2-4.4zm9.2 5l8 4.4v16.9l-8.1-4.4zm9.1 4.9l8 4.5v16.9l-8.1-4.5zm9 5l8 4.5v16.9l-8-4.4zm9.1 5l8.1 4.5v16.9l-8-4.5z"/>
      <path d="M873.4 857.5l-8 4.5v17l8-4.5zm-9.1 5.2l-8 4.5v17l8-4.6zm-9.2 5.1l-8 4.6-.1 16.9 8-4.5zM846 873l-8 4.5-.1 17 8-4.6zm-9.1 5.2l-8.2 4.6v16.8l8.1-4.5zm-9.2 5.1l-8 4.6v16.9l8-4.6zm-9.1 5.1l-8.1 4.6v17l8-4.7z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    </g>
    <g>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.4 872.2l63.7-35.7-64.4-35.8-63 37z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M746.6 855l63.7 34.5v-17.3l-63.7-34.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.3 889.5l63.7-35.6v-17.4l-63.6 35.7z"/>
      <path d="M747.3 838.2l8 4.5v16.8l-8.1-4.4zm9.1 5.1l8 4.4v16.8l-8-4.4zm9.1 5l8 4.4v17l-8-4.5zm9.1 5l8 4.4v16.8l-8-4.3zm9.1 5l8 4.3v17l-8-4.4zm9.3 5l7.8 4.4v16.9l-8-4.4zm9 5l8 4.4v16.9l-8.2-4.3z" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
      <path d="M874 836.9l-8 4.5v16.9l8-4.5zm-9 5.1l-8.2 4.6v16.9l8-4.6zm-9.3 5.2l-8 4.5v16.9l8-4.6zm-9.1 5.1l-8 4.5v17l8-4.6zm-9.1 5.1l-8 4.6v17l7.9-4.6zm-9.1 5.2l-8.2 4.5v17l8-4.6zm-9.3 5.2l-8 4.5v16.9l8-4.4z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    </g>
    <g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.5 852.8l63.7-35.6-63.2-35.5-64.4 36.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M746.6 835.2l63.8 35v-17.4l-63.8-34.9zm63.8 35l63.7-35.6v-17.4l-63.6 35.6z"/>
      <path d="M747.1 818.6l8 4.3v17l-8-4.4zm9.1 5l8 4.3v17l-8-4.4zm9.1 4.9l8.1 4.4v17l-8.1-4.5zm9.2 5l8 4.5v16.8l-8-4.3zm9.1 5l8 4.5v17l-8.1-4.5zm9.1 5.1l8 4.3v17l-8-4.4zm9.1 5l8 4.4v16.9l-8-4.4z" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
      <path d="M873.7 817.6l-8 4.7V839l8-4.5zm-9.1 5.2l-8 4.6-.1 16.9 8-4.6zm-9.2 5.2l-8 4.4v17l8-4.6zm-9.1 5.1l-8 4.5v17l8-4.6zm-9.1 5.1l-8 4.6v17l7.9-4.7zm-9.2 5.3l-8 4.4-.1 17 8-4.5zm-9.2 5.1l-8 4.6V870l8-4.5z" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    </g>
    <g>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M810.6 847.5l54.2-31-54.9-30.4-54.2 30.9z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M853.2 818.1l-9.9 5.9v-12.5l10-5.9zm-9.9 5.9l-10-5.9v-12.5l10 5.9zm9.9-18.4l-9.9-5.6-10 5.6 10 5.9z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M813.2 838.5v.3l8.7-5.1v-.1zm-.2-3.1v.2l8.7-5v-.2zm0-3.5v.2l8.8-5.1v-.1zM834 815.5v.1l8.7 5.1v-.2zm0-6.9v.1l8.7 5.1v-.2zm-.2 3.4v.2l8.9 5v-.1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M795.8 820l29-17-16.7-9.6-29 16.9z"/>
      <path fill="#DADADA" d="M779 814.3l16.8 9.5V820l-16.7-9.7z"/>
      <path fill="#B2B2B2" d="M795.8 823.8l29-16.8v-4l-29 17z"/>
      <path fill="#DADADA" d="M798 812.3l18.7-10.9-9.6-5.5-18.8 10.9zm-9.7-2l9.6 5.4v-3.4l-9.6-5.5z"/>
      <path fill="#B2B2B2" d="M798 815.7l18.7-10.8v-3.5L798 812.3z"/>
    </g>
    <g>
      <path fill="#B2B2B2" d="M979.5 745.2l-43-25-43.4 25 43.1 25z"/>
      <defs>
        <path id="cw" d="M979.5 745.2l-43-25-43.4 25 43.1 25z"/>
      </defs>
      <clipPath id="cx">
        <use xlink:href="#cw" overflow="visible"/>
      </clipPath>
      <path clip-path="url(#cx)" fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M917.7 739.3l10.2 6-9.7 5.5 8.2 4.7 9.7-5.6 10.4 6 8.5-4.8-10.3-6 9.7-5.6-8.2-4.7-9.7 5.5-10.3-6-8.5 5"/>
      <defs>
        <path id="cy" d="M979.5 745.2l-43-25-43.4 25 43.1 25z"/>
      </defs>
      <clipPath id="cz">
        <use xlink:href="#cy" overflow="visible"/>
      </clipPath>
      <path clip-path="url(#cz)" fill="#DADADA" d="M953.3 755.1a37.4 37.4 0 0 1-34 0c-9.4-5.4-9.4-14.3 0-19.8a37.4 37.4 0 0 1 34.1 0c9.3 5.5 9.3 14.4-.1 19.8m-38.5-22.4c-12 6.9-12 18.1-.1 25a48.3 48.3 0 0 0 43.2 0c12-7 12-18.2.1-25s-31.3-6.9-43.2 0"/>
      <g>
        <path fill="none" stroke="#3C3C3B" stroke-miterlimit="10" d="M979.5 745.2l-43-25-43.4 25 43.1 25z"/>
      </g>
    </g>
    <g>
      <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M837.9 827l-10 5.8v-12.5l10-5.7z"/>
        <path d="M828 832.8l-10.1-5.7v-12.5l10 5.7z"/>
        <path d="M837.9 814.6l-10-5.8-10 5.8 10 5.7z"/>
      </g>
    </g>
    <path fill="#DADADA" d="M931 745.2l5.3 3.1 1.4-.8-2-1.2 1.7-1 2.2 1.2 1.4-.9-5.4-3-1.5.7 2 1.2-1.7 1-2-1.1-1.5.8"/>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M891 887.5l-8 4.6V909l8-4.6zm-9 5.2l-8.1 4.6V914l8-4.5z"/>
    <g>
      <path fill="#3C3C3B" d="M824.6 812.3c-2 1-2.1 3-.2 4.2 2 1.2 5.2 1.3 7.3.3 2-1 2.1-3 .2-4.2s-5.3-1.5-7.3-.3"/>
      <path fill="#9D9D9C" d="M825 812.6l2 1.6-3.4-.3.3 1.6 3.6-.3-1.5 1.7 2.7.3V815l2.5 1.5 1.5-1.4-3.6-1 3.2-.7-2-1.2-2.2 1.7-.6-2.1-2.5.7"/>
    </g>
    <g>
      <path fill="#3C3C3B" d="M839.9 803.2c-2 1.1-2.1 3-.2 4.3 2 1.2 5.2 1.3 7.3.3 2.1-1.1 2.1-3 .2-4.3a8.4 8.4 0 0 0-7.3-.3"/>
      <path fill="#9D9D9C" d="M840.3 803.5l2 1.8-3.4-.3.4 1.6 3.6-.4-1.7 1.7 2.8.3.1-2.2 2.5 1.6 1.3-1.4-3.4-1 3-.6-1.9-1.3-2.3 1.8-.4-2.1-2.6.5"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M818.6 824.7l8.7 5.1v-.1zm0-7v.1l8.7 5.1v-.2zm-.1 3.5v.1l8.8 5v-.1z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M822.3 836l-9.9 6v-12.5l9.9-5.8zm-9.9 6l-10-5.8v-12.5l10 5.8z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M802.8 833.6l8.8 5.2v-.3zm0-6.9l8.8 5.2v-.2zm-.1 3.3v.2l8.8 5.1v-.2zM813.2 838.5v.3l8.7-5.1v-.1zm-.2-3.1v.2l8.7-5v-.2zm0-3.5v.2l8.8-5.1v-.1z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linejoin="round" stroke-miterlimit="10" d="M822.3 823.7l-10-5.8-10 5.8 10 5.8z"/>
    </g>
    <g>
      <path fill="#3C3C3B" d="M809 821.2c-2 1-2.2 3-.2 4.2a7.8 7.8 0 0 0 7.3.3c2-1 2-3 .2-4.2s-5.3-1.4-7.3-.3"/>
      <path fill="#9D9D9C" d="M809.3 821.5l2 1.7-3.3-.3.3 1.7 3.5-.4-1.5 1.6 2.8.4V824l2.6 1.5 1.3-1.3-3.5-1 3.1-.7-1.9-1.3-2.3 1.7-.5-2-2.6.6"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M828.7 829.6v.2l8.8-5v-.1zm-.2-3.1v.2l8.8-5v-.2zm.1-3.5v.1l8.9-5v-.2z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M844 820.5v.2l8.7-5v-.2zm0-3v.1l8.7-5v-.1zm0-3.6v.2l8.7-5v-.2z"/>
    </g>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M407.9 532.6l76.9-41.8-81.4-48.3-43.9 55.7zm46.1 13.6l34.6-18.2-21-11.9-33.5 15.7z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M369.6 565.5l91.6-53L357 452.4l-91.5 53z"/>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M409.8 487l40.7-23.7v47.1L409.7 534z"/>
      <path fill="#B2B2B2" d="M356 408.7l94.5 54.6-40.7 23.7-94.7-54.7z"/>
      <path fill="#DADADA" d="M315.1 432.3l94.7 54.7v47L315 479.4z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M348 509.4l30-17.7v24l-30 17.5z"/>
      <path fill="#B2B2B2" d="M315.1 455.5l63 36.2-30.1 17.7-63.1-36.4z"/>
      <path fill="#DADADA" d="M284.9 473l63 36.4v23.8l-63-36.2z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M343.2 462.6l12-7.1v23l-12 7zm-28.1-30.3l40 23.2-12 7-40-23.2z"/>
      <path fill="#DADADA" d="M303 439.3l40.2 23.3v22.8l-40.2-23z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#B2B2B2" d="M420.1 478.6l30.4-17.8v2.5L420.1 481z"/>
      <path fill="#B2B2B2" d="M407.1 435.6l43.4 25.2-30.4 17.8-43.5-25.2z"/>
      <path fill="#DADADA" d="M376.6 453.4l43.5 25.2v2.4l-43.5-25z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M350.2 416.2l24.5 14.3 5.6-3.5-24.4-14z"/>
      <path d="M356 413v.7l23.7 13.8.6-.5zm0 .7l-5 3 17 10 5.1-3z"/>
      <path d="M368 426.7l.8.4 4.3-2.5v-1z"/>
    </g>
    <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path fill="#DADADA" d="M286.5 469l-1.6-1v5l1.6 1zm16.5-11.4L285 468l1.6 1 18.2-10.5z"/>
      <path fill="#B2B2B2" d="M304.7 458.5L286.5 469v5l18.2-10.4z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M343.2 484l6.9-3.8 1.1.6-8 4.6zm6.8-3.8v-15.8l-6.8 4V484z"/>
      <path d="M351.2 463.7v17.1l-1.1-.6v-15.8z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M348 531.8l17.4-10 1.1.6-18.5 10.8z"/>
      <path d="M365.4 521.7V504L348 514v18zm1.1-18.5v19.2l-1.1-.7V504z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M348 531.8l-49.7-28.4-1.1.6 50.8 29.2z"/>
      <path d="M298.3 503.4v-18L348 514v18zm-1.1-18.6V504l1.1-.6v-18z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M343.2 484L311 465.8l-1.2.6 33.3 19.1z"/>
      <path d="M311.1 465.7V450l32 18.3v15.8zm-1.1-16.4v17l1.1-.6V450z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M375.8 471.9v18.5l-11.9-6.8V465z"/>
      <path d="M375.8 489v1.4l-11.9-6.8 1.3-.8z"/>
      <path d="M364 465v18.6l1.2-.8v-17z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M362.6 464.2v18.5l-3.5-1.9v-18.5z"/>
      <path d="M362.6 481.3v1.4l-3.5-1.9 1.3-.7z"/>
      <path d="M359.1 462.3v18.5l1.3-.7V463z"/>
    </g>
    <path opacity=".6" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M378 487l-30 17.5v3.9l30-17.3z"/>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M407.3 512.4v19.3l-26.7-15.4v-19.1z"/>
      <path opacity=".3" d="M384.2 500.3v18l-2.6-1.5v-18zm3.4 2v18.1l-2.5-1.5v-18zm3.7 2.1v18l-2.6-1.4v-18zm3.5 2.1v18l-2.5-1.4v-18zm3.6 2v18l-2.5-1.4v-18zm3.6 2.1v18l-2.5-1.4v-18zm3.6 2.1v18l-2.6-1.5v-18z"/>
      <path d="M379.9 496.7l.7.5v19l-.7.5zm.7 19.6l26.7 15.4v.9L380 516.7z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M407.3 503.6l-16.6-9.5-1 .6 17.6 10.1zm-16.6-9.6v-12.7l16.6 9.6v12.7z"/>
      <path d="M389.7 480.7v14l1-.6v-12.8zM402.1 487.8V501l.3-.2V488zm0 13.2l-.3-.2v-13.2l.3.2zM395.4 484v13.2l.3-.2v-12.8zm0 13.2l-.4-.2v-13.2l.4.2z"/>
    </g>
    <g fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M421.5 486v7.3l25.7-14.9v-7.2z"/>
      <path d="M421.5 492.3v1l25.7-14.9-.9-.5zm25.7-21.1v7.2l-.9-.5v-6.2z"/>
    </g>
    <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M379.9 516.7l-47.2 27.5 27.6 15.9 47-27.5z"/>
    <path opacity=".3" fill="#3C3C3B" d="M382.4 453.3l12.2-7.1L434 469l-12.2 7z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M422.3 475l13.8-14.7-40.1-23-13.4 14.7z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M437 460.2c0-.3-.3-.5-.5-.6l-40.1-23h-.4c-.2 0-.5 0-.6.2L382 451.5c-.2.2-.3.5-.2.7 0 .3.2.5.4.6l39.7 23h.4c.2 0 .5 0 .6-.3l13.8-14.6c.3-.2.4-.4.3-.7zm-.9 0L422.3 475l-39.7-23 13.5-14.7 40 23z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M400.7 439.7l-.4-.2-14 15.1.5.2zm4.6 2.6l-.3-.2-13.9 15.1.4.2zm4.7 2.7l-.4-.3-13.8 15 .4.3zm4.6 2.6l-.4-.2-13.8 15 .4.3zm4.6 2.7l-.3-.2-13.9 15 .4.3zm4.4 2.7l-.4-.2-13.9 15 .4.3zm4.4 2.4l-.2-.2-14 15 .4.3zm4.3 2.4l-.4-.2-13.8 15 .4.3z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M391.3 442l-.1.1 40.5 23.5.1-.2zm-4.5 4.8v-.2l40.5 23.6-.1.2z"/>
    <path opacity=".3" fill="#3C3C3B" d="M325 432.2l12.2-7 39.5 22.9-12.2 7z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M364.9 454l13.8-14.7-40-23L325 431z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M379.6 439.2c0-.2-.2-.4-.4-.5l-40.2-23h-.3c-.2 0-.5 0-.6.2l-13.6 14.7c-.2.2-.2.5-.2.7 0 .3.2.4.4.5l39.8 23 .4.1c.2 0 .5-.1.6-.3l13.8-14.7c.2-.2.3-.5.3-.7zm-.9.1L365 454l-40-23 13.6-14.6 40 23z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M343.3 418.7l-.4-.2-13.8 15 .3.3zm4.7 2.7l-.4-.3-14 15 .4.4zm4.6 2.6l-.3-.2-14 15 .5.2zm4.6 2.7l-.4-.2-13.8 15 .4.2zm4.6 2.6l-.4-.2-13.8 15 .4.3zm4.3 2.7l-.4-.3-13.8 15.1.4.2zm4.6 2.4l-.3-.2-14 15 .4.3zm4.2 2.4l-.3-.2-14 15.1.4.2z"/>
    <path fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M333.9 421l-.1.2 40.5 23.4v-.2zm-4.6 4.8l.1-.2 40.5 23.6-.1.2z"/>
    <path opacity=".6" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M347.9 504.5l-61.4-35.6v4.1l61.4 35.4z"/>
    <path d="M313.9 494.4v18.4l.5-.3v-17.8zm0 18.4l-.5-.3v-18.3l.5.2zM322.2 499.2v18.4l.5-.3v-17.8zm0 18.4l-.3-.3V499l.3.3z" fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
    <g fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M330.7 504v18.4l.4-.3v-17.8zm0 18.4l-.5-.3v-18.4l.5.3z"/>
    </g>
    <g fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M339 508.8V527l.4-.2v-18zm0 18.3l-.4-.2v-18.4l.4.3z"/>
    </g>
    <g fill="#EDEDED" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <path d="M305.5 489.6V508l.5-.3V490zm0 18.4l-.5-.3v-18.3l.5.2z"/>
    </g>
    <g>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M455.3 513.4l9.8-5.6v34l-9.7 5.8zm-19.6-11.2l19.6 11.2v34.2L435.8 536z"/>
      <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M445.7 496.3l19.4 11.5-9.8 5.6-19.6-11.2z"/>
      <g fill="#3C3C3B">
        <path d="M445.7 513.3c-3.2-2-6-.4-6 3.4s2.8 8.5 6 10.3 6 .4 6-3.4c.1-3.8-2.6-8.4-6-10.3"/>
        <path d="M445.7 527c-3.2-1.9-6-6.5-6-10.3 0-3.7 2.8-5.2 6-3.4a13 13 0 0 1 6 10.3c0 3.8-2.7 5.3-6 3.4m0-13.9c-3.3-2-6.1-.4-6.1 3.5 0 4 2.8 8.7 6.1 10.7 3.4 2 6.2.4 6.2-3.5 0-4-2.7-8.8-6.2-10.7"/>
      </g>
      <path opacity=".3" fill="#B2B2B2" d="M455.3 513.4l9.8-5.6v34l-9.7 5.8z"/>
      <path fill="#9D9D9C" d="M445.7 514l-.6 4.3-2.5-5-2 2.1 3.7 4.5-3.7-.8 2 4.3 3-2v5l3.2.5-1.6-5.6 3.5 3.7v-3.7l-4.3-1.8 2.4-2.5-3-3"/>
      <path fill="none" stroke="#3C3C3B" stroke-linecap="round" stroke-miterlimit="10" d="M439.3 533.6l11.9 6.8m-11.9-8.5l11.9 6.8m-11.9-8.5l11.9 6.8m-11.9-8.4l11.9 6.9"/>
    </g>
  </g>
  <g>
    <path opacity=".3" fill="#878787" d="M1567.5 204.6l34-18.2-7.3-4.4 9.2-6.2-16.7-9.3 34.2-21.1s1.3-3.7-.9-3.8c-2.2 0-2.9.8-2.9.8l-35.9 21-17-12.6-26.4 16.3 29.7 37.5z"/>
    <path fill="#DADADA" d="M1576.6 31.8c0 4.5-3.4 7.7-7.8 7.5-4.3-.3-7.7-4-7.7-8.3 0-4.4 3.5-7.8 7.7-7.5 4.3.2 7.8 4 7.8 8.3zm-1.3 35.2c2.3-1.8 3.8-4.8 3.8-8.2 0-6-4.8-11.2-10.7-11.6a10 10 0 0 0-10 6.2 10.2 10.2 0 0 0-7.8 10.1 12 12 0 0 0 8.4 11.3v.6c0 6 4.8 11.3 10.8 11.7s10.8-4.3 10.8-10.3c0-4-2.2-7.7-5.3-9.8z" opacity=".5"/>
    <path fill="#FFF" d="M1583.2 61.8c0 5.8-4.6 10-10.2 9.8-5.7-.3-10.3-5.3-10.3-11s4.6-10.1 10.3-9.8a11 11 0 0 1 10.2 11z" opacity=".6"/>
    <g fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10">
      <path stroke-linecap="round" stroke-linejoin="round" d="M1588 164l-18 9.9v21.7l18-9.8z"/>
      <path d="M1570 195.4l-15.9-9.5v-21.6l16 9.5z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M1554.1 164.3l15.9 9.5 18-9.8-15.7-9.5z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M1556.4 164l13 7.9 14.8-8.1-13-7.9z"/>
      <path d="M1579.4 190.2l-5.4 3v-8.5l5.4-3z"/>
    </g>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1566.8 95.7v67.8c0 .7.5 1.3 1.5 1.7 1.8.9 4.5.9 6.1 0 .8-.4 1-1 1-1.5V95.9c0 .6-.2 1-1 1.5-1.5 1-4.3 1-6.1.2-1-.6-1.5-1.3-1.5-1.9z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1568.4 97.4c1.8.9 4.5.8 6.1-.2s1.3-2.4-.4-3.2a7.6 7.6 0 0 0-6.1 0c-1.7 1.1-1.5 2.6.4 3.4z"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1568.4 107a7 7 0 0 0 6.1-.3c.7-.4 1-1 1-1.4v-4.5c0 .6-.2 1-1 1.5a7.2 7.2 0 0 1-6.1.3c-1-.5-1.5-1-1.5-1.7v4.5c0 .7.5 1.3 1.5 1.6zm0 9.6c1.8.8 4.5.7 6.1-.2.7-.4 1-1 1-1.4v-4.5c0 .5-.2 1-1 1.5a7.2 7.2 0 0 1-6.1.3c-1-.5-1.5-1-1.5-1.7v4.5c0 .5.5 1.2 1.5 1.5z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1525 156.3v23.8l42 24.4-.3-24.4zm42 48.2l20.9-12-.2-24.2-21 11.8z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1525 156.3l20.3-11.9 42.4 24-21 11.7z"/>
    <path fill="#3C3C3B" d="M1552.6 152.3c3.8 2 4 5.5.4 7.8s-9.8 2.6-13.6.6c-3.9-2-4-5.5-.4-7.9s9.8-2.5 13.6-.5"/>
    <path fill="#9D9D9C" d="M1552 152.8l-3.7 3.2 6.1-.6-.6 3.1-6.7-.8 3 3.1-5.2.8v-4.1l-4.8 2.8-2.6-2.6 6.6-1.9-5.9-1.1 3.6-2.4 4.4 3.2 1-3.9 4.7 1.2"/>
    <path fill="#3C3C3B" d="M1571 161.7c3.8 2 4 5.6.3 7.9s-9.8 2.6-13.6.5c-3.8-2-4-5.5-.4-7.8 3.8-2.3 9.8-2.6 13.6-.6"/>
    <path fill="#9D9D9C" d="M1570.3 162.3l-3.7 3.1 6.3-.5-.7 3-6.6-.7 3 3-5.3.8-.1-4.1-4.7 2.9-2.5-2.6 6.5-2-5.9-1.1 3.7-2.3 4.3 3.1.9-3.9 4.8 1.3"/>
    <path d="M1526.2 165.3l12 6.9m-12-9.5l12 7m-12-9.4l12 7M1539.6 173.3l12 6.8m-12-9.3l12 6.8m-12-9.3l12 6.9M1553.3 181.1l12 6.8m-12-9.4l12 6.9m-12-9.3l12 6.9" fill="none" stroke="#3C3C3B" stroke-linecap="round" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#B2B2B2" d="M1567 204.5l20.9-12-.2-24.2-21 11.8z"/>
    <path opacity=".3" fill="#878787" d="M1521.7 227.5l26.7-17.1s12-11.3 5.4-24.2c-6.8-13-33.5-15-33.5-15l1.4 56.3z"/>
    <path d="M1536.8 183c0-17.2-22.9-28.9-37.7-28.9-15 0-29 8.4-35.8 21.8-7.5 12.3 7 22.9 18 26.3 16 5.1 39.8 4 51.1-8.8 2.5-2.9 4.5-6.5 4.4-10.4zm-24.1-26.5h.1z" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#B2B2B2" d="M1499.4 154.6c-1.2 0-2.3 0-3.5.2a50.8 50.8 0 0 1 20.7 40.9c0 2-.5 4.3-.7 6.2 6-1.8 12.3-5.4 16.2-9.7 2.4-2.8 4.2-6.5 4.2-10.2 0-16.3-22.7-27.3-36.9-27.4z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1537 208.6l-.2-23.4V182c0 5.8-3.9 10.8-8.3 14.3a47.1 47.1 0 0 1-18.7 8c-3.2.6-6.5 1-9.7 1.3-3.1.2-6.3-.4-9.3-.9a52.1 52.1 0 0 1-19.2-7c-5.2-3.5-10.2-8.8-10.2-15.6l-.1 14.5-.1 9.3c0 1.8-.1 3.5.2 5.3 1.6 10.1 13 16 21.8 18.6 5 1.5 10.3 2.6 15.5 2.7 5.2 0 10.8-1 15.7-2.5 9.6-3 22.6-9.7 22.5-21.3z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1536.8 186.3V183c0 5.8-3.9 10.6-8.3 14a44.4 44.4 0 0 1-12.9 6.2v26.2c9.4-2.9 21.3-9.7 21.2-20.6v-22.5z"/>
    <path opacity=".3" fill="#878787" d="M1456.2 256.3l26.7-17.1s12-11.2 5.4-24.2c-6.7-13-33.5-15-33.5-15l1.4 56.3z"/>
    <path d="M1470.5 212.9c0-17.2-22.9-29-37.7-29-15 0-29 8.5-35.8 21.9-7.5 12.3 7 22.8 18 26.3 16.1 5 39.8 4 51.2-8.9 2.4-3 4.3-6.4 4.3-10.3zm-24.1-26.5h.2z" fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10"/>
    <path opacity=".3" fill="#B2B2B2" d="M1433 184.4l-3.4.2a50.8 50.8 0 0 1 20.6 41c0 1.9 0 3.4-.2 5.2 6-1.8 11.2-4.4 15-8.7 2.5-2.8 5-6.5 5-10.4.1-16.1-22.7-27.3-37-27.3z"/>
    <path fill="#CBD000" class="fillgreen" stroke="#3C3C3B" stroke-miterlimit="10" d="M1470.5 238l-.2-23.5v-3.4c0 6-3.8 10.9-8.3 14.4a47.1 47.1 0 0 1-18.7 8c-3.2.6-6.4 1-9.7 1.3-3 .2-6.2-.4-9.3-.9a52.1 52.1 0 0 1-19.1-7c-5.3-3.5-10.3-8.8-10.3-15.7v14.6l-.2 9.3c0 1.8 0 3.5.2 5.3 1.6 10.1 13 16 21.8 18.6 5 1.5 10.4 2.6 15.6 2.7 5.2 0 10.7-1 15.6-2.5 9.6-3 22.7-9.6 22.6-21.3z"/>
    <path opacity=".3" fill="#B2B2B2" d="M1470.8 214.8v-3.3c0 5.8-3.9 10.6-8.3 14a41 41 0 0 1-12.9 6.6v25.8c9.5-2.9 21-9 21-19.9-.1-7.5.2-15.5.2-23.2z"/>
    <g>
      <path fill="#878787" d="M1445.6 281.4c.4.2.9.4 1.2.7 9.3 6.8 8.2 16.7-2.4 22.1a39.5 39.5 0 0 1-34.7-1.2c-4 1.9-12.3 6.3-13.5 6.8-.7.2-1.8 0-2.6-.6-.7-.5-1.3-1.1-.9-2 1-.6 9.6-4.8 13.6-7-7.5-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.8z" opacity=".3"/>
      <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M1397 309c-.4 1.5-4 2.3-5.6-.4v-22.4l5.6.3s.3 20.5 0 22.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M1422 263.2a25.7 25.7 0 0 1-27.6 26.2c-15.2-.8-27.4-14.1-27.4-29.6s12.3-27.1 27.4-26.3a30 30 0 0 1 27.6 29.7z"/>
      <path opacity=".3" fill="#B2B2B2" d="M1394.6 234.5h-3c5 6.6 7.8 14.7 7.8 23.3 0 12-5.6 22.3-14.4 28.5 3 1.3 6.2 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.8 28.8 0 0 0-26.6-28.7z"/>
    </g>
  </g>
  <g>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2251.9 560.8V532l41.3 23.8v28.9z"/>
    <path fill="#3C3C3B" d="M2252.4 532.8l40.2 23.2v27.8l-40.2-23.3v-27.7m-1-1.6v30l42.2 24.3v-30l-42.2-24.3z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2294.1 555.7l41.2-23.8v29l-41.2 23.7z"/>
    <path fill="#3C3C3B" d="M2334.9 532.8v27.7l-40.3 23.3V556l40.3-23.2m1-1.6l-42.2 24.4v29.8l42.1-24.4v-29.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2252.4 531.2l41.3-23.9 41.2 23.9-41.2 23.8z"/>
    <path fill="#3C3C3B" d="M2293.7 507.8l40.2 23.3-40.2 23.2-40.3-23.2 40.3-23.3m0-1l-42.2 24.4 42.2 24.4 42.1-24.4-42.1-24.4z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2249.4 532.3v-4l41.2 23.8v4z"/>
    <path fill="#3C3C3B" d="M2249.9 529.1l40.2 23.3v2.9L2250 532v-2.9m-1-1.6v5.1l42.2 24.4v-5.2l-42.2-24.3z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2249.9 527.5l43.8-25.3 41.2 23.8-43.8 25.3z"/>
    <path fill="#3C3C3B" d="M2293.7 502.7l40.2 23.3-42.8 24.7-40.3-23.3 42.9-24.7m0-1l-44.8 25.8 42.2 24.4 44.7-25.8-42.1-24.4z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2249.4 532.3v-4l41.2 23.8v4z"/>
    <path fill="#3C3C3B" d="M2249.9 529.1l40.2 23.3v2.9L2250 532v-2.9m-1-1.6v5.1l42.2 24.4v-5.2l-42.2-24.3z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2291.5 552.1l43.8-25.3v4l-43.8 25.3z"/>
    <path fill="#3C3C3B" d="M2334.9 527.7v2.9l-42.9 24.7v-3l42.9-24.6m1-1.7l-44.8 25.8v5.1l44.7-25.8V526z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2251.9 525.7v-77.5l23.2-36.3 18 60.6v77z"/>
    <path fill="#3C3C3B" d="M2275 413l17.7 59.6v76.1l-40.2-23.2v-77.1l22.4-35.4m.3-2.3l-23.8 37.4v78l42.2 24.4v-78l-18.4-61.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2294.1 472.7l41.2-23.8v76.8l-41.2 23.8z"/>
    <path fill="#3C3C3B" d="M2334.9 449.7v75.7l-40.3 23.2V473l40.3-23.3m1-1.6l-42.2 24.4v78l42.1-24.4v-78z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#4A4A49" d="M2275.8 411.2l38.9-17.2 20.5 53.9-41.3 23.8z"/>
    <path fill="#3C3C3B" d="M2314.5 394.7l20.2 53-40.5 23.3-17.7-59.5 38-16.8m.5-1.4l-39.8 17.6 18.5 61.6 42.1-24.4-20.8-54.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.1 527.7l-1.1-3 8 4 .3.3.7.2.1.1 1.5 3.9-9.5-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
    <path fill="#3C3C3B" d="M2258 525.7l6.9 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m7.8-12.3l-.6 2.4.4 12.7.7.3v-14.1l-.5-1.3zm-9.6 10.4l1.6 4.3 10.5 6v-.7l-1.6-4.4-.4-.1-.7-.2v-.1l-9.4-4.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.6 526l3.8 1.8 1.6 1.3z"/>
    <path fill="#3C3C3B" d="M2254.4 523.9v.8l10.4 6v-.8l-3.2-2.5z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2255.3 523.9l.8-.4 9.5 5.4-.8.4z"/>
    <path fill="#3C3C3B" d="M2256.1 522.9l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.3 528.8l-1.2-.6v.6z"/>
    <path fill="#3C3C3B" d="M2265.1 528.2v.6h1.2z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.6 529.7l-1.8 1v-.8l1.8-1z"/>
    <path fill="#3C3C3B" d="M2266.6 529l-1.8 1v.7l1.8-1z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.7 525.6l-1.8-1.5 5.9-8v11.4z"/>
    <path fill="#3C3C3B" d="M2263.3 517.6v9.1l-3.3-1.5-1.4-1.2 4.7-6.4m1-2.9l-7 9.5 2.2 1.9 4.8 2.2v-13.6z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.7 523.8v-12.2h.3l4.2 6.2v5.3l-2.7.7z"/>
    <path fill="#3C3C3B" d="M2258.2 512.8l3.5 5.1v4.8l-2.3.6h-1.2v-10.5m-1-2.1v13.6h2.3l3.1-.8v-5.9l-4.2-6.2-1.1-.7z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.9 523.8l3.3-4.6v3.9l-2.7.7z"/>
    <path fill="#3C3C3B" d="M2261.7 520.6v2.1l-1.8.5 1.8-2.6m1-3l-4.3 6-1.1.6h2.2l3.1-.8v-5.8z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.9 523.4V512l4.9 3v11z"/>
    <path fill="#3C3C3B" d="M2259.4 513l4 2.2v10.1l-4-2.2v-10m-1-1.7v12.3l5.9 3.3v-12.3l-5.9-3.3z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 524v-10.2l3.8 2v10.4z"/>
    <path fill="#3C3C3B" d="M2260.4 514.5l2.8 1.7v9.1l-2.8-1.6v-9.2m-1-1.6v11.3l4.8 2.7v-11.3l-4.7-2.7z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260.5 523.3l3.3-6.5v8.3z"/>
    <path fill="#3C3C3B" d="M2263.3 518.9v5.4l-2-1.1 2-4.3m1-4.2l-4.2 8.6h-.5l4.7 2.7v-11.3z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.8 512.6l.6.4v1.3l.2.3.2.1v.3l-1 7.2v-9.6z"/>
    <path fill="#3C3C3B" d="M2260.2 515h.1v.9-1m-1-3V523l.3.2h.5l1.3-8.2v-1l-.5.2V513l-1.6-1z"/>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 522.7v-9.9l3.8 2.2v9.8z"/>
    <path fill="#3C3C3B" d="M2260.5 513.7l2.8 1.6v8.8l-2.8-1.7v-8.7m-1-1.8v11l4.8 2.8v-11l-4.7-2.8z"/>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260.5 523v-7.6l3.3 1.8v7.6z"/>
      <path fill="#3C3C3B" d="M2261 516.3l2.2 1.2v6.5l-2.2-1.3v-6.4m-1-1.8v8.7l4.2 2.4v-8.7l-4.2-2.4z"/>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2264.7 514.5l-.2-.2-7-4-.1-.2-.2.1-.2.3v-1.1l7.8 4.5-.1.6z"/>
      <path fill="#3C3C3B" d="M2256.3 508.6v15.2l1 .4v-13.5l7 4v13.6l.8.5v-15.1z"/>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2265.7 528.5l-.6.3v-15.1l.6-.3z"/>
      <path fill="#3C3C3B" d="M2265.7 513.4l-.6.3v15.1l.6-.3z"/>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.9 508.3l-.6.3 8.8 5 .6-.2z"/>
      <path fill="#3C3C3B" d="M2256.9 508.3l-.6.3 8.8 5 .6-.2z"/>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.6 538.6l-1.2-3 8 4 .4.3.6.2h.1l1.6 4-9.5-5.5zm7.5-11.9l.2-.6v6l-.2-5.4z"/>
      <path fill="#3C3C3B" d="M2276.3 536.6l6.9 3.5c0 .2.3.3.5.3l.6.2 1 2.4-8.3-4.7-.7-1.7m7.8-12.4l-.6 2.4.4 12.7.6.3h.1v-13.9l-.5-1.5zm-9.6 10.4l1.6 4.3 10.5 6v-.8l-1.7-4.3-.4-.2-.6-.2-9.4-4.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276 537l3.7 1.6 1.7 1.4z"/>
      <path fill="#3C3C3B" d="M2272.8 534.8v.8l10.4 6v-.7l-3.2-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2273.8 534.8l.7-.5 9.5 5.5-.8.5z"/>
      <path fill="#3C3C3B" d="M2274.5 533.8l-1.7 1 6.5 3.8 3.9 2.3 1.7-1.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.6 539.7l-1-.7v.7z"/>
      <path fill="#3C3C3B" d="M2283.6 539v.7h1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2285 540.7l-1.8 1v-.8l1.7-1.1z"/>
      <path fill="#3C3C3B" d="M2285 539.8l-1.8 1v.8l1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.1 536.5l-1.8-1.4 5.8-8v11.3z"/>
      <path fill="#3C3C3B" d="M2281.7 528.6v9l-3.4-1.4-1.3-1.2 4.7-6.4m1-3l-7 9.5 2.1 1.8 4.8 2.2v-13.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.2 534.7v-12.3l.3.2 4.1 6v5.3l-2.8.8z"/>
      <path fill="#3C3C3B" d="M2276.7 523.8l3.4 5v4.9l-2.3.5h-1.1v-10.4m-1-2.2v13.6h2.2l3.2-.9v-5.8l-4.2-6.3-1.2-.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 534.7l3.4-4.7v4l-2.8.7z"/>
      <path fill="#3C3C3B" d="M2280.1 531.5v2.2l-1.8.4 1.8-2.6m1-3l-4.2 6-1.2.6h2.2l3.2-.9v-5.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 534.2v-11.1l5 2.8V537z"/>
      <path fill="#3C3C3B" d="M2277.7 523.9l4 2.2v10l-4-2.2v-10m-1-1.7v12.3l6 3.4v-12.3l-6-3.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 534.9v-10.3l3.7 2.2V537z"/>
      <path fill="#3C3C3B" d="M2278.9 525.5l2.8 1.6v9.1l-2.8-1.6v-9.1m-1-1.6v11.3l4.7 2.7v-11.4l-4.7-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2279 534.2l3.1-6.5v8.4z"/>
      <path fill="#3C3C3B" d="M2281.7 529.8v5.5l-2.2-1.2 2.2-4.3m1-4.2l-4.2 8.5h-.6l4.7 2.7v-11.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.1 523.6l.7.4v1.2c0 .2 0 .3.2.4h.2v.4l-1.1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2278.6 525.9v1-1m-1-3.2V534l.3.2h.6l1.2-8.1v-1l-.4.2v-1.4l-1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 533.6v-9.8l3.7 2v10z"/>
      <path fill="#3C3C3B" d="M2278.9 524.5l2.8 1.7v8.7l-2.8-1.6v-8.8m-1-1.6v11l4.7 2.6v-11l-4.7-2.6z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2279 533.8v-7.5l3.1 1.9v7.6z"/>
        <path fill="#3C3C3B" d="M2279.4 527.1l2.3 1.3v6.4l-2.3-1.2V527m-1-1.6v8.6l4.2 2.4V528l-4.1-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2283.1 525.5l-.2-.3-7-4-.1-.1h-.2l-.2.4v-1.2l7.9 4.5-.2.7z"/>
        <path fill="#3C3C3B" d="M2274.7 519.5v15.1l1 .6v-13.6l7 4V539l.9.6v-15z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284 539.4l-.4.3v-15.1l.5-.4z"/>
        <path fill="#3C3C3B" d="M2284 524.2l-.4.4v15.1l.5-.3z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.3 519.2l-.6.3 8.9 5.1.5-.4z"/>
        <path fill="#3C3C3B" d="M2275.3 519.2l-.6.3 8.9 5.1.5-.4z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.6 559.4l-1.1-3 8 4 .3.3.7.2.1.1 1.6 3.9-9.6-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
      <path fill="#3C3C3B" d="M2257.4 557.4l6.9 3.4c0 .2.3.3.5.3l.5.2 1 2.4-8.2-4.7-.7-1.6m7.8-12.3l-.5 2.4.3 12.7.7.2h.1v-14l-.6-1.3zm-9.6 10.3l1.7 4.3 10.4 6v-.7l-1.6-4.4-.4-.1-.7-.2v-.1l-9.4-4.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.2 557.7l3.6 1.8 1.7 1.2z"/>
      <path fill="#3C3C3B" d="M2253.9 555.6v.7l10.5 6v-.7l-3.3-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2254.9 555.6l.7-.4 9.4 5.4-.6.4z"/>
      <path fill="#3C3C3B" d="M2255.6 554.6l-1.7 1 6.5 3.7 4 2.3 1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2265.8 560.5l-1.1-.7v.7z"/>
      <path fill="#3C3C3B" d="M2264.7 559.8v.7h1.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266 561.4l-1.6 1v-.8l1.6-1z"/>
      <path fill="#3C3C3B" d="M2266 560.6l-1.6 1v.8l1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.2 557.3l-1.7-1.5 5.7-8v11.4z"/>
      <path fill="#3C3C3B" d="M2262.7 549.3v9.1l-3.3-1.5-1.4-1.2 4.7-6.4m1-3l-7 9.5 2.2 1.9 4.8 2.2v-13.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.3 555.5v-12.3l.3.2 4 6v5.3l-2.6.8z"/>
      <path fill="#3C3C3B" d="M2257.7 544.5l3.5 5.1v4.8l-2.3.6h-1.2v-10.5m-1-2.1V556h2.3l3.2-.8v-5.9l-4.3-6.2-1.1-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.4 555.5l3.3-4.8v4l-2.7.8z"/>
      <path fill="#3C3C3B" d="M2261.2 552.3v2.1l-1.8.5 1.8-2.6m1-3l-4.3 6-1.1.6h2.2l3.2-.8v-5.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.4 555v-11.2l4.8 2.8V558z"/>
      <path fill="#3C3C3B" d="M2258.9 544.7l4 2.2v10l-4-2.1v-10.1m-1-1.7v12.3l5.9 3.3v-12.3l-5.9-3.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.5 555.6v-10.2l3.7 2.2v10.3z"/>
      <path fill="#3C3C3B" d="M2260 546.2l2.7 1.7v9l-2.7-1.5v-9.2m-1-1.6v11.3l4.7 2.7v-11.3l-4.7-2.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 555l3.2-6.6v8.4z"/>
      <path fill="#3C3C3B" d="M2262.7 550.6v5.4l-2-1.1 2-4.3m1-4.3l-4.1 8.6h-.6l4.7 2.7v-11.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.3 544.3l.7.4v1.2l.1.4.2.1v.3l-1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2259.8 546.6v1-1m-1-3.1v11.2l.3.2h.6l1.2-8.2v-1l-.5.2v-1.4l-1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.5 554.3v-9.8l3.7 2.1v10z"/>
      <path fill="#3C3C3B" d="M2260 545.3l2.7 1.6v8.7l-2.7-1.6v-8.7m-1-1.7v11l4.7 2.7v-11l-4.7-2.7z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 554.7V547l3.2 1.8v7.6z"/>
        <path fill="#3C3C3B" d="M2260.5 547.9l2.2 1.2v6.5l-2.2-1.3v-6.4m-1-1.7v8.7l4.2 2.4v-8.7l-4.1-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2264.2 546.2l-.2-.3-7-4h-.2l-.2.3V541l7.9 4.6-.2.6z"/>
        <path fill="#3C3C3B" d="M2255.8 540.3v15l1 .6v-13.5l6.9 4V560l1 .5v-15.1z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2265.2 560.2l-.5.3v-15.1l.5-.3z"/>
        <path fill="#3C3C3B" d="M2265.2 545l-.5.4v15.1l.5-.3z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.4 540l-.6.3 8.9 5 .5-.2z"/>
        <path fill="#3C3C3B" d="M2256.4 540l-.6.3 8.9 5 .5-.2z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276 570.2l-1.2-3 8.1 4.1.3.3.7.2 1.6 4-9.5-5.6zm7.5-11.9l.2-.6v6l-.2-5.4z"/>
      <path fill="#3C3C3B" d="M2275.8 568.2l7 3.5c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.7m7.8-12.3l-.6 2.4.4 12.7.7.3v-14l-.5-1.4zm-9.6 10.4l1.6 4.3 10.5 6v-.8l-1.7-4.3-.3-.2-.7-.2-9.4-4.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.5 568.5l3.8 1.8 1.6 1.4z"/>
      <path fill="#3C3C3B" d="M2272.3 566.4v.9l10.4 6v-.8l-3.3-2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2273.3 566.4l.7-.4 9.5 5.5-.8.4z"/>
      <path fill="#3C3C3B" d="M2274 565.4l-1.7 1 6.5 3.8 4 2.3 1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.2 571.4l-1.2-.7v.7z"/>
      <path fill="#3C3C3B" d="M2283 570.7v.7h1.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.4 572.3l-1.7 1v-.8l1.7-1z"/>
      <path fill="#3C3C3B" d="M2284.4 571.5l-1.7 1v.7l1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.5 568.2l-1.7-1.5 5.9-8v11.4z"/>
      <path fill="#3C3C3B" d="M2281.2 560.3v9l-3.4-1.5-1.3-1.1 4.7-6.4m1-3l-7 9.5 2.1 1.8 4.8 2.2v-13.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.6 566.3v-12.2l.3.1 4.1 6.2v5.2l-2.7.7z"/>
      <path fill="#3C3C3B" d="M2276 555.4l3.5 5v4.9l-2.3.5h-1.1v-10.4m-1-2.2V567h2.2l3.2-.9v-5.8l-4.2-6.3-1.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.8 566.3l3.2-4.6v4l-2.7.6z"/>
      <path fill="#3C3C3B" d="M2279.5 563.1v2.2l-1.8.4 1.8-2.6m1-3l-4.2 6-1.2.7h2.2l3.2-.9v-5.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.8 566v-11.3l4.9 2.9v11.1z"/>
      <path fill="#3C3C3B" d="M2277.2 555.6l4 2.2v10l-4-2.2v-10m-1-1.7v12.3l6 3.4v-12.3l-6-3.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.8 566.5v-10.2l3.9 2.1v10.3z"/>
      <path fill="#3C3C3B" d="M2278.4 557.2l2.8 1.6v9.1l-2.8-1.6v-9.1m-1-1.7v11.3l4.7 2.7V558l-4.7-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.5 566l3.2-6.6v8.4z"/>
      <path fill="#3C3C3B" d="M2281.2 561.4v5.5l-2-1.2 2-4.3m1-4.1l-4.2 8.5h-.6l4.7 2.7v-11.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.6 555.3l.7.3v1.3c0 .2 0 .3.2.4h.2v.4l-1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2278.1 557.5h.1l-.1 1v-1m-1-3.1v11.2l.3.2h.6l1.3-8.1v-1l-.5.2v-1.4l-1.7-1.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278 565.3v-10l3.7 2.3v9.8z"/>
      <path fill="#3C3C3B" d="M2278.4 556.2l2.8 1.7v8.7l-2.8-1.6v-8.8m-1-1.6v11l4.7 2.6v-11l-4.7-2.6z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 565.5V558l3.3 1.8v7.6z"/>
        <path fill="#3C3C3B" d="M2278.9 558.8l2.2 1.3v6.4l-2.2-1.2v-6.5m-1-1.6v8.6l4.1 2.4v-8.6l-4-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2282.5 557l-.2-.2-6.9-4-.2-.1h-.2l-.2.4v-1.2l8 4.5-.3.7z"/>
        <path fill="#3C3C3B" d="M2274.3 551.1v15.2l.8.5v-13.6l7 4v13.6l.9.6v-15.2z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2283.6 571l-.6.4v-15.2l.6-.3z"/>
        <path fill="#3C3C3B" d="M2283.6 556l-.6.2v15.2l.6-.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2274.7 550.8l-.4.3 8.7 5.1.6-.3z"/>
        <path fill="#3C3C3B" d="M2274.7 550.8l-.4.3 8.7 5.1.6-.3z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.1 501.6l-1.1-3 8 4 .3.3.7.2.1.1 1.5 3.9-9.5-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
      <path fill="#3C3C3B" d="M2258 499.6l6.9 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m7.8-12.3l-.6 2.4.4 12.6.7.3v-14l-.5-1.3zm-9.6 10.3l1.6 4.4 10.5 6v-.8l-1.6-4.3-.4-.2-.7-.2-9.4-4.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.6 499.8l3.8 1.9 1.6 1.3z"/>
      <path fill="#3C3C3B" d="M2254.4 497.7v.9l10.4 6v-.8l-3.2-2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2255.3 497.7l.8-.3 9.5 5.4-.8.4z"/>
      <path fill="#3C3C3B" d="M2256.1 496.8l-1.7 1 6.5 3.8 4 2.2 1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.3 502.7l-1.2-.6v.6z"/>
      <path fill="#3C3C3B" d="M2265.1 502v.7h1.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.6 503.6l-1.8 1v-.8l1.8-1z"/>
      <path fill="#3C3C3B" d="M2266.6 502.8l-1.8 1v.8l1.8-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.7 499.6l-1.8-1.6 5.9-8v11.4z"/>
      <path fill="#3C3C3B" d="M2263.3 491.6v9.1l-3.3-1.5-1.4-1.2 4.7-6.4m1-3l-7 9.5 2.2 1.8 4.8 2.3v-13.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.7 497.6v-12.2l.3.1 4.2 6.2v5.3l-2.7.6z"/>
      <path fill="#3C3C3B" d="M2258.2 486.7l3.5 5v4.9l-2.3.6h-1.2v-10.5m-1-2.1v13.6h2.3l3.1-.8v-6l-4.2-6.2-1.1-.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.9 497.6l3.3-4.6v4l-2.7.6z"/>
      <path fill="#3C3C3B" d="M2261.7 494.5v2l-1.8.6 1.8-2.6m1-3l-4.3 6-1.1.6h2.2l3.1-.8v-5.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.9 497.3V486l4.9 2.9V500z"/>
      <path fill="#3C3C3B" d="M2259.4 486.9l4 2.2v10l-4-2.1v-10.1m-1-1.6v12.2l5.9 3.4v-12.3l-5.9-3.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 497.8v-10.1l3.8 2V500z"/>
      <path fill="#3C3C3B" d="M2260.4 488.5l2.8 1.6v9.2l-2.8-1.7v-9m-1-1.8V498l4.8 2.7v-11.3l-4.7-2.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260.5 497.3l3.3-6.6v8.4z"/>
      <path fill="#3C3C3B" d="M2263.3 492.7v5.5l-2-1.1 2-4.4m1-4l-4.2 8.5h-.5l4.7 2.6v-11.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.8 486.6l.6.4v1.2l.2.4.2.1v.3l-1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2260.2 488.8l.1.1v.9-1m-1-3V497l.3.2h.5l1.3-8.2v-1l-.5.2v-1.4l-1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 496.6v-10l3.8 2.3v9.8z"/>
      <path fill="#3C3C3B" d="M2260.5 487.6l2.8 1.6v8.7l-2.8-1.6v-8.7m-1-1.7v11l4.8 2.7v-11l-4.7-2.7z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260.5 496.9v-7.6l3.3 1.8v7.6z"/>
        <path fill="#3C3C3B" d="M2261 490.1l2.2 1.3v6.4l-2.2-1.2V490m-1-1.7v8.7l4.2 2.4v-8.7l-4.2-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2264.7 488.4l-.2-.3-7-4-.1-.1-.2.1-.2.3v-1.2l7.8 4.5-.1.7z"/>
        <path fill="#3C3C3B" d="M2256.3 482.5v15.1l1 .5v-13.5l7 4v13.6l.8.5v-15.1z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2265.7 502.3l-.6.4v-15.1l.6-.3z"/>
        <path fill="#3C3C3B" d="M2265.7 487.3l-.6.3v15.1l.6-.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.9 482.2l-.6.3 8.8 5 .6-.2z"/>
        <path fill="#3C3C3B" d="M2256.9 482.2l-.6.3 8.8 5 .6-.2z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.6 512.4l-1.2-3 8 4 .4.4.6.2h.1l1.6 3.9-9.5-5.5zm7.5-11.8l.2-.7v6l-.2-5.3z"/>
      <path fill="#3C3C3B" d="M2276.3 510.5l6.9 3.5c0 .2.3.3.5.3l.6.1 1 2.4-8.3-4.7-.7-1.6m7.8-12.4l-.6 2.4.4 12.7.6.3h.1v-14l-.5-1.4zm-9.6 10.4l1.6 4.3 10.5 6v-.7l-1.7-4.3-.4-.2-.6-.2v-.1l-9.4-4.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276 510.8l3.7 1.7 1.7 1.4z"/>
      <path fill="#3C3C3B" d="M2272.8 508.7v.8l10.4 6v-.8l-3.2-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2273.8 508.7l.7-.4 9.5 5.5-.8.4z"/>
      <path fill="#3C3C3B" d="M2274.5 507.7l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.6 513.6l-1-.7v.7z"/>
      <path fill="#3C3C3B" d="M2283.6 513v.6h1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2285 514.5l-1.8 1v-.8l1.7-1z"/>
      <path fill="#3C3C3B" d="M2285 513.8l-1.8 1v.7l1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.1 510.4l-1.8-1.4 5.8-8v11.3z"/>
      <path fill="#3C3C3B" d="M2281.7 502.4v9.2l-3.4-1.6-1.3-1.1 4.7-6.5m1-3l-7 9.6 2.1 1.8 4.8 2.2v-13.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.2 508.6v-12.3l.3.2 4.1 6v5.3l-2.8.8z"/>
      <path fill="#3C3C3B" d="M2276.7 497.6l3.4 5.1v4.8l-2.3.6h-1.1v-10.5m-1-2.2v13.7h2.2l3.2-.9v-5.9l-4.2-6.2-1.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 508.6l3.4-4.7v4l-2.8.7z"/>
      <path fill="#3C3C3B" d="M2280.1 505.4v2.1l-1.8.5 1.8-2.6m1-3l-4.2 6-1.2.7h2.2l3.2-.9v-5.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 508.1V497l5 2.8v11z"/>
      <path fill="#3C3C3B" d="M2277.7 497.7l4 2.2V510l-4-2.2v-10m-1-1.7v12.3l6 3.4v-12.3l-6-3.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 508.8v-10.3l3.7 2.2V511z"/>
      <path fill="#3C3C3B" d="M2278.9 499.4l2.8 1.6v9.1l-2.8-1.6v-9.1m-1-1.7v11.4l4.7 2.7v-11.4l-4.7-2.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2279 508.1l3.1-6.5v8.3z"/>
      <path fill="#3C3C3B" d="M2281.7 503.7v5.5l-2.2-1.2 2.2-4.3m1-4.2l-4.2 8.5h-.6l4.7 2.7v-11.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.1 497.4l.7.4v1.3c0 .2 0 .3.2.4h.2v.3l-1.1 7.3v-9.7z"/>
      <path fill="#3C3C3B" d="M2278.6 499.8v1-1m-1-3.2v11.2l.3.2h.6l1.2-8.2v-1l-.4.3v-1.5l-1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 507.4v-9.8l3.7 2.2v9.8z"/>
      <path fill="#3C3C3B" d="M2278.9 498.4l2.8 1.6v8.8l-2.8-1.7v-8.7m-1-1.6v11l4.7 2.6v-11l-4.7-2.6z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2279 507.7v-7.5l3.1 1.9v7.5z"/>
        <path fill="#3C3C3B" d="M2279.4 501l2.3 1.2v6.5l-2.3-1.3V501m-1-1.6v8.6l4.2 2.4v-8.6l-4.1-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2283.1 499.4l-.2-.3-7-4-.1-.2-.2.1-.2.3v-1.1l7.9 4.5-.2.7z"/>
        <path fill="#3C3C3B" d="M2274.7 493.4v15l1 .7v-13.7l7 4V513l.9.6v-15.1z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284 513.3l-.4.3v-15.1l.5-.4z"/>
        <path fill="#3C3C3B" d="M2284 498.1l-.4.4v15.1l.5-.3z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.3 493l-.6.4 8.9 5.1.5-.4z"/>
        <path fill="#3C3C3B" d="M2275.3 493l-.6.4 8.9 5.1.5-.4z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.1 474.6l-1.1-3 8 4 .3.3.7.2.1.1 1.5 3.9-9.5-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
      <path fill="#3C3C3B" d="M2258 472.6l6.9 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m7.8-12.3l-.6 2.4.4 12.7.7.2v-14l-.5-1.3zm-9.6 10.3l1.6 4.3 10.5 6v-.7l-1.6-4.4-.4-.2-.7-.1v-.1l-9.4-4.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.6 472.9l3.8 1.8 1.6 1.2z"/>
      <path fill="#3C3C3B" d="M2254.4 470.7v.8l10.4 6v-.7l-3.2-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2255.3 470.7l.8-.3 9.5 5.4-.8.4z"/>
      <path fill="#3C3C3B" d="M2256.1 469.8l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.3 475.6l-1.2-.5v.5z"/>
      <path fill="#3C3C3B" d="M2265.1 475v.6h1.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.6 476.6l-1.8 1v-.8l1.8-1z"/>
      <path fill="#3C3C3B" d="M2266.6 475.8l-1.8 1v.8l1.8-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.7 472.5l-1.8-1.5 5.9-8v11.4z"/>
      <path fill="#3C3C3B" d="M2263.3 464.5v9.1l-3.3-1.5-1.4-1.2 4.7-6.4m1-3l-7 9.5 2.2 1.9 4.8 2.2v-13.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.7 470.7v-12.3l.3.2 4.2 6v5.4l-2.7.7z"/>
      <path fill="#3C3C3B" d="M2258.2 459.7l3.5 5v4.9l-2.3.6h-1.2v-10.5m-1-2.1v13.6h2.3l3.1-.8v-5.9l-4.2-6.2-1.1-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.9 470.7l3.3-4.7v4l-2.7.7z"/>
      <path fill="#3C3C3B" d="M2261.7 467.5v2.1l-1.8.5 1.8-2.6m1-3l-4.3 6-1.1.6h2.2l3.1-.8v-5.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2258.9 470.2V459l4.9 2.8v11.3z"/>
      <path fill="#3C3C3B" d="M2259.4 459.9l4 2.2v10l-4-2.1v-10.1m-1-1.7v12.3l5.9 3.3v-12.3l-5.9-3.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 470.8v-10.1l3.8 2v10.4z"/>
      <path fill="#3C3C3B" d="M2260.4 461.4l2.8 1.7v9l-2.8-1.5v-9.2m-1-1.6v11.3l4.8 2.7v-11.3l-4.7-2.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260.5 470.2l3.3-6.6v8.4z"/>
      <path fill="#3C3C3B" d="M2263.3 465.8v5.4l-2-1.1 2-4.3m1-4.3l-4.2 8.6h-.5l4.7 2.7v-11.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2259.8 459.5l.6.4v1.2l.2.4.2.1v.3l-1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2260.2 461.8l.1.1v.9-1m-1-3V470l.3.2h.5l1.3-8.2v-1l-.5.2v-1.6l-1.6-.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260 469.6v-9.9l3.8 2.1v10z"/>
      <path fill="#3C3C3B" d="M2260.5 460.6l2.8 1.6v8.7l-2.8-1.6v-8.7m-1-1.8v11l4.8 2.7v-11l-4.7-2.7z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2260.5 469.9v-7.6l3.3 1.8v7.6z"/>
        <path fill="#3C3C3B" d="M2261 463.2l2.2 1.2v6.4l-2.2-1.2v-6.4m-1-1.8v8.7l4.2 2.4v-8.7l-4.2-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2264.7 461.4l-.2-.3-7-4h-.2l-.2.3v-1.2l7.8 4.6-.1.6z"/>
        <path fill="#3C3C3B" d="M2256.3 455.5v15l1 .6v-13.5l7 4v13.6l.8.4v-15z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2265.7 475.4l-.6.2v-15l.6-.3z"/>
        <path fill="#3C3C3B" d="M2265.7 460.3l-.6.3v15l.6-.2z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.9 455.2l-.6.3 8.8 5 .6-.2z"/>
        <path fill="#3C3C3B" d="M2256.9 455.2l-.6.3 8.8 5 .6-.2z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.6 485.4l-1.2-3 8 4.1.4.3.6.2h.1l1.6 4-9.5-5.6zm7.5-11.8l.2-.6v6l-.2-5.4z"/>
      <path fill="#3C3C3B" d="M2276.3 483.4l6.9 3.5c0 .2.3.3.5.3l.6.2 1 2.4-8.3-4.7-.7-1.7m7.8-12.3l-.6 2.4.4 12.7.6.3h.1v-14l-.5-1.4zm-9.6 10.4l1.6 4.3 10.5 6v-.7l-1.7-4.3-.4-.2-.6-.2-9.4-4.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276 483.7l3.7 1.8 1.7 1.4z"/>
      <path fill="#3C3C3B" d="M2272.8 481.7v.8l10.4 6v-.8l-3.2-2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2273.8 481.7l.7-.5 9.5 5.5-.8.5z"/>
      <path fill="#3C3C3B" d="M2274.5 480.7l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.6 486.6l-1-.7v.7z"/>
      <path fill="#3C3C3B" d="M2283.6 486v.6h1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2285 487.6l-1.8 1v-1l1.7-1z"/>
      <path fill="#3C3C3B" d="M2285 486.7l-1.8 1v.8l1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.1 483.4l-1.8-1.4 5.8-8v11.3z"/>
      <path fill="#3C3C3B" d="M2281.7 475.5v9l-3.4-1.5-1.3-1.1 4.7-6.4m1-3l-7 9.5 2.1 1.8 4.8 2.2v-13.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.2 481.5v-12.2l.3.2 4.1 6v5.3l-2.8.7z"/>
      <path fill="#3C3C3B" d="M2276.7 470.6l3.4 5v4.8l-2.3.6h-1.1v-10.4m-1-2.2v13.7h2.2l3.2-.9v-5.8l-4.2-6.3-1.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 481.5l3.4-4.6v4l-2.8.6z"/>
      <path fill="#3C3C3B" d="M2280.1 478.4v2.1l-1.8.5 1.8-2.6m1-3l-4.2 6-1.2.6h2.2l3.2-.9v-5.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 481.1V470l5 2.8v11.1z"/>
      <path fill="#3C3C3B" d="M2277.7 470.7l4 2.3v10l-4-2.2v-10m-1-1.7v12.3l6 3.4v-12.3l-6-3.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 481.7v-10.2l3.7 2.2V484z"/>
      <path fill="#3C3C3B" d="M2278.9 472.4l2.8 1.6v9.1l-2.8-1.6v-9.1m-1-1.7V482l4.7 2.7v-11.4l-4.7-2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2279 481.1l3.1-6.5v8.3z"/>
      <path fill="#3C3C3B" d="M2281.7 476.6v5.5l-2.2-1.2 2.2-4.3m1-4.1l-4.2 8.5h-.6l4.7 2.7v-11.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.1 470.5l.7.3v1.3c0 .2 0 .3.2.4h.2v.4l-1.1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2278.6 472.8v1-1m-1-3.2v11.2l.3.2h.6l1.2-8.1v-1l-.4.2v-1.4l-1.7-1.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2278.4 480.4v-9.8l3.7 2.2v9.8z"/>
      <path fill="#3C3C3B" d="M2278.9 471.4l2.8 1.7v8.7l-2.8-1.6v-8.8m-1-1.6v11l4.7 2.6v-11l-4.7-2.6z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2279 480.7v-7.6l3.1 1.9v7.6z"/>
        <path fill="#3C3C3B" d="M2279.4 474l2.3 1.3v6.4l-2.3-1.3V474m-1-1.6v8.6l4.2 2.4v-8.6l-4.1-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2283.1 472.3l-.2-.3-7-4-.1-.1h-.2l-.2.4V467l7.9 4.5-.2.7z"/>
        <path fill="#3C3C3B" d="M2274.7 466.3v15.2l1 .5v-13.6l7 4V486l.9.6v-15.2z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284 486.2l-.4.4v-15.2l.5-.3z"/>
        <path fill="#3C3C3B" d="M2284 471.1l-.4.3v15.2l.5-.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.3 466l-.6.3 8.9 5.1.5-.3z"/>
        <path fill="#3C3C3B" d="M2275.3 466l-.6.3 8.9 5.1.5-.3z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2269.4 452.5l-1.2-3 8 4 .4.3.6.2.1.1 1.6 3.9-9.5-5.5zm7.5-11.8l.1-.7v6l-.1-5.3z"/>
      <path fill="#3C3C3B" d="M2269 450.5l7 3.4c0 .2.3.3.5.3l.5.2 1 2.4-8.2-4.7-.7-1.6m7.9-12.3l-.6 2.4.4 12.7.6.3h.1v-14.1l-.5-1.3zm-9.7 10.4l1.7 4.3 10.4 6v-.7l-1.6-4.4-.4-.1-.6-.2v-.1l-9.5-4.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2268.9 450.8l3.6 1.8 1.8 1.3z"/>
      <path fill="#3C3C3B" d="M2265.6 448.8v.7l10.5 6v-.8l-3.3-2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2266.6 448.8l.7-.5 9.5 5.4-.7.5z"/>
      <path fill="#3C3C3B" d="M2267.3 447.8l-1.7 1 6.5 3.7 4 2.2 1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.5 453.7l-1.1-.7v.7z"/>
      <path fill="#3C3C3B" d="M2276.4 453v.7h1.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.7 454.6l-1.6 1v-.9l1.6-1z"/>
      <path fill="#3C3C3B" d="M2277.7 453.7l-1.6 1v.9l1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2270.9 450.5l-1.7-1.5 5.7-8v11.3z"/>
      <path fill="#3C3C3B" d="M2274.5 442.5v9.1l-3.4-1.5-1.4-1.2 4.8-6.4m1-3l-7 9.5 2.1 1.9 4.8 2.2v-13.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2269 448.6v-12.2l.3.2 4.1 6v5.3l-2.7.7z"/>
      <path fill="#3C3C3B" d="M2269.5 437.6l3.4 5.1v4.8l-2.3.6h-1.1v-10.5m-1-2.1v13.6h2.2l3.2-.8v-5.9l-4.2-6.2-1.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2270.1 448.6l3.3-4.6v3.9l-2.7.7z"/>
      <path fill="#3C3C3B" d="M2273 445.5v2l-2 .5 2-2.5m.9-3l-4.2 5.9-1.2.6h2.2l3.2-.8v-5.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2270.1 448.2V437l4.8 2.8V451z"/>
      <path fill="#3C3C3B" d="M2270.6 437.8l4 2.2v10.1l-4-2.2v-10m-1-1.7v12.3l6 3.3v-12.3l-6-3.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2271.2 448.9v-10.3l3.7 2.2V451z"/>
      <path fill="#3C3C3B" d="M2271.7 439.4l2.8 1.7v9l-2.8-1.5v-9.2m-1-1.7V449l4.7 2.7v-11.3l-4.7-2.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2271.8 448.2l3.1-6.6v8.4z"/>
      <path fill="#3C3C3B" d="M2274.5 443.7v5.4l-2.2-1.1 2.2-4.3m1-4.2l-4.2 8.6h-.6l4.7 2.7v-11.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2271 437.5l.7.4v1.3c0 .1 0 .2.2.3l.2.1v.3l-1.1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2271.5 439.8v1-1m-1-3.1v11.2l.3.2h.6l1.2-8.2v-1l-.5.3v-1.5l-1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2271.3 447.5v-9.9l3.6 2.2v9.8z"/>
      <path fill="#3C3C3B" d="M2271.8 438.5l2.7 1.6v8.7l-2.7-1.6v-8.7m-1-1.7v11l4.7 2.7v-11l-4.7-2.7z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2271.8 447.8v-7.6l3.1 2v7.4z"/>
        <path fill="#3C3C3B" d="M2272.2 441l2.3 1.3v6.5l-2.3-1.3v-6.4m-1-1.7v8.7l4.2 2.4v-8.7l-4.1-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.9 439.3l-.2-.2-7-4-.1-.2-.2.1-.2.3v-1.1l7.9 4.5-.2.6z"/>
        <path fill="#3C3C3B" d="M2267.5 433.5v15l1 .5v-13.5l7 4v13.6l.9.6v-15.1z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277 453.3l-.6.4v-15.2l.6-.3z"/>
        <path fill="#3C3C3B" d="M2277 438.2l-.6.3v15.2l.6-.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2268.1 433.1l-.6.4 8.9 5 .6-.3z"/>
        <path fill="#3C3C3B" d="M2268.1 433.1l-.6.4 8.9 5 .6-.3z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2309.9 486.8l-7 4.1v-15l7-4.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2313.3 487.4l-10.8 6.3v-1l10.8-6.3z"/>
      <path fill="#3C3C3B" d="M2313.3 486.4l-10.8 6.2v1.1l10.8-6.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2301.5 491.6l9.8-5.7 1 .5-9.8 5.7z"/>
      <path fill="#3C3C3B" d="M2311.3 485.3l-10.7 6.3 1.9 1 10.8-6.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2309.9 486.8l-.5-.2v-15l.5-.3z"/>
      <path fill="#3C3C3B" d="M2309.9 471.3l-.5.3v15l.5.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2302 491.5l-.5-.3v-16.5l.4.2z"/>
      <path fill="#3C3C3B" d="M2301.5 474.7v16.5l.4.3v-16.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2302.4 475.2l7.9-4.6v1.2l-.2-.2h-.5l-7 4.1-.2.2v-.7z"/>
      <path fill="#3C3C3B" d="M2310.8 469.7l-8.9 5.2v16.6l1-.6V476l7-4.1v14.9l.9-.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2300.6 492.5l1.9 1.2v-1l-2-1.1z"/>
      <path fill="#3C3C3B" d="M2300.6 491.6v1l1.9 1.1v-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2301.5 474.7l.4.2 8.9-5.2-.5-.2z"/>
      <path fill="#3C3C3B" d="M2310.3 469.5l-8.8 5.2.4.2 8.9-5.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2329.4 476.6l-7 4.1v-14.9l7-4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2332.8 477.3l-10.7 6.3v-1l10.7-6.3z"/>
      <path fill="#3C3C3B" d="M2332.8 476.3l-10.7 6.3v1l10.7-6.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2321.1 481.4l9.8-5.7 1 .6-9.8 5.7z"/>
      <path fill="#3C3C3B" d="M2331 475.3l-10.8 6.1 1.9 1.2 10.7-6.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2329.4 476.7l-.5-.3v-14.9l.5-.4z"/>
      <path fill="#3C3C3B" d="M2329.4 461.1l-.5.4v15l.5.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2321.5 481.3l-.5-.2v-16.5l.5.1z"/>
      <path fill="#3C3C3B" d="M2321 464.6v16.5l.5.2v-16.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2322 465l7.9-4.6v1.2l-.2-.2h-.5l-7 4.2c-.1 0-.2 0-.2.2v-.8z"/>
      <path fill="#3C3C3B" d="M2330.3 459.5l-8.8 5.2v16.6l.9-.5V466l7-4v14.8l1-.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2320.2 482.4l1.9 1.2v-1l-2-1.2z"/>
      <path fill="#3C3C3B" d="M2320.2 481.4v1l1.9 1.2v-1z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2321 464.6l.5.1 8.8-5.2-.5-.2z"/>
        <path fill="#3C3C3B" d="M2329.8 459.3l-8.8 5.3.5.1 8.8-5.2z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2309.9 511l-7 4.1v-14.9l7-4.1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2313.3 511.7l-10.8 6.3v-1.2l10.8-6.1z"/>
        <path fill="#3C3C3B" d="M2313.3 510.7l-10.8 6.1v1.2l10.8-6.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2301.5 515.8l9.8-5.7 1 .6-9.8 5.7z"/>
        <path fill="#3C3C3B" d="M2311.3 509.5l-10.7 6.3 1.9 1 10.8-6.1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2309.9 511l-.5-.2v-15l.5-.3z"/>
        <path fill="#3C3C3B" d="M2309.9 495.5l-.5.3v15l.5.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2302 515.7l-.5-.2v-16.6l.4.2z"/>
        <path fill="#3C3C3B" d="M2301.5 498.9v16.6l.4.2v-16.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2302.4 499.4l7.9-4.6v1.2l-.2-.2h-.5l-7 4.1-.2.2v-.7z"/>
        <path fill="#3C3C3B" d="M2310.8 493.9l-8.9 5.2v16.6l1-.6v-14.8l7-4.1V511l.9-.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2300.6 516.8l1.9 1.2v-1.2l-2-1z"/>
        <path fill="#3C3C3B" d="M2300.6 515.8v1l1.9 1.2v-1.2z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2301.5 498.9l.4.2 8.9-5.2-.5-.2z"/>
          <path fill="#3C3C3B" d="M2310.3 493.7l-8.8 5.2.4.2 8.9-5.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2329.4 500.9l-7 4.1v-15l7-4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2332.8 501.5l-10.7 6.3v-1l10.7-6.3z"/>
        <path fill="#3C3C3B" d="M2332.8 500.5l-10.7 6.3v1l10.7-6.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2321.1 505.7l9.8-5.7 1 .5-9.8 5.7z"/>
        <path fill="#3C3C3B" d="M2331 499.5l-10.8 6.2 1.9 1 10.7-6.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2329.4 500.9l-.5-.2v-15l.5-.3z"/>
        <path fill="#3C3C3B" d="M2329.4 485.4l-.5.3v15l.5.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2321.5 505.6l-.5-.3v-16.5l.5.2z"/>
        <path fill="#3C3C3B" d="M2321 488.8v16.5l.5.3V489z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2322 489.3l7.9-4.6v1.2l-.2-.2h-.5l-7 4.2c-.1 0-.2 0-.2.2v-.8z"/>
        <path fill="#3C3C3B" d="M2330.3 483.8l-8.8 5.2v16.6l.9-.6v-14.9l7-4v14.8l1-.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2320.2 506.7l1.9 1.1v-1l-2-1z"/>
        <path fill="#3C3C3B" d="M2320.2 505.7v1l1.9 1.1v-1z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2321 488.8l.5.2 8.8-5.2-.5-.2z"/>
          <path fill="#3C3C3B" d="M2329.8 483.6l-8.8 5.2.5.2 8.8-5.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2310.3 535.1l-7 4.1v-14.9l7-4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2313.7 535.8L2303 542v-1l10.7-6.2z"/>
        <path fill="#3C3C3B" d="M2313.7 534.8L2303 541v1l10.7-6.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2302 539.9l9.8-5.7 1 .6-9.8 5.7z"/>
        <path fill="#3C3C3B" d="M2311.8 533.7l-10.7 6.2 1.9 1 10.7-6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2310.3 535.1l-.4-.2v-15l.4-.3z"/>
        <path fill="#3C3C3B" d="M2310.3 519.6l-.4.3v15l.4.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2302.4 539.8l-.5-.2V523l.5.2z"/>
        <path fill="#3C3C3B" d="M2302 523v16.6l.4.2v-16.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2302.9 523.5l7.9-4.6v1.2l-.2-.2h-.5l-7 4.2-.2.1v-.7z"/>
        <path fill="#3C3C3B" d="M2311.2 518l-8.8 5.2v16.6l1-.6v-14.8l6.9-4.1v14.8l1-.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2301 540.9l2 1.1v-1l-2-1.1z"/>
        <path fill="#3C3C3B" d="M2301 539.9v1l2 1.1v-1z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2302 523l.4.2 8.8-5.2-.5-.2z"/>
          <path fill="#3C3C3B" d="M2310.7 517.8l-8.8 5.2.5.2 8.8-5.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2329.9 525l-7 4.1v-15l7-4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2333.3 525.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path fill="#3C3C3B" d="M2333.3 524.6l-10.8 6.3v1l10.8-6.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2321.5 529.8l10-5.7.8.5-9.8 5.7z"/>
        <path fill="#3C3C3B" d="M2331.4 523.6l-10.8 6.2 1.9 1 10.8-6.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2329.9 525l-.5-.2v-15l.5-.3z"/>
        <path fill="#3C3C3B" d="M2329.9 509.5l-.5.3v15l.5.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2322 529.7l-.5-.3V513l.5.2z"/>
        <path fill="#3C3C3B" d="M2321.5 513v16.4l.5.3v-16.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2322.5 513.4l7.8-4.6v1.2l-.1-.2h-.5l-7 4.2c-.1 0-.2 0-.2.2v-.8z"/>
        <path fill="#3C3C3B" d="M2330.7 508l-8.7 5.1v16.6l.9-.6v-14.8l7-4.2v15l.8-.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2320.6 530.8l1.9 1.1v-1l-2-1z"/>
        <path fill="#3C3C3B" d="M2320.6 529.8v1l1.9 1.1v-1z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M2321.5 513l.5.1 8.7-5.2-.4-.2z"/>
          <path fill="#3C3C3B" d="M2330.3 507.7l-8.8 5.2.5.2 8.7-5.2z"/>
        </g>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2206.7 585.4v-28.9l41.3 23.8v29z"/>
      <path fill="#3C3C3B" d="M2207.2 557.4l40.3 23.2v27.8l-40.3-23.3v-27.7m-1-1.7v30l42.2 24.4v-30l-42.1-24.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2249 580.3l41.2-23.8v29l-41.2 23.7z"/>
      <path fill="#3C3C3B" d="M2289.7 557.4V585l-40.2 23.3v-27.8l40.2-23.2m1-1.7l-42.2 24.4v30l42.2-24.4v-30z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2207.2 555.7l41.3-23.8 41.2 23.8-41.2 23.9z"/>
      <path fill="#3C3C3B" d="M2248.5 532.5l40.3 23.2-40.3 23.3-40.2-23.3 40.2-23.2m0-1.1l-42.1 24.3 42.1 24.4 42.2-24.4-42.2-24.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2204.2 556.9v-4l41.2 23.8v4z"/>
      <path fill="#3C3C3B" d="M2204.7 553.7L2245 577v2.8l-40.3-23.2v-2.9m-1-1.6v5l42.2 24.5v-5.1l-42.1-24.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2204.7 552.1l43.8-25.3 41.2 23.8-43.8 25.3z"/>
      <path fill="#3C3C3B" d="M2248.5 527.3l40.3 23.3-42.9 24.6-40.2-23.2 42.8-24.7m0-1l-44.7 25.8 42.1 24.4 44.8-25.8-42.2-24.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2204.2 556.9v-4l41.2 23.8v4z"/>
      <path fill="#3C3C3B" d="M2204.7 553.7L2245 577v2.8l-40.3-23.2v-2.9m-1-1.6v5l42.2 24.5v-5.1l-42.1-24.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2246.4 576.7l43.8-25.3v4l-43.8 25.3z"/>
      <path fill="#3C3C3B" d="M2289.7 552.3v2.9l-42.8 24.7v-3l42.8-24.6m1-1.7l-44.8 25.8v5l44.8-25.8v-5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2206.7 550.4v-77.6l23.2-36.3L2248 497v77z"/>
      <path fill="#3C3C3B" d="M2229.8 437.6l17.8 59.6v76.1l-40.3-23.2V473l22.5-35.4m.3-2.3l-23.8 37.4v78l42.1 24.3v-78l-18.3-61.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2249 497.4l41.2-23.9v76.9l-41.2 23.8z"/>
      <path fill="#3C3C3B" d="M2289.7 474.3V550l-40.2 23.2v-75.7l40.2-23.2m1-1.6l-42.2 24.4v78l42.2-24.4v-78z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#4A4A49" d="M2230.7 435.8l38.9-17.2 20.5 53.9-41.3 23.8z"/>
      <path fill="#3C3C3B" d="M2269.3 419.3l20.1 53-40.4 23.3-17.8-59.5 38-16.8m.6-1.4l-39.7 17.6 18.4 61.6 42.2-24.4-20.9-54.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213 552.3l-1.2-3 8.1 4 .3.3.7.2v.1l1.6 3.9-9.5-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
      <path fill="#3C3C3B" d="M2212.7 550.3l7 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m7.9-12.3l-.6 2.4.4 12.7.7.2v-14l-.5-1.3zm-9.6 10.3l1.6 4.4 10.5 6v-.7l-1.7-4.4-.3-.2-.7-.2-9.4-4.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.5 550.6l3.7 1.8 1.7 1.3z"/>
      <path fill="#3C3C3B" d="M2209.2 548.4v1l10.5 5.9v-.8l-3.3-2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2210.2 548.4l.8-.3 9.4 5.4-.7.4z"/>
      <path fill="#3C3C3B" d="M2211 547.5l-1.8 1 6.6 3.8 4 2.2 1.5-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.2 553.4l-1.2-.6v.6z"/>
      <path fill="#3C3C3B" d="M2220 552.8v.6h1.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.3 554.3l-1.6 1v-.8l1.6-1z"/>
      <path fill="#3C3C3B" d="M2221.3 553.5l-1.6 1v.8l1.6-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.5 550.3l-1.7-1.6 5.8-8v11.4z"/>
      <path fill="#3C3C3B" d="M2218 542.3v9.1l-3.3-1.5-1.3-1.2 4.7-6.4m1-3l-7 9.5 2.1 1.9 4.8 2.2v-13.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.6 548.3v-12.1l.3.1 4.1 6.1v5.3l-2.7.6z"/>
      <path fill="#3C3C3B" d="M2213 537.4l3.5 5v4.9l-2.3.6h-1.1v-10.5m-1-2.1v13.6h2.2l3.2-.8v-5.9l-4.2-6.2-1.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.8 548.3l3.2-4.6v4l-2.7.6z"/>
      <path fill="#3C3C3B" d="M2216.5 545.2v2l-1.8.6 1.8-2.6m1-3l-4.2 6-1.2.6h2.2l3.2-.8v-5.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.8 548v-11.3l4.8 3v11z"/>
      <path fill="#3C3C3B" d="M2214.2 537.6l4 2.2v10l-4-2.1v-10.1m-1-1.6v12.3l6 3.3v-12.3l-6-3.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.8 548.5v-10.1l3.8 2v10.4z"/>
      <path fill="#3C3C3B" d="M2215.3 539.2l2.8 1.7v9l-2.8-1.6v-9m-1-1.8v11.3l4.7 2.7v-11.2l-4.7-2.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215.4 548l3.2-6.6v8.4z"/>
      <path fill="#3C3C3B" d="M2218 543.5v5.4l-2-1.1 2-4.3m1-4.2l-4 8.6h-.7l4.7 2.7v-11.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.6 537.3l.7.4v1.2c0 .2 0 .3.2.4l.2.1v.3l-1 7.2v-9.6z"/>
      <path fill="#3C3C3B" d="M2215.1 539.5l.1.1-.1.9v-1m-1-3v11.2l.3.2h.6l1.3-8.2v-1l-.5.2v-1.5l-1.7-1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.8 547.3v-9.9l3.8 2.2v9.8z"/>
      <path fill="#3C3C3B" d="M2215.3 538.3l2.8 1.6v8.7l-2.8-1.6v-8.7m-1-1.7v11l4.7 2.7v-11l-4.7-2.7z"/>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215.4 547.6V540l3.2 1.8v7.6z"/>
        <path fill="#3C3C3B" d="M2215.9 540.9l2.2 1.2v6.4l-2.2-1.2v-6.4m-1-1.7v8.7l4.1 2.4v-8.7l-4-2.4z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2219.5 539.1s0-.2-.2-.3l-6.9-4h-.4l-.2.3v-1.2l8 4.6-.3.6z"/>
        <path fill="#3C3C3B" d="M2211.2 533.2v15.1l1 .5v-13.5l6.8 4V553l1 .5v-15.1z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2220.6 553l-.6.4v-15.1l.6-.3z"/>
        <path fill="#3C3C3B" d="M2220.6 538l-.6.3v15.1l.6-.3z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2211.7 532.9l-.5.3 8.8 5 .6-.2z"/>
        <path fill="#3C3C3B" d="M2211.7 532.9l-.5.3 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231.3 563.1l-1.1-3 8 4.1.3.3.7.2h.1l1.5 4-9.5-5.6zm7.5-11.8l.2-.6v6l-.2-5.4z"/>
        <path fill="#3C3C3B" d="M2231.1 561.2l7 3.5c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.7m7.8-12.4l-.6 2.4.4 12.7.7.3v-14l-.5-1.4zm-9.6 10.4l1.6 4.3 10.5 6v-.7l-1.6-4.3-.4-.2-.7-.2v-.1l-9.4-4.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.9 561.5l3.7 1.8 1.6 1.3z"/>
        <path fill="#3C3C3B" d="M2227.6 559.4v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2228.5 559.4l.8-.4 9.5 5.5-.7.4z"/>
        <path fill="#3C3C3B" d="M2229.3 558.4l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.5 564.3l-1.2-.7v.7z"/>
        <path fill="#3C3C3B" d="M2238.3 563.6v.7h1.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.8 565.3l-1.7 1v-.9l1.7-1z"/>
        <path fill="#3C3C3B" d="M2239.8 564.5l-1.7 1v.7l1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.9 561.1l-1.8-1.4 5.9-8V563z"/>
        <path fill="#3C3C3B" d="M2236.5 553.2v9l-3.3-1.5-1.4-1.1 4.7-6.4m1-3l-7 9.5 2.2 1.8 4.8 2.2v-13.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231 559.3V547l.2.2 4.2 6v5.3l-2.7.8z"/>
        <path fill="#3C3C3B" d="M2231.4 548.3l3.5 5.1v4.8l-2.3.6h-1.2v-10.5m-1-2.2v13.7h2.3l3.1-.9v-5.8l-4.2-6.3-1.1-.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.1 559.3l3.3-4.7v4l-2.7.7z"/>
        <path fill="#3C3C3B" d="M2234.9 556.1v2.1l-1.8.5 1.8-2.6m1-3l-4.3 6-1.1.7h2.2l3.1-.9v-5.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.1 558.8v-11.1l4.9 2.8v11.1z"/>
        <path fill="#3C3C3B" d="M2232.6 548.5l4 2.3v10l-4-2.2v-10m-1-1.8v12.3l5.9 3.4v-12.3l-5.9-3.4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.2 559.5v-10.3l3.8 2.2v10.2z"/>
        <path fill="#3C3C3B" d="M2233.6 550l2.8 1.7v9.1l-2.8-1.6v-9.1m-1-1.7v11.4l4.8 2.7V551l-4.7-2.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.8 558.8l3.2-6.5v8.3z"/>
        <path fill="#3C3C3B" d="M2236.5 554.4v5.5l-2-1.2 2-4.3m1-4.2l-4.2 8.5h-.5l4.7 2.7v-11.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233 548.2l.6.3v1.3l.2.4h.2v.4l-1 7.2v-9.6z"/>
        <path fill="#3C3C3B" d="M2233.4 550.5h.1v1-1m-1-3.2v11.2l.3.2h.5l1.3-8.1v-1l-.5.2v-1.5l-1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.3 558.1v-9.8l3.7 2.2v9.9z"/>
        <path fill="#3C3C3B" d="M2233.7 549.1l2.8 1.6v8.8l-2.8-1.6V549m-1-1.6v11l4.8 2.6v-11l-4.7-2.6z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.7 558.4V551l3.3 1.9v7.6z"/>
          <path fill="#3C3C3B" d="M2234.2 551.7l2.2 1.3v6.4l-2.2-1.3v-6.4m-1-1.6v8.6l4.2 2.4v-8.6l-4.1-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2237.9 550l-.2-.2-7-4-.1-.1h-.2l-.2.3v-1l7.9 4.5-.2.7z"/>
          <path fill="#3C3C3B" d="M2229.6 544.1v15.1l.9.6v-13.6l7 4v13.5l.8.6v-15z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239 564l-.7.3v-15.1l.6-.4z"/>
          <path fill="#3C3C3B" d="M2239 548.8l-.7.4v15.1l.6-.3z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230 543.7l-.4.4 8.7 5.1.6-.4z"/>
          <path fill="#3C3C3B" d="M2230 543.7l-.4.4 8.7 5.1.6-.4z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.5 584l-1.1-3 8 4 .3.3.7.2v.1l1.6 3.9-9.5-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
        <path fill="#3C3C3B" d="M2212.2 582l7 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m7.9-12.3l-.6 2.4.4 12.6.7.3v-14l-.5-1.3zm-9.7 10.2l1.6 4.4 10.5 6v-.7l-1.6-4.4-.4-.2-.7-.2-9.4-4.9z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212 582.3l3.7 1.8 1.7 1.2z"/>
        <path fill="#3C3C3B" d="M2208.8 580.1v.8l10.4 6v-.7l-3.2-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2209.7 580.1l.7-.3 9.5 5.4-.7.4z"/>
        <path fill="#3C3C3B" d="M2210.4 579.2l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2220.6 585l-1-.5v.5z"/>
        <path fill="#3C3C3B" d="M2219.5 584.5v.5h1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2220.9 586l-1.7 1v-.8l1.7-1z"/>
        <path fill="#3C3C3B" d="M2220.9 585.2l-1.7 1v.8l1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214 581.9l-1.7-1.5 5.8-8v11.4z"/>
        <path fill="#3C3C3B" d="M2217.6 573.9v9.1l-3.4-1.5-1.3-1.2 4.7-6.4m1-3l-7 9.5 2.2 1.9 4.8 2.2v-13.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.1 580v-12.3l.3.2 4.1 6v5.5l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2212.6 569l3.5 5.2v4.8l-2.3.6h-1.2V569m-1-2.1v13.6h2.3l3.1-.8v-5.9l-4.2-6.2-1.2-.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.2 580l3.3-4.6v4l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2216 576.9v2l-1.8.6 1.9-2.6m1-3l-4.3 6-1.2.6h2.3l3.1-.8v-5.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.2 579.6v-11.2l4.9 2.8v11.2z"/>
        <path fill="#3C3C3B" d="M2213.7 569.3l3.9 2.2v10l-4-2.1v-10.1m-.9-1.7v12.3l5.9 3.3V571l-5.9-3.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.3 580.2v-10.1l3.8 2v10.3z"/>
        <path fill="#3C3C3B" d="M2214.8 570.8l2.8 1.7v9l-2.8-1.6v-9m-1-1.7v11.3l4.8 2.7V572l-4.7-2.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215 579.6l3-6.6v8.4z"/>
        <path fill="#3C3C3B" d="M2217.6 575.1v5.5l-2-1.1 2-4.4m1-4.2l-4.2 8.6h-.5l4.7 2.7v-11.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214 568.9l.7.4v1.2l.2.4.2.1v.3l-1 7.2V569z"/>
        <path fill="#3C3C3B" d="M2214.5 571.2l.1.1v.9-1m-1-3v11.2l.3.2h.5l1.3-8.2v-1l-.5.2v-1.4l-1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.3 579v-10l3.8 2.2v9.9z"/>
        <path fill="#3C3C3B" d="M2214.8 570l2.8 1.6v8.7l-2.8-1.6V570m-1-1.8v11l4.8 2.7v-11l-4.7-2.7z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215 579.3v-7.6l3 1.8v7.6z"/>
          <path fill="#3C3C3B" d="M2215.4 572.6l2.2 1.2v6.4l-2.2-1.2v-6.4m-1-1.8v8.7l4.2 2.4v-8.7l-4.2-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2219 570.8s0-.2-.2-.3l-6.9-4-.2-.1-.2.1-.1.3v-1.2l7.8 4.5-.2.7z"/>
          <path fill="#3C3C3B" d="M2210.7 564.9v15l1 .6V567l6.9 4v13.6l1 .4v-15z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2220 584.7l-.5.3v-15l.6-.3z"/>
          <path fill="#3C3C3B" d="M2220 569.7l-.5.3v15l.6-.3z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2211.3 564.6l-.6.3 8.8 5 .6-.2z"/>
          <path fill="#3C3C3B" d="M2211.3 564.6l-.6.3 8.8 5 .6-.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.9 594.8l-1.2-3 8 4 .4.4.6.2h.1l1.6 4-9.5-5.6zm7.4-11.8l.2-.7v6.1l-.2-5.4z"/>
        <path fill="#3C3C3B" d="M2230.6 592.8l6.9 3.5c0 .2.3.3.5.3l.5.2 1 2.4-8.2-4.8-.7-1.6m7.8-12.3l-.5 2.4.3 12.7.7.3h.1v-14l-.6-1.4zm-9.6 10.4l1.7 4.3 10.4 6v-.7l-1.6-4.3-.4-.2-.7-.2v-.1l-9.4-4.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.4 593.1l3.6 1.8 1.8 1.4z"/>
        <path fill="#3C3C3B" d="M2227.1 591v.9l10.5 6v-.9l-3.3-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2228 591l.8-.4 9.4 5.5-.6.5z"/>
        <path fill="#3C3C3B" d="M2228.8 590.1l-1.7 1 6.5 3.7 4 2.2 1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239 596l-1.1-.7v.7z"/>
        <path fill="#3C3C3B" d="M2237.9 595.3v.7h1.1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.2 597l-1.6 1v-1l1.6-1z"/>
        <path fill="#3C3C3B" d="M2239.2 596l-1.6 1v1l1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.4 592.8l-1.7-1.4 5.7-8v11.2z"/>
        <path fill="#3C3C3B" d="M2236 584.8v9.2l-3.4-1.6-1.4-1.1 4.7-6.5m1-3l-7 9.6 2.2 1.8 4.8 2.2V582z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.5 590.9v-12.2l.3.2 4 6v5.3l-2.6.7z"/>
        <path fill="#3C3C3B" d="M2231 580l3.4 5v4.8l-2.3.6h-1.2V580m-1-2v13.4h2.3l3.2-.9v-5.9l-4.3-6.2-1.1-.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231.6 590.9l3.3-4.6v4l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2234.4 587.8v2.1l-1.8.5 1.8-2.6m1-3l-4.3 5.9-1.1.7h2.2l3.2-.9v-5.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231.6 590.5v-11.1l4.8 2.8v11.1z"/>
        <path fill="#3C3C3B" d="M2232.1 580.1l4 2.2v10.1l-4-2.2v-10m-1-1.7v12.3l5.9 3.4v-12.3l-5.9-3.4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.7 591v-10l3.7 2.1v10.2z"/>
        <path fill="#3C3C3B" d="M2233.2 581.8l2.7 1.6v9.1l-2.7-1.6v-9.1m-1-1.8v11.4l4.7 2.7v-11.4l-4.7-2.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.3 590.5l3.1-6.5v8.3z"/>
        <path fill="#3C3C3B" d="M2236 586v5.5l-2.2-1.2 2.1-4.3m1-4.1l-4.1 8.5h-.6l4.7 2.7v-11.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.5 579.9l.7.3v1.3l.1.4h.2v.4l-1 7.2v-9.6z"/>
        <path fill="#3C3C3B" d="M2233 582.2v1-1m-1-3.2v11.2l.3.2h.6l1.2-8.1v-1l-.5.2V580l-1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.7 589.8V580l3.7 2.3v9.8z"/>
        <path fill="#3C3C3B" d="M2233.2 580.8l2.7 1.6v8.8l-2.7-1.6v-8.8m-1-1.6v11l4.7 2.6v-11l-4.7-2.6z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.3 590.1v-7.6l3.1 1.9v7.6z"/>
          <path fill="#3C3C3B" d="M2233.7 583.4l2.2 1.3v6.4l-2.2-1.3v-6.4m-1-1.6v8.6l4.2 2.4v-8.6l-4.1-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2237.4 581.7l-.2-.3-7-4-.1-.1h-.2l-.2.3v-1.1l7.9 4.5-.2.7z"/>
          <path fill="#3C3C3B" d="M2229 575.7V591l1 .5v-13.6l6.9 4v13.6l1 .6v-15.2z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2238.4 595.6l-.5.4v-15.2l.5-.3z"/>
          <path fill="#3C3C3B" d="M2238.4 580.5l-.5.3V596l.5-.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2229.6 575.4l-.6.3 8.9 5.1.5-.3z"/>
          <path fill="#3C3C3B" d="M2229.6 575.4l-.6.3 8.9 5.1.5-.3z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213 526.2l-1.2-3 8.1 4 .3.3.7.2v.1l1.6 3.8-9.5-5.4zm7.5-11.9l.2-.6v6l-.2-5.4z"/>
        <path fill="#3C3C3B" d="M2212.7 524.1l7 3.5c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.7m7.9-12.2l-.6 2.4.4 12.6.7.3v-14l-.5-1.3zm-9.6 10.3l1.6 4.3 10.5 6.1v-.8l-1.7-4.3-.3-.2-.7-.2-9.4-4.9z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.5 524.4l3.7 1.9 1.7 1.3z"/>
        <path fill="#3C3C3B" d="M2209.2 522.4v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2210.2 522.4l.8-.5 9.4 5.5-.7.5z"/>
        <path fill="#3C3C3B" d="M2211 521.5l-1.8 1 6.6 3.7 4 2.2 1.5-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.2 527.3l-1.2-.7v.7z"/>
        <path fill="#3C3C3B" d="M2220 526.6v.7h1.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.3 528.3l-1.6 1v-1l1.6-.9z"/>
        <path fill="#3C3C3B" d="M2221.3 527.4l-1.6 1v.8l1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.5 524.1l-1.7-1.4 5.8-8V526z"/>
        <path fill="#3C3C3B" d="M2218 516.2v9.1l-3.3-1.5-1.3-1.2 4.7-6.4m1-3l-7 9.5 2.1 1.8 4.8 2.2v-13.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.6 522.2V510l.3.2 4.1 6v5.4l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2213 511.3l3.5 5v4.9l-2.3.5h-1.1v-10.4m-1-2.1v13.6h2.2l3.2-.9v-5.8l-4.2-6.3-1.2-.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.8 522.2l3.2-4.6v4l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2216.5 519.2v2l-1.8.5 1.8-2.5m1-3.1l-4.2 6-1.2.6h2.2l3.2-.9v-5.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.8 521.8v-11.1l4.8 2.8v11.1z"/>
        <path fill="#3C3C3B" d="M2214.2 511.5l4 2.2v10l-4-2.1v-10.1m-1-1.7v12.3l6 3.4v-12.3l-6-3.4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.8 522.4v-10.2l3.8 2.2v10.2z"/>
        <path fill="#3C3C3B" d="M2215.3 513.1l2.8 1.6v9.2l-2.8-1.7v-9.1m-1-1.7v11.3l4.7 2.7v-11.3l-4.7-2.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215.4 521.8l3.2-6.5v8.4z"/>
        <path fill="#3C3C3B" d="M2218 517.3v5.5l-2-1.2 2-4.3m1-4.1l-4 8.5h-.7l4.7 2.7v-11.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.6 511.2l.7.4v1.2c0 .2 0 .3.2.4h.2v.4l-1 7.2v-9.6z"/>
        <path fill="#3C3C3B" d="M2215.1 513.4h.1l-.1 1v-1m-1-3v11.2l.3.1h.6l1.3-8.1v-1l-.5.2v-1.4l-1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.8 521.2v-10l3.8 2.3v9.8z"/>
        <path fill="#3C3C3B" d="M2215.3 512.1l2.8 1.7v8.7l-2.8-1.6V512m-1-1.6v11l4.7 2.6v-10.9l-4.7-2.7z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215.4 521.5v-7.6l3.2 1.8v7.6z"/>
          <path fill="#3C3C3B" d="M2215.9 514.7l2.2 1.3v6.4l-2.2-1.2v-6.5m-1-1.6v8.6l4.1 2.4v-8.6l-4-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2219.5 513s0-.2-.2-.3l-6.9-4-.2-.1h-.2l-.2.4v-1.2l8 4.5-.3.7z"/>
          <path fill="#3C3C3B" d="M2211.2 507v15.2l1 .5v-13.5l6.8 4v13.5l1 .6v-15.2z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2220.6 527l-.6.3v-15.2l.6-.2z"/>
          <path fill="#3C3C3B" d="M2220.6 511.9l-.6.2v15.2l.6-.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2211.7 506.8l-.5.3 8.8 5 .6-.2z"/>
          <path fill="#3C3C3B" d="M2211.7 506.8l-.5.3 8.8 5 .6-.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231.3 537.1l-1.1-3 8 4 .3.4.7.1.1.1 1.5 3.9-9.5-5.5zm7.5-11.9l.2-.7v6l-.2-5.3z"/>
        <path fill="#3C3C3B" d="M2231.1 535.1l7 3.5.4.2.6.2 1 2.4-8.2-4.7-.8-1.6m7.8-12.4l-.6 2.4.4 12.7.7.3v-14l-.5-1.4zm-9.6 10.4l1.6 4.3 10.5 6v-.7l-1.6-4.3-.4-.2-.7-.2v-.1l-9.4-4.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.9 535.4l3.7 1.8 1.6 1.3z"/>
        <path fill="#3C3C3B" d="M2227.6 533.3v.7l10.5 6v-.7l-3.3-2.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2228.5 533.3l.8-.4 9.5 5.5-.7.3z"/>
        <path fill="#3C3C3B" d="M2229.3 532.3l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.5 538.2l-1.2-.7v.7z"/>
        <path fill="#3C3C3B" d="M2238.3 537.5v.7h1.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.8 539.1l-1.7 1v-.8l1.7-1z"/>
        <path fill="#3C3C3B" d="M2239.8 538.4l-1.7 1v.7l1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.9 535l-1.8-1.4 5.9-8v11.3z"/>
        <path fill="#3C3C3B" d="M2236.5 527v9.2l-3.3-1.6-1.4-1.1 4.7-6.5m1-3l-7 9.6 2.2 1.8 4.8 2.2V524z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231 533.2v-12.3l.2.2 4.2 6v5.3l-2.7.8z"/>
        <path fill="#3C3C3B" d="M2231.4 522.2l3.5 5.1v4.8l-2.3.6h-1.2v-10.5m-1-2v13.5h2.3l3.1-1V527l-4.2-6.2-1.1-.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.1 533.2l3.3-4.7v4l-2.7.7z"/>
        <path fill="#3C3C3B" d="M2234.9 530v2.1l-1.8.5 1.8-2.6m1-3l-4.3 6-1.1.7h2.2l3.1-1V527z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.1 532.7v-11.1l4.9 2.7v11.2z"/>
        <path fill="#3C3C3B" d="M2232.6 522.4l4 2.2v10.1l-4-2.2v-10m-1-1.8V533l5.9 3.3V524l-5.9-3.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.2 533.4V523l3.8 2.2v10.2z"/>
        <path fill="#3C3C3B" d="M2233.6 524l2.8 1.6v9.1l-2.8-1.6V524m-1-1.7v11.4l4.8 2.6V525l-4.7-2.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.8 532.7l3.2-6.5v8.3z"/>
        <path fill="#3C3C3B" d="M2236.5 528.3v5.4l-2-1.1 2-4.3m1-4.3l-4.2 8.6h-.5l4.7 2.7V524z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233 522l.6.4v1.3l.2.4h.2v.3l-1 7.2V522z"/>
        <path fill="#3C3C3B" d="M2233.4 524.3l.1.1v.9-1m-1-3.1v11.2l.3.2h.5l1.3-8.2v-1l-.5.3v-1.5l-1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.3 532v-9.8l3.7 2.1v10z"/>
        <path fill="#3C3C3B" d="M2233.7 523l2.8 1.6v8.8l-2.8-1.7V523m-1-1.6v11l4.8 2.6v-11l-4.7-2.6z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.7 532.4v-7.6l3.3 1.8v7.6z"/>
          <path fill="#3C3C3B" d="M2234.2 525.6l2.2 1.2v6.5l-2.2-1.3v-6.4m-1-1.6v8.6l4.2 2.4v-8.6l-4.1-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2237.9 524l-.2-.3-7-4-.1-.2-.2.1-.2.3v-1.1l7.9 4.5-.2.7z"/>
          <path fill="#3C3C3B" d="M2229.6 518v15l.9.7V520l7 4v13.5l.8.6V523z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239 537.9l-.7.3V523l.6-.4z"/>
          <path fill="#3C3C3B" d="M2239 522.7l-.7.4v15.1l.6-.3z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230 517.7l-.4.3 8.7 5 .6-.2z"/>
          <path fill="#3C3C3B" d="M2230 517.7l-.4.3 8.7 5 .6-.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213 499.2l-1.2-3 8.1 4 .3.3.7.2v.1l1.6 3.9-9.5-5.5zm7.5-12l.2-.6v6l-.2-5.3z"/>
        <path fill="#3C3C3B" d="M2212.7 497.2l7 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m7.9-12.3l-.6 2.4.4 12.6.7.3v-14l-.5-1.3zM2211 495l1.6 4.4 10.5 6v-.8l-1.7-4.3-.3-.2-.7-.2-9.4-4.9z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.5 497.4l3.7 1.9 1.7 1.2z"/>
        <path fill="#3C3C3B" d="M2209.2 495.3v.9l10.5 6v-.8l-3.3-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2210.2 495.3l.8-.4 9.4 5.5-.7.4z"/>
        <path fill="#3C3C3B" d="M2211 494.4l-1.8 1 6.6 3.7 4 2.3 1.5-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.2 500.2l-1.2-.5v.5z"/>
        <path fill="#3C3C3B" d="M2220 499.7v.5h1.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.3 501.2l-1.6 1v-.8l1.6-1z"/>
        <path fill="#3C3C3B" d="M2221.3 500.4l-1.6 1v.8l1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.5 497l-1.7-1.4 5.8-8V499z"/>
        <path fill="#3C3C3B" d="M2218 489v9.2l-3.3-1.5-1.3-1.2 4.7-6.4m1-2.9l-7 9.5 2.1 1.8 4.8 2.3v-13.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2212.6 495.2V483l.3.1 4.1 6v5.5l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2213 484.3l3.5 5v4.9l-2.3.6h-1.1v-10.5m-1-2.1v13.6h2.2l3.2-.9v-5.8l-4.2-6.3-1.2-.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.8 495.2l3.2-4.6v4l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2216.5 492v2.2l-1.8.5 1.8-2.6m1-3l-4.2 6-1.2.6h2.2l3.2-.8V489z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2213.8 494.8v-11.2l4.8 2.8v11.2z"/>
        <path fill="#3C3C3B" d="M2214.2 484.5l4 2.2v10l-4-2.1v-10.1m-1-1.7v12.3l6 3.4v-12.3l-6-3.4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.8 495.4v-10.1l3.8 2v10.3z"/>
        <path fill="#3C3C3B" d="M2215.3 486l2.8 1.7v9l-2.8-1.6v-9m-1-1.7v11.3l4.7 2.7v-11.3l-4.7-2.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215.4 494.8l3.2-6.6v8.4z"/>
        <path fill="#3C3C3B" d="M2218 490.3v5.5l-2-1.1 2-4.4m1-4l-4 8.5h-.7l4.7 2.6v-11.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.6 484.1l.7.4v1.2c0 .2 0 .3.2.4l.2.1v.3l-1 7.2v-9.6z"/>
        <path fill="#3C3C3B" d="M2215.1 486.4l.1.1-.1.9v-1m-1-3v11.2l.3.2h.6l1.3-8.2v-1l-.5.2v-1.4l-1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2214.8 494.2v-10l3.8 2.2v9.9z"/>
        <path fill="#3C3C3B" d="M2215.3 485.2l2.8 1.6v8.7l-2.8-1.6v-8.7m-1-1.8v11l4.7 2.7v-11l-4.7-2.7z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2215.4 494.5v-7.6l3.2 1.8v7.6z"/>
          <path fill="#3C3C3B" d="M2215.9 487.7l2.2 1.3v6.4l-2.2-1.2v-6.5m-1-1.7v8.7l4.1 2.4v-8.7l-4-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2219.5 486s0-.2-.2-.3l-6.9-4-.2-.1-.2.1-.2.3v-1.2l8 4.5-.3.7z"/>
          <path fill="#3C3C3B" d="M2211.2 480v15.1l1 .6v-13.5l6.8 4v13.6l1 .4v-15z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2220.6 500l-.6.2v-15l.6-.3z"/>
          <path fill="#3C3C3B" d="M2220.6 484.9l-.6.3v15l.6-.3z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2211.7 479.8l-.5.3 8.8 5 .6-.2z"/>
          <path fill="#3C3C3B" d="M2211.7 479.8l-.5.3 8.8 5 .6-.2z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231.3 510l-1.1-3 8 4 .3.4.7.2h.1l1.5 3.9-9.5-5.5zm7.5-11.8l.2-.7v6l-.2-5.3z"/>
        <path fill="#3C3C3B" d="M2231.1 508l7 3.5c0 .2.2.3.4.3l.6.1 1 2.5-8.2-4.8-.8-1.6m7.8-12.3l-.6 2.4.4 12.7.7.3v-14l-.5-1.4zm-9.6 10.4l1.6 4.3 10.5 6v-.7l-1.6-4.3-.4-.2-.7-.2v-.1l-9.4-4.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.9 508.4l3.7 1.7 1.6 1.4z"/>
        <path fill="#3C3C3B" d="M2227.6 506.3v.8l10.5 6v-.9l-3.3-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2228.5 506.3l.8-.5 9.5 5.5-.7.5z"/>
        <path fill="#3C3C3B" d="M2229.3 505.3l-1.7 1 6.5 3.7 4 2.2 1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.5 511.2l-1.2-.7v.7z"/>
        <path fill="#3C3C3B" d="M2238.3 510.5v.7h1.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239.8 512.1l-1.7 1v-.9l1.7-1z"/>
        <path fill="#3C3C3B" d="M2239.8 511.3l-1.7 1v.8l1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.9 508l-1.8-1.4 5.9-8.1v11.3z"/>
        <path fill="#3C3C3B" d="M2236.5 500v9.2l-3.3-1.6-1.4-1.1 4.7-6.5m1-3l-7 9.6 2.2 1.8 4.8 2.2v-13.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231 506v-12l.2.2 4.2 6v5.3l-2.7.7z"/>
        <path fill="#3C3C3B" d="M2231.4 495.1l3.5 5.1v4.8l-2.3.6h-1.2v-10.5m-1-2v13.5h2.3l3.1-.9v-5.9l-4.2-6.2-1.1-.7z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.1 506l3.3-4.5v4l-2.7.6z"/>
        <path fill="#3C3C3B" d="M2234.9 503v2.1l-1.8.5 1.8-2.6m1-3l-4.3 5.9-1.1.7h2.2l3.1-.9V500z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.1 505.7v-11.1l4.9 2.8v11z"/>
        <path fill="#3C3C3B" d="M2232.6 495.3l4 2.2v10.1l-4-2.2v-10m-1-1.7V506l5.9 3.4V497l-5.9-3.4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.2 506.4V496l3.8 2.2v10.2z"/>
        <path fill="#3C3C3B" d="M2233.6 497l2.8 1.6v9.1l-2.8-1.6V497m-1-1.8v11.4l4.8 2.7V498l-4.7-2.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.8 505.7l3.2-6.5v8.3z"/>
        <path fill="#3C3C3B" d="M2236.5 501.2v5.5l-2-1.2 2-4.3m1-4.1l-4.2 8.5h-.5l4.7 2.7v-11.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233 495l.6.4v1.3l.2.4h.2v.3l-1 7.3V495z"/>
        <path fill="#3C3C3B" d="M2233.4 497.4h.1v1-1m-1-3.2v11.2l.3.2h.5l1.3-8.2v-1l-.5.3V495l-1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.3 505v-9.9l3.7 2.3v9.7z"/>
        <path fill="#3C3C3B" d="M2233.7 496l2.8 1.6v8.8l-2.8-1.7V496m-1-1.6v11l4.8 2.6v-11l-4.7-2.6z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2233.7 505.3v-7.6l3.3 2v7.4z"/>
          <path fill="#3C3C3B" d="M2234.2 498.6l2.2 1.2v6.5l-2.2-1.3v-6.4m-1-1.6v8.6l4.2 2.4v-8.6l-4.1-2.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2237.9 496.9l-.2-.3-7-4-.1-.1h-.2l-.2.3v-1.1l7.9 4.5-.2.7z"/>
          <path fill="#3C3C3B" d="M2229.6 491v15l.9.6V493l7 4v13.6l.8.6V496z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2239 510.8l-.7.4V496l.6-.4z"/>
          <path fill="#3C3C3B" d="M2239 495.7l-.7.4v15.1l.6-.4z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230 490.6l-.4.4 8.7 5.1.6-.4z"/>
          <path fill="#3C3C3B" d="M2230 490.6l-.4.4 8.7 5.1.6-.4z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2224.2 477l-1.1-2.9 8 4 .3.3.7.2.1.1 1.5 3.9-9.5-5.5zm7.5-11.7l.2-.7v6l-.2-5.3z"/>
        <path fill="#3C3C3B" d="M2224 475.2l6.9 3.4c0 .2.2.3.4.3l.6.2 1 2.4-8.2-4.7-.8-1.6m8-12.4l-.7 2.4.4 12.7.7.2v-13.9l-.5-1.4zM2222 473l1.6 4.4 10.5 6v-.8l-1.6-4.4-.4-.2-.7-.1v-.1l-9.4-4.8z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2223.7 475.5l3.7 1.7 1.7 1.3z"/>
        <path fill="#3C3C3B" d="M2220.5 473.3v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2221.4 473.3l.7-.4 9.5 5.4-.7.5z"/>
        <path fill="#3C3C3B" d="M2222.1 472.4l-1.6 1 6.5 3.7 4 2.2 1.6-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.4 478.2l-1.2-.6v.6z"/>
        <path fill="#3C3C3B" d="M2231.2 477.6v.6h1.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2232.6 479.2l-1.7 1v-.9l1.7-1z"/>
        <path fill="#3C3C3B" d="M2232.6 478.3l-1.7 1v.9l1.7-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2230.8 464l-.2-.3-7-4h-.3l-.2.3v-1.2l7.8 4.6-.1.6z"/>
        <path fill="#3C3C3B" d="M2222.4 458v15.1l1 .6v-13.6l6.9 4v13.6l1 .5v-15z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2231.8 478l-.6.2v-15l.6-.4z"/>
          <path fill="#3C3C3B" d="M2231.8 462.8l-.6.4v15l.6-.3z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2223 457.7l-.6.4 8.8 5 .6-.3z"/>
          <path fill="#3C3C3B" d="M2223 457.7l-.6.4 8.8 5 .6-.3z"/>
        </g>
      </g>
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2264.7 511.4l-7 4.1v-15l7-4.1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2268.1 512l-10.7 6.3v-1l10.7-6.3z"/>
        <path fill="#3C3C3B" d="M2268.1 511l-10.7 6.2v1l10.7-6.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.4 516.2l9.8-5.7 1 .5-9.8 5.7z"/>
        <path fill="#3C3C3B" d="M2266.2 510l-10.8 6.2 2 1 10.7-6.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2264.7 511.4l-.4-.2v-15l.4-.3z"/>
        <path fill="#3C3C3B" d="M2264.7 496l-.4.2v15l.4.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.8 516l-.5-.2v-16.5l.5.2z"/>
        <path fill="#3C3C3B" d="M2256.3 499.3v16.5l.5.3v-16.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.3 499.8l7.8-4.7v1.3c0-.1 0-.2-.2-.2l-.1-.1-.3.1-7 4.1-.2.2v-.7z"/>
        <path fill="#3C3C3B" d="M2265.6 494.3l-8.8 5.2V516l1-.6v-14.9l6.9-4.1v14.9l1-.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2255.4 517.1l2 1.2v-1l-2-1.1z"/>
        <path fill="#3C3C3B" d="M2255.4 516.2v1l2 1v-1z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.3 499.3l.5.2 8.8-5.2-.6-.2z"/>
        <path fill="#3C3C3B" d="M2265 494l-8.7 5.3.5.2 8.8-5.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2284.3 501.3l-7 4.1v-15l7-4z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2287.7 501.9l-10.8 6.3v-1l10.8-6.3z"/>
        <path fill="#3C3C3B" d="M2287.7 500.9l-10.8 6.2v1.1l10.8-6.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.9 506l9.9-5.7.9.6-9.8 5.7z"/>
        <path fill="#3C3C3B" d="M2285.8 499.8l-10.9 6.2 2 1.1 10.8-6.2z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.3 501.3l-.5-.3v-14.9l.4-.4z"/>
        <path fill="#3C3C3B" d="M2284.3 485.7l-.5.4V501l.4.3z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.4 505.9l-.5-.2v-16.5l.5.2z"/>
        <path fill="#3C3C3B" d="M2275.9 489.2v16.5l.5.2v-16.5z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.9 489.6l7.8-4.6v1.2s0-.2-.2-.2h-.4l-7 4.1-.2.2v-.7z"/>
        <path fill="#3C3C3B" d="M2285.1 484.1l-8.7 5.3v16.5l.8-.5v-14.9l7-4.1v14.9l1-.6z"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275 507l1.9 1.2v-1l-2-1.2z"/>
        <path fill="#3C3C3B" d="M2275 506v1l1.9 1.2v-1z"/>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.9 489.2l.5.2 8.7-5.3-.5-.2z"/>
          <path fill="#3C3C3B" d="M2284.6 483.9l-8.7 5.3.5.2 8.7-5.3z"/>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2264.7 535.6l-7 4.1v-14.9l7-4.1z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2268.1 536.2l-10.7 6.4v-1.2l10.7-6.1z"/>
          <path fill="#3C3C3B" d="M2268.1 535.3l-10.7 6.1v1.2l10.7-6.4z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.4 540.4l9.8-5.7 1 .6-9.8 5.7z"/>
          <path fill="#3C3C3B" d="M2266.2 534.1l-10.8 6.3 2 1 10.7-6.1z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2264.7 535.6l-.4-.2v-14.9l.4-.4z"/>
          <path fill="#3C3C3B" d="M2264.7 520.1l-.4.4v14.9l.4.2z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.8 540.3l-.5-.2v-16.6l.5.2z"/>
          <path fill="#3C3C3B" d="M2256.3 523.5V540l.5.2v-16.6z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.3 524l7.8-4.7v1.3c0-.1 0-.2-.2-.2l-.1-.1-.3.1-7 4.1-.2.2v-.7z"/>
          <path fill="#3C3C3B" d="M2265.6 518.5l-8.8 5.2v16.6l1-.6V525l6.9-4.1v14.8l1-.5z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2255.4 541.3l2 1.3v-1.2l-2-1z"/>
          <path fill="#3C3C3B" d="M2255.4 540.4v1l2 1.2v-1.2z"/>
          <g>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.3 523.5l.5.2 8.8-5.2-.6-.2z"/>
            <path fill="#3C3C3B" d="M2265 518.3l-8.7 5.2.5.2 8.8-5.2z"/>
          </g>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2284.3 525.5l-7 4.1v-15l7-4z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2287.7 526l-10.8 6.4v-1l10.8-6.3z"/>
          <path fill="#3C3C3B" d="M2287.7 525.1l-10.8 6.3v1l10.8-6.3z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.9 530.3l9.9-5.7.9.5-9.8 5.7z"/>
          <path fill="#3C3C3B" d="M2285.8 524l-10.9 6.3 2 1 10.8-6.2z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.3 525.5l-.5-.2v-15l.4-.3z"/>
          <path fill="#3C3C3B" d="M2284.3 510l-.5.3v15l.4.2z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.4 530.2l-.5-.3v-16.5l.5.2z"/>
          <path fill="#3C3C3B" d="M2275.9 513.4v16.5l.5.3v-16.6z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.9 513.9l7.8-4.6v1.2s0-.2-.2-.2h-.4l-7 4.1-.2.2v-.7z"/>
          <path fill="#3C3C3B" d="M2285.1 508.4l-8.7 5.2v16.6l.8-.6v-14.8l7-4.2v14.9l1-.6z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275 531.3l1.9 1.1v-1l-2-1.1z"/>
          <path fill="#3C3C3B" d="M2275 530.3v1l1.9 1.1v-1z"/>
          <g>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.9 513.4l.5.2 8.7-5.2-.5-.2z"/>
            <path fill="#3C3C3B" d="M2284.6 508.2l-8.7 5.2.5.2 8.7-5.2z"/>
          </g>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2265.1 559.7l-7 4.1V549l7-4.1z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2268.6 560.4l-10.8 6.3v-1.2l10.8-6.1z"/>
          <path fill="#3C3C3B" d="M2268.6 559.4l-10.8 6.1v1.2l10.8-6.3z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.9 564.5l9.8-5.7 1 .6-9.9 5.7z"/>
          <path fill="#3C3C3B" d="M2266.7 558.2l-10.8 6.3 2 1 10.7-6.1z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2265.1 559.7l-.4-.2v-14.9l.4-.4z"/>
          <path fill="#3C3C3B" d="M2265.1 544.2l-.4.4v14.9l.4.2z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.3 564.4l-.5-.2v-16.6l.5.2z"/>
          <path fill="#3C3C3B" d="M2256.8 547.6v16.6l.5.2v-16.6z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2257.7 548l8-4.5v1.2l-.3-.2h-.5l-7 4.1-.2.2v-.7z"/>
          <path fill="#3C3C3B" d="M2266.1 542.6l-8.8 5.2v16.6l.8-.6V549l7-4.1v14.8l1-.5z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256 565.4l1.8 1.3v-1.2l-1.9-1z"/>
          <path fill="#3C3C3B" d="M2256 564.5v1l1.8 1.2v-1.2z"/>
          <g>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2256.8 547.6l.5.2 8.8-5.2-.6-.2z"/>
            <path fill="#3C3C3B" d="M2265.5 542.4l-8.7 5.2.5.2 8.8-5.2z"/>
          </g>
        </g>
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2" d="M2284.7 549.6l-7 4.1v-15l7-4z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2288 550.2l-10.7 6.3v-1l10.8-6.3z"/>
          <path fill="#3C3C3B" d="M2288 549.2l-10.7 6.3v1l10.8-6.3z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.4 554.4l9.8-5.7 1 .5-9.9 5.7z"/>
          <path fill="#3C3C3B" d="M2286.2 548.2l-10.8 6.2 2 1 10.7-6.2z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2284.7 549.6l-.4-.2v-15l.4-.3z"/>
          <path fill="#3C3C3B" d="M2284.7 534.1l-.4.3v15l.4.2z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.8 554.3l-.5-.3v-16.5l.5.2z"/>
          <path fill="#3C3C3B" d="M2276.3 537.5V554l.5.3v-16.6z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2277.2 538l8-4.6v1.2l-.3-.2h-.5l-7 4.2-.2.1v-.7z"/>
          <path fill="#3C3C3B" d="M2285.6 532.5l-8.8 5.2v16.6l1-.6v-14.9l7-4v14.8l.8-.6z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2275.4 555.4l2 1.1v-1l-2-1.1z"/>
          <path fill="#3C3C3B" d="M2275.4 554.4v1l2 1.1v-1z"/>
          <g>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" d="M2276.3 537.5l.5.2 8.8-5.2-.5-.2z"/>
            <path fill="#3C3C3B" d="M2285.1 532.3l-8.8 5.2.5.2 8.8-5.2z"/>
          </g>
        </g>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2225.4 502.2l2.5 1.4 8.5-4.9-2.5-1.4zm-17 9.8l2.5 1.5 8.5-5-2.6-1.4zm-17 9.8l2.5 1.5 8.4-5-2.5-1.4zm-17.1 9.8l2.5 1.5 8.5-5-2.5-1.4zm-17 9.9l2.5 1.5 8.5-5-2.5-1.5z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2158.7 568.7l43.6 25.2v38.7l-43.6-25.2zm87.3 0l-43.7 25.2v38.7l43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2156.1 565l43.6 25.1v5.3l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2156.1 565l43.6 25.1 46.2-26.7-43.6-25.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2156.1 565l43.6 25.1v5.3l-43.6-25.2zm89.9-1.6l-46.3 26.7v5.3l46.2-26.7zm-87.3-60.6l43.6 25.2v60.6l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2158.7 502.8l43.6 25.2 3.3 2.7-3.3 2.5-40.9-23.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2246 502.8l-43.7 25.2v60.6l43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2156.1 499l43.6 25.1 46.2-26.6-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2158.7 497.5l43.6 25.2 43.6-25.2-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2158.7 497.5l43.6 25.2 18.5-7.5 25.1-17.7-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2158.7 497.5l21.8 12.6 21.8 12.6 21.8-49 21.8 23.8-21.8-12.6-21.8-12.6-21.8-23.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2240.6 497.5l1.3.8 1.3.8-6.9-13.9-12.2-14-1.3-.8-1.4-.8 6 14.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2240.6 497.5l-38.3 22 19.1-49.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2202.3 522.7l21.8-57 21.8 31.8-2.7 1.6-19-27.9-19.2 49.9zm-46.2-23.7l43.6 25.1v5.3l-43.6-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2246 497.5l-46.3 26.6v5.3l46.2-26.6z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2180.5 440.5l-21.8 57 21.8 12.6 21.8 12.6 21.8-57-43.6-25.2"/>
      <path d="M2218.6 479.4l-.1-8-6.9-4-8.6 8.8.1 8 6.8 4 8.7-8.8zm-27.7-16l-.1-8-6.8-4-8.7 8.9.1 8 6.9 4 8.6-8.9z" opacity=".3" fill="#B2B2B2"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2182.3 454.8l5-3v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M2175.4 450.9l6.9 3.9v17.5l-6.9-4z"/>
        <path fill="#DADADA" d="M2175.4 450.9l6.9 3.9 5-3-6.9-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2182.4 453.7l-2-5-3.5 2.2 5.4 3z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2209.8 470.7l5.1-3v7.4l-5 13.1zm-6.8-3.9l6.8 4v17.4l-6.7-3.8z"/>
        <path d="M2203 466.8l6.8 4 5.1-3-6.8-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2210.1 469.8l-2-5.1-3.6 2.1 5.3 3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2221.3 542.1v.9l-9 5.2v-1l1.6-1.5zm0 27.9v.8l-9 5.2v-.9l1.6-1.7zm17.1-10v1l-9 5.1v-.8l1.7-1.8zm-27.4-13.4v.9l1.3.7v-1zm.7-15.6v15.2l5.3-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 526.6l-1.2.7-4.7 7v6.6l4.7.1 1.2.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.7 544.8l6.5-3.8v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 540.5l-5.6 3.1V538l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 534.7v5.8l-.3.2h-2.2V539h.4l.3.3v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217 534.9v5.4l-5.3 3V538zm.2-.9l-5.5 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 527.9v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.2v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217 528v5.8l-5.3 3v-5.7zm3 13.3l1.3.8-6 3.5-3 1.7-1.2-.7zm-9 33.1v.8l1.3.8v-.9zm.7-15.4v15l5.3-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 554.4l-1.2.8-4.7 7v6.4l4.7.2 1.2.8V563z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.7 572.6l6.5-3.8v-13.6l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 568.3l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 562.6v5.7l-.3.1h-2.2V567h.4l.3.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217 562.8v5.3l-5.3 3v-5.4zm.2-1l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 555.7v6l-.3.2h-.6l-1.4-2.6v-1l.5.1v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217 556v5.6l-5.3 3v-5.7zm3 13.2l1.3.8-6 3.3-3 1.8-1.2-.7zm-8.3 32v15l5.3-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 596.7l-1.2.7-4.7 7v6.5l4.7.2 1.2.7v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.7 614.8l6.5-3.7v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 610.6l-5.6 3.2V608l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 604.8v5.8h-2.5v-1.4h.4l.3.2V606z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217 605v5.4l-5.3 3V608zm.2-1l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.2 598v6l-.3.1h-.6l-1.4-2.5v-1.1l.5.2V599z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217 598.1v5.8l-5.3 3v-5.7zm3 13.3l1.3.8-6 3.4-3 1.8-1.2-.8zm8.8-20.1v15l5.4-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2236.6 586.8l-1.2.7-4.8 7v6.5l4.8.2 1.2.7v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2228.8 605l6.6-3.8v-13.7l-6.6 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 600.7l-5.6 3.2V598l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 595v5.7h-2.5v-1.4h.3l.4.2V596z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234 595.1v5.4l-5.2 3V598zm.4-1.1l-5.6 3.3v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 588.1v6l-.3.2h-.7l-1.3-2.6v-1l.5.1v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234 588.2v5.8l-5.2 3v-5.7zm3.2 13.4l1.2.6-6 3.5-3 1.8-1.2-.8zm1.2-69.4v.9l-9 5.2v-.9l1.7-1.7zm-10.2 4.5v.9l1.2.7v-.9zm.6-15.5v15.1l5.4-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2236.6 516.8l-1.2.6-4.8 7v6.6l4.8.2 1.2.6v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2228.8 534.9l6.6-3.7v-13.8l-6.6 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 530.6l-5.6 3.1V528l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 524.8v5.8l-.3.2h-2.2v-1.6h.3l.4.2V526z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234 525v5.4l-5.2 3v-5.3zm.4-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 518v6l-.3.2h-.7l-1.3-2.6v-1.1l.5.2V519z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234 518.2v5.7l-5.2 3v-5.7zm3.2 13.2l1.2.8-6 3.5-3 1.7-1.2-.7zm-9 33.1v.8l1.2.8v-.8zm.6-15.5v15.1l5.4-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2236.6 544.5l-1.2.8-4.8 7v6.4l4.8.2 1.2.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2228.8 562.7l6.6-3.8v-13.6l-6.6 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 558.4l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 552.7v5.7l-.3.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234 552.9v5.3l-5.2 3v-5.4zm.4-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234.4 545.9v6l-.3.1h-.7l-1.3-2.6v-1l.5.1V547z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2234 546v5.7l-5.2 3V549zm3.2 13.3l1.2.8-6 3.3-3 1.9-1.2-.8z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M2161.4 581.5l23.3 13.1 14.4 8.8v23.2l-37.7-21.8z"/>
        <path fill="#B2B2B2" d="M2162.3 583v20.7l36 20.7V604z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2184.8 571.4l10.4 6v-.7l-1.6-4.3-10.5-5.2 1.7 4.2zm7.7.5l-.4-12.8.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path d="M2181.4 567.3v.7l10.5 6v-.8l-3.3-2.5z"/>
        <path d="M2183.1 566.2l-1.7 1 6.5 3.8 4 2.2 1.6-1z"/>
        <path d="M2193.3 572.2l-1.2-.7v.7zm.2.8l-1.6 1v-.8l1.6-1zm-2.3-15v13.6l-4.8-2.2-2.1-1.8z"/>
        <path d="M2184.3 554l1.1.7 4.2 6.2v5.9l-3.1.8h-2.2v-5.8z"/>
        <path d="M2189.6 561v5.8l-3.1.8h-2.2l1.1-.6z"/>
        <path d="M2191.2 570.3l-5.8-3.3v-12.3l5.8 3.3z"/>
        <path d="M2191.2 570.3l-4.7-2.7v-11.4l4.7 2.8z"/>
        <path d="M2186.5 566.6l4.7 2.7V558l-4.1 8.6z"/>
        <path d="M2186.3 555.2v11.2l.2.2h.6l1.2-8.2v-1l-.5.2V556z"/>
        <path d="M2186.5 555.4v11l4.7 2.6v-11z"/>
        <path d="M2187 558v8.6l4.2 2.4v-8.6z"/>
        <path d="M2183.3 567v-15l8.8 5v15.3l-1-.6V558l-6.8-4v13.6z"/>
        <path d="M2192.7 571.8l-.6.4V557l.6-.3z"/>
        <path d="M2183.9 551.6l-.6.3 8.8 5 .6-.2z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2166.4 562.6l10.5 6v-.8l-1.7-4.3-10.4-5.2 1.6 4.3zm7.8.5l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path d="M2163.1 558.4v.8l10.4 6v-.7l-3.3-2.6z"/>
        <path d="M2164.8 557.5l-1.7 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path d="M2175 563.3l-1.1-.6v.6zm.2 1l-1.7 1v-.8l1.7-1zm-2.2-15.1V563l-4.9-2.4-2.2-1.7z"/>
        <path d="M2166 545.3l1 .6 4.3 6.3v5.8l-3 .8h-2.4V553z"/>
        <path d="M2171.3 552.2v5.8l-3 .8h-2.4l1.2-.7z"/>
        <path d="M2173 561.5l-6-3.4V546l6 3.3z"/>
        <path d="M2173 561.5l-4.8-2.7v-11.3l4.7 2.7z"/>
        <path d="M2168.2 557.8l4.7 2.7v-11.3l-4.2 8.7z"/>
        <path d="M2168 546.4v11.3h.2l.5.2 1.3-8.3v-1l-.4.2v-1.5z"/>
        <path d="M2168.2 546.5v11l4.7 2.7v-11z"/>
        <path d="M2168.7 549.1v8.8l4.2 2.3v-8.7z"/>
        <path d="M2165 558.2v-15l8.9 5v15.1l-1-.4v-13.7l-7-4v13.6zm9.4 4.8l-.5.3v-15l.5-.3zm-8.8-20.1l-.5.3 8.8 5 .5-.2z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2184.8 547.7l10.4 6v-.7l-1.6-4.4-10.5-5.1 1.7 4.2zm7.7.6l-.4-12.8.6-2.4.6 1.4v14l-.8-.2z"/>
        <path d="M2181.4 543.5v.8l10.5 6v-.7l-3.3-2.6z"/>
        <path d="M2183.1 542.6l-1.7 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path d="M2193.3 548.4l-1.2-.6v.6zm.2 1l-1.6 1v-.8l1.6-1zm-2.3-15.1V548l-4.8-2.3-2.1-1.8z"/>
        <path d="M2184.3 530.4l1.1.6 4.2 6.3v5.8l-3.1.8h-2.2v-5.8z"/>
        <path d="M2189.6 537.3v5.8l-3.1.8h-2.2l1.1-.6z"/>
        <path d="M2191.2 546.6l-5.8-3.3V531l5.8 3.3z"/>
        <path d="M2191.2 546.6l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path d="M2186.5 542.9l4.7 2.8v-11.4l-4.1 8.6z"/>
        <path d="M2186.3 531.4v11.4h.8l1.2-8v-1l-.5.1v-1.5z"/>
        <path d="M2186.5 531.6v11l4.7 2.7v-11z"/>
        <path d="M2187 534.2v8.7l4.2 2.4v-8.7z"/>
        <path d="M2183.3 543.4v-15.1l8.8 5v15.1l-1-.4v-13.7l-6.8-4V544z"/>
        <path d="M2192.7 548.2l-.6.2v-15l.6-.3zm-8.8-20.2l-.6.3 8.8 5 .6-.2z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2166.4 539l10.5 6v-.9l-1.7-4.3-10.4-5.2 1.6 4.3zm7.8.4l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path d="M2163.1 534.8v.8l10.4 6v-.8l-3.3-2.5z"/>
        <path d="M2164.8 533.8l-1.7 1 6.5 3.8 4 2.2 1.6-1z"/>
        <path d="M2175 539.7l-1.1-.7v.7zm.2.9l-1.7 1v-.8l1.7-1zm-2.2-15V539l-4.9-2.2-2.2-1.8z"/>
        <path d="M2166 521.6l1 .6 4.3 6.3v5.8l-3 .8h-2.4v-5.8z"/>
        <path d="M2171.3 528.5v5.8l-3 .8h-2.4l1.2-.6z"/>
        <path d="M2173 537.9l-6-3.4v-12.3l6 3.4z"/>
        <path d="M2173 537.9l-4.8-2.8v-11.3l4.7 2.7z"/>
        <path d="M2168.2 534.1l4.7 2.7v-11.2l-4.2 8.5z"/>
        <path d="M2168 522.7V534l.2.2h.5l1.3-8.1v-1l-.4.1v-1.4z"/>
        <path d="M2168.2 522.9v11l4.7 2.6v-11z"/>
        <path d="M2168.7 525.5v8.6l4.2 2.4V528z"/>
        <path d="M2165 534.6v-15.2l8.9 5.1v15.2l-1-.6v-13.5l-7-4V535zm9.4 4.7l-.5.4v-15.2l.5-.3z"/>
        <path d="M2165.6 519.2l-.5.2 8.8 5.1.5-.3z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2175 529.5l2.5 1.5 8.6-5-2.6-1.4zm-17 9.9l2.5 1.5 8.5-5-2.5-1.5zm-17 9.8l2.5 1.5 8.5-5-2.5-1.4zm-17 9.8l2.5 1.5 8.5-5-2.6-1.4zm-17.1 9.9l2.6 1.4 8.4-4.9-2.5-1.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2108.4 596l43.6 25.2V660l-43.6-25.2zm87.1 0l-43.5 25.2V660l43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2105.7 592.3l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2105.7 592.3l43.6 25.2 46.2-26.7-43.5-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2105.7 592.3l43.6 25.2v5.3l-43.6-25.2zm89.8-1.5l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2108.4 530.2l43.6 25.2V616l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2108.4 530.2l43.6 25.2 3.2 2.6-3.2 2.5-41-23.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2195.5 530.2l-43.5 25.2V616l43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2105.7 526.4l43.6 25.1 46.2-26.6-43.5-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2108.4 525l43.6 25 43.5-25-43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2108.4 525l43.6 25 18.3-7.4 25.2-17.7-43.5-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2108.4 525l21.8 12.5 21.8 12.6 21.8-49 21.7 23.8-21.7-12.6-21.8-12.5-21.8-23.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2190.2 525l1.4.7 1.2.8-6.9-13.9-12.1-14-1.3-.9-1.4-.7 6 14.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2190.2 525l-38.2 22 19.1-50z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2152 550l21.8-56.9 21.7 31.8-2.7 1.6-19-27.9-19.1 49.8zm-46.3-23.6l43.6 25.1v5.3l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2195.5 525l-46.2 26.5v5.3l46.2-26.6z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2130.2 468l-21.8 57 21.8 12.5 21.8 12.6 21.8-57-43.6-25.1"/>
      <path opacity=".3" d="M2168.1 506.8v-8.1l-6.9-4-8.6 8.9v8l6.9 4 8.6-8.8zm-27.6-16l-.1-8-6.8-4-8.7 8.9.1 8 6.8 4 8.7-8.9z" fill="#B2B2B2"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2131.8 482.2l5.1-3v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M2125 478.2l6.8 4v17.5l-6.8-4z"/>
        <path fill="#DADADA" d="M2125 478.2l6.8 4 5.1-3-6.8-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2132 481.1l-1.9-5-3.6 2.1 5.3 3.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2159.5 498.1l5-3v7.3l-5 13.2z"/>
        <path fill="#DADADA" d="M2152.7 494.2l6.8 4v17.4l-6.8-3.8z"/>
        <path fill="#DADADA" d="M2152.7 494.2l6.8 4 5-3-6.7-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2159.7 497.2l-2-5.1-3.6 2 5.4 3.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2171 569.5v.8l-9.1 5.2v-.8l1.7-1.7zm0 27.8v.9l-9.1 5.2v-.9l1.7-1.7zm17.1-9.9v.9l-9 5.2v-.9l1.6-1.7zm-27.5-13.4v.9l1.3.6v-.8zm.7-15.6v15.2l5.4-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2169.1 554l-1.3.7-4.8 7v6.5l4.8.2 1.3.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2161.3 572.2l6.5-3.8v-13.7l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 567.8l-5.6 3.2v-5.7l5.6 2.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 562.2v5.6l-.3.2h-2.2v-1.5h.3l.4.3V563z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.5 562.3v5.4l-5.2 3v-5.4zm.4-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 555.3v6l-.3.2h-.7l-1.3-2.6v-1.1l.5.2v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.5 555.5v5.6l-5.2 3.1v-5.8zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.3-.7zm-9.1 32.9v1l1.3.7v-.9zm.7-15.4v15.2l5.4-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2169.1 581.8l-1.3.7-4.8 7v6.5l4.8.3 1.3.6v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2161.3 600l6.5-3.7v-13.8l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 595.7l-5.6 3.2V593l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 590v5.7h-2.5v-1.3h.3l.4.1V591z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.5 590.1v5.4l-5.2 3V593zm.4-.9l-5.6 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 583.1v6l-.3.2h-.7l-1.3-2.6v-1l.5.1v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.5 583.3v5.7l-5.2 3v-5.7zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.3-.8zm-8.4 31.9v15.1l5.4-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2169.1 624l-1.3.8-4.8 7v6.4l4.8.2 1.3.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2161.3 642.2l6.5-3.8v-13.6l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 638l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 632.2v5.8h-2.5v-1.4h.3l.4.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.5 632.4v5.4l-5.2 3v-5.4zm.4-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.9 625.4v6l-.3.1h-.7l-1.3-2.6v-1l.5.2v-1.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2166.5 625.5v5.7l-5.2 3v-5.7zm3.2 13.3l1.2.8-6 3.4-3 1.8-1.3-.8zm8.7-20.1v15l5.4-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2186.2 614.1l-1.3.8-4.7 7v6.5l4.7.1 1.3.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2178.4 632.3l6.5-3.8V615l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 628l-5.6 3.2v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 622.3v5.8h-2.5v-1.4h.4l.3.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183.7 622.5v5.4l-5.3 3v-5.4zm.3-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 615.5v6l-.3.1h-.6l-1.4-2.6v-1l.5.2v-1.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183.7 615.6v5.7l-5.3 3v-5.6zm3.2 13.4l1.2.6-6 3.5-3 1.8-1.3-.8zm1.2-69.4v.9l-9 5.1v-.8l1.6-1.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2177.8 564.1v.9l1.3.6v-.8zm.6-15.6v15.2l5.4-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2186.2 544.1l-1.3.7-4.7 7v6.5l4.7.2 1.3.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2178.4 562.3l6.5-3.8v-13.7l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 558l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 552.2v5.8l-.3.1h-2.2v-1.5h.4l.3.3v-3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183.7 552.4v5.4l-5.3 3v-5.3zm.3-1l-5.6 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 545.4v6l-.3.2h-.6l-1.4-2.6v-1l.5.2v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183.7 545.6v5.6l-5.3 3.1v-5.8zm3.2 13.2l1.2.8-6 3.4-3 1.8-1.3-.7zm-9.1 33.1v.8l1.3.8v-.9zm.6-15.5v15l5.4-2.3 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2186.2 571.9l-1.3.7-4.7 7v6.5l4.7.2 1.3.8v-6.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2178.4 590.1l6.5-3.8v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 585.8l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 580v5.8l-.3.1h-2.2v-1.4h.4l.3.2V581z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183.7 580.2v5.4l-5.3 3v-5.4zm.3-.9l-5.6 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2184 573.2v6l-.3.2h-.6l-1.4-2.6v-1l.5.1v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2183.7 573.4v5.7l-5.3 3v-5.7zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.3-.7z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2111 608.9l23.2 13.1 14.5 8.8V654l-37.7-21.8z"/>
        <path d="M2112 610.4V631l35.9 20.7v-20.6z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2134.3 598.8l10.5 6v-.7l-1.6-4.4-10.5-5.2 1.6 4.3zm7.8.5l-.4-12.8.6-2.4.6 1.4v14l-.8-.2z"/>
        <path d="M2131 594.6v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path d="M2132.7 593.6l-1.6 1 6.4 3.8 4 2.2 1.7-1z"/>
        <path d="M2142.9 599.5l-1-.6v.6zm.3 1l-1.8 1v-.9l1.8-1zm-2.3-15.1V599l-4.8-2.2-2.3-1.9z"/>
        <path d="M2133.8 581.4l1.2.7 4.2 6.2v5.9l-3 .7h-2.3v-5.7z"/>
        <path d="M2139.2 588.3v5.9l-3 .7h-2.3l1.1-.5z"/>
        <path d="M2140.9 597.7l-5.9-3.3V582l5.9 3.3z"/>
        <path d="M2140.9 597.7l-4.7-2.8v-11.3l4.7 2.8z"/>
        <path d="M2136.2 594l4.7 2.7v-11.3l-4.3 8.6z"/>
        <path d="M2135.9 582.5v11.3l.3.2h.4l1.3-8.2v-1l-.4.1v-1.4z"/>
        <path d="M2136.2 582.7v11l4.7 2.7v-11z"/>
        <path d="M2136.6 585.3v8.7l4.3 2.4v-8.7z"/>
        <path d="M2133 594.4v-15.1l8.8 5v15.2l-1-.5v-13.6l-7-4v13.5zm9.3 4.8l-.5.3v-15.1l.5-.3z"/>
        <path d="M2133.6 579l-.6.3 8.8 5 .5-.2z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2116 590l10.6 6v-.8l-1.7-4.3-10.5-5.2 1.7 4.2zm7.9.5l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path d="M2112.7 585.8v.8l10.5 6v-.7l-3.3-2.6z"/>
        <path d="M2114.4 584.8l-1.7 1 6.6 3.8 3.9 2.3 1.6-1z"/>
        <path d="M2124.6 590.7l-1.1-.6v.6zm.2 1l-1.6 1v-.8l1.6-1zm-2.3-15.1v13.6l-4.8-2.3-2.1-1.7z"/>
        <path d="M2115.6 572.6l1.2.6 4.2 6.4v5.7l-3.2.9h-2.2v-5.9z"/>
        <path d="M2121 579.6v5.7l-3.2.9h-2.2l1.2-.7z"/>
        <path d="M2122.5 588.9l-5.7-3.4v-12.3l5.7 3.4z"/>
        <path d="M2122.5 588.9l-4.7-2.7v-11.3l4.7 2.6z"/>
        <path d="M2117.8 585.2l4.7 2.7v-11.3l-4.1 8.6z"/>
        <path d="M2117.5 573.8V585l.3.2h.6l1.2-8.2v-1l-.4.2v-1.5z"/>
        <path d="M2117.8 573.9v11l4.7 2.7v-11z"/>
        <path d="M2118.4 576.5v8.7l4.1 2.4V579z"/>
        <path d="M2114.6 585.6v-15l8.9 5v15.1l-1-.5v-13.6l-6.9-4v13.6zm9.4 4.8l-.5.3v-15.1l.6-.3z"/>
        <path d="M2115.2 570.2l-.6.3 8.9 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2134.3 575l10.5 6.1v-.8l-1.6-4.3-10.5-5.2 1.6 4.2zm7.8.6l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path d="M2131 571v.7l10.4 6v-.7l-3.2-2.6z"/>
        <path d="M2132.7 570l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path d="M2142.9 575.8l-1-.7v.7zm.3 1l-1.8 1v-.8l1.8-1zm-2.3-15.1v13.6l-4.8-2.3-2.3-1.7z"/>
        <path d="M2133.8 557.8l1.2.5 4.2 6.4v5.7l-3 .9h-2.3v-5.9z"/>
        <path d="M2139.2 564.7v5.7l-3 .9h-2.3l1.1-.7z"/>
        <path d="M2140.9 574l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path d="M2140.9 574l-4.7-2.7V560l4.7 2.7z"/>
        <path d="M2136.2 570.2l4.7 2.8v-11.3l-4.3 8.5z"/>
        <path d="M2135.9 558.8v11.4h.7l1.3-8.1v-1l-.4.2v-1.5z"/>
        <path d="M2136.2 559v11l4.7 2.6v-10.9z"/>
        <path d="M2136.6 561.6v8.6l4.3 2.4V564z"/>
        <path d="M2133 570.7v-15l8.8 5v15.1l-1-.5v-13.6l-7-4v13.6zm9.3 4.8l-.5.3v-15.1l.5-.2z"/>
        <path d="M2133.6 555.4l-.6.2 8.8 5.1.5-.2z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2116 566.3l10.6 6v-.7l-1.7-4.3-10.5-5.2 1.7 4.2zm7.9.5l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path d="M2112.7 562.2v.7l10.5 6.1v-.9l-3.3-2.5z"/>
        <path d="M2114.4 561.1l-1.7 1 6.6 3.8 3.9 2.2 1.6-1z"/>
        <path d="M2124.6 567l-1.1-.6v.7zm.2 1l-1.6 1v-.9l1.6-1zm-2.3-15v13.5l-4.8-2.2-2.1-1.8z"/>
        <path d="M2115.6 549l1.2.6 4.2 6.2v5.9l-3.2.8h-2.2v-5.8z"/>
        <path d="M2121 555.8v5.9l-3.2.8h-2.2l1.2-.6z"/>
        <path d="M2122.5 565.3l-5.7-3.4v-12.3l5.7 3.4z"/>
        <path d="M2122.5 565.3l-4.7-2.8V551l4.7 2.8z"/>
        <path d="M2117.8 561.5l4.7 2.7V553l-4.1 8.5z"/>
        <path d="M2117.5 550v11.3l.3.2h.6l1.2-8.2v-1l-.4.2V551z"/>
        <path d="M2117.8 550.3v11l4.7 2.6v-11z"/>
        <path d="M2118.4 552.9v8.6l4.1 2.4v-8.6z"/>
        <path d="M2114.6 562v-15.2l8.9 5.1v15.2l-1-.6V553l-6.9-4v13.5zm9.4 4.7l-.5.4v-15.2l.6-.3z"/>
        <path d="M2115.2 546.5l-.6.3 8.9 5.1.6-.3z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2126 558.3l2.6 1.5 8.5-5-2.6-1.4zm-17 9.9l2.6 1.5 8.4-5-2.5-1.5zm-17 9.8l2.5 1.5 8.5-5-2.5-1.4zm-17 9.8l2.5 1.5 8.5-5-2.6-1.4zm-17.1 9.9l2.6 1.5 8.4-5-2.5-1.5zm1.5 27.2L2103 650v38.7l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2146.5 624.9L2103 650v38.7l43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2056.7 621.1l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2056.7 621.1l43.6 25.2 46.2-26.7-43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2056.7 621.1l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2146.5 619.6l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2059.4 559l43.6 25.2v60.6l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2059.4 559l43.6 25.2 3.2 2.7-3.2 2.5-41-23.7z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2146.5 559l-43.5 25.2v60.6l43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2056.7 555.2l43.6 25.1 46.2-26.6-43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2059.4 553.7L2103 579l43.5-25.2-43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2059.4 553.7L2103 579l18.4-7.5 25.1-17.7-43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2059.4 553.7l21.8 12.6L2103 579l21.8-49 21.7 23.8-21.7-12.6-21.8-12.6-21.8-23.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2141.2 553.7l1.4.8 1.2.8-6.8-13.9-12.2-14-1.3-.9-1.4-.7 6 14.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2141.2 553.7l-38.2 22 19.1-50z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2103 578.9l21.8-57 21.7 31.8-2.7 1.6-19-27.9-19 49.9zm-46.3-23.7l43.6 25.1v5.3l-43.6-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2146.5 553.7l-46.2 26.6v5.3l46.2-26.6z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2081.2 496.7l-21.8 57 21.8 12.6L2103 579l21.8-57-43.6-25.2"/>
      <path opacity=".3" d="M2119.2 535.6l-.1-8-6.9-4-8.6 8.8v8l7 4 8.6-8.8zm-27.7-16l-.1-8-6.8-4-8.7 8.9.1 8 6.9 4 8.6-8.9z" fill="#B2B2B2"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2082.9 511l5-3v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M2076 507l6.9 4v17.5l-6.9-4z"/>
        <path fill="#DADADA" d="M2076 507l6.9 4 5-3-6.8-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2083 510l-1.9-5-3.6 2 5.4 3.1z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2110.5 527l5.1-3v7.3l-5 13.1z"/>
        <path fill="#DADADA" d="M2103.7 523l6.8 4v17.4l-6.8-3.8z"/>
        <path fill="#DADADA" d="M2103.7 523l6.8 4 5.1-3-6.8-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2110.7 526l-2-5.1-3.6 2.1 5.4 3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2122 598.3v.9l-9 5.1v-.8l1.6-1.7zm0 27.8v1l-9 5v-.8l1.6-1.7zm17.1-9.8v.8l-9 5.2v-.9l1.6-1.7zm-27.4-13.5v.9l1.2.6v-.8zm.6-15.6v15.2l5.4-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2120.1 582.8l-1.2.7-4.8 7v6.5l4.8.2 1.2.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2112.3 601l6.6-3.8v-13.7l-6.6 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 596.7l-5.7 3.1v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 590.9v5.8l-.4.1h-2.2v-1.5h.3l.4.3V592z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2117.5 591v5.5l-5.2 3v-5.3zm.5-.9l-5.7 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 584v6.1l-.4.2h-.7l-1.3-2.6v-1.1l.5.2V585z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2117.5 584.3v5.6l-5.2 3.1v-5.8zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.2-.7zm-9 33v.8l1.2.8v-.9zm.6-15.5v15l5.4-2.3 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2120.1 610.6l-1.2.8-4.8 7v6.4l4.8.3 1.2.7v-6.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2112.3 628.8l6.6-3.7v-13.7l-6.6 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 624.5l-5.7 3.2v-5.8l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 618.7v5.8l-.4.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2117.5 619v5.3l-5.2 3v-5.4zm.5-1l-5.7 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 612v6h-1.1l-1.3-2.5v-1l.5.1V613z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2117.5 612.1v5.7l-5.2 3V615zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.2-.7zm-8.4 32v15l5.4-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2120.1 652.8l-1.2.8-4.8 7v6.5l4.8.1 1.2.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2112.3 671l6.6-3.8v-13.6l-6.6 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 666.8l-5.7 3.1v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 661v5.8h-2.6v-1.4h.3l.4.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2117.5 661.2v5.4l-5.2 3v-5.4zm.5-1l-5.7 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2118 654.2v6l-.4.1h-.7l-1.3-2.6v-1l.5.2V655z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2117.5 654.3v5.7l-5.2 3v-5.6zm3.2 13.3l1.2.8-6 3.4-3 1.8-1.2-.8zm8.8-20.1v15l5.3-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2137.2 643l-1.2.7-4.7 7v6.5l4.7.2 1.2.7v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2129.5 661.1l6.5-3.7v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 656.9l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 651.1v5.8h-2.5v-1.4h.4l.3.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2134.7 651.3v5.4l-5.2 3v-5.4zm.3-1.1l-5.5 3.3v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 644.3v6l-.3.1h-.6l-1.4-2.6v-1l.5.2v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2134.7 644.4v5.8l-5.2 3v-5.7zm3.2 13.3l1.2.7-6 3.5-3 1.8-1.2-.8zm1.2-69.3v.9l-9 5.1v-.8l1.6-1.7zm-10.2 4.6v.8l1.2.6v-.8zm.6-15.6v15.1l5.3-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2137.2 573l-1.2.6-4.7 7v6.5l4.7.2 1.2.7v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2129.5 591l6.5-3.7v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 586.8l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 581v5.8l-.3.2h-2.2v-1.6h.4l.3.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2134.7 581.2v5.4l-5.2 3v-5.3zm.3-1l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 574.2v6l-.3.2h-.6l-1.4-2.7v-1l.5.2v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2134.7 574.4v5.6l-5.2 3.1v-5.7zm3.2 13.2l1.2.8-6 3.5-3 1.7-1.2-.7zm-9 33.1v.8l1.2.8v-.9zm.6-15.5v15l5.3-2.3 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2137.2 600.7l-1.2.8-4.7 7v6.4l4.7.2 1.2.8v-6.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2129.5 618.8l6.5-3.7v-13.6l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 614.6l-5.6 3.2V612l5.6 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 608.9v5.7l-.3.1h-2.2v-1.4h.4l.3.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2134.7 609v5.4l-5.2 3V612zm.3-1l-5.5 3.3v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2135 602v6l-.3.2h-.6l-1.4-2.6v-1l.5.1v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2134.7 602.2v5.7l-5.2 3v-5.7zm3.2 13.3l1.2.8-6 3.3-3 1.8-1.2-.7z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2062 637.7l23.3 13.1 14.5 8.8v23.2L2062 661z"/>
        <path d="M2063 639.2V660l35.9 20.7V660z"/>
      </g>
      <path opacity=".3" fill="#B2B2B2" d="M2093.1 628l-.4-12.7.6-2.4.6 1.4v14.1l-.8-.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2082 623.5v.7l10.5 6v-.8l-3.2-2.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2083.7 622.4l-1.6 1 6.4 3.8 4 2.2 1.7-1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2093.9 628.4l-1-.7v.7zm.3.8l-1.7 1v-.8l1.7-1zm-2.3-15v13.6l-4.8-2.2-2.1-1.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2085 610.2l1 .7 4.2 6.2v5.9l-3 .7h-2.2V618z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2090.2 617.1v5.9l-3 .7h-2.2l1-.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2091.9 626.5l-5.9-3.3v-12.3l5.9 3.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2091.9 626.5l-4.7-2.8v-11.3l4.7 2.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2087.2 622.8l4.7 2.7v-11.3l-4.2 8.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2086.9 611.4v11.2l.3.2h.5l1.2-8.2v-1l-.4.2v-1.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2087.2 611.5v11l4.7 2.7v-11z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2087.7 614.1v8.7l4.2 2.4v-8.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2084 623.3V608l8.8 5v15.3l-1-.6v-13.6l-6.8-4v13.5zm9.3 4.7l-.5.4v-15.2l.5-.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2084.6 607.8l-.6.3 8.8 5 .5-.2z"/>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2074.9 619.3l-.4-12.7.6-2.5.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2063.7 614.6v.8l10.5 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2065.5 613.7l-1.8 1 6.6 3.7 4 2.3 1.5-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2075.6 619.5l-1.1-.7v.7zm.2 1l-1.6 1v-.8l1.6-1zm-2.3-15.1V619l-4.8-2.3-2-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2066.6 601.5l1.2.5 4.2 6.4v5.7l-3.2.9h-2.2v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2072 608.4v5.7l-3.2.9h-2.2l1.2-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2073.5 617.7l-5.7-3.4V602l5.7 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2073.5 617.7l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2068.8 614l4.7 2.7v-11.3l-4 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2068.6 602.6V614l.2.1h.6l1.3-8.2v-1l-.5.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2068.8 602.7v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2069.4 605.3v8.7l4.1 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2065.7 614.4v-15l8.8 5v15.1l-1-.5v-13.6l-6.9-4V615zm9.3 4.8l-.5.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2066.2 599l-.5.3 8.8 5.1.6-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2093.1 604.4l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2082 599.7v.8l10.5 6v-.7l-3.2-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2083.7 598.8l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2093.9 604.6l-1-.6v.6zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.6l-4.8-2.3-2.1-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2090.2 593.5v5.8l-3 .8h-2.2l1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2091.9 602.8l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2091.9 602.8l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2087.2 599l4.7 2.8v-11.3l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2086.9 587.6V599h.8l1.2-8.1v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2087.2 587.8v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2087.7 590.4v8.7l4.2 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2084 599.5v-15l8.8 5v15.1l-1-.5v-13.6l-6.8-4v13.6zm9.3 4.8l-.5.3v-15l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2084.6 584.2l-.6.3 8.8 5 .5-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2074.9 595.6l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2063.7 591v.8l10.5 6v-.9l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2065.5 590l-1.8 1 6.6 3.7 4 2.2 1.5-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2075.6 595.9l-1.1-.7v.7zm.2 1l-1.6 1v-1l1.6-1zm-2.3-15.1v13.5l-4.8-2.2-2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2066.6 577.7l1.2.7 4.2 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2072 584.7v5.8l-3.2.8h-2.2l1.2-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2073.5 594l-5.7-3.3v-12.3l5.7 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2073.5 594l-4.7-2.7v-11.4l4.7 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2068.8 590.3l4.7 2.7v-11.2l-4 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2068.6 578.9V590l.2.2h.6l1.3-8.1V581l-.5.2v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2068.8 579v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2069.4 581.7v8.6l4.1 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2065.7 590.8v-15.2l8.8 5.1V596l-1-.6v-13.5l-6.9-4v13.5zm9.3 4.7l-.5.4v-15.2l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2066.2 575.3l-.5.3 8.8 5.1.6-.3z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <g fill="#DADADA">
        <path d="M2381.7 695.5l-42.1 24.4v30l42.1-24.4z"/>
        <path d="M2381.7 695.5l-42.1 24.4-2.2 2.5 2.2 2.6 39.6-23z"/>
        <path d="M2297.3 695.5l42.3 24.4v30l-42.3-24.4z"/>
        <path d="M2381.7 695.5l-42.1 24.4-42.3-24.4 42.3-24.4z"/>
        <path d="M2384.3 691.8l-42.2 24.4v5.1l42.2-24.3z"/>
        <path d="M2384.3 691.8l-42.2 24.4-44.8-25.8 42.3-24.4z"/>
        <path d="M2384.3 691.8l-42.2 24.4v5.1l42.2-24.3zm-87-1.4l44.8 25.8v5.1l-44.8-25.8z"/>
        <path d="M2381.7 612.4l-23.8-37.3-18.3 61.7v78l42.1-24.4z"/>
        <path d="M2297.3 612.4l42.3 24.4v78l-42.3-24.4z"/>
      </g>
      <path fill="#9D9D9C" d="M2297.3 612.4l42.3 24.4 18.3-61.6-39.7-17.4z"/>
      <g fill="#DADADA">
        <path d="M2355.5 650.2l-7 4v-14.9l7-4.1zm3.4.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M2357 648.7l-10.8 6.2 2 1.1 10.7-6.2z"/>
        <path d="M2355.5 650.2l-.5-.3v-15l.5-.3zm-8 4.6l-.3-.2V638l.3.1z"/>
        <path d="M2347.5 638.2v16.6l1-.5v-14.9l7-4.1v14.9l.9-.6V633zm-1.3 17.6l2 1.3v-1l-2-1.2z"/>
        <path d="M2347.2 638l.3.2 8.9-5.2-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2375 640l-7 4.1v-14.9l7-4.1zm3.5.6l-10.8 6.3v-1l10.8-6.2z"/>
        <path d="M2376.5 638.5l-10.7 6.3 2 1 10.7-6.1z"/>
        <path d="M2367.1 644.7l-.4-.2v-16.6l.4.2zm0-16.7v16.7l.9-.6v-14.8l7-4.1V640l1-.5v-16.6zm-1.3 17.7l2 1.2v-1l-2-1.1z"/>
        <path d="M2366.7 627.9l.4.2 8.9-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2364.7 619.6l-7 4.1v-15l7-4zm3.5.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M2366.3 618.2l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M2364.7 619.6l-.4-.3v-14.9l.4-.3zm-7.8 4.6l-.5-.2v-16.5l.5.2z"/>
        <path d="M2356.9 607.7v16.5l.8-.5V609l7-4.2v15l1-.7v-16.6zm-1.4 17.6l2 1.2v-1l-2-1zm.9-17.8l.5.2 8.8-5.3h-.6z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2355.5 674.4l-7 4v-14.9l7-4.1zm3.4.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M2357 673l-10.8 6.2 2 1 10.7-6.2z"/>
        <path d="M2355.5 674.4l-.5-.2v-15l.5-.3zm-8 4.6l-.3-.2v-16.5l.3.1z"/>
        <path d="M2347.5 662.4v16.7l1-.6v-14.8l7-4.1v14.8l.9-.6v-16.5zm-1.3 17.7l2 1.2v-1l-2-1.1z"/>
        <path d="M2347.2 662.3l.3.1 8.9-5.1-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2375 664.3l-7 4.1v-15l7-4.1zm3.5.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M2376.5 662.8l-10.7 6.2 2 1.1 10.7-6.2z"/>
        <path d="M2367.1 668.9l-.4-.2v-16.5l.4.2zm0-16.5v16.5l.9-.5v-14.9l7-4.1v14.9l1-.6v-16.6zm-1.3 17.6l2 1.2v-1l-2-1.2z"/>
        <path d="M2366.7 652.2l.4.2 8.9-5.3-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2355.9 698.5l-7 4v-14.9l7-4.1zm3.5.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M2357.4 697l-10.7 6.3 1.9 1 10.8-6.2z"/>
        <path d="M2355.9 698.5l-.4-.2v-15l.4-.3zm-7.9 4.7l-.5-.3v-16.5l.5.2z"/>
        <path d="M2348 686.6v16.6l1-.6v-14.8l6.9-4.2v14.9l1-.6v-16.5zm-1.3 17.6l1.9 1.2v-1l-2-1.1z"/>
        <path d="M2347.5 686.4l.5.2 8.9-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2375.5 688.4l-7 4.1v-15l7-4.1zm3.5.6l-11 6.3v-1l11-6.3z"/>
        <path d="M2377 687l-10.8 6 1.9 1.2 10.8-6.2z"/>
        <path d="M2367.6 693l-.5-.2v-16.5l.5.2zm0-16.5V693l.9-.5v-14.9l7-4.1v14.9l.9-.6v-16.6zm-1.4 17.5l1.9 1.3v-1l-2-1.2z"/>
        <path d="M2367.1 676.3l.5.2 8.8-5.3-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2355.5 734l-7 4.1v-14.9l7-4zm3.4.7L2348 741v-1l10.8-6.2z"/>
        <path d="M2357 732.6l-10.8 6.2 2 1 10.7-6z"/>
        <path d="M2355.5 734l-.5-.2v-15l.5-.3zm-8 4.7l-.3-.2V722l.3.2z"/>
        <path d="M2347.5 722v16.7l1-.6v-14.8l7-4V734l.9-.5V717zm-1.3 17.8l2 1.2v-1l-2-1.1z"/>
        <path d="M2347.2 721.9l.3.2 8.9-5.2-.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2375 724l-7 4v-15l7-4zm3.5.5l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M2376.5 722.5l-10.7 6.2 2 1 10.7-6.2z"/>
        <path d="M2367.1 728.6l-.4-.3v-16.5l.4.2zm0-16.6v16.6l.9-.6v-14.8l7-4.2v15l1-.7v-16.5zm-1.3 17.7l2 1.1v-1l-2-1z"/>
        <path d="M2366.7 711.8l.4.2 8.9-5.2-.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2324.8 650l6.9 4v-14.9l-7-4.1zm-3.5.5l10.8 6.4v-1l-10.8-6.3z"/>
        <path d="M2323.2 648.5l10.8 6.3-2 1-10.7-6.2z"/>
        <path d="M2324.8 650l.4-.2v-15l-.4-.3zm7.9 4.7l.4-.3v-16.5l-.4.2z"/>
        <path d="M2332.7 638v16.7l-1-.6v-14.8l-7-4.2V650l-.9-.6v-16.5zm1.3 17.7l-2 1.2v-1l2-1.1z"/>
        <path d="M2333.1 637.9l-.4.2-8.9-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2304.6 639l7 4v-14.8l-7-4.2zm-3.4.6l10.7 6.3v-1.1l-10.7-6.2z"/>
        <path d="M2303 637.5l10.8 6.2-1.9 1-10.7-6z"/>
        <path d="M2304.6 639l.4-.3v-14.9l-.4-.3zm7.9 4.6l.5-.2v-16.6l-.5.2z"/>
        <path d="M2312.5 627v16.6l-1-.6v-14.7l-6.9-4.2V639l-1-.5v-16.6zm1.3 17.7l-1.9 1.2v-1.1l2-1zm-.8-17.9l-.5.2-8.8-5.2.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2324.8 675l6.9 4v-15l-7-4zm-3.5.5l10.8 6.3v-1l-10.8-6.3z"/>
        <path d="M2323.2 673.5l10.8 6.2-2 1-10.7-6.2z"/>
        <path d="M2324.8 675l.4-.3v-15l-.4-.2zm7.9 4.6l.4-.3v-16.5l-.4.2z"/>
        <path d="M2332.7 663v16.6l-1-.5v-15l-7-4v14.8l-.9-.5v-16.6zm1.3 17.7l-2 1.1v-1l2-1z"/>
        <path d="M2333.1 662.8l-.4.2-8.9-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2304.6 663.9l7 4.1v-14.9l-7-4.1zm-3.4.7l10.7 6.3v-1.2l-10.7-6.1z"/>
        <path d="M2303 662.4l10.8 6.3-1.9 1-10.7-6.1z"/>
        <path d="M2304.6 663.9l.4-.2v-15l-.4-.3zm7.9 4.7l.5-.2v-16.6l-.5.2z"/>
        <path d="M2312.5 652v16.6l-1-.6v-14.8l-6.9-4.1v14.8l-1-.5v-16.6zm1.3 17.6l-1.9 1.3v-1.2l2-1zm-.8-17.8l-.5.2-8.8-5.2.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2324.8 699.2l6.9 4.2v-15l-7-4.2zm-3.5.6l10.8 6.3v-1l-10.8-6.3z"/>
        <path d="M2323.2 697.8l10.8 6.2-2 1-10.7-6.2z"/>
        <path d="M2324.8 699.2l.4-.2v-15l-.4-.2zm7.9 4.8l.4-.4v-16.5l-.4.2z"/>
        <path d="M2332.7 687.3V704l-1-.5v-15l-7-4v14.8l-.9-.5V682zm1.3 17.7l-2 1.1v-1l2-1z"/>
        <path d="M2333.1 687.1l-.4.2-8.9-5.2.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2304.6 688.2l7 4.1v-14.9l-7-4.1zm-3.4.7l10.7 6.3V694l-10.7-6.1z"/>
        <path d="M2303 686.7l10.8 6.3-1.9 1-10.7-6.1z"/>
        <path d="M2304.6 688.2l.4-.2v-15l-.4-.3zm7.9 4.7l.5-.2v-16.6l-.5.2z"/>
        <path d="M2312.5 676.3v16.6l-1-.6v-14.8l-6.9-4.1v14.8l-1-.5v-16.6zm1.3 17.7l-1.9 1.2V694l2-1zm-.8-18l-.5.3-8.8-5.2.5-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2324.8 732l6.9 4.2v-15l-7-4.1zm-3.5.7l10.8 6.3v-1l-10.8-6.3z"/>
        <path d="M2323.2 730.6l10.8 6.2-2 1.1-10.7-6.2z"/>
        <path d="M2324.8 732l.4-.2v-14.9l-.4-.4zm7.9 4.7l.4-.2V720h-.4z"/>
        <path d="M2332.7 720v16.7l-1-.5v-14.9l-7-4.1V732l-.9-.6v-16.6zm1.3 17.7l-2 1.3v-1l2-1.2z"/>
        <path d="M2333.1 720h-.4l-8.9-5.1.6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2304.6 721l7 4.2v-15l-7-4.2zm-3.4.6l10.7 6.3v-1l-10.7-6.3z"/>
        <path d="M2303 719.6l10.8 6.2-1.9 1-10.7-6.2z"/>
        <path d="M2304.6 721l.4-.2v-15l-.4-.2zm7.9 4.7l.5-.2v-16.6l-.5.2z"/>
        <path d="M2312.5 709.1v16.6l-1-.5v-15l-6.9-4V721l-1-.5v-16.6zm1.3 17.7l-1.9 1.1v-1l2-1zm-.8-17.8l-.5.1-8.8-5.2.5-.2z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
      <g fill="#DADADA">
        <path d="M2248 716.1l42.2 24.4v30l-42.2-24.4z"/>
        <path d="M2248 716.1l42.2 24.4 2.2 2.5-2.2 2.6-39.7-22.8z"/>
        <path d="M2332.4 716.1l-42.2 24.4v30l42.2-24.4zm-84.4 0l42.2 24.4 42.2-24.4-42.2-24.3z"/>
        <path d="M2245.4 712.5l42.3 24.4v5l-42.3-24.2z"/>
        <path d="M2245.4 712.5l42.3 24.4 44.7-25.9-42.2-24.4z"/>
        <path d="M2245.4 712.5l42.3 24.4v5l-42.3-24.2zm87-1.5l-44.7 25.9v5l44.7-25.8z"/>
        <path d="M2248 633l23.8-37.2 18.4 61.7v78L2248 711zm84.4 0l-42.2 24.5v78l42.2-24.5z"/>
      </g>
      <path fill="#4A4A49" d="M2332.4 633l-42.2 24.5-18.4-61.6 39.7-17.5z"/>
      <g fill="#DADADA">
        <path d="M2254.3 713l10.5 6.1v-.8l-1.7-4.3-10.4-5.2 1.6 4.3zm7.8.6l-.4-12.7.6-2.4.5 1.4v14l-.7-.3z"/>
        <path d="M2251 709v.7l10.4 6v-.7l-3.3-2.6z"/>
        <path d="M2252.7 708l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
        <path d="M2262.8 713.8l-1.1-.6v.6zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.6l-4.8-2.3-2.2-1.7z"/>
        <path d="M2253.8 695.8l1.2.5 4.2 6.4v5.8l-3 .8h-2.4v-5.8z"/>
        <path d="M2259.2 702.7v5.8l-3 .8h-2.4l1.2-.7z"/>
        <path d="M2260.8 712l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path d="M2260.8 712l-4.7-2.7V698l4.7 2.7z"/>
        <path d="M2256.1 708.3l4.7 2.7v-11.3l-4.2 8.6z"/>
        <path d="M2255.8 696.8v11.4h.8l1.2-8.1v-1l-.3.2v-1.5z"/>
        <path d="M2256.1 697v11l4.7 2.7v-11z"/>
        <path d="M2256.6 699.6v8.7l4.2 2.4V702z"/>
        <path d="M2253 708.7v-15l8.7 5v15.1l-.9-.5v-13.6l-7-4v13.6zm9.3 4.8l-.6.3v-15l.6-.4z"/>
        <path d="M2253.4 693.4l-.5.3 8.8 5 .6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2272.7 724l10.5 6v-.8l-1.6-4.3-10.5-5.2 1.6 4.2zm7.8.5l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path d="M2269.4 719.8v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path d="M2271 718.8l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path d="M2281.2 724.8l-1-.7v.7zm.3.8l-1.7 1v-.8l1.7-1zm-2.3-14.9v13.5l-4.8-2.2-2.2-1.8z"/>
        <path d="M2272.2 706.6l1.1.7 4.3 6.2v5.9l-3.1.8h-2.3v-5.8z"/>
        <path d="M2277.6 713.5v5.9l-3.1.8h-2.3l1.1-.6z"/>
        <path d="M2279.2 723l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path d="M2279.2 723l-4.7-2.8v-11.4l4.7 2.8z"/>
        <path d="M2274.5 719.2l4.7 2.7v-11.2l-4.2 8.5z"/>
        <path d="M2274.2 707.8V719l.3.2h.5l1.3-8.3v-1l-.5.3v-1.5z"/>
        <path d="M2274.5 708v11l4.7 2.6v-11z"/>
        <path d="M2275 710.5v8.7l4.2 2.4V713z"/>
        <path d="M2271.3 719.7v-15.2l8.8 5.1v15.2l-1-.6v-13.5l-6.9-4v13.5z"/>
        <path d="M2280.7 724.4l-.6.4v-15.2l.6-.3z"/>
        <path d="M2271.9 704.2l-.6.3 8.8 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2253.8 744.8l10.5 6v-.8l-1.7-4.3-10.4-5.2 1.6 4.3zm7.8.4l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path d="M2250.4 740.6v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path d="M2252.2 739.7l-1.8 1 6.6 3.7 4 2.2 1.6-1z"/>
        <path d="M2262.4 745.5l-1.2-.6v.6zm.2 1l-1.7 1v-1l1.7-.9zm-2.4-15.1v13.5l-4.7-2.2-2.2-1.8z"/>
        <path d="M2253.3 727.4l1.2.6 4.2 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path d="M2258.7 734.3v5.8l-3.2.8h-2.2l1.2-.6z"/>
        <path d="M2260.2 743.7l-5.7-3.4V728l5.7 3.4z"/>
        <path d="M2260.2 743.7l-4.7-2.8v-11.3l4.7 2.8z"/>
        <path d="M2255.5 740l4.7 2.6v-11.2l-4 8.6z"/>
        <path d="M2255.3 728.5V740h.8l1.3-8.1v-1l-.4.1v-1.4z"/>
        <path d="M2255.6 728.7v11l4.6 2.7v-11z"/>
        <path d="M2256.1 731.3v8.7l4.1 2.4v-8.7z"/>
        <path d="M2252.4 740.4v-15l8.8 5v15.1l-1-.6v-13.5l-6.9-4v13.5zm9.4 4.7l-.6.4v-15.1l.6-.3z"/>
        <path d="M2253 725l-.6.4 8.8 5 .6-.3z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2272.1 755.6l10.5 6v-.7l-1.6-4.3-10.5-5.2 1.6 4.2zm7.8.6l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path d="M2268.9 751.5v.7l10.4 6.1v-.8l-3.2-2.6z"/>
        <path d="M2270.5 750.5l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path d="M2280.7 756.4l-1-.6v.6zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15v13.6l-4.8-2.3-2.1-1.7z"/>
        <path d="M2271.8 738.3l1 .6 4.3 6.3v5.8l-3.1.9h-2.2V746z"/>
        <path d="M2277.1 745.2v5.8l-3.1.9h-2.2l1-.7z"/>
        <path d="M2278.7 754.6l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path d="M2278.7 754.6l-4.7-2.7v-11.4l4.7 2.7z"/>
        <path d="M2274 750.9l4.7 2.7v-11.3l-4.1 8.6z"/>
        <path d="M2273.7 739.5v11.2l.3.2h.6l1.1-8.3v-1l-.4.3v-1.6z"/>
        <path d="M2274 739.6v11l4.7 2.7v-11z"/>
        <path d="M2274.6 742.2v8.7l4 2.4v-8.7z"/>
        <path d="M2270.8 751.3v-15l8.8 5v15l-1-.4v-13.6l-6.8-4V752z"/>
        <path d="M2280.1 756l-.5.4v-15.1l.5-.3z"/>
        <path d="M2271.4 736l-.6.2 8.8 5.1.5-.3z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2254.3 687l10.5 6v-.8l-1.7-4.3-10.4-5.2 1.6 4.2zm7.8.5l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path d="M2251 682.8v.8l10.4 6v-.7l-3.3-2.6z"/>
        <path d="M2252.7 681.8l-1.7 1 6.5 3.8 3.9 2.3 1.7-1z"/>
        <path d="M2262.8 687.7l-1.1-.6v.6zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.6l-4.8-2.3-2.2-1.7z"/>
        <path d="M2253.8 669.6l1.2.6 4.2 6.4v5.7l-3 .9h-2.4v-5.9z"/>
        <path d="M2259.2 676.6v5.7l-3 .9h-2.4l1.2-.7z"/>
        <path d="M2260.8 685.9l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path d="M2260.8 685.9l-4.7-2.7v-11.3l4.7 2.6z"/>
        <path d="M2256.1 682.2l4.7 2.7v-11.3l-4.2 8.6z"/>
        <path d="M2255.8 670.8V682l.3.2h.5l1.2-8.2v-1l-.3.2v-1.5z"/>
        <path d="M2256.1 670.9v11l4.7 2.7v-11z"/>
        <path d="M2256.6 673.5v8.7l4.2 2.4V676z"/>
        <path d="M2253 682.6v-15l8.7 5v15.1l-.9-.5v-13.6l-7-4v13.6zm9.3 4.8l-.6.3v-15.1l.6-.3z"/>
        <path d="M2253.4 667.2l-.5.3 8.8 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2272.7 697.9l10.5 6v-.7l-1.6-4.4-10.5-5.1 1.6 4.2zm7.8.5l-.4-12.8.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path d="M2269.4 693.7v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path d="M2271 692.7l-1.6 1 6.5 3.8 4 2.2 1.6-1z"/>
        <path d="M2281.2 698.7l-1-.7v.7zm.3.8l-1.7 1v-.8l1.7-1zm-2.3-15v13.6l-4.8-2.2-2.2-1.9z"/>
        <path d="M2272.2 680.5l1.1.7 4.3 6.2v5.9l-3.1.7h-2.3v-5.7z"/>
        <path d="M2277.6 687.4v5.9l-3.1.7h-2.3l1.1-.5z"/>
        <path d="M2279.2 696.8l-5.9-3.3v-12.3l5.9 3.3z"/>
        <path d="M2279.2 696.8l-4.7-2.8v-11.3l4.7 2.8z"/>
        <path d="M2274.5 693l4.7 2.8v-11.3l-4.2 8.6z"/>
        <path d="M2274.2 681.7v11.2l.3.2h.5l1.3-8.2v-1l-.5.2v-1.5z"/>
        <path d="M2274.5 681.8v11l4.7 2.7v-11z"/>
        <path d="M2275 684.4v8.7l4.2 2.4v-8.7z"/>
        <path d="M2271.3 693.6v-15.2l8.8 5v15.3l-1-.6v-13.6l-6.9-4V694z"/>
        <path d="M2280.7 698.3l-.6.4v-15.2l.6-.3z"/>
        <path d="M2271.9 678.1l-.6.3 8.8 5 .6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2254.3 660l10.5 6v-.9l-1.7-4.3-10.4-5.2 1.6 4.4zm7.8.4l-.4-12.7.6-2.4.5 1.4v14l-.7-.3z"/>
        <path d="M2251 655.8v.8l10.4 6v-.8l-3.3-2.5z"/>
        <path d="M2252.7 654.9l-1.7 1 6.5 3.7 3.9 2.2 1.7-1z"/>
        <path d="M2262.8 660.7l-1.1-.7v.7zm.3 1l-1.7 1v-1l1.7-.9zm-2.3-15.1v13.5l-4.8-2.2-2.2-1.7z"/>
        <path d="M2253.8 642.6l1.2.6 4.2 6.3v5.8l-3 .9h-2.4v-5.9z"/>
        <path d="M2259.2 649.5v5.8l-3 .9h-2.4l1.2-.7z"/>
        <path d="M2260.8 658.9l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path d="M2260.8 658.9l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path d="M2256.1 655.1l4.7 2.8v-11.3l-4.2 8.5z"/>
        <path d="M2255.8 643.7v11.4h.8l1.2-8.1v-1l-.3.1v-1.4z"/>
        <path d="M2256.1 644v10.9l4.7 2.6v-10.9z"/>
        <path d="M2256.6 646.5v8.6l4.2 2.4V649z"/>
        <path d="M2253 655.6v-15l8.7 5v15.1l-.9-.6v-13.5l-7-4v13.6zm9.3 4.8l-.6.3v-15.1l.6-.3z"/>
        <path d="M2253.4 640.2l-.5.3 8.8 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2272.7 670.8l10.5 6v-.7l-1.6-4.3-10.5-5.2 1.6 4.2zm7.8.6l-.4-12.8.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path d="M2269.4 666.7v.7l10.4 6v-.7l-3.2-2.5z"/>
        <path d="M2271 665.7l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path d="M2281.2 671.6l-1-.6v.6zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15v13.6l-4.8-2.2-2.2-1.8z"/>
        <path d="M2272.2 653.5l1.1.6 4.3 6.3v5.8l-3.1.9h-2.3v-5.9z"/>
        <path d="M2277.6 660.4v5.8l-3.1.9h-2.3l1.1-.7z"/>
        <path d="M2279.2 669.7l-5.9-3.3V654l5.9 3.4z"/>
        <path d="M2279.2 669.7l-4.7-2.6v-11.4l4.7 2.7z"/>
        <path d="M2274.5 666.1l4.7 2.7v-11.3l-4.2 8.6z"/>
        <path d="M2274.2 654.7v11.2l.3.2h.5l1.3-8.3v-1l-.5.3v-1.6z"/>
        <path d="M2274.5 654.8v11l4.7 2.7v-11z"/>
        <path d="M2275 657.4v8.7l4.2 2.4v-8.7z"/>
        <path d="M2271.3 666.5v-15.1l8.8 5v15.2l-1-.5v-13.6l-6.9-4v13.6z"/>
        <path d="M2280.7 671.3l-.6.3v-15.1l.6-.3z"/>
        <path d="M2271.9 651.1l-.6.3 8.8 5 .6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2265.5 637.9l10.5 6v-.8l-1.6-4.3-10.5-5.2 1.6 4.3zm7.8.5l-.4-12.7.6-2.4.6 1.4v13.9l-.8-.2z"/>
        <path d="M2262.3 633.7v.9l10.3 6v-.8l-3.2-2.5z"/>
        <path d="M2263.9 632.8l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path d="M2274 638.6l-1-.5v.5zm.4 1l-1.8 1v-.8l1.8-1zm-2.4-15v13.5l-4.7-2.2-2.3-1.8z"/>
        <path d="M2265 620.6l1.2.6 4.2 6.3v5.8l-3 .8h-2.4v-5.7z"/>
        <path d="M2270.4 627.5v5.8l-3 .8h-2.4l1.2-.7z"/>
        <path d="M2272 636.8l-5.8-3.4v-12.2l5.9 3.4z"/>
        <path d="M2272 636.8l-4.7-2.7v-11.3l4.8 2.7z"/>
        <path d="M2267.3 633.2l4.8 2.6v-11.2l-4.3 8.6z"/>
        <path d="M2267 621.7V633l.3.2h.5l1.3-8.3v-1l-.4.2v-1.5z"/>
        <path d="M2267.3 621.8v11l4.8 2.8v-11z"/>
        <path d="M2267.8 624.4v8.8l4.3 2.4v-8.8z"/>
        <path d="M2264.2 633.5v-15l8.7 5v15.1l-.8-.5v-13.5l-7-4V634zm9.3 4.8l-.6.3v-15.1l.6-.2z"/>
        <path d="M2264.7 618.2l-.5.3 8.7 5 .6-.2z"/>
      </g>
      <g fill="#DADADA">
        <path d="M2306.4 671.8l-7 4V661l7-4.1zm3.5.6l-10.9 6.4v-1l10.9-6.3z"/>
        <path d="M2308 670.4l-10.9 6.2 2 1.1 10.8-6.2z"/>
        <path d="M2306.4 671.9l-.4-.3v-15l.4-.3zm-7.8 4.6l-.5-.2v-16.5h.5z"/>
        <path d="M2298.6 659.9v16.6l.8-.5v-15l7-4.1v14.9l.9-.6v-16.6zm-1.5 17.6l2 1.3v-1l-2-1.2z"/>
        <path d="M2298 659.8h.6l8.7-5.1-.5-.2zM2326 661.7l-7 4.1V651l7-4.2zm3.4.6l-10.8 6.3v-1l10.8-6.3z"/>
        <path d="M2327.5 660.2l-10.8 6.3 2 1 10.7-6.2z"/>
        <path d="M2326 661.7l-.5-.2v-15l.4-.3zm-8 4.7l-.4-.2v-16.6l.5.2z"/>
        <path d="M2318 649.8v16.6l1-.6V651l7-4.1v14.8l.9-.5v-16.6zm-1.3 17.6l2 1.2v-1l-2-1.1z"/>
        <path d="M2317.6 649.6l.5.2 8.8-5.2-.6-.2z"/>
        <g>
          <path d="M2306.4 696l-7 4.2v-15l7-4.1zm3.5.6L2299 703v-1l10.9-6.3z"/>
          <path d="M2308 694.6l-11 6.4 2 1 10.8-6.2z"/>
          <path d="M2306.4 696l-.4-.1v-15l.4-.3zm-7.8 4.8l-.5-.3V684l.5.2z"/>
          <path d="M2298.6 684.2v16.6l.8-.6v-14.9l7-4.1V696l.9-.6V679zm-1.5 17.6l2 1.2v-1l-2-1.1zm.9-17.8l.6.2 8.7-5.2-.5-.2z"/>
        </g>
        <g>
          <path d="M2326 685.9l-7 4.1v-14.9l7-4.1zm3.4.7l-10.8 6.3v-1l10.8-6.3z"/>
          <path d="M2327.5 684.5l-10.8 6.2 2 1.1 10.7-6.2z"/>
          <path d="M2326 686l-.5-.3v-14.9l.4-.4zm-8 4.6l-.4-.2v-16.5h.5z"/>
          <path d="M2318 674v16.6l1-.5v-14.9l7-4.1V686l.9-.6v-16.6zm-1.3 17.6l2 1.3v-1l-2-1.2zm.9-17.7h.5l8.8-5.1-.6-.2z"/>
        </g>
        <g>
          <path d="M2307 720.2l-7 4.1v-15l7-4.1zm3.3.5l-10.8 6.4v-1l10.8-6.3z"/>
          <path d="M2308.4 718.7l-10.8 6.3 2 1 10.7-6.2z"/>
          <path d="M2307 720.2l-.6-.2v-15l.5-.3zm-8 4.7l-.4-.3V708l.3.2z"/>
          <path d="M2299 708.3v16.6l1-.6v-14.9l7-4.1v14.9l.8-.6V703zm-1.4 17.7l2 1v-1l-2-1z"/>
          <path d="M2298.6 708l.3.3 8.9-5.2-.5-.2z"/>
        </g>
        <g>
          <path d="M2326.4 710l-7 4.1v-14.9l7-4.1zm3.5.7L2319 717v-1l10.8-6.3z"/>
          <path d="M2328 708.6l-10.8 6.2 2 1.1 10.7-6.2z"/>
          <path d="M2326.4 710l-.5-.2v-14.9l.5-.4zm-7.9 4.7l-.4-.2V698h.4z"/>
          <path d="M2318.5 698v16.7l.9-.5v-14.9l7-4.1v14.9l1-.6V693zm-1.3 17.8l2 1.2v-1l-2-1.2zm.8-17.8h.5l8.9-5.1-.6-.2z"/>
        </g>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M2206.6 736.1l42.2 24.4v30l-42.2-24.4z"/>
        <path fill="#B2B2B2" d="M2291 736.1l-42.2 24.4v30L2291 766z"/>
        <path fill="#DADADA" d="M2206.6 736.1l42.2 24.4 42.2-24.4-42.2-24.3z"/>
        <path fill="#DADADA" d="M2204 732.5l42.2 24.4v5l-42.1-24.3z"/>
        <path fill="#DADADA" d="M2204 732.5l42.2 24.4L2291 731l-42.2-24.4z"/>
        <path fill="#DADADA" d="M2204 732.5l42.2 24.4v5l-42.1-24.3z"/>
        <path fill="#B2B2B2" d="M2291 731l-44.8 25.9v5l44.8-25.8z"/>
        <path fill="#DADADA" d="M2206.6 653l23.8-37.2 18.4 61.6v78l-42.2-24.4z"/>
        <path fill="#B2B2B2" d="M2291 653l-42.2 24.4v78L2291 731z"/>
        <path fill="#4A4A49" d="M2291 653l-42.2 24.4-18.4-61.5 39.7-17.5z"/>
      </g>
      <path opacity=".3" fill="#B2B2B2" d="M2220.7 733.6l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2209.6 729v.7l10.4 6v-.7l-3.3-2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.3 728l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2221.4 733.8l-1.1-.7v.7zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.5l-4.8-2.2-2.2-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212.4 715.8l1.2.5 4.2 6.4v5.7l-3 .9h-2.4v-5.9z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.8 722.7v5.7l-3 .9h-2.4l1.2-.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 732l-5.8-3.4v-12.3l5.8 3.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 732l-4.7-2.7V718l4.7 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 728.2l4.7 2.8v-11.3l-4.2 8.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.4 716.8v11.3l.3.1h.5l1.2-8.1v-1l-.3.2v-1.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 717v11l4.7 2.6v-11z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2215.2 719.6v8.6l4.2 2.4V722z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.5 728.7v-15l8.8 5v15.1l-.9-.6v-13.5l-7-4v13.6zm9.4 4.8l-.6.3v-15.1l.6-.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212 713.3l-.5.3 8.8 5.1.6-.4z"/>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2239.1 744.5l-.4-12.8.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2228 739.8v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.6 738.8l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2239.8 744.7l-1-.6v.6zm.2.9l-1.6 1v-.8l1.7-1zm-2.2-15v13.6l-4.8-2.2-2.1-1.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.9 726.6l1 .7 4.3 6.2v5.9l-3.1.7h-2.2v-5.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2236.2 733.5v5.9l-3.1.7h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.8 742.8l-5.9-3.3v-12.2l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.8 742.8l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 739.2l4.8 2.7v-11.3l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.8 727.8V739l.3.2h.5l1.3-8.3v-1l-.5.3v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 727.9v11l4.8 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233.6 730.4v8.8l4.2 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.9 739.7v-15.2l8.8 5v15.2l-1-.5v-13.6l-6.8-4v13.5zm9.4 4.7l-.6.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.5 724.2l-.6.3 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2220.2 765.2l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2209 760.6v.8l10.5 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2210.8 759.6l-1.7 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2221 765.5l-1.2-.7v.7zm.2 1l-1.7 1v-1l1.7-.9zm-2.4-15.1v13.5l-4.7-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212 747.3l1 .7 4.3 6.3v5.8l-3.2.8h-2.2V755z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.3 754.3v5.8l-3.2.8h-2.2l1.2-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2218.8 763.7l-5.7-3.4V748l5.7 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2218.8 763.7l-4.7-2.8v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.1 760l4.7 2.6v-11.2l-4 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214 748.5v11.3l.1.1h.6l1.3-8.1v-1l-.4.1v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.2 748.7v11l4.6 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 751.3v8.6l4.1 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211 760.4v-15.2l8.8 5.1v15.2l-1-.6v-13.5l-6.9-4v13.5zm9.4 4.7l-.6.4v-15.2l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.5 745l-.5.2 8.8 5.1.6-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2238.5 776.2l-.3-12.8.5-2.4.6 1.4v14l-.8-.2z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2227.5 771.5v.7l10.4 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.1 770.5l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2239.3 776.4l-1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15.1V776l-4.8-2.3-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.3 758.3l1.1.6 4.3 6.3v5.8l-3.1.8h-2.3V766z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2235.7 765.2v5.8l-3.1.8h-2.3l1.1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.3 774.5l-5.9-3.3v-12.3l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.3 774.5l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.6 770.8l4.7 2.8v-11.4l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.3 759.4v11.3h.8l1.2-8v-1l-.4.1v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.6 759.5v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 762.1v8.7l4.3 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.4 771.3v-15.1l8.8 5v15.2l-1-.5v-13.7l-7-3.9v13.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2238.7 776l-.5.4v-15.1l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230 755.9l-.6.3 8.8 5 .5-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2220.7 707.5l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2209.6 702.8v.8l10.4 6v-.8l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.3 701.8l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2221.4 707.7l-1.1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15v13.6l-4.8-2.3-2.2-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212.4 689.6l1.2.6 4.2 6.3v5.8l-3 .9h-2.4v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.8 696.5v5.8l-3 .9h-2.4l1.2-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 705.9l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 705.9l-4.7-2.7v-11.4l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 702.1l4.7 2.8v-11.3l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.4 690.7V702l.3.1h.5l1.2-8.2v-1l-.3.3v-1.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 690.9v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2215.2 693.5v8.6l4.2 2.4V696z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.5 702.6v-15l8.8 5v15l-.9-.4v-13.6l-7-4v13.6zm9.4 4.8l-.6.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212 687.2l-.5.3 8.8 5.1.6-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2239.1 718.3l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2228 713.6v.9l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.6 712.7l-1.6 1 6.5 3.8 4 2.2 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2239.8 718.6l-1-.6v.6zm.2.9l-1.6 1v-.8l1.7-1zm-2.2-15v13.6l-4.8-2.3-2.1-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.9 700.5l1 .7 4.3 6.2v5.9l-3.1.7h-2.2v-5.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2236.2 707.4v5.9l-3.1.7h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.8 716.8l-5.9-3.4v-12.2l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.8 716.8l-4.7-2.8v-11.3l4.7 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 713l4.8 2.8v-11.3l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.8 701.6V713l.3.2h.5l1.3-8.2v-1l-.5.1v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 701.8v11l4.8 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233.6 704.3v8.8l4.2 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.9 713.5v-15.1l8.8 5v15.2l-1-.5v-13.6l-6.8-4V714zm9.4 4.7l-.6.4v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.5 698l-.6.4 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2220.7 680.4l-.4-12.8.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2209.6 675.8v.8l10.4 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.3 674.8l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2221.4 680.7l-1.1-.7v.7zm.3 1l-1.7 1v-1l1.7-1zm-2.3-15.1V680l-4.8-2.2-2.2-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212.4 662.5l1.2.7 4.2 6.3v5.8l-3 .9h-2.4v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2217.8 669.5v5.8l-3 .9h-2.4l1.2-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 678.9l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2219.4 678.9l-4.7-2.7v-11.4l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 675.1l4.7 2.8v-11.3l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.4 663.7V675l.3.1h.5l1.2-8.1v-1l-.3.1v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2214.7 663.9v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2215.2 666.5v8.6l4.2 2.4V669z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2211.5 675.6v-15l8.8 5v15.1l-.9-.6v-13.5l-7-4v13.6zm9.4 4.8l-.6.3v-15.1l.6-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2212 660.1l-.5.4 8.8 5.1.6-.4z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2239.1 691.4l-.4-12.8.6-2.4.6 1.4v14l-.8-.2z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2228 686.6v.8l10.4 6v-.7l-3.2-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.6 685.7l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2239.8 691.5l-1-.5v.5zm.2 1l-1.6 1v-.8l1.7-1zm-2.2-15.1v13.7l-4.8-2.2-2.1-1.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.9 673.5l1 .6 4.3 6.3v5.8l-3.1.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2236.2 680.4v5.8l-3.1.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.8 689.7l-5.9-3.3V674l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2237.8 689.7l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 686l4.8 2.8v-11.4l-4.2 8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.8 674.6V686l.3.2h.5l1.3-8.3v-1l-.5.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233 674.7v11l4.8 2.8v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2233.6 677.3v8.8l4.2 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229.9 686.5v-15.1l8.8 5v15.1l-1-.4v-13.7l-6.8-4V687zm9.4 4.8l-.6.2v-15l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.5 671l-.6.4 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2232 658.4l-.5-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2220.9 653.7v.8l10.3 6v-.7l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2222.5 652.7l-1.6 1 6.4 3.8 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2232.7 658.6l-1.2-.6v.6zm.3 1l-1.8 1v-.8l1.8-1zm-2.3-15V658l-4.8-2.2-2.3-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2223.6 640.5l1.2.6 4.2 6.4v5.7l-3 .9h-2.4v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2229 647.5v5.7l-3 .9h-2.4l1.2-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.7 656.8l-5.9-3.4v-12.3l5.9 3.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2230.7 656.8l-4.7-2.7v-11.3l4.7 2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2226 653.1l4.7 2.7v-11.2l-4.3 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2225.7 641.7v11.2l.3.2h.4l1.3-8.2v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2226 641.8v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2226.4 644.4v8.7l4.3 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2222.8 653.5v-15l8.7 5v15.1l-.8-.5v-13.5l-7-4V654zm9.3 4.8l-.6.3v-15.1l.6-.3zM2223.3 638.1l-.5.3 8.7 5.1.6-.3z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2265 691.7l-7 4.2v-15l7-4zm3.5.7l-10.9 6.4v-1.2l10.9-6.1z"/>
        <path d="M2266.6 690.3l-10.9 6.2 2 1.1 10.8-6.1z"/>
        <path d="M2265 691.7l-.4-.2v-14.8l.4-.4zm-7.8 4.7l-.5-.1v-16.7l.5.2z"/>
        <path d="M2257.2 679.8v16.6l.8-.4v-15l7-4v14.7l1-.4v-16.7zm-1.5 17.7l2 1.3v-1.2l-2-1z"/>
        <path d="M2256.7 679.6l.5.2 8.7-5.2-.5-.1zM2284.5 681.7l-6.9 4v-14.9l7-4.1zm3.5.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M2286 680.2l-10.7 6.3 2 1 10.7-6.2z"/>
        <path d="M2284.5 681.7l-.4-.2v-15l.4-.3zm-7.8 4.7l-.5-.3v-16.5l.5.1z"/>
        <path d="M2276.7 669.7v16.7l1-.6V671l6.8-4.1v14.8l1-.6v-16.5zm-1.4 17.7l2 1.2v-1l-2-1.1z"/>
        <path d="M2276.2 669.6l.5.1 8.8-5.1-.6-.2z"/>
        <g>
          <path d="M2265 716l-7 4.2v-15l7-4.1zm3.5.6l-10.9 6.4v-1.1l10.9-6.2z"/>
          <path d="M2266.6 714.6l-10.9 6.2 2 1.1 10.8-6.2z"/>
          <path d="M2265 716l-.4-.2v-15l.4-.2zm-7.8 4.7l-.5-.2v-16.6l.5.2z"/>
          <path d="M2257.2 704.1v16.6l.8-.5v-15l7-4V716l1-.5v-16.6zm-1.5 17.7l2 1.2v-1.1l-2-1zm1-17.8l.5.1 8.7-5.2-.5-.1z"/>
        </g>
        <g>
          <path d="M2284.5 705.9l-6.9 4v-14.8l7-4.1zm3.5.6l-10.8 6.4v-1.2l10.8-6.1z"/>
          <path d="M2286 704.4l-10.7 6.3 2 1 10.7-6.1z"/>
          <path d="M2284.5 705.9l-.4-.2v-15l.4-.3zm-7.8 4.7l-.5-.2v-16.6l.5.1z"/>
          <path d="M2276.7 694v16.6l1-.5v-14.9l6.8-4.1v14.8l1-.5v-16.6zm-1.4 17.6l2 1.3v-1.2l-2-1zm.9-17.8l.5.1 8.8-5.1-.6-.2z"/>
        </g>
        <g>
          <path d="M2265.5 740.1l-7 4.2v-15l7-4.1zm3.4.6l-10.8 6.4V746l10.8-6.2z"/>
          <path d="M2267 738.7l-10.8 6.2 2 1.1 10.7-6.2z"/>
          <path d="M2265.5 740.1l-.5-.1v-15l.5-.3zm-7.9 4.8l-.5-.3V728l.5.2z"/>
          <path d="M2257.6 728.2V745l1-.6v-15l7-4V740l.8-.5V723zm-1.4 17.8l2 1v-1l-2-1z"/>
          <path d="M2257 728l.6.2 8.8-5.2-.5-.1z"/>
        </g>
        <g>
          <path d="M2285 730l-7 4v-14.8l7-4.1zm3.5.6l-10.8 6.4v-1.2l10.8-6.1z"/>
          <path d="M2286.6 728.5l-10.8 6.3 2 1 10.7-6.1z"/>
          <path d="M2285 730l-.5-.2v-15l.5-.3zm-7.9 4.7l-.4-.2v-16.6l.4.2z"/>
          <path d="M2277.1 718v16.7l1-.5v-14.9l7-4.1V730l.9-.5v-16.6zm-1.3 17.7l2 1.3v-1.2l-2-1z"/>
          <path d="M2276.7 717.9l.4.2 8.9-5.2-.6-.2z"/>
        </g>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#DADADA" d="M2251.3 762.7l42.2 24.4V817l-42.2-24.3z"/>
        <path fill="#B2B2B2" d="M2335.6 762.7l-42.1 24.4V817l42.1-24.3z"/>
        <path fill="#DADADA" d="M2251.3 762.7l42.2 24.4 42.1-24.4-42.1-24.4z"/>
        <path fill="#DADADA" d="M2248.7 759l42.3 24.5v5l-42.3-24.3z"/>
        <path fill="#DADADA" d="M2248.7 759l42.3 24.5 44.6-25.9-42.1-24.4z"/>
        <path fill="#DADADA" d="M2248.7 759l42.3 24.5v5l-42.3-24.3zm86.9-1.4l-44.6 25.9v5l44.6-25.8zm-84.3-78l23.7-37.3 18.5 61.7v78l-42.2-24.4z"/>
        <path fill="#B2B2B2" d="M2335.6 679.6l-42.1 24.4v78l42.1-24.4z"/>
        <path fill="#DADADA" d="M2335.6 679.6l-42.1 24.4-18.5-61.5 39.8-17.6z"/>
      </g>
      <path opacity=".3" fill="#B2B2B2" d="M2265.3 760.1l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2254.3 755.5v.8l10.4 6v-.8l-3.3-2.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256 754.6l-1.7 1 6.4 3.7 4 2.2 1.7-1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2266.1 760.4l-1.2-.7v.7zm.3 1l-1.7 1v-1l1.7-.9zm-2.4-15.1v13.5l-4.7-2.2-2.2-1.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2257 742.3l1.2.6 4.2 6.3v5.8l-3 .8h-2.3V750z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2262.4 749.2v5.8l-3 .8h-2.3l1.1-.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2264 758.6l-5.8-3.4V743l5.9 3.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2264 758.6l-4.6-2.8v-11.3l4.7 2.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 754.8l4.7 2.7v-11.2l-4.2 8.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259 743.4v11.3l.4.1h.5l1.2-8.1v-1l-.4.1v-1.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 743.6v11l4.7 2.6v-11z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.9 746.2v8.6l4.2 2.4v-8.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256.2 755.3v-15l8.7 5v15.1l-.8-.6v-13.5l-7-4v13.5zm9.3 4.7l-.6.4v-15.2l.6-.3zm-8.8-20.1l-.5.3 8.7 5 .6-.3z"/>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2283.8 771l-.4-12.7.6-2.4.5 1.4v14.1l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2272.6 766.4v.7l10.5 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274.3 765.4l-1.7 1 6.6 3.7 3.9 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2284.4 771.3l-1-.7v.7zm.3.9l-1.6 1v-.8l1.6-1zm-2.3-15.1v13.7l-4.8-2.3-2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.5 753.2l1 .6 4.4 6.3v5.8l-3.2.8h-2.2V761z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2280.9 760.1v5.8l-3.2.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282.4 769.4l-5.8-3.3v-12.3l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282.4 769.4l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.7 765.7l4.7 2.8V757l-4.1 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.4 754.3v11.3h.9l1.2-8v-1l-.4.2v-1.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.7 754.5v10.9l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2278.3 757v8.7l4.1 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274.6 766.2V751l8.8 5v15.2l-1-.5V757l-6.9-3.9v13.5zm9.4 4.8l-.6.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.1 750.8l-.5.3 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2264.8 791.8l-.3-12.8.5-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2253.7 787.1v.9l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2255.4 786.1l-1.7 1 6.5 3.8 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2265.6 792l-1.1-.6v.6zm.4 1l-1.8 1v-.8l1.7-1zm-2.5-15v13.5l-4.7-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256.6 774l1.1.6 4.3 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2262 780.9v5.8l-3.2.8h-2.2l1.1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2263.5 790.2l-5.8-3.4v-12.2l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2263.5 790.2l-4.7-2.7v-11.3l4.7 2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2258.8 786.5l4.7 2.7V778l-4.1 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2258.6 775.1v11.2l.2.2h.6l1.2-8.2v-1l-.4.2V776z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2258.9 775.2v11l4.6 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 777.8v8.7l4.1 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2255.6 787v-15.2l8.9 5.1V792l-1-.5V778l-7-4v13.5zm9.4 4.7l-.5.3v-15l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256.2 771.5l-.6.3 8.9 5.1.5-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2283.2 802.7l-.4-12.8.6-2.4.6 1.4V803l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2272.1 798v.8l10.4 6v-.8l-3.1-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2273.8 797.1l-1.7 1 6.5 3.7 4 2.2 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2284 803l-1-.7v.7zm.3 1l-1.8.9v-.9l1.8-1zm-2.3-15.2v13.6l-4.9-2.2-2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275 784.8l1 .7 4.4 6.2v5.9l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2280.4 791.7v5.9l-3.2.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282 801.1l-6-3.3v-12.3l6 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282 801.1l-4.8-2.7V787l4.7 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.2 797.4l4.7 2.8v-11.4l-4 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277 786v11.3h.8l1.2-8v-1h-.4V787z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.2 786.1v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.8 788.7v8.7l4.1 2.4V791z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274 797.9v-15.1l9 5V803l-1-.6v-13.6l-7-4v13.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2283.4 802.6l-.5.4v-15.1l.5-.4zm-8.8-20.2l-.5.4 8.8 5 .5-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2265.3 734l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2254.3 729.4v.8l10.4 6v-.9l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256 728.4l-1.7 1 6.4 3.7 4 2.2 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2266.1 734.3l-1.2-.7v.7zm.3.9l-1.7 1v-.9l1.7-1zm-2.4-15v13.5l-4.7-2.2-2.2-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2257 716.1l1.2.7 4.2 6.2v6l-3 .8h-2.3v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2262.4 723v6l-3 .8h-2.3l1.1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2264 732.5l-5.8-3.4v-12.3l5.9 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2264 732.5l-4.6-2.7v-11.5l4.7 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 728.7l4.7 2.7v-11.2l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259 717.3v11.3l.4.1h.5l1.2-8.1v-1h-.4v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 717.5v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.9 720v8.7l4.2 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256.2 729.2v-15l8.7 5v15l-.8-.5v-13.5l-7-4v13.6zm9.3 4.7l-.6.4v-15.1l.6-.4zm-8.8-20.2l-.5.4 8.7 5.1.6-.4z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2283.8 745l-.4-12.8.6-2.4.5 1.4v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2272.6 740.2v.8l10.5 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274.3 739.3l-1.7 1 6.6 3.7 3.9 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2284.4 745.1l-1-.5v.5zm.3 1l-1.6 1v-.8l1.6-1zm-2.3-15.1v13.7l-4.8-2.2-2-1.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.5 727l1 .7 4.4 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2280.9 734v5.8l-3.2.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282.4 743.3l-5.8-3.3v-12.3l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282.4 743.3l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.7 739.7l4.7 2.7V731l-4.1 8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.4 728.2v11.3l.3.2h.6l1.2-8.3v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.7 728.3v11l4.7 2.8v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2278.3 731v8.7l4.1 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274.6 740v-15l8.8 5v15.1l-1-.4V731l-6.9-4v13.6zm9.4 4.9l-.6.2v-15l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.1 724.7l-.5.3 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2257.6 706.4l10.4 6v-.7l-1.6-4.3-10.5-5.2 1.7 4.2zm7.7.6l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2254.3 702.3v.9l10.4 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256 701.3l-1.7 1 6.4 3.8 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2266.1 707.3l-1.2-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.4-15v13.5l-4.7-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2257 689.1l1.2.7 4.2 6.3v5.8l-3 .8h-2.3v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2262.4 696v6l-3 .7h-2.3l1.1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2264 705.5l-5.8-3.4v-12.3l5.9 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2264 705.5l-4.6-2.8v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 701.7l4.7 2.7v-11.2l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259 690.3v11.2l.4.2h.5l1.2-8.2v-1l-.4.2v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.4 690.5v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2259.9 693v8.7l4.2 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256.2 702.2V687l8.7 5.1v15.2l-.8-.6v-13.5l-7-4v13.5zm9.3 4.8l-.6.3v-15.2l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2256.7 686.7l-.5.3 8.7 5.1.6-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2283.8 717.9l-.4-12.8.6-2.4.5 1.4v14.1l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2272.6 713.3v.7l10.5 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274.3 712.3l-1.7 1 6.6 3.7 3.9 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2284.4 718.2l-1-.7v.7zm.3.9l-1.6 1v-.8l1.6-1zm-2.3-15.1v13.6l-4.8-2.2-2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.5 700l1 .7 4.4 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2280.9 707v5.8l-3.2.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282.4 716.3l-5.8-3.3v-12.3l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2282.4 716.3l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.7 712.6l4.7 2.8V704l-4.1 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.4 701.2v11.3h.9l1.2-8v-1l-.4.1v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.7 701.3v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2278.3 704v8.6l4.1 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2274.6 713v-15l8.8 5v15.2l-1-.6V704l-6.9-4v13.6zm9.4 4.9l-.6.3V703l.6-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.1 697.6l-.5.4 8.8 5 .6-.3z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2276.6 685l-.4-12.9.6-2.4.5 1.5v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2265.5 680.3v.8l10.4 6v-.7l-3.3-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2267.2 679.4l-1.7 1 6.5 3.7 3.9 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2277.3 685.2l-1.1-.7v.7zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.2v13.6l-4.8-2.2-2.2-1.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2268.3 667l1.2.7 4.2 6.4v5.7l-3 .9h-2.4v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2273.7 674v5.8l-3 .9h-2.4l1.2-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.3 683.4l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2275.3 683.4l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2270.6 679.6l4.7 2.8v-11.3l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2270.3 668.2v11.3l.3.1h.5l1.2-8.1v-1l-.3.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2270.6 668.4v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2271 671v8.6l4.3 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2267.4 680.1v-15l8.8 5v15.1l-.9-.6v-13.5l-7-4v13.6zm9.4 4.9l-.6.2v-15.1l.6-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2268 664.7l-.6.3 8.8 5.1.6-.4z"/>
      </g>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2309.7 718.3l-7 4.2v-15l7-4zm3.5.7l-10.9 6.3v-1.1l10.9-6.2z"/>
        <path d="M2311.2 716.9l-10.8 6.2 2 1.1 10.8-6.2z"/>
        <path d="M2309.7 718.3l-.5-.1v-15l.5-.3zm-7.9 4.7l-.5-.1v-16.7l.5.2z"/>
        <path d="M2301.8 706.4V723l.9-.5v-14.8l7-4.1v14.7l.9-.4v-16.7zm-1.4 17.7l2 1.2v-1.1l-2-1z"/>
        <path d="M2301.3 706.2l.5.2 8.8-5.2-.5-.1zM2329.2 708.3l-7 4v-14.9l7-4.1zm3.5.5l-10.8 6.4v-1l10.8-6.3z"/>
        <path d="M2330.7 706.8l-10.7 6.3 1.9 1 10.8-6.2z"/>
        <path d="M2329.2 708.3l-.5-.3v-15l.5-.2zm-7.9 4.6l-.5-.2v-16.5l.5.1z"/>
        <path d="M2321.3 696.3V713l1-.5v-14.9l6.9-4.1v14.9l1-.6V691zM2320 714l1.9 1.2v-1l-2-1.1z"/>
        <path d="M2320.8 696.2l.5.1 8.9-5.2-.6-.1z"/>
        <g>
          <path d="M2309.7 742.5l-7 4.3v-15l7-4.1zm3.5.7l-10.9 6.4v-1.1l10.9-6.2z"/>
          <path d="M2311.2 741.2l-10.8 6.1 2 1.2 10.8-6.2z"/>
          <path d="M2309.7 742.6l-.5-.2v-15l.5-.3zm-7.9 4.7l-.5-.2v-16.6l.5.1z"/>
          <path d="M2301.8 730.6v16.7l.9-.5v-15l7-4v14.8l.9-.5v-16.6zm-1.4 17.7l2 1.3v-1.1l-2-1.2z"/>
          <path d="M2301.3 730.5l.5.1 8.8-5.1-.5-.2z"/>
        </g>
        <g>
          <path d="M2329.2 732.5l-7 4v-14.8l7-4.1zm3.5.5l-10.8 6.4v-1l10.8-6.3z"/>
          <path d="M2330.7 731l-10.7 6.3 1.9 1 10.8-6.2z"/>
          <path d="M2329.2 732.5l-.5-.2v-15l.5-.3zm-7.9 4.7l-.5-.2v-16.6l.5.2z"/>
          <path d="M2321.3 720.6v16.6l1-.6v-14.8l6.9-4.1v14.8l1-.5v-16.6zm-1.3 17.6l1.9 1.2v-1l-2-1.1z"/>
          <path d="M2320.8 720.4l.5.2 8.9-5.2-.6-.2z"/>
        </g>
        <g>
          <path d="M2310.2 766.7l-7 4.2v-15l7-4.1zm3.3.6l-10.7 6.4v-1l10.7-6.3z"/>
          <path d="M2311.6 765.3l-10.7 6.2 1.9 1.1 10.7-6.2z"/>
          <path d="M2310.2 766.7l-.5-.2v-15l.5-.3zm-8 4.7l-.5-.2v-16.6l.5.1z"/>
          <path d="M2302.2 754.7v16.7l1-.5v-15l7-4v14.8l.8-.5v-16.6zm-1.3 17.7l1.9 1.3v-1l-2-1.2z"/>
          <path d="M2301.7 754.6l.5.1 8.8-5.1-.4-.2z"/>
        </g>
        <g>
          <path d="M2329.7 756.6l-7 4.1v-14.9l7-4.1zm3.4.5l-10.7 6.4v-1l10.7-6.3z"/>
          <path d="M2331.2 755.1l-10.7 6.3 1.9 1 10.7-6.2z"/>
          <path d="M2329.7 756.6l-.5-.2v-15l.5-.3zm-7.9 4.7l-.5-.2v-16.6l.5.2z"/>
          <path d="M2321.8 744.7v16.6l.9-.6v-14.8l7-4.1v14.8l1-.5v-16.6zm-1.3 17.6l1.9 1.2v-1l-2-1.1zm.8-17.8l.5.2 8.8-5.2-.5-.2z"/>
        </g>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2362 715.2l2.5 1.4 8.5-4.9-2.5-1.4zm-17 9.8l2.4 1.4 8.6-4.9-2.5-1.4zm-17 9.9l2.4 1.4 8.6-4.9-2.6-1.5zm-17.1 9.8l2.5 1.4 8.5-4.9-2.5-1.4zm-17 9.8l2.5 1.4 8.5-4.9-2.5-1.4zm1.5 27.2l43.5 25.2v38.7l-43.5-25.2zm87.1 0l-43.6 25.2v38.7l43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2292.7 778l43.6 25.1v5.3l-43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2324.3 798.4l.9.5v-.6l-1.2-.6.3.7zm-1.6-4.3l.2.5 1.9 1.2-2.1-5.5v3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2292.7 778l43.6 25.1 46.2-26.7-43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2292.7 778l43.6 25.1v5.3l-43.6-25.1zm89.8-1.6l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2295.4 715.8l43.5 25.1v60.7l-43.5-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2295.4 715.8l43.5 25.1 3.3 2.7-3.3 2.6-41-23.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.5 715.8l-43.6 25.1v60.7l43.6-25.2zm-89.8-3.8l43.6 25.2 46.2-26.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2295.4 710.5l43.5 25.1 43.6-25.1-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2295.4 710.5l43.5 25.1 18.4-7.5 25.2-17.6-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2295.4 710.5L2317 723l21.8 12.6 21.8-48.9 21.8 23.8-21.8-12.6-21.8-12.6-21.8-23.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2377.1 710.5l1.4.7 1.3.8-6.9-13.8-12.2-14-1.3-.8-1.4-.8 6 14.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2377.1 710.5l-38.1 22 19-49.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2338.9 735.6l21.8-57 21.8 31.9-2.7 1.5-19.1-27.8-19.1 49.9zm-46.2-23.6l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.5 710.5l-46.2 26.7v5.3l46.2-26.8zm-65.4-57l-21.7 57L2317 723l21.8 12.6 21.8-57-43.6-25"/>
      <path d="M2355.1 692.4v-8l-6.9-4-8.6 8.8v8.1l6.9 4 8.6-8.9zm-27.6-15.9l-.1-8.1-6.8-4-8.7 8.9.1 8 6.8 4 8.7-8.8z" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2"/>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2318.8 667.7l5-2.9v7.3l-5 13.2zm-6.8-3.9l6.8 4v17.5l-6.8-4z"/>
        <path d="M2312 663.8l6.8 4 5-3-6.7-3.9z"/>
        <path d="M2322.4 664.8l-5.3-3-3.7 2 5.4 3z"/>
        <path d="M2319 666.8l-1.9-5-3.7 2 5.4 3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2346.5 683.7l5-3v7.3l-5 13.2zm-6.8-4l6.8 4v17.5l-6.8-3.9z"/>
        <path d="M2339.7 679.7l6.8 4 5-3-6.7-3.8z"/>
        <path d="M2350 680.8l-5.2-3-3.7 2 5.4 3.1z"/>
        <path d="M2346.7 682.7l-2-5-3.6 2 5.4 3.2z"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2358 755.1v.9l-9.1 5.2v-.9l1.6-1.7zm0 27.8v.8l-9.1 5.3v-1l1.6-1.6zm17-9.9v.9l-9 5.2v-1l1.7-1.6zm-27.4-13.5v1l1.3.7v-.9zm.7-15.5v15.2l5.3-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2356 739.6l-1.3.7-4.7 7v6.5l4.7.2 1.3.7v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.3 757.8l6.4-3.8v-13.7l-6.4 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 753.5l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 747.7v5.8h-2.4v-1.4h.3l.4.2v-3.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.5 748v5.3l-5.2 3v-5.4zm.3-1l-5.5 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 741v6h-.9l-1.3-2.5v-1l.5.1V742z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.5 741.1v5.7l-5.2 3V744zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.3-.8zm-9.1 33v.9l1.3.7v-1zm.7-15.4v15l5.3-2.5 2.4-1.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2356 767.4l-1.3.8-4.7 7v6.4l4.7.2 1.3.8v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.3 785.6l6.4-3.8v-13.6l-6.4 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 781.3l-5.6 3.1v-5.7l5.6 2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 775.6v5.6l-.2.2h-2.2V780h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.5 775.8v5.3l-5.2 3v-5.3zm.3-1.1l-5.5 3.3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 768.7v6l-.2.2h-.7l-1.3-2.6v-1.1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.5 768.9v5.6l-5.2 3.1v-5.7zm3.2 13.3l1.2.7-6 3.4-3 1.8-1.3-.7zm-9.1 47.5v.8l1.3.7v-.9zm.7-15.5v15l5.3-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2356 809.7l-1.3.7-4.7 7v6.5l4.7.2 1.3.7v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.3 827.8l6.4-3.7v-13.7l-6.4 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 823.5l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 817.8v5.7l-.2.2h-2.2v-1.5h.3l.4.3v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.5 818v5.3l-5.2 3V821zm.3-1l-5.5 3.1v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.8 811v6l-.2.2h-.7l-1.3-2.6v-1.2l.5.2V812z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.5 811.1v5.7l-5.2 3v-5.6zm3.2 13.4l1.2.6-6 3.5-3 1.7-1.3-.6zm8.1-4.7v.8l1.3.7v-.9zm.6-15.6v15.2l5.4-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.2 799.8l-1.3.7-4.8 7v6.5l4.8.2 1.3.7v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2365.4 818l6.5-3.8v-13.7l-6.5 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 813.6l-5.6 3.2V811l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 808v5.6l-.3.2h-2.2v-1.5h.3l.4.3v-3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370.7 808v5.4l-5.3 3.1v-5.4zm.3-1l-5.6 3.3v-6.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 801v6l-.3.3h-.6l-1.4-2.6v-1.2l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370.7 801.2v5.7l-5.3 3v-5.7zm3.1 13.4l1.2.6-5.8 3.5-3.1 1.7-1.3-.6zm1.2-69.4v.9l-9 5.2v-.9l1.7-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2364.8 749.7v.8l1.3.8v-.9zm.6-15.5v15l5.4-2.3 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.2 729.7l-1.3.7-4.8 7v6.5l4.8.2 1.3.8v-6.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2365.4 747.8l6.5-3.7v-13.7l-6.5 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 743.6l-5.6 3.2V741l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 737.8v5.8l-.3.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370.7 738v5.4l-5.3 3V741zm.3-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 731v6l-.3.2h-.6l-1.4-2.6v-1l.5.1V732z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370.7 731.1v5.8l-5.3 3v-5.7zm3.1 13.4l1.2.7-5.8 3.4-3.1 1.8-1.3-.7zm-9 33v.9l1.3.7v-1zm.6-15.5v15.1l5.4-2.5 2.4-1.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.2 757.5l-1.3.7-4.8 7v6.5l4.8.2 1.3.8v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2365.4 775.7l6.5-3.8v-13.7l-6.5 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 771.4l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 765.7v5.7l-.3.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370.7 765.9v5.3l-5.3 3V769zm.3-1.1l-5.6 3.3v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371 758.8v6l-.3.2h-.6l-1.4-2.6v-1.1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370.7 759v5.6l-5.3 3.1V762zm3.1 13.3l1.2.7-5.8 3.4-3.1 1.8-1.3-.7zm-37.4 43.7l-.8.3v23.3l.8-.4zm-38.4-21.5l23.2 13 14.4 8.8v23.3l-37.6-21.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2315.6 821.2l5.6-13.6 14.4 8.7v23.3l-30-17.2.2-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2314.7 803.3l-.9.4 21.8 12.6.8-.4zm1.4 4.5l-1.4 18.8 20.2 11.7v-21.5zm-16.8-11.7v21.5h2.3l-.5-20.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2300.3 797.3v20.5l34.6 19.5v-20.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2301 798v20.1l33.9 19.2v-19.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2300.4 798v3.7l6.4 19.9 28 15.7v-19.8l-18.7-10.8-15.7-8.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2325.7 829.8l12.7-7.3v-.5l-12.7 7.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2325.4 829.6l12.6-7.3.4-.3-.4-.2-12.6 7.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2338.6 813.4l-13.4 14.3v2.4l.5-.3v-2l13-13.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2284.3 804.2l40.9 23.5v2.4l-41-23.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2284 804.2l41.2 23.5 13.4-14.3-19.7-10.6-3.7-3-17.7-10zm21.7 17.4h1.3l27.9 15.8v.9l-13.1-7.6-16.1-9.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2338.6 813.4l-13.4 14.3v2.4l.5-.3v-2l13-13.8zm-40.3-22.2l39.6 22.9.7-.7-40-22.8z"/>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2329.1 784.9l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2318 780.2v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2319.7 779.2l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2329.9 785l-1.2-.5v.6zm.3 1l-1.8 1v-.8l1.8-1zm-2.3-15v13.6l-4.8-2.2-2.3-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2320.8 767l1.2.6 4.2 6.4v5.7l-3.1.9h-2.3v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2326.2 774v5.7l-3.1.9h-2.3l1.2-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2327.9 783.3l-6-3.4v-12.3l6 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2327.9 783.3l-4.8-2.7v-11.4l4.8 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2323 779.6l4.9 2.7V771l-4.3 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2322.9 768.2v11.2l.2.2h.5l1.3-8.2v-1l-.4.2V769z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2323.1 768.3v11l4.8 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2323.6 770.9v8.7l4.3 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2320 780v-15l8.7 5v15l-.8-.4v-13.5l-7-4v13.5zm9.3 4.8l-.6.3V770l.6-.3zm-8.8-20.2l-.5.3 8.7 5.1.6-.3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2310.9 776l-.4-12.7.5-2.4.6 1.4v14.1l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2299.7 771.5v.7l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2301.3 770.5l-1.6 1 6.5 3.7 4 2.2 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2311.5 776.4l-1-.7v.7zm.3.9l-1.6 1v-.9l1.6-1zm-2.3-15.1v13.6l-4.8-2.2-2.1-1.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2302.6 758.2l1 .7 4.4 6.2v5.9l-3.2.7h-2.2V766z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2308 765.1v5.9l-3.2.7h-2.2l1-.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2309.5 774.5l-5.8-3.3v-12.3l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2309.5 774.5l-4.7-2.8v-11.3l4.7 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2304.8 770.8l4.7 2.7v-11.3l-4.1 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2304.5 759.4v11.3h.9l1.2-8v-1.1l-.5.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2304.8 759.5v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2305.4 762.1v8.7l4.1 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2301.6 771.3v-15.1l8.9 5v15.2l-1-.6v-13.6l-7-4v13.5zm9.4 4.7l-.5.4v-15.1l.5-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2302.2 755.8l-.6.4 8.9 5 .5-.3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2329.1 761.2l-.4-12.8.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2318 756.6v.7l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2319.7 755.6l-1.7 1 6.5 3.7 4 2.2 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2329.9 761.5l-1.2-.7v.7zm.3.9l-1.8 1v-.9l1.8-1zm-2.3-15.1V761l-4.8-2.2-2.3-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2320.8 743.3l1.2.7 4.2 6.2v5.9l-3.1.8h-2.3V751z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2326.2 750.2v5.9l-3.1.8h-2.3l1.2-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2327.9 759.6l-6-3.3V744l6 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2327.9 759.6l-4.8-2.7v-11.4l4.8 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2323 755.9l4.9 2.7v-11.3l-4.3 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2322.9 744.5v11.3l.2.1h.5l1.3-8.2v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2323.1 744.7v11l4.8 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2323.6 747.3v8.6l4.3 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2320 756.4v-15.1l8.7 5v15.2l-.8-.6v-13.6l-7-4V757zm9.3 4.6l-.6.5v-15.2l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2320.5 741l-.5.3 8.7 5 .6-.3z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2310.9 752.4l-.4-12.7.5-2.4.6 1.4v14l-.7-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2299.7 747.7v.8l10.5 6v-.7l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2301.3 746.8l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2311.5 752.6l-1-.5v.5zm.3 1l-1.6 1v-.8l1.6-1zm-2.3-15.1v13.6l-4.8-2.2-2.1-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2302.6 734.6l1 .5 4.4 6.4v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2308 741.5v5.8l-3.2.8h-2.2l1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2309.5 750.8l-5.8-3.4v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2309.5 750.8l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2304.8 747.2l4.7 2.6v-11.3l-4.1 8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2304.5 735.7V747l.3.2h.6l1.2-8.3v-1l-.5.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2304.8 735.8v11l4.7 2.8v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2305.4 738.4v8.8l4.1 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2301.6 747.5v-15l8.9 5v15.1l-1-.5v-13.5l-7-4V748zm9.4 4.8l-.5.3v-15l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2302.2 732.2l-.6.3 8.9 5 .5-.2z"/>
      </g>
    </g>
    <g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2405.8 740.8l2.6 1.5 8.4-5-2.5-1.4zm-17 9.8l2.5 1.5 8.5-5-2.5-1.4zm-17 9.9l2.5 1.4 8.5-4.9-2.6-1.5zm-17.1 9.8l2.6 1.4 8.4-4.9-2.5-1.4zm-17 9.8l2.5 1.4 8.5-4.9-2.5-1.4zm1.5 27.3l43.5 25.1v38.7l-43.5-25.1zm87.1 0l-43.6 25.1v38.7l43.6-25.1z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2336.5 803.6l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2368.1 824l1 .6v-.6l-1.2-.7.2.8zm-1.6-4.2l.2.4 2 1.2-2.2-5.5v3.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2336.5 803.6l43.6 25.2 46.2-26.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2336.5 803.6l43.6 25.2v5.3l-43.6-25.2zm89.8-1.6l-46.2 26.8v5.3l46.2-26.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2339.2 741.4l43.5 25.2v60.7l-43.5-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2339.2 741.4l43.5 25.2 3.3 2.6-3.3 2.6-40.9-23.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2426.3 741.4l-43.6 25.2v60.7l43.6-25.2zm-89.8-3.8l43.6 25.2 46.2-26.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2339.2 736.1l43.5 25.2 43.6-25.2-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2339.2 736.1l43.5 25.2 18.5-7.5 25.1-17.7-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2339.2 736.1l21.7 12.6 21.8 12.6 21.8-49 21.8 23.8-21.8-12.6-21.8-12.6-21.8-23.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2421 736.1l1.3.8 1.4.7-7-13.8-12.2-14-1.3-.8-1.3-.7 6 14.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2421 736.1l-38.2 22.1 19-50z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.7 761.3l21.8-57 21.8 31.8-2.6 1.5-19.2-27.8-19 50zm-46.2-23.7l43.6 25.2v5.3l-43.6-25.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2426.3 736.1l-46.2 26.7v5.3l46.2-26.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2361 679.2l-21.8 57 21.7 12.5 21.8 12.6 21.8-57-43.6-25.1"/>
      <path d="M2399 718l-.1-8-6.8-4-8.7 8.9.1 8 6.8 4 8.7-8.8zm-27.7-15.9v-8l-6.9-4-8.6 8.8v8.1l6.9 4 8.6-8.9z" fill-rule="evenodd" clip-rule="evenodd" fill="#B2B2B2"/>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2362.7 693.4l5-3v7.3l-5 13.2z"/>
        <path d="M2355.8 689.4l6.9 4v17.5l-6.8-3.9z"/>
        <path d="M2355.8 689.4l6.9 4 5-3-6.8-3.8z"/>
        <path d="M2366.2 690.5l-5.3-3-3.6 2 5.4 3z"/>
        <path d="M2362.9 692.4l-2-5-3.6 2 5.4 3.1z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2390.3 709.3l5-2.9v7.2l-5 13.3zm-6.8-3.9l6.8 4v17.5l-6.8-4z"/>
        <path d="M2383.5 705.4l6.8 4 5-3-6.7-3.9z"/>
        <path d="M2393.9 706.4l-5.3-3-3.6 2 5.3 3.1z"/>
        <path d="M2390.5 708.4l-1.9-5-3.6 2 5.3 3.1z"/>
      </g>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2401.8 780.8v.8l-9 5.2v-.8l1.6-1.8zm0 27.7v.9l-9 5.3v-1l1.6-1.6zm17.1-9.9v.9l-9 5.3v-1l1.7-1.6zm-27.4-13.4v.9l1.2.7v-.8zm.7-15.5v15.1l5.2-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2399.8 765.2l-1.2.8-4.7 7v6.4l4.7.2 1.2.8v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.2 783.5l6.4-3.9V766l-6.4 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 779.1l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 773.4v5.7l-.2.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.3 773.6v5.3l-5.1 3v-5.4zm.3-1l-5.4 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 766.6v6l-.2.1h-.6l-1.4-2.6v-1l.5.1v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.3 766.7v5.7l-5.1 3v-5.7zm3.2 13.3l1.3.8-6 3.3-3 1.9-1.3-.8zm-9 33v.9l1.2.8v-1zm.7-15.4v15l5.2-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2399.8 793l-1.2.8-4.7 7v6.5l4.7.2 1.2.7v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.2 811.2l6.4-3.7v-13.7l-6.4 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 806.9l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 801.2v5.7l-.2.2h-2.2v-1.5h.3l.4.2v-3.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.3 801.4v5.3l-5.1 3v-5.3zm.3-1l-5.4 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 794.3v6l-.2.3h-.6l-1.4-2.6v-1.2l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.3 794.5v5.7l-5.1 3v-5.6zm3.2 13.4l1.3.6-6 3.5-3 1.7-1.3-.7zm-9 47.4v.9l1.2.6v-.8zm.7-15.5V855l5.2-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2399.8 835.3l-1.2.7-4.7 7v6.5l4.7.2 1.2.7V844z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.2 853.5l6.4-3.8V836l-6.4 3.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 849.2l-5.5 3.1v-5.7l5.5 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 843.5v5.7l-.2.1h-2.2v-1.5h.3l.4.3v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.3 843.7v5.3l-5.1 3v-5.3zm.3-1.1l-5.4 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.6 836.6v6l-.2.2h-.6l-1.4-2.6v-1.1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397.3 836.8v5.6l-5.1 3.1v-5.7zm3.2 13.3l1.3.7-6 3.4-3 1.8-1.3-.7zm8.2-4.7v.9l1.2.6v-.8zm.6-15.6V845l5.3-2.5 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2417 825.4l-1.2.7-4.8 7v6.5l4.8.2 1.2.7v-6.4z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2409.3 843.6l6.5-3.8v-13.7l-6.6 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 839.3l-5.6 3.1v-5.7l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 833.6v5.7l-.3.2h-2.2v-1.6h.3l.4.3v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.5 833.7v5.4l-5.3 3v-5.3zm.3-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 826.7v6l-.3.2h-.5l-1.5-2.6v-1.1l.5.2v-1.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.5 826.9v5.6l-5.3 3.1v-5.8zm3.1 13.3l1.3.7-6 3.5-3 1.7-1.2-.7zm1.3-69.3v.8l-9 5.2v-.8l1.7-1.8zm-10.2 4.4v.9l1.2.7v-.8zm.6-15.5V775l5.3-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2417 755.3l-1.2.8-4.8 7v6.4l4.8.2 1.2.8V764z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2409.3 773.5l6.5-3.8v-13.6l-6.6 3.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 769.2l-5.6 3.2v-5.7l5.6 2.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 763.5v5.7l-.3.1h-2.2V768h.3l.4.2v-3.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.5 763.7v5.4l-5.3 3v-5.4zm.3-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 756.7v6l-.3.1h-.5l-1.5-2.6v-1l.5.2v-1.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.5 756.8v5.7l-5.3 3v-5.7zm3.1 13.3l1.3.8-6 3.3-3 1.9-1.2-.8zm-8.9 33v1l1.2.7v-1zm.6-15.4v15l5.3-2.4 2.4-2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2417 783.2l-1.2.6-4.8 7v6.6l4.8.2 1.2.7v-6.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2409.3 801.3l6.5-3.7v-13.8l-6.6 3.9z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 797l-5.6 3.2v-5.8l5.6 2.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 791.3v5.7l-.3.2h-2.2v-1.4h.3l.4.1v-3.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.5 791.5v5.3l-5.3 3v-5.3zm.3-1l-5.6 3.2v-6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.8 784.4v6l-.3.3h-.5l-1.5-2.6v-1.2l.5.2v-1.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2414.5 784.6v5.7l-5.3 3v-5.6zm3.1 13.4l1.3.6-6 3.5-3 1.7-1.2-.7zm-37.4 43.6l-.7.4v23.3l.7-.5z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2341.8 820.1l23.3 13.1 14.4 8.8v23.3l-37.7-22z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2359.4 846.8l5.7-13.6 14.4 8.8v23.3l-30-17.3.1-.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2358.5 829l-.8.4 21.8 12.6.7-.4zm1.5 4.4l-1.5 18.8 20.2 11.7v-21.5zm-16.8-11.6v21.5h2.3l-.6-20.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2344.1 823v20.5l34.6 19.5v-20.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2344.8 823.7v20l34 19.3v-20z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2344.2 823.6v3.8l6.5 19.8 28 15.8v-20l-18.7-10.8-15.8-8.7z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2369.6 855.4l12.7-7.2v-.6l-12.7 7.3z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2369.2 855.2l12.7-7.3.4-.3-.4-.2-12.7 7.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.5 839l-13.5 14.4v2.4l.6-.4v-2l12.9-13.8zm-54.5-9.2l41 23.6v2.4l-41-23.6z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2327.9 829.8l41.1 23.6 13.5-14.3-19.7-10.7-3.8-2.9-17.7-10zm21.6 17.4l1.4.1 27.8 15.8v.8l-13-7.5-16.2-9.2z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.5 839l-13.5 14.4v2.4l.6-.4v-2l12.9-13.8z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2342.1 816.9l39.7 22.8.7-.6-40-22.9z"/>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2373 810.5l-.4-12.7.5-2.4.6 1.4v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2361.8 805.8v.8l10.5 6v-.7l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2363.5 804.9l-1.7 1 6.5 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.7 810.7l-1.1-.5v.5zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.7l-4.8-2.3-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2364.7 792.7l1.1.6 4.3 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370 799.6v5.8l-3.1.8h-2.2l1.1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371.7 809l-5.9-3.5v-12.2l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371.7 809l-4.8-2.8V795l4.8 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2366.9 805.3l4.8 2.7v-11.4l-4.2 8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2366.7 793.8v11.3l.2.2h.6l1.2-8.3v-1l-.4.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2367 794v10.9l4.7 2.8v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2367.5 796.5v8.8l4.2 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2363.8 805.6v-15l8.8 5v15.1l-.9-.4v-13.6l-7-4v13.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.1 810.4l-.5.3v-15l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2364.3 790.3l-.5.3 8.8 5 .5-.2z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2354.7 801.7l-.4-12.8.6-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2343.6 797.1v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2345.2 796.1l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2355.4 802l-1-.7v.7zm.3 1l-1.7 1v-1l1.7-1zm-2.3-15.1v13.5l-4.8-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2346.4 783.8l1 .7 4.4 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2351.8 790.8v5.8l-3.2.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.4 800.2l-6-3.4v-12.3l6 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.4 800.2l-4.8-2.8V786l4.8 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.6 796.4l4.8 2.7V788l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.4 785v11.3l.2.1h.6l1.3-8.1v-1l-.5.1V786z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.6 785.2v11l4.8 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2349.2 787.8v8.6l4.2 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2345.5 797v-15.2l8.8 5.1V802l-1-.6V788l-6.9-4v13.5zm9.4 4.6l-.6.4v-15.1l.6-.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2346 781.4l-.5.4 8.8 5.1.6-.4z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2373 786.8l-.4-12.8.5-2.4.6 1.5v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2361.8 782.2v.8l10.5 6v-.8l-3.3-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2363.5 781.3l-1.7 1 6.5 3.7 4 2.2 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.7 787.1l-1.1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15v13.5l-4.8-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2364.7 769l1.1.6 4.3 6.3v5.8l-3.2.8h-2.2v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2370 775.9v5.8l-3.1.8h-2.2l1.1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371.7 785.3l-5.9-3.4v-12.3l5.9 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2371.7 785.3l-4.8-2.8v-11.3l4.8 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2366.9 781.5l4.8 2.7V773l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2366.7 770.1v11.3l.2.1h.6l1.2-8.1v-1l-.4.1v-1.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2367 770.3v11l4.7 2.6v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2367.5 772.9v8.6l4.2 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2363.8 782v-15l8.8 5v15.1l-.9-.6V773l-7-4v13.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2373.1 786.7l-.5.4V772l.5-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2364.3 766.6l-.5.3 8.8 5.1.5-.4z"/>
      </g>
      <g fill-rule="evenodd" clip-rule="evenodd">
        <path fill="#B2B2B2" d="M2354.7 778l-.4-12.7.6-2.4.6 1.4v14.1l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2343.6 773.4v.7l10.4 6.1v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2345.2 772.4l-1.6 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2355.4 778.3l-1-.6v.6zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15v13.6l-4.8-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2346.4 760.2l1 .6 4.4 6.3v5.8l-3.2.9h-2.2v-5.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2351.8 767.1v5.8l-3.2.9h-2.2l1-.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.4 776.4l-6-3.3v-12.3l6 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2353.4 776.4l-4.8-2.6v-11.4l4.8 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.6 772.8l4.8 2.7v-11.3l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.4 761.4v11.2l.2.2h.6l1.3-8.3v-1l-.5.3v-1.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2348.6 761.5v11l4.8 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2349.2 764v8.8l4.2 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2345.5 773.2V758l8.8 5.1v15l-1-.4v-13.5l-6.9-4v13.5zm9.4 4.8l-.6.3v-15.1l.6-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2346 757.8l-.5.3 8.8 5.1.6-.3z"/>
      </g>
    </g>
    <g fill-rule="evenodd" clip-rule="evenodd">
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2449.5 766.4l2.5 1.4 8.5-4.9-2.6-1.4zm-17.1 9.9l2.6 1.4 8.4-4.9-2.5-1.5zm-17 9.7l2.5 1.5 8.5-4.9-2.5-1.4zm-17 9.8l2.5 1.5 8.5-5-2.6-1.3zm-17.1 9.9l2.6 1.5 8.4-5-2.5-1.5zm1.5 27.3l43.6 25v38.8l-43.6-25.2z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2470 833l-43.6 25v38.8l43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2380.1 829.2l43.7 25.1v5.3l-43.7-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2380.1 829.2l43.7 25.1 46.1-26.7-43.5-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2380.1 829.2l43.7 25.1v5.3l-43.7-25.1z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2470 827.6l-46.2 26.7v5.3l46.1-26.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.8 767l43.6 25.2v60.6l-43.6-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.8 767l43.6 25.2 3.2 2.7-3.2 2.5-41-23.6z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2470 767l-43.6 25.2v60.6l43.5-25.2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2380.1 763.2l43.7 25.2 46.1-26.6-43.5-25.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.8 761.8l43.6 25.1 43.5-25.1-43.5-25.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.8 761.8l43.6 25.1 18.4-7.5 25.1-17.6-43.5-25.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2382.8 761.8l21.8 12.5 21.8 12.6 21.8-49 21.7 23.9-21.7-12.6-21.8-12.7-21.8-23.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2464.7 761.8l1.3.7 1.3.8-6.9-13.8-12.2-14-1.3-1-1.3-.7 6 14.4z"/>
      <path fill="#B2B2B2" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2464.7 761.8l-38.3 22 19.2-50z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2426.4 787l21.8-57 21.7 31.8-2.6 1.5-19-27.9-19.2 49.9zm-46.3-23.8l43.7 25.2v5.2l-43.7-25.1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2470 761.8l-46.2 26.6v5.2l46.1-26.6z"/>
      <path fill="#9D9D9C" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2404.6 704.7l-21.8 57 21.8 12.6 21.8 12.6 21.8-57-43.6-25.2"/>
      <path opacity=".3" d="M2442.6 743.6l-.1-8-6.8-4-8.7 8.8.1 8.1 6.8 4 8.7-8.9zm-27.6-15.9c0-2.7 0-5.4-.2-8.1l-6.8-4-8.6 8.9v8l6.9 4 8.6-8.8z" fill="#B2B2B2"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2406.3 719l5-3v7.2l-5 13.3z"/>
        <path fill="#DADADA" d="M2399.5 715l6.8 4v17.5l-6.8-4z"/>
        <path fill="#DADADA" d="M2399.5 715l6.8 4 5-3-6.8-3.9z"/>
      </g>
      <path fill="#B2B2B2" d="M2406.5 718l-2-5-3.6 2 5.4 3.2z"/>
      <g stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path fill="#B2B2B2" d="M2434 735l5-3v7.3l-5 13.1z"/>
        <path fill="#DADADA" d="M2427.1 731l6.8 4v17.4l-6.8-3.8z"/>
        <path fill="#DADADA" d="M2427.1 731l6.8 4 5.1-3-6.8-4z"/>
      </g>
      <path fill="#B2B2B2" d="M2434.1 734l-1.9-5-3.6 2 5.3 3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2445.4 806.3v.9l-9 5.2v-.9l1.7-1.6zm0 27.9v.8l-9 5.2v-.8l1.7-1.8zm17.2-9.9v.8l-9 5.2v-.8l1.6-1.8zm-27.6-13.5v.9l1.3.7v-.9zm.8-15.5v15.1l5.3-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2443.5 790.9l-1.2.6-4.8 7v6.6l4.8.2 1.2.6v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2435.8 809l6.5-3.7v-13.8l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 804.7l-5.5 3.2V802l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 799v5.7l-.3.2h-2.2v-1.6h.3l.4.3V800z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441 799.1v5.4l-5.2 3v-5.3zm.3-.9l-5.5 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 792.1v6l-.3.2h-.6l-1.4-2.5v-1.2l.5.2v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441 792.3v5.7l-5.2 3v-5.7zm3.1 13.3l1.3.7-6 3.5-3 1.7-1.3-.7zm-9.1 33v.9l1.3.7v-.8zm.8-15.5v15.1l5.3-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2443.5 818.6l-1.2.8-4.8 7v6.4l4.8.3 1.2.7v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2435.8 836.9l6.5-3.8v-13.7l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 832.5l-5.5 3.2V830l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 826.8v5.7l-.3.1h-2.2v-1.4h.3l.4.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441 827v5.3l-5.2 3V830zm.3-1l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 820v6l-.3.1h-.6l-1.4-2.6v-1l.5.1V821z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441 820.1v5.7l-5.2 3V823zm3.1 13.3l1.3.8-6 3.3-3 1.9-1.3-.8zm-8.3 32v15l5.3-2.3 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2443.5 860.9l-1.2.7-4.8 7v6.5l4.8.2 1.2.7v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2435.8 879l6.5-3.7v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 874.8l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 869v5.8h-2.5v-1.3h.3l.4.1v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441 869.2v5.4l-5.2 3v-5.4zm.3-.9l-5.5 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441.3 862.2v6l-.3.2h-.6l-1.4-2.6v-1l.5.1v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2441 862.3v5.8l-5.2 3v-5.7zm3.1 13.4l1.3.7-6 3.4-3 1.8-1.3-.8zm8.9-20.2v15l5.2-2.3 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2460.6 851l-1.2.7-4.7 7v6.5l4.7.2 1.2.8v-6.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2453 869.1l6.4-3.7v-13.7l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 864.9l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 859.1v5.8l-.3.1h-2.2v-1.4h.4l.3.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.1 859.3v5.4l-5.2 3v-5.4zm.3-1l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 852.3v6l-.3.2h-.5l-1.5-2.6v-1l.5.1v-1.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.1 852.4v5.8l-5.2 3v-5.7zm3.2 13.4l1.3.6-6 3.5-3 1.8-1.3-.7zm1.3-69.4v.9l-9 5.2v-.9l1.6-1.7zm-10.3 4.6v.8l1.2.7v-.9zm.7-15.6v15.2l5.2-2.5 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2460.6 781l-1.2.6-4.7 7v6.6l4.7.2 1.2.6v-6.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2453 799.1l6.4-3.7v-13.8l-6.5 3.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 794.8l-5.5 3.2v-5.8l5.5 2.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 789v5.8l-.3.2h-2.2v-1.6h.4l.3.2v-3.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.1 789.2v5.4l-5.2 3v-5.3zm.3-.9l-5.5 3.1v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 782.2v6l-.3.3h-.5l-1.5-2.7v-1l.5.1v-1.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.1 782.4v5.7l-5.2 3v-5.7zm3.2 13.3l1.3.7-6 3.5-3 1.7-1.3-.7zm-9 33v.9l1.2.7v-.8zm.7-15.5v15.1l5.2-2.4 2.4-2z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2460.6 808.7l-1.2.8-4.7 7v6.4l4.7.2 1.2.8v-6.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2453 826.9l6.4-3.8v-13.6l-6.5 3.7z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 822.6l-5.5 3.2v-5.7l5.5 2.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 816.9v5.7l-.3.1h-2.2v-1.4h.4l.3.2v-3.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.1 817v5.5l-5.2 3V820zm.3-.9l-5.5 3.2v-6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.4 810v6.1l-.3.1h-.5l-1.5-2.6v-1l.5.2V811z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2458.1 810.3v5.6l-5.2 3v-5.7zm3.2 13.2l1.3.8-6 3.3-3 1.9-1.3-.8z"/>
      <g fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
        <path d="M2385.4 845.7l23.3 13.2 14.5 8.7v23.2l-37.8-21.8z"/>
        <path d="M2386.4 847.2V868l36 20.7v-20.5z"/>
      </g>
      <path opacity=".3" fill="#B2B2B2" d="M2416.5 836l-.3-12.7.5-2.4.6 1.5v14l-.8-.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2405.5 831.5v.7l10.4 6.1v-.9l-3.2-2.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2407.1 830.4l-1.6 1 6.4 3.8 4 2.2 1.7-1z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2417.3 836.4l-1-.7v.7zm.3.8l-1.7 1.1v-.9l1.7-1zm-2.3-14.9v13.5l-4.8-2.2-2.1-1.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2408.4 818.2l1 .7 4.3 6.2v5.9l-3.1.8h-2.2V826z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2413.7 825.1v5.9l-3.1.8h-2.2l1-.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2415.3 834.6l-5.9-3.4v-12.3l5.9 3.4z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2415.3 834.6l-4.7-2.8v-11.4l4.7 2.8z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2410.6 830.8l4.7 2.7v-11.2l-4.2 8.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2410.3 819.4v11.2l.3.2h.5l1.2-8.2v-1l-.4.2v-1.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2410.6 819.6v11l4.7 2.6v-11z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2411 822.2v8.6l4.3 2.4v-8.6z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2407.4 831.3V816l8.9 5.1v15.2l-1-.6v-13.5l-7-4v13.5z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2416.7 836l-.4.4v-15.2l.4-.3z"/>
      <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2408 815.8l-.6.3 8.9 5.1.4-.3z"/>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2398.3 827.4l-.4-12.8.6-2.4.6 1.4v14l-.8-.2z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2387.2 822.6v.8l10.4 6v-.7l-3.2-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2388.9 821.7l-1.7 1 6.5 3.7 4 2.3 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2399 827.5l-1-.6v.6zm.3 1l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.7l-4.8-2.3-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2390 809.5l1.2.6 4.2 6.3v5.8l-3.1.8h-2.3v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2395.4 816.4v5.8l-3.1.8h-2.3l1.2-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397 825.7l-5.8-3.3V810l5.8 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397 825.7l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.3 822l4.7 2.8v-11.4l-4.2 8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392 810.6V822l.3.2h.5l1.3-8.3v-1l-.5.2v-1.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.3 810.7v11l4.7 2.8v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.8 813.3v8.8l4.2 2.4v-8.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2389 822.5v-15.1l9 5v15.1l-1-.4v-13.7l-7-4V823z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2398.5 827.3l-.6.2v-15l.6-.3zm-8.8-20.3l-.6.4 8.8 5 .6-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2416.5 812.5l-.3-12.8.5-2.4.6 1.4v14.1l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2405.5 807.8v.7l10.4 6v-.7l-3.2-2.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2407.1 806.8l-1.6 1 6.4 3.7 4 2.3 1.7-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2417.3 812.7l-1-.7v.7zm.3.9l-1.7 1v-.8l1.7-1zm-2.3-15.1v13.7l-4.8-2.3-2.1-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2413.7 801.5v5.8l-3.1.8h-2.2l1-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2415.3 810.8l-5.9-3.3v-12.3l5.9 3.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2415.3 810.8l-4.7-2.7v-11.3l4.7 2.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2410.6 807l4.7 2.9v-11.4l-4.2 8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2410.3 795.7V807h.8l1.2-8v-1l-.4.2v-1.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2410.6 795.8v11l4.7 2.7v-11z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2411 798.4v8.7l4.3 2.4v-8.7z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2407.4 807.6v-15.1l8.9 5v15.2l-1-.5v-13.7l-7-3.9v13.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2416.7 812.4l-.4.3v-15.1l.4-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2408 792.2l-.6.3 8.9 5 .4-.2z"/>
      </g>
      <g>
        <path opacity=".3" fill="#B2B2B2" d="M2398.3 803.6l-.4-12.7.6-2.4.6 1.4v14l-.8-.3z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2387.2 799v.8l10.4 6v-.8l-3.2-2.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2388.9 798l-1.7 1 6.5 3.8 4 2.2 1.6-1z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2399 804l-1-.8v.7zm.3.9l-1.7 1v-1l1.7-.9zm-2.3-15.1v13.5l-4.8-2.2-2.2-1.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2390 785.8l1.2.6 4.2 6.3v5.8l-3.1.8h-2.3v-5.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2395.4 792.7v5.8l-3.1.8h-2.3l1.2-.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397 802l-5.8-3.3v-12.3l5.8 3.4z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2397 802l-4.7-2.7V788l4.7 2.8z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.3 798.3l4.7 2.7v-11.2l-4.2 8.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392 787v11.2l.3.1h.5l1.3-8.1v-1l-.5.1V788z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.3 787.1v11l4.7 2.6v-10.9z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2392.8 789.7v8.6l4.2 2.4v-8.6z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2389 798.8v-15.1l9 5V804l-1-.6v-13.5l-7-4v13.5z"/>
        <path fill="#DADADA" stroke="#3C3C3B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2398.5 803.5l-.6.4v-15.2l.6-.2zm-8.8-20.1l-.6.3 8.8 5 .6-.2z"/>
      </g>
    </g>
  </g>
  <g>
    <path fill="#878787" d="M341.6 560.4l1.1.7c9.4 6.9 8.3 16.7-2.4 22.1-10 5.1-25 4.4-34.6-1.2-4 1.9-12.3 6.3-13.5 6.8-.7.2-1.8 0-2.7-.6-.6-.5-1.2-1.1-.8-2 1-.6 9.6-4.8 13.6-7-7.5-6.5-5.9-15.5 4.1-20.6a38.5 38.5 0 0 1 35.2 1.8z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M293 588c-.3 1.5-4 2.3-5.5-.4v-22.4l5.6.4s.2 20.4 0 22.4z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M318 542.2a25.7 25.7 0 0 1-27.6 26.2c-15.2-.8-27.5-14-27.5-29.5s12.4-27.2 27.5-26.4a30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M290.7 513.5h-3a39 39 0 0 1 7.8 23.3c0 12-5.7 22.3-14.4 28.5 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.5 28.9 28.9 0 0 0-26.6-28.7z"/>
  </g>
  <g>
    <path fill="#878787" d="M289.5 632.3l1.2.8c9.3 6.8 8.2 16.7-2.4 22a38.9 38.9 0 0 1-34.7-1.2c-4 2-12.3 6.4-13.5 6.8-.7.2-1.8 0-2.6-.5-.7-.5-1.3-1.2-1-2l13.7-7c-7.5-6.6-5.8-15.5 4.2-20.6a38.5 38.5 0 0 1 35.1 1.7z" opacity=".3"/>
    <path fill="#3C3C3B" stroke="#3C3C3B" stroke-miterlimit="10" d="M241 660c-.4 1.4-4 2.3-5.6-.4V637l5.6.4s.2 20.4 0 22.5z"/>
    <path fill="#DADADA" stroke="#3C3C3B" stroke-miterlimit="10" d="M265.9 614.2a25.7 25.7 0 0 1-27.6 26.2 29.7 29.7 0 0 1-27.5-29.6 25.9 25.9 0 0 1 27.5-26.3 30 30 0 0 1 27.6 29.7z"/>
    <path opacity=".3" fill="#B2B2B2" d="M238.6 585.4h-3c5 6.7 7.8 14.7 7.8 23.4 0 12-5.7 22.3-14.4 28.4 3 1.3 6.1 2.2 9.5 2.4a25 25 0 0 0 26.7-25.4 28.9 28.9 0 0 0-26.6-28.8z"/>
  </g>
</svg>';
		//$output .= '<embed class="img-responsive" src=" ' . get_template_directory_uri() . '/img/VNG-Isometric-190118-1MS-CMYK-04.svg" alt="ViertelEnergie Map">';
		//$output .= '<img class="img-responsive" src=" ' . get_template_directory_uri() . '/img/VNG-Isometric-190118-1MS-CMYK-04.svg" alt="ViertelEnergie Map">';
		//$output .= '<object type="image/svg+xml" data=" ' . get_template_directory_uri() . '/img/VNG-Isometric-190118-1MS-CMYK-04.svg"></object>';
		$output .= do_shortcode($content);
		$output .= '<div id="netztoggler"></div>';
		$output .= '</div>';
		return $output;
	}

}

vc_map(array(
	"base" => "map",
	"name" => __("Map"),
	"class" => "",
	"as_parent" => array('only' => 'map_item'),
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textarea_html",
			"holder" => '',
			"class" => "",
			"heading" => __("Description"),
			"param_name" => "test",
			"value" => "",
		),
	),
	"js_view" => 'VcColumnView',
));

class WPBakeryShortCode_map_item extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'item_headline' => false,
			'item_content' => false,
			'item_link' => false,
			'item_x' => false,
			'item_y' => false,
						), $atts));

		$link = vc_build_link($item_link);
		$url = $link['url'];

		$output = '<div class="map-item" style="left:' . $item_x . '%;top:' . $item_y . '%;">';
		$output .= '<div class="map-marker"></div>';
		$output .= '<div class="map-item-content-wrap">';
		$output .= '<div class="map-item-close">';
		$output .= '<div class="icon-font">Q</div>';
		$output .= '</div>';
		$output .= '<h2>' . $item_headline . '</h2>';
		$output .= '<p>' . $item_content . '</p>';
		if (!empty($url)) {
			$output .= '<div class="map-item-more">';
			$output .= '<a href="' . $url . '"">' . $link['title'] . '</a>';
			$output .= '</div>';
		}
		$output .= '</div>';
		$output .= '</div>';
		return $output;
	}

}

vc_map(array(
	"base" => "map_item",
	"name" => __("Map Item"),
	"class" => "",
	"as_child" => array('only' => 'map'),
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => 'h1',
			"class" => "",
			"heading" => __("Headline"),
			"param_name" => "item_headline",
			"value" => "",
		),
		array(
			"type" => "textarea",
			"holder" => 'p',
			"class" => "",
			"heading" => __("Content"),
			"param_name" => "item_content",
			"value" => "",
		),
		array(
			"type" => "vc_link",
			"holder" => '',
			"class" => "",
			"heading" => __("Link"),
			"param_name" => "item_link",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Position X"),
			"description" => __("%"),
			"param_name" => "item_x",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Position Y"),
			"description" => __("%"),
			"param_name" => "item_y",
			"value" => "",
		),
	)
));
