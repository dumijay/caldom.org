var Demos = function(config){
    
    this.init(config);

}

Demos.prototype = {

    init: function(config){
        this.config = config || {};

        this.initCodeEditors();
    },

    initCodeEditors: function(){
        var _this = this;

        _(".live-code-js").each(function(elem){

            var _elem = _(elem);
            
            var read_only = _elem.attr("dontRun")[0] != null

            var cmDoc = CodeMirror.fromTextArea(
                elem,
                {
                    mode: "javascript",
                    theme: "dracula",
                    lineNumbers: false,
                    viewportMargin: Infinity,
                    readOnly: read_only
                }
            );

            // cmDoc.on("change", function(doc){
            //     _this.onEditorChange(doc);
            // });

            if( !read_only ){
                cmDoc.on("keypress", function(doc, e){
                    if( e.keyCode == 13 && e.ctrlKey ){
                        _this.onJSEditorChange(doc);
                    }
                });

                _elem.parent(".demo-container").find(".run-button")
                    .on("click", function(e){
                        _this.onJSEditorChange( _(e.target).parent(".demo-container").find(".CodeMirror").elems[0].CodeMirror );
                    })

                _this.onJSEditorChange( cmDoc );
            }
        });

        _(".live-code-html").each(function(elem){

            var _elem = _(elem);
            
            var read_only = _elem.attr("dontRun")[0] != null

            var cmDoc = CodeMirror.fromTextArea(
                elem,
                {
                    mode: "htmlmixed",
                    theme: "dracula",
                    lineNumbers: false,
                    viewportMargin: Infinity,
                    readOnly: read_only
                }
            );

            // cmDoc.on("change", function(doc){
            //     _this.onEditorChange(doc);
            // });

            if( !read_only ){
                cmDoc.on("keypress", function(doc, e){
                    if( e.keyCode == 13 && e.ctrlKey ){
                        _this.onHTMLEditorChange(doc);
                    }
                });

                _elem.parent(".demo-container").find(".run-button")
                    .on("click", function(e){
                        _this.onHTMLEditorChange( _(e.target).parent(".demo-container").find(".CodeMirror").elems[0].CodeMirror );
                    })

                _this.onHTMLEditorChange( cmDoc );
            }
        });
    },

    onJSEditorChange: function(doc){
        var text_area = doc.getTextArea();

        var _output = _(text_area)
            .parent(".editor-container")
            .find(".live-output")
            
        if( _output.attr("dontReset")[0] == null ) _output.html('');
        else _output.find(".live-code-js-error").remove();

        try{
            new Function( doc.getValue() )();
        }
        catch(e){
            console.log(e);
            
            _output.append(
                _("+div")
                    .attr("class", "live-code-js-error")
                    .text(
                        e.toString()
                    )
            )
        }
        
    },

    onHTMLEditorChange: function(doc){
        var text_area = doc.getTextArea();

        var _output = _(text_area)
            .parent(".editor-container")
            .find(".live-output")
            
        if( _output.attr("dontReset")[0] == null ) _output.html('');
        else _output.find(".live-code-js-error").remove();

        _output.html( doc.getValue() );
        
    }

}