!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./login.css">
    <title>login</title>
</head>
<body>
    
	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form">
					<span class="login-form-title">
						Faça o login
					</span>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="email" autocomplete="off">
						<span class="focus-input-form" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input margin-bottom-35">
						<input class="input-form" type="password" name="password">
						<span class="focus-input-form" data-placeholder="Senha"></span>
					</div>

					<div class="container-login-form-btn">
						<button  class="login-form-btn" >
							Login
						</button>
						
					</div>

					<ul class="login-utils">
                    <li>
							<span class="text1">
								Não tem conta?
							</span>

							<a href="./cadastro_aluno.html " class="text2">

								Criar
								
							</a>
						</li>
						

						
					</ul>
				</form>
			</div>
			
		</div>
	</div>
	
	<script>
		let inputs = document.getElementsByClassName('input-form');
		for (let input of inputs) {
			input.addEventListener("blur", function() {
				if(input.value.trim() != ""){
					input.classList.add("has-val");
				} else {
					input.classList.remove("has-val");
				}
			});
		}
		
	</script>
	

    

</body>
</html>