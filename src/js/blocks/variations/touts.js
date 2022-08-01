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
    {
        name: 'button',
        title: __( 'Button Tout', 'the-territory' ),
        description: __('Button with Background Image and Text.', 'the-territory'),
        category: 'media',
        icon: 'button',
        keywords: [
            __( 'background', 'the-territory' ),
            __( 'cta', 'the-territory' ),
            __( 'button', 'the-territory' )
        ],
        attributes: {
            className: 'tout button',
        },
        innerBlocks: [
            [
                'core/heading',
                {
                    level: 3,
                    className: 'tout__title',
                    placeholder: __( 'Add Heading...', 'the-territory' ),
                },
                
            ],
            [
                'core/image',
                {
                    className: 'tout__image',
                    sizeSlug: 'full',
                },
                
            ],
            [
                'core/paragraph',
                {
                    className: 'tout__content',
                    placeholder: __( 'Add content...', 'the-territory' ),
                },
                
            ]
        ],
        example: {
            attributes: {
                "url": "#"
            },
            innerBlocks: [
                {
                    name: 'core/heading',
                    attributes: {
                        level: 3,
                        className: 'tout__title',
                        placeholder: __( 'Add Heading...', 'the-territory' ),
                        content: __( 'Donate to the Uru-eu-WAU-WAU Association', 'the-territory' ),
                    },
                },
                {
                    name: 'core/image',
                    attributes: {
                        className: 'tout__image',
                        sizeSlug: 'full',
                        url: 'https://images.unsplash.com/photo-1617573211120-1165b16c2900',
                    },
                },
                {
                    name: 'core/paragraph',
                    attributes: {
                        className: 'tout__content',
                        placeholder: __( 'Add content...', 'the-territory' ),
                        content: __( 'The Uru-eu-wau-wau Association of the Jupaú people defends a critical area of over 6,000 square miles of pristine rainforest. Help support Bitaté and his community.', 'the-territory' ),
                    },
                }
            ]
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    }
];
variations.forEach( ( variation ) => {
    registerBlockVariation(
        'site-functionality/tout',
        variation
    );
} );