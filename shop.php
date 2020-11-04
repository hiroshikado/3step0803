<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>ショッピングカートに削除機能を追加しよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>商品一覧</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<table class="table">
			<thead>
				<tr>
					<th>商品名</th>
					<th>商品画像</th>
					<th>説明</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tシャツ</td>
					<td><img src="../images/t.png" alt="Tシャツ" /></td>
					<td>
						3,000円
						<form action="cart.php" method="post">
							<input type="hidden" value="0" name="id" />
							<input class="btn" type="submit" value="カートに追加"  />
						</form>
					</td>
				</tr>
				<tr>
					<td>靴下</td>
					<td><img src="../images/s.png" alt="靴下" /></td>
					<td>
						500円
						<form action="cart.php" method="post">
							<input type="hidden" value="1" name="id" />
							<input class="btn" type="submit" value="カートに追加"  />
						</form>
					</td>
				</tr>
				<tr>
					<td>帽子</td>
					<td><img src="../images/c.png" alt="帽子" /></td>
					<td>
						1,500円
						<form action="cart.php" method="post">
							<input type="hidden" value="2" name="id" />
							<input class="btn" type="submit" value="カートに追加"  />
						</form>
					</td>
				</tr>
			</tbody>
		</table>
		<a class="btn" href="cart.php">カートの確認</a>
	</div>
</body>
</html>
