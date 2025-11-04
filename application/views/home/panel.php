<style>
	body,
	html {
		overflow-x: hidden
	}

	.chart-table,
	.panel-heading h5,
	.top-header {
		text-align: center
	}

	body,
	thead tr {
		color: #000;
		font-style: normal !important;
		font-family: sans-serif
	}

	body,
	tbody td,
	thead tr {
		font-family: sans-serif
	}

	.panel-heading h5,
	th {
		text-transform: uppercase
	}

	body,
	td {
		background: #fc9
	}

	body {
		padding-top: 0 !important;
		padding: 0;
		margin: 0
	}

	.panel,
	th {
		font-style: italic
	}

	.container-fluid,
	.row {
		padding: 0;
		margin: 0
	}

	.panel-chart p {
		color: #000;
		text-shadow: 2px 1px gold
	}

	.panel-info {
		border: 2px solid #2196f3
	}

	.panel-info .panel-heading {
		background: #2196f3;
		color: #fff
	}

	.col-md-12,
	.col-sm-12,
	.col-xs-12 {
		/*padding-right: 0;
		padding-left: 0;*/
	}

	.chart-,
	.chart-00,
	.chart-05,
	.chart-11,
	.chart-16,
	.chart-22,
	.chart-27,
	.chart-33,
	.chart-38,
	.chart-44,
	.chart-49,
	.chart-50,
	.chart-55,
	.chart-61,
	.chart-66,
	.chart-72,
	.chart-77,
	.chart-83,
	.chart-88,
	.chart-94,
	.chart-99,
	.chart-\*\* {
		color: red !important
	}

	.dotted-border {
		border: 1px dotted #000;
		width: 100px;
		padding: 0 5px;
		margin-top: 2px
	}

	.bg-color {
		background: #ff0
	}

	.logo {
		padding-top: 0;
		color: #fff !important;
		border-radius: 38px
	}

	.button2,
	.button2:hover {
		color: #220c82 !important
	}

	@media (max-width:767px) {
		.logo {
			width: 100%
		}
	}

	.panel {
		margin-bottom: 20px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		background-color: #fff0
	}

	.button2,
	.panel-heading h5 {
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important
	}

	@media (max-width:480px) {
		.chart-bold {
			font-size: 18px !important
		}

		.panel-chart h3 {
			font-size: 8px;
			padding: 0;
			margin: 0
		}

		.panel-chart h2,
		p {
			font-size: 10px;
			font-weight: 700;
			padding: 0;
			margin: 0
		}

		table th {
			font-size: 11px;
			font-weight: 700
		}
	}

	.button2,
	.panel-chart.chart-table p:not(.chart-bold) {
		font-size: 16px !important;
		font-style: italic !important
	}

	table,
	td,
	th {
		border: 1px solid #03a9f4a8 !important
	}

	.panel-chart.chart-table p {
		text-shadow: none
	}

	tbody tr td:nth-child(11),
	tbody tr td:nth-child(14),
	tbody tr td:nth-child(17),
	tbody tr td:nth-child(2),
	tbody tr td:nth-child(20),
	tbody tr td:nth-child(23),
	tbody tr td:nth-child(5),
	tbody tr td:nth-child(8) {
		border-right: 0 solid red !important
	}

	tbody tr td:nth-child(12),
	tbody tr td:nth-child(15),
	tbody tr td:nth-child(18),
	tbody tr td:nth-child(21),
	tbody tr td:nth-child(24),
	tbody tr td:nth-child(27),
	tbody tr td:nth-child(3),
	tbody tr td:nth-child(6),
	tbody tr td:nth-child(9) {
		border-left: 0 solid red !important;
		border-right: 0 solid red !important
	}

	tbody tr td:nth-child(10),
	tbody tr td:nth-child(13),
	tbody tr td:nth-child(16),
	tbody tr td:nth-child(19),
	tbody tr td:nth-child(22),
	tbody tr td:nth-child(25),
	tbody tr td:nth-child(28),
	tbody tr td:nth-child(4),
	tbody tr td:nth-child(7) {
		border-left: 0 solid red !important
	}

	.container-fluid {
		justify-content: center;
		display: flex;
		width: 100%;
		margin-right: auto !important;
		margin-left: auto !important
	}

	.B1 {
		border: 3px solid #ff006c !important;
		border-radius: 10px 0 0 !important;
		margin: 1px auto;
		padding: 3px 2px !important
	}

	.button2 {
		background-color: #a0d5ff !important;
		padding: 10px 30px !important;
		margin: 20px auto !important;
		border-radius: 10px !important;
		border: 2px solid #0000005c !important;
		font-weight: 800 !important;
		text-shadow: 1px 1px #00bcd4 !important;
		box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .2), 0 6px 8px 0 rgba(0, 0, 0, .19) !important;
		display: inline-block !important;
		transition: .3s !important
	}

	.panel,
	th {
		font-weight: 700
	}

	.button2:hover {
		box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .5), 0 6px 8px 0 rgba(0, 0, 0, .3) !important;
		text-shadow: 0 0 0 #000 !important;
		text-decoration: none !important
	}

	.col-lg-6.col-lg-offset-3,
	.col-lg-8.col-lg-offset-2 {
		width: 60% !important;
		margin-left: auto;
		margin-right: auto;
		padding-left: 0 !important;
		padding-right: 0 !important
	}

	.chart-table {
		width: 100%
	}

	.panel {
		border: 1px solid #3f51b5
	}

	.panel-heading h5 {
		background-color: #03a9f4;
		padding: 12px 10px;
		font-size: 25px !important;
		color: #fff !important;
		text-shadow: 1px 1px 3px #232323 !important;
		font-weight: 700;
		letter-spacing: 1px;
		margin: 0;
		font-style: italic !important
	}

	thead tr {
		background-color: #ffc107 !important;
		text-shadow: 1px 1px 2px #9a7400ab
	}

	.panel-body,
	.panel-info>.panel-heading {
		padding: 0
	}

	tbody td {
		text-shadow: 1px 1px 2px #ff7d54c7;
		font-style: normal
	}

	.chart-bold,
	td p {
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important
	}

	.panel-chart.chart-table td {
		padding: 5px 2px
	}

	.panel-chart.chart-table td h2 {
		font-weight: 400 !important;
		margin-top: 6px;
		margin-bottom: 5px;
		font-size: 32px
	}

	td p {
		text-shadow: 1px 1px 2px #ff7d54c7 !important;
		font-weight: 400 !important
	}

	.panel-chart.chart-table p:not(.chart-bold) {
		margin-bottom: 0;
		font-weight: 700 !important;
		text-shadow: none !important
	}

	.chart-bold {
		text-shadow: none !important;
		font-size: 28px !important;
		font-style: italic !important;
		font-weight: 700 !important
	}

	div[align*=center]>div {
		background-color: #fff !important;
		color: red !important;
		font-weight: 700 !important;
		font-size: 25px !important;
		text-decoration: none !important;
		border: 4px groove purple !important;
		border-radius: 10px 0 0 !important;
		text-shadow: 1px 1px gold !important;
		text-align: center !important
	}

	div[align*=center]>div hr {
		border-top: 2px solid #b2ddff;
		margin: 6px 0 10px
	}

	div[align*=center]>div b font a {
		font-size: 35px;
		text-transform: uppercase;
		font-weight: 600
	}

	div[align*=center]>div a {
		color: #007bff !important
	}

	div[align*=center]>div b>span {
		color: red !important;
		font-size: 25px;
		font-weight: 600
	}

	.panel-chart.chart-table tbody tr td:first-child {
		font-size: 14px
	}

	th {
		font-size: 18px !important;
		padding: 5px 0 !important;
		text-shadow: 0 0 0 #9a7400ab !important
	}

	@media (max-width:970px) and (min-width:870px) {
		.chart-bold {
			font-size: 25px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 15px !important
		}
	}

	@media (max-width:870px) and (min-width:840px) {
		.chart-bold {
			font-size: 24px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 14px !important
		}
	}

	@media (max-width:840px) and (min-width:800px) {
		.chart-bold {
			font-size: 23px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 13px !important
		}
	}

	@media (max-width:800px) and (min-width:768px) {
		.chart-bold {
			font-size: 22px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 12px !important
		}
	}

	@media (max-width:768px) {

		.col-lg-6.col-lg-offset-3,
		.col-lg-8.col-lg-offset-2 {
			width: 75% !important
		}

		.container-fluid {
			display: block;
			width: 100%
		}
	}

	@media (max-width:768px) and (min-width:720px) {
		.chart-bold {
			font-size: 22px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 12px !important
		}
	}

	@media (max-width:720px) and (min-width:680px) {
		.chart-bold {
			font-size: 21px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 12px !important
		}
	}

	@media (max-width:680px) and (min-width:640px) {
		.chart-bold {
			font-size: 21px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 11px !important
		}
	}

	@media (max-width:640px) and (min-width:600px) {
		.chart-bold {
			font-size: 20px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 11px !important
		}
	}

	@media (max-width:600px) and (min-width:550px) {
		.chart-bold {
			font-size: 17px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 11px !important
		}
	}

	@media (max-width:550px) and (min-width:500px) {
		.chart-bold {
			font-size: 15px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 10px !important
		}
	}

	@media (max-width:600px) and (min-width:550px) {
		.chart-bold {
			font-size: 15px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 11px !important
		}
	}

	@media (max-width:500px) {

		table th,
		th {
			font-size: 11px
		}

		.panel-chart.chart-table tbody tr td:first-child,
		tbody tr td:nth-child(10),
		tbody tr td:nth-child(11),
		tbody tr td:nth-child(13),
		tbody tr td:nth-child(14),
		tbody tr td:nth-child(16),
		tbody tr td:nth-child(17),
		tbody tr td:nth-child(19),
		tbody tr td:nth-child(2),
		tbody tr td:nth-child(20),
		tbody tr td:nth-child(22),
		tbody tr td:nth-child(23),
		tbody tr td:nth-child(25),
		tbody tr td:nth-child(28),
		tbody tr td:nth-child(4),
		tbody tr td:nth-child(5),
		tbody tr td:nth-child(7),
		tbody tr td:nth-child(8) {
			font-size: 10px
		}

		.panel-chart.chart-table td {
			padding: 3px 2px !important
		}

		.B1 {
			margin-left: 5px;
			margin-right: 5px
		}

		.container-fluid {
			padding-left: 0;
			padding-right: 0
		}

		h2 {
			font-size: 26px
		}

		table th {
			font-weight: 700
		}

		div[align*=center]>div a {
			font-size: 16px;
			margin-top: 10px
		}

		div[align*=center]>div b font a {
			font-size: 25px
		}

		div[align*=center]>div b>span {
			font-size: 14px
		}

		div[align*=center]>div b>span br {
			display: block;
			margin-bottom: -20px;
			content: ""
		}

		.col-lg-6.col-lg-offset-3,
		.col-lg-8.col-lg-offset-2 {
			width: 100% !important
		}

		.panel-chart.chart-table td h2 {
			font-weight: 400 !important;
			margin-top: -3px;
			margin-bottom: -3px;
			font-size: 28px
		}

		.panel {
			margin: 0 1px
		}

		.chart-bold {
			font-size: 13px !important
		}

		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 10px !important
		}
	}

	@media (max-width:320px) {
		.panel-chart.chart-table p:not(.chart-bold) {
			font-size: 7px !important
		}

		th {
			font-size: 13px !important
		}
	}

	* {
		transition: .3s
	}
