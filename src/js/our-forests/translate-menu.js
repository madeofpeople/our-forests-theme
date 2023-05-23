const initTranslateMenu = () => {
	const tm = document.getElementById( 'translate_menu' );
	document.body.addEventListener( 'click', ( e ) => {
		const clickedElement = e.target;
		if ( ! clickedElement.closest( '.translate_menu' ) ) {
			tm.classList.remove( 'open' );
		}
	} );
	tm.querySelector( '.open-lang-menu' ).addEventListener( 'click', ( e ) => {
		e.preventDefault();
		tm.classList.toggle( 'open' );
	} );
};

if (
	( 'complete' === document.readyState ||
		'loading' !== document.readyState ) &&
	! document.documentElement.doScroll
) {
	initTranslateMenu();
} else {
	document.addEventListener( 'DOMContentLoaded', function () {
		initTranslateMenu();
	} );
}
