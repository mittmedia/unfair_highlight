<?php global $site; global $blogs; global $highlight_blogs; 
      echo "<script type='text/javascript' src='" . WP_PLUGIN_URL . "/unfair_highlight/assets/build/javascripts/application.js'></script>";
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"><br></div>
  <h2><?php _e( 'Unfair Highlight Settings' ); ?></h2>
  <p>Välj vilka bloggar som ska visas bland utvalda bloggar</p>
    <form action='/wp-admin/network/settings.php?page=unfair_highlight_settings' method='post'>
      <input type="hidden" name='site[sitemeta][blog_highlight_1][meta_value]' id='site_sitemeta_blog_highlight_1' value="<?php echo $highlight_blogs[0]->blog_id ?>" />
      <input type="hidden" name='site[sitemeta][blog_highlight_2][meta_value]' id='site_sitemeta_blog_highlight_2' value="<?php echo $highlight_blogs[1]->blog_id ?>" />
      <input type="hidden" name='site[sitemeta][blog_highlight_3][meta_value]' id='site_sitemeta_blog_highlight_3' value="<?php echo $highlight_blogs[2]->blog_id ?>" />
    
      <table class="wp-list-table widefat" cellspacing="0">
        <thead>
          
        <tr>
          <th scope="col" id="description" class="manage-column column-description" style="width: 33%">Position 1</th>
          <th scope="col" id="description" class="manage-column column-description" style="width: 33%">Position 2</th>
          <th scope="col" id="description" class="manage-column column-description" style="width: 33%">Position 3</th>
        </tr>
        </thead>
        <tbody id="the-list">
          <tr><td id="highlight-position-1"><?php echo $highlight_blogs[0]->path ?></td>
          <td id="highlight-position-2"><?php echo $highlight_blogs[1]->path ?></td>
          <td id="highlight-position-3"><?php echo $highlight_blogs[2]->path ?></td>
        </body>
      </table>
      <p class="submit"><input type="submit" name="submit" id="submit" class="button-primary" value="Spara ändringar"></p>
    </form>
    <table class="wp-list-table widefat" cellspacing="0">
    <thead>
    <tr>
      <th scope="col" id="description" class="manage-column column-description" style="">Blogg</th>
      <th scope="col" id="description" colspan="3" class="manage-column column-description" style="">Position</th>
    </tr>
    </thead>
    <tbody id="the-list">
  <?php
      foreach ( $blogs as $blog ) {
        //echo $blog->path;
        ?>
<tr>
<td><?php echo $blog->path ?></td><td><button onclick="window.unfair_highlight.fill_position(1, '<?php echo $blog->path ?>', <?php echo $blog->blog_id ?>)" class='button_fill_position'>Position 1</button></td>
<td><button onclick="window.unfair_highlight.fill_position(2, '<?php echo $blog->path ?>', <?php echo $blog->blog_id ?>)" class='button_fill_position'>Position 2</button></td>
<td><button onclick="window.unfair_highlight.fill_position(3, '<?php echo $blog->path ?>', <?php echo $blog->blog_id ?>)" class='button_fill_position'>Position 3</button></td>
</tr>
        <?php
      }
  /*$content = array(
    array(
      'title' => 'Footer Content',
      'name' => $site->sitemeta->footer_content->meta_key,
      'type' => 'textarea',
      'object' => $site->sitemeta->footer_content,
      'default_value' => $site->sitemeta->footer_content->meta_value,
      'key' => 'meta_value'
    )
  );
  */
  #\WpMvc\FormHelper::render_form( $site, $content );

  ?>
  </tbody>
  </table>
</div>