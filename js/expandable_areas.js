let ExpandableArea = function(button){

    return _(button).react({}, {

        render: function(state, button){

            return _("+button", (state.expanded ? "Hide " : "See ") + button.attr("data-type") )
                .attr("data-type", button.attr("data-type"))
                .attr("area-expanded", state.expanded ? "true" : "false" )
                .on("click", function(){
                    button.state.expanded = !button.state.expanded;

                    if( button.state ){
                        _(this.parentElement.parentElement).find("[role=region]")
                            .attr("area-expanded", state.expanded ? "true" : "false" );
                    }
                });
        }}
    );

}

function initExpandableAreas(){
    _(".expandable-container").each(function(container){
        container.firstElementChild.appendChild( ExpandableArea(container.firstElementChild.firstElementChild).elem );
    });
}