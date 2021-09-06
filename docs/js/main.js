
function main(){

    _("#nav-container").append( _(".navigation-container") );

    _("#api-reference-container")
        .prepend(
            _(".content-wrapper > h1, .content-wrapper > .separator")
        );

    _("textarea").each(function(elem){
        var cmDoc = CodeMirror.fromTextArea(
            elem,
            {
                mode: "javascript",
                theme: "dracula",
                lineNumbers: false,
                viewportMargin: Infinity,
                readOnly: true
            }
        );
    });

    new CalNavigation();
}

main();