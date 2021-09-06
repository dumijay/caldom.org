<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CalDOM JS</title>
    <meta name="description" content="An agnostic, reactive & minimalist (3kb) JavaScript UI library with direct access to native DOM." >
    
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <meta property="og:image" content="https://caldom.org/images/icons/android-chrome-512x512.png?v=1" />

    <link rel="stylesheet" href="css/normalize.css">              
    <link rel="stylesheet" href="css/common.css">              

    <link rel="stylesheet" href="css/intro.css">              
    <link rel="stylesheet" href="css/demos.css">              
    <link rel="stylesheet" href="css/expandable_areas.css">              
    <link rel="stylesheet" href="css/get_started.css">              
    <link rel="stylesheet" href="css/compatibility.css">              
    <link rel="stylesheet" href="css/footer.css">              

    <link rel="stylesheet" href="lib/ext/codemirror/codemirror.css">              
    <link rel="stylesheet" href="lib/ext/codemirror/theme/dracula.css">              

    <link rel="stylesheet" href="css/main.css">         

    <style callibOutput>

    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GG14G1YH61"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GG14G1YH61');
    </script>
</head>
<body>
    
    <section id="intro">
        <div class="content-wrapper">
            <img id="caldom-logo-img" src="images/caldom_logo.png" alt="CalDOM JS Logo" />

            <!-- <h1 class="logo-text">CalDOM JS</h2> -->
            <p id="tag-line">An agnostic, <span class="highlight">reactive</span> &amp; minimalist (3kb) JavaScript UI library with direct access to native DOM.</p>

            <div id="performance-boxes">

                <div class="performance-box">
                    <p>Just ~</p>
                    <p class="factor">
                        0.04x
                    </p>
                    <p>Slower than <span class="highlight">Vanilla JS</span></p>
                    <p class="behnchmark-method">at unit level</p>
                </div>

                <div class="performance-box">
                    <p>Loads ~</p>
                    <p class="factor">
                        925%
                    </p>
                    <p>faster than <span class="highlight">React</span></p>
                    <p class="behnchmark-method">at initialization</p>
                </div>

                <div class="performance-box">
                    <p>Achieve near</p>
                    <p class="factor">
                        Native
                    </p>
                    <p><span class="highlight">performant</span> DOM updates</p>
                </div>

            </div>

            <div id="benchmark-info">
                <!-- <p>Based on unit level benchmarks on Chrome 91.</p> -->
                <p><a href="benchmark" target="_blank">View benchmark results</a> against Vanilla JS, Vue JS, React JS, jQuery &amp; more.</p>
            </div>

            <div class="separator"></div>

            <p>Instead of pulling you into a library-specific magical world, CalDOM let you <span class="highlight">fully access the DOM</span> directly while keeping the <span class="highlight">reactivity</span>.</p>
            <p>A 2-in-1 virtual-DOM & no-virtual-DOM approach if you will.</p>
            <p>So you could take full advantage of native APIs &amp; mix it with other libraries to gain superior performance & flexibility in the development process.</p>

            <div id="cta-container">
                <a href="#get-started">
                    <button class="round-button primary"><span>🚀</span> Get Started</button>
                </a>

                <a href="docs/">
                    <button class="round-button"><span>📚</span> Documentation</button>
                </a>

                <a href="https://github.com/dumijay/CalDom" target="_blank">
                    <button class="round-button">
                        <span>
                            <svg height="16" width="16" viewBox="0 0 16 16" version="1.1"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                    </span> GitHub</button>
                </a>
            </div>

            <div class="separator"></div>
            <p id="pure-js"><span>Zero</span> tooling, <span>zero</span> dependencies, <span>zero</span> new syntax, just pure JS.</p>

            <div class="content-wrapper">
                <div class="expandable-container">
                    <p>Why CalDOM? <button data-type="Inspiration"></button></p>
                    
                    <div class="explanations" role="region">
                        <p>This was a lightweight jQuery alternative I made myself years ago & kept on improving it slowly. Also, I wanted to stay close to the native DOM API & vanilla JavaScript. Looking back, it paid really well. Then React & Vue JS happened.</p>
                        <p>In my opinion, the reactive UI approach bought a huge productivity improvement from the perspective of the developer. Also, it enabled a lot of beginner developers to navigate the programming landscape more easily.</p>
                        <p>However, this shift also moved people away from the core stuff that’s happening under the hood. As a result, sometimes we have to struggle a lot to find solutions within the library’s limits, which are sometimes hilariously dead simple & performant to implement with native APIs.</p>
                        <p>CalDOM tries to solve this by being <span class="highlight">100% interoperable</span> with the native DOM. I hope this will be helpful for developers with similar requirements.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="demos">
        
        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Hello World</h2>
                <p>Use it as a chainable DOM traverser and a manipulator, a lightweight jQuery alternative.</p>
                <p>We use <span class="highlight">_</span> (underscore) to access CalDOM.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
