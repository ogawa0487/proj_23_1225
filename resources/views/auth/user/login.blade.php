<!doctype html>

<html>
<body>
	<form action="{{ route('login') }}" method="post">
    @csrf
		<div>
			<label>Eメール</label>
			<input type="email" name="email">
		</div>
    <div>
			<label>パスワード</label>
			<input type="password" name="password">
		</div>

		<input type="submit" value="送信">
	</form>
</body>
</html>
