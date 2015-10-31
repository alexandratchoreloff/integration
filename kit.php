<?php 

/* Template Name: creationkit*/

 get_header();?>


<?php 


if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['myname']);
	$email = sanitize_email($_POST['myemail']);
	$situation = wp_kses_post($_POST['mysituation']);
	$title_situation = $_POST['title_situation'];r



	$contact_post = array(
		'post_title' => $name . ' - ' . $email,
		'post_content' => $situation,
		'post_type' => 'create_kit',
		'post_status' => 'publish',
		


	);


	$post_id = wp_insert_post( $contact_post);


	// if(wp_insert_post($contact_post)) echo 'votre kit a été enregistré ';
	// else echo 'erreur lors de envoie';

	update_field("field_5633f0cdacbef", $title_situation, $post_id);




}else{

}


 ?>

 <form action="<?php echo the_permalink(); ?>" method="POST">
 <br>
 <label for="name">noom du survivant</label>
 <input type="text" name="myname" id="name" placeholder="votre nom "/>

 <br>


  <label for="name">adresse mail</label>
 <input type="text" name="myemail" id="email" placeholder="votre email "/>
 <br>




 <label for="name">titre  de la situation</label>
 <input type="text" name="title_situation" id="title_situation" placeholder="titre de la situation "/>
 <br>



 <label for="name">situation</label>
 <textarea name="mysituation" id="situation" cols="50" rows="10" placeholder="situation" ></textarea>
 <br>


 <input type="submit" name="submit" value="envoyer votre situation">



 </form>

<?php get_footer(); ?>