_("#output-1")
    .append(
        _("+h1").text("Hello World!")
    );

//Short append
_( "#output-1", _("+p", "This is CalDOM.") );</textarea>
                <div id="output-1" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <!-- <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Chainable, Minimalist, Essentials</h2>
            <p>CSS selectors, built-in XQuery, 
                <a href="./docs/#find">find()</a>, 
                <a href="./docs/#eq">eq()</a>, 
                <a href="./docs/#parent">parent()</a>, 
                <a href="./docs/#children">children()</a>, 
                <a href="./docs/#each">each()</a>, 
                <a href="./docs/#map">map()</a>, 
                <a href="./docs/#html">html()</a>, 
                <a href="./docs/#text">text()</a>, 
                <a href="./docs/#val">val()</a>, 
                <a href="./docs/#prop">prop()</a>, 
                <a href="./docs/#data">data()</a>, 
                <a href="./docs/#attr">attr()</a>, 
                <a href="./docs/#css">css()</a>, 
                <a href="./docs/#show">show()</a>, 
                <a href="./docs/#hide">hide()</a>, 
                <a href="./docs/#addClass">addClass()</a>, 
                <a href="./docs/#removeClass">removeClass()</a>, 
                <a href="./docs/#on">on()</a>, 
                <a href="./docs/#off">off()</a>, 
                <a href="./docs/#append">append()</a>, 
                <a href="./docs/#prepend">prepend()</a>, 
                <a href="./docs/#remove">remove()</a>, 
                <a href="./docs/#replace">replace()</a>, 
                <a href="./docs/#react">react()</a>
            </p>

            <div class="editor-container">
                <textarea class="live-code-js">
_("#output-1-1")
    .append(
        _("+h1")
            .text("Click Me!")
            .attr("data-prompt", "Aw! You Clicked Me!")
            .on("click", function(){
                var _elem = _(this);

                _elem
                    .text( _elem.attr("data-prompt")[0] )
                    .css({
                        color: "#0B1",
                        transition: "1s",
                        transform: "rotate(-15deg)"
                    });
            })
    );                </textarea>
                <div id="output-1-1" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div> -->

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Hello World - Reactive</h2>
                <p>Build reactive components. Use it as a lightweight React JS/Vue JS alternative.</p>
                <p>Not using classes, similar to React Hooks, but simpler.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
let app = _().react(
    {},
    {
        render: state =>
            _( "+h1", `Hello ${state.name}` ) //This is XSS safe
    }
)

_("#output-2", app );

//Edit below line to update state
app.state.name = "World Reactively 💥";</textarea>
                <div id="output-2" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Hello World - Reactive (ES6)</h2>
                <p>Also works as an extended ES6 class.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
class HelloWorld extends _.Component{
 
    constructor(state){
        super();
   
        this.react(state);
    }
 
    render(state){
        return _("+div", [ //Can pass children as an array too
            _( "+h1", "Hello " + state.name ),
            
            _( "+p", ["The time is: ", state.time] )
        ]);
    }

    tick(){
        this.state.time = new Date().toTimeString().substr(0, 8);
    }

    didMount(){
        setInterval( () => this.tick(), 1000);
    }
 
}

let app = new HelloWorld( { name: "World!", time: "" } );

_("#output-3", app); </textarea>
                <div id="output-3" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2 id="reactive-native-node">Reactive Native DOM Elements</h2>
                <p>Native DOM Node is a first-class citizen. Also, a CalDOM instance is just a wrapper around them.</p>
                <p>This agnostic interoperability allows for an infinite amount of powerful integrations.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
