<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panel administratora</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./../style/index-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <style>
body{
	height: 90vh;
	color: #aaa;
	background: linear-gradient(-45deg, #e6ffff,#0d0d0d);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite;
}
.container {
	width:100%;
	height:100%;
	padding: 0;
	margin: 0;
}
.btn {
	position:relative;
	background: inherit;
	background-color: #ffffff;
	transition: background-color 1s,color 1s;
	font-family: 'Quicksand', sans-serif;
	text-align:center;
	width:90%;
	padding:2%;
	margin-top:3%;
	margin-left:5%;
}
.btn:last-child{
	position: relative;
	bottom:-35%;
}
.btn:hover {
	background:inherit;
	background-color: #000000;
	color: #ffffff;
}
.form-label {
	border: none !important;
}
@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
.header {
	width:100%;
	height:8%;
	background-color:white;
	position: relative;
	box-sizing: inherit;
	-webkit-box-shadow: 0px 5px 20px -5px rgba(0,0,0,1);
	-moz-box-shadow: 0px 5px 20px -5px rgba(0,0,0,1);
	box-shadow: 0px 5px 20px -5px rgba(0,0,0,1);
	z-index:50;
}
.side-bar{
	min-width:13%;
	max-width:13%;
	background-color:white;
	height:100%;
	position:fixed;
	padding-bottom:0;
	margin-bottom:0;
	z-index:99;
	overflow: hidden;
	-webkit-box-shadow: inset 0px 5px 20px -5px rgba(0,0,0,1);
	-moz-box-shadow: inset 0px 5px 20px -5px rgba(0,0,0,1);
	box-shadow: inset 0px 5px 20px -5px rgba(0,0,0,1);
	
}
.modal-content{
	top:100px;
}

#users{
	left:15%;
	top:10%;
	position:fixed;
	min-width:82%;
	min-height:10%;
	max-width:82%;
	max-height:88%;
	background-color:white;
	overflow-y:scroll;
    border: 1px solid #DDDDDD;
    border-radius: 4px 0 4px 0;
	padding-bottom:0;
	margin-bottom:0;
	}

::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}

</style>
</head>

