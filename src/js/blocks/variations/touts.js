import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'testimonial',
        title: __( 'Testimonial', 'the-territory' ),
        description: __('Large quote with background image.', 'the-territory'),
        category: 'media',
        icon: 'format-quote',
        keywords: [
            __( 'quote', 'the-territory' ),
            __( 'blockquote', 'the-territory' ),
            __( 'callout', 'the-territory' )
        ],
        attributes: {
            className: 'testimonial',
        },
        innerBlocks: [
            [
                'core/cover',
                {
                    isParallax: true,
                    dimRatio: 0,
                    url: 'https://images.unsplash.com/photo-1437149853762-a9c0fe22c9d0',
                    backgroundColor: 'rgba(128, 173, 108, 0.25)'
                },
                [
                    [
                        'core/group',
                        {
                            className: 'tout__content'
                        },
                        [
                            [
                                'core/quote',
                                {
                                    className: 'content',
                                    textColor: 'white'
                                },
                            ]
                        ]
                    ]
                ],
            ]
        ],
        example: {
            attributes: {},
            innerBlocks: [
                {
                    name: 'core/cover',
                    attributes: {
                        isParallax: true,
                        dimRatio: 0,
                        url: 'https://images.unsplash.com/photo-1437149853762-a9c0fe22c9d0',
                        backgroundColor: 'rgba(128, 173, 108, 0.25)'
                    },
                    innerBlocks: [
                        {
                            name: 'core/quote',
                            attributes: {
                                className: 'content',
                                citation: __( 'Bitaté Uru-eu-wau-wau', 'the-territory' )
                            },
                            innerBlocks: [
                                {
                                    name: 'core/paragraph',
                                    attributes: {
                                        content: __( '“historically, our existence has been marginalized and erased. through this film we\'re changing that.”', 'the-territory' ),
                                    },
                                },
                            ],
        
                        }
                    ]
                }
            ]
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    },
];
variations.forEach( ( variation ) => {
    registerBlockVariation(
        'site-functionality/tout',
        variation
    );
} );