<?php 
/*
3D WP Tag Cloud: Links CP Template
*/
?>
	<div class="section_content">
		<div style="float: left;">
			<span style="padding-bottom: 5px;">GENERAL</span>
			<div style="padding-top: 5px;">
				<label style="margin: 0 10px 0 0;" title="Legend:<br>
					<b style='font-size: 26px; line-height: 5px; position: relative; top: 10px;'>*</b> Shapes that use specific number of tags.
					<br>----------<br>See <span style='font-weight: bold; color: #dc143c;'>GUIDE & TIPS</span> > 
					<span style='font-weight: bold; color: #444;'>Shape Tips</span> for tips on selection." 
					for="<?=$this->get_field_id('lin_shape'); ?>">
					Shape
					<br>
					<select id="<?=$this->get_field_id('lin_shape'); ?>" name="<?=$this->get_field_name('lin_shape'); ?>" onchange="change_limits(this.id, '<?=$this->get_field_id('all_links_limit'); ?>', this.value, 'lin')";>
						<option value="a" <?php if( $lin_shape == "a" ){ echo ' selected'; } ?>>A (3D)</option>
						<option value="antenna" <?php if( $lin_shape == "antenna" ){ echo ' selected'; } ?>>Antenna* (3D)</option>
						<option value="apple" <?php if( $lin_shape == "apple" ){ echo ' selected'; } ?>>Apple - 1 (2D)</option>
						<option value="apple2" <?php if( $lin_shape == "apple2" ){ echo ' selected'; } ?>>Apple - 2 (3D)</option>
						<option value="axes" <?php if( $lin_shape == "axes" ){ echo ' selected'; } ?>>Axes (3D)</option>
						<option value="balloon" <?php if( $lin_shape == "balloon" ){ echo ' selected'; } ?>>Balloon (3D)</option>
						<option value="balls" <?php if( $lin_shape == "balls" ){ echo ' selected'; } ?>>Balls (3D)</option>
						<option value="beam" <?php if( $lin_shape == "beam" ){ echo ' selected'; } ?>>Beam (1D)</option>
						<option value="blackhole" <?php if( $lin_shape == "blackhole" ){ echo ' selected'; } ?>>Black Hole (3D)</option>
						<option value="blossom" <?php if( $lin_shape == "blossom" ){ echo ' selected'; } ?>>Blossom (3D)</option>
						<option value="bowtie" <?php if( $lin_shape == "bowtie" ){ echo ' selected'; } ?>>Bowtie (3D)</option>
						<option value="bulb" <?php if( $lin_shape == "bulb" ){ echo ' selected'; } ?>>Bulb (3D)</option>
						<option value="butterfly" <?php if( $lin_shape == "butterfly" ){ echo ' selected'; } ?>>Butterfly (3D)</option>
						<option value="candy" <?php if( $lin_shape == "candy" ){ echo ' selected'; } ?>>Candy (3D)</option>
						<option value="capsule" <?php if( $lin_shape == "capsule" ){ echo ' selected'; } ?>>Capsule (3D)</option>
						<option value="circles" <?php if( $lin_shape == "circles" ){ echo ' selected'; } ?>>Circles* (3D)</option>
						<option value="crown" <?php if( $lin_shape == "crown" ){ echo ' selected'; } ?>>Crown (3D)</option>
						<option value="cube" <?php if( $lin_shape == "cube" ){ echo ' selected'; } ?>>Cube* (3D)</option>
						<option value="hcylinder" <?php if( $lin_shape == "hcylinder" ){ echo ' selected'; } ?>>Cylinder, horizontal (3D)</option>
						<option value="vcylinder" <?php if( $lin_shape == "vcylinder" ){ echo ' selected'; } ?>>Cylinder, vertical (3D)</option>
						<option value="dancers" <?php if( $lin_shape == "dancers" ){ echo ' selected'; } ?>>Dancers (3D)</option>
						<option value="diaminity" <?php if( $lin_shape == "diaminity" ){ echo ' selected'; } ?>>Diaminity (3D)</option>
						<option value="diamond" <?php if( $lin_shape == "diamond" ){ echo ' selected'; } ?>>Diamond (3D)</option>
						<option value="hdna" <?php if( $lin_shape == "hdna" ){ echo ' selected'; } ?>>DNA, horizontal (3D)</option>
						<option value="vdna" <?php if( $lin_shape == "vdna" ){ echo ' selected'; } ?>>DNA, vertical (3D)</option>
						<option value="domes" <?php if( $lin_shape == "domes" ){ echo ' selected'; } ?>>Domes (3D)</option>
						<option value="earing" <?php if( $lin_shape == "earing" ){ echo ' selected'; } ?>>Earing (3D)</option>
						<option value="egg" <?php if( $lin_shape == "egg" ){ echo ' selected'; } ?>>Egg (3D)</option>
						<option value="eggbox" <?php if( $lin_shape == "eggbox" ){ echo ' selected'; } ?>>Egg Box (3D)</option>
						<option value="excavator" <?php if( $lin_shape == "excavator" ){ echo ' selected'; } ?>>Excavator (2D)</option>
						<option value="fir" <?php if( $lin_shape == "fir" ){ echo ' selected'; } ?>>Fir* (3D)</option>
						<option value="fish" <?php if( $lin_shape[$i] == "fish" ){ echo ' selected'; } ?>>Fish - 1 (2D)</option>
						<option value="fish2" <?php if( $lin_shape[$i] == "fish2" ){ echo ' selected'; } ?>>Fish - 2 (2D)</option>
						<option value="glass" <?php if( $lin_shape == "glass" ){ echo ' selected'; } ?>>Glass (3D)</option>
						<option value="globe" <?php if( $lin_shape == "globe" ){ echo ' selected'; } ?>>Globe of Rings (3D)</option>
						<option value="heart" <?php if( $lin_shape == "heart" ){ echo ' selected'; } ?>>Heart (2D)</option>
						<option value="hexagon" <?php if( $lin_shape == "hexagon" ){ echo ' selected'; } ?>>Hexagon (Bee Cell)* (2D)</option>
						<option value="infinity1" <?php if( $lin_shape == "infinity1" ){ echo ' selected'; } ?>>Infinity - 1 (3D)</option>
						<option value="infinity2" <?php if( $lin_shape == "infinity2" ){ echo ' selected'; } ?>>Infinity - 2 (3D)</option>
						<option value="insect" <?php if( $lin_shape == "insect" ){ echo ' selected'; } ?>>Insect (3D)</option>
						<option value="knot" <?php if( $lin_shape == "knot" ){ echo ' selected'; } ?>>Knot (3D)</option>
						<option value="lemon" <?php if( $lin_shape == "lemon" ){ echo ' selected'; } ?>>Lemon (3D)</option>
						<option value="lissajous" <?php if( $lin_shape == "lissajous" ){ echo ' selected'; } ?>>Lissajous (3D)</option>
						<option value="love" <?php if( $lin_shape == "love" ){ echo ' selected'; } ?>>Love (3D)</option>
						<option value="m" <?php if( $lin_shape == "m" ){ echo ' selected'; } ?>>M (3D)</option>
						<option value="mobius" <?php if( $lin_shape == "mobius" ){ echo ' selected'; } ?>>Möbius Fan (3D)</option>
						<option value="monster" <?php if( $lin_shape == "monster" ){ echo ' selected'; } ?>>Monster (3D)</option>
						<option value="n" <?php if( $lin_shape == "n" ){ echo ' selected'; } ?>>N (3D)</option>
						<option value="o" <?php if( $lin_shape == "o" ){ echo ' selected'; } ?>>O (3D)</option>
						<option value="owl" <?php if( $lin_shape == "owl" ){ echo ' selected'; } ?>>Owlish (3D)</option>
						<option value="pear" <?php if( $lin_shape == "pear" ){ echo ' selected'; } ?>>Pearish (3D)</option>
						<option value="hcones" <?php if( $lin_shape == "hcones" ){ echo ' selected'; } ?>>Peg top around X-axis* (3D)</option>
						<option value="vcones" <?php if( $lin_shape == "vcones" ){ echo ' selected'; } ?>>Peg top around Y-axis* (3D)</option>
						<option value="pillow" <?php if( $lin_shape == "pillow" ){ echo ' selected'; } ?>>Pillow (3D)</option>
						<option value="rim" <?php if( $lin_shape == "rim" ){ echo ' selected'; } ?>>Rim (3D)</option>
						<option value="hring" <?php if( $lin_shape == "hring" ){ echo ' selected'; } ?>>Ring around X-axis (3D)</option>
						<option value="vring" <?php if( $lin_shape == "vring" ){ echo ' selected'; } ?>>Ring around Y-axis (3D)</option>
						<option value="rings" <?php if( $lin_shape == "rings" ){ echo ' selected'; } ?>>Rings Knotwork (3D)</option>
						<option value="roller" <?php if( $lin_shape == "roller" ){ echo ' selected'; } ?>>Roller of rings (3D)</option>
						<option value="roundabout" <?php if( $lin_shape == "roundabout" ){ echo ' selected'; } ?>>Roundabout (3D)</option>
						<option value="sandglass" <?php if( $lin_shape == "sandglass" ){ echo ' selected'; } ?>>Sandglass (3D)</option>
						<option value="saturn" <?php if( $lin_shape == "saturn" ){ echo ' selected'; } ?>>Saturn (3D)</option>
						<option value="sphere" <?php if( $lin_shape == "sphere" ){ echo ' selected'; } ?>>Sphere (3D)</option>
						<option value="spiral" <?php if( $lin_shape == "spiral" ){ echo ' selected'; } ?>>Spiral* (2D)</option>
						<option value="spiral3" <?php if( $lin_shape == "spiral3" ){ echo ' selected'; } ?>>Spring (3D)</option>
						<option value="square" <?php if( $lin_shape == "square" ){ echo ' selected'; } ?>>Square* (2D)</option>
						<option value="stairs" <?php if( $lin_shape == "stairs" ){ echo ' selected'; } ?>>Staircase (3D)</option>
						<option value="star" <?php if( $lin_shape == "star" ){ echo ' selected'; } ?>>Star - 1 (2D)</option>
						<option value="star2" <?php if( $lin_shape == "star2" ){ echo ' selected'; } ?>>Star - 2 (3D)</option>
						<option value="starwars1" <?php if( $lin_shape == "starwars1" ){ echo ' selected'; } ?>>Star Wars - 1 (3D)</option>
						<option value="starwars2" <?php if( $lin_shape == "starwars2" ){ echo ' selected'; } ?>>Star Wars - 2 (3D)</option>
						<option value="starwars3" <?php if( $lin_shape == "starwars3" ){ echo ' selected'; } ?>>Star Wars - 3 (3D)</option>
						<option value="starwars4" <?php if( $lin_shape == "starwars4" ){ echo ' selected'; } ?>>Star Wars - 4 (3D)</option>
						<option value="stool" <?php if( $lin_shape == "stool" ){ echo ' selected'; } ?>>Stool (3D)</option>
						<option value="teardrop" <?php if( $lin_shape == "teardrop" ){ echo ' selected'; } ?>>Teardrop (2D)</option>
						<option value="tire" <?php if( $lin_shape == "tire" ){ echo ' selected'; } ?>>Tire (3D)</option>
						<option value="torus" <?php if( $lin_shape == "torus" ){ echo ' selected'; } ?>>Torus (3D)</option>
						<option value="tower" <?php if( $lin_shape == "tower" ){ echo ' selected'; } ?>>Tower of rings (3D)</option>
						<option value="triangle" <?php if( $lin_shape == "triangle" ){ echo ' selected'; } ?>>Triangle* (2D)</option>
						<option value="pyramid" <?php if( $lin_shape == "pyramid" ){ echo ' selected'; } ?>>Triangle Pyramid* (3D)</option>
						<option value="ufo" <?php if( $lin_shape == "ufo" ){ echo ' selected'; } ?>>UFO (3D)</option>
						<option value="v" <?php if( $lin_shape == "v" ){ echo ' selected'; } ?>>V (3D)</option>
						<option value="w" <?php if( $lin_shape == "w" ){ echo ' selected'; } ?>>W (3D)</option>
						<option value="wall_e" <?php if( $lin_shape == "wall_e" ){ echo ' selected'; } ?>>Wall-E's Eyes (3D)</option>
						<option value="walnut" <?php if( $lin_shape == "walnut" ){ echo ' selected'; } ?>>Walnut (3D)</option>
						<option value="wings" <?php if( $lin_shape == "wings" ){ echo ' selected'; } ?>>Wings (3D)</option>
						<option value="x" <?php if( $lin_shape == "x" ){ echo ' selected'; } ?>>X (3D)</option>
						<option value="y" <?php if( $lin_shape == "y" ){ echo ' selected'; } ?>>Y (3D)</option>
						<option value="yinyang" <?php if( $lin_shape == "yinyang" ){ echo ' selected'; } ?>>Yin Yangish (3D)</option>
						<option value="zs" <?php if( $lin_shape == "zs" ){ echo ' selected'; } ?>>Z/S (3D)</option>
					</select>
				</label>
				<div style="float: left; margin: 0 0 0 12px;" title="The target option specifies where to open <span class='green'>Authors</span>, <span class='green'>Blogroll</span>, <span class='green'>Pages</span> and <span class='green'>Recent Posts</span> tag links:<br><br><span class='green'>_blank</span> - in a new window or tab;<br><span class='green'>_parent</span> - in the parent frame;<br><span class='green'>_self</span> - in the same frame as it was clicked (default);<br><span class='green'>_top</span> - in the full body of the window.">
					Target
					<br>
					<select id="<?=$this->get_field_id('lin_target'); ?>" name="<?=$this->get_field_name('lin_target'); ?>">
						<option value="_blank" <?php if( $lin_target == "_blank" ){ echo ' selected'; } ?>>_blank</option>
						<option value="_parent" <?php if( $lin_target == "_parent" ){ echo ' selected'; } ?>>_parent</option>
						<option value="_self" <?php if( $lin_target == "_self" ){ echo ' selected'; } ?>>_self</option>
						<option value="_top" <?php if( $lin_target == "_top" ){ echo ' selected'; } ?>>_top</option>
					</select>
				</div>
				<div class="thick-spacer"></div>
				<label style="max-width: 175px; margin: 0 12px 0 0;" title="Links Category to be displayed." for="<?=$this->get_field_id('all_links_category'); ?>">
				Links Category 
				<br>
				<select style="max-width: 175px;" id="<?=$this->get_field_id('all_links_category'); ?>" name="<?=$this->get_field_name('all_links_category'); ?>">
					<option value="" <?php if( $all_links_category == ""){ echo ' selected'; } ?>>all</option>
					<?php
						$terms_link = get_terms("link_category");
						 if ( !empty( $terms_link ) && !is_wp_error( $terms_link ) ){
							 foreach ( $terms_link as $term ) {
								echo "<option value='" . $term->term_id . "'";
								if( $all_links_category == $term->term_id ) { echo " selected" ; };
								echo ">" . $term->name . "</option>";
							 }
						 }
					?>
				</select>
				</label>
				<label title="Maximum number of links to display" for="<?=$this->get_field_id('all_links_limit'); ?>">
					Number 
					<br>
					<select id="<?=$this->get_field_id('all_links_limit'); ?>" name="<?=$this->get_field_name('all_links_limit'); ?>">
						<?php 
							switch($lin_shape){
										case "spiral":
											$spiral_lin = 0;
											for($i=8; $i<127; $i+=7){echo '<option id="alllili' . $i . '" value="' . $i . '"'; if($all_links_limit==$i){echo ' selected'; $spiral_lin = 1;} else{if($i==99&&$spiral_lin==0){echo ' selected'; $spiral_lin = 1;}}; echo '>' . $i . '</option>'; };
											break;
										case "hexagon":
											$hexagon_lin = 0;
											for($i=1; $i<6; $i++){$calc = 3*$i*$i+3*$i+1; echo '<option id="alllili' . $calc . '" value="' . $calc  . '"'; if($all_links_limit==$calc ){echo ' selected'; $hexagon_lin = 1;} else{if($i==5&&$hexagon_lin==0){echo ' selected'; $hexagon_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "cube":
											$cube_lin = 0;
											for($i=0; $i<4; $i++){$calc = 6*$i*$i+12*$i+8; echo '<option id="alllili' . $calc . '" value="' . $calc  . '"'; if($all_links_limit==$calc ){echo ' selected'; $cube_lin = 1;} else{if($i==3&&$cube_lin==0){echo ' selected'; $cube_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "pyramid":
											$pyramid_lin = 0;
											for($i=1; $i<8; $i++){$calc = 2*$i*$i+2; echo '<option id="alllili' . $calc . '" value="' . $calc  . '"'; if($all_links_limit==$calc ){echo ' selected'; $pyramid_lin = 1; } else{if($i==7&&$pyramid_lin==0){echo ' selected'; $pyramid_lin = 1;}}; echo '>' . $calc . '</option>'; };																				
											break;
										case "circles":
											$circles_lin = 0;
											for($i=2; $i<7; $i++){$calc = (2*$i*$i*$i+3*$i*$i+$i)/6; echo '<option id="alllili' . $calc . '" value="' . $calc . '"'; if($all_links_limit==$calc){echo ' selected'; $circles_lin = 1;} else{if($i==6&&$circles_lin==0){echo ' selected'; $circles_lin = 1;}}; echo '>' . $calc . '</option>'; };													
											break;
										case "antenna":
											$antena_lin = 0;
											for($i=2; $i<7; $i++){$calc = (2*$i*$i*$i+3*$i*$i+$i)/6+4; echo '<option id="alllili' . $calc . '" value="' . $calc . '"'; if($all_links_limit==$calc){echo ' selected'; $antena_lin = 1;} else{if($i==6&&$antena_lin==0){echo ' selected'; $antena_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "beam";
											$beam_lin = 0;
											for($i=5; $i<15; $i+=5){echo '<option id="alllili' . $i . '" value="' . $i . '"'; if($all_links_limit==$i){echo ' selected'; $beam_lin = 1;} else{if($i==10&&$beam_lin==0){echo ' selected'; $beam_lin = 1;}}; echo '>' . $i . '</option>'; };
											break;
										case "axes";
											$axes_lin = 0;
											for($i=6; $i<126; $i+=6){echo '<option id="alllili' . $i . '" value="' . $i . '"'; if($all_links_limit==$i){echo ' selected'; $axes_lin = 1;} else{if($i==102&&$axes_lin==0){echo ' selected'; $axes_lin = 1;}}; echo '>' . $i . '</option>'; };
											break;
										case "vcones";
											$vcones_lin = 0;
											for($i=2; $i<6; $i++){$calc = (2*$i*$i*$i+$i)/3; echo '<option id="alllili' . $calc . '" value="' . $calc . '"'; if($all_links_limit==$calc){echo ' selected'; $vcones_lin = 1; } else{if($i==5&&$vcones_lin==0){echo ' selected'; $vcones_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "hcones";
											$hcones_lin = 0;
											for($i=2; $i<6; $i++){$calc = (2*$i*$i*$i+$i)/3; echo '<option id="alllili' . $calc . '" value="' . $calc . '"'; if($all_links_limit==$calc){echo ' selected'; $hcones_lin = 1; } else{if($i==5&&$hcones_lin==0){echo ' selected'; $hcones_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "square";
											$square_lin = 0;
											for($i=2; $i<11; $i++){echo '<option id="alllili' . $i*$i . '" value="' . $i*$i . '"'; if($all_links_limit==$i*$i){echo ' selected'; $square_lin = 1;} else{if($i==10&&$square_lin==0){echo ' selected'; $square_lin = 1;}}; echo '>' . $i*$i . '</option>'; };
											break;
										case "fir";
											$fir_lin = 0;
											for($i=1; $i<8; $i++){$calc = (2*$i*$i+2*$i+1); echo '<option id="alllili' . $calc . '" value="' . $calc . '"'; if($all_links_limit==$calc){echo ' selected'; $fir_lin = 1;} else{if($i==7&&$fir_lin==0){echo ' selected'; $fir_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "triangle";
											$triangle_lin = 0;
											for($i=3; $i<15; $i++){$calc = (0.5*$i*$i+0.5*$i); echo '<option id="alllili' . $calc . '" value="' . $calc . '"'; if($all_links_limit==$calc){echo ' selected'; $triangle_lin = 1;} else{if($i==14&&$triangle_lin==0){echo ' selected'; $triangle_lin = 1;}}; echo '>' . $calc . '</option>'; };
											break;
										case "heart";
											$heart_lin = 0;
											for($i=12; $i<60; $i+=12){echo '<option id="alllili' . $i . '" value="' . $i . '"'; if($all_links_limit==$i){echo ' selected'; $heart_lin = 1;} else{if($i==48&&$heart_lin==0){echo ' selected'; $heart_lin = 1;}}; echo '>' . $i . '</option>'; };
											break;
										case "love";
											$love_lin = 0;
											for($i=24; $i<72; $i+=12){echo '<option id="alllili' . $i . '" value="' . $i . '"'; if($all_links_limit==$i){echo ' selected'; $love_lin = 1;} else{if($i==60&&$love_lin==0){echo ' selected'; $love_lin = 1;}}; echo '>' . $i . '</option>'; };
											break;
										default:
											$default_lin = 0;
											for($i=5; $i<125; $i+=5){echo '<option id="alllili' . $i . '" value="' . $i . '"'; if($all_links_limit==$i){echo ' selected'; $default_lin = 1;} else{if($i==100&&$default_lin==0){echo ' selected'; $default_lin = 1;}}; echo '>' . $i . '</option>'; };
											echo '<option id="alllili125"'; if($all_links_limit=='-1'){echo ' selected';}; echo ' value="-1">all</option>';
							}
						?>
					</select>
				</label>  
				<div style="float: left; margin: 0 0 0 12px;" title="The minimum number of tags to show in the cloud. If the number of links available is lower than this value, the list will be repeated. Shapes marked with an asterisk (*) may use the nearest downward value.">
					Min Tags
					<br>
					<select id="<?=$this->get_field_id('lin_min_tags'); ?>" name="<?=$this->get_field_name('lin_min_tags'); ?>">
						<?php for($i=0; $i<201; $i++){echo '<option id="limint_' . $i . '" value="' . $i . '"'; if($lin_min_tags==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>
					</select>
				</div>
				<div class="thick-spacer"></div>
				<div style="float: left; margin: 0 21px 0 0;" title="Switches on/off weighting of tags. Setting <span class='green'>off</span> overrides <span class='green'>Weight Mode</span>. Weighting of <span class='green'>Links</span> is good to be combined with <span class='green'>Shuffle Tags</span>.">
					Weight<br>
						<input class="radio" id="<?=$this->get_field_id('lin_weight'); ?>"
						name="<?=$this->get_field_name('lin_weight'); ?>" type="radio" value="true"
						<?php if( $lin_weight == "true" ){ echo ' checked="checked"'; } ?>>on
						
						<input class="radio" id="<?=$this->get_field_id('lin_weight'); ?>"
						name="<?=$this->get_field_name('lin_weight'); ?>" type="radio" value="false"
						<?php if( $lin_weight == "false" ){ echo ' checked="checked"'; } ?>>off 
				</div>
				<label style="float: left; margin: 0 21px 0 0;" title="Method to use for displaying tag weights:<br>
				<span class='green'>size</span> - displays more significant tags in a larger font size;<br>
				<span class='green'>color</span> - displays tags using color values from the <span class='green'>Gradient Color</span> options;<br>
				<span class='green'>size&color</span> - uses both size and color to visualise weights;<br>
				<span class='green'>background</span> - uses a <span class='green'>Gradient Color</span> to set the tag background color;<br>
				<span class='green'>outline</span> - uses a <span class='green'>Gradient Color</span> to set the tag highlight color;<br>
				<span class='green'>border</span> - uses a <span class='green'>Gradient Color</span> to set the tag border color. 
				<span class='green'>Border</span> option in <span class='green'>SIZES</span> subsection must be enabled." for="<?=$this->get_field_id('lin_weight_mode'); ?>">
					Weight Mode
					<br>
					<select id="<?=$this->get_field_id('lin_weight_mode'); ?>" name="<?=$this->get_field_name('lin_weight_mode'); ?>">
						<option value="size" <?php if( $lin_weight_mode == "size" ){ echo ' selected'; } ?>>size</option>
						<option value="color" <?php if( $lin_weight_mode == "color" ){ echo ' selected'; } ?>>color</option>
						<option value="both" <?php if( $lin_weight_mode == "both" ){ echo ' selected'; } ?>>size&color</option>
						<option value="bgcolor" <?php if( $lin_weight_mode == "bgcolor" ){ echo ' selected'; } ?>>background</option>
						<option value="outline" <?php if( $lin_weight_mode == "outline" ){ echo ' selected'; } ?>>outline</option>
						<option value="bgoutline" <?php if( $lin_weight_mode == "bgoutline" ){ echo ' selected'; } ?>>border</option>
					</select>
				</label>
				<label title="Multiplier for adjusting the size of tags when using a weight mode of <span class='green'>size</span> or <span class='green'>size & color</span>." for="<?=$this->get_field_id('lin_weight_size'); ?>">
					Weight Factor
					<br>
					<select id="<?=$this->get_field_id('lin_weight_size'); ?>" name="<?=$this->get_field_name('lin_weight_size'); ?>">
						<?php for($i=50; $i<505; $i+=5){echo '<option id="liws_' . $i . '" value="' . $i/100 . '"'; if($lin_weight_size==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>	
					</select>
				</label>
				<div class="thick-spacer"></div>
				<label style="margin: 0 12px 0 0;" title="Type of highlight to use" for="<?=$this->get_field_id('lin_outline_method'); ?>">
					Outline Method
					<br>
					<select id="<?=$this->get_field_id('lin_outline_method'); ?>" name="<?=$this->get_field_name('lin_outline_method'); ?>">
						<option value="outline" <?php if( $lin_outline_method == "outline" ){ echo ' selected'; } ?>>outline</option>
						<option value="classic" <?php if( $lin_outline_method == "classic" ){ echo ' selected'; } ?>>classic</option>
						<option value="block" <?php if( $lin_outline_method == "block" ){ echo ' selected'; } ?>>block</option>
						<option value="color" <?php if( $lin_outline_method == "color" ){ echo ' selected'; } ?>>color</option>
						<option value="size" <?php if( $lin_outline_method == "size" ){ echo ' selected'; } ?>>size</option>
						<option value="none" <?php if( $lin_outline_method == "none" ){ echo ' selected'; } ?>>none</option>
					</select>
				</label>
				<label style="margin: 0 10px 0 0; float: left;" title="The size of the pattern (0 for no dash pattern):<br>Applies for 'outline' and 'clasic' <span class='green'>Outline Method</span>." for="<?=$this->get_field_id('lin_outline_dash'); ?>">
					Dash
					<br>
					<select id="<?=$this->get_field_id('lin_outline_dash'); ?>" name="<?=$this->get_field_name('lin_outline_dash'); ?>">
						<?php for($i=0; $i<61; $i++){echo '<option id="alidash_' . $i . '" value="' . $i . '"'; if($lin_outline_dash==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>
					</select>px
				</label>
				<label style="margin: 0 10px 0 0; float: left;" title="The size of the gap between the dashes:<br>Applies for 'outline' and 'clasic' <span class='green'>Outline Method</span>." for="<?=$this->get_field_id('lin_outline_dash_space'); ?>">
					Dash Space
					<br>
					<select id="<?=$this->get_field_id('lin_outline_dash_space'); ?>" name="<?=$this->get_field_name('lin_outline_dash_space'); ?>">
						<?php for($i=1; $i<61; $i++){echo '<option id="alidashspa_' . $i . '" value="' . $i . '"'; if($lin_outline_dash_space==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>
					</select>px
				</label>
				<label style="float: left;" title="The speed of pattern move (0 for still pattern, minus changes the direction):<br>Applies for 'outline' and 'clasic' <span class='green'>Outline Method</span>." for="<?=$this->get_field_id('lin_outline_dash_speed'); ?>">
					Dash Speed
					<br>
					<select id="<?=$this->get_field_id('lin_outline_dash_speed'); ?>" name="<?=$this->get_field_name('lin_outline_dash_speed'); ?>">
						<?php for($i=-20; $i<21; $i++){echo '<option id="alidashspe_' . $i . '" value="' . $i . '"'; if($lin_outline_dash_speed==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>
					</select>
				</label>
				<div class="thick-spacer"></div>	
				<div style="float: left; margin: 0 20px 0 0;" title="When enabled, cloud moves when dragged instead of based on mouse position.">
					Drag<br>Control
					<div>
						<input class="radio" id="<?=$this->get_field_id('lin_drag_ctrl'); ?>"
						name="<?=$this->get_field_name('lin_drag_ctrl'); ?>" type="radio" value="true"
						<?php if( $lin_drag_ctrl == "true" ){ echo ' checked="checked"'; } ?>>on
						
						<input class="radio" id="<?=$this->get_field_id('lin_drag_ctrl'); ?>"
						name="<?=$this->get_field_name('lin_drag_ctrl'); ?>" type="radio" value="false"
						<?php if( $lin_drag_ctrl == "false" ){ echo ' checked="checked"'; } ?>>off
					</div>
				</div>
				<label style="margin: 0 20px 0 0;" title="Minimal opacity of tags at back of cloud." for="<?=$this->get_field_id('lin_brightness'); ?>">
					Min<br>Opacity
					<br>
					<select id="<?=$this->get_field_id('lin_brightness'); ?>" name="<?=$this->get_field_name('lin_brightness'); ?>">
						<?php for($i=0; $i<105; $i+=5){echo '<option id="limb_' . $i . '" value="' . $i/100 . '"'; if($lin_brightness==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>					
					</select>
				</label> 
				<label style="margin: 0 20px 0 0;" title="Pulsate outline to this opacity. Choose <span class='green'>1.0</span> for no pulsation." for="<?=$this->get_field_id('lin_pulsate_to'); ?>">
					Pulsate<br>to Opacity
					<br>
					<select id="<?=$this->get_field_id('lin_pulsate_to'); ?>" name="<?=$this->get_field_name('lin_pulsate_to'); ?>">
						<?php for($i=0; $i<11; $i++){echo '<option id="lipus_' . $i . '" value="' . $i/10 . '"'; if($lin_pulsate_to==$i/10){echo ' selected';}; echo '>' . $i/10 . '</option>'; } ?>
					</select>
				</label>
				<label for="<?=$this->get_field_id('lin_lock'); ?>" title="Limits rotation of the cloud using the mouse:<br><span class='green'>x-axis</span> - limits rotation to the x-axis;<br><span class='green'>y-axis</span> - limits rotation to the y-axis;<br><span class='green'>both</span> - locks the cloud in response to the mouse. It will only move if the <span class='green'>Initial Speed</span> option gives it a starting speed.<b><br>N.B.</b> Since Z rotation can't be controlled by mouse it will be locked anyway.<br><span class='green'>none</span> - leaves the cloud unlocked.">
					Lock<br>Rotation
					<br>
					<select id="<?=$this->get_field_id('lin_lock'); ?>" name="<?=$this->get_field_name('lin_lock'); ?>">
						<option value="x" <?php if( $lin_lock == "x" ){ echo ' selected'; } ?>>x-axis</option>
						<option value="y" <?php if( $lin_lock == "y" ){ echo ' selected'; } ?>>y-axis</option>
						<option value="xy" <?php if( $lin_lock == "xy" ){ echo ' selected'; } ?>>both</option>
						<option value="none" <?php if( $lin_lock == "none" ){ echo ' selected'; } ?>>none</option>
					</select>
				</label>
				<div class="thick-spacer"></div>	
				<label style="width: 100%;" for="<?=$this->get_field_id('lin_tooltip'); ?>" title="Sets your canvas tooltip. For instance if the cloud allows <span class='green'>Drag Control</span> you can suggest your site visitors to 'Drag or Click'.">
				Tooltip
				<div>
					<input style="width: 100%;" id="<?=$this->get_field_id('lin_tooltip'); ?>"
					name="<?=$this->get_field_name('lin_tooltip'); ?>" type="text"
					value="<?php echo $lin_tooltip; ?>" />
				</div> 
				</label>
				<label style="float: left; width: 100%; padding: 5px 0 0;" title="URL of an image to be used for Cloud Background. The image will be centered and stretched or shrunk to canvas size." for="<?=$this->get_field_id('lin_img_url'); ?>">
					Background Image
					<input style="width: 100%;"
					id="<?=$this->get_field_id('lin_img_url'); ?>"
					name="<?=$this->get_field_name('lin_img_url'); ?>" type="text"
					value="<?php echo $lin_img_url; ?>" /> 
				</label>
			</div>
		</div>
		<div class="divider"></div>
		<div style="float: left;">
			<span style="padding-bottom: 5px;">SIZES</span>
			<div style="padding-top: 5px;">
				<label style="margin: 0 33px 0 0;" title="Minimal font size when weighted sizing is enabled." for="<?=$this->get_field_id('lin_weightsizemin'); ?>">
					Weight Size Min
					<br>
					<select id="<?=$this->get_field_id('lin_weightsizemin'); ?>" name="<?=$this->get_field_name('lin_weightsizemin'); ?>">
						<?php for($i=6; $i<17; $i++){echo '<option id="liwsmi_' . $i . '" value="' . $i . '"'; if($lin_weightsizemin==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>					
					</select>px
				</label>
				<label style="margin: 0 33px 0 0;" title="Maximal font size when weighted sizing is enabled." for="<?=$this->get_field_id('lin_weightsizemax'); ?>">
					Weight Size Max
					<br>
					<select id="<?=$this->get_field_id('lin_weightsizemax'); ?>" name="<?=$this->get_field_name('lin_weightsizemax'); ?>">
						<?php for($i=18; $i<33; $i++){echo '<option id="liwsm_' . $i . '" value="' . $i . '"'; if($lin_weightsizemax==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>					
					</select>px
				</label>
				<div class="thick-spacer"></div>
				<label style="width: 86px;" title="Initial size of cloud from centre to sides. This option has no effect if selected shape is <span class='green'>Beam</span>." for="<?=$this->get_field_id('lin_radius_x'); ?>">
					Radius X 
					<br>
					<select id="<?=$this->get_field_id('lin_radius_x'); ?>" name="<?=$this->get_field_name('lin_radius_x'); ?>">
						<?php for($i=0; $i<1505; $i+=5){echo '<option id="lirx_' . $i . '" value="' . $i/100 . '"'; if($lin_radius_x==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>
					</select>
				</label>				
				<label style="width: 86px;" title="Initial size of cloud from centre to top and bottom. This option has no effect if selected shape is <span class='green'>Beam</span>." for="<?=$this->get_field_id('lin_radius_y'); ?>">
					Radius Y 
					<br>
					<select id="<?=$this->get_field_id('lin_radius_y'); ?>" name="<?=$this->get_field_name('lin_radius_y'); ?>">
						<?php for($i=0; $i<1505; $i+=5){echo '<option id="liry_' . $i . '" value="' . $i/100 . '"'; if($lin_radius_y==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>
					</select>
				</label>				
				<div style="width: 86px; float: left;" title="Initial size of cloud from centre to front and back. This option has no effect if selected shape is two dimensional (2D)." id="cont_<?=$this->get_field_id('lin_radius_z'); ?>">
					Radius Z 
					<br>
					<select id="<?=$this->get_field_id('lin_radius_z'); ?>" name="<?=$this->get_field_name('lin_radius_z'); ?>">
						<?php for($i=0; $i<1505; $i+=5){echo '<option id="lirz_' . $i . '" value="' . $i/100 . '"'; if($lin_radius_z==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>
					</select>
				</div> 
				<label style="width: 70px;" title="If greater than 0, breaks the tag into multiple lines at word boundaries when the line would be longer than this value. Lines are automatically broken at line break tags." for="<?=$this->get_field_id('lin_split_width'); ?>">
					Split Width
					<br>
					<select id="<?=$this->get_field_id('lin_split_width'); ?>" name="<?=$this->get_field_name('lin_split_width'); ?>">						
						<?php for($i=50; $i<155; $i+=5){echo '<option id="lispw_' . $i . '" value="' . $i . '"'; if($lin_split_width==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>					
					</select>px
				</label>
				<div class="thick-spacer"></div>
				<label style="margin: 0 15px 0 0;" title="Height of the tag text font" for="<?=$this->get_field_id('lin_fontsize'); ?>">
					Font Size
					<br>
					<select id="<?=$this->get_field_id('lin_fontsize'); ?>" name="<?=$this->get_field_name('lin_fontsize'); ?>">
						<?php for($i=6; $i<31; $i++){echo '<option id="lifs_' . $i . '" value="' . $i . '"'; if($lin_fontsize==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>	
					</select>px
				</label>
				<div style="float: left; margin: 0 15px 0 0;" title="Border of the tags">
					<div>
						Border
					</div>
					<div  style="float: left;">
						<input class="radio" id="<?=$this->get_field_id('lin_borderwidth'); ?>"
						name="<?=$this->get_field_name('lin_borderwidth'); ?>" type="radio" value="1"
						<?php if( $lin_borderwidth == "1" ){ echo ' checked="checked"'; } ?>>on
						<br>
						<input class="radio" id="<?=$this->get_field_id('lin_borderwidth'); ?>"
						name="<?=$this->get_field_name('lin_borderwidth'); ?>" type="radio" value="0"
						<?php if( $lin_borderwidth == "0" ){ echo ' checked="checked"'; } ?>>off
					</div>
				</div>	
				<div style="float: left; margin: 0 15px 0 0; padding: 0 0 2px 2px; border: 1px dotted #aaa; border-radius: 5px;" title="X and Y offset of the tag shadow">
					Shadow Offset [x, y]
					<br>
					<select id="<?=$this->get_field_id('lin_shadowoff_x'); ?>" name="<?=$this->get_field_name('lin_shadowoff_x'); ?>">						
						<?php for($i=-5; $i<6; $i++){echo '<option id="lisox_' . $i . '" value="' . $i . '"'; if($lin_shadowoff_x==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>							
					</select>px<select id="<?=$this->get_field_id('lin_shadowoff_y'); ?>" name="<?=$this->get_field_name('lin_shadowoff_y'); ?>">						
						<?php for($i=-5; $i<6; $i++){echo '<option id="lisoy_' . $i . '" value="' . $i . '"'; if($lin_shadowoff_y==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>							
					</select>px
				</div>
				<label title="Shadow behind each Menu tag" for="<?=$this->get_field_id('lin_shadowblur'); ?>">
					Shadow Blur
					<br>
					<select id="<?=$this->get_field_id('lin_shadowblur'); ?>" name="<?=$this->get_field_name('lin_shadowblur'); ?>">
						<?php for($i=0; $i<6; $i++){echo '<option id="lishb_' . $i . '" value="' . $i . '"'; if($lin_shadowblur==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>												
					</select>px
				</label>
				<div class="thin-spacer"></div>
				<label style="width: 86px;" title="Amount to scale images by. The value of <span class='green'>1.0</span> uses the size of avatars (96x96px)." for="<?=$this->get_field_id('lin_image_scale'); ?>">
					Image Scale
					<br>
					<select id="<?=$this->get_field_id('lin_image_scale'); ?>" name="<?=$this->get_field_name('lin_image_scale'); ?>">
						<?php for($i=25; $i<1525; $i+=25){echo '<option id="linims_' . $i . '" value="' . $i/1000 . '"'; if($lin_image_scale==$i/1000){echo ' selected';}; echo '>' . $i/1000 . '</option>'; } ?>					
					</select>
				</label>
				<label style="width: 86px;" title="Radius for image corners" for="<?=$this->get_field_id('lin_image_radius'); ?>">
					Image Radius
					<br>
					<select id="<?=$this->get_field_id('lin_image_radius'); ?>" name="<?=$this->get_field_name('lin_image_radius'); ?>">
						<?php for($i=0; $i<62; $i++){echo '<option id="linimr_' . $i . '" value="' . $i . '"'; if($lin_image_radius==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>					
					</select>px
				</label>
				<div class="thin-spacer"></div>
			</div>
		</div>
		<div class="divider"></div>
		<div style="float: left;">
			<span style="padding-bottom: 5px;">MIXED IMAGE & TEXT</span>
			<br>
			<div style="padding-top: 5px; display: inline-block;">
				<label style="margin: 0 25px 0 0;" title="What to display when tag contains images and text:<br><span class='green'>null</span> - Image if present, otherwise text;<br><span class='green'>image</span> - Image tags only;<br><span class='green'>text</span> - Text tags only;<br><span class='green'>both</span> - Image and text on tag using <span class='green'>Image Position</span>." for="<?=$this->get_field_id('lin_image_mode'); ?>">
					<br>
					Tag Mode
					<br>
					<select id="<?=$this->get_field_id('lin_image_mode'); ?>" name="<?=$this->get_field_name('lin_image_mode'); ?>">
						<option value="" <?php if( $lin_image_mode == "" ){ echo ' selected'; } ?>>null</option>
						<option value="image" <?php if( $lin_image_mode == "image" ){ echo ' selected'; } ?>>image</option>
						<option value="text" <?php if( $lin_image_mode == "text" ){ echo ' selected'; } ?>>text</option>
						<option value="both" <?php if( $lin_image_mode == "both" ){ echo ' selected'; } ?>>both</option>
					</select>
				</label>
				<label style="margin: 0 25px 0 0;" title="Position of image relative to text when using an <span class='green'>Tag Mode</span> of <span class='green'>both</span>." for="<?=$this->get_field_id('lin_image_position'); ?>">
					Image<br>Position
					<br>
					<select id="<?=$this->get_field_id('lin_image_position'); ?>" name="<?=$this->get_field_name('lin_image_position'); ?>">
						<option value="left" <?php if( $lin_image_position == "left" ){ echo ' selected'; } ?>>left</option>
						<option value="right" <?php if( $lin_image_position == "right" ){ echo ' selected'; } ?>>right</option>
						<option value="top" <?php if( $lin_image_position == "top" ){ echo ' selected'; } ?>>top</option>
						<option value="bottom" <?php if( $lin_image_position == "bottom" ){ echo ' selected'; } ?>>bottom</option>
					</select>
				</label>
				<label style="margin: 0 25px 0 0;" title="Distance between image and text when using an <span class='green'>Tag Mode</span> of <span class='green'>both</span>." for="<?=$this->get_field_id('lin_image_padding'); ?>">
					Image<br>Padding
					<br>
					<select id="<?=$this->get_field_id('lin_image_padding'); ?>" name="<?=$this->get_field_name('lin_image_padding'); ?>">	
						<?php for($i=1; $i<6; $i++){echo '<option id="liimpa_' . $i . '" value="' . $i . '"'; if($lin_image_padding==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>	
					</select>px
				</label>
			</div>
			<div style="padding-top: 5px; display: inline-block;">
				<label style="margin: 0 20px 0 0;" title="Horizontal image alignment" for="<?=$this->get_field_id('lin_image_align'); ?>">
					Horizontal<br>Image Align
					<br>
					<select id="<?=$this->get_field_id('lin_image_align'); ?>" name="<?=$this->get_field_name('lin_image_align'); ?>">
						<option value="left" <?php if( $lin_image_align == "left" ){ echo ' selected'; } ?>>left</option>
						<option value="centre" <?php if( $lin_image_align == "centre" ){ echo ' selected'; } ?>>center</option>
						<option value="right" <?php if( $lin_image_align == "right" ){ echo ' selected'; } ?>>right</option>
					</select>
				</label>
				<label style="margin: 0 20px 0 0;" title="Vertical image alignment" for="<?=$this->get_field_id('lin_image_valign'); ?>">
					Vertical<br>Image Align
					<br>
					<select id="<?=$this->get_field_id('lin_image_valign'); ?>" name="<?=$this->get_field_name('lin_image_valign'); ?>">
						<option value="top" <?php if( $lin_image_valign == "top" ){ echo ' selected'; } ?>>top</option>
						<option value="middle" <?php if( $lin_image_valign == "middle" ){ echo ' selected'; } ?>>middle</option>
						<option value="bottom" <?php if( $lin_image_valign == "bottom" ){ echo ' selected'; } ?>>bottom</option>
					</select>
				</label>
				<label style="margin: 0 20px 0 0;" title="Horizontal text alignment" for="<?=$this->get_field_id('lin_text_align'); ?>">
					Horizontal<br>Text Align
					<br>
					<select id="<?=$this->get_field_id('lin_text_align'); ?>" name="<?=$this->get_field_name('lin_text_align'); ?>">
						<option value="left" <?php if( $lin_text_align == "left" ){ echo ' selected'; } ?>>left</option>
						<option value="centre" <?php if( $lin_text_align == "centre" ){ echo ' selected'; } ?>>center</option>
						<option value="right" <?php if( $lin_text_align == "right" ){ echo ' selected'; } ?>>right</option>
					</select>
				</label>
				<label title="Vertical text alignment" for="<?=$this->get_field_id('lin_text_valign'); ?>">
					Vertical<br>Text Align
					<br>
					<select id="<?=$this->get_field_id('lin_text_valign'); ?>" name="<?=$this->get_field_name('lin_text_valign'); ?>">
						<option value="top" <?php if( $lin_text_valign == "top" ){ echo ' selected'; } ?>>top</option>
						<option value="middle" <?php if( $lin_text_valign == "middle" ){ echo ' selected'; } ?>>middle</option>
						<option value="bottom" <?php if( $lin_text_valign == "bottom" ){ echo ' selected'; } ?>>bottom</option>
					</select>
				</label>				
			</div>
		</div>
		<div class="divider"></div>
		<div style="float: left; height: 137px;">
			<span style="padding-bottom: 5px;">COLORS</span>
			<div style="padding-top: 5px;">
				<label style="margin: 0 3px 0 0; height: 55px;" for="<?=$this->get_field_id('lin_text_color'); ?>">
					Tag Color
					<br>
					<span class="hash">#</span>
					<div class="siwraper">
						<input title="Color of the tag text: Empty to use the color of the original link." 
						class="colors" id="<?=$this->get_field_id('lin_text_color'); ?>"
						name="<?=$this->get_field_name('lin_text_color'); ?>" type="text"
						value="<?php echo $lin_text_color; ?>" onblur="hex_val_check(this, this.value)" />
						<?php 
							if($lin_text_color != '') {echo '<span class="color" style="color: #' . $lin_text_color . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}; 
						?>
					</div>
				</label>
				<label style="margin: 0 3px 0 0; height: 55px;" for="<?=$this->get_field_id('lin_bg_color'); ?>">
					Background
					<br>
					<span class="hash">#</span>
					<div class="siwraper" style="text-align: center;">
						<input title="Background color of tags: Empty for no background. The string <span class='green'>'tag'</span> means use of the original link background color."
						class="colors" id="<?=$this->get_field_id('lin_bg_color'); ?>"
						name="<?=$this->get_field_name('lin_bg_color'); ?>" type="text"
						value="<?php echo $lin_bg_color; ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_bg_color != '' && $lin_bg_color != 'tag') {echo '<span class="color" style="color: #' . $lin_bg_color . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}
							else {if($lin_bg_color == 'tag'){echo '<span class="color" style="background: #fff; padding: 0 1px; letter-spacing: 0;">original color</span>';}};
						?>
					</div>
				</label>
				<label style="margin: 0 3px 0 0; height: 55px;" for="<?=$this->get_field_id('lin_bg_outline'); ?>">
					Border
					<br>
					<span class="hash">#</span>
					<div class="siwraper" style="text-align: center;">
						<input title="Color of tag border: Empty for the same as the text color. Use <span class='green'>'tag'</span> for the original link text color."
						class="colors" id="<?=$this->get_field_id('lin_bg_outline'); ?>"
						name="<?=$this->get_field_name('lin_bg_outline'); ?>" type="text"
						value="<?php echo $lin_bg_outline; ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_bg_outline != '' && $lin_bg_outline != 'tag') {echo '<span class="color" style="color: #' . $lin_bg_outline . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}
							else {if($lin_bg_outline == 'tag'){echo '<span class="color" style="background: #fff; padding: 0 1px; letter-spacing: 0;">original color</span>';}};
						?>
					</div>
				</label>
				<label style="margin: 0 3px 0 0; height: 55px;" for="<?=$this->get_field_id('lin_shadow'); ?>">
					Shadow
					<br>
					<span class="hash">#</span>
					<div class="siwraper">
						<input title="Color of the shadow behind each tag: Empty for no shadow."
						class="colors" id="<?=$this->get_field_id('lin_shadow'); ?>"
						name="<?=$this->get_field_name('lin_shadow'); ?>" type="text"
						value="<?php echo $lin_shadow; ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_shadow != '') {echo '<span class="color" style="color: #' . $lin_shadow . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}; 
						?>
					</div>
				</label>								
				<label style="margin: 0 3px 0 0; height: 55px;" for="<?=$this->get_field_id('lin_outline_color'); ?>">
					Outline
					<br>
					<span class="hash">#</span>
					<div class="siwraper" style="margin: 0; text-align: center;">
						<input title="Color of the active tag highlight: This can be a color to use for all tags, or one of these options to set the color differently for each tag:<br>
						<span class='green'>'tag'</span> - uses the text color from the original tag link;<br>
						<span class='green'>'tagbg'</span> - uses the background color from the original tag link. See also the <span class='green'>'outline' Weight Mode</span> 
						for another way to set the highlight color. Empty for no outline."
						class="colors" id="<?=$this->get_field_id('lin_outline_color'); ?>"
						name="<?=$this->get_field_name('lin_outline_color'); ?>" type="text"
						value="<?php echo $lin_outline_color; ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_outline_color != '' && $lin_outline_color != 'tag' && $lin_outline_color != 'tagbg') {echo '<span class="color" style="color: #' . $lin_outline_color . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}
							else {if($lin_outline_color == 'tag'){echo '<span class="color" style="background: #fff; padding: 0 1px; letter-spacing: 0;">original color</span>';}
								else {if($lin_outline_color == 'tagbg'){echo '<span class="color" style="background: #fff; padding: 0 1px; letter-spacing: 0;">original bg</span>';};}
							};
						?>
					</div>
				</label>
				<div class="gradient-div">	
					<label style="margin: 0 3px 0 0;" for="<?=$this->get_field_id('lin_weight_gradient_1'); ?>">
						Gradient<br>Color: 0
						<br>
					<span class="hash">#</span>
						<div class="siwraper">
							<input title="The color gradient used for coloring tags, backgrounds, etc. when using a color-based weight mode. 
							Start with the color for the &#34;heaviest&#34; tag at 0, and ending at 1 with the least weighty tag color. 
							All 4 Gradient values must be entered to take effect."
							class="colors" id="<?=$this->get_field_id('lin_weight_gradient_1'); ?>"
							name="<?=$this->get_field_name('lin_weight_gradient_1'); ?>" type="text"
							value="<?php echo $lin_weight_gradient_1 ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_weight_gradient_1 != '') {echo '<span class="color" style="color: #' . $lin_weight_gradient_1 . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}; 
						?>
						</div>
					</label>
					<label style="margin: 0 3px 0 0;" for="<?=$this->get_field_id('lin_weight_gradient_2'); ?>">
						Gradient<br>Color: 0.33
						<br>
					<span class="hash">#</span>
						<div class="siwraper">
							<input title="The color gradient used for coloring tags, backgrounds, etc. when using a color-based weight mode. 
							Start with the color for the &#34;heaviest&#34; tag at 0, and ending at 1 with the least weighty tag color. 
							All 4 Gradient values must be entered to take effect."
							class="colors" id="<?=$this->get_field_id('lin_weight_gradient_2'); ?>"
							name="<?=$this->get_field_name('lin_weight_gradient_2'); ?>" type="text"
							value="<?php echo $lin_weight_gradient_2 ?>" onblur="hex_val_check(this, this.value)" />
						<?php 
							if($lin_weight_gradient_2 != '') {echo '<span class="color" style="color: #' . $lin_weight_gradient_2 . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}; 
						?>
						</div>
					</label>
					<label style="margin: 0 3px 0 0;" for="<?=$this->get_field_id('lin_weight_gradient_3'); ?>">
						Gradient<br>Color: 0.67
						<br>
					<span class="hash">#</span>
						<div class="siwraper">
							<input title="The color gradient used for coloring tags, backgrounds, etc. when using a color-based weight mode. 
							Start with the color for the &#34;heaviest&#34; tag at 0, and ending at 1 with the least weighty tag color. 
							All 4 Gradient values must be entered to take effect."
							class="colors" id="<?=$this->get_field_id('lin_weight_gradient_3'); ?>"
							name="<?=$this->get_field_name('lin_weight_gradient_3'); ?>" type="text"
							value="<?php echo $lin_weight_gradient_3 ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_weight_gradient_3 != '') {echo '<span class="color" style="color: #' . $lin_weight_gradient_3 . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}; 
						?>
						</div>
					</label>
					<label style="margin: 0 3px 0 0;" for="<?=$this->get_field_id('lin_weight_gradient_4'); ?>">
						Gradient<br>Color: 1
						<br>
						<span class="hash">#</span>
						<div class="siwraper" style="margin: 0;">
							<input title="The color gradient used for coloring tags, backgrounds, etc. when using a color-based weight mode. 
							Start with the color for the &#34;heaviest&#34; tag at 0, and ending at 1 with the least weighty tag color. 
							All 4 Gradient values must be entered to take effect."
							class="colors" id="<?=$this->get_field_id('lin_weight_gradient_4'); ?>"
							name="<?=$this->get_field_name('lin_weight_gradient_4'); ?>" type="text"
							value="<?php echo $lin_weight_gradient_4 ?>" onblur="hex_val_check(this, this.value)" /> 
						<?php 
							if($lin_weight_gradient_4 != '') {echo '<span class="color" style="color: #' . $lin_weight_gradient_4 . ';">&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;&#9608;</span>';}; 
						?>
						</div>
					</label>
					<label style="padding: 15px 0 0 8px; text-align: center;">
						<a style="color:#dc143c; font-weight: bold;" href="http://www.goat1000.com/tagcanvas-weighted.php" target="_blank">Gradient<br>Examples</a>
					</label>
				</div>
			</div>
		</div>		
		<div class="divider"></div>
		<div style="float: left;">
			<span style="padding-bottom: 5px;">FONTS</span>
			<div class="fonts" style="padding-top: 5px;">
				<label title="48 Web Safe Fonts for the tag text, grouped in 5 families:<br><span style='border: 1px solid #bbb; color: #f1f1f1;'>&#9608;</span> - Sans Serif (21);<br>
				<span style='border: 1px solid #bbb; color: #fff;'>&#9608;</span> - Serif (18);<br><span style='border: 1px solid #bbb; color: #f1f1f1;'>&#9608;</span> - Monospaced (6);<br>
				<span style='border: 1px solid #bbb; color: #fff;'>&#9608;</span> - Fantasy (2);<br><span style='border: 1px solid #bbb; color: #f1f1f1;'>&#9608;</span> - Script (1)." 
				style="float: left; margin: 0 0 5px 0;" for="<?=$this->get_field_id('all_menu_font'); ?>">
					Web Safe Font
					<br>
					<select id="<?=$this->get_field_id('lin_text_font'); ?>" name="<?=$this->get_field_name('lin_text_font'); ?>">
						<option style="background: #f1f1f1; font-family: Arial;" value="Arial" <?php if( $lin_text_font == "Arial" ){ echo ' selected'; } ?>>Arial</option>
						<option style="background: #f1f1f1; font-family: Arial Black;" value="Arial Black" <?php if( $lin_text_font == "Arial Black" ){ echo ' selected'; } ?>>Arial Black</option>
						<option style="background: #f1f1f1; font-family: Arial Narrow;" value="Arial Narrow" <?php if( $lin_text_font == "Arial Narrow" ){ echo ' selected'; } ?>>Arial Narrow</option>
						<option style="background: #f1f1f1; font-family: Avant Garde;" value="Avant Garde" <?php if( $lin_text_font == "Avant Garde" ){ echo ' selected'; } ?>>Avant Garde</option>
						<option style="background: #f1f1f1; font-family: Calibri;" value="Calibri" <?php if( $lin_text_font == "Calibri" ){ echo ' selected'; } ?>>Calibri</option>
						<option style="background: #f1f1f1; font-family: Candara;" value="Candara" <?php if( $lin_text_font == "Candara" ){ echo ' selected'; } ?>>Candara</option>
						<option style="background: #f1f1f1; font-family: Century Gothic;" value="Century Gothic" <?php if( $lin_text_font == "Century Gothic" ){ echo ' selected'; } ?>>Century Gothic</option>
						<option style="background: #f1f1f1; font-family: Comic Sans MS;" value="Comic Sans MS" <?php if( $lin_text_font == "Comic Sans MS" ){ echo ' selected'; } ?>>Comic Sans MS</option>
						<option style="background: #f1f1f1; font-family: Franklin Gothic Medium;" value="Franklin Gothic Medium" <?php if( $lin_text_font == "Franklin Gothic Medium" ){ echo ' selected'; } ?>>Franklin Gothic Medium</option>
						<option style="background: #f1f1f1; font-family: Futura;" value="Futura" <?php if( $lin_text_font == "Futura" ){ echo ' selected'; } ?>>Futura</option>
						<option style="background: #f1f1f1; font-family: Geneva;" value="Geneva" <?php if( $lin_text_font == "Geneva" ){ echo ' selected'; } ?>>Geneva</option>
						<option style="background: #f1f1f1; font-family: Gill Sans;" value="Gill Sans" <?php if( $lin_text_font == "Gill Sans" ){ echo ' selected'; } ?>>Gill Sans</option>
						<option style="background: #f1f1f1; font-family: Helvetica;" value="Helvetica" <?php if( $lin_text_font == "Helvetica" ){ echo ' selected'; } ?>>Helvetica</option>
						<option style="background: #f1f1f1; font-family: Impact;" value="Impact" <?php if( $lin_text_font == "Impact" ){ echo ' selected'; } ?>>Impact</option>
						<option style="background: #f1f1f1; font-family: Lucida Grande;" value="Lucida Grande" <?php if( $lin_text_font == "Lucida Grande" ){ echo ' selected'; } ?>>Lucida Grande</option>
						<option style="background: #f1f1f1; font-family: Lucida Sans Unicode;" value="Lucida Sans Unicode" <?php if( $lin_text_font == "Lucida Sans Unicode" ){ echo ' selected'; } ?>>Lucida Sans Unicode</option>
						<option style="background: #f1f1f1; font-family: Optima;" value="Optima" <?php if( $lin_text_font == "Optima" ){ echo ' selected'; } ?>>Optima</option>
						<option style="background: #f1f1f1; font-family: Segoe UI;" value="Segoe UI" <?php if( $lin_text_font == "Segoe UI" ){ echo ' selected'; } ?>>Segoe UI</option>
						<option style="background: #f1f1f1; font-family: Tahoma;" value="Tahoma" <?php if( $lin_text_font == "Tahoma" ){ echo ' selected'; } ?>>Tahoma</option>
						<option style="background: #f1f1f1 font-family: Trebuchet MS;" value="Trebuchet MS" <?php if( $lin_text_font == "Trebuchet MS" ){ echo ' selected'; } ?>>Trebuchet MS</option>
						<option style="background: #f1f1f1 font-family: Verdana;" value="Verdana" <?php if( $lin_text_font == "Verdana" ){ echo ' selected'; } ?>>Verdana</option>
						<option style="font-family: Baskerville;" value="Baskerville" <?php if( $lin_text_font == "Baskerville" ){ echo ' selected'; } ?>>Baskerville</option>
						<option style="font-family: Big Caslon;" value="Big Caslon" <?php if( $lin_text_font == "Big Caslon" ){ echo ' selected'; } ?>>Big Caslon</option>
						<option style="font-family: Bodoni MT;" value="Bodoni MT" <?php if( $lin_text_font == "Bodoni MT" ){ echo ' selected'; } ?>>Bodoni MT</option>
						<option style="font-family: Book Antiqua;" value="Book Antiqua" <?php if( $lin_text_font == "Book Antiqua" ){ echo ' selected'; } ?>>Book Antiqua</option>
						<option style="font-family: Calisto MT;" value="Calisto MT" <?php if( $lin_text_font == "Calisto MT" ){ echo ' selected'; } ?>>Calisto MT</option>
						<option style="font-family: Cambria;" value="Cambria" <?php if( $lin_text_font == "Cambria" ){ echo ' selected'; } ?>>Cambria</option>
						<option style="font-family: Didot;" value="Didot" <?php if( $lin_text_font == "Didot" ){ echo ' selected'; } ?>>Didot</option>
						<option style="font-family: Garamond;" value="Garamond" <?php if( $lin_text_font == "Garamond" ){ echo ' selected'; } ?>>Garamond</option>
						<option style="font-family: Georgia;" value="Georgia" <?php if( $lin_text_font == "Georgia" ){ echo ' selected'; } ?>>Georgia</option>
						<option style="font-family: Goudy Old Style;" value="Goudy Old Style" <?php if( $lin_text_font == "Goudy Old Style" ){ echo ' selected'; } ?>>Goudy Old Style</option>
						<option style="font-family: Hoefler Text;" value="Hoefler Text" <?php if( $lin_text_font == "Hoefler Text" ){ echo ' selected'; } ?>>Hoefler Text</option>
						<option style="font-family: Lucida Bright;" value="Lucida Bright" <?php if( $lin_text_font == "Lucida Bright" ){ echo ' selected'; } ?>>Lucida Bright</option>
						<option style="font-family: Palatino;" value="Palatino" <?php if( $lin_text_font == "Palatino" ){ echo ' selected'; } ?>>Palatino</option>
						<option style="font-family: Palatino Linotype;" value="Palatino Linotype" <?php if( $lin_text_font == "Palatino Linotype" ){ echo ' selected'; } ?>>Palatino Linotype</option>
						<option style="font-family: Perpetua;" value="Perpetua" <?php if( $lin_text_font == "Perpetua" ){ echo ' selected'; } ?>>Perpetua</option>
						<option style="font-family: Rockwell;" value="Rockwell" <?php if( $lin_text_font == "Rockwell" ){ echo ' selected'; } ?>>Rockwell</option>
						<option style="font-family: Rockwell Extra Bold;" value="Rockwell Extra Bold" <?php if( $lin_text_font == "Rockwell Extra Bold" ){ echo ' selected'; } ?>>Rockwell Extra Bold</option>
						<option style="font-family: Times New Roman;" value="Times New Roman" <?php if( $lin_text_font == "Times New Roman" ){ echo ' selected'; } ?>>Times New Roman</option>
						<option style="background: #f1f1f1; font-family: Andale Mono;" value="Andale Mono" <?php if( $lin_text_font == "Andale Mono" ){ echo ' selected'; } ?>>Andale Mono</option>
						<option style="background: #f1f1f1; font-family: Consolas;" value="Consolas" <?php if( $lin_text_font == "Consolas" ){ echo ' selected'; } ?>>Consolas</option>
						<option style="background: #f1f1f1; font-family: Courier New;" value="Courier New" <?php if( $lin_text_font == "Courier New" ){ echo ' selected'; } ?>>Courier New</option>
						<option style="background: #f1f1f1; font-family: Lucida Console;" value="Lucida Console" <?php if( $lin_text_font == "Lucida Console" ){ echo ' selected'; } ?>>Lucida Console</option>
						<option style="background: #f1f1f1; font-family: Lucida Sans Typewriter;" value="Lucida Sans Typewriter" <?php if( $lin_text_font == "Lucida Sans Typewriter" ){ echo ' selected'; } ?>>Lucida Sans Typewriter</option>
						<option style="background: #f1f1f1; font-family: Monaco;" value="Monaco" <?php if( $lin_text_font == "Monaco" ){ echo ' selected'; } ?>>Monaco</option>
						<option style="font-family: Copperplate;" value="Copperplate" <?php if( $lin_text_font == "Copperplate" ){ echo ' selected'; } ?>>Copperplate</option>
						<option style="font-family: Papyrus;" value="Papyrus" <?php if( $lin_text_font == "Papyrus" ){ echo ' selected'; } ?>>Papyrus</option>
						<option style="background: #f1f1f1; font-family: Brush Script MT;" value="Brush Script MT" <?php if( $lin_text_font == "Brush Script MT" ){ echo ' selected'; } ?>>Brush Script MT</option>
					</select>
				</label>
				<label title="<?= count($items) ?> Google Fonts for the tag text. The selected one overrides <span class='green'>Web Safe Font</span>." for="<?=$this->get_field_id('lin_google_font'); ?>">
					<a style="color:#dc143c; font-weight: bold;" href="https://www.google.com/fonts" target="_blank" title="See how they look like.">Google Font</a>
					<br>
					<select id="<?=$this->get_field_id('lin_google_font'); ?>" name="<?=$this->get_field_name('lin_google_font'); ?>">
						<option value="" <?php if($lin_google_font == ''){echo ' selected';} ?>></option>
<?php
						foreach ($items as $font){
							echo '<option value="'.$font->{'family'}.'"';			
								if ($lin_google_font == $font->{'family'}) {echo 'selected'; };
							echo '>'.$font->{'family'}.'</option>';
						}
 ?>
					</select>
				</label>
			</div>
		</div>
		<div class="divider"></div>
		<div style="float: left;">
			<span style="padding-bottom: 5px;">SPEED & TIME</span>
			<div>
				<div style="margin: 4px 7px 0 0; float: left; padding: 0 1px 1px 1px; border: 1px dotted #aaa; border-radius: 5px;" title="Starting rotation speed around axes with values for each one, e.g. <span class='green'>[0.5,-0.3, 0.1]</span>. Values are multiplied by <span class='green'>maxSpeed</span>.">
					Initial Speed [x, y, z]
					<br>
					<select id="<?=$this->get_field_id('lin_initial_x'); ?>" name="<?=$this->get_field_name('lin_initial_x'); ?>">
						<?php for($i=-100; $i<101; $i++){echo '<option id="lainx_' . $i . '" value="' . $i/100 . '"'; if($lin_initial_x==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>	
					</select><select id="<?=$this->get_field_id('lin_initial_y'); ?>" name="<?=$this->get_field_name('lin_initial_y'); ?>">
						<?php for($i=-100; $i<101; $i++){echo '<option id="lainy_' . $i . '" value="' . $i/100 . '"'; if($lin_initial_y==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>
					</select><select id="<?=$this->get_field_id('lin_initial_z'); ?>" name="<?=$this->get_field_name('lin_initial_z'); ?>">	
					<?php for($i=-100; $i<101; $i++){echo '<option id="lainz_' . $i . '" value="' . $i/100 . '"'; if($lin_initial_z==$i/100){echo ' selected';}; echo '>' . $i/100 . '</option>'; } ?>							
				</select>
				</div>
				<label style="padding: 5px 9px 0 0;" title="Minimal speed of rotation when mouse leaves canvas." for="<?=$this->get_field_id('lin_min_speed'); ?>">
					Min Speed
					<br>
					<select id="<?=$this->get_field_id('lin_min_speed'); ?>" name="<?=$this->get_field_name('lin_min_speed'); ?>">
						<?php for($i=0; $i<55; $i+=5){echo '<option id="limis_' . $i . '" value="' . $i/1000 . '"'; if($lin_min_speed==$i/1000){echo ' selected';}; echo '>' . $i/1000 . '</option>'; } ?>
					</select>
				</label>	
				<label style="padding: 5px 0 0;" title="Maximum speed of rotation: This setting is just a multiplier of speed." for="<?=$this->get_field_id('lin_max_speed'); ?>">
					Max Speed
					<br>
					<select id="<?=$this->get_field_id('lin_max_speed'); ?>" name="<?=$this->get_field_name('lin_max_speed'); ?>">
						<?php for($i=5; $i<105; $i+=5){echo '<option id="limas_' . $i . '" value="' . $i/1000 . '"'; if($lin_max_speed==$i/1000){echo ' selected';}; echo '>' . $i/1000 . '</option>'; } ?>
					</select>
				</label>
				<div class="thin-spacer"></div>
				<label title="If set to a number, the selected tag will move to the front in this many milliseconds before activating." for="<?=$this->get_field_id('lin_click_to_front'); ?>">
					Click to Front
					<br>
					<select id="<?=$this->get_field_id('lin_click_to_front'); ?>" name="<?=$this->get_field_name('lin_click_to_front'); ?>">
						<option id="lictf_0" value="null" <?php if( $lin_click_to_front == "null" ){ echo ' selected'; } ?>>off</option>
						<?php for($i=500; $i<2500; $i+=500){echo '<option id="lictf_' . $i . '" value="' . $i . '"'; if($lin_click_to_front==$i){echo ' selected';}; echo '>' . $i . '</option>'; } ?>
					</select>msec
				</label>
			</div>
		</div>	
	</div>