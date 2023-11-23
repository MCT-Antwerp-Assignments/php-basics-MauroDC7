<?php
    $folders = glob('*', GLOB_ONLYDIR);
    $folders = array_filter($folders, function($folder) {
        return $folder !== '_assets';
    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
	<style>
		body{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;color:#333;background:#FFF;margin-top:40px;margin-left:40px}footer{background-color:#f2f2f2;padding:10px 20px 10px 20px;color:#666;position:absolute;bottom:20px;margin-right:40px;margin-bottom:20px}.container{max-width:600px;margin:0 auto}a{text-decoration:none;color:#15E}a:visited{color:#15E}a:hover{color:#038}table{width:100%;border-collapse:collapse}tr:first-child{display:none}td:nth-child(1){width:24px;vertical-align:middle}td:nth-child(1) a{display:block}td:nth-child(2){width:100%}td:nth-child(2) a{display:block;padding:8px 10px;border-radius:4px;position:relative}td:nth-child(2) a[href^="/"][href$="/"]:after{border-width:0 0 3px 3px;border-color:#AAA;right:11px}td:nth-child(2) a:hover{background:#CDF}td:nth-child(3){color:#888;font-size:0.9rem}
	</style>
</head>
<body>
    <h1>PHP Basics</h1>
	<table>
		<tr>
			<th valign="top">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" alt="[ICO]" width="24" height="24"></svg>
			</th>
			<th>Name</th>
		</tr>
		<?php foreach($folders as $folder): ?>
		<tr>
			<td valign="top">
				<a href="<?= $folder; ?>">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" alt="[DIR]" width="24" height="24"><title>folder</title><path d="M47.4,13.2A3,3,0,0,0,45,12H18V10.5A4.5,4.5,0,0,0,13.5,6h-9A4.5,4.5,0,0,0,0,10.5V36.8A5.3,5.3,0,0,0,5.3,42H36.7a6,6,0,0,0,5.8-4.5l5.4-21.7A3,3,0,0,0,47.4,13.2ZM36.7,36H9.8l4.5-18H41.2Z" fill="#08f" /></svg>
				</a>
			</td>
			<td>
				<a href="<?= $folder; ?>">Oefening <?= $folder; ?></a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
