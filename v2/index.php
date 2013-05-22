<!DOCTYPE  HTML>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/misc.js"></script>

		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/normalize/2.0.1/normalize.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/fw.css" media="screen" />
	</head>
	<body>

<!--
		<div class="status">
			<div class="flag positive">Positive</div>
			<div class="flag notice">Notice</div>
			<div class="flag warning">Warning</div>
		</div>
-->

		<div id="content" class="container centered">

			<h1>Framework v2</h1>

			<div class="row">
				<div class="split2">
					<div class="desktop span3">Desktop Text</div>
					<div class="mobile span3">Mobile Text</div>

					<div class="span6 menu" id="nav">
						<i class="icon-drop_down ghosted_bg rounded mobile"></i>
						<ul class="horizontal">
							<li>Home</li>
							<li>About</li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="split2">
					<span>
						<input type="text" class="span1" placeholder="Placeholder" />
					</span>
					<span>
						<input type="text" class="span1" placeholder="Placeholder" />
					</span>
				</div>
				<input type="text" class="span1" placeholder="Placeholder" />
				<input type="text" class="span1" placeholder="Placeholder" />
				<input type="text" class="span1" placeholder="Placeholder" />
				<div class="split3">
					<span>
						<input type="text" class="span1" placeholder="Placeholder" />
					</span>

					<span>
						<select class="span1 icon-drop_down">
							<option value="" selected>Dropdown</option>
							<option value="1">Placeholder</option>
							<option value="1">Placeholder</option>
							<option value="1">Placeholder</option>
						</select>
					</span>
					<span>
						<input type="text" class="span1" placeholder="Placeholder" />
					</span>
				</div>
				<input type="text" class="span1" placeholder="Placeholder" />
				<input type="text" class="span1" placeholder="Placeholder" />
				<input type="text" class="span1" placeholder="Placeholder" />
				<input type="text" class="span1" placeholder="Placeholder" />
			</div>

			<div class="row">
					<input type="text" class="span2 offset2" placeholder="Placeholder" />
					<input type="text" class="span2 offset2" placeholder="Placeholder" />
					<input type="text" class="span2 offset2" placeholder="Placeholder" />
			</div>

			<div class="row">
				<input type="text" class="span2 offset2" placeholder="Placeholder" />
				<input type="text" class="span2 offset1" placeholder="Placeholder" />
				<input type="text" class="span2 offset1" placeholder="Placeholder" />
			</div>

			<div class="row">
				<input type="text" class="span3 offset2" placeholder="Placeholder" />

				<select class="span2 icon-drop_down">
					<option value="" selected>Dropdown</option>
					<option value="1">Placeholder</option>
					<option value="1">Placeholder</option>
					<option value="1">Placeholder</option>
				</select>
			</div>

			<div class="row">
				<div class="prepend span2 offset2">
					<button tabindex="-1" class="accent_bg icon-clock"></button>
					<input type="text" class="" placeholder="Placeholder" />
				</div>

				<div class="append span2 offset1">
					<input type="text" class="" placeholder="Placeholder" />
					<button tabindex="-1" class="primary_bg icon-calendar"></button>
				</div>

				<div class="append span2 offset2">
					<input type="text" class="" placeholder="Placeholder"  style="display:block;"/>
					<button tabindex="-1" class="primary_bg icon-clock" style="display:block;"></button>
					<button tabindex="-1" class="primary_bg icon-calendar" style="display:none;"></button>
				</div>
			</div>

			<div class="row">
				<div class="span2 offset2">
					<ul class="no_list_style border hover">
						<li><label><input type="checkbox">Checkbox</label></li>
						<li><label><input type="checkbox">Checkbox</label></li>
						<li><label><input type="checkbox">Checkbox</label></li>
						<li><label><input type="checkbox">Checkbox</label></li>
					</ul>
				</div>

				<div class="span2 offset1">
					<ul class="no_list_style zebra right_align">
						<li><label><input type="radio">Radio Button</label></li>
						<li><label><input type="radio">Radio Button</label></li>
						<li><label><input type="radio">Radio Button</label></li>
						<li><label><input type="radio">Radio Button</label></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<button tabindex="-1" class="primary_bg normal pull_right button cta"><i class="icon-calendar"></i><span>primary_bg</span></button>
				<button tabindex="-1" class="accent_bg normal pull_right button"><span>accent_bg</span><i class="icon-calendar"></i></button>
				<button tabindex="-1" class="ghosted_bg normal pull_right button">Secondary</button>
			</div>
		</div>

	</body>
</html>