<body>
<div class="container">

	<div class="header">
		<div class="navbar-header">
                    <a class="navbar-brand" href="./../index.php">
                    </a><a class="navbar-brand" href="./../index.php">
                        <!-- Logo icon -->
                        <span style="">
                            <img src="../assets/header-logo-text.png" alt="homepage" class="dark-logo">
                        </span>                        
                        <b>
                            <img src="../assets/header-logo.png" alt="homepage" class="dark-logo">
                        </b>
                    </a>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                </div>
		<div class="avatar">
		</div>
		
		</div>
	<div class="side-bar">

		<button type="button" class="btn btn-deleteUser" data-toggle="modal" data-target="#modalDeleteUser"> Usuń użytkownika </button>
		<button type="button" class="btn btn-addQuest" data-toggle="modal" data-target="#modalAddQuest"> Dodaj Zadanie </button>
		<button type="button" class="btn btn-changePassword" data-toggle="modal" data-target="#modalChangePassword"> Zmień hasło </button>
		<button type="button" class="btn btn-changeToAdmin" data-toggle="modal" data-target="#modalChangeToAdmin"> Nadaj Admina </button>
		<button type="submit" class="btn btn-showAll" name="showall"> Wyświetl wszystkich </button>
		<button type="button" class="btn btn-changePassword" data-toggle="modal" data-target="#modalShowUsersInGroup" style="font-size:12px;"> Wyświetl użytkowników grupy</button>
		<button type="button" class="btn btn-showGroups" neme="showGroups"> Wyświetl grupy </button>
		<button type="button" class="btn btn-deleteGroup" data-toggle="modal" data-target="#modaldeleteGroup"> Usuń Grupę </button>
		<button type="button" class="btn btn-changePassword" data-toggle="modal" data-target="#modalChangeToAdmin"> xdd </button>
		<button type="button" class="btn btn-logout" id="logout" data-toggle="modal" data-target="#modalChangeToAdmin"> Wyloguj </button>
		</div>

	<div id="users">
		<h2 style="text-align:center"> Witaj w panelu administracyjnym </h2>
		</div>

	<!--modal Usun uzytkownika-->
	<div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
        			<h3 class="modal-title">Usuń użytkownika</h3>
      			</div>
      			<div class="modal-body">
      				<form action="adminhandler.php" method="POST">
  						<div class="form-group">
    						<label class="form-label" for="exampleInputPassword1">Nazwa użytkownika</label>
    						<input name="loginToDoSt" type="text" class="form-control" placeholder="login">
  						</div>
						<div class="modal-footer">
							<input type="submit" name="delete" class="btn btn-primary" value="Usuń uzytkownika"></input>
      						<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
						</div>
					</form>   
      			</div>
    		</div>
  		</div>
	</div>
	<!--modal Dodaj zadanie-->
	<div class="modal fade" id="modalAddQuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Dodawanie zadania</h3>
      			</div>
      			<div class="modal-body">
      			<form action="adminhandler.php" method="POST">
  					<div class="form-group">
    					<label class="form-label" for="exampleInputEmail1">Nazwa użytkownika</label>
    					<input name="login" type="text" class="form-control" id="exampleLogin" aria-describedby="emailHelp" placeholder="Login">
  					</div>
					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Temat</label>
    					<input name="topic" type="text" class="form-control" id="exampleInputPassword1" placeholder="Temat">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Treść zadania</label>
    					<input name="content" type="text" class="form-control" id="exampleInputPassword1" placeholder="Treść...">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Termin zakończenia</label>
    					<input name="expiry_date" type="text" class="form-control" id="exampleInputPassword1" placeholder="Termin">
  					</div>
					<div class="modal-footer">
						<input name="addtask" type="submit" class="btn btn-primary" value='Dodaj zadanie'></input>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				</form>   
      			</div>  
     		</div>
    	</div>
	</div>
	<!--modal Zmień hasło-->
	<div class="modal fade" id="modalChangePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Zmiana hasła</h3>
      			</div>
      			<div class="modal-body">
      			<form action="adminhandler.php" method="POST">
  					<div class="form-group">
    					<label class="form-label" for="exampleInputEmail1">Login</label>
    					<input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Nowe hasło</label>
    					<input name="password1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Podaj nowe hasło">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Powtórz hasło</label>
    					<input name="password2" type="password" class="form-control" id="exampleInputPassword1" placeholder="Powtórz hasło">
  					</div>
					<div class="modal-footer">
						<input type="submit" name='changepw' class="btn btn-primary" value="Zmień hasło"></input>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				</form>   
      			</div>  
     		</div>
    	</div>
	</div>
	<!--modal Nadaj admina-->
	<div class="modal fade" id="modalChangeToAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Nadaj uprawnienia admina</h3>
      			</div>
      			<div class="modal-body">
      			<form action="adminhandler.php" method="POST">
  					<div class="form-group">
    					<label class="form-label" for="exampleInputEmail1">Login</label>
    					<input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
  					</div>
					<div class="modal-footer">
						<input type="submit" name='getAdmin' class="btn btn-primary" value="Wykonaj"></input>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				</form>   
      			</div>  
     		</div>
    	</div>
	</div>
	<!--modal Wyświetl grupy użytkowników-->
	<div class="modal fade" id="modalShowUsersInGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Pokaż użytkowników danej grupy</h3>
      			</div>
      			<div class="modal-body">
      			
  					<div class="form-group">
    					<label class="form-label" for="GroupName">Nazwa Grupy</label>
    					<input name="GroupName" type="text" class="form-control" id="GroupName" aria-describedby="emailHelp" placeholder="">
  					</div>
					<div class="modal-footer">
						<input type="submit" name='getUsersInGroups' class="btn btn-primary-groups" value="Wykonaj"></input>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				  
      			</div>  
     		</div>
    	</div>
	</div>
	<!--modal Usuń grupę-->
	<div class="modal fade" id="modaldeleteGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Usuń grupę</h3>
      			</div>
      			<div class="modal-body">
      			<form action="adminhandler.php" method="POST">
  					<div class="form-group">
    					<label class="form-label" for="GroupName">Nazwa Grupy</label>
    					<input name="GroupName" type="text" class="form-control" id="GroupName" aria-describedby="emailHelp" placeholder="">
  					</div>
					<div class="modal-footer">
						<input type="submit" name="deleteGroup" class="btn btn-primary-groups" value="Wykonaj"></input>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				 </form> 
      			</div>  
     		</div>
    	</div>
	</div>
</div>

</body>
</html>
