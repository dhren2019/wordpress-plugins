<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Hello Dolly
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Author URI: http://ma.tt/
*/

function hello_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, take her wrap, fellas
Dolly, never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, golly, gee, fellas
Have a little faith in me, fellas
Dolly, never go away
Promise, you'll never go away
Dolly'll never go away again";

	// Here we split it into lines.
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line.
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="dolly"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from Hello Dolly song, by Jerry Herman:', 'hello-dolly' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph.
function dolly_css() {
	echo "
	<style type='text/css'>
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #dolly {
		float: left;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

function hello_dolly_menu(){
	add_menu_page( 'Hello dolly', 'Hello dolly', 'manage_options', '/nuestro-fichero.php' );
}
add_action( 'admin_menu', 'hello_dolly_menu' );

class HelloDollyWidget extends WP_Widget {

	public function __construct()
	{
		$params = array (
			'classname'   => 'HelloDollyWidget',
			'description' => 'Mostramos frases de Hello Dolly Widget'
		);
		parent::__construct('HelloDollyWidget', 'HelloDolly', $params);
	}
	public function widget( $args, $instance ){
		
	}

	public function form( $instance){
		
		if (isset($instance['title'])) {
			$title = $instance['title'];
		}else {
			$title = $instance['Nuevo titulo'];
		}

		?>
		// Añade en el widget un imput en blanco
		<p>
			<label for="<?php echo $this->get_field_name('title'); ?>"></label>
			<input type="text" value="" id="<?php echo $this->get_field_id('title'); ?>" class="" name="<?php echo $this->get_field_name('title'); ?>" />
		</p>
		<?php
	}
	public function update($new_instance, $old_instance){
		
	}
}

function hello_dolly_register_widget()
{
	register_widget('HelloDollyWidget');
}

add_action('widgets_init', 'hello_dolly_register_widget');