</style>

<style type="text/css">
	.logo,
	.mrque-div,
	.satta-text,
	.cm-patti,
	.matka-result,
	.conta,
	.slash-text,
	.satta-result,
	.paid-gm,
	.blue-div,
	.red-list>div,
	.purpel-header,
	.faq,
	.disclamer,
	.about-us,
	.ftr-sm,
	.pby-us {
		border: 2px solid #eb008b;
		border-radius: 10px 0 10px 10px;
		margin-bottom: 2px;
		overflow: hidden
	}

	.logo img {
		width: 220px;
		height: auto;
		padding: 6px 0 0
	}

	.logo img {
		width: 200px
	}
</style>

<div class="container-fluid">
	<div class="col-lg-6 col-lg-offset-3">
		<?php
		if ($meta) {
			if (!empty($meta->page_title)) {
				echo '<h1 class="mb-3">' . $meta->page_title . '</h1>';
			}
			if (!empty($meta->sub_heading)) {
				echo '<p class="mb-3">' . $meta->sub_heading . '</p>';
			}
		}
		?>
	</div>
</div>


<center>
	<button onclick="$('html, body').animate({scrollTop: $('#bottom-div').offset().top}, 200);" class="button2">
		Go to Bottom
	</button>
	<a href="<?php echo base_url() ?>" class="button2">
		Home
	</a>
