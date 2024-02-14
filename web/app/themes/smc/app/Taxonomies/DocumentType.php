<?php
/**
 *
 * Custom Taxonomies should be "registered"
 * in [themefolder]/config/posttypes.php
 */

namespace App\Taxonomies;


class DocumentType extends AbstractTaxonomy
{

    public static function getTermType(): string
    {
        return 'document-type';
    }

    /**
     * list out the slugs of all custom post types that use this taxonomy
     *
     * @return array
     */
    public static function getAssociatedPostTypes(): array
    {
      return ['reports', 'corporate-reports', 'policy-papers', 'guidance-regulation', 'research-stats'];
    }


    /**
     * Configure the Custom Taxonomy
     * See: https://generatewp.com/taxonomy/ for code generation
     *
     * @return array
     */
    public static function getTaxonomyConfig(): array
    {
        $labels = [
            'name'          => _x('Document Types', 'Taxonomy General name', 'app'),
            'singular_name' => _x('Document Type', 'Taxonomy singular name', 'app'),
            'menu_name'     => __('Document Types', 'app'),
        ];

        return [
            'labels'            => $labels,
            'public'            => true,
            'hierarchical'      => false,
            // Make TRUE f you want to be able to select a "Primary" taxonomy - requires Yoast
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => false,
            'show_in_rest'      => false,
        ];
    }

}
