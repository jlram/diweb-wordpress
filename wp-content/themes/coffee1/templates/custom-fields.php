<?php

function extra_profile_fields( $user ) { ?>
    <h3>Social media:</h3>
    <table class="form-table">
        <tr>
            <th><label for="twitter">Twitter</label></th>
            
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Twitter username.</span>
            </td>
        </tr>
        <tr>
            <th><label for="twitter">Facebook</label></th>
            
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Facebook page.</span>
            </td>
        </tr>
        <tr>
            <th><label for="linkedin">Linkedin</label></th>
            
            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Linkedin page.</span>
            </td>
        </tr>
    </table>
    
    <h3>Profile pic:</h3>
    <table class="form-table">
        <tr>
            <th><label for="profilepic">Profile pic</label></th>
            <td>
                <input type="file" name="profilepic" id="profilepic"/> <br>
                <span class="description">Please enter your profile pic.</span>
            </td>
        </tr>
    </table>
    
    <h3>Personal skills:</h3>
    <table class="form-table">
        <tr>
            <th><label for="skills">Javascript</label></th>
            <td>
                <input type="text" name="jsskills" id="jsskills"/>
                <span class="description">Please enter your javascript skills.</span>
            </td>
        </tr>
        <tr>
            <th><label for="skills">HTML</label></th>
            <td>
                <input type="text" name="htmlskills" id="htmlskills"/>
                <span class="description">Please enter your html skills.</span>
            </td>
        </tr>
        <tr>
            <th><label for="skills">PHP</label></th>
            <td>
                <input type="text" name="phpskills" id="phpskills"/>
                <span class="description">Please enter your php skills.</span>
            </td>
        </tr>
        <tr>
            <th><label for="skills">Wordpress</label></th>
            <td>
                <input type="text" name="wordpressskills" id="wordpressskills"/>
                <span class="description">Please enter your Wordpress skills.</span>
            </td>
        </tr>
    </table>
    
<?php 
}

add_action( 'show_user_profile', 'extra_profile_fields' );
add_action( 'edit_user_profile', 'extra_profile_fields' );

function save_extra_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) return false;
    update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
    update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
    update_usermeta( $user_id, 'linkedin', $_POST['linkedin'] );
     
    update_usermeta( $user_id, 'profilepic', $_POST['profilepic'] );
    
    update_usermeta( $user_id, 'jsskills', $_POST['jsskills'] );
    update_usermeta( $user_id, 'htmlskills', $_POST['htmlskills'] );
    update_usermeta( $user_id, 'phpskills', $_POST['phpskills'] );
    update_usermeta( $user_id, 'wordpressskills', $_POST['wordpressskills'] );
}

add_action( 'personal_options_update', 'save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );