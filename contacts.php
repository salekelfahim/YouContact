<?php
            include ("Assets/PHP/header.php");
        ?>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Contacts</span></h1>
                </div>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <div class="col-lg-8 col-xl-6">
                                <form action="Assets/PHP/add.php" id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="nom" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Last name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A Last name is required.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="prenom" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">First name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A First name is required.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" name="num" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
									<div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="adress" type="text" placeholder="Enter your Adress..." data-sb-validations="required" />
                                        <label for="name">Adress</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">An Adress is required.</div>
                                    </div>
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Contact added successfully!</div>
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error adding contact!</div></div>
                                    <!-- Submit Button-->
                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
        <button type="Submit" name="addcontact" class="btn btn-primary">Add Contact</button>
      </div>
    </div>
  </div>
  </form>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add New
		</button></div>
	<table align="center" border="1px" style="width:80%; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Contacts</h2></th> 
		
		</tr> 
			  <th> ID </th> 
			  <th> Nom </th> 
			  <th> Prenom </th> 
			  <th> Email </th> 
			  <th> Num </th> 
			  <th> Adress </th> 
			  <th> Date </th> 
			  <th> Actions </th> 
			  
		</tr> 
		<?php 
		    $sql = "SELECT * FROM contacts";
			$result = mysqli_query($conn, $sql);
		while( $rows = mysqli_fetch_assoc($result)) 
		{ 
		?>
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['nom']; ?></td> 
		<td><?php echo $rows['prenom']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['num']; ?></td> 
		<td><?php echo $rows['adress']; ?></td> 
		<td><?php echo $rows['datte']; ?></td>
		<td><li class="list-inline-item">
        <form action="">
    <input data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm rounded-0" type="submit" value="Edit" />
</form>
                                                <form action="Assets/PHP/delete.php?id=<?php echo $rows['id']; ?>">
    <input data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm rounded-0" type="submit" value="Delete" />
</form> </li>
</td>
		</tr> 
		<?php 
               } 
          ?> 
	</table>
			
        </main>
        <?php
    include("Assets/PHP/footer.php");
    ?>
