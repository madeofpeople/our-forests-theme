const options = {
	threshold: 0.24,
};

const initScrollSpy = () => {
	const selectors = '.entry-content > section:not(.social)';
	const observedElements = document.querySelectorAll( selectors );
	const pageNav = document.querySelector( '.page-nav' );
	let activeItem = null;

	const updatePageNav = ( el ) => {
		if ( activeItem ) {
			activeItem.classList.remove( 'active' );
		}

		if ( activeItem ) {
			activeItem.classList.remove( 'active' );
		}

		const heading = el.querySelector( 'h2' );

		if ( heading ) {
			activeItem = pageNav.querySelector(
				`.wp-block-tiptip-hyperlink-group-block[href="#${ heading.id }"]`
			);
			console.log( activeItem, heading.textContent );
		}

		if ( activeItem ) activeItem.classList.add( 'active' );
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
