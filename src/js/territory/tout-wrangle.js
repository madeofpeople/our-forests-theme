if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	tweakLinkedTouts();
} else {
	document.addEventListener( 'DOMContentLoaded', tweakLinkedTouts );
}

function tweakLinkedTouts() {
	const linkedTouts = document.querySelectorAll(
		'.wp-block-site-functionality-tout-linked'
	);
	linkedTouts.forEach( ( tout ) => {
		const title = tout.querySelector( '.tout__title' );
		const wrapper = document.createElement( 'div' );
		const link = tout.querySelector( '.tout__link' );
		wrapper.classList.add( 'title__wrapper' );
		link.prepend( wrapper );
		wrapper.append( title );
	} );
}
