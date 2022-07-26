/**
 * Site JS
 */

import './global';
import './template-tags';
import './templates';
import './blocks';

function initScrollSpy( selectors ) {
	const observedElements = document.querySelectorAll( selectors );
	const options = {
		threshold: 0.5,
	};

	const inViewCallback = ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'in-view' );
				entry.target.classList.remove( 'out-of-view' );
				console.log( 'inView | »', entry.target );
			} else {
				entry.target.classList.remove( 'in-view' );
				entry.target.classList.add( 'out-of-view' );
				console.log( 'outOfView | »', entry.target );
			}
		} );
	};

	const observer = new IntersectionObserver( inViewCallback, options );

	observedElements.forEach( ( element ) => {
		const dataDelay = element.getAttribute( 'data-delay' );
		element.classList.add( 'out-of-view' );
		element.style.transitionDelay = dataDelay + 'ms';
		observer.observe( element ); // run the observer
	} );
}

document.addEventListener(
	'DOMContentLoaded',
	initScrollSpy( '.entry-content > section, .site-header' )
);
