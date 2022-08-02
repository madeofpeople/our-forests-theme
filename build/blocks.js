/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

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
        name: 'parallax',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Cover', 'debtcollective'),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Cover image with background image.', 'the-territory'),
        keywords: [
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('image', 'debtcollective'),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('background', 'debtcollective'),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('hero', 'debtcollective')
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
                        content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Indigenous-led Monitoring and Surveillance', 'the-territory' )
                    }
                },
                {
                    name: 'core/paragraph',
                    attributes: {
                        className: 'cover__content',
                        textColor: 'white',
                        content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'We are calling on governments and businesses to work together to finance and empower indigenous-led monitoring for deforestation-free supply chains.', 'the-territory' )
                    }
                }
            ]
        },
    },
];

variations.forEach((variation) => {
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
        'core/cover',
        variation
    );
});


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
        name: 'testimonial',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Testimonial', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Large quote with background image.', 'the-territory'),
        category: 'media',
        icon: 'format-quote',
        keywords: [
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'quote', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'blockquote', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'callout', 'the-territory' )
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
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
        'site-functionality/tout',
        variation
    );
} );

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
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!********************************!*\
  !*** ./src/js/blocks/index.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variations__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variations */ "./src/js/blocks/variations/index.js");
/**
 * Gutenberg Block JS
 *
 * Import JS for Gutenberg blocks.
 */


})();

/******/ })()
;
//# sourceMappingURL=blocks.js.map