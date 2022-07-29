import { jarallax } from 'jarallax';

console.log( 'jarallax invocation', jarallax );

const jarallaxParams = {
	type: 'scroll',
	speed: 0.85,
	imgSize: 'cover',
	imgPosition: '50% 50%',
};

function initParallaxSections( parentSelector, imageSelector ) {
	const parallaxSections = document.querySelectorAll( parentSelector );
	parallaxSections.forEach( function ( el ) {
		el.classList.add( 'jarallax' );
		el.querySelector( imageSelector ).classList.add( 'jarallax-img' );
	} );
	jarallax( parallaxSections, jarallaxParams );
}

document.addEventListener( 'DOMContentLoaded', function () {
	// Core/Cover
	if ( document.querySelector( '.wp-block-cover.lax' ) ) {
		initParallaxSections(
			'.wp-block-cover.lax',
			'.wp-block-cover__image-background'
		);
	}
} );
