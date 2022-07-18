import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'paragraph',
        title: __( 'Paragraph', 'the-territory' ),
        description: __( 'A standard paragraph.', 'the-territory' ),
        isDefault: true,
        category: 'text',
        keywords: [
            __( 'intro', 'the-territory' ),
            __( 'paragraph', 'the-territory' ),
            __( 'sentence', 'the-territory' )
        ],
        icon: 'editor-alignleft',
        attributes: {
            className: 'ptag',
            placeholder: __( 'Add content...', 'the-territory' )
        },
        example: {
            attributes: {
                content: __( 'This is a bock for displaying the opening paragraph, the big idea, the tl;dr.', 'the-territory' )
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    },
    {
        name: 'lede',
        title: __( 'Lede', 'the-territory' ),
        description: __( 'Add opening sentence or paragraph.', 'the-territory' ),
        icon: 'editor-justify',
        attributes: {
            className: 'lede',
            placeholder: __( 'Add content...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/paragraph',
        variation
    );
} );