let app = _().react(
    {},
    {
        render: state =>{
            let div = document.createElement("div");

            let heading = document.createElement("h1");
            heading.textContent = `I'm a reactive ${state.name}`;

            div.appendChild(heading);

            //.elem gives you the direct Element
            div.appendChild( _("+h2", "💥💥💥").elem ) 

            return div;
        }
    }
)

_("#output-3-1", app );

app.state.name = "native DOM Element. 🙀";</textarea>
                <div id="output-3-1" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Make existing HTML reactive</h2>
                <p>Not a fan of rendering &amp; virtual-DOM thingies? Use CalDOM to update() pre-defined HTML content reactively.</p>
                <p>CalDOM's API is inspired by jQuery.</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-js">
let person_one = _("#person-1").react(
    {},

    {
        update: function(state, person){
            person.find(".name").text( state.name );
            person.find(".age").text( state.age );
        }
    }
)

//CalDOM batches these 2 state updates to only render once.
person_one.state.name = "Jane Doe";
person_one.state.age = 22;                </textarea>

                <div id="output-person" class="live-output" dontReset>
                    <div id="person-1">
                        <div>
                            <span>Name: </span>
                            <span class="name"></span>
                        </div>
                        <div>
                            <span>Age: </span>
                            <span class="age"></span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Summon the power of both worlds!</h2>
                <p>Efficiently update() the DOM directly and/or proceed to virtual-DOM render if it's more suitable.</p>
                <p>Use this.$ to hold direct DOM Node references. CalDOM keeps them in sync even when render() drastically alter the DOM structure.</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-js" dontReset>
class Person extends _.Component{
    constructor(){
        super();

        this.react({ name: "John", likes: ["SpongeBob"] });
    }

    render(state){
        return _("+div", [
            //Saving a reference to the direct DOM Element
            this.$.title = _( "+h1", `I'm ${state.name}` ).elem,
            
            _( "+p", "I like " + state.likes.join(" & ") )       
        ]);
    }

    update(state, person, changed_keys, changes_count){
        
        if( changes_count != 1 || !("name" in changed_keys) )
            // Too complex to update, proceed to render.
            return true;
            
        else //Update name directly using the DOM reference
            this.$.title
                .textContent = `I'm ${state.name} Directly. 🦄`;
    }
}

let user = new Person();
_("#output-4", user );

user.state.likes.push( "Hulk" ); //This is handled by render()

setTimeout( () => 
    user.state.name = "Jane" //This is handled by update()
, 1000);</textarea>

                <div id="output-4" class="live-output" ></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>

            <div class="separator invisible"></div>

            <div class="content-wrapper">
                <div class="expandable-container">
                    <p>There’s a lot going on here. In fact, this is the essence of CalDOM's approach. <button data-type="Explanation"></button></p>
                    
                    <div class="explanations" role="region">
                        <p>When there is an update() function defined, CalDOM calls it instead of calling the render(). This gives us a chance to avoid expensive virtual-DOM diffing and update the DOM directly. The first render() get executed regardless and note we ask CalDOM to remember the direct H1 element using this.$.title = _(…).elem there.</p>
                        <p>The state changes are batched because it’s obviously very expensive to update the DOM on each state variable change. CalDOM waits for main thread to be idle via requestAnimationFrame and then execute render()/update() efficiently.</p>
                        <p>Hence, the update() function retrieve two additional arguments as changed_keys & changes_count. This is what state variables changed & how many changes batched since the last render. These can be used to decide whether it’s suitable to update the DOM directly. If not, we can simply proceed with the render() by returning true. Since CalDOM’s basic building box is the native DOM Element, it can switch between render() & update() seamlessly.</p>
                        <p>In above example, the name change after the 1-second timeout is handled by the update() function. Thus, it execute this.$.title
    .textContent = “…” directly without any expensive virtual-DOM involvement.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2 id="use-html">Use HTML to create</h2>
                <p>Similar to JSX, but with vanilla HTML &amp; JavaScript. No compilers required.</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-js">
class Person extends _.Component{

    constructor(state){
        super();

        this.react( state );
    }