</center>

<div class="container-fluid">
	<div class="col-lg-6 col-lg-offset-3" style="padding-right: 0px; padding-left: 0px;">
		<div class="panel panel-info">
			<div class="panel-heading text-center" style="background: #3f51b5 !important;">
				<h5 style="font-size: 22px;color:#fff; text-shadow: 0px 0px;"><?php echo str_ireplace('%20', ' ', $bazar); ?> Panel Chart </h5>
			</div>
			<div class="panel-body">
				<table style="width: 100%; text-align:center;" class="panel-chart chart-table" cellpadding="2">
					<thead>
						<tr style="background: #e1e1e1;">
							<th class="text-center">Date</th>
							<?php
							$bazarname = $id;
							$date1 = date('y-m-d H:i:s');
							$date2 = $date1;
							$curdate = $date1;

							$date1 = strtotime($date1);
							$date1 = date('w', $date1);
							if ($date1 == 0) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+1 day', $date1);
								$date1 = date('y-m-d', $date1);
							} else if ($date1 == 1) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+0 day', $date1);

								$date1 = date('y-m-d', $date1);
							} else if ($date1 == 2) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+6 day', $date1);

								$date1 = date('y-m-d', $date1);
							} else if ($date1 == 3) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+5 day', $date1);

								$date1 = date('y-m-d', $date1);
							} else if ($date1 == 4) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+4 day', $date1);
								$date1 = date('y-m-d', $date1);
							} else if ($date1 == 5) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+3 day', $date1);

								$date1 = date('y-m-d', $date1);
							} else if ($date1 == 6) {
								$date1 = strtotime($date2);
								$date1 = strtotime('+2 day', $date1);
								$date1 = date('y-m-d', $date1);
							}
							$j = 0;
							$date2 = $date1;
							$date1 = strtotime($date1);
							$date1 = date('w', $date1);
							while ($j < 7) {
								if ($date1 == 0)
									$value = "SUN";
								else if ($date1 == 1)
									$value = "MON";
								else if ($date1 == 2)
									$value = "TUE";
								else if ($date1 == 3)
									$value = "WED";
								else if ($date1 == 4)
									$value = "THU";
								else if ($date1 == 5)
									$value = "FRI";
								else if ($date1 == 6)
									$value = "SAT";
							?>
								<th colspan="3" class="text-center"><?PHP echo $value;  ?></th>
							<?php
								$j++;
								$date1 = strtotime($date2);
								$date1 = strtotime('+1 day', $date1);
								$date2 = date('y-m-d', $date1);
								$date1 = date('w', $date1);
							}
							?>
						</tr>
					</thead>
					<tbody>
						<?php
						$reqdata = resultdata1($bazarname);
						$number = $reqdata->num_rows();
						if ($number > 0) {
							foreach ($reqdata->result() as $row1) {
								$num1 = $row1->result_date;
							}

							$num1 = date("y-m-d", strtotime("2021-01-01"));
							$limit = $num1;
							$limit = strtotime($limit);
							$limit = strtotime('-1 day', $limit);
							$limit = date('y-m-d', $limit);

							$num2 = date('y-m-d H:i:s');
							$num3 = $num2;
							$num2 = strtotime($num2);
							$num2 = date('w', $num2);
							if ($num2 == 0) {
								$num2 = strtotime($num3);
								$num2 = strtotime('-6 day', $num2);
								$num2 = date('y-m-d', $num2);
							} else if ($num2 == 1) {
								$num2 = strtotime($num3);
								$num2 = strtotime('+0 day', $num2);
								$num2 = date('y-m-d', $num2);
							} else if ($num2 == 2) {
								$num2 = strtotime($num3);
								$num2 = strtotime('-1 day', $num2);
								$num2 = date('y-m-d', $num2);
							} else if ($num2 == 3) {
								$num2 = strtotime($num3);
								$num2 = strtotime('-2 day', $num2);
								$num2 = date('y-m-d', $num2);
							} else if ($num2 == 4) {
								$num2 = strtotime($num3);
								$num2 = strtotime('-3 day', $num2);
								$num2 = date('y-m-d', $num2);
							} else if ($num2 == 5) {
								$num2 = strtotime($num3);
								$num2 = strtotime('-4 day', $num2);
								$num2 = date('y-m-d', $num2);
							} else if ($num2 == 6) {
								$num2 = strtotime($num3);
								$num2 = strtotime('-5 day', $num2);
								$num2 = date('y-m-d', $num2);
							}
							$num3 = strtotime($num2);
							$num3 = strtotime('+6 day', $num3);
							$num3 = date('y-m-d', $num3);
							$j = 0;
							while ($num1 <= $num2 || $num2 == $limit) {
								$i = 0;
								$addeddays = 7;
						?>
								<tr>
									<td>
										<p align="center"><?php echo date("d-m-Y", strtotime($num2)); ?><br>to<br><?php echo  date("d-m-Y", strtotime($num3)); ?></p>
									</td>
									<?php
									$date = $num2;
									$date1 = strtotime($num2);
									$date1 = date('w', $date1);
									while ($i < 7) {
										$open_keys = array_column($open_result, 'result_date');
										$open_search = array_search(date("Y-m-d", strtotime($date)), $open_keys);
										$close_keys = array_column($close_result, 'result_date');
										$close_search = array_search(date("Y-m-d", strtotime($date)), $close_keys);
										if (!empty($open_search) && !empty($close_search)) {
											$reqdata2 = $open_result[$open_search]['result_pana'] . '-' . $open_result[$open_search]['result_AAkda'] . $close_result[$close_search]['result_AAkda'] . '-' . $close_result[$close_search]['result_pana'];
										} else if (!empty($open_search) && empty($close_search)) {
											$reqdata2 = $open_result[$open_search]['result_pana'] . '-' . $open_result[$open_search]['result_AAkda'] . '' . '-' . '';
										} else if (empty($open_search) && !empty($close_search)) {
											$reqdata2 = '' . '-' . '' . $close_result[$close_search]['result_AAkda'] . '-' . $close_result[$close_search]['result_pana'];
										} else {
											$reqdata2 = '';
										}
										$val2 = $reqdata2;
										$val2 = str_split($val2);
									?>
										<td style="border-right:0">
											<p class="chart-69">
												<?php if (!array_key_exists('0', $val2) or $val2[0] == '') echo '*';
												else echo $val2[0]; ?>
												<br>
												<?php if (!array_key_exists('1', $val2) or $val2[1] == '') echo '*';
												else echo $val2[1]; ?>
												<br><?php if (!array_key_exists('2', $val2) or $val2[2] == '') echo '*';
													else echo $val2[2]; ?>
											</p>
										</td>
										<td style="border-left:0; border-right:0;">
											<p class="chart-bold chart-69">
												<br>
												<?php if (!array_key_exists('4', $val2) or $val2[4] == '') echo '*';
												else echo $val2[4];
												if (!array_key_exists('5', $val2) or $val2[5] == '') echo '*';
												else echo $val2[5]; ?>
											</p>
										</td>
										<td style="border-left:0">
											<p class="chart-69">
												<?php if (!array_key_exists('7', $val2) or $val2[7] == '') echo '*';
												else echo $val2[7]; ?>
												<br>
												<?php if (!array_key_exists('8', $val2) or $val2[8] == '') echo '*';
												else echo $val2[8]; ?>
												<br><?php if (!array_key_exists('9', $val2) or $val2[9] == '') echo '*';
													else echo $val2[9]; ?>
											</p>
										</td>
									<?php
										$i++;
										$date = strtotime($date);
										$date = strtotime("+1 day", $date);
										$date = date('y-m-d', $date);
									}
									?>
							<?php
								$j++;
								$num3 = strtotime($num2);
								$num3 = strtotime("-1 day", $num3);
								$num3 = date('y-m-d', $num3);
								if ($j > 1) {
									$num2 = strtotime($num3);
									$num2 = strtotime("-6 day", $num2);
									$num2 = date('y-m-d', $num2);
								} else {
									$num2 = strtotime($num3);
									$num2 = strtotime("-6 day", $num2);
									$num2 = date('y-m-d', $num2);
								}
							}
						}
							?>
								</tr>
					</tbody>
				</table>
			</div>
		</div>
		<center>
			<div id="bottom-div">
				<button class="button2" onclick="window.scrollTo(0, 0)">
					Go to Top
				</button>
			</div>
		</center>

		<?php
		if ($meta) {
			if (!empty($meta->page_html)) {
				echo '<div style="margin-top:4rem;margin-bottom:5rem;">' . $meta->page_html . '</div>';
			}
		}
		?>

	</div>
</div>