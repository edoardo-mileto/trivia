<html>
<head>
    <title>Trivia Login</title>
    <script>
    	function testLogin(){
    		var http = new XMLHttpRequest();
    		http.onreadystatechange = function() {
    			if(this.readyState == 4 && this.status == 200){
    				alert(this.responseText);
    			}
    		};
    		var un = document.getElementById("username").value;
    		var pw = document.getElementById("password").value;

    		var param = "un=" + un + "&pw=" + pw;

    		http.open('POST','127.0.0.1/poorbook/api/login.php', true);
    		http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    		http.send(param);

    		/*
    		var data = new FormData();
    		data.append("username","pippo");
    		data.append("password","topolino");
    		
    		var data = JSON.stringify(
    			{
    				"username":"pippo",
    				"password":"topolino"
    			}
    			);
    		http.setRequestHeader("Content-type","application/json");
    		http.send(data);
    		alert('Konnichiwa');
    		*/
    	}
    </script>
</head>

<body>
    <header>
        <h1>aAAaaAAjacs!!!1!!11</h1>
    </header>
    <div>
    	<form>
    		<p><label>papere</label>
    			<input type="text" name="username" id="username">
    		</p><p>
    			<label>password</label>
    			<input type="password" name="password" id="password">
    		</p><p>
    			<button onclick="testLogin()">Login</button>
    		</p>
    	</form>
    </div>
</body>
</html>
    