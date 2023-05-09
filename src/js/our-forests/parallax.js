import { jarallax } from 'jarallax';

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	initParallaxSections();
} else {
	document.addEventListener( 'DOMContentLoaded', initParallaxSections );
}

const jarallaxParams = {
	type: 'scroll',
	speed: 0.85,
	imgSize: 'cover',
	imgPosition: '50% 50%',
};

function initParallaxSections() {
	const parentSelector = '.wp-block-cover.lax';
	const imageSelector = 'img';
	const parallaxSections = document.querySelectorAll( parentSelector );
	if ( ! document.body.classList.contains( 'is-mobile' ) ) {
		parallaxSections.forEach( function ( el ) {
			el.classList.add( 'jarallax' );
			el.querySelector( imageSelector ).classList.add( 'jarallax-img' );
		} );
		jarallax( parallaxSections, jarallaxParams );
	}
}
