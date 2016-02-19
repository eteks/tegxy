(function() {

				var dlgtrigger = document.querySelector( '[data-dialog]' ),

					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
					// svg..
					morphEl = somedialog.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog1]' ),

					somedialog1 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog1' ) ),
					// svg..
					morphEl = somedialog1.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog1, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog3]' ),

					somedialog3 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog3' ) ),
					// svg..
					morphEl = somedialog3.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog3, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog4]' ),

					somedialog4 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog4' ) ),
					// svg..
					morphEl = somedialog4.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog4, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog5]' ),

					somedialog5 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog5' ) ),
					// svg..
					morphEl = somedialog5.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog5, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
			})();
                        
                        
                        /*form*/
                        (function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled--t' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
                                       
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '') {
					classie.remove( ev.target.parentNode, 'input--filled' );
					}
					if( ev.target.value.trim() != '') {
					classie.remove( ev.target.parentNode, 'input--filled' );
					classie.add( ev.target.parentNode, 'input--filled--t' );
					}
				}
			})();