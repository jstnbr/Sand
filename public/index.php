<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SAND</title>
</head>

<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	html { font-size: 18px; }

	body {
		padding: 0 2rem;
		font-family: -apple-system, BlinkMacSystemFont, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		line-height: 1.5;
		color: #111;
	}

	a {
		color: #111;
		text-decoration: none;
	}

	.logo { padding: 3rem 0; }

	.logo h1 {
		font-size: 3rem;
		font-weight: 200;
		letter-spacing: .33334em;
	}

	.logo h2 {
		font-size: 1rem;
		font-weight: normal;
	}

	.heading { margin: 1.5rem 0 1rem; }

	.table {
		width: 100%;
		border-collapse: collapse;
		font-size: .875rem;
	}

	.table td {
		padding: .5rem;
		width: 50%;
	}

	.table tbody tr { border-top: 1px solid #e9e9e9; }

	.table tbody tr:nth-child(odd) { background: #f9f9f9; }

	.footer {
		padding: 4rem 0;
		list-style: none;
	}

	.footer li { margin: .5rem 0; }
</style>

<body>
	<div class="logo">
		<h1>SAND</h1>
		<h2>Portable Vagrant LEMP stack</h2>
	</div>
	<div class="heading">
		<strong>System Information</strong>
	</div>
	<table class="table">
		<tr>
			<td>OS</td>
			<td>Debian 8.6</td>
		</tr>
		<tr>
			<td>PHP version</td>
			<td><?php echo phpversion(); ?></td>
		</tr>
		<tr>
			<td>Vim</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
		<tr>
			<td>Git</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
		<tr>
			<td>Curl</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
		<tr>
			<td>MySQL</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
		<tr>
			<td>Nginx</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
		<tr>
			<td>Composer</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
		<tr>
			<td>Mcrypt</td>
			<td style="color:#00b340;">&#x2714;</td>
		</tr>
	</table>
	<div class="heading">
		<strong>Database</strong>
	</div>
	<table class="table">
		<?php
			$mysqli = @new mysqli('localhost', 'root', 'root', 'sand');
			if (extension_loaded('mysql') or extension_loaded('mysqli')) {
				$mysql_exists = true;
			}
			if (!mysqli_connect_errno()) {
				$mysql_running = true;
				$mysql_version = $mysqli->server_info;
			}
			$mysqli->close();
		?>
		<tr>
			<td>MySQL Installed</td>
			<td><?php echo ($mysql_exists ? '<span style="color:#00b340;">&#x2714;</span>' : '&#x2718;'); ?></td>
		</tr>
		<tr>
			<td>MySQL Connected</td>
			<td><?php echo ($mysql_running ? '<span style="color:#00b340;">&#x2714;</span>' : '&#x2718;'); ?></td>
		</tr>
		<tr>
			<td>MySQL Version</td>
			<td><?php echo ($mysql_running ? $mysql_version : 'N/A'); ?></td>
		</tr>
		<tr>
			<td>Host</td>
			<td>localhost</td>
		</tr>
		<tr>
			<td>User</td>
			<td>root</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>root</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>sand</td>
		</tr>
	</table>
	<div class="heading">
		<strong>SSH</strong>
	</div>
	<table class="table">
		<tr>
			<td>Host</td>
			<td>localhost</td>
		</tr>
		<tr>
			<td>User</td>
			<td>vagrant</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>vagrant</td>
		</tr>
	</table>
	<ul class="footer">
		<li>
			<strong><a href="http://github.com/jstnbr/sand">GitHub</a></strong>
		</li>
		<li>
			Made by <strong><a href="http://jstnbr.co">jstnbr.co</a></strong>
		</li>
	</ul>
</body>
</html>