    render(state){

        //Using ES6 template literals.
        //You can use regular strings as well.
        return _(`
            <div style="display: flex">
                <img src="${state.avatar}" 
                    style="border-radius: ${state.radius}px" />

                <div style="flex: 1; margin-left: 1em">
                    <h1>Name: ${state.name}</h1>
                    <h1>Age: ${state.age}</h1>
                </div>
            </div>
        `);

        //Look out for XSS, use sanitized inputs with HTML.
        //Or use XSS safe .text(), .append() or its short form: _(target, "XXS Safe Text").
    }
}

let app = new Person({ 
    name: "John Doe", 
    age: 24, 
    avatar: "images/avatar.png",
    radius: 10
});

_("#output-5", app);                </textarea>

                <div id="output-5" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2 id="web-components">Supercharge Native Web Components</h2>
                <p>CalDOM integrates seamlessly with <a href="https://developer.mozilla.org/en-US/docs/Web/Web_Components" target="_blank">Web Components</a>.</p>
                <p>Use CalDOM to create stateful &amp; reactive Web Components. It also accepts web components as inputs.</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-js">
class CustomElement extends HTMLElement{
    connectedCallback(){
        
        let title = _().react(
            { msg: "Hello World!" },
            {
                render: state => 
                    _( "+h2", state.msg )
            }
        );

        // Appending H2 as a child, keeping root intact
        // this = <custom-element>
        _( this, title );

        //Just a shortcut to access state easily
        this.state = title.state;
    }
    
    doSomething(){
        alert("Cool Eh!");
    }
}

//Registering custom element.
customElements.define("custom-element", CustomElement);

let hello = document.createElement("custom-element");
document.getElementById("output-5-1").appendChild( hello );

hello.state.msg = "I'm a Reactive, Stateful & Native Web Component. 🔥";

//Creating a new web component using CalDOM
_("#output-5-1").prepend( _("+custom-element") )</textarea>

                <div id="output-5-1" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator invisible"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <p>You can use these custom elements in HTML code natively as usual.</p>
                <p>Create future-ready declarative modern web apps. Currently, native browser support for <a href="https://caniuse.com/custom-elementsv1" target="_blank">Web Components</a> is at 95% &amp; expected to play a primary role in future web development.🔮</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-html">
<p>Click below text</p>

<custom-element onclick="doSomething()">
</custom-element>

<custom-element onclick="state.msg = 'Native Web Components are awesome! ✌️'">
</custom-element></textarea>

                <div id="output-5-2" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>You can even make jQuery reactive</h2>
                <p>Basic building box of CalDOM is just native Node/Element. Thus, making it compatible with almost any DOM library on the web.</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-js">
class HelloJquery extends _.Component{

    constructor(){
        super();

        this.react({ prompt: "" });
    }

    render(state){
        //Creating element & attaching click event using jQuery
        return $("<h1></h1>")
            .text( state.prompt )
            .click( () => state.prompt = "Hello from jQuery!")[0];
    }
}

let app = new HelloJquery();
_("#output-6", app);

app.state.prompt = "Click Me!" </textarea>

                <div id="output-6" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>


        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Todo App - Non Reactive</h2>
                <p>CalDOM does not dictate your coding style or approach. It's super flexible &amp; scalable from a single element to large nested implementations.</p>
            </div>

            <div class="editor-container">
                
                <textarea class="live-code-js">
_("#output-7", [
    
    _("+input")
        .attr({
            id: "todo-input",
            type: "text",
            placeholder: "Type task here"
        }),

    _("+button", "Add")
        .on("click", function(){
            let task = _("#todo-input").val()[0];

            _( "#todo-list", _("+li", task ) )
        }),
    
    _("+ol").attr("id", "todo-list"),

    _("+button", "Clear")
        .on("click", function(){
            _("#todo-list li").remove();
        })
])</textarea>

                <div id="output-7" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Todo App - Reactive</h2>
                <p>CalDOM renders a virtual-DOM and efficiently updates only changed elements in the actual DOM.</p>
                <p>Multiple renders are batched to only run once.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
class TodoApp extends _.Component{

    constructor(){
        super();

        this.react({
            items: [],
            input: ""
        });
    }

