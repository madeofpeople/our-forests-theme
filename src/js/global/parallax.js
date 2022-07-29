import { jarallax } from 'jarallax';

console.log( 'jarallax invocation', jarallax );

const jarallaxParams = {
	type: 'scroll',
	speed: 0.85,
	imgSize: 'cover',
	imgPosition: '50% 50%',
};

function initParallaxSections() {
	const parallaxSections = document.querySelectorAll(
		'.laxxx'
		// '.wp-block-getwid-section.parallax'
	);
	parallaxSections.forEach( function ( el ) {
		console.log( 'el', el );
		el.classList.add( 'jarallax' );
		el.querySelector( '.wp-block-cover__image-background' ).classList.add(
			'jarallax-img'
		);
	} );
	jarallax( parallaxSections, jarallaxParams );
}

document.addEventListener( 'DOMContentLoaded', function () {
	// if ( document.querySelector( '.wp-block-getwid-section.parallax' ) ) {
	// 	console.log( 'hello from domready jarallax' );
	// 	initParallaxSections();
	// }

	if ( document.querySelector( '.laxxx' ) ) {
		console.log( 'hello from domready jarallax' );
		initParallaxSections();
	}
} );
