( function ( blocks, element, i18n ) {
    var el = element.createElement;
    var useBlockProps = blockEditor.useBlockProps;
    var __ = i18n.__;
 
    var blockStyle = {
        backgroundColor: '#000',
        color: '#fff',
        padding: '20px',
    };
 
    blocks.registerBlockType( 'gutemberg-dhren/stripe-forms', {
        title: __('Stripe Forms', 'stripe-forms-gutemberg'),
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function () {
           return el (
            'p',
            { style: blockStyle },
            'Stripe form'
            );
        },
        save: function () {
            return el ( 
                'iframe',
                { 
                    src:'',
                    frameborder:0,
                } );
            
        },
    } );
} )( window.wp.blocks, 
    window.wp.element,
    window.wp.i18n
     );