    render(state){
        return _("+div", [
            _("+input")
                .attr("placeholder", "Type task here")
                .on(
                    "change", 
                    e => state.input = e.target.value 
                ),

            _("+button", "Add")
                .on( "click", () => this.addItem() ),

            _(
                "+ol", 
                state.items.map( //Passing an array
                    item => _("+li", item)
                )
            ),
            
            _("+button", "Clear")
                .on( "click", () => this.clearAll() )            
        ])
    }

    addItem(){
        this.state.items.push( this.state.input );
    }

    clearAll(){
        this.state.items = [];
    }
}

_( "#output-8", new TodoApp() );</textarea>
                <div id="output-8" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>Todo App - Multiple Nested Reactive Components</h2>
                <p>CalDOM plays nicely with nested reusable reactive components and takes care of all DOM updates efficiently.</p>
                <p>No matter how deeply nested, components only get re-rendered if their state is changed.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
// ToDo Item Component
class ToDoItem extends _.Component{

    constructor(state){
        super();

        this.react( state );
    }

    render(state){

        //Saving a reference to li element
        return this.$.li = _("+li", state.task)
            .css({
                textDecoration: state.finished 
                    ? "line-through" 
                    : "none" 
            })
            .on( "click", () => this.onClick() )
            .elem;
    }

    update(state){

        //Directly changing CSS of the native li element
        this.$.li.style.textDecoration = 
            state.finished 
                ? "line-through" 
                : "none"
    }

    onClick(){
        this.state.finished = !this.state.finished;
    }

}

//Todo App Component
class TodoApp extends _.Component{

    constructor(){
        super();

        this.react({ items: [], input: "" });
    }

    render(state){
        return _("+div", [
            
            _("+input")
                .attr("placeholder", "Type task here")
                .on(
                    "change", 
                    e => state.input = e.target.value 
                ),

            _("+button", "Add")
                .on( "click", () => this.addItem() ),

            //Appending ToDo Item components array
            _("+ol", state.items),
            
            _("+button", "Clear Finished")
                .on( "click", () => this.clearFinished() ),

            _("+button", "Clear All")
                .css("marginLeft", "1em")
                .on( "click", () => this.clearAll() )  
        ])
    }

    addItem(){
        this.state.items.push(

            new ToDoItem({ 
                task: this.state.input,
                finished: false
            })

        );
    }

    clearAll(){
        this.state.items = [];
    }

    clearFinished(){
        for( let i = 0; i < this.state.items.length; i++ ){
            let item = this.state.items[i];

            if( item.state.finished )
                this.state.items.splice(i--, 1);
        }
    }

}

_( "#output-9", new TodoApp() );</textarea>
                <div id="output-9" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>


        <div class="demo-container">
            
            <div class="content-wrapper">
                <h2>CalDOM also runs on Node JS</h2>
                <p>Use CalDOM for server side rendering.</p>
                <p>You can use a library like <a href="https://github.com/jsdom/jsdom" target="_blank">JS-DOM</a> to implement a browser context on the server.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js" dontRun>
const { JSDOM } = require("jsdom"); 

//Set window in the global scope
window = new JSDOM().window;

const _ = require("caldom");

class ServerApp extends _.Component{

    constructor(){
        super();

        this.react( { msg: "" } );
    }

    render(state){
        return _("+p", state.msg)
            .css("color", "#199646")
    }
}

let app = new ServerApp();
_("body", app);

app.react( { msg: "Hello from NodeJS " + process.version  } );

//Saving generated HTML by the component to a file
require("fs").writeFileSync(
    "static_content.html", 
    window.document.body.innerHTML 
);</textarea>
            </div>
        </div>

        <div class="demo-container">
            <div class="content-wrapper">
                <p>Fetching and rendering content generated in the server.</p>
            </div>

            <div class="editor-container">
                <textarea class="live-code-js">
class ClientApp extends _.Component{

    constructor(){
        super();

        this.react( { static_html: null } );
    }

    render(state){
        if( !state.static_html ){
            return _("+div", "Loading...")
        }
        else{
            return _( state.static_html )
        }
    }

    //Lazy loading
    didMount(){
        fetch( "static_content.html" )
            .then( 
                response => response.text().then(
                    content => {
                        this.state.static_html = content;
                    }
                ) 
            );
    }
}

