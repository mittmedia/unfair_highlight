<?php global $site; global $blogs; global $highlight_blogs; ?>

<div class="wrap">
  <div id="icon-options-general" class="icon32"><br></div>
  <h2><?php _e( 'Unfair Highlight Settings' ); ?></h2>
    <table class="wp-list-table widefat" cellspacing="0">
      <thead>
      <tr>
        <th scope="col" id="description" class="manage-column column-description" style="">Position 1</th>
        <th scope="col" id="description" class="manage-column column-description" style="">Position 2</th>
        <th scope="col" id="description" class="manage-column column-description" style="">Position 3</th>
      </tr>
      </thead>
      <tbody id="the-list">
        <tr><td id="highlight-position-1"><?php echo $highlight_blogs[0]->path ?></td>
        <td id="highlight-position-2"><?php echo $highlight_blogs[1]->path ?></td>
        <td id="highlight-position-3"><?php echo $highlight_blogs[2]->path ?></td></tr>
      </body>
    </table>
    <br />

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
        echo "<tr><td>" . $blog->path . "</td><td><button>Position 1</button></td><td><button>Position 2</button></td><td><button>Position 3</button></td></tr>";
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