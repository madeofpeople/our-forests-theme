import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'donate',
        title: __( 'Donate', 'the-territory' ),
        description: __( 'Donate Link.', 'the-territory' ),
        category: 'media',
        icon: 'money-alt',
        keywords: [
            __( 'group', 'the-territory' ),
            __( 'link', 'the-territory' ),
            __( 'toutt', 'the-territory' )
        ],
        attributes: {
            className: 'donate-tout',
        },
        innerBlocks: [
            [
                'site-functionality/link-group',
                {
                    url: '#',
                    linkTarget: '_blank',
                    rel: '',
                    attributesForBlocks:{
                        title: '',
                        'data-vars-ga-label': '',
                        'data-vars-ga-category': ''
                    }
                },
                [
                    [
                        'core/group',
                        {
                            className: 'title__wrapper'
                        },
                        [
                            [
                                'core/heading',
                                {
                                    level: 4,
                                    className: 'tout__title',
                                    placeholder: __( 'Add Heading...', 'the-territory' )
                                },
                            ]
                        ]
                    ],
                    [
                        'core/image',
                        {
                            sizeSlug: 'large',
                            linkDestination: 'none',
                            className: 'link-group__image'
                        }
                    ]
                ],
            ]
        ],
        example : {
            attributes: {
                className: 'donate-tout',
            },
            innerBlocks: [
                {
                    name: 'site-functionality/link-group',
                    attributes: {
                        url: '#',
                        linkTarget: '_blank',
                        rel: '',
                        attributesForBlocks: {
                            title: '',
                            'data-vars-ga-label': '',
                            'data-vars-ga-category': ''
                        }
                    },
                    innerBlocks: [
                        {
                            name: 'core/group',
                            attributes: {
                                className: 'title__wrapper',
                            },
                            innerBlocks: [
                                {
                                    name: 'core/heading',
                                    attributes: {
                                        level: 4,
                                        className: 'tout__title',
                                        content: __( 'Donate to the Uru-eu-wau-wau Association', 'the-territory' ),
                                    },
                                }
                            ]
                        },
                        {
                            name: 'core/image',
                            attributes: {
                                className: 'tout__image',
                                sizeSlug: 'medium',
                                url: 'https://live.staticflickr.com/7271/6941148040_e7221059d9_b.jpg'
                            }
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
        'core/group',
        variation
    );
} );