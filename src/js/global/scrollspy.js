const options = {
	threshold: 0.24,
};

const initScrollSpy = () => {
	const selectors =
		'.site-footer .widget_block > section, .entry-content > section';
	const observedElements = document.querySelectorAll( selectors );
	const pageNav = document.querySelector( '.page-nav' );
	let activeItem = null;

	const updatePageNav = ( el ) => {
		if ( el.tagName === 'SECTION' ) {
			if ( activeItem ) {
				activeItem.classList.remove( 'active' );
			}

			if ( activeItem ) {
				activeItem.classList.remove( 'active' );
			}

			const heading = el.querySelector( 'h2' );

			if ( heading ) {
				console.log( '»»»»»»', heading.id );
				activeItem = pageNav.querySelector(
					`a[href="#${ heading.id }"]`
				);
			}

			if ( activeItem ) activeItem.classList.add( 'active' );
		}
	};

	const inViewCallback = ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'in-view' );
				entry.target.classList.remove( 'out-of-view' );
				if ( pageNav ) updatePageNav( entry.target );
			} else {
				entry.target.classList.remove( 'in-view' );
				entry.target.classList.add( 'out-of-view' );
			}
		} );
	};

	const observer = new IntersectionObserver( inViewCallback, options );
	observedElements.forEach( ( element ) => {
		const dataDelay = element.getAttribute( 'data-delay' );
		element.classList.add( 'out-of-view' );
		element.style.transitionDelay = dataDelay + 'ms';
		observer.observe( element );
	} );
};

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	if ( ! document.body.classList.contains( 'is-mobile' ) ) {
		initScrollSpy();
	}
} else {
	document.addEventListener( 'DOMContentLoaded', function () {
		if ( ! document.body.classList.contains( 'is-mobile' ) ) {
			initScrollSpy();
		}
	} );
}