_( "#output-10", new ClientApp() );</textarea>
                <div id="output-10" class="live-output"></div>
            </div>
            <button class="run-button" title="CTRL + Enter">Run</button>
        </div>

        <div class="separator"></div>

        <div class="center content-wrapper padded">
            <p>Please note that we did not use classes to keep the examples simple without HTML & CSS. But in practice, always prefer using external CSS over directly setting CSS on elements due to obvious reasons. CalDOM has <a href="docs/#addClass" target="_blank">addClass()</a>, <a href="docs/#removeClass" target="_blank">removeClass()</a> methods to facilitate this.</p>

            <div class="separator"></div>

            <p>Multiple element instances, built-in XPath support &amp; there is much more</p>
            <a href="docs/">View more examples in the Documentation</a>
        </div>

    </section>

    <section id="get-started">
        
        <div class="content-wrapper">

            <h2>Get Started</h2>

            <h3>CDN</h3>
            <textarea class="read-only-code-html">
 <script src="https://unpkg.com/caldom"></script></textarea>  

            <div class="separator"></div>

            <h3>Use it as a module</h3>

            <textarea class="read-only-code-shell">npm install caldom</textarea>

            <div class="separator"></div>

            <textarea class="read-only-code">
//CalDOM also runs on Node JS with js-dom
const _ = require('caldom');


//RequireJS
requirejs( ["caldom"], function(_){} );


//ES6 Module
import _ from "./dist/caldom.min.mjs.js";
            </textarea>

            <div class="separator"></div>

            <div class="center padded">
                <a href="https://github.com/dumijay/CalDom/releases/latest" target="_blank">Download Production & Development Sources</a>
            </div>

        </div>
    
    </section>

    <section id="compatibility">
        <div class="content-wrapper">
            <h2>Browser Compatibility</h2>

            <p>CalDOM is <a href="./tests/" target="_blank">extensively tested</a> on Chromium. Firefox & other browsers to be tested specifically. CalDOM is using native, time-tested official DOM API under the hood. Thus, it should work just fine with any modern browser. Minimum browser support based on MDN compatibility specs is listed below.</p>

            <ul>
                <li>Firefox 4+</li>
                <li>Chrome 8+</li>
                <li>Edge 12+</li>
                <li>IE 9+</li>
                <li>Opera 12.1+</li>
                <li>Safari 6.1+</li>
                <li>Android WebView 3+</li>
                <li>Android Chrome 18+</li>
                <li>Android Firefox 4+</li>
                <li>Android Opera 12.1+</li>
                <li>iOS Safari 5+</li>
                <li>Samsung Internet 1+</li>
            </ul>

            <p>Except,</p>
            
            <ul>
                <li><a href="docs/#react">.react()</a> uses <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Proxy" target="_blank">Proxy</a> to monitor state changes unless watch is explicitly set to false. Supported since ~2016: Chrome 49+, Firefox 18+, Opera 36+, Safari 10+, Samsung Internet 5+, IE not supported. Use a <a href="https://github.com/GoogleChrome/proxy-polyfill" target="_blank">Polyfill</a> or call react() after state changes for older browsers. (refer <a href="docs/#react">documentation</a>)</li>
                <li>XPath not supported in IE. <a href="https://developer.mozilla.org/en-US/docs/Web/API/Document/evaluate" target="_blank">MDN</a></li>
            </ul>

            <h3>Limitations</h3>
            <p>CalDOM does not address bugs and loosely implemented web standards of legacy browsers like IE.</p>
        </div>
    </section>

    <?php echo file_get_contents( "./_includes/footer.html" ); ?>

    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js" callibDontPack></script> 
    <script src="lib/ext/jquery.min.js"></script>              

    <script type="text/javascript" src="lib/dom/caldom/caldom_1.0.7.js?v=1"></script>              

    <script src="lib/ext/codemirror/codemirror.js"></script>              
    <script src="lib/ext/codemirror/mode/javascript.js"></script>              
    <script src="lib/ext/codemirror/mode/xml.js"></script>              
    <script src="lib/ext/codemirror/mode/htmlmixed.js"></script>              

    <script src="js/demos.js"></script>              
    <script src="js/expandable_areas.js"></script>              
    <script src="js/get_started.js"></script>              

    <script src="js/main.js"></script>              

    <script callibOutput>
    </script>
</body>
</html>