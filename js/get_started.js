var GetStarted = function(config){
    this.init(config);
}

GetStarted.prototype = {

    init: function(config){
        _(".read-only-code").each(function(elem){

            CodeMirror.fromTextArea(
                elem,
                {
                    mode: "javascript",
                    theme: "dracula",
                    readOnly: true,
                    viewportMargin: Infinity
                }
            );

        });

        _(".read-only-code-html").each(function(elem){

            CodeMirror.fromTextArea(
                elem,
                {
                    mode: "html",
                    theme: "dracula",
                    readOnly: true,
                    viewportMargin: Infinity
                }
            );

        });

        _(".read-only-code-shell").each(function(elem){

            CodeMirror.fromTextArea(
                elem,
                {
                    mode: "shell",
                    theme: "dracula",
                    readOnly: true,
                    viewportMargin: Infinity
                }
            );

        });
    }

}