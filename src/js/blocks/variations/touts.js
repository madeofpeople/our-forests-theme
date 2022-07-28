import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'parallax-text-overlay',
        title: __( 'Tout - Parallax Background', 'the-territory' ),
        description: __( 'A large tout with parallax background and text overlay.', 'the-territory' ),
        category: 'design',
        keywords: [
            __( 'tout', 'the-territory' ),
            __( 'image', 'the-territory' ),
            __( 'callout', 'the-territory' )
        ],
        icon: 'format-image',
        attributes: {
            className: 'tout parallax-text-overlay',
        },
        innerBlocks: [
            [
                'nk/awb',
                {
                    type: 'image',
                    parallax: 'scroll',
                    parallaxSpeed: 0.25,
                    parallaxMobile: true,
                    ghostkitClassname: 'testimonial-parallax',
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
                                'core/heading',
                                {
                                    placeholder: __( 'Add Heading...', 'the-territory' ),
                                    level: 3
                                }
                            ],
                            [
                                'core/paragraph',
                                {
                                    placeholder: __( 'Add content...', 'the-territory' )
                                }
                            ],
                            [
                                'core/buttons',
                                {},
                                [
                                    [
                                        'core/button',
                                        {
                                            placeholder: __( 'Add Button Text...', 'the-territory' )
                                        }
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
            ]
        ],
        example: {
            attributes: {
                type: 'image',
                imageTag: '%3Cimg%20src%3D%22https%3A%2F%2Fthe-territory.test%2Fwp-content%2Fuploads%2F2022%2F07%2Fbackground-7.jpg%22%20class%3D%22wp-image-129%20jarallax-img%22%20width%3D%224096%22%20height%3D%222160%22%20%2F%3E',
                parallax: 'scroll',
                parallaxSpeed: 0.25,
                parallaxMobile: true,
                ghostkitClassname: 'testimonial-parallax',
                backgroundColor: 'rgba(128, 173, 108, 0.25)',
            },
            innerBlocks: [
                {
                    name: 'core/group',
                    attributes: {
                        className: 'tout__content',
                    },
                    innerBlocks: [
                        {
                            name: 'core/paragraph',
                            attributes: {
                                content: __( 'To protect the Earth from climate catastrophe we need to fight back against deforestation. Stand with us to demand that national, regional and international politicians and businesses respect and protect the land and rights of Indigenous Peoples.', 'the-territory' )
                            }
                        },
                        {
                            name: 'core/heading',
                            attributes: {
                                content: __( 'Indigenous-led Monitoring and Surveillance', 'the-territory' ),
                                level: 3
                            }
                        },
                        {
                            name: 'core/paragraph',
                            attributes: {
                                content: __( 'We are calling on governments and businesses to work together to finance and empower indigenous-led monitoring for deforestation-free supply chains.', 'the-territory' )
                            }
                        },
                        {
                            name: 'core/buttons',
                            attributes: {},
                            innerBlocks: [
                                {
                                    name: 'core/button',
                                    attributes: {
                                        text:  __( 'Find Out More and Support Our Call for Action', 'the-territory' ),
                                        url: '#'
                                    }
                                }
                            ]
                        }
                    ]
                }
            ],
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    }
];
if ( getBlockType( 'nk/awb' ) && getBlockType( 'site-functionality/tout' ) ) {
    variations.forEach( ( variation ) => {
        registerBlockVariation(
            'site-functionality/tout',
            variation
        );
    } );
}
