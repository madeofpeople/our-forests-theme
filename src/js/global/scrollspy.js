const options = {
	threshold: 0,
};

const initScrollSpy = () => {
	const selectors = '.entry-content > section:not(.social)';
	const observedElements = document.querySelectorAll( selectors );
	const pageNav = document.querySelector(
		'.wp-block-site-functionality-page-nav'
	);
	let activeItem = null;

	const updatePageNav = ( activeSection ) => {
		const heading = activeSection.querySelector( 'h2' );
		let headingId;
		if ( heading && heading.id ) {
			headingId = heading.id;

			// if (
			// 	! activeItem ||
			// 	headingId !==
			// 		activeItem.getAttribute( 'href' ).split( '#' )[ 1 ]
			// ) {
			if ( activeItem ) activeItem.classList.remove( 'active' );
			activeItem = pageNav.querySelector(
				`.wp-block-button__link[href="#${ headingId }"]`
			);
			if ( activeItem ) activeItem.classList.add( 'active' );
		}
	};

	const inViewCallback = ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'in-view' );
				entry.target.classList.remove( 'out-of-view' );
				if ( entry.target && entry.target.querySelector( 'h2' ) ) {
					console.log(
						'»»»»»»»',
						entry.target.querySelector( 'h2' ).id
					);
				}
				updatePageNav( entry.target );
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
