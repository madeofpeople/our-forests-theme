import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'testimonial',
        title: __('Testimonial', 'debtcollective'),
        description: __('Large quote with background image.', 'the-territory'),
        keywords: [
            __('image', 'debtcollective'),
            __('quote', 'debtcollective'),
            __('callout', 'debtcollective')
        ],
        category: 'media',
        icon: 'format-quote',
        attributes: {
            className: 'testimonial',
            type: 'image',
            parallax: 'scroll',
            parallaxSpeed: 0.25,
            parallaxMobile: true,
            ghostkitClassname: 'testimonial-parallax',
            backgroundColor: 'rgba(128, 173, 108, 0.25)'
        },
        innerBlocks: [
            [
                'core/quote',
                {
                    className: 'content',
                    textColor: 'white'
                },
            ]
        ],
        example: {
            attributes: {
                type: 'image',
                image: 129,
                imageTag: '%3Cimg%20src%3D%22https%3A%2F%2Fthe-territory.test%2Fwp-content%2Fuploads%2F2022%2F07%2Fbackground-7.jpg%22%20class%3D%22wp-image-129%20jarallax-img%22%20width%3D%224096%22%20height%3D%222160%22%20%2F%3E',
                parallax: 'scroll',
                parallaxSpeed: 0.25,
                parallaxMobile: true,
                ghostkitStyles: {},
                ghostkitClassname: 'testimonial-parallax',
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
        },
    },
];

if ( getBlockType( 'nk/awb' ) ) {
    variations.forEach((variation) => {
        registerBlockVariation(
            'nk/awb',
            variation
        );
    });
}
