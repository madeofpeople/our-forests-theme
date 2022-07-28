/**
 * Site JS
 */

import './global';
import './template-tags';
import './templates';
import './blocks';

function initScrollSpy( selectors ) {
	const observedElements = document.querySelectorAll( selectors );
	const pageNav = document.querySelector( '.site-header .page__nav' );
	let activeItem = null;
	const options = {
		threshold: 0,
	};

	const updatePageNav = ( anEl ) => {
		console.log('» updatePageNav »', anEl)
		if ( anEl.tagName === 'SECTION' ) {
			if ( activeItem ) {
				activeItem.classList.remove( 'active' );
			}

			if ( activeItem ) {
				activeItem.classList.remove( 'active' );
			}

			console.log(
				'\t| updatePageNav | » |',
				anEl,
				anEl.querySelector( 'h2' )
			);

			activeItem = pageNav.querySelector(
				`a[href="#${ anEl.querySelector( 'h2' ).id }"]`
			);

			activeItem.classList.add( 'active' );
		}
	};

	const inViewCallback = ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'in-view' );
				entry.target.classList.remove( 'out-of-view' );
				console.log( 'inView | »', entry.target, entry.target.tagName );
				updatePageNav( entry.target );
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
