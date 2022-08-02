/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/blocks/index.js":
/*!********************************!*\
  !*** ./src/js/blocks/index.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variations__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variations */ "./src/js/blocks/variations/index.js");
/**
 * Gutenberg Block JS
 *
 * Import JS for Gutenberg blocks.
 */



/***/ }),

/***/ "./src/js/blocks/variations/index.js":
/*!*******************************************!*\
  !*** ./src/js/blocks/variations/index.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _lists__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lists */ "./src/js/blocks/variations/lists.js");
/* harmony import */ var _paragraph__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./paragraph */ "./src/js/blocks/variations/paragraph.js");
/* harmony import */ var _parallax__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./parallax */ "./src/js/blocks/variations/parallax.js");
/* harmony import */ var _touts__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./touts */ "./src/js/blocks/variations/touts.js");






/***/ }),

/***/ "./src/js/blocks/variations/lists.js":
/*!*******************************************!*\
  !*** ./src/js/blocks/variations/lists.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);



const variations = [
    {
        name: 'list',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Basic List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Display a basic list.', 'the-territory' ),
        isDefault: true,
        icon: 'editor-ul',
        attributes: {
            className: 'basic',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
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
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Columned Bullet List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A list displayed in 2 columns.', 'the-territory' ),
        attributes: {
            className: 'bullet-list-columns',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
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
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Bullet List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A regular list, with fancy bullets.', 'the-territory' ),
        icon: 'list-view',
        attributes: {
            className: 'bullet-list',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'icon-list',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Icon List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A regular with icon.', 'the-territory' ),
        icon: 'star-filled',
        attributes: {
            className: 'icon-list',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    }
];

variations.forEach( ( variation ) => {
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
        'core/list',
        variation
    );
} );

/***/ }),

/***/ "./src/js/blocks/variations/paragraph.js":
/*!***********************************************!*\
  !*** ./src/js/blocks/variations/paragraph.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);



const variations = [
    {
        name: 'paragraph',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Paragraph', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A standard paragraph.', 'the-territory' ),
        isDefault: true,
        category: 'text',
        keywords: [
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'intro', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'paragraph', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'sentence', 'the-territory' )
        ],
        icon: 'editor-alignleft',
        attributes: {
            className: 'ptag',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add content...', 'the-territory' )
        },
        example: {
            attributes: {
                content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'This is a bock for displaying the opening paragraph, the big idea, the tl;dr.', 'the-territory' )
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
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Lede', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add opening sentence or paragraph.', 'the-territory' ),
        icon: 'editor-justify',
        attributes: {
            className: 'lede',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add content...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
    }
];

variations.forEach( ( variation ) => {
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
        'core/paragraph',
        variation
    );
} );


/***/ }),

/***/ "./src/js/blocks/variations/parallax.js":
/*!**********************************************!*\
  !*** ./src/js/blocks/variations/parallax.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);



const variations = [
    {
        name: 'testimonial',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Testimonial', 'debtcollective'),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Large quote with background image.', 'the-territory'),
        keywords: [
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('image', 'debtcollective'),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('quote', 'debtcollective'),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('callout', 'debtcollective')
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
                        citation: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Bitaté Uru-eu-wau-wau', 'the-territory' )
                    },
                    innerBlocks: [
                        {
                            name: 'core/paragraph',
                            attributes: {
                                content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( '“historically, our existence has been marginalized and erased. through this film we\'re changing that.”', 'the-territory' ),
                            },
                        },
                    ],

                }
            ]
        },
    },
];

if ( (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.getBlockType)( 'nk/awb' ) ) {
    variations.forEach((variation) => {
        (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
            'nk/awb',
            variation
        );
    });
}


/***/ }),

/***/ "./src/js/blocks/variations/touts.js":
/*!*******************************************!*\
  !*** ./src/js/blocks/variations/touts.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);



const variations = [
    {
        name: 'parallax-text-overlay',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Tout - Parallax Background', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A large tout with parallax background and text overlay.', 'the-territory' ),
        category: 'design',
        keywords: [
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'tout', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'image', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'callout', 'the-territory' )
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
                                    placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add Heading...', 'the-territory' ),
                                    level: 3
                                }
                            ],
                            [
                                'core/paragraph',
                                {
                                    placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add content...', 'the-territory' )
                                }
                            ],
                            [
                                'core/buttons',
                                {},
                                [
                                    [
                                        'core/button',
                                        {
                                            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add Button Text...', 'the-territory' )
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
                                content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'To protect the Earth from climate catastrophe we need to fight back against deforestation. Stand with us to demand that national, regional and international politicians and businesses respect and protect the land and rights of Indigenous Peoples.', 'the-territory' )
                            }
                        },
                        {
                            name: 'core/heading',
                            attributes: {
                                content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Indigenous-led Monitoring and Surveillance', 'the-territory' ),
                                level: 3
                            }
                        },
                        {
                            name: 'core/paragraph',
                            attributes: {
                                content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'We are calling on governments and businesses to work together to finance and empower indigenous-led monitoring for deforestation-free supply chains.', 'the-territory' )
                            }
                        },
                        {
                            name: 'core/buttons',
                            attributes: {},
                            innerBlocks: [
                                {
                                    name: 'core/button',
                                    attributes: {
                                        text:  (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Find Out More and Support Our Call for Action', 'the-territory' ),
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
if ( (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.getBlockType)( 'nk/awb' ) && (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.getBlockType)( 'site-functionality/tout' ) ) {
    variations.forEach( ( variation ) => {
        (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
            'site-functionality/tout',
            variation
        );
    } );
}


/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

module.exports = window["wp"]["i18n"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
var __webpack_exports__ = {};
/*!**************************!*\
  !*** ./src/js/editor.js ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks */ "./src/js/blocks/index.js");
/**
 * Site JS
 */


})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!******************************!*\
  !*** ./src/scss/editor.scss ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin

})();

/******/ })()
;
//# sourceMappingURL=editor.js.map