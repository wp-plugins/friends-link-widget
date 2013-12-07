<?php
/*
Plugin Name: Friends Link Widget
Plugin URI: http://buffercode.com/friends-link-widget-wordpress-plugin/
Description: Simple method to add your friends website url to your site through widget
Version: 1.1
Author: vinoth06
Author URI: http://buffercode.com/
License: GPLv2
*/

// Additing Action hook widgets_init
add_action( 'widgets_init', 'buffercode_fl_widget'); 

function buffercode_fl_widget() {
register_widget( 'buffercode_fl_widget_info' );
}

class buffercode_fl_widget_info extends WP_Widget {
function buffercode_fl_widget_info () {
		$this->WP_Widget('buffercode_fl_widget_info', 'Friends Link','Friends Link Widget');	}

public function form( $instance ) { 
if ( isset ($instance[ 'buffercode_fl_name' ])
		&& isset ($instance[ 'buffercode_fl_text1' ])
		&& isset ($instance[ 'buffercode_fl_text2' ])
		&& isset ($instance[ 'buffercode_fl_text3' ])
		&& isset ($instance[ 'buffercode_fl_text4' ])
		&& isset ($instance[ 'buffercode_fl_text5' ])
		&& isset ($instance[ 'buffercode_fl_link1' ])
		&& isset ($instance[ 'buffercode_fl_link2' ])
		&& isset ($instance[ 'buffercode_fl_link3' ])
		&& isset ($instance[ 'buffercode_fl_link4' ])
		&& isset ($instance[ 'buffercode_fl_link5' ])
		&& isset ($instance[ 'buffercode_fl_bullet' ])
		&& isset ($instance[ 'buffercode_fl_title_count' ])
		&& isset ($instance[ 'buffercode_fl_target' ])
		) {
			$buffercode_fl_name = $instance[ 'buffercode_fl_name' ];
			
			$buffercode_fl_text[1]= $instance[ 'buffercode_fl_text1' ];
			$buffercode_fl_text[2]= $instance[ 'buffercode_fl_text2' ];
			$buffercode_fl_text[3]= $instance[ 'buffercode_fl_text3' ];
			$buffercode_fl_text[4]= $instance[ 'buffercode_fl_text4' ];
			$buffercode_fl_text[5]= $instance[ 'buffercode_fl_text5' ];
			
			$buffercode_fl_link[1]= $instance[ 'buffercode_fl_link1' ];
			$buffercode_fl_link[2]= $instance[ 'buffercode_fl_link2' ];
			$buffercode_fl_link[3]= $instance[ 'buffercode_fl_link3' ];
			$buffercode_fl_link[4]= $instance[ 'buffercode_fl_link4' ];
			$buffercode_fl_link[5]= $instance[ 'buffercode_fl_link5' ];
			
			$buffercode_fl_bullet= $instance[ 'buffercode_fl_bullet' ];
			
			$buffercode_fl_target= $instance[ 'buffercode_fl_target' ];
			
		//	$buffercode_fl_title_count_value = $instance[ 'buffercode_fl_title_count' ];
}
		else {
		//Custom Title Default Text - Buffercode.com
			$buffercode_fl_name	= 'My tag';
		//Text and URL Default Text - Buffercode.com
			$buffercode_fl_text[1]= "";
			$buffercode_fl_text[2]= "";
			$buffercode_fl_text[3]= "";
			$buffercode_fl_text[4]= "";
			$buffercode_fl_text[5]= "";
			
			$buffercode_fl_link[1]= "";
			$buffercode_fl_link[2]= "";
			$buffercode_fl_link[3]= "";
			$buffercode_fl_link[4]= "";
			$buffercode_fl_link[5]= "";
			
			//Bullet Display Default value - Buffercode.com
			$buffercode_fl_bullet = 2;
			
			//Open in new/same window Default value - Buffercode.com
			$buffercode_fl_target= 1;
		
		} ?>
		<!-- Custom Name Friends Link for Widget - Buffercode.com -->
		<p>Name: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_name' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_name);?>" /></p>
		
		<p>Name 1: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text1' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text[1]);?>" /></p>
		<p>URL 1: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link1' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link[1]);?>" /></p>
		
		<p>Name 2: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text2' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text[2]);?>" /></p>
		<p>URL 2: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link2' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link[2]);?>" /></p>
		
		<p>Name 3: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text3' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text[3]);?>" /></p>
		<p>URL 3: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link3' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link[3]);?>" /></p>
		
		<p>Name 4: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text4' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text[4]);?>" /></p>
		<p>URL 4: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link4' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link[4]);?>" /></p>
		
		<p>Name 5: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text5' ); ?>"type="text" value="<?php echo esc_attr( $buffercode_fl_text[5]);?>" /></p>
		<p>URL 5: <input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link5' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link[5]);?>" /></p>
		
		<!-- Open in Same or New Window- Buffercode.com -->
		<p>Open in New Window:
		<select name="<?php echo $this->get_field_name('buffercode_fl_target'); ?>" id="<?php echo $this->get_field_id('buffercode_fl_target'); ?>" class="widefat">
		<?php
		$target_options = array('yes' =>'1','no' =>'2');
		foreach ($target_options as $target_value => $target_code) {
		echo '<option value="' . $target_code . '" id="' . $target_code . '"', $buffercode_fl_target == $target_code ? ' selected="selected"' : '', '>', $target_value, '</option>';
		}?>	</select></p>
			
		<!-- Show/Hide bullet style for Widget - Buffercode.com -->
		<p>Show Bullet Style:
		<select name="<?php echo $this->get_field_name('buffercode_fl_bullet'); ?>" id="<?php echo $this->get_field_id('buffercode_fl_bullet'); ?>" class="widefat">
		<?php
		$bullet_options = array('yes' =>'1','no' =>'2');
		foreach ($bullet_options as $bullet_value => $bullet_code) {
		echo '<option value="' . $bullet_code . '" id="' . $bullet_code . '"', $buffercode_fl_bullet == $bullet_code ? ' selected="selected"' : '', '>', $bullet_value, '</option>';
		}?>	</select></p>
		
			
<?php
}

function update($new_instance, $old_instance) {
$instance = $old_instance;
$instance['buffercode_fl_name'] = ( ! empty( $new_instance['buffercode_fl_name'] ) ) ? strip_tags( $new_instance['buffercode_fl_name'] ) : '';

$instance['buffercode_fl_text1'] = ( ! empty( $new_instance['buffercode_fl_text1'] ) ) ? strip_tags( $new_instance['buffercode_fl_text1'] ) : '';
$instance['buffercode_fl_text2'] = ( ! empty( $new_instance['buffercode_fl_text2'] ) ) ? strip_tags( $new_instance['buffercode_fl_text2'] ) : '';
$instance['buffercode_fl_text3'] = ( ! empty( $new_instance['buffercode_fl_text3'] ) ) ? strip_tags( $new_instance['buffercode_fl_text3'] ) : '';
$instance['buffercode_fl_text4'] = ( ! empty( $new_instance['buffercode_fl_text4'] ) ) ? strip_tags( $new_instance['buffercode_fl_text4'] ) : '';
$instance['buffercode_fl_text5'] = ( ! empty( $new_instance['buffercode_fl_text5'] ) ) ? strip_tags( $new_instance['buffercode_fl_text5'] ) : '';

$instance['buffercode_fl_link1'] = ( ! empty( $new_instance['buffercode_fl_link1'] ) ) ? strip_tags( $new_instance['buffercode_fl_link1'] ) : '';
$instance['buffercode_fl_link2'] = ( ! empty( $new_instance['buffercode_fl_link2'] ) ) ? strip_tags( $new_instance['buffercode_fl_link2'] ) : '';
$instance['buffercode_fl_link3'] = ( ! empty( $new_instance['buffercode_fl_link3'] ) ) ? strip_tags( $new_instance['buffercode_fl_link3'] ) : '';
$instance['buffercode_fl_link4'] = ( ! empty( $new_instance['buffercode_fl_link4'] ) ) ? strip_tags( $new_instance['buffercode_fl_link4'] ) : '';
$instance['buffercode_fl_link5'] = ( ! empty( $new_instance['buffercode_fl_link5'] ) ) ? strip_tags( $new_instance['buffercode_fl_link5'] ) : '';

$instance['buffercode_fl_bullet'] = ( ! empty( $new_instance['buffercode_fl_bullet'] ) ) ? strip_tags( $new_instance['buffercode_fl_bullet'] ) : '';

$instance['buffercode_fl_target'] = ( ! empty( $new_instance['buffercode_fl_target'] ) ) ? strip_tags( $new_instance['buffercode_fl_target'] ) : '';
return $instance;
}

function widget($args, $instance) {
extract($args);
echo $before_widget;
$buffercode_fl_name = apply_filters( 'widget_title', $instance['buffercode_fl_name'] );
$buffercode_fl_bullet = empty( $instance['buffercode_fl_bullet'] ) ? '&nbsp;' :
$instance['buffercode_fl_bullet'];
$buffercode_fl_target= empty( $instance['buffercode_fl_target'] ) ? '&nbsp;' :$instance['buffercode_fl_target'];

$buffercode_fl_text[1] = ( ! empty( $instance['buffercode_fl_text1'] ) ) ? strip_tags( $instance['buffercode_fl_text1'] ) : '';
$buffercode_fl_text[2] = ( ! empty( $instance['buffercode_fl_text2'] ) ) ? strip_tags( $instance['buffercode_fl_text2'] ) : '';
$buffercode_fl_text[3] = ( ! empty( $instance['buffercode_fl_text3'] ) ) ? strip_tags( $instance['buffercode_fl_text3'] ) : '';
$buffercode_fl_text[4] = ( ! empty( $instance['buffercode_fl_text4'] ) ) ? strip_tags( $instance['buffercode_fl_text4'] ) : '';
$buffercode_fl_text[5] = ( ! empty( $instance['buffercode_fl_text5'] ) ) ? strip_tags( $instance['buffercode_fl_text5'] ) : '';

$buffercode_fl_link[1] = ( ! empty( $instance['buffercode_fl_link1'] ) ) ? strip_tags( $instance['buffercode_fl_link1'] ) : '';
$buffercode_fl_link[2] = ( ! empty($instance['buffercode_fl_link2'] ) ) ? strip_tags( $instance['buffercode_fl_link2'] ) : '';
$buffercode_fl_link[3] = ( ! empty( $instance['buffercode_fl_link3'] ) ) ? strip_tags( $instance['buffercode_fl_link3'] ) : '';
$buffercode_fl_link[4] = ( ! empty( $instance['buffercode_fl_link4'] ) ) ? strip_tags( $instance['buffercode_fl_link4'] ) : '';
$buffercode_fl_link[5] = ( ! empty( $instance['buffercode_fl_link5'] ) ) ? strip_tags( $instance['buffercode_fl_link5'] ) : '';


if ( !empty( $name ) ) { echo $before_title . $buffercode_fl_name . $after_title; };

 for($i=1;$i<=5;$i++){
 ?> <?php if(!empty($buffercode_fl_link[$i]) && !empty($buffercode_fl_text[$i])) { ?>
			 <li <?php if($buffercode_fl_bullet==2){?> style="list-style-type:none;<?php } ?>" >
			<!-- Buffercode.com Friends Link Widget -->
			<a href="<?php echo $buffercode_fl_link[$i]; ?>" <?php if ($buffercode_fl_target==1){?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text[$i]; ?>&nbsp;&nbsp;<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link[$i]; ?>" /></a><br>
			<!-- Buffercode.com Friends Link Widget -->
			</li>
		<?php } ?>
       <?php }
      echo $after_widget;

}
} ?>
