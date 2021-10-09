( function ( blocks, element, blockEditor, i18n ) {
    var el = element.createElement;
    var useBlockProps = blockEditor.useBlockProps;
    var __ = i18n.__;
 
    var blockStyle = {
        backgroundColor: '#900',
        color: '#fff',
        padding: '20px',
    };
 
    blocks.registerBlockType( 'gutenberg-dhren/stripe-forms', {
        apiVersion: 2,
        title: __('Stripe Forms', 'stripe-forms-gutemberg'),
        icon: 'universal-access-alt',
        category: 'design',
        example: {},
        edit: function () {
            var blockProps = useBlockProps( { style: blockStyle } );
            return el(
                'p',
                blockProps,
                'Hello World (from the editor).'
            );
        },
        save: function () {
            var blockProps = useBlockProps.save( { style: blockStyle } );
            return el(
                'p',
                blockProps,
                'Hello World (from the frontend).'
            );
        },
    } );
} )( window.wp.blocks, 
    window.wp.element, 
    window.wp.blockEditor,
    window.wp.i18n
     );