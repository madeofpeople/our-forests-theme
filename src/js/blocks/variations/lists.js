import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'list',
        title: __( 'Basic List', 'the-territory' ),
        description: __( 'Display a basic list.', 'the-territory' ),
        isDefault: true,
        icon: 'editor-ul',
        attributes: {
            className: 'basic',
            placeholder: __( 'Add list items ...', 'the-territory' )
        },
        example: {
            attributes: {
                className: 'basic',
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'bullet-list-columns',
        title: __( 'Columned Bullet List', 'the-territory' ),
        description: __( 'A list displayed in 2 columns.', 'the-territory' ),
        attributes: {
            className: 'bullet-list-columns',
            placeholder: __( 'Add list items ...', 'the-territory' )
        },
        icon: 'columns',
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'bullet-list',
        title: __( 'Bullet List', 'the-territory' ),
        description: __( 'A regular list, with fancy bullets.', 'the-territory' ),
        icon: 'list-view',
        attributes: {
            className: 'bullet-list',
            placeholder: __( 'Add list items ...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'icon-list',
        title: __( 'Icon List', 'the-territory' ),
        description: __( 'A regular with icon.', 'the-territory' ),
        icon: 'star-filled',
        attributes: {
            className: 'icon-list',
            placeholder: __( 'Add list items ...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/list',
        variation
    );
} );