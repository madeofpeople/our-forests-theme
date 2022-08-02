import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'parallax',
        title: __('Cover', 'debtcollective'),
        description: __('Cover image with background image.', 'the-territory'),
        keywords: [
            __('image', 'debtcollective'),
            __('background', 'debtcollective'),
            __('hero', 'debtcollective')
        ],
        isDefault: true,
        category: 'media',
        attributes: {
            isParallax: true,
            dimRatio: 0,
            url: 'https://images.unsplash.com/photo-1520991323542-c159d7282b9f',
            backgroundColor: 'rgba(128, 173, 108, 0.25)'
        },
        innerBlocks: [
            [
                'core/heading',
                {
                    className: 'cover__title',
                    level: 2,
                    textColor: 'white'
                },
            ]
        ],
        example: {
            attributes: {
                isParallax: true,
                dimRatio: 0,
                url: 'https://images.unsplash.com/photo-1520991323542-c159d7282b9f',
                backgroundColor: 'rgba(128, 173, 108, 0.25)'
            },
            innerBlocks: [
                {
                    name: 'core/heading',
                    attributes: {
                        className: 'cover__title',
                        level: 2,
                        textColor: 'white',
                        content: __( 'Indigenous-led Monitoring and Surveillance', 'the-territory' )
                    }
                },
                {
                    name: 'core/paragraph',
                    attributes: {
                        className: 'cover__content',
                        textColor: 'white',
                        content: __( 'We are calling on governments and businesses to work together to finance and empower indigenous-led monitoring for deforestation-free supply chains.', 'the-territory' )
                    }
                }
            ]
        },
    },
];

variations.forEach((variation) => {
    registerBlockVariation(
        'core/cover',
        variation
    );
});
