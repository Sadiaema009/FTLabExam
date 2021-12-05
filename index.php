<!DOCTYPE html>
<html>
<head>
	<script>
		function search()
	{
			var search_word=document.getElementById("search_input1").value;
			var search_word1=document.getElementById("search_input2").value;
			var search_word2=document.getElementById("search_input3").value;
			var search_word3=document.getElementById("search_input4").value;
			
			
			if(search_word!="")
			{
				http = new XMLHttpRequest();

			
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("search_result").innerHTML=http.responseText;
				}
			}
			http.open("GET","search.php?key="+search_word,true);
			http.send();

			}

			else if(search_word1!="")
			{
				http = new XMLHttpRequest();
			
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("search_result").innerHTML=http.responseText;
				}
			}
			http.open("GET","search1.php?key="+search_word1,true);
			http.send();

			}


			else if(search_word2!="")
			{
				
				http = new XMLHttpRequest();
			
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("search_result").innerHTML=http.responseText;
				}
			}
			http.open("GET","search2.php?key="+search_word2,true);
			http.send();

			}

			else if(search_word3!="")
			{
				http = new XMLHttpRequest();
			
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("search_result").innerHTML=http.responseText;
				}
			}
			http.open("GET","search3.php?key="+search_word3,true);
			http.send();

			}

			

			
			
				
			

			
			
		}
	</script>
</head>
<body>

	<h1> Search Employee </h1>
	<div id="output">
		
	</div>
	Search by ID:<br>
	<input type="text" id="search_input1"  ><br><br>

	Search by Name:<br>
	<input type="text" id="search_input2"  ><br><br>

	Search by Salary:<br>
	Maximum:
	<input type="text" id="search_input3"  ><br>

	Minimum
	<input type="text" id="search_input4"  ><br><br>

	
	<input type="button" name="name" onclick="search()" value="submit"></button>

	<div id="search_result">
		
	</div>
	
</body>
</html>