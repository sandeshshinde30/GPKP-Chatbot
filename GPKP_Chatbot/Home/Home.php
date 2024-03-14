<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Whatsapp UI</title>
	<link rel="stylesheet" href="Home.css">
</head>
<body>
	<div class="container">
		<div class="chat">
			<div class="chat-header">
				<div class="profile">
					<div class="left">
						<h2>GPKP Chatbot</h2>
						<span>online</span>
					</div>
					
				</div>
			</div>

			<!-- Main Chat -->


			<div class="chat-box">

			   <div class="chat-l">
					<div class="mess">
						<p>
                            Welcome , How can i help you.. <img src="../img/emoji-2.png" class="emoji">
						</p>
					</div>
					<div class="sp"></div>
				</div>	


				<div class="chat-r">
					<div class="sp"></div>
					<div class="mess mess-r">
						<p>
                            <?php 
							  if(!empty($_POST['user_input']))
							  {
							  $msg = $_POST['user_input'];

							  echo $msg;
							  }
							?>
						</p>
					</div>
				</div>
				<div class="chat-l">
					<div class="mess">
						<p>
                            <?php
								$flag = 0;

							  if(!empty($_POST['user_input']))
							  {
							  
								$conn = mysqli_connect("localhost","root","","gpkpbot");

								if(!$conn)
								{
									die("Connection not establish".mysqli_connect_error());
								}
								else
								{
									$sql = "SELECT * FROM chatbot WHERE Messages = '$msg'";

									
									$result = mysqli_query($conn, $sql); 

								
									while($row = mysqli_fetch_assoc($result))
            						{
										$output = $row['Response'];
									
										if(filter_var($output,FILTER_VALIDATE_URL))
										{
											echo"<a href='{$output}' target='_blank'> Click here </a>";
											$flag = 1;
										}
										else
										{
											echo $output;
											$flag = 1;
										}
											
									}

									if($flag == 0)
									{
										echo "Sorry I can't understand you..";
									}
								}
							}
							?>
						</p>

							
					</div>
					<div class="sp"></div>
				</div>		
			</div>

			<!-- User input -->

			<form action="Home.php" method="post">
			<div class="chat-footer">
				<img src="../img/emo.png" class="emo">
				<textarea placeholder="Type a message" name="user_input" required ></textarea>
				
	            <button type="submit">Send</button>
			</div>
			</form>
		</div>
	</div>
	
</body>
</html>