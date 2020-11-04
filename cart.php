<?php session_start(); ?>
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
			<h1>カート一覧</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php
		// 商品情報
		$names = [ "Tシャツ", "靴下", "帽子" ];
		$prices = [ 3000, 500, 1500 ];

		if ( isset( $_SESSION["cart"] ) == true && isset( $_POST["id"] ) == true ) {
			$_SESSION["cart"][] = $_POST["id"];
		} elseif ( isset( $_POST["id"] ) == true ) {
			$_SESSION["cart"] = [ $_POST["id"] ];
		}
		// ここに追加
		
		// 合計金額
		$sum = 0;
		?>
		<h2>カートの一覧</h2>
		<?php if ( isset( $_SESSION["cart"] ) == true && empty( $_SESSION["cart"] ) == false ) { ?>
		<table class="table">
			<thead>
				<tr>
					<th>商品名</th>
					<th>値段</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ( $_SESSION["cart"] as $index => $id ) { 
				?>
					<tr>
						<td><?php echo $names[ $id ] ?></td>
						<td><?php echo $prices[ $id ] ?>円</td>
						<!-- ここから -->
						<!-- ここまで -->
					</tr>
				<?php
					$sum = $sum + $prices[ $id ];
				} 
				?>
			</tbody>
		</table>
		<h2>合計金額：<?php echo $sum; ?>円</h2>
		<?php } else { ?>
		カートに商品がありません。
		<?php } ?>
		<a href="shop.php" class="btn">商品一覧に戻る</a>
	</div>
</body>
</html>
