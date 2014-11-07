<?

$page = 'pricing';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Eko</title>
		<? include('partials/head.php'); ?>
		<link href="css/pricing.css" rel="stylesheet" media="screen">
	</head>
	<body>

		<? include('partials/nav.php'); ?>

		<div class="container pricing">
			<table class="table table-borderd table-striped">
				<thead>
					<tr>
				        <th></th>
				        <th class="text-center"><h4>Standard</h4></th>
				        <th class="text-center"><h4>Enterprise</h4></th>
		        	</tr>
				</thead>

				<tbody>
					<tr>
						<td><strong>Unlimited messages, groups, and tasks</strong></td>
						<td class="free-pricing"><span class="glyphicon glyphicon-ok"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Unlimited message history</strong></td>
						<td class="free-pricing"><span class="glyphicon glyphicon-ok"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Unlimited contacts</strong></td>
						<td class="free-pricing"><span class="glyphicon glyphicon-ok"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Unlimited image storage</strong></td>
						<td class="free-pricing"><span class="glyphicon glyphicon-ok"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Cloud syncing across all your devices</strong><br >
						All of your data, including messages, contacts, tasks, and groups will sync to all your devices seamlessly.
						</td>
						<td class="free-pricing"><span class="glyphicon glyphicon-ok"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Dedicated server for company</strong><br >
						Ensure extra security and uptime by having a dedicated server host your Eko network. A packaged option is also available if you wish to host on your own servers.
						</td>
						<td class="free-pricing"><span class="glyphicon glyphicon-remove"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Custom app icon</strong></td>
						<td class="free-pricing"><span class="glyphicon glyphicon-remove"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Custom app name</strong></td>
						<td class="free-pricing"><span class="glyphicon glyphicon-remove"></span></td>
						<td class="company-pricing"><span class="glyphicon glyphicon-ok"></span></td>
					</tr>
					<tr>
						<td><strong>Price</strong></td>
						<td class="free-pricing"><b>Free</b></td>
						<td class="company-pricing"><a href="mailto:sales@ekoapp.com">Contact Us</a></td>
					</tr>
				</tbody>
			</table>
		</div>

		<? include('partials/footer.php'); ?>
		<? include('partials/scripts.php'); ?>
	</body>
</html>
