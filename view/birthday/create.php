
<head>
	<title>Toevoegen</title>
</head>
<body>
	<h1>Toevoegen</h1>
	<form method="post" action="<?= URL ?>birthday/birthdayinsert/">
		<label> naam <input required type="text" name="person"></label>
		<label>dag <input required type="text" name="day"></label>
		<label>maand <input required type="text" name="month"></label>
		<label>jaar <input required type="text" name="year"></label>
		<br>
		<button type="submit">submit</button>
	</form>