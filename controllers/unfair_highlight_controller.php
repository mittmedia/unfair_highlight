<?php

namespace UnfairHighlight
{
  class UnfairHighlightController extends \WpMvc\BaseController
  {
    public function index()
    {
      global $site;
      global $blogs;
      global $highlight_blogs;
      global $unfair_highlight_app;

      $site = \WpMvc\Site::find( 1 );
      $blogs = \WpMvc\Blog::all( false );
      #$this->create_attribute_if_not_exists( $site, 'footer_content' );

      if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $site->takes_post( $_POST['site'] );

        $site->save();
      }

      $highlight_blogs = array(
        \WpMvc\Blog::find( $site->sitemeta->blog_highlight_1->meta_value, false ),
        \WpMvc\Blog::find( $site->sitemeta->blog_highlight_2->meta_value, false ),
        \WpMvc\Blog::find( $site->sitemeta->blog_highlight_3->meta_value, false )
      );

      $this->render( $this, "index" );
      
    }

    private function create_attribute_if_not_exists( &$site, $attribute )
    {
      if ( ! isset( $site->sitemeta->{$attribute} ) ) {
        $site->sitemeta->{$attribute} = \WpMvc\SiteMeta::virgin();
        $site->sitemeta->{$attribute}->site_id = $site->id;
        $site->sitemeta->{$attribute}->meta_key = "$attribute";
        $site->sitemeta->{$attribute}->meta_value = "";
        $site->sitemeta->{$attribute}->save();
      }
    }
  }
}
